<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Semaine type model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class SemaineType {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Nbre h.
     *
     * @var float
     */
    private $nbreH;

    /**
     * Nbre h dimanche.
     *
     * @var float
     */
    private $nbreHDimanche;

    /**
     * Nbre h jeudi.
     *
     * @var float
     */
    private $nbreHJeudi;

    /**
     * Nbre h lundi.
     *
     * @var float
     */
    private $nbreHLundi;

    /**
     * Nbre h mardi.
     *
     * @var float
     */
    private $nbreHMardi;

    /**
     * Nbre h max.
     *
     * @var float
     */
    private $nbreHMax;

    /**
     * Nbre h maxi dimanche.
     *
     * @var float
     */
    private $nbreHMaxiDimanche;

    /**
     * Nbre h maxi jeudi.
     *
     * @var float
     */
    private $nbreHMaxiJeudi;

    /**
     * Nbre h maxi lundi.
     *
     * @var float
     */
    private $nbreHMaxiLundi;

    /**
     * Nbre h maxi mardi.
     *
     * @var float
     */
    private $nbreHMaxiMardi;

    /**
     * Nbre h maxi mercredi.
     *
     * @var float
     */
    private $nbreHMaxiMercredi;

    /**
     * Nbre h maxi samedi.
     *
     * @var float
     */
    private $nbreHMaxiSamedi;

    /**
     * Nbre h maxi vendredi.
     *
     * @var float
     */
    private $nbreHMaxiVendredi;

    /**
     * Nbre h mercredi.
     *
     * @var float
     */
    private $nbreHMercredi;

    /**
     * Nbre h mini.
     *
     * @var float
     */
    private $nbreHMini;

    /**
     * Nbre h mini dimanche.
     *
     * @var float
     */
    private $nbreHMiniDimanche;

    /**
     * Nbre h mini jeudi.
     *
     * @var float
     */
    private $nbreHMiniJeudi;

    /**
     * Nbre h mini lundi.
     *
     * @var float
     */
    private $nbreHMiniLundi;

    /**
     * Nbre h mini mardi.
     *
     * @var float
     */
    private $nbreHMiniMardi;

    /**
     * Nbre h mini mercredi.
     *
     * @var float
     */
    private $nbreHMiniMercredi;

    /**
     * Nbre h mini samedi.
     *
     * @var float
     */
    private $nbreHMiniSamedi;

    /**
     * Nbre h mini vendredi.
     *
     * @var float
     */
    private $nbreHMiniVendredi;

    /**
     * Nbre h samedi.
     *
     * @var float
     */
    private $nbreHSamedi;

    /**
     * Nbre h vendredi.
     *
     * @var float
     */
    private $nbreHVendredi;

    /**
     * T dimanche.
     *
     * @var bool
     */
    private $tDimanche;

    /**
     * T jeudi.
     *
     * @var bool
     */
    private $tJeudi;

    /**
     * T lundi.
     *
     * @var bool
     */
    private $tLundi;

    /**
     * T mardi.
     *
     * @var bool
     */
    private $tMardi;

    /**
     * T mercredi.
     *
     * @var bool
     */
    private $tMercredi;

    /**
     * T samedi.
     *
     * @var bool
     */
    private $tSamedi;

    /**
     * T vendredi.
     *
     * @var bool
     */
    private $tVendredi;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the nbre h.
     *
     * @return float Returns the nbre h.
     */
    public function getNbreH() {
        return $this->nbreH;
    }

    /**
     * Get the nbre h dimanche.
     *
     * @return float Returns the nbre h dimanche.
     */
    public function getNbreHDimanche() {
        return $this->nbreHDimanche;
    }

    /**
     * Get the nbre h jeudi.
     *
     * @return float Returns the nbre h jeudi.
     */
    public function getNbreHJeudi() {
        return $this->nbreHJeudi;
    }

    /**
     * Get the nbre h lundi.
     *
     * @return float Returns the nbre h lundi.
     */
    public function getNbreHLundi() {
        return $this->nbreHLundi;
    }

    /**
     * Get the nbre h mardi.
     *
     * @return float Returns the nbre h mardi.
     */
    public function getNbreHMardi() {
        return $this->nbreHMardi;
    }

    /**
     * Get the nbre h max.
     *
     * @return float Returns the nbre h max.
     */
    public function getNbreHMax() {
        return $this->nbreHMax;
    }

    /**
     * Get the nbre h maxi dimanche.
     *
     * @return float Returns the nbre h maxi dimanche.
     */
    public function getNbreHMaxiDimanche() {
        return $this->nbreHMaxiDimanche;
    }

    /**
     * Get the nbre h maxi jeudi.
     *
     * @return float Returns the nbre h maxi jeudi.
     */
    public function getNbreHMaxiJeudi() {
        return $this->nbreHMaxiJeudi;
    }

    /**
     * Get the nbre h maxi lundi.
     *
     * @return float Returns the nbre h maxi lundi.
     */
    public function getNbreHMaxiLundi() {
        return $this->nbreHMaxiLundi;
    }

    /**
     * Get the nbre h maxi mardi.
     *
     * @return float Returns the nbre h maxi mardi.
     */
    public function getNbreHMaxiMardi() {
        return $this->nbreHMaxiMardi;
    }

    /**
     * Get the nbre h maxi mercredi.
     *
     * @return float Returns the nbre h maxi mercredi.
     */
    public function getNbreHMaxiMercredi() {
        return $this->nbreHMaxiMercredi;
    }

    /**
     * Get the nbre h maxi samedi.
     *
     * @return float Returns the nbre h maxi samedi.
     */
    public function getNbreHMaxiSamedi() {
        return $this->nbreHMaxiSamedi;
    }

    /**
     * Get the nbre h maxi vendredi.
     *
     * @return float Returns the nbre h maxi vendredi.
     */
    public function getNbreHMaxiVendredi() {
        return $this->nbreHMaxiVendredi;
    }

    /**
     * Get the nbre h mercredi.
     *
     * @return float Returns the nbre h mercredi.
     */
    public function getNbreHMercredi() {
        return $this->nbreHMercredi;
    }

    /**
     * Get the nbre h mini.
     *
     * @return float Returns the nbre h mini.
     */
    public function getNbreHMini() {
        return $this->nbreHMini;
    }

    /**
     * Get the nbre h mini dimanche.
     *
     * @return float Returns the nbre h mini dimanche.
     */
    public function getNbreHMiniDimanche() {
        return $this->nbreHMiniDimanche;
    }

    /**
     * Get the nbre h mini jeudi.
     *
     * @return float Returns the nbre h mini jeudi.
     */
    public function getNbreHMiniJeudi() {
        return $this->nbreHMiniJeudi;
    }

    /**
     * Get the nbre h mini lundi.
     *
     * @return float Returns the nbre h mini lundi.
     */
    public function getNbreHMiniLundi() {
        return $this->nbreHMiniLundi;
    }

    /**
     * Get the nbre h mini mardi.
     *
     * @return float Returns the nbre h mini mardi.
     */
    public function getNbreHMiniMardi() {
        return $this->nbreHMiniMardi;
    }

    /**
     * Get the nbre h mini mercredi.
     *
     * @return float Returns the nbre h mini mercredi.
     */
    public function getNbreHMiniMercredi() {
        return $this->nbreHMiniMercredi;
    }

    /**
     * Get the nbre h mini samedi.
     *
     * @return float Returns the nbre h mini samedi.
     */
    public function getNbreHMiniSamedi() {
        return $this->nbreHMiniSamedi;
    }

    /**
     * Get the nbre h mini vendredi.
     *
     * @return float Returns the nbre h mini vendredi.
     */
    public function getNbreHMiniVendredi() {
        return $this->nbreHMiniVendredi;
    }

    /**
     * Get the nbre h samedi.
     *
     * @return float Returns the nbre h samedi.
     */
    public function getNbreHSamedi() {
        return $this->nbreHSamedi;
    }

    /**
     * Get the nbre h vendredi.
     *
     * @return float Returns the nbre h vendredi.
     */
    public function getNbreHVendredi() {
        return $this->nbreHVendredi;
    }

    /**
     * Get the t dimanche.
     *
     * @return bool Returns the t dimanche.
     */
    public function getTDimanche() {
        return $this->tDimanche;
    }

    /**
     * Get the t jeudi.
     *
     * @return bool Returns the t jeudi.
     */
    public function getTJeudi() {
        return $this->tJeudi;
    }

    /**
     * Get the t lundi.
     *
     * @return bool Returns the t lundi.
     */
    public function getTLundi() {
        return $this->tLundi;
    }

    /**
     * Get the t mardi.
     *
     * @return bool Returns the t mardi.
     */
    public function getTMardi() {
        return $this->tMardi;
    }

    /**
     * Get the t mercredi.
     *
     * @return bool Returns the t mercredi.
     */
    public function getTMercredi() {
        return $this->tMercredi;
    }

    /**
     * Get the t samedi.
     *
     * @return bool Returns the t samedi.
     */
    public function getTSamedi() {
        return $this->tSamedi;
    }

    /**
     * Get the t vendredi.
     *
     * @return bool Returns the t vendredi.
     */
    public function getTVendredi() {
        return $this->tVendredi;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return SemaineType Returns this semaine type.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return SemaineType Returns this semaine type.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the nbre h.
     *
     * @param float $nbreH The nbre h.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreH($nbreH) {
        $this->nbreH = $nbreH;
        return $this;
    }

    /**
     * Set the nbre h dimanche.
     *
     * @param float $nbreHDimanche The nbre h dimanche.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHDimanche($nbreHDimanche) {
        $this->nbreHDimanche = $nbreHDimanche;
        return $this;
    }

    /**
     * Set the nbre h jeudi.
     *
     * @param float $nbreHJeudi The nbre h jeudi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHJeudi($nbreHJeudi) {
        $this->nbreHJeudi = $nbreHJeudi;
        return $this;
    }

    /**
     * Set the nbre h lundi.
     *
     * @param float $nbreHLundi The nbre h lundi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHLundi($nbreHLundi) {
        $this->nbreHLundi = $nbreHLundi;
        return $this;
    }

    /**
     * Set the nbre h mardi.
     *
     * @param float $nbreHMardi The nbre h mardi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMardi($nbreHMardi) {
        $this->nbreHMardi = $nbreHMardi;
        return $this;
    }

    /**
     * Set the nbre h max.
     *
     * @param float $nbreHMax The nbre h max.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMax($nbreHMax) {
        $this->nbreHMax = $nbreHMax;
        return $this;
    }

    /**
     * Set the nbre h maxi dimanche.
     *
     * @param float $nbreHMaxiDimanche The nbre h maxi dimanche.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMaxiDimanche($nbreHMaxiDimanche) {
        $this->nbreHMaxiDimanche = $nbreHMaxiDimanche;
        return $this;
    }

    /**
     * Set the nbre h maxi jeudi.
     *
     * @param float $nbreHMaxiJeudi The nbre h maxi jeudi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMaxiJeudi($nbreHMaxiJeudi) {
        $this->nbreHMaxiJeudi = $nbreHMaxiJeudi;
        return $this;
    }

    /**
     * Set the nbre h maxi lundi.
     *
     * @param float $nbreHMaxiLundi The nbre h maxi lundi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMaxiLundi($nbreHMaxiLundi) {
        $this->nbreHMaxiLundi = $nbreHMaxiLundi;
        return $this;
    }

    /**
     * Set the nbre h maxi mardi.
     *
     * @param float $nbreHMaxiMardi The nbre h maxi mardi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMaxiMardi($nbreHMaxiMardi) {
        $this->nbreHMaxiMardi = $nbreHMaxiMardi;
        return $this;
    }

    /**
     * Set the nbre h maxi mercredi.
     *
     * @param float $nbreHMaxiMercredi The nbre h maxi mercredi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMaxiMercredi($nbreHMaxiMercredi) {
        $this->nbreHMaxiMercredi = $nbreHMaxiMercredi;
        return $this;
    }

    /**
     * Set the nbre h maxi samedi.
     *
     * @param float $nbreHMaxiSamedi The nbre h maxi samedi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMaxiSamedi($nbreHMaxiSamedi) {
        $this->nbreHMaxiSamedi = $nbreHMaxiSamedi;
        return $this;
    }

    /**
     * Set the nbre h maxi vendredi.
     *
     * @param float $nbreHMaxiVendredi The nbre h maxi vendredi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMaxiVendredi($nbreHMaxiVendredi) {
        $this->nbreHMaxiVendredi = $nbreHMaxiVendredi;
        return $this;
    }

    /**
     * Set the nbre h mercredi.
     *
     * @param float $nbreHMercredi The nbre h mercredi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMercredi($nbreHMercredi) {
        $this->nbreHMercredi = $nbreHMercredi;
        return $this;
    }

    /**
     * Set the nbre h mini.
     *
     * @param float $nbreHMini The nbre h mini.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMini($nbreHMini) {
        $this->nbreHMini = $nbreHMini;
        return $this;
    }

    /**
     * Set the nbre h mini dimanche.
     *
     * @param float $nbreHMiniDimanche The nbre h mini dimanche.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMiniDimanche($nbreHMiniDimanche) {
        $this->nbreHMiniDimanche = $nbreHMiniDimanche;
        return $this;
    }

    /**
     * Set the nbre h mini jeudi.
     *
     * @param float $nbreHMiniJeudi The nbre h mini jeudi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMiniJeudi($nbreHMiniJeudi) {
        $this->nbreHMiniJeudi = $nbreHMiniJeudi;
        return $this;
    }

    /**
     * Set the nbre h mini lundi.
     *
     * @param float $nbreHMiniLundi The nbre h mini lundi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMiniLundi($nbreHMiniLundi) {
        $this->nbreHMiniLundi = $nbreHMiniLundi;
        return $this;
    }

    /**
     * Set the nbre h mini mardi.
     *
     * @param float $nbreHMiniMardi The nbre h mini mardi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMiniMardi($nbreHMiniMardi) {
        $this->nbreHMiniMardi = $nbreHMiniMardi;
        return $this;
    }

    /**
     * Set the nbre h mini mercredi.
     *
     * @param float $nbreHMiniMercredi The nbre h mini mercredi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMiniMercredi($nbreHMiniMercredi) {
        $this->nbreHMiniMercredi = $nbreHMiniMercredi;
        return $this;
    }

    /**
     * Set the nbre h mini samedi.
     *
     * @param float $nbreHMiniSamedi The nbre h mini samedi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMiniSamedi($nbreHMiniSamedi) {
        $this->nbreHMiniSamedi = $nbreHMiniSamedi;
        return $this;
    }

    /**
     * Set the nbre h mini vendredi.
     *
     * @param float $nbreHMiniVendredi The nbre h mini vendredi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHMiniVendredi($nbreHMiniVendredi) {
        $this->nbreHMiniVendredi = $nbreHMiniVendredi;
        return $this;
    }

    /**
     * Set the nbre h samedi.
     *
     * @param float $nbreHSamedi The nbre h samedi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHSamedi($nbreHSamedi) {
        $this->nbreHSamedi = $nbreHSamedi;
        return $this;
    }

    /**
     * Set the nbre h vendredi.
     *
     * @param float $nbreHVendredi The nbre h vendredi.
     * @return SemaineType Returns this semaine type.
     */
    public function setNbreHVendredi($nbreHVendredi) {
        $this->nbreHVendredi = $nbreHVendredi;
        return $this;
    }

    /**
     * Set the t dimanche.
     *
     * @param bool $tDimanche The t dimanche.
     * @return SemaineType Returns this semaine type.
     */
    public function setTDimanche($tDimanche) {
        $this->tDimanche = $tDimanche;
        return $this;
    }

    /**
     * Set the t jeudi.
     *
     * @param bool $tJeudi The t jeudi.
     * @return SemaineType Returns this semaine type.
     */
    public function setTJeudi($tJeudi) {
        $this->tJeudi = $tJeudi;
        return $this;
    }

    /**
     * Set the t lundi.
     *
     * @param bool $tLundi The t lundi.
     * @return SemaineType Returns this semaine type.
     */
    public function setTLundi($tLundi) {
        $this->tLundi = $tLundi;
        return $this;
    }

    /**
     * Set the t mardi.
     *
     * @param bool $tMardi The t mardi.
     * @return SemaineType Returns this semaine type.
     */
    public function setTMardi($tMardi) {
        $this->tMardi = $tMardi;
        return $this;
    }

    /**
     * Set the t mercredi.
     *
     * @param bool $tMercredi The t mercredi.
     * @return SemaineType Returns this semaine type.
     */
    public function setTMercredi($tMercredi) {
        $this->tMercredi = $tMercredi;
        return $this;
    }

    /**
     * Set the t samedi.
     *
     * @param bool $tSamedi The t samedi.
     * @return SemaineType Returns this semaine type.
     */
    public function setTSamedi($tSamedi) {
        $this->tSamedi = $tSamedi;
        return $this;
    }

    /**
     * Set the t vendredi.
     *
     * @param bool $tVendredi The t vendredi.
     * @return SemaineType Returns this semaine type.
     */
    public function setTVendredi($tVendredi) {
        $this->tVendredi = $tVendredi;
        return $this;
    }
}
