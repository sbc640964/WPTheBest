<?php

namespace SBC\Database;

use IgniteKit\WP\Migrations\Engine\Migration;
use IgniteKit\WP\Migrations\Contracts\Migration as MigrationContract;

class BaseMigration extends Migration implements MigrationContract {

    /**
     * Specify custom migrations table
     * @var string
     */
    protected $migrationsTableName = 'your_migrations_table';

}