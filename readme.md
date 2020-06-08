# 使用案列代码 （DemoCode）

// 引入autoload.php文件
require './vendor/autoload.php';

$data = [
	'name' => 'zs',
	'age'  => 20
];

// 调用Json的encode静态方法 序列化数据
$jsondata = \phptestplugin\Json::encode($data);
print_r($jsondata);