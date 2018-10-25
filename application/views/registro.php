<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>Registro</h1>
    <ul>
        <?php foreach($menu as $item): ?>
        <li><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
        <?php endforeach; ?>
    </ul>
    <?php echo validation_errors(); ?>
    <?php
    echo form_open('registro/create',array('method'=>'POST'));
    echo form_label('Nombre de Usuario:');
    echo form_input('usr');
    echo "<br/>";
    echo form_label('Correo:');
    echo form_input(array('type'=>'email','name'=>'email'));
    echo "<br/>";
    echo form_label('Contraseña:');
    echo form_password('pass');
    echo "<br/>";
    echo form_label('Confirmar Contraseña:');
    echo form_password('pass_conf');
    echo "<br/>";
    echo form_submit('submit','Enviar Datos');
    echo form_close();
    ?>
    <?=isset($msg) ? $msg : '' ?>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>