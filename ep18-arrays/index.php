<?php 

class Post

{

	public $title;


	public $author;


	public $published;


	public function __construct($title, $author, $published)

	{

		$this->title = $title;

		$this->author = $author;

		$this->published = $published;
	}

}


$posts = [

	new Post('My First Post','SWA', true),

	new Post('My Second Post','SWA', true),

	new Post('My Third Post','SWA', true),

	new Post('My Fourth Post','SWA', false)

];


$publishedPosts = array_filter($posts, function ($post) {

	return $post->published;

});


$unpublishedPosts = array_filter($posts, function ($post) {

	return ! $post->published;

});


$titles = array_map(function ($post) {

	return ['title' => $post->title];

}, $posts); 


$posts = array_map(function($post)
{

	return (array) $post;

} , $posts);

$titles = array_column($posts, 'author', 'title');

var_dump($posts);

var_dump($titles);

// class Task 

// {

// 	public $title;

// 	public $complete;

// 	public $assign;

// 	public function __construct($title, $complete, $assign) 
// 	{

// 		$this->title = $title;

// 		$this->complete = $complete;

// 		$this->assign = $assign;

// 	}

// 	public function done()

// 	{

// 		$this->complete = true;

// 	}
// }


// $todos = [

// 	new Task('go to yu', false, 'me'),

// 	new Task('do assignment', false, 'me'),

// 	new Task('go to ml', true, 'me'),

// ];



// var_dump($todos);



// var_dump($ctask);


// foreach ($todos as $task) {
	
// 	$task->done();
// }

// $tasks = array_map(function($task){

// 	return (array) $task;

// }, $todos);



// var_dump($tasks);
















