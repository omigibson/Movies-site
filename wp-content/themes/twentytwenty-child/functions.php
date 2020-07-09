<?php
require ABSPATH . 'vendor/autoload.php';
use GuzzleHttp\Client;

// Use Guzzle to get movies from API
function sync_omdb_movies(){
   $client = new Client([
      "base_uri" => "http://www.omdbapi.com/",
      "timeout"  => 2.0,
   ]);

   // Make an async request to the API
   include 'api-key.php';
   $promise = $client->requestAsync("GET", "?apikey=" . $key . "&type=movie&y=2019&s=movie");
   // Force response to complete
   $response = $promise->wait();

   $promise->then(function ($response) {
      // Decode json response to associative array
      $movies = json_decode($response->getBody(), true);

      // Loop through movies and create Wordpress posts
      foreach ($movies["Search"] as $index => $movie) {
         if(!post_exists($movie["Title"])){
            $movie_post = array(
               "post_title" => $movie["Title"],
               "post_content" => "Released: " . $movie['Year'] . "\nIMDB Id: " . $movie['imdbID'] . "\n<img src='" . $movie['Poster'] . "' alt='" . $movie["Title"] . "'/>",
               "post_status" => "publish"
            );
            wp_insert_post($movie_post);
         }
      }
   });
}

// Call movie sync function on Wordpress init hook
add_action( 'init', 'sync_omdb_movies' );


// Enqueue stylesheets (parent and child)
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentytwenty-style' for the Twenty Twenty theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
