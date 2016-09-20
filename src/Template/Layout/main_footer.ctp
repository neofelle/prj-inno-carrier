<div class="full-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<?= $this->Html->image('footer-logo.png', ['class' => 'img-responsive']); ?>
			<p>&nbsp;</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			<ul class="social-icons">
				<li><a href="#"><?= $this->Html->image('fb.png') ?></a></li>
				<li><a href="#"><?= $this->Html->image('twitter.png') ?></a></li>
				<li><a href="#"><?= $this->Html->image('pin.png') ?></a></li>
				<li><a href="#"><?= $this->Html->image('g.png') ?></a></li>
			</ul>
			</div>
			<div class="col-md-3 ql">
			<h4>Quick Links</h4>
			<ul>
                <li <?php echo $nav_selected[0] == 'home' ? 'class="active"' : ''; ?>>
                  <?php echo $this->Html->link('Home',['controller' => 'Main', 'action' => 'index', '_full' => true]); ?>
                </li> 
                <li <?php echo $nav_selected[0] == 'about' ? 'class="active"' : ''; ?>>
                  <a class="" href="<?php echo $this->Url->build('/about-us'); ?>">About Us</a>
                </li>
                <li <?php echo $nav_selected[0] == 'products' ? 'class="active"' : ''; ?>>
                  <?php echo $this->Html->link('Products',['controller' => 'Products', 'action' => 'lists']); ?></a>
                </li>
                <li <?php echo $nav_selected[0] == 'about' ? 'class="active"' : ''; ?>>
                  <a class="" href="<?php echo $this->Url->build('/distributors'); ?>">Distributors</a>
                </li>
                <li <?php echo $nav_selected[0] == 'contact' ? 'class="active"' : ''; ?>>
                  <a class="" href="<?php echo $this->Url->build('/contact-us/', true); ?>">Contact Us</a>
                </li>
			</ul>			
			</div>
			<div class="col-md-3 cu">
			<h4>Contact Us</h4>
			<p><strong>Telephone:</strong> 1234567890
			<br>
			<strong>Fax:</strong> 1234567890<br>
			<strong>Email:</strong> 1234567890</p>
			</div>
			<div class="col-md-3">
			<h4>Location</h4>
			<?= $this->Html->image('map.jpg', ['class' => 'img-responsive']); ?>
			</div>
		</div>				
    </div> <!-- /container -->
	</div>		


	<div class="full-footer-bottom">
	<div class="container">
		<div class="row">		
			<p>Copyright © 2015</p>
		</div>	
    </div> <!-- /container -->
	</div>		
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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