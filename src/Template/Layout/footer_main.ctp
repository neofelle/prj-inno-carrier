<div class="footer"><!-- footer section start -->
  <div class="container">
    <div class="row ft">
      <div class="col-md-3">
        <h3> About Us</h3>
          <p> Innovative Carriers, Inc. is a licensed, bonded and insured freight broker specializing in all shipping services. Since 1999, we have been offering the utmost care and outstanding service for 3PL outsourced transportation with expedited shipping and competitive rates. Think of us an extension of your logistics department - with round the clock communications and expert planning coordination. </p>
        </div>
        <div class="col-md-2">
        <h3> Links</h3>
          <ul>
           <li><a href="http://104.236.106.66/#">Home </a></li>
           <li><a href="http://104.236.106.66/#">Services </a></li>
           <li><a href="http://104.236.106.66/#">Case Studies </a></li>
           <li><a href="http://104.236.106.66/#">Our Team </a></li>
           <li><a href="http://104.236.106.66/#">Resources </a></li>
           <li><a href="http://104.236.106.66/#">Request a Quote </a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3> Contact Us</h3>
          <p><b>Phone:</b> 718-218-7245 <br><b>Fax:</b> 718-218-8982<br><b>Email:</b> info@innovativecarriers.com <br><b>Web:</b> innovativecarriers.com <br><br><br></p>
          <img src="<?= $this->Url->build("/images/usa.png") ?>">
          <img src="<?= $this->Url->build("/images/canada.png") ?>">
          <p><span>Ship across USA and Canada? Join our vendor network!</span></p>
        </div>
        <div class="col-md-3 ">
          <img src="<?= $this->Url->build("/images/bbb_header.png") ?>" width="60%" vspace="50px">
          <div>
              <p> Signup for our newsletter </p>
              <div class="">
                <form role="form" onsubmit="return send_email();">
                  <div class="form-group">
                    <input type="text" class="form-control" id="app_email" placeholder="E-mail" required="">
                  </div>
                  <button type="submit" class="btn btn-block btn-orange btn-Submit">SUBMIT</button>
                  <small id="mail_msg"></small>
                </form>
              </div>
          </div>
        </div>
      </div>
    <div class="row ft">
      <div class="col-md-5">
        <p> <span>© Copyright 2016 Innovative Carriers. </span></p>
      </div>
      <div class="col-md-4">
        <img src="<?= $this->Url->build("/images/tia.png") ?>" alt="" width="100" >
      </div>
      <div class="col-md-3">
           <a href="http://104.236.106.66/#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"> </i></a> <a href="http://104.236.106.66/#"><i class="fa  fa-twitter-square fa-2x" aria-hidden="true"> </i> </a> <a href="http://104.236.106.66/#"><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"> </i></a> <a href="http://104.236.106.66/#"><i class="fa fa-flickr fa-2x" aria-hidden="true"> </i> </a>
        <p> ALL THE WAY™</p>
      </div>
    </div>
  </div>
</div><!-- footer section close -->
<?php 
  echo $this->Html->script('ic/jquery-1.10.2.js'); 
  echo $this->Html->script('ic/bootstrap.min.js'); 
  echo $this->Html->script('ic/jquery.easing.min.js'); 
  echo $this->Html->script('ic/form.js'); 
  echo $this->Html->script('ic/mail.js'); 
  echo $this->Html->script('ic/owl.theme.js'); 
  echo $this->Html->script('ic/owl.carousel.js'); 
?>
<script>
  $(document).ready(function() { 
  $("#owl-demo").owlCarousel({     
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true    
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false     
  });
 
});
</script>
</body>
</html>