<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "estoque";
    
    //conexão com banco de dados
try {
//tentativa de conexão com banco de dados
//codigo...
//conexão com o banco de dados 
//classe PDO ´r usada acessar varios tipos de banco de dados, nesse casomsql
/*DSN DATA SOURCE NAME, é a string de conexão ,onde se passa o tipo do banco de dados, o host e o nome do banco de dados
o host e o nome do banco de dados */

    $conexao = new PDO (" mysql:host=$servidor, dbname=$banco; charset=utf8", $usuario, $senha);

echo "conexão com o banco de dados estabelecida com sucesso!";

} catch (\throwable $erro){


  //lançavel seve para qualque tipo de erro ou conexão
  // captura de erro caso a conexão falhe
    die("erro ao conextar com o banco de dados:" . $erro -> getMenssage());

}    
    
    
    
    ?>
</body>
</html>