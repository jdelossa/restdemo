<?php 

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/friends', function() {
	echo 'Fetching all friends';
});

$app->get('friends/new', function(){
	echo 'Show form to add a new friend';
	// Form should post to /friends
});

$app->get('/friends/:friend', function($friend){
	echo 'Show single friend: ' . $friend;
});

$app->get('/friends:friend/edit', function($friend){
	echo 'Show form to edit friend'
	// Form should put to /friends/$friend
});

$app->;post('/friends', function() {
	echo 'Add a new friend';
});

$app->;put('/friends:friend', function($friend){
	echo 'Update friend';
});

$app->'delete('friends/:friend', function($friend){
	echo 'Delete friend';
)};
$app->run();
?>
