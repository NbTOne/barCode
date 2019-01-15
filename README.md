# 基于条码的库存管理系统

#### 项目介绍
该系统采用php+Android（本项目分web、Android两个分支）共同开发完成。安卓端模拟扫描枪，web端负责显示及管理。

#### 软件架构
![](https://oscimg.oschina.net/oscnet/5a21954641ff2f6831ad7c1cc1adc5bb429.jpg)


#### 安装教程

1. 导入sql文件到数据库。
2. 将web端文件夹中的所有文件复制到网站根目录。
3. 将网站根目录路径该到public文件（因为web端基于thinkphp5.0开发的）。
4. 把application\database.php中的数据库密码改为自己的。
5. 下载安装并运行workerman 框架。[workerman下载](https://www.workerman.net/web-sender)。
6. 用android studio打开安卓端文件夹，把MainActivity.java中的服务器地址改为自己的，然后编译即可。

####web端
>管理后台登录页

![管理后台登录页](https://images.gitee.com/uploads/images/2018/0910/115446_8dc72cd1_1003712.png "屏幕截图.png")

>列表页（数据实时动态更新，可直接点击数据表格进行编辑修改数据内容）

![输入图片说明](https://images.gitee.com/uploads/images/2018/0910/115816_c16f265b_1003712.png "屏幕截图.png")

####Android扫描端

![输入图片说明](https://images.gitee.com/uploads/images/2018/0910/115932_cf3980f4_1003712.png "屏幕截图.png")
![输入图片说明](https://images.gitee.com/uploads/images/2018/0910/115943_941bc5a4_1003712.png "屏幕截图.png")
![输入图片说明](https://images.gitee.com/uploads/images/2018/0910/115952_88a77a4b_1003712.png "屏幕截图.png")