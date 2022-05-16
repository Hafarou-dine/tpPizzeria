<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeff Pizza</title>
</head>
<body>
    <!-- mise en place du grid container -->
    <div class="container">
        <div class="row">
            <!------------- partie connexion  -------------------------->
            <!-- debut col grid -->
            <div class="col m-5 shadow p-5 mb-5 bg-body rounded">
                <!-- debut col grid -->
                <form action="" method="post">
                    <h2 class="text-center mb-5">Connexion</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail :</label>
                        <input type="email" class="form-control" id="email" name="mail_util" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control" id="pwd" name="mdp_util" required>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button type="submit" name="connect" class="btn btn-primary w-50">se connecter</button>
                    </div>
                </form>
                <!-- fin col grid -->
            </div>
            <!------------- fin partie connexion  -------------------------->


            <!------------- partie inscription  -------------------------->
            <!-- debut col grid -->
            <div class="col m-5 shadow p-5 mb-5 bg-body rounded">
                <!-- debut col grid -->
                <form action="" method="post">
                    <h2 class="text-center mb-5">Inscription</h2>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom_util">
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom_util">
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Téléphone :</label>
                        <input type="tel" class="form-control" id="nom" name="tel_util">
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse :</label>
                        <input type="text" class="form-control" id="adresse" name="adresse_util">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail :</label>
                        <input type="email" class="form-control" id="email" name="mail_util" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control" id="pwd" name="mdp_util" required>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button type="submit" name="add" class="btn btn-primary w-50">s'inscrire</button>
                    </div>
                </form>
                <!-- fin col grid -->
            </div>
            <!-- fin col grid -->
            <!------------- fin partie inscription  -------------------------->
            <!-- fin du grid container -->
        </div>
    </div>
</body>
</html>

