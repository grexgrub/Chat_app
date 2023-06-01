<?= $this->extend('template/twithajax.php') ?>


<?= $this->section('content') ?>
  <main id="roomPesan"> 
    <nav class="nav_pesan">
      <div class="friend_acount">
        <a href="<?= base_url('/Home') ?>">
        <img src="<?= base_url(); ?>img/Back.svg" class="img" id="back-btn" style="margin-left: 10px" width="30px"  alt="Back">
        </a>
        <img src="<?= base_url(); ?>img/avatar/<?= $nama[0]['photoProfile'] ?>" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $nama[0]['username'] ?>" class="a pp_circle PPteman" alt="profile">
        <h5 style="margin-left: 6px;"><?= $nama[0]['name'] ?></h5>
      </div>
      <div class="info">        
          <img src="<?= base_url(); ?>img/more.png"  style="max-width: 100%; width: 30px;" alt="Back">
      </div>
    </nav>
    <div class="container_pesan" id="container_pesan">
        <?php foreach ($pesan as $isi): ?>
          <?php if ($isi['dari'] == session('username')) {
            echo '<div class="pesan get"><div class="isi">'. $isi['pesan'] .'</div></div>';
        }else{
            echo '<div class="pesan send"><div class="isi">'. $isi['pesan'] .'</div></div>';
        }; ?>
        <?php endforeach; ?>
    </div>
      <form action="/Home/send_pesan" method="post" name="sendPesan" class="form_pesan">
        <input type="hidden" name="username" id="getter_username" value="<?= $username ?>">
        <input type="hidden" name="me" id="sender_username" value="<?= session('username') ?>">
        <input type="text" name="pesan" value="" class="pesan_input">
        <button type="submit" class="btn_send"><img src="<?= base_url(); ?>img/send.svg" alt=""></button>
      </form>
  </main>

<?= $this->endSection() ?>
