<?php
while ($row = mysqli_fetch_assoc($db_results)) { ?>
    <div >
        <div>
            <li style='background: url("<?php echo $row['recipeImage']; ?>"); background-size: cover; list-style-type: none; ")'></li>
        </div>

        <div >
            <a href="recipe-detail.php?id=<?php echo $row['id']; ?>">
                <h4 ><?php echo $row['recipeTitle']; ?></h4>
            </a>
            <div>
                <div>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">
                        <p>Edit</p>
                    </a>
                </div>
                <div>
                    <a href="delete.php?id=<?php echo $row['id']; ?>">
                        <p>Delete</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
