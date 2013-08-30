<?php /* Smarty version 2.6.18, created on 2013-08-21 06:06:40
         compiled from modules/SMSNotifier/SMSNotifierComposeWizard.tpl */ ?>

<div style="width: 400px;">

	<form method="POST" action="javascript:void(0);">
	
	<table width="100%" cellpadding="5" cellspacing="0" border="0" class="small mailClient">
	<tr>
		<td colspan="2" class="mailClientWriteEmailHeader" width="90%" align="left">Compose SMS</td>
	</table>
	
	<table width="100%" cellpadding="5" cellspacing="0" border="0" align="center">
	<tr>
		<td>
		
			Message:<br/>
			<textarea name="message" class="small" rows="12" cols="10" onkeyup="$('__smsnotifer_compose_wordcount__').innerHTML=this.value.length"></textarea>
		</td>
	<tr>
		<td align="right"><span id="__smsnotifer_compose_wordcount__">0</span> characters </td>	
	</tr>
	</table>
	
	<table width="100%" cellpadding="5" cellspacing="0" border="0" class="layerPopupTransport">
	<tr>
		<td class="small" align="center">
			<input type="hidden" name="idstring" value="<?php echo $this->_tpl_vars['IDSTRING']; ?>
" />
            <input type="hidden" name="excludedRecords" value="<?php echo $this->_tpl_vars['excludedRecords']; ?>
"/>
            <input type="hidden" name="viewid" value="<?php echo $this->_tpl_vars['VIEWID']; ?>
"/>
			<input type="hidden" name="searchurl" value="<?php echo $this->_tpl_vars['SEARCHURL']; ?>
"/>
			<input type="hidden" name="phonefields" value="<?php echo $this->_tpl_vars['PHONEFIELDS']; ?>
" />
			<input type="hidden" name="sourcemodule" value="<?php echo $this->_tpl_vars['SOURCEMODULE']; ?>
" />
			
			<input type="button" class="small crmbutton save" onclick="SMSNotifierCommon.triggerSendSMS(this.form);" value="<?php echo $this->_tpl_vars['APP']['LBL_SEND']; ?>
"/>
			<input type="button" class="small crmbutton cancel" onclick="SMSNotifierCommon.hideComposeWizard();" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"/>
		</td>
	</tr>
	</table>

	</form>
</div>