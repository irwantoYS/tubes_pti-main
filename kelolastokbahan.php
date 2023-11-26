<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelola Stok Bahan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="logo">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block" style="color: #04c99e;">Warung Update</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
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
              <hr class="dropdown-divider">
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
              <hr class="dropdown-divider">
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
              <hr class="dropdown-divider">
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
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->
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
              <a class="dropdown-item d-flex align-items-center" href="adminprofil.php">
                <i class="bi bi-gear"></i>
                <span>Account Management</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-login.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul>
          <!-- End Profile Dropdown Items -->
        </li>
        <!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <aside id="sidebar" class="sidebar" style="background-color: #04c99e">

      <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link " href="index.html">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide-fill"></i><span>Inventory</span><i class="bi bi-chevron-down ms-auto text-dark"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="daftarproduk.php">
                <i class="bi bi-circle"></i><span>Daftar Produk</span>
              </a>
            </li>
            <li>
              <a href="kelolastokbahan.php">
                <i class="bi bi-circle"></i><span>Kelola Stock Bahan</span>
              </a>
            </li>
            <li>
              <a href="kelolaproperty.php">
                <i class="bi bi-circle"></i><span>Kelola Property</span>
              </a>
            </li>
          </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="penjualan.php">
            <i class="bi bi-cart"></i>
            <span>Penjualan</span>
          </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-login.php">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Logout</span>
          </a>
        </li><!-- End Login Page Nav -->

      </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Sales <span>| Today</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span
                          class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->

              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Revenue <span>| This Month</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                      </div>
                      <div class="ps-3">
                        <h6>$3,264</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span
                          class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Revenue Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Customers <span>| This Year</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span
                          class="text-muted small pt-2 ps-1">decrease</span>

                      </div>
                    </div>

                  </div>
                </div>

              </div>
              <!-- End Customers Card -->

              <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                    <a href="icons-bootstrap.html">
                      <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                    </a>
                  </li>
                  <li>
                    <a href="icons-remix.html">
                      <i class="bi bi-circle"></i><span>Remix Icons</span>
                    </a>
                  </li>
                  <li>
                    <a href="icons-boxicons.html">
                      <i class="bi bi-circle"></i><span>Boxicons</span>
                    </a>
                  </li>
                </ul>
              </li><!-- End Icons Nav -->

              <li class="nav-heading">Pages</li>

              <li class="nav-item">
                <a class="nav-link collapsed" href="adminprofil.php">
                  <i class="bi bi-person"></i>
                  <span>Profile</span>
                </a>
              </li><!-- End Profile Page Nav -->

              <li class="nav-item">
                <a class="nav-link collapsed" href="pages-faq.html">
                  <i class="bi bi-question-circle"></i>
                  <span>F.A.Q</span>
                </a>
              </li><!-- End F.A.Q Page Nav -->

              <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                  <i class="bi bi-envelope"></i>
                  <span>Contact</span>
                </a>
              </li><!-- End Contact Page Nav -->

              <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                  <i class="bi bi-card-list"></i>
                  <span>Register</span>
                </a>
              </li><!-- End Register Page Nav -->

              <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.php">
                  <i class="bi bi-box-arrow-in-right"></i>
                  <span>Login</span>
                </a>
              </li><!-- End Login Page Nav -->

              <li class="nav-item">
                <a class="nav-link collapsed" href="pages-error-404.html">
                  <i class="bi bi-dash-circle"></i>
                  <span>Error 404</span>
                </a>
              </li><!-- End Error 404 Page Nav -->

              <li class="nav-item">
                <a class="nav-link " href="pages-blank.html">
                  <i class="bi bi-file-earmark"></i>
                  <span>Blank</span>
                </a>
              </li><!-- End Blank Page Nav -->

              </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Inventory</li>
          <li class="breadcrumb-item active">Kelola Stok Bahan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="container rounded py-2 px-3 shadow bg-body rounded" style="background-color: white">
        <h2>Daftar Stok Bahan</h2>
        <!-- <a href="tambah_bahan.php" class="btn btn-primary" style="float:right">Tambah Bahan</a> -->

<!-- Tombol untuk memicu modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="float:right">
        Tambah Bahan
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content py-4">
                
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- skrip untuk menampilkan page pada modal -->
    <script>
  $(document).ready(function () {
    $('#myModal').on('show.bs.modal', function (e) {
      // Load the external page content into the modal
      $(this).find('.modal-content').load('tambah_bahan.php');
    });
  });
</script>


        <br><br>
        <form method="GET">
          <input type="text" name="search" placeholder="Cari bahan...">
          <button type="submit" class="btn btn-primary">Cari</button>
          <a href="kelolastokbahan.php" class="btn btn-secondary" style="background-color: red">Reset</a>
        </form>
        <br><br>
        <table class="table">
          <thead>
            <tr>
              <th>Nama Bahan</th>
              <th>Sisa Stock</th>
              <th>Kategori</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'koneksi.php';

            // Periksa apakah ada kata kunci pencarian yang diberikan
            $search = isset($_GET['search']) ? $_GET['search'] : '';

            // Buat query sesuai dengan kata kunci pencarian
            $query = "SELECT * FROM bahan";
            if (!empty($search)) {
              $query .= " WHERE nama_bahan LIKE '%$search%' OR kategori_produk LIKE '%$search%'";
            }
            $query .= " ORDER BY nama_bahan";

            $result = $conn->query($query);

            $grouped_data = [];

            while ($row = $result->fetch_assoc()) {
              $nama_bahan = $row['nama_bahan'];
              if (!isset($grouped_data[$nama_bahan])) {
                $grouped_data[$nama_bahan] = [
                  'jumlah_bahan' => 0,
                  'kategori_produk' => $row['kategori_produk'],
                  'details' => []
                ];
              }

              $grouped_data[$nama_bahan]['jumlah_bahan'] += $row['jumlah_bahan'];

              // Tambahkan detail ke dalam kelompok
              $grouped_data[$nama_bahan]['details'][] = $row;
            }

            foreach ($grouped_data as $nama_bahan => $data_bahan) {
              echo "<tr>";
              echo "<td>" . $nama_bahan . "</td>";
              echo "<td>" . $data_bahan['jumlah_bahan'] . (isset($row['satuan']) ? $row['satuan'] : '') . "</td>";
              echo "<td>" . $data_bahan['kategori_produk'] . "</td>";
              echo "<td>";

              // Tampilkan rincian dalam elemen <details>
              echo "<details>";
              foreach ($data_bahan['details'] as $detail) {
                echo "<p><b>" . $detail['tanggal_masuk'] . "</b></p>";
                echo "<p>Nama Bahan: " . $detail['nama_bahan'] . "-" . $detail['id'] . "</p>";
                echo "<p>Jumlah: " . $detail['jumlah_bahan'] . " " . $detail['satuan'] . "</p>";
                echo "<p>Tanggal expired: " . $detail['tanggal_exp'] . "</p>";
                echo "<p>Harga beli: " . "Rp " . $detail['harga_beli'] . "</p>";
              }
              echo "</div>";
              echo "</details>";

              echo "</td>";
              echo "</tr>";
            }

            $conn->close();
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </main><!-- End #main -->

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