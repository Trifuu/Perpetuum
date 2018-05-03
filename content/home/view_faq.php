<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */



defined("autorizare") or die("Nu aveti autorizare");


$js[] = "app/home/faq.js";

$title_app_title = "FAQ";

$ro=["Ce este Perpetuum?",
    "Perpetuum este un concurs de realizare a masinariilor de tip Rube Goldberg.",
    "Cum pot să mă înscriu? Care sunt datele necesare?",
    "Înscrierea se va face pe site-ul evenimentului, în cel mai scut timp posibil, prin completarea unui formular de către căpitanul echipei. Vor fi necesare datele de contact ale coechipierilor cât și câte un CV.",
    "Care este numărul maxim de membri într-o echipă?",
    "O echipă poate fi formată din maxim 3-4 membri.",
    "Ce înseamnă un mecanism Rube Goldberg?",
    "Tematica evenimentului este reprezentată de realizarea unui mecanism Rube Golberg și anume o reacție în lanț folosind obiectele puse la dispoziție la începutul și pe parcursul evenimentului.",
    "Care este structura testului de selecție?",
    "Testul va avea două parți despre cunoștințele elementare despre o plăcuță Arduino și elemente de electronică.",
    "Pot folosi obiecte aduse de către mine sau coechipierii mei?",
    "Categoric NU. Așa cum este în regulament, singurele obiecte folosite pot fi doar cele puse la dispoziție la începutul și pe perioada concursului si un laptop",
    "Cum trimit CV-urile? Este necesar să fie câte unul pentru fiecare membru?",
    "CV-urile vor fi trimise prin intermediul unui link de drive. Este obligatoriu ca acel link să conțină toate CV-urile membrilor echipei într-un singur folder.",
    "Dacă nu sunt din Facultatea de Automatică și Calculatoare, mă pot înscrie?",
    "NU. Concursul este destinat doar studenților din ACS!"];
$en=["What is Perpetuum?",
    "Perpetuum is a competition that targets the Rube Goldberg mechanisms development.",
    "How can I enroll to this competition? What data do I have to provide?",
    "The enrolment will take part on the event’s site, as quickly as possible, by submitting a form by the team captain. Contact data and a CV from each member is required.",
    "How many members can be in a team?",
    "A team must have 3 - 4 members.",
    "What is a Rube Goldberg mechanism?",
    "The competition goal is to realise a Rube Goldberg mechanism aka a chain reaction mechanism using the objects given at the beginning and during the competition.",
    "How is structured the selection assignment?",
    "The selection assignment will be composed of two parts: Arduino manipulation and electronics comprehension.",
    "Can I use my own objects or objects from my teammates?",
    "Absolutely NOT. As it is stated in the rules, the only objects that can be used are the ones given at the beginning and during the competition and a laptop.",
    "How do I send our CVs? Is it necessary to send one for each team member?",
    "All CVs will be submitted via a drive link. It is mandatory that all CVs must be on the same link address in a single folder.",
    "If I am not from ACS, can I participate?",
    "NO. The competition is only for ACS students."];
if($limba=="en"){
    $mesaj=$en;
}else{
    $mesaj=$ro;
}

$content = _ROOT_CONTENT . $page . "/tmpl_faq.php";