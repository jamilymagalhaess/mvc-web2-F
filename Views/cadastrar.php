<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Formulário</title>
    <meta charset="utf-8" />
</head>

<body>
    <form method="POST" action="/mvc-web2-F/aluno/save">
        <fieldset>
            Nome aluno: <input name="nome" type="text" />
            <br />
            RGA aluno: <input name="rga" type="text" />
            <br />
            Curso:
            <select name="curso">
                <option value="0">- selecione -</option>
                <?php
                foreach ($dadosModel->dados2 as $item) : ?>
                    <option value="
                    <?= $item->id_curso ?>
                    ">
                        <?= $item->cod ?> - <?= $item->nome_curso ?>

                    </option>
                <?php endforeach ?>
            </select>
            <button type="submit">Enviar</button>
        </fieldset>
    </form>
</body>

</html>