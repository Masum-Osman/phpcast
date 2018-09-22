<?php

$config = require 'config.php';

require 'database/connection.php';
require 'database/QueryBuilder.php';

//$pdo = Connection::make();        //first code type.
return new QueryBuilder(
        Connection::make($config['database'])
    );                                          //instead of declaring a variable named $pdo, we are assigning it 
                                                    //directly to the "new QueryBuilder($pdo)";


?>