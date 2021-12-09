<?php
require_once'Connect.php';
?>
<form action="bd3.php" method="GET">
Страна:<select name="Countrys">
 <?php
$result=mysqli_query($link,"SELECT
  country.NameCountry
FROM country");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
	echo"<option>". ($row['NameCountry']."</option>");
}
?>
 </select><br>
<input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  country.NameCountry,
  country.area,
  country.population,
  country.capital,
  language.Namelanguage,
  religion.religion,
  region.region,
  currency.currency
FROM country
  INNER JOIN currency
    ON country.id_currency = currency.id_currency
  INNER JOIN language
    ON country.id_language = language.id_language
  INNER JOIN region
    ON country.id_region = region.id_region
  INNER JOIN religion
    ON country.id_religion = religion.id_religion
	WHERE country.NameCountry = '$_GET[Countrys]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Страна".'</th>';
echo '<th>'."Столица".'</th>';
echo '<th>'."Площадь".'</th>';
echo '<th>'."Население".'</th>';
echo '<th>'."Язык".'</th>';
echo '<th>'."Религия".'</th>';
echo '<th>'."Валюта".'</th>';

echo '</tr>';
foreach ($rows as $row)
{
	echo '<tr>';
	echo '<td>'.$row['NameCountry'].'</td>';
	echo '<td>'.$row['capital'].'</td>';
	echo '<td>'.$row['area'].'</td>';
	echo '<td>'.$row['population'].'</td>';
	echo '<td>'.$row['Namelanguage'].'</td>';
	echo '<td>'.$row['religion'].'</td>';
	echo '<td>'.$row['currency'].'</td>';
	echo '</tr>';
}
}
echo '</table>';
?>
