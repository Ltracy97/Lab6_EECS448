<?php

$q1 = $_POST["q1"];

$q2 = $_POST["q2"];

$q3 = $_POST["q3"];

$q4 = $_POST["q4"];

$q5 = $_POST["q5"];

$a1 = "Luxu and Azul";

$a2 = "4";

$a3 = "Zodiark";

$a4 = "Vera";

$a5 = "Reavers";

$count = 0;

echo "what are the names of the two Abysswalkers in the story?"."<br>";

if($q1 == $a1){
$count++;
}
echo "your answer: ".$q1."<br>";

echo "Correct Answer: ".$a1."<br>"."<br>";

echo "How many demons does Hosea control?"."<br>";
if($q2 == $a2){
$count++;
}

echo "your answer: ".$q2."<br>";

echo "Correct Answer: ".$a2."<br>"."<br>";

echo "What is the name of the Lost God?"."<br>";
if($q3 == $a3){
$count++;
}

echo "your answer: ".$q3."<br>";

echo "Correct Answer: ".$a3."<br>"."<br>";

echo "What is the name of the child that travels with Hosea?"."<br>";
if($q4 == $a4){
$count++;
}

echo "your answer: ".$q4."<br>";

echo "Correct Answer: ".$a4."<br>"."<br>";

echo "What are the names of the monsters the Abysswalkers control?"."<br>";
if($q5 ==$a5){
$count++;
}

echo "your answer: ".$q5."<br>";

echo "Correct Answer: ".$a5."<br>"."<br>";

$score = $count/5*100;

echo "your socre: ". $score."%";

?>
