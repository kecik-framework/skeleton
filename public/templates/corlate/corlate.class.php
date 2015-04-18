<?php
class Corlate {
	private static $_this;

	static function space() {
		return str_repeat(' ', 4);
	}

	public static function attrtolower($attr) {
		$ret = [];
		while (list($att, $value) = each($attr))
			$ret[strtolower($att)] = $value;

		return $ret;
	} 

	public static function getAttributes($attr, $except=[]) {
		$attribute = '';
		if (is_array($attr)) {
			while(list($att, $value) = each($attr)) {
				if (count($except) > 0 && !in_array($att, $except))
					$attribute .= $att.'="'.$value.'" ';
				else
					$attribute .= $att.'="'.$value.'" ';

			}
		}

		return $attribute;
	}

	public static function fa($icon, $attr=[], $tag='<i>') {
		$attr = self::attrtolower($attr);

		$class = (isset($attr['class']))? $attr['class']:'';
		if (isset($attr['class'])) unset($attr['class']);

		$attribute = self::getAttributes($attr, ['href', 'social', 'class']);
		echo substr($tag, 0, -1)." class=\"fa fa-$icon $class\" $attribute ></".substr($tag, 1, -1).'>';

		return self::$_this;
	}

	public static function socialShare(Closure $elements) {
		echo "<ul class=\"social-share\">\n";
		self::$_this = new self;
		$elements(self::$_this);
        echo "</ul>\n";
	}

	public function socialButton(Array $attr) {
		$attr = self::attrtolower($attr);

		$link = (isset($attr['href']))? $attr['href']:'';
		$social = (isset($attr['social']))? strtolower($attr['social']):'';
		$class = (isset($attr['class']))? $attr['class']:'';
		if (isset($attr['class'])) unset($attr['class']);

		$attribute = self::getAttributes($attr, ['href', 'social', 'class']);

		echo self::space()."<li><a $attribute href=\"$link\">";
		self::fa($social);
		echo "</a></li>\n";

		return $this;
	}

	public static function menu(Array $attr, Closure $elements) {
		$attr = self::attrtolower($attr);
		
		$class = (isset($attr['class']))? $attr['class']:'collapse navbar-collapse navbar-right';
		if (isset($attr[''])) unset($attr['class']);

		$attribute = self::getAttributes($attr, ['class']);
		echo "<div class=\"collapse navbar-collapse navbar-right\" $attribute>\n";
		echo self::space()."<ul class=\"nav navbar-nav\">\n";
		self::$_this = new self;
		$elements(self::$_this);
		echo self::space()."</ul>\n";
		echo "</div>\n";

	}

	public function addMenu(Array $attr, $sub='') {
		$attr = self::attrtolower($attr);

		$active = (isset($attr['active']))? $attr['active']:'';
		$link = (isset($attr['href']))? $attr['href']:'';
		$title = (isset($attr['title']))? $attr['title']:'';
		$class = (isset($attr['class']))? $attr['class']:'';
		if (isset($attr['class'])) unset($attr['class']);

		$attribute = self::getAttributes($attr, ['href', 'active', 'title', 'class']);

		if (is_callable($sub)) $class = 'dropdown'.$class;

		if (!empty($active)) $class .= ' '.$active;

		$class="class=\"$class\"";

		echo self::space().self::space()."<li $class>";

			echo "<a href=\"$link\">$title";
				if (is_callable($sub)) {echo ' '; self::fa('angle-down');}
			echo "</a>";

			if (is_callable($sub)) {
				echo "\n".self::space().self::space().self::space()."<ul class=\"dropdown-menu\">\n";
				echo self::space().self::space().self::space(); 
				self::$_this = new self;
				$sub(self::$_this);
				echo self::space().self::space().self::space()."</ul>\n";
			}

		echo "</li>\n";

		return $this;
	}

	public static function form($attr, Closure $elements) {
		$attr = self::attrtolower($attr);

		$id = (isset($attr['id']))? $attr['id']:'';
		$name = (isset($attr['name']))? $attr['id']:$id;
		$method = (isset($attr['method']))? $attr['method']:'';
		$action = (isset($attr['action']))? $attr['action']:'';

		$attribute = self::getAttributes($attr, ['id', 'name', 'method', 'action']);

		echo "<form id=\"$id\" name=\"$name\" method=\"$method\" $attribute>\n";
		self::$_this = new self;
		$elements(self::$_this);
		echo "</form>\n";
	}

	public function input(Array $attr) {
		$attr = self::attrtolower($attr);

		$id = (isset($attr['id']))? $attr['id']:'';
		$name = (isset($attr['name']))? $attr['id']:$id;
		$type = (isset($attr['type']))? $attr['type']:$id;
		$value = (isset($attr['value']))? $attr['value']:'';

		$attribute = self::getAttributes($attr);

		echo self::space()."<input type=\"$type\" id=\"$id\" name=\"$name\" value=\"$value\" $attribute />\n";

		return $this;
	}

	public function textarea(Array $attr) {
		$attr = self::attrtolower($attr);

		$id = (isset($attr['id']))? $attr['id']:'';
		$name = (isset($attr['name']))? $attr['id']:$id;
		$type = (isset($attr['type']))? $attr['type']:$id;
		$value = (isset($attr['value']))? $attr['value']:'';

		$attribute = self::getAttributes($attr);

		echo self::space()."<textarea id=\"$id\" name=\"$name\" $attribute >$value</textarea>";
		return $this;
	}

