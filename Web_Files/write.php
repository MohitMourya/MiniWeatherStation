<?php
   require_once 'config.php';
   if( $_GET["temp"] || $_GET["hum"])
   {
      $sql = "INSERT INTO weather (temp, hum) VALUES (?,?)";
      if($stmt = mysqli_prepare($link, $sql))
      {
          mysqli_stmt_bind_param($stmt, "ss", $_GET["temp"], $_GET["hum"]);
          mysqli_stmt_execute($stmt);
      }
      exit();
   }
?>
<html>
   <body>

      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         temp: <input type = "text" name = "temp">
         hum: <input type = "text" name = "hum">
         <input type = "submit">
      </form>

   </body>
</html>
