<?php
// LIGAR A BASE DE DADOS
$link = mysqli_connect("localhost", "user", "password", "nome_da_base_de_dados");

// VERIFICAR CONEXÃO
if($link === false){
    die("ERRO AO LIGAR À BASE DE DADOS. " . mysqli_connect_error());
}

// ESCAPE INPUTS
$nome = mysqli_real_escape_string($link, $_REQUEST['nome']);

// INSERIR DADOS NA TABELA
$sql = "INSERT INTO nome_da_tabela (name) VALUES ('$name')";

// VOLTAR A PAGINA DO FORMULARIO
if(mysqli_query($link, $sql)){
    mysqli_close($link);
    header('Location: ../pagina_do_formulario.php');
    exit;
} else {
    echo "Não foi possível adicionar o cliente.";
}
?>