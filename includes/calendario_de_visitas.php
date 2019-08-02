<?php
session_start();
include_once("session.php");
include_once("conexao.php");
$responsavel = $_SESSION['nome'];
$result_events = "SELECT id, empresa, inicio, fim, cor FROM agendar_visitas where responsavel = '$responsavel'";
$resultado_events = mysqli_query($conn, $result_events);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset='utf-8' />
		<title>Agenda</title>
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
						
						$('#visualizar #id').text(event.id);
						$('#visualizar #empresa').text(event.empresa);
						$('#visualizar #inicio').text(event.inicio.format('DD/MM/YYYY HH:mm:ss'));
						$('#visualizar #fim').text(event.fim.format('DD/MM/YYYY HH:mm:ss'));
						$('#visualizar').modal('show');
						return false;

					},
					events: [
						<?php
							while($row_events = mysqli_fetch_array($resultado_events)){
								?>
								{
								id: '<?php echo $row_events['id']; ?>',
								Empresa: '<?php echo $row_events['empresa']; ?>',
								Inicio: '<?php echo $row_events['inicio']; ?>',
								Fim: '<?php echo $row_events['fim']; ?>',
								cor: '<?php echo $row_events['cor']; ?>',
								},<?php
							}
						?>
					]
				});
			});
		</script>
	</head>
	<body>

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
							<dd id="empresa"></dd>
							<dt>Inicio da visita</dt>
							<dd id="inicio"></dd>
							<dt>Fim da visita</dt>
							<dd id="fim"></dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
