<?php

/**
 * ProductModel
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ProductModel extends BaseProductModel
{
		public function __toString()
    {
        $cul = sfContext::getInstance()->getUser()->getCulture();
        if($cul == 'en')
            return $this->getNameEn();
        else 
            return $this->getName();
    }
}