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

 <?php 
 foreach ($bilgiler as $bilgi) {
  $firstName=$bilgi->ad;
  $lastName=$bilgi->soyad;
  $email=$bilgi->email;
  $username=$bilgi->kullaniciAdi;
  //$password=$bilgi->sifre;
  $phone=$bilgi->telefon;
  //$country=$bilgi->ulke;
  $city=$bilgi->sehir;
  $address=$bilgi->adres;
  $website=$bilgi->website;
  $content=$bilgi->kendiniTanit;                        
 }
  ?>
<!-- FORM BAŞLANGICI -->
<div >

 
    <form class="well form-horizontal" action="<?php echo base_url();?>index.php/profil_guncelle_controller/kontrolEt" method="post"  id="contact_form" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Contact Us Today!</legend>

<div class="form-group">
  <label class="col-md-4 control-label">Add  Profil Photo</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
<?php echo $this->session->flashdata('msg')?>
 <div><input type="file" name="resim" /></div>
      
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text"  value="<?php echo $firstName;?>" >
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text" value="<?php echo $lastName;?>">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" value="<?php echo $email;?>">
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Username</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="username" placeholder="Username" class="form-control"  type="text" value="<?php echo $username;?>">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="password" placeholder="Password" class="form-control"  type="text" >
    </div>
  </div>
</div>

<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text" value="<?php echo $phone;?>">
    </div>
  </div>
</div>

<!-- Select Basic -->

<div class="form-group"> 
  <label class="col-md-4 control-label">Country</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="country" class="form-control selectpicker" >
      <option value=" " >Please select your country</option>
      <option>Turkey</option>
      <option>Germany</option>
      <option >France</option>
      <option >Spain</option>
      <option >Egypt</option>
      <option >England</option>
      <option >America</option> 
    </select>
  </div>
</div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  type="text" value="<?php echo $city;?>">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text" value="<?php echo $address;?>">
    </div>
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Website or domain name</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="website" placeholder="Website or domain name" class="form-control" type="text" value="<?php echo $website;?>">
    </div>
  </div>
</div>

<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="Male" /> Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="Famale" /> Famale
                                </label>
                            </div>
                        </div>
                    </div>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Introduce Yourself</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea class="form-control" name="comment" placeholder="Introduce Yourself" ><?php echo $content;?></textarea>
  </div>
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" name="guncelle">Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->

 <script src="<?php echo base_url();?>stil/js/javascript2.js"></script>
</body>	
</html>