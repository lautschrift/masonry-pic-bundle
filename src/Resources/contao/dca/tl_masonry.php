<?php

/**
 * Table tl_masonry
 */
$strName = 'tl_masonry';


$GLOBALS['TL_DCA'][$strName] = array
(
    /* Palettes */
   'config' => array
   (
       'dataContainer'                   => 'Table',
       'enableVersioning'                => true,
       'sql' => array
       (
           'keys' => array
           (
               'id' => 'primary'
           )
       )
   ),

    /* Palettes */
    'palettes' => array
    (
        '__selector__'  => array(''),
        'default'       => '{type_legend},type,headline;{description_legend,}description,linkto, pic;{invisible_legend:hide},invisible,start,stop;'
    ),

    // Subpalettes
    'subpalettes' => array
    (
        ''                            => ''
    ),

    /* Fields */
    'fields' => array
    (
        'id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL auto_increment"
        ),
        
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
