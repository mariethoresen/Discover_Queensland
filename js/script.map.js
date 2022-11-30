var map = L.map('mapid').setView([-22, 145], 6);
        
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
maxZoom: 18,
id: 'mapbox.streets',
accessToken: 'pk.eyJ1IjoiczQ1NDA1NDUiLCJhIjoiY2ptNGZqNWRkM2puYTNrcDRsN2NhNXVpNyJ9.pVICzDIlEx026oUIzhAtQA'
}).addTo(map);

var slqData = JSON.parse(localStorage.getItem("slqData"));

var googleStreetView = 'https://maps.googleapis.com/maps/api/streetview?location=';
var googleAccess = '&size=150x100&key=AIzaSyAz8atFK21DuNFIshDiHEkJB7UEDHb_B1U';

// Iterate over each record and add a marker using the latlong field
$.each(slqData.result.records, function(recordKey, recordValue) {
    if(slqData.result.records[recordKey] == null) {
        //do nothing
    } else if (slqData.result.records[recordKey]["dcterms:spatial"].match(".*\\d+.*")) {
        try {
            var recordLatitude = recordValue["dcterms:spatial"];
            var recordTitle = recordValue["dc:title"];
            var recordImage = recordValue["150_pixel_jpg"];

            var latLong = recordLatitude.split("; ");
            var coordinate = latLong[1];
            var splitlng = coordinate.split(",");
            var lat = splitlng[0];
            var lng = splitlng[1];

            var customPopup = recordTitle + '<br><br/> <img src='+recordImage+'>' +
                '<img src='+googleStreetView+coordinate+googleAccess+'>\
                <br><button style="color:black" type="button" >Save to your Gallery</button>';
            var customSettings = {'className':'popUpCustom'};

            var marker = L.marker([lat, lng]).addTo(map);
            
            marker.on("click", function(event) {
                marker.bindPopup(customPopup, customSettings).openPopup();
            });
        } catch (e) {
            return false;
        }
    }
});

var currentIcon = L.icon ({
    iconUrl: '../images/iconMarker.png',
    iconSize: [45, 50],
});

navigator.geolocation.getCurrentPosition(function(location) {
    var currentPosition = new L.LatLng(location.coords.latitude, location.coords.longitude);
    
    L.marker((currentPosition), {icon: currentIcon}).addTo(map).bindPopup("You're here!");
});
