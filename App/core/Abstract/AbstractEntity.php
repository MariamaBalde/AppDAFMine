<?php
namespace AppDaf\Core\Abstract;

// AbstractEntity: regroupe les fn() commune au entity
// abstractentity nous permet de transformer les objet en tableau et les tableau en objet et les objet en json

abstract class AbstractEntity {

    //fn()abtract pas de corps  et la methode est static car return un objet

   abstract public static function toObject(array $data):object;


   abstract public function toArray():array;

    public function toJson(object $object){
        return json_encode($this->toArray($object));
    }
}