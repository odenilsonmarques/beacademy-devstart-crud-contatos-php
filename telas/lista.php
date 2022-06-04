<h1>Lista de contatos</h1>

<table class="table table-striped table-hover">
    <tr>
        <td>NOME</td>
        <td>EMAIL</td>
        <td>TELEFONE</td>
        <td>Ações</td>
    </tr>
    <tbody>
        <?php
            foreach($contatos as $posição => $cadaContato){
            $partes = explode(';', $cadaContato); //onde for encontrado um ponto e virgula substituir por um dado(nome, email,telefone)
        ?>
                <tr>
                    <!--essa posicoes refere-se a posição dos elementos-->
                    <td><?=$partes[0];?></td>
                    <td><?=$partes[1];?></td>
                    <td><?=$partes[2];?></td>
                    <td><a href="/excluir?id=<?=$posição;?>" class="btn btn-danger btn-sm">Excluir<?=$posição;?></a></td>
                </tr>
            <?php }
        ?>
    </tbody>
    </tr>
</table>