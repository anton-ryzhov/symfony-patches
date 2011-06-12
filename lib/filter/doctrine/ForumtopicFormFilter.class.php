<?php

/**
 * Forumtopic filter form.
 *
 * @package    symfony-patches
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ForumtopicFormFilter extends BaseForumtopicFormFilter
{
  public function configure()
  {
    unset($this['created_at']);
    unset($this['updated_at']);
  }
}
