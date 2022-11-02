<html>
<head>
    <title>Reina.com</title>
</head>
<body>
   <h2>tabel barang</h2>
   <br/>
   <a href="tambah_barang.php">+ TAMBAH BARANG</a>
   <br/>
   <table border="1">
       <tr>
	       <th>no</th>
	       <th>nama barang</th>
		   <th>kode barang</th>
		   <th>qty</th>
		   <th>kategori</th>
		   <th>opsi</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$query = mysqli_query($koneksi,"select * from barang");
		while($data = mysqli_fetch_array($query)){
			?>
			<tr>
			   <td><?php echo $no++; ?></td>
			   <td><?php echo $data['nama_barang']; ?></td>
			   <td><?php echo $data['kode_barang']; ?></td>
			   <td><?php echo $data['qty']; ?></td>
			   <td><?php echo $data['kategori_id']; ?></td>
			   <td>
			       <a href="edit_barang.php?id=<?php echo $data['id']; ?>">EDIT</a>
				   <a href="hapus_barang.php?id=<?php echo $data['id']; ?>">HAPUS</a>
			   </td>
			</tr>
			<?php
	    }
		?>
	</table>
</body>
</html>