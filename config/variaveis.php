<?php
session_start();
    $nomeSistema = "Cursos Online";
    $usuario = isset($_SESSION['usuario'])? $_SESSION['usuario']: [];
        $nomeArquivo = __DIR__."produto.json";
        $produtos = json_decode(file_get_contents($nomeArquivo), true);
   
    

    // $produtos= [
    //     ["nome"=>"FullStack", "preco"=>"R$ 1.200,00", "duracao"=>"5 meses", "imagem"=>"img/fullstack.jpg"],
    //     ["nome"=>"Marketing Digital", "preco"=>"R$ 1.000,00", "duracao"=>"4 meses", "imagem"=>"img/mkDigital.jpg"], 
    // ];

    $categorias = ["Cursos", "Palestras", "Artigos","Workshop"];
?>