<?php

 include 'connect2.inc.php';

$sql1 = "SELECT * FROM bookinfo";
$result = $conn -> query($sql1);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "title " . $row["title"]. " Pages " . $row["pages"]. " " . " author " . $row["author"]. " year " . $row["pubyear"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>