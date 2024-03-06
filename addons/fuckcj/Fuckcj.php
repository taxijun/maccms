<?php
namespace addons\Fuckcj;
use think\Addons;
use app\common\util\Dir;

/**
 * X站采集插件
 */
class Fuckcj extends Addons
{

    /**
     * 插件安装方法
     * @return bool
     */
    public function install()
    {
        return true;
    }

	/**
     * 插件启用方法 
     */
    public function enable()
    {
		$quickmenu = APP_PATH .'extra/quickmenu.php';
		$menu = 'Fuck资源采集,fuckcj/union';
		if(file_exists($quickmenu)){
			$menu_lod = config('quickmenu');
			if(in_array($menu,$menu_lod)){
				return true;
			}
			$menu_new[] = $menu;
			$new_menu = array_merge($menu_lod, $menu_new);
			$res = mac_arr2file( APP_PATH .'extra/quickmenu.php', $new_menu);			
		}
		$quickmenu = APP_PATH .'data/config/quickmenu.txt';
		if(file_exists($quickmenu)){
			$quickmenu = APP_PATH .'data/config/quickmenu.txt';
			if(!file_exists($quickmenu)){
				die('你当前的程序缺少快捷菜单文件，请勿在非苹果cms程序内使用！');
			}else{
				$lod_menu = @file_get_contents($quickmenu);
				if(strpos($lod_menu,$menu) !==false){
					return true;
				}else{
					file_put_contents($quickmenu, chr(13).$menu, FILE_APPEND);
				}
			}
		}
		return true;
    }
	
	/**
     * 插件禁用方法
     */
    public function disable()
    {
        return true;
    }

    /**
     * 插件卸载方法
     * @return bool
     */
    public function uninstall()
    {
		unlink(APP_PATH . 'admin/view/collect/xxcj.html');
		unlink(APP_PATH . 'admin/controller/Fuckcj.php');
		$this->delquick();
        return true;
    }

	/*
	 * 卸载快捷菜单
	*/
    public function delquick()
	{
		$quickmenu = APP_PATH .'extra/quickmenu.php';
		$menu = 'Fuck资源采集,fuckcj/union';
		if(file_exists($quickmenu)){
			$menu_lod = config('quickmenu');
			if(in_array($menu,$menu_lod)){
				$new_menu = [];
				foreach($menu_lod as $v){
					if($v!=$menu){
						$new_menu[] = $v;
					}
				}
				$res = mac_arr2file( APP_PATH .'extra/quickmenu.php', $new_menu);
			}			
		}
		$quickmenu = APP_PATH .'data/config/quickmenu.txt';
		if(file_exists($quickmenu)){
			if(file_exists($quickmenu)){
				$lod_menu = @file_get_contents($quickmenu);
				if(strpos($lod_menu,$menu) !==false){
					$new_menu = str_replace($menu.chr(13),"",$lod_menu);
					file_put_contents($quickmenu,$new_menu);
				}
			}			
		}
		return true;
	}


}
