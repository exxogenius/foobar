Sie haben die Zahl <font color="#FF0000"><?php echo htmlspecialchars($_POST['zahl']); ?></font> eingegeben. <br>
<br>
<?php
$x = $_POST['zahl'];
$var1 = 3;
$var2 = 5;
for ($i = 1; $i <= $x; $i++)
{
    echo "<b>". $i."</b> => " ;
	if ($i % $var1 == 0) echo "foo";
	if ($i % ($var1*$var2) == 0) echo ",";
	if ($i % $var2 == 0) echo "bar";
	echo "<br>";
}
?>