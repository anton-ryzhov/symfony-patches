<?php

/**
 * Forumtopic form base class.
 *
 * @method Forumtopic getObject() Returns the current form's model object
 *
 * @package    symfony-patches
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseForumtopicForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'forumcategory_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Forumcategory'), 'add_empty' => false)),
      'title'            => new sfWidgetFormInputText(),
      'published'        => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'forumcategory_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Forumcategory'))),
      'title'            => new sfValidatorString(array('max_length' => 255)),
      'published'        => new sfValidatorInteger(),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('forumtopic[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Forumtopic';
  }

}
