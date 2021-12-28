<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "medical_serv";
    $conn = mysqli_connect($server,$username,$password,$db);
    if(!$conn){
        echo "Error connecting to :".mysqli_connect_error();
        return false;
    }

    function db_insert($sql)     // insert data  
{
    global $conn; //  sql connected conn
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Added Success";   // messages True Added admin
    }
    return false;
}

function getRow($field,$id,$table)     
{
    global $conn;
    $sql = "SELECT * FROM `$table` WHERE `$field`='$id' ";   
    $result = mysqli_query($conn,$sql);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        @$rows[] = mysqli_fetch_assoc($result);
    }
    if(count($rows)>0)
    {
        return $rows[0];
    }
    else 
    {
        return false;
    }
}

function getRows($table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` ";
    
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $rows[] = $row;
        }
    }
    return $rows;
}

function db_update($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Updated Success";
    }
    return false;
}



function deleteRow($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Deleted Success";
    }
    return false;
}

function count_table($table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` ";
    
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $rows[] = $row;
        }
    }
    return count($rows);
}
