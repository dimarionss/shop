<?

function dump($var){
	echo "<pre>";
var_dump($var);
    echo "</pre>";
}
function dumpx($var){
	echo "<pre>";
var_dump($var);
    echo "</pre>";
    exit();
}

function show_err(){
	ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
}
class req_c{
    public $dir='';
    public function __get($name)
    {
        require_once "classes/".$this->dir.$name.".php";
        return $this;
    }
    public function dir($dir){
        $this->dir=$dir;
        return $this;
}
}
$reg_c = new req_c();