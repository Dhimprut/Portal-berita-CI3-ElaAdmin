<div class="row">
    
	<div class="col-sm-8">
		<?php
		$n=1; foreach($artikel as $data)
		{?>
		 	<div class="card-body">
                    <div class="border-none p-4 mt-3">
						<h2><?php echo $data->nama_artikel ?></h2>
						<p><small>Kategori Berita : <?php echo $data->nama_kategori ?></small></p>
						<p><?php echo $data->isi_artikel ?></p>
                    </div>
        	</div>
		<?php }?>
	</div>
	<div class="col-4">
	<div class="position-sticky" style="top:2rem;">
                <div class="p-4">
                    <ul class="list-group border-none rounded-0">
                        <li class="list-group-item active border-none text-dark" aria-current="true">Kategori</li>
                                <?php 
                                $n=1;foreach($kategori as $data)
                                {
                                ?>
                            <li class="list-group-item">
                                    <a class="text-decoration-none text-dark" href="<?php echo base_url()?>index.php/Beranda/view_kategori_front/<?php echo $data->id_kategori ?>"><?php echo $data->nama_kategori ?></a>
                                    <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                        </li>
                    <?php } ?>
             </ul>
		</div>    
    </div>
</div>
</div>