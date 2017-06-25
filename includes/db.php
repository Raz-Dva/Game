	<?php
   ///////подключение к базе пин, логин, пароль, название базы
$connection = mysqli_connect('127.0.0.1', 'root', '', 'game_million');
if($connection == false){
echo ')))))))))))))) <br/>';
exit();
}
// echo "<h3>Есть подключение</h3>";
?>