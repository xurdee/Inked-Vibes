<?php require_once('inc/top.php');?>
<style>
    
    #details img{
        width: 100px;
        margin-left: -80px;
        margin-bottom: -80px;
    }
    #post-data{
        font-family: 'Noto Sans', sans-serif; 
        font-size: 11pt; 
        line-height: 1.8em;
    }
       
    @media (max-width:786px){
            #details img{
                width: 80px;
                margin-left: 75px;
                margin-top: -85px;  
            }
        #details h1{
            font-size: 50px;
            margin-left: 15px;
        }
        #post-data{
        font-family: 'Noto Sans', sans-serif; 
        font-size: 10pt; 
        line-height: 1.8em;
    }
        
    }   
    
    @media (max-width:258px){
        #details img{
                width: 80px;
                margin-left: 60px;
                margin-top: -85px;  
            }
    #details h1{
            font-size: 50px;
            margin-left: 10px;
        } 
    }
    
    </style>
</head>
<body style="font-family: 'Zilla Slab', serif; letter-spacing: 1px; color: #313135;">
<a name="top-anchor"></a>
    <!-- Navbar -->

    <?php require_once('inc/header.php');?>

    <!-- Jumbotron -->

    <?php 
    if(isset($_GET['post_id'])){
        $post_id = $_GET['post_id'];
        $views_query = "UPDATE `posts` SET `views` = views + 1  WHERE `posts`.`id` = $post_id";
        mysqli_query($con, $views_query);
        $query = "SELECT * FROM posts WHERE status = 'publish' and id = $post_id";
        $run = mysqli_query($con, $query);
        if(mysqli_num_rows($run) > 0){
            $row = mysqli_fetch_array($run);
            $id = $row['id'];
            $date = getdate($row['date']);
            $day = $date['mday'];
            $month = $date['month'];
            $year = $date['year'];
            $title = $row['title'];
            $image = $row['image'];
            $author_image = $row['author_image'];
            $author = $row['author'];
            $categories = $row['categories'];
            $post_data = $row['post_data'];
            $tags = $row['tags'];
        }
        else{
            header('Location: index.php');
        }
    }
    ?>

    <div class="jumbotron">
        <div class="container">
            <div id="details" class="animated fadeInLeft">
               <img src="icon/logo.png" alt="">
                <h1 style="font-family: 'Fredericka the Great';">Inked<span style="font-family: 'Fredericka the Great', serif; font-weight: 600;">  Vibes</span></h1>
            </div>
        </div>
        <img src="img/top.jpg" alt="Top Image">
    </div>


    <section>
        <div class="container"  style="background-color: #61C168; border-radius: 20px;">
            <div class="row">
                <div class="col-md-8">
                    <div class="post">
                        <div class="row">
                            <div class="col-md-2 post-date">
                                <div class="day"><?php echo $day;?></div>
                                <div class="month"><?php echo $month;?></div>
                                <div class="year"><?php echo $year;?></div>
                            </div>
                            <div class="col-md-8 post-title">
                                <a href="post.php?post_id=<?php echo $id;?>" style="text-decoration: none;"><h2><?php echo $title;?></h2></a>    
                                <p>Written by: <span><?php echo ucfirst($author);?></span></p>
                            </div>
                            <div class="col-md-2 profile-picture">
                                <img src="admin/img/<?php echo $author_image;?>" alt="Person 1" class="img-circle"> 
                            </div>
                        </div>

                        <a href="img/<?php echo $image;?>"><img src="img/<?php echo $image;?>" alt="Post Image"></a>
                        <div class="desc" id="post-data">
                            <?php echo $post_data;?>
                        </div>

                        <div class="bottom">
                            <span class="first"><i class="fa fa-folder"></i><?php echo ucfirst($categories);?></a></span>|
                            <span class="second"><i class="fa fa-comment"></i><a href="post.php?post_id=<?php echo $id;?>#disqus_thread"></a></span>  
                        </div>
                    </div>

                   <!--    Displaying Related Posts   -->
                    <div class="related-posts">
                        <h3>Related Posts</h3><hr>
                        <div class="row">
                            <?php 
                            $r_query = "SELECT * FROM posts WHERE status = 'publish'";
                            $r_query.= "and categories LIKE '%$categories%'";
                            $r_query.= "and id != $id";
                            
                            
                            if(mysqli_query($con, $r_query)){
                                $r_run = mysqli_query($con, $r_query);
                                if(mysqli_num_rows($r_run) > 0){  
                                    while($r_row = mysqli_fetch_array($r_run)){
                                        $r_id = $r_row['id'];
                                        $r_title = $r_row['title'];
                                        $r_image = $r_row['image'];
                            ?>
                            <div class="col-sm-4">
                                <a href="post.php?post_id=<?php echo $r_id?>" style="text-decoration: none;">
                                    <img src="img/<?php echo $r_image;?>" alt="Image 1">
                                    <h4><?php echo $r_title;?></h4>
                                </a>
                            </div>
                            <?php 
                                    }
                                }
                                else{
                                    echo "<center><h3>No Related Posts Available</h3></center>";
                                }

                            }
                            else{
                                echo "<center><h3>Something Went Wrong</h3></center>";
                            }
                            ?>
                        </div>
                    </div>
                    
<!--   Author Bio  Area   -->
                       <div class="author">
                        <h3 style="color: #286090;">The Author</h3><hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="admin/img/<?php echo $author_image;?>" alt="Profile Image" class="img-circle">
                            </div>
                            <div class="col-sm-9">
                                <h4><?php echo ucfirst($author);?></h4>
                                <?php 
                                $bio_query = "SELECT * FROM users WHERE username = '$author'";
                                $bio_run = mysqli_query($con, $bio_query);
                                if(mysqli_num_rows($bio_run) > 0){
                                    $bio_row = mysqli_fetch_array($bio_run);
                                    $author_bio = $bio_row['details'];
                                ?>
                                <p><?php echo $author_bio;?></p>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    
  
                  
<!--   Comment  Box  -->
                           <div class="comment-box" style="padding-top: 60px;">
                               <div class="row">
                                   <div class="col-xs-12">
                                       <div id='disqus_thread'></div>
                                       <script type='text/javascript'>
                                           /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                                           var disqus_shortname = 'inked-vibes'; // required: replace example with your forum shortname
                                           (function() {
                                               var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                               dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                               (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                           })();
                                       </script>
                                   </div>
                               </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <?php require_once('inc/sidebar.php');?>
                </div>
                
<!--  Anchor  -->
                <div id="anchor"><a href="#top-anchor"><i class="fa fa-anchor fa-5x circle-icon" style="font-size: 30px; color: #fff;" aria-hidden="true"></i></a></div>
            
            
            </div>
        </div>
    </section>

       <?php require_once('inc/footer.php');?>