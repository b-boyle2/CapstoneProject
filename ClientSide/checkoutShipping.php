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
        <h2>Shipping Information</h2>

        <div class="section">
                <form id="shippingInfoForm" class="checkoutForm">
                    <label for="countryRegion">Country/Region</label>
                    <select name="countryRegion" id="countryRegion">
                        <option value="1">Afghanistan</option>
                        <option value="2">Aland Islands</option>
                        <option value="3">Albania</option>
                        <option value="4">Algeria</option>
                        <option value="5">American Samoa</option>
                        <option value="6">Andorra</option>
                        <option value="7">Angola</option>
                        <option value="8">Anguilla</option>
                        <option value="9">Antarctica</option>
                        <option value="10">Antigua and Barbuda</option>
                        <option value="11">Argentina</option>
                        <option value="12">Armenia</option>
                        <option value="13">Aruba</option>
                        <option value="14">Australia</option>
                        <option value="15">Austria</option>
                        <option value="16">Azerbaijan</option>
                        <option value="17">Bahamas, The</option>
                        <option value="18">Bahrain</option>
                        <option value="19">Bangladesh</option>
                        <option value="20">Barbados</option>
                        <option value="21">Belarus</option>
                        <option value="22">Belgium</option>
                        <option value="23">Belize</option>
                        <option value="24">Benin</option>
                        <option value="25">Bermuda</option>
                        <option value="26">Bhutan</option>
                        <option value="27">Bolivia</option>
                        <option value="28">Bonaire, Saint Eustatius and Saba</option>
                        <option value="29">Bosnia and Herzegovina</option>
                        <option value="30">Botswana</option>
                        <option value="31">Bouvet Island</option>
                        <option value="32">Brazil</option>
                        <option value="33">British Indian Ocean Territory</option>
                        <option value="34">Brunei Darussalam</option>
                        <option value="35">Bulgaria</option>
                        <option value="36">Burkina Faso</option>
                        <option value="37">Burundi</option>
                        <option value="38">Cambodia</option>
                        <option value="39">Cameroon</option>
                        <option value="40">Canada</option>
                        <option value="41">Canary Islands</option>
                        <option value="42">Cape Verde</option>
                        <option value="43">Cayman Islands</option>
                        <option value="44">Central African Republic</option>
                        <option value="45">Chad</option>
                        <option value="46">Chile</option>
                        <option value="47">China</option>
                        <option value="48">Christmas Island</option>
                        <option value="49">Cocos (Keeling) Islands</option>
                        <option value="50">Colombia</option>
                        <option value="51">Comoros</option>
                        <option value="52">Congo</option>
                        <option value="53">Congo, The Democratic Republic of the</option>
                        <option value="54">Cook Islands</option>
                        <option value="55">Costa Rica</option>
                        <option value="56">Cote D'ivoire</option>
                        <option value="57">Croatia</option>
                        <option value="58">Curaçao</option>
                        <option value="59">Cyprus</option>
                        <option value="60">Czech Republic</option>
                        <option value="61">Denmark</option>
                        <option value="62">Djibouti</option>
                        <option value="63">Dominica</option>
                        <option value="64">Dominican Republic</option>
                        <option value="65">Ecuador</option>
                        <option value="66">Egypt</option>
                        <option value="67">El Salvador</option>
                        <option value="68">Equatorial Guinea</option>
                        <option value="69">Eritrea</option>
                        <option value="70">Estonia</option>
                        <option value="71">Ethiopia</option>
                        <option value="72">Falkland Islands (Malvinas)</option>
                        <option value="73">Faroe Islands</option>
                        <option value="74">Fiji</option>
                        <option value="75">Finland</option>
                        <option value="76">France</option>
                        <option value="77">French Guiana</option>
                        <option value="78">French Polynesia</option>
                        <option value="79">French Southern Territories</option>
                        <option value="80">Gabon</option>
                        <option value="81">Gambia, The</option>
                        <option value="82">Georgia</option>
                        <option value="83">Germany</option>
                        <option value="84">Ghana</option>
                        <option value="85">Gibraltar</option>
                        <option value="86">Greece</option>
                        <option value="87">Greenland</option>
                        <option value="88">Grenada</option>
                        <option value="89">Guadaloupe</option>
                        <option value="90">Guam</option>
                        <option value="91">Guatemala</option>
                        <option value="92">Guernsey</option>
                        <option value="93">Guinea</option>
                        <option value="94">Guinea-Bissau</option>
                        <option value="95">Guyana</option>
                        <option value="96">Haiti</option>
                        <option value="97">Heard Island and the McDonald Islands</option>
                        <option value="98">Holy See</option>
                        <option value="99">Honduras</option>
                        <option value="100">Hong Kong</option>
                        <option value="101">Hungary</option>
                        <option value="102">Iceland</option>
                        <option value="103">India</option>
                        <option value="104">Indonesia</option>
                        <option value="105">Iraq</option>
                        <option value="106">Ireland</option>
                        <option value="107">Isle of Man</option>
                        <option value="108">Israel</option>
                        <option value="109">Italy</option>
                        <option value="110">Jamaica</option>
                        <option value="111">Japan</option>
                        <option value="112">Jersey</option>
                        <option value="113">Jordan</option>
                        <option value="114">Kazakhstan</option>
                        <option value="115">Kenya</option>
                        <option value="116">Kiribati</option>
                        <option value="117">Kosovo</option>
                        <option value="118">Kuwait</option>
                        <option value="119">Kyrgyzstan</option>
                        <option value="120">Lao People's Democratic Republic</option>
                        <option value="121">Latvia</option>
                        <option value="122">Lebanon</option>
                        <option value="123">Lesotho</option>
                        <option value="124">Liberia</option>
                        <option value="125">Libya</option>
                        <option value="126">Liechtenstein</option>
                        <option value="127">Lithuania</option>
                        <option value="128">Luxembourg</option>
                        <option value="129">Macao</option>
                        <option value="130">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="131">Madagascar</option>
                        <option value="132">Malawi</option>
                        <option value="133">Malaysia</option>
                        <option value="134">Maldives</option>
                        <option value="135">Mali</option>
                        <option value="136">Malta</option>
                        <option value="137">Marshall Islands</option>
                        <option value="138">Martinique</option>
                        <option value="139">Mauritius</option>
                        <option value="140">Mayotte</option>
                        <option value="141">Mexico</option>
                        <option value="142">Micronesia, Federated States of</option>
                        <option value="143">Moldova, Republic of</option>
                        <option value="144">Monaco</option>
                        <option value="145">Mongolia</option>
                        <option value="146">Montenegro</option>
                        <option value="147">Montserrat</option>
                        <option value="148">Morocco</option>
                        <option value="149">Mozambique</option>
                        <option value="150">Myanmar</option>
                        <option value="151">Namibia</option>
                        <option value="152">Nauru</option>
                        <option value="153">Nepal</option>
                        <option value="154">Netherlands</option>
                        <option value="155">Netherlands Antilles</option>
                        <option value="156">New Caledonia</option>
                        <option value="157">New Zealand</option>
                        <option value="158">Nicaragua</option>
                        <option value="159">Niger</option>
                        <option value="160">Nigeria</option>
                        <option value="161">Niue</option>
                        <option value="162">Norfolk Island</option>
                        <option value="163">Northern Mariana Islands</option>
                        <option value="164">Norway</option>
                        <option value="165">Oman</option>
                        <option value="166">Pakistan</option>
                        <option value="167">Palau</option>
                        <option value="168">Palestinian Territories</option>
                        <option value="169">Panama</option>
                        <option value="170">Papua New Guinea</option>
                        <option value="171">Paraguay</option>
                        <option value="172">Peru</option>
                        <option value="173">Phillipines</option>
                        <option value="174">Pitcairn</option>
                        <option value="175">Poland</option>
                        <option value="176">Portugal</option>
                        <option value="177">Puerto Rico</option>
                        <option value="178">Qatar</option>
                        <option value="179">Republic of Korea</option>
                        <option value="180">Reunion</option>
                        <option value="181">Romania</option>
                        <option value="182">Russian Federation</option>
                        <option value="183">Rwanda</option>
                        <option value="184">Saint Barthelemy</option>
                        <option value="185">Saint Helena, Ascension and Tristan da Cunha</option>
                        <option value="186">Saint Kitts and Nevis</option>
                        <option value="187">Saint Lucia</option>
                        <option value="188">Saint Martin</option>
                        <option value="189">Saint Pierre and Miquelon</option>
                        <option value="190">Saint Vincent and the Grenadines</option>
                        <option value="191">Samoa</option>
                        <option value="192">San Marino</option>
                        <option value="193">Sao Tome and Principe</option>
                        <option value="194">Saudi Arabia</option>
                        <option value="195">Senegal</option>
                        <option value="196">Serbia</option>
                        <option value="197">Seychelles</option>
                        <option value="198">Sierra Leone</option>
                        <option value="199">Singapore</option>
                        <option value="200">Sint Maarten</option>
                        <option value="201">Slovakia</option>
                        <option value="202">Slovenia</option>
                        <option value="203">Solomon Islands</option>
                        <option value="204">Somalia</option>
                        <option value="205">South Africa</option>
                        <option value="206">South Georgia and the South Sandwich Islands</option>
                        <option value="207">Spain</option>
                        <option value="208">Sri Lanka</option>
                        <option value="209">Suriname</option>
                        <option value="210">Svalbard and Jan Mayen</option>
                        <option value="211">Swaziland</option>
                        <option value="212">Sweden</option>
                        <option value="213">Switzerland</option>
                        <option value="214">Taiwan</option>
                        <option value="215">Tajikistan</option>
                        <option value="216">Tanzania, United Republic of</option>
                        <option value="217">Thailand</option>
                        <option value="218">Timor-leste</option>
                        <option value="219">Togo</option>
                        <option value="220">Tokelau</option>
                        <option value="221">Tonga</option>
                        <option value="222">Trinidad and Tobago</option>
                        <option value="223">Tunisia</option>
                        <option value="224">Turkey</option>
                        <option value="225">Turkmenistan</option>
                        <option value="226">Turks and Caicos Islands</option>
                        <option value="227">Tuvalu</option>
                        <option value="228">Uganda</option>
                        <option value="229">Ukraine</option>
                        <option value="230">United Arab Emirates</option>
                        <option value="231">United Kingdom</option>
                        <option value="232">United States</option>
                        <option value="233">United States Minor Outlying Islands</option>
                        <option value="234">Uruguay</option>
                        <option value="235">Uzbekistan</option>
                        <option value="236">Vanuatu</option>
                        <option value="237">Venezuela</option>
                        <option value="238">Vietnam</option>
                        <option value="239">Virgin Islands, British</option>
                        <option value="240">Virgin Islands, U.S.</option>
                        <option value="241">Wallis Futuna</option>
                        <option value="242">Western Sahara</option>
                        <option value="243">Yemen</option>
                        <option value="244">Zambia</option>
                        <option value="245">Zimbabwe</option>
                        
                    </select>
                    
                    <label for="name">Full name (First and Last name)</label>
                    <input type="text" name="name" id="name" maxlength="255" required>

                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" name="phoneNumber" id="phoneNumber" maxlength="10" required>

                    <label>Address</label>
                    <input type="text" placeholder="Street address or P.O. Box" name="streetAddress" id="streetAddress" maxlength="255" required>
                    <input type="text" placeholder="Apt, suite, unit, building, floor, etc." name="aptAdress" id="aptAddress" maxlength="255" required>

                    <div>
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" maxlength="255" required>

                        <label for="state">State</label>
                        <select name="countryRegion" id="countryRegion">
                            <option value="1">Alabama</option>
                            <option value="2">Alaska</option>
                            <option value="3">American Samoa</option>
                            <option value="4">Arizona</option>
                            <option value="5">Arkansas</option>
                            <option value="6">California</option>
                            <option value="7">Colorado</option>
                            <option value="8">Connecticut</option>
                            <option value="9">Delaware</option>
                            <option value="10">District of Columbia</option>
                            <option value="11">Federated States of Micronesia</option>
                            <option value="12">Florida</option>
                            <option value="13">Georgia</option>
                            <option value="14">Guam</option>
                            <option value="15">Hawaii</option>
                            <option value="16">Idaho</option>
                            <option value="17">Illinois</option>
                            <option value="18">Indiana</option>
                            <option value="19">Iowa</option>
                            <option value="20">Kansas</option>
                            <option value="21">Kentucky</option>
                            <option value="22">Louisiana</option>
                            <option value="23">Maine</option>
                            <option value="24">Marshall Islands</option>
                            <option value="25">Maryland</option>
                            <option value="26">Massachusetts</option>
                            <option value="27">Michigan</option>
                            <option value="28">Minnesota</option>
                            <option value="29">Mississippi</option>
                            <option value="30">Missouri</option>
                            <option value="31">Montana</option>
                            <option value="32">Nebraksa</option>
                            <option value="33">Nevada</option>
                            <option value="34">New Hampshire</option>
                            <option value="35">New Jersey</option>
                            <option value="36">New Mexico</option>
                            <option value="37">New York</option>
                            <option value="38">North Carolina</option>
                            <option value="39">North Dakota</option>
                            <option value="40">Northern Mariana Islands</option>
                            <option value="41">Ohio</option>
                            <option value="42">Oklahoma</option>
                            <option value="43">Oregon</option>
                            <option value="44">Palau</option>
                            <option value="45">Pennsylvania</option>
                            <option value="46">Puerto Rico</option>
                            <option value="47">Rhode Island</option>
                            <option value="48">South Carolina</option>
                            <option value="49">South Dakota</option>
                            <option value="50">Tennessee</option>
                            <option value="51">Texas</option>
                            <option value="52">Utah</option>
                            <option value="53">Vermont</option>
                            <option value="54">Virgin Islands</option>
                            <option value="55">Virginia</option>
                            <option value="56">Washington</option>
                            <option value="57">West Virginia</option>
                            <option value="58">Wisconsin</option>
                            <option value="59">Wyoming</option>
                            <option value="60">Armed Forces - AA</option>
                            <option value="61">Armed Forces - AE</option>
                            <option value="62">Armed Forces - AP</option>
                        </select>

                        <label for="zipCode">ZIP Code</label>
                        <input type="text" name="zipCode" id="zipCode" maxlength="255" required>
                    </div>

                    <label for="saveAddress">Save shipping Address</label>
                    <input type="checkbox" name="saveAddress" id="saveAddress" maxlength="255" value="yes">

                    <input type="submit" value="Add Weapon" id="submit" class="submitButton">
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

    <script type='module' src='main.js'></script>
</body>