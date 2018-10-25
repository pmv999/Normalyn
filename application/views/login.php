<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/auth/style.css" rel="stylesheet">
  <title>Document</title>
</head>
<body class="text-center">

<div class="container" style="padding-top: 105px;">
<div class="row justify-content-lg-center">
<div class="jumbotron">
    <img class="mb-4" src="<?php echo base_url(); ?>assets/img/graphentech-1-334x177.png" alt="" width="334" height="177">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <form action="<?=base_url('login/validate') ?>" method="POST" id="frm_login" style="padding-top: 10px;">
      <div class="form-group" id="email">
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <div class="invalid-feedback"></div>
      </div>
      <div class="form-group" id="pass">
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
        <div class="invalid-feedback"></div>      
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-lg btn-warning btn-block">Submit</button>
      </div>
      <div class="form-group" id="alert">
      </div>
    </form>
    <hr/>
    <a href="<?=base_url('registro')?>" class="registro">Registro</a>
  </div>
</div>
</div>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/auth/login.js"></script>
</body>
</html>