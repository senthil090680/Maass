<?php
session_start();

	
	// Education and Occupation 
	$_SESSION['Education']= strip_tags($_POST['txtEdu']);
	$_SESSION['EduDetails']= strip_tags($_POST['txtEdudetails']);
	$_SESSION['Annualincome']= strip_tags($_POST['txtIncome']); 
	$_SESSION['Occupation']= strip_tags($_POST['txtOccu']); 
	$_SESSION['Employedin']= strip_tags($_POST['txtEmp']);
	
	//Physical Attributes
	$_SESSION['Height']= strip_tags($_POST['txtHeight1']); 
	$_SESSION['Weight']= strip_tags($_POST['txtWeight']); 
	$_SESSION['BloodGroup']= strip_tags($_POST['txtBlood']); 
	$_SESSION['Bodytype']= strip_tags($_POST['txtBody']); 
	$_SESSION['Complexion']= strip_tags($_POST['txtComplexion']);
	$_SESSION['Diet']= strip_tags($_POST['txtDiet']);
	$_SESSION['Smoke']= strip_tags($_POST['txtSmoke']);
	$_SESSION['Drink']= strip_tags($_POST['txtDrink']);
	
	// Contact Details 
	$_SESSION['Address']= strip_tags($_POST['txtAddress']);
	$_SESSION['City']= strip_tags($_POST['City']); 
	$_SESSION['State']= strip_tags($_POST['ResidingState']); 
	$_SESSION['Country']= strip_tags($_POST['txtCountry']);
   $_SESSION['Code']= strip_tags($_POST['txtCC']);
   $_SESSION['Areacode']= strip_tags($_POST['txtAC']);
 
	$sCC = strip_tags($_POST['txtCC']);
	$sAC = strip_tags($_POST['txtAC']);
	$sPhone = strip_tags($_POST['txtPhone']);
	$ssep="-";
	$_SESSION['Phone']= $sCC.$ssep.$sAC.$ssep.$sPhone;
	$_SESSION['Mobile']= strip_tags($_POST['txtMobile']);
	$_SESSION['Residencein']= strip_tags($_POST['txtRes']);
//Dim StrIP As String = Request.ServerVariables("REMOTE_ADDR") 
//	msg5.text = Request.ServerVariables("REMOTE_ADDR") 

?>






