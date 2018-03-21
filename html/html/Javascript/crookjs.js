
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////boven gedeelte van plaatje //////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

var plaatjes = [1,2,3,4];
var teller = 0;
var slideholder = document.getElementById("slideholder");
slideholder.style.backgroundImage = "url('boven/hoofd1.jpg')";

slideholder.addEventListener("click", function() {
    slideholder.style.backgroundImage = "url('boven/hoofd" + getBoven() + ".jpg')";
});

function getBoven() {
    if(teller >= plaatjes.length) {
        teller = 1
    }
    teller++;
    console.log(teller);
    return teller;
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////midden gedeelte van plaatje /////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

var plaatjesa = [1,2,3,4];
var tellera = 0;
var slideholdera = document.getElementById("slideholdera");
slideholdera.style.backgroundImage = "url('midden/neus1.jpg')";

slideholdera.addEventListener("click", function() {
    slideholdera.style.backgroundImage = "url('midden/neus" + getMidden() + ".jpg')";
});

function getMidden() {
    if(tellera >= plaatjesa.length) {
        tellera = 1
    }
    tellera++;
    console.log(tellera);
    return tellera;
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////onder gedeelte van plaatje //////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

var plaatjesb = [1,2,3,4];
var tellerb = 0;
var slideholderb = document.getElementById("slideholderb");
slideholderb.style.backgroundImage = "url('onder/kin1.jpg')";

slideholderb.addEventListener("click", function() {
    slideholderb.style.backgroundImage = "url('onder/kin" + getOnder() + ".jpg')";
});

function getOnder() {
    if(tellerb >= plaatjesb.length) {
        tellerb = 1
    }
    tellerb++;
    console.log(tellerb);
    return tellerb;
}