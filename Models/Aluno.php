<?php
class Aluno
{
    public $id, $nome, $rga, $curso_id;
    public $dados, $dados2;

    public function save()
    {
        $dao = new AlunoDAO();
        $dao->insert($this);
    }
    public function listar()
    {
        $dao = new alunoDAO();
        $this->dados = $dao->select();
    }
    public function listarCursos()
    {
        $dao = new alunoDAO();
        $this->dados2 = $dao->selectCursos();
    }

    public function listarPorID(int $id)
    {
        $dao = new alunoDAO();
        $this->dados = $dao->selectPorId($id);
    }
    public function deletar(int $id)
    {
        $dao = new alunoDAO();
        $this->dados = $dao->delete($id);
    }
    public function atualizar()
    {
        $dao = new alunoDAO();
        $dao->update($this);
    }
}
