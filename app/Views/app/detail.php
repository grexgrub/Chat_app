<?= $this->extend('template/template') ?>


<?= $this->section('content') ?>
  <main>
    <form action="/Home/edit" method="post" enctype="multipart/form-data">
    <header class="user_detail_poto"> 
        <a href="<?= base_url('/Home') ?>">
        <img src="<?= base_url(); ?>img/Back.svg" class="img" id="back-btn" style="margin-left: 10px" width="30px"  alt="Back">
        </a>
        <label class="custom-file-upload">
          <input type="file" id="PPMU" name="PPMU" hidden/> 
          <img src="<?= base_url('img/avatar/'.$me[0]['photoProfile']) ?>" alt="photoprofile" class="me">
        </label>
        <h6><?= (isset($valid['error']['PPMU']) ? $valid['error']['PPMU'] : '' ) ?></h6>
      <h1>
        <?= $me[0]['name'] ?>
        </h1>
      </header>
      <div class="info_user">
      <ul class="list-group">
        <li class="list-group-item">Info: <?= $me[0]['info'] ?></li>
        <li class="list-group-item">Info: <?= $me[0]['username'] ?></li>
      </ul>
      </div>

      <button class="btn btn-primary" type="submit">UBAH</button>

    </form>
  </main>
<?= $this->endSection(); ?>
