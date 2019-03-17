<?php
$headText = ($editAction == 'updateSocialMediaLink') ? $spTextSMC['Edit Social Media Link'] : $spTextSMC['New Social Media Link'];
echo showSectionHead($headText);
?>
<form id="edit_form" onsubmit="return false;">
<input type="hidden" name="sec" value="<?php echo $editAction?>"/>
<?php if ($editAction == 'updateSocialMediaLink') {?>
	<input type="hidden" name="id" value="<?php echo $post['id']?>"/>
<?php }?>
<table id="cust_tab">
	<tr class="form_head">
		<th width='30%'><?php echo $headText?></th>
		<th>&nbsp;</th>
	</tr>	
	<tr class="form_data">
		<td><?php echo $spText['label']['Type']?>:</td>
		<td>
			<select name="type">
				<?php foreach($serviceList as $serviceName => $serviceInfo){?>
					<?php if($serviceName == $post['type']){?>
						<option value="<?php echo $serviceName?>" selected><?php echo $serviceInfo['label']?></option>
					<?php }else{?>
						<option value="<?php echo $serviceName?>"><?php echo $serviceInfo['label']?></option>
					<?php }?>
				<?php }?>
			</select>
			<?php echo $errMsg['service_name']?>
		</td>
	</tr>	
	<tr class="form_data">
		<td><?php echo $spText['common']['Website']?>:</td>
		<td>
			<select name="website_id">
				<?php foreach($websiteList as $websiteInfo){?>
					<?php if($websiteInfo['id'] == $post['website_id']){?>
						<option value="<?php echo $websiteInfo['id']?>" selected><?php echo $websiteInfo['name']?></option>
					<?php }else{?>
						<option value="<?php echo $websiteInfo['id']?>"><?php echo $websiteInfo['name']?></option>
					<?php }?>						
				<?php }?>
			</select>
			<?php echo $errMsg['website_id']?>
		</td>
	</tr>
	<tr class="form_data">
		<td><?php echo $spText['common']['Name']?>:</td>
		<td><input type="text" name="name" value="<?php echo $post['name']?>"><?php echo $errMsg['name']?></td>
	</tr>
	<tr class="form_data">
		<td><?php echo $spText['common']['Link']?>:</td>
		<td><input type="url" name="url" value="<?php echo $post['url']?>" style="width: 400px;"><?php echo $errMsg['url']?></td>
	</tr>
</table>
<br>
<table width="100%" class="actionSec">
	<tr>
    	<td style="padding-top: 6px;text-align:right;">
    		<a onclick="scriptDoLoad('<?php echo $pageScriptPath?>', 'content')" href="javascript:void(0);" class="actionbut">
         		<?php echo $spText['button']['Cancel']?>
         	</a>&nbsp;
         	<?php $actFun = SP_DEMO ? "alertDemoMsg()" : "confirmSubmit('$pageScriptPath', 'edit_form', 'content')"; ?>
         	<a onclick="<?php echo $actFun?>" href="javascript:void(0);" class="actionbut">
         		<?php echo $spText['button']['Proceed']?>
         	</a>
    	</td>
	</tr>
</table>
</form>