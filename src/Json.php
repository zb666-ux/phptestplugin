<?php

namespace phptestplugin;

Class Json
{
	public static function encode($data)
	{
		return json_encode($data);
	}

	public static function decode($jsondata)
	{
		/**
		 *  json_decode 第二个参数返回数据类型，默认false则返回对象，true则返回数组
		 */
		
		return json_decode($jsondata,true);
	}
}