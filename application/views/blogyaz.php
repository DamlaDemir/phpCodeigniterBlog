<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
   <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>css/clean-blog.min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>stil/css/style2.css" rel="stylesheet">


</head>
<body>

<!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                 <a class="navbar-brand" href="<?php echo base_url();?>/index.php/login_controller/index">Çıkış Yap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url();?>index.php/home_controller">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/anasayfa_controller">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/post_controller">Sample Post</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/contact_controller">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url();?>img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                         <?php 
                          foreach ($bilgiler as $bilgi) {
                             echo  "<h1>"."Welcome to"." ".$bilgi->ad ." ". $bilgi->soyad."'s Blog Site"."</h1>"."<br/>";
                            
                          }
                          ?>
                        <hr class="small">
                        <span class="subheading">
                            <?php 
                            foreach ($bilgiler as $bilgi) {
                             echo $bilgi->email;
                          } 
                          ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>



<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Write Blog Post!</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name="sentMessage"  id="contactForm"  action="<?php echo base_url();?>index.php/blogyaz_controller/kontrolEt" method="post" enctype="multipart/form-data">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input type="file" name="blogResim" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                 
                    <div class="row control-group"> 
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Heading</label>
                            <input type="text" class="form-control" placeholder="Heading" name='makaleBaslik' required data-validation-required-message="Please enter your heading.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                  
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Blog Post</label>
                            <textarea rows="5" class="form-control" placeholder="Blog Post" name="makaleIcerik" required data-validation-required-message="Please enter a blog post."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default" name="blogGonder">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </div>
    </footer>
 </div><!-- /.container -->
 <script src="<?php echo base_url();?>stil/js/javascript2.js"></script>
</body> 
</html>