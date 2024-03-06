<?php
/**
 *  『萌芽采集Pro插件』多功能综合多资源站采集插件
 * 
 * 官方网站    www.mycj.pro
 * @说明	   请勿擅自修改文件内容，否则可能无法正常使用！
 */
namespace app\admin\controller;

class Collect2 extends Base
{
    public function __construct()
    {
        parent::__construct();
		header('X-Accel-Buffering: no');
    }

    public function union()
    {
		$this->enable();
		$url = url('mycj/union');
        mac_redirect($url);
    }

    public function enable()
    {
		$quickmenu = APP_PATH .'extra/quickmenu.php';
		$lod_menu = '萌芽采集资源,collect2/union';
		$menu = '萌芽采集资源,mycj/union';
		if(file_exists($quickmenu)){
			$menu_lod = config('quickmenu');
			if(in_array($menu,$menu_lod)){
				return true;
			}
			if(in_array($lod_menu,$menu_lod)){
				foreach($menu_lod as $v){
					if($v!=$lod_menu){
						$menu_lod2[] = $v;
					}
				}
				$menu_lod = $menu_lod2;
			}
			$menu_new[] = $menu;
			$new_menu = array_merge($menu_lod, $menu_new);
			$res = mac_arr2file( APP_PATH .'extra/quickmenu.php', $new_menu);			
		}
		$quickmenu = APP_PATH .'data/config/quickmenu.txt';
		if(file_exists($quickmenu)){
			$menu_lod = @file_get_contents($quickmenu);
			if(strpos($menu_lod,$lod_menu) !==false){
				$menu_lod = str_replace(PHP_EOL .$lod_menu,"",$menu_lod);
			}
			if(strpos($menu_lod,$menu) !==false){
				return true;
			}else{
				$new_menu = $menu_lod . PHP_EOL . $menu;
				@fwrite(fopen($quickmenu,'wb'),$new_menu);
			}
		}
		return true;
    }

}
