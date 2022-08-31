//traduction google
function googleTranslateElementInit(){
  new google.translate.TranslateElement({pageLanguage:'en'}, 'google_translate_element');
}



//date heure
/*date*/
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
const dateString = `${day}, ${month} ${currentDate}, ${currentYear}`;

//set the inner text of the div to the value of the constructed 
//string
divDate.innerText = dateString;

/*heure*/
setInterval(ahora,1000)

function ahora(){
  const tempsReel = new Date();
  
  let hours = tempsReel.getHours();
  let minutes = tempsReel.getMinutes();
  let seconds = tempsReel.getSeconds();
  
  hours = hours < 10 ? '0' + hours : hours;
  minutes = minutes < 10 ? '0' + minutes : minutes;
  seconds = seconds < 10 ? '0' + seconds : seconds;
  
  let timeStr = hours + ":" + minutes + ":" + seconds;
  
  document.getElementById('dateHeure').innerText = timeStr;
}

ahora();