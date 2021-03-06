<?php

/***************************************************************************\
 *  SPIP, Système de publication pour l'internet                           *
 *                                                                         *
 *  Copyright © avec tendresse depuis 2001                                 *
 *  Arnaud Martin, Antoine Pitrou, Philippe Rivière, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribué sous licence GNU/GPL.     *
 *  Pour plus de détails voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
} // securiser

/*
Ce jeu d'URLs est une variation de inc-urls-propres mais les urls
de differents types ne sont PAS distinguees par des marqueurs (_,-,+, etc.) ;
*/

# donner un exemple d'url pour le formulaire de choix
define('URLS_LIBRES_EXEMPLE', 'Titre-de-l-article Rubrique');
# specifier le form de config utilise pour ces urls
define('URLS_LIBRES_CONFIG', 'propres');

if (!defined('_MARQUEUR_URL')) {
	define('_MARQUEUR_URL', false);
}

// https://code.spip.net/@urls_libres_dist
function urls_libres_dist($i, &$entite, $args = '', $ancre = '') {
	$f = charger_fonction('propres', 'urls');

	return $f($i, $entite, $args, $ancre);
}
