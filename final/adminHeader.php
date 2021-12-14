<?php

include 'database.php';
include 'helper.php';
include 'config.php';
?>

<html>

<head>
    <link rel="stylesheet" href="style.css" type="text/css" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div>
        <div class="header">
        <div class="lineUp">

                <a href="category.php">Recipes</a>
                <a href="all.php">All Recipes (Admin)</a>
                <a href="add.php">Add Recipe (Admin)</a>
            </div>
            <div class="lineUp">
                <form action="/search.php?keyword=`keyword`" method="GET">
                    <input class = 'nop'type="text" class="searchTerm" name="keyword" placeholder="search">
                    <input class = 'nop'type="submit" class="searchButton" value="SEARCH">
                    </form>
        </div>
</div>
    </header>