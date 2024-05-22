<?php require_once('inc/top.php');?>
    </head>
    <body style="background-color: #f4f4f4; font-family: 'Oswald'; letter-spacing: 1px;">

        <!-- Navbar -->
        
          <?php require_once('inc/header.php');?>
        
        <!-- Jumbotron -->
        
           <div class="jumbotron">
            <div class="container">
                <div id="details" class="animated fadeInLeft">
                    <h1>Contact<span>Us</span></h1>
                </div>
            </div>
            <img src="img/top.jpg" alt="Top Image">
        </div>
        
        <section>
            <div class="container" style="border-radius:10px; background-color: #fff;">
                <div class="row">
                    <div class="col-md-8">
                          <div class="row div col-md-12">
                              <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBKHXzz3M5yUjdsBSaB8WDt9hsaDL2evsQ'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://add-map.com/'>alt+0160</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=d3d6264587cc54b6f06e5f1155bc72210bc5e6a4'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(41.31,-72.92000000000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.31,-72.92000000000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Dr Bc Roy Engineering College</strong><br>Jemua Road, Fuljhore<br>713214 Durgapur<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                        </div>
                        <div class="row div col-md-12 contact-form">
                           <h2>Contact Form:</h2><hr>
                            <form action=" ">
                                <div class="form-group">
                                    <label for="fullname">Full Name*:</label>
                                    <input type="text" id="full-name" class="form-control" placeholder="Full name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email*:</label>
                                    <input type="text" id="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website:</label>
                                    <input type="text" id="website" class="form-control" placeholder="Website">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Your message goes here..."></textarea>
                                </div>
                                <input type="submit" name="submit" value="Submit" class="btn-primary" style="border-radius: 3px;">
                            </form>
                          </div>

                         
                        
                    </div>
                    <div class="col-md-4">
                        <?php require_once('inc/sidebar.php');?>

                    </div>
                </div>
            </div>
   </section>

        <?php require_once('inc/footer.php');?>