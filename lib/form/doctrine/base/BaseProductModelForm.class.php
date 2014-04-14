<?php

/**
 * ProductModel form base class.
 *
 * @method ProductModel getObject() Returns the current form's model object
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductModelForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'product_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => false)),
      'name'       => new sfWidgetFormInputText(),
      'name_en'    => new sfWidgetFormInputText(),
      'sort'       => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'product_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Product'))),
      'name'       => new sfValidatorString(array('max_length' => 100)),
      'name_en'    => new sfValidatorString(array('max_length' => 100)),
      'sort'       => new sfValidatorInteger(),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product_model[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductModel';
  }

}
