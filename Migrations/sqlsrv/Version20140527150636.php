<?php

namespace Ump\TutoBundle\Migrations\sqlsrv;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated migration based on mapping information: modify it with caution
 *
 * Generation date: 2014/05/27 03:06:37
 */
class Version20140527150636 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("
            ALTER TABLE ump_tuto_item ALTER COLUMN id INT IDENTITY NOT NULL
        ");
    }

    public function down(Schema $schema)
    {
        $this->addSql("
            ALTER TABLE ump_tuto_item ALTER COLUMN id INT NOT NULL
        ");
    }
}