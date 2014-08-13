<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controller library
jimport('joomla.application.component.controller');

/**
 * General Controller of Skeleton component
 */
class SkeletonAdminController extends JControllerLegacy
{
    /**
     * display task
     *
     * @param bool  $cachable
     * @param array $urlparams
     *
     * @throws Exception
     * @return void
     */
    function display($cachable = false, $urlparams = [])
    {
        // set default view if not set
        $input = JFactory::getApplication()->input;
        $input->set('view', $input->getCmd('view', 'Stuff'));

        // call parent behavior
        parent::display($cachable);
    }
}