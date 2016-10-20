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

$canEdit = JFactory::getUser()->authorise('core.edit', 'com_moodlerest');
if (!$canEdit && JFactory::getUser()->authorise('core.edit.own', 'com_moodlerest')) {
	$canEdit = JFactory::getUser()->id == $this->item->created_by;
}
?>
<?php if ($this->item) : ?>

	<div class="item_fields">
		<table class="table">
			<tr>
			<th><?php echo JText::_('COM_MOODLEREST_FORM_LBL_COURSE_STATE'); ?></th>
			<td>
			<i class="icon-<?php echo ($this->item->state == 1) ? 'publish' : 'unpublish'; ?>"></i></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_MOODLEREST_FORM_LBL_COURSE_CREATED_BY'); ?></th>
			<td><?php echo $this->item->created_by_name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_MOODLEREST_FORM_LBL_COURSE_MODIFIED_BY'); ?></th>
			<td><?php echo $this->item->modified_by_name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_MOODLEREST_FORM_LBL_COURSE_NAME'); ?></th>
			<td><?php echo $this->item->name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_MOODLEREST_FORM_LBL_COURSE_SHORTNAME'); ?></th>
			<td><?php echo $this->item->shortname; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_MOODLEREST_FORM_LBL_COURSE_SUMARRY'); ?></th>
			<td><?php echo $this->item->sumarry; ?></td>
</tr>

		</table>
	</div>
	<?php if($canEdit && $this->item->checked_out == 0): ?>
		<a class="btn" href="<?php echo JRoute::_('index.php?option=com_moodlerest&task=course.edit&id='.$this->item->id); ?>"><?php echo JText::_("COM_MOODLEREST_EDIT_ITEM"); ?></a>
	<?php endif; ?>
								<?php if(JFactory::getUser()->authorise('core.delete','com_moodlerest')):?>
									<a class="btn" href="<?php echo JRoute::_('index.php?option=com_moodlerest&task=course.remove&id=' . $this->item->id, false, 2); ?>"><?php echo JText::_("COM_MOODLEREST_DELETE_ITEM"); ?></a>
								<?php endif; ?>
	<?php
else:
	echo JText::_('COM_MOODLEREST_ITEM_NOT_LOADED');
endif;
