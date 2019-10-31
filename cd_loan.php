<!DOCTYPE html>
<html lang="en">
<?php include_once "includes/headfiles.php"; ?>

<body>
    <?php include_once "includes/header.php"; ?>
    <section class="secondary-banner cd-loan-banner">
        <!-- <div class="secondary-banner-wrapper ">
            <div class="banner-content">
                <h5>CD Loan</h5>
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
                        <li><a href="cd_loan.php">Consumer Durable Loans</a></li>
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
                        <h2>Everyone’s lifestyle could do with an upgrade and a consumer durable loan allows you to do that! In a nutshell, it enables you to buy household products that make your life easier and your leisure more enjoyable.</h2>
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
                    <img class="img-responsive mar-b-20" src="./images/cd_loan.jpg" >
                </div>
            </div> -->
            <!-- <div class="row">
                <div class="col-sm-7">
                    <img class="img-responsive mar-b-20" src="./images/port-detail.jpg" >
                </div>
                <div class="col-sm-5">
                    <img class="img-responsive mar-b-20" src="./images/port-detail.jpg" >
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-12">
                    <p>You might option given to the customer to purchase durable items. Mobile Phones, Cameras, Tablet, DSLR, Audio Devices, Household Products such as Fridges,washing machine to save you the chore of washing your clothes. Or you might think that the best way to de-stress from a hard day’s work is to see on a large LED screen at home in the comfort of air conditioned room. The problem is not everyone has ready extra cash to pay for these household items and a consumer durable loan helps finance these purchases.</p>
                </div>
                <p class="sub-head-primary"><strong>What are the products covered by a consumer durable loan?</strong></p>
                <div class="tags-wrapper">
                    <div class="col-sm-12">
                        <p>The loan covers   a whole range of products ranging from household necessities like a washing machine to luxury gadgets like a high-end smartphone. The products covered by a consumer durable loan </p>
                    </div>
                </div>
            </div>
            <div class="tags-wrapper">
                <div class="row">
                    <div class="col-sm-3">

                        <p class="sub-head-primary" style="font-size: 20px;"><strong>Products Covered</strong></p>
                        <p></p>
                    </div>
                    <div class="col-sm-9">
                        <p>Washing machine, Refrigerator, Microwave oven, Cooking range, Air conditioner, Tablet, laptop, desktop (might be subject to a minimum value),
                            Smartphone (might be subject to a minimum value), TV, Invertor and generator, Water purifier, Dishwasher, Music system
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p class="sub-head-primary">What is the typical amount, tenure and interest rate on a consumer durable loan?</strong></p>
                </div>
                <div class="tags-wrapper">
                    <div class="col-sm-12">
                        <p>Naturally, the amount and tenure differs according to each lender and the product that you wish to purchase. The durable loan amount could range from a few thousands to a few lakhs, while the tenure could range from 8 months to 3 years. In general, you need to be between 21-60 years to apply for this type of loan and need to demonstrate proof of income. You can apply online or, in some cases, even apply at specific stores that have tie-ups with specific lenders.
                            The interest rates could range between 15-22% depending on whether you are a salaried employee or self–employed. Some lenders offer interest-free loans where the interest component is subvented and passed on to the finance company directly by the manufacture or retailer.
                        </p>
                    </div>
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
        <h3 class="text-center" style="color:red">Terms and Conditions Apply*</h3>
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