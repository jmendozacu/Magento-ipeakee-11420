<?php
class TTS_Brands_Lib_Varien_Data_Form_Element_ExtendedLabel extends Varien_Data_Form_Element_Abstract
{
    public function __construct($attributes=array())
    {
        parent::__construct($attributes);
        $this->setType('label');
    }

    public function getElementHtml()
    {
        $html = '<img src="'.Mage::getBaseUrl('skin'). 'adminhtml/default/default/images/spacer.gif" id="image-paceholder"/>
		<script language="JavaScript" type="text/javascript">
/*<![CDATA[*/
if ($("image").value.length) {
	$("image-paceholder").src = "'.Mage::getBaseUrl('media') . 'catalog/brands/"+$("image").value;
}
/*]]>*/
</script>';
        return $html;
    }

    public function getLabelHtml($idSuffix = ''){
        if (!is_null($this->getLabel())) {
            $html = '<label for="'.$this->getHtmlId() . $idSuffix . '" style="'.$this->getLabelStyle().'">'.$this->getLabel()
                . ( $this->getRequired() ? ' <span class="required">*</span>' : '' ).'</label>'."\n";
        }
        else {
            $html = '';
        }
        return $html;
    }
}