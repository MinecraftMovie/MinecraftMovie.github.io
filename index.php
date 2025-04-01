<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sophie Decker">
    <meta name="description" content="Kranck Presents: Not an Official Minecraft Website: The Minecraft Movie. Official website of Kranck: artist, visionary, anti-leader.">
    <meta name="keywords" content="minecraft, movie, minecraftmovie,kranck,music,art,blog,funny,lol,meme,artist,dreams,comments,hotline,The Minecraft Movie,minecraft movie">
    <title> Kranck Presents: Not An Official Minecraft Website: The Minecraft Movie</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.cdnfonts.com/css/minecraft-4" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon-32x32.png">
    <!-- script for rainbow links -->
    <script type='text/javascript'>
        //<![CDATA[
        var rate = 50;
        if (document.getElementById)
            window.onerror=new Function("return true")
            
            var objActive; // The object which event occured in
            var act = 0; // Flag during the action
            var elmH = 0; // Hue
            var elmS = 100; // Saturation
            var elmV = 255; // Value
            var clrOrg; // A color before the change
            var TimerID; // Timer ID
            if (document.all) {
            document.onmouseover = doRainbowAnchor;
            document.onmouseout = stopRainbowAnchor;
        }
        else if (document.getElementById) {
            document.captureEvents(Event.MOUSEOVER | Event.MOUSEOUT);
            document.onmouseover = Mozilla_doRainbowAnchor;
            document.onmouseout = Mozilla_stopRainbowAnchor;
            }
        function doRainbow(obj)
        {
            if (act == 0) {
                act = 1;
                if (obj)
                objActive = obj;
                else
                objActive = event.srcElement;
                clrOrg = objActive.style.color;
                TimerID = setInterval("ChangeColor()",100);
            }
        }
        function stopRainbow()
        {
            if (act) {
                objActive.style.color = clrOrg;
                clearInterval(TimerID);
                act = 0;
            }
        }
        function doRainbowAnchor()
        {
            if (act == 0) {
                var obj = event.srcElement;
                while (obj.tagName != 'A' && obj.tagName != 'BODY') {
                    obj = obj.parentElement;
                    if (obj.tagName == 'A' || obj.tagName == 'BODY')
                    break;
                }
                if (obj.tagName == 'A' && obj.href != '') {
                    objActive = obj;
                    act = 1;
                    clrOrg = objActive.style.color;
                    TimerID = setInterval("ChangeColor()",100);
                }
            }
        }
        function stopRainbowAnchor()
        {
            if (act) {
                if (objActive.tagName == 'A') {
                    objActive.style.color = clrOrg;
                    clearInterval(TimerID);
                    act = 0;
                }
            }
        }
        function Mozilla_doRainbowAnchor(e)
        {
        if (act == 0) {
        obj = e.target;
        while (obj.nodeName != 'A' && obj.nodeName != 'BODY') {
        obj = obj.parentNode;
        if (obj.nodeName == 'A' || obj.nodeName == 'BODY')
        break;
        }
        if (obj.nodeName == 'A' && obj.href != '') {
        objActive = obj;
        act = 1;
        clrOrg = obj.style.color;
        TimerID = setInterval("ChangeColor()",100);
        }
        }
        }
        function Mozilla_stopRainbowAnchor(e)
        {
        if (act) {
        if (objActive.nodeName == 'A') {
        objActive.style.color = clrOrg;
        clearInterval(TimerID);
        act = 0;
        }
        }
        }
        function ChangeColor()
        {
        objActive.style.color = makeColor();
        }
        function makeColor()
        {
        // Don't you think Color Gamut to look like Rainbow?
        // HSVtoRGB
        if (elmS == 0) {
        elmR = elmV; elmG = elmV; elmB = elmV;
        }
        else {
        t1 = elmV;
        t2 = (255 - elmS) * elmV / 255;
        t3 = elmH % 60;
        t3 = (t1 - t2) * t3 / 60;
        if (elmH < 60) {
        elmR = t1; elmB = t2; elmG = t2 + t3;
        }
        else if (elmH < 120) {
        elmG = t1; elmB = t2; elmR = t1 - t3;
        }
        else if (elmH < 180) {
        elmG = t1; elmR = t2; elmB = t2 + t3;
        }
        else if (elmH < 240) {
        elmB = t1; elmR = t2; elmG = t1 - t3;
        }
        else if (elmH < 300) {
        elmB = t1; elmG = t2; elmR = t2 + t3;
        }
        else if (elmH < 360) {
        elmR = t1; elmG = t2; elmB = t1 - t3;
        }
        else {
        elmR = 0; elmG = 0; elmB = 0;
        }
        }
        elmR = Math.floor(elmR).toString(16);
        elmG = Math.floor(elmG).toString(16);
        elmB = Math.floor(elmB).toString(16);
        if (elmR.length == 1) elmR = "0" + elmR;
        if (elmG.length == 1) elmG = "0" + elmG;
        if (elmB.length == 1) elmB = "0" + elmB
        elmH = elmH + rate;
        if (elmH >= 360)
        elmH = 0;
        return '#' + elmR + elmG + elmB;
        }
        //]]>
        </script>
<!--scripts for tooltip -->        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

        <script type="text/javascript" src="https://static.tumblr.com/7qjmkr5/IUmmdsy41/jquery.style-my-tooltips.js"></script>

        <script>
        (function($){
            $(document).ready(function(){
                $("[title]").style_my_tooltips();
            });
        })(jQuery);
        </script> 

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-X5S0C8H9G3"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-X5S0C8H9G3');
        </script>

</head>
<body id="root">
    <header>
        <h1>Kranck Presents: Not An Official Minecraft Website: The Minecraft Movie</h1>
    </header>
    <main>
        <?php include("partials/sidebar.php") ?>
        <article>
            <section>
                <p style="font-size: x-large;">Check out Bodewadmi Ndaw, a documentary by Davis Henderson. It may be the only documentary about the language of the Potawatami nation, and is made by a member of the tribe. It will be showing at The Tube Factory gallery in Indianapolis starting March 7</p>
                <div style="position:relative;width: 100%;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/fPlsNaItDoc?si=QnD2nq0-ZEq1OlB1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </section>
            <section>
                <a href="https://ckingram.com" target="_blank"><h2>painter - printmaker - artist: Carolyn Ingram</h2></a>
                <img src="assets/carolyn.png">
            </section>
            <section>
            <a href="https://open.spotify.com/artist/0NzmVYzkENFzD9rxfNOqyC?si=IEsolt0ITBCkzxANyA6nPg" target="_blank"><h2>Give me one billion dollars &lt;3 or the domain name gets it</h2></a>
                            <div style="width:100%;position: relative;overflow: hidden;padding-top: 56.25%;"><iframe style="position:absolute;top:0;left:0;right:0;width:100%;height:100%;" width="560" height="315" src="https://www.youtube.com/embed/7Ae-Qvc4-T4?si=YNHKBnZzPkTSY9iQ&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
            </section>
            <section>
                <img src="assets/interesting image.jpg">
            </section>
        </article>
    </main>
    <footer>    
        <p class="credit">Built and maintained by Music for the Layman engineering team</p>  
        <div class="disclaimer">
            <a href="https://www.minecraft.net/en-us/usage-guidelines" data-toggle="tooltip" title="Not An Official Minecraft/Mojang Website">&#9888;</a>
        </div>
    </footer>
</body>
</html>