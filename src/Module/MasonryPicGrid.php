<?php

namespace Lautschrift\MasonryPicBundle\Module;

class MasonryPicGrid extends \ContentElement
{
    /**
     * @var string
     */
    protected $strTemplate = 'ce_masonrygridstart';

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');

            //$template->wildcard = '### '.utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['masonrypic'][0]).' ###';
            $template->wildcard = "### Masonry Grid START ###";
            $template->title = $this->headline;
            $template->id = $this->id;
            $template->link = $this->name;
            $template->href = 'contao/main.php?do=themes&amp;table=tl_content&amp;act=edit&amp;id='.$this->id;

            return $template->parse();
        }

        return parent::generate();
    }

    /**
     * Generates the module.
     */

     /**
     * Erzeugt die Ausgebe für das Frontend.
     * @return string
     */

    protected function compile()
    {
        if ($this->ls_masonry_properties != '') {
            $this->Template->arrProperties = deserialize($this->ls_masonry_properties, true);
        }
    }
}
