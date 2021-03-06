<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.6                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2015                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 *
 * Generated from xml/schema/CRM/Entitymessages/EntityMessage.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

class CRM_Entitymessages_DAO_EntityMessage extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_entity_message';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = NULL;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = NULL;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = NULL;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = NULL;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = NULL;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = true;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   *
   * @var int unsigned
   */
  public $entity_id;
  /**
   * Links to an entity_table like civicrm_financial_type
   *
   * @var string
   */
  public $entity_type;

  /**
   * Class constructor.
   */
  function __construct()
  {
    $this->__table = 'civicrm_entity_message';
    parent::__construct();
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('EntityMessage ID') ,
          'required' => true,
        ) ,
        'entity_id' => array(
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Linked Entity') ,
        ),
        'entity_type' => array(
          'name' => 'entity_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Type') ,
          'description' => 'Links to an entity_table like civicrm_financial_type',
          'required' => true,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'import' => true,
          'where' => 'civicrm_entity_message.entity_type',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
        ),
        'message_id' => array(
          'name' => 'message_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Linked Message') ,
          'pseudoconstant' => array(
            'table' => 'civicrm_message',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          )
        ),
        'label' => array(
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Message Label') ,
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
        ),
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Message Name (unique per entity)'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
        ),
        'is_smarty_render' => array(
          'name' => 'is_smarty_render',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Render using smarty? This has security and performance implications') ,
        ),
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'entity_id' => 'entity_id',
        'entity_type' => 'entity_type',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['entity_message'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['entity_message'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
