
<!doctype html>
<html lang="en">
<?php include_once("includes/head.php") ?>
<body>




 <?php include_once("includes/header.php") ?>



<section class="banner inner-banner inner-banner1">
   <div class="container" data-aos="fade-up" data-aos-duration="1000">
      <div class="row align-items-center">
         <div class="col-md-7" data-aos="fade-left" data-aos-duration="1200">
            <h1 class="text-white"> Our <span class="d-content primary-color">Portfilio</span></h1>
            <!--<p class="text-white py-3">-->
            <!--   We appreciate feedback from readers and visitors at any time. Please use the contact information-->
            <!--   below to get in touch with us if you have any queries, comments, or worries. Our goal is to-->
            <!--   answer to every query. Please provide as much detail as possible in your message to help us-->
            <!--   understand your inquiry and respond more effectively. We value your privacy, and your-->
            <!--   information will not be shared with any third-party.-->
            <!--</p>-->
            <div class="trust">
               <div class="new_frm">
                  <form action="/leads/"  method="POST" class="form-get-quote">
                    <div class="grp only_brdr">
                      <input type="text" name="name" required placeholder="Full Name">
                    </div>
                    <div class="grp">
                      <input type="email" required name="email" placeholder="Email Address">
                    </div>
                    <div class="grp">
                      <input type="number" required name="phone" placeholder="Phone Number">
                    </div>
                    <div class="grp">
                      <button type="submit">Submit</button>
                    </div>
                  <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brand" value="AMAZONKDPEXPERT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (amazonkdpexpert.com)"></form>
                    </div>               <a href="javascript:;" target="_blank">
               <img class="pb-4" src="assets/images/trust.png"
                  alt="amazon kdp expert">
               </a>
               <a href="javascript:;" onclick="setButtonURL();" class="btn btn-yellow">Start Project <i
                  class="fal fa-long-arrow-right font-size-xl"></i></a>
               <a class="btn btn-black" href="tel:+17275135653"><i class="fas fa-phone-alt"></i> &nbsp; Call
               Now</a>
            </div>
         </div>
         <div class="col-md-5" data-aos="fade-right" data-aos-duration="1200">
<!--             <div class="get-started-form">
               <form action="" method="post" class="validate-popupform">
                  <h3 class="text-white">Let's Get <span class="primary-color">Started</span></h3>
                  <input type="text" class="required input-control form-control" name="full_name" required id="name"
                     placeholder="Full Name" />
                  <input type="email" class="required input-control form-control email" required name="email"
                     placeholder="Email Address">
                  <input type="tel" class="required input-control form-control" required name="telephone"
                     placeholder="Phone Number">
                  <textarea class="required input-control form-control" autocomplete="nope" name="comments" required
                     placeholder="Share your idea"></textarea>
                  <label class="chota_fnt"><input type="checkbox" name="bn_emailPromotional" required="" checked>
                  Please CHECK THE BOX to COMMUNICATE VIA SMS OR EMAIL (
                  <a href="privacy-policy">PRIVACY POLICY </a>
                  & <a href="terms-and-conditions">TERM & CONDITIONS</a> )
                  - Carrier charges may apply for SMS. Reply STOP or UNSUBSCRIBE to STOP to unsbscribe anytime.
                  </label>
                  <div class="py-3">
                     <input type="submit" id="register" class="btn btn-yellow" name="send_data" value="Send Message"> <br />
                  </div>
               <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brand" value="AMAZONKDPEXPERT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (amazonkdpexpert.com)"></form>
            </div> -->
         </div>
      </div>
   </div>

</section>
<!-- Counter Start -->
<!-- Counter Start -->


