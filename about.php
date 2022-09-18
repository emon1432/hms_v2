<?php include 'header.php'; ?>


<!-- Content -->
<div id="content">

    <!-- Intro -->
    <section class="p-t-b-150">
        <div class="container">
            <div class="intro-main">
                <div class="row">

                    <!-- Doctor list -->
                    <div class="col-md-12">
                        <div class="intro-detail">
                            <h2>Our Doctors</h2>
                            <p>Our doctors are highly qualified and experienced. They are always ready to help you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors -->
    <section class="light-gry-bg p-t-b-100">
        <div class="container">
            <div class="row">

                <?php
                $sql = "SELECT * FROM doctor";
                $qsql = mysqli_query($con, $sql);
                while ($rs = mysqli_fetch_array($qsql)) {

                    $sqldept = "SELECT * FROM department WHERE departmentid='$rs[departmentid]'";
                    $qsqldept = mysqli_query($con, $sqldept);
                    $rsdept = mysqli_fetch_array($qsqldept);


                ?>
                    <div class="col-md-4">
                        <div class="doctors" style="padding: 20px;">
                            <div class="doctors-img"> <img src="images/doctorImage/<?php echo $rs['image']; ?>" style="height: 100px; width:100px;" alt=""> </div>
                            <div class="doctors-detail">
                                <h4><?php echo $rs['doctorname']; ?></h4>
                                <span><?php echo $rsdept['departmentname']; ?></span>
                                <p><?php echo $rs['education']; ?></p>
                                <p>Experience : <?php echo $rs['experience']; ?> year</p>
                                <p>Consultancy Charge : <?php echo $rs['consultancy_charge']; ?></p>
                                <p>Mobile No : <?php echo $rs['mobileno']; ?></p>
                                <a href="patientappointment.php" class="btn">Appointment</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>





                <!-- Intro Timing -->
                <div class="col-md-5"> <img class="img-responsive intro-img" src="images/intro-img.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Footer -->
<!--======= FOOTER =========-->

<?php include 'footer.php'; ?>