<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html40/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="vs_defaultClientScript" content="JavaScript">
<title>Free Online Registration</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	font-size: 10px;
	color: #333333;
}
.style2 {color: #FF0000}
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style4 {font-size: 13px; color: #ff0000;}
.style5 {color: #000000; font-size: 11px;}
-->
</style>
</head>
<script>
function smutEngine() {
smut="..";
cmp="sex babes shit fuck damn porno cum cunt prick pecker ass fucking xxx XXX yahoo msn rediff gmail hotmail sify rediffmail www http"
+"asshole pedophile man-boy man/boy dong twat";
txt=document.MatriForm.txtmsg.value;
tstx="";
for (var i=0;i<16;i++){
pos=cmp.indexOf(" ");
wrd=cmp.substring(0,pos);
wrdl=wrd.length
cmp=cmp.substring(pos+1,cmp.length);
while (txt.indexOf(wrd)>-1){
pos=txt.indexOf(wrd);
txt=txt.substring(0,pos)+smut.substring(0,wrdl)
+txt.substring((pos+wrdl),txt.length);
   }
}
document.MatriForm.txtmsg.value=txt;
}
// End -->
</script>

<script>
function stringFilter (input) {
s = input.value;
filteredValues = "1234567890@/#$%^&*()_-=|][}.,;:?'{!\><";     // Characters stripped out
var i;
var returnString = "";
for (i = 0; i < s.length; i++) {  // Search through string and append to unfiltered values to returnString.
var c = s.charAt(i);
if (filteredValues.indexOf(c) == -1) returnString += c;
}
input.value = returnString;
}
//  End -->
</script>

<script language="javascript">
function ValidateNo( NumStr, String ) 
	{
 		for( var Idx = 0; Idx < NumStr.length; Idx ++ )
 		{
			 var Char = NumStr.charAt( Idx );
			 var Match = false;

				for( var Idx1 = 0; Idx1 < String.length; Idx1 ++) 
				{
					 if( Char == String.charAt( Idx1 ) ) 
					 Match = true;
				}
				
				if ( !Match ) 
					return false;
 		}

        	return true;
	}


	
	function ResetValues()
	{
		var MatriForm = this.document.MatriForm;

		
		MatriForm.txtLooking.value = "";
		MatriForm.txtmsg = "";
		MatriForm.txtFD = "";
		MatriForm.txtPPE = "";
	
		return true;
	}

	
	
	
	// Function to validate all the inputs
	function Validate(  )
	{
		var MatriForm = this.document.MatriForm;
		
	
	
	// Check Looking Field
		
	
		// Check Profile
		if ( MatriForm.txtmsg.value == "" )
		{
			alert( "Please Enter your Profile" );	
			MatriForm.txtmsg.focus( );
			return false;
		}
		
		// Profile Min Chars 
		if ( MatriForm.txtmsg.value.length < 50 )
		{
			alert( "Profile must be atleast 50 chars." );	
			MatriForm.txtmsg.focus( );
			return false;
		}
		
		// Profile Max Chars
		if ( MatriForm.txtmsg.value.length > 1000 )
		{
			alert( "Please do not enter more than 1000 chars. Please shorten your Profile and submit again." );	
			MatriForm.txtmsg.focus( );
			return false;
		}
		

var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var i = 0; i < MatriForm.txtmsg.value.length; i++) {
  	if (iChars.indexOf(MatriForm.txtmsg.value.charAt(i)) != -1) {
  	alert ("Special characters and numbers are not allowed in Profile.\n Please remove them.");
	MatriForm.txtmsg.focus( );
  	return false;
  	}
  }



  
  
  



		
		// Check Family Details
		if ( MatriForm.txtFD.value.length > 300 )
		{
			alert( "Please do not enter more than 300 chars. Please shorten your Family Details and submit again." );	
			MatriForm.txtFD.focus( );
			return false;
		}



var jChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";

  for (var j = 0; j < MatriForm.txtFD.value.length; j++) {
  	if (jChars.indexOf(MatriForm.txtFD.value.charAt(j)) != -1) {
  	alert ("Special characters are not allowed in Family Details.\n Please remove them.");
	MatriForm.txtFD.focus( );
  	return false;
  	}
  }
  
  
  var kChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var k = 0; k < MatriForm.txtFO.value.length; k++) {
  	if (kChars.indexOf(MatriForm.txtFO.value.charAt(k)) != -1) {
  	alert ("Special characters and numbers are not allowed in Family Origin.\n Please remove them.");
	MatriForm.txtFO.focus( );
  	return false;
  	}
  }
  
  
  var lChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var l = 0; l < MatriForm.txtFANAME.value.length; l++) {
  	if (lChars.indexOf(MatriForm.txtFANAME.value.charAt(l)) != -1) {
  	alert ("Special characters and numbers are not allowed in Father Name.\n Please remove them.");
	MatriForm.txtFANAME.focus( );
  	return false;
  	}
  }
  
  
   var mChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var m = 0; m < MatriForm.txtFFO.value.length; m++) {
  	if (mChars.indexOf(MatriForm.txtFFO.value.charAt(m)) != -1) {
  	alert ("Special characters and numbers are not allowed in Father Occupation.\n Please remove them.");
	MatriForm.txtFFO.focus( );
  	return false;
  	}
  }
  
  
   var nChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var n = 0; n < MatriForm.txtMONAME.value.length; n++) {
  	if (nChars.indexOf(MatriForm.txtMONAME.value.charAt(n)) != -1) {
  	alert ("Special characters and numbers are not allowed in Mother Name.\n Please remove them.");
	MatriForm.txtMONAME.focus( );
  	return false;
  	}
  }
  
   var oChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var o = 0; o < MatriForm.txtFMO.value.length; o++) {
  	if (oChars.indexOf(MatriForm.txtFMO.value.charAt(o)) != -1) {
  	alert ("Special characters and numbers are not allowed in Mother Occupation.\n Please remove them.");
	MatriForm.txtFMO.focus( );
  	return false;
  	}
  }





		
if ( !MatriForm.txtLooking[0].checked && !MatriForm.txtLooking[1].checked && !MatriForm.txtLooking[2].checked && !MatriForm.txtLooking[3].checked)
		{
			alert( "Please Select the Looking for." );
			MatriForm.txtLooking[0].focus( );
			return false;
		}
	

if ( MatriForm.Fromage.value == "" )
		{
			alert( "Please Enter your Expected From Age." );
			MatriForm.Fromage.focus( );
			return false;
		}



if(isNaN(document.MatriForm.Fromage.value)) 
		{ 
		 alert("Age should be only numbers."); 
		document.MatriForm.Fromage.focus();
		 return false; 
		}
		

if(document.MatriForm.Fromage.value < 18 )
		{ 
		 alert("Age should be 18 And Above."); 
		 document.MatriForm.Fromage.focus();
		 return false; 
		}



if ( MatriForm.Toage.value == "" )
		{
			alert( "Please Enter your Expected To Age." );
			MatriForm.Toage.focus( );
			return false;
		}

		
		if(document.MatriForm.Toage.value < 18 )
		{ 
		 alert("Age should be 18 And Above."); 
		 document.MatriForm.Toage.focus();
		 return false; 
		}






if ( MatriForm.religion.selectedIndex == 0 )
		{
			alert( "Please Select your Expected Religion." );	
			MatriForm.religion.focus( );
			return false;
		}


