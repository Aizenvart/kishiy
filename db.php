<?php
	$link = mysqli_connect('maga50.beget.tech','maga50','77555577','maga50_nevesti');
	if(mysqli_connect_errno()) {
		echo 'Ошибка при подключении к БД('.mysqli_connect_errno().'):'.mysqli_connect_error();
		exist();
	}
?>