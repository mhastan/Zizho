<?php


echo <<<EOF
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ZiZho - Register </title>
<link rel="stylesheet" href="../css/registerStyle.css">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/headerStyle.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/mdb.min.css">
<link rel="stylesheet" href="../css/headerStyle.css">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/mdb.min.js"></script>

<style>

label{
  user-select: none;
}
input[type="radio"] {
  display: none;
}

input[type="radio"] + label {
  z-index: 10;
  margin: 0 10px 10px 0;
  position: relative;
  color: #ced4da;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
  font-weight: bold;
  background-color: #ffffff;
  border: 2px solid #ced4da;
  cursor: pointer;
  transition: all 200ms ease;
}

input[type="radio"]:checked + label {
  color: #495057;
  background-color: #ced4da;
}

input[type="radio"] + label {
  padding: 5px 20px;
  border-radius: 10px;
}


</style>

<title> ZiZho - Register </title>

</head>

<body style="background-color: #f8f9fa;">
<form method="POST">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://freeiconshop.com/wp-content/uploads/edd/heart-outline-filled.png" alt=""/>
                        <h3 id="Heading-Text">ZiZho</h3>
                        <p style="font-style: italic;"> "The quiz that wil connecting your interests and feelings!" </p>
                        
                        <a href="/login">
                            <input type="button" name="" value="Login"/><br/>
                        </a>

                        </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified">
                        <!--   
                        <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        -->
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading"> Maak een account</h3>
                                <div class="row register-form">
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Voornaam *" value="" name="Voornaam" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Achternaam *" value="" name="Achternaam" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Wachtwoord *" value="" name="Wachtwoord" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Bevestig Wachtwoord *" value="" name="Wachtwoord1" required/>
                                        </div>
                                        <div class="form-group">

                                            <input type='radio' id='male' checked='checked' name='gender' value='man'>
                                            <label for='male' name="gender">Male</label>
                                            <input type='radio' id='female' name='gender' value='vrouw'>
                                            <label for='female' name="gender">Female</label>
                
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email Address *" value="" name="email" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" class="form-control" placeholder="Telefoonnummer *" value="" name="txtEmpPhone" required/>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Alias (optioneel) " value="" name="Alias" /> 
                                        </div>


                                        <div class="form-group">
                                        <select class="form-control" name="nationality" required>
                                            <option value="AFGHAN">AFGHAN</option>
                                            <option value="ALBANIAN">ALBANIAN</option>
                                            <option value="ALGERIAN">ALGERIAN</option>
                                            <option value="AMERICAN">AMERICAN</option>
                                            <option value="ANDORRAN">ANDORRAN</option>
                                            <option value="ANGOLAN">ANGOLAN</option>
                                            <option value="ANTIGUANS">ANTIGUANS</option>
                                            <option value="ARGENTINEAN">ARGENTINEAN</option>
                                            <option value="ARMENIAN">ARMENIAN</option>
                                            <option value="AUSTRALIAN">AUSTRALIAN</option>
                                            <option value="AUSTRIAN">AUSTRIAN</option>
                                            <option value="AZERBAIJANI">AZERBAIJANI</option>
                                            <option value="BAHAMIAN">BAHAMIAN</option>
                                            <option value="BAHRAINI">BAHRAINI</option>
                                            <option value="BANGLADESHI">BANGLADESHI</option>
                                            <option value="BARBADIAN">BARBADIAN</option>
                                            <option value="BARBUDANS">BARBUDANS</option>
                                            <option value="BATSWANA">BATSWANA</option>
                                            <option value="BELARUSIAN">BELARUSIAN</option>
                                            <option value="BELGIAN">BELGIAN</option>
                                            <option value="BELIZEAN">BELIZEAN</option>
                                            <option value="BENINESE">BENINESE</option>
                                            <option value="BHUTANESE">BHUTANESE</option>
                                            <option value="BOLIVIAN">BOLIVIAN</option>
                                            <option value="BOSNIAN">BOSNIAN</option>
                                            <option value="BRAZILIAN">BRAZILIAN</option>
                                            <option value="BRITISH">BRITISH</option>
                                            <option value="BRUNEIAN">BRUNEIAN</option>
                                            <option value="BULGARIAN">BULGARIAN</option>
                                            <option value="BURKINABE">BURKINABE</option>
                                            <option value="BURMESE">BURMESE</option>
                                            <option value="BURUNDIAN">BURUNDIAN</option>
                                            <option value="CAMBODIAN">CAMBODIAN</option>
                                            <option value="CAMEROONIAN">CAMEROONIAN</option>
                                            <option value="CANADIAN">CANADIAN</option>
                                            <option value="CAPE VERDEAN">CAPE VERDEAN</option>
                                            <option value="CENTRAL AFRICAN">CENTRAL AFRICAN</option>
                                            <option value="CHADIAN">CHADIAN</option>
                                            <option value="CHILEAN">CHILEAN</option>
                                            <option value="CHINESE">CHINESE</option>
                                            <option value="COLOMBIAN">COLOMBIAN</option>
                                            <option value="COMORAN">COMORAN</option>
                                            <option value="CONGOLESE">CONGOLESE</option>
                                            <option value="COSTA RICAN">COSTA RICAN</option>
                                            <option value="CROATIAN">CROATIAN</option>
                                            <option value="CUBAN">CUBAN</option>
                                            <option value="CYPRIOT">CYPRIOT</option>
                                            <option value="CZECH">CZECH</option>
                                            <option value="DANISH">DANISH</option>
                                            <option value="DJIBOUTI">DJIBOUTI</option>
                                            <option value="DOMINICAN">DOMINICAN</option>
                                            <option value="DUTCH" selected>DUTCH</option>
                                            <option value="EAST TIMORESE">EAST TIMORESE</option>
                                            <option value="ECUADOREAN">ECUADOREAN</option>
                                            <option value="EGYPTIAN">EGYPTIAN</option>
                                            <option value="EMIRIAN">EMIRIAN</option>
                                            <option value="EQUATORIAL GUINEAN">EQUATORIAL GUINEAN
                                            </option>
                                            <option value="ERITREAN">ERITREAN</option>
                                            <option value="ESTONIAN">ESTONIAN</option>
                                            <option value="ETHIOPIAN">ETHIOPIAN</option>
                                            <option value="FIJIAN">FIJIAN</option>
                                            <option value="FILIPINO">FILIPINO</option>
                                            <option value="FINNISH">FINNISH</option>
                                            <option value="FRENCH">FRENCH</option>
                                            <option value="GABONESE">GABONESE</option>
                                            <option value="GAMBIAN">GAMBIAN</option>
                                            <option value="GEORGIAN">GEORGIAN</option>
                                            <option value="GERMAN">GERMAN</option>
                                            <option value="GHANAIAN">GHANAIAN</option>
                                            <option value="GREEK">GREEK</option>
                                            <option value="GRENADIAN">GRENADIAN</option>
                                            <option value="GUATEMALAN">GUATEMALAN</option>
                                            <option value="GUINEA-BISSAUAN">GUINEA-BISSAUAN</option>
                                            <option value="GUINEAN">GUINEAN</option>
                                            <option value="GUYANESE">GUYANESE</option>
                                            <option value="HAITIAN">HAITIAN</option>
                                            <option value="HERZEGOVINIAN">HERZEGOVINIAN</option>
                                            <option value="HONDURAN">HONDURAN</option>
                                            <option value="HUNGARIAN">HUNGARIAN</option>
                                            <option value="ICELANDER">ICELANDER</option>
                                            <option value="INDIAN">INDIAN</option>
                                            <option value="INDONESIAN">INDONESIAN</option>
                                            <option value="IRANIAN">IRANIAN</option>
                                            <option value="IRAQI">IRAQI</option>
                                            <option value="IRISH">IRISH</option>
                                            <option value="ISRAESLI">ISRAELI</option>
                                            <option value="ITALIAN">ITALIAN</option>
                                            <option value="IVORIAN">IVORIAN</option>
                                            <option value="JAMAICAN">JAMAICAN</option>
                                            <option value="JAPANESE">JAPANESE</option>
                                            <option value="JORDANIAN">JORDANIAN</option>
                                            <option value="KAZAKHSTANI">KAZAKHSTANI</option>
                                            <option value="KENYAN">KENYAN</option>
                                            <option value="KITTIAN AND NEVISIAN">KITTIAN AND NEVISIAN
                                            </option>
                                            <option value="KUWAITI">KUWAITI</option>
                                            <option value="KYRGYZ">KYRGYZ</option>
                                            <option value="LAOTIAN">LAOTIAN</option>
                                            <option value="LATVIAN">LATVIAN</option>
                                            <option value="LEBANESE">LEBANESE</option>
                                            <option value="LIBERIAN">LIBERIAN</option>
                                            <option value="LIBYAN">LIBYAN</option>
                                            <option value="LIECHTENSTEINER">LIECHTENSTEINER</option>
                                            <option value="LITHUANIAN">LITHUANIAN</option>
                                            <option value="LUXEMBOURGER">LUXEMBOURGER</option>
                                            <option value="MACEDONIAN">MACEDONIAN</option>
                                            <option value="MALAGASY">MALAGASY</option>
                                            <option value="MALAWIAN">MALAWIAN</option>
                                            <option value="MALAYSIAN">MALAYSIAN</option>
                                            <option value="MALDIVAN">MALDIVAN</option>
                                            <option value="MALIAN">MALIAN</option>
                                            <option value="MALTESE">MALTESE</option>
                                            <option value="MARSHALLESE">MARSHALLESE</option>
                                            <option value="MAURITANIAN">MAURITANIAN</option>
                                            <option value="MAURITIAN">MAURITIAN</option>
                                            <option value="MEXICAN">MEXICAN</option>
                                            <option value="MICRONESIAN">MICRONESIAN</option>
                                            <option value="MOLDOVAN">MOLDOVAN</option>
                                            <option value="MONACAN">MONACAN</option>
                                            <option value="MONGOLIAN">MONGOLIAN</option>
                                            <option value="MOROCCAN">MOROCCAN</option>
                                            <option value="MOSOTHO">MOSOTHO</option>
                                            <option value="MOTSWANA">MOTSWANA</option>
                                            <option value="MOZAMBICAN">MOZAMBICAN</option>
                                            <option value="NAMIBIAN">NAMIBIAN</option>
                                            <option value="NAURUAN">NAURUAN</option>
                                            <option value="NEPALESE">NEPALESE</option>
                                            <option value="NEW ZEALANDER">NEW ZEALANDER</option>
                                            <option value="NI-VANUATU">NI-VANUATU</option>
                                            <option value="NICARAGUAN">NICARAGUAN</option>
                                            <option value="NIGERIEN">NIGERIEN</option>
                                            <option value="NORTH KOREAN">NORTH KOREAN</option>
                                            <option value="NORTHERN IRISH">NORTHERN IRISH</option>
                                            <option value="NORWEGIAN">NORWEGIAN</option>
                                            <option value="OMANI">OMANI</option>
                                            <option value="PAKISTANI">PAKISTANI</option>
                                            <option value="PALAUAN">PALAUAN</option>
                                            <option value="PANAMANIAN">PANAMANIAN</option>
                                            <option value="PAPUA NEW GUINEAN">PAPUA NEW GUINEAN</option>
                                            <option value="PARAGUAYAN">PARAGUAYAN</option>
                                            <option value="PERUVIAN">PERUVIAN</option>
                                            <option value="POLISH">POLISH</option>
                                            <option value="PORTUGUESE">PORTUGUESE</option>
                                            <option value="QATARI">QATARI</option>
                                            <option value="ROMANIAN">ROMANIAN</option>
                                            <option value="RUSSIAN">RUSSIAN</option>
                                            <option value="RWANDAN">RWANDAN</option>
                                            <option value="SAINT LUCIAN">SAINT LUCIAN</option>
                                            <option value="SALVADORAN">SALVADORAN</option>
                                            <option value="SAMOAN">SAMOAN</option>
                                            <option value="SAN MARINESE">SAN MARINESE</option>
                                            <option value="SAO TOMEAN">SAO TOMEAN</option>
                                            <option value="SAUDI">SAUDI</option>
                                            <option value="SCOTTISH">SCOTTISH</option>
                                            <option value="SENEGALESE">SENEGALESE</option>
                                            <option value="SERBIAN">SERBIAN</option>
                                            <option value="SEYCHELLOIS">SEYCHELLOIS</option>
                                            <option value="SIERRA LEONEAN">SIERRA LEONEAN</option>
                                            <option value="SINGAPOREAN">SINGAPOREAN</option>
                                            <option value="SLOVAKIAN">SLOVAKIAN</option>
                                            <option value="SLOVENIAN">SLOVENIAN</option>
                                            <option value="SOLOMON ISLANDER">SOLOMON ISLANDER</option>
                                            <option value="SOMALI">SOMALI</option>
                                            <option value="SOUTH AFRICAN">SOUTH AFRICAN</option>
                                            <option value="SOUTH KOREAN">SOUTH KOREAN</option>
                                            <option value="SPANISH">SPANISH</option>
                                            <option value="SRI LANKAN">SRI LANKAN</option>
                                            <option value="SUDANESE">SUDANESE</option>
                                            <option value="SURINAMER">SURINAMER</option>
                                            <option value="SWAZI">SWAZI</option>
                                            <option value="SWEDISH">SWEDISH</option>
                                            <option value="SWISS">SWISS</option>
                                            <option value="SYRIAN">SYRIAN</option>
                                            <option value="TAIWANESE">TAIWANESE</option>
                                            <option value="TAJIK">TAJIK</option>
                                            <option value="TANZANIAN">TANZANIAN</option>
                                            <option value="THAI">THAI</option>
                                            <option value="TOGOLESE">TOGOLESE</option>
                                            <option value="TONGAN">TONGAN</option>
                                            <option value="TRINIDADIAN OR TOBAGONIAN">TRINIDADIAN OR
                                                TOBAGONIAN</option>
                                            <option value="TUNISIAN">TUNISIAN</option>
                                            <option value="TURKISH">TURKISH</option>
                                            <option value="TUVALUAN">TUVALUAN</option>
                                            <option value="UGANDAN">UGANDAN</option>
                                            <option value="UKRAINIAN">UKRAINIAN</option>
                                            <option value="URUGUAYAN">URUGUAYAN</option>
                                            <option value="UZBEKISTANI">Uzbekistani</option>
                                            <option value="VENEZUELAN">VENEZUELAN</option>
                                            <option value="VIETNAMESE">VIETNAMESE</option>
                                            <option value="WELSH">WELSH</option>
                                            <option value="YEMENITE">YEMENITE</option>
                                            <option value="ZAMBIAN">ZAMBIAN</option>
                                            <option value="ZIMBABWEAN">ZIMBABWEAN</option>
                                        </select>
                                    </div>

                                  <input type="submit" class="btnRegister"  value="Register" name="RegisterSubmit"/>
                              </div>
                          </div>
                      </div>
            </div>
            </form>
</body>
</html>

EOF;

?>