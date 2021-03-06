<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/register.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/icon.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/mall-home.css">

</head>
<body onpageshow="popup()">
<header>
    <div class="logo-home">
        <a href="./index.html"><img src="./image/mall-logo.jpg" alt="shopping cart creative"></a>
    </div>
    <div id="topnav">
        <nav>
            <ul>
                <li><a href="order.html">ORDERS</a></li>
                <li><a href="contacts.html">CONTACTS</a></li>
                <li><a href="faqs.html">FAQS</a></li>
                <li class="dropdown">
                    <a class="dropbutton">BROWSE</a>
                    <div class="drop-content">
                        <a href="browse_name.html">Browse Stores by Names</a>
                        <a href="browse_cat.html">Browse Stores by Category </a>
                    </div>
                </li>
                <li><a href="login.html">MY ACCOUNT</a></li>
                <li><a href="fees.html">FEES</a></li>
                <li><a href="aboutus.html">ABOUT US</a></li>
                <li><a href="index.html">HOME</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <header>
        <h1>ACCOUNT REGISTRATION</h1>
    </header>
    <p>Create your account here!</p>
    <section>
    <form id="register" method='post' action="register.php">
        <label for="mail">E-Mail Address:</label><br>
        <input type="email" id="mail" name="mail"><br>
        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone"><br>
        <label for="pswd">Password:</label><br>
        <input type="password" id="pswd" name="pswd"><br>
        <label for="pswd-con">Re-type Password:</label><br>
        <input type="password" id="pswd-con" name="pswd-con"><br>
        <label for="pic">Upload a Profile Picture:</label><br>
        <input type="file" id="pic" name="pic"><br>
        <label for="name_first">First Name:</label><br>
        <input type="text" id="name_first" name="name_first"><br>
        <label for="name_last">Last Name Name:</label><br>
        <input type="text" id="name_last" name="name_last"><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>
        <label for="city">City:</label><br>
        <input type="text" id="city" name="city"><br>
        <label for="zip">Zip Code:</label><br>
        <input type="number" id="zip" name="zip"><br>

        <label for="country">Country:</label><br>
        <select name="country" id="country">
            <option value="af">Afghanistan</option>
                <option value="ax">??land Islands</option>
                <option value="al">Albania</option>
                <option value="dz">Algeria</option>
                <option value="as">American Samoa</option>
                <option value="ad">Andorra</option>
                <option value="ao">Angola</option>
                <option value="ai">Anguilla</option>
                <option value="aq">Antarctica</option>
                <option value="ag">Antigua and Barduda</option>
                <option value="ar">Argentina</option>
                <option value="am">Armenia</option>
                <option value="aw">Aruba</option>
                <option value="au">Australia</option>
                <option value="at">Austria</option>
                <option value="az">Azerbaijan</option>
                <option value="bh">Bahrain</option>
                <option value="bs">Bahamas</option>
                <option value="bd">Bangladesh</option>
                <option value="bb">Barbados</option>
                <option value="by">Belarus</option>
                <option value="be">Belgium</option>
                <option value="bz">Belize</option>
                <option value="bj">Benin</option>
                <option value="bm">Bermuda</option>
                <option value="bt">Bhutan</option>
                <option value="bo">Bolivia, Plurinational State of</option>
                <option value="bq">Bonaire, Sint Eustatius and Saba</option>
                <option value="ba">Bosnia and Herzegovina</option>
                <option value="bw">Botswana</option>
                <option value="bv">Bouvet Island</option>
                <option value="br">Brazil</option>
                <option value="io">British Indian Ocean Territory</option>
                <option value="bn">Brunei Darussalam</option>
                <option value="bg">Bulgaria</option>
                <option value="bf">Burkina Faso</option>
                <option value="bi">Burundi</option>
                <option value="kh">Cambodia</option>
                <option value="cm">Cameroon</option>
                <option value="ca">Canada</option>
                <option value="cv">Cape Verde</option>
                <option value="ky">Cayman Island</option>
                <option value="cf">Central African Republic</option>
                <option value="td">Chad</option>
                <option value="cl">Chile</option>
                <option value="cn">China</option>
                <option value="cx">Christmas Island</option>
                <option value="cc">Cocos (Keeling) Island</option>
                <option value="co">Colombia</option>
                <option value="km">Comoros</option>
                <option value="cg">Congo</option>
                <option value="cd">Congo, the Democratic Republic of the</option>
                <option value="ck">Cook Islands</option>
                <option value="cr">Costa Rica</option>
                <option value="ci">C??te d'lvoire</option>
                <option value="hr">Croatia</option>
                <option value="cu">Cuba</option>
                <option value="cw">Cura??ao</option>
                <option value="cy">Cyprus</option>
                <option value="cz">Czech Republic</option>
                <option value="dk">Denmark</option>
                <option value="dj">Djibouti</option>
                <option value="dm">Dominica</option>
                <option value="do">Dominican Republic</option>
                <option value="ec">Ecuador</option>
                <option value="eg">Egypt</option>
                <option value="sv">El Salvador</option>
                <option value="gq">Equatorial Guinea</option>
                <option value="er">Eritrea</option>
                <option value="ee">Estonia</option>
                <option value="et">Ethiopia</option>
                <option value="fk">Falkland Islands (Malvinas)</option>
                <option value="fo">Faroe Islands</option>
                <option value="fj">Fiji</option>
                <option value="fi">Finland</option>
                <option value="fr">France</option>
                <option value="gf">French Guiana</option>
                <option value="pf">French Polynesia</option>
                <option value="tf">French Southern Territories</option>
                <option value="ga">Gabon</option>
                <option value="gm">Gambia</option>
                <option value="ge">Georgia</option>
                <option value="de">Germany</option>
                <option value="gh">Ghana</option>
                <option value="gi">Gibraltar</option>
                <option value="gr">Greece</option>
                <option value="gl">Greenland</option>
                <option value="gd">Grenada</option>
                <option value="gp">Guadeloupe</option>
                <option value="gu">Guam</option>
                <option value="gt">Guatemala</option>
                <option value="gg">Guernsey</option>
                <option value="gn">Guinea</option>
                <option value="gw">Guinea-Bissau</option>
                <option value="gy">Guyana</option>
                <option value="ht">Haiti</option>
                <option value="hm">Heard Island and McDonald Islands</option>
                <option value="va">Holy See (Vatican City State)</option>
                <option value="hn">Honduras</option>
                <option value="hk">Hong Kong</option>
                <option value="hu">Hungary</option>
                <option value="is">Iceland</option>
                <option value="in">India</option>
                <option value="id">Indonesia</option>
                <option value="ir">Iran, Islamic Republic of</option>
                <option value="iq">Iraq</option>
                <option value="ie">Ireland</option>
                <option value="im">Isle of Man</option>
                <option value="il">Israel</option>
                <option value="it">Italy</option>
                <option value="jm">Jamaica</option>
                <option value="jp">Japan</option>
                <option value="je">Jersey</option>
                <option value="jo">Jordan</option>
                <option value="kz">Kazakhstan</option>
                <option value="ke">Kenya</option>
                <option value="ki">Kiribati</option>
                <option value="kp">Korea, Democratic People's Republic of</option>
                <option value="kr">Korea, Republic of</option>
                <option value="kw">Kuwait</option>
                <option value="kg">Kyrgyzstan</option>
                <option value="la">Lao People's Democratic Republic</option>
                <option value="lv">Latvia</option>
                <option value="lb">Lebanon</option>
                <option value="ls">Lesotho</option>
                <option value="lr">Liberia</option>
                <option value="ly">Libya</option>
                <option value="li">Liechtenstein</option>
                <option value="lt">Lithuania</option>
                <option value="lu">Luxembourg</option>
                <option value="mo">Macao</option>
                <option value="mk">Macedonia, the Former Yugoslav Republic of</option>
                <option value="mg">Madagascar</option>
                <option value="mw">Malawi</option>
                <option value="my">Malaysia</option>
                <option value="mv">Maldives</option>
                <option value="ml">Mali</option>
                <option value="mt">Malta</option>
                <option value="mh">Marshall Islands</option>
                <option value="mq">Martinique</option>
                <option value="mr">Mauritania</option>
                <option value="mu">Mauritius</option>
                <option value="yt">Mayotte</option>
                <option value="mx">Mexico</option>
                <option value="fm">Micronesia, Federated States of</option>
                <option value="md">Moldova, Republic of</option>
                <option value="mc">Monaco</option>
                <option value="mn">Mongolia</option>
                <option value="me">Montenegro</option>
                <option value="ms">Montserrat</option>
                <option value="ma">Morocco</option>
                <option value="mz">Mozambique</option>
                <option value="mm">Myanmar</option>
                <option value="na">Namibia</option>
                <option value="nr">Nauru</option>
                <option value="np">Nepal</option>
                <option value="nl">Netherlands</option>
                <option value="nc">New Caledonia</option>
                <option value="nz">New Zealand</option>
                <option value="ni">Nicaragua</option>
                <option value="ne">Niger</option>
                <option value="ng">Nigeria</option>
                <option value="nu">Niue</option>
                <option value="nf">Norfolk Island</option>
                <option value="mp">Northern Mariana Islands</option>
                <option value="no">Norway</option>
                <option value="om">Oman</option>
                <option value="pk">Pakistan</option>
                <option value="pw">Palau</option>
                <option value="ps">Palestine, State of</option>
                <option value="pa">Panama</option>
                <option value="pg">Papua New Guinea</option>
                <option value="py">Paraguay</option>
                <option value="pe">Peru</option>
                <option value="ph">Philippines</option>
                <option value="pn">Pitcairn</option>
                <option value="pl">Poland</option>
                <option value="pt">Portugal</option>
                <option value="pr">Puerto Rico</option>
                <option value="qa">Qatar</option>
                <option value="re">R??union</option>
                <option value="ro">Romania</option>
                <option value="ru">Russian Federation</option>
                <option value="rw">Rwanda</option>
                <option value="bl">Saint Barth??lemy</option>
                <option value="sh">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="kn">Saint Kitts and Nevis</option>
                <option value="lc">Saint Lucia</option>
                <option value="mf">Saint Martin (French part)</option>
                <option value="pm">Saint Pierre and Miquelon</option>
                <option value="vc">Saint Vincent and the Grenadines</option>
                <option value="ws">Samoa</option>
                <option value="sm">Sao Tome and Principe</option>
                <option value="sa">Saudi Arabia</option>
                <option value="sn">Senegal</option>
                <option value="rs">Serbia</option>
                <option value="sc">Seychelles</option>
                <option value="sl">Sierra Leone</option>
                <option value="sg">Singapore</option>
                <option value="sx">Sint Maarten (Dutch part)</option>
                <option value="sk">Slovakia</option>
                <option value="si">Slovenia</option>
                <option value="sb">Solomon Islands</option>
                <option value="so">Somalia</option>
                <option value="za">South Africa</option>
                <option value="gs">South Georgia and South Sandwich Islands</option>
                <option value="ss">South Sudan</option>
                <option value="es">Spain</option>
                <option value="lk">Sri Lanka</option>
                <option value="sd">Sudan</option>
                <option value="sr">Suriname</option>
                <option value="sj">Svalbard and Jan Mayen</option>
                <option value="sz">Swaziland</option>
                <option value="se">Sweden</option>
                <option value="ch">Switzerland</option>
                <option value="sy">Syrian Arab Republic</option>
                <option value="tw">Taiwan, Province of China</option>
                <option value="tj">Tajikistan</option>
                <option value="tz">Tanzania, United Republic of</option>
                <option value="th">Thailand</option>
                <option value="tl">Timor-Leste</option>
                <option value="tg">Togo</option>
                <option value="tk">Tokelau</option>
                <option value="to">Tonga</option>
                <option value="tt">Trinidad and Tobago</option>
                <option value="tn">Tunisia</option>
                <option value="tr">Turkey</option>
                <option value="tm">Turkmenistan</option>
                <option value="tc">Turks and Caicos Islands</option>
                <option value="tv">Tuvalu</option>
                <option value="ug">Uganda</option>
                <option value="ua">Ukraine</option>
                <option value="ae">United Arab Emirates</option>
                <option value="gb">United Kingdom</option>
                <option value="us">United States</option>
                <option value="um">United States Minor Outlying Islands</option>
                <option value="uy">Uruguay</option>
                <option value="uz">Uzbekistan</option>
                <option value="vu">Vanuatu</option>
                <option value="ve">Venezuela, Bolivarian republic of</option>
                <option value="vn">Vietnam</option>
                <option value="vg">Virgin Islands, British</option>
                <option value="vi">Virgin Islands, U.S.</option>
                <option value="wf">Wallis and Futuna</option>
                <option value="eh">Western Sahara</option>
                <option value="ye">Yemen</option>
                <option value="zm">Zambia</option>
                <option value="zw">Zimbabwe</option>
            </select><br>
    </form>
    <button type="reset" form="register" value="reset">Clear</button>
    <button type="Submit" form="register" value="submit">Submit</button>
