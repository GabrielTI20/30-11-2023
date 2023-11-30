<?php
 echo" <h2> aula do paulo </h2>";
  //Tipo do banco- mysql
  //Host -localhost
  //Banco de dados-aulapdo
  //Senha-
  $conexao = new PDO("mysql:host=localhost;dbname=mercado","root","");

  //exibe as informações e os tipos dela
  //var_dump($conexao);

  $select = "SELECT * FROM tb_produtos";

  $resultado = $conexao->query($select);

  $consulta = $resultado->fetchAll();

  //echo"<pre>";
  //var_dump($consulta);

  foreach($consulta as $linha){
    echo '<hr><pre>';

    
    // var_dump($linha['nome_produto']);
    echo $linha ['nome_produto'];

  }

  
  

 ?>