<?php

namespace AppDaf\Entity;

use AppDaf\Core\Abstract\AbstractEntity;
use DateTime;

class Citoyen extends AbstractEntity
{
    private int  $id;
    private string $nom;
    private string $prenom;
    private string $cni;
    private DateTime   $naissance;
    private string $lieu_naissance;
    private string $urlPhotoIdentite;
   

    public function __construct(int $id = 1, string $nom = "", string $prenom = "", string $cni = "", DateTime  $naissance = new DateTime(), string $lieu_naissance = "",string $urlPhotoIdentite="")
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->cni = $cni;
        $this->naissance = $naissance;
        $this->lieu_naissance = $lieu_naissance;
        $this->urlPhotoIdentite = $urlPhotoIdentite;
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


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCni()
    {
        return $this->cni;
    }


    public function setCni($cni)
    {
        $this->cni = $cni;

        return $this;
    }


    public function getNaissance()
    {
        return $this->naissance;
    }


    public function setNaissance($naissance)
    {
        $this->naissance = $naissance;

        return $this;
    }


    public function getLieu_naissance()
    {
        return $this->lieu_naissance;
    }


    public function setLieu_naissance($lieu_naissance)
    {
        $this->lieu_naissance = $lieu_naissance;

        return $this;
    }


   


    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'cni' => $this->cni,
            'naissance' => $this->naissance,
            'lieu_naissance' => $this->lieu_naissance
        ];
    }

    public static function toObject(array $data): object
    {
        return new static(
            $data["id"],
            $data["nom"],
            $data["nom"],
            $data["prenom"],
            $data["cni"],
            $data["naissance"],
            $data["lieu_naissance"]
        );
    }

  
    public function getUrlPhotoIdentite()
    {
        return $this->urlPhotoIdentite;
    }

   
    public function setUrlPhotoIdentite($urlPhotoIdentite)
    {
        $this->urlPhotoIdentite = $urlPhotoIdentite;

        return $this;
    }
}
