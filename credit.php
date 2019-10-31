<!DOCTYPE html>
<html lang="en">
  <?php include_once "includes/headfiles.php"; ?>
  <body>
    <?php include_once "includes/header.php"; ?>
    <section class="secondary-banner about-us-banner">
        <!-- <div class="secondary-banner-wrapper ">
            <div class="banner-content">
                <h5>Credit Cards</h5>
                <h1>Short story about <span>loans</span></h1>               
            </div>
        </div> -->
    </section>
    <section class="breadcums-sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <!--<li><a href="#">Loans</a></li>-->
                        <li><a href="#">Credit Cards</a></li>
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
                        <h2>Apply for top banks credit cards in India at Mindfin</h2>
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
                    <img class="img-responsive mar-b-20" src="./images/credit_card.jpg" >
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
                    <h3>A credit card is a payment card issued to users (cardholders) to enable the cardholder to pay a merchant for goods and services based on the cardholder's promise to the card issuer to pay them for the amounts plus the other agreed charges.</h3>
                    <p>A perfect place to compare and apply for best credit card in India online. You can find credit cards offered by major banks along with their features, benefits, fees, and latest offers, everything at a single place. The card issuer (usually a bank) creates a revolving account and grants a line of credit to the cardholder, from which the cardholder can borrow money for payment to a merchant or as a cash advance. Credit cards let you make high-ticket purchases on easy EMIs and make shopping more rewarding for you. Paisabazaar is the right place to find a credit card that best fits your needs and helps you make the most of your purchases.</p>
                    <p>A credit card is different from a charge card, which requires the balance to be repaid in full each month.[2] In contrast, credit cards allow the consumers to build a continuing balance of debt, subject to interest being charged. A credit card also differs from a cash card, which can be used like currency by the owner of the card.</p>
                </div>
            </div>
           
            <div class="tags-wrapper">
                <div class="row">
                    <div class="col-sm-3">
                        <p>Tags</p>
                        <p><strong>Credit Cards</strong></p>
                        <p></p>
                    </div>
                    <div class="col-sm-9">
                        <p>Today's customer-centric market has thus come with a solution for all - A credit card for every need. The partnership between card issuers and retailers made the categorization even simpler.</p>
                        
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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    
  </body>
</html>