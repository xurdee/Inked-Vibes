<?php require_once('inc/top.php');?>
<?php
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
else if(isset($_SESSION['username']) && $_SESSION['role'] == 'author'){
    header('Location: index.php'); 
}

if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    $del_check_query = "SELECT * FROM comments WHERE id = $del_id";
    $del_check_run = mysqli_query($con, $del_check_query);
    if(mysqli_num_rows($del_check_run) > 0){
        if(isset($_SESSION['username']) && $_SESSION['role'] == 'admin'){
            $del_query = "DELETE FROM `comments` WHERE `comments`.`id` = $del_id";
            if(mysqli_query($con,$del_query)){
                $msg = "Comment has been successfully deleted";
            }
            else{
                $error = "Comment has not been deleted";
            }
        }
    }
    else{
        header('Location: index.php');
    }
}


if(isset($_GET['approve'])){
    $approve_id = $_GET['approve'];
    $approve_check_query = "SELECT * FROM comments WHERE id = $approve_id";
    $approve_check_run = mysqli_query($con, $approve_check_query);
    if(mysqli_num_rows($approve_check_run) > 0){
        if(isset($_SESSION['username']) && $_SESSION['role'] == 'admin'){
            $approve_query = "UPDATE `comments` SET `status` = 'approve' WHERE `comments`.`id` = $approve_id";
            if(mysqli_query($con, $approve_query)){
                $msg = "Comment has been approved";
            }
            else{
                $error = "Comment has not been approved";
            }
        }
    }
    else{
        header('Location: index.php');
    }
}

if(isset($_GET['unapprove'])){
    $unapprove_id = $_GET['unapprove'];
    $unapprove_check_query = "SELECT * FROM comments WHERE id = $unapprove_id";
    $unapprove_check_run = mysqli_query($con, $unapprove_check_query);
    if(mysqli_num_rows($unapprove_check_run) > 0){
        if(isset($_SESSION['username']) && $_SESSION['role'] == 'admin'){
            $unapprove_query = "UPDATE `comments` SET `status` = 'pending' WHERE `comments`.`id` = $unapprove_id";
            if(mysqli_query($con, $unapprove_query)){
                $msg = "Comment has been unapproved";
            }
            else{
                $error = "Comment has not been unapproved";
            }
        }
    }
    else{
        header('Location: index.php');
    }
}

