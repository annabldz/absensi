<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Reset Password</title>
  <link href="<?= base_url('assets/css/material-dashboard.css?v=3.2.0') ?>" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <main class="main-content mt-0">
    <div class="page-header min-vh-100">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 mx-auto my-auto">
            <div class="card">
              <div class="card-body">
                <h4 class="mb-3">Cek Email Kamu</h4>
                <p>Link reset password telah dikirim ke email:</p>
                <h5 class="text-dark"><?= session()->getFlashdata('masked_email') ?></h5>
                <a href="<?= base_url('/') ?>" class="btn btn-dark mt-4">← Kembali ke Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
