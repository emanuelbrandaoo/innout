<main class="content">
    <?php
    renderTitle(
        'Registrar Ponto',
        'Mantenha seu ponto consistente',
        'icofont-check-alt',
    );
    include(TEMPLATE_PATH . "/messages.php");
    ?>
    <div class="card">
        <div class="card-header">
            <h3><?= $today ?></h3>
            <p class="mb-0">Batimentos efetuados hoje:</p>
        </div>
        <div class="card-body">
            <div class="d-flex m-5 justify-content-around">
                <span class="record">1&#170; Entrada: <?= $workingHours->time1 ?? '----' ?></span>
                <span class="record">1&#170; Saída: <?= $workingHours->time2 ?? '----' ?></span>
            </div>
            <div class="d-flex m-5 justify-content-around">
                <span class="record">2&#170; Entrada: <?= $workingHours->time3 ?? '----' ?></span>
                <span class="record">2&#170; Saída: <?= $workingHours->time4 ?? '----' ?></span>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a href="innout.php" class="btn btn-success btn-lg">
                <i class="icofont-clock-time mr-1"></i>
                Bater Ponto
            </a>
        </div>
    </div>
</main>