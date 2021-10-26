<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['Timesheet'] =
array(
  'table' => 'time_2_invoice',
  'audited'=>true,
  'unified_search' => true,
  'unified_search_default_enabled' => true,
  'duplicate_merge'=>true,
  'comment' => 'Timesheets become invoices ...',
  'fields' => array (
    'id'=>array(
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'int',
      'len' => '11',
      'isnull' => 'false',
      'auto_increment' => true,
      'reportable'=>true,
    ),
    'timesheet_name' => array(
          'name' => 'timesheet_name',
          'vname' => 'LBL_TIMESHEET_NAME',
          'type' => 'varchar',
          'len' => 50,
          'comment' => 'Name of the timesheet',
        ),
    'date_from' => array(
          'name' => 'date_from',
          'vname' => 'LBL_DATE_FROM',
          'type' => 'timestamp',
          'comment' => 'Date of the start of the timesheet',
        ),
    'date_to' => array(
          'name' => 'date_to',
          'vname' => 'LBL_DATE_TO',
          'type' => 'timestamp',
          'comment' => 'Date of the end of the timesheet',
        ),
  ),
  'indices' => array (
   //Snipped for brevity. See the indices section.
  ),
  'relationships' => array (
   //Snipped for brevity. See the relationship section.
  ),
   //This enables optimistic locking for Saves From EditView
  'optimistic_locking'=>true,
);
