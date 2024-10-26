<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241026202342 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE theatre_play ADD shows_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE theatre_play ADD CONSTRAINT FK_402C877AD7ED998 FOREIGN KEY (shows_id) REFERENCES `show` (id)');
        $this->addSql('CREATE INDEX IDX_402C877AD7ED998 ON theatre_play (shows_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE theatre_play DROP FOREIGN KEY FK_402C877AD7ED998');
        $this->addSql('DROP INDEX IDX_402C877AD7ED998 ON theatre_play');
        $this->addSql('ALTER TABLE theatre_play DROP shows_id');
    }
}
