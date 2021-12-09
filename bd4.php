<?php
require_once'Connect.php';
?>
<form action="bd4.php" method="GET">
 Автор:<input type="text" name="NameAuthor"><br>
<input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  language.Namelanguage,
  country.NameCountry,
  country.capital
FROM country
  INNER JOIN language
    ON country.id_language = language.id_language
  INNER JOIN region
    ON country.id_region = region.id_region
WHERE region.region = '$_GET[NameAuthor]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Страна".'</th>';
echo '<th>'."Язык".'</th>';
echo '<th>'."Столица".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
	echo '<tr>';
	echo '<td>'.$row['NameCountry'].'</td>';
	echo '<td>'.$row['Namelanguage'].'</td>';
	echo '<td>'.$row['capital'].'</td>';
	echo '</tr>';

}
echo '</table>';
}
?>