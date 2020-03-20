<?php
namespace SeemannIT\HidePricesModule\Core;

class UtilsView extends UtilsView_parent {
	protected function _fillCommonSmartyProperties($oSmarty) {
		parent::_fillCommonSmartyProperties($oSmarty);
    $oConfig = \OxidEsales\Eshop\Core\Registry::getConfig();
		array_unshift($oSmarty->plugins_dir, $oConfig->getModulesDir() . "seemannit/hideprices/Smarty/Plugin");
	}
}
