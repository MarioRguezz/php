<?php
class object
{
    // attributes
    public $parm1;
    public $parm2;
    public $parm3;



    //constructor
    function __construct($parm1, $parm2, $parm3) {
        $this->$parm1 = $parm1;
        $this->$parm2 = $parm2;
        $this->$parm3 = $parm3;
   }


    public function getParam1() {
        return $this->$parm1;
    }


    public function setParam1($param1) {
        $this->$param1 = $param1;
    }


}
?>
