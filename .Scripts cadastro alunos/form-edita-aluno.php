<?php

require_once("config/con_db.php");

$aluno_id = (int) $_GET['aluno'];

$aluno_id = mysqli_real_escape_string($con, $aluno_id); //nesse caso específico não é necessário

$sql_aluno = "SELECT * FROM alunos
					WHERE id='$aluno_id'";

if ($aluno_id == 0) {
	die("Dados inválidos!");
}

$result = mysqli_query($con, $sql_aluno);

$dados_aluno = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {

?>

	<!DOCTYPE html>
	<html lang="pt-br">

	<head>
		<title>Formulário Editar Aluno</title>
		<meta charset="utf-8" />
	</head>

	<body>
		<form method="POST" action="atualizar-dados.php?aluno=<?php echo $dados_aluno['id'] ?>">
			<input type="hidden" name="id" value="<?php echo $dados_aluno['id'] ?>" />
			Nome aluno: <input name="nome" type="text" value="<?php echo $dados_aluno['nome'] ?>" />
			<br />
			RGA aluno: <input name="rga" type="text" value="<?php echo $dados_aluno['rga'] ?>" />
			<br />
			Curso:
			<select name="curso">
				<option value="0">- selecione -</option>
				<?php

				$sql_cursos = "SELECT * FROM cursos ORDER BY nome ASC";

				$result = mysqli_query($con, $sql_cursos);

				while ($dados_curso = mysqli_fetch_assoc($result)) {
				?>
					<option value="<?php echo $dados_curso['id'] ?>" <?php echo ($dados_aluno['curso_id'] == $dados_curso['id'] ? " selected" : null) ?>>
						<?php echo $dados_curso['cod'] . " - " . $dados_curso['nome'] ?></option>
				<?php
				}

				?>

			</select>
			<br />
			Turno:
			<select name="turno">
				<option value="1">Matutino</option>
				<option value="2">Vespertino</option>
				<option value="3">Noturno</option>
				<option value="4">Integral</option>
			</select>
			<br />
			<button type="submit">Atualizar</button>
		</form>
	</body>

	</html>
<?php
} else {
	echo "<br />Aluno não existe!";
}
?>