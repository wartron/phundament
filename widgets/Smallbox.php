<?php

namespace app\widgets;

/**
 * Smallbox Bootstrap Widget
 */
class Smallbox extends \yii\bootstrap\Widget
{


    public $h3;
    public $message;
    public $url;
    public $icon;
    public $bg;
    public $title;


    public function init()
    {
        parent::init();
        
?>
    <div class="col-md-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-<?= $this->bg ?>">
            <div class="inner">
                <h3>
                    <?= $this->h3 ?>
                </h3>

                <p>
                    <?= $this->message ?>
                </p>
            </div>
            <?php if( $this->icon ): ?>
                <div class="icon">
                    <i class="ion ion-<?= $this->icon ?>"></i>
                </div>
            <?php endif; ?>
            <a href="<?= \yii\helpers\Url::to($this->url) ?>" class="small-box-footer">
                <?= $this->title ?> <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

<?php
      
    }
}
