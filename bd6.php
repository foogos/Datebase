<?php
require_once'Connect.php';
?>
<form action="bd6.php" method="GET">
удалить валюту:<input type="text" name="NameAuthor"><br>
<input type="submit" name="submit" value="Удалить"><br>
<input type="submit" name="submit1" value="Вернуться на главную"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"DELETE LOW_PRIORITY QUICK
	FROM currency WHERE currency= '$_GET[NameAuthor]'
	LIMIT 100");
}
if($_GET['submit1'])
{
	header('Location:main.php');
}
?>