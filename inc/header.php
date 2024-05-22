 <style>
     div.social ul{
         margin-left: -120px;
     }
     
     div.social ul li{
         list-style: none;
         float: left;
         margin-left: 35px;
     }
     
     div.social ul li a{
         text-decoration: none;
         color: #808080;
         font-size: 18px;
     }
     
div.social ul li a:hover{
     color: #fff;
     }
     
     @media (max-width:992px){
         div.social ul{
         margin-left: -50px;
     }
     }
        
    @media (max-width:786px){
         div.social ul{
         margin-left: -40px;
     }
         }
        
        
    @media (max-width:240px){
        
        div.social ul{
            margin-left: -60px;
        }
        div.social ul li a{
         text-decoration: none;
         color: #808080;
         font-size: 15px;
     }
     }
        
        @media (max-width:246px){
         
         div.social ul{
            margin-left: -65px;
        }
        div.social ul li a{
         text-decoration: none;
         color: #808080;
         font-size: 15px;
     }
     }
     
     @media (max-width:248px){
         div.social ul{
            margin-left: -50px;
        }
         div.social ul li a{
         text-decoration: none;
         color: #808080;
         font-size: 14px;
     }
         
     }
     
     .popula{
    background: url("../img/481510.jpg");
    padding: 20px;
    border-radius: 10px;
    border: 1px solid #E3E3E3;
}
        
</style>
           
           
           <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="social">
                        <ul>
                            <li><a href="" id="social"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="" id="social"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="" id="social"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="" id="social"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                       
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><i class="fa fa-home" style="color: #fff; font-size: 20px;"></i> Home</a></li>

<!--
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file-text"  style="color: #fff; font-size: 20px;"></i> Pages<span class="caret"></span></a>
                            
                        </li>
-->


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list" style="color: #fff; font-size: 20px;"></i> Categories<span class="caret"></span></a>
                            <ul class="dropdown-menu"> 
<!--  Fetching categories -->
                               <?php 
                                $query = "SELECT * FROM categories ORDER BY id DESC";
                                $run = mysqli_query($con, $query);
                                if(mysqli_num_rows($run) > 0){
                                    while($row = mysqli_fetch_array($run)){
                                        $category = ucfirst($row['category']);
                                        $id = $row['id'];
                                        echo "<li><a href='index.php?cat=".$id."'>$category</a></li>";
                                    }
                                }
                                else{
                                    echo "<li><a href='#'>No Categories Yet</a></li>";
                                }
                                ?> 
                                
                            </ul>
                        </li>

                        <li><a href="contact-us.php"><i class="fa fa-phone" style="color: #fff; font-size: 20px;"></i> Contact Us</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        