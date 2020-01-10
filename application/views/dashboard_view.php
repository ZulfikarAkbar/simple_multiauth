<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <a class="navbar-brand" style="color:white" href="#">LOGO</a>
          <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <?php if($this->session->userdata('role')==='1'):?>
                    <li class="nav-item" ><a class="nav-link" style="color:white" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" style="color:white" href="#">Posts</a></li>
                    <li class="nav-item"><a class="nav-link" style="color:white" href="#">Pages</a></li>
                    <li class="nav-item"><a class="nav-link" style="color:white" href="#">Media</a></li>
                
                <?php elseif($this->session->userdata('role')==='2'):?>
                    <li class="nav-item"><a class="nav-link" style="color:white" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" style="color:white" href="#">Pages</a></li>
                    <li class="nav-item"><a class="nav-link" style="color:white" href="#">Media</a></li>
                <?php elseif($this->session->userdata('role')==='3'):?>
                    <li class="nav-item"><a class="nav-link" style="color:white" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" style="color:white" href="#">Posts</a></li>
                <?php endif?>
              </ul>
              <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" style="color:white" href="<?php echo site_url('login/logout');?>">SignOut</a></li>
              </ul>
          </div>
        </nav>
        <div class="jumbotron">
            <h1>Welcome Back <?php echo $this->session->userdata('username');?></h1>
        </div>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
  </html>