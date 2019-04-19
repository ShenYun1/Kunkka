# Kunkka
* 本Wordpress主题以[牧风](https://mufeng.me/)大神的Kunkka 1.06为基础改进而来，经[Alatelee](http://agatelee.cn) 二次修改	，又经[神韵博客](https://51shenyun.cn) 三次修改。
* 牧风 github项目 已失效
* Alatelee github项目 https://github.com/AgateLee/Kunkka
* 神韵 github项目 https://github.com/ShenYun1/Kunkka



# ToDo

* 回复中的表情符号没有被替换


# 版本说明/更新日志

**v1.06**

牧风原版

**v1.08_local**
[Alatelee](http://agatelee.cn) 修改版

* 关于页面功能增加
* 404页面功能增加
* 增加了分类页面
* 本地化
  * 替换了首页logo
  * 替换了默认图片
  * 备案号
* 对于置顶的文章显示全文
* 重新设计了404页面
  ![](public/images/404.png)
* 增加了表格样式
* 增加了代码样式
* 增加了友情链接页面
* 增加了关于页面

**v1.09_local**

自定义表情支持，评论表情选择


**v1.10_local**

更正了logo分辨率、将代码中的tab替换为4个空格

**v1.11_local**

修改了显示bug，
* 自定义表情支持
* 修改了all.js
  * 手机上点击评论表情dropdown无法弹出
  * ipadmini2纵向放置出现了mobile-menu无法触发
  * 桌面浏览器缩小窗口出现了mobile-menu无法出发
* 关于页面IOS移动设备可以触发hover事件
  * 显示微信二维码
  * 使用https方式获取gavatar头像，避免被墙

**v1.20_local_shenyun**
* 以下版本为神韵博客(https://51shenyun.cn) 基础于Alatelee(http://agatelee.cn) 的修改

* 添加评论算数验证码 
* 添加侧边栏缓存 使其静态 减少数据库查询 /更新周期1小时 可在sidebar.php修改
* 优化SEO修改在首页时logo为h1标签 文章时标题为h1标签 logo为h2标签
* 优化SEO为head添加canonical标签 利于收录
* 移除预获取DNS 加快加载速度
* 移除更多无用head头 更加简洁


**v1.21_local_shenyun**
* 添加复制时版权提示
* 禁止站内相互pingback
* 修复置顶文章后显示错误
* 修复因PHP7+ 而导致class.tgm.php的标题错误
* 修复默认小工具CSS显示问题

**v1.22_local_shenyun**
* 新增移动端底部显示友链
* 修改评论中昵称邮箱网址输入框对移动端的适配性
* 禁止调用emoji表情 使用浏览器自带eomoji 减少URL申请加快速度
* 移除Alatelee版本时本地化表情 减少图片获取加快速度
* 移除侧边栏缓存 彻底解决安装主题后侧边栏不显示问题 如有需要请移至 (https://51shenyun.cn/wordpress_sidebar/)
* 为字体加载过程增加font-display标签 以适应CSS递送优化
* 小幅修改文章中段落间距
