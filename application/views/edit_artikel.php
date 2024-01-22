<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Edit Artikel</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="javascript:void(0)">Kelola Artikel</a></li>
            <li class="breadcrumb-item active">Edit Artikel</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form action="<?php echo base_url();?>index.php/kelola_artikel/proses_edit/<?php echo $this->uri->segment('3')?>" method="post">
                    <div class="form-body">
                        <h4 class="card-title m-t-15">Form Edit Artikel</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-grouphas-success">
                                    <label for="" class="control-label">Nama Artikel</label>
                                    <input type="text" id="fristName" required class="form-control input-default" name="nama_artikel" value="<?php echo $artikel->nama_artikel?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-grouphas-success">
                                    <label for="" class="control-label">Isi Artikel</label>
                                    <select name="id_kategori" id="id_kategori" class="form-control">
                                        <?php 
                                            foreach ($list_kategori as $list ) { ?>
                                                <option value="<?php echo $list->id_kategori ?>"
                                                <?php if($list->id_kategori==$artikel->id_kategori);
                                                {echo "selected='selected'";}?>>
                                                <?php echo $list->nama_kategori;?>
                                                </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-grouphas-success">
                                    <label for="" class="control-label">Isi Artikel</label>
                                    <textarea class="textarea_editor form-control" name="isi_artikel" rows="15" placeholder="Enter text......" style="height:300px"><?php echo $artikel->isi_artikel ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions mt-3">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Update </button>
                        <a href="<?php echo base_url();?>index.php/kelola_artikel/view_artikel"><button type="button" class="btn btn-inverse">Batal</button></a>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>