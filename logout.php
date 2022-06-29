<?php
$user = 'u41732';
$pass = '9367477';
$db = new PDO('mysql:host=localhost;dbname=u41732', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
unset($_SESSION['user']);//Удаляем сессию текущего пользователя

//Удаляем куки в которых хранились данные о пользователе
setcookie('name_value','',1);
setcookie('email_value','',1);
setcookie('bio_value','',1 );
setcookie('year_value','',1);
setcookie('gender_value','',1);
setcookie('limbs_value','',1);
setcookie('ability_value','',1);
setcookie('agree_value', '', 1);

header('Location: index.php');
?>