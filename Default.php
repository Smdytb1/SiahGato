<!DOCTYPE html>
<!-- This webpage is licensed under our brand Siah-Net. the copyrights on this page must stay on the page or risk DMCA by the property owner, and as such you will have to list modifications in a changelog. No mass distribution, Private distribution is allowed however. Any damages caused to the product you are downloading will have to be mitigated immediately. this is your only warning. failure to comply will result in immediate termination of your modifications, however no charge will be incurred. you may continue to modify under these terms: Do not include malicious content, Do not use this page to distribute copyrighted content, Do not include anything that directly affects the browsing experience of users, Only use direct linking for content within the page.
You are allowed to download and distribute privately at your own freedom
You are not allowed to claim this page as your own under any circumstances.
You are not allowed to remove this message from your page or risk above actions
You are not allowed to relicense this work under a different property
You must make a subdirectory leading this document such as website.com/siahnet or /legal
this is just here for you to read the first time you download this document, you may remove it(despite the warning above) and create the subdirectory above. it is to make sure people respect our rights to this document, we hope you understand.-  
<!-- Copyright 2014-2016, Siah-Net -->  
<!--Nav bar   -->
            <div class="dropdown">
                <button class="dropbtn">Games - 1</button>
              <div class="dropdown-content">
                    <ul><a id="text" href="http://external.kongregate-games.com/gamez/0021/4044/live/embeddable_214044.swf" onclick="showGame(this);return false;" target="gholder">1Quest</a>
                    </ul>
                    <ul><a href="http://chat.kongregate.com/gamez/0021/6267/live/Bloody_Night_Kongregate.swf" onclick="showGame(this);return false;" target="gholder">Bloody Night</a>
                    </ul>

                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Games - 2</button>
                <div class="dropdown-content">
                    <ul><a id="text" href="http://external.kongregate-games.com/gamez/0014/4037/live/embeddable_144037.swf" onclick="showGame(this);return false;" target="gholder">StellarWar</a>
                    </ul>
                    <ul><a href="http://www8.agame.com/mirror/flash/a/Arcuz/arcuz_agame_com.swf" onclick="showGame(this);return false;" target="gholder">Arcuz</a>
                    </ul>
                    <ul><a href="http://chat.kongregate.com/gamez/0012/5689/live/Demonrift-td.swf" onclick="showGame(this);return false;" target="gholder">Demonrift</a>
                    </ul>
                    <ul><a href="http://chat.kongregate.com/gamez/0013/3293/live/KingdomRush_v1.071_s_sl_Kongregate_nop
remium.swf?kongregate_game_version=1370014721" onclick="showGame(this);return false;" target="gholder">Kingdom Rush</a>
                    </ul>

                </div>
            </div>



            <!-- Game grabber -->

            <br>
            <br>
            <hr id="lines">
            <br>
            <div align="center">
                <!-- DO NOT MAKE RESPONSIVE UNTIL TRANSFIX IS IN PLACE-->
                <iframe class="transfix" embed id="gameHolder" quality="high" menu="false" width="900" height="545" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" name="gholder"></iframe>
            </div>
            <script>
                function showGame(whichgame) {
                    var source = whichgame.getAttribute("href");
                    var game = document.getElementById("gameHolder").style = "opacity: 1;";
                    var clone = game.cloneNode(true);
                    clone.setAttribute('src', source);
                    game.parentNode.replaceChild(clone, game)

                }
            </script>

            <!-- CSS needs two styles due to javascript onclick functions  -->
            <style id="verin" type="text/css">
                .transfix {
                    opacity: 0.7;
                    background-image: url("http://i.imgur.com/JF1f8dG.jpg");
                    background-repeat: no-repeat;
                    background-size: cover;
                    border: 3px solid #FF4C4C;
                }
                ul {
                    display: inline;
                    padding: 0px 0px 0px 0px
                    /* I FUCKING DID IT */
                }
                body {
                    background-color: #0000000;
                    background-image: url("https://newevolutiondesigns.com/images/freebies/black-wallpaper-22.jpg");
                    background-size: cover;
                }
                h2 {
                    color: white;
                }
                li {
                    color: white;
                }
                .header {
                    border: 10px;
                }
                /* Style The Dropdown Button */
                .dropbtn {
                    background-color: #FF4C4C;
                    color: White;
                    padding: 9px;
                    font-size: 16px;
                    border: 1px;
                    cursor: pointer;
                }
                /* The container <div> - needed to position the dropdown content */
                .dropdown {
                    position: relative;
                    display: inline-block;
                    z-index: 1;
                }
                /* Dropdown Content (Hidden by Default) */
                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #FF4C4C;
                    min-width: 96.5px;
                    /*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
                    margin-left: 0px;
                    font-size: 70%;
                    text-align: center;
                }
                /* Links inside the dropdown */
                .dropdown-content a {
                    color: white;
                    padding: 0px 23px 2px 23px;
                    text-decoration: none;
                    display: inline-block;
                }
                /* Change color of dropdown links on hover */
                .dropdown-content a:hover {
                    background-color: #4C4C4C
                }
                /* Show the dropdown menu on hover */
                .dropdown:hover .dropdown-content {
                    display: block;
                }
                /* Change the background color of the dropdown button when the dropdown content is shown */
                .dropdown:hover .dropbtn {
                    background-color: ##4C4C4C
                }
                #lines {
                    border-color: #FF4C4C;
                    background-color: #000000;
            </style>
           <!--# 8=========D -->


        </body>
    </head>
</html>

