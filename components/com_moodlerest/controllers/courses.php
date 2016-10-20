<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Moodlerest
 * @author     Guilherme Ferreira <guilherme@conecte3.com.br>
 * @copyright  2016 Guilherme Ferreira
 * @license    GNU General Public License versão 2 ou posterior; consulte o arquivo License. txt
 */

// No direct access.
defined('_JEXEC') or die;

/**
 * Courses list controller class.
 *
 * @since  1.6
 */
class MoodlerestControllerCourses extends MoodlerestController
{
	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional
	 * @param   array   $config  Configuration array for model. Optional
	 *
	 * @return object	The model
	 *
	 * @since	1.6
	 */
	public function &getModel($name = 'Courses', $prefix = 'MoodlerestModel', $config = array())
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));

		return $model;
	}
}
