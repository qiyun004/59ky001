<?php /* Smarty version 2.6.25, created on 2020-07-22 10:31:03
         compiled from admin/base/list.tpl */ ?>
<form name="form1" action="?ct=<?php echo $this->_tpl_vars['ct']; ?>
&ac=<?php echo $this->_tpl_vars['ac']; ?>
_do" method="POST">
<input type='hidden' name='tb' value='sorting' />
<input type="hidden" name="sub" value="del" />
<table class="table-sort table-operate">
  <tr>
    <td>全选<input type='checkbox' id='allid' value='' /></td>
    <?php if (! empty ( $this->_tpl_vars['self_opt']['opt_button'] )): ?>
    <?php $_from = $this->_tpl_vars['self_opt']['opt_button']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b_key'] => $this->_tpl_vars['b_item']):
?>
    <td><strong><?php echo $this->_tpl_vars['b_key']; ?>
</strong></td>
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
     <?php if (! empty ( $this->_tpl_vars['self_opt'] )): ?>
    <?php $_from = $this->_tpl_vars['self_opt']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['so_key'] => $this->_tpl_vars['so_item']):
?>
    <?php if (! empty ( $this->_tpl_vars['tb_column'][$this->_tpl_vars['so_key']] ) && $this->_tpl_vars['so_item']['0'] == 'show'): ?>
    <td><strong><?php echo $this->_tpl_vars['tb_column'][$this->_tpl_vars['so_key']]; ?>
</strong></td>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
  </tr>
  <?php $_from = $this->_tpl_vars['array_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
  <tr>
      <td><input type='checkbox' name='ids[]' value='<?php echo $this->_tpl_vars['v'][$this->_tpl_vars['tb_mk']]; ?>
' class='f'/></td>
    <?php if (! empty ( $this->_tpl_vars['self_opt']['opt_button'] )): ?>
    <?php $_from = $this->_tpl_vars['self_opt']['opt_button']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b_key'] => $this->_tpl_vars['b_item']):
?>
        <td>
    <?php $_from = $this->_tpl_vars['b_item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b_k'] => $this->_tpl_vars['b_i']):
?>
          [<a <?php if (! empty ( $this->_tpl_vars['b_i']['1'] ) && is_array ( $this->_tpl_vars['b_i'] )): ?>style="color:brown;" <?php endif; ?>href="<?php if (! empty ( $this->_tpl_vars['b_i']['1'] )): ?>javascript:show_data('<?php echo $this->_tpl_vars['b_k']; ?>
<?php echo $this->_tpl_vars['v'][$this->_tpl_vars['tb_mk']]; ?>
');<?php else: ?><?php echo $this->_tpl_vars['b_k']; ?>
<?php echo $this->_tpl_vars['v'][$this->_tpl_vars['tb_mk']]; ?>
<?php endif; ?>"><?php if (is_array ( $this->_tpl_vars['b_i'] )): ?><?php echo $this->_tpl_vars['b_i']['0']; ?>
<?php else: ?><?php echo $this->_tpl_vars['b_i']; ?>
<?php endif; ?></a>]&nbsp; 
    <?php endforeach; endif; unset($_from); ?>
        </td>
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
    
      <?php if (! empty ( $this->_tpl_vars['self_opt'] )): ?>
      <?php $_from = $this->_tpl_vars['self_opt']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['so_key'] => $this->_tpl_vars['so_item']):
?>
    <?php if (! empty ( $this->_tpl_vars['tb_column'][$this->_tpl_vars['so_key']] ) && $this->_tpl_vars['so_item']['0'] == 'show'): ?>
        <td> 
      <?php if (! empty ( $this->_tpl_vars['so_item']['1'] ) && $this->_tpl_vars['so_item']['1'] == 'input_text'): ?>
          <input type="text" class="<?php if (! empty ( $this->_tpl_vars['so_item']['2'] )): ?><?php echo $this->_tpl_vars['so_item']['2']; ?>
