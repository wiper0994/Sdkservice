<html>
	<head>
	<script language="JavaScript">
	function openPop(pagename){
    window.open(pagename,'','toolbar=no,scrollbars=yes,location=no,directories=no,status=no,menubar=no,resizable=yes,height=420,width=740')} 

	</script>
	</head>
	
	<body>
		<?php
			if($_POST['Periodo'] == "Null")
			{
				header('Location: SeleccionPeriodo.php');
			}
			if($_POST['Periodo'] == "NotEstu2016-1")
			{
				header('Location: NotEstu2016-1.php');
			}
			if($_POST['Periodo'] == "NotEstu2016-2")
			{
				header('Location: NotEstu2016-2.php');
			}
			if($_POST['Periodo'] == "NotEstu2017-1")
			{
				header('Location: NotEstu2017-1.php');
			}
			if($_POST['Periodo'] == "NotEstu2017-2")
			{
				header('Location: NotEstu2017-2.php');
			}
			if($_POST['Periodo'] == "NotEstu2018-1")
			{
				header('Location: NotEstu2018-1.php');
			}
			if($_POST['Periodo'] == "NotEstu2018-2")
			{
				header('Location: NotEstu2018-2.php');
			}
			if($_POST['Periodo'] == "PeriodoActual")
			{
				header('Location: PeriodoActual.php');
			}
			
		?>
	</body>
</html>	