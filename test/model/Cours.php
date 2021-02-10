<?php


class Cours
{
    private int $ID_COURS;
    private string $NOM_COURS;
    private int $NB_PERIODE;
    private string $PREREQUISES;
    private string $CAPACITES_TERMINALES;

    /**
     * Cours constructor.
     * @param int $ID_COURS
     * @param string $NOM_COURS
     * @param int $NB_PERIODE
     * @param string $PREREQUISES
     * @param string $CAPACITES_TERMINALES
     */
    public function __construct(int $ID_COURS, string $NOM_COURS, int $NB_PERIODE, string $PREREQUISES, string $CAPACITES_TERMINALES)
    {
        $this->ID_COURS = $ID_COURS;
        $this->NOM_COURS = $NOM_COURS;
        $this->NB_PERIODE = $NB_PERIODE;
        $this->PREREQUISES = $PREREQUISES;
        $this->CAPACITES_TERMINALES = $CAPACITES_TERMINALES;
    }


    /**
     * @return int
     */
    public function getIDCOURS(): int
    {
        return $this->ID_COURS;
    }

    /**
     * @param int $ID_COURS
     */
    public function setIDCOURS(int $ID_COURS): void
    {
        $this->ID_COURS = $ID_COURS;
    }

    /**
     * @return string
     */
    public function getNOMCOURS(): string
    {
        return $this->NOM_COURS;
    }

    /**
     * @param string $NOM_COURS
     */
    public function setNOMCOURS(string $NOM_COURS): void
    {
        $this->NOM_COURS = $NOM_COURS;
    }

    /**
     * @return int
     */
    public function getNBPERIODE(): int
    {
        return $this->NB_PERIODE;
    }

    /**
     * @param int $NB_PERIODE
     */
    public function setNBPERIODE(int $NB_PERIODE): void
    {
        $this->NB_PERIODE = $NB_PERIODE;
    }

    /**
     * @return string
     */
    public function getPREREQUISES(): string
    {
        return $this->PREREQUISES;
    }

    /**
     * @param string $PREREQUISES
     */
    public function setPREREQUISES(string $PREREQUISES): void
    {
        $this->PREREQUISES = $PREREQUISES;
    }

    /**
     * @return string
     */
    public function getCAPACITESTERMINALES(): string
    {
        return $this->CAPACITES_TERMINALES;
    }

    /**
     * @param string $CAPACITES_TERMINALES
     */
    public function setCAPACITESTERMINALES(string $CAPACITES_TERMINALES): void
    {
        $this->CAPACITES_TERMINALES = $CAPACITES_TERMINALES;
    }



}
