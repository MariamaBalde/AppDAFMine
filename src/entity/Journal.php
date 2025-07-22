<?php
namespace AppDaf\Entity;

use DateTime;

class Journal
{
    private int $id;
    private DateTime  $date;
    private int  $heure;
    private string $ipadresse;
    private string $localisation;
    private TypeStatus $status;
    private int $code;
    private Citoyen $citoyen;



    public function __construct(int $id,DateTime $date,int $heure,string $ipadresse,string $localisation,TypeStatus $status,int $code) {
        $this->id = $id;
        $this->date = $date;
        $this->heure = $heure;
        $this->ipadresse = $ipadresse;
        $this->localisation = $localisation;
        $this->status = $status;
        $this->code = $code;
       $this->citoyen = new Citoyen();




    }
   
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

   
    public function getDate()
    {
        return $this->date;
    }

   
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

   
    public function getHeure()
    {
        return $this->heure;
    }

  
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

   

   
    public function getLocalisation()
    {
        return $this->localisation;
    }

    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

   
    public function getStatus()
    {
        return $this->status;
    }

    
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

   
    public function getCode()
    {
        return $this->code;
    }

   
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

  
  

   
    public function getIpadresse()
    {
        return $this->ipadresse;
    }

   
    public function setIpadresse($ipadresse)
    {
        $this->ipadresse = $ipadresse;

        return $this;
    }

   
    public function getCitoyen()
    {
        return $this->citoyen;
    }

  
    public function setCitoyen($citoyen)
    {
        $this->citoyen = $citoyen;

        return $this;
    }
}
