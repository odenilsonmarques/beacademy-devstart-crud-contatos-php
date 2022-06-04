<?php

    function home(){
        include 'telas/home.php';
    }

    function login(){
        include 'telas/login.php';
    }

    function cadastro(){
        if($_POST){
            //recebendo os dados do formulario
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];

            //abrindo e enviando osa dados para o arquivo contatos.csv, caso nao exista é criado um novo
            $arquivo = fopen('dados/contatos.csv', 'a+');
            fwrite($arquivo,"{$nome};{$email};{$telefone}".PHP_EOL);
            fclose($arquivo);//evita gasto de memória

            $mensagem = 'Cadastro Realizado Com Sucesso !';
            include 'telas/mensagem.php';
        }

        include 'telas/cadastro.php';
    }

    function listar(){
        $contatos = file('dados/contatos.csv');
        include 'telas/lista.php';
    }

    function excluir(){
        $id = $_GET['id'];
        $contatos = file('dados/contatos.csv');//buscando o arquivo contatos.csv

        unset($contatos[$id]);//excluindo um elemento do arquivo
        unlink('dados/contatos.csv');

        $arquivo = fopen('dados/contatos.csv', 'a+');

        foreach($contatos as $cadaContato){
            fwrite($arquivo, $cadaContato);
        }
        $mensagem = 'Contato Excluído Com Sucesso';
        include 'telas/mensagem.php';
    }

    function erro404(){
        include 'telas/404.php';
    }
