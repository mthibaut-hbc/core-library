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

use DateTime;

/**
 * Articles model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Articles {

    /**
     * Achat par colis.
     *
     * @var bool
     */
    private $achatParColis;

    /**
     * Actif.
     *
     * @var bool
     */
    private $actif;

    /**
     * Allee casier.
     *
     * @var string
     */
    private $alleeCasier;

    /**
     * Article frais.
     *
     * @var bool
     */
    private $articleFrais;

    /**
     * Article rattache.
     *
     * @var string
     */
    private $articleRattache;

    /**
     * Article regroupement.
     *
     * @var string
     */
    private $articleRegroupement;

    /**
     * Article remplacement.
     *
     * @var string
     */
    private $articleRemplacement;

    /**
     * Article taxe1.
     *
     * @var string
     */
    private $articleTaxe1;

    /**
     * Article taxe2.
     *
     * @var string
     */
    private $articleTaxe2;

    /**
     * Article taxe3.
     *
     * @var string
     */
    private $articleTaxe3;

    /**
     * Article taxe4.
     *
     * @var string
     */
    private $articleTaxe4;

    /**
     * Article taxe5.
     *
     * @var string
     */
    private $articleTaxe5;

    /**
     * Calcul coeff pa pv.
     *
     * @var bool
     */
    private $calculCoeffPaPv;

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code article2.
     *
     * @var string
     */
    private $codeArticle2;

    /**
     * Code devise achat.
     *
     * @var string
     */
    private $codeDeviseAchat;

    /**
     * Code famille.
     *
     * @var string
     */
    private $codeFamille;

    /**
     * Code fournisseur.
     *
     * @var string
     */
    private $codeFournisseur;

    /**
     * Code gamme.
     *
     * @var string
     */
    private $codeGamme;

    /**
     * Code grille gamme.
     *
     * @var string
     */
    private $codeGrilleGamme;

    /**
     * Code honoraire.
     *
     * @var string
     */
    private $codeHonoraire;

    /**
     * Code imputation analytique.
     *
     * @var string
     */
    private $codeImputationAnalytique;

    /**
     * Code presentation.
     *
     * @var string
     */
    private $codePresentation;

    /**
     * Code ss famille.
     *
     * @var string
     */
    private $codeSsFamille;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Code tarif art.
     *
     * @var string
     */
    private $codeTarifArt;

    /**
     * Code taxe.
     *
     * @var string
     */
    private $codeTaxe;

    /**
     * Code tva achat.
     *
     * @var string
     */
    private $codeTvaAchat;

    /**
     * Code tva vente.
     *
     * @var string
     */
    private $codeTvaVente;

    /**
     * Code tva vente2.
     *
     * @var string
     */
    private $codeTvaVente2;

    /**
     * Code unite.
     *
     * @var string
     */
    private $codeUnite;

    /**
     * Code ventil achat.
     *
     * @var string
     */
    private $codeVentilAchat;

    /**
     * Code ventil vente.
     *
     * @var string
     */
    private $codeVentilVente;

    /**
     * Code ventil vente2.
     *
     * @var string
     */
    private $codeVentilVente2;

    /**
     * Coeff pv pa.
     *
     * @var float
     */
    private $coeffPvPa;

    /**
     * Coeff sur px achat.
     *
     * @var string
     */
    private $coeffSurPxAchat;

    /**
     * Coeff sur px achat brut.
     *
     * @var bool
     */
    private $coeffSurPxAchatBrut;

    /**
     * Colisage achat.
     *
     * @var float
     */
    private $colisageAchat;

    /**
     * Colisage px achat.
     *
     * @var float
     */
    private $colisagePxAchat;

    /**
     * Colisage px vente.
     *
     * @var float
     */
    private $colisagePxVente;

    /**
     * Colisage vente.
     *
     * @var float
     */
    private $colisageVente;

    /**
     * Commission unique.
     *
     * @var bool
     */
    private $commissionUnique;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Conditionnement1.
     *
     * @var float
     */
    private $conditionnement1;

    /**
     * Conditionnement2.
     *
     * @var float
     */
    private $conditionnement2;

    /**
     * Conditionnement3.
     *
     * @var float
     */
    private $conditionnement3;

    /**
     * Contremarque interdite.
     *
     * @var bool
     */
    private $contremarqueInterdite;

    /**
     * Cout supp.
     *
     * @var float
     */
    private $coutSupp;

    /**
     * Date creation.
     *
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Date modification.
     *
     * @var DateTime
     */
    private $dateModification;

    /**
     * Debour.
     *
     * @var bool
     */
    private $debour;

    /**
     * Dernier px achat.
     *
     * @var float
     */
    private $dernierPxAchat;

    /**
     * Designation apres.
     *
     * @var string
     */
    private $designationApres;

    /**
     * Designation avant.
     *
     * @var string
     */
    private $designationAvant;

    /**
     * Editer article rattache.
     *
     * @var bool
     */
    private $editerArticleRattache;

    /**
     * Editer article remplacement.
     *
     * @var bool
     */
    private $editerArticleRemplacement;

    /**
     * Ensemble.
     *
     * @var bool
     */
    private $ensemble;

    /**
     * Est multi tva.
     *
     * @var bool
     */
    private $estMultiTva;

    /**
     * Est occasion.
     *
     * @var bool
     */
    private $estOccasion;

    /**
     * Facturation t t c.
     *
     * @var bool
     */
    private $facturationTTC;

    /**
     * Famille achat.
     *
     * @var string
     */
    private $familleAchat;

    /**
     * Frais1.
     *
     * @var float
     */
    private $frais1;

    /**
     * Frais2.
     *
     * @var float
     */
    private $frais2;

    /**
     * Frais3.
     *
     * @var float
     */
    private $frais3;

    /**
     * H a_ coeff pv p a.
     *
     * @var float
     */
    private $hA_CoeffPvPA;

    /**
     * H a_ coeff sur px achat.
     *
     * @var string
     */
    private $hA_CoeffSurPxAchat;

    /**
     * H a_ date p a.
     *
     * @var DateTime
     */
    private $hA_DatePA;

    /**
     * H a_ date p v.
     *
     * @var DateTime
     */
    private $hA_DatePV;

    /**
     * H a_ dernier px achat.
     *
     * @var float
     */
    private $hA_DernierPxAchat;

    /**
     * H a_ prix revient.
     *
     * @var float
     */
    private $hA_PrixRevient;

    /**
     * H a_ prix revient net.
     *
     * @var float
     */
    private $hA_PrixRevientNet;

    /**
     * H a_ prix vente.
     *
     * @var float
     */
    private $hA_PrixVente;

    /**
     * H a_ px achat brut.
     *
     * @var float
     */
    private $hA_PxAchatBrut;

    /**
     * H a_ remise achat1.
     *
     * @var float
     */
    private $hA_RemiseAchat1;

    /**
     * H a_ remise achat2.
     *
     * @var float
     */
    private $hA_RemiseAchat2;

    /**
     * H a_ remise achat3.
     *
     * @var float
     */
    private $hA_RemiseAchat3;

    /**
     * H a_ remise sup achat1.
     *
     * @var float
     */
    private $hA_RemiseSupAchat1;

    /**
     * H a_ remise sup achat2.
     *
     * @var float
     */
    private $hA_RemiseSupAchat2;

    /**
     * H a_ remise sup achat3.
     *
     * @var float
     */
    private $hA_RemiseSupAchat3;

    /**
     * Hauteur.
     *
     * @var float
     */
    private $hauteur;

    /**
     * Honoraires.
     *
     * @var bool
     */
    private $honoraires;

    /**
     * Honoraires uniquement.
     *
     * @var bool
     */
    private $honorairesUniquement;

    /**
     * Hors stock.
     *
     * @var bool
     */
    private $horsStock;

    /**
     * Intitule1.
     *
     * @var string
     */
    private $intitule1;

    /**
     * Intitule2.
     *
     * @var string
     */
    private $intitule2;

    /**
     * Intitule3.
     *
     * @var string
     */
    private $intitule3;

    /**
     * Intitule4.
     *
     * @var string
     */
    private $intitule4;

    /**
     * Largeur.
     *
     * @var float
     */
    private $largeur;

    /**
     * Libelle interne.
     *
     * @var string
     */
    private $libelleInterne;

    /**
     * Longueur.
     *
     * @var float
     */
    private $longueur;

    /**
     * Lot serie autre.
     *
     * @var bool
     */
    private $lotSerieAutre;

    /**
     * Marge m i n i.
     *
     * @var float
     */
    private $margeMINI;

    /**
     * Mini facturable.
     *
     * @var float
     */
    private $miniFacturable;

    /**
     * Modele code barre.
     *
     * @var string
     */
    private $modeleCodeBarre;

    /**
     * Modele code barre f.
     *
     * @var string
     */
    private $modeleCodeBarreF;

    /**
     * Mt soumis tva2.
     *
     * @var float
     */
    private $mtSoumisTva2;

    /**
     * Mt tare.
     *
     * @var float
     */
    private $mtTare;

    /**
     * Multi tva avec remises.
     *
     * @var bool
     */
    private $multiTvaAvecRemises;

    /**
     * Nature produit.
     *
     * @var string
     */
    private $natureProduit;

    /**
     * Nb heures.
     *
     * @var float
     */
    private $nbHeures;

    /**
     * Ne pas cumuler stats.
     *
     * @var bool
     */
    private $nePasCumulerStats;

    /**
     * Ne pas editer.
     *
     * @var bool
     */
    private $nePasEditer;

    /**
     * Ne plus commander.
     *
     * @var bool
     */
    private $nePlusCommander;

    /**
     * Neutre.
     *
     * @var bool
     */
    private $neutre;

    /**
     * Niveau apparition.
     *
     * @var int
     */
    private $niveauApparition;

    /**
     * Niveau totalisation.
     *
     * @var string
     */
    private $niveauTotalisation;

    /**
     * Nomenclature ensemble.
     *
     * @var bool
     */
    private $nomenclatureEnsemble;

    /**
     * Nomenclature europe.
     *
     * @var string
     */
    private $nomenclatureEurope;

    /**
     * Num compte achat.
     *
     * @var string
     */
    private $numCompteAchat;

    /**
     * Num compte vente.
     *
     * @var string
     */
    private $numCompteVente;

    /**
     * Numero p j.
     *
     * @var int
     */
    private $numeroPJ;

    /**
     * P a m p.
     *
     * @var float
     */
    private $pAMP;

    /**
     * P r m p.
     *
     * @var float
     */
    private $pRMP;

    /**
     * Param c d e.
     *
     * @var float
     */
    private $paramCDE;

    /**
     * Poids unitaire.
     *
     * @var float
     */
    private $poidsUnitaire;

    /**
     * Prix achat_ c k p.
     *
     * @var string
     */
    private $prixAchat_CKP;

    /**
     * Prix fixe.
     *
     * @var bool
     */
    private $prixFixe;

    /**
     * Prix m i n i.
     *
     * @var float
     */
    private $prixMINI;

    /**
     * Prix net.
     *
     * @var bool
     */
    private $prixNet;

    /**
     * Prix revient.
     *
     * @var float
     */
    private $prixRevient;

    /**
     * Prix revient net.
     *
     * @var float
     */
    private $prixRevientNet;

    /**
     * Prix vente_ c k p.
     *
     * @var string
     */
    private $prixVente_CKP;

    /**
     * Provenance.
     *
     * @var string
     */
    private $provenance;

    /**
     * Px achat brut.
     *
     * @var float
     */
    private $pxAchatBrut;

    /**
     * Px achat colis.
     *
     * @var bool
     */
    private $pxAchatColis;

    /**
     * Px achat en devise.
     *
     * @var float
     */
    private $pxAchatEnDevise;

    /**
     * Px unit a editer.
     *
     * @var bool
     */
    private $pxUnitAEditer;

    /**
     * Px vente colis.
     *
     * @var bool
     */
    private $pxVenteColis;

    /**
     * Px vente ht euro.
     *
     * @var float
     */
    private $pxVenteHtEuro;

    /**
     * Px vente ht frf.
     *
     * @var float
     */
    private $pxVenteHtFrf;

    /**
     * Px vente ttc euro.
     *
     * @var float
     */
    private $pxVenteTtcEuro;

    /**
     * Px vente ttc frf.
     *
     * @var float
     */
    private $pxVenteTtcFrf;

    /**
     * Qte a editer.
     *
     * @var bool
     */
    private $qteAEditer;

    /**
     * Qte eco commande.
     *
     * @var float
     */
    private $qteEcoCommande;

    /**
     * Qte hab commande.
     *
     * @var float
     */
    private $qteHabCommande;

    /**
     * Qte max facture.
     *
     * @var float
     */
    private $qteMaxFacture;

    /**
     * Qte min commande.
     *
     * @var float
     */
    private $qteMinCommande;

    /**
     * Regroup fact.
     *
     * @var string
     */
    private $regroupFact;

    /**
     * Regroup fact t p.
     *
     * @var int
     */
    private $regroupFactTP;

    /**
     * Remise1en montant.
     *
     * @var bool
     */
    private $remise1enMontant;

    /**
     * Remise2en montant.
     *
     * @var bool
     */
    private $remise2enMontant;

    /**
     * Remise achat1.
     *
     * @var float
     */
    private $remiseAchat1;

    /**
     * Remise achat2.
     *
     * @var float
     */
    private $remiseAchat2;

    /**
     * Remise achat3.
     *
     * @var float
     */
    private $remiseAchat3;

    /**
     * Remise sup achat1.
     *
     * @var float
     */
    private $remiseSupAchat1;

    /**
     * Remise sup achat1 en montant.
     *
     * @var bool
     */
    private $remiseSupAchat1EnMontant;

    /**
     * Remise sup achat2.
     *
     * @var float
     */
    private $remiseSupAchat2;

    /**
     * Remise sup achat2 en montant.
     *
     * @var bool
     */
    private $remiseSupAchat2EnMontant;

    /**
     * Remise sup achat3.
     *
     * @var float
     */
    private $remiseSupAchat3;

    /**
     * Remise sup achat3 en montant.
     *
     * @var bool
     */
    private $remiseSupAchat3EnMontant;

    /**
     * Remises interdites.
     *
     * @var bool
     */
    private $remisesInterdites;

    /**
     * Soumis certif.
     *
     * @var bool
     */
    private $soumisCertif;

    /**
     * Ss famille achat.
     *
     * @var string
     */
    private $ssFamilleAchat;

    /**
     * Suivi stock.
     *
     * @var bool
     */
    private $suiviStock;

    /**
     * Tare_ v a t.
     *
     * @var string
     */
    private $tare_VAT;

    /**
     * Taux alcool.
     *
     * @var float
     */
    private $tauxAlcool;

    /**
     * Taux devise achat.
     *
     * @var float
     */
    private $tauxDeviseAchat;

    /**
     * Tva encaissement.
     *
     * @var bool
     */
    private $tvaEncaissement;

    /**
     * Tx commission.
     *
     * @var float
     */
    private $txCommission;

    /**
     * Type arrondi.
     *
     * @var string
     */
    private $typeArrondi;

    /**
     * Type heure.
     *
     * @var bool
     */
    private $typeHeure;

    /**
     * Type unite.
     *
     * @var string
     */
    private $typeUnite;

    /**
     * Unite activite.
     *
     * @var bool
     */
    private $uniteActivite;

    /**
     * Variante.
     *
     * @var bool
     */
    private $variante;

    /**
     * Vente par colis.
     *
     * @var bool
     */
    private $venteParColis;

    /**
     * Volume.
     *
     * @var float
     */
    private $volume;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the achat par colis.
     *
     * @return bool Returns the achat par colis.
     */
    public function getAchatParColis() {
        return $this->achatParColis;
    }

    /**
     * Get the actif.
     *
     * @return bool Returns the actif.
     */
    public function getActif() {
        return $this->actif;
    }

    /**
     * Get the allee casier.
     *
     * @return string Returns the allee casier.
     */
    public function getAlleeCasier() {
        return $this->alleeCasier;
    }

    /**
     * Get the article frais.
     *
     * @return bool Returns the article frais.
     */
    public function getArticleFrais() {
        return $this->articleFrais;
    }

    /**
     * Get the article rattache.
     *
     * @return string Returns the article rattache.
     */
    public function getArticleRattache() {
        return $this->articleRattache;
    }

    /**
     * Get the article regroupement.
     *
     * @return string Returns the article regroupement.
     */
    public function getArticleRegroupement() {
        return $this->articleRegroupement;
    }

    /**
     * Get the article remplacement.
     *
     * @return string Returns the article remplacement.
     */
    public function getArticleRemplacement() {
        return $this->articleRemplacement;
    }

    /**
     * Get the article taxe1.
     *
     * @return string Returns the article taxe1.
     */
    public function getArticleTaxe1() {
        return $this->articleTaxe1;
    }

    /**
     * Get the article taxe2.
     *
     * @return string Returns the article taxe2.
     */
    public function getArticleTaxe2() {
        return $this->articleTaxe2;
    }

    /**
     * Get the article taxe3.
     *
     * @return string Returns the article taxe3.
     */
    public function getArticleTaxe3() {
        return $this->articleTaxe3;
    }

    /**
     * Get the article taxe4.
     *
     * @return string Returns the article taxe4.
     */
    public function getArticleTaxe4() {
        return $this->articleTaxe4;
    }

    /**
     * Get the article taxe5.
     *
     * @return string Returns the article taxe5.
     */
    public function getArticleTaxe5() {
        return $this->articleTaxe5;
    }

    /**
     * Get the calcul coeff pa pv.
     *
     * @return bool Returns the calcul coeff pa pv.
     */
    public function getCalculCoeffPaPv() {
        return $this->calculCoeffPaPv;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
    }

    /**
     * Get the code article2.
     *
     * @return string Returns the code article2.
     */
    public function getCodeArticle2() {
        return $this->codeArticle2;
    }

    /**
     * Get the code devise achat.
     *
     * @return string Returns the code devise achat.
     */
    public function getCodeDeviseAchat() {
        return $this->codeDeviseAchat;
    }

    /**
     * Get the code famille.
     *
     * @return string Returns the code famille.
     */
    public function getCodeFamille() {
        return $this->codeFamille;
    }

    /**
     * Get the code fournisseur.
     *
     * @return string Returns the code fournisseur.
     */
    public function getCodeFournisseur() {
        return $this->codeFournisseur;
    }

    /**
     * Get the code gamme.
     *
     * @return string Returns the code gamme.
     */
    public function getCodeGamme() {
        return $this->codeGamme;
    }

    /**
     * Get the code grille gamme.
     *
     * @return string Returns the code grille gamme.
     */
    public function getCodeGrilleGamme() {
        return $this->codeGrilleGamme;
    }

    /**
     * Get the code honoraire.
     *
     * @return string Returns the code honoraire.
     */
    public function getCodeHonoraire() {
        return $this->codeHonoraire;
    }

    /**
     * Get the code imputation analytique.
     *
     * @return string Returns the code imputation analytique.
     */
    public function getCodeImputationAnalytique() {
        return $this->codeImputationAnalytique;
    }

    /**
     * Get the code presentation.
     *
     * @return string Returns the code presentation.
     */
    public function getCodePresentation() {
        return $this->codePresentation;
    }

    /**
     * Get the code ss famille.
     *
     * @return string Returns the code ss famille.
     */
    public function getCodeSsFamille() {
        return $this->codeSsFamille;
    }

    /**
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Get the code tarif art.
     *
     * @return string Returns the code tarif art.
     */
    public function getCodeTarifArt() {
        return $this->codeTarifArt;
    }

    /**
     * Get the code taxe.
     *
     * @return string Returns the code taxe.
     */
    public function getCodeTaxe() {
        return $this->codeTaxe;
    }

    /**
     * Get the code tva achat.
     *
     * @return string Returns the code tva achat.
     */
    public function getCodeTvaAchat() {
        return $this->codeTvaAchat;
    }

    /**
     * Get the code tva vente.
     *
     * @return string Returns the code tva vente.
     */
    public function getCodeTvaVente() {
        return $this->codeTvaVente;
    }

    /**
     * Get the code tva vente2.
     *
     * @return string Returns the code tva vente2.
     */
    public function getCodeTvaVente2() {
        return $this->codeTvaVente2;
    }

    /**
     * Get the code unite.
     *
     * @return string Returns the code unite.
     */
    public function getCodeUnite() {
        return $this->codeUnite;
    }

    /**
     * Get the code ventil achat.
     *
     * @return string Returns the code ventil achat.
     */
    public function getCodeVentilAchat() {
        return $this->codeVentilAchat;
    }

    /**
     * Get the code ventil vente.
     *
     * @return string Returns the code ventil vente.
     */
    public function getCodeVentilVente() {
        return $this->codeVentilVente;
    }

    /**
     * Get the code ventil vente2.
     *
     * @return string Returns the code ventil vente2.
     */
    public function getCodeVentilVente2() {
        return $this->codeVentilVente2;
    }

    /**
     * Get the coeff pv pa.
     *
     * @return float Returns the coeff pv pa.
     */
    public function getCoeffPvPa() {
        return $this->coeffPvPa;
    }

    /**
     * Get the coeff sur px achat.
     *
     * @return string Returns the coeff sur px achat.
     */
    public function getCoeffSurPxAchat() {
        return $this->coeffSurPxAchat;
    }

    /**
     * Get the coeff sur px achat brut.
     *
     * @return bool Returns the coeff sur px achat brut.
     */
    public function getCoeffSurPxAchatBrut() {
        return $this->coeffSurPxAchatBrut;
    }

    /**
     * Get the colisage achat.
     *
     * @return float Returns the colisage achat.
     */
    public function getColisageAchat() {
        return $this->colisageAchat;
    }

    /**
     * Get the colisage px achat.
     *
     * @return float Returns the colisage px achat.
     */
    public function getColisagePxAchat() {
        return $this->colisagePxAchat;
    }

    /**
     * Get the colisage px vente.
     *
     * @return float Returns the colisage px vente.
     */
    public function getColisagePxVente() {
        return $this->colisagePxVente;
    }

    /**
     * Get the colisage vente.
     *
     * @return float Returns the colisage vente.
     */
    public function getColisageVente() {
        return $this->colisageVente;
    }

    /**
     * Get the commission unique.
     *
     * @return bool Returns the commission unique.
     */
    public function getCommissionUnique() {
        return $this->commissionUnique;
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
     * Get the conditionnement1.
     *
     * @return float Returns the conditionnement1.
     */
    public function getConditionnement1() {
        return $this->conditionnement1;
    }

    /**
     * Get the conditionnement2.
     *
     * @return float Returns the conditionnement2.
     */
    public function getConditionnement2() {
        return $this->conditionnement2;
    }

    /**
     * Get the conditionnement3.
     *
     * @return float Returns the conditionnement3.
     */
    public function getConditionnement3() {
        return $this->conditionnement3;
    }

    /**
     * Get the contremarque interdite.
     *
     * @return bool Returns the contremarque interdite.
     */
    public function getContremarqueInterdite() {
        return $this->contremarqueInterdite;
    }

    /**
     * Get the cout supp.
     *
     * @return float Returns the cout supp.
     */
    public function getCoutSupp() {
        return $this->coutSupp;
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
     * Get the date modification.
     *
     * @return DateTime Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the debour.
     *
     * @return bool Returns the debour.
     */
    public function getDebour() {
        return $this->debour;
    }

    /**
     * Get the dernier px achat.
     *
     * @return float Returns the dernier px achat.
     */
    public function getDernierPxAchat() {
        return $this->dernierPxAchat;
    }

    /**
     * Get the designation apres.
     *
     * @return string Returns the designation apres.
     */
    public function getDesignationApres() {
        return $this->designationApres;
    }

    /**
     * Get the designation avant.
     *
     * @return string Returns the designation avant.
     */
    public function getDesignationAvant() {
        return $this->designationAvant;
    }

    /**
     * Get the editer article rattache.
     *
     * @return bool Returns the editer article rattache.
     */
    public function getEditerArticleRattache() {
        return $this->editerArticleRattache;
    }

    /**
     * Get the editer article remplacement.
     *
     * @return bool Returns the editer article remplacement.
     */
    public function getEditerArticleRemplacement() {
        return $this->editerArticleRemplacement;
    }

    /**
     * Get the ensemble.
     *
     * @return bool Returns the ensemble.
     */
    public function getEnsemble() {
        return $this->ensemble;
    }

    /**
     * Get the est multi tva.
     *
     * @return bool Returns the est multi tva.
     */
    public function getEstMultiTva() {
        return $this->estMultiTva;
    }

    /**
     * Get the est occasion.
     *
     * @return bool Returns the est occasion.
     */
    public function getEstOccasion() {
        return $this->estOccasion;
    }

    /**
     * Get the facturation t t c.
     *
     * @return bool Returns the facturation t t c.
     */
    public function getFacturationTTC() {
        return $this->facturationTTC;
    }

    /**
     * Get the famille achat.
     *
     * @return string Returns the famille achat.
     */
    public function getFamilleAchat() {
        return $this->familleAchat;
    }

    /**
     * Get the frais1.
     *
     * @return float Returns the frais1.
     */
    public function getFrais1() {
        return $this->frais1;
    }

    /**
     * Get the frais2.
     *
     * @return float Returns the frais2.
     */
    public function getFrais2() {
        return $this->frais2;
    }

    /**
     * Get the frais3.
     *
     * @return float Returns the frais3.
     */
    public function getFrais3() {
        return $this->frais3;
    }

    /**
     * Get the h a_ coeff pv p a.
     *
     * @return float Returns the h a_ coeff pv p a.
     */
    public function getHA_CoeffPvPA() {
        return $this->hA_CoeffPvPA;
    }

    /**
     * Get the h a_ coeff sur px achat.
     *
     * @return string Returns the h a_ coeff sur px achat.
     */
    public function getHA_CoeffSurPxAchat() {
        return $this->hA_CoeffSurPxAchat;
    }

    /**
     * Get the h a_ date p a.
     *
     * @return DateTime Returns the h a_ date p a.
     */
    public function getHA_DatePA() {
        return $this->hA_DatePA;
    }

    /**
     * Get the h a_ date p v.
     *
     * @return DateTime Returns the h a_ date p v.
     */
    public function getHA_DatePV() {
        return $this->hA_DatePV;
    }

    /**
     * Get the h a_ dernier px achat.
     *
     * @return float Returns the h a_ dernier px achat.
     */
    public function getHA_DernierPxAchat() {
        return $this->hA_DernierPxAchat;
    }

    /**
     * Get the h a_ prix revient.
     *
     * @return float Returns the h a_ prix revient.
     */
    public function getHA_PrixRevient() {
        return $this->hA_PrixRevient;
    }

    /**
     * Get the h a_ prix revient net.
     *
     * @return float Returns the h a_ prix revient net.
     */
    public function getHA_PrixRevientNet() {
        return $this->hA_PrixRevientNet;
    }

    /**
     * Get the h a_ prix vente.
     *
     * @return float Returns the h a_ prix vente.
     */
    public function getHA_PrixVente() {
        return $this->hA_PrixVente;
    }

    /**
     * Get the h a_ px achat brut.
     *
     * @return float Returns the h a_ px achat brut.
     */
    public function getHA_PxAchatBrut() {
        return $this->hA_PxAchatBrut;
    }

    /**
     * Get the h a_ remise achat1.
     *
     * @return float Returns the h a_ remise achat1.
     */
    public function getHA_RemiseAchat1() {
        return $this->hA_RemiseAchat1;
    }

    /**
     * Get the h a_ remise achat2.
     *
     * @return float Returns the h a_ remise achat2.
     */
    public function getHA_RemiseAchat2() {
        return $this->hA_RemiseAchat2;
    }

    /**
     * Get the h a_ remise achat3.
     *
     * @return float Returns the h a_ remise achat3.
     */
    public function getHA_RemiseAchat3() {
        return $this->hA_RemiseAchat3;
    }

    /**
     * Get the h a_ remise sup achat1.
     *
     * @return float Returns the h a_ remise sup achat1.
     */
    public function getHA_RemiseSupAchat1() {
        return $this->hA_RemiseSupAchat1;
    }

    /**
     * Get the h a_ remise sup achat2.
     *
     * @return float Returns the h a_ remise sup achat2.
     */
    public function getHA_RemiseSupAchat2() {
        return $this->hA_RemiseSupAchat2;
    }

    /**
     * Get the h a_ remise sup achat3.
     *
     * @return float Returns the h a_ remise sup achat3.
     */
    public function getHA_RemiseSupAchat3() {
        return $this->hA_RemiseSupAchat3;
    }

    /**
     * Get the hauteur.
     *
     * @return float Returns the hauteur.
     */
    public function getHauteur() {
        return $this->hauteur;
    }

    /**
     * Get the honoraires.
     *
     * @return bool Returns the honoraires.
     */
    public function getHonoraires() {
        return $this->honoraires;
    }

    /**
     * Get the honoraires uniquement.
     *
     * @return bool Returns the honoraires uniquement.
     */
    public function getHonorairesUniquement() {
        return $this->honorairesUniquement;
    }

    /**
     * Get the hors stock.
     *
     * @return bool Returns the hors stock.
     */
    public function getHorsStock() {
        return $this->horsStock;
    }

    /**
     * Get the intitule1.
     *
     * @return string Returns the intitule1.
     */
    public function getIntitule1() {
        return $this->intitule1;
    }

    /**
     * Get the intitule2.
     *
     * @return string Returns the intitule2.
     */
    public function getIntitule2() {
        return $this->intitule2;
    }

    /**
     * Get the intitule3.
     *
     * @return string Returns the intitule3.
     */
    public function getIntitule3() {
        return $this->intitule3;
    }

    /**
     * Get the intitule4.
     *
     * @return string Returns the intitule4.
     */
    public function getIntitule4() {
        return $this->intitule4;
    }

    /**
     * Get the largeur.
     *
     * @return float Returns the largeur.
     */
    public function getLargeur() {
        return $this->largeur;
    }

    /**
     * Get the libelle interne.
     *
     * @return string Returns the libelle interne.
     */
    public function getLibelleInterne() {
        return $this->libelleInterne;
    }

    /**
     * Get the longueur.
     *
     * @return float Returns the longueur.
     */
    public function getLongueur() {
        return $this->longueur;
    }

    /**
     * Get the lot serie autre.
     *
     * @return bool Returns the lot serie autre.
     */
    public function getLotSerieAutre() {
        return $this->lotSerieAutre;
    }

    /**
     * Get the marge m i n i.
     *
     * @return float Returns the marge m i n i.
     */
    public function getMargeMINI() {
        return $this->margeMINI;
    }

    /**
     * Get the mini facturable.
     *
     * @return float Returns the mini facturable.
     */
    public function getMiniFacturable() {
        return $this->miniFacturable;
    }

    /**
     * Get the modele code barre.
     *
     * @return string Returns the modele code barre.
     */
    public function getModeleCodeBarre() {
        return $this->modeleCodeBarre;
    }

    /**
     * Get the modele code barre f.
     *
     * @return string Returns the modele code barre f.
     */
    public function getModeleCodeBarreF() {
        return $this->modeleCodeBarreF;
    }

    /**
     * Get the mt soumis tva2.
     *
     * @return float Returns the mt soumis tva2.
     */
    public function getMtSoumisTva2() {
        return $this->mtSoumisTva2;
    }

    /**
     * Get the mt tare.
     *
     * @return float Returns the mt tare.
     */
    public function getMtTare() {
        return $this->mtTare;
    }

    /**
     * Get the multi tva avec remises.
     *
     * @return bool Returns the multi tva avec remises.
     */
    public function getMultiTvaAvecRemises() {
        return $this->multiTvaAvecRemises;
    }

    /**
     * Get the nature produit.
     *
     * @return string Returns the nature produit.
     */
    public function getNatureProduit() {
        return $this->natureProduit;
    }

    /**
     * Get the nb heures.
     *
     * @return float Returns the nb heures.
     */
    public function getNbHeures() {
        return $this->nbHeures;
    }

    /**
     * Get the ne pas cumuler stats.
     *
     * @return bool Returns the ne pas cumuler stats.
     */
    public function getNePasCumulerStats() {
        return $this->nePasCumulerStats;
    }

    /**
     * Get the ne pas editer.
     *
     * @return bool Returns the ne pas editer.
     */
    public function getNePasEditer() {
        return $this->nePasEditer;
    }

    /**
     * Get the ne plus commander.
     *
     * @return bool Returns the ne plus commander.
     */
    public function getNePlusCommander() {
        return $this->nePlusCommander;
    }

    /**
     * Get the neutre.
     *
     * @return bool Returns the neutre.
     */
    public function getNeutre() {
        return $this->neutre;
    }

    /**
     * Get the niveau apparition.
     *
     * @return int Returns the niveau apparition.
     */
    public function getNiveauApparition() {
        return $this->niveauApparition;
    }

    /**
     * Get the niveau totalisation.
     *
     * @return string Returns the niveau totalisation.
     */
    public function getNiveauTotalisation() {
        return $this->niveauTotalisation;
    }

    /**
     * Get the nomenclature ensemble.
     *
     * @return bool Returns the nomenclature ensemble.
     */
    public function getNomenclatureEnsemble() {
        return $this->nomenclatureEnsemble;
    }

    /**
     * Get the nomenclature europe.
     *
     * @return string Returns the nomenclature europe.
     */
    public function getNomenclatureEurope() {
        return $this->nomenclatureEurope;
    }

    /**
     * Get the num compte achat.
     *
     * @return string Returns the num compte achat.
     */
    public function getNumCompteAchat() {
        return $this->numCompteAchat;
    }

    /**
     * Get the num compte vente.
     *
     * @return string Returns the num compte vente.
     */
    public function getNumCompteVente() {
        return $this->numCompteVente;
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
     * Get the p a m p.
     *
     * @return float Returns the p a m p.
     */
    public function getPAMP() {
        return $this->pAMP;
    }

    /**
     * Get the p r m p.
     *
     * @return float Returns the p r m p.
     */
    public function getPRMP() {
        return $this->pRMP;
    }

    /**
     * Get the param c d e.
     *
     * @return float Returns the param c d e.
     */
    public function getParamCDE() {
        return $this->paramCDE;
    }

    /**
     * Get the poids unitaire.
     *
     * @return float Returns the poids unitaire.
     */
    public function getPoidsUnitaire() {
        return $this->poidsUnitaire;
    }

    /**
     * Get the prix achat_ c k p.
     *
     * @return string Returns the prix achat_ c k p.
     */
    public function getPrixAchat_CKP() {
        return $this->prixAchat_CKP;
    }

    /**
     * Get the prix fixe.
     *
     * @return bool Returns the prix fixe.
     */
    public function getPrixFixe() {
        return $this->prixFixe;
    }

    /**
     * Get the prix m i n i.
     *
     * @return float Returns the prix m i n i.
     */
    public function getPrixMINI() {
        return $this->prixMINI;
    }

    /**
     * Get the prix net.
     *
     * @return bool Returns the prix net.
     */
    public function getPrixNet() {
        return $this->prixNet;
    }

    /**
     * Get the prix revient.
     *
     * @return float Returns the prix revient.
     */
    public function getPrixRevient() {
        return $this->prixRevient;
    }

    /**
     * Get the prix revient net.
     *
     * @return float Returns the prix revient net.
     */
    public function getPrixRevientNet() {
        return $this->prixRevientNet;
    }

    /**
     * Get the prix vente_ c k p.
     *
     * @return string Returns the prix vente_ c k p.
     */
    public function getPrixVente_CKP() {
        return $this->prixVente_CKP;
    }

    /**
     * Get the provenance.
     *
     * @return string Returns the provenance.
     */
    public function getProvenance() {
        return $this->provenance;
    }

    /**
     * Get the px achat brut.
     *
     * @return float Returns the px achat brut.
     */
    public function getPxAchatBrut() {
        return $this->pxAchatBrut;
    }

    /**
     * Get the px achat colis.
     *
     * @return bool Returns the px achat colis.
     */
    public function getPxAchatColis() {
        return $this->pxAchatColis;
    }

    /**
     * Get the px achat en devise.
     *
     * @return float Returns the px achat en devise.
     */
    public function getPxAchatEnDevise() {
        return $this->pxAchatEnDevise;
    }

    /**
     * Get the px unit a editer.
     *
     * @return bool Returns the px unit a editer.
     */
    public function getPxUnitAEditer() {
        return $this->pxUnitAEditer;
    }

    /**
     * Get the px vente colis.
     *
     * @return bool Returns the px vente colis.
     */
    public function getPxVenteColis() {
        return $this->pxVenteColis;
    }

    /**
     * Get the px vente ht euro.
     *
     * @return float Returns the px vente ht euro.
     */
    public function getPxVenteHtEuro() {
        return $this->pxVenteHtEuro;
    }

    /**
     * Get the px vente ht frf.
     *
     * @return float Returns the px vente ht frf.
     */
    public function getPxVenteHtFrf() {
        return $this->pxVenteHtFrf;
    }

    /**
     * Get the px vente ttc euro.
     *
     * @return float Returns the px vente ttc euro.
     */
    public function getPxVenteTtcEuro() {
        return $this->pxVenteTtcEuro;
    }

    /**
     * Get the px vente ttc frf.
     *
     * @return float Returns the px vente ttc frf.
     */
    public function getPxVenteTtcFrf() {
        return $this->pxVenteTtcFrf;
    }

    /**
     * Get the qte a editer.
     *
     * @return bool Returns the qte a editer.
     */
    public function getQteAEditer() {
        return $this->qteAEditer;
    }

    /**
     * Get the qte eco commande.
     *
     * @return float Returns the qte eco commande.
     */
    public function getQteEcoCommande() {
        return $this->qteEcoCommande;
    }

    /**
     * Get the qte hab commande.
     *
     * @return float Returns the qte hab commande.
     */
    public function getQteHabCommande() {
        return $this->qteHabCommande;
    }

    /**
     * Get the qte max facture.
     *
     * @return float Returns the qte max facture.
     */
    public function getQteMaxFacture() {
        return $this->qteMaxFacture;
    }

    /**
     * Get the qte min commande.
     *
     * @return float Returns the qte min commande.
     */
    public function getQteMinCommande() {
        return $this->qteMinCommande;
    }

    /**
     * Get the regroup fact.
     *
     * @return string Returns the regroup fact.
     */
    public function getRegroupFact() {
        return $this->regroupFact;
    }

    /**
     * Get the regroup fact t p.
     *
     * @return int Returns the regroup fact t p.
     */
    public function getRegroupFactTP() {
        return $this->regroupFactTP;
    }

    /**
     * Get the remise1en montant.
     *
     * @return bool Returns the remise1en montant.
     */
    public function getRemise1enMontant() {
        return $this->remise1enMontant;
    }

    /**
     * Get the remise2en montant.
     *
     * @return bool Returns the remise2en montant.
     */
    public function getRemise2enMontant() {
        return $this->remise2enMontant;
    }

    /**
     * Get the remise achat1.
     *
     * @return float Returns the remise achat1.
     */
    public function getRemiseAchat1() {
        return $this->remiseAchat1;
    }

    /**
     * Get the remise achat2.
     *
     * @return float Returns the remise achat2.
     */
    public function getRemiseAchat2() {
        return $this->remiseAchat2;
    }

    /**
     * Get the remise achat3.
     *
     * @return float Returns the remise achat3.
     */
    public function getRemiseAchat3() {
        return $this->remiseAchat3;
    }

    /**
     * Get the remise sup achat1.
     *
     * @return float Returns the remise sup achat1.
     */
    public function getRemiseSupAchat1() {
        return $this->remiseSupAchat1;
    }

    /**
     * Get the remise sup achat1 en montant.
     *
     * @return bool Returns the remise sup achat1 en montant.
     */
    public function getRemiseSupAchat1EnMontant() {
        return $this->remiseSupAchat1EnMontant;
    }

    /**
     * Get the remise sup achat2.
     *
     * @return float Returns the remise sup achat2.
     */
    public function getRemiseSupAchat2() {
        return $this->remiseSupAchat2;
    }

    /**
     * Get the remise sup achat2 en montant.
     *
     * @return bool Returns the remise sup achat2 en montant.
     */
    public function getRemiseSupAchat2EnMontant() {
        return $this->remiseSupAchat2EnMontant;
    }

    /**
     * Get the remise sup achat3.
     *
     * @return float Returns the remise sup achat3.
     */
    public function getRemiseSupAchat3() {
        return $this->remiseSupAchat3;
    }

    /**
     * Get the remise sup achat3 en montant.
     *
     * @return bool Returns the remise sup achat3 en montant.
     */
    public function getRemiseSupAchat3EnMontant() {
        return $this->remiseSupAchat3EnMontant;
    }

    /**
     * Get the remises interdites.
     *
     * @return bool Returns the remises interdites.
     */
    public function getRemisesInterdites() {
        return $this->remisesInterdites;
    }

    /**
     * Get the soumis certif.
     *
     * @return bool Returns the soumis certif.
     */
    public function getSoumisCertif() {
        return $this->soumisCertif;
    }

    /**
     * Get the ss famille achat.
     *
     * @return string Returns the ss famille achat.
     */
    public function getSsFamilleAchat() {
        return $this->ssFamilleAchat;
    }

    /**
     * Get the suivi stock.
     *
     * @return bool Returns the suivi stock.
     */
    public function getSuiviStock() {
        return $this->suiviStock;
    }

    /**
     * Get the tare_ v a t.
     *
     * @return string Returns the tare_ v a t.
     */
    public function getTare_VAT() {
        return $this->tare_VAT;
    }

    /**
     * Get the taux alcool.
     *
     * @return float Returns the taux alcool.
     */
    public function getTauxAlcool() {
        return $this->tauxAlcool;
    }

    /**
     * Get the taux devise achat.
     *
     * @return float Returns the taux devise achat.
     */
    public function getTauxDeviseAchat() {
        return $this->tauxDeviseAchat;
    }

    /**
     * Get the tva encaissement.
     *
     * @return bool Returns the tva encaissement.
     */
    public function getTvaEncaissement() {
        return $this->tvaEncaissement;
    }

    /**
     * Get the tx commission.
     *
     * @return float Returns the tx commission.
     */
    public function getTxCommission() {
        return $this->txCommission;
    }

    /**
     * Get the type arrondi.
     *
     * @return string Returns the type arrondi.
     */
    public function getTypeArrondi() {
        return $this->typeArrondi;
    }

    /**
     * Get the type heure.
     *
     * @return bool Returns the type heure.
     */
    public function getTypeHeure() {
        return $this->typeHeure;
    }

    /**
     * Get the type unite.
     *
     * @return string Returns the type unite.
     */
    public function getTypeUnite() {
        return $this->typeUnite;
    }

    /**
     * Get the unite activite.
     *
     * @return bool Returns the unite activite.
     */
    public function getUniteActivite() {
        return $this->uniteActivite;
    }

    /**
     * Get the variante.
     *
     * @return bool Returns the variante.
     */
    public function getVariante() {
        return $this->variante;
    }

    /**
     * Get the vente par colis.
     *
     * @return bool Returns the vente par colis.
     */
    public function getVenteParColis() {
        return $this->venteParColis;
    }

    /**
     * Get the volume.
     *
     * @return float Returns the volume.
     */
    public function getVolume() {
        return $this->volume;
    }

    /**
     * Set the achat par colis.
     *
     * @param bool $achatParColis The achat par colis.
     * @return Articles Returns this articles.
     */
    public function setAchatParColis($achatParColis) {
        $this->achatParColis = $achatParColis;
        return $this;
    }

    /**
     * Set the actif.
     *
     * @param bool $actif The actif.
     * @return Articles Returns this articles.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the allee casier.
     *
     * @param string $alleeCasier The allee casier.
     * @return Articles Returns this articles.
     */
    public function setAlleeCasier($alleeCasier) {
        $this->alleeCasier = $alleeCasier;
        return $this;
    }

    /**
     * Set the article frais.
     *
     * @param bool $articleFrais The article frais.
     * @return Articles Returns this articles.
     */
    public function setArticleFrais($articleFrais) {
        $this->articleFrais = $articleFrais;
        return $this;
    }

    /**
     * Set the article rattache.
     *
     * @param string $articleRattache The article rattache.
     * @return Articles Returns this articles.
     */
    public function setArticleRattache($articleRattache) {
        $this->articleRattache = $articleRattache;
        return $this;
    }

    /**
     * Set the article regroupement.
     *
     * @param string $articleRegroupement The article regroupement.
     * @return Articles Returns this articles.
     */
    public function setArticleRegroupement($articleRegroupement) {
        $this->articleRegroupement = $articleRegroupement;
        return $this;
    }

    /**
     * Set the article remplacement.
     *
     * @param string $articleRemplacement The article remplacement.
     * @return Articles Returns this articles.
     */
    public function setArticleRemplacement($articleRemplacement) {
        $this->articleRemplacement = $articleRemplacement;
        return $this;
    }

    /**
     * Set the article taxe1.
     *
     * @param string $articleTaxe1 The article taxe1.
     * @return Articles Returns this articles.
     */
    public function setArticleTaxe1($articleTaxe1) {
        $this->articleTaxe1 = $articleTaxe1;
        return $this;
    }

    /**
     * Set the article taxe2.
     *
     * @param string $articleTaxe2 The article taxe2.
     * @return Articles Returns this articles.
     */
    public function setArticleTaxe2($articleTaxe2) {
        $this->articleTaxe2 = $articleTaxe2;
        return $this;
    }

    /**
     * Set the article taxe3.
     *
     * @param string $articleTaxe3 The article taxe3.
     * @return Articles Returns this articles.
     */
    public function setArticleTaxe3($articleTaxe3) {
        $this->articleTaxe3 = $articleTaxe3;
        return $this;
    }

    /**
     * Set the article taxe4.
     *
     * @param string $articleTaxe4 The article taxe4.
     * @return Articles Returns this articles.
     */
    public function setArticleTaxe4($articleTaxe4) {
        $this->articleTaxe4 = $articleTaxe4;
        return $this;
    }

    /**
     * Set the article taxe5.
     *
     * @param string $articleTaxe5 The article taxe5.
     * @return Articles Returns this articles.
     */
    public function setArticleTaxe5($articleTaxe5) {
        $this->articleTaxe5 = $articleTaxe5;
        return $this;
    }

    /**
     * Set the calcul coeff pa pv.
     *
     * @param bool $calculCoeffPaPv The calcul coeff pa pv.
     * @return Articles Returns this articles.
     */
    public function setCalculCoeffPaPv($calculCoeffPaPv) {
        $this->calculCoeffPaPv = $calculCoeffPaPv;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return Articles Returns this articles.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code article2.
     *
     * @param string $codeArticle2 The code article2.
     * @return Articles Returns this articles.
     */
    public function setCodeArticle2($codeArticle2) {
        $this->codeArticle2 = $codeArticle2;
        return $this;
    }

    /**
     * Set the code devise achat.
     *
     * @param string $codeDeviseAchat The code devise achat.
     * @return Articles Returns this articles.
     */
    public function setCodeDeviseAchat($codeDeviseAchat) {
        $this->codeDeviseAchat = $codeDeviseAchat;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string $codeFamille The code famille.
     * @return Articles Returns this articles.
     */
    public function setCodeFamille($codeFamille) {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string $codeFournisseur The code fournisseur.
     * @return Articles Returns this articles.
     */
    public function setCodeFournisseur($codeFournisseur) {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code gamme.
     *
     * @param string $codeGamme The code gamme.
     * @return Articles Returns this articles.
     */
    public function setCodeGamme($codeGamme) {
        $this->codeGamme = $codeGamme;
        return $this;
    }

    /**
     * Set the code grille gamme.
     *
     * @param string $codeGrilleGamme The code grille gamme.
     * @return Articles Returns this articles.
     */
    public function setCodeGrilleGamme($codeGrilleGamme) {
        $this->codeGrilleGamme = $codeGrilleGamme;
        return $this;
    }

    /**
     * Set the code honoraire.
     *
     * @param string $codeHonoraire The code honoraire.
     * @return Articles Returns this articles.
     */
    public function setCodeHonoraire($codeHonoraire) {
        $this->codeHonoraire = $codeHonoraire;
        return $this;
    }

    /**
     * Set the code imputation analytique.
     *
     * @param string $codeImputationAnalytique The code imputation analytique.
     * @return Articles Returns this articles.
     */
    public function setCodeImputationAnalytique($codeImputationAnalytique) {
        $this->codeImputationAnalytique = $codeImputationAnalytique;
        return $this;
    }

    /**
     * Set the code presentation.
     *
     * @param string $codePresentation The code presentation.
     * @return Articles Returns this articles.
     */
    public function setCodePresentation($codePresentation) {
        $this->codePresentation = $codePresentation;
        return $this;
    }

    /**
     * Set the code ss famille.
     *
     * @param string $codeSsFamille The code ss famille.
     * @return Articles Returns this articles.
     */
    public function setCodeSsFamille($codeSsFamille) {
        $this->codeSsFamille = $codeSsFamille;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return Articles Returns this articles.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code tarif art.
     *
     * @param string $codeTarifArt The code tarif art.
     * @return Articles Returns this articles.
     */
    public function setCodeTarifArt($codeTarifArt) {
        $this->codeTarifArt = $codeTarifArt;
        return $this;
    }

    /**
     * Set the code taxe.
     *
     * @param string $codeTaxe The code taxe.
     * @return Articles Returns this articles.
     */
    public function setCodeTaxe($codeTaxe) {
        $this->codeTaxe = $codeTaxe;
        return $this;
    }

    /**
     * Set the code tva achat.
     *
     * @param string $codeTvaAchat The code tva achat.
     * @return Articles Returns this articles.
     */
    public function setCodeTvaAchat($codeTvaAchat) {
        $this->codeTvaAchat = $codeTvaAchat;
        return $this;
    }

    /**
     * Set the code tva vente.
     *
     * @param string $codeTvaVente The code tva vente.
     * @return Articles Returns this articles.
     */
    public function setCodeTvaVente($codeTvaVente) {
        $this->codeTvaVente = $codeTvaVente;
        return $this;
    }

    /**
     * Set the code tva vente2.
     *
     * @param string $codeTvaVente2 The code tva vente2.
     * @return Articles Returns this articles.
     */
    public function setCodeTvaVente2($codeTvaVente2) {
        $this->codeTvaVente2 = $codeTvaVente2;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string $codeUnite The code unite.
     * @return Articles Returns this articles.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code ventil achat.
     *
     * @param string $codeVentilAchat The code ventil achat.
     * @return Articles Returns this articles.
     */
    public function setCodeVentilAchat($codeVentilAchat) {
        $this->codeVentilAchat = $codeVentilAchat;
        return $this;
    }

    /**
     * Set the code ventil vente.
     *
     * @param string $codeVentilVente The code ventil vente.
     * @return Articles Returns this articles.
     */
    public function setCodeVentilVente($codeVentilVente) {
        $this->codeVentilVente = $codeVentilVente;
        return $this;
    }

    /**
     * Set the code ventil vente2.
     *
     * @param string $codeVentilVente2 The code ventil vente2.
     * @return Articles Returns this articles.
     */
    public function setCodeVentilVente2($codeVentilVente2) {
        $this->codeVentilVente2 = $codeVentilVente2;
        return $this;
    }

    /**
     * Set the coeff pv pa.
     *
     * @param float $coeffPvPa The coeff pv pa.
     * @return Articles Returns this articles.
     */
    public function setCoeffPvPa($coeffPvPa) {
        $this->coeffPvPa = $coeffPvPa;
        return $this;
    }

    /**
     * Set the coeff sur px achat.
     *
     * @param string $coeffSurPxAchat The coeff sur px achat.
     * @return Articles Returns this articles.
     */
    public function setCoeffSurPxAchat($coeffSurPxAchat) {
        $this->coeffSurPxAchat = $coeffSurPxAchat;
        return $this;
    }

    /**
     * Set the coeff sur px achat brut.
     *
     * @param bool $coeffSurPxAchatBrut The coeff sur px achat brut.
     * @return Articles Returns this articles.
     */
    public function setCoeffSurPxAchatBrut($coeffSurPxAchatBrut) {
        $this->coeffSurPxAchatBrut = $coeffSurPxAchatBrut;
        return $this;
    }

    /**
     * Set the colisage achat.
     *
     * @param float $colisageAchat The colisage achat.
     * @return Articles Returns this articles.
     */
    public function setColisageAchat($colisageAchat) {
        $this->colisageAchat = $colisageAchat;
        return $this;
    }

    /**
     * Set the colisage px achat.
     *
     * @param float $colisagePxAchat The colisage px achat.
     * @return Articles Returns this articles.
     */
    public function setColisagePxAchat($colisagePxAchat) {
        $this->colisagePxAchat = $colisagePxAchat;
        return $this;
    }

    /**
     * Set the colisage px vente.
     *
     * @param float $colisagePxVente The colisage px vente.
     * @return Articles Returns this articles.
     */
    public function setColisagePxVente($colisagePxVente) {
        $this->colisagePxVente = $colisagePxVente;
        return $this;
    }

    /**
     * Set the colisage vente.
     *
     * @param float $colisageVente The colisage vente.
     * @return Articles Returns this articles.
     */
    public function setColisageVente($colisageVente) {
        $this->colisageVente = $colisageVente;
        return $this;
    }

    /**
     * Set the commission unique.
     *
     * @param bool $commissionUnique The commission unique.
     * @return Articles Returns this articles.
     */
    public function setCommissionUnique($commissionUnique) {
        $this->commissionUnique = $commissionUnique;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return Articles Returns this articles.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the conditionnement1.
     *
     * @param float $conditionnement1 The conditionnement1.
     * @return Articles Returns this articles.
     */
    public function setConditionnement1($conditionnement1) {
        $this->conditionnement1 = $conditionnement1;
        return $this;
    }

    /**
     * Set the conditionnement2.
     *
     * @param float $conditionnement2 The conditionnement2.
     * @return Articles Returns this articles.
     */
    public function setConditionnement2($conditionnement2) {
        $this->conditionnement2 = $conditionnement2;
        return $this;
    }

    /**
     * Set the conditionnement3.
     *
     * @param float $conditionnement3 The conditionnement3.
     * @return Articles Returns this articles.
     */
    public function setConditionnement3($conditionnement3) {
        $this->conditionnement3 = $conditionnement3;
        return $this;
    }

    /**
     * Set the contremarque interdite.
     *
     * @param bool $contremarqueInterdite The contremarque interdite.
     * @return Articles Returns this articles.
     */
    public function setContremarqueInterdite($contremarqueInterdite) {
        $this->contremarqueInterdite = $contremarqueInterdite;
        return $this;
    }

    /**
     * Set the cout supp.
     *
     * @param float $coutSupp The cout supp.
     * @return Articles Returns this articles.
     */
    public function setCoutSupp($coutSupp) {
        $this->coutSupp = $coutSupp;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return Articles Returns this articles.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime $dateModification The date modification.
     * @return Articles Returns this articles.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the debour.
     *
     * @param bool $debour The debour.
     * @return Articles Returns this articles.
     */
    public function setDebour($debour) {
        $this->debour = $debour;
        return $this;
    }

    /**
     * Set the dernier px achat.
     *
     * @param float $dernierPxAchat The dernier px achat.
     * @return Articles Returns this articles.
     */
    public function setDernierPxAchat($dernierPxAchat) {
        $this->dernierPxAchat = $dernierPxAchat;
        return $this;
    }

    /**
     * Set the designation apres.
     *
     * @param string $designationApres The designation apres.
     * @return Articles Returns this articles.
     */
    public function setDesignationApres($designationApres) {
        $this->designationApres = $designationApres;
        return $this;
    }

    /**
     * Set the designation avant.
     *
     * @param string $designationAvant The designation avant.
     * @return Articles Returns this articles.
     */
    public function setDesignationAvant($designationAvant) {
        $this->designationAvant = $designationAvant;
        return $this;
    }

    /**
     * Set the editer article rattache.
     *
     * @param bool $editerArticleRattache The editer article rattache.
     * @return Articles Returns this articles.
     */
    public function setEditerArticleRattache($editerArticleRattache) {
        $this->editerArticleRattache = $editerArticleRattache;
        return $this;
    }

    /**
     * Set the editer article remplacement.
     *
     * @param bool $editerArticleRemplacement The editer article remplacement.
     * @return Articles Returns this articles.
     */
    public function setEditerArticleRemplacement($editerArticleRemplacement) {
        $this->editerArticleRemplacement = $editerArticleRemplacement;
        return $this;
    }

    /**
     * Set the ensemble.
     *
     * @param bool $ensemble The ensemble.
     * @return Articles Returns this articles.
     */
    public function setEnsemble($ensemble) {
        $this->ensemble = $ensemble;
        return $this;
    }

    /**
     * Set the est multi tva.
     *
     * @param bool $estMultiTva The est multi tva.
     * @return Articles Returns this articles.
     */
    public function setEstMultiTva($estMultiTva) {
        $this->estMultiTva = $estMultiTva;
        return $this;
    }

    /**
     * Set the est occasion.
     *
     * @param bool $estOccasion The est occasion.
     * @return Articles Returns this articles.
     */
    public function setEstOccasion($estOccasion) {
        $this->estOccasion = $estOccasion;
        return $this;
    }

    /**
     * Set the facturation t t c.
     *
     * @param bool $facturationTTC The facturation t t c.
     * @return Articles Returns this articles.
     */
    public function setFacturationTTC($facturationTTC) {
        $this->facturationTTC = $facturationTTC;
        return $this;
    }

    /**
     * Set the famille achat.
     *
     * @param string $familleAchat The famille achat.
     * @return Articles Returns this articles.
     */
    public function setFamilleAchat($familleAchat) {
        $this->familleAchat = $familleAchat;
        return $this;
    }

    /**
     * Set the frais1.
     *
     * @param float $frais1 The frais1.
     * @return Articles Returns this articles.
     */
    public function setFrais1($frais1) {
        $this->frais1 = $frais1;
        return $this;
    }

    /**
     * Set the frais2.
     *
     * @param float $frais2 The frais2.
     * @return Articles Returns this articles.
     */
    public function setFrais2($frais2) {
        $this->frais2 = $frais2;
        return $this;
    }

    /**
     * Set the frais3.
     *
     * @param float $frais3 The frais3.
     * @return Articles Returns this articles.
     */
    public function setFrais3($frais3) {
        $this->frais3 = $frais3;
        return $this;
    }

    /**
     * Set the h a_ coeff pv p a.
     *
     * @param float $hA_CoeffPvPA The h a_ coeff pv p a.
     * @return Articles Returns this articles.
     */
    public function setHA_CoeffPvPA($hA_CoeffPvPA) {
        $this->hA_CoeffPvPA = $hA_CoeffPvPA;
        return $this;
    }

    /**
     * Set the h a_ coeff sur px achat.
     *
     * @param string $hA_CoeffSurPxAchat The h a_ coeff sur px achat.
     * @return Articles Returns this articles.
     */
    public function setHA_CoeffSurPxAchat($hA_CoeffSurPxAchat) {
        $this->hA_CoeffSurPxAchat = $hA_CoeffSurPxAchat;
        return $this;
    }

    /**
     * Set the h a_ date p a.
     *
     * @param DateTime $hA_DatePA The h a_ date p a.
     * @return Articles Returns this articles.
     */
    public function setHA_DatePA(DateTime $hA_DatePA = null) {
        $this->hA_DatePA = $hA_DatePA;
        return $this;
    }

    /**
     * Set the h a_ date p v.
     *
     * @param DateTime $hA_DatePV The h a_ date p v.
     * @return Articles Returns this articles.
     */
    public function setHA_DatePV(DateTime $hA_DatePV = null) {
        $this->hA_DatePV = $hA_DatePV;
        return $this;
    }

    /**
     * Set the h a_ dernier px achat.
     *
     * @param float $hA_DernierPxAchat The h a_ dernier px achat.
     * @return Articles Returns this articles.
     */
    public function setHA_DernierPxAchat($hA_DernierPxAchat) {
        $this->hA_DernierPxAchat = $hA_DernierPxAchat;
        return $this;
    }

    /**
     * Set the h a_ prix revient.
     *
     * @param float $hA_PrixRevient The h a_ prix revient.
     * @return Articles Returns this articles.
     */
    public function setHA_PrixRevient($hA_PrixRevient) {
        $this->hA_PrixRevient = $hA_PrixRevient;
        return $this;
    }

    /**
     * Set the h a_ prix revient net.
     *
     * @param float $hA_PrixRevientNet The h a_ prix revient net.
     * @return Articles Returns this articles.
     */
    public function setHA_PrixRevientNet($hA_PrixRevientNet) {
        $this->hA_PrixRevientNet = $hA_PrixRevientNet;
        return $this;
    }

    /**
     * Set the h a_ prix vente.
     *
     * @param float $hA_PrixVente The h a_ prix vente.
     * @return Articles Returns this articles.
     */
    public function setHA_PrixVente($hA_PrixVente) {
        $this->hA_PrixVente = $hA_PrixVente;
        return $this;
    }

    /**
     * Set the h a_ px achat brut.
     *
     * @param float $hA_PxAchatBrut The h a_ px achat brut.
     * @return Articles Returns this articles.
     */
    public function setHA_PxAchatBrut($hA_PxAchatBrut) {
        $this->hA_PxAchatBrut = $hA_PxAchatBrut;
        return $this;
    }

    /**
     * Set the h a_ remise achat1.
     *
     * @param float $hA_RemiseAchat1 The h a_ remise achat1.
     * @return Articles Returns this articles.
     */
    public function setHA_RemiseAchat1($hA_RemiseAchat1) {
        $this->hA_RemiseAchat1 = $hA_RemiseAchat1;
        return $this;
    }

    /**
     * Set the h a_ remise achat2.
     *
     * @param float $hA_RemiseAchat2 The h a_ remise achat2.
     * @return Articles Returns this articles.
     */
    public function setHA_RemiseAchat2($hA_RemiseAchat2) {
        $this->hA_RemiseAchat2 = $hA_RemiseAchat2;
        return $this;
    }

    /**
     * Set the h a_ remise achat3.
     *
     * @param float $hA_RemiseAchat3 The h a_ remise achat3.
     * @return Articles Returns this articles.
     */
    public function setHA_RemiseAchat3($hA_RemiseAchat3) {
        $this->hA_RemiseAchat3 = $hA_RemiseAchat3;
        return $this;
    }

    /**
     * Set the h a_ remise sup achat1.
     *
     * @param float $hA_RemiseSupAchat1 The h a_ remise sup achat1.
     * @return Articles Returns this articles.
     */
    public function setHA_RemiseSupAchat1($hA_RemiseSupAchat1) {
        $this->hA_RemiseSupAchat1 = $hA_RemiseSupAchat1;
        return $this;
    }

    /**
     * Set the h a_ remise sup achat2.
     *
     * @param float $hA_RemiseSupAchat2 The h a_ remise sup achat2.
     * @return Articles Returns this articles.
     */
    public function setHA_RemiseSupAchat2($hA_RemiseSupAchat2) {
        $this->hA_RemiseSupAchat2 = $hA_RemiseSupAchat2;
        return $this;
    }

    /**
     * Set the h a_ remise sup achat3.
     *
     * @param float $hA_RemiseSupAchat3 The h a_ remise sup achat3.
     * @return Articles Returns this articles.
     */
    public function setHA_RemiseSupAchat3($hA_RemiseSupAchat3) {
        $this->hA_RemiseSupAchat3 = $hA_RemiseSupAchat3;
        return $this;
    }

    /**
     * Set the hauteur.
     *
     * @param float $hauteur The hauteur.
     * @return Articles Returns this articles.
     */
    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
        return $this;
    }

    /**
     * Set the honoraires.
     *
     * @param bool $honoraires The honoraires.
     * @return Articles Returns this articles.
     */
    public function setHonoraires($honoraires) {
        $this->honoraires = $honoraires;
        return $this;
    }

    /**
     * Set the honoraires uniquement.
     *
     * @param bool $honorairesUniquement The honoraires uniquement.
     * @return Articles Returns this articles.
     */
    public function setHonorairesUniquement($honorairesUniquement) {
        $this->honorairesUniquement = $honorairesUniquement;
        return $this;
    }

    /**
     * Set the hors stock.
     *
     * @param bool $horsStock The hors stock.
     * @return Articles Returns this articles.
     */
    public function setHorsStock($horsStock) {
        $this->horsStock = $horsStock;
        return $this;
    }

    /**
     * Set the intitule1.
     *
     * @param string $intitule1 The intitule1.
     * @return Articles Returns this articles.
     */
    public function setIntitule1($intitule1) {
        $this->intitule1 = $intitule1;
        return $this;
    }

    /**
     * Set the intitule2.
     *
     * @param string $intitule2 The intitule2.
     * @return Articles Returns this articles.
     */
    public function setIntitule2($intitule2) {
        $this->intitule2 = $intitule2;
        return $this;
    }

    /**
     * Set the intitule3.
     *
     * @param string $intitule3 The intitule3.
     * @return Articles Returns this articles.
     */
    public function setIntitule3($intitule3) {
        $this->intitule3 = $intitule3;
        return $this;
    }

    /**
     * Set the intitule4.
     *
     * @param string $intitule4 The intitule4.
     * @return Articles Returns this articles.
     */
    public function setIntitule4($intitule4) {
        $this->intitule4 = $intitule4;
        return $this;
    }

    /**
     * Set the largeur.
     *
     * @param float $largeur The largeur.
     * @return Articles Returns this articles.
     */
    public function setLargeur($largeur) {
        $this->largeur = $largeur;
        return $this;
    }

    /**
     * Set the libelle interne.
     *
     * @param string $libelleInterne The libelle interne.
     * @return Articles Returns this articles.
     */
    public function setLibelleInterne($libelleInterne) {
        $this->libelleInterne = $libelleInterne;
        return $this;
    }

    /**
     * Set the longueur.
     *
     * @param float $longueur The longueur.
     * @return Articles Returns this articles.
     */
    public function setLongueur($longueur) {
        $this->longueur = $longueur;
        return $this;
    }

    /**
     * Set the lot serie autre.
     *
     * @param bool $lotSerieAutre The lot serie autre.
     * @return Articles Returns this articles.
     */
    public function setLotSerieAutre($lotSerieAutre) {
        $this->lotSerieAutre = $lotSerieAutre;
        return $this;
    }

    /**
     * Set the marge m i n i.
     *
     * @param float $margeMINI The marge m i n i.
     * @return Articles Returns this articles.
     */
    public function setMargeMINI($margeMINI) {
        $this->margeMINI = $margeMINI;
        return $this;
    }

    /**
     * Set the mini facturable.
     *
     * @param float $miniFacturable The mini facturable.
     * @return Articles Returns this articles.
     */
    public function setMiniFacturable($miniFacturable) {
        $this->miniFacturable = $miniFacturable;
        return $this;
    }

    /**
     * Set the modele code barre.
     *
     * @param string $modeleCodeBarre The modele code barre.
     * @return Articles Returns this articles.
     */
    public function setModeleCodeBarre($modeleCodeBarre) {
        $this->modeleCodeBarre = $modeleCodeBarre;
        return $this;
    }

    /**
     * Set the modele code barre f.
     *
     * @param string $modeleCodeBarreF The modele code barre f.
     * @return Articles Returns this articles.
     */
    public function setModeleCodeBarreF($modeleCodeBarreF) {
        $this->modeleCodeBarreF = $modeleCodeBarreF;
        return $this;
    }

    /**
     * Set the mt soumis tva2.
     *
     * @param float $mtSoumisTva2 The mt soumis tva2.
     * @return Articles Returns this articles.
     */
    public function setMtSoumisTva2($mtSoumisTva2) {
        $this->mtSoumisTva2 = $mtSoumisTva2;
        return $this;
    }

    /**
     * Set the mt tare.
     *
     * @param float $mtTare The mt tare.
     * @return Articles Returns this articles.
     */
    public function setMtTare($mtTare) {
        $this->mtTare = $mtTare;
        return $this;
    }

    /**
     * Set the multi tva avec remises.
     *
     * @param bool $multiTvaAvecRemises The multi tva avec remises.
     * @return Articles Returns this articles.
     */
    public function setMultiTvaAvecRemises($multiTvaAvecRemises) {
        $this->multiTvaAvecRemises = $multiTvaAvecRemises;
        return $this;
    }

    /**
     * Set the nature produit.
     *
     * @param string $natureProduit The nature produit.
     * @return Articles Returns this articles.
     */
    public function setNatureProduit($natureProduit) {
        $this->natureProduit = $natureProduit;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float $nbHeures The nb heures.
     * @return Articles Returns this articles.
     */
    public function setNbHeures($nbHeures) {
        $this->nbHeures = $nbHeures;
        return $this;
    }

    /**
     * Set the ne pas cumuler stats.
     *
     * @param bool $nePasCumulerStats The ne pas cumuler stats.
     * @return Articles Returns this articles.
     */
    public function setNePasCumulerStats($nePasCumulerStats) {
        $this->nePasCumulerStats = $nePasCumulerStats;
        return $this;
    }

    /**
     * Set the ne pas editer.
     *
     * @param bool $nePasEditer The ne pas editer.
     * @return Articles Returns this articles.
     */
    public function setNePasEditer($nePasEditer) {
        $this->nePasEditer = $nePasEditer;
        return $this;
    }

    /**
     * Set the ne plus commander.
     *
     * @param bool $nePlusCommander The ne plus commander.
     * @return Articles Returns this articles.
     */
    public function setNePlusCommander($nePlusCommander) {
        $this->nePlusCommander = $nePlusCommander;
        return $this;
    }

    /**
     * Set the neutre.
     *
     * @param bool $neutre The neutre.
     * @return Articles Returns this articles.
     */
    public function setNeutre($neutre) {
        $this->neutre = $neutre;
        return $this;
    }

    /**
     * Set the niveau apparition.
     *
     * @param int $niveauApparition The niveau apparition.
     * @return Articles Returns this articles.
     */
    public function setNiveauApparition($niveauApparition) {
        $this->niveauApparition = $niveauApparition;
        return $this;
    }

    /**
     * Set the niveau totalisation.
     *
     * @param string $niveauTotalisation The niveau totalisation.
     * @return Articles Returns this articles.
     */
    public function setNiveauTotalisation($niveauTotalisation) {
        $this->niveauTotalisation = $niveauTotalisation;
        return $this;
    }

    /**
     * Set the nomenclature ensemble.
     *
     * @param bool $nomenclatureEnsemble The nomenclature ensemble.
     * @return Articles Returns this articles.
     */
    public function setNomenclatureEnsemble($nomenclatureEnsemble) {
        $this->nomenclatureEnsemble = $nomenclatureEnsemble;
        return $this;
    }

    /**
     * Set the nomenclature europe.
     *
     * @param string $nomenclatureEurope The nomenclature europe.
     * @return Articles Returns this articles.
     */
    public function setNomenclatureEurope($nomenclatureEurope) {
        $this->nomenclatureEurope = $nomenclatureEurope;
        return $this;
    }

    /**
     * Set the num compte achat.
     *
     * @param string $numCompteAchat The num compte achat.
     * @return Articles Returns this articles.
     */
    public function setNumCompteAchat($numCompteAchat) {
        $this->numCompteAchat = $numCompteAchat;
        return $this;
    }

    /**
     * Set the num compte vente.
     *
     * @param string $numCompteVente The num compte vente.
     * @return Articles Returns this articles.
     */
    public function setNumCompteVente($numCompteVente) {
        $this->numCompteVente = $numCompteVente;
        return $this;
    }

    /**
     * Set the numero p j.
     *
     * @param int $numeroPJ The numero p j.
     * @return Articles Returns this articles.
     */
    public function setNumeroPJ($numeroPJ) {
        $this->numeroPJ = $numeroPJ;
        return $this;
    }

    /**
     * Set the p a m p.
     *
     * @param float $pAMP The p a m p.
     * @return Articles Returns this articles.
     */
    public function setPAMP($pAMP) {
        $this->pAMP = $pAMP;
        return $this;
    }

    /**
     * Set the p r m p.
     *
     * @param float $pRMP The p r m p.
     * @return Articles Returns this articles.
     */
    public function setPRMP($pRMP) {
        $this->pRMP = $pRMP;
        return $this;
    }

    /**
     * Set the param c d e.
     *
     * @param float $paramCDE The param c d e.
     * @return Articles Returns this articles.
     */
    public function setParamCDE($paramCDE) {
        $this->paramCDE = $paramCDE;
        return $this;
    }

    /**
     * Set the poids unitaire.
     *
     * @param float $poidsUnitaire The poids unitaire.
     * @return Articles Returns this articles.
     */
    public function setPoidsUnitaire($poidsUnitaire) {
        $this->poidsUnitaire = $poidsUnitaire;
        return $this;
    }

    /**
     * Set the prix achat_ c k p.
     *
     * @param string $prixAchat_CKP The prix achat_ c k p.
     * @return Articles Returns this articles.
     */
    public function setPrixAchat_CKP($prixAchat_CKP) {
        $this->prixAchat_CKP = $prixAchat_CKP;
        return $this;
    }

    /**
     * Set the prix fixe.
     *
     * @param bool $prixFixe The prix fixe.
     * @return Articles Returns this articles.
     */
    public function setPrixFixe($prixFixe) {
        $this->prixFixe = $prixFixe;
        return $this;
    }

    /**
     * Set the prix m i n i.
     *
     * @param float $prixMINI The prix m i n i.
     * @return Articles Returns this articles.
     */
    public function setPrixMINI($prixMINI) {
        $this->prixMINI = $prixMINI;
        return $this;
    }

    /**
     * Set the prix net.
     *
     * @param bool $prixNet The prix net.
     * @return Articles Returns this articles.
     */
    public function setPrixNet($prixNet) {
        $this->prixNet = $prixNet;
        return $this;
    }

    /**
     * Set the prix revient.
     *
     * @param float $prixRevient The prix revient.
     * @return Articles Returns this articles.
     */
    public function setPrixRevient($prixRevient) {
        $this->prixRevient = $prixRevient;
        return $this;
    }

    /**
     * Set the prix revient net.
     *
     * @param float $prixRevientNet The prix revient net.
     * @return Articles Returns this articles.
     */
    public function setPrixRevientNet($prixRevientNet) {
        $this->prixRevientNet = $prixRevientNet;
        return $this;
    }

    /**
     * Set the prix vente_ c k p.
     *
     * @param string $prixVente_CKP The prix vente_ c k p.
     * @return Articles Returns this articles.
     */
    public function setPrixVente_CKP($prixVente_CKP) {
        $this->prixVente_CKP = $prixVente_CKP;
        return $this;
    }

    /**
     * Set the provenance.
     *
     * @param string $provenance The provenance.
     * @return Articles Returns this articles.
     */
    public function setProvenance($provenance) {
        $this->provenance = $provenance;
        return $this;
    }

    /**
     * Set the px achat brut.
     *
     * @param float $pxAchatBrut The px achat brut.
     * @return Articles Returns this articles.
     */
    public function setPxAchatBrut($pxAchatBrut) {
        $this->pxAchatBrut = $pxAchatBrut;
        return $this;
    }

    /**
     * Set the px achat colis.
     *
     * @param bool $pxAchatColis The px achat colis.
     * @return Articles Returns this articles.
     */
    public function setPxAchatColis($pxAchatColis) {
        $this->pxAchatColis = $pxAchatColis;
        return $this;
    }

    /**
     * Set the px achat en devise.
     *
     * @param float $pxAchatEnDevise The px achat en devise.
     * @return Articles Returns this articles.
     */
    public function setPxAchatEnDevise($pxAchatEnDevise) {
        $this->pxAchatEnDevise = $pxAchatEnDevise;
        return $this;
    }

    /**
     * Set the px unit a editer.
     *
     * @param bool $pxUnitAEditer The px unit a editer.
     * @return Articles Returns this articles.
     */
    public function setPxUnitAEditer($pxUnitAEditer) {
        $this->pxUnitAEditer = $pxUnitAEditer;
        return $this;
    }

    /**
     * Set the px vente colis.
     *
     * @param bool $pxVenteColis The px vente colis.
     * @return Articles Returns this articles.
     */
    public function setPxVenteColis($pxVenteColis) {
        $this->pxVenteColis = $pxVenteColis;
        return $this;
    }

    /**
     * Set the px vente ht euro.
     *
     * @param float $pxVenteHtEuro The px vente ht euro.
     * @return Articles Returns this articles.
     */
    public function setPxVenteHtEuro($pxVenteHtEuro) {
        $this->pxVenteHtEuro = $pxVenteHtEuro;
        return $this;
    }

    /**
     * Set the px vente ht frf.
     *
     * @param float $pxVenteHtFrf The px vente ht frf.
     * @return Articles Returns this articles.
     */
    public function setPxVenteHtFrf($pxVenteHtFrf) {
        $this->pxVenteHtFrf = $pxVenteHtFrf;
        return $this;
    }

    /**
     * Set the px vente ttc euro.
     *
     * @param float $pxVenteTtcEuro The px vente ttc euro.
     * @return Articles Returns this articles.
     */
    public function setPxVenteTtcEuro($pxVenteTtcEuro) {
        $this->pxVenteTtcEuro = $pxVenteTtcEuro;
        return $this;
    }

    /**
     * Set the px vente ttc frf.
     *
     * @param float $pxVenteTtcFrf The px vente ttc frf.
     * @return Articles Returns this articles.
     */
    public function setPxVenteTtcFrf($pxVenteTtcFrf) {
        $this->pxVenteTtcFrf = $pxVenteTtcFrf;
        return $this;
    }

    /**
     * Set the qte a editer.
     *
     * @param bool $qteAEditer The qte a editer.
     * @return Articles Returns this articles.
     */
    public function setQteAEditer($qteAEditer) {
        $this->qteAEditer = $qteAEditer;
        return $this;
    }

    /**
     * Set the qte eco commande.
     *
     * @param float $qteEcoCommande The qte eco commande.
     * @return Articles Returns this articles.
     */
    public function setQteEcoCommande($qteEcoCommande) {
        $this->qteEcoCommande = $qteEcoCommande;
        return $this;
    }

    /**
     * Set the qte hab commande.
     *
     * @param float $qteHabCommande The qte hab commande.
     * @return Articles Returns this articles.
     */
    public function setQteHabCommande($qteHabCommande) {
        $this->qteHabCommande = $qteHabCommande;
        return $this;
    }

    /**
     * Set the qte max facture.
     *
     * @param float $qteMaxFacture The qte max facture.
     * @return Articles Returns this articles.
     */
    public function setQteMaxFacture($qteMaxFacture) {
        $this->qteMaxFacture = $qteMaxFacture;
        return $this;
    }

    /**
     * Set the qte min commande.
     *
     * @param float $qteMinCommande The qte min commande.
     * @return Articles Returns this articles.
     */
    public function setQteMinCommande($qteMinCommande) {
        $this->qteMinCommande = $qteMinCommande;
        return $this;
    }

    /**
     * Set the regroup fact.
     *
     * @param string $regroupFact The regroup fact.
     * @return Articles Returns this articles.
     */
    public function setRegroupFact($regroupFact) {
        $this->regroupFact = $regroupFact;
        return $this;
    }

    /**
     * Set the regroup fact t p.
     *
     * @param int $regroupFactTP The regroup fact t p.
     * @return Articles Returns this articles.
     */
    public function setRegroupFactTP($regroupFactTP) {
        $this->regroupFactTP = $regroupFactTP;
        return $this;
    }

    /**
     * Set the remise1en montant.
     *
     * @param bool $remise1enMontant The remise1en montant.
     * @return Articles Returns this articles.
     */
    public function setRemise1enMontant($remise1enMontant) {
        $this->remise1enMontant = $remise1enMontant;
        return $this;
    }

    /**
     * Set the remise2en montant.
     *
     * @param bool $remise2enMontant The remise2en montant.
     * @return Articles Returns this articles.
     */
    public function setRemise2enMontant($remise2enMontant) {
        $this->remise2enMontant = $remise2enMontant;
        return $this;
    }

    /**
     * Set the remise achat1.
     *
     * @param float $remiseAchat1 The remise achat1.
     * @return Articles Returns this articles.
     */
    public function setRemiseAchat1($remiseAchat1) {
        $this->remiseAchat1 = $remiseAchat1;
        return $this;
    }

    /**
     * Set the remise achat2.
     *
     * @param float $remiseAchat2 The remise achat2.
     * @return Articles Returns this articles.
     */
    public function setRemiseAchat2($remiseAchat2) {
        $this->remiseAchat2 = $remiseAchat2;
        return $this;
    }

    /**
     * Set the remise achat3.
     *
     * @param float $remiseAchat3 The remise achat3.
     * @return Articles Returns this articles.
     */
    public function setRemiseAchat3($remiseAchat3) {
        $this->remiseAchat3 = $remiseAchat3;
        return $this;
    }

    /**
     * Set the remise sup achat1.
     *
     * @param float $remiseSupAchat1 The remise sup achat1.
     * @return Articles Returns this articles.
     */
    public function setRemiseSupAchat1($remiseSupAchat1) {
        $this->remiseSupAchat1 = $remiseSupAchat1;
        return $this;
    }

    /**
     * Set the remise sup achat1 en montant.
     *
     * @param bool $remiseSupAchat1EnMontant The remise sup achat1 en montant.
     * @return Articles Returns this articles.
     */
    public function setRemiseSupAchat1EnMontant($remiseSupAchat1EnMontant) {
        $this->remiseSupAchat1EnMontant = $remiseSupAchat1EnMontant;
        return $this;
    }

    /**
     * Set the remise sup achat2.
     *
     * @param float $remiseSupAchat2 The remise sup achat2.
     * @return Articles Returns this articles.
     */
    public function setRemiseSupAchat2($remiseSupAchat2) {
        $this->remiseSupAchat2 = $remiseSupAchat2;
        return $this;
    }

    /**
     * Set the remise sup achat2 en montant.
     *
     * @param bool $remiseSupAchat2EnMontant The remise sup achat2 en montant.
     * @return Articles Returns this articles.
     */
    public function setRemiseSupAchat2EnMontant($remiseSupAchat2EnMontant) {
        $this->remiseSupAchat2EnMontant = $remiseSupAchat2EnMontant;
        return $this;
    }

    /**
     * Set the remise sup achat3.
     *
     * @param float $remiseSupAchat3 The remise sup achat3.
     * @return Articles Returns this articles.
     */
    public function setRemiseSupAchat3($remiseSupAchat3) {
        $this->remiseSupAchat3 = $remiseSupAchat3;
        return $this;
    }

    /**
     * Set the remise sup achat3 en montant.
     *
     * @param bool $remiseSupAchat3EnMontant The remise sup achat3 en montant.
     * @return Articles Returns this articles.
     */
    public function setRemiseSupAchat3EnMontant($remiseSupAchat3EnMontant) {
        $this->remiseSupAchat3EnMontant = $remiseSupAchat3EnMontant;
        return $this;
    }

    /**
     * Set the remises interdites.
     *
     * @param bool $remisesInterdites The remises interdites.
     * @return Articles Returns this articles.
     */
    public function setRemisesInterdites($remisesInterdites) {
        $this->remisesInterdites = $remisesInterdites;
        return $this;
    }

    /**
     * Set the soumis certif.
     *
     * @param bool $soumisCertif The soumis certif.
     * @return Articles Returns this articles.
     */
    public function setSoumisCertif($soumisCertif) {
        $this->soumisCertif = $soumisCertif;
        return $this;
    }

    /**
     * Set the ss famille achat.
     *
     * @param string $ssFamilleAchat The ss famille achat.
     * @return Articles Returns this articles.
     */
    public function setSsFamilleAchat($ssFamilleAchat) {
        $this->ssFamilleAchat = $ssFamilleAchat;
        return $this;
    }

    /**
     * Set the suivi stock.
     *
     * @param bool $suiviStock The suivi stock.
     * @return Articles Returns this articles.
     */
    public function setSuiviStock($suiviStock) {
        $this->suiviStock = $suiviStock;
        return $this;
    }

    /**
     * Set the tare_ v a t.
     *
     * @param string $tare_VAT The tare_ v a t.
     * @return Articles Returns this articles.
     */
    public function setTare_VAT($tare_VAT) {
        $this->tare_VAT = $tare_VAT;
        return $this;
    }

    /**
     * Set the taux alcool.
     *
     * @param float $tauxAlcool The taux alcool.
     * @return Articles Returns this articles.
     */
    public function setTauxAlcool($tauxAlcool) {
        $this->tauxAlcool = $tauxAlcool;
        return $this;
    }

    /**
     * Set the taux devise achat.
     *
     * @param float $tauxDeviseAchat The taux devise achat.
     * @return Articles Returns this articles.
     */
    public function setTauxDeviseAchat($tauxDeviseAchat) {
        $this->tauxDeviseAchat = $tauxDeviseAchat;
        return $this;
    }

    /**
     * Set the tva encaissement.
     *
     * @param bool $tvaEncaissement The tva encaissement.
     * @return Articles Returns this articles.
     */
    public function setTvaEncaissement($tvaEncaissement) {
        $this->tvaEncaissement = $tvaEncaissement;
        return $this;
    }

    /**
     * Set the tx commission.
     *
     * @param float $txCommission The tx commission.
     * @return Articles Returns this articles.
     */
    public function setTxCommission($txCommission) {
        $this->txCommission = $txCommission;
        return $this;
    }

    /**
     * Set the type arrondi.
     *
     * @param string $typeArrondi The type arrondi.
     * @return Articles Returns this articles.
     */
    public function setTypeArrondi($typeArrondi) {
        $this->typeArrondi = $typeArrondi;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param bool $typeHeure The type heure.
     * @return Articles Returns this articles.
     */
    public function setTypeHeure($typeHeure) {
        $this->typeHeure = $typeHeure;
        return $this;
    }

    /**
     * Set the type unite.
     *
     * @param string $typeUnite The type unite.
     * @return Articles Returns this articles.
     */
    public function setTypeUnite($typeUnite) {
        $this->typeUnite = $typeUnite;
        return $this;
    }

    /**
     * Set the unite activite.
     *
     * @param bool $uniteActivite The unite activite.
     * @return Articles Returns this articles.
     */
    public function setUniteActivite($uniteActivite) {
        $this->uniteActivite = $uniteActivite;
        return $this;
    }

    /**
     * Set the variante.
     *
     * @param bool $variante The variante.
     * @return Articles Returns this articles.
     */
    public function setVariante($variante) {
        $this->variante = $variante;
        return $this;
    }

    /**
     * Set the vente par colis.
     *
     * @param bool $venteParColis The vente par colis.
     * @return Articles Returns this articles.
     */
    public function setVenteParColis($venteParColis) {
        $this->venteParColis = $venteParColis;
        return $this;
    }

    /**
     * Set the volume.
     *
     * @param float $volume The volume.
     * @return Articles Returns this articles.
     */
    public function setVolume($volume) {
        $this->volume = $volume;
        return $this;
    }
}
