<html>
<head>

<link rel="stylesheet" href="style.css">
</head>
<body>

<h1> Receipt</h1>

<?php
$pass = $_POST["pwd"];
$q1 = $_POST["quantity1"];
$q2 = $_POST["quantity2"];
$q3 = $_POST["quantity3"];
$op = $_POST["ship1"];
$ship = 0;
$total = ($q1*3)+($q2*5)+($q3*10);

if ($op == 1)
{
$total += 0;
}

if($op == 2)
{
$total += 50;
$ship = 50;
}

if($op == 3)
{
$total += 5;
$ship = 5;
}
echo "Welcome"."<br>";
echo "cat food "."Quantity: ".$q1."<br>";
echo "cat toy "."Quantity: ".$q2."<br>";
echo "cat bed "."Quantity: ".$q3."<br>";
echo "Shipping "."$".$ship.".00"."<br>";
echo "password: ".$pass."<br>";
echo "total: "."$".$total.".00";

?>






</body>
</html>