<?php

/*
 * Editor server script for DB table annuaire
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// The following statement can be removed after the first run (i.e. the database
// table has been created). It is a good idea to do this to help improve
// performance.
$db->sql( "CREATE TABLE IF NOT EXISTS "getcwd();" (
	\"id\" serial,
	\"first_name\" text,
	\"last_name\" text,
	\"email\" text,
	\"phone\" text,
	\"address\" text,
	\"postal\" text,
	\"city\" text,
	PRIMARY KEY( id )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'annuaire', 'id' )
	->fields(
		Field::inst( 'first_name' ),
		Field::inst( 'last_name' ),
		Field::inst( 'email' ),
		Field::inst( 'phone' ),
		Field::inst( 'address' ),
		Field::inst( 'postal' ),
		Field::inst( 'city' )
	)
	->process( $_POST )
	->json();
