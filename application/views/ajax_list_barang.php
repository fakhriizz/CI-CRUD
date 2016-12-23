<?php 
	$data = '<table class="table table-bordered">
				<thead>
					<tr>
						<td>#</td>
						<td>Kode Barang</td>
						<td>Nama Barang</td>
						<td>Harga</td>
						<td>Satuan</td>
						<td>Action</td>
					</tr>
				</thead>';
	$data .= '<tbody>';

	$no = 1;
	if ($barang->num_rows()>0) {
		foreach ($barang->result() as $value) {
			
			$data .= '<tr>
						<td id="'. $no. '">'. $no .'</td>
						<td id="kode'.$no.'">'. $value->kode .'</td>
						<td id="nama'.$no.'">'. $value->nama .'</td>
						<td id="harga'.$no.'">'. $value->harga .'</td>
						<td id="satuan'.$no.'">'. $value->satuan .'</td>
						<td>
							<button class="btn btn-warning" id="btnEdit" onclick="showEdit(\''. $no .'\')"><span class="glyphicon glyphicon-edit"></span></button>
							<button class="btn btn-danger" id="btnDelete" onclick="showDelete(\''. $no .'\')"><span class="glyphicon glyphicon-remove"></span></button>
						</td>
			</tr>';
			$no++;
		}
	}else{
		$data .= '<tr><td colspan="6">Data kosong!</td></tr>';
	}
	$data .= '</tbody>';
	$data .= '</table>';

	echo $data;
?>