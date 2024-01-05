<?php

class alunoController extends Controller
{
    public function index()
    {
        // 1)chamar um model
        // 2) chamar uma view
        // 3) fazer junção de back e front
        $model = new Aluno();
        $this->carregarTemplate('aluno', $model);
    }


    public function cadastrar()
    {
        $model = new Aluno();
        $model->listarCursos();
        $this->carregarTemplate('cadastrar', $model);
    }
    public function save()
    {
        $model = new aluno();
        $model->nome = $_POST['nome'];
        $model->rga = $_POST['rga'];
        $model->curso_id = $_POST['curso'];

        $result = $model->save();

        if ($result !== false) {
            echo "<br />Registro inserido com sucesso!";
        } else {
            echo "<br />Erro inserindo registro: ";
        }
        // header("Location: /aluno");
    }

    public function editar()
    {
        $model = new Aluno();
        $result = $model->listarPorID((int)$_GET['id']);
        $result2 = $model->listarCursos();

        if (($result !== false) && ($result2 !== false)) {
            $this->carregarTemplate('editar', $model);
        } else {
            echo "<br />Aluno não existe!";
        }
    }
    public function listar()
    {
        $model = new Aluno();
        $model->listar();
        $this->carregarTemplate('listar', $model);
    }

    public function atualizar()
    {
        $model = new aluno();
        $model->nome = $_POST['nome'];
        $model->rga = $_POST['rga'];
        $model->curso_id = $_POST['curso'];
        $model->id = $_GET['id'];
        $result = $model->atualizar();

        if ($result !== false) {
            echo "<br />Registro atualizado com sucesso!";
        } else {
            echo "<br />Erro atualizar registro: ";
        }
        // header("Location: /aluno");
    }

    public function deletar()
    {
        $model = new Aluno();

        $result = $model->deletar((int)$_GET['id']);

        if ($result !== false) {
            echo "<br />Aluno deletado com sucesso!";
        } else {
            echo "<br />Erro ao deletar aluno! ";
        }
    }
}
