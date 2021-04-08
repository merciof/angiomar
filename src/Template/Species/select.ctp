<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Local $local
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


?>

<div class="container">

    <div class="row" style="margin-top: 5%;">
        <h4>Selecione abaixo a espécie de angiosperma:</h4>


    </div>

    <div class="row">

        <div class="col-md-4">
            <form action="http://localhost:8080/species/select" method="POST">

                <!-- enviar o código csrf -->

                <input type="hidden" name="species_id" value="1">

                <br>
                <?php print $this->Html->image('halodule.png', ['class' => 'thumbnail', 'style' => 'width: 180px; height: 171px;']);  ?>

                <button type="submit" class="btn btn-lg"> Selecionar </button>

            </form>
        </div>

        <div class="col-md-4">

            <br>

            <form action="http://localhost:8080/species/select" method="POST">

                <input type="hidden" value="2" name="species_id">

                <?php print $this->Html->image('halophila_decipiens.png', ['class' => 'thumbnail', 'style' => 'width: 180px; height: 171px;']);  ?>

                <button type="submit" class="btn btn-lg"> Selecionar </button>

            </form>
        </div>


        <div class="col-md-4">
            <br>
            <form action="http://localhost:8080/species/select" method="POST">

                <input type="hidden" name="species_id" value="3">

                <img src="/img/ruppia.png" alt="" class="thumbnail" style="width: 180px; height: 171px;">

                <button type="submit" class="btn btn-lg"> Selecionar </button>

            </form>


        </div>



    </div>

</div>