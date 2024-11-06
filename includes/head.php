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
<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 18526170;
    window.__lc.integration_name = "manual_channels";
    window.__lc.product_name = "livechat";
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    
     window.LC_API = window.LC_API || {};
     window.LC_API.on_after_load = function() {
         // Listen for new messages
         LC_API.on_chat_ended = function() {
             LC_API.open_chat_window(); // Opens the chat window
         };

         // Check for new messages from the agent
         LC_API.on_message = function(data) {
             LC_API.open_chat_window();
         };
     };
</script>
<noscript><a href="https://www.livechat.com/chat-with/18526170/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
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