<div style="margin:20px 0px" class="card">
    <div class="card-header text-uppercase">BIỂU ĐỒ</div>
</div>
<div id="myChart" style="width:100%; max-width:1100px; height:550px;">
</div>

<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php
            $tongdm = count($listthongke);
            $i = 1;
            foreach ($listthongke as $thongke) {
                extract($thongke);
                if ($i == $tongdm) {
                    $dau = "";
                } else {
                    $dau = ",";
                }
                echo "['" . $thongke['tendm'] . "'," . $thongke['countsp'] . "]" . $dau;
                $i++;
            }
            ?>
        ]);

        var options = {
            title: 'Biểu đồ thống kê hàng hóa'
        };
        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
</script>