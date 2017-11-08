<?php  

$config = [
	'db' => [
		'username' => 'kinanti',
		'password' => 'hujanabu',
		'dsn' => 'mysql:host=localhost;dbname=bukutamu'
	],

];

class Helper{
	public static function redirect($url){
		echo '<meta http-equiv="Refresh" content="0; url='.urlencode($url).'" />';
		exit();
	}
}

?>