$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: "rooms.xml",
        dataType: "xml",
        success: xmlParser
    });
});

function xmlParser(xml) {
    var rooms = xml.getElementsByTagName("room");
    for (var i = 0; i < 2; i++) { //we will always have only two types of rooms
        var room = rooms[i];
        var name = room.getElementsByTagNameNS("http://www.rooms.com", "name")[0];
        var heading = "<h2>" + name.textContent.toString() + "</h2>";
        var comforts = room.getElementsByTagName("comfort");
        var comfortsParagraph = "<p>Mugavused: ";
        for (var j = 0; j < comforts.length; j++) {
            var comfortName = comforts[j].getElementsByTagNameNS("http://www.comforts.com", "name")[0];
            if (j == comforts.length - 1) {
                comfortsParagraph += comfortName.textContent.toString() + "</p>";
            } else {
                comfortsParagraph += comfortName.textContent.toString() + ", ";
            }
        }
        var description = room.getElementsByTagName("description")[0];
        var descriptionParagraph = "<p>" + description.textContent.toString() + "</p>";
        var price = room.getElementsByTagName("price")[0];
        var priceHeading = "<h3>" + price.textContent.toString() + " EUR</h3>";
        if (i == 0) {
            //double
            document.getElementById("doubleInfo").innerHTML = heading + descriptionParagraph + comfortsParagraph + priceHeading;
        } else {
            //duplex
            document.getElementById("duplexInfo").innerHTML = heading + descriptionParagraph + comfortsParagraph + priceHeading;
        }
    }
}