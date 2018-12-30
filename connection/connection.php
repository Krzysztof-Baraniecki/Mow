<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<?php
			session_start();

			require_once 'database.php';

			if (!isset($_SESSION['online'])) {

				if (isset($_POST['login']) && $_POST['login']!="") 
				{
					$login = filter_input(INPUT_POST, 'login');	
					$password = filter_input(INPUT_POST, 'password');
					
					echo $login." ".$password."<br />";
					$userQuery = $db->prepare('SELECT * FROM user WHERE email= :email');
					$userQuery->bindValue(':email', $login, PDO::PARAM_STR);
					$userQuery->execute();

					echo $userQuery->rowCount();
					$user = $userQuery->fetch();
					// echo "<- wyników. Dane osoby logownej: ".$user['first_name'] . " " . $user['email']. " " . $user['password'];
					// if ($user && password_verify($password, $user['password']))
					if($userQuery->rowCount() == 1) 
					{
						$_SESSION['online'] = true;
						$_SESSION['id_user'] = $user['id_user'];
						$_SESSION['first_name'] = $user['first_name'];
						$_SESSION['last_name'] = $user['last_name'];
						$_SESSION['center'] = $user['center'];
						$_SESSION['sex'] = $user['sex'];
						$_SESSION['email'] = $user['email'];
						$_SESSION['tel_no'] = $user['tel_no'];
						// $_SESSION['password'] = $user['password'];
						$_SESSION['level'] = $user['level'];
						$_SESSION['group'] = $user['group'];
						$_SESSION['img'] = $user['img'];
						$_SESSION['pupils'] = $user['pupils'];
						
						header('Location: ../index.php');
						exit();
					}
					else{ 
						echo "<br />else :(";
						// $_SESSION['e_login'] = true;
						// header('Location: index.php');
						exit();
					} 	
				}
				else{
					// ustaw sesje z błędem na zła wartość
						header('Location: ../index.php');
						exit();
				}
			
			} // jestesmy zalogowani jest ustawniona sessja
			else {
						header('Location: index1.php');
						exit();
			}


		//	}
			//wyciagamy wszystkie
							//wykonaj zapytanie
		//	$usersQuery = $db->query('SELECT * FROM users');
			//fetchAll() - przyniesz wszystko
		//	$users = $usersQuery->fetchAll();
			//drukuj rekunsywnie.
			//print_r($users);

			?>
</body>
</html>