<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName ='nseg';


$conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

$modalidade = $_POST['carlist'];
$nome =$_POST['nome'];
$telefone =$_POST['tel'];
$pessoa = $_POST['pessoa'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['trip-start'];
$civil = $_POST['Civil'];

$sql = "INSERT INTO  cotacao (modalidade,nome,telefone,pessoa,email,cpf,nascimento,civil) VALUES('$modalidade','$nome','$telefone','$pessoa','$email','$cpf','$nascimento','$civil')";


if (mysqli_query($conexao,$sql)) {
    echo '<script>alert("cadastro efetuado!")</script>';

}else{
    echo 'erro'.mysqli_connect_error($conexao);
}
mysqli_close($conexao);
 
        header('Location: http://localhost/nucleoseguros/index.php');
        exit;
 
   
   ?>
