<?php
// dca/tl_content.php
/**
 * Table tl_content
 */
$strName = 'tl_content';

/* Palettes */
$GLOBALS['TL_DCA'][$strName]['palettes']['masonrypic'] = '{type_legend},type,headline;{description_legend},description,properties;{invisible_legend:hide},invisible,start,stop;';

/* Fields */
$GLOBALS['TL_DCA'][$strName]['fields']['description'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['description'],
    'exclude'                 => true,
    'inputType'               => 'textarea',
    'eval'                    => array('rte' => 'tinyMCE'),
    'sql'                     => "text NOT NULL"
);

$GLOBALS['TL_DCA'][$strName]['fields']['properties'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['properties'],
    'exclude'                 => true,
    'inputType'               => 'textarea',
    'eval'                    => array('rte' => 'tinyMCE'),
    'sql'                     => "text NOT NULL"
);
