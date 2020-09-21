<?php
namespace Omeka\Db\Migrations;

use Doctrine\DBAL\Connection;
use Omeka\Db\Migration\MigrationInterface;

class RenameResourceTemplateData implements MigrationInterface
{
    public function up(Connection $conn)
    {
        $sql = <<<SQL
ALTER TABLE `resource_template`
CHANGE `settings` `data` longtext COLLATE 'utf8mb4_unicode_ci' NOT NULL COMMENT '(DC2Type:json_array)' AFTER `label`;
SQL;
        $conn->exec($sql);

        $sql = <<<SQL
ALTER TABLE `resource_template_property`
CHANGE `settings` `data` longtext COLLATE 'utf8mb4_unicode_ci' NOT NULL COMMENT '(DC2Type:json_array)' AFTER `is_private`;
SQL;
        $conn->exec($sql);
    }
}
