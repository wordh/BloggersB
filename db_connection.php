<?php

//connection to database
$connection = mysqli_connect("sakibahmed.info","sakibahm","myfirstwebsite","sakibahm_bloggersB");

//checking the connection
if ($connection == null)
{
    die(
      "Connection failed! error no: (" . mysqli_error($connection) . ") error: " . mysqli_error($connection)
    );
}