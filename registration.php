<!-- <!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
<header style="text-align: center;"> <p style="font-style: italic;"> Registration </p> </header>

<form action="cek_registration.php" method="post" enctype="multipart/form-data">
<label style="position: absolute; top: 15%; left: 37%">Nama</label>
<input style="position: absolute; top: 15%; left: 44%" type="text" name="nama" required="">
<label style="position: absolute; top: 20%; left: 37%">Password</label>
<input style="position: absolute; top: 20%; left: 44%" type="password" name="password" required="">
<label style="position: absolute; top: 25%; left: 37%">Jenis Kelamin</label>
<select style="position: absolute; top: 25%; left: 44%" name="jenis_kelamin" required="">
	<option>--</option>
	<option value="laki-laki">Laki-laki</option>
	<option value="perempuan">Perempuan</option>
</select>
<input type="file" name="gambar" style="position: absolute; top: 30%; left: 44%" required="">
<input type="submit" name="login" style="position: absolute; top: 35%; left: 44%" >
<input type="reset" name="reset" style="position: absolute; top: 35%; left: 49%" >
</form>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title></title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
<!-- Name Section -->
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="cek_registration.php">
        <fieldset>

          <!-- Form Name -->
          <legend>Personal Information Details</legend>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-4">
              <input type="text" name="nama" placeholder="Username" class="form-control" required="">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-4">
              <input type="text" placeholder="Password" class="form-control" name="password" required="">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-4">
              <select type="gender" placeholder="Gender" class="form-control" name="jenis_kelamin" required="">
              	<option value="" disabled selected="">Select Your Option</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
            </div>
          </div>

           <div class="form-group">
            <div class="col-sm-4">
              <input type="file" class="form-control file-upload" name="gambar" required="">
              <br>
              <img src="" class="avatar" height="100" alt="">
            </div>
          </div>

         </fieldset>
          <div class="form-group">
            <div class="col-sm-5 col-sm-offset-1">
            	<button class="btn btn-default" onclick="location.href='login.php'">kembali</button>
                <button type="submit" class="btn btn-primary " name="login">Save</button>
            </div>
          </div>
 	  </form>		
    </div>
  </div>
</body>
<script type="text/javascript">
$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>
</html>