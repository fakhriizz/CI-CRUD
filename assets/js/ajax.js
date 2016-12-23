function getAllBarang() {
	$.get('barang/list_barang',{},function(data, status){
		$(".tabelbarang").html(data);
	});
}

function showTambah(){
	kosongkan();
	$("#myModal").modal('show');
	$('#judul').text('Tambah Barang');
	$("#btnSubmit").text('Simpan');
	$("#btnSubmit").attr('onclick','Simpan()');
	$("#kode").removeAttr('readonly');
}

function showEdit(no){
	kode = $("#kode"+no).text();
	nama = $("#nama"+no).text();
	harga = $("#harga"+no).text();
	satuan = $("#satuan"+no).text();
	
	$("#myModal").modal('show');
	$('#judul').text('Update Barang');
	$("#btnSubmit").text('Simpan');
	$("#btnSubmit").attr('onclick','Update()');
	$("#kode").attr('readonly','true');

	$("#kode").val(kode);
	$("#nama").val(nama);
	$("#harga").val(harga);
	$("#satuan").val(satuan);
}

function showDelete(no) {
	kode = $("#kode"+no).text();
	var pesan = confirm("yakin? "+ kode);
	if (pesan) {
		$.post('barang/delete',{
			kode: kode
		},function(data, status){
			$("#info").html(data);
			getAllBarang();
		});
	}
}

function Simpan(){
	var kode = $("#kode").val();
	var nama = $("#nama").val();
	var harga = $("#harga").val();
	var satuan = $("#satuan").val();

	if (kode === '') {}
	else{
	$.post('barang/tambah',{
		kode: kode,
		nama: nama,
		harga: harga,
		satuan: satuan
	},function(data,status){
		$("#info").html(data);
		kosongkan();
		$("#myModal").modal('hide');
		getAllBarang();
	});
	}
}

function Update(){
	var kode = $("#kode").val();
	var nama = $("#nama").val();
	var harga = $("#harga").val();
	var satuan = $("#satuan").val();
	$.post('barang/update',{
		kode: kode,
		nama: nama,
		harga: harga,
		satuan: satuan
	},function(data,status){
		$("#info").html(data);
		kosongkan();
		$("#myModal").modal('hide');
		getAllBarang();
	});
}

function kosongkan(){
	$("#kode").val('');
	$("#nama").val('');
	$("#harga").val('');
	$("#satuan").val('');
}

$(document).ready(function(){
	getAllBarang();
});