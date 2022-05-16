function addOption(text, value){
    const select = document.getElementById("cat");
    const newOption = new Option(text, value);
    select.options.add(newOption);
}
function fillUser(nom, prenom, adr, tel, mail){
    document.querySelector("#nom").value = nom;
    document.querySelector("#prenom").value = prenom;
    document.querySelector("#adr").value = adr;
    document.querySelector("#tel").value = tel;
    document.querySelector("#mail").value = mail;
}

