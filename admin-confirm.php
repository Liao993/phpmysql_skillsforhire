
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css">
    <title>Halifax Canoe and Kayak</title>

  </head>
  <body>
<?php
include("header.php");

?>
<div class=center>
<h2>Admin - Add Adventure</h2>
<hr>
</div>

<?php


include("database.php");


echo "<div class=center>";
$heading = $_POST["heading"];  
$tripdate = $_POST["tripdate"];
$duration = $_POST["duration"];
$summary = $_POST["summary"];

$sql = "INSERT INTO tripadmin (heading, tripDate, duration, summary) VALUES ($heading, $tripdate, $duration, $summary)";



echo " <a href='all-adventures.php'>View All Adventures</a><br>";

include("footer.php");

if (mysqli_query($conn, $sql)) {
  echo "Data has added successfully to DB";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$conn->close();





?>



</body>
</html>

