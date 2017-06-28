var Today = new Date()
    var year = Today.getYear()
    var month = Today.getMonth()
    var date = Today.getDate()
    var day = Today.getDay()

    if(year < 1000){
    year += 1900
    }

    var monthArray = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec")	

    var dayArray = new Array("Sun","Mon","Tue","Wed", "Thu","Fri","Sat")

    document.write( monthArray[month] + " " + date + " " + dayArray[day] )