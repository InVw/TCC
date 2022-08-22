<?php


$servidorconexao="localhost";
   $usuarioconexao="root";
  $senhaconexao="";
  $bancodedados="banco";
  $pdo = new PDO('mysqli:host=localhost;dbname=banco','root','');
  
  $sql = $pdo -> prepare ("INSERT INTO)`clientes`VALUES(?,?,?,?)";
           
$cadastrar = mysqli_query($conexao,$sql);
echo "<h1>cadastrado com sucesso</h1>";   

?>
