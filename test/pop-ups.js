function PopupCountry() {
	  //var country;	   
	 
    $("#popup_country").show();
	//document.getElementById('phone').value = phone;	
	return false;
   }
   function PopupCountryEdit(cid,cname) {
	  var cname;
	  var cid;
	  //alert(cname);
	 
    $("#popup_country_edit").show();
	$("#countryedit").val(cname);
	$("#hid_cid").val(cid);
	//document.getElementById('phone').value = phone;	
	return false;
   }
   
   function PopupState()
   {
	   $("#popup_state").show();
	  return false;
   }
   
   function PopupStateEdit(sid,sname)
   {
	   var sid;
	   var sname;
	   
	   $("#popup_state_edit").show();
	   $("#stateedit").val(sname);
	   $("#hid_sid").val(sid);
	   return false;
   }
  
   function PopupCity()
   {
	   $("#popup_city").show();
	  // $("#stateedit").val(sname);
	  // $("#hid_sid").val(sid);
	   return false;
   }
   function PopupCityEdit(cityId,cityname)
   {
	   var cityId;
	   var cityname;
	   $("#popup_city_edit").show();
	   $("#cityedit").val(cityname);
	   $("#hid_cityid").val(cityId);
	   return false;
   }
   function PopupDesignation()
   {
	   $("#popup_designation").show();
	   return false;
   }
   function PopupDepartment()
   {
	   $("#popup_department").show();
	   return false;
   }
   
    function PopupDesignationEdit(desId,designation)
   {
	   var desId;
	   var designation;
	   $("#popup_designation_edit").show();
	   $("#designationedit").val(designation);
	   $("#hid_desgid").val(desId);
	   return false;
   }
   function PopupDepartmentEdit(deptId,Department)
   {
	   var deptId;
	   var Department;
	 
	   $("#popup_department_edit").show();
	   $("#departmentedit").val(Department);
	   $("#hid_deptid").val(deptId);
	   return false;
   }
   function PopupQualification()
   {
	   $("#popup_qualification").show();
	   return false;
   }
   function PopupQualificationEdit(qualId,qualification)
   {
	   var qualId;
	   var qualification;
	   $("#popup_qualification_edit").show();
	   $("#qualificationedit").val(qualification);
	   $("#hid_qualid").val(qualId);
	   return false;
   }
   function PopupRelation()
   {
	   $("#popup_relation").show();
	   return false;
   }
   function PopupRelationEdit(relId,relation)
   {
	   var relId;
	   var relation;
	   $("#popup_relation_edit").show();
	   $("#relationedit").val(relation);
	   $("#hid_relid").val(relId);
	   return false;
   }
   function PopupNationality()
   {
	   $("#popup_nationality").show();
	   return false;
   }
   function PopupNationalityEdit(natId,nationality)
   {
	   var natId;
	   var nationality;
	   $("#popup_nationality_edit").show();
	   $("#nationalityedit").val(nationality);
	   $("#hid_natid").val(natId);
	   return false;
   }
   function PopupReligion()
   {
	   $("#popup_religion").show();
	   return false;
   }
   function PopupReligionEdit(regId,religion)
   {
	   var regId;
	   var religion;
	   $("#popup_religion_edit").show();
	   $("#religionedit").val(religion);
	   $("#hid_regid").val(regId);
	   return false;
   }
   function PopupCategory()
   {
	   $("#popup_category").show();
	   return false;
   }
   function PopupCategoryEdit(categId,category)
   {
	   var categId;
	   var category;
	   $("#popup_category_edit").show();
	   $("#categoryedit").val(category);
	   $("#hid_categ").val(categId);
	   return false;
   }
   function PopupOccupation()
   {
	   $("#popup_occupation").show();
	   return false;
   }
   function PopupOccupationEdit(occupId,occupation)
   {
	   var occupId;
	   var occupation;
	   $("#popup_occupation_edit").show();
	   $("#occupationedit").val(occupation);
	   $("#hid_occupid").val(occupId);
	   return false;
   }
    function PopupFeestructure(class_id)
   {
	   var class_id;
	  // alert(class_id);
	  // var occupation;
	   $("#popup_classfee_details").show();
	   $("#class_id").val(class_id);
	   //$("#hid_occupid").val(occupId);
	   return false;
   }
   
   

