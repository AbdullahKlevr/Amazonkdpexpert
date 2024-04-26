<header>
    <div class="main-header">
        
        <div class="container">
            
            <div class="row align-items-center">
                <div class="col-sm-3  col-8 text-left">
                    <a href="./" class="logo" aria-label="logo">
                        <img src="assets/images/logo.webp" alt="">
                    </a>
                </div>
                <div class="col-sm-9 col-4  text-right">
                    <div class="menuWrap">
                        
                        <ul class="menu">
                            <li>
                                <a href="javascript:;" class="header-btn" onclick="setButtonURL();"  aria-label="Chat"><i class="fa fa-comment"></i> <span>Live Chat</span></a>
                            </li>
                            <li>
                                <a href="tel:<?php echo $phone;?>" class="header-btn bordered"  aria-label="phone"><i class="fa fa-phone"></i> <span><?php echo $phone;?></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/65fb303c1ec1082f04d97bfd/1hpej8ru8';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();


    function setButtonURL() {
       Tawk_API.toggle()
    }
    function toggleChat() {
       Tawk_API.toggle()
    }




// $(".liveChat").click(function(){
//    Tawk_API.toggle();
// })




window.Tawk_API = window.Tawk_API || {};
window.Tawk_API.onChatMessageAgent = function(message){
        window.Tawk_API.maximize();

};



</script>
<!--End of Tawk.to Script-->