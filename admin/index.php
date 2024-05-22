<?php 

require_once('inc/top.php');
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}


$category_tag_query = "SELECT * FROM categories";
$users_tag_query = "SELECT * FROM users";
$posts_tag_query = "SELECT * FROM posts";

$cat_tag_run = mysqli_query($con, $category_tag_query);
$user_tag_run = mysqli_query($con, $users_tag_query);
$post_tag_run = mysqli_query($con, $posts_tag_query);

$cat_rows = mysqli_num_rows($cat_tag_run);
$user_rows = mysqli_num_rows($user_tag_run);
$post_rows = mysqli_num_rows($post_tag_run);
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
                        <h1><i class="fa fa-tachometer"></i> Dashboard <small>Statistics Overview</small></h1><hr>
                        <ol class="breadcrumb">
                            <li class="active"><i class="fa fa-tachometer"></i> Dashboard</li>
                        </ol>

                        <div class="row tag-boxes">
                            <div class="col-md-6 col-lg-3">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-comments fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9">
                                                <div class="text-right huge">11</div>
                                                <div class="text-right">New Comments</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="comments.php">
                                        <div class="panel-footer">
                                            <span class="pull-left">View All Comments</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-file-text fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9">
                                                <div class="text-right huge"><?php echo $post_rows;?></div>
                                                <div class="text-right">All Posts</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="posts.php">
                                        <div class="panel-footer">
                                            <span class="pull-left">View All Posts</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-users fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9">
                                                <div class="text-right huge"><?php echo $user_rows;?></div>
                                                <div class="text-right">All Users</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="users.php">
                                        <div class="panel-footer">
                                            <span class="pull-left">View All Users</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-folder-open fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9">
                                                <div class="text-right huge"><?php echo $cat_rows;?></div>
                                                <div class="text-right">All Categories</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="categories.php">
                                        <div class="panel-footer">
                                            <span class="pull-left">View All Categories</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div><hr>

                        <?php
                    $get_users_query = "SELECT * FROM users ORDER BY id DESC LIMIT 5";
                    $get_users_run = mysqli_query($con,$get_users_query);
                    if(mysqli_num_rows($get_users_run) > 0){
                        
                    
                    ?>
                    <h3>New Users</h3>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Sr #</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php 
                            while($get_users_row = mysqli_fetch_array($get_users_run)){
                                $users_id = $get_users_row['id'];
                                $users_date = getdate($get_users_row['date']);
                                $users_day = $users_date['mday'];
                                $users_month = substr($users_date['month'],0,3);
                                $users_year = $users_date['year'];
                                $users_firstname = $get_users_row['first_name'];
                                $users_lastname = $get_users_row['last_name'];
                                $users_fullname = "$users_firstname $users_lastname";
                                $users_username = $get_users_row['username'];
                                $users_role = $get_users_row['role'];
                            
                            ?>
                            <tr>
                                <td><?php echo $users_id;?></td>
                                <td><?php echo "$users_day $users_month $users_year";?></td>
                                <td><?php echo $users_fullname;?></td>
                                <td><?php echo ucfirst($users_username);?></td>
                                <td><?php echo ucfirst($users_role);?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <a href="users.php" class="btn btn-primary">View All Users</a><hr>
                    <?php }?>
                    
                    <?php
                    $get_posts_query = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
                    $get_posts_run = mysqli_query($con,$get_posts_query);
                    if(mysqli_num_rows($get_posts_run) > 0){
                        
                    
                    ?>
                    <h3>New Posts</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sr #</th>
                                <th>Date</th>
                                <th>Post Title</th>
                                <th>Category</th>
                                <th>Views</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php 
                            while($get_posts_row = mysqli_fetch_array($get_posts_run)){
                                $posts_id = $get_posts_row['id'];
                                $posts_date = getdate($get_posts_row['date']);
                                $posts_day = $posts_date['mday'];
                                $posts_month = substr($posts_date['month'],0,3);
                                $posts_year = $posts_date['year'];
                                $posts_title = $get_posts_row['title'];
                                $posts_categories = $get_posts_row['categories'];
                                $posts_views = $get_posts_row['views'];
                            
                            ?>
                            <tr>
                                <td><?php echo $posts_id;?></td>
                                <td><?php echo "$posts_day $posts_month $posts_year";?></td>
                                <td><?php echo $posts_title;?></td>
                                <td><?php echo ucfirst($posts_categories);?></td>
                                <td><i class="fa fa-eye"></i> <?php echo $posts_views;?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <a href="posts.php" class="btn btn-primary">View All Posts</a>
                    <?php }?>

                        <?php  
                        if(isset($_SESSION['username']) && $_SESSION['username'] == 'adityavogue'){
                            if(isset($_POST['upload'])){
                                $date = time();
                                $quote_data = mysqli_real_escape_string($con, $_POST['quote']);
                                if(empty($quote_data)){
                                    $error = "This Field Is Mandatory";
                                }
                                else{
                                    $insert_query = "INSERT into quote_of_the_day (date,your_quote)  VALUES('$date','$quote_data')";
                                    if(mysqli_query($con, $insert_query)){
                                        $msg = "Quote Has Been Uploaded";
                                    }
                                    else{
                                        $error = "Quote Could Not Be Uploaded";
                                    }

                                }
                            }

                            //    $quote_check_query = "SELECT * FROM categories WHERE id = $edit_id";
                            //    $edit_check_run = mysqli_query($con, $edit_check_query);
                            //    if(mysqli_num_rows($edit_check_run) > 0){
                            //
                            //        $edit_row = mysqli_fetch_array($edit_check_run);
                            //        $up_category = $edit_row['category'];

                        ?>
                        <hr>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="quote">What's Today's Quote??</label>
                                <?php 
                            if(isset($msg)){
                                echo "<span class='pull-right' style='color:green;'>$msg</span>";
                            }
                            else if(isset($error)){
                                echo "<span class='pull-right' style='color:red;'>$error</span>";
                            }
                                ?>
                                <textarea name="quote" id="quote" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <input type="submit" value="Publish Quote" name="upload" class="btn btn-primary">
                        </form>
                        <?php     
                        }
                        ?>

                    
                    
                    </div>
                </div>
            </div>

          <?php require_once('inc/footer.php');?>