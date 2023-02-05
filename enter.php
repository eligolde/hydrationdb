<?php

include 'database.php';

// use of prepared statements - SQL

// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

// ensure that form values were received
if (isset($_POST['size']) && isset($_POST['amount'])) {

    // sanitizeMySQL() is a custom function, written below
    $size = sanitizeMySQL($conn, $_POST['size']);
    $amount = sanitizeMySQL($conn, $_POST['amount']);
    $hydrated = sanitizeMySQL($conn, $_POST['hydrated']);

		$total = $size * $amount;

		$query = "INSERT INTO hydration (size, amount, hydrated, total)
	    VALUES (?, ?, ?, ?)";

			if ( $stmt = mysqli_prepare($conn, $query) ) {

	        // bind the values to replace the 4 question marks
	        // note that 4 letters in 'sssids' MUST MATCH data types in table
	        // Type specification chars:
	        // i - integer, s - string , d - double (decimal), b - blob
	        mysqli_stmt_bind_param($stmt, 'iisi',
	        $size,
	        $amount,
	        $hydrated,
	        $total
	        );

					// executes the prepared statement with the values already set, above
		        mysqli_stmt_execute($stmt);
		        // close the prepared statement
		        mysqli_stmt_close($stmt);
		        // close db connection
		        mysqli_close($conn);
		    } // end of prepare if-statement
		    echo "You drink " . $total . " ounces a day. See how much water you're drinking compared to everyone else by looking at the database.";
		} else {
		    echo "Failed to enter new record!";
		} // end of isset if-statement

		?>
