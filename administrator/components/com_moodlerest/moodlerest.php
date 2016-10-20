<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Moodlerest
 * @author     Guilherme Ferreira <guilherme@conecte3.com.br>
 * @copyright  2016 Guilherme Ferreira
 * @license    GNU General Public License versão 2 ou posterior; consulte o arquivo License. txt
 */

// No direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_moodlerest'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Moodlerest', JPATH_COMPONENT_ADMINISTRATOR);

$controller = JControllerLegacy::getInstance('Moodlerest');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
