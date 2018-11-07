<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Bord prep acomptes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class BordPrepAcomptes {

	/**
	 * Date.
	 *
	 * @var DateTime
	 */
	private $date;

	/**
	 * I d.
	 *
	 * @var int
	 */
	private $iD;

	/**
	 * Intitule.
	 *
	 * @var string
	 */
	private $intitule;

	/**
	 * Montant.
	 *
	 * @var float
	 */
	private $montant;

	/**
	 * Numero employe.
	 *
	 * @var string
	 */
	private $numeroEmploye;

	/**
	 * Periode.
	 *
	 * @var DateTime
	 */
	private $periode;

	/**
	 * Type paiement.
	 *
	 * @var string
	 */
	private $typePaiement;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the date.
	 *
	 * @return DateTime Returns the date.
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Get the i d.
	 *
	 * @return int Returns the i d.
	 */
	public function getID() {
		return $this->iD;
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
	 * Get the montant.
	 *
	 * @return float Returns the montant.
	 */
	public function getMontant() {
		return $this->montant;
	}

	/**
	 * Get the numero employe.
	 *
	 * @return string Returns the numero employe.
	 */
	public function getNumeroEmploye() {
		return $this->numeroEmploye;
	}

	/**
	 * Get the periode.
	 *
	 * @return DateTime Returns the periode.
	 */
	public function getPeriode() {
		return $this->periode;
	}

	/**
	 * Get the type paiement.
	 *
	 * @return string Returns the type paiement.
	 */
	public function getTypePaiement() {
		return $this->typePaiement;
	}

	/**
	 * Set the date.
	 *
	 * @param DateTime $date The date.
	 * @return BordPrepAcomptes Returns this bord prep acomptes.
	 */
	public function setDate(DateTime $date = null) {
		$this->date = $date;
		return $this;
	}

	/**
	 * Set the i d.
	 *
	 * @param int $iD The i d.
	 * @return BordPrepAcomptes Returns this bord prep acomptes.
	 */
	public function setID($iD) {
		$this->iD = $iD;
		return $this;
	}

	/**
	 * Set the intitule.
	 *
	 * @param string $intitule The intitule.
	 * @return BordPrepAcomptes Returns this bord prep acomptes.
	 */
	public function setIntitule($intitule) {
		$this->intitule = $intitule;
		return $this;
	}

	/**
	 * Set the montant.
	 *
	 * @param float $montant The montant.
	 * @return BordPrepAcomptes Returns this bord prep acomptes.
	 */
	public function setMontant($montant) {
		$this->montant = $montant;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return BordPrepAcomptes Returns this bord prep acomptes.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param DateTime $periode The periode.
	 * @return BordPrepAcomptes Returns this bord prep acomptes.
	 */
	public function setPeriode(DateTime $periode = null) {
		$this->periode = $periode;
		return $this;
	}

	/**
	 * Set the type paiement.
	 *
	 * @param string $typePaiement The type paiement.
	 * @return BordPrepAcomptes Returns this bord prep acomptes.
	 */
	public function setTypePaiement($typePaiement) {
		$this->typePaiement = $typePaiement;
		return $this;
	}

}