<?php $this->load->view("client/_partials/navbar.php") ?>
<?php $this->load->view("client/_partials/body.php") ?>
<style>
	.data{
		width: 30%;
		min-height: 60px;
		display: inline-block;
		margin-left: 40px;
		text-decoration: none;
		background-color: rgba(130,130,130,0.5);
		margin-top: 50px;
	}
	.data:hover{
		background: #2ecc71;
	}
	hr{
		-moz-border-bottom-colors:none;
		-moz-border-image:none;
		-moz-border-left-colors:none;
		-moz-border-right-colors:none;
		-moz-border-bottom-colors:none;

	}
	#portfolio{
		margin-top: 20%;
	}
</style>
<body style="background-color: white;color: black">


<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Kontak</h2>
      <hr>
    </div>
    <div class="categories">
      <div class="clearfix"></div>
	</div>
	
	<div id="container" style="position: relative;background-color: grey;font-size: 20px">
<div id="header" style="background-color:grey;">
<h1 style="margin-bottom:0;color:#FFFFFF"><center>Kontak</h1>
  </div>

    <img src="<?php echo base_url(). 'assets/img/wa.jpg'; ?>"alt"ContactUs wa"width="40"height="40"/>
      <a> No Whatsup    <br><hr>  089614110279      <br><br><br></a>
    <img src="<?php echo base_url(). 'assets/img/gmail.jpg'; ?>"alt"ContactUs gmail"width="40"height="40"/>
      <a> Gmail         <br><hr>  azitom2@gmail.com     <br><br><br></a>
    <img src="<?php echo base_url(). 'assets/img/ymail.jpg'; ?>"alt"ContactUs ymail"width="30"height="30"/>
      <a> Ymail         <br><hr>   azi9k@yahoo.com     <br><br><br></a>
    <img src="<?php echo base_url(). 'assets/img/ig.jpg'; ?>"alt"ContactUs ig"width="40"height="40"/>
      <a> Intagram       <br><hr>   azi9k@yahoo.com     <br><br><br></a>


</div>
</body>

<?php $this->load->view("client/_partials/modal.php") ?>
<?php $this->load->view("client/_partials/js.php") ?>
<?php $this->load->view("client/_partials/head.php") ?>