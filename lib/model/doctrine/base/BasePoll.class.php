<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Poll', 'doctrine');

/**
 * BasePoll
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $question
 * @property string $question_en
 * @property integer $sort
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Doctrine_Collection $PollOption
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getQuestion()    Returns the current record's "question" value
 * @method string              getQuestionEn()  Returns the current record's "question_en" value
 * @method integer             getSort()        Returns the current record's "sort" value
 * @method timestamp           getCreatedAt()   Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()   Returns the current record's "updated_at" value
 * @method Doctrine_Collection getPollOption()  Returns the current record's "PollOption" collection
 * @method Poll                setId()          Sets the current record's "id" value
 * @method Poll                setQuestion()    Sets the current record's "question" value
 * @method Poll                setQuestionEn()  Sets the current record's "question_en" value
 * @method Poll                setSort()        Sets the current record's "sort" value
 * @method Poll                setCreatedAt()   Sets the current record's "created_at" value
 * @method Poll                setUpdatedAt()   Sets the current record's "updated_at" value
 * @method Poll                setPollOption()  Sets the current record's "PollOption" collection
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePoll extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('poll');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('question', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('question_en', 'string', 255, array(
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
        $this->hasMany('PollOption', array(
             'local' => 'id',
             'foreign' => 'poll_id'));
    }
}