<?php

// $query = require 'core/bootstrap.php';

// $router = new Router;

// require 'routes.php';

// $uri = trim($_SERVER['REQUEST_URI'], '/');

// require $router->direct($uri);

// 

class Post {

    public $title;
    public $published;

    public function __construct ($title, $published) {

        $this->title = $title;
        $this->published = $published;

    }

}

$posts = [
    new Post('My First Post', true),
    new Post('My Second Post', true),
    new Post('My Third Post', true),
    new Post('My Fourth Post', false)
]; 

$unpublishedPosts = array_filter($posts, function($post) {  //First arrays name, then the function// 

    return ! $post->published;

});

$publishedPosts = array_filter($posts, function($post) {
    return $post->published;
});

// $modified = array_map(function ($post) {

//     return ['title' => $post->title];

// }, $posts);

// foreach($posts as $post) {
//     $post->published = false;
// }

// $titles = array_column($posts, 'title');

var_dump($titles);

var_dump($posts);
var_dump($publishedPosts);

?> 