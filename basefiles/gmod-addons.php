<?php
    $manager = new MongoDB\Driver\Manager("***REMOVED***");

    $server = [];

    foreach($_GET as $key => $value) {
        if($key=="page") { continue; }
        $server[htmlspecialchars($key)] = htmlspecialchars($value);
    }

    if(count($server)>0 && count($server)<100) { // Some security
        $server['time'] = time();
        
        $bulkVisit = new MongoDB\Driver\BulkWrite(['ordered' => true]);
        $bulkVisit->insert($server);

        $manager->executeBulkWrite('stats.gmodAddons', $bulkVisit);
    }
?>