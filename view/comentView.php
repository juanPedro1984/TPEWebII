<?php

require_once('libs/Smarty.class.php');

class ComentView{

    function adminComent(){
        $smarty = new Smarty();
        $smarty->display('templates/adminComent.tpl');
    }

}

 ?>
