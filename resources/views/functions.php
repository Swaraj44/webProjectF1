<?php

function check_login($con)
{

	if(isset($_SESSION['email']))
	{

		$ee = $_SESSION['email'];
		$query = "select * from users where email = '$ee' limit 1";
		$result = mysqli_query($con,$query);

		
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: loginpage.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}





function check_article($con)
{

	if(isset($_SESSION['email']))
	{

		$ee = $_SESSION['email'];

		$query = "select * from users where email = '$ee' limit 1";
		$result = mysqli_query($con,$query);


		$query2 = "select * from research where email = '$ee' limit 1";
		$result2= mysqli_query($con,$query2);

		
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result2);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: loginpage.php");
	die;

}
