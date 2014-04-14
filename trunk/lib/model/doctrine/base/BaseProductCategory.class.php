<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ProductCategory', 'doctrine');

/**
 * BaseProductCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property string $name_en
 * @property boolean $has_leasing
 * @property integer $sort
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Doctrine_Collection $Product
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method integer             getParentId()    Returns the current record's "parent_id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getNameEn()      Returns the current record's "name_en" value
 * @method boolean             getHasLeasing()  Returns the current record's "has_leasing" value
 * @method integer             getSort()        Returns the current record's "sort" value
 * @method timestamp           getCreatedAt()   Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()   Returns the current record's "updated_at" value
 * @method Doctrine_Collection getProduct()     Returns the current record's "Product" collection
 * @method ProductCategory     setId()          Sets the current record's "id" value
 * @method ProductCategory     setParentId()    Sets the current record's "parent_id" value
 * @method ProductCategory     setName()        Sets the current record's "name" value
 * @method ProductCategory     setNameEn()      Sets the current record's "name_en" value
 * @method ProductCategory     setHasLeasing()  Sets the current record's "has_leasing" value
 * @method ProductCategory     setSort()        Sets the current record's "sort" value
 * @method ProductCategory     setCreatedAt()   Sets the current record's "created_at" value
 * @method ProductCategory     setUpdatedAt()   Sets the current record's "updated_at" value
 * @method ProductCategory     setProduct()     Sets the current record's "Product" collection
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProductCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('product_category');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('parent_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('name_en', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('has_leasing', 'boolean', null, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
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
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Product', array(
             'local' => 'id',
             'foreign' => 'category_id'));
    }
}