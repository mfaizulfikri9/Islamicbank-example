<html>
<head>
<?php 
include "module/header.php";
include "module/alerts.php";
include "config/connect.php"; 
?>
</head>
<body>

<div class="container">
<?php include "module/nav.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>DATA PRIBADI</h1>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-6">
	
	<form id="form_input" method="POST">	

<?php  

if(isset($_POST['simpan']))
{
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$umur = $_POST['umur'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
	mysql_query("INSERT INTO t_member (nama, jk, ttl, umur, telepon, email, alamat, pekerjaan) 
	VALUES ('$nama', '$jk', '$ttl', '$umur', '$telepon', '$email', '$alamat', '$pekerjaan')");
	writeMsg('save.sukses');
}
?>

	<div class="form-group">
  		<label class="control-label" for="nama">Nama Lengkap</label>
  		<input type="text" class="form-control" name="nama" id="nama" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="jk">Jenis Kelamin</label>
  		<input type="text" class="form-control" name="jk" id="jk" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="ttl">Tanggal Lahir</label>
  		<input type="date" class="form-control" name="ttl" id="ttl" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="umur">Umur</label>
  		<input type="age" class="form-control" name="umur" id="umur" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="telepon">Telepon</label>
  		<input type="text" class="form-control" name="telepon" id="telepon">
	</div>
	<div class="form-group">
  		<label class="control-label" for="email">E-mail</label>
  		<input type="email" class="form-control" name="email" id="email" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="alamat">Alamat</label>
  		<input type="text" class="form-control" name="alamat" id="alamat" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="pekerjaan">Pekerjaan</label>
  		<input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
	</div>

	<div class="form-group">
	<input type="submit" value="Simpan" name="simpan" class="btn btn-success">
	<input type="reset" value="Reset" class="btn btn-warning">
	</div>

	</form>
	</div>
</div>

</div>
<?php include "module/footer.php"; ?>
</body>
</html>