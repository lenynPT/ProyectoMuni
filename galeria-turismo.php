<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galería turismo</title>

    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Fonts icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">    
    <!-- CSS PROPIOS -->
    <link rel="stylesheet" href="css/estilos-encabezado.css">
    <link rel="stylesheet" href="css/navegacioncss2.css">
    <link rel="stylesheet" href="css/k-stilos.css">
    <link rel="stylesheet" href="css/rs-estilos.css">

        <link rel="stylesheet" href="css/estyle-andarapa.css"> <!-- último css agregado -->

</head>
<body>

    <div class="cotenedor-navegacion  sticky-top" style="background: royalblue;">
        
        <!-- NAVEGACIÓN-->         
        <?php include('navegar.php'); ?>
    </div>

    
    <section class="title-galeria bg-success">
        <div class="container text-center lead p-4">
            <h3>Tilte galery <?php echo $_GET['turismos']; ?></h3>
            <p>Andarapa tierra de los mas hermosos valles de la región y con los mejores atractivos turísticos</p>
        </div>
    </section>


    <section class="galery-main">
        <div class="container">

            <div class="card mb-3 mt-2 border-light" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="p-1">
                            
                            

<!-- Button trigger modal -->
<a href="#" data-toggle="modal" data-target="#turismo-img-1">
  <img src="img/img1.jpg" height="200px" class="card-img" alt="...">
</a>

<!-- Modal -->
<div class="modal fade" id="turismo-img-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>

  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content rounded rounded-lg border border-secondary bg-secondary">
        <div class="turismo-modal-interno rounded rounded-lg border border-secondary">
            <img src="img/img1.jpg" class="img-fluid rounded rounded-lg border border-secondary" alt="">
            <span class="text-white p-3 turismo-galery-modal">Lorem ipsum dolor sit.</span>
        </div>
    </div>
  </div>
</div>




                        </div>
                        <div class="p-1">
<!-- Button trigger modal -->
<a href="#" data-toggle="modal" data-target="#turismo-img-2">
    <img src="img/img2.jpg" height="200px" class="card-img" alt="...">  
</a>

<!-- Modal -->
<div class="modal fade" id="turismo-img-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>

  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content rounded rounded-lg border border-secondary bg-secondary">
        <div class="turismo-modal-interno rounded rounded-lg border border-secondary">
            <img src="img/img2.jpg" class="img-fluid rounded rounded-lg border border-secondary" alt="">
            <span class="text-white p-3 turismo-galery-modal">Lorem ipsum dolor sit.</span>
        </div>
    </div>
  </div>
</div>                            
                        </div>
                        <div class="p-1">                            
<!-- Button trigger modal -->
<a href="#" data-toggle="modal" data-target="#turismo-img-3">
    <img src="img/img3.jpg" height="200px" class="card-img" alt="...">  
</a>

<!-- Modal -->
<div class="modal fade" id="turismo-img-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>

  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content rounded rounded-lg border border-secondary bg-secondary">
        <div class="turismo-modal-interno rounded rounded-lg border border-secondary">
            <img src="img/img3.jpg" class="img-fluid rounded rounded-lg border border-secondary" alt="">
            <span class="text-white p-3 turismo-galery-modal">Lorem ipsum dolor sit.</span>
        </div>
    </div>
  </div>
</div>                            
                        </div>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"> Galery title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus quisquam dolorem corporis alias. Modi id atque magnam omnis, temporibus numquam vitae alias ratione rerum obcaecati consequuntur, quasi aut asperiores sunt tempore! Odio magnam molestias asperiores magni quibusdam vitae dolorum impedit quisquam sit vero. Aperiam amet autem voluptatibus similique, nobis praesentium earum nostrum nihil aut optio corporis tempora laudantium aspernatur a voluptatum, nulla in laboriosam accusantium id ad quam et hic quasi quod. Praesentium, quae facilis fugiat nam error laboriosam quo excepturi nisi quidem perferendis. Voluptatum omnis similique at perferendis odio, et animi eius aperiam pariatur tempora minima adipisci velit.</p>
        
                        <p class="card-text"><small class="text-muted">Actualizado hace 20 min || publicado 20/05/19 || author: Lorem, ipsum dolor.</small></p>
                    </div>
                    </div>
                </div>
            </div>        
        </div>
    </section>

    <!-- Footer Pie de página Copy Rezuam -->
    <?php include('pie-page.php'); ?>    

    <!-- jsBootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>