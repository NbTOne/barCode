<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpStudy\PHPTutorial\WWW\tiaoma\public/../application/index\view\index\data.html";i:1529486356;}*/ ?>
<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
<tr class="list">
    <td>
        <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='<?php echo $list['id']; ?>'><i class="layui-icon">&#xe605;</i></div>
    </td>
    <td onblur="up(this,'name','<?php echo $list['id']; ?>')" contenteditable="true"><?php echo $list['name']; ?></td>
    <td onblur="up(this,'type','<?php echo $list['id']; ?>')" contenteditable="true"><?php echo $list['type']; ?></td>
    <td onblur="up(this,'supplier','<?php echo $list['id']; ?>')" contenteditable="true"><?php echo $list['supplier']; ?></td>
    <td onblur="up(this,'vender','<?php echo $list['id']; ?>')" contenteditable="true"><?php echo $list['vender']; ?></td>
    <td onblur="up(this,'code','<?php echo $list['id']; ?>')" contenteditable="true"><?php echo $list['code']; ?></td>
    <td onblur="up(this,'number','<?php echo $list['id']; ?>')" contenteditable="true"><?php echo $list['number']; ?></td>
    <td onblur="up(this,'bid','<?php echo $list['id']; ?>')" contenteditable="true"><?php echo $list['bid']; ?></td>
    <td onblur="up(this,'price','<?php echo $list['id']; ?>')" contenteditable="true"><?php echo $list['price']; ?></td>
    <td onblur="up(this,'<?php echo $list['id']; ?>')" class="td-manage">
        <a title="删除" onclick="member_del(this,'<?php echo $list['id']; ?>')" href="javascript:;">
            <i class="layui-icon">&#xe640;</i>
        </a>
    </td>
</tr>
<?php endforeach; endif; else: echo "" ;endif; ?>