<?php

function smarty_block_oxhasrights($params, $content, &$smarty, &$repeat) {
  $oUser = oxNew(\OxidEsales\Eshop\Application\Model\User::class);
  $activeUser = $oUser->loadActiveUser();
  if($activeUser) return $content;
  return "";
}
