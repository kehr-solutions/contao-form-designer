<?php

declare(strict_types=1);

/**
 * Contao Form Designer.
 *
 * @filesource
 */

// Operations
array_insert(
    $GLOBALS['TL_DCA']['tl_theme']['list']['operations'],
    -1,
    [
        'form_layout' => [
            'href'  => 'table=tl_form_layout',
            'label' => &$GLOBALS['TL_LANG']['tl_theme']['form_layout'],
            'icon'  => 'bundles/netzmachtcontaoformdesigner/img/form.gif',
        ],
    ]
);
