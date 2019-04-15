<?php

class admin {
	
	protected $_ci_cached_vars =	array();
	protected $_ci_view_paths =	array(MyAdmin	=> TRUE);
	
	public function __construct(){
		$this->_ci_ob_level = ob_get_level();
		$this->_ci_classes =& is_loaded();
		log_message('info', 'Loader Class Initialized');
	}
	
	public function view($view, $vars = array(), $return = FALSE){
		return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_prepare_view_vars($vars), '_ci_return' => $return));
	}
	
	protected function _ci_prepare_view_vars($vars){
		if ( ! is_array($vars)){
			$vars = is_object($vars)
				? get_object_vars($vars)
				: array();
		}
		foreach (array_keys($vars) as $key){
			if (strncmp($key, '_ci_', 4) === 0){
				unset($vars[$key]);
			}
		}
		return $vars;
	}
	
	protected function _ci_load($_ci_data){
		foreach (array('_ci_view', '_ci_vars', '_ci_path', '_ci_return') as $_ci_val){
			$$_ci_val = isset($_ci_data[$_ci_val]) ? $_ci_data[$_ci_val] : FALSE;
		}
		$file_exists = FALSE;
		if (is_string($_ci_path) && $_ci_path !== ''){
			$_ci_x = explode('/', $_ci_path);
			$_ci_file = end($_ci_x);
		}else{
			$_ci_ext = pathinfo($_ci_view, PATHINFO_EXTENSION);
			$_ci_file = ($_ci_ext === '') ? $_ci_view.'.php' : $_ci_view;
			foreach ($this->_ci_view_paths as $_ci_view_file => $cascade){
				if (file_exists($_ci_view_file.$_ci_file)){
					$_ci_path = $_ci_view_file.$_ci_file;
					$file_exists = TRUE;
					break;
				}
				if ( ! $cascade){
					break;
				}
			}
		}
		if ( ! $file_exists && ! file_exists($_ci_path)){
			show_error('Unable to load the requested file: '.$_ci_file);
		}
		$_ci_CI =& get_instance();
		foreach (get_object_vars($_ci_CI) as $_ci_key => $_ci_var){
			if ( ! isset($this->$_ci_key)){
				$this->$_ci_key =& $_ci_CI->$_ci_key;
			}
		}
		empty($_ci_vars) OR $this->_ci_cached_vars = array_merge($this->_ci_cached_vars, $_ci_vars);
		extract($this->_ci_cached_vars);
		ob_start();
		if ( ! is_php('5.4') && ! ini_get('short_open_tag') && config_item('rewrite_short_tags') === TRUE){
			echo eval('?>'.preg_replace('/;*\s*\?>/', '; ?>', str_replace('<?=', '<?php echo ', file_get_contents($_ci_path))));
		}else{
			include($_ci_path); // include() vs include_once() allows for multiple views with the same name
		}
		log_message('info', 'File loaded: '.$_ci_path);
		if ($_ci_return === TRUE){
			$buffer = ob_get_contents();
			@ob_end_clean();
			return $buffer;
		}
		if (ob_get_level() > $this->_ci_ob_level + 1){
			ob_end_flush();
		}else{
			$_ci_CI->output->append_output(ob_get_contents());
			@ob_end_clean();
		}
		return $this;
	}
	
}