<?php


class Statut
{
    private int $ID_STATUT;
    private string $NOM_STATUT;

    /**
     * Statut constructor.
     * @param int $ID_STATUT
     * @param string $NOM_STATUT
     */
    public function __construct(int $ID_STATUT, string $NOM_STATUT)
    {
        $this->ID_STATUT = $ID_STATUT;
        $this->NOM_STATUT = $NOM_STATUT;
    }


    /**
     * @return int
     */
    public function getIDSTATUT(): int
    {
        return $this->ID_STATUT;
    }

    /**
     * @param int $ID_STATUT
     */
    public function setIDSTATUT(int $ID_STATUT): void
    {
        $this->ID_STATUT = $ID_STATUT;
    }

    /**
     * @return string
     */
    public function getNOMSTATUT(): string
    {
        return $this->NOM_STATUT;
    }

    /**
     * @param string $NOM_STATUT
     */
    public function setNOMSTATUT(string $NOM_STATUT): void
    {
        $this->NOM_STATUT = $NOM_STATUT;
    }


}
