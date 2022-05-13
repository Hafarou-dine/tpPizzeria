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
    <div class="container p-5">
    <div class="row">

    <!------------- partie connexion  -------------------------->

    <!-- debut col grid -->
    <div class="col -5 m-5 shadow p-3 mb-5 bg-body rounded">
    <!-- debut col grid -->

    <form action="" method="post">
        <h2>Connexion :</h2>
  <div class="mb-3">
    <label for="email" class="form-label">Email :</label>
    <input type="email" class="form-control" id="email" name="mail_util">
  </div>

  <div class="mb-3">
    <label for="pwd" class="form-label">mot de passe :</label>
    <input type="password" class="form-control" id="pwd" name="mdp_util">
  </div>
  <button type="submit" class="btn btn-primary">connexion</button>
</form>

    <!-- fin col grid -->
</div>
    <!-- fin col grid -->

    <!------------- fin partie connexion  -------------------------->

    <!------------- partie inscription  -------------------------->
        <!-- debut col grid -->
        <div class="col m-5 shadow p-5 mb-5 bg-body rounded">
    <!-- debut col grid -->
    <form action="" method="post">
        <h2>Inscription :</h2>

    <div class="mb-3">
    <label for="prenom" class="form-label">Prenom :</label>
    <input type="text" class="form-control" id="prenom" name="prenom_util">
  </div>

    <div class="mb-3">
    <label for="nom" class="form-label">Nom :</label>
    <input type="text" class="form-control" id="nom" name="nom_util">
  </div>

    <div class="mb-3">
    <label for="nom" class="form-label">Téléphone :</label>
    <input type="tel" class="form-control" id="nom" name="tel_util">
  </div>

    <div class="mb-3">
    <label for="adresse" class="form-label">adresse :</label>
    <input type="text" class="form-control" id="adresse" name="adresse_util">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email :</label>
    <input type="email" class="form-control" id="email" name="mail_util">
  </div>

  <div class="mb-3">
    <label for="pwd" class="form-label">mot de passe :</label>
    <input type="password" class="form-control" id="pwd" name="mdp_util">
  </div>
  <button type="submit" class="btn btn-primary">connexion</button>
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

