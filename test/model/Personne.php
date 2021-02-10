<?php

use Cassandra\Date;

class Personne
{
    // variable de class
    private int $ID_personne;
    private Section $SECTION;
    private Statut $STATUT;
    private string $NOM;
    private string $PRENOM;
    private Date $DDN;
    private int $TELEPHONE;
    private string $EMAIL;
    private string $PASSWORD;
    private string $ADDRESSE;

    /**
     * Personne constructor.
     * @param int $ID_personne
     * @param Section $SECTION
     * @param Statut $STATUT
     * @param string $NOM
     * @param string $PRENOM
     * @param Date $DDN
     * @param int $TELEPHONE
     * @param string $EMAIL
     * @param string $PASSWORD
     * @param string $ADDRESSE
     */
    public function __construct(int $ID_personne, Section $SECTION, Statut $STATUT, string $NOM, string $PRENOM, Date $DDN, int $TELEPHONE, string $EMAIL, string $PASSWORD, string $ADDRESSE)
    {
        $this->ID_personne = $ID_personne;
        $this->SECTION = $SECTION;
        $this->STATUT = $STATUT;
        $this->NOM = $NOM;
        $this->PRENOM = $PRENOM;
        $this->DDN = $DDN;
        $this->TELEPHONE = $TELEPHONE;
        $this->EMAIL = $EMAIL;
        $this->PASSWORD = $PASSWORD;
        $this->ADDRESSE = $ADDRESSE;
    }


    /**
     * @return int
     */
    public function getIDPersonne(): int
    {
        return $this->ID_personne;
    }

    /**
     * @param int $ID_personne
     */
    public function setIDPersonne(int $ID_personne): void
    {
        $this->ID_personne = $ID_personne;
    }

    /**
     * @return Section
     */
    public function getSECTION(): Section
    {
        return $this->SECTION;
    }

    /**
     * @param Section $SECTION
     */
    public function setSECTION(Section $SECTION): void
    {
        $this->SECTION = $SECTION;
    }

    /**
     * @return Statut
     */
    public function getSTATUT(): Statut
    {
        return $this->STATUT;
    }

    /**
     * @param Statut $STATUT
     */
    public function setSTATUT(Statut $STATUT): void
    {
        $this->STATUT = $STATUT;
    }

    /**
     * @return string
     */
    public function getNOM(): string
    {
        return $this->NOM;
    }

    /**
     * @param string $NOM
     */
    public function setNOM(string $NOM): void
    {
        $this->NOM = $NOM;
    }

    /**
     * @return string
     */
    public function getPRENOM(): string
    {
        return $this->PRENOM;
    }

    /**
     * @param string $PRENOM
     */
    public function setPRENOM(string $PRENOM): void
    {
        $this->PRENOM = $PRENOM;
    }

    /**
     * @return Date
     */
    public function getDDN(): Date
    {
        return $this->DDN;
    }

    /**
     * @param Date $DDN
     */
    public function setDDN(Date $DDN): void
    {
        $this->DDN = $DDN;
    }

    /**
     * @return int
     */
    public function getTELEPHONE(): int
    {
        return $this->TELEPHONE;
    }

    /**
     * @param int $TELEPHONE
     */
    public function setTELEPHONE(int $TELEPHONE): void
    {
        $this->TELEPHONE = $TELEPHONE;
    }

    /**
     * @return string
     */
    public function getEMAIL(): string
    {
        return $this->EMAIL;
    }

    /**
     * @param string $EMAIL
     */
    public function setEMAIL(string $EMAIL): void
    {
        $this->EMAIL = $EMAIL;
    }

    /**
     * @return string
     */
    public function getPASSWORD(): string
    {
        return $this->PASSWORD;
    }

    /**
     * @param string $PASSWORD
     */
    public function setPASSWORD(string $PASSWORD): void
    {
        $this->PASSWORD = $PASSWORD;
    }

    /**
     * @return string
     */
    public function getADDRESSE(): string
    {
        return $this->ADDRESSE;
    }

    /**
     * @param string $ADDRESSE
     */
    public function setADDRESSE(string $ADDRESSE): void
    {
        $this->ADDRESSE = $ADDRESSE;
    }


}
