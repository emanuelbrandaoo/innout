<main class="content">
    <?php 
        renderTitle(
            'Cadastro de Usuários',
            'Mantenha os dados dos usuários atualizados',
            'icofont-users'
        );
        
        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <a class="btn btn-lg btn-primary mb-3" href="save_user.php">Novo Usuário</a>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Início</th>
            <th>Data de Admissão</th>
            <th>Data de Desligamento</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user->name ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->start_date ?></td>
                    <td><?= $user->end_date ?></td>
                    <td>
                        <a href="save_user.php?update=<?= $user->id ?>"
                            class="btn btn-warning rounded-circle mr-2">
                            <i class="icofont-edit"></i>
                        </a>
                        <a href="?delete=<?= $user->id ?>"
                            class="btn btn-danger rounded-circle">
                            <i class="icofont-trash"></i>
                        </a>
                        </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <?php if ($_SESSION['user']->is_admin == 1) : ?>
        <div class="mt-4">
            <a class="btn btn-block btn-danger" href="data_generator.php">
                Gerar Dados
            </a>
        </div>
        <form class="mt-2" action="innout.php" method="post">
            <div class="input-group no-border">
                <input type="text" step="2" name="forcedTime" class="form-control" 
                placeholder="Formato: HH:MM:SS">
                <button class="btn btn-danger ml-3">
                    Simular Ponto
                </button>
            </div>
        </form>
    <?php endif ?>
</main>