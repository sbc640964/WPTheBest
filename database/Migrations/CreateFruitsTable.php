<?php
namespace SBC\Database\Migrations;

use SBC\Database\BaseMigration;
use IgniteKit\WP\Migrations\Database\Blueprint;
use IgniteKit\WP\Migrations\Wrappers\Schema;

class CreateFruitsTable extends BaseMigration {

    /**
     * Put the table up
     *
     * @return void
     */
    public function up() {
        Schema::create( 'fruits', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->string( 'name' );
        } );
    }

    /**
     * Default down function
     *
     * @return void
     */
    public function down() {
        Schema::drop( 'fruits' );
    }

}
