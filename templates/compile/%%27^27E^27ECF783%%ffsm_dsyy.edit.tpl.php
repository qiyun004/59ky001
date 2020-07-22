<?php /* Smarty version 2.6.25, created on 2020-07-22 11:15:33
         compiled from admin/ffsm_dsyy.edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'admin/ffsm_dsyy.edit.tpl', 84, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
    function ajaxSelectChange(id,tag,url){
        if(id<1)return false;
        var currentValue = $('.'+tag).attr('currentValue');
        $.post(
                url,
                {id:id,currentValue:currentValue},
                function(data){
                    if(data.str=='success'){
                        //$('.'+tag).append(data.data);
                        $('.'+tag).html(data.data);
                    }else{
                        alert(data.str);
                    }
                },
                'json'
        );
    }


</script>

<script type="text/javascript" charset="utf-8" src="images/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="images/js/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="images/js/ueditor/lang/zh-cn/zh-cn.js"></script>
<?php $this->assign('richid', ""); ?>
<?php $this->assign('richcontent', ""); ?>
<div style="width:96%;margin:auto;padding:auto">
    <form name="myform" jstype="vali" action="?ct=<?php echo $this->_tpl_vars['ct']; ?>
&ac=edit" method="POST"  enctype="multipart/form-data" onsubmit="return submitForm();">
        <table width="100%" class="form">
            <input type="hidden" name="<?php echo $this->_tpl_vars['_dbfield']['mainKey']; ?>
" value="<?php echo $this->_tpl_vars['data'][$this->_tpl_vars['_dbfield']['mainKey']]; ?>
">


            <?php $_from = $this->_tpl_vars['_dbfield']['editTableField']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>

            <?php if ($this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['e_name'] == 'input' && $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['e_type']): ?>
            <tr>
                <td>
                    <?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
:<?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'update' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?><font color="red">*</font>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if (( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['richtext'] )): ?><script id="<?php echo $this->_tpl_vars['field']; ?>
_editor" type="text/plain" style="width:1024px;height:500px;"></script>


                    <?php endif; ?>
                    <input type='<?php echo $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['e_type']; ?>
' id="add_<?php echo $this->_tpl_vars['field']; ?>
" <?php if (( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['richtext'] )): ?>style="display:none" <?php endif; ?> name='<?php echo $this->_tpl_vars['field']; ?>
' class="text <?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'insert' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?>error<?php endif; ?>" <?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'insert' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?>errormsg='<?php if ($this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']): ?><?php echo $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']; ?>
<?php else: ?><?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
必须!<?php endif; ?>' vali='<?php echo $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1']; ?>
'<?php endif; ?>  value='<?php echo $this->_tpl_vars['data'][$this->_tpl_vars['field']]; ?>
' <?php if ($this->_tpl_vars['field'] == 'dl_txfs' || $this->_tpl_vars['field'] == 'dl_txzh' || $this->_tpl_vars['field'] == 'dl_txnc' || $this->_tpl_vars['field'] == 'dl_jf'): ?>readOnly="true" <?php endif; ?> <?php if (isset ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['jstype'] ) && $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['jstype'] != ''): ?>jstype="<?php echo $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['jstype']; ?>
"<?php endif; ?> /> <?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'insert' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?><span class="text-hint normal"><?php if ($this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']): ?><?php echo $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']; ?>
<?php else: ?><?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
必须!<?php endif; ?></span><?php endif; ?></td>

                <?php if (isset ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['type'] ) && $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['type'] == 'image' && $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['src'] != '' && $this->_tpl_vars['data'][$this->_tpl_vars['field']] != ''): ?>
                        <img src="<?php echo $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['src']; ?>
<?php echo $this->_tpl_vars['data'][$this->_tpl_vars['field']]; ?>
" style="width:100px;height:80px;" />
                    <?php endif; ?>
                </td>
            </tr>

            <?php elseif ($this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['e_name'] == 'select' && $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['datafrom']): ?>
            <tr>
                <td>所属<?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
:<?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'update' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?><font color="red">*</font><?php endif; ?></td>
                <td>
                    <select name="<?php echo $this->_tpl_vars['field']; ?>
" id="add_<?php echo $this->_tpl_vars['field']; ?>
"  <?php if ($this->_tpl_vars['field'] == 'dl_txfs' || $this->_tpl_vars['field'] == 'dl_txzh' || $this->_tpl_vars['field'] == 'dl_txnc' || $this->_tpl_vars['field'] == 'dl_jf'): ?>onfocus="this.defaultIndex=this.selectedIndex;"
onchange="this.selectedIndex=this.defaultIndex;" <?php endif; ?> <?php if (isset ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['style'] )): ?>style="<?php echo $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['style']; ?>
"<?php endif; ?>  <?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'update' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?>errormsg='<?php if ($this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']): ?><?php echo $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']; ?>
<?php else: ?><?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
必须!<?php endif; ?>' vali='<?php echo $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1']; ?>
'<?php endif; ?>  <?php if (isset ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['js']['onchange'] ) && ! empty ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['js']['onchange'] )): ?>onchange="javascript:ajaxSelectChange(this.value,'<?php echo $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['js']['onchange']['class']; ?>
','<?php echo $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['js']['onchange']['url']; ?>
')"<?php endif; ?>  <?php if (isset ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['js']['ajax'] ) && ! empty ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['js']['ajax'] )): ?>class="<?php echo $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['js']['ajax']['class']; ?>
"<?php endif; ?>  currentValue="<?php echo $this->_tpl_vars['data'][$this->_tpl_vars['field']]; ?>
">
                    <option value="">所属<?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
</option>
            <?php if (! isset ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['js']['ajax'] ) || empty ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['js']['ajax'] )): ?>

                    <?php $_from = $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['datafrom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kk'] => $this->_tpl_vars['vv']):
?>
                    <?php if (is_array ( $this->_tpl_vars['vv'] )): ?>
                <option value="<?php echo $this->_tpl_vars['vv']['id']; ?>
" <?php if ($this->_tpl_vars['data'][$this->_tpl_vars['field']] == $this->_tpl_vars['vv']['id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['vv']['name']; ?>
</option>
                    <?php else: ?>
                <option value="<?php echo $this->_tpl_vars['kk']; ?>
" <?php if ($this->_tpl_vars['data'][$this->_tpl_vars['field']] == $this->_tpl_vars['kk']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['vv']; ?>
</option>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
                    </select>
                    <?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'update' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?><span class="text-hint normal"><?php if ($this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']): ?><?php echo $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']; ?>
<?php else: ?><?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
必须!<?php endif; ?></span><?php endif; ?>
                </td>
            </tr>

            <?php elseif ($this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['e_name'] == 'textarea'): ?>

            <tr>
                <td><?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
:<?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'update' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?><font color="red">*</font><?php endif; ?></td>
                <td><textarea id="add_<?php echo $this->_tpl_vars['field']; ?>
" <?php if (isset ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['style'] )): ?>style="<?php echo $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['style']; ?>
"<?php endif; ?> name='<?php echo $this->_tpl_vars['field']; ?>
'  class="text error" <?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'update' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?>errormsg='<?php if ($this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']): ?><?php echo $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']; ?>
<?php else: ?><?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
必须!<?php endif; ?>' vali='<?php echo $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1']; ?>
'<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['field']])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</textarea> <?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'update' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?><span class="text-hint normal"><?php if ($this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']): ?><?php echo $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']; ?>
<?php else: ?><?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
必须!<?php endif; ?></span><?php endif; ?>
                </td>
            </tr>

            <?php else: ?>

            <tr>
                <td>
                    <?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
:<?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'update' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?><font color="red">*</font>
                    <?php endif; ?>
                </td>
                <td>
                    <input type='<?php if ($this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['e_type']): ?><?php echo $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['e_type']; ?>
<?php else: ?>text<?php endif; ?>' id="add_<?php echo $this->_tpl_vars['field']; ?>
" name='<?php echo $this->_tpl_vars['field']; ?>
' class="text <?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'update' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?>error<?php endif; ?>" <?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'update' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?>errormsg='<?php if ($this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']): ?><?php echo $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']; ?>
<?php else: ?><?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
必须!<?php endif; ?>' vali='<?php echo $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1']; ?>
'<?php endif; ?> value='<?php echo $this->_tpl_vars['data'][$this->_tpl_vars['field']]; ?>
' <?php if ($this->_tpl_vars['field'] == 'dl_txfs' || $this->_tpl_vars['field'] == 'dl_txzh' || $this->_tpl_vars['field'] == 'dl_txnc' || $this->_tpl_vars['field'] == 'dl_jf'): ?>readOnly="true" <?php endif; ?> <?php if (isset ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['jstype'] ) && $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['jstype'] != ''): ?>jstype="<?php echo $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['jstype']; ?>
"<?php endif; ?> /> <?php if (( $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'all' || $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['3'] == 'update' ) && $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['1'] == 'notempty'): ?><span class="text-hint normal"><?php if ($this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']): ?><?php echo $this->_tpl_vars['_submit_validate'][$this->_tpl_vars['field']]['2']; ?>
<?php else: ?><?php echo $this->_tpl_vars['_dbfield']['allTableField'][$this->_tpl_vars['field']]; ?>
必须!<?php endif; ?></span><?php endif; ?>

                    <?php if (isset ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['type'] ) && $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['type'] == 'image' && isset ( $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['src'] ) && $this->_tpl_vars['data'][$this->_tpl_vars['field']] != ''): ?>
                        <img src="<?php echo $this->_tpl_vars['_dbfield'][$this->_tpl_vars['field']]['element']['src']; ?>
<?php echo $this->_tpl_vars['data'][$this->_tpl_vars['field']]; ?>
" style="width:100px;height:80px;" />
                    <?php endif; ?>
                </td>
            </tr>

            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>


            <tr>
                <td colspan='2' align='left' height='30' >
                    <input type='hidden' name='dosubmit' value='true'  />
                    <button type="submit" >保存</button> &nbsp;&nbsp;&nbsp;
                    <button type="reset">重设</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('content_editor');
    ue.addListener("ready", function () {
        <?php $this->assign('fieldname', 'content'); ?>
        ue.setContent('<?php echo $this->_tpl_vars['data'][$this->_tpl_vars['fieldname']]; ?>
');

    });

    function submitForm(){
        var contentval = document.getElementById("add_content");
        var contentstr = UE.getEditor('content_editor').getContent();
        if(!UE.getEditor('content_editor').hasContents()){
            alert("内容不能为空！");
            return false;
        }
        if(!contentval){
            alert("内容不能为空！");
            return false;
        }

        contentval.value = contentstr.trim();
        return true;
    }
</script>
<script type="text/javascript">
    <?php if (isset ( $this->_tpl_vars['_autoAjax'] ) && ! empty ( $this->_tpl_vars['_autoAjax'] )): ?>
    <?php $_from = $this->_tpl_vars['_autoAjax']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    ajaxSelectChange('<?php echo $this->_tpl_vars['data'][$this->_tpl_vars['v']['field']]; ?>
','<?php echo $this->_tpl_vars['v']['class']; ?>
','<?php echo $this->_tpl_vars['v']['url']; ?>
');
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
</script>
</body>
</html>