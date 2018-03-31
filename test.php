<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Выберите правильный ответ</h1>
<?php
//echo "<pre>";
//print_r($_GET);
//print_r($_POST);
//echo "</pre>";
	if (isset($_GET["mytest"]) && !empty($_GET["mytest"])) {
		$test_number=$_GET["mytest"];
		//echo "<pre>";
		//print_r($test_number);
		//echo "</pre>";
	}
			else {
				echo "Выберите тест!";
			}

	$test_number;
	if ($test_number==="1")  {
		$test1_content=file_get_contents("./test.json");
		$test1_array=json_decode($test1_content, true);
	?>

			<form action="test.php?mytest=1" enctype="multipart/form-data" method="POST">
			<label><?php echo $test1_array["questions"][0]["q"]?></label><Br><Br>
			<input type="radio" name="answer0" value="a1"><?php echo $test1_array["questions"][0]["answers"][0]["a"]?><Br>
			<input type="radio" name="answer0" value="a2"><?php echo $test1_array["questions"][0]["answers"][1]["a"]?><Br>
			<input type="radio" name="answer0" value="a3"><?php echo $test1_array["questions"][0]["answers"][2]["a"]?><Br>
			<input type="radio" name="answer0" value="a3"><?php echo $test1_array["questions"][0]["answers"][3]["a"]?><Br><Br>

			<label><?php echo $test1_array["questions"][1]["q"]?></label><Br><Br>
			<input type="radio" name="answer1" value="a1"><?php echo $test1_array["questions"][1]["answers"][0]["a"]?><Br>
			<input type="radio" name="answer1" value="a2"><?php echo $test1_array["questions"][1]["answers"][1]["a"]?><Br>
			<input type="radio" name="answer1" value="a3"><?php echo $test1_array["questions"][1]["answers"][2]["a"]?><Br>
			<input type="radio" name="answer1" value="a3"><?php echo $test1_array["questions"][1]["answers"][3]["a"]?><Br><Br>

			<label><?php echo $test1_array["questions"][2]["q"]?></label><Br><Br>
			<input type="radio" name="answer2" value="a1"><?php echo $test1_array["questions"][2]["answers"][0]["a"]?><Br>
			<input type="radio" name="answer2" value="a2"><?php echo $test1_array["questions"][2]["answers"][1]["a"]?><Br>
			<input type="radio" name="answer2" value="a3"><?php echo $test1_array["questions"][2]["answers"][2]["a"]?><Br>
			<input type="radio" name="answer2" value="a3"><?php echo $test1_array["questions"][2]["answers"][3]["a"]?><Br><Br>

			<label><?php echo $test1_array["questions"][3]["q"]?></label><Br><Br>
			<input type="radio" name="answer3" value="a1"><?php echo $test1_array["questions"][3]["answers"][0]["a"]?><Br>
			<input type="radio" name="answer3" value="a2"><?php echo $test1_array["questions"][3]["answers"][1]["a"]?><Br>
			<input type="radio" name="answer3" value="a3"><?php echo $test1_array["questions"][3]["answers"][2]["a"]?><Br>
			<input type="radio" name="answer3" value="a4"><?php echo $test1_array["questions"][3]["answers"][3]["a"]?><Br><Br>

			<label><?php echo $test1_array["questions"][4]["q"]?></label><Br><Br>
			<input type="radio" name="answer4" value="a1"><?php echo $test1_array["questions"][4]["answers"][0]["a"]?><Br>
			<input type="radio" name="answer4" value="a2"><?php echo $test1_array["questions"][4]["answers"][1]["a"]?><Br>
			<input type="radio" name="answer4" value="a3"><?php echo $test1_array["questions"][4]["answers"][2]["a"]?><Br>
			<input type="radio" name="answer4" value="a3"><?php echo $test1_array["questions"][4]["answers"][3]["a"]?><Br><Br>
			<input type="submit" name="CheckTest" value="Проверить" title="Проверить">
			</form>
<?php
	//echo "<pre>";
	//print_r($_POST);
	//echo "</pre>";
		if ($_POST["answer0"]==="a2" && $_POST["answer1"]==="a1" && $_POST["answer2"]==="a1" && $_POST["answer3"]==="a4" && $_POST["answer4"]==="a3")
		{
			echo "Правильно!";
		}
		else
		{
			echo "Попробуйте еще раз!";
		}
	}

		elseif ($test_number==="2"){
			$test2_content=file_get_contents("./test2.json");
			$test2_array=json_decode($test2_content, true);
		//echo "<pre>";
		//print_r(test2_array);
		//echo "</pre>";
?>

				<form action="test.php?mytest=2" enctype="multipart/form-data" method="POST">
				<label><?php echo $test2_array["questions"][0]["q"]?></label><Br><Br>
				<input type="radio" name="answer0" value="a1"><?php echo $test2_array["questions"][0]["answers"][0]["a"]?><Br>
				<input type="radio" name="answer0" value="a2"><?php echo $test2_array["questions"][0]["answers"][1]["a"]?><Br>
				<input type="radio" name="answer0" value="a3"><?php echo $test2_array["questions"][0]["answers"][2]["a"]?><Br>
				<input type="radio" name="answer0" value="a3"><?php echo $test2_array["questions"][0]["answers"][3]["a"]?><Br><Br>

				<label><?php echo $test2_array["questions"][1]["q"]?></label><Br><Br>
				<input type="radio" name="answer1" value="a1"><?php echo $test2_array["questions"][1]["answers"][0]["a"]?><Br>
				<input type="radio" name="answer1" value="a2"><?php echo $test2_array["questions"][1]["answers"][1]["a"]?><Br>
				<input type="radio" name="answer1" value="a3"><?php echo $test2_array["questions"][1]["answers"][2]["a"]?><Br>
				<input type="radio" name="answer1" value="a3"><?php echo $test2_array["questions"][1]["answers"][3]["a"]?><Br><Br>

				<label><?php echo $test2_array["questions"][2]["q"]?></label><Br><Br>
				<input type="radio" name="answer2" value="a1"><?php echo $test2_array["questions"][2]["answers"][0]["a"]?><Br>
				<input type="radio" name="answer2" value="a2"><?php echo $test2_array["questions"][2]["answers"][1]["a"]?><Br>
				<input type="radio" name="answer2" value="a3"><?php echo $test2_array["questions"][2]["answers"][2]["a"]?><Br>
				<input type="radio" name="answer2" value="a3"><?php echo $test2_array["questions"][2]["answers"][3]["a"]?><Br><Br>

				<label><?php echo $test2_array["questions"][3]["q"]?></label><Br><Br>
				<input type="radio" name="answer3" value="a1"><?php echo $test2_array["questions"][3]["answers"][0]["a"]?><Br>
				<input type="radio" name="answer3" value="a2"><?php echo $test2_array["questions"][3]["answers"][1]["a"]?><Br>
				<input type="radio" name="answer3" value="a3"><?php echo $test2_array["questions"][3]["answers"][2]["a"]?><Br>
				<input type="radio" name="answer3" value="a4"><?php echo $test2_array["questions"][3]["answers"][3]["a"]?><Br><Br>

				<label><?php echo $test2_array["questions"][4]["q"]?></label><Br><Br>
				<input type="radio" name="answer4" value="a1"><?php echo $test2_array["questions"][4]["answers"][0]["a"]?><Br>
				<input type="radio" name="answer4" value="a2"><?php echo $test2_array["questions"][4]["answers"][1]["a"]?><Br>
				<input type="radio" name="answer4" value="a3"><?php echo $test2_array["questions"][4]["answers"][2]["a"]?><Br>
				<input type="radio" name="answer4" value="a3"><?php echo $test2_array["questions"][4]["answers"][3]["a"]?><Br><Br>
				<input type="submit" name="CheckTest" value="Проверить" title="Проверить">
				</form>
				
<?php
		//echo "<pre>";
		//print_r($_POST);
		//echo "</pre>";
			if ($_POST["answer0"]==="a1" && $_POST["answer1"]==="a3" && $_POST["answer2"]==="a3" && $_POST["answer3"]==="a4" && $_POST["answer4"]==="a1")
			{
				echo "Правильно!";
			}
			else
			{
				echo "Попробуйте еще раз!";
    }
}
?>

</body>
</html>