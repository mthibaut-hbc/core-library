<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

/**
 * Bons travaux interventions model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class BonsTravauxInterventions {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Dimanche.
     *
     * @var bool
     */
    private $dimanche;

    /**
     * Jeudi.
     *
     * @var bool
     */
    private $jeudi;

    /**
     * Lundi.
     *
     * @var bool
     */
    private $lundi;

    /**
     * Mardi.
     *
     * @var bool
     */
    private $mardi;

    /**
     * Mercredi.
     *
     * @var bool
     */
    private $mercredi;

    /**
     * Num b t.
     *
     * @var int
     */
    private $numBT;

    /**
     * Num sem.
     *
     * @var string
     */
    private $numSem;

    /**
     * Samedi.
     *
     * @var bool
     */
    private $samedi;

    /**
     * Vendredi.
     *
     * @var bool
     */
    private $vendredi;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the dimanche.
     *
     * @return bool Returns the dimanche.
     */
    public function getDimanche() {
        return $this->dimanche;
    }

    /**
     * Get the jeudi.
     *
     * @return bool Returns the jeudi.
     */
    public function getJeudi() {
        return $this->jeudi;
    }

    /**
     * Get the lundi.
     *
     * @return bool Returns the lundi.
     */
    public function getLundi() {
        return $this->lundi;
    }

    /**
     * Get the mardi.
     *
     * @return bool Returns the mardi.
     */
    public function getMardi() {
        return $this->mardi;
    }

    /**
     * Get the mercredi.
     *
     * @return bool Returns the mercredi.
     */
    public function getMercredi() {
        return $this->mercredi;
    }

    /**
     * Get the num b t.
     *
     * @return int Returns the num b t.
     */
    public function getNumBT() {
        return $this->numBT;
    }

    /**
     * Get the num sem.
     *
     * @return string Returns the num sem.
     */
    public function getNumSem() {
        return $this->numSem;
    }

    /**
     * Get the samedi.
     *
     * @return bool Returns the samedi.
     */
    public function getSamedi() {
        return $this->samedi;
    }

    /**
     * Get the vendredi.
     *
     * @return bool Returns the vendredi.
     */
    public function getVendredi() {
        return $this->vendredi;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return BonsTravauxInterventions Returns this bons travaux interventions.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return BonsTravauxInterventions Returns this bons travaux interventions.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return BonsTravauxInterventions Returns this bons travaux interventions.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the dimanche.
     *
     * @param bool $dimanche The dimanche.
     * @return BonsTravauxInterventions Returns this bons travaux interventions.
     */
    public function setDimanche($dimanche) {
        $this->dimanche = $dimanche;
        return $this;
    }

    /**
     * Set the jeudi.
     *
     * @param bool $jeudi The jeudi.
     * @return BonsTravauxInterventions Returns this bons travaux interventions.
     */
    public function setJeudi($jeudi) {
        $this->jeudi = $jeudi;
        return $this;
    }

    /**
     * Set the lundi.
     *
     * @param bool $lundi The lundi.
     * @return BonsTravauxInterventions Returns this bons travaux interventions.
     */
    public function setLundi($lundi) {
        $this->lundi = $lundi;
        return $this;
    }

    /**
     * Set the mardi.
     *
     * @param bool $mardi The mardi.
     * @return BonsTravauxInterventions Returns this bons travaux interventions.
     */
    public function setMardi($mardi) {
        $this->mardi = $mardi;
        return $this;
    }

    /**
     * Set the mercredi.
     *
     * @param bool $mercredi The mercredi.
     * @return BonsTravauxInterventions Returns this bons travaux interventions.
     */
    public function setMercredi($mercredi) {
        $this->mercredi = $mercredi;
        return $this;
    }

    /**
     * Set the num b t.
     *
     * @param int $numBT The num b t.
     * @return BonsTravauxInterventions Returns this bons travaux interventions.
     */
    public function setNumBT($numBT) {
        $this->numBT = $numBT;
        return $this;
    }

    /**
     * Set the num sem.
     *
     * @param string $numSem The num sem.
     * @return BonsTravauxInterventions Returns this bons travaux interventions.
     */
    public function setNumSem($numSem) {
        $this->numSem = $numSem;
        return $this;
    }

    /**
     * Set the samedi.
     *
     * @param bool $samedi The samedi.
     * @return BonsTravauxInterventions Returns this bons travaux interventions.
     */
    public function setSamedi($samedi) {
        $this->samedi = $samedi;
        return $this;
    }

    /**
     * Set the vendredi.
     *
     * @param bool $vendredi The vendredi.
     * @return BonsTravauxInterventions Returns this bons travaux interventions.
     */
    public function setVendredi($vendredi) {
        $this->vendredi = $vendredi;
        return $this;
    }
}
