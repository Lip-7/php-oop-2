<?php

trait Width{
    public $width;
    public function setWidth($val, $type) {
        $this->width = $val . $type;
    }
    public function getWidth() {
        if (empty($this->width)) {
            throw new Exception("The width isn't setted");
        }
        return $this->width;
    }
}


/* 
esempio come usare il getwidth:

try {
    getWidth()
} catch(Exception $e) {
    echo 'Eccenzione: ' . $e->getMessage
}



*/