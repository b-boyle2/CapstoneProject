<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <meta name="page" content="shippingInfo">

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
        <h2>Shipping Information</h2>

        <div class="section">
                <form action="checkoutPayment.php" method="POST" id="shippingInfoForm" class="checkoutForm">
                    <div class="formItem">
                        <label for="countryRegion">Country/Region</label>
                        <select name="Country" id="countryRegion">
                            <option value="afghanistan">Afghanistan</option>
                                <option value="aland-islands">Aland Islands</option>
                                <option value="albania">Albania</option>
                                <option value="algeria">Algeria</option>
                                <option value="american-samoa">American Samoa</option>
                                <option value="andorra">Andorra</option>
                                <option value="angola">Angola</option>
                                <option value="anguilla">Anguilla</option>
                                <option value="antarctica">Antarctica</option>
                                <option value="antigua-and-barbuda">Antigua and Barbuda</option>
                                <option value="argentina">Argentina</option>
                                <option value="armenia">Armenia</option>
                                <option value="aruba">Aruba</option>
                                <option value="australia">Australia</option>
                                <option value="austria">Austria</option>
                                <option value="azerbaijan">Azerbaijan</option>
                                <option value="bahamas-the">Bahamas, The</option>
                                <option value="bahrain">Bahrain</option>
                                <option value="bangladesh">Bangladesh</option>
                                <option value="barbados">Barbados</option>
                                <option value="belarus">Belarus</option>
                                <option value="belgium">Belgium</option>
                                <option value="belize">Belize</option>
                                <option value="benin">Benin</option>
                                <option value="bermuda">Bermuda</option>
                                <option value="bhutan">Bhutan</option>
                                <option value="bolivia">Bolivia</option>
                                <option value="bonaire-saint-eustatius-and-saba">Bonaire, Saint Eustatius and Saba</option>
                                <option value="bosnia-and-herzegovina">Bosnia and Herzegovina</option>
                                <option value="botswana">Botswana</option>
                                <option value="bouvet-island">Bouvet Island</option>
                                <option value="brazil">Brazil</option>
                                <option value="british-indian-ocean-territory">British Indian Ocean Territory</option>
                                <option value="brunei-darussalam">Brunei Darussalam</option>
                                <option value="bulgaria">Bulgaria</option>
                                <option value="burkina-faso">Burkina Faso</option>
                                <option value="burundi">Burundi</option>
                                <option value="cambodia">Cambodia</option>
                                <option value="cameroon">Cameroon</option>
                                <option value="canada">Canada</option>
                                <option value="canary-islands">Canary Islands</option>
                                <option value="cape-verde">Cape Verde</option>
                                <option value="cayman-islands">Cayman Islands</option>
                                <option value="central-african-republic">Central African Republic</option>
                                <option value="chad">Chad</option>
                                <option value="chile">Chile</option>
                                <option value="china">China</option>
                                <option value="christmas-island">Christmas Island</option>
                                <option value="cocos-keeling-islands">Cocos (Keeling) Islands</option>
                                <option value="colombia">Colombia</option>
                                <option value="comoros">Comoros</option>
                                <option value="congo">Congo</option>
                                <option value="congo-the-democratic-republic-of-the">Congo, The Democratic Republic of the</option>
                                <option value="cook-islands">Cook Islands</option>
                                <option value="costa-rica">Costa Rica</option>
                                <option value="cote-d-ivoire">Cote D'ivoire</option>
                                <option value="croatia">Croatia</option>
                                <option value="curaçao">Curaçao</option>
                                <option value="cyprus">Cyprus</option>
                                <option value="czech-republic">Czech Republic</option>
                                <option value="denmark">Denmark</option>
                                <option value="djibouti">Djibouti</option>
                                <option value="dominica">Dominica</option>
                                <option value="dominican-republic">Dominican Republic</option>
                                <option value="ecuador">Ecuador</option>
                                <option value="egypt">Egypt</option>
                                <option value="el-salvador">El Salvador</option>
                                <option value="equatorial-guinea">Equatorial Guinea</option>
                                <option value="eritrea">Eritrea</option>
                                <option value="estonia">Estonia</option>
                                <option value="ethiopia">Ethiopia</option>
                                <option value="falkland-islands-malvinas">Falkland Islands (Malvinas)</option>
                                <option value="faroe-islands">Faroe Islands</option>
                                <option value="fiji">Fiji</option>
                                <option value="finland">Finland</option>
                                <option value="france">France</option>
                                <option value="french-guiana">French Guiana</option>
                                <option value="french-polynesia">French Polynesia</option>
                                <option value="french-southern-territories">French Southern Territories</option>
                                <option value="gabon">Gabon</option>
                                <option value="gambia-the">Gambia, The</option>
                                <option value="georgia">Georgia</option>
                                <option value="germany">Germany</option>
                                <option value="ghana">Ghana</option>
                                <option value="gibraltar">Gibraltar</option>
                                <option value="greece">Greece</option>
                                <option value="greenland">Greenland</option>
                                <option value="grenada">Grenada</option>
                                <option value="guadaloupe">Guadaloupe</option>
                                <option value="guam">Guam</option>
                                <option value="guatemala">Guatemala</option>
                                <option value="guernsey">Guernsey</option>
                                <option value="guinea">Guinea</option>
                                <option value="guinea-bissau">Guinea-Bissau</option>
                                <option value="guyana">Guyana</option>
                                <option value="haiti">Haiti</option>
                                <option value="heard-island-and-the-mcdonald-islands">Heard Island and the McDonald Islands</option>
                                <option value="holy-see">Holy See</option>
                                <option value="honduras">Honduras</option>
                                <option value="hong-kong">Hong Kong</option>
                                <option value="hungary">Hungary</option>
                                <option value="iceland">Iceland</option>
                                <option value="india">India</option>
                                <option value="indonesia">Indonesia</option>
                                <option value="iraq">Iraq</option>
                                <option value="ireland">Ireland</option>
                                <option value="isle-of-man">Isle of Man</option>
                                <option value="israel">Israel</option>
                                <option value="italy">Italy</option>
                                <option value="jamaica">Jamaica</option>
                                <option value="japan">Japan</option>
                                <option value="jersey">Jersey</option>
                                <option value="jordan">Jordan</option>
                                <option value="kazakhstan">Kazakhstan</option>
                                <option value="kenya">Kenya</option>
                                <option value="kiribati">Kiribati</option>
                                <option value="kosovo">Kosovo</option>
                                <option value="kuwait">Kuwait</option>
                                <option value="kyrgyzstan">Kyrgyzstan</option>
                                <option value="lao-peoples-democratic-republic">Lao People's Democratic Republic</option>
                                <option value="latvia">Latvia</option>
                                <option value="lebanon">Lebanon</option>
                                <option value="lesotho">Lesotho</option>
                                <option value="liberia">Liberia</option>
                                <option value="libya">Libya</option>
                                <option value="liechtenstein">Liechtenstein</option>
                                <option value="lithuania">Lithuania</option>
                                <option value="luxembourg">Luxembourg</option>
                                <option value="macao">Macao</option>
                                <option value="macedonia-the-former-yugoslav-republic-of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="madagascar">Madagascar</option>
                                <option value="malawi">Malawi</option>
                                <option value="malaysia">Malaysia</option>
                                <option value="maldives">Maldives</option>
                                <option value="mali">Mali</option>
                                <option value="malta">Malta</option>
                                <option value="marshall-islands">Marshall Islands</option>
                                <option value="martinique">Martinique</option>
                                <option value="mauritius">Mauritius</option>
                                <option value="mayotte">Mayotte</option>
                                <option value="mexico">Mexico</option>
                                <option value="micronesia-federated-states-of">Micronesia, Federated States of</option>
                                <option value="moldova-republic-of">Moldova, Republic of</option>
                                <option value="monaco">Monaco</option>
                                <option value="mongolia">Mongolia</option>
                                <option value="montenegro">Montenegro</option>
                                <option value="montserrat">Montserrat</option>
                                <option value="morocco">Morocco</option>
                                <option value="mozambique">Mozambique</option>
                                <option value="myanmar">Myanmar</option>
                                <option value="namibia">Namibia</option>
                                <option value="nauru">Nauru</option>
                                <option value="nepal">Nepal</option>
                                <option value="netherlands">Netherlands</option>
                                <option value="netherlands-antilles">Netherlands Antilles</option>
                                <option value="new-caledonia">New Caledonia</option>
                                <option value="new-zealand">New Zealand</option>
                                <option value="nicaragua">Nicaragua</option>
                                <option value="niger">Niger</option>
                                <option value="nigeria">Nigeria</option>
                                <option value="niue">Niue</option>
                                <option value="norfolk-island">Norfolk Island</option>
                                <option value="northern-mariana-islands">Northern Mariana Islands</option>
                                <option value="norway">Norway</option>
                                <option value="oman">Oman</option>
                                <option value="pakistan">Pakistan</option>
                                <option value="palau">Palau</option>
                                <option value="palestinian-territories">Palestinian Territories</option>
                                <option value="panama">Panama</option>
                                <option value="papua-new-guinea">Papua New Guinea</option>
                                <option value="paraguay">Paraguay</option>
                                <option value="peru">Peru</option>
                                <option value="philippines">Phillipines</option>
                                <option value="pitcairn">Pitcairn</option>
                                <option value="poland">Poland</option>
                                <option value="portugal">Portugal</option>
                                <option value="puerto-rico">Puerto Rico</option>
                                <option value="qatar">Qatar</option>
                                <option value="republic-of-korea">Republic of Korea</option>
                                <option value="reunion">Reunion</option>
                                <option value="romania">Romania</option>
                                <option value="russian-federation">Russian Federation</option>
                                <option value="rwanda">Rwanda</option>
                                <option value="saint-barthelemy">Saint Barthelemy</option>
                                <option value="saint-helena-ascension-and-tristan-da-cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="saint-kitts-and-nevis">Saint Kitts and Nevis</option>
                                <option value="saint-lucia">Saint Lucia</option>
                                <option value="saint-martin">Saint Martin</option>
                                <option value="saint-pierre-and-miquelon">Saint Pierre and Miquelon</option>
                                <option value="saint-vincent-and-the-grenadines">Saint Vincent and the Grenadines</option>
                                <option value="samoa">Samoa</option>
                                <option value="san-marino">San Marino</option>
                                <option value="sao-tome-and-principe">Sao Tome and Principe</option>
                                <option value="saudi-arabia">Saudi Arabia</option>
                                <option value="senegal">Senegal</option>
                                <option value="serbia">Serbia</option>
                                <option value="seychelles">Seychelles</option>
                                <option value="sierra-leone">Sierra Leone</option>
                                <option value="singapore">Singapore</option>
                                <option value="sint-maarten">Sint Maarten</option>
                                <option value="slovakia">Slovakia</option>
                                <option value="slovenia">Slovenia</option>
                                <option value="solomon-islands">Solomon Islands</option>
                                <option value="somalia">Somalia</option>
                                <option value="south-africa">South Africa</option>
                                <option value="south-georgia-and-the-south-sandwich-islands">South Georgia and the South Sandwich Islands</option>
                                <option value="spain">Spain</option>
                                <option value="sri-lanka">Sri Lanka</option>
                                <option value="suriname">Suriname</option>
                                <option value="svalbard-and-jan-mayen">Svalbard and Jan Mayen</option>
                                <option value="swaziland">Swaziland</option>
                                <option value="sweden">Sweden</option>
                                <option value="switzerland">Switzerland</option>
                                <option value="taiwan">Taiwan</option>
                                <option value="tajikistan">Tajikistan</option>
                                <option value="tanzania-united-republic-of">Tanzania, United Republic of</option>
                                <option value="thailand">Thailand</option>
                                <option value="timor-leste">Timor-leste</option>
                                <option value="togo">Togo</option>
                                <option value="tokelau">Tokelau</option>
                                <option value="tonga">Tonga</option>
                                <option value="trinidad-and-tobago">Trinidad and Tobago</option>
                                <option value="tunisia">Tunisia</option>
                                <option value="turkey">Turkey</option>
                                <option value="turkmenistan">Turkmenistan</option>
                                <option value="turks-and-caicos-islands">Turks and Caicos Islands</option>
                                <option value="tuvalu">Tuvalu</option>
                                <option value="uganda">Uganda</option>
                                <option value="ukraine">Ukraine</option>
                                <option value="united-arab-emirates">United Arab Emirates</option>
                                <option value="united-kingdom">United Kingdom</option>
                                <option value="united-states">United States</option>
                                <option value="united-states-minor-outlying-islands">United States Minor Outlying Islands</option>
                                <option value="uruguay">Uruguay</option>
                                <option value="uzbekistan">Uzbekistan</option>
                                <option value="vanuatu">Vanuatu</option>
                                <option value="venezuela">Venezuela</option>
                                <option value="vietnam">Vietnam</option>
                                <option value="virgin-islands-british">Virgin Islands, British</option>
                                <option value="virgin-islands-us">Virgin Islands, U.S.</option>
                                <option value="wallis-futuna">Wallis Futuna</option>
                                <option value="western-sahara">Western Sahara</option>
                                <option value="yemen">Yemen</option>
                                <option value="zambia">Zambia</option>
                                <option value="zimbabwe">Zimbabwe</option>
                        </select>
                    </div>

                    <div class="formItem">
                        <label for="name">Full name (First and Last name)</label>
                        <input type="text" name="Name" id="name" maxlength="255" required>
                    </div>

                    <div class="formItem">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="text" name="PhoneNum" id="phoneNumber" maxlength="20" required>
                    </div>

                    <div class="formItem">
                    Address
                        <input type="text" placeholder="Street address or P.O. Box" name="StreetAddress" id="streetAddress" maxlength="255" required>
                        <input type="text" placeholder="Apt, suite, unit, building, floor, etc." name="AptAddress" id="aptAddress" maxlength="255">
                    </div>

                    <div class="formSubsection">
                        <div class="formItemSub">
                            <label for="city">City</label>
                            <input type="text" name="City" id="city" maxlength="255" required>
                        </div>

                        <div class="formItemSub">
                            <label for="state">State</label>
                            <select name="State" id="state">
                                <option value="alabama">Alabama</option>
                                <option value="alaska">Alaska</option>
                                <option value="american-samoa">American Samoa</option>
                                <option value="arizona">Arizona</option>
                                <option value="arkansas">Arkansas</option>
                                <option value="california">California</option>
                                <option value="colorado">Colorado</option>
                                <option value="connecticut">Connecticut</option>
                                <option value="delaware">Delaware</option>
                                <option value="district-of-columbia">District of Columbia</option>
                                <option value="federated-states-of-micronesia">Federated States of Micronesia</option>
                                <option value="florida">Florida</option>
                                <option value="georgia">Georgia</option>
                                <option value="guam">Guam</option>
                                <option value="hawaii">Hawaii</option>
                                <option value="idaho">Idaho</option>
                                <option value="illinois">Illinois</option>
                                <option value="indiana">Indiana</option>
                                <option value="iowa">Iowa</option>
                                <option value="kansas">Kansas</option>
                                <option value="kentucky">Kentucky</option>
                                <option value="louisiana">Louisiana</option>
                                <option value="maine">Maine</option>
                                <option value="marshall-islands">Marshall Islands</option>
                                <option value="maryland">Maryland</option>
                                <option value="massachusetts">Massachusetts</option>
                                <option value="michigan">Michigan</option>
                                <option value="minnesota">Minnesota</option>
                                <option value="mississippi">Mississippi</option>
                                <option value="missouri">Missouri</option>
                                <option value="montana">Montana</option>
                                <option value="nebraksa">Nebraksa</option>
                                <option value="nevada">Nevada</option>
                                <option value="new-hampshire">New Hampshire</option>
                                <option value="new-jersey">New Jersey</option>
                                <option value="new-mexico">New Mexico</option>
                                <option value="new-york">New York</option>
                                <option value="north-carolina">North Carolina</option>
                                <option value="north-dakota">North Dakota</option>
                                <option value="northern-mariana-islands">Northern Mariana Islands</option>
                                <option value="ohio">Ohio</option>
                                <option value="oklahoma">Oklahoma</option>
                                <option value="oregon">Oregon</option>
                                <option value="palau">Palau</option>
                                <option value="pennsylvania">Pennsylvania</option>
                                <option value="puerto-rico">Puerto Rico</option>
                                <option value="rhode-island">Rhode Island</option>
                                <option value="south-carolina">South Carolina</option>
                                <option value="south-dakota">South Dakota</option>
                                <option value="tennessee">Tennessee</option>
                                <option value="texas">Texas</option>
                                <option value="utah">Utah</option>
                                <option value="vermont">Vermont</option>
                                <option value="virgin-islands">Virgin Islands</option>
                                <option value="virginia">Virginia</option>
                                <option value="washington">Washington</option>
                                <option value="west-virginia">West Virginia</option>
                                <option value="wisconsin">Wisconsin</option>
                                <option value="wyoming">Wyoming</option>
                                <option value="armed-forces-aa">Armed Forces - AA</option>
                                <option value="armed-forces-ae">Armed Forces - AE</option>
                                <option value="armed-forces-ap">Armed Forces - AP</option>
                            </select>
                        </div>

                        <div class="formItemSub">
                            <label for="zipCode">ZIP Code</label>
                            <input type="number" name="ZIP" id="zipCode" oninput="if(this.value.length > 5) this.value = this.value.slice(0,5);" required>
                        </div>
                    </div>

                    <div class="formCheckbox">
                        <input type="checkbox" name="saveAddress" id="saveAddress" maxlength="255" value="yes" class="checkBox">
                        <label for="saveAddress">Save shipping address</label>
                    </div>

                    <button type="submit" class="submitButton">Deliver to this address</button>
                </form>
                <p id="formMessage"></p>
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
    <script src="https://unpkg.com/imask"></script>
    <script type='module' src='.../checkout.js'></script>
</body>