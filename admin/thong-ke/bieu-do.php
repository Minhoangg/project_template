<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Loại', 'Số Lượng'],
            <?php
            foreach ($items as $item) {
                echo "['$item[ten_loai]',     $item[so_luong]],";
            }
            ?>
        ]);

        var options = {
            title: 'TỶ LỆ HÀNG HÓA',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
</script>
</head>

<body>
    <div class="container">
        <h2 class="text-center mt-5">BIỂU ĐỒ THỐNG KÊ</h2>
        <div class="row mt-5">

            <div class="mx-auto ">
                <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
            </div>
        </div>
    </div>
</body>

</html>