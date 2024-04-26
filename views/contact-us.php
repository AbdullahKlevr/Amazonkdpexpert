
<!doctype html>
<html lang="en">
<?php include_once("includes/head.php") ?>
<body>




 <?php include_once("includes/header.php") ?>



<section class="banner inner-banner inner-banner1">
   <div class="container" data-aos="fade-up" data-aos-duration="1000">
      <div class="row align-items-center">
         <div class="col-md-7" data-aos="fade-left" data-aos-duration="1200">
            <h1 class="text-white">Contat <span class="d-content primary-color">Us</span></h1>
            <p class="text-white py-3">
               We appreciate feedback from readers and visitors at any time. Please use the contact information
               below to get in touch with us if you have any queries, comments, or worries. Our goal is to
               answer to every query. Please provide as much detail as possible in your message to help us
               understand your inquiry and respond more effectively. We value your privacy, and your
               information will not be shared with any third-party.
            </p>
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


<section class="testmonial" id="testimonial">
  <div class="container" data-aos="fade-down" data-aos-duration="1200">
    <div class="row align-items-center pb-5">
      <div class="col-md-6">
        <h2>What our clients say’s</h2> </div>
      <div class="col-md-6 text-right">
        <a href="" target="_blank"> <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/review-trust.webp" alt="Logo" width="60%"> </a>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="testmonial-slider owl-theme owl-carousel">
        <div class="item">
          <div class="self-pub">
            <div class="author">
              <div class="auth-img"> <span>R</span> </div>
              <div class="auth-bio">
                <h6>Rose O Sullivan</h6> <span>2 review</span> </div>
            </div>
            
            <!--<h3>Good people, but slow process</h3>-->
            <p>Amazon kdp Expert is a great place to get your book written. They have experienced writers on board who actually walk extra miles to fulfil your expectations. I have worked with them and got truly impressed.</p>
          </div>
        </div>
        <div class="item">
          <div class="self-pub">
            <div class="author">
              <div class="auth-img"> <span>B</span> </div>
              <div class="auth-bio">
                <h6>Brian Payne</h6> <span>3 review</span> </div>
            </div>
          
            <!--<h3>Publishing My Book</h3>-->
            <p>I can highly recommend Amazon kdp Expert as a fantastic company with really helpful people that deliver great results on time. I could not have achieved this with out them. Thank you Amazon kdp Expert.</p>
          </div>
        </div>
        <div class="item">
          <div class="self-pub">
            <div class="author">
              <div class="auth-img"> <span>T</span> </div>
              <div class="auth-bio">
                <h6>Thomas Parker</h6> <span>1 review</span> </div>
            </div>
           
            <!--<h3>A Great Team</h3>-->
            <p>This has been a delightful enriching experience, It is as someone is talking like you and thinking the same way, direct to the point, and great timing. Special thanks for making this Come true in a short period of time and thorough work.</p>
          </div>
        </div>
        <div class="item">
          <div class="self-pub">
            <div class="author">
              <div class="auth-img"> <span>J</span> </div>
              <div class="auth-bio">
                <h6>John Selby</h6> <span>2 review</span> </div>
            </div>
           
            <!--<h3>Do your Research , i wish i would had</h3>-->
            <p>Amazon kdp Expert has been wonderful in editing my book. They are working in a very timely and responsive way. I really like working with them and have already recommended them to several other people. A BIG THUMBS UP.</p>
          </div>
        </div>
        <div class="item">
          <div class="self-pub">
            <div class="author">
              <div class="auth-img"> <span>S</span> </div>
              <div class="auth-bio">
                <h6>Stella Donna</h6> <span>1 review</span> </div>
            </div>
            
            <!--<h3>It was amazing</h3>-->
            <p>When I was struggling to publish my first book, I had no idea of the difficulties involved. But when I got in touch with Amazon kdp Expert, my book was publish within few period with their expertise. Highly Recommended</p>
          </div>
        </div>
        <div class="item">
          <div class="self-pub">
            <div class="author">
              <div class="auth-img"> <span>S</span> </div>
              <div class="auth-bio">
                <h6>Stephen Hendry</h6> <span>1 review</span> </div>
            </div>
            
            <!--<h3>The Providers were very skilled with…</h3>-->
            <p>Amazon kdp Expert, I have made a friend for life. It's one thing to call or feel like a writer, but if you want all the bells and whistles in a completed writing. Trust me call these people.Thanks alot for making my dream come true</p>
          </div>
        </div>
        <!--<div class="item">-->
        <!--  <div class="self-pub">-->
        <!--    <div class="author">-->
        <!--      <div class="auth-img"> <span>T</span> </div>-->
        <!--      <div class="auth-bio">-->
        <!--        <h6>Tom A.</h6> <span>2 review</span> </div>-->
        <!--    </div>-->
            
        <!--    <h3>Very good first experience</h3>-->
        <!--    <p>I would give it a 4.5 rating (if I could). The Project Manager was very attentive, which was excellent (5 star). This was my first experience publishing a novel, and I appreciated his regular communication and education. The end quality of the art/ book cover and text formatting were very professional. My only frustrations were: (1) when I pointed out a few issues and in return received a message that the issues were corrected, but when I review it not all were addressed, and (2) when I had an expectation as part of the project and found later that it was not part of the deal. All said, I wouldn't hesitate to work with Amazon Publishing Pro's again.</p>-->
        <!--  </div>-->
        <!--</div>-->
      </div>
    </div>
  </div>
