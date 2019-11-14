<?php
	$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");

	$select = $con->prepare("SELECT * FROM `images`");
	$select->setFetchMode(PDO::FETCH_ASSOC);
	$select->execute();

	while($data = $select->fetch()){
		$imagedata = $data['source'];
	}
	$type = $data['type'];
	header("content-type: $type");
	echo $imagedata;