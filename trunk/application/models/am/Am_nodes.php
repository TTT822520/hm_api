<?php

require_once APPPATH . '/models/Modelbase.php';

class Am_nodes extends Modelbase
{

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = strtolower(__CLASS__);
    }

}
