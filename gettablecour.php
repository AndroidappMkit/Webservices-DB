<?php

/**
 * @author ben khssib khouloud
 * @MKIT e_learning
 */

require_once 'include/DB_Functions.php';
$db = new DB_Functions();

// json response array
$response = array("error" => FALSE);


    // get the cour
    $cour = $db->getAllCourses();

    if ($cour != false) {
        // cours are found
        $response["error"] = FALSE;
        $response["id_cour"] = $cour["id_cour"];
        $response["cour"]["libelle_cour"] = $cour["libelle_cour"];
        echo json_encode($response);
    } else {
        // cours are not found with the credentials
        $response["error"] = TRUE;
        $response["error_msg"] = "Get table cour is wrong. Please try again!";
        echo json_encode($response);
    }

?>

