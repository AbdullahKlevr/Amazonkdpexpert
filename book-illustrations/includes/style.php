<?php
ob_start();
session_start();


if (isset($_SERVER['HTTPS'])) {
  $requesMet = "https";
} else {
  $requesMet = "http";
}
?>

<base href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>">
<link rel="stylesheet" href="book-illustrations/assets/css/layout.css">
<link rel="stylesheet" href="book-illustrations/assets/css/style.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <?php
  include_once("includes/token.php");
  

$url = $_SERVER['REQUEST_URI'];
  ?>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

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
<script></script>
<!--End of Tawk.to Script-->