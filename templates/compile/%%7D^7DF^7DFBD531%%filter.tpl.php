<?php /* Smarty version 2.6.25, created on 2020-07-22 10:31:03
         compiled from admin/base/filter.tpl */ ?>
<?php if (! empty ( $this->_tpl_vars['filter_array'] )): ?>
    <?php $_from = $this->_tpl_vars['filter_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fa_key'] => $this->_tpl_vars['fa_item']):
?>
        <dt><?php echo $this->_tpl_vars['fa_item']['0']; ?>
：</dt>
        <dd>
            <?php if ($this->_tpl_vars['fa_item']['1'] == 'select'): ?>
                <select name="select_value" id="select_value">
                    <option value="">全部</option>
                    <?php if (! empty ( $this->_tpl_vars['fa_item']['2'] )): ?>
                        <?php $_from = $this->_tpl_vars['fa_item']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fi_key'] => $this->_tpl_vars['fi_item']):
?>
                            <option value="<?php echo $this->_tpl_vars['fi_key']; ?>
" <?php if (! empty ( $this->_tpl_vars['fa_item']['3'] ) && $this->_tpl_vars['fa_item']['3'] == $this->_tpl_vars['fi_key']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['fi_item']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
                </select> 
                <script type="text/javascript">
                $("#select_value").change(function(){
                    var select_value = $("#select_value").val();
                    location.href = "?ct=<?php echo $this->_tpl_vars['ct']; ?>
&ac=<?php echo $this->_tpl_vars['ac']; ?>
&select_value=" + select_value;
                });
                </script>

            <?php elseif ($this->_tpl_vars['fa_item']['1'] == 'text'): ?>
                <input type="text" class="text m" id="search_value" name="search_value" value="<?php if (! empty ( $this->_tpl_vars['fa_item']['2'] )): ?><?php echo $this->_tpl_vars['fa_item']['2']; ?>
<?php endif; ?>" />[模糊]
                <input type="button" value="搜索" id="search" />
                <script type="text/javascript">
                $("#search").click(function(){
                    var search_value = encodeURIComponent($("#search_value").val());
                    var t = (new Date()).valueOf();
                    location.href = "?ct=<?php echo $this->_tpl_vars['ct']; ?>
&ac=<?php echo $this->_tpl_vars['ac']; ?>
&search_value=" + search_value + "&_t=" + t;
                });
                </script>
            <?php endif; ?>
        </dd>
    <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>