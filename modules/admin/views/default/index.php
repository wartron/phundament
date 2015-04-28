<div class="row">
<?php
    echo \app\widgets\Smallbox::widget([
        'h3'            => \app\models\User::find()->count(),
        'message'       => 'Users',
        'bg'            => 'aqua',
        'icon'          => 'person',
        'title'         => 'Manage',
        'url'           => ['/user/admin'],
    ]);

    echo \app\widgets\Smallbox::widget([
        'h3'            => count(\Yii::$app->getModule('admin')->getControllers()),
        'message'       => 'Application Controllers',
        'bg'            => 'primary',
        'icon'          => 'home',
        'title'         => 'Homepage',
        'url'           => ['/'],
    ]);

    echo \app\widgets\Smallbox::widget([
        'h3'            => count(\Yii::$app->getModules()),
        'message'       => 'Modules',
        'bg'            => 'gray',
        'icon'          => 'stats-bars',
        'title'         => 'Browse Packages',
        'url'           => 'http://packagist.com',
    ]);

    echo \app\widgets\Smallbox::widget([
        'h3'            => YII_ENV,
        'message'       => getenv('APP_VERSION'),
        'bg'            => strstr(getenv('APP_VERSION'),'dirty') ? 'orange' : 'green',
        'icon'          => 'pie-graph',
        'title'         => 'Application Configuration',
        'url'           => ['view-config'],
    ]);


?>

</div>

<div class="row">
    <div class="col-sm-6">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Application Controllers</h3>
            </div>
            <div class="box-body">
                <?php
                foreach (\Yii::$app->getModule('admin')->getControllers() AS $i => $controller) {
                    echo yii\helpers\Html::a(
                        $controller,
                        ['/' . $controller],
                        ['class' => 'btn btn-default btn-block btn-flat']
                    );
                }
                ?>
            </div>
            <!-- /.box-body -->
        </div>
        <div class="callout callout-info">
            <h4>Prepare the test-suites!</h4>

            <p>Use <code>./yii app/setup-tests</code> to initialize codeception.</p>
        </div>
        <!-- /.box -->
    </div>

    <div class="col-sm-6">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Online Documentation</h3>
            </div>
            <div class="box-body">
                <div class="alert alert-warning">
                    <i class="fa fa-warning"></i>
                    <b>Notice!</b> Use <code>./yii app/setup-docs</code> and <code>./yii app/generate-docs</code> to
                    create the local HTML documentation for this application.
                </div>
                <p>

                    <?= yii\helpers\Html::a(
                        'Phundament Guide',
                        'http://phundament.com/docs',
                        ['target' => '_blank', 'class' => 'btn btn-default btn-block btn-flat']
                    ); ?>

                </p>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <small>Need help? Get <?= yii\helpers\Html::a(
                        'support',
                        'mailto:' . \Yii::$app->params['supportEmail']
                    ); ?>.
                </small>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </div>
</div>
