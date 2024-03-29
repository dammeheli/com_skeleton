<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
* HTML View class for the Skeleton Component
*
* @since 0.0.1
*/
class SkeletonAdminViewStuff extends JViewLegacy
{
        /**
         * Display the Stuff view
         *
         * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
         *
         * @return  void
         */
        public function display($tpl = null)
        {
                // Assign data to the view
                $this->msg = 'Hello World';

                // Display the view
                parent::display($tpl);
        }
}
 