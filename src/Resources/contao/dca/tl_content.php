<?php

/**
 * Table tl_content
 */
$strName = 'tl_content';


$GLOBALS['TL_DCA'][$strName] = array
(

    /* Palettes */
    'palettes' => array
    (
        
        'default'       => '{type_legend},type,headline;{description_legend,}ls_masonry_properties,ls_masonry_link;{invisible_legend:hide},invisible,start,stop;'
    ),

    // Subpalettes
    'subpalettes' => array
    (
        ''                            => ''
    ),

    /* Fields */
    'fields' => array
    (

        'ls_masonry_description' => array
        (
            'label'                   => &$GLOBALS['TL_LANG'][$strName]['ls_masonry_description'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'sql'                     => "text NOT NULL"
        ),

        'ls_masonry_link' => array
        (
            'label'                   => &$GLOBALS['TL_LANG'][$strName]['ls_masonry_properties'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'dcaPicker'=>true, 'tl_class'=>'w50 wizard'),
            'sql'                     => "varchar(255) NOT NULL default ''"
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
