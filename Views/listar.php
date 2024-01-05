<?php
foreach ($dadosModel->dados as $item) : ?>
    Nome: <?= $item->nome ?>
    <a href="/mvc-web2-F/aluno/editar?id= <?= $item->id ?>">editar</a>
    <a href="/mvc-web2-F/aluno/deletar?id= <?= $item->id ?>">deletar</a>
    <br />
<?php endforeach ?>