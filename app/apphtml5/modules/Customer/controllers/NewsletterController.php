<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
namespace fecshop\app\apphtml5\modules\Customer\controllers;
use Yii;
use fec\helpers\CModule;
use fec\helpers\CRequest;
use fecshop\app\apphtml5\modules\AppfrontController;
use fecshop\app\apphtml5\helper\test\My;
/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */
class NewsletterController extends AppfrontController
{
    //protected $_registerSuccessRedirectUrlKey = 'customer/account';
	
	public function init(){
		parent::init();
	}
	/**
	 * 
	 */
	public function actionIndex(){
		$data = $this->getBlock()->getLastData();
		return $this->render($this->action->id,$data);
	}
	
	
}
















