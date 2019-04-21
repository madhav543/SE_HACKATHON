<?php
include('server.php');
$sql= "SELECT * FROM `startup`";
echo "<div>";
echo "<p>Startup Companies</p>";
$result=$db->query($sql);
echo "<table style='width:70%;margin-left:30px'><thead><tr><th>S.No</th><th>name</th><th>Website</th></tr></thead><tbody>";
while($row=mysqli_fetch_assoc($result)){


  echo "<tr><td style='text-align:center'>".$row["Sno"]."</td><td style='text-align:center'>".$row["name"]."</td><td style='text-align:center'><a href='https://".$row["address"]."'>".$row["address"]."</a>"."</td></tr>";


}
echo "</tbody></table>";
echo "</div>";

echo "<div>";

echo "<p>Finance companies</p>";

$sql= "SELECT * FROM `finance`";

$result=$db->query($sql);
echo "<table style='width:70%;margin-left:30px'><thead><tr><th>S.No</th><th>name</th><th>Website</th></tr></thead><tbody>";
while($row=mysqli_fetch_assoc($result)){


  echo "<tr><td style='text-align:center'>".$row["Sno"]."</td><td style='text-align:center'>".$row["name"]."</td><td style='text-align:center'><a href='https://".$row["address"]."'>".$row["address"]."</a>"."</td></tr>";


}

echo "</tbody></table>";
echo "</div>";


?>