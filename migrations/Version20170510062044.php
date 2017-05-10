<?php

namespace Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170510062044 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
		$products = $schema->createTable('products');

		$products->addColumn('id', 'integer', ['unsigned'=>true]);
		$products->addColumn('name', 'string', ['length'=>'500']);
		$products->addColumn('category_id', 'integer');
		$products->addColumn('in_use', 'boolean', ['default'=>0]);
		$products->addColumn('date', 'date');

		$products->addColumn('user_id', 'integer');
		$products->addColumn('created', 'datetime');
		$products->addColumn('updated', 'datetime');

		$products->setPrimaryKey(['id']);

		$schema->createSequence('products_ids');
		

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
		$schema->dropTable('products');

    }
}
