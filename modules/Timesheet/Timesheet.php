<?php

class Timesheet extends SugarBean {

    public $field_name_map;

    public $table_name = "time_2_invoice";
    public $object_name = "Timesheet";
    public $module_dir = 'Timesheet';
    //public $disable_vardefs = true;
    public $disable_custom_fields = true;
    public $timesheet_name;
    public $date_to;
    public $date_from;
    public $deleted;
    public $column_fields = array(
        "id",
        "timesheet_name",
        "date_from",
        "date_to",
        "deleted"
    );
    
    public $field_defs = array (
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
        'deleted' =>array(
            'name' => 'deleted',
            'vname' => 'LBL_DELETED',
            'type' => 'bool',
            'default' => '0',
            'reportable'=>false,
            'comment' => 'Record deletion indicator'
        ),
    );
    

    public function __construct()
    {
        global $dictionary;
        parent::__construct();
    }
    /**
         * bean_implements
         * Override method to support ACL roles
         */
    public function bean_implements($interface)
    {
        return false;
    }
}
