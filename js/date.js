var Today = new Date()
var curInfo = "";
var year = Today.getYear()
var month = Today.getMonth()
var date = Today.getDate()
var day = Today.getDay()
var monthArray = new Array("Jan.", "Feb.", "Mar.", "Apr.", "May.", "Jun.", "Jul.", "Aug.", "Sept.", "Oct.", "Nov.", "Dec.");
var dayArray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
hours = Today.getHours(),
    minutes = Today.getMinutes();
if (minutes < 10) {
    minutes = "0" + minutes;
}
var suffix = "am";
if (hours >= 12) {
    suffix = "pm";
    hours = hours - 12;
}
if (hours == 0) {
    hours = 12;
}
curInfo = dayArray[day] + ", " + monthArray[month] + " " + date + " | " + hours + ":" + minutes + " " + suffix;
document.write(curInfo);