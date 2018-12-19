@extends('layouts.dashboard_layout')
@section('includes')
    @parent
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
@endsection
@section('menu')
    @parent

@endsection
@section('title', 'Štatistiky')
@section('content')
    @parent

    <script type="text/javascript">
        var analytics = <?php echo $type; ?>

        google.charts.load('current', {'packages': ['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title: 'Percentuálne zobrazenie typov domov pre konkrétnu kanceláriu.'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>


    <script type="text/javascript">
        var analytics2 = <?php echo $type_glob; ?>

        google.charts.load('current', {'packages': ['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data2 = google.visualization.arrayToDataTable(analytics2);
            var options2 = {
                title: 'Percentuálne zobrazenie typov domov všetkých inzerátov.'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart2'));
            chart.draw(data2, options2);
        }
    </script>

    <script type="text/javascript">
        var analytics3 = <?php echo $issale; ?>

        google.charts.load('current', {'packages': ['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data3 = google.visualization.arrayToDataTable(analytics3);
            var options3 = {
                title: 'Percentuálne zobrazenie domov na predaj/prenájom pre konkrétnu kanceláriu.'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart3'));
            chart.draw(data3, options3);
        }
    </script>

    <script type="text/javascript">
        var analytics4 = <?php echo $issale_glob; ?>

        google.charts.load('current', {'packages': ['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data4 = google.visualization.arrayToDataTable(analytics4);
            var options4 = {
                title: 'Percentuálne zobrazenie domov na predaj/prenájom všetkých inzerátov.'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart4'));
            chart.draw(data4, options4);
        }
    </script>


    <div class="chart-flex">
        <div >
            <h3>Globálne štatistiky</h3>
            <div class="chart-flex">
                <div id="pie_chart2" class="chart"></div>
                <div id="pie_chart4" class="chart"></div>
            </div>

        </div>
        <div>
            <h3>Štatistiky kancelárie</h3>
            <div  class="chart-flex">
                <div id="pie_chart" class="chart"></div>
                <div id="pie_chart3" class="chart"></div>
            </div>

        </div>
    </div>
    <script></script>
@endsection