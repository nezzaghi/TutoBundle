<?php

namespace Ump\TutoBundle\Migrations\pdo_pgsql;

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
            CREATE SEQUENCE ump_tuto_item_id_seq
        ");
        $this->addSql("
            SELECT setval(
                'ump_tuto_item_id_seq', 
                (
                    SELECT MAX(id) 
                    FROM ump_tuto_item
                )
            )
        ");
        $this->addSql("
            ALTER TABLE ump_tuto_item ALTER id 
            SET 
                DEFAULT nextval('ump_tuto_item_id_seq')
        ");
    }

    public function down(Schema $schema)
    {
        $this->addSql("
            ALTER TABLE ump_tuto_item ALTER id 
            DROP DEFAULT
        ");
    }
}