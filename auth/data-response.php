<?php
require_once "./config/db.php";

    $title = "";
    $firstParagraph = "";
    $secondParagraph = "";
    $thirdParagraph = "";
    $hero_filePath = "";
    $breadcrumb_filePath = "";
                
    $select_query = "SELECT 
        services.serviceID AS service_id,
        services.title,
        services.firstParagraph,
        services.secondParagraph,
        services.thirdParagraph,
        hero.serviceID AS hero_serviceID,
        hero.filePath AS hero_filePath,
        breadcrumb.serviceID AS breadcrumb_serviceID,
        breadcrumb.filePath AS breadcrumb_filePath
    FROM services
    LEFT JOIN hero ON hero.serviceID = services.serviceID
    LEFT JOIN breadcrumb ON breadcrumb.serviceID = services.serviceID
    WHERE services.serviceID = '1' LIMIT 1";

    $result = mysqli_query($conn, $select_query);

    // Check for query errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $service_id = $row['service_id'];
            $title = $row['title'];
            $firstParagraph = $row['firstParagraph'];
            $secondParagraph = $row['secondParagraph'];
            $thirdParagraph = $row['thirdParagraph'];
            $hero_filePath = $row['hero_filePath'];
            $breadcrumb_filePath = $row['breadcrumb_filePath'];
        }
    }

    $media_images = [];
    $media_two_images = [];
    $media_three_images = [];

    $media_query = "SELECT filePath FROM media WHERE serviceID = '1'";
    $media_result = mysqli_query($conn, $media_query);

    if ($media_result && mysqli_num_rows($media_result) > 0) {
        while ($row = mysqli_fetch_assoc($media_result)) {
            $media_images[] = $row['filePath'];
        }
    }

    $media_two_query = "SELECT filePath FROM media_two WHERE serviceID = '1'";
    $media_two_result = mysqli_query($conn, $media_two_query);
    if ($media_two_result && mysqli_num_rows($media_two_result) > 0) {
        while ($row = mysqli_fetch_assoc($media_two_result)) {
            $media_two_images[] = $row['filePath'];
        }
    }

    $media_three_query = "SELECT filePath FROM media_three WHERE serviceID = '1'";
    $media_three_result = mysqli_query($conn, $media_three_query);
    if ($media_three_result && mysqli_num_rows($media_three_result) > 0) {
        while ($row = mysqli_fetch_assoc($media_three_result)) {
            $media_three_images[] = $row['filePath'];
        }
    }