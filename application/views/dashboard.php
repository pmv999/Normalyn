<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Document</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <header>
    
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">GraphenTech</h5>
       <nav class="my-2 my-md-0 mr-md-3">
        <?php if($dat= $this->session->flashdata('msg')): ?>
        <a class="p-2 text-dark"><?=$dat?></a>
        <?php endif;?> 
       <!--<a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a> 
        <a class="p-2 text-dark" href="#">Pricing</a>-->
      </nav>
      <a class="btn btn-outline-warning" href="<?=base_url('login/logout')?>">Logout</a>
    </div> 
  </header>
  
  
  <div class="container">
      <img class="mb-4" src="<?php echo base_url(); ?>assets/img/graphentech-1-334x177.png" alt="" width="334" height="177">
      
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
  </div>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>