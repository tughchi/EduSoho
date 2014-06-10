<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20140528101559 extends AbstractMigration
{
    public function up(Schema $schema)
    {	
    	$this->addSql("ALTER TABLE `block` ADD `mode` ENUM('html','template') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'html' COMMENT '模式' AFTER `title`, ADD `template` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '模板' AFTER `mode`, ADD `templateData` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '模板数据' AFTER `template`;");
        $this->addSql("ALTER TABLE `block_history` ADD `templateData` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '模板历史数据' AFTER `blockId`;");
        // this up() migration is autogenerated, please modify it to your needs

    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs

    }
}