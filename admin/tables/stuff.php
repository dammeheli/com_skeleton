<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

// import Joomla table library
jimport('joomla.database.table');

/**
 * Stuff Table class
 */
class SkeletonTableStuff extends JTable
{
    /**
     * Constructor
     *
     * @param JDatabaseDriver $db Database connector object
     */
    public function __construct($db)
    {
        parent::__construct('#__skeleton', 'id', $db);
    }
}