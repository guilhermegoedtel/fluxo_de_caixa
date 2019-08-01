<?php
session_start();
$responsavel = $_SESSION['nome'];
include '../includes/session.php';
include_once("conectar.php");
$result_events = "SELECT ID, empresa, data, cor FROM agenda_visitas where responsavel='$responsavel'";
$resultado_events = mysqli_query($conn, $result_events);
/*while($row_events = mysqli_fetch_array($resultado_events)){
	echo $row_events['ID'];
	echo $row_events['empresa'];
	echo $row_events['data'];
	echo $row_events['cor'];
}*/
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset='utf-8' />
		<title>Fluxo de Caixa</title>
		<link href='../assents/css/bootstrap.min.css' rel='stylesheet'>
		<link href='../assents/css/fullcalendar.min.css' rel='stylesheet' />
		<link href='../assents/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
		<link href='../assents/css/personalizado.css' rel='stylesheet' />
		<script src='../assents/js/jquery.min.js'></script>
		<script src='../assents/js/bootstrap.min.js'></script>
		<script src='../assents/js/moment.min.js'></script>
		<script src='../assents/js/fullcalendar.min.js'></script>
		<script src='../assents/js/pt-br.js'></script>
		<script>
			$(document).ready(function() {
				$('#calendar').fullCalendar({
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay'
					},
					defaultDate: Date(),
					navLinks: true,
					editable: true,
					eventLimit: true,
					eventClick: function(event) {
						
						$('#visualizar #id').text(event.ID);
						$('#visualizar #title').text(event.empresa);
						$('#visualizar #date').text(event.inicio.format('DD/MM/YYYY'));
						$('#visualizar #date').text(event.fim.format('DD/MM/YYYY'));
						$('#visualizar').modal('show');
						return false;

					},
					events: [
						<?php
							while($row_events = mysqli_fetch_array($resultado_events)){
								?>
								{
								id: '<?php echo $row_events['ID']; ?>',
								title: '<?php echo $row_events['empresa']; ?>',
								start: '<?php echo $row_events['data']; ?>',
								end: '<?php echo $row_events['data']; ?>',
								color: '<?php echo $row_events['cor']; ?>',
								},<?php
							}
						?>
					]
				});
			});
		</script>
</head>
<body>
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
            <button type="button" class="btn btn-info" onclick="location.href='../principal_representantes.php'">Voltar</button>
            </li>
          </ul>
        </div>
    </nav>
</div> 

<div id='calendar'></div>

<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center">Dados da Visita</h4>
			</div>
			<div class="modal-body">
				<dl class="dl-horizontal">
					<dt>ID da Visita</dt>
					<dd id="id"></dd>
					<dt>Empresa a ser visitada</dt>
					<dd id="title"></dd>
					<dt>data da visita</dt>
					<dd id="date"></dd>
				</dl>
			</div>
		</div>
	</div>
</div>
</body>
</html>
