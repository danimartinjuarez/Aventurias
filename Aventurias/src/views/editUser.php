<?php
require_once("Components/layout.php");
?>

<body>
    <?php
    require_once("Components/Header.php");
    ?>
    <!-- <section id="formNewAdventure"> -->
    <div class="text-center bg-image container-fluid">
        <div class="mask" style="margin:0";>
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                <h1 class="mb-3 tittle">Nueva aventura</h1>
                <a class="btn btn-outline-light text-align:center" href="#" role="button">VOLVER</a>
                </div>
            </div>
        </div>
    </div>
    
  <section class="formSection">

    <form class="row g-3" id="form" action='?action=store' method="POST">
        <div id="checkImages">
            <div class="form-check, check">
                <label class="form-check-label" for="flexRadioDefault1">
                    <img class="imgAdventure" src="public/images/descenso-en-canoa.jpeg" alt="escoger aventura descenso en canoa">
                </label>
                <br>
                <input class="form-check-input, point" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="descenso en canoa">

            </div>
            <div class="form-check, check">
                <label class="form-check-label" for="flexRadioDefault2">
                    <img class="imgAdventure" src="public/images/motosagua.jpeg" alt="Escoger aventura motos de agua">
                </label>
                <br>
                <input class="form-check-input, point" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="motos de agua">

            </div>
            <div class="form-check, check">
                <label class="form-check-label" for="flexRadioDefault3">
                    <img class="imgAdventure" src="public/images/parapente.jpeg" alt="escoger aventura parapente">
                </label>
                <br>
                <input class="form-check-input, point" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="parapente">

            </div>
            <div class="form-check, check">
                <label class="form-check-label" for="flexRadioDefault4">
                    <img class="imgAdventure" src="public/images/Ruta_del_Cares.jpeg" alt="Escoger aventura Ruta del Cares">
                </label>
                <br>
                <input class="form-check-input, point" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="Ruta del Cares">

            </div>
        </div>
        <div class="col-md-6">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="name" class="form-control" id="inputName" name="name">
        </div>
        <div class="col-md-6">
            <label for="inputPhone" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="inputPhone" name="phone">
        </div>
        <div class="col-12">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputEmail" placeholder="Tu email habitual" name="email">
        </div>
        <div class="col-12">
            <label for="inputPeople" class="form-label">Nº de personas:</label>
            <input type="text" class="form-control" id="inputPeople" name="people">
        </div>
        <div class="col-md-6">
            <label for="inputInfo" class="form-label">Observaciones:</label>
            <input type="text" class="form-control" id="inputInfo" name="info">
        </div>



    </form>

        <div class="col-12" id="deleteButton">
            <button type="submit" class="deleteButton btn btn-primary">Borrar formulario</button>
        </div>

        </<section>
            
        
        <div class="col-12" id="submitButton">
        <button type="submit" class="submitButton btn btn-primary">Aceptar</button>
        
        <button type="submit" class="cancelButton btn btn-primary">cancelar</button>
        </div>
    

    <!-- </section> -->

</body>