<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://use.typekit.net/ynz6cyc.css">

    <link rel="preload" href="../Fonts/MedievalSharp/MedievalSharp-Regular.woff2" as="font" type="font/woff2" crossorigin>
</head>

<body>
    <div class=container>
        <header class="noBanner">
            <a href="index.php">
                <div class="siteTitle">
                    <a href="index.php"><h2>Ironveil Forge</h2></a>
                </div>
            </a>

            <div class="navigation">
                <div class="topSection">
                    <div class=accountCart>
                        <div class="cart">
                            <div id=cartItemCounter></div>
                            <a href="cart.php"><img src="../Images/cartIcon.png" class="cartIcon" alt="cart"></a>
                        </div>
                        <button class="button2" id="signUp"><span>Sign Up</span></button>
                    </div>
                </div>

                <div class="navBar">
                    <div class="dropdown">
                        <button class="navLink" onclick="location.href='weapons.php'"aria-haspopup="true" aria-expanded="false">Weapons</button>
                        <ul class="dropdownContent">
                            <li><button class="navSubLink" onclick="location.href='swords.php'" role="menuitem">Swords</button></li>
                            <li><button class="navSubLink" onclick="location.href='daggersKnives.php'" role="menuitem">Daggers</button></li>
                            <li><button class="navSubLink" onclick="location.href='bluntHandWeapons.php'" role="menuitem">Blunt Hand</button></li>
                            <li><button class="navSubLink" onclick="location.href='polearms.php'" role="menuitem">Polearms</button></li>
                            <li><button class="navSubLink" onclick="location.href='ranged.php'" role="menuitem">Ranged</button></li>
                        </ul>
                    </div>

                    <!-- ADJUST CUSTOMIZE LINKS TO GO TO CUSTOMIZATION PAGE -->
                    <div class="dropdown">
                        <button class="navLink" onclick="location.href='customize.php'"aria-haspopup="true" aria-expanded="false">Customize</button>
                        <ul class="dropdownContent">
                            <li><button class="navSubLink" onclick="location.href='swords.php'" role="menuitem">Swords</button></li>
                            <li><button class="navSubLink" onclick="location.href='daggersKnives.php'" role="menuitem">Daggers</button></li>
                            <li><button class="navSubLink" onclick="location.href='bluntHandWeapons.php'" role="menuitem">Blunt Hand</button></li>
                            <li><button class="navSubLink" onclick="location.href='polearms.php'" role="menuitem">Polearms</button></li>
                            <li><button class="navSubLink" onclick="location.href='ranged.php'" role="menuitem">Ranged</button></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="navLink" onclick="location.href='contact.php'"aria-haspopup="true" aria-expanded="false">Customer Service</button>
                        <ul class="dropdownContent">
                            <li><button class="navSubLink" onclick="location.href='faq.php'" role="menuitem">FAQ</button></li>
                            <li><button class="navSubLink" onclick="location.href='shippingReturns.php'" role="menuitem">Shipping & Returns</button></li>
                            <li><button class="navSubLink" onclick="location.href='refundPolicy.php'" role="menuitem">Refund Policy</button></li>
                            <li><button class="navSubLink" onclick="location.href='trackOrder.php'" role="menuitem">Track Your Order</button></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="navLink" onclick="location.href='about.php'"aria-haspopup="true" aria-expanded="false">About</button>
                        <ul class="dropdownContent">
                            <li><button class="navSubLink" onclick="location.href='forgingProcess.php'" role="menuitem">Forging Process</button></li>
                            <li><button class="navSubLink" onclick="location.href='ourStory.php'" role="menuitem">Our Story</button></li>
                            <li><button class="navSubLink" onclick="location.href='meetTheTeam.php'" role="menuitem">Meet the Team</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
       
    <section class="content">
        <h2>Cart</h2>
        
        <div id='mainSection'>
            <div class="cartContainer">
                <!--
                <div class="cartItem">
                    <div class="imgContainer">
                        <img src="../Images/ArmingSwords/duskwardDefender.png" alt="">
                    </div>
                    <div class="details">
                        <div class="topSection">
                            <h3 class="name">
                                Duskward Defender
                            </h3>
                            <h3 class="price">
                                $580
                            </h3>
                        </div>

                        <div class="description">
                            A steady and understated arming sword, the Duskward Defender is forged from dark steel with a clipped, single-edged blade built for disciplined precision. Its walnut hilt and simple disc pommel favor balance over ornament, while the minimal black leather sheath keeps its presence discreet. Reliable and unadorned, it is a weapon made for vigilance rather than vanity.
                        </div>

                        <div class="buttonContainer">
                            <div class="stepperInput">
                                <input type="range" min="0" max="100" value="1">
                                <div class="input">
                                    <button class="minusButton">-</button>
                                    <div class="range">
                                        <div class="list"></div>
                                    </div>
                                    <button class="plusButton">+</button>
                                </div>
                            </div>

                            <div  class="deleteButton"><img src="../Images/IconDelete.svg" alt=""></div>

                        </div>
                    </div>
                </div> -->
            </div>
            <div class='rightSection'>
                <div id='subtotalBreakdown'>
                    <div class='row'>
                        <span><span><strong>Subtotal</strong></span> <span id=itemNum></span></span>
                        <span id=subtotal>$0</span>
                    </div>

                    <div class='row' id='shippingRow'>
                        <span class='label'>Shipping</span>
                        <span id = 'shipping'>$9.99</span>
                    </div>

                    <div class='row'>
                        <span>Taxes</span>
                        <span>Calculated at checkout</span>
                    </div>
                    
                </div>
                <div><img src="../Images/CServiceDivider.svg"  class="linkDivider" alt=""></div>
                <div id='estimatedTotal'>
                    <span><strong>Estimated total</strong></span>
                    <span id='total'>$0</span>
                </div>
                
                <button class="button2"><a href="checkoutShipping.php"><span>Proceed to checkout</span></a></button>
            </div>
        </div>
    </section>

    <section>
        <img src="../Images/FooterBorder.svg" class="bannerImgBorder" alt="">
        <footer>
            <img src="../Images/FooterBackground.jpg" class="bgImg" alt="">
            <div class="footerContent">
                <div class="footerTop">
                    <img src="../Images/LogoBanner.png" class="logoBanner" alt="Ironveil Forge logo banner featuring a stylized sword design in gold">

                    <div class="footerNav">
                        <div class="footerNavSection">
                            <a href="weapons.php"><h4>Shop</h4></a>

                            <div><img src="../Images/ConnectDivider.svg" class="linkDivider" alt=""></div>

                            <div class="footerLinks">
                                <ul>
                                    <li><a href="swords.php">Swords</a></li>
                                    <li><a href="daggersKnives.php">Daggers & Knives</a></li>
                                    <li><a href="bluntHandWeapons.php">Blunt Hand Weapons</a></li>
                                    <li><a href="polearms.php">Polearms</a></li>
                                    <li><a href="ranged.php">Ranged</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="footerNavSection">
                            <h4>Connect</h4>

                            <div><img src="../Images/ConnectDivider.svg" class="linkDivider" alt=""></div>

                            <div class="footerLinks">
                                <ul>
                                    <li><a href="ourStory.php">Our Story</a></li>
                                    <li><a href="meetTheTeam.php">Meet the Team</a></li>
                                    <li><a href="forgingProcess.php">How They're Made</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="footerNavSection" id="cServiceContainer">
                            <h4 class="cService">Customer Service</h4>

                            <div><img src="../Images/CServiceDivider.svg"  class="linkDivider" alt=""></div>

                            <div class="footerLinks">
                                <ul>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="faq.php">FAQ</a></li>
                                    <li><a href="shippingReturns.php">Shipping & Returns</a></li>
                                    <li><a href="refundPolicy.php">Refund Policy</a></li>
                                    <li><a href="trackOrder.php">Track Your Order</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="../Images/FooterDivider.svg" id=footerDivider alt="">

                <div class="footerBottom">
                    <p class="copyright">© 2025 Ironveil Forge. All rights reserved.</p>
                    <div class="socialMedia">
                        <a href="https://www.facebook.com/"><img src="../Images/IconFacebook.png" alt="Facebook logo"></a>
                        <a href="https://www.instagram.com/"><img src="../Images/IconInstagram.png" alt="Instagram logo"></a>
                        <a href="https://x.com/"><img src="../Images/IconXTwitter.png" alt="Twitter/X logo"></a>
                        <a href="https://www.tiktok.com/en/"><img src="../Images/IconTikTok.png" alt="TikTok logo"></a>
                        <a href="https://www.youtube.com/"><img src="../Images/IconYoutube.png" alt="Youtube logo"></a>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <script type='module' src='src/main.js'></script>
    <script type='module' src='src/adjustCart.js'></script>
</body>