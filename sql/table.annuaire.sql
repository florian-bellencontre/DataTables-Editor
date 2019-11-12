-- 
-- Editor SQL for DB table annuaire
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE IF NOT EXISTS \"annuaire\" (
	\"id\" serial,
	\"first_name\" text,
	\"last_name\" text,
	\"email\" text,
	\"phone\" text,
	\"address\" text,
	\"postal\" text,
	\"city\" text,
	PRIMARY KEY( id )
);