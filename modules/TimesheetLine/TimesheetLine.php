<?php

class TimesheetLine extends SugarBean {
    public $table_name = "time_2_invoice_line_item";
    public $object_name = "TimesheetLine";
    public $module_dir = 'TimesheetLine';
    //public $disable_vardefs = true;
    public $disable_custom_fields = true;
    public $timesheet_id;
    public $mon;
    public $tue;
    public $wed;
    public $thu;
    public $fri;
    public $sat;
    public $sun;
    public $project_id;
    public $ticket_ref;
    public $comments;
    public $deleted;
    public $column_fields = array(
        "id",
        "timesheet_id",
        "mon",
        "tue",
        "wed",
        "thu",
        "fri",
        "sat",
        "sun",
        "project_id",
        "ticket_ref",
        "comments",
        "deleted"
    );
    
    public $field_defs = array (
        'timesheet_name' => array(
              'name' => 'timesheet_id',
              'vname' => 'LBL_TIMESHEET_ID',
              'type' => 'id',
              'comment' => 'FK of time_2_invoice',
            ),
        'mon' => array(
              'name' => 'mon',
              'vname' => 'LBL_MON',
              'type' => 'number',
              'comment' => 'Monday work',
            ),
        'tue' => array(
                'name' => 'tue',
                'vname' => 'LBL_TUE',
                'type' => 'number',
                'comment' => 'Tuesday work',
              ),
        'wed' => array(
                'name' => 'wed',
                'vname' => 'LBL_WED',
                'type' => 'number',
                'comment' => 'Wednesday work',
              ),
        'thu' => array(
                'name' => 'thu',
                'vname' => 'LBL_THU',
                'type' => 'number',
                'comment' => 'Thursday work',
              ),
        'fri' => array(
                'name' => 'fri',
                'vname' => 'LBL_FRI',
                'type' => 'number',
                'comment' => 'Friday work',
              ),
        'sat' => array(
                'name' => 'sat',
                'vname' => 'LBL_SAT',
                'type' => 'number',
                'comment' => 'Saturday work',
              ),
        'sun' => array(
                'name' => 'sun',
                'vname' => 'LBL_SUN',
                'type' => 'number',
                'comment' => 'Sunday work',
              ),
        'project_id' => array(
                'name' => 'project_id',
                'vname' => 'LBL_PROJECT_ID',
                'type' => 'id',
                'comment' => 'FK of project',
              ),
        'ticket_ref' => array(
                'name' => 'ticket_ref',
                'vname' => 'LBL_TICKET_REF',
                'type' => 'varchar',
                'len' => 50,
                'comment' => 'Ticket Reference',
              ),
        'comments' => array(
                'name' => 'comments',
                'vname' => 'LBL_COMMENTS',
                'type' => 'varchar',
                'len' => 250,
                'comment' => 'Comments',
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