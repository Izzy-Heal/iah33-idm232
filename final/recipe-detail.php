<?php
$page_title = 'Detail';

include_once 'adminHeader.php';

$sql = 'SELECT * FROM recipe';
$db_results = mysqli_query($con, $sql);

?>
<html>
    <?php
            include 'rec-info.php';
    ?>

</body>

</html>