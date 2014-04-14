<?php

/**
 * Page
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    zzz
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
class Page extends BasePage
{
    public function __toString()
    {
        $cul = sfContext::getInstance()->getUser()->getCulture();
        if($cul == 'en')
            return $this->getTitleEn();
        elseif ($cul == 'ru')
            return $this->getTitleRu();
        else 
            return $this->getTitle();
    }
    
    
    public function getContentCulture()
    {
        $cul = sfContext::getInstance()->getUser()->getCulture();
        if($cul == 'en')
            return $this->getContentEn();
        elseif ($cul == 'ru')
            return $this->getContentRu();
        else 
            return $this->getContent();
    }

}