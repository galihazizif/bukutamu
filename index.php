<?php 

include __DIR__.'/config.php';

$page = !empty($_GET['page'])?$_GET['page']:null;


try{

	include __DIR__.'/layout/header.php';

	switch ($page) {
		case 'home':
				include __DIR__.'/page/home.php';
			break;
		case 'form':
				include __DIR__.'/page/form.php';
			break;
		
		default:
				include __DIR__.'/page/home.php';
			break;
	}

	include __DIR__.'/layout/footer.php';

}catch(\Exception $e){
	echo $e->getMessage();
}

?>