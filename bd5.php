<?php
require_once'Connect.php';
?>
<form action="bd5.php" method="GET">
Добавить в таблицу валюту:<input type="text" name="NameAuthor"><br>
<input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"INSERT HIGH_PRIORITY INTO currency(id_currency, currency)
  VALUES (0, '$_GET[NameAuthor]')");
}
?>