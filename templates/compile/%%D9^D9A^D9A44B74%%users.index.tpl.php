<?php /* Smarty version 2.6.25, created on 2020-07-22 11:19:55
         compiled from admin/users.index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('myblock', 'lurd_list', 'admin/users.index.tpl', 58, false),array('function', 'frame_union', 'admin/users.index.tpl', 76, false),array('function', 'lurd', 'admin/users.index.tpl', 78, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script lang='javascript'>
function show_data(nid)
{
	tb_show('浏览/编辑用户', '?ct=users&ac=index&even=edit&tb=users&uid='+ nid +'&TB_iframe=true&height=350&width=500', true);
}
function do_delete()
{
	document.form1.even.value = 'delete';
	var msg = "你确定要删除选中的用户？！";
	msg += "<br/><a href='javascript:tb_remove();'>&lt;&lt;点错了</a> &nbsp;|&nbsp; <a href='javascript:document.form1.submit();'>确定要删除&gt;&gt;</a>";
	tb_showmsg(msg);
}
function do_delete_one(uid)
{
	var msg = "你确定要删除选中的用户？！";
	msg += "<br/><a href='javascript:tb_remove();'>&lt;&lt;点错了</a> &nbsp;|&nbsp; <a href='?ct=users&ac=index&even=delete&tb=users&uid[]="+ uid +"&TB_iframe=true&height=400&width=500'>确定要删除&gt;&gt;</a>";
	tb_showmsg(msg);
}
</script>

<div id="contents">
  <div style="background-color:#DAFBCA;padding:5px 10px;line-height:32px;">
        <form method="post" action="/acs/?ct=users&ac=index">
          <label>用户ID：</label>
           <input type="text" id="search_uid" name="uid_s" value="<?php echo $this->_tpl_vars['sch_uid']; ?>
" class="text m">
          &nbsp;&nbsp;&nbsp;
          <label>上级用户ID：</label>
           <input type="text" id="search_uid" name="sd_uid" value="<?php echo $this->_tpl_vars['sd_uid']; ?>
" class="text m">
          &nbsp;&nbsp;&nbsp;
          <label>用户账号：</label>
           <input type="text" id="search_user_name" name="sch_user_name" value="<?php echo $this->_tpl_vars['sch_user_name']; ?>
" class="text m">
          &nbsp;&nbsp;&nbsp;
          <label>用户电话：</label>
           <input type="text" id="search_phone" name="sch_phone" value="<?php echo $this->_tpl_vars['sch_phone']; ?>
" class="text m">
            <button type="submit">搜索</button><span style="margin-left:25px;">

        </form>
    </div>
		<table class="table-sort table-operate">
			<tr>
				<th> <input name="checkbox" type="checkbox" value="" rel="parent" /> </th>
				<th> 用户ID </th>
				<th> 上级用户ID </th>
				<th> 用户账号 </th>
				<th> 用户昵称 </th>
              <th> 独立提成比例 </th>
              	<th> 未提佣金 </th>
              	<th> 全部佣金 </th>
              	<th> 电话</th>
              	<th> QQ </th>
				<!--<th> 类型 </th>-->
				<th> 权限组 </th>
				<th> 注册时间 </th>
				<th> 注册IP </th>
				<th> 操作 </th>
			</tr>
			<?php  $lurd_list = smarty_myblock_lurd_list(array('item' => 'v'), $this);
foreach( $lurd_list as $this->_tpl_vars['key']=>$this->_tpl_vars['v'] )
{
?>
			<tr>
				<td> 
				    <a href="javascript:show_data('<?php echo $this->_tpl_vars['v']['uid']; ?>
');"><img src='images/images/icons/ico-edit.png' alt='查看/修改' title='查看/修改' border='0' /></a><input type="checkbox" class="checkbox" name="uid[]" value="<?php echo $this->_tpl_vars['v']['uid']; ?>
" rel="child" />
				</td>
				<td> <?php echo $this->_tpl_vars['v']['uid']; ?>
 </td>
				<td> <?php echo $this->_tpl_vars['v']['sd_uid']; ?>
 </td>
				<td> <?php echo $this->_tpl_vars['v']['user_name']; ?>
 </td>
				<td> 
				    <a href="javascript:show_data('<?php echo $this->_tpl_vars['v']['uid']; ?>
');">
				        <img src='images/images/icons/auditing.gif' alt='查看/修改' title='查看/修改' border='0' /> <?php echo $this->_tpl_vars['v']['nickname']; ?>

				    </a>
			    </td>
                <td> <?php echo $this->_tpl_vars['v']['dl_tcbl']; ?>
%</td>
                <td> <?php echo $this->_tpl_vars['v']['dl_syjf']; ?>
 </td>
                <td> <?php echo $this->_tpl_vars['v']['dl_zjf']; ?>
 </td>
                <td> <?php echo $this->_tpl_vars['v']['phone']; ?>
 </td>
                <td> <?php echo $this->_tpl_vars['v']['qq']; ?>
 </td>
				<!--<td> <?php echo smarty_function_frame_union(array('do' => 'pools','var' => $this->_tpl_vars['v']['pools']), $this);?>
 </td>-->
				<td> <?php echo smarty_function_frame_union(array('do' => 'groups','var' => $this->_tpl_vars['v']['groups']), $this);?>
 </td>
				<td> <?php echo smarty_function_lurd(array('do' => 'format_date','var' => $this->_tpl_vars['v']['regtime'],'format' => ""), $this);?>
 </td>
				<td> <?php echo $this->_tpl_vars['v']['regip']; ?>
&nbsp; </td>
				<td><a href="javascript:show_data('<?php echo $this->_tpl_vars['v']['uid']; ?>
');">修改</a>&nbsp;|&nbsp;<a href="javascript:do_delete_one('<?php echo $this->_tpl_vars['v']['uid']; ?>
');">删除</a></td>
			</tr>
			<?php  }  ?>
		</table>
</div>

<div id="bottom">
	<form name="form1" action="?ct=users" method="POST">
	<div class="fl">
	<button type="button" onclick="tb_show('增加管理员', '?ct=users&ac=index&even=add&tb=users&TB_iframe=true&height=300&width=500', true);">增加管理员</button>
	</div>
	</form>
	<div class="pages">
		<div class="ylmf-page">
			<?php echo $this->_tpl_vars['lurd_pagination']; ?>

		</div>
	</div>
</div>

</body>
</html>