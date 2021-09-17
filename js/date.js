var Today = new Date()
    var curInfo = "";
    var year = Today.getYear()
    var month = Today.getMonth()
    var date = Today.getDate()
    var day = Today.getDay()

    if(year < 1000){
    year += 1900
    }

    var monthArray = new Array("Jan.", "Feb.", "Mar.", "Apr.", "May.", "Jun.", "Jul.", "Aug.", "Sept.", "Oct.", "Nov.", "Dec.")	

var dayArray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
    
curInfo = dayArray[day] + ", " + monthArray[month] + " " + date;

document.write(curInfo);