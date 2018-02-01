<?php   // REQUIRES SCRIPTS

	echo '<style>';
		require('css/script.css');
	echo '</style>';


	echo '<script>';
		require('js/script.js');
	echo '</script>';

?>

<?php  // REQUIRES VIEWS

	require('views/menu.html');
	require('views/content1.php');
	require('views/novoCliente.php');

?>

<?php //Cria diretorios

	if (!isset($_POST['nomeCliente']))
  	$nomeCliente = null;
	else{
		$nomeCliente = $_POST['nomeCliente'];
		echo $nomeCliente;
	}
?>
