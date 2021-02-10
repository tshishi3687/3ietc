<?php


class Section
{
    private int $ID_SECTION;
    private string $NOM_SECTION;
    private int $DUREE;

    /**
     * Section constructor.
     * @param int $ID_SECTION
     * @param string $NOM_SECTION
     * @param int $DUREE
     */
    public function __construct(int $ID_SECTION, string $NOM_SECTION, int $DUREE)
    {
        $this->ID_SECTION = $ID_SECTION;
        $this->NOM_SECTION = $NOM_SECTION;
        $this->DUREE = $DUREE;
    }



    /**
     * @return int
     */
    public function getIDSECTION(): int
    {
        return $this->ID_SECTION;
    }

    /**
     * @param int $ID_SECTION
     */
    public function setIDSECTION(int $ID_SECTION): void
    {
        $this->ID_SECTION = $ID_SECTION;
    }

    /**
     * @return string
     */
    public function getNOMSECTION(): string
    {
        return $this->NOM_SECTION;
    }

    /**
     * @param string $NOM_SECTION
     */
    public function setNOMSECTION(string $NOM_SECTION): void
    {
        $this->NOM_SECTION = $NOM_SECTION;
    }

    /**
     * @return int
     */
    public function getDUREE(): int
    {
        return $this->DUREE;
    }

    /**
     * @param int $DUREE
     */
    public function setDUREE(int $DUREE): void
    {
        $this->DUREE = $DUREE;
    }

}
