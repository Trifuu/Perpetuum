/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

$(document).ready(function () {
    function convertToCSV(object,echipe) {
        var str = 'Echipa,'+
        'Tricou capitan,Tricou membru2,Tricou membru3,Tricou membru4,'+
        'Vegani,Vegetarieni,Fara preferinte,'+
        'Mesaj,Observatii\r\n';
        for (var i = 0; i < object.length; i++) {
            str += echipe[i].echipa.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["tricou1"] === 'undefined'? ",":object[i].tricou1.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["tricou2"] === 'undefined'? ",":object[i].tricou2.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["tricou3"] === 'undefined'? ",":object[i].tricou3.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["tricou4"] === 'undefined'? ",":object[i].tricou3.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["vegani"] === 'undefined'? ",":object[i].vegani.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["vegetarieni"] === 'undefined'? ",":object[i].vegetarieni.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["preferinte"] === 'undefined'? ",":object[i].preferinte.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["mesaj"] === 'undefined'? ",":object[i].mesaj.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["observatii"] === 'undefined'? "\r\n":object[i].observatii.replace(/[,;]/g , " ") + "\r\n";
        }
        return str;
    }
    
    function exportCSVFile(items,echipe, fileTitle) {

        var csv = convertToCSV(items,echipe);

        var exportedFilenmae = fileTitle + '.csv' || 'export.csv';

        var blob = new Blob([csv], {type: 'text/csv;charset=utf-8;'});
        if (navigator.msSaveBlob) { // IE 10+
            navigator.msSaveBlob(blob, exportedFilenmae);
        } else {
            var link = document.createElement("a");
            if (link.download !== undefined) { // feature detection
                // Browsers that support HTML5 download attribute
                var url = URL.createObjectURL(blob);
                link.setAttribute("href", url);
                link.setAttribute("download", exportedFilenmae);
                link.style.visibility = 'hidden';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        }
    }

    $("#download_csv").on("click", function () {
        var fileTitle = 'Perpetuum Detalii';
        exportCSVFile(detalii_echipe,echipe, fileTitle);
    });
});
