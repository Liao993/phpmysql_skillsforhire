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
      include("database.php");
    ?>

<div class=center>
<h2>Admin - Add Adventure</h2>
<hr>
    <form action="admin-confirm.php" method="post">
<p>Input details about the trip</p>
<br>
<label for="heading">Heading</label>
<input type="text" name="heading"> <br> <br>
<label for="tripdate">Trip Date</label>
<input type="date" id="tripdate" name="tripdate"> <br> <br> 
<label for="duration">Duration</label>
<input type="text" name="duration"><br><br>
<label for="summary">Summary</label>
<input type="text" name="summary"><br><br>

<input type="submit" value="Submit">
 
     
</form> 
</div>
<div class=right>





</div>
  


  
<?php 
include("footer.php");
$conn->close();
?>


  </body>
</html>