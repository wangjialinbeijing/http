<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/13 0013
 * Time: 15:15
 */

namespace wangjialin\http;

/**
 * HTTP请求操作类
 * Class Http
 * @package wangjialin\http
 */
class Http
{
    /**
     * GET请求类
     * @param $url
     * @return bool|string
     */
    public static function requestByGet($url)
    {
        return file_get_contents($url);
    }
}