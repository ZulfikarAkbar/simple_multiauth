<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <style>
      .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }
    </style>
  </head>
  <body>
    <br><br>
      <div class="container" >
       <div class="col-md-4 col-md-offset-4"style="margin: auto">
         <form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post" enctype="multipart/form-data">
           <h2 class="form-signin-heading" style="text-align:center">Please sign in</h2>
           <br>
           <img class="center" width=30% height=30% src="<?php echo base_url('assets/img/login_icon.png');?>" alt="">
           <br>
           <?php echo $this->session->flashdata('msg');?>
           <label for="email" class="sr-only">email</label>
           <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
           <br>
           <label for="password" class="sr-only">Password</label>
           <input type="password" name="password" class="form-control" placeholder="Password" required>
           <br>
           <div class="checkbox">
             <label>
               <input type="checkbox" value="remember-me"> Remember me
             </label>
           </div>
           <div style="width:100% ;height:100% " class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>  
          <br/>
           <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
         </form>
       </div>
       </div> <!-- /container -->
 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </body>
</html>