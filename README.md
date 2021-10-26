# suitecrmmodule

Working example

This is my best guess at how to put together 2 linked modules, using smarty templates.

# Contents

## Timesheet

| path          | description                                                                                                                                                                                                 |
| ------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| db            | sql scripts for manual creation of tables and insertion of seed data for testing                                                                                                                            |
| tpls          | smarty templates                                                                                                                                                                                            |
| views         | view file for controller                                                                                                                                                                                    |
| controller    | the controller for the module                                                                                                                                                                               |
| Timesheet.php | The bean file                                                                                                                                                                                               |
| vardefs.php   | Massive confusion as to why I need this if I am specifying columms and field defs in the bean class. Either hard coded in the bean or as a separate vardefs.php is fine, but not this halfway house of both |

## TimesheetLine

| path              | description                                                                      |
| ----------------- | -------------------------------------------------------------------------------- |
| db                | sql scripts for manual creation of tables and insertion of seed data for testing |
| tpls              | smarty templates - do I even need this as this is a part of the Timesheet record |
| views             | view file for controller - not sure this is needed                               |
| controller        | the controller for the module, needed for CRUD operations?                       |
| TimesheetLine.php | The bean file                                                                    |

# Questions

## 1

How do you get SuiteCRM to create the DB tables from these files (bean file or vardefs.php)?

## 2

How would you get the Timesheet module to link to the Timesheet Line module like you would in SQL, using a JOIN?

For example if the data looked like :

``` sql
    CREATE TABLE time_2_invoice (
    id                  CHAR(36) NOT NULL,
    timesheet_name      VARCHAR(50) NOT NULL,
    date_from           TIMESTAMP NOT NULL,
    date_to             TIMESTAMP NOT NULL,
    deleted             TINYINT(1)
    PRIMARY KEY (id)

    INSERT INTO `time_2_invoice` ( `id`, `timesheet_name`, `date_from`, `date_to` ) VALUES ( 1, 'week ending 17/10/2021', '2021-10-11', '2021-10-17' );
);
```

``` sql
CREATE TABLE time_2_invoice_line_item (
    id                  CHAR(36),
    timesheet_id        CHAR(36) NOT NULL, --FK of the time_2_invoice table
    project_id          CHAR(36) NULL,
    ticket_ref          VARCHAR(50) NULL,
    comments            VARCHAR(250) NOT NULL,
    mon                 DECIMAL(8,2) NOT NULL,
    tue                 DECIMAL(8,2) NOT NULL,
    wed                 DECIMAL(8,2) NOT NULL,
    thu                 DECIMAL(8,2) NOT NULL,
    fri                 DECIMAL(8,2) NOT NULL,
    sat                 DECIMAL(8,2) NOT NULL,
    sun                 DECIMAL(8,2) NOT NULL,
    deleted             TINYINT(1),
    PRIMARY KEY (id)
);

    INSERT time_2_invoice_line_item (`id`, `timesheet_id`,`ticket_ref`,`comments`,`mon`,`tue`,`wed`,`thu`,`fri`,`sat`,`sun`)
    VALUES (1, 1, 'JIRA-123', 'Unit tests', 1, 1, 0, 0, 0, 0, 0);

    INSERT time_2_invoice_line_item (`id`, `timesheet_id`,`ticket_ref`,`comments`,`mon`,`tue`,`wed`,`thu`,`fri`,`sat`,`sun`)
    VALUES (2, 1, 'JIRA-123', 'Unit tests', 0, 0, 1, 1, 1, 0, 0);
```

I could query in SQL to get the aggregate value for the timesheet like

``` sql
SELECT id, timesheet_name, date_from, date_to,
(SELECT SUM(mon) + SUM(tue) + SUM(wed) + SUM(thu) + SUM(fri) + SUM(sat) + SUM(sun) FROM time_2_invoice_line_item tili WHERE timesheet_id = ti.id) AS Days
FROM time_2_invoice ti;
```

What would this look like if implemented in my bean class? Or is there another module that does this that I can look to for an example?

## 3

How would I handle Create, Update, Delete operations in my views? Do I add my own html forms/form posts or is there a 'best practice' way of doing it?






