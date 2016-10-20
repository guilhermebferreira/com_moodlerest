<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Moodlerest
 * @author     Guilherme Ferreira <guilherme@conecte3.com.br>
 * @copyright  2016 Guilherme Ferreira
 * @license    GNU General Public License versão 2 ou posterior; consulte o arquivo License. txt
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Moodlerest', JPATH_COMPONENT);
JLoader::register('MoodlerestController', JPATH_COMPONENT . '/controller.php');


// Execute the task.
$controller = JControllerLegacy::getInstance('Moodlerest');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
