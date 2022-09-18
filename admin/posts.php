<?php

include '../include/config.php';
include 'include/post_functions.php';
?>

<!DOCTYPE html lang="en">
<html>
<head>
  <title>Posts | Joe's Blog</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, inital-scale=1" />
  <meta name="viewport" content="height=device-height, inital-scale=1" />
  <meta name="author" content="Cameron Scholes" />
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/479b50a13e.js" crossorigin="anonymous"></script>
  <?php $posts = getAllPosts(); ?>
</head>
<body>
  <?php include 'include/header.php';?>
  <main>
    <?php include 'include/menu.php';?>
    <div class="table-div">
      <?php include 'include/messages.php';

      if(empty($posts)){ ?>
        <h1>No posts in the database...</h1>
      <?php }else{ ?>
        <table class="table">
          <thead>
            <th>
              N
            </th>
            <th>
              Author
            </th>
            <th>
              Title
            </th>
            <th>
              Views
            </th>
            <?php if($_SESSION['user']['role'] == 'Admin'){ ?>
              <th>
                <small>Publish</small>
              </th>
            <?php } ?>
            <th>
              <small>Edit</small>
            </th>
            <th>
              <small>Delete</small>
            </th>
          </thead>
          <tbody>
            <?php foreach($posts as $key => $post){ ?>
              <tr>
                <td>
                  <?php echo $key + 1; ?>
                </td>
                <td>
                  <?php echo $post['author']; ?>
                </td>
                <td>
                  <a target="_blank" href="../post.php?s=<?php $post['slug']?>"><?php echo $post['title'] ?> </a>
                </td>
                <td>
                  <?php echo $post['views']; ?>
                </td>

                <?php if ($_SESSION['user']['role'] == "Admin"){ ?>
                  <td>
                    <?php if($post['published']){ ?>
                      <a class="fa fa-check btn unpublished" href="posts.php?unpublish=<?php echo $post['id'];?>"></a>

                    <?php }else{ ?>
                      <a class="fa fa-times btn publish" href="posts.php?publish=<?php echo $post['id'];?>"></a>

                    <?php } ?>
                  </td>

              <?php } ?>
              <td>
                <a class="fa fa-pencil btn edit" href="create-post.php?edit-post=<?php echo $post['id']?>"></a>
              </td>
              <td>
                <a class="fa fa-trash btn delete" href="create-post.php?delete-post=<?php echo $post['id']?>"></a>
              </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      <?php } ?>
    </div>
  </main>
</body>
</html>