if(isset($_POST['checkboxes'])){

    foreach($_POST['checkboxes'] as $user_id){
        $bulk_option = $_POST['bulk-options'];
        if($bulk_option == 'delete'){
            $bulk_del_query = "DELETE FROM `comments` WHERE `comments`.`id` = $user_id";
            if(mysqli_query($con, $bulk_del_query)){
                $msg = "Comments have been deleted";
            }
            else{
                $error = "Something Went Wrong!!";
            }
        }
        else if($bulk_option == 'approve'){
            $bulk_author_query = "UPDATE `comments` SET `status` = 'approve' WHERE `comments`.`id` = $user_id";
            if(mysqli_query($con, $bulk_author_query)){
                $msg = "Comments Approved";
            }
            else{
                $error = "Something Went Wrong!!";
            }
        }
        else if($bulk_option == 'pending'){
            $bulk_admin_query = "UPDATE `comments` SET `status` = 'pending' WHERE `comments`.`id` = $user_id";
            if(mysqli_query($con, $bulk_admin_query)){
                $msg = "Comments have been unapproved";
            }
            else{
                $error = "Something Went Wrong!!";
            }
        }
    }
}
?>
</head>
<body>
    <div id="wrapper">
        <?php require_once('inc/header.php');?>

        <div class="container-fluid body-section">
            <div class="row">
                <div class="col-md-3">
                    <?php require_once('inc/sidebar.php');?>
                </div>
                <div class="col-md-9">
                    <h1><i class="fa fa-comments"></i> Comments <small>View All Comments</small></h1><hr>
                    <ol class="breadcrumb">
                        <li><a href="index.html"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                        <li class="active"><i class="fa fa-comments"></i> Comments</li>
                    </ol>
                    <?php
                    if(isset($_GET['reply'])){
                        $reply_id = $_GET['reply'];
                        $reply_check = "SELECT * FROM comments WHERE post_id = $reply_id";
                        $reply_check_run = mysqli_query($con, $reply_check);
                        if(mysqli_num_rows($reply_check_run) > 0){
                            if(isset($_POST['reply'])){
                                $comment_data = $_POST['comment'];
                                if(empty($comment_data)){
                                    $comment_error = "Must Fill This Field";
                                }
                                else{
                                    $get_user_data = "SELECT * FROM users WHERE username = '$session_username'";
                                    $get_user_run = mysqli_query($con, $get_user_data);
                                    $get_user_row = mysqli_fetch_array($get_user_run);
                                    $date = time();
                                    $first_name = $get_user_row['first_name'];
                                    $last_name = $get_user_row['last_name'];
                                    $full_name = "$first_name $last_name";
                                    $email = $get_user_row['email'];
                                    $image = $get_user_row['image'];
                                    
                                    $insert_comment_query = "INSERT INTO comments (date,name,username,post_id,email,image,comment,status) VALUES ('$date','$full_name','$session_username','$reply_id','$email','$image','$comment_data','approve')";
                                    
                                    if(mysqli_query($con, $insert_comment_query)){
                                        $comment_msg = "Your Comment Has Been Recorded";
                                        
                                        header('Location: comments.php');
                                    }
                                    else{
                                        $comment_error = "Comment Has Not Been Submitted";
                                    }
                                }
                            }
                            
                            
                    ?>
                    <div class="row">
                        <div class="com-xs-12 col-sm-8 col-md-6 col-lg-6">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="comment">Comment:*</label>
                                    <?php 
                                    if(isset($comment_msg)){
                                        echo "<span class='pull-right' style='color:green;'>$comment_msg</span>";
                                    }
                            else if(isset($comment_error)){
                                        echo "<span class='pull-right' style='color:red;'>$comment_error</span>";
                                    }
                                    ?>
                                    <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Your Comment Goes Here...." class="form-control"></textarea>
                                </div>
                                <input type="submit" name="reply" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                    <hr>

                    <?php
                                    
                        }
                    }
                    $query = "SELECT * FROM comments ORDER BY id DESC";
                    $run = mysqli_query($con, $query);
                    if(mysqli_num_rows($run) > 0){
                    ?>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <select name="bulk-options" id="" class="form-control">
                                                <option value="delete">Delete</option>
                                                <option value="approve">Approve</option>
                                                <option value="pending">Unapprove</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-8">
                                        <input type="submit" class="btn btn-success" value="Apply">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php 
                        if(isset($error)){
                            echo "<span style='color:red;' class='pull-right'>$error</span>";
                        }
                        else if(isset($msg)){
                            echo "<span style='color:green;' class='pull-right'>$msg</span>";
                        }


                        ?>
                        <table class="table table-bordered table-hover table-striped" style="margin-top: 30px;">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="selectallboxes"></th>
                                    <th>Date Added</th>
                                    <th>Name</th>
                                    <th>Post Title</th>
                                    <th>Post Author</th>
                                    <th>Comment</th>
                                    <th>Status</th>
                                    <th>Approve</th>
                                    <th>Unapprove</th>
                                    <th>Reply</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                        while($row = mysqli_fetch_array($run)){
                            $id = $row['id'];
                            $email = $row['email'];
                            $name = $row['name'];
                            $username = $row['username'];
                            $status = $row['status'];
                            $image = $row['image'];
                            $comment = $row['comment'];
                            $post_id = $row['post_id'];
                            $date = getdate($row['date']);
                            $day = $date['mday'];
                            $month = substr($date['month'],0,3);
                            $year = $date['year'];
                            
                            $posts_title_query = "SELECT * FROM posts WHERE id = $post_id";
                            $posts_title_query_run = mysqli_query($con, $posts_title_query);
                            $posts_row = mysqli_fetch_array($posts_title_query_run);
                            $post_title = $posts_row['title'];
                            $post_author = $posts_row['author'];
                                ?>
                                <tr>
                                    <td><input type="checkbox" class="checkboxes" name="checkboxes[]" value="<?php echo $id;?>"></td>
                                    <td><?php echo "$day $month $year";?></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $post_title;?></td>
                                    <td><?php echo $post_author;?></td>
                                    <td><?php echo $comment;?></td>
                                    <td><span style="color:<?php
                            if($status == 'approve'){
                                echo 'green';
                            }
                            else if($status == 'pending'){
                                echo 'red';
                            }
                                        ?>;"><?php echo ucfirst($status);?></span></td>
                                    <td><a href="comments.php?approve=<?php echo $id;?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                        </a></td>
                                    <td><a href="comments.php?unapprove=<?php echo $id;?>"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                        </a></td>
                                    <td><a href="comments.php?reply=<?php echo $post_id;?>"><i class="fa fa-reply" aria-hidden="true"></i>
                                        </a></td>
                                    <td><a href="comments.php?del=<?php echo $id;?>"><i class="fa fa-times"></i></a></td>
                                </tr>
                                <?php  }  ?>
                            </tbody>
                        </table>
                        <?php  
                    }
                    else{
                        echo "<center><h2>No Comments Available Now</h2></center>";
                    }
                        ?>
                    </form>
                </div>
            </div>
        </div>

           <?php require_once('inc/footer.php');?>