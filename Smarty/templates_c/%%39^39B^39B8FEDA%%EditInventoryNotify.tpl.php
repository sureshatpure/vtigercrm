<?php /* Smarty version 2.6.18, created on 2013-08-20 07:20:07
         compiled from Settings/EditInventoryNotify.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'Settings/EditInventoryNotify.tpl', 16, false),)), $this); ?>
<div id="EditInv" class="layerPopup">
<table border=0 cellspacing=0 cellpadding=5 width=100% class=layerHeadingULine>
<tr>
	<td class="layerPopupHeading" align="left"><?php echo $this->_tpl_vars['NOTIFY_DETAILS']['label']; ?>
</td>
	<td align="right" class="small"><img onClick="hide('editdiv');" style="cursor:pointer;" src="<?php echo vtiger_imageurl('close.gif', $this->_tpl_vars['THEME']); ?>
" align="middle" border="0"></td>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=5 width=95% align=center> 
<tr>
	<td class="small">
	<table border=0 celspacing=0 cellpadding=5 width=100% align=center bgcolor=white>
	<tr>
		<td colspan="2">
			<b><font color="red">*</font><?php echo $this->_tpl_vars['CMOD']['LBL_NOTE_DO_NOT_REMOVE_INFO']; ?>
</b>
		</td>
	</tr>
	<tr>
		<td align="right"  class="cellLabel small" width="40%"><b><?php echo $this->_tpl_vars['MOD']['LBL_STATUS']; ?>
 :</b></td>
	<td align="left"  class="cellText small" width="60%">
		<select class="small" id="notify_status" name="notify_status">
	<?php if ($this->_tpl_vars['NOTIFY_DETAILS']['status'] == 1): ?>
		<option value="1" "selected"><?php echo $this->_tpl_vars['MOD']['LBL_ACTIVE']; ?>
</option>
		<option value="0"><?php echo $this->_tpl_vars['MOD']['LBL_INACTIVE']; ?>
</option>
	<?php else: ?>
		<option value="1"><?php echo $this->_tpl_vars['MOD']['LBL_ACTIVE']; ?>
</option>
		<option value="0" "selected"><?php echo $this->_tpl_vars['MOD']['LBL_INACTIVE']; ?>
</option>
	<?php endif; ?>
	</select>
	</td>
	</tr>
	
	<tr>
		<td align="right" class="cellLabel small"><b><?php echo $this->_tpl_vars['MOD']['LBL_SUBJECT']; ?>
 : </b></td>
		<td align="left" class="cellText small"><input class="txtBox" id="notifysubject" name="notifysubject" value="<?php echo $this->_tpl_vars['NOTIFY_DETAILS']['subject']; ?>
" size="40" type="text"></td>
	</tr>
	<tr>
		<td align="right" valign="top" class="cellLabel small"><b><?php echo $this->_tpl_vars['MOD']['LBL_MESSAGE']; ?>
 : </b></td>
		<td align="left" class="cellText small"><textarea id="notifybody" name="notifybody" class="txtBox" rows="5" cols="40"><?php echo $this->_tpl_vars['NOTIFY_DETAILS']['body']; ?>
</textarea></td>
	</tr>
	</table>
	</td>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=5 width=100% class="layerPopupTransport">
<tr>
	<td align="center" class="small">
		<input name="save" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" class="crmButton small save" type="button" onClick="fetchSaveNotify('<?php echo $this->_tpl_vars['NOTIFY_DETAILS']['id']; ?>
')">
		<input name="cancel" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" class="crmButton small cancel" type="button" onClick="hide('editdiv');">
	</td>
	</tr>
</table>
</div>