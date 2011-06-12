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

    $this->widgetSchema['upload'] = new sfWidgetFormInputFile();
    $this->validatorSchema['upload'] = new sfValidatorFile(array('required'=> false));
  }
}
