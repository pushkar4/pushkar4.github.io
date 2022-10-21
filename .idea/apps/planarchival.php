<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../subdir/head-common.php'); ?>
    <title>Plan Archival to S3 | Pushkar Sharma</title>
</head>

<body class="special-body sided">
<div class="row">

    <?php include('../subdir/sidebar-common.php'); ?>

    <div class="right-content-bar col-9 container">
        <div class="inside-right-content-bar">
            <div class="row">
                <div class="col-12">
                    <br/>
                    <h1 class="text-center section-head">ITP Plan Archival to S3 for cost savings on RDS usage<br>
                        <small>Finalist out of 26 teams in Apptio Hackathon Spring 2021</small></h1>
                    <br>
                    <h4 class="text-center section-text">May, 2021 | Apptio | Bengaluru</h4>
                </div>

                <hr class="col-11 col-offset-1"/>

                <div class="col-12">
                    <p>In IT Planning, we hold huge data running upto 2000 GBs in our DBs.
                        Most of this space is used up by archived plans that are seldom used by customers.
                        As part of the project, automated pulling this data out from the DB and saving it in cheaper S3.
                        AWS S3 is ~90% cheaper than AWS RDS giving us significant cost savings and snappier application.
                        Teamed up with 2 other developers to work on this project.
                        <br/>
                        Technology: Java, Python, AWS Lambda, S3</p>
                </div>

                <br/><br/><br/><br/>
                <div class="col-12">
                    <h3 class="text-center section-text">Screenshots</h3>
                </div>

                <div class="my-card col-lg-4 col-md-6">
                    <div data-toggle="modal" data-target="#myModal1">
                        <img src="../img/apps/planarchival/1.jpg" width="100%"/>
                    </div>
                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="../img/apps/planarchival/1.jpg"
                                         width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-card col-lg-4 col-md-6">
                    <div data-toggle="modal" data-target="#myModal2">
                        <img src="../img/apps/planarchival/2.jpg" width="100%"/>
                    </div>
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="../img/apps/planarchival/2.jpg"
                                         width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-card col-lg-4 col-md-6">
                    <div data-toggle="modal" data-target="#myModal3">
                        <img src="../img/apps/planarchival/3.jpg" width="100%"/>
                    </div>
                    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="../img/apps/planarchival/3.jpg"
                                         width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-card col-lg-4 col-md-6">
                    <div data-toggle="modal" data-target="#myModal7">
                        <img src="../img/apps/planarchival/4.jpg" width="100%"/>
                        <br/><br/><br/><br/><br/>
                    </div>
                    <div class="modal fade" id="myModal7" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="../img/apps/planarchival/4.jpg"
                                         width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../subdir/js-common.php'); ?>
</body>
</html>
