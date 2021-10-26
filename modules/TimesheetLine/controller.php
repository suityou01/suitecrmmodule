<?php
class TimesheetLineController extends SugarController
{
    public function action_listview()
    {   
        //How do we do JOINS and AGGREGATES?
        //SELECT id, timesheet_name, date_from, date_to,
        //(SELECT SUM(mon) + SUM(tue) + SUM(wed) + SUM(thu) + SUM(fri) + SUM(sat) + SUM(sun) FROM time_2_invoice_line_item tili WHERE timesheet_id = ti.id) AS Days
        //FROM time_2_invoice ti;
        $t2iBean = BeanFactory::newBean('TimesheetLine');
        $bean = BeanFactory::getBean('TimesheetLine', 1);
        //$GLOBALS['log']->debug(var_dump($bean));
        $this->view_object_map['mon'] = $bean->mon;
        return parent::action_listview();
    }    
}    