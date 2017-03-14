<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';

    /**
     * @var bool Check status for production environment
     */
    public $checkProduction = true;

	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

    /*
     * controller Labels
     */
    public $labels=array();

	/*
     * Labels filters//Not a good way to call labels//removed
     */
   /* public function filters()
	{
		$this->labels = GenericProperties::getCacheLabels();
    }*/

    /**
     *this will overwrite constructor of CController
     */
    public function init()
    {

        parent::init();
        $site_id=Yii::app()->request->getParam('site_id',0);
        if($site_id>0 && $site_id!=Yii::app()->session['site_id']){
            $cookie_affiliate_id = new CHttpCookie("site_id",$site_id);
            $cookie_affiliate_id->expire = time()+60*60*24*30;
            Yii::app()->request->cookies['site_id'] = $cookie_affiliate_id;
            Yii::app()->session['site_id'] = $site_id;
        }
    }

    public function getAccess($menu=false,$controller='',$action='')
    {

        if(!Yii::app()->user->isGuest)
        {
            return [Yii::app()->session['username']];
        }
        elseif($menu)
        {
            return false;
        }

        return array(false);

    }


	public function getTab($v)
    {
        if(!is_array($v)){
            $v = array($v);
        }

        $active = false;

        foreach($v as $c){
            if(strtolower(Yii::app()->controller->id)==strtolower($c))
            {
                $active = true;
                break;
            }
        }

        if($active){
            return 'style="display:block"';
        }
        else{
            return 'style="display:none"';
        }
    }

    /**
     * @return mixed
     */
    public function getUserFullName()
    {
        return (empty(Yii::app()->session['user_full_name']))?Yii::app()->user->name:Yii::app()->session['user_full_name'];
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return Yii::app()->user->getId();
    }



}