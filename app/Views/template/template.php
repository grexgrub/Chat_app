<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?= base_url('jquery/jquery.js') ?>"></script>
    <scrip src="<?= base_url('js/reload.js') ?>"></scrip>
    <script src="<?= base_url('js/uiResponse.js') ?>"></script>
    <link href="<?= base_url('css/main.css'); ?>" rel="stylesheet">
    <link rel="stylesheet"  href="<?= base_url(); ?>bootstrap-5.0.2-dist/css/bootstrap.css">
  </head>
  <body>
    <?= $this->renderSection('content') ?>
    <script src="<?= base_url(); ?>bootstrap-5.0.2-dist/js/bootstrap.js"></script>
  </body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img alt="" id="ppmodalteman">
      </div>
    </div>
  </div>
</div>

</html>

