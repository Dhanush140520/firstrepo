<!DOCTYPE html>
<html lang="en">
<?php include_once "includes/headfiles.php"; ?>

<body>
    <?php include_once "includes/header.php"; ?>
    <section class="secondary-banner education-loan-banner">
        <!-- <div class="secondary-banner-wrapper ">
            <div class="banner-content">
                <h5>Education Loan</h5>
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
                        <li><a href="education_loan.php">Education Loans</a></li>
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
                        <h2>A Right Career Begins With A Right Education.
                        </h2>
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
                    <img class="img-responsive mar-b-20" src="./images/education_loans.jpg" >
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
                    <h3>A student loan is a type of loan designed to help students pay for post-secondary education and the associated fees, such as tuition, books and supplies, and living expenses.</h3>
                    <p>There is no doubt about the importance of education these days. Be it school education or college education, it serves as a stepping stool for you to achieve your dreams. Whether it is college education or post graduation, don’t let high tuition fees hamper your growth. Getting an education loan is an easy way to finance your dreams. A student loan can help you get into the University of your Choice. The Government’s push on education means you can avail education loan subsidy, and you also get tax benefits for interest paid under Section 80E of the Income Tax Act. MIND FIN offers you different types of education loans in India to fulfill your dreams. Most of these student loans in India have a repayment period of 10-15 years and a moratorium of the course period and the specified number of months. All education loans do not need a security for a loan up to Rs. 4 lakhs.</p>
                    <h3>Availing an Education Loan from MIND FIN requires you to fulfill certain eligibility criteria. Find out the eligibility criteria for Education Loan, below.</h3>
                    <p>MIND FIN provides Education Loans for students looking to study in India and abroad. You can get a loan starting from Rs. 50,000 at attractive interest rates with benefits such as no pre-payment charges and no pre-closure charges. Find out the education loan eligibility criteria for availing an MIND FIN student loan.
                        The Education Loan will be provided to those students who have
                    </p>
                    <p>• Indian Citizenship
                        <br>• Secured at least 50% marks during HSC & Graduation
                        <br>• Who have obtained admission to career-oriented courses e.g. Medicine, Engineering, Management etc., either at the graduate or post-graduate level
                        <br>• Secured admission in India or Abroad through entrance test / merit based selection process post completion of HSC (10+2)
                        <br>• Documents displaying regular income is mandatory for the co-applicant( parents/sibling/guarantor)
                        <br>• The education loan eligibility will be determined by MIND FIN as per the Bank's policy prevailing at the time of loan application and disbursement.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="personal-heading">
                        <h3 class="sub-head-primary">Documents Required for Education Loan </h3>
                    </div>
                </div>
            </div>

            <ul class="doc_req_for_bl">
                <li>
                    <div class="step-content">KYC Documents</div>
                </li>
                <li>
                    <div class="step-content">Proof of Residence </div>
                </li>
                <li>
                    <div class="step-content">Demand letter from college or university</div>
                </li>
                <li>
                    <div class="step-content">Loan agreement signed by applicant, co-applicants</div>
                </li>
                <li>
                    <div class="step-content">Exam progress report, marksheet, bonafide certificate</div>
                </li>
                <li>
                    <div class="step-content">Form A2 signed by applicant or co-applicants in case of overseas institute</div>
                </li>
                

            </ul>
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
    <script>
                $(document).ready(function() {
                    $('.doc_req_for_bl').slick({
                        slidesToShow: 6,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        infinite: true,
                        dots: true,
                        responsive: [{
                            breakpoint: 568,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 2000,
                                infinite: true,
                                dots: true
                            }
                        }],
                    });
                });
            </script>
</body>

</html>