<?php
class TimesheetViewList extends SugarView{
    public function display()
    {
        $this->ss->assign('timesheet_name', $this->view_object_map['timesheet_name']);
        $this->ss->assign('blah', "Blah blah blah");
        $timeSheetView = $this->ss->fetch('modules/Timesheet/tpls/view.list.tpl');
        echo "Timesheet_name=" . $this->view_object_map['timesheet_name'];
        echo $timeSheetView;
        
    }
}    