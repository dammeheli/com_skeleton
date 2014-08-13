<?php
// No direct access to this file
defined('_JEXEC') or die;

// import the list field type
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

/**
 * Skeleton Form Field class for the Skeleton component
 */
class JFormFieldSkeleton extends JFormFieldList
{
    /**
     * The field type.
     *
     * @var         string
     */
    protected $type = 'Skeleton';

    /**
     * Method to get a list of options for a list input.
     *
     * @return      array           An array of JHtml options.
     */
    protected function getOptions()
    {
        $options = [];

//        $db = JFactory::getDbo();
//        $query = $db->getQuery(true);
//        $query->select('id,greeting');
//        $query->from('#__skeleton');
//        $db->setQuery((string)$query);
//        $messages = $db->loadObjectList();
//
//        if ($messages) {
//            foreach ($messages as $message) {
//                $options[] = JHtml::_('select.option', $message->id, $message->greeting);
//            }
//        }

        $options = array_merge(parent::getOptions(), $options);
        return $options;
    }
}