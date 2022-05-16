// Fonction qui permet d'ajouter un option à un select
function addOption(text, value){
    const select = document.getElementById("cat");
    const newOption = new Option(text, value);
    select.options.add(newOption);
}

// Focntion qui prerempli les champs du formulaire de mise à jour d'un utilisateur
function fillUser(nom, prenom, adr, tel, mail){
    document.querySelector("#nom").value = nom;
    document.querySelector("#prenom").value = prenom;
    document.querySelector("#adr").value = adr;
    document.querySelector("#tel").value = tel;
    document.querySelector("#mail").value = mail;
}

// Fonction qui preremplis les champs d'un formulaire de mise à jour d'un ingrédient
function fillIng(nom, prix){
    document.querySelector("#nom").value = nom;
    document.querySelector("#prix").value = prix;
}

// Fonction qui preremplis les champs d'un formulaire de mise à jour d'un article
function fillArticle(titre, contenu){
    document.querySelector("#titre").value = titre;
    document.querySelector("#cont").value = cont;
}


