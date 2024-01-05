<?php

	require_once('config/con_db.php');

	$aluno_id = (int) $_GET['aluno'];
	
	$nome = mysqli_real_escape_string($con,$_POST['nome']);
	$rga  = mysqli_real_escape_string($con,$_POST['rga']);
	$curso_id = (int) $_POST['curso'];
	
	$sql_atualiza = "UPDATE alunos SET curso_id='$curso_id', nome='$nome', rga='$rga' WHERE id='$aluno_id'";
	
	$result = mysqli_query($con, $sql_atualiza);
	
	//header("Location: listar-alunos.php");
	
	if ($result !== false) {
	
		?>
		<p>Aluno atualizado com sucesso!</p>
		<p><a href="listar-alunos.php">&lt;&lt;&nbsp;Voltar</a></p>
		<?php
	
	}
	else {
		echo "<br />Erro atualizando dados: ".mysqli_error($con);
	}


?>