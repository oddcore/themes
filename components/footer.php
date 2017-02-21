<?php
/* Footer Component.
 *
 * USAGE:
 * render_component("footer");
 */

global $sitepress;
?>

<footer class="content-info" role="contentinfo">
  	<!--[if lte IE 8]>
  	<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
  	<![endif]-->
 	<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
  	<div class="container-fluid footer">
	  	<div class="links-and-submit">
		  	<div class="row">
		  		<div class="links col-xs-12 col-md-8 col-lg-7">
		  			<?php if (has_nav_menu( 'footer_navigation')) : wp_nav_menu(array( 'theme_location'=> 'footer_navigation', 'menu_class' => 'footer-bar')); endif; ?>
		  		</div>
		  		
		  		<div class="form col-xs-12 col-md-4 col-lg-5">
		  			<form class="footer-newsletter col-xs-12">
			  			<p class="input-label">Sign-Up for Undertone Updates</p>
			  			<div class="form-group input-container">
			  				<input type="button" class="submit-email btn btn-default pull-left form-control" value="Click Here to Sign-Up">
			  			</div>	  			
		  			</form>
		  		</div>
		  	</div>
	  	  	<div class="triangle-background"></div>
	  	</div>
	  	<div class="copyright">
	  		<p class="copy text-center">© 2015 Copyright Intercept Interactive Inc. All right reserved.</p>
	  	</div>
  		<div class="hbspt-form-footer"></div>
  		<div class="hbspt-form-footer-complete"></div>
		<div class="modal fade" id="newsletter-part2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Sign-Up for Undertone Updates</h4>
						<p class="form-note">NOTE: If you are a consumer looking for more information on an ad that you were served by Undertone, <a href="<?php echo $sitepress->language_url(ICL_LANGUAGE_CODE); ?>opt-out-tool">click here</a>.</p>
					</div>
					<div class="modal-body">
						<form class="newsletter-complete form-horizontal simple-form">
							<div class="control-group row">
								<div class="col-xs-4">
									<label class="control-label pull-right" for="newsFirstName">First Name*</label>
								</div>
								<div class="col-sm-6 col-xs-6">
									<div class="controls">
										<input id="newsFirstName" name="newsFirstName" type="text" class="form-control step">
										<span class="response-required">*</span>
									</div>
								</div>
							</div>
							<div class="control-group row">
								<div class="col-xs-4">
									<label class="control-label pull-right" for="newsLastName">Last Name*</label>
								</div>
								<div class="col-sm-6 col-xs-6">
									<div class="controls">
										<input id="newsLastName" name="newsLastName" type="text" class="form-control step">
										<span class="response-required">*</span>
									</div>
								</div>
							</div>
							<div class="control-group row">
								<div class="col-xs-4">
									<label class="control-label pull-right" for="newsJob">Job Title*</label>
								</div>
								<div class="col-sm-6 col-xs-6">
									<div class="controls">
										<input id="newsJob" name="newsJob" type="text" class="form-control step">
										<span class="response-required">*</span>
									</div>
								</div>
							</div>
							<div class="control-group row">
								<div class="col-xs-4">
									<label class="control-label pull-right" for="newsCompany">Company*</label>
								</div>
								<div class="col-sm-6 col-xs-6">
									<div class="controls">
										<input id="newsCompany" name="newsCompany" type="text" class="form-control step">
										<span class="response-required">*</span>
									</div>
								</div>
							</div>
							<div class="control-group row" >
								<div class="col-xs-4">
									<label class="control-label pull-right" for="newsEmail">Email*</label>
								</div>
								<div class="col-sm-6 col-xs-6">
									<div class="controls">
										<input id="email2" name="email2" type="text" class="form-control step">
										<span class="response-required">*</span>
									</div>
								</div>
							</div>
							<p class="text-center">Tell us what you are interested in <strong>(Select at least one)</strong>:</p>
							<div class="control-group row">
								<div class="option">
									<div class="col-xs-4"><input class="pull-right footer-interest" value="" name="Advertising" type="checkbox"></div>
									<div class="col-sm-6 col-xs-6"><span class="pull-left">Advertising</span></div>
								</div>
								<div class="option">
									<div class="col-xs-4"><input class="pull-right footer-interest" name="Brand Opportunities" type="checkbox"></div>
									<div class="col-sm-6 col-xs-6"><span class="pull-left">Brand Opportunities</span></div>
								</div>
								<div class="option">
									<div class="col-xs-4"><input class="pull-right footer-interest" name="Publisher Opportunities" type="checkbox"></div>
									<div class="col-sm-6 col-xs-6"><span class="pull-left">Publisher Opportunities</span></div>
								</div>
								<div class="option">
									<div class="col-xs-4"><input class="pull-right footer-interest" name="Working at Undertone" type="checkbox"></div>
									<div class="col-sm-6 col-xs-6"><span class="pull-left">Working at Undertone</span></div>
								</div>
								<div class="option">
									<div class="col-xs-4"><input class="pull-right footer-interest" name="Press and Media Questions" type="checkbox"></div>
									<div class="col-sm-6 col-xs-6"><span class="pull-left">Press and Media Questions</span></div>
								</div>
								<div class="option">
									<div class="col-xs-4"><input class="pull-right footer-interest" name="...I'm not sure" type="checkbox"></div>
									<div class="col-sm-6 col-xs-6"><span class="pull-left">...I'm not sure</span></div>
								</div>
							</div>
							<div class="control-group row">
								<div class="col-xs-12 col-sm-12 sucess-message-form">
									<h3>Thank you! Your information has been submitted.</h3>
									<button type="button" aria-hidden="true" class="btn btn-gray btn-okay " data-dismiss="modal">okay</button>
								</div>
							</div>
							<div id="modal-buttons" class="row modal-footer">
								<div class="col-xs-6 ">
									<input type="submit" class="modal-footer-submit btn btn-gray btn-form-submit btn-form-modal-sm pull-right" value="Sign-Up">
								</div>
								<div class="col-xs-6">
									<button type="button" class="btn btn-gray btn-form-submit btn-form-modal-sm pull-left" data-dismiss="modal">Cancel</button>
								</div>
							</div>
		                </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- geo ip redirect -->
