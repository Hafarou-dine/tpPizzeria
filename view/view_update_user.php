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
                    <p><input type="text" name="nom_util" class="form-control"  placeholder="Nom"></p>
                    <p><input type="text" name="prenom_util" class="form-control" placeholder="Prenom"></p>
                    <p><input type="text" name="adresse_util" class="form-control" placeholder="Adresse"></p>
                    <p><input type="text" name="tel_util" class="form-control" placeholder="Télephone"></p>
                    <p><input type="email" name="mail_util" class="form-control" placeholder="E-mail"></p>
                    <p><input type="password" name="mdp_util" class="form-control" placeholder="Mot de passe"></p>
                    <p class="d-flex justify-content-around mt-5">
                        <input type="submit" value="Enregistrer" name="update" class="btn btn-primary w-25">
                        <input type="submit" value="Resilier" name="delete" class="btn btn-primary w-25">
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

