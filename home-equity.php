<!DOCTYPE html>
<html lang="en">
  <?php include_once "includes/headfiles.php"; ?>
  <body>
    <?php include_once "includes/header.php"; ?>
    <section class="secondary-banner about-us-banner">
        <div class="secondary-banner-wrapper ">
            <div class="banner-content">
                <h5>Home Equity</h5>
                <h1>Short story about <span>loans</span></h1>               
            </div>
        </div>
    </section>
    <section class="breadcums-sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <!--<li><a href="#">Loans</a></li>-->
                        <li><a href="#">Home Equity</a></li>
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
                        <h2>Having more equity is a good thing</h2>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="apply-pl-sec text-center">
                        <a href="contact.php"><button class="btn btn-default mf-btn-primary" type="button">Contact us</button></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <img class="img-responsive mar-b-20" src="./images/home_equity.jpg" >
                </div>
            </div>
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
                    <h3>Home equity is the market value of a homeowner's unencumbered interest in their real property, that is, the difference between the home's fair market value and the outstanding balance of all liens on the property.</h3>
                    <p>The property's equity increases as the debtor makes payments against the mortgage balance, or as the property value appreciates. In economics, home equity is sometimes called real property value. Home equity is not liquid. Home equity management refers to the process of using equity extraction via loans, at favorable, and often tax-favored, interest rates, to invest otherwise illiquid equity in a target that offers higher returns.</p>
                    <p>Home equity is a homeowner's interest in a home. It can increase over time if the property value increases or the mortgage loan balance is paid down.Put another way, home equity is the portion of your property that you truly “own.” You're certainly considered to own your home, but if you borrowed money to buy it, your lender also has an interest in it until you pay off the loan.</p>
                </div>
            </div>
           
            <div class="tags-wrapper">
                <div class="row">
                    <div class="col-sm-3">
                        <p>Tags</p>
                        <p><strong>Home Equity</strong></p>
                        <p></p>
                    </div>
                    <div class="col-sm-9">
                        <p>Home equity is typically a homeowner’s most valuable asset. That asset can be used later in life</p>
                        
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