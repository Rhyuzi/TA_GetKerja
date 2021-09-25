<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{
            background-size: 100%;
            color: white;
        }
        .form-signin
        {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="text"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .account-wall
        {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: rgba(130,130,130,0.5);
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
        }
        .login-title
        {
            color: #555;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        .profile-img
        {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        .need-help
        {
            margin-top: 10px;
        }
        .new-account
        {
            display: block;
            margin-top: 10px;
        }
        
    </style>
    <title>Sign In</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body background="<?php echo base_url(). 'assets/images.jpg'; ?>">
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            
            <?php if(isset($error)) { echo $error; }; ?>
            <div class="account-wall" style="color: white;">
                <h1 style="text-align: center;margin-bottom: 20px; color: white;"><strong>Daftar</strong></h1>
                    <span class="glyphicon glyphicon-user" style="font-size: 95px;margin: 0 130px 0 130px;color: white;"></span>
                    
                   


               <?php echo form_open_multipart('register/daftar'); ?>
               <?php echo $this->session->flashdata('daftar');?>
                <div class="form-group">
                    <input type="text" name="input_user_id" class="form-control" placeholder="Username" value="<?php set_value('input_user_id'); ?>" required autofocus style="background-color: rgba(0,0,0,0.5);color: white;">
                </div>
                <div class="form-group">
                    <input type="text" name="input_nama" class="form-control" placeholder="Nama" value="<?php set_value('input_nama'); ?>" required autofocus style="background-color: rgba(0,0,0,0.5);color: white;">
                </div>

                <div class="form-group">
                    <input type="password" name="input_password" class="form-control" placeholder="Password" required autofocus style="background-color: rgba(0,0,0,0.5);color: white;">
                </div>
                
                <div class="form-group">
                    <input type="text" name="input_alamat" class="form-control" placeholder="Alamat" value="<?php set_value('input_alamat'); ?>" required style="background-color:rgba(0,0,0,0.5); color: white;">
                </div>
                <div class="form-group">
                    <input type="date" name="input_tanggal lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php set_value('input_tanggal_lahir'); ?>" required autofocus style="background-color: rgba(0,0,0,0.5);color: white;">
                </div>

                <div class="form-group">
                    <input type="text" name="input_tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php set_value('input_tempat_lahir'); ?>" required autofocus style="background-color: rgba(0,0,0,0.5);color: white;">
                </div>
                
                <div class="form-group">
                    <input type="text" name="input_email" class="form-control" placeholder="Email" value="<?php set_value('input_email'); ?>" required autofocus style="background-color: rgba(0,0,0,0.5);color: white;">
                </div>
                <div class="form-group">
                    <input type="text" name="input_nohp" class="form-control" placeholder="No Handphone" value="<?php set_value('input_nohp'); ?>" required autofocus style="background-color: rgba(0,0,0,0.5);color: white;">
                </div>

                <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Daftar">
            <?php echo form_close() ?>
            </div>

            <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>
  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/bootstrap/css/bootstrap.css'?>"></script>

    

  </body>
</html>
