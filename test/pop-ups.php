<?php include_once('header.php'); 
include_once('inc/Classes-class.php');
include_once('inc/fee-class.php');
include_once('inc/fee-mapping-class.php');

$getclass_action = new classes();
$getfeetype_action= new feeaction();
$getclassfeetype_action= new fee_class_mappingaction();


?>
<style>
th
{
	background-color:#A9BBD0;
}
</style>
 <!-- Start Pop Up country Layout -->                 
          <div id ="popup_country" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Country Name</label>
                                <input class="form-control" id="country" name="country" value="" required="required" maxlength="25" >
                           </div>
                         <input type="submit" name="savecountry"  value="Save"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
                
             </div>
          </div> 
          <!-- End Pop Up country Layout -->
          <!-- Start Pop Up country edit Layout -->                 
          <div id ="popup_country_edit" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Update Country Name</label>
                                <input class="form-control" id="countryedit" name="country" value="" required="required" maxlength="25" >
                           </div>
                         <input type="hidden" id="hid_cid" name="hid_cid" value="" />
                         <input type="submit" name="updatecountry"  value="Update"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
                
             </div>
          </div> 
          <!-- End Pop Up country edit Layout -->
          
<!-- Start Pop Up State Layout -->                 
          <div id ="popup_state" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data"  role="form" >
                    	   <div class="form-group">
                                <label>Select Country</label>
                                <select required name="countryid" id="country">
                                		<option value="">Select Country</option>
                                        <?php 
										$countrydd = $masterclass->getCountryList();									 
										while ($ddcountry=mysqli_fetch_array($countrydd)) 
										{
											$countryid		= $ddcountry['country_id'];
											$countryname	= $ddcountry['country'];
										?>
                                        <option value="<?php echo $countryid;?>"><?php echo $countryname; ?></option>
                                        <?php }?>
                                </select>
                           </div>
                          <div class="form-group">
                                <label>Input State Name</label>
                                <input class="form-control" id="state" name="state" value="" maxlength="25" required="required">
                           </div>
                         <input type="submit" name="savestate"  value="Save"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
                
             </div>
          </div> 
          <!-- End Pop Up State Layout -->
          <!-- Start Pop Up State Edit Layout -->                 
          <div id ="popup_state_edit" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Update State Name</label>
                                <input class="form-control" id="stateedit" name="state" value="" maxlength="25" required="required">
                           </div>
                          <input type="hidden" id="hid_sid" name="hid_sid" value="" />
                         <input type="submit" name="updatestate"  value="Update"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
                
             </div>
          </div> 
          <!-- End Pop Up State Edit Layout -->          
          <!-- Start Pop Up City Layout -->                 
          <div id ="popup_city" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                    	   <div class="form-group">
                                <label>Select Country</label>
                                <select name="countryCity" required id="country" onchange="getState(this.value)" class="form-control" style="width:28%; display:inline;">
                                		<option value="">Select Country</option>
                                        <?php 
										$countrydd = $masterclass->getCountryList();									 
										while ($ddcountry=mysqli_fetch_array($countrydd)) 
										{
											$countryid		= $ddcountry['country_id'];
											$countryname	= $ddcountry['country'];
										?>
                                        <option value="<?php echo $countryid;?>"><?php echo $countryname; ?></option>
                                        <?php }?>
                                </select>
                           <div id="statediv" style="display:inline;">                           		
                                <select required name="st_state" id="st_state" class="form-control" style="width:25%; display:inline;" >                                                  <option value="">Select State</option>
                                </select>
                            </div>
                         </div>
                         
                          <div class="form-group">
                                <label>Input City Name</label>
                                <input class="form-control" id="city" name="city" value="" maxlength="25" required="required">
                               
                           </div>
                         <input type="submit" name="savecity" onclick="javascript:return validateForm();"  value="Save"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
                
             </div>
          </div> 
          <!-- End Pop Up City Layout -->
          <!-- Start Pop Up City Edit Layout -->                 
          <div id ="popup_city_edit" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input City Name</label>
                                <input class="form-control" id="cityedit" name="city" value="" maxlength="25" required="required">
                           </div>
                           <input type="hidden" id="hid_cityid" name="hid_cityid" value="" />
                         <input type="submit" name="updatecity"  value="Update"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
             </div>
          </div> 
          <!-- End Pop Up City Edit Layout -->          
          <!-- Start Pop Up designation Layout -->                 
          <div id ="popup_designation" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Designation</label>
                                <input class="form-control" id="designation" name="designation" value="" maxlength="25" required="required" >
                           </div>
                         <input type="submit" name="savedesignation"  value="Save"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
                
             </div>
          </div> 
          <!-- End Pop Up designation Layout -->
           <!-- Start Pop Up Department Layout -->                 
          <div id ="popup_department" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Department</label>
                                <input class="form-control" id="department" name="department" value="" maxlength="25" required="required" >
                           </div>
                         <input type="submit" name="savedepartment"  value="Save"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
                
             </div>
          </div> 
          <!-- End Pop Up Department Layout -->
          <!-- Start Pop Up Edit designation Layout -->                 
          <div id ="popup_designation_edit" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Designation</label>
                                <input class="form-control" id="designationedit" name="designation" value="" maxlength="25" required="required" >
                           </div>
                           <input type="hidden" name="hid_desgid" id="hid_desgid" value="" />
                         <input type="submit" name="updatedesignation"  value="Update"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
                
             </div>
          </div> 
          <!-- End Pop Up Edit designation Layout -->
           <!-- Start Pop Up Edit Department Layout -->                 
          <div id ="popup_department_edit" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Department</label>
                                <input class="form-control" id="departmentedit" name="department" value="" maxlength="25" required="required" >
                           </div>
                           <input type="hidden" name="hid_deptid" id="hid_deptid" value="" />
                         <input type="submit" name="updatedepartment"  value="Update"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
                
             </div>
          </div> 
          <!-- End Pop Up Edit Department Layout -->
          
          <!-- Start Pop Up qualification Layout -->                 
          <div id ="popup_qualification" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Qualification</label>
                                <input class="form-control" id="qualification" name="qualification" value="" maxlength="25" required="required" >
                           </div>
                         <input type="submit" name="savequalification"  value="Save"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
                
             </div>
          </div> 
          <!-- End Pop Up qualification Layout -->
          <!-- Start Pop Up Edit qualification Layout -->                 
          <div id ="popup_qualification_edit" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Qualification</label>
                                <input class="form-control" id="qualificationedit" name="qualification" value="" maxlength="25" required="required" >
                           </div>
                           <input type="hidden" id="hid_qualid" name="hid_qualid" value="" />
                         <input type="submit" name="updatequalification"  value="Update"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
                
             </div>
          </div> 
          <!-- End Pop Up Edit qualification Layout -->
          
           <!-- Start Pop Up relation Layout -->                 
          <div id ="popup_relation" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Relation</label>
                                <input class="form-control" id="relation" name="relation" value="" maxlength="25" required="required" >
                           </div>
                         <input type="submit" name="saverelation"  value="Save"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
             </div>
          </div> 
          <!-- End Pop Up relation Layout -->
          
          <!-- Start Pop Up Edit relation Layout -->                 
          <div id ="popup_relation_edit" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Relation</label>
                                <input class="form-control" id="relationedit" name="relation" value="" maxlength="25" required="required" >
                           </div>
                         <input type="hidden" name="hid_relid" id="hid_relid" value="" />
                         <input type="submit" name="updaterelation"  value="Update"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
             </div>
          </div> 
          <!-- End Pop Up Edit relation Layout -->
           <!-- Start Pop Up Nationality Layout -->                 
          <div id ="popup_nationality" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Nationality</label>
                                <input class="form-control" id="nationality" name="nationality" value="" maxlength="25" required="required" >
                           </div>
                         <input type="submit" name="savenationality"  value="Save"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
             </div>
          </div> 
          <!-- End Pop Up Nationality Layout -->
          <!-- Start Pop Up Edit Nationality Layout -->                 
          <div id ="popup_nationality_edit" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Nationality</label>
                                <input class="form-control" id="nationalityedit" name="nationality" value="" maxlength="25" required="required" >
                           </div>
                         <input type="hidden" id="hid_natid" name="hid_natid" value="" />
                         <input type="submit" name="updatenationality"  value="Update"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
             </div>
          </div> 
          <!-- End Pop Up Edit Nationality Layout -->
          <!-- Start Pop Up Religion Layout -->                 
          <div id ="popup_religion" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Religion</label>
                                <input class="form-control" id="religion" name="religion" value="" maxlength="25" required="required" >
                           </div>
                         <input type="submit" name="savereligion"  value="Save"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
             </div>
          </div> 
          <!-- End Pop Up Religion Layout -->
           <!-- Start Pop Up Edit Religion Layout -->                 
          <div id ="popup_religion_edit" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Religion</label>
                                <input class="form-control" id="religionedit" name="religion" value="" maxlength="25" required="required" >
                           </div>
                           <input type="hidden" id="hid_regid" name="hid_regid" value="" />
                         <input type="submit" name="updatereligion"  value="Update"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
             </div>
          </div> 
          <!-- End Pop Up Edit Religion Layout -->
           <!-- Start Pop Up Category Layout -->                 
          <div id ="popup_category" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Category</label>
                                <input class="form-control" id="category" name="category" value="" maxlength="25" required="required" >
                           </div>
                         <input type="submit" name="savecategory"  value="Save"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
             </div>
          </div> 
          <!-- End Pop Up Category Layout -->
          <!-- Start Pop Up Edit Category Layout -->                 
          <div id ="popup_category_edit" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Category</label>
                                <input class="form-control" id="categoryedit" name="category" value="" maxlength="25" required="required" >
                           </div>
                           <input type="hidden" id="hid_categ" name="hid_categ" value="" />
                         <input type="submit" name="updatecategory"  value="Update"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
             </div>
          </div> 
          <!-- End Pop Up Edit Category Layout -->
           <!-- Start Pop Up Occupation Layout -->                 
          <div id ="popup_occupation" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Occupation</label>
                                <input class="form-control" id="occupation" name="occupation" value="" maxlength="25" required="required" >
                           </div>
                         <input type="submit" name="saveoccupation"  value="Save"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
             </div>
          </div> 
          <!-- End Pop Up Occupation Layout -->
           <!-- Start Pop Up Edit Occupation Layout -->                 
          <div id ="popup_occupation_edit" class="popup" style="position: fixed;width: 100%;height: 100%;margin: 0 auto;top: 0;left: 0;z-index: 99999999999; display:none" >
         <div style="z-index: -1; top: 0; left: 0; bottom: 0; right: 0px; position: fixed;
            opacity: 0.6; filter: alpha(opacity=6); background-color: Gray;">
        </div>
              <div class="panel-body" style="width: 560px;margin: 0 auto;background: #fff;padding: 28px;border: 1px solid #0D0D0D;margin-top: 10%;box-shadow: 1px 2px 3px #ccc;border-radius: 8px;">
                 <div class="row">
                   <div>
                    <form method="post" action="master-action.php" enctype="multipart/form-data" role="form" >
                          <div class="form-group">
                                <label>Input Occupation</label>
                                <input class="form-control" id="occupationedit" name="occupation" value="" maxlength="25" required="required" >
                           </div>
                         <input type="hidden" name="hid_occupid" id="hid_occupid" value="" />
                         <input type="submit" name="updateoccupation"  value="Update"/>
                         <input type="button" name="close"  value="Close" onclick="$('.popup').hide();"/>                      
                    </form>
                   </div>
                </div>
             </div>
          </div> 
          <!-- End Pop Up Edit Occupation Layout -->
		  
		  
		  