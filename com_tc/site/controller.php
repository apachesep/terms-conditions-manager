<?php
/**
 * @version    SVN: <svn_id>
 * @package    Com_Tc
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2016-2017 TechJoomla. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

/**
 * Class TcController
 *
 * @since  1.6
 */
class TcController extends JControllerLegacy
{
	/**
	 * Method to display a view.
	 *
	 * @param   boolean  $cachable   If true, the view output will be cached
	 * @param   mixed    $urlparams  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return  JController   This object to support chaining.
	 *
	 * @since    1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		$app  = JFactory::getApplication();
		$view = $app->input->getCmd('view', 'contents');
		$app->input->set('view', $view);

		parent::display($cachable, $urlparams);

		return $this;
	}
}
