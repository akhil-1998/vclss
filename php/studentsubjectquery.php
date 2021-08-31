<?php
include 'db.php';

    $tsql= "SELECT * FROM subject";
    $getResults= sqlsrv_query($conn, $tsql);
   
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo('<br>');
     echo ($row['sname'] . PHP_EOL);
     echo('<br>');
    }
    sqlsrv_free_stmt($getResults);
?> 

