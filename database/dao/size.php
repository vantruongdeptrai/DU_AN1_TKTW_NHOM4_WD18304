<?php
function loadall_size()
{
    $sql = "SELECT * FROM size WHERE 1 ORDER BY id DESC";
    $list_size = pdo_query($sql);
    return $list_size;
}
?>