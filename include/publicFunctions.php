<?php

function getPublishedPosts(){

  global $conn;
  $sql = "SELECT * FROM posts WHERE published=true";
  $result = mysqli_query($conn, $sql);


  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

  $final_posts = array();
  foreach ($posts as $post) {
    $post['author'] = getPoster($post['user_id']);
    array_push($final_posts, $post);
  }

  return $final_posts;
}

function getPoster($post_id){
  global $conn;
  $sql = "SELECT username FROM users WHERE id=$post_id LIMIT 1";
  $result = mysqli_query($conn, $sql);
  $topic = mysqli_fetch_assoc($result);
  return $topic['username'];
}

function getPost(){
  global $conn;
  $full = ltrim(stristr($_SERVER["QUERY_STRING"], '='), '=');


  $sql = "SELECT * FROM posts WHERE slug=".'"'.$full.'"';
  $result = mysqli_query($conn, $sql);

  $post = mysqli_fetch_array($result, MYSQLI_ASSOC);


    $post['author'] = getPoster($post['user_id']);

  return $post;
}

function sortPosts($posts){
  $array = array();
  foreach ($posts as $post) {
    $month = date('F Y', strtotime($post['created_at']));
    if(!in_array($month,$array)){
    array_unshift($array, $month);
  }
  }
  return $array;
}
