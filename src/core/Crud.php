<?php
namespace pagador\gs\core;

interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

?>