<br><br>
<div class="container mt-5 row">

<?php
$n=1; foreach ($gallery as $data)
{?>
<div class="card col-md-4" style="width: 18rem;">
  <td><img src="<?php echo base_url() ?>assets/gallery/<?php echo $data->gambar ?>" witdh="200px" height="200px"></td>
  <div class="card-body ">
  <td><?php echo $data->deskripsi ?></td>
  </div>
  </div>
  <?php } ?>

</div>