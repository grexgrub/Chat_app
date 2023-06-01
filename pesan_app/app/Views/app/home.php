<?= $this->extend('template/template') ?>


<?= $this->section('content') ?>
<main id="Home">
  <div class="home-container">
    <div class="home-nav">
      <h1 class="fw-bold" >Chat_app</h1>
      <div>
        <img src="<?= base_url() ?>img/more.png" class="more" alt="More">
        <div class="popup shadow rounded-1">
          <a href="<?= base_url('Login/logout') ?>" >Logout</a>
          <a href="<?= base_url('Home/detail/'. session('username') .'') ?>">Detail</a>
        </div>
      </div>
    </div>
    <div class="contact" id="contact">
      <?php foreach ($contact as $user): ?>
      <?php if ($user['username'] == session('username')): ?>
              <?= '' ?>
      <?php else: ?>
      <div class="users"><img class="PPteman" data-bs-toggle="modal" data-id="<?= $user['username']; ?>"
        data-bs-target="#exampleModal" src="<?= base_url('img/avatar/'.$user['photoProfile'].'') ?>" alt="pp">
        <a href="/Home/chat/<?= $user['username'] ?>" class="Friend"><h4 class="fw-bold"><?= $user['name'] ?>
        </h4></a></div>
      <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?= $this->endSection() ?>
