<?php
namespace AppDaf\Core\Abstract;
// regroupe les fn() commune au controller

abstract class AbstractController {



    protected function renderJson(string $view,$donnee = []){
   

    }

    // permet de lister
    abstract public function index();
    abstract public function store();
    abstract public function create();
    abstract public function destroy();
    abstract public function show();
    abstract public function edit();



}