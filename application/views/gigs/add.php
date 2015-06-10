<?php
/**
* index.php view page for generic gigs_form controller
*
*
* views/gigs_form/form.php
*
* @package ITC 260 Gig Central CodeIgnitor
* @subpackage Gig
* @author Patricia Barker <pbarke01@seattlecentral.edu>
* @version 1.0 2015/05/25
* @link http://www.tcbcommercialproperties.com/sandbox/ci/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Gig_model.php
* @see Gig.php
* @todo none
*/

   $this->load->view($this->config->item('theme') . 'header');
?>

<?php

echo '

<div class="container">
  <div class="col-lg-10">
    <h1>Gigs Form</h1>

        <form class="form-horizontal" role="form" method="post">

        <fieldset>
            <div class="form-group">
                <legend><h2><strong>Company Information</strong></h2></legend>
            </div>

            <div class="form-group">
                <label for="CompanyName" class="col-lg-3 control-label"><em>Company Name</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="CompanyName" name="CompanyName" placeholder="Company Name">
                    </div>
            </div>

            <div class="form-group">
                <label for="CompanyAddress" class="col-lg-3 control-label"><em>Company Address</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="CompanyAddress" name="CompanyAddress" placeholder="Company Address">
                    </div>
            </div>

            <div class="form-group">
                <label for="City" class="col-lg-3 control-label"><em>City</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="City" name="City" placeholder="City">
                    </div>
            </div>

            <div class="form-group">
                <label for="State" class="col-lg-3 control-label"><em>State</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="State" name="State" placeholder="State">
                    </div>
            </div>

            <div class="form-group">
                <label for="ZipCode" class="col-lg-3 control-label"><em>Zip Code</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="ZipCode" name="ZipCode" placeholder="Zip Code">
                    </div>
            </div>

            <div class="form-group">
                <label for="CompanyPhone" class="col-lg-3 control-label"><em>Company Phone</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="CompanyPhone" name="CompanyPhone" placeholder="Phone Number">
                    </div>
            </div>

            <div class="form-group">
                <label for="CompanyWebsite" class="col-lg-3 control-label"><em>Company Website</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="CompanyWebsite" name="CompanyWebsite" placeholder="Company Website">
                    </div>
            </div>

            <div class="form-group">
                <label for="Date" class="col-lg-3 control-label"><em>Gig Posting Date</em>&nbsp(mm/dd/yyyy)</label>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="Date" name="Date" placeholder="Date Gig Posted">
                    </div>
            </div>
        <br>
        <br>
                <fieldset>
                <legend><h3><strong>Company Gig Contact</strong></h3></legend>

            <div class="form-group">
                <label for="FirstName" class="col-lg-3 control-label"><em>First Name</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name">
                    </div>
            </div>

            <div class="form-group">
                <label for="LastName" class="col-lg-3 control-label"><em>Last Name</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name">
                    </div>
            </div>

            <div class="form-group">
                <label for="Email" class="col-lg-3 control-label"><em>Email</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Gig Contact Email">
                    </div>
            </div>

            <div class="form-group">
                <label for="Phone" class="col-lg-3 control-label"><em>Phone</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="Phone" name="Phone" placeholder="Gig Contact Phone">
                    </div>
            </div>
                </fieldset>
        <br>
        <br>
                <fieldset>
            <div class="form-group">         
                <label for="EmploymentType" class="col-lg-3 control-label"><em>Employment Type</em></label>
                    <div class="col-md-6">         
                        <select class="form-control" id="EmploymentType" name="EmploymentType">
                            <option value="select">Select One</option>
                            <option value="contract">Contract</option>
                            <option value="intern">Intern</option>
                            <option value="temporary">Temporary</option>                            
                            <option value="permanent">Permanent</option>
                        </select>
                    </div>
            </div>        
                </fieldset>
        <br>
                <fieldset>
            <div class="form-group">
                <label for="PayRate" class="col-lg-3 control-label"><em>Pay rate</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="PayRate" name="PayRate" placeholder="Pay rate">
                    </div>
            </div>
                </fieldset>
        <br>        
        <br>
                 <fieldset>
                <legend><h3><strong>Project/Gig Description</strong></h3></legend>
            <div class="form-group">
                <label for="GigOutline" class="col-lg-3 control-label hidden-label"><em>Gig Outline</em></label><br>
                    <div class="col-md-6">
                        <textarea class="form-control" rows="15" cols="25" id="GigOutline" name="GigOutline" placeholder="Project/Gig Description"></textarea>
                    </div>
            </div>
                </fieldset>       
        <br>
        <br>
                <fieldset>
                <legend><h3><strong>Gig Qualifications</strong></h3></legend>
            <div class="form-group">
                <label for="Qualifications" class="col-lg-3 control-label hidden-label"><em>Qualifications</em></label><br>
                    <div class="col-md-6">
                        <textarea  rows="15" cols="25" class="form-control" id="Qualifications" name="Qualifications" placeholder="Qualifications"></textarea>
                    </div>
            </div>
                </fieldset>
        <br>
        <br>
                <fieldset>
                <legend><h3><strong>Gig Project Special Instructions</strong></h3></legend>
            <div class="form-group">
                <label for="SpecialInst" class="col-lg-3 control-label hidden-label"><em>Special Instructions</em></label><br>
                    <div class="col-md-6">
                        <textarea rows="15" cols="25" class="form-control" id="SpecialInst" name="SpecialInst" placeholder="Special Instructions"></textarea>
                    </div>
            </div>
                </fieldset>
        <br>

                     </div>
            </div>
                        <button type="submit" class="btn btn-default">Submit</button>

        </fieldset>
        </form>
    </div>
</div>
';

    $this->load->view($this->config->item('theme') . 'footer');
?>
