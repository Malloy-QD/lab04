<?php
echo "<link rel='stylesheet' type='text/css' href='style.css'>";
$user=$_POST["username"];
$pas=$_POST["password"];
$shoe=$_POST["shoe"];
$shoep=$shoe*550;
$cloth=$_POST["cloth"];
$clothp=$cloth*120;
$hat=$_POST["hat"];
$hatp=$hat*55;
$ship=$_POST["shipping"];



$total=$hatp+$ship+$shoep+$clothp;

echo "Welcome valued customer!<br>";
echo "Here is your password: ".$pas."<br>";
echo"<table border='1'>";
echo "<tr><th>Item</th><th>Quantity</th><th>Cost per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>Nike LD Waffle Sacai</th><td>".$shoe."</td><td>$550</td><td>$$shoep</td></tr>";
echo "<tr><th>KAWS x Uniqlo Gone Tee</th><td>$cloth</td><td>$120</td><td>$$clothp</td></tr>";
echo "<tr><th>Polo Ralph Lauren Indigo Stadium Cap</th><td>$hat</td><td>$55</td><td>$$hatp</td></tr>";
if($ship==0){
echo "<tr><th>Shipping</th><td colspan=\"2\">Free 7 Days Shipping</td><td>$$ship</td></tr>";
}
if($ship==5){
echo "<tr><th>Shipping</th><td colspan=\"2\">Three Days Shipping</td><td>$$ship</td></tr>";
}
else if($ship==50){if ($ship == "Free 7 Day")
{
  $shipp = 0.00;
}
else if ($ship == "Over night")
{
  $shipp = 50.00;
}
else if ($ship == "Three day")
{
  $shipp = 5.00;
}
echo "<tr><th>Shipping</th><td colspan=\"2\">Over Night Shipping</td><td>$$ship</td></tr>";
}
echo "<tr><th>Total Cost</th><td colspan=\"2\"><th></td>$$total</th></tr>";
echo "</table>";
 ?>
