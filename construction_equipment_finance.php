<!DOCTYPE html>
<html lang="en">
<?php include_once "includes/headfiles.php"; ?>

<body>
    <?php include_once "includes/header.php"; ?>
    <section class="secondary-banner construction-loan-banner">
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
                        <li><a href="construction_equipment_finance.php">Construction Equipment Finance</a></li>
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
                        <h2>Equipment finance is a common tool used by lots and lots of companies as part of a business recovery program, as it can help to improve cash flow and also improve working capital</h2>
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
                    <img class="img-responsive mar-b-20" src="./images/construction details.jpg" >
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
                    <h3>It typically involves a lender giving a business finance that is secured by a piece of equipment.  This works for those businesses that are finding it hard to get finance because the equipment is used as security and if they default on payment the equipment will be taken away</h3>
                    <p>When a lender offers monies that are secured against equipment the amount financed cannot exceed the collateral value.  The reason for this is because if the borrower defaulted as advised earlier the equipment would not cover the value of the outstanding payments due.  Another term of lending is that the length of the loan cannot also exceed the length of the economic useful life of the financed equipment.
                    </p>
                    <p>Equipment finance is common for those businesses that struggle to source traditional funding.  So this option is fantastic, especially for startup companies.  It is now possible to have the equipment needed to function.
                    </p>
                </div>
            </div>

            <div class="tags-wrapper">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="sub-head-primary"style="font-size: 20px;"><strong>Construction Equipment Finance Loans</strong></p>
                        <p></p>
                    </div>
                    <div class="col-sm-9">
                        <p>Any method of extending capital to businesses for the purpose of acquiring equipment. Financing methods include equipment leasing, SBA and other government loans, as well as sale-leaseback wherein the collateralized existing equipment to raise cash for additional purchases.</p>

                    </div>
                </div>
            </div>
            <div class="tags-wrapper">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="sub-head-primary"style="font-size: 20px;"><strong>With any finance there are lots of benefits but downside is also been considered.</strong></p>
                        <p></p>
                    </div>
                    <div class="col-sm-9">
                        <p>With regards to cost it can be far more expensive in the long term.  Short term there will be lots of benefits as a lump sum of cash does not need to be paid out but over the long term the monies paid out for equipment finance will be far greater.  Each business considering equipment finance needs to identify whether this works</p>
                        <p>Most lending institutions will only agree to pay 80% – 90% of the cost, leaving you to cover the other 10% – 20%.
                        </p>
                        <p>In the long term, the arrangement will ultimately cost more than if you had just bought the equipment outright.
                        </p>
                        <p>There’s one difference when you’re comparing equipment lease vs. equipment loan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="tags-wrapper">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="sub-head-primary"style="font-size: 20px;"><strong>Equipment leasing </strong></p>
                        <p></p>
                    </div>
                    <div class="col-sm-9">
                        <p>It involves renting the equipment over a given period of time in return for fixed payments, essentially you will never own the equipment, but rather use it for a certain period of time.  </p>
                    </div>
                </div>
            </div>
            <div class="tags-wrapper">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="sub-head-primary"style="font-size: 20px;"><strong>Equipment loan  </strong></p>
                        <p></p>
                    </div>
                    <div class="col-sm-9">
                        <p>Once paying back the loan, you will eventually own the equipment</p>
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