<?php
include 'getHargaModal.php';
?>

<?php
include 'getHargaModal.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar Produk</title>
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  // Membuat permintaan AJAX
  $.ajax({
    type: "GET",
    url: "getHargaModal.php",
    dataType: "json",
    success: function (response) {
      // Mengambil nilai hargaModal dari respons JSON
      var hargaModal = response.hargaModal;

      // Menampilkan nilai hargaModal pada elemen dengan id "hargaModalContainer"
      $("#hargaModalContainer").text("Rp " + hargaModal.toFixed(2));
    },
    error: function (error) {
      console.error("Error:", error);
    }
  });
</script>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
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
          <a class="nav-link" href="dashboard.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide-fill"></i><span>Inventory</span><i
              class="bi bi-chevron-down ms-auto text-dark"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
        </li><!-- End Components Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="penjualan.php">
            <i class="bi bi-cart"></i>
            <span>Penjualan</span>
          </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="index.php">
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
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Inventory</li>
          <li class="breadcrumb-item active">Daftar Produk</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="container rounded py-2 px-3 shadow bg-body rounded" style="background-color: white">
        <h2>Daftar Produk</h2>


        <!-- Tombol untuk memicu modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="float:right">
          Tambah Produk
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
              $(this).find('.modal-content').load('tambah_produk.php');
            });
          });
        </script>


        <!-- Skrip Anda yang sudah ada untuk menambahkan komposisi dan mengisi datalist -->
        <script>
          document.getElementById("cancelButton").addEventListener("click", function () {
            history.back();
          });

          var compositionCounter = 1;

          function addComposition() {

            var compositionInputs = document.getElementById("compositionInputs");

            if (!document.getElementById("bahanList")) {
              var datalist = document.createElement("datalist");
              datalist.id = "bahanList";
              compositionInputs.appendChild(datalist);
            }

            var spaceInput = compositionInputs.appendChild(document.createElement("br"));

            var inputName = document.createElement("input");
            inputName.type = "text";
            inputName.name = "selected_composition[]";
            inputName.placeholder = "Nama Bahan";
            inputName.setAttribute("list", "bahanList"); // Menggunakan setAttribute untuk mengatasi masalah di Firefox
            inputName.required = true;
            compositionInputs.appendChild(inputName);

            var inputAmount = document.createElement("input");
            inputAmount.type = "number";
            inputAmount.name = "selected_amount[]";
            inputAmount.placeholder = "Jumlah";
            inputAmount.required = true;
            compositionInputs.appendChild(inputAmount);

            var cancelButtonName = document.createElement("button");
            cancelButtonName.type = "button";
            cancelButtonName.innerHTML = "Remove";
            cancelButtonName.onclick = function () {
              compositionInputs.removeChild(spaceInput);
              compositionInputs.removeChild(inputName);
              compositionInputs.removeChild(inputAmount);
              compositionInputs.removeChild(cancelButtonName);
            };
            compositionInputs.appendChild(cancelButtonName);

            // Memperbarui datalist dengan nama bahan yang baru
            fillBahanList();
            compositionCounter++;
          }

          function prepareCompositionInputs() {
            var compositionInputs = document.getElementById("compositionInputs");

            while (compositionInputs.childNodes.length > compositionCounter * 2) {
              compositionInputs.removeChild(compositionInputs.lastChild);
              compositionInputs.removeChild(compositionInputs.lastChild);
            }
          }

          // Function untuk mengisi datalist dengan data dari database
          function fillBahanList() {
            var allCompositionInputs = document.getElementsByName("selected_composition[]");
            var datalist = document.getElementById("bahanList");

            // Menggunakan AJAX untuk mendapatkan data dari server
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                var bahanNames = JSON.parse(xhr.responseText);

                // Menghapus semua opsi di datalist
                datalist.innerHTML = "";

                var uniqueBahanNames = new Set(bahanNames.map(bahan => bahan.nama_bahan));

                uniqueBahanNames.forEach(function (bahan) {
                  var option = document.createElement("option");
                  option.value = bahan;
                  datalist.appendChild(option);
                });

                // Menambahkan opsi baru ke datalist
                allCompositionInputs.forEach(function (input) {
                  var option = document.createElement("option");
                  option.value = input.value;
                  datalist.appendChild(option);
                });
              }
            };

            xhr.open("GET", "get_bahan_names.php", true);
            xhr.send();
          }

          // Panggil fungsi untuk mengisi datalist saat halaman dimuat
          fillBahanList();
        </script>

        <br><br>
        <form method="GET">
            <input type="text" name="search" placeholder="Cari produk...">
            <button type="submit" class="btn btn-primary">Cari</button>
            <a href="daftarproduk.php" class="btn btn-secondary" style="background-color: red">Reset</a>
        </form>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga Jual</th>
                    <th>Harga Modal</th>
                    <th>Kategori</th>
                    <th>Komposisi (gram/ml)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';

                // Periksa apakah ada kata kunci pencarian yang diberikan
                $search = isset($_GET['search']) ? $_GET['search'] : '';

                // Buat query sesuai dengan kata kunci pencarian
                $query = "SELECT * FROM products";
                if (!empty($search)) {
                    $query .= " WHERE product_name LIKE '%$search%' OR category LIKE '%$search%'";
                }

                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $komposisi = json_decode($row['composition'], true);
                        echo "<tr>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . "Rp " . $row['selling_price'] . "</td>";

                        // Inisialisasi hargaModal di setiap iterasi produk
                        $hargaModal = 0;

                        foreach ($komposisi as $key => $value) {
                            if (strpos($key, 'bahan') !== false) {
                                $index = substr($key, 5);
                                $jumlahKey = "jumlah{$index}";
                                $jumlah = $komposisi[$jumlahKey];

                                // Mengambil harga_beli_pergram dari tabel bahan
                                $namaBahan = $value;
                                $queryBahan = "SELECT harga_beli_pergram FROM bahan WHERE nama_bahan = '$namaBahan'";
                                $resultBahan = $conn->query($queryBahan);

                                if ($resultBahan->num_rows > 0) {
                                    $rowBahan = $resultBahan->fetch_assoc();
                                    $hargaBahan = $rowBahan['harga_beli_pergram'];

                                    // Menghitung total biaya
                                    $hargaModal += $hargaBahan * $jumlah;
                                }
                            }
                        }
                        echo "<td>Rp. " . number_format($hargaModal, 2) . "</td>";
                        echo "<td>" . $row['category'] . "</td>";
                        echo "<td>";
                        echo "<div id='jsonDisplay'>";

                        $keys = array_keys($komposisi);
                        $count = count($keys);

                        for ($i = 0; $i < $count; $i++) {
                            $key = $keys[$i];
                            $value = $komposisi[$key];

                            echo "$value";

                            // Cek apakah bukan elemen terakhir
                            if ($i < $count - 1) {
                                echo " : ";
                                echo $komposisi[$keys[$i + 1]];
                            }

                            echo "<br>";
                            $i++; // Pindah ke elemen berikutnya
                        }
                        echo "</div>";
                        echo "<script src='displayJson.js'></script>";
                        echo "</td>";
                        echo "<td>
                                <a href='edit_produk.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>
                                <a href='hapus.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus</a>
                            </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada produk.</td></tr>";
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