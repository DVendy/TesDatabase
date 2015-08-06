<?php
	$a = [];
	$a[] = [
		'itemcode' => "1",
		'itemname' => "a",
		];
	$a[] = [
		'itemcode' => "2",
		'itemname' => "b",
		];
	$a[] = [
		'itemcode' => "3",
		'itemname' => "c",
		];

		var_dump(array_column($a, 'itemcode'));
?> 