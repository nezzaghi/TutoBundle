<?php

namespace Ump\TutoBundle\Migrations\pdo_sqlite;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated migration based on mapping information: modify it with caution
 *
 * Generation date: 2014/05/27 03:06:36
 */
class Version20140527150636 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("
            CREATE TEMPORARY TABLE __temp__ump_tuto_item AS 
            SELECT id, 
            name 
            FROM ump_tuto_item
        ");
        $this->addSql("
            DROP TABLE ump_tuto_item
        ");
        $this->addSql("
            CREATE TABLE ump_tuto_item (
                id INTEGER NOT NULL, 
                name VARCHAR(255) NOT NULL, 
                PRIMARY KEY(id)
            )
        ");
        $this->addSql("
            INSERT INTO ump_tuto_item (id, name) 
            SELECT id, 
            name 
            FROM __temp__ump_tuto_item
        ");
        $this->addSql("
            DROP TABLE __temp__ump_tuto_item
        ");
    }

    public function down(Schema $schema)
    {
        $this->addSql("
            CREATE TEMPORARY TABLE __temp__ump_tuto_item AS 
            SELECT id, 
            name 
            FROM ump_tuto_item
        ");
        $this->addSql("
            DROP TABLE ump_tuto_item
        ");
        $this->addSql("
            CREATE TABLE ump_tuto_item (
                id INTEGER NOT NULL, 
                name VARCHAR(255) NOT NULL, 
                PRIMARY KEY(id)
            )
        ");
        $this->addSql("
            INSERT INTO ump_tuto_item (id, name) 
            SELECT id, 
            name 
            FROM __temp__ump_tuto_item
        ");
        $this->addSql("
            DROP TABLE __temp__ump_tuto_item
        ");
    }
}