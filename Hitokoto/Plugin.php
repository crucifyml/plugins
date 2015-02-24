<?php
/**
 * 一言（ヒトコト）
 * 
 * @package Hitokoto
 * @author LittleMoe
 * @version 1.0.0
 * @link http://blog.crucifyml.com/archives/51/
 */
class Hitokoto_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->header = array('Hitokoto_Plugin', 'header');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('Hitokoto_Plugin', 'footer');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}

    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
	public static function config(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 输出头部js
     * 
     * @access public
     * @param unknown $header
     * @return unknown
     */
    public static function header() {
        $jsUrl2 = Helper::options()->pluginUrl . '/Hitokoto/hitokoto-load.js';
        echo '<script type="text/javascript" src="'.$jsUrl2.'"></script>';
    }
    
    /**
     * 输出尾部js
     * 
     * @access public
     * @param unknown $header
     * @return unknown
     */
    public static function footer() {
        $jsUrl1 = Helper::options()->pluginUrl . '/Hitokoto/hitokoto-pre.js';
        echo '<script type="text/javascript" src="'.$jsUrl1.'"></script>';
    }
    

}