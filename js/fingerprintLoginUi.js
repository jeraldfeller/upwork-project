/* only include this script on login pages in native app that support fingerprint login */

// <![CDATA[
// UI for PhotoTransfer
// does not know application logic and native integration - uses segregated DOM to separate DOM handling from application logic
// using prototype.js
var FingerprintLoginUI = {
	showAppIntegration: function (processFunction) {
		FingerprintLoginUI.enableFingerprintSupport();
		processFunction();
	},
	enableFingerprintSupport: function () {
		$("updateFingerprintToken").setValue(true);
	},
	fillForm: function (credentials) {
		$("branch").setValue(credentials.branch);
		$("account").setValue(credentials.account);
		$("subAccount").setValue(credentials.subaccount);
		$("updateFingerprintToken").setValue(true);
	},
	fillFormAndSubmit: function (credentials) {
    	$("branch").setValue(credentials.branch);
		$("account").setValue(credentials.account);
		$("subAccount").setValue(credentials.subaccount);
		$("fingerprintToken").setValue(credentials.fingerprintToken);
		$("fingerprintTokenVersion").setValue(credentials.fingerprintTokenVersion);
		$("updateFingerprintToken").setValue(true);
        $("loginForm").submit();
    },
	submitForm: function () {
		$("loginForm").submit();
	},
	clearForm: function () {
		$("branch").setValue("");
		$("account").setValue("");
		$("subAccount").setValue("00");
		$("fingerprintToken").setValue("");
		$("fingerprintTokenVersion").setValue("");
		$("updateFingerprintToken").setValue(true);
	}
};