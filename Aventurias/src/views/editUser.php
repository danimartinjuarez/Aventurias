<?php 
    require_once("Components/layout.php");    
?>

<body id="bodyForUpdateUser">
    <?php
        require_once("Components/Header.php");
    ?>
<!-- <section id="formUpdate"> -->
        <form class="row g-3" id="formUpdateUser" action='?action=update&id=<?php echo $data["user"]->getId() ?>' method="post">
            <div id="checkImages">
                <div class="form-check, check" >
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
                    <input class="form-check-input, point" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="motos de agua" >
                
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
                    <input class="form-check-input, point" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="Ruta del Cares" >
                    
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputName" class="form-label">Nombre</label>
                <input type="name" class="form-control" id="inputName" name="user" required value='<?php echo $data["user"]->getName() ?>'>
            </div>
            <div class="col-md-6">
                <label for="inputPhone" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="inputPhone" required value='<?php echo $data["user"]->getPhone() ?>'>
            </div>
            <div class="col-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputEmail" required value='<?php echo $data["user"]->getEmail() ?>'>
            </div>
            <div class="col-12">
                <label for="inputPeople" class="form-label">Nº de personas:</label>
                <input type="text" class="form-control" id="inputPeople" required value='<?php echo $data["user"]->getPeople() ?>'>
            </div>
            <div class="col-md-6">
                <label for="inputInfo" class="form-label">Observaciones:</label>
                <input type="text" class="form-control" id="inputInfo" required value='<?php echo $data["user"]->getInfo() ?>'>
            </div>
            
        </form>
        <div class="col-12" id="submitButton">
            <input class="btn-lg btn-outline-success go-add-task float" type="submit" value="Edit">
            
            <input class="btn-lg btn-outline-warning go-add-task float" type="reset" value="Reset">
        </div>
    <!-- </section> -->
       
</body>