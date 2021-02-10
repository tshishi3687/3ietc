<?php


class Justifier
{
    private int $ID_DEMANDE;
    private int $ID_DOC;

    /**
     * Justifier constructor.
     * @param  $ID_DEMANDE
     * @param Documents $ID_DOC
     */
    public function __construct(Demande $ID_DEMANDE, Documents $ID_DOC)
    {
        $this->ID_DEMANDE = $ID_DEMANDE;
        $this->ID_DOC = $ID_DOC;
    }


    /**
     * @return Demande
     */
    public function getIDDEMANDE(): Demande
    {
        return $this->ID_DEMANDE;
    }

    /**
     * @param Demande $ID_DEMANDE
     */
    public function setIDDEMANDE(Demande $ID_DEMANDE): void
    {
        $this->ID_DEMANDE = $ID_DEMANDE;
    }

    /**
     * @return Documents
     */
    public function getIDDOC(): Documents
    {
        return $this->ID_DOC;
    }

    /**
     * @param Documents $ID_DOC
     */
    public function setIDDOC(Documents $ID_DOC): void
    {
        $this->ID_DOC = $ID_DOC;
    }



}
