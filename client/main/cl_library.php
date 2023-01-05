<div class="main_library">
  <h1>THƯ VIỆN ẢNH</h1>

  <?php foreach ($ds_tourType as $tourType) : ?>
    <div class="library">
      <h3>Album <?= $tourType['name_type'] ?></h3>
      <div class="library__detail">
        <?php foreach ($ds_library as $library) : ?>
          <?php if ($library['id_type'] == $tourType['id_type']) : ?>
            <img src="../../img/<?= $library['image'] ?>" alt="" class="library-detail__item" />
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>
  <?php endforeach ?>
</div>