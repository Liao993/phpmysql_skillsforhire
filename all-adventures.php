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
    
    <main>
       <!--image with Words on it-->
   
        <div>
            <img src="canoe.jpeg" alt="Canoe" style="max-width:100%;height:auto;">
            <div class="centered">Come Experience Canada</div>
        </div>  
   


    <?php
        echo "<h1>Upcoming Advantures</h1>";
        echo "<hr>";
        $sql = "select heading, tripdate, duration, summary from tripadmin";
        $result = $conn->query($sql);

         if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                 echo "<div>";
                 echo "<h1 class='green'>" . $row["heading"] . "</h1>" ;
                 echo "<p>Date :" . $row["tripdate"] . "</p><br>";
                 echo "<p>Duration : " . $row["duration"] . " Days</p><br>";
                 echo "<h2>Summary</h2><br>";
                 echo "<p>" . $row["summary"] . "</p><br>";
                 //Create variable for row selected
                                
             }
         } else {
             echo "0 results";
         }
 
$conn->close();

?>






       
        

   
</body>
</html>


