<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_sessions extends CI_Migration
{
    public function up()
    {
        $query = $this->db->query(
            'CREATE TABLE IF NOT EXISTS `sessions` (' .
                '`id` varchar(40) NOT NULL, ' .
                '`ip_address` varchar(45) NOT NULL, ' .
                '`timestamp` int(10) unsigned DEFAULT 0 NOT NULL, ' .
                '`data` blob NOT NULL, ' .
                // 'PRIMARY KEY (id), ' .
                'KEY `sessions_timestamp` (`timestamp`)' .
            ');'
        );
    }

    public function down()
    {
        // $this->dbforge->drop_table('sessions', TRUE);

        // Truncate table 'sessions' instead of dropping it
        $this->db->from('sessions');
        $this->db->truncate();
    }
}
