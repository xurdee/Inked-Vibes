<?php 
require_once('../inc/db.php');
ob_start();

$rows_query = "SELECT * FROM users";
$rows_run = mysqli_query($con, $rows_query);
$num_of_users = mysqli_num_rows($rows_run);

$cat_query = "SELECT * FROM categories";
$cat_run = mysqli_query($con, $cat_query);
$num_of_categories = mysqli_num_rows($cat_run);

$session_username =  $_SESSION['username'];
$session_role1 = $_SESSION['role']; 
if(isset($_SESSION['username']) && $_SESSION['role'] == 'admin' ){
    $posts_query = "SELECT * FROM posts";
    $posts_query_run = mysqli_query($con, $posts_query);
    $num_of_posts = mysqli_num_rows($posts_query_run);
}

if(isset($_SESSION['username']) && $_SESSION['role'] == 'author' ){
    $posts_query = "SELECT * FROM posts WHERE author = '$session_username'";
    $posts_query_run = mysqli_query($con, $posts_query);
    $num_of_posts = mysqli_num_rows($posts_query_run);
}

$query = "SELECT * FROM users WHERE username = '$session_username'";
$run = mysqli_query($con, $query);
$row = mysqli_fetch_array($run);
$session_role = $row['role'];
?>


<div class="list-group">
    <a href="index.php" class="list-group-item active">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
    </a>
    <a href="posts.php" class="list-group-item">
        <span class="badge"><?php echo $num_of_posts;?></span>
        <i class="fa fa-file-text" aria-hidden="true"></i> All Posts</a>
    <a href="media.php" class="list-group-item">
        <span class="badge"></span>
        <i class="fa fa-film" aria-hidden="true"></i>
        Media</a>
    <?php 
    if($session_role1 == 'admin'){    
    ?>
    <a href="comments.php" class="list-group-item">
        <i class="fa fa-comment"></i> Comments
    </a>
    <a href="categories.php" class="list-group-item">
        <span class="badge"><?php echo $num_of_categories;?></span>
        <i class="fa fa-folder-open" aria-hidden="true"></i> Categories</a>
    <a href="users.php" class="list-group-item">
        <span class="badge"><?php echo $num_of_users;?></span>
        <i class="fa fa-users"></i> Users</a>
        <?php  }  ?>
</div>
<hr><br>
 <span style="color:#286090; font-size: 30px;"><center><i class="fa fa-user"></i><?php echo $session_username;?></center></span>
 <span style="color:#286090; font-size: 20px;"><center><?php echo ucfirst($session_role);?></center></span><br><hr>
 




