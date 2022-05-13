<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeff Pizza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100" style="background-color: #C5D3C5;">
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #1A621A;">
            <div class="container-fluid">
                <a class="navbar-brand fs-4" href="/tpPizzeria/" style="color: white;"><img src="./asset/image/logo.png" style="width: 70px; height:70px;">Jeff Pizza</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-5" id="navbarNavAltMarkup">
                    <div class="navbar-nav d-flex justify-content-center">
                        <a class="nav-link active fs-4 ms-5 me-3" href="/tpPizzeria/" style="color: white;">Accueil</a>
                        <a class="nav-link active fs-4 me-3" href="/tpPizzeria/carte" style="color: white;">Carte</a>
                        <a class="nav-link active fs-4 me-3" href="/tpPizzeria/blog" style="color: white;">Blog</a>
                        <a class="nav-link active fs-4 me-3" href="/tpPizzeria/reserver" style="color: white;">Reserver</a>
                        <a class="nav-link active fs-4" href="/tpPizzeria/contact" style="color: white;">Contact</a>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-4" href="#" id="navbarDarkDropdownMenuLink" style="color: white;" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="">Ajouter Article</a></li>
                                    <li><a class="dropdown-item" href="">Ajouter produit</a></li>
                                    <li><a class="dropdown-item" href="">Ajouter Ingredient</a></li>
                                    <li><a class="dropdown-item" href="">Liste Ingredient</a></li>
                                </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ms-auto">
                        <a class="me-3" href="/tpPizzeria/panier"><img src="https://img.icons8.com/ios-filled/40/ffffff/shopping-cart-loaded--v1.png"/></a>
                        <a class="me-3" href="/tpPizzeria/updateUser"><img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/40/ffffff/external-user-interface-kiranshastry-solid-kiranshastry-1.png"/></a>
                        <a class="me-3" href="/tpPizzeria/deco"><img src="https://img.icons8.com/ios-filled/40/ffffff/exit.png"/></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

