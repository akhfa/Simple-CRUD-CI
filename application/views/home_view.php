<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <meta charset="utf-8" />
    <title>Selamat datang di private homepage :D</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="<?php echo base_url()?>/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>/bootstrap/js/bootstrap.min.js"></script>
 </head>
 <body>
   <h1>Home</h1>
   <h2>Welcome <?php echo $username; ?>!</h2>
   <h3>Your member id is <?php echo $id; ?> </h3>
    
    <!-- Listing directory -->
    <?php $map = directory_map('./uploads/'.$id.'-'.$username);?>
    <?php foreach ($map as $value):?>
        <li><?php echo $value;?></li>
    <?php endforeach; ?>

   <form action="upload_controller">
    	<div class="form-group">
        	<button type="submit" value="Upload" class="btn btn-primary btn-lg pull-left">Upload</button>
    	</div>
	</form>
	<br>
	<br>
   	<form action="home/logout">
    	<div class="form-group">
        	<button type="submit" value="Logout" class="btn btn-primary btn-lg pull-left">Logout</button>
    	</div>
	</form>
	

 </body>
</html>