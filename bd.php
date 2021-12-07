<?php
require_once'Connect.php';
?>
<form action="book_author.php" method="GET">
 Регион:<select name="NameAuthor">
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
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  book.NameBook
FROM book
  INNER JOIN author
    ON book.id_author = author.id_author
  INNER JOIN janr
    ON book.id_janr = janr.id_janr
WHERE author.FirstName = z'$_GET[NameAuthor]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
	print ($row['NameBook']."<br>");
}
}
?>