<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$link = mysqli_connect("127.0.0.1", "root", "", "BD_II");
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$query = "select usuario, senha from usuario where usuario='$usuario' and senha='$senha'";
	$result = mysqli_query($link,$query);
	$rows = mysqli_fetch_array($result,MYSQLI_NUM);

	if($rows)
	{
		echo "Login com êxito";
		header('Location:http://www.google.com');
	}
	else
	{
		echo "Login falhou.";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
    		<title>Atividade Prática 2 BD II</title>
	</head>
	
	<body>
		<form action="index.php" method="POST">
			<h2>Atividade Prática 2 BD II</h2>
			<br>Usuário:<br>
			<input type="text" name="usuario"><br>

			<br>Senha:<br>
			<input type="text" name="senha"><br><br>
			<input type="submit" value="Logar">
		</form>
	</body>
</html>
