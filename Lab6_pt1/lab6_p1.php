<!Doctype html>
<html>
<body>
<table border ="2">


<?php 

echo "<tr>"."\n";
echo "<th>"."x"."</th>"."\n";
for ($h=1; $h <= 100; $h++)
{
echo "<th>".$h."</th>";
}
echo"</tr>";
?>

<?php

for($i=1;$i<=100;$i++)
{
echo "<tr>";
echo "<th>".$i."</th>";
for($j=1;$j<=100;$j++)
{
$product = $i*$j;
if($i==$j)
{
echo"<td>".$product."</td>";
}

else if($i>$j)
{

echo "<td>".$product."</td>";

}

else
{
echo "<td>".$product."</td>";

}
}


echo "</tr>";

}

?>
</table>
</body>
</html>
