<?php
require_once'Connect.php';
?>
<form action="bd.php" method="GET">
Регион:<select name="Countrys">
 <?php
$result=mysqli_query($link,"SELECT
  region.region
FROM region");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
	echo"<option>". ($row['region']."</option>");
}
?>
 </select><br>
<input type="submit" name="submit" value="Поиск"><br>
<input type="submit" name="submit1" value="Вернуться на главную"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  country.NameCountry,
  language.Namelanguage,
  country.capital
FROM country
  INNER JOIN language
    ON country.id_language = language.id_language
  INNER JOIN region
    ON country.id_region = region.id_region
	WHERE region.region = '$_GET[Countrys]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Страна".'</th>';
echo '<th>'."Столица".'</th>';
echo '<th>'."Язык".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
	echo '<tr>';
	echo '<td>'.$row['NameCountry'].'</td>';
	echo '<td>'.$row['capital'].'</td>';
	echo '<td>'.$row['Namelanguage'].'</td>';
	echo '</tr>';
}
}
echo '</table>';

if($_GET['submit1'])
{
	header('Location:main.php');
}
?>
