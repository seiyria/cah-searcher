<?php
	$black_cards = array();
	$white_cards = array();

	$conn = new mysqli("**", "**", "**", "**");

	$results = $conn->query("select id,text from black_cards");

	while($row = $results->fetch_object()) {
		$text = $row->text;
		$row->text = strip_tags($text);
		array_push($black_cards, $row);
	}

	$results = $conn->query("select id,text from white_cards");

	while($row = $results->fetch_object()) {
		$text = $row->text;
		$row->text = strip_tags($text);
		array_push($white_cards, $row);
	}

	$container = new stdClass;
	$container->black = $black_cards;
	$container->white = $white_cards;

	$fp = fopen('white.json', 'w');
	fwrite($fp, json_encode($white_cards));
	fclose($fp);

	$fp = fopen('black.json', 'w');
	fwrite($fp, json_encode($black_cards));
	fclose($fp);
?>