<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cek Data Akun</title>
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

<body style="background-color: #D9D9D9">

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
            <a
              class="nav-link nav-profile d-flex align-items-center pe-0"
              href="#"
              data-bs-toggle="dropdown"
            >
              
              <span class="d-none d-md-block dropdown-toggle ps-2"
                >Admin</span
              > </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
            >
              <li class="dropdown-header">
                <h6>Admin</h6>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

             
              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="cek_data_akun.php"
                >
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
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <aside id="sidebar" class="sidebar" style="background-color: #04c99e">

      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="tambah_akun_user.php">
          <i class="bi bi-person-fill-add"></i>
            <span>Tambah Akun User</span>
          </a>
        </li><!-- End add user Account Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="cek_data_akun.php">
          <i class="bi bi-clipboard"></i>
            <span>Cek Data Akun</span>
          </a>
        </li><!-- End check Data account Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="index.php">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Logout</span>
          </a>
        </li><!-- End Login Page Nav -->

      </ul>

    </aside><!-- End Sidebar-->
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

<section class="section">
  <br>
  <div class="container rounded py-2 px-3" style="background-color: white">
    <h4 class="fw-bold mb-0 py-1">Data Akun <a href="tambah_akun_user.php" style="float:right"></a></h4>
    <br>
    <div>
    <form class="border-top border-bottom pt-3 pb-3 mb-3" method="GET" action='cek_data_akun.php'>
      <input class="rounded" type="text" name="search" placeholder="Cari username...">
      <button type="submit" class="btn btn-success px-2 py-1">Cari</button>
      <a href="cek_data_akun.php" class="btn btn-danger px-2 py-1">Reset</a>
    </form>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>Username</th>
          <th>Password</th>
          <th>Role</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi.php';

        // Periksa apakah ada kata kunci pencarian yang diberikan
        $search = isset($_GET['search']) ? $_GET['search'] : '';

        // Buat query sesuai dengan kata kunci pencarian
        $query = "SELECT * FROM akun";
        if (!empty($search)) {
          $query .= " WHERE username LIKE '%$search%'";
        }

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>" . $row['role'] . "</td>";
            echo "<td>
                    <a href='edit_akun.php?id=" . $row['id'] . "' class='btn btn-success'>Edit</a>
                    <a href='#' onclick='confirmDelete(" . $row['id'] . ")' class='btn btn-danger'>Hapus</a>
                </td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='6'>Tidak ada Akun.</td></tr>";
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
<script>
    function confirmDelete(id) {
        var result = confirm("Apakah Anda yakin ingin menghapus akun ini?");
        if (result) {
            // Redirect atau lakukan tindakan penghapusan di sini, misalnya dengan AJAX atau formulir tersembunyi
            window.location.href = 'hapus_akun.php?id=' + id;
        }
    }
</script>
</html>