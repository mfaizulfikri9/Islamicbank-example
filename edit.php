<html>
<head>

<?php 
include "module/header.php";
include "module/alerts.php";
include "config/connect.php"; 

$sql = mysql_query("SELECT nama, jk, ttl, umur, telepon, email, alamat, pekerjaan FROM t_member WHERE id = '".$_GET['id']."'");
$data = mysql_fetch_array($sql);
?>
</head>
<body>

<div class="container">
<?php include "module/nav.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Form Edit (Update)</h1>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-6">
	<form id="form_input" method="POST">	

<?php  
if(isset($_POST['update']))
{
	mysql_query("UPDATE t_member SET nama = '".$_POST['nama']."', jk = '".$_POST['jk']."', ttl = '".$_POST['ttl']."', umur = '".$_POST['umur']."', telepon = '".$_POST['telepon']."',
	email = '".$_POST['email']."', alamat = '".$_POST['alamat']."', pekerjaan = '".$_POST['pekerjaan']."' WHERE id = '".$_GET['id']."'");
	writeMsg('update.sukses');

	//Re-Load Data from DB
	$sql = mysql_query("SELECT nama, jk, ttl, umur, telepon, email, alamat, pekerjaan FROM t_member WHERE id = '".$_GET['id']."'");
	$data = mysql_fetch_array($sql);
}
?>

<div class="form-group">
  		<label class="control-label" for="nama">Nama Lengkap</label>
  		<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="jk">Jenis Kelamin</label>
  		<input type="text" class="form-control" name="jk" id="jk" value="<?php echo $data['jk']; ?>" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="ttl">Tanggal Lahir</label>
  		<input type="date" class="form-control" name="ttl" id="ttl" value="<?php echo $data['ttl']; ?>" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="umur">Umur</label>
  		<input type="text" class="form-control" name="umur" id="umur" value="<?php echo $data['umur']; ?>" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="telepon">Telepon</label>
  		<input type="text" class="form-control" name="telepon" id="telepon" value="<?php echo $data['telepon']; ?>" >
	</div>
	<div class="form-group">
  		<label class="control-label" for="email">E-mail</label>
  		<input type="text" class="form-control" name="email" id="email" value="<?php echo $data['email']; ?>" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="alamat">Alamat</label>
  		<input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="pekerjaan">Pekerjaan</label>
  		<input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?php echo $data['pekerjaan']; ?>" required>
	</div>

	<div class="form-group">
	<input type="submit" value="Update" name="update" class="btn btn-primary">
	<a href="rekap.php" class="btn btn-danger">Batal</a>
	</div>

	</form>
	</div>
</div>

</div>
<?php include "module/footer.php"; ?>
</body>
</html>