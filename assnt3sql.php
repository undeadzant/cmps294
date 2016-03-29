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
  // set up statement for users to view the entire database
   else if ($userOption == "viewDB"){
       $sql = "SELECT title, author, ISBN, Publisher, Year FROM Inventory";
       $result = $con->query($sql);
       
       if ($result->num_rows > 0){
           echo "<table><tr><th>Title</th><th>Author</th><th>ISBN</th><th>Publisher</th><th>Year</th></tr>";
           while ($row = $result->fetch_assoc()){
               echo "<tr><td> " . $row["title"]. " </td><td> " . $row["author"]. " </td><td>" . $row["ISBN"]. " </td><td> " .$row["Publisher"] . " </td><td> " . $row["Year"]. "</td></tr>";
               
           }
           echo "</table>";
       } else {
           echo "0 results";
       }
       $con->close();
       
   }
   // user puts in the ISBN number to remove records
   else if ($userOption == "del"){
       $sql = "DELETE FROM Inventory WHERE ISBN = '$_POST[ISBN]'";
       
       if ($con->query($sql) === TRUE) {
           echo "Successfully removed the book from Inventory";
       } else {
           echo "Error with removing the entry: " . $conn->error;
       }
       $conn->close();
       
   }
	
   
    
 

   
   
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
   <br>
   <br>
   <hr>
   <a href="assnt3formsql.html">Home! </a>
   
   
   
 </html>