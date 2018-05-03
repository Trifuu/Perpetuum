/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */


$(document).ready(function () {
    $("#validate_formular").validate({
        rules: {
            nume_echipa: {
                required: true,
                minlength: 3
            },
            nume1: {
                required: true
            },
            prenume1: {
                required: true
            },
            email1: {
                required: true,
                email: true
            },
            telefon1: {
                required: true,
                number: true
            },
            nume2: {
                required: true
            },
            prenume2: {
                required: true
            },
            email2: {
                required: true,
                email: true
            },
            telefon2: {
                required: true,
                number: true
            },
            nume3: {
                required: true
            },
            prenume3: {
                required: true
            },
            email3: {
                required: true,
                email: true
            },
            telefon3: {
                required: true,
                number: true
            },
            cv: {
                required: true
            },
            regulament:{
                required:true
            },
            facultate:{
                required:true
            }
        },
        highlight: function (element) {
            $(element).css("color", "red");
            $(element).parent().children("label").css("color", "red");
            $(element).css("border-color", "red");
        },
        unhighlight: function (element) {

            $(element).parent().children("label").css("color", "darkgreen");
            $(element).css("color", "darkgreen");
            $(element).css("border-color", "darkgreen");
        }
    });
    
    $("#go_back").on("click", function () {
        window.location = _SITE_BASE;
    });
});
