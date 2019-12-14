<?php
require_once 'BaseElement.php';
    
class Project extends BaseElement {
    private $tecnologies = [];

    public function __construct($t, $desc, $m,Array $tec) {
        parent:: __construct($t, $desc, $m);
        $this->tecnologies = $tec;
    }

    public function setTecnologies(Array $tec) {
        $this->tecnologies = $tec;
    }

    public function getTecnologies() {
        return $this->tecnologies;
    }
}