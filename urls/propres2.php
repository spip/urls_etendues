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
Ce jeu d'URLs est une variation de inc-urls-propres, qui ajoute
le suffixe '.html' aux adresses ;
*/

# donner un exemple d'url pour le formulaire de choix
define('URLS_PROPRES2_EXEMPLE', 'Titre-de-l-article.html -Rubrique-.html');
# specifier le form de config utilise pour ces urls
define('URLS_PROPRES2_CONFIG', 'propres');

if (!defined('_terminaison_urls_propres')) {
	define('_terminaison_urls_propres', '.html');
}

// https://code.spip.net/@urls_propres2_dist
function urls_propres2_dist($i, &$entite, $args = '', $ancre = '') {
	$f = charger_fonction('propres', 'urls');

	return $f($i, $entite, $args, $ancre);
}
