<?php
    require_once("db.php");
    var_dump(DP::run_query("select * from posts",[],2));
?>