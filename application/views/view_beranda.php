	<!-- Ini Carousel Images -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
<div class="carousel-inner">

                  <div class="carousel-item active">
                    <img src="<?php echo base_url()?>assets/front/bootstrap/img/alm3.jpg" class="d-block w-100" alt="..." style="height: 350px">
                    <div class="carousel-caption">
                      <h5>Swittzerland</h5>
                      <p>Beautiful of lake.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo base_url()?>assets/front/bootstrap/img/alm2.jpg" class="d-block w-100" alt="..." style="height: 350px">
                    <div class="carousel-caption">
                      <h5>WaterFall Chineseet</h5>
                      <p>The most beautifull waterfall in the world</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo base_url()?>assets/front/bootstrap/img/alm.jpg" class="d-block w-100" alt="..." style="height: 350px">
                    <div class="carousel-caption">
                      <h5>Everst Mountain</h5>
                      <p>>Haighest mountain in the world.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
			<!-- close Carousel Images -->
      <div class="container-fluid bg-dark" style="height: 50vh">
			<div class="row text-center text-light align-items-center mt-4">
				<div class="col-12">
          <br><br><br>
					<img src="<?php echo base_url()?>assets/front/bootstrap/img/3.png" width="150" heigh="150" />
                    <h2 class="mt-2">Dimas Nurhakim</h2>
                    <p>Hello, Welcome to my paradise</p>
				</div>
			</div>
      </div>
              </div>
			<!-- Ini Header -->

  

<div class="container">

                      


                    <section id="artikel">
                <h3 class="pb-4 mb-4 fst-italic border-bottom text-center">Artikel-Artikel</h3>
                <div class="container">
                  <div class="row g-5">
                      <div class="col-md-7">

                        <div class="card mb-3">
                          <img src="<?php echo base_url()?>assets/front/bootstrap/img/alm.jpg" class="card-img-top" height="300px" width="50px"> 
                          <div class="card-body">
                          <?php
                             $n=1;foreach($artikel as $data)
                             {?>
                        <article class="blog-post">
                            <h2 class="blog-post-title"><?php echo $data->nama_artikel ?></h2>
                            <p><small>Kategori Berita :<?php echo $data->nama_kategori ?></small></p>
                            <p style="align: justify;"><?php echo $data->isi_artikel ?></p>        
                            <?php }?>              
                            </article>
                          </div>
                        </div>

                        <div class="card mb-3">
                          <img src="<?php echo base_url()?>assets/front/bootstrap/img/alm2.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <article class="blog-spot">
                            <div class="p-4">
                        <h4 class="fst-italic">Berita Terbaru</h4>
                            <br>
                            <?php
                            $n=1;foreach($artikel as $data)
                            {?>
                            <p style="align:  justify;"><?php echo $n++?>,<?php echo $data->nama_artikel ?></p>
                            <?php }?>
                            <h4 class="fst-italic">Archives</h4>
                            <ol class="list-unstyled mb-0">
                                <li><a href="#arsip">March 2021</a></li>
                                <li><a href="#arsip">February 2021</a></li>
                            </ol>
                        </div>
                         </article>
                         <nav class="blog-pagination" aria-label="pagination">
                             <a class="btn btn-outline-primary href="#">Older</a>
                             <a class="btn btn-outline-secondary disabled">Newer</a>
                         </nav>
                     </div>
                          </div>
                        </div>
                        

                                    <!--Ini About-->
                                    <div class="col-md-5">
                    <div class="position-sticky" style="top: 2rem;">
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="<?php echo base_url()?>assets/front/bootstrap/img/dim.jpg" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">About Me</h5> <hr>
                              
                                <li>NPM : D1A210085</li>
                                <li>Nama : Dimas Nurhakim</li>
                                <li>Kelas : Reguler 3A</li>
                                <li>Alamat : Pamanukan</li>
                                <li>Email : dimas@gmail.com</li> <hr>
                              
                            </div>
                            </div>
                            <br>
                <ul class="list-group border-none rounded-0"style="box-shadow: 5px 5px 0px black;">
                            <li class="list-group-item active border-none text-dark" style="background-color:#646464;border: none;" aria-current="true">Kategori</li>
                                <?php 
                                $n=1;foreach($kategori as $data)
                                {
                                ?>
                                <li class="list-group-item">
                                    <a class="text-decoration-none text-dark" href="<?php echo base_url()?>index.php/Beranda/view_kategori_front/<?php echo $data->id_kategori ?>"><?php echo $data->nama_kategori ?></a>
                                    <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                            </li>
                    <?php } ?>
                        </ul>   
                         
                        </div>
                      </div>
                      </div>
                        
                    </div>

                    <section id="galeri">
  <!-- card -->
  <center><h2>My Galeri</h2></center>
  <div class="container">
  <div class="row">
    <div class="col-sm-4 g-4">
      
      <div class="card">
        <img src="<?php echo base_url()?>assets/front/bootstrap/img/java.png" class="card-img-top" alt="..." width="500px" height="250px">
        <div class="card-body">
          
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
         
        </div>
      </div>
    </div>
    <div class="col-sm-4 g-4">
      <div class="card">
        <img src="<?php echo base_url()?>assets/front/bootstrap/img/bootstrap.png" class="card-img-top" alt="..." width="500px" height="250px">
        <div class="card-body">
          
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          
        </div>
      </div>
    </div>
    <div class="col-sm-4 g-4">
        <div class="card">
            <img src="<?php echo base_url()?>assets/front/bootstrap/img/html.png" class="card-img-top" alt="..." width="300px" height="250px">
          <div class="card-body">
          
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            
          </div>
        </div>
      </div>
  </div>
</div>

                  </div>
                  <!-- Ini About--> 

                  
<!-- bagian arsip -->
<section id="arsip">
<div class="container">
  <div class="row text-center">
    <div class="col">
      <h2>Arsip</h2>
    </div>
  </div>
  <div class="row justify-content-center fs-5 text-center">
    <div class="col-4"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quisquam exercitationem corporis sapiente blanditiis fuga ea modi tempore inventore aliquam.</p>
    </div>
    <div class="col-4"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sed minus delectus blanditiis, sit corporis sunt reiciendis eos illum pariatur error adipisci dolorem provident. Veniam quidem possimus cupiditate rerum ipsa!</p></div>
  </div>
</div>
                                </div>
                                </div>
                                


</section>

<!-- close bagian arsip -->

                