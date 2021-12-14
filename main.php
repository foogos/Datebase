<form action="main.php" method="GET">
<center><div style="font-size:2em;color:red">Поисковая система по странам мира</center> </div>
<br></br>
<strong>Запрос №1: Поиск по региону</strong>
<input type="submit" name="submit1" value="перейти"><br>
  <style>
   p {text-indent: 30px;}
  </style>
<p>Описание: Пользователь выбирает желаемый регион и ему выводится список стран из выбранного региона</p>

<strong>Запрос №2: Поиск по религии</strong>
<input type="submit" name="submit2" value="перейти"><br>
  <style>
   p {text-indent: 30px; }
  </style>
<p>Описание: Пользователь выбирает желаемую религию и ему выводится список стран с данной религией</p>

<strong>Запрос №3: Поиск по стране</strong>
<input type="submit" name="submit3" value="перейти"><br>
  <style>
   p { text-indent: 30px;}
  </style>
<p>Описание: Пользователь выбирает желаемую страну и ему выводится полная информация о данной стране</p>

<strong>Запрос №4: Поиск с клавиатры</strong>
<input type="submit" name="submit4" value="перейти"><br>
  <style>
   p {text-indent: 30px;}
  </style>
<p>Описание: Пользователь вводит с клавиатуры желаемый регион и ему выводится страны из этого региона</p>

<strong>Запрос №5: Добавление валюты в БД</strong>
<input type="submit" name="submit5" value="перейти"><br>
  <style>
   p {text-indent: 30px;}
  </style>
<p>Описание: Пользователь вводит с клавиатуры валюты и она сохраняется в базе данных</p>

<strong>Запрос №6: Удаление валюты в БД</strong>
<input type="submit" name="submit6" value="перейти"><br>
  <style>
   p {text-indent: 30px;}
  </style>
<p>Описание: Пользователь вводит с клавиатуры валюту которую необходимо удалить из базы данных</p>



 </select><br>
</form>

<?php
if($_GET['submit1'])
{
	header('Location:bd.php');
}

if($_GET['submit2'])
{
	header('Location:bd2.php');
}

if($_GET['submit3'])
{
	header('Location:bd3.php');
}

if($_GET['submit4'])
{
	header('Location:bd4.php');
}

if($_GET['submit5'])
{
	header('Location:bd5.php');
}

if($_GET['submit6'])
{
	header('Location:bd6.php');
}
?>

