<?php


$mysqli = new 	mysqli();
$mysqli->connect("localhost","root","","snf1");
	if(mysqli_connect_errno()){
		echo 	"Erro de conexao".$mysqli->error;
		exit(0);

	}else{
		echo "Conexao realizada com sucesso!";
	}

if(isset($_POST['acao'])){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$momento_registro = date('Y-m-d H-:i:s');
}

$sql = "INSERT INTO `cliente` VALUES(null,'$nome','$email',
'$momento_registro');"

$result = $mysqli->query($sql);

if (!$result or $mysqli->affected_rows != 1){
	echo "Erro na conexão!";
}else{
	echo "Usuario cadastrado com sucesso!";
}  

?>
