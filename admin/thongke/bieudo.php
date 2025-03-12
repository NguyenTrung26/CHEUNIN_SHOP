<div class="row">
    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng sản phẩm'],
                <?php
                $tongdm = count($listthongke);
                $i = 1;
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    if ($i == $tongdm) $dauphay = ""; else $dauphay = ",";
                    echo "['" . $tendm . "', " . $countsp . "]" . $dauphay;
                    $i++;
                }
                ?>
            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'Thống kê sản phẩm theo loại',
                'width': 900,
                'height': 800,
                'animation': {
                    'startup': true,
                    'duration': 1000,
                    'easing': 'out'
                }
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</div>