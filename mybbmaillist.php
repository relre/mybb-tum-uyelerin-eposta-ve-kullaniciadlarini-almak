<?php
define("IN_MYBB",1);
include("global.php");
if ($mybb->user['uid'] == 1) {
    $result = $db->query("SELECT * FROM ".TABLE_PREFIX."users");
    while ($row = $db->fetch_array($result)) {
        echo $row['username'].','.$row['email'].'<br />';
    }
} else {
    error_no_permission();
}
