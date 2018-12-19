<!DOCTYPE html>
<html>
<head>
    <title>Google Pie</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <style type="text/css">
        .box{
            width:800px;
            margin:0 auto;
        }
    </style>
    <script type="text/javascript">
        var analytics = <?php echo $type; ?>

        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);
        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title : 'Percentuálne zobrazenie typov domov pre konkrétnu kanceláriu.'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>


    <script type="text/javascript">
        var analytics2 = <?php echo $type_glob; ?>

        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);
        function drawChart()
        {
            var data2 = google.visualization.arrayToDataTable(analytics2);
            var options2 = {
                title : 'Percentuálne zobrazenie typov domov všetkých inzerátov.'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart2'));
            chart.draw(data2, options2);
        }
    </script>

    <script type="text/javascript">
        var analytics3 = <?php echo $issale; ?>

        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);
        function drawChart()
        {
            var data3 = google.visualization.arrayToDataTable(analytics3);
            var options3 = {
                title : 'Percentuálne zobrazenie domov na predaj/prenájom pre konkrétnu kanceláriu.'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart3'));
            chart.draw(data3, options3);
        }
    </script>

    <script type="text/javascript">
        var analytics4 = <?php echo $issale_glob; ?>

        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);
        function drawChart()
        {
            var data4 = google.visualization.arrayToDataTable(analytics4);
            var options4 = {
                title : 'Percentuálne zobrazenie domov na predaj/prenájom všetkých inzerátov.'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart4'));
            chart.draw(data4, options4);
        }
    </script>

</head>
<body>
<br />
<div class="container">
    <h3 align="center">Google Pie Chart</h3><br />

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Percentuálne zobrazenie domov na predaj a prenájom.</h3>
        </div>
        <div class="panel-body" align="center">
            <div id="pie_chart" style="width:750px; height:450px;"></div>
            <div id="pie_chart2" style="width:750px; height:450px;"></div>
            <div id="pie_chart3" style="width:750px; height:450px;"></div>
            <div id="pie_chart4" style="width:750px; height:450px;"></div>
        </div>
    </div>

</div>
</body>
</html>