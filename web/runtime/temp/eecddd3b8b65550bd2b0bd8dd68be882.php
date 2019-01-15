<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\phpStudy\PHPTutorial\WWW\tiaoma\public/../application/index\view\index\order.html";i:1529484471;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>物品管理系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="stylesheet" href="/static/xadmin/css/xadmin.css">
    <link rel="stylesheet" href="/static/xadmin/lib/layui/css/layui.css"  media="all">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="/static/js/order.js"></script>
    <script type="text/javascript" src="/static/xadmin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/xadmin/js/xadmin.js"></script>
    <script src='http://cdn.bootcss.com/socket.io/1.3.7/socket.io.js'></script>

    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="x-body">

    <xblock>
        <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
        <span class="x-right" style="line-height:40px">共有数据：<span id="total"><?php echo $total; ?></span> 条</span>
    </xblock>
    <table class="layui-table" lay-filter="test3">
        <thead>
        <tr>
            <th>
                <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
            </th>
            <th>品名</th>
            <th>规格</th>
            <th>供货方</th>
            <th>厂家</th>
            <th>物品编码</th>
            <th>数量</th>
            <th>单价</th>
            <th>售价</th>
            <th >操作</th>
        </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>

    <div class="page">
        <?php echo $page; ?>
    </div>
    </div>

</div>


</body>

</html>