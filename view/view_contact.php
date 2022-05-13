<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/styleContact.css">
    <title>Document</title>
</head>
<body>
    <!-- mise emplace du grid -->
    <div class="container p-5">
    <!-- mise emplace du grid -->

    <!-- mise emplace du row 1 -->
        <div class="row shadow p-5 mb-5 bg-body rounded">
    <!-- mise emplace du row 1 -->
    <h1>Ou se situe notre pizzeria</h1>
        <!-- fin emplace du row 1 -->
        </div>
    <!-- fin emplace du row 1 -->


    <!--------------------------- carte google ------------------------------>
        <!-- mise emplace du row 1 -->
        <div class="row">
            
    <!-- mise emplace du row 1 -->
    <div class="d-flex justify-content-center">
    <iframe id="carte" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2890.103728066822!2d1.5591495851806636!3d43.583555712123825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ae96ff5ba8170d%3A0xe8d252d251cd206f!2s232%20Rte%20de%20Castres%2C%2031130%20Quint-Fonsegrives!5e0!3m2!1sfr!2sfr!4v1652366944862!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
            <!-- fin emplace du row 1 -->
            
        </div>
    <!-- fin emplace du row 1 -->
    <!--------------------------- carte google ------------------------------>


    <!-------------------------------- formulaire de contact ----->
            <!-- mise emplace du row 1 -->
            <div class="row shadow p-5 mb-5 bg-body rounded">
    <!-- mise emplace du row 1 -->
    <form action="" method="post">
        <h2>Utilisez le formulaire ci-dessous pour nous contacter par email</h2>

  <div class="mb-3">
    <label for="nom" class="form-label">Nom : <span>*</span></label>
    <input type="text" class="form-control" id="nom">
  </div>

  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom : <span>*</span></label>
    <input type="text" class="form-control" id="prenom">
  </div>


  <div class="mb-3">
    <label for="email" class="form-label">Email : <span>*</span></label>
    <input type="email" class="form-control" id="email">
  </div>

  <div class="mb-3">
    <label for="sujet" class="form-label">sujet : <span>*</span></label>
    <input type="text" class="form-control" id="sujet">
  </div>

  <div class="mb-3">
  <label for="sujet" class="form-label">Message : <span>*</span></label>
      <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="condition">
    <label class="form-check-label" for="condition"><span>*</span> En cochant cette case j'accepte les conditions général ci-dessous (1)</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Envoyer</button>
  <div class="form-text">(1) nous utilisons vos données à des fin commercial</div>
</form>
        <!-- fin emplace du row 1 -->
        </div>
    <!-- fin emplace du row 1 -->
    <!--------------------------------fin formulaire de contact -->

        <!-- fin du grid -->
        </div>
    </div>
    <!-- fin du grid -->
    
</body>
</html>