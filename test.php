<?php  

    session_start();
    $user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
    //var_dump($cpf);
    //echo password_hash("1234", PASSWORD_DEFAULT);

?>