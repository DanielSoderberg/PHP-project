<?php

function validatePost($post)
{
$errors = array();

if (empty($post['title'])){
  array_push($errors, 'Title is required');
}

if (empty($post['body'])){
  array_push($errors, 'Body is required');
}

if (empty($post['topic_id'])){
  array_push($errors, 'Please, select a topic');
}


$existingPost = selectOne ('posts', ['title' => $post['title']]);

if($existingPost) {

  if(isset($post['update-post']) && $existingPost['id'] != $post['id']) {
    array_push($errors, 'Post with that title already exists');
  }
  if (isset($post['add-post'])){
    array_push($errors, 'Post with that title already exists');
  }
}
return $errors;
}



function validateLogin($post)
{
$errors = array();

if (empty($post['postname'])){
  array_push($errors, 'postname is required');
}

if (empty($post['password'])){
  array_push($errors, 'Password is required');
}


return $errors;
}



    
