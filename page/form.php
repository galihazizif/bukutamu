<?php  

if(!empty($_POST)){
	try{

		$dbConfig = $config['db'];

		$pdo = new PDO($dbConfig['dsn'],$dbConfig['username'],$dbConfig['password']);
		$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		$sql = " INSERT INTO daftar_tamu(";
		$sql.= " nama,alamat,email)";
		$sql.= " VALUES (";
		$sql.= " :nama,:alamat,:email)";

		$pds = $pdo->prepare($sql);

		$pds->bindValue(':nama',$_POST['nama']);
		$pds->bindValue(':alamat',$_POST['alamat']);
		$pds->bindValue(':email',$_POST['email']);
		$pds->execute();


		Helper::redirect('index.php');


	}catch(PDOException $e){
		
		echo $e->getMessage();
		exit();
		
	}
}else{

}


?>

<form method="post" action="index.php?page=form">
	<dl>
		<dt>Nama</dt>
		<dd><input type="text" name="nama"></dd>
		<dt>Email</dt>
		<dd><input type="text" name="email"></dd>
		<dt>Alamat</dt>
		<dd><textarea name="alamat"></textarea></dd>
		<button type="submit">Kirim</button>
	</dl>
</form>