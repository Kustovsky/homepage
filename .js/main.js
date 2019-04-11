
function LightsOn() {
    if (localStorage.getItem('color') === 'white'){
        document.getElementById("body").classList.add('bg-white');
        document.getElementById("navbar").classList.add('bg-primary');
        document.getElementById("body").classList.remove('bg-dark');
        document.getElementById("navbar").classList.remove('bg-secondary');
        localStorage.setItem('color', 'dark');
    } else {
        document.getElementById("body").classList.add('bg-dark');
        document.getElementById("navbar").classList.add('bg-secondary');
        document.getElementById("body").classList.remove('bg-white');
        document.getElementById("navbar").classList.remove('bg-primary');
        localStorage.setItem('color', 'white');
    }
    console.log(localStorage.getItem('color'));

}
function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var session = "AM";

    if(h > 24){
        h = 0;
    }

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;

    var time = h + "::" + m;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;

    setTimeout(showTime, 1000);

}

showTime();