</section>


<section class="client-review-audio">
  <div class="container">
    <h3 class="text-center pb-4">One of our Authors, <span class="primary-color"> Keli Kane </span> gave us a
            shout-out in a recent podcast that she appeared on to promote her Book and website (Time Stamp: 19:00)</h3>
    <div class="row align-items-center">
      
      <div class="col-md-6" data-aos="fade-down" data-aos-duration="1200">
        <h5 class="pb-3">Musing with Tonya Dee Podcast: Holistic Sha'Medium</h5>
        <h3><a href="https://www.tonyadee.tv/podcasts/musing-with-tonya-dee-podcast-holistic-sha-medium/episodes/2148091778"
                        target="_blank">
                        #734 - How a Physical Initiation Transformed into Gift and Purpose</a>
                </h3>
        <audio controls width="100%">
          <source src="/assets/videos/client-test.mp3" type="audio/mpeg"> Your browser does not support the audio element. </audio>
        <p class="py-2">We have also designed her <b>Author Website</b> :</p> <a href="https://kelikanehealing.com/" target="_blank" class="btn btn-yellow">View Her Site</a> </div>
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200">
        <a href="https://www.amazon.com/Angel-Mirror-Traumatic-Medicine-Spirituality/dp/1916540244" target="_blank"> <img src="assets/images/hire-img.png" alt="" width="90%"> </a>
      </div>  
    </div>
  </div>
</section>

<section class="faq-sec">
  <div class="container" data-aos="zoom-in-up" data-aos-duration="1200">
    <div class="row">
      <div class="col-md-12 pb-md-5 ">
        <h2 class="text-center">Frequently asked <span class="primary-color">questions</span></h2>
        <p class="text-center pt-2 pb-4">Before contacting us you might want to check whether your question is one of our frequently asked questions.</p>
        <div id="accordion">
          <div class="card">
            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">Q. What will be
                                the printing cost of the book?</a> </div>
            <div id="collapseOne" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <p>The printing cost of the book depends on the following factors.</p>
                <ul class="menu menu-dot">
                  <li> Page quality </li>
                  <li> Content color </li>
                  <li> Number of pages </li>
                  <li> Binding type </li>
                  <li> Number of copies ordered </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                Q. How is the royalty calculated?</a> </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <p> What will be the author’s share when books will be sold? </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                Q. Does the author keep the film/movie rights for her/his book?</a> </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <p>Yes, the author has holds 100% film rights for her/his work. But you must notify us the detailed good news to spread socially. That is it. No commission. </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                Q. Who will hold the copyright?</a> </div>
            <div id="collapseFive" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <p> The author will hold the copyrights in all cases. </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                                Q. How long will it take to get the book published?</a> </div>
            <div id="collapseSix" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <p> In approximately 7 to 14 days, from the time we have the computer typed manuscript, your written (or email) approval for print and the verified payment with us. However, some of the distribution channels may take longer time, but the book will be available in our store within time, with guarantee. </p>
              </div>
            </div>
          </div>
        </div>
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