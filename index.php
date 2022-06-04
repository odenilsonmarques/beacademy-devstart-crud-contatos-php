<?php

//Recuperando informação que vem da url GET

//recuperando as informação do recurso Request_Uri que faz parte do inumeros recurso que variavel super global $_SERVE possui
// $url = $_SERVER['REQUEST_URI'];

$url = explode('?', $_SERVER['REQUEST_URI']);//usando o explode para pegar a posição zero de cada url

include 'telas/header.php';//arquivo responsavel pelo cabelho e corpo da pagina
include 'telas/menu.php';
include 'acoes.php';


//a funcao macth só é suportada pelo php v.8 
// macth ($url){
//     '/' => home(),
//     '/login' => login(),
//     '/cadastro' => cadastro(),
//     '/lista' => lista(),
//     default => erro404(),
// }

//definindo as rotas que chamarão cada funcao. A posição zero refere-se ao que deve ser pego definido na linha 8
if($url[0] === '/'){
    home();
}elseif($url[0] === '/cadastro'){//endpoint
    cadastro();
}elseif($url[0] === '/login'){//endpoint
    login();
}elseif($url[0] === '/lista'){//endpoint
    listar();
}elseif($url[0] === '/excluir'){//endpoint
    excluir();
}else{
    erro404();
}

include 'telas/footer';//arquivo responsavel pelo rodapé e corpo da pagina

/*
    NOta: em todas as paginas que estão sendo chamada nesse arquivo vao receber a estilização do bootstrap declaraco no header
*/