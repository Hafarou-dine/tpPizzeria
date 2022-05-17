<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reserver</title>
</head>
<body>
    <div class="flex-sm-row p-5">
        <h1 class="d-flex justify-content-center">Reservation</h1>
        <h3 class="d-flex justify-content-center">Pour des grandes reservations ou pour réserver le jour même, veuillez nous apeller !</h3>
    </div>
    <!------------------- début formulaire -------------------------------->
    <!-- mise en place du grid -->
    <div class="container shadow p-5 mb-5 bg-body rounded">
    <!-- mise en place du grid -->
        <form action="" method="post">
            <!-- ligne row grid -->
            <div class="row">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom_res">
                </div>
            </div>
            <!-- fin ligne row grid -->
            <!-- ligne row grid -->
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="nom" name="mail_res" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Téléphone :</label>
                        <input type="tel" class="form-control" id="nom" name="tel_res">
                    </div>
                </div>
            </div>
            <!-- fin ligne row grid -->
            <!-- ligne row grid -->
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Adultes :</label>
                        <input type="number" class="form-control" id="nom" name="nbr_adulte_res">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Enfants :</label>
                        <input type="number" class="form-control" id="nom" name="nbr_enfant_res">
                    </div>
                </div>
            </div>
            <!-- ligne row grid -->
            <div class="row">
                <div class="col-6">
                    <label for="date" class="form-label">date :</label></br>

                    <input type="date" name="da" id="date">

                </div>
                <!-- <div class="col-6">
                    <label for="heure" class="form-label">heures :</label></br>
                    <input type="time" name="he" id="heure">
                </div>

            </div>
            <!-- <div class="mb-3">
                <label for="sujet" class="form-label">Detail (optionel) :</label>
                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
            </div> -->
            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary w-25">réserver</button>
            </div>
        </form>
    <!-- fin du grid -->
    </div>
    <!-- fin du grid -->
    <!------------------- fin formulaire -------------------------------->
</body>
</html>