<!-- Portfolio Start -->
<section class="porfilio-slider px-md-5 mx-md-5 text-center" id="portfolio">
  <div class="container-fluid" data-aos="fade-up" data-aos-duration="1000">
    <h2>Check out <span class="primary-color">our portfolio</span> </h2>
    <p class="py-4 pb-md-5 px-md-5"> We have successfully completed many projects of varying scope and magnitudes. Our clients range from working professionals, and industry experts to <span class="d-block"> small and large scale corporations. Below are a few books
                that we have written and published for our clients:</span> </p>
    <div class="row">
      <div class="col-md-12" data-aos="zoom-in-up" data-aos-duration="1100">
        <div class="port-slider-one owl-carousel owl-theme pb-3">
          <div class="item">
            <a href="" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/01.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/02.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/03.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/04.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/05.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/06.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/07.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/08.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/09.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/10.webp" alt="Book Slider"> 
            </a>
          </div>
        </div>
        <!-- <div class="port-slider-two owl-carousel owl-theme">
          <div class="item">
            <a href="https://www.amazon.com/KINT-Escape-Horseshoe-Craig-Underwood-ebook/dp/B0CH3X9RTY/ref=sr_1_1?crid=1D3Q9JT16Y2GW&keywords=Craig+underwood&qid=1697814593&sprefix=craig+underwo%2Caps%2C382&sr=8-1" target="_blank"> <img src="assets/images/sl11.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.co.uk/MixTape-Christopher-Spence-ebook/dp/B0CKGG31WT/ref=sr_1_5?crid=3GNB0KMMM3IWJ&keywords=The+MixTape&qid=1697634726&s=digital-text&sprefix=the+mix%2Cdigital-text%2C335&sr=1-5" target="_blank"> <img src="assets/images/sl12.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.com/Angel-Mirror-Traumatic-Medicine-Spirituality/dp/1916540244" target="_blank"> <img src="assets/images/sl13.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.co.uk/Paris-Durand-Franco-American-Story-ebook/dp/B0C8RL5ZFF/ref=sr_1_1?crid=1A4Q87ST19W6E&keywords=Alain+De+Mars&qid=1697815137&s=digital-text&sprefix=alain+de+mars+%2Cdigital-text%2C193&sr=1-1" target="_blank"> <img src="assets/images/sl14.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.co.uk/Steel-Pot-Vietnam-Curt-Stocker-ebook/dp/B0CJ89QJF8/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=1697815191&sr=1-1-catcorr" target="_blank"> <img src="assets/images/sl15.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.com/Silver-Star-Adventures-Shiny-Chronicles/dp/1088247652/ref=sr_1_1?crid=1VPEJSORCBDM5&keywords=The+Silver+Star+by+bev+everly&qid=1697815442&s=books&sprefix=the+silver+star+by+bev+everl%2Cstripbooks-intl-ship%2C265&sr=1-1" target="_blank"> <img src="assets/images/sl16.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.com/Suseia-Camino-Tomas-Jose-Firme/dp/1916787460/ref=sr_1_3?crid=17L12S306JKS6&keywords=Suseia&qid=1697815317&s=books&sprefix=susi%2Cstripbooks-intl-ship%2C485&sr=1-3" target="_blank"> <img src="assets/images/sl17.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.com/Open-Window-Book-Poetry/dp/1916787126/ref=sr_1_4?crid=2JJS3J1NI7H9E&keywords=An+open+window&qid=1697815331&s=books&sprefix=an+open+windo%2Cstripbooks-intl-ship%2C298&sr=1-4" target="_blank"> <img src="assets/images/sl18.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.com/Sea-Foam-Story-Invention-Evolved-ebook/dp/B0C8BRMQ2Y/ref=sr_1_1?crid=22LOLFNK4BGXK&keywords=amy+buck&qid=1697815350&s=books&sprefix=an+open+window%2Cstripbooks-intl-ship%2C551&sr=1-1" target="_blank"> <img src="assets/images/sl19.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.com/Operation-Sunflower-Michael-Antonowicz/dp/1916707440/ref=sr_1_1?crid=FKUQO2W8RREM&keywords=Operation+Sunflower+by+michael&qid=1697815700&s=books&sprefix=operation+sunflower+by+michae%2Cstripbooks-intl-ship%2C279&sr=1-1" target="_blank"> <img src="assets/images/sl20.jpg" alt="Book Slider"> </a>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</section>



