<?php


use Cassandra\Blob;

class Documents
{
    private int $ID_DOC;
    private string $NOM_DOC;
    private int $TAILLE_DOC;
    private BLob $DOC;

    /**
     * Documents constructor.
     * @param int $ID_DOC
     * @param string $NOM_DOC
     * @param int $TAILLE_DOC
     * @param Blob $DOC
     */
    public function __construct(int $ID_DOC, string $NOM_DOC, int $TAILLE_DOC, Blob $DOC)
    {
        $this->ID_DOC = $ID_DOC;
        $this->NOM_DOC = $NOM_DOC;
        $this->TAILLE_DOC = $TAILLE_DOC;
        $this->DOC = $DOC;
    }


    /**
     * @return int
     */
    public function getIDDOC(): int
    {
        return $this->ID_DOC;
    }

    /**
     * @param int $ID_DOC
     */
    public function setIDDOC(int $ID_DOC): void
    {
        $this->ID_DOC = $ID_DOC;
    }

    /**
     * @return string
     */
    public function getNOMDOC(): string
    {
        return $this->NOM_DOC;
    }

    /**
     * @param string $NOM_DOC
     */
    public function setNOMDOC(string $NOM_DOC): void
    {
        $this->NOM_DOC = $NOM_DOC;
    }

    /**
     * @return int
     */
    public function getTAILLEDOC(): int
    {
        return $this->TAILLE_DOC;
    }

    /**
     * @param int $TAILLE_DOC
     */
    public function setTAILLEDOC(int $TAILLE_DOC): void
    {
        $this->TAILLE_DOC = $TAILLE_DOC;
    }

    /**
     * @return Blob
     */
    public function getDOC(): Blob
    {
        return $this->DOC;
    }

    /**
     * @param Blob $DOC
     */
    public function setDOC(Blob $DOC): void
    {
        $this->DOC = $DOC;
    }



}
