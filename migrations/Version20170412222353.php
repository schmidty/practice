<?php

namespace Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170412222353 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
		$library = $schema->getTable("library");
		$library->addColumn("book_description", "string", array("length" => 500));
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
		$this->addSql("ALTER TABLE `library` DROP COLUMN `book_description`");
    }
}
