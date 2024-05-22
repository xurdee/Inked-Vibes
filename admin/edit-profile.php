<?php require_once('inc/top.php');
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}


$session_username = $_SESSION['username'];

if(isset($_GET['edit'])){
    $edit_id = $_GET['edit'];
    $edit_query = "SELECT * FROM users WHERE id = $edit_id";
    $edit_query_run = mysqli_query($con, $edit_query);
    if(mysqli_num_rows($edit_query_run) > 0){
        $edit_row = mysqli_fetch_array($edit_query_run);
        $e_username = $edit_row['username'];
       if($e_username == $session_username){
           $e_first_name = $edit_row['first_name'];
           $e_last_name = $edit_row['last_name'];
           $e_image = $edit_row['image'];
           $e_email = $edit_row['email'];
           $e_password = $edit_row['password'];
           $e_details = $edit_row['details'];
           $salt = $edit_row['salt'];
       }
        else{
            header('Location: index.php');
        }
    }
    else{
        header('Location: index.php');
    }
    
}
else{
    header('Location: index.php');
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
                        <h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit Profile <small>Edit Profile Details</small></h1><hr>
                        <ol class="breadcrumb">
                            <li><a href="index.html"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                            <li class="active"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</li>
                        </ol>
                        <?php 
                        if(isset($_POST['submit'])){
                            
                            $first_name = mysqli_real_escape_string($con,$_POST['first-name']);
                            $last_name = mysqli_real_escape_string($con,$_POST['last-name']);
                            $email = mysqli_real_escape_string($con,strtolower($_POST['email']));
                            $username = mysqli_real_escape_string($con,strtolower($_POST['username']));
                            $password = mysqli_real_escape_string($con,$_POST['password']);
                            $crypted_password = crypt($password, $salt);
                            $image = $_FILES['image']['name'];
                            $image_tmp = $_FILES['image']['tmp_name'];
                            $details = mysqli_real_escape_string($con,$_POST['details']);
                            
                            if(empty($image)){
                                $image = $e_image;
                            }
                            
                            
                            if(empty($first_name) or empty($last_name) or empty($email) or empty($username) or empty($details)){
                                $error = "ALL * fields are Required";
                            }
                            
                            else{
                                
                              $update_query =  "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name', `email` = '$email',`username` = '$username',`password` = '$crypted_password',`image` = '$image', `details` = '$details' WHERE `users`.`id` = $edit_id";
                                
                                
                                if(mysqli_query($con,$update_query)){
                                    $msg = "Details have been successfully updated";
                                    move_uploaded_file($image_tmp, "img/$image");
                                    $image_check = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
                                    $image_run = mysqli_query($con,$image_check);
                                    $image_row = mysqli_fetch_array($image_run);
                                    $check_image = $image_row['image'];
                                    
                                    $first_name = "";
                                    $last_name = "";
                                    $email = "";
                                    $username= "";
                                    $password= "";
                                    $details= "";
                                    header("refresh: 2; url=edit-profile.php?edit=$edit_id");
                                }
                                
                                else{
                                    $error = "Details could not be updated";
                                }
                            }
                        }
                        ?>
                       <div class="row">
                           <div class="col-md-8">
                                <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="first-name">First Name:*</label>
                                <?php  
                                if(isset($error)){
                                    echo "<span class='pull-right' style='color:red;'>$error</span>";
                                }
                                else if(isset($msg)){
                                    echo "<span class='pull-right' style='color:green;'>$msg</span>";
                                }
                                
                                ?>
                                <input type="text" id="first-name" name="first-name" class="form-control" value="<?php echo $e_first_name;?>" placeholder="First Name">
                            </div>
                            
                            <div class="form-group">
                                <label for="last-name">Last Name:*</label>
                                <input type="text" id="last-name" name="last-name" class="form-control" value="<?php echo $e_last_name;?>" placeholder="Last Name">
                            </div>
                            
                           
                            
                            <div class="form-group">
                                <label for="email">Email:*</label>
                                <input type="email" id="email" name="email" class="form-control"  value="<?php echo $e_email;?>"  placeholder="Email Address">
                            </div>
                             <div class="form-group">
                                <label for="email">Username:*</label>
                                <input type="text" id="username" name="username" class="form-control"  value="<?php echo $e_username;?>"  placeholder="Username">
                            </div>
                             <div class="form-group">
                                <label for="email">Password:*</label>
                                <input type="text" id="password" name="password" class="form-control" placeholder="Your New Password...">
                            </div>
                            <div class="form-group">
                                <label for="image">Profile Picture:*</label>
                                <input type="file" id="image" name="image">
                            </div>
                             <div class="form-group">
                                <label for="details">Details:*</label>
                                <textarea name="details" id="details" cols="30" rows="10" class="form-control"><?php echo $e_details;?></textarea>
                            </div>
                            
                            
            
                            <input type="submit" value="Save Changes" name="submit" class="btn btn-primary"><br><br>
                        </form>
                           </div>
                           <div class="col-md-4">
                               <?php 
                    
                                   echo "<img src='img/$e_image' width='100%'>";
                               
                               ?>
                               
                           </div>
                       </div> 
                    </div>
                </div>
            </div>

           <?php require_once('inc/footer.php');?>