	public function addField(Array $attr) {
		$attr = self::attrtolower($attr);

		$id = (isset($attr['id']))? $attr['id']:'';
		$name = (isset($attr['name']))? $attr['id']:$id;
		$type = (isset($attr['type']))? $attr['type']:$id;
		$value = (isset($attr['value']))? $attr['value']:'';
		$title = (isset($attr['title']))? $attr['title']:'';

		$attribute = self::getAttributes($attr);

		echo self::space()."<div class=\"form-group\">\n";
	        echo self::space().self::space()."<label>$title</label>\n";
	        if (in_array($type, ['text', 'password', 'email', 'number', 'submit', 'button', 'reset', 'file'])) {
	        	$attr['class'] = 'form-control';
	        	echo self::space(); self::$_this->input($attr);
	        } elseif ($type == 'textarea') {
	        	$attr['class'] = 'form-control';
	        	echo self::space(); self::$_this->textarea($attr);
	        }

        echo self::space()."</div>\n";

        return $this;
	}

	public static function div($class, $elements='') {
		$attribute = '';
		if (is_array($class)) {
			$attr = self::attrtolower($class);

			$class = (isset($class['class']))? $class['class']:'';
			if (isset($attr['class'])) unset($attr['class']);

			$attribute = self::getAttributes($attr, ['class']);
		}

		echo "<div class=\"$class\" $attribute>";
		if (is_callable($elements)) {
			echo "\n".self::space(); 
			self::$_this = new self;
			$elements(self::$_this);
		}
		echo "</div>\n";
	}

	public static function h($number, $text, $elements='') {
		$attribute = '';
		if (is_array($text)) {
			$attr = self::attrtolower($text);

			$text = (isset($text['text']))? $text['text']:'';
			if (isset($attr['text'])) unset($attr['text']);

			$attribute = self::getAttributes($attr, ['text']);
		}

		echo "<h$number $attribute>".$text;
		if (is_callable($elements)) {
			echo "\n".self::space(); 
			self::$_this = new self;
			$elements(self::$_this);
		}
		echo "</h$number>\n";

		return self::$_this;
	}

	public static function p($text, $elements='') {
		$attribute = '';
		if (is_array($text)) {
			$attr = self::attrtolower($text);

			$text = (isset($text['text']))? $text['text']:'';
			if (isset($attr['text'])) unset($attr['text']);

			$attribute = self::getAttributes($attr, ['text']);
		}

		echo "<p $attribute>".$text;
		if (is_callable($elements)) {
			echo "\n".self::space(); 
			self::$_this = new self;
			$elements(self::$_this);
		}
		echo "</p>\n";

		return self::$_this;
	}

	public static function ul($class, $elements='') {
		$attribute = '';
		if (is_array($class)) {
			$attr = self::attrtolower($class);

			$class = (isset($class['class']))? $class['class']:'';
			if (isset($attr['class'])) unset($attr['class']);

			$attribute = self::getAttributes($attr, ['class']);
		}

		echo "<ul class=\"$class\" $attribute>\n";
		if (is_callable($elements)) {
			echo self::space(); 
			self::$_this = new self;
			$elements(self::$_this);
		}
		echo "</ul>\n";
	}

	public static function ol($class, $elements='') {
		$attribute = '';
		if (is_array($class)) {
			$attr = self::attrtolower($class);

			$class = (isset($class['class']))? $class['class']:'';
			if (isset($attr['class'])) unset($attr['class']);

			$attribute = self::getAttributes($attr, ['class']);
		}

		echo "<ol class=\"$class\" $attribute>\n";
		if (is_callable($elements)) {
			echo self::space(); 
			self::$_this = new self;
			$elements(self::$_this);
		}
		echo "</ol>\n";
	}

	public static function li($class, $elements='') {
		$attribute = '';
		if (is_array($class)) {
			$attr = self::attrtolower($class);

			$class = (isset($class['class']))? $class['class']:'';
			if (isset($attr['class'])) unset($attr['class']);

			$attribute = self::getAttributes($attr, ['class']);
		}

		echo "<li class=\"$class\" $attribute>";
		if (is_callable($elements)) {
			echo "\n".self::space(); 
			self::$_this = new self;
			$elements(self::$_this);
		}
		echo "</li>\n";
	}

	public static function address($class, $elements='') {
		$attribute = '';
		if (is_array($class)) {
			$attr = self::attrtolower($class);

			$class = (isset($class['class']))? $class['class']:'';
			if (isset($attr['class'])) unset($attr['class']);

			$attribute = self::getAttributes($attr, ['class']);
		}

		if (!is_callable($class))
			echo "<address class=\"$class\" $attribute>\n";
		else
			echo "<address>\n";

		if (is_callable($class)) {
			echo "\n".self::space(); 
			self::$_this = new self;
			$class(self::$_this);
		}
		if (is_callable($elements)) {
			echo "\n".self::space(); 
			self::$_this = new self;
			$elements(self::$_this);
		}
		echo "</address>\n";
	}

}
?>