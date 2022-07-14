<html>
    <?php
    //echo "estoy en coderlist";
    require_once ("Components/layout.php");
    ?>
    <body>
        <?php
        require_once ("Components/header.php");
        ?>
        <main>
            <div class="card-header py-3">
                <h1 class="font-weight-bold text-black titulo-pagina">Task appointment</h1>
            </div>
            <?php
            foreach ($data["coder"] as $coder){
                echo ($coder->getID());
                echo ($coder->getCoder());
                echo ($coder->getIssue());
                echo ($coder->getDate_time());
            }
            ?>

            //bootstrap

            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Problema</th>
      <th scope="col">Fecha de toma de cita</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
            
        </main>
        <?php
        require_once ("Components/footer.php");
        ?>
    </body>
</html>