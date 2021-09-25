<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{
            background-size: 100%;
            color: white;
        }
        .box{
            width: 350px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #191919;
            text-align: center;
        }
        .box input[type = "text"],.box input[type = "password"]{
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            border-radius: 24px;
            transition: 0.25s;
        }
        .box input[type = "text"]:focus,.box input[type = "password"]:focus{
            width: 280px;
            border-color: #2ecc71;

        }
        .box button[type = "submit"]{
            color: white;
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 10px;
            outline: none;
            border-radius: 24px;
            transition: 0.25s;

        }
        .box button[type = "submit"]:hover{
            background: #2ecc71;
        }
        

        

        
    </style>
    <title>Sign In</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body background="<?php echo base_url(). 'assets/images.jpg'; ?>">

            
            <?php if(isset($error)) { echo $error; }; ?>
               
                    
    


                <form class="box" method="POST" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
                  <?php echo $this->session->flashdata('msg');?>

                   <h1 style="text-align: center;margin-bottom: 20px; color: white;"><strong>LOGIN</strong></h1>
                    <input type="text" id="username" name="username" class="" placeholder="Username" required autofocus style="background-color: rgba(0,0,0,0.5);color: white;">
               
                
                    <input type="password" id="password" name="password" class="" placeholder="Password" required style="background-color:rgba(0,0,0,0.5); color: white;">
                

                <button class="" type="submit">Masuk</button>
                <a class="btn btn-primary" href="<?php echo site_url('user'); ?>" style="width: 200px;border-radius: 10px;">Daftar</a>

                
                </form>

            <div id="error" style="margin-top: 10px;color: white;"></div>

  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/bootstrap/css/bootstrap.css'?>"></script>

    

  </body>
</html>