if ( MatriForm.caste.selectedIndex == 0 )
		{
			alert( "Please Select your Expected Caste." );	
			MatriForm.caste.focus( );
			return false;
		}
		
		// Check Partner Expectation details
		if ( MatriForm.txtPPE.value.length > 300 )
		{
			alert( "Please do not enter more than 300 chars. Please shorten your Partner Expectation and submit again." );	
			MatriForm.txtPPE.focus( );
			return false;
		}




 var pChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var p = 0; p < MatriForm.txtPPE.value.length; p++) {
  	if (pChars.indexOf(MatriForm.txtPPE.value.charAt(p)) != -1) {
  	alert ("Special characters and numbers are not allowed in Partner Preference.\n Please remove them.");
	MatriForm.txtPPE.focus( );
  	return false;
  	}
  }


var qChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var q = 0; q < MatriForm.txtOh.value.length; q++) {
  	if (qChars.indexOf(MatriForm.txtOh.value.charAt(q)) != -1) {
  	alert ("Special characters and numbers are not allowed in Other Hobbies.\n Please remove them.");
	MatriForm.txtOh.focus( );
  	return false;
  	}
  }
  
  
  var rChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var r = 0; r < MatriForm.txtOi.value.length; r++) {
  	if (rChars.indexOf(MatriForm.txtOi.value.charAt(r)) != -1) {
  	alert ("Special characters and numbers are not allowed in Other Interest.\n Please remove them.");
	MatriForm.txtOi.focus( );
  	return false;
  	}
  }


	
	return true;
	}

		</script> 



<script>
<!--
function clearform()
	{
	
//		MatriForm.txtEdu.value = "1"
		//MatriForm.txtAddress.value = ""
		//MatriForm.txtAddress.value = ""
	//	MatriForm.txtAddress.value = ""
		//MatriForm.txtAddress.value = ""
		////MatriForm.txtAddress.value = ""
	//	MatriForm.txtAddress.value = ""
		MatriForm.txtEdudetails.value = ""
		
		MatriForm.txtAddress.value = ""
		MatriForm.txtCity.value = ""
		MatriForm.txtState.value = ""
		MatriForm.txtPhone.value = ""
		
		
	}
//-->
</script>


<script language="JavaScript">
<!--
function textCounter(field,cntfield,maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else
cntfield.value = maxlimit - field.value.length;
}
//  End -->

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>



		
<script language="JavaScript">

function caste_disable(obj){
	if(obj.options[obj.selectedIndex].text != 'Hindu' &&
		obj.options[obj.selectedIndex].text != 'Muslim' &&
		obj.options[obj.selectedIndex].text != 'Christian' &&
		obj.options[obj.selectedIndex].text != 'Jain' &&
		obj.options[obj.selectedIndex].text != 'Sikh'){
		document.MatriForm.caste.disabled = true;
	}
	else {
		document.MatriForm.caste.disabled = false;
		get_caste(obj.form.religion,0);
	}
}
//-->
</script>


	<script language="javascript">

	var caste=new Array();
caste["Hindu"] = ["6000 Niyogi","96K Kokanastha","Adi Dravida","Agarwal","Anavil Brahmin","Arora","Arya Vysya","Aryasamaj","Audichya Brahmin","Bahi","Balija Naidu","Bengali","Bengali Brahmin","Bhandari","Billava","Brahmin","Brahmin Bhumihar","Brahmin Goswami","Brahmin Kanada Madhva","Brahmin Kanyakubja","Brahmin Niyogi Nandavariki","Brahmin Saryuparin","Brahmin Tyagi","Bunt","Chaurasia","Chettiar","Coorgi","Davadnya Brahmin","Dawoodi Bhora","Deshastha Brahmin","Devanga","Dhaneshawat Vaish","Dhiman Brahmin","Digambar","Ezhava","Ezhuthachan","Garhwali Brahmins","Garhwali Rajput","Gomantak Maratha","Goswami","Gounder","Gour Brahmin","Gowd Saraswat Brahmin","Gowda","Gujarati","Gupta","Gurjar","Havyaka Brahmin","Iyengar","Iyer","Iyer Brahmin","Jaiswal","Jat","Kalar","Kalinga Vysya","Kamboj","Kamma","Kannada Mogaveera","Kapu","Kapu Naidu","Karhade Brahmin","Karuneekar","Kashmiri Pandit (Brahmin)","Kashyap","Kayastha","Khatri","Kokanastha Brahmin","Kongu Vellala Gounder","Kori","Koshti","Kshatriya","Kumaoni Brahmins","Kumaoni Rajput","Kumawat","Kumbara","Kunbi","Kurmi","Kuruba","Leva Patil","Lingayat","Lohana","Maithil Brahmin","Malayalee Namboodiri","Malayalee Variar","Mali","Maharashtrian","Maharashtrian Brahmin","Maheshwari","Maratha","Maruthuvar","Marvar","Marwari","Maurya","Menon","Mudaliar","Mudaliar Arcot","Mudaliar Saiva","Mudaliar Senguntha","Mukulathur","adar","agar Brahmin","aidu","air","air Vaniya","ambiar","epali","OBC (Barber-Naayee)","Padmashali","Patel Desai","Patel Kadva","Patel Leva","Perika","Pillai","Prajapati","Punjabi","Punjabi Brahmin","Rajput","Reddy","Saraswat Brahmins","Sahu","Scheduled Caste","Sepahia","Setti Balija","Sindhi","Somvanshi","Sonar","Sowrashtra","Sozhiya Vellalar","Sutar","Swarnakar","Tamil Yadava","Teli","Telugu","Telugu Brahmin","Thiyya","Udayar","Vaidiki Brahmin","Vaishnav","Vaishnav Bhatia","Vaishnav Vania","Varshney","Vanniyakullak Shatriya","Vanniyar","Veerashaiva","Velethadathu Nair","Vellalar","Vellama","Vishwakarma","Viswabrahmin","Vokaliga","Vysya","Yadav"];
caste["Muslim"] = ["Bengali","Dawoodi Bohra","Ehle-Hadith","Memon","Rajput","Shia","Shia Imami Ismaili","Sunni"];
caste["Christian"] = ["Born Again","Catholic","CMS","CSI","Evangelical","Jacobite","Marthoma","adar","Protestant","Syrian"];
caste["Jain"] = ["Digambar","Shewetamber","Vania"];
caste["Sikh"] = ["Clean Shaven","Gursikh","Jat","Kamboj","Kesadhari","Khatri","Ramgharia"];


	function get_caste(obj,show_default){

		var sel_caste = '';

		var sel_religion	= obj.options[obj.selectedIndex].text;
		var caste_obj		= obj.form.elements["caste"];
		//CLEAN CASTE SELECT BOX
		while ( caste_obj.options.length ) caste_obj.options[0] = null;

		//ADD FIRST SELECT OPTION
		caste_obj.options[0]=new Option("Does not matter","Does not matter",true);


		//ADD CASTE OPTIONS FOR SELECTED RELIGION
		//if(obj.selectedIndex>0){
			for(j=0;j<caste[sel_religion].length;j++){
				//NOT TO INCLUDE OPTIONS HAVING NULL VALUES
				if(caste[sel_religion][j]!=""){
					var caste_val = caste[sel_religion][j]=="Does not matter"?"Does not matter":caste[sel_religion][j];
					var def_sel   = (sel_caste == caste_val) ? true : false;
                    caste_obj.options[j+1] = new Option(caste[sel_religion][j], caste_val, true, def_sel);

				}
			}
		//}

	}

	</script>



		

