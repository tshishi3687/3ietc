<?php


class InfoPersonne
{
        private Personne $personne;
        private $demande = Array(Demande::class);

    /**
     * InfoPersonne constructor.
     * @param Personne $personne
     * @param string[] $demande
     */
    public function __construct(Personne $personne, array $demande)
    {
        $this->personne = $personne;
        $this->demande = $demande;
    }


    /**
     * @return Personne
     */
    public function getPersonne(): Personne
    {
        return $this->personne;
    }

    /**
     * @param Personne $personne
     */
    public function setPersonne(Personne $personne): void
    {
        $this->personne = $personne;
    }

    /**
     * @return string[]
     */
    public function getDemande(): array
    {
        return $this->demande;
    }

    /**
     * @param string[] $demande
     */
    public function setDemande(array $demande): void
    {
        $this->demande = $demande;
    }


}
