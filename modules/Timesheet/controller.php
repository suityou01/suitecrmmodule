<?php
class TimesheetController extends SugarController
{
    public function action_listview()
    {                
        $t2iBean = BeanFactory::newBean('Timesheet');
        $bean = BeanFactory::getBean('Timesheet', 1);
        //$GLOBALS['log']->debug(var_dump($bean));
        $this->view_object_map['timesheet_name'] = $bean->timesheet_name;
        return parent::action_listview();
    }    
}    