<body oncontextmenu="return false" onselectstart="return false" 
ondragstart="return false" text=#000000 vlink=#000000 alink=#000000 link=#000000 
bgcolor=#ffffff leftmargin=0 topmargin=0 marginheight="0" marginwidth="0">


<form action="register_submit1.php" method="post" name="MatriForm" id="MatriForm" onSubmit="return Validate()" >
<div align="center">
  
  <table width="780" border="0" cellpadding="0" cellspacing="0" class="BlueTborder">
    <!--DWLayoutTable-->
    <tr>
      <td width="780" height="164">
	  
	
        <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="Tborder">
          <!--DWLayoutTable-->
          <tr>
            <td height="37" colspan="2">
					<?php include("header.php");?>
			  </td>
            </tr>
          <tr>            </tr>
          <tr>
            <td  colspan="2" valign="top">
						
														
							
			  </td>
          </tr>
          
          <tr valign="top">
            <td height="206" colspan="2">
               
                  <table width="100%" border="0" align="center">
                    <tr>
                      <td width="570" class="LgHeading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											

					  </td>
                      <td width="200">Already Registered? <span class="h1dp"><a href="login.php">Login Now</a></span> </td>
                    </tr>
                    <tr>
                        <td bgcolor=#cccccc colspan=5 height=1><spacer height="1" type="block"></td>
                    </tr>
                  </table>
                  <table width="746" border="0" align="center">
                    <tr>
                      <td><div align="left"><span class="LgHeading">Register Final </span></div></td>
                    </tr>
                    <tr>
                      <td width="719"><div align="left">All Fields marks <span class="bodysg"><span class="Alert">*</span></span> are compulsory.<br>
  Please mention accurate information in this form or your profile may be declined. </div></td>
                    </tr>
                </table>
				  
				 
                  
                  <div align="center"><br>
                    <br>
                    <TABLE cellSpacing=0 cellPadding=0 width=746 border=0>
                      <TR>
                        <TD class=grebg vAlign=top colSpan=3 height=12><IMG src="pics/trans.gif"></TD>
                      </TR>
                      <TR>
                        <TD class=grebg width=12><IMG height=1  src="pics/trans.gif"></TD>
                        <TD class=lastnull vAlign=top width=722><TABLE cellSpacing=0 cellPadding=0 width=722  border=0>
                            <TR height=28>
                              <TD class=smalltxt align=right colSpan=2><div align="left"></div></TD>
                            </TR>
                            <!---- -->
                                                        
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Partner Preference </span></div>                                <div align="left"></div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left"><span class="style4">*</span> Looking For </div></TD>
                              <TD><div align="left">
                                <table width="100%" align="left" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="23%"><div align="left">
                                        <input name="txtLooking" type=radio class="style5" value="Unmarried">
                                      Unmarried </div></td>
                                    <td width="21%" class="style3"><div align="left">
                                        <input name="txtLooking" type=radio class="style5" value="Separated">
                                      Separated </div></td>
                                    <td width="24%" class="style3"><div align="left">
                                        <input name="txtLooking" type=radio class="style5" value="Widowed" >
                                      Widowed </div></td>
                                    <td width="32%" class="style3"><div align="left">
                                        <input name="txtLooking" type=radio class="style5" value="Divorcee" >
                                      Awaiting divorce </div></td>
                                       <td width="32%" class="style3"><div align="left">
                                        <input name="txtLooking" type=radio class="style5" value="Divorcee" >
                                      Any</div></td>
                                  </tr>
                                </table>
                              </div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Age </div></TD>
                              <TD><div align="left">From
                                  <input name="Fromage" type="text" class="forminput" id="Fromage" onKeyPress="if ((event.keyCode < 48) ||(event.keyCode > 57)) event.returnValue = false;" value="18" size="2" maxlength="2">
