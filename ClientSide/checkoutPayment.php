<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <meta name="page" content="paymentInfo">

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
                        <div class='account'></div>
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

                    <div class="dropdown">
                        <button class="navLink" onclick="location.href='contact.php'"aria-haspopup="true" aria-expanded="false">Customer Service</button>
                        <ul class="dropdownContent">
                            <li><button class="navSubLink" onclick="location.href='faq.php'" role="menuitem">FAQ</button></li>
                            <li><button class="navSubLink" onclick="location.href='shippingReturns.php'" role="menuitem">Shipping & Returns</button></li>
                            <li><button class="navSubLink" onclick="location.href='refundPolicy.php'" role="menuitem">Refund Policy</button></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="navLink" onclick="location.href='about.php'"aria-haspopup="true" aria-expanded="false">About</button>
                        <ul class="dropdownContent">
                            <li><button class="navSubLink" onclick="location.href='forgingProcess.php'" role="menuitem">Forging Process</button></li>
                            <li><button class="navSubLink" onclick="location.href='ourStory.php'" role="menuitem">Our Story</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
       
    <section class="content">
        <h2>Payment Method</h2>

        <div class="section">
            <form id="paymentInfoForm" class="checkoutForm">
                <div class="formItem">
                    <label for="paymentMethod">Select a payment method</label>
                    <select name="Method" id="paymentMethod">
                        <option value="visa">Visa</option>
                        <option value="mastercard">Mastercard</option>
                        <option value="american express">American Express</option>
                        <option value="discover">Discover</option>
                        <option value="jcb">JCB</option>
                    </select>
                </div>
                
                <div class="formItem">
                    <label for="name">Name on card (first and last)</label>
                    <input type="text" name="CardName" id="name" maxlength="255" required>
                </div>
                <div class="formItem">
                    <label for="cardNumber">Card Number</label>
                    <input type="text" name="CardNum" id="cardNumber"  placeholder="XXXX XXXX XXXX XXXX" maxlength="20" required>
                </div>
                <div class="formSubsection">
                    <div class="formItemSub">
                        <label for="expiry">Expiry</label>
                        <input type="text" name="Expiry" id="expiry" placeholder="MM / YY" maxlength="7" required>
                    </div>
                    <div class="formItemSub">
                        <label for="cvv">CVV</label>
                        <input type="number" name="CVV" id="cvv" oninput="if(this.value.length > 3) this.value = this.value.slice(0,3);" required>
                    </div>
                    <div class="formItemSub">
                        <label for="zipCode">ZIP Code</label>
                        <input type="number" name="ZIP" id="zipCode" oninput="if(this.value.length > 5) this.value = this.value.slice(0,5);" required>
                    </div>
                </div>
                <div class="formCheckbox">
                    <input type="checkbox" name="saveAddress" id="saveAddress" value="yes" class="checkBox">
                    <label for="saveAddress">Save my payment information so checkout is easy next time</label>
                </div>
                <button type='submit' class="submitButton" id="submitOrder">Pay Now</button>
            </form>
        </div>
    </section>

    <div class='textContent' id='successMessage' active='false'>
        <div id='closeSuccessMessage'>X</div>
        <h3>Your order has been received</h3>
        <p>You can check the status of your order by using our order status feature. you will receive an order confirmation e-mail with the detail of your order and a link to track its progress.</p>
        <div class='popupButtonsDiv'>
            <div class='buttonBorder'><button class='button2 secondaryButton' id='viewOrder'>View Order</button></div>
            <button class='button2' id='toShopping'>Continue Shopping</button>
        </div>
    </div>

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
    <script type='module' src='src/checkout.js'></script>
    <script src="https://unpkg.com/imask"></script>
</body>