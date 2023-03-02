
// jquery image fade
$(document).ready(function() {
    $("#button").click(function() {
        if (sessionStorage.clickcount != 3)
            $("#loadingImage").fadeIn(0);
            $("#loadingImage").delay(1000).fadeOut(2000);
    });
});
            
$(document).ready(function() {
    $("#button").click(function() {
        if (sessionStorage.clickcount === 3)
            $("#nee").fadeIn(0);
            $("#nee").delay(1000).fadeOut(2000);
    });
});
            
// jquery button fade and reappear
$(document).ready(function() {
    $("#button").click(function() {
        $(this).fadeOut(0);
        $(this).delay(3500).fadeIn(0);
    });
});
           
// tabs
function openTab(evt, tabName) {
    var i;
    var tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
            document.getElementById(tabName).style.display = "block";
}
            
function darkMode() {
    var dark = document.body;
        dark.classList.toggle("dark-mode");
    var element = document.getElementById("darkButton");
        if(element.value === "Dark mode") {
            element.value = "Light mode";
            document.getElementById("cart").src = "img/Winkelmand.zwart.png";
        } else {
            element.value = "Dark mode";
            document.getElementById("cart").src = "img/Winkelmand.png";
        }
}
            
 function clickCounter() {
    if (typeof(Storage) !== "undefined") {
        if (sessionStorage.clickcount) {
            sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
        } else {
            sessionStorage.clickcount = 1;
        }
    }
    return sessionStorage.clickcount;
}

// image appear when buttonclick
function showImage() {
    var clickCount = clickCounter();
        switch(clickCount) {
            case "3":
                document.getElementById("nee").style.display = "block";
                document.getElementById("loadingImage").style.visibility="none";
            break;
            default:
                document.getElementById("loadingImage").style.visibility="visible";
                document.getElementById("nee").style.display = "none";
        }
}

    

    // https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_onclick_dropdown

            