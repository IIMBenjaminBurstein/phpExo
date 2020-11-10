<?php
/**
 * Répertorie les informations liées à un mammifère
 */
namespace App\Mammifere;

class Mammifere {
    /**
     * Stock nom de l'animal
     * @var string 
     */
    public $nom;

    /**
     * Stock le cri de l'animal
     * @var string 
     */
    protected $cri;
     /**
     * Stock le nombre de patte de l'animal
     *
     * @var integer
     */
    public $pattes = 4;

   /**
    * 
    *Stock le pelage de l'animal
    * @var string
    */
    public $pelage;

    /**
     * Répertorie les informations liées à un mammifère
     *
     * @param string $nom
     * @param string $pelage
     */
    public function __construct(string $nom, string $pelage){
        $this->nom = $nom;
        $this->pelage = $pelage;
    }
/**
 * set le nom a un animal
 *
 * @param string $nom
 * @return string
 */
    public function setNom(string $nom){
        $this->nom = $nom;
    }
    /**
     * get stock le nom de l'animal
     *
     * @return string
     */
    public function getNom(){
        return $this->nom ;
    }

/**
 * get le cri de l'animal
 *
 * @param string $nom
 * @return string
 */
    public function getCri (){
        return $this->cri;
    }
/**
 * set pelage animal
 *
 * @param string $pelage
 */
public function setPelage($pelage){
    $this->pelage = $pelage;
}
}