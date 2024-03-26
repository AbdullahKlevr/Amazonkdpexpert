<?php
include_once("token.php");

if (isset($_SERVER['HTTPS'])) {
  $requesMet = "https";
} else {
  $requesMet = "http";
}
?>

<base href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>">
<head>
<title>Amazon Publishing Service: Become a Published Author</title>
<meta name="keywords" content="">
<meta name="description" content="">







<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="favicon.png" type="image/x-icon" />

<!-- new -->
<link class="myLazy loaded" rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" >
<link class="myLazy loaded" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" >
<link class="myLazy loaded" rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/style-web.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">




</head>
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
<script>
      var isloading = true;

      function removeLoading() {
         if (isloading) {
            $("head").append(`  `);

            $('.myLazy').each(function () {
               $(this).attr("src", $(this).attr('data-src'))
            })
            isloading = false
         }
      }
      $(document).mousemove(removeLoading)
      $(document).on("touchmove", removeLoading)
      setInterval(removeLoading, 5000);
   </script>