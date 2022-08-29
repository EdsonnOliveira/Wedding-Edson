var target_date = new Date("november 12, 2022").getTime();

var days, hours, minutes, seconds;

setInterval(function () {
    var current_date = new Date().getTime();
    var seconds_f = (target_date - current_date) / 1000;

    days = parseInt(seconds_f / 86400);
    seconds_f = seconds_f % 86400;
    
    hours = parseInt(seconds_f / 3600);
    seconds_f = seconds_f % 3600;
    
    minutes = parseInt(seconds_f / 60);
    seconds = parseInt(seconds_f % 60);

    document.getElementById('days').innerHTML = days;
    document.getElementById('hours').innerHTML = hours;
    document.getElementById('minutes').innerHTML = minutes;
    document.getElementById('seconds').innerHTML = seconds;
}, 1000);