&nbsp;to
<input name="Toage" type="text" class="forminput" id="Toage" onKeyPress="if ((event.keyCode < 48) ||(event.keyCode > 57)) event.returnValue = false;" value="30" size="2" maxlength="2" >
</div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Expectations</div></TD>
                              <TD><div align="left">
                                <textarea name="txtPPE" rows="5" id="txtPPE" style="width:195px;"></textarea>
                              </div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Country Living in </div></TD>
                              <TD><div align="left"><span class="formselect">
                                <select name="txtPcountry" class="forminput" id="txtPcountry" style="width:200px;">
                                  <option value="Does not Matter" selected>- Does not Matter -</option>
                                  <option>Pakistan</option>
                                  <option>USA</option>
                                  <option>United Kingdom</option>
                                  <option>United Arab Emirates</option>
                                  <option>Canada</option>
                                  <option>Australia</option>
                                  <option selected>India</option>
                                  <option>Saudi Arabia</option>
                                  <option>Kuwait</option>
                                  <option>South Africa</option>
                                  <option>Afghanistan</option>
                                  <option>Albania</option>
                                  <option>Algeria</option>
                                  <option>American Samoa</option>
                                  <option>Andorra</option>
                                  <option>Angola</option>
                                  <option>Anguilla</option>
                                  <option>Antigua &amp; Barbuda</option>
                                  <option>Argentina</option>
                                  <option>Armenia</option>
                                  <option>Australia</option>
                                  <option>Austria</option>
                                  <option>Azerbaijan</option>
                                  <option>Bahamas</option>
                                  <option>Bahrain</option>
                                  <option>Bangladesh</option>
                                  <option>Barbados</option>
                                  <option>Belarus</option>
                                  <option>Belgium</option>
                                  <option>Belize</option>
                                  <option>Bermuda</option>
                                  <option>Bhutan</option>
                                  <option>Bolivia</option>
                                  <option>Bosnia and Herzegovina</option>
                                  <option>Botswana</option>
                                  <option>Brazil</option>
                                  <option>Brunei</option>
                                  <option>Bulgaria</option>
                                  <option>Burkina Faso</option>
                                  <option>Burundi</option>
                                  <option>Cambodia</option>
                                  <option>Cameroon</option>
                                  <option>Canada</option>
                                  <option>Cape Verde</option>
                                  <option>Cayman Islands</option>
                                  <option>Central African Republic</option>
                                  <option>Chad</option>
                                  <option>Chile</option>
                                  <option>China</option>
                                  <option>Colombia</option>
                                  <option>Comoros</option>
                                  <option>Congo</option>
                                  <option>Congo (DRC)</option>
                                  <option>Cook Islands</option>
                                  <option>Costa Rica</option>
                                  <option>Cote d'Ivoire</option>
                                  <option>Croatia (Hrvatska)</option>
                                  <option>Cuba</option>
                                  <option>Cyprus</option>
                                  <option>Czech Republic</option>
                                  <option>Denmark</option>
                                  <option>Djibouti</option>
                                  <option>Dominica</option>
                                  <option>Dominican Republic</option>
                                  <option>East Timor</option>
                                  <option>Ecuador</option>
                                  <option>Egypt</option>
                                  <option>El Salvador</option>
                                  <option>Equatorial Guinea</option>
                                  <option>Eritrea</option>
                                  <option>Estonia</option>
                                  <option>Ethiopia</option>
                                  <option>Falkland Islands</option>
                                  <option>Faroe Islands</option>
                                  <option>Fiji Islands</option>
                                  <option>Finland</option>
                                  <option>France</option>
                                  <option>French Guiana</option>
                                  <option>French Polynesia</option>
                                  <option>Gabon</option>
                                  <option>Gambia</option>
                                  <option>Georgia</option>
                                  <option>Germany</option>
                                  <option>Ghana</option>
                                  <option>Gibraltar</option>
                                  <option>Greece</option>
                                  <option>Greenland</option>
                                  <option>Grenada</option>
                                  <option>Guadeloupe</option>
                                  <option>Guam</option>
                                  <option>Guatemala</option>
                                  <option>Guinea</option>
                                  <option>Guinea-Bissau</option>
                                  <option>Guyana</option>
                                  <option>Haiti</option>
                                  <option>Honduras</option>
                                  <option>Hong Kong SAR</option>
                                  <option>Hungary</option>
                                  <option>Iceland</option>
                                  <option>India</option>
                                  <option>Indonesia</option>
                                  <option>Iran</option>
                                  <option>Iraq</option>
                                  <option>Ireland</option>
                                  <option>Israel</option>
                                  <option>Italy</option>
                                  <option>Jamaica</option>
                                  <option>Japan</option>
                                  <option>Jordan</option>
                                  <option>Kazakhstan</option>
                                  <option>Kenya</option>
                                  <option>Kiribati</option>
                                  <option>Korea</option>
                                  <option>Kuwait</option>
                                  <option>Kyrgyzstan</option>
                                  <option>Laos</option>
                                  <option>Latvia</option>
                                  <option>Lebanon</option>
                                  <option>Lesotho</option>
                                  <option>Liberia</option>
                                  <option>Libya</option>
                                  <option>Liechtenstein</option>
                                  <option>Lithuania</option>
                                  <option>Luxembourg</option>
                                  <option>Macao SAR</option>
                                  <option>Macedonia</option>
                                  <option>Madagascar</option>
                                  <option>Malawi</option>
                                  <option>Malaysia</option>
                                  <option>Maldives</option>
                                  <option>Mali</option>
                                  <option>Malta</option>
                                  <option>Martinique</option>
                                  <option>Mauritania</option>
                                  <option>Mauritius</option>
                                  <option>Mayotte</option>
                                  <option>Mexico</option>
                                  <option>Micronesia</option>
                                  <option>Moldova</option>
                                  <option>Monaco</option>
                                  <option>Mongolia</option>
                                  <option>Montserrat</option>
                                  <option>Morocco</option>
                                  <option>Mozambique</option>
                                  <option>Myanmar</option>
                                  <option>Namibia</option>
                                  <option>Nauru</option>
                                  <option>Nepal</option>
                                  <option>Netherlands</option>
                                  <option>Netherlands Antilles</option>
                                  <option>New Caledonia</option>
                                  <option>New Zealand</option>
                                  <option>Nicaragua</option>
                                  <option>Niger</option>
                                  <option>Nigeria</option>
                                  <option>Niue</option>
                                  <option>Norfolk Island</option>
                                  <option>North Korea</option>
                                  <option>Norway</option>
                                  <option>Oman</option>
                                  <option>Pakistan</option>
                                  <option>Panama</option>
                                  <option>Papua New Guinea</option>
                                  <option>Paraguay</option>
                                  <option>Peru</option>
                                  <option>Philippines</option>
                                  <option>Pitcairn Islands</option>
                                  <option>Poland</option>
                                  <option>Portugal</option>
                                  <option>Puerto Rico</option>
                                  <option>Qatar</option>
                                  <option>Reunion</option>
                                  <option>Romania</option>
                                  <option>Russia</option>
                                  <option>Rwanda</option>
                                  <option>Samoa</option>
                                  <option>San Marino</option>
                                  <option>Sao Tome and Principe</option>
                                  <option>Saudi Arabia</option>
                                  <option>Senegal</option>
                                  <option>Serbia and Montenegro</option>
                                  <option>Seychelles</option>
                                  <option>Sierra Leone</option>
                                  <option>Singapore</option>
                                  <option>Slovakia</option>
                                  <option>Slovenia</option>
                                  <option>Solomon Islands</option>
                                  <option>Somalia</option>
                                  <option>South Africa</option>
                                  <option>Spain</option>
                                  <option>Sri Lanka</option>
                                  <option>St. Helena</option>
                                  <option>St. Kitts and Nevis</option>
                                  <option>St. Lucia</option>
                                  <option>St. Pierre and Miquelon</option>
                                  <option>St. Vincent &amp; Grenadines</option>
                                  <option>Sudan</option>
                                  <option>Suriname</option>
                                  <option>Swaziland</option>
                                  <option>Sweden</option>
                                  <option>Switzerland</option>
                                  <option>Syria</option>
                                  <option>Taiwan</option>
                                  <option>Tajikistan</option>
                                  <option>Tanzania</option>
                                  <option>Thailand</option>
                                  <option>Togo</option>
                                  <option>Tokelau</option>
                                  <option>Tonga</option>
                                  <option>Trinidad and Tobago</option>
                                  <option>Tunisia</option>
                                  <option>Turkey</option>
                                  <option>Turkmenistan</option>
                                  <option>Turks and Caicos Islands</option>
                                  <option>Tuvalu</option>
                                  <option>Uganda</option>
                                  <option>Ukraine</option>
                                  <option>United Arab Emirates</option>
                                  <option>United Kingdom</option>
                                  <option>Uruguay</option>
                                  <option>USA</option>
                                  <option>Uzbekistan</option>
                                  <option>Vanuatu</option>
                                  <option>Venezuela</option>
                                  <option>Vietnam</option>
                                  <option>Virgin Islands</option>
                                  <option>Virgin Islands (British)</option>
                                  <option>Wallis and Futuna</option>
                                  <option>Yemen</option>
                                  <option>Yugoslavia</option>
                                  <option>Zambia</option>
                                  <option>Zimbabwe</option>
                                </select>
                              </span></div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
							
							<TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Height</div></TD>
                              <TD><div align="left">
                                <select name="txtPHeight" class="forminput" id="txtPHeight" style="width:200px;">
                                  <option value="Does not Matter" selected>- Does not Matter -</option>
                                  <option value="Below 4ft">Below 4ft</option>
                                  <option value="4-6">4ft 6in</option>
                                  <option value="4-7">4ft 7in</option>
                                  <option value="4-8">4ft 8in</option>
                                  <option value="4-9">4ft 9in</option>
                                  <option value="4-10">4ft 10in</option>
                                  <option value="4-11">4ft 11in</option>
                                  <option value="5">5ft</option>
                                  <option value="5-1">5ft 1in</option>
                                  <option value="5-2">5ft 2in</option>
                                  <option value="5-3">5ft 3in</option>
                                  <option value="5-4">5ft 4in</option>
                                  <option value="5-5">5ft 5in</option>
                                  <option value="5-6">5ft 6in</option>
                                  <option value="5-7">5ft 7in</option>
                                  <option value="5-8">5ft 8in</option>
                                  <option value="5-9">5ft 9in</option>
                                  <option value="5-10">5ft 10in</option>
                                  <option value="5-11">5ft 11in</option>
                                  <option value="6">6ft</option>
                                  <option value="6-1">6ft 1in</option>
                                  <option value="6-2">6ft 2in</option>
                                  <option value="6-3">6ft 3in</option>
                                  <option value="6-4">6ft 4in</option>
                                  <option value="6-5">6ft 5in</option>
                                  <option value="6-6">6ft 6in</option>
                                  <option value="6-7">6ft 7in</option>
                                  <option value="6-8">6ft 8in</option>
                                  <option value="6-9">6ft 9in</option>
                                  <option value="6-10">6ft 10in</option>
                                  <option value="6-11">6ft 11in</option>
                                  <option value="7">7ft</option>
                                  <option value="Above 7ft">Above 7ft</option>
                                </select>
                              </div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
							
							
							<TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Complexion</div></TD>
                              <TD><div align="left">
                                <select name="txtPComplexion" class="forminput" id="txtPComplexion" style="width:200px;">
                                  <option value="Does not Matter" selected>- Does not Matter -</option>
                                  <option value="Very Fair">Very Fair</option>
                                  <option value="Fair">Fair</option>
                                  <option value="Wheatish">Wheatish</option>
                                  <option value="Wheatish Medium">Wheatish Medium</option>
                                  <option value="Wheatish Brown">Wheatish Brown</option>
                                  <option value="Dark">Dark</option>
                                </select>
                              </div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
							
							
							
							<TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Education</div></TD>
                              <TD><div align="left">
                                <select name="txtPEdu" class="forminput" id="txtPEdu" style="width:200px;">
                                  <option value="Does not Matter" selected>- Does not Matter -</option>
                                  <option value="Bachelors">Bachelors</option>
                                  <option value="Masters">Masters</option>
                                  <option value="Doctorate">Doctorate</option>
                                  <option value="Diploma">Diploma</option>
                                  <option value="Undergraduate">Undergraduate</option>
                                  <option value="Associates degree">Associates degree</option>
                                  <option value="Honours degree">Honours degree</option>
                                  <option value="Trade school">Trade school</option>
                                  <option value="High school">High school</option>
                                  <option value="Less than high school">Less than high school</option>
                                </select>
                              </div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
							
							
							<TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left"> <span class="Alert">*</span> Religion </div></TD>
                              <TD><div align="left">
                                <select name="religion" class="forminput" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:200px;">
                                  <option value="---" selected>- Select -</option>
                                  <option>Hindu</option>
                                  <option>Christian</option>
                                  <option>Muslim</option>
                                  <option>Sikh</option>
                                  <option>Jain</option>
                                  <option>Parsi</option>
                                  <option>Buddhist</option>
                                  <option>Bahai</option>
                                  <option>Inter-Religion</option>
                                  <option>Others</option>
                                </select>
                              </div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
							
							
							<TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left"> <span class="Alert">*</span> Caste </div></TD>
                              <TD><div align="left">
                                <select name="caste" class="forminput" id="caste" style="width:200px;">
                                </select>
                              </div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            
							
							
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
							
							
							
							<TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Resident Status </div></TD>
                              <TD><div align="left">
                                <select name="txtPReS" class="forminput" id="txtCitizen" style="width:200px;">
                                  <option value="Does not Matter" selected>- Does not Matter -</option>
                                  <option value="Citizen">Citizen</option>
                                  <option value="Permanent Resident">Permanent Resident</option>
                                  <option value="Student Visa">Student Visa</option>
                                  <option value="Temporary Visa">Temporary Visa</option>
                                  <option value="Work permit">Work permit</option>
                                </select>
                              </div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            
							
							
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
							
							
							
                            <TR class=tabpadding>
                              <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Hobbies and Interests </span></div>                                <div align="left"></div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Hobbies</div></TD>
                              <TD><div align="left">
                                <select name="txtHobby" size="4" multiple class="forminput" id="txtHobby" style="width:200px;">
                                  <option value="Acting">Acting</option>
                                  <option value="Astronomy">Astronomy</option>
                                  <option value="Astrology">Astrology</option>
                                  <option value="Collectibles">Collectibles</option>
                                  <option value="Cooking">Cooking</option>
                                  <option value="Crosswords">Crosswords</option>
                                  <option value="Dancing">Dancing</option>
                                  <option value="Film-making">Film-making</option>
                                  <option value="Fishing">Fishing</option>
                                  <option value="Gardening/ landscaping">Gardening/ landscaping</option>
                                  <option value="Graphology">Graphology</option>
                                  <option value="ature">Nature</option>
                                  <option value="umerology">Numerology</option>
                                  <option value="Painting">Painting</option>
                                  <option value="Palmistry">Palmistry</option>
                                  <option value="Pets">Pets</option>
                                  <option value="Photography">Photography</option>
                                  <option value="Playing musical instruments">Playing musical instruments</option>
                                  <option value="Puzzles">Puzzles</option>
                                  <option value="o Hobbies">Not interest</option>
                                </select>
                              </div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Other Hobbies</div></TD>
                              <TD><div align="left">
                                <input name="txtOh" type="text" class="forminput" id="txtOh" size="40" maxlength="40" style="width:195px;">
                              </div></TD>
                            </TR>
                            <!-- -->
							
							<TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Interests</div></TD>
                              <TD><div align="left">
                                <select name="txtInterest" size="4" multiple class="forminput" id="select" style="width:200px;">
                                  <option value="Adventure sports">Adventure sports</option>
                                  <option value="Book clubs">Book clubs</option>
                                  <option value="Computer games">Computer games</option>
                                  <option value="Health & fitness">Health & fitness</option>
                                  <option value="Internet">Internet</option>
                                  <option value="Learning new languages">Learning new languages</option>
                                  <option value="Movies">Movies</option>
                                  <option value="Music">Music</option>
                                  <option value="Politics">Politics</option>
                                  <option value="Reading">Reading</option>
                                  <option value="Social service">Social service</option>
                                  <option value="Sports"> Sports</option>
                                  <option value="Television">Television</option>
                                  <option value="Theatre">Theatre</option>
                                  <option value="Travel">Travel</option>
                                  <option value="Writing">Writing</option>
                                  <option value="Yoga">Yoga</option>
                                  <option value="Alternative healing / medicine">Alternative healing / medicine</option>
                                  <option value="ot interest" >Not interest</option>
                                </select>
                              </div></TD>
                            </TR>
							
							<TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Other Interests</div></TD>
                              <TD><div align="left">
                                <input name="txtOi" type="text" class="forminput" id="txtOi" size="40" maxlength="40" style="width:195px;">
                              </div></TD>
                            </TR>
							
							
							
                            <TR class=tabpadding>
                              <TD class=grtxtbold1 vAlign=center>&nbsp;</TD>
                              <TD class=formtxt vAlign=top width=500>&nbsp;</TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colSpan=3 height=7><div align="center">
                                  <div align="center"><a href="javascript:clearform();"></a>
                                    <input name="txtstatus" type="hidden" id="txtstatus" value="<?php echo "InActive" ; ?>">
                                    <input name="txtregdate" type="hidden" id="txtregdate" value="<?php echo date('d-M-Y'); ?>">
                                    <input name="txtip" type="hidden" id="txtip" value="<?php echo  $_SERVER['REMOTE_ADDR']; ?>">
                                    <input name="txtref" type="hidden" id="txtref" value="<?php  echo  $_SERVER['HTTP_REFERER']; ?>">
                                    <input name="txtagent" type="hidden" id="txtagent" value="<?php  echo $_SERVER['HTTP_USER_AGENT']; ?>">
                                    <input name="h1" type="hidden" id="h1" value="<?php $_SESSION['Name']; ?>">
                                    <input name="Submit" type="image" value="Submit" src="pics/reg1.gif" alt="Register" >
                                    <a href="javascript:clearform();"></a></div>
                              </div></TD>
                            </TR>
                        </TABLE></TD>
                        <TD class=grebg width=12><IMG height=1  src="pics/trans.gif"></TD>
                      </TR>
                      <TR>
                        <TD class=grebg vAlign=top colSpan=3><IMG height=12 src="pics/trans.gif" width=564></TD>
                      </TR>
                    </TABLE>
                    <br>
                    <br>
                  </div>
                  </td>
          </tr>
          
          <tr>
         <?php include("footer.php");?> 
		 
            </tr>
        </table>
 

	  </td>
    </tr>
  </table>
</div>
</form>
</body>
</html>
