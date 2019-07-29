<?php
use yii\helpers\Url;

/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 2016/12/15
 * Time: 下午8:59
 */

/**
 * @var \yii\web\View $this
 */
$this->title = 'wiki';
$this->params['breadcrumbs'][] = 'wiki';

?>
<?php echo $this->render('search') ?>

<div class="am-container help">
  
<?php echo $this->render('left') ?>

  <div class="am-u-md-9">
  <div class="help-box-r">
  		    	<div class="bd">    	
        	<ul class="list-items help-lists">
        	
        	<?php foreach ($book as $bk): ?>
          	<li class="list-item">
              <a href="<?= Url::to(['default/view','id'=>$bk['id']]) ?>">
                <div class="am-g">
                    <div class="am-u-md-3 am-u-sm-3">
                      <div class="img-box">
                        <img src="<?= $bk['book_cover'];?>">
                      </div>
                    </div>
                    <div class="am-u-md-9 am-u-sm-9 item-r">
                          <h2><?= $bk['book_name']?></h2>
                          <p><?= $bk['book_description']?></p>
                         <div class="list-footer">
                           <span class="time am-margin-right-sm list-footer-hd"><?=$bk['created_at'] ?></span>                         
                        </div>
                      </div>
                  </div>
              </a>
             </li>
            <?php endforeach; ?>
           </ul>
      	</div>
   </div>
<div class="page">
<div>    </div>   </div>
</div>	
</div>

<?php /* echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_item',
    'layout' => '{items} {pager}',
    'options' => [
        'class' => 'row'
    ],
    'itemOptions' => [
        'class' => 'col-xs-3'
    ],
])  */?>

