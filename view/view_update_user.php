<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeff Pizza</title>
</head>
<body>
    <div class="container-fluid w-75">
        <div class="m-5">
            <h1 class="m-5 text-center">Mon compte</h1>
            <form action="" method="post">
                <div class="container shadow p-5 mb-5 bg-body rounded"> 
                    <p>Nom :<input type="text" id="nom" name="nom_util" class="form-control"></p>
                    <p>Prenom :<input type="text" id="prenom" name="prenom_util" class="form-control"></p>
                    <p>Adresse :<input type="text" id="adr" name="adresse_util" class="form-control"></p>
                    <p>Télephone :<input type="text" id="tel" name="tel_util" class="form-control"></p>
                    <p>E-mail :<input type="email" id="mail" name="mail_util" class="form-control" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required></p>
                    <p>Mot de passe :<input type="password" id="psw" name="mdp_util" class="form-control"></p>
                    <p class="d-flex justify-content-around mt-5">
                        <input type="submit" value="Enregistrer" name="update" class="btn btn-primary w-25">
                        <input type="submit" value="Resilier" name="delete" class="btn btn-primary w-25">
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script src="./asset/js/script.js"></script>
</body>
</html>

