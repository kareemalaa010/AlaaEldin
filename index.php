<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offset | Printing</title>
    <link rel="stylesheet" href="project.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
    <!-- Messenger المكون الإضافي "دردشة" Code -->
    <div id="fb-root"></div>

    <!-- Your المكون الإضافي "دردشة" code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "102495552260611");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
          FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
   <!-- start navbar -->
   <nav class="navbar">
      <div class="max-width">
           <div class="logo"><a href="#">Alaa Ald<span class="in">in</span></a></div>
           <ul class="list">
              <li><a target="blank" href="/login/login.html"> Login </a></li>
              <li><a href="/about_us/about.html"> About Us </a></li>
              <li><a href="/terms/terms.html"> Terms & Conditions </a></li>
              <li><a href="/arabic/arabic.html"> Arabic <i class="fas fa-language"></i></a></li>
            </ul>
            <div class="menu-btn">
              <i class="fas fa-bars"></i>
            </div>
      </div>
   </nav>
   <!-- end navbar -->
   <!-- start home -->
   <section class="home" id="home">
      <div class="max-width">
          <div class="overlay"></div>
         <div class="intro">
           <p class="p-1">Have you ever dreamed of becoming your organization or your brand famous and everywhere?</p>
           <a target="blank" href="/orders_pages/order.html" class="btn-intro"> Order Now! </a>
          </div>
      </div>
   </section>
   <!-- end home -->
   <!-- start about -->
     <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About Us</h2>
            <div class="about-content">
                <div class="column left">
                    <video loop muted autoplay>
                       <source src="/image/offset.mp4" type="video/mp4"/>
                    </video>
                </div>
                <div class="column right">
                   <span class="alaa"> Alaa Aldin For Offset | Printing </span>
                    <p>
                       We are Aladdin company for all kinds of offset printing, cartoons, stickers, newspapers and other types of offset printing. Our goal is to save your time and provide high quality and suitable price in a short time. Order now while you are at home!
                    </p>
                    <a href="/about_us/about.html">Read More</a>
                </div>
            </div>
        </div>
    </section>
   <!-- end about -->
   <!-- start video -->
   <div class="video">
      <video loop autoplay muted>
         <source src="/image/offset-3.mp4" type="video/mp4"/>
      </video>
      <div class="text">
          <p class="p-video">
            We offer our customers the best quality in the fastest time and the best price, and we work on a strong basis
          </p>
          <a href="/orders_pages/order.html" class="btn-video">Try now</a>
      </div>
   </div>
   <!-- end video -->
   <!-- start printing date -->
   <section class="date" id="date">
      <div class="max-width">
         <h1 class="title"> Printing Date </h1>
         <div class="date-content">
            <div class="right">
               <img src="/image/old.jfif" class="old-img"/>
            </div>
            <div class="left">
               <p class="p-date">
                 The beginning of mechanical printing was in the year 200 AD, when the Chinese began engraving prominent writing and images on wooden blocks. The Tipitaka Buddhist holy book was printed in 972 AD. 130 thousand pages in wooden templates. And printing has evolved from wooden cliches on which the text of the entire page is depicted, to a method of assembling movable type movable letters and stacking them in chassis molds. Because the Chinese alphabet has 2,000-40 thousand separate characters.This was having trouble printing the letters. That is why separate letters were not followed, and this problem faced the Koreans in the 14th century AD. They kept following the traditional method, of course, with wood molds carved in relief. In Europe, raised and moving letters were made, and in the middle of the 15th century, the printing machine appeared by the German Johann Gutenberg. To develop for modern printing in which newspapers and books are printed in millions on paper. This was the reason for the development of civilization and the spread of knowledge of the various languages ​​​​of the people of the earth.
               </p>
            </div>
         </div>
      </div>
    </section>
    <!-- end printing date -->
    <!-- start order -->
    <section class="order" id="order">
      <div class="max-width">
          <h2 class="title"> Order Now </h2>
          <div class="carousel owl-carousel">
              <div class="card">
                  <div class="box">
                      <p class="txt"> Carton</p>
                     <img src="/image/carton.jpeg" alt="">
                     <a target="blank" href="/orders_pages/order.html"> Order </a>
                  </div>
                </div>
                <div class="card">
                 <div class="box">
                    <p class="txt"> Magazine </p>
                    <img src="/image/magazine.jpeg" alt="">
                    <a target="blank" href="/orders_pages/order.html"> Order </a>
                 </div>
                 </div>

              <div class="card">
                  <div class="box">
                     <p class="txt"> Sticker</p>
                     <img src="/image/sticker.jpeg" alt="">
                     <a  target="blank" href="/orders_pages/order.html"> Order </a>
                  </div>
              </div>

              <div class="card">
                  <div class="box">
                     <p class="txt">Pamphlet</p>
                     <img src="/image/note.jpeg" alt="">
                     <a target="blank" href="/orders_pages/order.html"> Order </a>
                  </div>
              </div>

              <div class="card">
                  <div class="box">
                     <p class="txt"> Book </p>
                     <img src="/image/book.jpeg" alt=""/>
                     <a target="blank" href="/orders_pages/order.html"> Order </a>
                  </div>
              </div>

              <div class="card">
                  <div class="box">
                     <p class="txt"> Notebook</p>
                     <img src="/image/notebook.jpeg" alt="">
                     <a target="blank" href="/orders_pages/order.html"> Order </a>
                  </div>
              </div>


           <div class="card">
            <div class="box">
               <p class="txt"> Menus </p>
               <img src="/image/menu.jpeg" alt="menu">
               <a target="blank" href="/orders_pages/order.html"> Order </a>
            </div>

         </div>
      </div>
  </section>
   <!-- end order -->
   <!-- start contact us -->
   <!-- code php -->
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            //    varibels
            $user = filter_var ($_POST['username'] , FILTER_SANITIZE_STRING);
            $email = filter_var ($_POST['email'], FILTER_SANITIZE_EMAIL);
            $sub = filter_var ($_POST['subject'] , FILTER_SANITIZE_NUMBER_INT);
            $text = filter_var ($_POST['textarea'], FILTER_SANITIZE_STRING);
            //   array for errors
            $formerrors = array();
            if (strlen($user) <= 3 ) {
              $formerrors[] = "Username Must Be Larger Than <strong>3</strong> Letters";
            }
            if (strlen($text) <= 10 ) {
                $formerrors[] = "TextArea Must Be Larger Than <strong>10</strong> Letters";
            }
            // email function
            $header = "From:" . $email . '\r\n';
            $myemail = "alaatoprint@gmail.com";
            if (empty($formerrors)){
                mail( $myemail , "Contact Form" , $text , $header)
            }
        } 
    ?>
    <!-- code php -->
   <section class="contact" id="contact">
      <div class="max-width">
          <h2 class="title">Contact Us</h2>
          <div class="contact-content">
              <div class="column left">
                  <div class="text">Get in Touch</div>
                  <p>Log in now and stay in touch to get all new related to printing, prices and more! </p>
                  <div class="icons">
                      <div class="row">
                          <i class="fas fa-user"></i>
                          <div class="info">
                              <div class="head"> name of the printing press </div>
                              <div class="sub-title">Alaa Aldin</div>
                            </div>
                      </div>
                      <div class="row">
                          <i class="fas fa-map-marker-alt"></i>
                          <div class="info">
                              <div class="head">Address</div>
                              <div class="sub-title"> Egypt, Dakahlia, Talkha, Teachers Division </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">alaatoprint@gamil.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <?php if (! empty($formerrors)) { ?>
                            <div class="alert alert-danger alert-dismissible" role="start">
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true"> &times; </span>
                            </button>
                            <?php
                                foreach($formerrors as $error){
                                    echo $error . '<br/>';
                                }
                            ?>
                            </div>
                             <?php } ?>
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="username" required class="fullname" placeholder="Name">
                          </div>
                          <div class="field email">
                              <input type="email" name="email" class="email-input" placeholder="Email" required>
                          </div>
                      </div>
                      <div class="field">
                          <input type="text" name="subject" class="subject" placeholder="Subject" required>
                      </div>
                      <div class="field textarea">
                          <textarea class="message" name="textarea" required cols="30" rows="10" placeholder="Message.."></textarea>
                      </div>
                      <div class="button-area">
                          <button class="send-msg" type="submit" name="send">Send message</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </section>
   <!-- end contact us -->
   <!-- start end -->
   <section class="end">
    <div class="social">
        <p class="txt"> Contact us :<br/>
            <span class="email">alaatoprint@gamil.com</span> <br/>
            <span class="i">
               <a href="#"><i class="fab fa-facebook-square bo"></i></a>
               <a href="#"><i class="fab fa-instagram in"></i></a>
               <a href="#"><i class="fab fa-twitter-square tw"></i></a>
               <a href="#"><i class="fab fa-linkedin li"></i></a>
            </span>
        </p>

    </div>
    <div class="name">
        <div class="text"> Alaa Aldin <br/>For Offset | Printing <br/> <a target="blank" href="/login/login.html"> Login Now! </a></div>
    </div>
</section>
<!-- end end -->
<!-- start footer -->
<footer>
    <span>Created By <a href="https://www.instagram.com/kareem_aalaa/">Kareem alaa</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
 </footer>
 <!-- end footer -->




    <!-- files of js -->
    <script src="/project.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    
</body>
</html>
