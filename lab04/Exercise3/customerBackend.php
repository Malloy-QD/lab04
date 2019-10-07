<?php
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
$user=$_POST['username'];
$pas=$_POST['password'];
$shoe=$_POST['shoenum'];
$shoep=$shoe*550;
$cloth=$_POST['clothnum'];
$clothp=$cloth*120;
$hat=$_POST['hatnum'];
$hatp=$hat*55;
$ship=$_POST['shipping'];
$shipp=0;
if ($ship == "Free 7 Day")
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

$total=$hatp+$shipp+$shoep+$clothp;

echo "Welcome ".$user.".<br>";
echo "Here is your password: ". $password. "<br>";
echo"<table border='1'>";
echo "<tr><th>Item</th><th>Quantity</th><th>Cost per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>Nike LD Waffle Sacai</th><td>$shoe</td><td>$550</td><td>$$shoep</td></tr>";
echo "<tr><th>KAWS x Uniqlo Gone Tee</th><td>$cloth/td><td>$120</td><td>$$clothp</td></tr>";
echo "<tr><th>Polo Ralph Lauren Indigo Stadium Cap</th><td>$hat</td><td>$55</td><td>$$hatp</td></tr>";
echo "<tr><th>Shipping</th><td colspan=\"2\">$ship</td><td>$$shipp</td></tr>";
echo "<tr><th colspan=\"3\">Total Cost</th><th>$$totalCost</th></tr>";
echo "</table">;
 ?>
