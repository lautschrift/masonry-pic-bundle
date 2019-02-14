<?php
// dca/tl_content.php
/**
 * Table tl_content
 */
$strName = 'tl_content';


/* Palettes */
$GLOBALS['TL_DCA'][$strName]['palettes']['masonrypic'] = '{type_legend},type,headline;{source_legend},singleSRC,size,imagemargin,overwriteMeta;{template_legend:hide},customTpl;{description_legend},ls_masonry_sign,ls_masonry_properties,ls_masonry_link;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop;';


/* Fields */
$GLOBALS['TL_DCA'][$strName]['fields']['ls_masonry_sign'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['ls_masonry_sign'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'sql'                     => "text NOT NULL"
);

$GLOBALS['TL_DCA'][$strName]['fields']['ls_masonry_properties'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['ls_masonry_properties'],
    'exclude'                 => true,
    'inputType'               => 'text',
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

$GLOBALS['TL_DCA'][$strName]['fields']['customTpl'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['customTpl'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_masonry_content', 'getElementTemplates'),
	'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default 'fe_masonryPic'"
);

class tl_masonry_content extends Backend
{
  public function getElementTemplates(DataContainer $dc)
  {
    return $this->getTemplateGroup('ce_' . $dc->activeRecord->type);
  }
}
