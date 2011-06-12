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

    $this->form = new ForumtopicFormFilter();
    if ($request->isMethod('post') || $request->isMethod('put'))
    {
      $this->form->bind($request->getParameter('forumtopic_filters'), $request->getFiles('forumtopic_filters'));
      if ($this->form->isValid())
      {
        echo '<pre>';
        $this->form->getQuery();
        echo '</pre>';
        echo 'It should be array(field=> type), and it do<hr />';
      }
    }
  }
}
