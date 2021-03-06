$(function () {
    setInterval("rotateImages()", 5000);
})

function rotateImages() {
    var currentBild = $("#bildspel div.current");
    var nextBild = currentBild.next();
    if (nextBild.length == 0) {
        nextBild = $("#bildspel div:first");
    }
    currentBild.removeClass("current").addClass("previous")
    nextBild.css({
        opacity: 0.0
    }).addClass("current").animate({
            opacity: 1.0
        }, 5000,
        function () {
            currentBild.removeClass();
        })
}

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
