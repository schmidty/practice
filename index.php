<?php
// Really simple CRUD using Slim, Doctrine DBAL

require 'vendor/autoload.php';

use Doctrine\DBAL\DriverManager;

$conn = DriverManager::getConnection([
	'dbname' => 'practice',
	'user'   => 'root',
	'password' => 'password',
	'host' => 'localhost',
	'driver' => 'pdo_mysql'
]);

$app = new Slim\App();

$app->get('/books', function() use($conn) {
	echo "Books<br/>\n";

	$sql = 'SELECT * FROM library';

	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$results = $stmt->fetchAll();

	foreach($results as $result) {
		foreach($result as $key => $value) {
			echo "Key: {$key}  - {$value}<br/>\n";
		}
	}
});

$app->post('/books', function($req) use ($conn) {
	echo "Inserting book with following values...<br/>\n";

	$params = [];

	foreach($req->getParsedBody() as $key => $value) {
		$params[$key] = $value;

		echo sprintf("%s - %s<br/>\n", 
			$key,
			$value
		);
	}
	var_dump($params);

	$result = $conn->insert('library', $params);
});

$app->delete('/books/{id}', function($req, $res, $args) use ($conn) {
	echo "Deleting book...<br/>\n";

	$id = array_key_exists('id', $args) ? $args['id'] : null;

	if ($id) {
		$result = $conn->delete('library', ['book_id'=>$id]);

		if ($result) {
			echo "Deleted book id {$id}<br/>\n";
		}
	}
});

$app->put('/books', function($req) use ($conn) {
	echo "Updating book with following values...<br/>\n";

	$book_id = null;
	$params = [];

	foreach($req->getParsedBody() as $key => $value) {

		if ($key == 'book_id') {
			$book_id = $value;
		} else {
			$params[$key] = $value;
		}

		echo sprintf("%s - %s<br/>\n", 
			$key,
			$value
		);
	}

	$result = $conn->update('library', $params, [ 'book_id'=>$book_id ]);
});

$app->get('/books/clear', function() use ($conn) {
	echo "Clearing all books from database...<br/>\n";

	$sql = 'truncate library';

	$result = $conn->query($sql);

	if ($result) {
		echo "All values deleted from database<br/>\n";
	}
});


$app->run();



