<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Formulário Editar Aluno</title>
    <meta charset="utf-8" />
</head>

<body>
    <form method="POST" action="/mvc-web2-F/aluno/atualizar?id=<?= $dadosModel->dados[0]->id ?>">
        <input type="hidden" name="id" value="<?= $dadosModel->dados[0]->id ?>" />
        Nome aluno: <input name="nome" type="text" value="<?= $dadosModel->dados[0]->nome_aluno ?>" />
        <br />
        RGA aluno: <input name="rga" type="text" value="<?= $dadosModel->dados[0]->rga ?>" />
        <br />
        Curso:
        <select name="curso">
            <option value="0">- selecione -</option>
            <?php foreach ($dadosModel->dados2 as $item2) : ?>
                <?php if ($item2->id_curso == $dadosModel->dados[0]->id_curso) : ?>
                    <option value="<?= $item2->id_curso ?>" selected>
                        <?= $item2->cod ?> - <?= $item2->nome_curso ?>
                    </option>
                <?php else : ?>
                    <option value="<?= $item2->id_curso ?>">
                        <?= $item2->cod ?> - <?= $item2->nome_curso ?>
                    </option>
                <?php endif; ?>
            <?php endforeach; ?>
            </option>
            <!-- falta fazer ineer join aqui -->
        </select>
        <button type="submit">Atualizar</button>
    </form>
</body>

</html>