<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns = "http://www.w3.org/1999/xhtml">
   <head>
      <title>Form Validation</title>
   </head>
   
   <body>
   <?php 
    extract($_POST);
   
    $mysql_host='localhost';
    $mysql_user='mallemand1';
    $mysql_password='cars&5767';
    $mysql_database='mallemand1?assnt3';
    
    // Connecting to database
    
   $con = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    // Test the connection
    if ($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }
    echo 'connection success';
	
	
   if ($userOption == "add"){
       
       
       
       $sql = "INSERT INTO Inventory(title, author, ISBN, Publisher, Year)
                VALUES ('$_POST[title]','$_POST[author]','$_POST[ISBN]','$_POST[Publisher]','$_POST[Year]')";
        
        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
            
            $con->close();
                
        
        
   }
	#if (file_exists($myFile)) {
	#	print "Adding to database <p>\n ";
	#}	else {
		#print "We are unable to find the database <p>\n ";
	#}
	
	#$fh = fopen($myFile, 'a') or die("Cannot access database <br>");
	#fwrite($fh, $title."%");
	#fwrite($fh, $author."%");
	#fwrite($fh, $ISBN."%");
	#fwrite($fh, $Publisher."%");
	#fwrite($fh, $Year."%");
	#fwrite($fh, "\n");
   #}
   
 #  else if ($userOption == "remove"){
#	   echo "Removing the entry <p>\n ";
//  ------------Removal starts here ------------	   
#	   $arrayPattern = "/$title%.*$author.*$ISBN.*$Publisher.*$Year.*/i";
#echo "Now looking for $arrayPattern <br>";
/*	   $bookDatabase = fopen($myFile, "r+");
	   $bookArray = array();
 
	while(!feof($bookDatabase)){
       $line = fgets($bookDatabase);
	   echo "Examining $line <br>"; 

       if (preg_match($arrayPattern, $line)){
           
       
            echo "GOT $line and I am skipping it<p>";
            // $line = str_replace('\"', '', $line);
        } else { echo "I am keeping this<br>";
                 array_push($bookArray, $line);
        }
        }

      fclose($bookDatabase);      
 
echo "Here is what I collected:<br>";
print implode("<br>", $bookArray);

echo "Now I will write what I collected into a file but will make it a different file so that I do not destroy the original while I am experimenting";
$newfile=$myFile . "_2";
$fh = fopen("$newfile", 'w') or die("Cannot access database <br>");
	foreach($bookArray as $book) { fwrite($fh, "$book"); }
fclose($fh);
echo "Checkout the file $newfile to see what it contains now <p>";
   }
 // --------------Removal ends here ------------
 */ 
   
   
   /*else if ($userOption == "search"){
	  print "Searching the database <p>\n ";
       <?php
    if(isset($_GET['keywords'])){
        
        $keywords = $db->escape_string($_GET['keywords']);
        
        $query = $db->query("
            SELECT title, author, ISBN, Publisher, Year
            FROM Inventory
            WHERE body LIKE '%{keywords}%'
            OR title LIKE '%{keywords}%'
        ");
    }
 
 ?>  
 
 <div class="result-count">
     Found <?php echo $query->num_rows; ?> results.
 </div>
 
 <?php 
 
 if($query->num_rows){
     while($r = $query->fetch_object()){}
     ?>
        <div class="result">
            <a href="#"><?php echo $r->title; ?></a>
        </div>
 }*/
	 
   ?>
   
   
 </html>