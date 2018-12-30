<script type="text/javascript" src="pop-ups.js"></script>
<?php
include_once("header.php");
include_once('inc/config.php');
include_once('inc/master-class.php');
$masterclass	= new master;
include_once("pop-ups.php");
?>
<script type="text/javascript" src="search-master.js"></script>
<div id="page-wrapper" >
            <div id="page-inner">            
            <!--<a class="btn btn-primary btn-lg" role="button" style="float:right" href="new-admission.php">New Registration</a>-->           
               <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #445A74;">
                             Qualification&nbsp;&nbsp;<label for="search"></label><input type="text" id="searchQual" placeholder="Search"/>
                             <a class="btn btn-primary btn-gradient btn-sm" style="float:right;padding: 3px;background-color:#1F63AD;" href="javascript:;" onclick="PopupQualification()">Add Qualification</a>
                        </div>                       
                        <div class="panel-body">
                            <div class="table-responsive" style="overflow:scroll; height:450px;">
                                <table class="table table-striped table-bordered table-hover" id="tabqual" style="font-size:11px;" >
                                    <thead>
                                        <tr>
                                            <th>Qualification</th>
                                            <th>Action</th>
                                            <th>Date Created</th>
                                            <th>Created By</th>                      
                                            <th>Date Modifed</th>
                                            <th>Modified By</th>
                                            <th>IP Address</th>
                                            <th>MAC Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>  
                                    <?php 
									$qualificationlist = $masterclass->getQualification();									 
									while ($rowqualification=mysqli_fetch_array($qualificationlist)) 
										{
											$qualificationid	= $rowqualification['qualific_id'];
											$qualification		= $rowqualification['qualification'];
											$des_date_created	= $rowqualification['date_created'];
											$des_createdBy		= $rowqualification['created_by'];
											$des_date_modified	= $rowqualification['date_modified'];
											$des_modifiedBy		= $rowqualification['modified_by'];
											$des_ipaddress		= $rowqualification['ip_address'];
											$des_mac			= $rowqualification['mac_address'];										
											
									?>                              
                                        <tr>
                                            <td class="center"><?php echo $qualification; ?></td>
                                            <td align="center"><button type="button" onclick="PopupQualificationEdit(<?php echo $qualificationid;?>,'<?php echo $qualification; ?>')" class="btn btn-default btn-gradient btn-sm">Modify</button></td>
                                            <td class="center"><?php echo $des_date_created; ?></td>
                                            <td class="center"><?php echo $des_createdBy; ?></td>
                                            <td align="center"><?php echo $des_date_modified; ?></td>
                                            <td align="center"><?php echo $des_modifiedBy; ?></td>
                                            <td align="center"><?php echo $des_ipaddress; ?></td>
                                            <td align="center"><?php echo $des_mac; ?></td>                                        </tr>  
                                        <?php }?>                                                             
                                    </tbody>
                                </table>
                            </div> 
       					  </div>
                    	</div>
                    	<!-- end md 12 -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
<?php include_once("footer.php"); ?>