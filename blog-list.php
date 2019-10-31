<!DOCTYPE html>
<html lang="en">
  <?php include_once "includes/headfiles.php"; ?>
  <body>
    <?php include_once "includes/header.php"; ?>
    <section class="secondary-banner about-us-banner">
        <div class="secondary-banner-wrapper ">
            <div class="banner-content">
                <h5>List</h5>
                <h1>Short story about <span>alons</span></h1>               
            </div>
        </div>
    </section>
    <section class="breadcums-sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blogs List</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-list-sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="blog-left-wrapper">
                        <ul class="blog-list">
                            <li class="blog-item">
                                <h3 class="blog-title">The real reason why research firms exude market
                                intelligence</h3>
                                <img class="img-responsive blog-img" src="./images/blog-one.jpg">
                                <p class="blog-date">July 29, 2018    By  :  Rob mahfuz   Comment  ( 07 )</p>
                                <p>Global research and advisory firm MarketsandMarkets has clapped eyes on “off-the-shelf, readily available research on next-generation high-growth use cases and technologies, which will impact the future revenues of companies,” says CEO Sandeep Sugla</p>
                                <!--<p><a href="" class="read-more-btn" >Read more..</a></p>-->
                            </li>
                            <li class="blog-item">
                                <h3 class="blog-title">The real reason why research firms exude market
                                intelligence</h3>
                                <img class="img-responsive blog-img" src="./images/blog-one.jpg">
                                <p class="blog-date">July 29, 2018    By  :  Rob mahfuz   Comment  ( 07 )</p>
                                <p>Global research and advisory firm MarketsandMarkets has clapped eyes on “off-the-shelf, readily available research on next-generation high-growth use cases and technologies, which will impact the future revenues of companies,” says CEO Sandeep Sugla</p>
                                <!--<p><a href="" class="read-more-btn" >Read more..</a></p>-->
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="blog-right-wrapper">                       
                        <div class="form-group search-field">                                    
                            <div class="input-group">                                    
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-addon">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>                       
                       <div class="list-wrappers">
                           <h3>Blog Categories</h3>
                           <ul>
                               <li><a href="#">Design</a> </li>
                               <li><a href="#">Agency</a></li>
                               <li><a href="#">Photography</a></li>
                               <li><a href="#">Science</a></li>
                               <li><a href="#">Marketing</a></li>
                               <li><a href="#">Business</a></li>
                           </ul>
                       </div>
                       <div class="list-wrappers">
                            <h3>Archives</h3>
                            <ul>
                                <li><a href="#">February 2017</a></li>
                                <li><a href="#">January 2016</a></li>
                                <li><a href="#">February 2015</a></li>
                                <li><a href="#">January 2015</a></li>
                                <li><a href="#">January 2014</a> </li>
                                
                            </ul>
                        </div>
                        <div class="list-wrappers">
                            <h3>Blog Categories</h3>
                            <ul>
                                <li>Creative Design</li>
                                <li>Agency</li>
                                <li>Photography</li>
                                <li>Science</li>
                                <li>Marketing</li>
                                <li>Business</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            
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