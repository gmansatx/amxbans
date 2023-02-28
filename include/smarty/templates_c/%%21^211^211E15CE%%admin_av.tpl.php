<?php /* Smarty version 2.6.25, created on 2023-02-26 16:42:46
         compiled from admin_av.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_av.tpl', 4, false),array('modifier', 'date_format', 'admin_av.tpl', 106, false),array('modifier', 'default', 'admin_av.tpl', 145, false),array('function', 'html_options', 'admin_av.tpl', 97, false),)), $this); ?>
<div id="navigation">
	<div id="main-nav">
		<ul class="tabbed">
			<li id="header_1" onclick="ToggleMenu_open('1');"><a href="#"><?php echo ((is_array($_tmp='_ADMINAREA')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			<li id="header_2" onclick="ToggleMenu_open('2');"><a href="#"><?php echo ((is_array($_tmp='_SERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			<li id="header_3" onclick="ToggleMenu_open('3');"><a href="#"><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			<li id="header_4" onclick="ToggleMenu_open('4');"><a href="#"><?php echo ((is_array($_tmp='_OTHER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			<li id="header_5" onclick="ToggleMenu_open('5');"><a href="#"><?php echo ((is_array($_tmp='_MODULES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
		</ul>
		<div class="clearer">&nbsp;</div>
	</div>

	<div id="sub-nav">
		<div id="menu_1" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php"><?php echo ((is_array($_tmp='_MENUINFO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=ban_add"><?php echo ((is_array($_tmp='_ADDBAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=ban_add_online"><?php echo ((is_array($_tmp='_ADDBANONLINE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_2" style="display: block;">
			<ul class="tabbed">
				<li><a href="admin.php?site=sm_sv"><?php echo ((is_array($_tmp='_SERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=sm_bg"><?php echo ((is_array($_tmp='_MENUREASONS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=sm_av"><?php echo ((is_array($_tmp='_ADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=sm_sa"><?php echo ((is_array($_tmp='_TITLEADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_3" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?site=wm_wa"><?php echo ((is_array($_tmp='_ADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=wm_ul"><?php echo ((is_array($_tmp='_PERM')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=wm_um"><?php echo ((is_array($_tmp='_MENUUSERMENU')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=wm_ms"><?php echo ((is_array($_tmp='_SETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_4" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?site=so_mo"><?php echo ((is_array($_tmp='_MODULES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=so_up"><?php echo ((is_array($_tmp='_MENUUPDATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=so_lg"><?php echo ((is_array($_tmp='_MENULOGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_5" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?modul=iexport"><?php echo ((is_array($_tmp='_MENUIMPORTEXPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
</div>
		<td id="main" valign="top" >
		<?php if ($this->_supers['session']['amxadmins_view'] == 'yes'): ?>
			<span class="title"><?php echo ((is_array($_tmp='_AMXADMINSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
			<table width="95%" align="center"><tr><td>
				<table border="1" width="100%">
					<tr class="htabletop"><td colspan="7"><b><?php echo ((is_array($_tmp='_MANAGEAMXADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td></tr>
					<tr class="htablebottom">
						<td width="10%"><?php echo ((is_array($_tmp='_NAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td align="center"><?php echo ((is_array($_tmp='_PASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td align="center"><?php echo ((is_array($_tmp='_ACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td align="center"><?php echo ((is_array($_tmp='_FLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td align="center"><?php echo ((is_array($_tmp='_STEAMIDIPNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td align="center"><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td>&nbsp;</td>
					</tr>
					<?php $_from = $this->_tpl_vars['admins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admins']):
?>
						<form method="POST">
							<input type="hidden" name="aid" value="<?php echo $this->_tpl_vars['admins']['aid']; ?>
" />
							<input type="hidden" name="created" value="<?php echo $this->_tpl_vars['admins']['created']; ?>
" />
							<tr class="settings_line">
								<td align="center" width="10%"><input size="15" type="text" name="username" value="<?php echo $this->_tpl_vars['admins']['username']; ?>
" /></td>
								<td align="center" width="10%"><input size="15" type="password" name="password" value="<?php echo $this->_tpl_vars['admins']['password']; ?>
" /></td>
								<td align="center" width="10%" nowrap>
									<input type="text" id="acc<?php echo $this->_tpl_vars['admins']['aid']; ?>
" name="access" size="25" value="<?php echo $this->_tpl_vars['admins']['access']; ?>
" />
									<img src="images/server_key.png" alt="<?php echo ((is_array($_tmp='_ACCESSFLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" style="cursor:pointer;" 
										onClick="window.open('include/amxxhelper.php?id=acc'+<?php echo $this->_tpl_vars['admins']['aid']; ?>
,'Link','width=510,height=670,dependent=yes,resizable=yes');return false;" />
								</td>
								<td align="center" width="5%"><input size="6" type="text" name="flags" value="<?php echo $this->_tpl_vars['admins']['flags']; ?>
" /></td>
								<td align="center" width="10%"><input type="text" name="steamid" value="<?php echo $this->_tpl_vars['admins']['steamid']; ?>
" /></td>
								<td align="center" width="10%"><input size="15" type="text" name="nickname" value="<?php echo $this->_tpl_vars['admins']['nickname']; ?>
" /></td>
									<td align="center"><nobr>
												<img src="images/<?php if ($this->_tpl_vars['admins']['expired'] <> 0 && $this->_tpl_vars['admins']['expired'] <= time()): ?>warning<?php else: ?>success<?php endif; ?>.gif" />
												<input type="button" class="button" name="settings" value="<?php echo ((is_array($_tmp='_SETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onClick="NewToggleLayer('layer_<?php echo $this->_tpl_vars['admins']['aid']; ?>
');" />
												<input type="submit" class="button" name="save" value="<?php echo ((is_array($_tmp='_SAVE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['amxadmins_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
												<input type="submit" class="button" name="del" value="<?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp='_DELADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php echo ((is_array($_tmp='_DATALOSS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" <?php if ($this->_supers['session']['amxadmins_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
									</nobr></td>
							</tr>
							<tr id="layer_<?php echo $this->_tpl_vars['admins']['aid']; ?>
" style="display: none">
								<td class="admin_list" colspan="7"><div style="display: none">
										<table class="admin_list" width="70%">
												<tr class="htable">
													<td colspan="3"><b><?php echo ((is_array($_tmp='_SETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
												</tr>
												<tr class="settings_line">
													<td width="40%"><?php echo ((is_array($_tmp='_SHOWINADMINLIST')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
													<td><?php echo smarty_function_html_options(array('name' => 'ashow','values' => $this->_tpl_vars['ashow'],'output' => ((is_array($_tmp=$this->_tpl_vars['ashow_output'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['admins']['ashow']), $this);?>
</td>
												</tr>
												<tr class="settings_line">
													<td><?php echo ((is_array($_tmp='_ADMINVALIDITY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
													<td><nobr><input size="5" type="text" name="days" value="<?php echo $this->_tpl_vars['admins']['days']; ?>
" /> <?php echo ((is_array($_tmp='_DAYS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</nobr></td>
												</tr>
												<tr class="settings_line">
													<td valign="top"><?php echo ((is_array($_tmp='_ADMINEXPIRATION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
													<td><?php if ($this->_tpl_vars['admins']['expired'] == 0): ?><i><?php echo ((is_array($_tmp='_EVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
														<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['admins']['expired'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d. %b %Y - %T") : smarty_modifier_date_format($_tmp, "%d. %b %Y - %T")); ?>
<br /><?php echo ((is_array($_tmp='_EXTENDWITH')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 
															<input size="5" type="text" name="moredays" value="<?php echo $this->_tpl_vars['input']['moredays']; ?>
" /> <?php echo ((is_array($_tmp='_DAYS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <?php echo ((is_array($_tmp='_OR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 
															<input type="checkbox" name="noend" value="" /> <?php echo ((is_array($_tmp='_EVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

														<?php endif; ?>
													</td>
												</tr>
												<tr class="settings_line">
													<td><?php echo ((is_array($_tmp='_CREATED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
													<td><?php echo ((is_array($_tmp=$this->_tpl_vars['admins']['created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d. %b %Y - %T") : smarty_modifier_date_format($_tmp, "%d. %b %Y - %T")); ?>
</td>
													<td rowspan="5" width="1%" valign="bottom">
														<input type="submit" class="button" name="save" value="<?php echo ((is_array($_tmp='_SAVE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['amxadmins_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
													</td>
												</tr>
										</table>
								</div></td>
							</tr>
						</form>
					<?php endforeach; endif; unset($_from); ?>
					
				</table>
				<?php if ($this->_supers['session']['amxadmins_edit'] == 'yes'): ?>
					<form method="POST">
						<br />
						<table border="1" width="50%" align="center">
							<tr class="htable">
								<td colspan="3"><b><?php echo ((is_array($_tmp='_ADDAMXADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
							</tr>
							<tr>
								<tr class="settings_line"><td width="40%"><b><?php echo ((is_array($_tmp='_NAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><input type="text" name="username" value="<?php echo $this->_tpl_vars['input']['username']; ?>
" /></td></tr>
								<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_PASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><input type="password" name="password" value="<?php echo $this->_tpl_vars['input']['password']; ?>
" /></td></tr>
								<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_ACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td>
									<input type="text" name="access" id="addacc" value="<?php echo $this->_tpl_vars['input']['access']; ?>
" />
									<img src="images/server_key.png" alt="<?php echo ((is_array($_tmp='_ACCESSFLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" style="cursor:pointer;" 
										onClick="window.open('include/amxxhelper.php?id=addacc','Link','width=510,height=670,dependent=yes,resizable=yes');return false;" />
								</td></tr>
								<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_FLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><input size="8" type="text" name="flags" value="<?php echo $this->_tpl_vars['input']['flags']; ?>
" /></td></tr>
								<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_STEAMIDIPNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><input type="text" name="steamid" value="<?php echo $this->_tpl_vars['input']['steamid']; ?>
" /></td></tr>
								<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><input type="text" name="nickname" value="<?php echo $this->_tpl_vars['input']['nickname']; ?>
" /></td></tr>
								<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_SHOWINADMINLIST')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo smarty_function_html_options(array('name' => 'ashow','values' => $this->_tpl_vars['ashow'],'output' => ((is_array($_tmp=$this->_tpl_vars['ashow_output'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['input']['ashow']), $this);?>
</td></tr>
								<tr class="settings_line"><td valign="top"><b><?php echo ((is_array($_tmp='_ADMINVALIDITY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><nobr><input size="5" type="text" name="days" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['input']['days'])) ? $this->_run_mod_handler('default', true, $_tmp, '30') : smarty_modifier_default($_tmp, '30')); ?>
" /> <?php echo ((is_array($_tmp='_DAYS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
									<input type="checkbox" name="noend" value="" <?php if ($this->_tpl_vars['input']['noend'] == 1): ?>checked<?php endif; ?>/> <?php echo ((is_array($_tmp='_EVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</nobr></td></tr>
								<tr><td valign="top"><b><?php echo ((is_array($_tmp='_ADDADMINTOSERVERS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td>
									<td>
										<select name="addtoserver[]" size="3" multiple>
											<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['svalues'],'output' => $this->_tpl_vars['soutput']), $this);?>

										</select>
									</td>
								</tr>
								<tr class="settings_line">
									<td>
										<?php echo ((is_array($_tmp='_WITHSTATICBANTIME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:
									</td>
									<td>
										<select name="staticbantime">
											<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['yesno_choose'],'output' => ((is_array($_tmp=$this->_tpl_vars['yesno_output'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp))), $this);?>

										</select>
									</td>
									<td align="right">
										<input type="submit" class="button" name="new" value="<?php echo ((is_array($_tmp='_ADD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" >
									</td>
								</tr>
							</tr>
						</table>
					</form>
				<?php endif; ?>
				<br />
				<?php if ($this->_tpl_vars['msg']): ?><?php $_from = $this->_tpl_vars['msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['msg']):
?><div class="notice"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div><?php endforeach; endif; unset($_from); ?><?php endif; ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "info_amxaccess.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php else: ?>
				<center><div class="admin_msg"><?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div></center>
			<?php endif; ?>
			</td></tr></table>
		</td>
	</tr>
</table>