<?php endif; ?>" name="<?php echo $this->_tpl_vars['so_key']; ?>
[<?php echo $this->_tpl_vars['v'][$this->_tpl_vars['tb_mk']]; ?>
]" value="<?php echo $this->_tpl_vars['v'][$this->_tpl_vars['so_key']]; ?>
"/>
        <?php elseif (! empty ( $this->_tpl_vars['so_item']['1'] ) && $this->_tpl_vars['so_item']['1'] == 'input_select'): ?>
            <?php if (! empty ( $this->_tpl_vars['so_item']['2'] )): ?>            
            <select name="<?php echo $this->_tpl_vars['so_key']; ?>
[<?php echo $this->_tpl_vars['v'][$this->_tpl_vars['tb_mk']]; ?>
]">
                <?php $_from = $this->_tpl_vars['so_item']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
                    <option value="<?php echo $this->_tpl_vars['k']; ?>
" <?php if ($this->_tpl_vars['k'] == $this->_tpl_vars['v'][$this->_tpl_vars['so_key']]): ?>selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['i']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            <?php endif; ?>
        <?php elseif (! empty ( $this->_tpl_vars['so_item']['1'] ) && $this->_tpl_vars['so_item']['1'] == 'input_radio'): ?>
        <?php elseif (! empty ( $this->_tpl_vars['so_item']['1'] ) && $this->_tpl_vars['so_item']['1'] == 'pic'): ?>
            <?php if (! empty ( $this->_tpl_vars['v'][$this->_tpl_vars['so_key']] )): ?><img src='<?php echo $this->_tpl_vars['v'][$this->_tpl_vars['so_key']]; ?>
' height='50px'/><?php endif; ?>
        <?php else: ?>
	<A href="javascript:show_data('?ct=youxi3&ac=hand&select_value=<?php echo $this->_tpl_vars['v']['id']; ?>
');"><?php echo $this->_tpl_vars['v'][$this->_tpl_vars['so_key']]; ?>
</A>
        <?php endif; ?>
            </td>

        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
  </tr>
  <?php endforeach; endif; unset($_from); ?>

</table>
</form>
  </div>
<div id="bottom">
    <div class="fl">
        <?php if (empty ( $this->_tpl_vars['self_opt']['SUBMIT'] )): ?>
            <button type="button" onclick="do_pl('upd');">批量修改</button>
            <button type="button" onclick="do_delete();">删除选中记录</button>
        <?php else: ?>
            <?php $_from = $this->_tpl_vars['self_opt']['SUBMIT']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k_s'] => $this->_tpl_vars['i_s']):
?>
                <?php if ($this->_tpl_vars['k_s'] == 'pl'): ?>
            <button type="button" onclick="do_pl('<?php echo $this->_tpl_vars['i_s']['1']; ?>
');"><?php echo $this->_tpl_vars['i_s']['0']; ?>
</button>
                <?php elseif ($this->_tpl_vars['k_s'] == 'del'): ?>
            <button type="button" onclick="do_delete();"><?php echo $this->_tpl_vars['i_s']['0']; ?>
</button>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
    </div>
    <div class="pages">
        <?php echo $this->_tpl_vars['pagination']; ?>

    </div>
</div>
<script lang='javascript'>
function do_delete()
{
    var msg = "你确定要删除选中的记录？！";
    msg += "<br/><a href='javascript:tb_remove();'>&lt;&lt;点错了</a> &nbsp;|&nbsp; <a href='javascript:document.form1.submit();'>确定要删除&gt;&gt;</a>";
    tb_showmsg(msg);
}
function do_pl(type)
{
    document.form1.sub.value = type;
    var msg = " 确定批量执行？！";
    msg += "<br/><a href='javascript:tb_remove();'>&lt;&lt;点错了</a> &nbsp;|&nbsp; <a href='javascript:document.form1.submit();'>确定执行&gt;&gt;</a>";
    tb_showmsg(msg);
}
function show_data(nid)
{
    tb_show('浏览/编辑记录', nid +'&TB_iframe=true&height=600&width=1000', true);
}
$("#allid").click(function(){
$this = $(this);
if($this.attr("checked")==true)
{
    $(".f").attr("checked",'true');
}else{
    $(".f").removeAttr("checked");
}		
});

</script>

    