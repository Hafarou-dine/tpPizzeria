<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/article.css">
    <title>Jeff Pizza</title>
</head>
<body>
    <div class="container-fluid w-75">
        <div class="m-5">
            <h1 class="m-5 text-center">Ajouter un produit</h1>
            <form action="" method="post">
                <div class="container shadow p-5 mb-5 bg-body rounded">
                    <p>Nom du produit :<input type="text" name="nom_prod" class="form-control"></p>
                    <p>Description du produit :<textarea name="desc_prod" class="form-control" rows="6"></textarea></p>
                    <p>Prix du produit :<input type="text" name="prix_prod" class="form-control"></p>
                    <p>Sélectionner une categorie :
                        <select name="type" id="cat">
                            <option value="default">----- TYPE -----</option>
                        </select>
                    </p>
                    <p class="d-flex justify-content-around mt-5">
                        <input id="" type="submit" value="Ajouter" name="add" class="btn btn-primary w-25">
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

