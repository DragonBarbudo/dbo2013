<?php
#session_start();

define(_U, 'http://localhost:8888/dbo2013/');
define(_TITLE, '');
define(_DESCRIPTION, '');



define('_SERVER', '');
define('_DB', '');
define('_USER', '');
define('_PASS', '');






	
	
	
$get = array();	
$get[0] = ($_GET['var1']=='' ? 'inicio' : $_GET['var1']);
if($_GET['var2']!=""){ $get[1] = $_GET['var2']; };
if($_GET['var3']!=""){ $get[2] = $_GET['var3']; };
if($_GET['var4']!=""){ $get[3] = $_GET['var4']; };	



	
//site paths

define(_IMG, 'site/img/');
define(_CSS, 'site/css/');
define(_JS, 'site/js/');
define(_PHP, 'site/php/');
define(_VIEW, 'site/view/');





###### PATH echoes
function u(){ echo _U; }
# (string: name of file , 1: echoes the path / 0: returns path
function img($str,$echo=1){	 	if($echo){	echo _U._IMG.$str;	} else {	return _U._IMG.$str;	}; }
function css($str,$echo=1){	 	if($echo){	echo _U._CSS.$str;	} else {	return _U._CSS.$str;	}; }
function js($str,$echo=1){ 		if($echo){	echo _U._JS.$str;	} else {	return _U._JS.$str;		}; }
function php($str,$echo=1){ 	if($echo){	echo _PHP.$str;		} else {	return _PHP.$str;		}; }
function view($str,$echo=1){ 	if($echo){	echo _VIEW.$str;	} else {	return _VIEWS.$str;		}; }

	
####### Create Navigation Links
function nav($str, $get, $class=NULL){
	foreach($get as $g){
		if($g==slug($str)){
			$class='active';
		}
	}
	echo '<a href="'._U.slug($str).'" title="'.$str.'" class="'.$class.'">'.$str.'</a>';
}	
	
	
function getTitle(){
	echo _TITLE;
}

	
	
	
######## SLUG FN
function slug($string) {
    $table = array(
            'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
            'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
            'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
            'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
            'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
            'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
            'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', '/' => '-', ' ' => '-', ':'=>'', '.'=>'', '!'=>'', '¡'=>''
    );
    // -- Remove duplicated spaces
    $stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $string);
    // -- Returns the slug
    return strtolower(strtr($string, $table));
}
	
	
if(_SERVER&&_DB&&_USER&&_PASS){
	require php('_lib/rb.php',0);
	include php('server.php',0);
}
		
		
?>