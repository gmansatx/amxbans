<?php /* Smarty version 2.6.25, created on 2023-02-26 16:42:43
         compiled from admin_bg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_bg.tpl', 4, false),array('modifier', 'strinstr', 'admin_bg.tpl', 92, false),)), $this); ?>
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
		<?php if ($this->_supers['session']['servers_edit'] == 'yes'): ?>
			<span class="title"><?php echo ((is_array($_tmp='_REASONSSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
			<table width="60%" align="center"><tr><td>
				<table border="1" width="100%">
					<tr class="htable">
						<td colspan="3"><b><?php echo ((is_array($_tmp='_REASONSSETS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
					</tr>
					<?php $_from = $this->_tpl_vars['reasons_set']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reasons_set']):
?>
						<form method="POST">
							<input type="hidden" name="rsid" value="<?php echo $this->_tpl_vars['reasons_set']['id']; ?>
" />
							<tr class="list">
								<td>
									<?php if ($this->_tpl_vars['reasons_set']['setname'] == ""): ?>&nbsp;<?php else: ?><?php echo $this->_tpl_vars['reasons_set']['setname']; ?>
<?php endif; ?>
								</td>
								<td align="center">
									<input type="button" class="button" onclick="NewToggleLayer('layer_<?php echo $this->_tpl_vars['reasons_set']['id']; ?>
');" value="<?php echo ((is_array($_tmp='_EDIT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
									<input type="submit" class="button" name="delset" value="<?php echo ((is_array($_tmp='_DEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['servers_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
								</td>
							</tr>
							<tr id="layer_<?php echo $this->_tpl_vars['reasons_set']['id']; ?>
" style="display: none">
								<td colspan="3"><div style="display: none">
									<table class="table_details" width="95%">
										<form method="POST">
											<tr class="htable">
												<td colspan="4"><?php echo ((is_array($_tmp='_EDITSET')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
											</tr>
											<tr class="settings_line">
												<td><?php echo ((is_array($_tmp='_NAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
												<td><input type="text" name="setname" value="<?php echo $this->_tpl_vars['reasons_set']['setname']; ?>
" /></td>
												<td><input type="submit" class="button" name="saveset" value="<?php echo ((is_array($_tmp='_SAVESET')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['servers_edit'] !== 'yes'): ?>disabled<?php endif; ?> /></td>
											</tr>
											<tr class="htable">
												<td width="33%"><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td width="33%"><?php echo ((is_array($_tmp='_STATICBANTIME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp='_ACTIV')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
											</tr>
											<?php unset($this->_sections['reasons']);
$this->_sections['reasons']['name'] = 'reasons';
$this->_sections['reasons']['loop'] = is_array($_loop=$this->_tpl_vars['reasons']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['reasons']['show'] = true;
$this->_sections['reasons']['max'] = $this->_sections['reasons']['loop'];
$this->_sections['reasons']['step'] = 1;
$this->_sections['reasons']['start'] = $this->_sections['reasons']['step'] > 0 ? 0 : $this->_sections['reasons']['loop']-1;
if ($this->_sections['reasons']['show']) {
    $this->_sections['reasons']['total'] = $this->_sections['reasons']['loop'];
    if ($this->_sections['reasons']['total'] == 0)
        $this->_sections['reasons']['show'] = false;
} else
    $this->_sections['reasons']['total'] = 0;
if ($this->_sections['reasons']['show']):

            for ($this->_sections['reasons']['index'] = $this->_sections['reasons']['start'], $this->_sections['reasons']['iteration'] = 1;
                 $this->_sections['reasons']['iteration'] <= $this->_sections['reasons']['total'];
                 $this->_sections['reasons']['index'] += $this->_sections['reasons']['step'], $this->_sections['reasons']['iteration']++):
$this->_sections['reasons']['rownum'] = $this->_sections['reasons']['iteration'];
$this->_sections['reasons']['index_prev'] = $this->_sections['reasons']['index'] - $this->_sections['reasons']['step'];
$this->_sections['reasons']['index_next'] = $this->_sections['reasons']['index'] + $this->_sections['reasons']['step'];
$this->_sections['reasons']['first']      = ($this->_sections['reasons']['iteration'] == 1);
$this->_sections['reasons']['last']       = ($this->_sections['reasons']['iteration'] == $this->_sections['reasons']['total']);
?>
												<tr class="settings_line">
													<td><?php echo $this->_tpl_vars['reasons'][$this->_sections['reasons']['index']]['reason']; ?>
</td>
													<td><?php echo $this->_tpl_vars['reasons'][$this->_sections['reasons']['index']]['static_bantime']; ?>
</td>
													<td><input type="checkbox" name="aktiv[]" value="<?php echo $this->_tpl_vars['reasons'][$this->_sections['reasons']['index']]['id']; ?>
" <?php echo ((is_array($_tmp=$this->_tpl_vars['reasons_set']['reasonids'])) ? $this->_run_mod_handler('strinstr', true, $_tmp, ",", $this->_tpl_vars['reasons'][$this->_sections['reasons']['index']]['id'], 'checked') : smarty_modifier_strinstr($_tmp, ",", $this->_tpl_vars['reasons'][$this->_sections['reasons']['index']]['id'], 'checked')); ?>
 /></td>
												</tr>
											<?php endfor; endif; ?>
										</form>
									</table></div>
								</td>
							</tr>
	
						</form>
					<?php endforeach; endif; unset($_from); ?>
					<div class="clearer"></div>
					<tr class="settings_line">
						<form method="POST">
							<td align="center"><input type="text" name="setname" value="" /></td>
							<td align="center"><input type="submit" class="button" name="newset" value="<?php echo ((is_array($_tmp='_NEWSET')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['servers_edit'] !== 'yes'): ?>disabled<?php endif; ?> /></td>
						</form>
					</tr>
				</table>
				
				<table border="1" width="100%">
					<tr class="htabletop">
						<td colspan="3"><b><?php echo ((is_array($_tmp='_REASONS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
					</tr>
					<tr align="center" class="htablebottom">
						<td width="30%" align="center"><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td align="center"><?php echo ((is_array($_tmp='_STATICBANTIME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<?php unset($this->_sections['reasons']);
$this->_sections['reasons']['name'] = 'reasons';
$this->_sections['reasons']['loop'] = is_array($_loop=$this->_tpl_vars['reasons']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['reasons']['show'] = true;
$this->_sections['reasons']['max'] = $this->_sections['reasons']['loop'];
$this->_sections['reasons']['step'] = 1;
$this->_sections['reasons']['start'] = $this->_sections['reasons']['step'] > 0 ? 0 : $this->_sections['reasons']['loop']-1;
if ($this->_sections['reasons']['show']) {
    $this->_sections['reasons']['total'] = $this->_sections['reasons']['loop'];
    if ($this->_sections['reasons']['total'] == 0)
        $this->_sections['reasons']['show'] = false;
} else
    $this->_sections['reasons']['total'] = 0;
if ($this->_sections['reasons']['show']):

            for ($this->_sections['reasons']['index'] = $this->_sections['reasons']['start'], $this->_sections['reasons']['iteration'] = 1;
                 $this->_sections['reasons']['iteration'] <= $this->_sections['reasons']['total'];
                 $this->_sections['reasons']['index'] += $this->_sections['reasons']['step'], $this->_sections['reasons']['iteration']++):
$this->_sections['reasons']['rownum'] = $this->_sections['reasons']['iteration'];
$this->_sections['reasons']['index_prev'] = $this->_sections['reasons']['index'] - $this->_sections['reasons']['step'];
$this->_sections['reasons']['index_next'] = $this->_sections['reasons']['index'] + $this->_sections['reasons']['step'];
$this->_sections['reasons']['first']      = ($this->_sections['reasons']['iteration'] == 1);
$this->_sections['reasons']['last']       = ($this->_sections['reasons']['iteration'] == $this->_sections['reasons']['total']);
?>
							<form method="POST">
							<input type="hidden" name="rid" value="<?php echo $this->_tpl_vars['reasons'][$this->_sections['reasons']['index']]['id']; ?>
" />
							<tr class="settings_line">
								<td align="center"><input type="text" name="reason" value="<?php echo $this->_tpl_vars['reasons'][$this->_sections['reasons']['index']]['reason']; ?>
" /></td>
								<td align="center"><input type="text" name="static_bantime" value="<?php echo $this->_tpl_vars['reasons'][$this->_sections['reasons']['index']]['static_bantime']; ?>
" /></td>
								<td align="center">
									<input type="submit" class="button" name="reasonsave" value="<?php echo ((is_array($_tmp='_SAVE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['servers_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
									<input type="submit" class="button" name="reasondel" value="<?php echo ((is_array($_tmp='_DEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['servers_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
								</td>
							</tr>
							</form>
						<?php endfor; endif; ?>
					</tr>
					<tr><td colspan="3">&nbsp</td></tr>
					<tr class="settings_line">
						<form method="POST">
							<td align="center"><input type="text" name="reason" value="" /></td>
							<td align="center"><input type="text" name="static_bantime" value="" /></td>
							<td align="center"><input type="submit" class="button" name="newreason" value="<?php echo ((is_array($_tmp='_NEWREASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['servers_edit'] !== 'yes'): ?>disabled<?php endif; ?> /></td>
						</form>
					</tr>
				</table>
			<?php else: ?>
				<center><div class="admin_msg"><?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div></center>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['msg'] <> ""): ?>
			<br />
			<div class="notice"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
			<br />
			<?php endif; ?>
			</td></tr></table>
		</td>
	</tr>
</table>