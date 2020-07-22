<?php /* Smarty version 2.6.25, created on 2020-07-22 10:31:03
         compiled from admin/hand.type.list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="contents">
    
<dl class="search-class">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/base/filter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    注: <b>独立API标记</b>表示是否采用独立区域数据的API,若无则默认; <b>采集数据类型</b>表示加载自动采集的数据类型,默认则不加载采集数据,可以指定<b>采集数据分类ID</b>,默认为全部分类,以及指定<b>采集数据排序</b>方式
<a href='?ct=<?php echo $this->_tpl_vars['ct']; ?>
&ac=<?php echo $this->_tpl_vars['ac']; ?>
_edit' id='list_add'><input type="button" value="增加" id="add" /></a>
</dl>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/base/list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</body>
</html>
 