<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	 <!-- bootstrap css-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<!-- dcsc -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url()."/home"; ?>">Home</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

                <?php if(!$this->session->userdata("isLoggedIn")){
                echo "<li><a href=".'"'.base_url()."/home/register".'"'.">Signup</a></li>";
                echo "<li><a href=".'"'.base_url()."/home/login".'"'.">login</a></li>";
                }
                ?>

                <?php 
                if($this->session->userdata("isLoggedIn")){

                echo "<li><a href=".'"'.base_url().'/Projects'.'"'.">Projects</li>";
                echo "<li><a href=".'"'.base_url()."/home/logout".'"'.">logout</a></li>";
                echo "<li><a href=''>".$this->session->userdata('userName')."</a></li>";
               }
                ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- dcsc -->

<div class="container">
<div class="col-xs-3"><h4>
	<?php 
		$this->load->view($sidePage);
		 ?></h4>
</div>
<div class="col-xs-9">
<?php 
$this->load->view($main_view); 
?>
</div>
</div
</body>
</html>