</section>
</main>

<div id="botnav">
    <nav>
        <ul>
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="tos.html">Terms of Service</a></li>
            <li><a href="copyright.html">Copyright</a></li>
        </ul>
    </nav>
</div>
<div id="consentPopup" class="hidden">
    <p>This site uses cookies to improve the user experience. By clicking
        here you accept cookies placed by our site.</p> <a id="accept" href="#">Learn More</a>
    <button onclick="consent()">I Consent</button>
</div>
</body>
</html>
<script src="app.js"></script>
<script src="./Assist/register.js"></script>

<?php
	//start input form elements
	
	//suppress error reporting 
	error_reporting(E_ERROR | E_PARSE);
	
	//take input and create array
	$keys = array("mail", "phone", "pswd", "name_first", "name_last", "address", "city", "zip", "country");
	
	//change array reference to csv_line
	$csv_line = $keys;
	// for each item ($key) in the array
	foreach($keys as $key){
		//push the posted value of each key into the end of the array
		array_push($csv_line,'' . $_POST[$key]);
	}
	// declare the .csv
	$fname = 'user.csv';
	//set up implode array to comma seperated single-element
	$csv_line = implode(',',$csv_line);
	//if the csv file does not exist, set indicator to the beginning of a new line
	$csv_line = $csv_line . "\r\n"  ;
	//define open file and append
	$fcon = fopen($fname, 'a');
	//define content as above
	$fcontent = $csv_line;
	//append content
	fwrite($fcon,$csv_line);
	//close
	fclose($fcon);
?>
