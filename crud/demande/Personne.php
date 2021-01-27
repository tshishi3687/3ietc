<?php


class Personne
{
    public $ID_personne;
    public $ID_SECTION;
    public $ID_STATUT;
    public $NOM;
    public $PRENOM;
    public $DDN;
    public $TELEPHONE;
    public $EMAIL;
    public $PASSWORD;
    public $ADRESSE;

    /**
     * Personne constructor.
     * @param $ID_personne
     * @param $ID_SECTION
     * @param $ID_STATUT
     * @param $NOM
     * @param $PRENOM
     * @param $DDN
     * @param $TELEPHONE
     * @param $EMAIL
     * @param $PASSWORD
     * @param $ADRESSE
     */
    public function __construct($ID_personne, $ID_SECTION, $ID_STATUT, $NOM, $PRENOM, $DDN, $TELEPHONE, $EMAIL, $PASSWORD, $ADRESSE)
    {
        $this->ID_personne = $ID_personne;
        $this->ID_SECTION = $ID_SECTION;
        $this->ID_STATUT = $ID_STATUT;
        $this->NOM = $NOM;
        $this->PRENOM = $PRENOM;
        $this->DDN = $DDN;
        $this->TELEPHONE = $TELEPHONE;
        $this->EMAIL = $EMAIL;
        $this->PASSWORD = $PASSWORD;
        $this->ADRESSE = $ADRESSE;
    }
}
