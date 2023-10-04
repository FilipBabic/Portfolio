
function refreshTime() {
    const timeDisplay = document.getElementById("time");
    const dateString = new Date().toLocaleString("en-GB");
    const formattedString = dateString.replace(", ", " - ");
    timeDisplay.innerHTML = `${formattedString}`;
}

setInterval(refreshTime, 1000);