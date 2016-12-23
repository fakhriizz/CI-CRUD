<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CI - CRUD Sederhana</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div id="info"></div>
			<h4>Data barang</h4>
			<button class="btn btn-primary pull-right" onclick="showTambah()">Add New</button><br>
			<p>Records:</p>
			<div class="tabelbarang">
		</div>
	</div>


	<!-- modal bootstrap -->
	<div class="modal fade" role="dialog" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="judul"></h4>
				</div>
				<div class="modal-body">
					
						<div class="form-group">
							<label for="Kode">Kode Barang</label>
							<input type="text" id="kode" name="kode" class="form-control" required="true">
						</div>
						<div class="form-group">
							<label for="Nama">Nama Barang</label>
							<input type="text" id="nama" name="nama" class="form-control" required="true">
						</div>
						<div class="form-group">
							<label for="Harga">Harga</label>
							<input type="text" id="harga" name="harga" class="form-control" required="true">
						</div>
						<div class="form-group">
							<label for="Satuan">Satuan</label>
							<input type="text" id="satuan" name="satuan" class="form-control" required="true">
						</div>
					
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success" id="btnSubmit"></button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/ajax.js"></script>
</body>
</html>