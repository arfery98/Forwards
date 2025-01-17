<?php
require('../db.php');
require('../db_connect.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../1page/login.php");
    exit();
}

//print_r($_POST);

$user_id = $_SESSION['organization_email'];

if (isset($_FILES['images'])) {
    $image_files = $_FILES['images'];
    $total_images = count($image_files['name']);
    $image_paths = [];
    $fw_img = 'who_org_img'; // ต้องตั้งค่าชื่อของ organization ที่นี่

    // Loop through each file
    for ($i = 0; $i < $total_images; $i++) {
        // Get file extension and convert to lowercase
        $extension = strtolower(pathinfo($image_files['name'][$i], PATHINFO_EXTENSION));
        $support = array("jpg", "jpeg", "png", "gif");

        if (in_array($extension, $support)) {
            $new_file_name = strtolower($fw_img) . "_" . time() . "_" . $i . "." . $extension;
            $image_path = 'uploads/images/' . $new_file_name;

            // Move uploaded file to the destination directory
            if (move_uploaded_file($image_files['tmp_name'][$i], $image_path)) {
                $image_paths[] = $image_path;
            } else {
                $_SESSION['error'] = "เกิดข้อผิดพลาดในการอัปโหลดไฟล์:" . $image_files['name'][$i];
                //echo "Error เกิดข้อผิดพลาดในการอัปโหลดไฟล์ file: " . $image_files['name'][$i];
                exit;
            }
        } else {
            $_SESSION['error'] = "ไม่รองรับประเภทไฟล์นี้:" . $extension;
            //echo "Unsupported file type: " . $extension;
            exit;
        }
    }

    if (!empty($image_paths)) {

        
        // แปลง array ของ image paths เป็น JSON string
        $user_profile = json_encode($image_paths);

        $stmt = $conn->prepare("UPDATE tb_organization SET organization_proflie = :organization_proflie WHERE organization_email = :organization_email");
        $stmt->bindParam(":organization_email", $user_id, PDO::PARAM_STR);
        $stmt->bindParam(":organization_proflie", $user_profile, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt) {
            $_SESSION['success'] = "อัพรูปภาพเรียบร้อย!";
            header("location:../1page/org_edit_profile.php");
            exit(0);
        } else {
            $_SESSION['error'] = "มีข้อผิดพลาดในแก้ไขข้อมูล";
        }
    } else {
        $_SESSION['error'] = "ไม่มีรูปภาพที่ถูกเลือก";
    }
}
