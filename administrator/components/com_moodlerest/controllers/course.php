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

jimport('joomla.application.component.controllerform');

/**
 * Course controller class.
 *
 * @since  1.6
 */
class MoodlerestControllerCourse extends JControllerForm
{
	/**
	 * Constructor
	 *
	 * @throws Exception
	 */
	public function __construct()
	{
		$this->view_list = 'courses';
		parent::__construct();
	}
}
