<!doctype html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>DataTables Editor - annuaire</title>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.10.20/b-1.6.1/sl-1.3.1/datatables.min.css">
		<link rel="stylesheet" type="text/css" href="../css/generator-base.css">
		<link rel="stylesheet" type="text/css" href="../css/editor.dataTables.min.css">

			<?php 
				$page_name = dirname(__FILE__);
				$each_page_name = explode('/', $page_name);
			?>

		<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.10.20/b-1.6.1/sl-1.3.1/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="../js/dataTables.editor.min.js"></script>
		<script type="text/javascript" var current_directory='<?php echo end($each_page_name); ?>'; charset="utf-8" src="../js/table.annuaire.js"></script>
	</head>
	<body class="dataTables">
		<div class="container">
			

			<h1>
				DataTables Editor <span>annuaire</span> <?php echo end($each_page_name); ?>
			</h1>

			<?php require($_SERVER['DOCUMENT_ROOT'].'/includes/menu.php'); ?>

			<table cellpadding="0" cellspacing="0" border="0" class="display" id="annuaire" width="100%">
				<thead>
					<tr>
						<th>first_name</th>
						<th>last_name</th>
						<th>email</th>
						<th>phone</th>
						<th>address</th>
						<th>postal</th>
						<th>city</th>
					</tr>
				</thead>
			</table>

		</div>
	</body>
</html>
