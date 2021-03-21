<?php
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/JavaScript">

$(function(){
    // this will get the full URL at the address bar
    var url = window.location.href; 

    // passes on every "a" tag 
    $("#menu a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) { 
            $(this).closest("li").addClass("active");
        }
    });
});
</script>

<link rel="stylesheet" href="/gregoiresite/snips/navbar/navbar.css">


<div class="menu">
    <ul>
        <div class="name-logo">
            <a href="/gregoiresite/">VODART</a>
        </div>
        <li><a href="/gregoiresite/">Welcome</a></li>
        <li><a href="/gregoiresite/home/">My Account</a></li>
        <li><a href="/gregoiresite/about.php">A propos</a></li>
        <li><a href="/gregoiresite/abonnement.php">abonnement</a></li>
        <li><a href="/gregoiresite/api/">Documentation pour développeurs</a></li>
    </ul>
</div>
