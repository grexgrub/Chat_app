<?= $this->extend('template/template'); ?>


<?php use \App\Controllers\Flasher; 

  $flash = new Flasher();

?>

<?= $this->section('content') ?>

<main class="login_container">
  <form action="<?= base_url('Login/login') ?>" method="post" class="login-form shadow">
      <div class="mb-3">
        <label for="username" class="form-label">Usename</label>
        <input type="text" class="form-control is-invalid" name="username" placeholder="Masukan Username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control is-invalid" name="password" placeholder="Masukan Password">
    </div>
    <button type="submit" class="btn btn-primary w-100">Login</button>
    <div class="sudah-belum"><a href="login/register" class="sudah-belum">daftar</a></div>
  </form>
  </main>
<?= $this->endSection() ?> 
