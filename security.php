<!DOCTYPE html>
<html lang="en">
  <?php include_once "includes/headfiles.php"; ?>
  <body>
    <?php include_once "includes/header.php"; ?>
    <section class="secondary-banner about-us-banner">
        <!-- <div class="secondary-banner-wrapper ">
            <div class="banner-content">
                <h5>Security</h5>
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
                        <li><a href="about-us.php">Security</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
   
    <section class="our-values-sec">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <div class="sec-header-block">
                <h2 class="sub-head-primary">Our Core Values </h2>
                <h3 class="sub-head-secondary">To satisfy our customers  </h3>
                <div class="header-bottom-border"></div>
              </div>
          </div>
        </div>
        <ul class="values-list">
          <!--<li class="mission-sec">-->
          <!--    <div class="values-list-wrapper">                  -->
          <!--      <div class="value-item-wrapper">-->
          <!--          <h3 class="sub-head-secondary">OUR MISSION</h3>-->
          <!--          <p>We are acknowledge as a prominent service provider in this business domain. We provide our services for getting Unsecured Business Loan, SME Loan, MSME loan, Home Loan, Loan Against Property, Commercial Property Construction Loans, Construction Finance,  School and Colleges Funding , LC Bill Discounting Service, Project Finance Services</p>-->
          <!--      </div>            -->
          <!--      <div class="icon-wrapper">-->
          <!--          <img class="img-responsive center-block" src="./images/auto-loan.png">-->
          <!--      </div>                 -->
          <!--    </div>-->
          <!--</li>-->
          <li class="vision-sec">
              <div class="values-list-wrapper">                  
                <div class="value-item-wrapper">
                    <h3 class="sub-head-secondary">Security</h3>
                     <p>A secured loan is a loan in which the borrower pledges some asset (e.g. a car or property) as collateral for the loan, which then becomes a secured debt owed to the creditor who gives the loan. The debt is thus secured against the collateral, and if the borrower defaults, the creditor takes possession of the asset used as collateral and may sell it to regain some or all of the amount originally loaned to the borrower. An example is the foreclosure of a home. From the creditor's perspective, that is a category of debt in which a lender has been granted a portion of the bundle of rights to specified property. If the sale of the collateral does not raise enough money to pay off the debt, the creditor can often obtain a deficiency judgment against the borrower for the remaining amount.</p>
                </div>            
                <div class="icon-wrapper">
                    <img class="img-responsive center-block" src="./images/new_icons/security.png">
                </div>                 
              </div>
          </li>
          <!--<li class="purpose-sec">-->
          <!--    <div class="values-list-wrapper">                  -->
          <!--      <div class="value-item-wrapper">-->
          <!--          <h3 class="sub-head-secondary">OUR Purpose</h3>-->
          <!--           <p>We are acknowledge as a prominent service provider in this business domain. We provide our services for getting Unsecured Business Loan, SME Loan, MSME loan, Home Loan, Loan Against Property, Commercial Property Construction Loans, Construction Finance,  School and Colleges Funding , LC Bill Discounting Service, Project Finance Services</p>-->
          <!--      </div>            -->
          <!--      <div class="icon-wrapper">-->
          <!--          <img class="img-responsive center-block" src="./images/auto-loan.png">-->
          <!--      </div>                 -->
          <!--    </div>-->
          <!--</li>-->
        </ul>
      </div>
    </section>
    
    <?php include_once "includes/footer.php"; ?>
     <!--Modal-->
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
            
          </div>
        </form>
        </div>
      </div>
    </div>
   <script type="text/javascript">
    function c_validation(){
		 if(grecaptcha.getResponse() == ""){alert("Please confirm that you are not a robot.");return false}};
		</script>
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    
  </body>
</html>