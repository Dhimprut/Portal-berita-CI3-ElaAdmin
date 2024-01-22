<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/front/bootstrap/img/password.png">
    <link href="<?php echo base_url()?>assets/front/bootstrap/css/bootstrap.min.css"  rel="stylesheet" >
    <link href="<?php echo base_url()?>assets/front/bootstrap/css/blog.css"  rel="stylesheet" >
		<title>Websiteku</title>
	</head>


	<!-- Ini Navigasi Menu-->
  <nav class="navbar fixed-top navbar-expand-lg bg-light">
    <div class="container">
     <?php $this->load->view('nav_menu/menu_front.php') ?>
    </div>
  </nav>

  
	<!-- Ini Navigasi Menu-->
	<body>

                <?php $this->load->view($konten) ?>
               
                        
<!-- svg -->
<section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,96L40,96C80,96,160,96,240,117.3C320,139,400,181,480,192C560,203,640,181,720,160C800,139,880,117,960,133.3C1040,149,1120,203,1200,186.7C1280,171,1360,85,1400,42.7L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
</section>
<!-- svg -->


            <!-- card -->
            <div class="card text-center">
                <div class="card-body">
                    &copy; 2021 Websiteku.com
                    <a class="text-dark"  href="#">Privacy</a> &middot; <a href="#">Terms</a> <a href="#">Top<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                      <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                    </svg></i></a>
                </div>
              </div>
		</div>
        

	</body>
</html>

<script src="<?php echo base_url()?>assets/front/bootstrap/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/front/bootstrap/js/bootstrap.min.js"></script>
