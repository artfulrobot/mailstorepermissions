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
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function mailstorepermissions_civicrm_xmlMenu(&$files) {
  _mailstorepermissions_civix_civicrm_xmlMenu($files);
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
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function mailstorepermissions_civicrm_postInstall() {
  _mailstorepermissions_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function mailstorepermissions_civicrm_uninstall() {
  _mailstorepermissions_civix_civicrm_uninstall();
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
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function mailstorepermissions_civicrm_disable() {
  _mailstorepermissions_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function mailstorepermissions_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _mailstorepermissions_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function mailstorepermissions_civicrm_managed(&$entities) {
  _mailstorepermissions_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function mailstorepermissions_civicrm_caseTypes(&$caseTypes) {
  _mailstorepermissions_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function mailstorepermissions_civicrm_angularModules(&$angularModules) {
  _mailstorepermissions_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function mailstorepermissions_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _mailstorepermissions_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function mailstorepermissions_civicrm_entityTypes(&$entityTypes) {
  _mailstorepermissions_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Patch the Mailstore class.
 */
function patchwork_patchwork_apply_patch($file, &$code) {
  if ($file === '/CRM/Mailing/Mailstore.php') {
    $code = str_replace(
      'if (!mkdir($dir . DIRECTORY_SEPARATOR . $sub, 0700, TRUE)) {',
      'if (!mkdir($dir . DIRECTORY_SEPARATOR . $sub, 02770, TRUE)) {',
      $code);
  }
}
