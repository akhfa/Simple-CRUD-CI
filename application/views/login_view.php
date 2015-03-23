<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login Simpel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="<?php echo base_url()?>/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Login Simpel</h1>
</div>
    <?php echo validation_errors(); ?>
    <?php echo form_open('verifylogin'); ?>
    <div class="form-group">
        <input type="text" class="form-control input-lg" placeholder="username" id="username" name="username"/>
    </div>
    <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="Password" id="password" name="password"/>
    </div>
    <div class="form-group">
        <button type="submit" value="Login" class="btn btn-primary btn-lg btn-block">Login</button>
    </div>
</form>

</div>

</body>
</html>