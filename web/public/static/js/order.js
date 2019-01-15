$(document).ready(function () {
    // 连接服务端
    var socket = io('http://127.0.0.1:2120');
    // 连接后登录
    uid=123;
    socket.on('connect', function(){
        socket.emit('login', uid);

    });
    // 后端推送来消息时
    socket.on('new_msg', function(msg){
        $.post("/data",
            {
                id:msg,
            },
            function(data,status){
                $("tbody").prepend(data);
            });

        // $("tbody").prepend("<tr class=\"list\">"+$("tbody tr:eq(3)").html()+"</tr>");
    });
});


layui.use('laydate', function(){
        var laydate = layui.laydate;

        //执行一个laydate实例
        laydate.render({
            elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
            elem: '#end' //指定元素
        });
    });

    /*用户-停用*/
    function member_stop(obj,id){
        layer.confirm('确认要停用吗？',function(index){

            if($(obj).attr('title')=='启用'){

                //发异步把用户状态进行更改
                $(obj).attr('title','停用')
                $(obj).find('i').html('&#xe62f;');

                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                layer.msg('已停用!',{icon: 5,time:1000});

            }else{
                $(obj).attr('title','启用')
                $(obj).find('i').html('&#xe601;');

                $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                layer.msg('已启用!',{icon: 5,time:1000});
            }

        });
    }

    /*用户-删除*/
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            //发异步删除数据
            $.post("/deleteOrder",
                {
                    id:id
                },
                function(data,status){
                    $(obj).parents("tr").remove();
                    var  total=$("#total");
                    total.html(total.html()-1);
                    layer.msg('已删除!',{icon:1,time:1000});
                });

        });
    }



    function delAll (argument) {

        var getData = tableCheck.getData();
        layer.confirm('确认要删除吗？'+getData,function(index){
            //捉到所有被选中的，发异步进行删除
            $.post("/deleteOrder",
                {
                    id:getData
                },
                function(data,status){
                    layer.msg('删除成功', {icon: 1});
                    var  total=$("#total");
                    total.html(total.html()-getData.length);
                    $(".layui-form-checked").not('.header').parents('tr').remove();
                });
        });
    }



        function up(obj,dataName,id){
            var data=$(obj).text();
            if(data!="" || data!=null){
                $.post("/upOrder",
                    {
                        dataName:dataName,
                        id:id,
                        data:data

                    },
                    function(data,status){

                    });
            }
        }




