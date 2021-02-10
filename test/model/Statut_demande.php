<?php


class Statut_demande
{
    private int $ID_STA_DEMANDE;
    private string $NOMSTADEMAND;

    /**
     * Statut_demande constructor.
     * @param int $ID_STA_DEMANDE
     * @param string $NOMSTADEMAND
     */
    public function __construct(int $ID_STA_DEMANDE, string $NOMSTADEMAND)
    {
        $this->ID_STA_DEMANDE = $ID_STA_DEMANDE;
        $this->NOMSTADEMAND = $NOMSTADEMAND;
    }


    /**
     * @return int
     */
    public function getIDSTADEMANDE(): int
    {
        return $this->ID_STA_DEMANDE;
    }

    /**
     * @param int $ID_STA_DEMANDE
     */
    public function setIDSTADEMANDE(int $ID_STA_DEMANDE): void
    {
        $this->ID_STA_DEMANDE = $ID_STA_DEMANDE;
    }

    /**
     * @return string
     */
    public function getNOMSTADEMAND(): string
    {
        return $this->NOMSTADEMAND;
    }

    /**
     * @param string $NOMSTADEMAND
     */
    public function setNOMSTADEMAND(string $NOMSTADEMAND): void
    {
        $this->NOMSTADEMAND = $NOMSTADEMAND;
    }



}
