<?php
class DebugHelper {
    function colored($arg){
    	highlight_string("<?php\n\$data =\n" . var_export($arg, true) . ";\n?>"); die();
    }
}
?>