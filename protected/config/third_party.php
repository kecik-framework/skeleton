<?php

class ThirdParty {

	public static function init() {
		spl_autoload_register(array(self, '::autoload'), true, true);
	}

	public static function autoload($class) {
		$class_array = explode('\\', $class);
		if (count($class_array)>1) {
			if ($class_array[0] == 'ThirdParty') {
				$file_load = $this->config->get('path.third_party').'/'.$class_array[1].'/'.$class_array[2].'.php';
				if (file_exists($file_load))
					include_once $file_load;
			}
		}
	}
}