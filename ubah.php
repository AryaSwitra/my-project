<?php
include 'kon.php';
session_start();
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
$cek = $_SESSION['id']; 
$user = mysqli_query($kon, "SELECT * FROM data where id = '$cek' ");
$cari = mysqli_fetch_assoc($user);
// while($cari = mysqli_fetch_assoc($user)){

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

  <title>Bootstrap Example</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/js_ubah.js"></script>
</head>
<body>

<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-12"><div class="text-center" ><h1><?= $cari['nama'] ?></h1></div></div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <div class="row" style="padding:20px 20px;margin-left:10%;margin-top:10%"></div>
        <img  style="max-width:100%;max-height:500%;border-radius: 50%;border:2px solid #900E0E;" src="../images/<?= $cari['gambar'] ?>" class="avatar rounded img-thumbnail" alt="avatar">
        <br>
        <br>
        <form class="form" action="cek_ubah.php" method="post" enctype="multipart/form-data" id="registrationForm">
          <input type="file" class="text-center center-block file-upload" name="gambar" id="gambar" style="display:none" onchange="document.getElementById('filename').value=this.value">
        <input type="text" id="filename" disabled="" value="" placeholder="Upload a different photo..." class="form-control">
        <!-- <input type="file" name=""> -->
        <input type="button" value="Pilih Gambar / File" onclick="document.getElementById('gambar').click()">
        <input type="hidden" name="gambarLama" value="<?= $cari['gambar'] ?>">
      </div></hr><br>

               
       <!--    <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div> -->
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Nama</h4></label>
                              <input type="text" class="form-control" required="" name="nama" value="<?= $cari['nama'] ?>" id="first_name" placeholder="first name">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Jenis kelamin</h4></label>
                             <select  placeholder="gender" class="form-control" style="padding: 0px 12px;" name="jenis_kelamin" required="">
                               <option value="<?= $cari['Jenis_kelamin'] ?>" disabled><?= $cari['Jenis_kelamin'] ?></option>
                               <option value="laki-laki">laki-laki</option>
                               <option value="perempuan">perempuan</option>
                             </select>
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="ubah"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="submit" formaction="index.php"><i class="glyphicon glyphicon-repeat"></i> Back</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div>
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
</body>
</html>