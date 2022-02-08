const myName = 'SAKut';

let dayDate = new Date();

let getCurrentYear = dayDate.getFullYear();

document.getElementsByClassName("span-1")[0].innerHTML = "&copy;" + getCurrentYear + " " + myName;

// console.log(getCurrentYear);

const date = new Date();

const currentTime = date.getHours();
console.log(currentTime);

let greetings;

const customStyle = {
  color: ""
};

if (currentTime < 12) {
  greetings = "<strong>Good Morning</strong>";
  
  document.querySelectorAll("p")[1].innerHTML = greetings + "<strong>,</strong> " + " <strong>Welcome to my to my blog</strong>";
} 

else if (currentTime < 18 ) {
  greetings = "<strong>Good Aternoon</strong>";
  customStyle.color = "red";
  document.querySelectorAll("p")[1].innerHTML = greetings + "<strong>,</strong> " + " <strong>Welcome to my to my blog</strong>";
} 

else {
  greetings = "<strong>Good Evening</strong>";
  document.querySelectorAll("p")[1].innerHTML = greetings + "<strong>,</strong> " + " <strong>Welcome to my to my blog</strong>";
} 
