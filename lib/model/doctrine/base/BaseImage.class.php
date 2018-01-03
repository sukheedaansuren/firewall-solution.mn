<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Image', 'doctrine');

/**
 * BaseImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property string $title_en
 * @property string $title_ru
 * @property string $description
 * @property string $description_en
 * @property string $description_ru
 * @property string $filename
 * @property timestamp $created_at
 * 
 * @method integer   getId()             Returns the current record's "id" value
 * @method string    getTitle()          Returns the current record's "title" value
 * @method string    getTitleEn()        Returns the current record's "title_en" value
 * @method string    getTitleRu()        Returns the current record's "title_ru" value
 * @method string    getDescription()    Returns the current record's "description" value
 * @method string    getDescriptionEn()  Returns the current record's "description_en" value
 * @method string    getDescriptionRu()  Returns the current record's "description_ru" value
 * @method string    getFilename()       Returns the current record's "filename" value
 * @method timestamp getCreatedAt()      Returns the current record's "created_at" value
 * @method Image     setId()             Sets the current record's "id" value
 * @method Image     setTitle()          Sets the current record's "title" value
 * @method Image     setTitleEn()        Sets the current record's "title_en" value
 * @method Image     setTitleRu()        Sets the current record's "title_ru" value
 * @method Image     setDescription()    Sets the current record's "description" value
 * @method Image     setDescriptionEn()  Sets the current record's "description_en" value
 * @method Image     setDescriptionRu()  Sets the current record's "description_ru" value
 * @method Image     setFilename()       Sets the current record's "filename" value
 * @method Image     setCreatedAt()      Sets the current record's "created_at" value
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseImage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('image');
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
        $this->hasColumn('title_ru', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('description_en', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('description_ru', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('filename', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
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