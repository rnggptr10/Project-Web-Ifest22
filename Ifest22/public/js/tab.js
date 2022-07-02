function openPage(pageName,pageSpeakers,elmnt,color) {
    var i, tabcontent, tablinks, tabspeakers;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    tabspeakers = document.getElementsByClassName("carousel-pembicara");
    for (i = 0; i < tabspeakers.length; i++) {
      tabspeakers[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }

    document.getElementById(pageName).style.display = "block";
    document.getElementById(pageSpeakers).style.display = "block";

    elmnt.style.backgroundColor = color;
}