<section class="signup">
  <div class="container" data-aos="fade-down" data-aos-duration="1200">
    
        <div class="row">
        <div class="col-md-5">
          <div class="btm_frm">
            <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/p-1.png"> 
          </div>
        </div>    
    <div class="col-md-7">
      <h2>Interested in collaboration?</h2>
    <p class="pt-2 pb-4">Get Your Book Written and Published in Less Than A Month! <span class="d-block">
                Call Us at <a href="tel:+17275135653"> +1 (727) 513-5653</a>
            </span> </p>
      <form class="validate-letsget form-get-quote" action="/leads/" method="POST">
        <input type="text" class="required input-control form-control" name="name" required id="name" placeholder="Full Name" />
        <input type="email" class="required input-control form-control email" required name="email" placeholder="Email Address">
        <input type="number" class="required input-control form-control" required name="phone" placeholder="Phone Number">
        <select name="quote[service]" id="ser-select" class="required input-control form-control" required>
          <option selected>Book type?</option>
          <option value="Digital Book Publishing">Digital Book Publishing</option>
          <option value="Book Marketing Service">Book Marketing Service</option>
          <option value="Ghostwriting Service">Ghostwriting Service</option>
          <option value="Fiction Writing Service">Fiction Writing Service</option>
          <option value="Children’s Books Service">Children’s Books Service</option>
          <option value="Book Editing & Proofreading Service">Book Editing & Proofreading Service</option>
          <option value="Book Cover Designing">Book Cover Designing</option>
          <option value="Illustrations & Graphics Service">Illustrations & Graphics Service</option>
          <option value="Book Printing Service">Book Printing Service</option>
          <option value="Audiobook Production">Audiobook Production</option>
          <option value="Author Website Service">Author Website Service</option>
          <option value="Blurb Writing Service">Blurb Writing Service</option>
          <option value="Amazon Book Description">Amazon Book Description</option>
          <option value="Amazon Book Listing Optimization">Amazon Book Listing Optimization</option>
          <option value="Amazon Book Paid Ads">Amazon Book Paid Ads</option>
          <option value="Amazon Central Account">Amazon Central Account</option>
          <option value="Amazon A + Content">Amazon A + Content</option>
          <option value="Book Trailer">Book Trailer</option>
          <option value="Featured Articles">Featured Articles</option>
        </select>
        <textarea class="required input-control form-control" autocomplete="nope" name="brief" required placeholder="Share your idea"></textarea>
        <label class="chota_fnt">
          <input type="checkbox" name="bn_emailPromotional" required="" checked> Please CHECK THE BOX to COMMUNICATE VIA SMS OR EMAIL ( <a href="privacy-policy">PRIVACY POLICY </a> & <a href="terms-and-conditions">TERM & CONDITIONS</a> ) - Carrier charges may apply for SMS. Reply STOP or UNSUBSCRIBE to STOP to unsbscribe anytime. </label>
        <div class="py-3 text-center">
          <input type="submit" id="register" class="btn btn-black" name="send_data" value="Send Message">
          <br /> </div>
      <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brand" value="AMAZONKDPEXPERT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (amazonkdpexpert.com)"></form>
    </div>
        </div>
  </div>
</section>



<!-- Footer -->
<footer>
    <div class="container" data-aos="zoom-in-up" data-aos-duration="1200">
        <div class="row align-items-center py-2">
            <div class="col-md-4">
                <a href="/">
                    <img class="lazy size" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/logo-w.png" alt="Logo" />
                </a>
            </div>
            <div class="col-md-8">

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <nav>
                    <ul class="menu">
                        <li class="pb-4">
                            <!-- <img src="assets/images/trust.webp" alt="Logo" width="100%"> -->
                        </li>
                    </ul>
                    <p>Got a book inside you but not sure how to make it happen? We’re here
                    to help. amazon kdp expert is one of the most successful platforms for
                    self-publishing authors. From writing, designing, publishing to distribution – we take
                    care of everything. Becoming an accomplished author has never been easier!</p>
                </nav>
            </div>
            <div class="col-md-2">
                <nav>
                    <ul class="menu">
                        <li><a href="">Home</a></li>
                        <li><a href="">Portfolio</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Testimonials</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-2">
                <ul class="menu">
                    <ul class="menu">
                        <li><a href="book-publishing">Book Publishing</a></li>
                        <li><a href="book-cover-design">Book Cover Design</a></li>
                        <li><a href="audio-book-service">Audio Book Services</a></li>
                        <li><a href="author-website">Author Website</a></li>
                        <li><a href="book-illustration">Custom Illustration</a></li>
                    </ul>
                </ul>
            </div>
            <div class="col-md-4">
                <nav>
                    <ul class="menu">
                        <ul class="menu mb-3">
                            <li class="d-flex">
                                <span class="pt-2"> <i class="fas fa-phone-alt"></i> </span>
                                <span class="d-block pl-2">
                                    <a href="tel:+17275135653"> +1 (727) 513-5653 (USA) </a> <br>
                                    <!--<a href="tel:+11-000-000-0000"> +11-000-000-0000 (UK)</a>-->
                                    </span>
                            </li>
                            <!--<li><a href="mailto:marketing@amazonkdpexpert.com"><i class="fas fa-envelope"></i>-->
                            <!--        marketing@amazonkdpexpert.com</a>-->
                            <!--</li>-->
                            <li><a href="javascript:"><i class="fas fa-map-marker-alt"></i> <strong>Mailing Address :</strong> Mailing Address: 3410 nectar ct Ontario ca 91761</a></li> </ul>
                    </ul>
            </div>
        </div>
    </div>
     
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <a href=""><strong>&copy; 2024 Amazon and all related
                            Marks are Trademarks of Amazon.com, Inc. or its affiliates</strong></a>
                </div>
                <div class="col-md-4 text-right">
                    <ul class="menu d-inline-block">
                        <li class="d-inline-block"><a href="terms-and-conditions">Terms &
                                Conditions | </a></li>
                        <li class="d-inline-block"><a href="privacy-policy">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
