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
    $("#change_number_of_members").click(function(){
        var number=[];
        var buton=$("#change_number_of_members").text();
        if(~buton.indexOf("3")){
            number[0]="3";
            number[1]="4";
        } else {
            number[0]="4";
            number[1]="3";
        }
        buton=buton.replace(number[0],number[1]);
        $("#change_number_of_members").text(buton);
        if(number[0]=="4"){
            document.getElementById("member1").classList.remove("mdl-cell--4-col");
            document.getElementById("member1").classList.add('mdl-cell--6-col');
            document.getElementById("member2").classList.remove("mdl-cell--4-col");
            document.getElementById("member2").classList.add("mdl-cell--6-col");
            document.getElementById("member3").classList.remove("mdl-cell--4-col");
            document.getElementById("member3").classList.add("mdl-cell--6-col");
            $("#member4").css("display","");
        }else{
            document.getElementById("member1").classList.remove("mdl-cell--6-col");
            document.getElementById("member1").classList.add('mdl-cell--4-col');
            document.getElementById("member2").classList.remove("mdl-cell--6-col");
            document.getElementById("member2").classList.add("mdl-cell--4-col");
            document.getElementById("member3").classList.remove("mdl-cell--6-col");
            document.getElementById("member3").classList.add("mdl-cell--4-col");
            $("#member4").css("display","none");
        }
        
    });
    
    $("#go_back").on("click", function () {
        window.location = _SITE_BASE;
    });
});
