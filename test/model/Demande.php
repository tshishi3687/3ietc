<?php


use Cassandra\Date;

class Demande
{
    private int $ID_DEMANDE;
    private Personne $ID_personne;
    private Statut_demande $ID_STA_DEMANDE;
    private Cours $ID_COURS;
    private Date $DATE_DEMANDE;
    private Date $DATE_DECISION;
    private $document = Array(Document::class);
    private string $COMMENTAIRE;

    /**
     * Demande constructor.
     * @param int $ID_DEMANDE
     * @param Personne $ID_personne
     * @param Statut_demande $ID_STA_DEMANDE
     * @param Cours $ID_COURS
     * @param Date $DATE_DEMANDE
     * @param Date $DATE_DECISION
     * @param string[] $document
     * @param string $COMMENTAIRE
     */
    public function __construct(int $ID_DEMANDE, Personne $ID_personne, Statut_demande $ID_STA_DEMANDE, Cours $ID_COURS, Date $DATE_DEMANDE, Date $DATE_DECISION, array $document, string $COMMENTAIRE)
    {
        $this->ID_DEMANDE = $ID_DEMANDE;
        $this->ID_personne = $ID_personne;
        $this->ID_STA_DEMANDE = $ID_STA_DEMANDE;
        $this->ID_COURS = $ID_COURS;
        $this->DATE_DEMANDE = $DATE_DEMANDE;
        $this->DATE_DECISION = $DATE_DECISION;
        $this->document = $document;
        $this->COMMENTAIRE = $COMMENTAIRE;
    }


    /**
     * @return int
     */
    public function getIDDEMANDE(): int
    {
        return $this->ID_DEMANDE;
    }

    /**
     * @param int $ID_DEMANDE
     */
    public function setIDDEMANDE(int $ID_DEMANDE): void
    {
        $this->ID_DEMANDE = $ID_DEMANDE;
    }

    /**
     * @return Personne
     */
    public function getIDPersonne(): Personne
    {
        return $this->ID_personne;
    }

    /**
     * @param Personne $ID_personne
     */
    public function setIDPersonne(Personne $ID_personne): void
    {
        $this->ID_personne = $ID_personne;
    }

    /**
     * @return Statut_demande
     */
    public function getIDSTADEMANDE(): Statut_demande
    {
        return $this->ID_STA_DEMANDE;
    }

    /**
     * @param Statut_demande $ID_STA_DEMANDE
     */
    public function setIDSTADEMANDE(Statut_demande $ID_STA_DEMANDE): void
    {
        $this->ID_STA_DEMANDE = $ID_STA_DEMANDE;
    }

    /**
     * @return Cours
     */
    public function getIDCOURS(): Cours
    {
        return $this->ID_COURS;
    }

    /**
     * @param Cours $ID_COURS
     */
    public function setIDCOURS(Cours $ID_COURS): void
    {
        $this->ID_COURS = $ID_COURS;
    }

    /**
     * @return Date
     */
    public function getDATEDEMANDE(): Date
    {
        return $this->DATE_DEMANDE;
    }

    /**
     * @param Date $DATE_DEMANDE
     */
    public function setDATEDEMANDE(Date $DATE_DEMANDE): void
    {
        $this->DATE_DEMANDE = $DATE_DEMANDE;
    }

    /**
     * @return Date
     */
    public function getDATEDECISION(): Date
    {
        return $this->DATE_DECISION;
    }

    /**
     * @param Date $DATE_DECISION
     */
    public function setDATEDECISION(Date $DATE_DECISION): void
    {
        $this->DATE_DECISION = $DATE_DECISION;
    }

    /**
     * @return string[]
     */
    public function getDocument(): array
    {
        return $this->document;
    }

    /**
     * @param string[] $document
     */
    public function setDocument(array $document): void
    {
        $this->document = $document;
    }

    /**
     * @return string
     */
    public function getCOMMENTAIRE(): string
    {
        return $this->COMMENTAIRE;
    }

    /**
     * @param string $COMMENTAIRE
     */
    public function setCOMMENTAIRE(string $COMMENTAIRE): void
    {
        $this->COMMENTAIRE = $COMMENTAIRE;
    }


}
