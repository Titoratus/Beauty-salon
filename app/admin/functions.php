<?php
	$con = mysqli_connect("localhost", "root", "", "salon");
	$query = mysqli_query($con, "SET NAMES UTF8");
	$query = mysqli_query($con, "SET CHARACTER SET UTF8");
	session_start();

	//Вход
	if(isset($_POST["nick"])){
		$nick = $_POST["nick"];
		$pass = $_POST["pass"];
		$query = mysqli_query($con, "SELECT * FROM users WHERE nickname='$nick' AND pass='$pass'");
		if(mysqli_num_rows($query) != 0) { $_SESSION["admin"] = 1; die("no_error"); }
		else die("Неверный логин или пароль");
	}

	//Общая информация
	if(isset($_POST["addr"])){
		$addr = $_POST["addr"];
		$hours = $_POST["hours"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$vk = $_POST["vk"];
		$inst = $_POST["inst"];
		$fb = $_POST["fb"];
		$query = mysqli_query($con, "UPDATE info SET address='$addr',hours='$hours',email='$email',phone='$phone',vk='$vk',fb='$fb',inst='$inst'") or die("error");
		if($query) die("no_error");
	}

	//Удаление отзыва
	if(isset($_POST["rev-del"])){
		$rev_id = $_POST["rev-del"];
		$query = mysqli_query($con, "DELETE FROM reviews WHERE ID='$rev_id'");
	}
	//Добавление отзыва
	if(isset($_POST["rev-msg"])){
		$msg = $_POST["rev-msg"];
		$author = $_POST["rev-author"];
		$link = $_POST["rev-link"];
		$query = mysqli_query($con, "INSERT INTO reviews (`ID`, `author`, `message`, `link`) VALUES (NULL, '$author', '$msg', '$link')");
	}	

	//Удаление опции
	if(isset($_POST["del_opt"])){
		$o_id = $_POST["del_opt"];
		$query = mysqli_query($con, "DELETE FROM options WHERE o_id='$o_id'");
	}

	//Удаление услуги
	if(isset($_POST["del_serv"])){
		$s_id = $_POST["del_serv"];
		$query = mysqli_query($con, "DELETE FROM services WHERE ID='$s_id'");
	}

	//Добавление услуги
	if(isset($_POST["s-name"])){
		$serv = $_POST["s-name"];
		$opt_num = $_POST["opt_num"];
		$serv_type = $_POST["serv-type"];
		$query = mysqli_query($con, "INSERT INTO services (`ID`, `s_name`, `category`) VALUES (NULL, '$serv', '$serv_type')");

		for($i=1; $i <= $opt_num; $i++){
			$o_name = "opt-".$i;
			$o_name = $_POST[$o_name];
			$o_price = "price-".$i;
			$o_price = $_POST[$o_price];
			$query = mysqli_query($con, "INSERT INTO options (`o_id`, `o_name`, `price`, `service`) VALUES (NULL, '$o_name', '$o_price', '$serv')");
		}
	}

	//Удаление записи
	if(isset($_POST["del_rec"])){
		$rec_id = $_POST["del_rec"];
		$query = mysqli_query($con, "DELETE FROM records WHERE id='$rec_id'");
	}
?>