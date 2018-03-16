<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
<link rel="stylesheet" href="<?php echo base_url();?>stil/css/style.css" type="text/css" >
</head>
<body>
	
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <form class="login" action="<?php echo base_url();?>index.php/login_controller/GirisKontrol" method="post">
                <input type="text" placeholder="Username" name="Username"/>
                <input type="password" placeholder="Password" name="Password" />
                <input type="submit" value="Sign In" class="btn btn-success btn-sm" name="giris"/>
                <div class="remember-forgot">
                    <div class="row">
                        
                        <div class="col-md-6 forgot-pass-content">
                            <a href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
                            <a href="<?php echo base_url();?>index.php/kayit_controller" class="forgot-pass">Sign Up</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
<script type="text/javascript" src="<?php echo base_url();?>stil/js/javascript.js"></script>
</body>	
</html>