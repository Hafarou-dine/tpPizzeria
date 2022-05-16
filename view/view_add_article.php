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
            <h1 class="m-5 text-center">Ajouter un article</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="container shadow p-5 mb-5 bg-body rounded">
                    <p>Titre de l'article :<input type="text" name="titre_art" class="form-control"></p>
                    <p>Contenu de l'article :<textarea name="contenu_art" class="form-control" cols="50" rows="10"></textarea></p>
                    <p><input type="file" name="img_art_1" class="form-control"></p>
                    <p><input type="file" name="img_art_1" class="form-control"></p>
                    <p><input type="file" name="img_art_1" class="form-control"></p>
                    <p class="d-flex justify-content-around mt-5">
                        <input type="submit" value="Ajouter" name="add" class="btn btn-primary w-25">
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

