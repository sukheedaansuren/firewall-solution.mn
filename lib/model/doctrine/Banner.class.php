<?php

/**
 * Banner
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    zzz
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
class Banner extends BaseBanner
{
  public function __toString()
  {
    return $this->getFilename();
  }
}