<!--     <div class="disclimers">-->
<!--   <div class="container">-->
<!--       <div class="row">-->
<!--           <div class="col-md-12">-->
<!--               <p>Disclosure: amazon kdp expert  is an independent entity (not connected in any way with Amazon.com) helping self-reliant authors with book publishing and marketing solutions.</p>-->
           
<!--           </div>-->
<!--       </div>-->
<!--   </div>-->
<!--</div>-->

<div class="gdg">
<div class="cookie-consent-banner__description"><strong>Disclosure:</strong>
Amazon kdp Expert is a strategic partner of Saibina Corp
</div>
</div>

</footer>



<script>
    setTimeout(function() {

        $('.lazy').each(function() {
            var data = $(this).attr('data-src');
            $(this).attr('src', data);
        });
    }, 6000);
</script>








<script type="text/javascript">
    window._mfq = window._mfq || [];
    (function () {
        var mf = document.createElement("script");
        mf.type = "text/javascript"; mf.defer = true;
        mf.src = "//cdn.mouseflow.com/projects/d027585d-f7cc-47fd-bca3-cd7219bd681d.js";
        document.getElementsByTagName("head")[0].appendChild(mf);
    })();
</script>    
<script type="text/javascript" src="assets/js/libs.js"></script>
<script type="text/javascript" src="assets/js/functions.js"></script>


<script>
        // $.each($('.form-get-quote'),function(k,v){
            // $(v).append('<input type="hidden" name="lead_url" value="'+JSON.stringify(window.location.href)+'">')
        // })
        $('.form-get-quote').on('submit' , function(e){
        var obj = $(this);
        e.preventDefault();
        $("<input>", {type:"hidden",name: "quote[lead_url]", value: JSON.stringify(window.location.href) }).appendTo(obj);
        var data = $(obj).serialize();
         jQuery.ajax({
                url: window.location.href.substring(0, window.location.href.lastIndexOf("/")+1) + "/sendmail",
                type: "POST",
                data: data,
                async: false,  // Has to be false to be able to return response
                dataType: "json",  // Has to be false to be able to return response
                success: function(response) {
                    if (response.status == 1) {
                      window.location = 'https://amazonkdpexpert.com/thankyou';
                    // alert('Thank You');
                      obj.trigger("reset"); 
                    }
                    else{
                      return false;
                    }
                    
                },
                beforeSend: function()
                {
                    // Loader.show();
                }
            }); 
            
            return false;
    });
         
      </script>
      
      


<script>

     zE(function() {
        $zopim(function() {
          $zopim.livechat.setOnUnreadMsgs(unread);
            function unread(number) {
            if (number>=1)
            {
          $zopim.livechat.window.show();
            }
            }
        });
    });
    
</script> 


<script defer type="text/javascript">
function setButtonURL(){
$zopim.livechat.window.toggle();
}
</script> 


<script>
  zE(function() {
        $zopim(function() {
        $zopim.livechat.window.show();
      });
    });
</script>


<script>
   $('.top_add i').click(function(){
    $('.top_add').css("display","none");
   });
 </script>
      




</body>
</html>