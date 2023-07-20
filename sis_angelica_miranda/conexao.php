<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php 
//Criar as constantes com as credencias de acesso ao banco de dados
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DBNAME', 'ifbaiano');

//Criar a conexão com banco de dados usando o PDO e a porta do banco de dados
//Utilizar o Try/Catch para verificar a conexão.
try{

    $conexao= new pdo('mysql:host=' . HOST . ';dbname=' .
                                     DBNAME, USUARIO, SENHA);
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso.
     Erro gerado " . $e->getMessage();
}

?>
</body>
</html>