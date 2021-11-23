<?php
$page_title = 'Add Recipe';
include_once __DIR__ . '/../_global/header.php';

if (isset($_POST['submit'])) {
    $recipename = $_POST['recipename'];
    $step1 = $_POST['step1'];
    $step2 = $_POST['step2'];
    $step3 = $_POST['step3'];
    $step4 = $_POST['step4'];
    $step5 = $_POST['step5'];
    $step6 = $_POST['step6'];
    $step7 = $_POST['step7'];
    $step8 = $_POST['step8'];

    $recipename = '';
    
    if ($result) {
        // we got results, let's loop through that data and get the id from the customers table and assign it to the variable to use later
        while ($row = mysqli_fetch_assoc($result)) {
            $recipename = $row['recipename'];
        }
    } else {
        // If there is no customer with that email in the DB, we assume that the customer doesn't exist so we add them in instead.
        $query = 'INSERT INTO recipei(recipename, step1, step2, step3, step4, step5, step6, step7, step8)';
        $query .= "VALUES ('{$recipename}', '{$step1} ', '{$step2}', '{$step3}', '{$step4}', '{$step5}', '{$step6}', '{$step7}', '{$step8}')";


        $result = mysqli_query($db_connection, $query);
        if ($result) {
            echo '<pre>';
            var_dump($result);
            echo '</pre>';
            // Success
            // redirect_to("somepage.php");
            echo 'Success!';
        } else {
            // Return to page with error
            die('Database query failed. ' . mysqli_error($db_connection));
        }
        die;
    }
}


?>
<div class="container">
  <h1>Add Recipe Title and Steps</h1>
  <form action="" method="POST">

    <label for="">Recipe Title</label>
    <input type="text" value="" name="recipename">

    <label for="">Step One</label>
    <input type="text" value="" name="step1">


    <label for="">Step Two</label>
    <input type="text" value="" name="step2">


    <label for="">Step Three</label>
    <input type="text" value="" name="step3">

    <label for="">Step Four</label>
    <input type="text" value="" name="step4">

    <label for="">Step Five</label>
    <input type="text" value="" name="step5">

    <label for="">Step Six</label>
    <input type="text" value="" name="step6">

    <label for="">Step Seven</label>
    <input type="text" value="" name="step7">

    <label for="">Step Eight</label>
    <input type="text" value="" name="step8">

    <br>
    <br>
    <input class="btn btn-primary" name="submit" type="submit">

  </form>
</div>
<?php include_once __DIR__ . '/../_global/footer.php';
