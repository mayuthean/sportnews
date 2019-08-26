<?php
    function query($sql)
    {
        $con = mysqli_connect(SERVER, USER, PASSWORD, DB);
        $result = $con->query($sql);
        $con->close();
        return $result;
    }

    function non_query($sql)
    {
        $con = mysqli_connect(SERVER, USER, PASSWORD, DB);
        $result = $con->query($sql);
        $i = mysqli_affected_rows($con);
        $con->close();
        return $i;
    }

    function insert_get_id($sql)
    {
        $con = mysqli_connect(SERVER, USER, PASSWORD, DB);
        $result = $con->query($sql);
        $i = $con->insert_id;
        $con->close();
        return $i;

    }
?>