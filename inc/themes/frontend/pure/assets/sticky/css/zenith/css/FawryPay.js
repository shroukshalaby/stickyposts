var serverAddress="https://atfawry.fawrystaging.com";
var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
var eventer = window[eventMethod];
var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
var productsJSON = "{}";

class FawryPay {
	constructor() {
	}

	static loadWidget() {	
		var div = document.createElement("div");
		div.innerHTML = '<iframe id="fawryPluginFrame" src="' + serverAddress +
			'/ECommercePlugin/plugin.jsp?lang=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.language)+
			'&merchant=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.merchantCode) +
			'&merchantRefNum=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.merchantRefNumber) +
			'&userName=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.customer.name) +
			'&mobile=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.customer.mobile) +
			'&email=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.customer.email) +
			'&customerId=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.customer.customerProfileId) +
			'&orderDesc=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.order.description) +
			'&orderExpiry=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.order.expiry) +
			'&signature=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.signature) +
			'&invoiceCode=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.invoiceCode) +
			'&visaCardOnly=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.visaCardOnly) +
			'&customerRegisteredAddress=' + encodeURIComponent(JSON.stringify(FawryPay.chargeRequest.customer.address )) +
			'&preferredShippingOption=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.preferredShippingOption) 	+
			'&deliveryTypeCode=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.deliveryTypeCode) 	+
			'&fawryFees=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.fawryFees) 	+
			'&shippingFees=' + FawryPay.undefinedOrNullToEmpty(FawryPay.chargeRequest.shippingFees) 	+
			'" style=" background-color:rgb(245,245,245);position: fixed; width: 100%;height: 100%;top: 0%;left: 0%;z-index: 999999;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#b2000000, endColorstr=#b2000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#b2000000, endColorstr=#b2000000)";" allowtransparency="false"  />';
		
	
		document.body.appendChild(div.childNodes[0]);
	}

	static checkoutJS(chargeRequest, successCallback, errorCallback) {
		FawryPay.chargeRequest = chargeRequest;
		FawryPay.successCallback = successCallback;
		FawryPay.errorCallback = errorCallback;
		FawryPay.loadWidget();		
	}

	static checkout(chargeRequest,successPageUrl,failerPageUrl) {
		FawryPay.chargeRequest = chargeRequest;
		FawryPay.successPageUrl = successPageUrl;
		FawryPay.failerPageUrl = failerPageUrl;
		FawryPay.loadWidget();
		 
	}
 
	static undefinedOrNullToEmpty(value)
	{
		if(typeof value === 'number')
			return value;
		else if (typeof value === "undefined" || value == null || value.toUpperCase() === "null".toUpperCase())
		{
			return '';
		}
		return value;
	}

}
 
// Listen to message from child window
eventer(messageEvent, function(e) {
	var key = e.message ? "message" : "data";
	var data = e[key];
	if (data == 'deleteFrame')
		deleteFrame();
	else if (data == 'getData')
		sendMessage();
	else if (data && data.func && data.func == 'paymentDoneCallbackFunction')
		success(data);
	else if (data && data.func && data.func == 'requestCanceldCallBack')
		failed(data);
// run function//
}, false);


function success(data) {
	var chargeResponse = {};
	chargeResponse.merchantRefNumber = FawryPay.chargeRequest.merchantRefNumber;
	chargeResponse.fawryRefNumber = data.billUploadBillAccNum;
	chargeResponse.paymentMethod = data.paymentMethod;
	chargeResponse.shippingOption= data.shippingOption;
	chargeResponse.signature = data.messageSignature;
	
	if(FawryPay.successCallback)
	{		
		FawryPay.successCallback(chargeResponse);
	}
	else
		window.location.href = FawryPay.successPageUrl+'?chargeResponse=' + JSON.stringify(chargeResponse);
}

function failed(data) {
	if(FawryPay.errorCallback)
		FawryPay.errorCallback(FawryPay.chargeRequest.merchantRefNumber);
	else
		window.location.href = FawryPay.failerPageUrl+'?merchantRefNum=' + FawryPay.chargeRequest.merchantRefNumber ;
}

function sendMessage() {
	var iframe = document.getElementById('fawryPluginFrame');
	iframe.contentWindow.postMessage(JSON.stringify(FawryPay.chargeRequest.order.orderItems), '*');
}

function deleteFrame() {
	var iframe = document.getElementById('fawryPluginFrame');
	if(iframe){	 
		iframe.remove();
	}
}