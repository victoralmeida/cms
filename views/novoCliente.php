
<div id="novoCliente" class="content">
	<form action="index.php" method="POST">
		<input type="text" name="nomeCliente" value="teste">
		<input type="submit" value="Submit">
	</form>
</div>


<?php

	if (!isset($_POST['nomeCliente']))

  	$nomeCliente = null;

	else{

		$nomeCliente = $_POST['nomeCliente'];

		//Cria .sh com o nome do cliente
		$fp = fopen($nomeCliente.".sh", "a");

		//Identificacao e permissao
		$escreve  = fwrite($fp, "#!/bin/bash"."\r\n");
		$escreve  = fwrite($fp, "sudo su"."\r\n");

		//Criar copia do _original e 777
		$escreve  = fwrite($fp, "cd  /var/www/gnre.dootax.com.br/public_html/"."\r\n");
		$escreve  = fwrite($fp, "mkdir ".$nomeCliente."\r\n");
		$escreve  = fwrite($fp, "cp _original/* ./".$nomeCliente ." -Rf"."\r\n");
		$escreve  = fwrite($fp, "chmod 777 ".$nomeCliente."/ -Rf"."\r\n");

		//Criar backup
		$escreve  = fwrite($fp, "cd /bkp"."\r\n");
		$escreve  = fwrite($fp, "mkdir ".$nomeCliente."\r\n");
		$escreve  = fwrite($fp, "cd /bkp/".$nomeCliente."\r\n");
		$escreve  = fwrite($fp, "mkdir CNAB"."\r\n");
		$escreve  = fwrite($fp, "mkdir NFe"."\r\n");
		$escreve  = fwrite($fp, "cd /bkp"."\r\n");
		$escreve  = fwrite($fp, "chmod 777 ".$nomeCliente."/ -Rf"."\r\n");

		fclose($fp);

		chmod($nomeCliente.'.sh', 0777);

		//Executa arquivo
		echo shell_exec("sh ".$nomeCliente.".sh");

	}
?>
