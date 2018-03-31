<!DOCTYPE html>
<html>
<head>
    <title>Тест</title>
</head>
<body>
<h1>Кто хочет стать миллионером</h1>
<form enctype="multipart/form-data" method="GET">
    <label><strong>Выбери тест:</strong></label><br>
    <input type="radio" name="mytest" value="1" checked>Eng<br><br>
	<input type="radio" name="mytest" value="2" checked>Rus<br><br>
    <input type="submit" formaction="test.php" name="RunTest" value="Пройти тест">
</form>
</body>
</html>