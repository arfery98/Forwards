<?php
session_start();
include('../db.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: ../1page/login.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รวมโครงการ</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <?php if (isset($_SESSION['organization_name'])) {

        include('../org_header.php');
    } else {
        include('../header.php');
    } ?>
</head>

<body style="background:#e7f4ff">
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">โครงการ FORWARDS</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class=""></i>
                        <span>วัด</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class=""></i>
                        <span>โรงเรียน/การศึกษา</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class=""></i>
                        <span>เด็ก</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class=""></i>
                        <span>สตรี</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-h-square-fill"></i>
                        <span>โรงพยาบาล</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-h-square-fill"></i>
                        <span>ส่งต่อ</span>
                    </a>
                </li>
            </ul>

        </aside>
        <div class="container">
            <br>
            <section class="about section-padding" id="about">
                <div class="card" style="width: 80rem;">
                    <img src="file:///C:/Users/cho/Desktop/13.jpg" class="d-block w-100" alt="auto">
                    <br>
                    <div class="text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <a class="text-decoration-none" href="#">
                                        <figure class="figure">
                                            <img alt="" width="100" height="100" src="">
                                        </figure>
                                        <p>โพสต์บริจาคของบุคคลทั่วไป</p>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="text-decoration-none" href="#">
                                        <figure class="figure">
                                            <img alt="" width="100" height="100" src="">
                                        </figure>
                                        <p>โพสต์บริจาคขององค์กร</p>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="text-decoration-none" href="#">
                                        <figure class="figure">
                                            <img alt="" width="100" height="100" src="">
                                        </figure>
                                        <p>โพสต์ขอบริจาคขององค์กร</p>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="text-decoration-none" href="#">
                                        <figure class="figure">
                                            <img alt="" width="100" height="100" src="">
                                        </figure>
                                        <p>โพสต์ประชาสัมพันธ์</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            </form>
            <!-- about section Ends -->

            <br><br>
            <div class="card" style="width: 80rem;">
                <div class="card-body">
                    <div class="modal-body">
                        <style>
                            table {
                                width: 100%;
                            }

                            table,
                            th,
                            td {
                                border: 1px solid black;
                            }
                        </style>
                        </head>

                        <body>
                            <div class="text-center">
                                <table>
                                    <tr>
                                        <td>สิ่งอุโภค-บริโภค</td>
                                        <td>เสื้อผ้า</td>
                                        <td>รองเท้า</td>
                                        <td>กระเป๋า</td>
                                        <td>รองเท้า</td>
                                    </tr>

                                    <tr>
                                        <td>ตุ๊กตา</td>
                                        <td>อาหาร</td>
                                        <td>อุปกรณ์การเรียน</td>
                                        <td>หนังสือ สมุด </td>
                                        <td>บอร์ดเกมคลายเครียด</td>
                                    </tr>
                            </div>
                            <p class="text-center">สามารถส่งต่อได้ทุกอย่าง ไปที่ส่งต่อเลย</p>
                            </table>
                        </body>
                    </div>
                </div>
            </div>


            <!-- 1 -->
            <br><br>


            <div class="card" style="width: 80rem;">
                <div class="card-body">
                    <section class="portfolio section-padding" id="portfolio">
                        <div class="text-center">
                            <div class="row">
                                <div class="text-center">
                                    <p class="fs-1"> โครงการเกี่ยวกับวัด </p><br>
                                    <p class="fs-3"> ช่วยเหลือ บริจาค ส่งต่อ </p>
                                </div>
                            </div>

                            <hr>
                            <br>
                        </div>
                        <br>

                        <p class="fs-2">โครงการวัด</p>
                        <br>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://i.pinimg.com/736x/24/cb/53/24cb538e13fb16449b26c05864a2e240.jpg">
                                        </div>
                                        <h3 class="card-title">วัดบูรพา</h3>
                                        <p class="lead">
                                            วัดนี้เป็นวัดที่ดีและยังต้องการปัจจัยสมทบที่จะเอามาสร้างบริจาคให้เกิดความเจริญ
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">ปัจจัย</li>
                                            <li class="list-group-item">ประตู</li>
                                            <li class="list-group-item">สิ่งของบริจาค</li>
                                            <li class="list-group-item">บูรณะวัด</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://i.pinimg.com/736x/24/cb/53/24cb538e13fb16449b26c05864a2e240.jpg">
                                        </div>
                                        <h3 class="card-title">วัดแสงอรุณ</h3>
                                        <p class="lead">
                                            วัดนี้เป็นวัดที่ดีและยังต้องการปัจจัยสมทบที่จะเอามาสร้างบริจาคให้เกิดความเจริญ
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">ปัจจัย</li>
                                            <li class="list-group-item">ประตู</li>
                                            <li class="list-group-item">สิ่งของบริจาค</li>
                                            <li class="list-group-item">บูรณะวัด</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://i.pinimg.com/736x/24/cb/53/24cb538e13fb16449b26c05864a2e240.jpg">
                                        </div>
                                        <h3 class="card-title">วัดป่าเทวดา</h3>
                                        <p class="lead">
                                            วัดนี้เป็นวัดที่ดีและยังต้องการปัจจัยสมทบที่จะเอามาสร้างบริจาคให้เกิดความเจริญ
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">ปัจจัย</li>
                                            <li class="list-group-item">ประตู</li>
                                            <li class="list-group-item">สิ่งของบริจาค</li>
                                            <li class="list-group-item">บูรณะวัด</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <br>
                                <button type="button" class="btn btn-outline-success rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    แสดงโครงการวัดทั้งหมด
                                </button>
                            </div>

                    </section>
                </div>
            </div>


            <!-- 2 -->
            <br><br>


            <div class="card" style="width: 80rem;">
                <div class="card-body">
                    <section class="portfolio section-padding" id="portfolio">
                        <div class="text-center">
                            <div class="row">
                                <div class="text-center">
                                    <p class="fs-1"> โครงการเกี่ยวกับโรงเรียน </p><br>
                                    <p class="fs-3"> ช่วยเหลือ บริจาค ส่งต่อ </p>
                                </div>
                            </div>

                            <hr>
                            <br>
                        </div>
                        <br>

                        <p class="fs-2">โครงการโรงเรียน/การศึกษา</p>
                        <br>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://png.pngtree.com/png-clipart/20201208/ourlarge/pngtree-school-building-campus-cartoon-classroom-png-image_2477301.jpg">
                                        </div>
                                        <h3 class="card-title">โรงเรียนปันสุข</h3>
                                        <p class="lead">
                                            โรงเรียนคืออนาคตของชาติเราต้องช่วยเหลือ ส่งต่อ บริจาค
                                            เพื่อให้โตขึ้นเป็นผู้ใหญ่ที่ดี
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">สมุด</li>
                                            <li class="list-group-item">หนังสือ</li>
                                            <li class="list-group-item">อาหาร</li>
                                            <li class="list-group-item">รถตู้</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://png.pngtree.com/png-clipart/20201208/ourlarge/pngtree-school-building-campus-cartoon-classroom-png-image_2477301.jpg">
                                        </div>
                                        <h3 class="card-title">มูลนิธิเด็กตั้งใจเรียน</h3>
                                        <p class="lead">
                                            โรงเรียนคืออนาคตของชาติเราต้องช่วยเหลือ ส่งต่อ บริจาค
                                            เพื่อให้โตขึ้นเป็นผู้ใหญ่ที่ดี
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">สมุด</li>
                                            <li class="list-group-item">หนังสือ</li>
                                            <li class="list-group-item">อาหาร</li>
                                            <li class="list-group-item">รถตู้</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://png.pngtree.com/png-clipart/20201208/ourlarge/pngtree-school-building-campus-cartoon-classroom-png-image_2477301.jpg">
                                        </div>
                                        <h3 class="card-title">เด็กคุณธรรม</h3>
                                        <p class="lead">
                                            โรงเรียนคืออนาคตของชาติเราต้องช่วยเหลือ ส่งต่อ บริจาค
                                            เพื่อให้โตขึ้นเป็นผู้ใหญ่ที่ดี
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">สมุด</li>
                                            <li class="list-group-item">หนังสือ</li>
                                            <li class="list-group-item">อาหาร</li>
                                            <li class="list-group-item">รถตู้</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <br>
                                <button type="button" class="btn btn-outline-success rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    แสดงโครงการโรงเรียน/การศึกษา ทั้งหมด
                                </button>
                            </div>

                    </section>
                </div>
            </div>


            <!-- 3 -->
            <br><br>


            <div class="card" style="width: 80rem;">
                <div class="card-body">
                    <section class="portfolio section-padding" id="portfolio">
                        <div class="text-center">
                            <div class="row">
                                <div class="text-center">
                                    <p class="fs-1"> โครงการเกี่ยวกับเด็ก </p><br>
                                    <p class="fs-3"> ช่วยเหลือ บริจาค ส่งต่อ </p>
                                </div>
                            </div>

                            <hr>
                            <br>
                        </div>
                        <br>

                        <p class="fs-2">โครงการเด็ก</p>
                        <br>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://i.pinimg.com/736x/53/72/52/537252ddccc31ef15c152760b4bda569.jpg">
                                        </div>
                                        <h3 class="card-title">เด็กรามา</h3>
                                        <p class="lead">
                                            เด็กคืออนาคตของชาติเราต้องช่วยเหลือ ส่งต่อ บริจาค
                                            เพื่อให้โตขึ้นเป็นผู้ใหญ่ที่ดี
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">อาหาร</li>
                                            <li class="list-group-item">เสื้อผ้า</li>
                                            <li class="list-group-item">นม</li>
                                            <li class="list-group-item">ยารักษา</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://i.pinimg.com/736x/53/72/52/537252ddccc31ef15c152760b4bda569.jpg">
                                        </div>
                                        <h3 class="card-title">มูลนิธิเด็กคู่บุญ</h3>
                                        <p class="lead">
                                            เด็กคืออนาคตของชาติเราต้องช่วยเหลือ ส่งต่อ บริจาค
                                            เพื่อให้โตขึ้นเป็นผู้ใหญ่ที่ดี
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">อาหาร</li>
                                            <li class="list-group-item">เสื้อผ้า</li>
                                            <li class="list-group-item">นม</li>
                                            <li class="list-group-item">ยารักษา</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://i.pinimg.com/736x/53/72/52/537252ddccc31ef15c152760b4bda569.jpg">
                                        </div>
                                        <h3 class="card-title">เด็กดีมีคุณธรรม</h3>
                                        <p class="lead">
                                            เด็กคืออนาคตของชาติเราต้องช่วยเหลือ ส่งต่อ บริจาค
                                            เพื่อให้โตขึ้นเป็นผู้ใหญ่ที่ดี
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">อาหาร</li>
                                            <li class="list-group-item">เสื้อผ้า</li>
                                            <li class="list-group-item">นม</li>
                                            <li class="list-group-item">ยารักษา</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <br>
                                <button type="button" class="btn btn-outline-success rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    แสดงโครงการเด็กทั้งหมด
                                </button>
                            </div>
                    </section>
                </div>
            </div>


            <!-- 4 -->
            <br><br>


            <div class="card" style="width: 80rem;">
                <div class="card-body">
                    <section class="portfolio section-padding" id="portfolio">
                        <div class="text-center">
                            <div class="row">
                                <div class="text-center">
                                    <p class="fs-1"> โครงการเกี่ยวกับสตรี </p><br>
                                    <p class="fs-3"> ช่วยเหลือ บริจาค ส่งต่อ </p>
                                </div>
                            </div>

                            <hr>
                            <br>
                        </div>
                        <br>

                        <p class="fs-2">โครงการสตรี/ผู้หญิง</p>
                        <br>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://png.pngtree.com/element_origin_min_pic/16/07/05/12577b3da75a082.jpg">
                                        </div>
                                        <h3 class="card-title">สตรีของไทย</h3>
                                        <p class="lead">
                                            สตรีคือเพศที่สวยงามของชาติเราต้องช่วยเหลือ ส่งต่อ บริจาค
                                            เพื่อให้โตขึ้นที่ดี
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">อาหาร</li>
                                            <li class="list-group-item">รองเท้า</li>
                                            <li class="list-group-item">สิ่งของบริจาค</li>
                                            <li class="list-group-item">อุปกรณ์ส่งเสริม</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://png.pngtree.com/element_origin_min_pic/16/07/05/12577b3da75a082.jpg">
                                        </div>
                                        <h3 class="card-title">มูลนิธิสตรีพิการ</h3>
                                        <p class="lead">
                                            สตรีคือเพศที่สวยงามของชาติเราต้องช่วยเหลือ ส่งต่อ บริจาค
                                            เพื่อให้โตขึ้นที่ดี
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">อาหาร</li>
                                            <li class="list-group-item">รองเท้า</li>
                                            <li class="list-group-item">สิ่งของบริจาค</li>
                                            <li class="list-group-item">อุปกรณ์ส่งเสริม</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://png.pngtree.com/element_origin_min_pic/16/07/05/12577b3da75a082.jpg">
                                        </div>
                                        <h3 class="card-title">สตรีแข็งแกร่ง</h3>
                                        <p class="lead">
                                            สตรีคือเพศที่สวยงามของชาติเราต้องช่วยเหลือ ส่งต่อ บริจาค
                                            เพื่อให้โตขึ้นที่ดี
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">อาหาร</li>
                                            <li class="list-group-item">รองเท้า</li>
                                            <li class="list-group-item">สิ่งของบริจาค</li>
                                            <li class="list-group-item">อุปกรณ์ส่งเสริม</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <br>
                                <button type="button" class="btn btn-outline-success rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    แสดงโครงการสตรีทั้งหมด
                                </button>
                            </div>

                    </section>
                </div>
            </div>


            <!-- 5 -->
            <br><br>

            <div class="card" style="width: 80rem;">
                <div class="card-body">
                    <section class="portfolio section-padding" id="portfolio">
                        <div class="text-center">
                            <div class="row">
                                <div class="text-center">
                                    <p class="fs-1"> โครงการเกี่ยวกับโรงพยาบาลและหน่วยงานสาธารณสุข </p><br>
                                    <p class="fs-3"> ช่วยเหลือ บริจาค ส่งต่อ </p>
                                </div>
                            </div>

                            <hr>
                            <br>
                        </div>
                        <br>

                        <p class="fs-2">โครงการโรงพยาบาลหน่วยงานต่างๆ</p>
                        <br>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://img.lovepik.com/free-png/20210924/lovepik-hand-drawn-cartoon-hospital-png-image_401348583_wh1200.png">
                                        </div>
                                        <h3 class="card-title">โรงพยาบาลเดโม</h3>
                                        <p class="lead">
                                            โรงพยาบาลคือที่เราต้องช่วยเหลือ ส่งต่อ บริจาค
                                            เพื่อให้โตขึ้นที่ดีในอนาคต
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">เตียง</li>
                                            <li class="list-group-item">เครื่องตรวจ</li>
                                            <li class="list-group-item">ยาสามัญ</li>
                                            <li class="list-group-item">บริจาค</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://img.lovepik.com/free-png/20210924/lovepik-hand-drawn-cartoon-hospital-png-image_401348583_wh1200.png">
                                        </div>
                                        <h3 class="card-title">มูลนิธิเลือดไทย</h3>
                                        <p class="lead">
                                            โรงพยาบาลคือที่เราต้องช่วยเหลือ ส่งต่อ บริจาค
                                            เพื่อให้โตขึ้นที่ดีในอนาคต
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">เตียง</li>
                                            <li class="list-group-item">เครื่องตรวจ</li>
                                            <li class="list-group-item">ยาสามัญ</li>
                                            <li class="list-group-item">บริจาค</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-light text-center bg-white pb-2 " style="width: 25rem; height: 46rem;">
                                    <div class="card-body text-dark">
                                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://img.lovepik.com/free-png/20210924/lovepik-hand-drawn-cartoon-hospital-png-image_401348583_wh1200.png">
                                        </div>
                                        <h3 class="card-title">ส่งเสริมสุขภาพคนพิการ</h3>
                                        <p class="lead">
                                            โรงพยาบาลคือที่เราต้องช่วยเหลือ ส่งต่อ บริจาค
                                            เพื่อให้โตขึ้นที่ดีในอนาคต
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">เตียง</li>
                                            <li class="list-group-item">เครื่องตรวจ</li>
                                            <li class="list-group-item">ยาสามัญ</li>
                                            <li class="list-group-item">บริจาค</li>
                                            <a href="#" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <br>
                                <button type="button" class="btn btn-outline-success rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    แสดงโครงการหน่วยงานทั้งหมด
                                </button>
                            </div>

                    </section>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="script.js"></script>
</body>

</html>