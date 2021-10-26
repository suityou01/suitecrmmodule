CREATE TABLE time_2_invoice_line_item (
    id                  CHAR(36),
    timesheet_id        CHAR(36) NOT NULL,
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

--,
    --FOREIGN KEY (timesheet_id) REFERENCES time_2_invoice(id)

    INSERT time_2_invoice_line_item (`id`, `timesheet_id`,`ticket_ref`,`comments`,`mon`,`tue`,`wed`,`thu`,`fri`,`sat`,`sun`)
    VALUES (1, 'JIRA-123', 'Unit tests', 1, 1, 1, 1, 1, 1, 1);