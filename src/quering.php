<?php
/*
	Quering .
	Execute row SQL Statement.
*/
	/* R::exec() */
	R::exec( 'UPDATE user SET name="Sarath" WHERE id=93' );


	/* R::getAll */
	R::getAll("SELECT * FROM contacts");
