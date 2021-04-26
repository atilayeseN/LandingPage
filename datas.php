<html>
 
 <head>
  <meta charset="utf-8">
  <title>Veriler</title>
 </head>
 
 <body>
  <table border="1" align="center" width="80%">
   <tr>
    <td>ID</td>
    <td>Email</td>
    <td>Öneriler</td>
    <td>Tikler</td>
   </tr>




<?php

$servername = "localhost:3306";
$database = "pboyayFh_advice";
$username = "pboyayFh_hilal1";
$password = "hilalatilaykardesler123456789";

$conn = mysqli_connect($servername, $username, $password, $database);

$result=mysqli_query($conn,"SELECT*FROM advices");

mysqli_set_charset($baglan, "utf8");

while($column=mysqli_fetch_array($result)){
  echo'<tr>';
    echo '<td>'.$column['ID'].'</td>';
    echo '<td>'.$column['Email'].'</td>';
    echo '<td>'.$column['advice'].'</td>';
    echo '<td>'.$column['ticks'].'</td>';
   echo '</tr>';
}
?>
  </table>

 </body>
</html>
