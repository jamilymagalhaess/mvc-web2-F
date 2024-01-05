<?php

	require_once("config/con_db.php");

	$aluno_id = (int) $_GET['aluno'];
	
	$sql_delete = "DELETE FROM alunos WHERE id='$aluno_id'";
	
	$result = mysqli_query($con,$sql_delete);
	
	if ($result !== false) {
		?>
		<p>Aluno deletado com sucesso!</p>
		<p><a href="listar-alunos.php">&lt;&lt;&nbsp;Voltar</a></p>
		<?php
	}
	else {
		echo "<br />Erro deletando aluno! ".mysqli_error($con);
	}

?>