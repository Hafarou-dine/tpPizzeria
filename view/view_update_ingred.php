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
            <h1 class="m-5 text-center">Modifier un ingredient</h1>
            <form action="" method="post">
                <div class="container shadow p-5 mb-5 bg-body rounded">
                    <p>Nom de l'ingredient :<input type="text" id="nom" name="nom_ing" class="form-control"></p>
                    <p>Prix de l'ingredient :<input type="text" id="prix" name="prix_ing" class="form-control"></p>
                    <p class="d-flex justify-content-center mt-5">
                        <input type="submit" value="Enregistrer" name="update" class="btn btn-primary w-25">
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script src="./asset/js/script.js"></script>
</body>
</html>

