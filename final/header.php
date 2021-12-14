<?php

include 'database.php';
include 'helper.php';

?>

<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
    
<body>
<header>
        <div>
            <div class="header">
                <div class="lineUp">
                <a href="category.php">Recipes</a>
                </div>
                <div class="lineUp">
                <form action="/search.php" method="GET">
                    <input class = 'nop' type="text"  name="keyword" placeholder="search">
                    <input class = 'nop' type="submit"  value="SEARCH">
                    </form>
            </div>
        </div>
    </header>
