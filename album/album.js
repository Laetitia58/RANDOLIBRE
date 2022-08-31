document.body.onload = function () {
    i = 1;
    ang = 0;
    setInterval("album()", 20);
}
function album() {
    document.getElementById("containerPhoto").style.transform = "perspective(1000px) rotateY(" + ang + "deg)";
    ang++;
    if (ang >= 360) ang = 0;
    if (ang == 90 || ang == 270) {
        i += 1;
        if (i > 5) i = 1;
        document.getElementById("photo").style.backgroundImage = "url('images/im" + i + ".jpg')";
        document.getElementById("reflet").style.backgroundImage = "url('images/im" + i + ".jpg')";
    }
}
//compteur avis
var nombreClicsLike = 0;

function comptage1() {
    nombreClicsLike++;
    document.getElementById("nombreClicsLike").textContent = nombreClicsLike;
}

document.getElementById("like").addEventListener("click", comptage1);


var nombreClicsDislike = 0;

function comptage2() {
    nombreClicsDislike++;
    document.getElementById("nombreClicsDislike").textContent = nombreClicsDislike;
}


//date

const date = new Date();
const currentDay = date.getDay();
const currentMonth = date.getMonth();
const currentDate = date.getDate();
const currentYear = date.getFullYear();

const weekdays = [
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday"
]

const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December"
]


const day = weekdays.at(currentDay);
const month = months.at(currentMonth);

//Select the date div element
const divDate = document.querySelector(".date");

//select the quote div element
const divQuote = document.querySelector(".quote");

//build the string here
const dateString = `${day}, ${month} ${currentDate}, ${currentYear}.`;

//set the inner text of the div to the value of the constructed 
//string
divDate.innerText = dateString;










