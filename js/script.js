/*function getYear(year) {
	if(year) {
		return year.match(/[\d]{4}/);
	}
}*/

function removeRecords(data) {
    var file = data.result.records;

    for(var i = 0; i < file.length; i++) {
        if(file[i]["dc:subject"].includes("portfolio") || file[i]["dc:subject"].includes("portfolios") ||
        file[i]["dc:subject"].includes("Portfolio") || file[i]["dc:subject"].includes("Portfolios") || 
        file[i]["dc:subject"].includes("portrait") || file[i]["dc:subject"].includes("portraits") ||
        file[i]["dc:subject"].includes("Portrait") || file[i]["dc:subject"].includes("Portraits") ||
        file[i]["dc:subject"].includes("clothes"))
            if(!file[i]["dcterms:spatial"].match(".*\\d+.*") || !file[i]["dcterms:temporal"].match(".*\\d+.*")) {
                delete data.result.records[i];
        }
    }

    for(var i = 0; i < file.length; i++) {
        if(file[i] == null) {
            //do nothing
        } else {
            data = file[i];
        }
    }
}

function retrieveData() {
    var data = {
        resource_id: "9913b881-d76d-43f5-acd6-3541a130853d",
        limit: 100,
    }

    $.ajax({
        url: "https://data.gov.au/api/action/datastore_search",
        data: data,
        dataType: "jsonp",
        cache: true,
        success: function(data) {
            removeRecords(data);
            
            localStorage.setItem("slqData", JSON.stringify(data));
        }
    });
}

$(document).ready(function() {
    retrieveData();
});