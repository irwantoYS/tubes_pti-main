<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambah Akun User</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="logo">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
  <main id="main" class="main">
    
        <section class="section">
          <h4 style="background-color: black" class="rounded-top py-2 px-1 text-light text-center mb-0 fw-bold">Edit
          </h4>
          <div id="formContainer" class="rounded-bottom py-3 px-5 mt-0" style="background-color: #04c99e">
          <?php
        include 'koneksi.php';

        $id = $_GET['id'];
        $query = "SELECT * FROM akun WHERE id=$id";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>  
          <form action='proses_edit_akun.php' method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="form-group">
                <label for="product_name">Username (how your name will appear to other users on the site) :</label>
                <input type="text" class="form-control" id="username" name="username"
                  value="<?php echo $row['username']; ?>">
              </div>
              <br>
              <div class="form-group">
                <label for="password_account">Password :</label>
                <input type="password" class="form-control" id="password" name="password"
                  value="<?php echo $row['password']; ?>">
              </div>
              <br>
              <!-- <div class="form-group">
                <label for="confirm_password_account">Confirm Passowrd :</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                  value=">
              </div>
              <br> -->
              <div class="form-group">
                <label for="account_status">Status :</label>
                <select class="form-control" id="status" name="status">
                  <option value="approved" <?php if ($row['status'] == 'approved')
                                echo 'selected'; ?>>Approved</option>
                  <option value="reject" <?php if ($row['status'] == 'reject')
                                echo 'selected'; ?>>Reject</option>
                </select>
              </div>
              <br>
              <div class="form-group">
                <label for="account_role">Role :</label>
                <select class="form-control" id="role" name="role">
                  <option value="admin" <?php if ($row['role'] == 'admin')
                                echo 'selected'; ?>>Admin</option>
                  <option value="user" <?php if ($row['role'] == 'user')
                                echo 'selected'; ?>>User</option>
                </select>
              </div>
              <br>
              <button type="submit" class="btn btn-success">Simpan</button>

            </form>
            <?php
            } else {
                echo "Akun tidak ditemukan.";
            }

            $conn->close();
            ?>
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
  <script>
    document.getElementById("cancelButton").addEventListener("click", function () {
      window.location.href = 'cek_data_akun.php';
    });
  </script>

</body>

</html>