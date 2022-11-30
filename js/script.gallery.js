var googleStreetView = 'https://maps.googleapis.com/maps/api/streetview?location=';
var googleAccess = '&size=600x400&key=AIzaSyAz8atFK21DuNFIshDiHEkJB7UEDHb_B1U';

$(document).ready(function() {
    $(".image-modal-open").click(function(event) {
        event.preventDefault();
        $(".modaltitle").text($(this).parent().data("title"));
        $(".modaldescription").text($(this).parent().data("description"));
        $(".galimage").attr("src", $(this).attr("src"));
        $(".getdate").text($(this).parent().data("date"));
        
        var address = $(this).parent().data("spatial");
        var latLong = address.split("; ");
        var coordinate = latLong[1];
        $(".getGoogleView img").attr("src", googleStreetView+coordinate+googleAccess);
    })

    $("#filter-text").keyup(function() {

        var searchTerm = $(this).val();
        
        $(".image").hide(); // i will sort it out tonight
        $(".image:contains('" + searchTerm.toUpperCase() + "')").show();
        
        $("#filter-count strong").text($(".image:visible").length);
        
    });
});
