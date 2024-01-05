<?php
require_once 'Conexao.php';
class AlunoDAO
{
    private $con;

    public function __construct()
    {
        $this->con = Conexao::getConexao();
    }




    public function insert(Aluno $model)
    {
        $sql = "INSERT INTO alunos (nome,rga,curso_id) VALUES (?,?,?)";

        $stmt = $this->con->prepare($sql);
        print_r($model);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->rga);
        $stmt->bindValue(3, $model->curso_id);

        $stmt->execute();
    }



    public function select()
    {
        $sql = 'select id, curso_id, rga, nome from alunos';
        $stmt = $this->con->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }




    public function selectCursos()
    {
        $sql = 'select id_curso, nome_curso, cod from cursos';
        $stmt = $this->con->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectPorId(int $id)
    {
        $sql = 'SELECT alunos.id, alunos.curso_id, alunos.rga, alunos.nome AS nome_aluno, cursos.id_curso, cursos.cod, cursos.nome_curso
        FROM alunos
        INNER JOIN cursos ON alunos.curso_id = cursos.id_curso
        WHERE alunos.id = ?';
        $stmt = $this->con->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function update(Aluno $model)
    {
        $sql = "UPDATE alunos SET nome = ?,rga = ?,curso_id = ? WHERE id = ?";
        $stmt = $this->con->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->rga);
        $stmt->bindValue(3, $model->curso_id);
        $stmt->bindValue(4, $model->id);

        $stmt->execute();
    }
    public function delete(int $id)
    {
        $sql = 'DELETE from alunos WHERE id = ?';
        $stmt = $this->con->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
