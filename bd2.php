<?php
require_once'Connect.php';
?>
<form action="bd2.php" method="GET">
Религия:<select name="Countrys">
 <?php
$result=mysqli_query($link,"SELECT
  religion.religion
FROM religion");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
	echo"<option>". ($row['religion']."</option>");
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
  country.population,
  language.Namelanguage,
  country.capital
FROM country
  INNER JOIN religion
    ON country.id_religion = religion.id_religion
  INNER JOIN language
    ON country.id_language = language.id_language
	WHERE religion.religion = '$_GET[Countrys]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Страна".'</th>';
echo '<th>'."Столица".'</th>';
echo '<th>'."Язык".'</th>';
echo '<th>'."Население".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
	echo '<tr>';
	echo '<td>'.$row['NameCountry'].'</td>';
	echo '<td>'.$row['capital'].'</td>';
	echo '<td>'.$row['Namelanguage'].'</td>';
	echo '<td>'.$row['population'].'</td>';
	echo '</tr>';
}
}
echo '</table>';
if($_GET['submit1'])
{
	header('Location:main.php');
}
?>
