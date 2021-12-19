<?php
$nome = $_POST['Nome'];
$Email = $_POST['Email'];
$Mensagem = $_POST['Mensagem'];
$strcon = mysqli_connect('localhost','root','cadastro') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO db_infogena (nome, email, mensagem) VALUES ";
$sql .= "('$nome', '$email', '$mensagem')";

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Mensagem enviada com sucesso!";
echo "<a href='formulario.html'>Clique aqui para enviar outra mensagem</a><br>";
?>
