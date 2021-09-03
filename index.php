<?php
include("vue/v_gabarit_entete.php") ;


if(!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];

switch($uc)
{
    case 'accueil':
    {include("vue/v_accueil.php");
        break;
    }
    case 'formAjouter':
    {include("vue/v_ajouter.php");
        break;
    }
    case 'formSupprimer' :
    {
        $message="Site en construction";
        include("vue/v_erreur.php");
        break;
    }

}

include("vue/v_gabarit_pied.php") ;