<?php

$connection = mysqli_connect(hostname: 'wd07_db', username: 'root', password: 'root', database: 'wd07');

$res = mysqli_query($connection, query: 'SELECT * FROM wd07.posts;');