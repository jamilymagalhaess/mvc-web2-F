<?php

	require_once('config/con_db.php');
	
	$sql_select = "SELECT * FROM alunos";
	
	$result = mysqli_query($con, $sql_select);
	
	//if ($result !== false)

	//tenho que percorrer o meu result
	while (($registro = mysqli_fetch_assoc($result)) != null) {
		?>
		Nome: <?php echo $registro['nome'] ?>
		<a href="form-edita-aluno.php?aluno=<?php echo $registro['id'] ?>">editar</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="deletar-aluno.php?aluno=<?php echo $registro['id'] ?>">deletar</a>
		<br />
		<?php
	}
	//cada vez que chamamos a função "mysqli_fetch" ela 'pega' uma linha do resultset ($result) e move o ponteiro para a próxima linha
	//$registro['id'], $registro['rga'], $registro['nome']
	
?>