<?php
// dca/tl_masonry.php
/**
 * Table tl_content
 */
$strName = 'tl_masonry';


$GLOBALS['TL_DCA'][$strName] = array
(
    /* Palettes */
    'palettes' => array
    (
        '__selector__'  => array(''),
        'default'       => '{type_legend},type,headline;{description_legend,}description,linkto, pic;{invisible_legend:hide},invisible,start,stop;'
    ),

    /* Fields */
    'fields' => array
    (
        'description' => array
        (
            'label'                   => &$GLOBALS['TL_LANG'][$strName]['description'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'sql'                     => "text NOT NULL"
        ),

        'linkto' => array
        (
            'label'                   => &$GLOBALS['TL_LANG'][$strName]['properties'],
            'exclude'                 => true,
            'inputType'               => 'hyperlink',
            'sql'                     => "text NOT NULL"
        )

    )
);



/* Fields
$GLOBALS['TL_DCA'][$strName]['fields']['description'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['description'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'sql'                     => "text NOT NULL"
);

$GLOBALS['TL_DCA'][$strName]['fields']['linkto'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['properties'],
    'exclude'                 => true,
    'inputType'               => 'hyperlink',
    'sql'                     => "text NOT NULL"
);

$GLOBALS['TL_DCA'][$strName]['fields']['pic'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['pic'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'sql'                     => "text NOT NULL"
);
*/
