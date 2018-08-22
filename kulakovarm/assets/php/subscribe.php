<?php

if(sendOrder($_POST["phone"]))
	echo "<h1>Всё отлично! Скоро мы свяжемся с вами!</h1>";
else
	echo '<h1>Упс, произошла какая-то ошибка, попробуйте связаться с нами в <a href="https://vk.com/vesorokin">Вконтакте</a></h1>';


function sendOrder($message){

// Отправляем
if(mail('v.e.sorokin@gmail.com', 'Новый заказ на стол', $message))
	return true;
else
	return false;

}
	
?>
