<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Dashboard - Warung Update</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block" style="color: #04c99e;">Warung Update</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span> </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider" />
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider" />
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider" />
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider" />
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>
          </ul>
          <!-- End Notification Dropdown Items -->
        </li>
        <!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span> </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center" href="cek_data_akun.php">
                <i class="bi bi-gear"></i>
                <span>Account Management</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul>
          <!-- End Profile Dropdown Items -->
        </li>
        <!-- End Profile Nav -->
      </ul>
    </nav>
    <!-- End Icons Navigation -->
  </header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" style="background-color: #04c99e">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide-fill"></i><span>Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="daftarproduk.php">
              <i class="bi bi-circle"></i><span>Daftar Produk</span>
            </a>
          </li>
          <li>
            <a href="kelolastokbahan.php">
              <i class="bi bi-circle"></i><span>Kelola Stok Bahan</span>
            </a>
          </li>
          <li>
            <a href="kelolaproperty.php">
              <i class="bi bi-circle"></i><span>Kelola Property</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="penjualan.php">
          <i class="bi bi-cart"></i>
          <span>Penjualan</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li>
      <!-- End Login Page Nav -->
    </ul>
  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <!-- Sales Card -->
            <div class="col-md-6">
              <div class="card info-card sales-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="?filterSales=day">Hari Ini</a></li>
                    <li><a class="dropdown-item" href="?filterSales=month">Bulan Ini</a></li>
                    <li><a class="dropdown-item" href="?filterSales=year">Tahun Ini</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Penjualan <span>|
                      <?php echo getFilterLab('Sales'); ?>
                    </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <?php
                      // Include the database connection file if not already included
                      include 'koneksi.php';

                      // Function to get the filter label
                      function getFilterLab($card)
                      {
                        if (isset($_GET["filter{$card}"])) {
                          switch ($_GET["filter{$card}"]) {
                            case 'day':
                              return 'Hari Ini';
                            case 'month':
                              return 'Bulan Ini';
                            case 'year':
                              return 'Tahun Ini';
                            default:
                              return 'Hari Ini'; // Default to 'Hari Ini' if the filter is not set or invalid
                          }
                        } else {
                          return 'Hari Ini'; // Default to 'Hari Ini' if the filter is not set
                        }
                      }

                      // Logic to calculate and display total kuantitas based on the filter
                      $filterSales = isset($_GET['filterSales']) ? $_GET['filterSales'] : 'day';

                      // Define the date condition based on the selected filter
                      switch ($filterSales) {
                        case 'day':
                          $dateConditionSales = "DATE(tgl) = CURDATE()";
                          break;
                        case 'month':
                          $dateConditionSales = "MONTH(tgl) = MONTH(NOW()) AND YEAR(tgl) = YEAR(NOW())";
                          break;
                        case 'year':
                          $dateConditionSales = "YEAR(tgl) = YEAR(NOW())";
                          break;
                        default:
                          $dateConditionSales = "DATE(tgl) = CURDATE()";
                          break;
                      }

                      $queryTotalKuantitas = "SELECT SUM(kuantitas) as total_kuantitas FROM warungupdate.penjualan WHERE $dateConditionSales";
                      $resultTotalKuantitas = $conn->query($queryTotalKuantitas);

                      if ($resultTotalKuantitas) {
                        if ($resultTotalKuantitas->num_rows > 0) {
                          $rowTotalKuantitas = $resultTotalKuantitas->fetch_assoc();
                          $totalKuantitas = $rowTotalKuantitas['total_kuantitas'];
                          echo '<h6>' . $totalKuantitas . '</h6>';
                        } else {
                          echo '<h6>0</h6>';
                        }
                      } else {
                        // Handle the case where the query execution fails
                        die("Query execution failed: " . $conn->error);
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Revenue Card -->
            <div class="col-md-6">
              <div class="card info-card revenue-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="?filterRevenue=day">Hari Ini</a></li>
                    <li><a class="dropdown-item" href="?filterRevenue=month">Bulan Ini</a></li>
                    <li><a class="dropdown-item" href="?filterRevenue=year">Tahun Ini</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">
                    Penghasilan <span>|
                      <?php echo getFilterLab('Revenue'); ?>
                    </span>
                  </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <?php
                      // Logic to calculate and display total profit based on the filter
                      $filterRevenue = isset($_GET['filterRevenue']) ? $_GET['filterRevenue'] : 'day';

                      // Define the date condition based on the selected filter
                      switch ($filterRevenue) {
                        case 'day':
                          $dateConditionRevenue = "DATE(tgl) = CURDATE()";
                          break;
                        case 'month':
                          $dateConditionRevenue = "MONTH(tgl) = MONTH(NOW()) AND YEAR(tgl) = YEAR(NOW())";
                          break;
                        case 'year':
                          $dateConditionRevenue = "YEAR(tgl) = YEAR(NOW())";
                          break;
                        default:
                          $dateConditionRevenue = "MONTH(tgl) = MONTH(NOW()) AND YEAR(tgl) = YEAR(NOW())";
                          break;
                      }

                      $queryProfit = "SELECT penjualan.*, products.composition FROM penjualan
          JOIN products ON penjualan.nama_produk = products.product_name
          WHERE $dateConditionRevenue";

                      $resultProfit = $conn->query($queryProfit);

                      $totalProfit = 0;

                      while ($rowProfit = $resultProfit->fetch_assoc()) {
                        $hargaModal = 0;
                        $komposisi = json_decode($rowProfit['composition'], true);

                        foreach ($komposisi as $key => $value) {
                          if (strpos($key, 'bahan') !== false) {
                            $index = substr($key, 5);
                            $jumlahKey = "jumlah{$index}";
                            $jumlah = $komposisi[$jumlahKey];

                            // Fetch the cost per gram from the 'bahan' table
                            $namaBahan = $value;
                            $queryBahan = "SELECT harga_beli_pergram FROM bahan WHERE nama_bahan = '$namaBahan'";
                            $resultBahan = $conn->query($queryBahan);

                            if ($resultBahan->num_rows > 0) {
                              $rowBahan = $resultBahan->fetch_assoc();
                              $hargaBahan = $rowBahan['harga_beli_pergram'];

                              // Calculate the total cost
                              $hargaModal += $hargaBahan * $jumlah;
                            }
                          }
                        }

                        // Calculate the total profit for each product
                        $totalProfit += ($rowProfit['harga_jual'] * $rowProfit['kuantitas']) - ($hargaModal * $rowProfit['kuantitas']);
                      }

                      // Display the total profit
                      echo '<h6>Rp ' . number_format($totalProfit, 2) . '</h6>';
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- End Revenue Card -->


            <!-- Reports -->
            <div class="col-12">
              <div class="card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">hari Ini</a></li>
                    <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                    <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Laporan Keuangan <span>| Hari ini</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(
                        document.querySelector("#reportsChart"),
                        {
                          series: [
                            {
                              name: "Sales",
                              data: [31, 40, 28, 51, 42, 82, 56],
                            },
                            {
                              name: "Revenue",
                              data: [11, 32, 45, 32, 34, 52, 41],
                            },
                            {
                              name: "Customers",
                              data: [15, 11, 32, 18, 9, 24, 11],
                            },
                          ],
                          chart: {
                            height: 350,
                            type: "area",
                            toolbar: {
                              show: false,
                            },
                          },
                          markers: {
                            size: 4,
                          },
                          colors: ["#4154f1", "#2eca6a", "#ff771d"],
                          fill: {
                            type: "gradient",
                            gradient: {
                              shadeIntensity: 1,
                              opacityFrom: 0.3,
                              opacityTo: 0.4,
                              stops: [0, 90, 100],
                            },
                          },
                          dataLabels: {
                            enabled: false,
                          },
                          stroke: {
                            curve: "smooth",
                            width: 2,
                          },
                          xaxis: {
                            type: "datetime",
                            categories: [
                              "2018-09-19T00:00:00.000Z",
                              "2018-09-19T01:30:00.000Z",
                              "2018-09-19T02:30:00.000Z",
                              "2018-09-19T03:30:00.000Z",
                              "2018-09-19T04:30:00.000Z",
                              "2018-09-19T05:30:00.000Z",
                              "2018-09-19T06:30:00.000Z",
                            ],
                          },
                          tooltip: {
                            x: {
                              format: "dd/MM/yy HH:mm",
                            },
                          },
                        }
                      ).render();
                    });
                  </script>
                  <!-- End Line Chart -->
                </div>
              </div>
            </div>
            <!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                    <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                    <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">
                    Aktivitas Terbaru <span>| Hari Ini</span>
                  </h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Karyawan</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Jam</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Dhilan Yezekiel</td>
                        <td>
                          <a>Memasukan Beras</a>
                        </td>
                        <td>10 kg</td>

                        <td>12:30</td>
                      </tr>
                      <tr>
                        <td>Bagas Manurung</td>
                        <td>
                          <a>Mengambil kopi</a>
                        </td>
                        <td>100 gr</td>

                        <td>12:15</td>
                      </tr>
                      <tr>
                        <td>Argie Simorangkir</td>
                        <td>
                          <a>Memasukan Meja Kayu </a>
                        </td>
                        <td>10 pcs</td>

                        <td>11:53</td>
                        <td>
                        </td>
                      </tr>
                      <tr>
                        <td>Irwanto Kusetyoutomo</td>
                        <td>
                          <a>Memasukan Kursi Plastik</a>
                        </td>
                        <td>15 pcs</td>

                        <td>11:50</td>
                      </tr>
                      <tr>
                        <td>Marchell Yudha</td>
                        <td>
                          <a>Mengambil Ayam</a>
                        </td>
                        <td>500 gr</td>

                        <td>11:33</td>
                        <td>
                        </td>
                      </tr>
                      <tr>
                        <td>Tumbur Desmonda</td>
                        <td>
                          <a>Mengambil Susu</a>
                        </td>
                        <td>2 L</td>

                        <td>10:01</td>
                        <td>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- End Recent Sales -->

          </div>
        </div>
        <!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">
          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Pemberitahuan <span>| Hari ini</span></h5>

              <div class="activity">
                <div class="activity-item d-flex">
                  <div class="activite-label">15 min</div>
                  <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                  <div class="activity-content">
                    Stok Beras
                    <a href="#" class="fw-bold text-dark">Sudah Habis</a>
                  </div>
                </div>
                <!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                  <div class="activity-content">
                    Stok Kopi Sisa
                    <a href="#" class="fw-bold text-dark">100 Gram</a>
                  </div>
                </div>
                <!-- End activity item-->

                <div class="activity">
                  <div class="activity-item d-flex">
                    <div class="activite-label">3 hour</div>
                    <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                    <div class="activity-content">
                      Stok Gula
                      <a href="#" class="fw-bold text-dark">Sudah Habis</a>
                    </div>
                  </div>
                  <!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">5 hour</div>
                    <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                    <div class="activity-content">
                      Stok Kopi Sisa
                      <a href="#" class="fw-bold text-dark">100 Gram</a>
                    </div>
                  </div>
                  <!-- End activity item-->
                </div>
              </div>
            </div>
            <!-- End Recent Activity -->

          </div>
        </div>
        <!-- End News & Updates -->
      </div>
      <!-- End Right side columns -->
      </div>
    </section>
  </main>
  <!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>