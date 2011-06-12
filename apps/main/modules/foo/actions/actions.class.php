<?php

/**
 * foo actions.
 *
 * @package    symfony-patches
 * @subpackage foo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fooActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->data = ForumtopicTable::getInstance()->createQuery('f')->
      where('f.published')->
      execute();

    $this->form = new ForumtopicForm();
    if ($request->isMethod('post') || $request->isMethod('put'))
    {
      $this->form->bind($request->getParameter('forumtopic'), $request->getFiles('forumtopic'));
      if ($this->form->isValid())
      {
        $this->form->updateObject();
        //$this->form->save();
      }
    }
  }
}
