/* User Agent */
var agent = navigator.userAgent;

/* Detect OS */
var OS = "Unknown";
if (navigator.userAgent.indexOf("Win") != -1) OS = "Windows";
if (navigator.userAgent.indexOf("Mac") != -1) OS = "macOS";
if (navigator.userAgent.indexOf("X11") != -1) OS = "UNIX";
if (navigator.userAgent.indexOf("Linux") != -1) OS = "Linux";

/* Declare Date & Hours */
var now = Date(Date.now());
now.toString();

/* Detect Navigator Vendor */
let navVendor = navigator.languages;

/* Detect Languages */
let languages = navigator.vendor;

/* Cookies ON/OFF */
let cookie = navigator.cookieEnabled;

/* Get IP */
fetch("https://api.ipify.org/?format=json").then(httpResponse => {
  if (httpResponse.ok) {
    return httpResponse.json();
  }
}).then(json => {
  var ip = json.ip;
  console.log(ip);
});