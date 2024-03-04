<?php

require_once 'mailstorepermissions.civix.php';
use CRM_Mailstorepermissions_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function mailstorepermissions_civicrm_config(&$config) {
  _mailstorepermissions_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function mailstorepermissions_civicrm_install() {
  _mailstorepermissions_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function mailstorepermissions_civicrm_enable() {
  _mailstorepermissions_civix_civicrm_enable();
}

/**
 * Patch the Mailstore class.
 */
function mailstorepermissions_patchwork_apply_patch($file, &$code) {
  if ($file === '/CRM/Mailing/MailStore.php') {
    $code = str_replace(
      'if (!mkdir($dir . DIRECTORY_SEPARATOR . $sub, 0700, TRUE)) {',
      'if (!mkdir($dir . DIRECTORY_SEPARATOR . $sub, 02770, TRUE)) {',
      $code);
  }
}
