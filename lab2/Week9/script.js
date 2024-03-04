// Pop-up
if (!sessionStorage.getItem('alertShown')) {
    // If not, show the alert
    alert("Welcome to Matt's Personal profile Website!");
    // Mark the alert as shown in sessionStorage
    sessionStorage.setItem('alertShown', 'true');
  }

// Console
console.log("Introduction, Variables, Let, Const & Data Types, Strings, Booleans, Events, Precedence & Conditionals, Dates")
console.log("Introduction: Mashu's Shack version 3.0");
let sfname = "Matt";
let fname = "Matthew";
let lname = "Paren";
let age = 22;
let fjob = "Web Dev";
console.log("Variables, Let, Const & Data Types: I am " + lname + ", " + fname + ". You can call me " + sfname + ", I am a future " + fjob + ".");
console.log("I'm " + age);
let isStudent = true;
if (isStudent) {
    console.log("Booleans: I am still a Student");
}else {
    console.log("Booleans: I am Not a Student anymore");
}
if (age >= 18) {
  console.log("You are eligible to vote.");
} else {
  console.log("You are not eligible to vote.");
}
let currentDate = new Date();
console.log(currentDate);

let specificDate = new Date("2024-03-04");
console.log(specificDate);

let year = currentDate.getFullYear();
console.log("Current year:", year);
  // Content
  document.addEventListener('DOMContentLoaded', function () {
    const logo = document.getElementById('logo');
    const content = document.querySelector('.content');

    function rotateLogo() {
        logo.style.transform = 'rotate(360deg)';
        logo.style.transition = 'transform 1s ease';

        setTimeout(() => {
            logo.style.transform = 'rotate(0deg)';
        }, 1000);
    }

    function fadeInContent() {
        content.style.opacity = 0;
        content.style.transition = 'opacity 1s ease';

        setTimeout(() => {
            content.style.opacity = 1;
        }, 1000);
    }
    rotateLogo();
    fadeInContent();
});
