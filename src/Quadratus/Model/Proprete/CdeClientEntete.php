<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Cde client entete model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class CdeClientEntete {

	/**
	 * B t q.
	 *
	 * @var string
	 */
	private $bTQ;

	/**
	 * B t q2.
	 *
	 * @var string
	 */
	private $bTQ2;

	/**
	 * Bureau distributeur.
	 *
	 * @var string
	 */
	private $bureauDistributeur;

	/**
	 * Bureau distributeur2.
	 *
	 * @var string
	 */
	private $bureauDistributeur2;

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
	 * Code devise.
	 *
	 * @var string
	 */
	private $codeDevise;

	/**
	 * Code officiel commune.
	 *
	 * @var string
	 */
	private $codeOfficielCommune;

	/**
	 * Code officiel commune2.
	 *
	 * @var string
	 */
	private $codeOfficielCommune2;

	/**
	 * Code postal.
	 *
	 * @var string
	 */
	private $codePostal;

	/**
	 * Code postal2.
	 *
	 * @var string
	 */
	private $codePostal2;

	/**
	 * Code reglement.
	 *
	 * @var string
	 */
	private $codeReglement;

	/**
	 * Code regroupement.
	 *
	 * @var string
	 */
	private $codeRegroupement;

	/**
	 * Code representant.
	 *
	 * @var string
	 */
	private $codeRepresentant;

	/**
	 * Code t v a.
	 *
	 * @var string
	 */
	private $codeTVA;

	/**
	 * Code ventil compta.
	 *
	 * @var string
	 */
	private $codeVentilCompta;

	/**
	 * Complement.
	 *
	 * @var string
	 */
	private $complement;

	/**
	 * Complement2.
	 *
	 * @var string
	 */
	private $complement2;

	/**
	 * Date creation.
	 *
	 * @var DateTime
	 */
	private $dateCreation;

	/**
	 * Date echeance.
	 *
	 * @var DateTime
	 */
	private $dateEcheance;

	/**
	 * Date modification.
	 *
	 * @var DateTime
	 */
	private $dateModification;

	/**
	 * Date piece.
	 *
	 * @var DateTime
	 */
	private $datePiece;

	/**
	 * Date reception prevue.
	 *
	 * @var DateTime
	 */
	private $dateReceptionPrevue;

	/**
	 * Echeance forcee.
	 *
	 * @var boolean
	 */
	private $echeanceForcee;

	/**
	 * Edition.
	 *
	 * @var int
	 */
	private $edition;

	/**
	 * Facture euros.
	 *
	 * @var boolean
	 */
	private $factureEuros;

	/**
	 * Montant acompte.
	 *
	 * @var float
	 */
	private $montantAcompte;

	/**
	 * Nb colis.
	 *
	 * @var int
	 */
	private $nbColis;

	/**
	 * No piece.
	 *
	 * @var string
	 */
	private $noPiece;

	/**
	 * Nom.
	 *
	 * @var string
	 */
	private $nom;

	/**
	 * Nom2.
	 *
	 * @var string
	 */
	private $nom2;

	/**
	 * Nom suite.
	 *
	 * @var string
	 */
	private $nomSuite;

	/**
	 * Nom suite2.
	 *
	 * @var string
	 */
	private $nomSuite2;

	/**
	 * Nom ville.
	 *
	 * @var string
	 */
	private $nomVille;

	/**
	 * Nom ville2.
	 *
	 * @var string
	 */
	private $nomVille2;

	/**
	 * Nom voie.
	 *
	 * @var string
	 */
	private $nomVoie;

	/**
	 * Nom voie2.
	 *
	 * @var string
	 */
	private $nomVoie2;

	/**
	 * Nombre echeances.
	 *
	 * @var int
	 */
	private $nombreEcheances;

	/**
	 * Num voie.
	 *
	 * @var string
	 */
	private $numVoie;

	/**
	 * Num voie2.
	 *
	 * @var string
	 */
	private $numVoie2;

	/**
	 * Numero p j.
	 *
	 * @var int
	 */
	private $numeroPJ;

	/**
	 * Paiement depart le.
	 *
	 * @var int
	 */
	private $paiementDepartLe;

	/**
	 * Paiement le.
	 *
	 * @var int
	 */
	private $paiementLe;

	/**
	 * Paiement nombre de jours.
	 *
	 * @var int
	 */
	private $paiementNombreDeJours;

	/**
	 * Poids.
	 *
	 * @var float
	 */
	private $poids;

	/**
	 * Reference1.
	 *
	 * @var string
	 */
	private $reference1;

	/**
	 * Reference2.
	 *
	 * @var string
	 */
	private $reference2;

	/**
	 * Reference3.
	 *
	 * @var string
	 */
	private $reference3;

	/**
	 * Reference4.
	 *
	 * @var string
	 */
	private $reference4;

	/**
	 * Remise pied.
	 *
	 * @var float
	 */
	private $remisePied;

	/**
	 * Remise pied2.
	 *
	 * @var float
	 */
	private $remisePied2;

	/**
	 * Remise pied3.
	 *
	 * @var float
	 */
	private $remisePied3;

	/**
	 * Saisir adresse.
	 *
	 * @var boolean
	 */
	private $saisirAdresse;

	/**
	 * Saisir adresse livraison.
	 *
	 * @var boolean
	 */
	private $saisirAdresseLivraison;

	/**
	 * Soumis escompte.
	 *
	 * @var boolean
	 */
	private $soumisEscompte;

	/**
	 * Soumis taxe1.
	 *
	 * @var boolean
	 */
	private $soumisTaxe1;

	/**
	 * Soumis taxe2.
	 *
	 * @var boolean
	 */
	private $soumisTaxe2;

	/**
	 * Soumis taxe3.
	 *
	 * @var boolean
	 */
	private $soumisTaxe3;

	/**
	 * Taux commission.
	 *
	 * @var float
	 */
	private $tauxCommission;

	/**
	 * Taux devise.
	 *
	 * @var float
	 */
	private $tauxDevise;

	/**
	 * Transfert.
	 *
	 * @var int
	 */
	private $transfert;

	/**
	 * Transporteur.
	 *
	 * @var string
	 */
	private $transporteur;

	/**
	 * Tx escompte vente.
	 *
	 * @var float
	 */
	private $txEscompteVente;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the b t q.
	 *
	 * @return string Returns the b t q.
	 */
	public function getBTQ() {
		return $this->bTQ;
	}

	/**
	 * Get the b t q2.
	 *
	 * @return string Returns the b t q2.
	 */
	public function getBTQ2() {
		return $this->bTQ2;
	}

	/**
	 * Get the bureau distributeur.
	 *
	 * @return string Returns the bureau distributeur.
	 */
	public function getBureauDistributeur() {
		return $this->bureauDistributeur;
	}

	/**
	 * Get the bureau distributeur2.
	 *
	 * @return string Returns the bureau distributeur2.
	 */
	public function getBureauDistributeur2() {
		return $this->bureauDistributeur2;
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
	 * Get the code devise.
	 *
	 * @return string Returns the code devise.
	 */
	public function getCodeDevise() {
		return $this->codeDevise;
	}

	/**
	 * Get the code officiel commune.
	 *
	 * @return string Returns the code officiel commune.
	 */
	public function getCodeOfficielCommune() {
		return $this->codeOfficielCommune;
	}

	/**
	 * Get the code officiel commune2.
	 *
	 * @return string Returns the code officiel commune2.
	 */
	public function getCodeOfficielCommune2() {
		return $this->codeOfficielCommune2;
	}

	/**
	 * Get the code postal.
	 *
	 * @return string Returns the code postal.
	 */
	public function getCodePostal() {
		return $this->codePostal;
	}

	/**
	 * Get the code postal2.
	 *
	 * @return string Returns the code postal2.
	 */
	public function getCodePostal2() {
		return $this->codePostal2;
	}

	/**
	 * Get the code reglement.
	 *
	 * @return string Returns the code reglement.
	 */
	public function getCodeReglement() {
		return $this->codeReglement;
	}

	/**
	 * Get the code regroupement.
	 *
	 * @return string Returns the code regroupement.
	 */
	public function getCodeRegroupement() {
		return $this->codeRegroupement;
	}

	/**
	 * Get the code representant.
	 *
	 * @return string Returns the code representant.
	 */
	public function getCodeRepresentant() {
		return $this->codeRepresentant;
	}

	/**
	 * Get the code t v a.
	 *
	 * @return string Returns the code t v a.
	 */
	public function getCodeTVA() {
		return $this->codeTVA;
	}

	/**
	 * Get the code ventil compta.
	 *
	 * @return string Returns the code ventil compta.
	 */
	public function getCodeVentilCompta() {
		return $this->codeVentilCompta;
	}

	/**
	 * Get the complement.
	 *
	 * @return string Returns the complement.
	 */
	public function getComplement() {
		return $this->complement;
	}

	/**
	 * Get the complement2.
	 *
	 * @return string Returns the complement2.
	 */
	public function getComplement2() {
		return $this->complement2;
	}

	/**
	 * Get the date creation.
	 *
	 * @return DateTime Returns the date creation.
	 */
	public function getDateCreation() {
		return $this->dateCreation;
	}

	/**
	 * Get the date echeance.
	 *
	 * @return DateTime Returns the date echeance.
	 */
	public function getDateEcheance() {
		return $this->dateEcheance;
	}

	/**
	 * Get the date modification.
	 *
	 * @return DateTime Returns the date modification.
	 */
	public function getDateModification() {
		return $this->dateModification;
	}

	/**
	 * Get the date piece.
	 *
	 * @return DateTime Returns the date piece.
	 */
	public function getDatePiece() {
		return $this->datePiece;
	}

	/**
	 * Get the date reception prevue.
	 *
	 * @return DateTime Returns the date reception prevue.
	 */
	public function getDateReceptionPrevue() {
		return $this->dateReceptionPrevue;
	}

	/**
	 * Get the echeance forcee.
	 *
	 * @return boolean Returns the echeance forcee.
	 */
	public function getEcheanceForcee() {
		return $this->echeanceForcee;
	}

	/**
	 * Get the edition.
	 *
	 * @return int Returns the edition.
	 */
	public function getEdition() {
		return $this->edition;
	}

	/**
	 * Get the facture euros.
	 *
	 * @return boolean Returns the facture euros.
	 */
	public function getFactureEuros() {
		return $this->factureEuros;
	}

	/**
	 * Get the montant acompte.
	 *
	 * @return float Returns the montant acompte.
	 */
	public function getMontantAcompte() {
		return $this->montantAcompte;
	}

	/**
	 * Get the nb colis.
	 *
	 * @return int Returns the nb colis.
	 */
	public function getNbColis() {
		return $this->nbColis;
	}

	/**
	 * Get the no piece.
	 *
	 * @return string Returns the no piece.
	 */
	public function getNoPiece() {
		return $this->noPiece;
	}

	/**
	 * Get the nom.
	 *
	 * @return string Returns the nom.
	 */
	public function getNom() {
		return $this->nom;
	}

	/**
	 * Get the nom2.
	 *
	 * @return string Returns the nom2.
	 */
	public function getNom2() {
		return $this->nom2;
	}

	/**
	 * Get the nom suite.
	 *
	 * @return string Returns the nom suite.
	 */
	public function getNomSuite() {
		return $this->nomSuite;
	}

	/**
	 * Get the nom suite2.
	 *
	 * @return string Returns the nom suite2.
	 */
	public function getNomSuite2() {
		return $this->nomSuite2;
	}

	/**
	 * Get the nom ville.
	 *
	 * @return string Returns the nom ville.
	 */
	public function getNomVille() {
		return $this->nomVille;
	}

	/**
	 * Get the nom ville2.
	 *
	 * @return string Returns the nom ville2.
	 */
	public function getNomVille2() {
		return $this->nomVille2;
	}

	/**
	 * Get the nom voie.
	 *
	 * @return string Returns the nom voie.
	 */
	public function getNomVoie() {
		return $this->nomVoie;
	}

	/**
	 * Get the nom voie2.
	 *
	 * @return string Returns the nom voie2.
	 */
	public function getNomVoie2() {
		return $this->nomVoie2;
	}

	/**
	 * Get the nombre echeances.
	 *
	 * @return int Returns the nombre echeances.
	 */
	public function getNombreEcheances() {
		return $this->nombreEcheances;
	}

	/**
	 * Get the num voie.
	 *
	 * @return string Returns the num voie.
	 */
	public function getNumVoie() {
		return $this->numVoie;
	}

	/**
	 * Get the num voie2.
	 *
	 * @return string Returns the num voie2.
	 */
	public function getNumVoie2() {
		return $this->numVoie2;
	}

	/**
	 * Get the numero p j.
	 *
	 * @return int Returns the numero p j.
	 */
	public function getNumeroPJ() {
		return $this->numeroPJ;
	}

	/**
	 * Get the paiement depart le.
	 *
	 * @return int Returns the paiement depart le.
	 */
	public function getPaiementDepartLe() {
		return $this->paiementDepartLe;
	}

	/**
	 * Get the paiement le.
	 *
	 * @return int Returns the paiement le.
	 */
	public function getPaiementLe() {
		return $this->paiementLe;
	}

	/**
	 * Get the paiement nombre de jours.
	 *
	 * @return int Returns the paiement nombre de jours.
	 */
	public function getPaiementNombreDeJours() {
		return $this->paiementNombreDeJours;
	}

	/**
	 * Get the poids.
	 *
	 * @return float Returns the poids.
	 */
	public function getPoids() {
		return $this->poids;
	}

	/**
	 * Get the reference1.
	 *
	 * @return string Returns the reference1.
	 */
	public function getReference1() {
		return $this->reference1;
	}

	/**
	 * Get the reference2.
	 *
	 * @return string Returns the reference2.
	 */
	public function getReference2() {
		return $this->reference2;
	}

	/**
	 * Get the reference3.
	 *
	 * @return string Returns the reference3.
	 */
	public function getReference3() {
		return $this->reference3;
	}

	/**
	 * Get the reference4.
	 *
	 * @return string Returns the reference4.
	 */
	public function getReference4() {
		return $this->reference4;
	}

	/**
	 * Get the remise pied.
	 *
	 * @return float Returns the remise pied.
	 */
	public function getRemisePied() {
		return $this->remisePied;
	}

	/**
	 * Get the remise pied2.
	 *
	 * @return float Returns the remise pied2.
	 */
	public function getRemisePied2() {
		return $this->remisePied2;
	}

	/**
	 * Get the remise pied3.
	 *
	 * @return float Returns the remise pied3.
	 */
	public function getRemisePied3() {
		return $this->remisePied3;
	}

	/**
	 * Get the saisir adresse.
	 *
	 * @return boolean Returns the saisir adresse.
	 */
	public function getSaisirAdresse() {
		return $this->saisirAdresse;
	}

	/**
	 * Get the saisir adresse livraison.
	 *
	 * @return boolean Returns the saisir adresse livraison.
	 */
	public function getSaisirAdresseLivraison() {
		return $this->saisirAdresseLivraison;
	}

	/**
	 * Get the soumis escompte.
	 *
	 * @return boolean Returns the soumis escompte.
	 */
	public function getSoumisEscompte() {
		return $this->soumisEscompte;
	}

	/**
	 * Get the soumis taxe1.
	 *
	 * @return boolean Returns the soumis taxe1.
	 */
	public function getSoumisTaxe1() {
		return $this->soumisTaxe1;
	}

	/**
	 * Get the soumis taxe2.
	 *
	 * @return boolean Returns the soumis taxe2.
	 */
	public function getSoumisTaxe2() {
		return $this->soumisTaxe2;
	}

	/**
	 * Get the soumis taxe3.
	 *
	 * @return boolean Returns the soumis taxe3.
	 */
	public function getSoumisTaxe3() {
		return $this->soumisTaxe3;
	}

	/**
	 * Get the taux commission.
	 *
	 * @return float Returns the taux commission.
	 */
	public function getTauxCommission() {
		return $this->tauxCommission;
	}

	/**
	 * Get the taux devise.
	 *
	 * @return float Returns the taux devise.
	 */
	public function getTauxDevise() {
		return $this->tauxDevise;
	}

	/**
	 * Get the transfert.
	 *
	 * @return int Returns the transfert.
	 */
	public function getTransfert() {
		return $this->transfert;
	}

	/**
	 * Get the transporteur.
	 *
	 * @return string Returns the transporteur.
	 */
	public function getTransporteur() {
		return $this->transporteur;
	}

	/**
	 * Get the tx escompte vente.
	 *
	 * @return float Returns the tx escompte vente.
	 */
	public function getTxEscompteVente() {
		return $this->txEscompteVente;
	}

	/**
	 * Set the b t q.
	 *
	 * @param string $bTQ The b t q.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setBTQ($bTQ) {
		$this->bTQ = $bTQ;
		return $this;
	}

	/**
	 * Set the b t q2.
	 *
	 * @param string $bTQ2 The b t q2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setBTQ2($bTQ2) {
		$this->bTQ2 = $bTQ2;
		return $this;
	}

	/**
	 * Set the bureau distributeur.
	 *
	 * @param string $bureauDistributeur The bureau distributeur.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setBureauDistributeur($bureauDistributeur) {
		$this->bureauDistributeur = $bureauDistributeur;
		return $this;
	}

	/**
	 * Set the bureau distributeur2.
	 *
	 * @param string $bureauDistributeur2 The bureau distributeur2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setBureauDistributeur2($bureauDistributeur2) {
		$this->bureauDistributeur2 = $bureauDistributeur2;
		return $this;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code devise.
	 *
	 * @param string $codeDevise The code devise.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodeDevise($codeDevise) {
		$this->codeDevise = $codeDevise;
		return $this;
	}

	/**
	 * Set the code officiel commune.
	 *
	 * @param string $codeOfficielCommune The code officiel commune.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodeOfficielCommune($codeOfficielCommune) {
		$this->codeOfficielCommune = $codeOfficielCommune;
		return $this;
	}

	/**
	 * Set the code officiel commune2.
	 *
	 * @param string $codeOfficielCommune2 The code officiel commune2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodeOfficielCommune2($codeOfficielCommune2) {
		$this->codeOfficielCommune2 = $codeOfficielCommune2;
		return $this;
	}

	/**
	 * Set the code postal.
	 *
	 * @param string $codePostal The code postal.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodePostal($codePostal) {
		$this->codePostal = $codePostal;
		return $this;
	}

	/**
	 * Set the code postal2.
	 *
	 * @param string $codePostal2 The code postal2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodePostal2($codePostal2) {
		$this->codePostal2 = $codePostal2;
		return $this;
	}

	/**
	 * Set the code reglement.
	 *
	 * @param string $codeReglement The code reglement.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodeReglement($codeReglement) {
		$this->codeReglement = $codeReglement;
		return $this;
	}

	/**
	 * Set the code regroupement.
	 *
	 * @param string $codeRegroupement The code regroupement.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodeRegroupement($codeRegroupement) {
		$this->codeRegroupement = $codeRegroupement;
		return $this;
	}

	/**
	 * Set the code representant.
	 *
	 * @param string $codeRepresentant The code representant.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodeRepresentant($codeRepresentant) {
		$this->codeRepresentant = $codeRepresentant;
		return $this;
	}

	/**
	 * Set the code t v a.
	 *
	 * @param string $codeTVA The code t v a.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodeTVA($codeTVA) {
		$this->codeTVA = $codeTVA;
		return $this;
	}

	/**
	 * Set the code ventil compta.
	 *
	 * @param string $codeVentilCompta The code ventil compta.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setCodeVentilCompta($codeVentilCompta) {
		$this->codeVentilCompta = $codeVentilCompta;
		return $this;
	}

	/**
	 * Set the complement.
	 *
	 * @param string $complement The complement.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setComplement($complement) {
		$this->complement = $complement;
		return $this;
	}

	/**
	 * Set the complement2.
	 *
	 * @param string $complement2 The complement2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setComplement2($complement2) {
		$this->complement2 = $complement2;
		return $this;
	}

	/**
	 * Set the date creation.
	 *
	 * @param DateTime $dateCreation The date creation.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setDateCreation(DateTime $dateCreation = null) {
		$this->dateCreation = $dateCreation;
		return $this;
	}

	/**
	 * Set the date echeance.
	 *
	 * @param DateTime $dateEcheance The date echeance.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setDateEcheance(DateTime $dateEcheance = null) {
		$this->dateEcheance = $dateEcheance;
		return $this;
	}

	/**
	 * Set the date modification.
	 *
	 * @param DateTime $dateModification The date modification.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setDateModification(DateTime $dateModification = null) {
		$this->dateModification = $dateModification;
		return $this;
	}

	/**
	 * Set the date piece.
	 *
	 * @param DateTime $datePiece The date piece.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setDatePiece(DateTime $datePiece = null) {
		$this->datePiece = $datePiece;
		return $this;
	}

	/**
	 * Set the date reception prevue.
	 *
	 * @param DateTime $dateReceptionPrevue The date reception prevue.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setDateReceptionPrevue(DateTime $dateReceptionPrevue = null) {
		$this->dateReceptionPrevue = $dateReceptionPrevue;
		return $this;
	}

	/**
	 * Set the echeance forcee.
	 *
	 * @param boolean $echeanceForcee The echeance forcee.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setEcheanceForcee($echeanceForcee) {
		$this->echeanceForcee = $echeanceForcee;
		return $this;
	}

	/**
	 * Set the edition.
	 *
	 * @param int $edition The edition.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setEdition($edition) {
		$this->edition = $edition;
		return $this;
	}

	/**
	 * Set the facture euros.
	 *
	 * @param boolean $factureEuros The facture euros.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setFactureEuros($factureEuros) {
		$this->factureEuros = $factureEuros;
		return $this;
	}

	/**
	 * Set the montant acompte.
	 *
	 * @param float $montantAcompte The montant acompte.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setMontantAcompte($montantAcompte) {
		$this->montantAcompte = $montantAcompte;
		return $this;
	}

	/**
	 * Set the nb colis.
	 *
	 * @param int $nbColis The nb colis.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNbColis($nbColis) {
		$this->nbColis = $nbColis;
		return $this;
	}

	/**
	 * Set the no piece.
	 *
	 * @param string $noPiece The no piece.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNoPiece($noPiece) {
		$this->noPiece = $noPiece;
		return $this;
	}

	/**
	 * Set the nom.
	 *
	 * @param string $nom The nom.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNom($nom) {
		$this->nom = $nom;
		return $this;
	}

	/**
	 * Set the nom2.
	 *
	 * @param string $nom2 The nom2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNom2($nom2) {
		$this->nom2 = $nom2;
		return $this;
	}

	/**
	 * Set the nom suite.
	 *
	 * @param string $nomSuite The nom suite.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNomSuite($nomSuite) {
		$this->nomSuite = $nomSuite;
		return $this;
	}

	/**
	 * Set the nom suite2.
	 *
	 * @param string $nomSuite2 The nom suite2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNomSuite2($nomSuite2) {
		$this->nomSuite2 = $nomSuite2;
		return $this;
	}

	/**
	 * Set the nom ville.
	 *
	 * @param string $nomVille The nom ville.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNomVille($nomVille) {
		$this->nomVille = $nomVille;
		return $this;
	}

	/**
	 * Set the nom ville2.
	 *
	 * @param string $nomVille2 The nom ville2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNomVille2($nomVille2) {
		$this->nomVille2 = $nomVille2;
		return $this;
	}

	/**
	 * Set the nom voie.
	 *
	 * @param string $nomVoie The nom voie.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNomVoie($nomVoie) {
		$this->nomVoie = $nomVoie;
		return $this;
	}

	/**
	 * Set the nom voie2.
	 *
	 * @param string $nomVoie2 The nom voie2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNomVoie2($nomVoie2) {
		$this->nomVoie2 = $nomVoie2;
		return $this;
	}

	/**
	 * Set the nombre echeances.
	 *
	 * @param int $nombreEcheances The nombre echeances.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNombreEcheances($nombreEcheances) {
		$this->nombreEcheances = $nombreEcheances;
		return $this;
	}

	/**
	 * Set the num voie.
	 *
	 * @param string $numVoie The num voie.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNumVoie($numVoie) {
		$this->numVoie = $numVoie;
		return $this;
	}

	/**
	 * Set the num voie2.
	 *
	 * @param string $numVoie2 The num voie2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNumVoie2($numVoie2) {
		$this->numVoie2 = $numVoie2;
		return $this;
	}

	/**
	 * Set the numero p j.
	 *
	 * @param int $numeroPJ The numero p j.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setNumeroPJ($numeroPJ) {
		$this->numeroPJ = $numeroPJ;
		return $this;
	}

	/**
	 * Set the paiement depart le.
	 *
	 * @param int $paiementDepartLe The paiement depart le.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setPaiementDepartLe($paiementDepartLe) {
		$this->paiementDepartLe = $paiementDepartLe;
		return $this;
	}

	/**
	 * Set the paiement le.
	 *
	 * @param int $paiementLe The paiement le.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setPaiementLe($paiementLe) {
		$this->paiementLe = $paiementLe;
		return $this;
	}

	/**
	 * Set the paiement nombre de jours.
	 *
	 * @param int $paiementNombreDeJours The paiement nombre de jours.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setPaiementNombreDeJours($paiementNombreDeJours) {
		$this->paiementNombreDeJours = $paiementNombreDeJours;
		return $this;
	}

	/**
	 * Set the poids.
	 *
	 * @param float $poids The poids.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setPoids($poids) {
		$this->poids = $poids;
		return $this;
	}

	/**
	 * Set the reference1.
	 *
	 * @param string $reference1 The reference1.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setReference1($reference1) {
		$this->reference1 = $reference1;
		return $this;
	}

	/**
	 * Set the reference2.
	 *
	 * @param string $reference2 The reference2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setReference2($reference2) {
		$this->reference2 = $reference2;
		return $this;
	}

	/**
	 * Set the reference3.
	 *
	 * @param string $reference3 The reference3.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setReference3($reference3) {
		$this->reference3 = $reference3;
		return $this;
	}

	/**
	 * Set the reference4.
	 *
	 * @param string $reference4 The reference4.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setReference4($reference4) {
		$this->reference4 = $reference4;
		return $this;
	}

	/**
	 * Set the remise pied.
	 *
	 * @param float $remisePied The remise pied.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setRemisePied($remisePied) {
		$this->remisePied = $remisePied;
		return $this;
	}

	/**
	 * Set the remise pied2.
	 *
	 * @param float $remisePied2 The remise pied2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setRemisePied2($remisePied2) {
		$this->remisePied2 = $remisePied2;
		return $this;
	}

	/**
	 * Set the remise pied3.
	 *
	 * @param float $remisePied3 The remise pied3.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setRemisePied3($remisePied3) {
		$this->remisePied3 = $remisePied3;
		return $this;
	}

	/**
	 * Set the saisir adresse.
	 *
	 * @param boolean $saisirAdresse The saisir adresse.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setSaisirAdresse($saisirAdresse) {
		$this->saisirAdresse = $saisirAdresse;
		return $this;
	}

	/**
	 * Set the saisir adresse livraison.
	 *
	 * @param boolean $saisirAdresseLivraison The saisir adresse livraison.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setSaisirAdresseLivraison($saisirAdresseLivraison) {
		$this->saisirAdresseLivraison = $saisirAdresseLivraison;
		return $this;
	}

	/**
	 * Set the soumis escompte.
	 *
	 * @param boolean $soumisEscompte The soumis escompte.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setSoumisEscompte($soumisEscompte) {
		$this->soumisEscompte = $soumisEscompte;
		return $this;
	}

	/**
	 * Set the soumis taxe1.
	 *
	 * @param boolean $soumisTaxe1 The soumis taxe1.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setSoumisTaxe1($soumisTaxe1) {
		$this->soumisTaxe1 = $soumisTaxe1;
		return $this;
	}

	/**
	 * Set the soumis taxe2.
	 *
	 * @param boolean $soumisTaxe2 The soumis taxe2.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setSoumisTaxe2($soumisTaxe2) {
		$this->soumisTaxe2 = $soumisTaxe2;
		return $this;
	}

	/**
	 * Set the soumis taxe3.
	 *
	 * @param boolean $soumisTaxe3 The soumis taxe3.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setSoumisTaxe3($soumisTaxe3) {
		$this->soumisTaxe3 = $soumisTaxe3;
		return $this;
	}

	/**
	 * Set the taux commission.
	 *
	 * @param float $tauxCommission The taux commission.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setTauxCommission($tauxCommission) {
		$this->tauxCommission = $tauxCommission;
		return $this;
	}

	/**
	 * Set the taux devise.
	 *
	 * @param float $tauxDevise The taux devise.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setTauxDevise($tauxDevise) {
		$this->tauxDevise = $tauxDevise;
		return $this;
	}

	/**
	 * Set the transfert.
	 *
	 * @param int $transfert The transfert.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setTransfert($transfert) {
		$this->transfert = $transfert;
		return $this;
	}

	/**
	 * Set the transporteur.
	 *
	 * @param string $transporteur The transporteur.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setTransporteur($transporteur) {
		$this->transporteur = $transporteur;
		return $this;
	}

	/**
	 * Set the tx escompte vente.
	 *
	 * @param float $txEscompteVente The tx escompte vente.
	 * @return CdeClientEntete Returns this cde client entete.
	 */
	public function setTxEscompteVente($txEscompteVente) {
		$this->txEscompteVente = $txEscompteVente;
		return $this;
	}

}
