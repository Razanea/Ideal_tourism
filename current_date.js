var today = new Date();

const days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
const months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

var day = days[today.getDay()]; //returns the name of the weekday

var dd = String(today.getDate()).padStart(2, '0'); 

var mm = months[today.getMonth()];

var yyyy = today.getFullYear();

today = day + ' ' + dd + ' ' + mm + ', ' + yyyy;
document.getElementById("date").innerHTML = today;