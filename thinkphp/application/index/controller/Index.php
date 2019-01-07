<?php
namespace app\index\controller;

# 这里使用的是别名，原理大概是xxx\xxxxx\xxxx\xxxxx\xxx\yyy = yyy
use think\Controller;


# 继承了controller之后就可以使用assign传送数据和fetch()渲染输入。

class Index extends Controller
{
    public function index($name = 'weber', $year = 2019)
    {
        #return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
		return 'hello ' . $name . ' !! now is ' . $year . '.';
	}
    
    public function hello($name = 'thinkphp')
    {
        # return 'this is hello()';
        $this->assign('name', $name);
        # 这里没有指定模板，则自动按照默认规则（目录/控制器（名）/操作方法（名））到view->index->hello.html
        return $this->fetch();
    }
    
    private function test()
    {
        return 'this is test()';
    }
}

?>