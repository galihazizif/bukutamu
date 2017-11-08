<?php  

try{

		$dbConfig = $config['db'];

		$pdo = new PDO($dbConfig['dsn'],$dbConfig['username'],$dbConfig['password']);

		$sql = " SELECT * FROM daftar_tamu";

		$pds = $pdo->query($sql);

		$data = $pds->fetchAll();



	}catch(PDOException $e){
		
		echo $e->getMessage();
		exit();
		
	}


?>



<h3>Selamat datang di halaman buku tamu</h3>
<p>Berikut ini data tamu yang telah mengisi buku tamu</p>

<?php if(count($data) > 0): ?>
	<table>
		<tr>
			<td>ID</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Email</td>
		</tr>
	<?php foreach($data as $tamu): ?>
		<tr>
			<td><?=$tamu['id'] ?></td>
			<td><?=$tamu['nama'] ?></td>
			<td><?=$tamu['alamat'] ?></td>
			<td><?=$tamu['email'] ?></td>
		</tr>

	<?php endforeach; ?>
	</table>
<?php else: ?>
	Belum ada tamu
<?php endif; ?>
