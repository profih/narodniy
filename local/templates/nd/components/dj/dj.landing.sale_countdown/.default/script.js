$(document).ready(
    function () {

        function updateClock(){
            delta_time -= 1000;
            let date_obj = msToTime(delta_time)
            setSaleTime(date_obj)
        }

        let countdown_date = new Date()
        let finish_date = new Date()

        finish_date.setDate(finish_date.getDate() + 1)
        finish_date.setHours(0)
        finish_date.setMinutes(0)
        finish_date.setSeconds(0)
        var delta_time = finish_date - countdown_date
        updateClock()
        setInterval(updateClock, 1000)
    }
)


function msToTime(duration) {
    let seconds = Math.floor((duration / 1000) % 60),
        minutes = Math.floor((duration / (1000 * 60)) % 60),
        hours = Math.floor((duration / (1000 * 60 * 60)) % 24);

    seconds = seconds < 10 ? '0' + seconds : seconds
    minutes = minutes < 10 ? '0' + minutes : minutes
    hours = hours < 10 ? '0' + hours : hours

    return {"hours": hours, 'minutes': minutes, "seconds": seconds}
}

function setSaleTime(date_obj) {
    $(".countdown-hour").text(date_obj.hours)
    $(".countdown-min").text(date_obj.minutes)
    $(".countdown-sec").text(date_obj.seconds)
}