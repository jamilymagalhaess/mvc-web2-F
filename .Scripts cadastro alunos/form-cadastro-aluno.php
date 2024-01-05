<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Formulário</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<form method="POST" 
			  action="inserir-aluno.php">
			Nome aluno: <input name="nome" 
				type="text" />
			<br />	
			RGA aluno: <input name="rga" 
				type="text" />	
			<br />
			Curso:
			<select name="curso">
				<option value="0">- selecione -</option>
				<?php
				
					require_once("config/con_db.php");
					
					$sql_cursos = "SELECT * FROM cursos ORDER BY nome ASC";
					
					$result = mysqli_query($con,$sql_cursos);
					
					while ($dados_curso = mysqli_fetch_assoc($result)) {
						?>
						<option value="<?php echo $dados_curso['id'] ?>"><?php echo $dados_curso['cod']." - ".$dados_curso['nome'] ?></option>
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
			<button type="submit">Enviar</button>
		</form>
	</body>
</html>