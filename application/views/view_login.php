<?php echo $this->session->flashdata ("pesan") ?>

<!doctype html>

<html lang="en">

<head>
  <style>
    main {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
  </style>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta name="author" content="">

<link rel="icon" href="<?php echo base_url() ?>assets/front/bootstrap/img/3.png">

<title>Login</title>

<link href="<?php echo base_url() ?>assets/front/bootstrap/css/bootstrap.min.css"

rel="stylesheet">

<link href="<?php echo base_url() ?>assets/front/bootstrap/css/signin.css" rel="stylesheet">

</head>

<body class="text-center">
<main>

<form class="form-signin"method="post" action="<?php echo base_url() ?>index.php/login/ceklogin">

<img class="mb-4" src="<?php echo base_url() ?>assets/front/bootstrap/img/3.png" alt=""width="80"

height="90">

<h1 class="h3 mb-3 font-weight-small">PortalBerita.com</h1> <label for="inputEmail" class="sr-only">Username</label>

<input type="text" class="form-control" name="user"

placeholder="Username" required autofocus>

<label for="inputPassword" class="sr-only">Password</label> <input type="password" id="inputPassword" class="form-control"

name="pass" placeholder="Password" required>

<div class="checkbox mb-3">

<label>

<input type="checkbox" value="remember-me"> Remember me

</label>

</div>

<button class="btn btn-lg btn-primary btn-block"

type="submit">Login</button>

<p class="mt-5 mb-3 text-muted">&copy; Portal Berita.com -2022</p>

</form>
</main>

</body>