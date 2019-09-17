<html>
<head>
<?php 
include "module/header.php";
include "module/alerts.php";
include "config/connect.php"; 

$sql = mysql_query("SELECT id,nama, jk, ttl, umur, telepon, email, alamat, pekerjaan FROM t_member ORDER BY ID DESC");
?>
</head>
<body>
<div class="container">
<?php include "module/nav.php"; ?>
<div class="row">
    <div class="col-lg-12">
    </div>
</div>

<p>
<div class="row">

<div class="col-md-12">
<div class="col-md-4">
    <div class="input-group">
	<input type="text" size="30" class="form-control" maxlength="1000" value="" id="S" onkeyup="apex_search.search(event);" />
	<span class="input-group-btn">
	<input type="button" class="btn btn-default" value="Search" onclick="apex_search.lsearch();"/>
	</span>
	</div>
</div>
<div class="col-md-8">
<a href="export.php" class="btn btn-success">
<span class="glyphicon glyphicon-save" aria-hidden="true"></span> Export to Excel</a>
<a href="rekap.php" class="pull-right btn btn-sm btn-warning">+ Tambah Data</a>
</div>
</div>
</div>

<br />

<div class="row">
	<div class="col-md-12">
	<p>
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th width="5%"><center>NO</center></th>
					<th>NAMA LENGKAP</th>
					<th>JENIS KELAMIN</th>
					<th>TANGGAL LAHIR</th>
					<th>UMUR</th>
					<th>TELEPON</th>
					<th>E-MAIL</th>
					<th>ALAMAT</th>
					<th>PEKERJAAN</th>
					<th width="15%"><center>ACTION</center></th>
				</tr>
			</thead>
			<tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($sql)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['jk']; ?></td>
					<td><?php echo $row['ttl']; ?></td>
					<td><?php echo $row['umur']; ?></td>
					<td><?php echo $row['telepon']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['alamat']; ?></td>
					<td><?php echo $row['pekerjaan']; ?></td>
					<td align="center">
					<a href="edit.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary btn-md">update</a></button>   
					<a href="del.php?id=<?php echo $row['id']; ?>" onclick ="if (!confirm('Apakah Anda yakin akan menghapus data ini?')) return false;"type="button" class="btn btn-danger btn-md">delete</a></button>
					</td>
				</tr>
			<?php $no++; } ?>	
			</tbody>
		</table>
	</p>	
	</div>
</div>	

</div>


<?php include "module/footer.php"; ?>
</body>
</html>

