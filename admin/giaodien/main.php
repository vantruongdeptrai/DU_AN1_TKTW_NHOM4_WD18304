<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thống kê</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Doanh thu theo tháng</div>
                            <?php
                            if (is_array($thongke_tien_thang)) {
                                extract($thongke_tien_thang);
                                echo '<div class="h5 mb-0 font-weight-bold text-gray-800">' . $tong_tien . ' VNĐ</div>';
                            }
                            ?>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Doanh thu 1 ngày</div>
                            <?php
                            if (is_array($thongke_tien_ngay)) {
                                extract($thongke_tien_ngay);
                                echo '<div class="h5 mb-0 font-weight-bold text-gray-800">' . $tong_tien . ' VNĐ</div>';
                            }
                            ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->

        <!-- Pending Requests Card Example -->

    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center ;">
                </div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                        const data = google.visualization.arrayToDataTable([
                            ['Danh mục', 'Số lượng'],
                            <?php
                            foreach ($thongke_danhmuc_soluong as $thongke) {
                                extract($thongke);
                                echo "['$ten_dm', $soluong],";
                            }
                            ?>
                        ]);

                        // Set Options
                        const options = {
                            title: 'Biểu đồ số lượng sản phẩm trong danh mục',
                            is3D: true
                        };

                        // Draw
                        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                        chart.draw(data, options);

                    }
                </script>
            </div>
        </div>

        <!-- Pie Chart -->
        
    </div>
    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            
            <!-- Color System -->

        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->