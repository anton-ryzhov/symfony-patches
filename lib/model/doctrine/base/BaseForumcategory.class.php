<?php

/**
 * BaseForumcategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property integer $sortfactor
 * @property Doctrine_Collection $Forumtopic
 * 
 * @method integer             getId()         Returns the current record's "id" value
 * @method string              getTitle()      Returns the current record's "title" value
 * @method integer             getSortfactor() Returns the current record's "sortfactor" value
 * @method Doctrine_Collection getForumtopic() Returns the current record's "Forumtopic" collection
 * @method Forumcategory       setId()         Sets the current record's "id" value
 * @method Forumcategory       setTitle()      Sets the current record's "title" value
 * @method Forumcategory       setSortfactor() Sets the current record's "sortfactor" value
 * @method Forumcategory       setForumtopic() Sets the current record's "Forumtopic" collection
 * 
 * @package    symfony-patches
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseForumcategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('forumcategory');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'unsigned' => true,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'comment' => 'Category name',
             'length' => 255,
             ));
        $this->hasColumn('sortfactor', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'comment' => 'Used in order by',
             'length' => 1,
             ));

        $this->option('charset', 'utf8');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('orderBy', 'sortfactor');
        $this->option('comment', 'Forum category');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Forumtopic', array(
             'local' => 'id',
             'foreign' => 'forumcategory_id'));
    }
}