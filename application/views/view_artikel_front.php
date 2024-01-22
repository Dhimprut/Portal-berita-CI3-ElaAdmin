<br><br><br>
<div class="container">
<div class="row">
    <div class="col-lg-12">
    <?php 
      $n=1; foreach($artikel as $data)
       {?>
       <h2><?php echo $data->nama_artikel ?></h2>
       <p ><small>Kategori Berita    : <?php echo $data->nama_kategori ?></small></p>
       <p  align="justify"><?php echo $data->isi_artikel ?></p>
       <?php } ?>
    </div>
</div>
</div>

