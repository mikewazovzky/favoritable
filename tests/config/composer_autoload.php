<?php

try {
	$myFile = json_decode(file_get_contents('composer.json'), true);

	$myFile['autoload']['psr-4']["Mikewazovzky\\Favoritable\\"] = 'packages/Mikewazovzky/Favoritable/src/';
	$myFile['autoload']['classmap'] = [ 'packages/Mikewazovzky/Favoritable/tests' ];
	$myFile['autoload']['files'] = [ 'tests/functions.php' ];

	
	file_put_contents('composer.json', json_encode($myFile, JSON_PRETTY_PRINT)); // JSON_UNESCAPED_SLASHES));

} catch (Exception $e) {
	echo 'Failed to modify composer.json. Error message: ' . $e->getMessage();
}

echo 'composer.json autoload sections has neen updated.';

