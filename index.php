<?php 
    require "config.php";
    include DBAPI; 
    include(HEADER_TEMPLATE); 
    $db = open_database(); 
?>

        <h1>Dashboard</h1>
        <hr>

        <?php if ($db) : ?>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-xl-2 col-lg-2 mb-2 p-0">
                <a href="customers/add.php" class="btn btn-secondary">
                    <div class="row">
                        <div class="col-xs-12 text-center p-0">
                            <i class="fa-user-plus fa-solid fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center p-0">
                            <p>Novo Cliente</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-xl-2 col-lg-2 mb-2 p-0">
                <a href="customers" class="btn btn-light">
                    <div class="row">
                        <div class="col-xs-12 text-center p-0">
                            <i class="fa-solid fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center p-0">
                            <p>Clientes</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-xl-2 col-lg-2 mb-2 p-0">
                <a href="customers/add.php" class="btn btn-secondary">
                    <div class="row">
                        <div class="col-xs-12 text-center p-0">
                            <i class="fa-user-plus fa-solid fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center p-0">
                            <p>Novo Tema</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-xl-2 col-lg-2 mb-2 p-0">
                <a href="customers" class="btn btn-light">
                    <div class="row">
                        <div class="col-xs-12 text-center p-0">
                            <i class="fa-solid fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center p-0">
                            <p>Tema</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
            </div>

        <?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>