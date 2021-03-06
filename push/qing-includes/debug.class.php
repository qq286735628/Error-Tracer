<?php
/**
 * Error Tracer
 *
 * 程序调试函数库。
 * @base Qing By soulteary
 * @version 1.0.0
 * @include
 *          - @function theDebug                    调试程序入口
 *
 * @todo
 *      - 改进调试信息输出。
 *
 * @package soulteary
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

if (!defined('FILE_PREFIX')) die('Silence is golden.');

class Debug extends Safe
{
    /**
     * 调试模版类
     *
     * @since 1.0.0
     *
     * @todo
     *      - 改进方式。
     * @use core::associative_push
     * @eg. debug::theDebug(true);
     * @params boolean $echo 是否输出调试信息。
     * @return array 调试结果。
     */
    public function theDebug($echo = false)
    {
        $sysInfo = array();
        $sysInfo = core::associative_push(array('DOCUMENT_ROOT' => $_SERVER["DOCUMENT_ROOT"]), $sysInfo);
        $sysInfo = core::associative_push(array('REDIRECT_URL' => $_SERVER["REDIRECT_URL"]), $sysInfo);
        $sysInfo = core::associative_push(array('SCRIPT_FILENAME' => $_SERVER["SCRIPT_FILENAME"]), $sysInfo);
        $sysInfo = core::associative_push(array('SCRIPT_NAME' => $_SERVER["SCRIPT_NAME"]), $sysInfo);
        $sysInfo = core::associative_push(array('REQUEST' => $_REQUEST), $sysInfo);

        if ($echo) {
            echo $sysInfo;
        } else {
            return $sysInfo;
        }

    }

}

?>