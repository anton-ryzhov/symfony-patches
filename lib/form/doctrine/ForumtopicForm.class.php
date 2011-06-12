<?php

/**
 * Forumtopic form.
 *
 * @package    symfony-patches
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ForumtopicForm extends BaseForumtopicForm
{
  public function configure()
  {
    unset($this['created_at']);
    unset($this['updated_at']);

    $this->widgetSchema['caterogies'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Forumcategory'), 'add_empty' => true, 'multiple'=> true));
    $this->validatorSchema['caterogies'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Forumcategory'), 'multiple'=> true, 'required'=> false));
  }
}
