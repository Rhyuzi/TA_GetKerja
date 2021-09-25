<!DOCTYPE html>
<html>
<head>

<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">
	<meta charset="utf-8">
	<title>GetKerja</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
</head>
<body background="<?php echo base_url(). 'assets/images.jpg'; ?>" style="background-size: 90%">
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="https://www.tutorialswb.com/">GetKerja</a>
			</div>
		</div>
	</nav>
	<div id="responseDiv" class="alert text-center" style="margin-top:20px; display:none;">
				<button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
				<span id="message"></span>
			</div>
	<div style="width: 20px;background-color: black;">
	<a class="navbar-brand mr-1 col-md-5" style="font-size: 90px;color: white;margin-top: 150px;" href="#"><i class="fa fa-building"></i>
    <strong><center>GetKerja</center></strong></a>
    </div>

<div class="container" style="float: right;">
	<div class="row">
		<div class="col-lg-4" style="float: right;">
			<div class="login-panel panel panel-primary">
		        <div class="panel-heading">
		            <h3 class="panel-title" style="font-size: 40px;"><span class="glyphicon glyphicon-user"></span> Register
		            </h3>
		        </div>
		    	<div class="panel-body">
		        	<form id="regForm">
		            	<fieldset>
		            		<div class="form-group">
		                    	<input class="form-control" placeholder="Username" type="text" name="user_id">
		                	</div>
		                		<div class="form-group">
		                    	<input class="form-control" placeholder="Nama Lengkap" type="text" name="nama">
		                	</div>
		                		<div class="form-group">
		                    	<input class="form-control" placeholder="Password" type="password" name="pass">
		                	</div>
							<div class="form-group">
		                    	<input class="form-control" placeholder="Masukan Password yang sama" type="password" name="pass2">
		                	</div>
		                		<div class="form-group">
		                    	<input class="form-control" placeholder="Alamat" type="text" name="alamat">
		                	</div>
		                		<div class="form-group">
		                    	<input class="form-control" placeholder="Tanggal Lahir" type="date" name="tanggal_lahir">
		                	</div>
		                		<div class="form-group">
		                    	<input class="form-control" placeholder="Tempat Lahir" type="text" name="tempat_lahir">
		                	</div>
		                	<div class="form-group">
		                    	<input class="form-control" placeholder="Email" type="text" name="email">
		                	</div>
		                	<div class="form-group">
		                    	<input class="form-control" placeholder="No Handphone" type="text" name="nohp">
		                	</div>
		                	
		                	<button type="submit" class="btn btn-lg btn-primary btn-block">Sign Up</button>
		                	<a href="<?php echo site_url('login'); ?>" class="btn btn-lg btn-success btn-block">Halaman Login</a>
		            	</fieldset>
		        	</form>
		    	</div>
		    </div>
		    
		</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		getTable();

		$('#regForm').submit(function(e){
			e.preventDefault();
			var url = '<?php echo base_url(); ?>';
			var reg = $('#regForm').serialize();
			$.ajax({
				type: 'POST',
				data: reg,
				dataType: 'json',
				url: url + 'index.php/user/register',
				success:function(response){
					$('#message').html(response.message);
					if(response.error){
						$('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
					}
					else{
						$('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
						$('#regForm')[0].reset();
						getTable();
					}
				}
			});
		});

		$(document).on('click', '#clearMsg', function(){
			$('#responseDiv').hide();
		});

	});
	function getTable(){
		var url = '<?php echo base_url(); ?>';
		$.ajax({
			type: 'POST',
			url: url + 'index.php/user/fetch',
			success:function(response){
				$('#tbody').html(response);
			}
		});
	}
</script>
</body>
</html>

