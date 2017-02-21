<?php 
  /*
   *  Template to render the Research From form which 
   *  the user can download a predefined file (defined in hubspot)
   */
?>

<div class="hbspt-form"></div>
<!-- Modal -->
<div id="reportForm" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Download Report</h4>
      </div>
      <div class="modal-body">
        <h3><?php the_title(); ?></h3>
        <form action="" class="research-form form-horizontal simple-form">
          <p class="text-center"><strong>To access the full report, please provide the following info:</strong></p>
          <div class="control-group row">
            <div class="col-xs-5">
              <label class="control-label pull-right" for="firstNameINPUT">First Name*</label>
            </div>
            <div class="col-sm-6 col-xs-7">
              <div class="controls">
                <input id="firstNameINPUT" name="firstNameINPUT" type="text" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="control-group row">
            <div class="col-xs-5">
              <label class="control-label pull-right" for="lastNameINPUT">Last Name*</label>
            </div>
            <div class="col-sm-6 col-xs-7">
              <div class="controls">
                <input id="lastNameINPUT" name="lastNameINPUT" type="text" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="control-group row">
            <div class="col-xs-5">
              <label class="control-label pull-right" for="emailINPUT">Email*</label>
            </div>
            <div class="col-sm-6 col-xs-7">
              <div class="controls">
                <input id="emailINPUT" name="emailINPUT" type="email" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="control-group row">
            <div class="col-xs-5">
              <label class="control-label pull-right" for="companyINPUT">Company*</label>
            </div>
            <div class="col-sm-6 col-xs-7">
              <div class="controls">
                <input id="companyINPUT" name="companyINPUT" type="text" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="control-group row">
            <div class="col-xs-5">
              <label class="control-label pull-right" for="stateregionINPUT">State/Region*</label>
            </div>
            <div class="col-sm-6 col-xs-7">
              <div class="controls">
                <input id="stateregionINPUT" name="stateregionINPUT" type="text" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="control-group row">
            <div class="col-sm-12 col-xs-12">
              <div class="controls out-side-label">
                <label class="control-label  label-advice">(If US, please provide abbreviation)</label>
              </div>
            </div>
          </div>
          <p class="agreement">By clicking Submit. I agree to the <a href="<?php echo get_site_url(); ?>/privacy">Privacy Policy</a> and <a href="<?php echo get_site_url(); ?>/terms-conditions">Terms of Use</a>.</p>
          <div class="row modal-footer">
            <div class="col-xs-6">
              <input type="submit" class="btn btn-gray btn-form-submit pull-right" value="Submit">
            </div>
            <div class="col-xs-6">
              <button type="button" class="btn btn-gray btn-form-submit pull-left" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>