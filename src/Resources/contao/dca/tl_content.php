<?php
// dca/tl_content.php
/**
 * Table tl_content
 */
$strName = 'tl_content';


/* Palettes */
$GLOBALS['TL_DCA'][$strName]['palettes']['masonrypic'] = '{type_legend},type,headline;{description_legend},ls_masonry_properties,ls_masonry_link;{invisible_legend:hide},invisible,start,stop;';


/* Fields */
$GLOBALS['TL_DCA'][$strName]['fields']['ls_masonry_properties'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['ls_masonry_properties'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class' => 'w50'),
    'sql'                     => "text NOT NULL"
);

$GLOBALS['TL_DCA'][$strName]['fields']['ls_masonry_link'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['ls_masonry_link'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'dcaPicker'=>true, 'tl_class'=>'w50 wizard'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
