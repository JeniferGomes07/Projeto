<?php 

include 'conecta.php';

$nome = $_POST['campo1'];
$login = $_POST['campo2'];
$senha = $_POST['campo3'];
$confirmaSenha = $_POST['campo4'];
$email = $_POST['campo5'];
$telefone = $_POST['campo6'];

$sql = "INSERT INTO tb_contato VALUES (NULL, '".$nome."','".$login."', '".$senha."', '".$confirmaSenha."','".$email."', '".$telefone."')";

if($conn->query($sql)) {

    echo "registro inserido";

}


?>