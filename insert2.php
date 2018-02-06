
<?php

 include 'connect2.inc.php';

 $title = $_POST['title'];
 $pages = $_POST['pages'];
 $author =  $_POST['author'];
 $year = $_POST['year'];

   $sql1 = "INSERT INTO bookinfo (title,pages,author,year) VALUES ('$title','$pages', '$author','$year')";
    $result = $conn -> query($sql1);

    if($result){
    echo "Success";
    echo "<BR>";
    echo "<a href='registration.php'>Back to main page<a/>";
    }else{
    echo "Error";
    }
    
   //header("Location: registration.php?error=empty"); 
 

?>