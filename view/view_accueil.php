<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Jeff Pizza</title>
</head>
<body>

<!------------------------- carrousel ------------------------------------------------------>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators" >
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./asset/image/jeff.jpg" class="d-block w-100 p-3" alt="photo pizza">
    </div>
    <div class="carousel-item">
      <img src="./asset/image/pizzaCarre.jpg" class="d-block w-100 p-3" alt="photo pizza">
    </div>
    <div class="carousel-item">
      <img src="./asset/image/Menutrio.jpg" class="d-block w-100 p-3" alt="photo pizza">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<!-- div texte et maps -->
<div class="container">
<div class="row">
<!------------------------------- paragraphe  ------------------------------------------------->
<div class="col-6 m-5 d-flex align-items-center">
  <p>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry’s standard dummy text ever since the
1500s, when an unknown printer took a galley of type and scrambled it to
make a type specimen book. It has survived not only five centuries,
but also the leap into electronic typesetting, remaining essentially unchanged.
It was popularised in the 1960s with the release of Letraset sheets
containing Lorem Ipsum passages, and more recently with desktop
publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  </p>
</div>

 <!-------------------------- CARTE GOOGLE MAPS --------------------------------------------------->
 <div class="col-4 p-5">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2890.103728066822!2d1.5591495851806636!3d43.583555712123825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ae96ff5ba8170d%3A0xe8d252d251cd206f!2s232%20Rte%20de%20Castres%2C%2031130%20Quint-Fonsegrives!5e0!3m2!1sfr!2sfr!4v1652366944862!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- fin div texte et maps -->

</div>
</div>
</body>
</html>