<script type="text/javascript">
	// Disabled
	// $.get("http://ipinfo.io", function(response) {	    
	//     var host = window.location.hostname;
	//     if(response.country == 'GB' && !window.location.href.indexOf("en-uk") > -1){
	//     	window.location.href = host+'/en-uk/';
	//     } else if (response.country == 'DE' && !window.location.href.indexOf("de") > -1){
	//     	window.location.href = host+'/de/';
	//     }
	// }, "jsonp");
</script>
<?php if(is_page( 'unmissable-landing-page' ) || is_page( 'unmissable' )){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/patch/js/verge.min.js"></script>	
	<script src="<?php bloginfo('template_directory'); ?>/patch/js/v1.js"></script>
<?php } ?>
<script>
  $('document').ready(function() {

	<?php  if (ICL_LANGUAGE_CODE == 'de') { ?>
		app.components.footer.init('#hsForm_b047913d-98d7-479d-be88-a8062ae583a1');
		hbspt.forms.create({
	      portalId: '388551',
	      formId: 'b047913d-98d7-479d-be88-a8062ae583a1',
	      target: '.hbspt-form-footer-complete'
	    });  
	<?php }else if(ICL_LANGUAGE_CODE == 'en-uk'){ ?>
		app.components.footer.init('#hsForm_5e54d102-4332-49b0-88e9-7de532a0d99f');
		hbspt.forms.create({
	      portalId: '388551',
	      formId: '5e54d102-4332-49b0-88e9-7de532a0d99f',
	      target: '.hbspt-form-footer-complete'
	    });  
	<?php }else{ ?> //USA FORM
		app.components.footer.init('#hsForm_e913810f-a7c2-4198-ac1d-6680d3a9b75e');
		hbspt.forms.create({
	      portalId: '388551',
	      formId: 'e913810f-a7c2-4198-ac1d-6680d3a9b75e',
	      target: '.hbspt-form-footer-complete'
	    });  
	<?php } ?>
  });
</script>