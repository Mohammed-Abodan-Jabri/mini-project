<?php

require_once( 'core/database.php' );

$db_server = 'localhost';
$db_user = 'root';
$db_user_pass = '';
$db_name = 'doctorak';

$connection = db_connect( $db_server, $db_user, $db_user_pass, $db_name );

$targetDir = 'uploads_images/';
// Directory where you want to store the uploaded images
if ( isset( $_POST[ 'clinics' ] ) ) {
    $clinicName = $_POST[ 'clinicName' ];
 
    // Get the uploaded file information
    $fileName = basename( $_FILES[ 'path' ][ 'name' ] );
    $targetFilePath = $targetDir . $fileName;
    $fileExtension = strtolower( pathinfo( $targetFilePath, PATHINFO_EXTENSION ) );
    // echo $path_img.'<br>';
    $clinic = $_POST[ 'clinics' ];
    // create, update, display, delete,
}
if ( isset( $_POST[ 'Doctors' ] ) ) {
    $doctorName = $_POST[ 'doctorName' ];
    // echo $doctorName.'<br>';
    // $path_img = $_POST[ 'path' ];
     // Get the uploaded file information

     $file_name = basename( $_FILES[ 'path' ][ 'name' ] );
     $targetFilePath = $targetDir . $file_name;
    // echo $path_img.'<br>';
    $dept = $_POST[ 'dept' ];
    $hospital = $_POST[ 'hospital' ];
    // echo $path_img.'<br>';
    $Doctor = $_POST[ 'Doctors' ];
    // create, update, display, delete,
}

// print_r( $connection );
echo '<br>';

// < <===  ===  === create clinic ===  ===  ===  ===  ===  ===  ===  ===  ===  == =>>

if ( $clinic === 'create' ) {
    if (move_uploaded_file($_FILES["path"]["tmp_name"], $targetFilePath)) {
        echo "File moved successfully.";
    } else {
        echo "Error moving the file. Debug: " . $_FILES["path"]["error"];
    }
    $data = array(
        'name' => $clinicName,
        'image' => $fileName,

    );
    $clinics  = db_insert( $connection, 'clinics', $data );
    if ( $clinics ) {
        header( 'location:clinics.php' );
    } else {
        echo 'no create';
    }
}

// < <===  ===  === create Doctor ===  ===  ===  ===  ===  ===  ===  ===  ===  == =>>

if ( $Doctor === 'create' ) {
    if (move_uploaded_file($_FILES["path"]["tmp_name"], $targetFilePath)) {
        echo "File moved successfully.";
    } else {
        echo "Error moving the file. Debug: " . $_FILES["path"]["error"];
    } 
    $data = array(
        'fullname' => $doctorName,
        'image' => $file_name,
        'dept'=> $dept,
        'hospital' => $hospital,
    );

    $result  = db_insert( $connection, 'doctors', $data );
    print_r( $result );
    if ( $result ) {
        header( 'location:displayDoctors.php' );
    } else {
        echo 'no create';
    }
} else {
    echo 'ali';
}

// <<<< <===  ===  ===  ===  =    ===  ===  ===  ===  ===  ===  = =>>>>>
// if ( $clinic == 'list' ) {
//     $clinics = db_select( $connection, 'clinics' );
//     echo '<ul';
//     foreach ( $clinics as $clinic ) {
//         echo '<li>'.$clinic[ 'name' ].'</li>';
//         echo '<li>'.$clinic[ 'image' ].'</li>';

//     }
// }