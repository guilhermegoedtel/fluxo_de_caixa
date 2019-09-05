<?php
session_start();
include 'includes/session.php';
include_once("conectar.php");
include_once("query.php");
include_once("query_entrada.php");
//echo date('m');
$saida_01 = 'Taxas Bancárias';
$saida_02 = 'Impostos/Encargos';
$saida_03 = 'Despesas';
$saida_04 = 'Pagamento Fornecedores';
$saida_05 = 'Funcionários';
$saida_06 = 'Respresentantes';
$escreve_total = 'TOTAL';
$entrada_01 = 'Ferramentas';
$entrada_02 = 'Customizações';
$entrada_03 = 'Treinamentos';
$teste = 'Despesas';
?>
<!DOCtype html>

<head>
    <meta charset="utf-8">
    <title>Fluxo de caixa</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['table']
        });
        google.charts.setOnLoadCallback(drawTable);

        function drawTable() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Despesas');
            data.addColumn('string', 'P JAN');
            data.addColumn('string', 'R JAN');
            data.addColumn('string', 'P FEV');
            data.addColumn('string', 'R FEV');
            data.addColumn('string', 'P MAR');
            data.addColumn('string', 'R MAR');
            data.addColumn('string', 'P ABR');
            data.addColumn('string', 'R ABR');
            data.addColumn('string', 'P MAI');
            data.addColumn('string', 'R MAI');
            data.addColumn('string', 'P JUN');
            data.addColumn('string', 'R JUN');
            data.addColumn('string', 'P JUL');
            data.addColumn('string', 'R JUL');
            data.addColumn('string', 'P AGO');
            data.addColumn('string', 'R AGO');
            data.addColumn('string', 'P SET');
            data.addColumn('string', 'R SET');
            data.addColumn('string', 'P OUT');
            data.addColumn('string', 'R OUT');
            data.addColumn('string', 'P NOV');
            data.addColumn('string', 'R NOV');
            data.addColumn('string', 'P DEZ');
            data.addColumn('string', 'R DEZ');
            data.addRows([
                ['<?php echo $saida_01; ?>', '<?php echo $plane_taxas_01; ?>', '<?php echo $pago_taxas_01; ?>', '<?php echo $plane_taxas_02; ?>', '<?php echo $pago_taxas_02; ?>', '<?php echo $plane_taxas_03; ?>', '<?php echo $pago_taxas_03; ?>', '<?php echo $plane_taxas_04; ?>', '<?php echo $pago_taxas_04; ?>', '<?php echo $plane_taxas_05; ?>', '<?php echo $pago_taxas_05; ?>', '<?php echo $plane_taxas_06; ?>', '<?php echo $pago_taxas_06; ?>', '<?php echo $plane_taxas_07; ?>', '<?php echo $pago_taxas_07; ?>', '<?php echo $plane_taxas_08; ?>', '<?php echo $pago_taxas_08; ?>', '<?php echo $plane_taxas_09; ?>', '<?php echo $pago_taxas_09; ?>', '<?php echo $plane_taxas_10; ?>', '<?php echo $pago_taxas_10; ?>', '<?php echo $plane_taxas_11; ?>', '<?php echo $pago_taxas_11; ?>', '<?php echo $plane_taxas_12; ?>', '<?php echo $pago_taxas_12; ?>'],
                ['<?php echo $saida_02; ?>', '<?php echo $plane_impostos_01; ?>', '<?php echo $pago_impostos_01; ?>', '<?php echo $plane_impostos_02; ?>', '<?php echo $pago_impostos_02; ?>', '<?php echo $plane_impostos_03; ?>', '<?php echo $pago_impostos_03; ?>', '<?php echo $plane_impostos_04; ?>', '<?php echo $pago_impostos_04; ?>', '<?php echo $plane_impostos_05; ?>', '<?php echo $pago_impostos_05; ?>', '<?php echo $plane_impostos_06; ?>', '<?php echo $pago_impostos_06; ?>', '<?php echo $plane_impostos_07; ?>', '<?php echo $pago_impostos_07; ?>', '<?php echo $plane_impostos_08; ?>', '<?php echo $pago_impostos_08; ?>', '<?php echo $plane_impostos_09; ?>', '<?php echo $pago_impostos_09; ?>', '<?php echo $plane_impostos_10; ?>', '<?php echo $pago_impostos_10; ?>', '<?php echo $plane_impostos_11; ?>', '<?php echo $pago_impostos_11; ?>', '<?php echo $plane_impostos_12; ?>', '<?php echo $pago_impostos_12; ?>'],
                ['<?php echo $saida_03; ?>', '<?php echo $plane_desp_01; ?>', '<?php echo $pago_desp_01; ?>', '<?php echo $plane_desp_02; ?>', '<?php echo $pago_desp_02; ?>', '<?php echo $plane_desp_03; ?>', '<?php echo $pago_desp_03; ?>', '<?php echo $plane_desp_04; ?>', '<?php echo $pago_desp_04; ?>', '<?php echo $plane_desp_05; ?>', '<?php echo $pago_desp_05; ?>', '<?php echo $plane_desp_06; ?>', '<?php echo $pago_desp_06; ?>', '<?php echo $plane_desp_07; ?>', '<?php echo $pago_desp_07; ?>', '<?php echo $plane_desp_08; ?>', '<?php echo $pago_desp_08; ?>', '<?php echo $plane_desp_09; ?>', '<?php echo $pago_desp_09; ?>', '<?php echo $plane_desp_10; ?>', '<?php echo $pago_desp_10; ?>', '<?php echo $plane_desp_11; ?>', '<?php echo $pago_desp_11; ?>', '<?php echo $plane_desp_12; ?>', '<?php echo $pago_desp_12; ?>'],
                ['<?php echo $saida_04; ?>', '<?php echo $plane_forn_01; ?>', '<?php echo $pago_forn_01; ?>', '<?php echo $plane_forn_02; ?>', '<?php echo $pago_forn_02; ?>', '<?php echo $plane_forn_03; ?>', '<?php echo $pago_forn_03; ?>', '<?php echo $plane_forn_04; ?>', '<?php echo $pago_forn_04; ?>', '<?php echo $plane_forn_05; ?>', '<?php echo $pago_forn_05; ?>', '<?php echo $plane_forn_06; ?>', '<?php echo $pago_forn_06; ?>', '<?php echo $plane_forn_07; ?>', '<?php echo $pago_forn_07; ?>', '<?php echo $plane_forn_08; ?>', '<?php echo $pago_forn_08; ?>', '<?php echo $plane_forn_09; ?>', '<?php echo $pago_forn_09; ?>', '<?php echo $plane_forn_10; ?>', '<?php echo $pago_forn_10; ?>', '<?php echo $plane_forn_11; ?>', '<?php echo $pago_forn_11; ?>', '<?php echo $plane_forn_12; ?>', '<?php echo $pago_forn_12; ?>'],
                ['<?php echo $saida_05; ?>', '<?php echo $plane_func_01; ?>', '<?php echo $pago_func_01; ?>', '<?php echo $plane_func_02; ?>', '<?php echo $pago_func_02; ?>', '<?php echo $plane_func_03; ?>', '<?php echo $pago_func_03; ?>', '<?php echo $plane_func_04; ?>', '<?php echo $pago_func_04; ?>', '<?php echo $plane_func_05; ?>', '<?php echo $pago_func_05; ?>', '<?php echo $plane_func_06; ?>', '<?php echo $pago_func_06; ?>', '<?php echo $plane_func_07; ?>', '<?php echo $pago_func_07; ?>', '<?php echo $plane_func_08; ?>', '<?php echo $pago_func_08; ?>', '<?php echo $plane_func_09; ?>', '<?php echo $pago_func_09; ?>', '<?php echo $plane_func_10; ?>', '<?php echo $pago_func_10; ?>', '<?php echo $plane_func_11; ?>', '<?php echo $pago_func_11; ?>', '<?php echo $plane_func_12; ?>', '<?php echo $pago_func_12; ?>'],
                ['<?php echo $saida_06; ?>', '<?php echo $plane_repre_01; ?>', '<?php echo $pago_repre_01; ?>', '<?php echo $plane_repre_02; ?>', '<?php echo $pago_repre_02; ?>', '<?php echo $plane_repre_03; ?>', '<?php echo $pago_repre_03; ?>', '<?php echo $plane_repre_04; ?>', '<?php echo $pago_repre_04; ?>', '<?php echo $plane_repre_05; ?>', '<?php echo $pago_repre_05; ?>', '<?php echo $plane_repre_06; ?>', '<?php echo $pago_repre_06; ?>', '<?php echo $plane_repre_07; ?>', '<?php echo $pago_repre_07; ?>', '<?php echo $plane_repre_08; ?>', '<?php echo $pago_repre_08; ?>', '<?php echo $plane_repre_09; ?>', '<?php echo $pago_repre_09; ?>', '<?php echo $plane_repre_10; ?>', '<?php echo $pago_repre_10; ?>', '<?php echo $plane_repre_11; ?>', '<?php echo $pago_repre_11; ?>', '<?php echo $plane_repre_12; ?>', '<?php echo $pago_repre_12; ?>'],
                ['<?php echo $escreve_total; ?>', '<?php echo $total_plane_01; ?>', '<?php echo $total_pago_01; ?>', '<?php echo $total_plane_02; ?>', '<?php echo $total_pago_02; ?>', '<?php echo $total_plane_03; ?>', '<?php echo $total_pago_03; ?>', '<?php echo $total_plane_04; ?>', '<?php echo $total_pago_04; ?>', '<?php echo $total_plane_05; ?>', '<?php echo $total_pago_05; ?>', '<?php echo $total_plane_06; ?>', '<?php echo $total_pago_06; ?>', '<?php echo $total_plane_07; ?>', '<?php echo $total_pago_07; ?>', '<?php echo $total_plane_08; ?>', '<?php echo $total_pago_08; ?>', '<?php echo $total_plane_09; ?>', '<?php echo $total_pago_09; ?>', '<?php echo $total_plane_10; ?>', '<?php echo $total_pago_10; ?>', '<?php echo $total_plane_11; ?>', '<?php echo $total_pago_11; ?>', '<?php echo $total_plane_12; ?>', '<?php echo $total_pago_12; ?>']
            ]);
            var table = new google.visualization.Table(document.getElementById('table'));
            table.draw(data, {
                showRowNumber: true,
                width: '100%',
                height: '100%'
            });
        }
    </script>
    <!--Dashboard de Entradas -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['table']
        });
        google.charts.setOnLoadCallback(drawTable);

        function drawTable() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Entradas');
            data.addColumn('string', 'P JAN');
            data.addColumn('string', 'R JAN');
            data.addColumn('string', 'P FEV');
            data.addColumn('string', 'R FEV');
            data.addColumn('string', 'P MAR');
            data.addColumn('string', 'R MAR');
            data.addColumn('string', 'P ABR');
            data.addColumn('string', 'R ABR');
            data.addColumn('string', 'P MAI');
            data.addColumn('string', 'R MAI');
            data.addColumn('string', 'P JUN');
            data.addColumn('string', 'R JUN');
            data.addColumn('string', 'P JUL');
            data.addColumn('string', 'R JUL');
            data.addColumn('string', 'P AGO');
            data.addColumn('string', 'R AGO');
            data.addColumn('string', 'P SET');
            data.addColumn('string', 'R SET');
            data.addColumn('string', 'P OUT');
            data.addColumn('string', 'R OUT');
            data.addColumn('string', 'P NOV');
            data.addColumn('string', 'R NOV');
            data.addColumn('string', 'P DEZ');
            data.addColumn('string', 'R DEZ');
            data.addRows([
                ['<?php echo $entrada_01; ?>', '<?php echo $plane_ferramentas_01; ?>', '<?php echo $pago_ferramentas_01; ?>', '<?php echo $plane_ferramentas_02; ?>', '<?php echo $pago_ferramentas_02; ?>', '<?php echo $plane_ferramentas_03; ?>', '<?php echo $pago_ferramentas_03; ?>', '<?php echo $plane_ferramentas_04; ?>', '<?php echo $pago_ferramentas_04; ?>', '<?php echo $plane_ferramentas_05; ?>', '<?php echo $pago_ferramentas_05; ?>', '<?php echo $plane_ferramentas_06; ?>', '<?php echo $pago_ferramentas_06; ?>', '<?php echo $plane_ferramentas_07; ?>', '<?php echo $pago_ferramentas_07; ?>', '<?php echo $plane_ferramentas_08; ?>', '<?php echo $pago_ferramentas_08; ?>', '<?php echo $plane_ferramentas_09; ?>', '<?php echo $pago_ferramentas_09; ?>', '<?php echo $plane_ferramentas_10; ?>', '<?php echo $pago_ferramentas_10; ?>', '<?php echo $plane_ferramentas_11; ?>', '<?php echo $pago_ferramentas_11; ?>', '<?php echo $plane_ferramentas_12; ?>', '<?php echo $pago_ferramentas_12; ?>'],
                ['<?php echo $entrada_02; ?>', '<?php echo $plane_customizacoes_01; ?>', '<?php echo $pago_customizacoes_01; ?>', '<?php echo $plane_customizacoes_02; ?>', '<?php echo $pago_customizacoes_02; ?>', '<?php echo $plane_customizacoes_03; ?>', '<?php echo $pago_customizacoes_03; ?>', '<?php echo $plane_customizacoes_04; ?>', '<?php echo $pago_customizacoes_04; ?>', '<?php echo $plane_customizacoes_05; ?>', '<?php echo $pago_customizacoes_05; ?>', '<?php echo $plane_customizacoes_06; ?>', '<?php echo $pago_customizacoes_06; ?>', '<?php echo $plane_customizacoes_07; ?>', '<?php echo $pago_customizacoes_07; ?>', '<?php echo $plane_customizacoes_08; ?>', '<?php echo $pago_customizacoes_08; ?>', '<?php echo $plane_customizacoes_09; ?>', '<?php echo $pago_customizacoes_09; ?>', '<?php echo $plane_customizacoes_10; ?>', '<?php echo $pago_customizacoes_10; ?>', '<?php echo $plane_customizacoes_11; ?>', '<?php echo $pago_customizacoes_11; ?>', '<?php echo $plane_customizacoes_12; ?>', '<?php echo $pago_customizacoes_12; ?>'],
                ['<?php echo $entrada_03; ?>', '<?php echo $plane_treinamento_01; ?>', '<?php echo $pago_treinamento_01; ?>', '<?php echo $plane_treinamento_02; ?>', '<?php echo $pago_treinamento_02; ?>', '<?php echo $plane_treinamento_03; ?>', '<?php echo $pago_treinamento_03; ?>', '<?php echo $plane_treinamento_04; ?>', '<?php echo $pago_treinamento_04; ?>', '<?php echo $plane_treinamento_05; ?>', '<?php echo $pago_treinamento_05; ?>', '<?php echo $plane_treinamento_06; ?>', '<?php echo $pago_treinamento_06; ?>', '<?php echo $plane_treinamento_07; ?>', '<?php echo $pago_treinamento_07; ?>', '<?php echo $plane_treinamento_08; ?>', '<?php echo $pago_treinamento_08; ?>', '<?php echo $plane_treinamento_09; ?>', '<?php echo $pago_treinamento_09; ?>', '<?php echo $plane_treinamento_10; ?>', '<?php echo $pago_treinamento_10; ?>', '<?php echo $plane_treinamento_11; ?>', '<?php echo $pago_treinamento_11; ?>', '<?php echo $plane_treinamento_12; ?>', '<?php echo $pago_treinamento_12; ?>'],
                ['<?php echo $escreve_total; ?>', '<?php echo $total_formatado_plane_01; ?>', '<?php echo $total_formatado_pago_01; ?>', '<?php echo $total_formatado_plane_02; ?>', '<?php echo $total_formatado_pago_02; ?>', '<?php echo $total_formatado_plane_03; ?>', '<?php echo $total_formatado_pago_03; ?>', '<?php echo $total_formatado_plane_04; ?>', '<?php echo $total_formatado_pago_04; ?>', '<?php echo $total_formatado_plane_05; ?>', '<?php echo $total_formatado_pago_05; ?>', '<?php echo $total_formatado_plane_06; ?>', '<?php echo $total_formatado_pago_06; ?>', '<?php echo $total_formatado_plane_07; ?>', '<?php echo $total_formatado_pago_07; ?>', '<?php echo $total_formatado_plane_08; ?>', '<?php echo $total_formatado_pago_08; ?>', '<?php echo $total_formatado_plane_09; ?>', '<?php echo $total_formatado_pago_09; ?>', '<?php echo $total_formatado_plane_10; ?>', '<?php echo $total_formatado_pago_10; ?>', '<?php echo $total_formatado_plane_11; ?>', '<?php echo $total_formatado_pago_11; ?>', '<?php echo $total_formatado_plane_12; ?>', '<?php echo $total_formatado_pago_12; ?>']
            ]);
            var table = new google.visualization.Table(document.getElementById('table_div'));
            table.draw(data, {
                showRowNumber: true,
                width: '100%',
                height: '100%'
            });
        }
    </script>
</head>
<style>
    body {
        background-image: url("images/principal.jpg");
        background-repeat: no-repeat;
    }
</style>

<body>
    <?php
    include 'includes/menu.php';
    ?>
    <br><br><br><br>
        <center><b>Saidas</b></center>
        <br>
        <div id="table"></div>
        <br>
        <center><b>Entradas</b></center>
        <br>
        <div id="table_div"></div>
</body>

</html>