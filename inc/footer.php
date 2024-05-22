<!--Footer -->
<?php  
$curr_date = time();
$quote_query = "SELECT * FROM quote_of_the_day ORDER BY id DESC LIMIT 1";
if(mysqli_query($con, $quote_query)){
    $quote_run = mysqli_query($con, $quote_query);
    $quote_row = mysqli_fetch_array($quote_run);
    $quote = $quote_row['your_quote']; 
}
else{
    $quote = "Oops! No Quote Available Today";
}

?>
   <br><br>
   <footer class="site-footer" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                
                <div id="box">
                    <div id="sBox">
                        <div class="icon">
                            <span class="fa fa-facebook"></span><i>Facebook</i>
                        </div>
                        <div class="icon">
                            <span class="fa fa-twitter"></span><i>Twitter</i>
                        </div>
                        <div class="icon">
                            <span class="fa fa-instagram"></span><i>Instagram</i>
                        </div>
                        <div class="icon">
                            <span class="fa fa-linkedin"></span><i>LinkedIn</i>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <ul id="navigation" style="margin-top: 60px;">
                    <li><a href="index.php"><i  style="font-size:30px;" class="fa fa-home fa-5x circle-icon"></i></a></li>
                    <li><a href="contact-us.php"><i style="font-size:30px;" class="fa fa-phone fa-5x circle-icon"></i></a></li>
                    <li><a href="about-us.php"><i style="font-size:30px;" class="fa fa-users fa-5x circle-icon"></i>
                        </a></li>
                </ul>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                 
                <div style="margin-top:40px; line-height: 2em; text-align: center; font-size:16px; color: #FFF; word-break: break-all;"><i class="fa fa-quote-left" style="color: orange;" aria-hidden="true"></i>  <i style="text-overflow: hidden;"><?php echo $quote;?></i>  <i class="fa fa-quote-right" style="color:orange;" aria-hidden="true"></i></div>
            
            </div>
        </div>
        
        <blockquote>
            <h2 style="color: #B1EBB5; margin-left: 10px;"><b>One Request?</b></h2>
            <p style="color:#fff;"><i>" We put so much effort writing this blog post to provide value to the blogging community. It’ll be very helpful for us, if you consider sharing it on social media networks. "</i>
                 <br><span style="color: orange; font-size: 50px;">#</span><b><span style="color: #B1EBB5; font-size: 20px;">SHARING IS</span></b><span style="color:red; font-size: 30px;">   ♥️   </span></p> 

        </blockquote>

        <div class="row-fluid">
            <div class="col-xs-12">
               <hr class="soften1">
                <p style="color:#fff; text-align: center;">
                    Copyright &copy;CMS Blog | All Rights Reserved from 2018 - <?php echo date('Y');?>.
                </p>
            </div>
        </div>

    </div>
</footer>
<!-- END footer -->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>
<script id="dsq-count-scr" src="//inked-vibes.disqus.com/count.js" async></script>
</body>
</html>