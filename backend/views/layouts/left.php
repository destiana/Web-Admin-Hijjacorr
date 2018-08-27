<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/admin1.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu HijjaCorr - App', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Database',
                        'icon' => 'fa fa-database',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Pengetahuan Berhijab', 'icon' => 'fa fa-pencil-square-o', 'url' => ['/pengetahuan']],
                            //['label' => 'Panduan Berhijab', 'icon' => 'fa fa-pencil-square-o', 'url' => ['/panduan']],
                            ['label' => 'Panduan Aplikasi', 'icon' => 'fa fa-pencil-square-o', 'url' => ['/panduan-app']],
                            //['label' => 'Verifikasi Gambar', 'icon' => 'fa fa-pencil-square-o', 'url' => ['/verif-gambar']],
                            ['label' => 'Tuntunan', 'icon' => 'fa fa-pencil-square-o', 'url' => ['/tuntunan']],
                            ['label' => 'Model - 1', 'icon' => 'fa fa-pencil-square-o', 'url' => ['/model1']],
                            ['label' => 'Model - 2', 'icon' => 'fa fa-pencil-square-o', 'url' => ['/model2']],
                            ['label' => 'Model - 3', 'icon' => 'fa fa-pencil-square-o', 'url' => ['/model3']],
                            ['label' => 'Model - 4', 'icon' => 'fa fa-pencil-square-o', 'url' => ['/model4']],
                        ],
                    ],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
