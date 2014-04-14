<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Service', 'doctrine');

/**
 * BaseService
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property string $title_en
 * @property string $image
 * @property string $summary
 * @property string $summary_en
 * @property string $body
 * @property string $body_en
 * @property string $color
 * @property integer $sort
 * @property timestamp $created_at
 * 
 * @method integer   getId()         Returns the current record's "id" value
 * @method string    getTitle()      Returns the current record's "title" value
 * @method string    getTitleEn()    Returns the current record's "title_en" value
 * @method string    getImage()      Returns the current record's "image" value
 * @method string    getSummary()    Returns the current record's "summary" value
 * @method string    getSummaryEn()  Returns the current record's "summary_en" value
 * @method string    getBody()       Returns the current record's "body" value
 * @method string    getBodyEn()     Returns the current record's "body_en" value
 * @method string    getColor()      Returns the current record's "color" value
 * @method integer   getSort()       Returns the current record's "sort" value
 * @method timestamp getCreatedAt()  Returns the current record's "created_at" value
 * @method Service   setId()         Sets the current record's "id" value
 * @method Service   setTitle()      Sets the current record's "title" value
 * @method Service   setTitleEn()    Sets the current record's "title_en" value
 * @method Service   setImage()      Sets the current record's "image" value
 * @method Service   setSummary()    Sets the current record's "summary" value
 * @method Service   setSummaryEn()  Sets the current record's "summary_en" value
 * @method Service   setBody()       Sets the current record's "body" value
 * @method Service   setBodyEn()     Sets the current record's "body_en" value
 * @method Service   setColor()      Sets the current record's "color" value
 * @method Service   setSort()       Sets the current record's "sort" value
 * @method Service   setCreatedAt()  Sets the current record's "created_at" value
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseService extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('service');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('title_en', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('image', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('summary', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('summary_en', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('body', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('body_en', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('color', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('sort', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}