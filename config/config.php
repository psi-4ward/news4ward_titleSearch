<?php

/**
 * @copyright 4ward.media 2013 <http://www.4wardmedia.de>
 * @author Christoph Wiechert <wio@psitrax.de>
 */

// News4wardList Filter HOOK
$GLOBALS['TL_HOOKS']['News4wardListFilter'][] = array('\News4ward\TitleSearch\Helper', 'titleSearchFilter');
