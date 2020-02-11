<?php try{

    $db = new PDO('mysql:host=buraya veritabanı sunucunuzun adı;dbname=buraya veritabanı adı','buraya veritabanı kullanıcı adı','buraya veritabanı şifreniz');

	$db->exec('SET CHARACTER SET utf8');

}catch(PDOException $e){

    echo 'Hata: '.$e->getMessage();

}
?>