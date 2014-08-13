<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla modelitem library
jimport('joomla.application.component.modelitem');

/**
 * Stuff Model
 */
class SkeletonAdminModelStuff extends JModelItem
{
    /**
     * @var string msg
     */
    protected $msg;

    /**
     * Returns a reference to the a Table object, always creating it.
     *
     * @param       string $type   The table type to instantiate
     * @param       string $prefix A prefix for the table class name. Optional.
     * @param       array  $config Configuration array for model. Optional.
     *
     * @return      JTable  A database object
     * @since       2.5
     */
    public function getTable($type = 'Stuff', $prefix = 'SkeletonTable', $config = [])
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    /**
     * Get the message
     * @return string The message to be displayed to the user
     */
    public function getMsg()
    {
        if (!isset($this->msg)) {
            $this->msg = 'Stuff!';
        }
        return $this->msg;
    }
}
 