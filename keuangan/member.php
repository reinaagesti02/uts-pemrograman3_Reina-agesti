<html>
<head>
    <title>Reina.com</title>
</head>
<body>
   <h2>tabel member</h2>
   <br/>
   <a href="tambah_member.php">+ TAMBAH MEMBER</a>
   <br/>
   <table border="1">
       <tr>
           <th>no</th>
	       <th>nama</th>
		   <th>level</th>
		   <th>opsi</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM member");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			   <td><?php echo $no++; ?></td>
			   <td><?php echo $d['nama']; ?></td>
			   <td><?php echo $d['level']; ?></td>
			   <td>
			       <a href="edit_member.php?id=<?php echo $d['id']; ?>">EDIT</a>
				   <a href="hapus_member.php?id=<?php echo $d['id']; ?>">HAPUS</a>
			   </td>
			</tr>
			<?php
	    }
		?>
	</table>
</body>
</html>