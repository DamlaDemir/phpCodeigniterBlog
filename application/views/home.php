<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link href="<?php echo base_url();?>homecss/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url();?>homecss/css/style.css" rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                         if($bilgiler!=0)
                         {
                              foreach ($bilgiler as $bilgi) {
                             echo  "<h1>"."Welcome to"." ".$bilgi->ad ." ". $bilgi->soyad."'s Blog Site"."</h1>"."<br/>";
                             }
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







<div class="content">
     <div class="container">
         <div class="content-grids">
             <div class="col-md-8 content-main">
                 <div class="content-grid">                  
                     <div class="content-grid-info">
                       
                         <?php 
                           if($makaleBilgileri!=0)
                           {
                            foreach ($makaleBilgileri as $bilgi) {

                            $makaleId=$bilgi->makaleId; 
                            if($bilgi->makaleResim==null)
                            {
                               
                                echo "<img src=".base_url().'homecss/images/post1.jpg>'.'"'.'</img>';
                            }
                            else
                            {
                                 echo img(array('width'=>'600','height'=>'300','src'=>'upload/'.$bilgi->makaleResim));
                            }

                          
                           echo '<div class="post-info">'.
                         '<h4><a href="'.base_url().'index.php/post_controller/makaleYayinla/'.$makaleId .'"'.'>'.$bilgi->makaleBaslik.'</a>'.
                          $bilgi->tarih. '</h4>'. '<p>'. substr($bilgi->makaleIcerik, 0,273).'</p>
                         <a href="'.base_url().'index.php/post_controller/makaleYayinla/'.$makaleId .'"'.' ><span></span>READ MORE</a>
                         </div>';
                            }

                           }
              
                           ?>      
                     </div>
                 
                    
                 </div>
              </div>
              <div class="col-md-4 content-right">
                 <div class="recent">
                     <h3>RECENT POSTS</h3>
                     <ul>
                     <li><a href="#">Aliquam tincidunt mauris</a></li>
                     <li><a href="#">Vestibulum auctor dapibus  lipsum</a></li>
                     <li><a href="#">Nunc dignissim risus consecu</a></li>
                     <li><a href="#">Cras ornare tristiqu</a></li>
                     </ul>
                 </div>
                 <div class="comments">
                     <h3>RECENT COMMENTS</h3>
                     <ul>
                     <li><a href="#">Amada Doe </a> on <a href="#">Hello World!</a></li>
                     <li><a href="#">Peter Doe </a> on <a href="#"> Photography</a></li>
                     <li><a href="#">Steve Roberts  </a> on <a href="#">HTML5/CSS3</a></li>
                     </ul>
                 </div>
                 <div class="clearfix"></div>
                 <div class="archives">
                     <h3>ARCHIVES</h3>
                     <ul>
                     <li><a href="#">October 2013</a></li>
                     <li><a href="#">September 2013</a></li>
                     <li><a href="#">August 2013</a></li>
                     <li><a href="#">July 2013</a></li>
                     </ul>
                 </div>
                 <div class="categories">
                     <h3>CATEGORIES</h3>
                     <ul>
                     <li><a href="#">Vivamus vestibulum nulla</a></li>
                     <li><a href="#">Integer vitae libero ac risus e</a></li>
                     <li><a href="#">Vestibulum commo</a></li>
                     <li><a href="#">Cras iaculis ultricies</a></li>
                     </ul>
                 </div>
                 <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
          </div>
      </div>
</div>
<!---->
            
             <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                        <a href="<?php echo base_url();?>index.php/blogyaz_controller/index">Start Blog Post &rarr;</a>
                    </li>
                </ul>
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

    <!-- jQuery -->
    <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url();?>js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url();?>js/clean-blog.min.js"></script>

</body>

</html>
