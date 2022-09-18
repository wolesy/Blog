<?php
include '../include/config.php';
include 'include/admin_functions.php';
include 'include/post_functions.php';

 ?>

 <!DOCTYPE html lang="en">
 <html>
 <head>
   <title>Create a Post | Joe's Blog</title>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, inital-scale=1" />
   <meta name="viewport" content="height=device-height, inital-scale=1" />
   <meta name="author" content="Cameron Scholes" />
   <link rel="stylesheet" href="css/style.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/479b50a13e.js" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>

 </head>
 <body>
   <?php include 'include/header.php'; ?>
   <main>
     <?php include 'include/menu.php'; ?>
     <div class="action create-post-div">
       <h1 class="page-title">Create/Edit Post</h1>
       <form method="post" enctype="multipart/form-data" action="create-post.php" class="create-post-table">
         <?php include 'include/errors.php';

         if($isEditingPost){ ?>
           <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
         <?php } ?>
         <input type="text" name="title" value="<?php echo $title; ?>" placeholder="Title">
         <textarea name="body" id="body" cols="30" rows="10"><?php echo $body; ?></textarea>
         <?php if($_SESSION['user']['role'] == "Admin"){ ?>
           <label for="publish">Publish
             <input type="checkbox" value="1" name="publish" checked="checked" />&nbsp;
           </label>
         <?php }else{ ?>
           <label for="publish">Publish
             <input type="checkbox" value="1" name="publish" />&nbsp;
           </label>
         <?php } ?>
         <?php if ($isEditingPost === true): ?>
					<button type="submit" class="btn" name="update_post">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_post">Save Post</button>
				<?php endif ?>
       </form>
     </div>
   </main>
 </body>
 </html>


 <script>
	CKEDITOR.replace('body');
</script>
