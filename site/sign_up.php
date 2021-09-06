<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Sign up</title>		
	</head>
	<body>
		<h1>Criar conta</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Insira o seu nome completo"><br><br>
            
            <label>Idade: </label>
			<input type="text" name="idade" placeholder="Insira a sua idade"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Insira o seu e-mail"><br><br>
            
            <label>Password: </label>
			<input type="password" name="password" placeholder="Insira a sua password"><br><br>
            
            <label>Username: </label>
			<input type="text" name="username" placeholder="Insira o seu username"><br><br>
            
           <input type="checkbox" id="permission" name="permission">
           <label>I agree with data handling</label>
			
			<input type="submit" value="Sign up">
		</form>
	</body>
</html>