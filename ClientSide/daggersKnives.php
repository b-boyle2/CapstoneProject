<!DOCTYPE html>
<html>
<head>
    <title>Daggers</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://use.typekit.net/ynz6cyc.css">

    <link rel="preload" href="Fonts/MedievalSharp/MedievalSharp-Regular.woff2" as="font" type="font/woff2" crossorigin>
</head>

<body>
    <div class=container>
        <header class="bannerImg">
            <img src="../Images/SwordBannerImage.jpg" class="bgImg" alt="Hero" id="heroImg">

            <div class="siteTitle">
                <a href="index.php"><h2>Ironveil Forge</h2></a>
            </div>

            <div class="navigation">
                <div class="topSection">
                    <div class=accountCart>

                        <div class="cart"><img src="../Images/cartIcon.png" class="cartIcon" alt="cart"></div>
                        <button class="button2" id="signUp">Sign Up</button>
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
            <h1 class=title>Daggers</h1>
        </header>
        
        <img src="../Images/HeaderBorder.svg" class="bannerImgBorder" alt="">
    </div>
       
    <section class="content">   
        <div class="filterSelect">
            
            <div class="subcategoryFilter">
                <span class="selected">All</span>
                <div class="filterCarrot"></div>
                <div class="options">
                    <div data-value="">All</div>
                    <div data-value="5">Anelace</div>
                    <div data-value="6">Stiletto</div>
                    <div data-value="7">Poignard</div>
                    <div data-value="8">Rondel</div>
                    <div data-value="9">Sica</div>
                    <div data-value="10">Dagger</div>
                </div>
            </div>
        </div>

        <div class="availableWeapons" data-table="daggers">
            <!-- WEAPON LISTINGS APPEAR HERE -->
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

    <script src='main.js'></script>
    <script src='premadeItemListings.js'></script>
</body>