<?= $this->extend('template/template') ?>


<?= $this->section('content') ?>
<main class="login_container">
  <form action="<?= base_url('Login/daftar') ?>" method="post" class="login-form shadow">
      <div class="mb-3">
        <label for="username" class="form-label">Usename</label>
        <input type="text" class="form-control <?= (isset($validate['error']['username']) ? 'is-invalid' : '') ?>" name="username" placeholder="Masukan Username" value="<?= ($validate !== null && isset($validate['username']) ? $validate['username'] : '') ?>">
        <div class="invalid-feedback">
          <?= (isset($validate['error']['username']) ? $validate['error']['username'] : '') ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control <?= (isset($validate['error']['name']) ? 'is-invalid' : '') ?>" name="nama" placeholder="Masukan Nama Lengkap" value="<?= ($validate !== null && isset($validate['name']) ? $validate['name'] : '') ?>">
        <div class="invalid-feedback">
          <?= (isset($validate['error']['name']) ? $validate['error']['name'] : '') ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control <?= (isset($validate['error']['password']) ? 'is-invalid' : '') ?>" name="password" placeholder="Masukan Password" value="<?= ($validate !== null && isset($validate['password']) ? $validate['password'] : '') ?>">
        <div class="invalid-feedback">
          <?= (isset($validate['error']['password']) ? $validate['error']['password'] : '') ?>
      </div>
    </div>
    <button type="submit" class="btn btn-primary w-100">Daftar</button>
    <div class="sudah-belum"> <a class="sudah-belum" href="<?= base_url('login') ?>">sudah punya akun? login</a> </div>
  </form>
  </main>
<?= $this->endSection() ?>
