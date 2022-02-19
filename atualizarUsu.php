<?php
      
    include_once ('conecta.php');
    if (isset($_POST ['atualizar']))
    {
        $id = $_POST ['id'];
        $nome = $_POST['nome'];
        $nomUsu = $_POST['nomUsu'];
        $senha = $_POST['senha'];
        
        
        $sqlInsert = "ATUALIZAR usuarios
        SET nome='$nome',senha='$senha',nomUsu='$nomUsu' WHERE id=$id";
        $resultado = $conexao -> consulta($sqlInsert);
        print_r($resultado);
    }
     header('Localização: sistema.php');

?>
