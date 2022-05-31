<?php

    $cidade = "SaoPaulo";

	$url = "https://goweather.herokuapp.com/weather/$cidade";
	$json = file_get_contents($url);    
	$data = json_decode($json);
	echo $data->temperature . "<br />";
	echo $data->description . "<br />";
?>