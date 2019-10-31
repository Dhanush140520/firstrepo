<!DOCTYPE html>
<html lang="en">
<?php include_once "includes/headfiles.php"; ?>

<body>
    <?php include_once "includes/header.php"; ?>
    <section class="secondary-banner commercial-banner">
        <!-- <div class="secondary-banner-wrapper ">
            <div class="banner-content">
                <h5>Loans</h5>
                <h1>Short story about <span>loans</span></h1>               
            </div>
        </div> -->
    </section>
    <section class="breadcums-sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="other_loan.php">Loans</a></li>
                        <li><a href="commercial_vehicle_finance.php">Commercial Vehicle Finance</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio-detail-sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="personal-heading">
                        <h2>PROSPER YOUR BUSINESS WITH OUR QUICK COMMERCIAL VEHICLE LOANS</h2>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="apply-pl-sec text-center">
                        <a href="contact.php"><button class="btn btn-default mf-btn-primary" type="button">Contact us</button></a>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-sm-12">
                    <img class="img-responsive mar-b-20" src="./images/commercial details.jpg" >
                </div>
            </div> -->
            <!--  <div class="row">
                <div class="col-sm-7">
                    <img class="img-responsive mar-b-20" src="./images/port-detail.jpg" >
                </div>
                <div class="col-sm-5">
                    <img class="img-responsive mar-b-20" src="./images/port-detail.jpg" >
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-12">
                    <h3>The best part? We offer finance up to 100% for your commercial vehicles! </h3>
                    <p>If you are buying your first truck or expanding your existing fleet, we have finance solutions tailored as per your requirement. We at Mindfin, offer loans at competitive rates for a wide range of vehicles including buses, trucks, tankers, trailers, light commercial vehicle and small commercial vehicles.</p>
                    <p>There is no need to shop around anymore for commercial vehicle loan options for buses, tippers, transit mixers or any other heavy, light or small commercial vehicle that your business may require. Choose Mindfin's commercial vehicle loans to get the best terms and interest rates.</p>

                </div>
            </div>

            <div class="tags-wrapper">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="sub-head-primary" style="font-size: 20px;"><strong>Commercial Vehicle Finance Loan</strong></p>
                        <p class="sub-head-primary" style="font-size: 20px;">A vehicle may be considered a commercial vehicle if it:</p>
                    </div>
                    <div class="col-sm-9">
                        <p>Commercial vehicle loans are loans offered to borrowers, usually self-employed individuals, trusts, partnership firms, organizations, etc., for the purchase of vehicles for commercial purposes of business.</p>
                        <p>• Belongs to a company or corporation.
                            <br>• Is used for business, but is in an individual's name, such as a sole proprietor.
                            <br>• Is a leased vehicle and in the name of the financial institution that owns it.
                            <br>• Exceeds a certain weight or class and therefore, is "classified" as commercial even though it may not be commercially used or commercially owned. A weight rating of 26,001 pounds or more is always considered commercial.
                            Is used to haul any hazardous material.
                            <br>• A vehicle can be used for a business, if not exclusively, and remain privately licensed, depending on the amount of time used for business
                            <br>• You can get a Commercial Vehicle Loan for a variety of vehicles such as tippers, trucks, buses, trailers, tankers and so on to grow your business.
                            <br>• If your personal vehicle is insured as a commercial vehicle and other members of your family use the vehicle for personal purposes, then you may have to get a “non-owned vehicle” endorsement.
                        </p>

                    </div>
                </div>
            </div>
            <div class="tags-wrapper">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="sub-head-primary" style="font-size: 20px;">Commercial Vehicle Loan Eligibility </p>
                    </div>
                    <div class="col-sm-9">
                        <p>• Any individual / partnership firm / company with more than two years of business experience.
                            <br>• Existing owner of at least two commercial vehicles.
                            <br>• Captive customers and transporters.
                        </p>
                    </div>
                </div>
            </div>
            <!--<div class="row">-->
            <!--    <div class="col-sm-12">-->
            <!--        <div class="port-btn-wrapper">-->
            <!--            <button class="btn btn-default post-btn prev-btn">Previous Post</button>-->
            <!--            <button class="btn btn-default post-btn next-btn">Next Post</button>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>

    <?php include_once "includes/footer.php"; ?>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm" style="width:350px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Track your loan Status</h4>
                </div>
                <form class="form-horizontal" action="register/actions/form_action.php?f=track" method="post" onsubmit="return c_validation()">
                    <div class="modal-body">
                        <input type="text" class="form-control" name="track_no" placeholder="Enter your Mobile No*" required="required">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-block" name="submit" value="submit" style="margin-right:120px; border-radius:15px;">Submit</button>
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>

</body>

</html>