<?php
namespace addons\Mycj;
use think\Addons;
use app\common\util\Dir;

/**
 * 萌芽采集Pro插件
 * by www.mycj.pro
 */
class Mycj extends Addons
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
	
	/**
     * 插件禁用方法
     */
    public function disable()
    {
		$this->delquick();
        return true;
    }

    /**
     * 删除插件文件 
     * @return bool
     */
    public function uninstall()
    {
		$items = [
            ['dir', ROOT_PATH . 'static/mycj/'],
			['dir', APP_PATH . 'admin/view/mycj/'],
			['file', APP_PATH . 'admin/controller/Mycj.php'],
			['file', APP_PATH . 'extra/cjfaves.php','faves'],
			['file', APP_PATH . 'extra/cjuser.php','cjuser'],
			['file', APP_PATH . 'extra/cjversion.php'],
        ];
		foreach ($items as &$v) {
			if ($v[0] == 'dir') {
				if(is_dir($v[1])){
					Dir::delDir($v[1]);
				}
			}else{
				if(file_exists($v[1])){
					unlink($v[1]);
				}
			}
		}
		$this->delquick();
        return true;
    }

	/*
	 * 卸载快捷菜单
	*/
    public function delquick()
	{
		$del_menu = '萌芽采集资源,mycj/union';
		$quickmenu = APP_PATH .'extra/quickmenu.php';
		if(file_exists($quickmenu)){
			$menu_lod = config('quickmenu');
			if(in_array($del_menu,$menu_lod)){
				foreach($menu_lod as $v){
					if($v!=$del_menu){
						$new_menu[] = $v;
					}
				}
				$res = mac_arr2file( APP_PATH .'extra/quickmenu.php', $new_menu);
			}
		}
		$quickmenu = APP_PATH .'data/config/quickmenu.txt';
		if(file_exists($quickmenu)){
			$menu_lod = @file_get_contents($quickmenu); 
			if(strpos($menu_lod,$del_menu) !==false){
				$menu_lod = str_replace(PHP_EOL .$del_menu,"",$menu_lod);
				@fwrite(fopen($quickmenu,'wb'),$menu_lod);
			}
		}
		return true;
	}

}
