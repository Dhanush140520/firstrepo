<!DOCTYPE html>
<html lang="en">
  <?php include_once "includes/headfiles.php"; ?>
  <body>
    <?php include_once "includes/header.php"; ?>
    <section class="secondary-banner about-us-banner">
        <div class="secondary-banner-wrapper ">
            <div class="banner-content">
                <h5>Lines Of Credit</h5>
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
                        <li><a href="#">Lines Of Credit</a></li>
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
                        <h2>More affordable auto loans to help build your credit.</h2>
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
                    <img class="img-responsive mar-b-20" src="./images/lineofcredit.jpg" >
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
                    <h3>A line of credit is a preset amount of money that a bank or credit union has agreed to lend you. You can draw from the line of credit when you need it, up to the maximum amount. You’ll pay interest on the amount you borrow.</h3>
                    <p>A line of credit gives you access to money “on demand.” It’s typically offered by lenders such as banks or credit unions, and, if you qualify, you can draw on it up to a maximum amount for a set period of time. You’ll only pay interest when you borrow on the line of credit. Once you pay back borrowed funds, that amount is again available for you to borrow. </p>
                    <p>key here: you can choose when to take out the money, pay it back and repeat, as long as you stick to the terms, including paying off what you borrow on time and in full. Lines of credit are often extended by banks, financial institutions and other licensed consumer lenders to creditworthy customers (though certain special-purpose lines of credit may not have creditworthiness requirements) to address liquidity problems; such a line of credit is often called a personal line of credit.</p>
                </div>
            </div>
           
            <div class="tags-wrapper">
                <div class="row">
                    <div class="col-sm-3">
                        <p>Tags</p>
                        <p><strong>Lines Of Credit</strong></p>
                        <p></p>
                    </div>
                    <div class="col-sm-9">
                        <p>If you’re planning a home project or some unexpected car-maintenance expenses come up, a line of credit could be a way to tackle those or other big costs.</p>
                        
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