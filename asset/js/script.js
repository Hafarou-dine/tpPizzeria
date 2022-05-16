function fillUser(nom, prenom, adr, tel, mail){
    document.querySelector("#nom").value = nom;
    document.querySelector("#prenom").value = prenom;
    document.querySelector("#adr").value = adr;
    document.querySelector("#tel").value = tel;
    document.querySelector("#mail").value = mail;
}
const zoneMsg = document.querySelector('#msg'); 

function fillIng(nom, prix){
    document.querySelector("#nom").value = nom;
    document.querySelector("#prix").value = prix;
}

