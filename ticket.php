<?php
include 'admin-login/setting.php';
include 'include/topheader.php';
$_GET['frid'];
$contact = str_replace("-"," " ,$_GET['frid']);
?>

<style>.zsFormClass{background-color:none;width:600px color:#FFF}

</style> 
<style>
.hleft{text-align:left;}
 input[type=file]::-webkit-file-upload-button{cursor:pointer;}
 .wtcsepcode{margin:0px 15px; color:#aaa; float:left;}
 .wtccloudattach{float:left; color:#00acda!important; cursor:pointer; text-decoration: none!important;}
 .wtccloudattach:hover{text-decoration: none!important;}
 .wtcuploadinput{cursor:pointer; float:left; width:62px; margin-top:-20px; opacity:0; clear:both;}
 .wtcuploadfile{float:left;color: #00acda;}
 .filenamecls{margin-right:15px; float:left; margin-top:5px;} 
 .clboth{clear:both;} 
 #zsFileBrowseAttachments{clear:both; margin:0px 0px 10px;} 
.zsFontClass{vertical-align:top;} 
#tooltip-zc{font: normal 12px Arial, Helvetica, sans-serif; 
line-height:18px;position:absolute;padding:8px;margin:20px 0 0;
background:#fff;border:1px solid #528dd1;-moz-border-radius:5px;
-webkit-border-radius:5px;border-radius:5px;color:#eee;
-webkit-box-shadow:5px 5px 20px rgba(0,0,0,0.2);
-moz-box-shadow:5px 5px 20px rgba(0,0,0,0.2);
z-index:10000; color:#777}

.formcss {
	color:#000;
	
}
td{
	color:#fff
}
.sbmt{
	
	background: #4691A4;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
	
}
.wtcmanfield{color:#f00;font-size:16px;position:relative;top:2px;left:1px;} 

#zsCloudAttachmentIframe{width: 100%;height: 100%;z-index: 99999!important;position: fixed;left: 0px;top:0px; border-style: none; display: none; background-color:#fff;} 

.wtchelpinfo{background-position: -246px -485px;width:15px;height:15px;display:inline-block;position: relative;top: 2px;background-image: url('https://css.zohostatic.com/support/770372/images/zs-mpro.png');}

</style>

<script src='https://js.zohostatic.com/support/static/jquery-1.8.3.min.js'></script>
<script src='https://js.zohostatic.com/support/fbw_v1/jquery.encoder.min.js'></script>
<script>
var zctt = function(){var tt, mw = 400, top = 10, left = 0, doctt = document;var ieb = doctt.all ? true : false;return{showtt: function(cont, wid){if(tt == null){tt = doctt.createElement('div');tt.setAttribute('id', 'tooltip-zc');doctt.body.appendChild(tt);doctt.onmousemove = this.setpos;doctt.onclick = this.hidett;}tt.style.display = 'block';tt.innerHTML = cont;tt.style.width = wid ? wid + 'px' : 'auto';if(!wid && ieb){tt.style.width = tt.offsetWidth;}if(tt.offsetWidth > mw){tt.style.width = mw + 'px'}h = parseInt(tt.offsetHeight) + top;w = parseInt(tt.offsetWidth) + left;},hidett: function(){tt.style.display = 'none';},setpos: function(e){var u = ieb ? event.clientY + doctt.body.scrollTop : e.pageY;var l = ieb ? event.clientX + doctt.body.scrollLeft : e.pageX;var cw = doctt.body.clientWidth;var ch = doctt.body.clientHeight;if(l < 0){tt.style.left = left + 'px';tt.style.right = '';}else if((l+w+left) > cw){tt.style.left = '';tt.style.right = ((cw-l) + left) + 'px';}else{tt.style.right = '';tt.style.left = (l + left) + 'px';}if(u < 0){tt.style.top = top + 'px';tt.style.bottom = '';}else if((u + h + left) > ch){tt.style.top = '';tt.style.bottom = ((ch - u) + top) + 'px';}else{tt.style.bottom = '';tt.style.top = (u + top) + 'px';}}};}();var zsWebFormMandatoryFields = new Array('Contact Name','Email','Subject');var zsFieldsDisplayLabelArray = new Array('Fisrt Name,Last Name','Email','Subject');function zsValidateMandatoryFields(){var name = '';var email = '';var isError = 0;for(var index = 0; index < zsWebFormMandatoryFields.length; index++){isError = 0;var fieldObject = document.forms['zsWebToCase_88191000000090011'][zsWebFormMandatoryFields[index]];if(fieldObject){if(((fieldObject.value).replace(/^\s+|\s+$/g, '')).length == 0){alert(zsFieldsDisplayLabelArray[index] +' cannot be empty ');fieldObject.focus();isError = 1;return false;}else{if(fieldObject.name == 'Email'){if(!fieldObject.value.match(/[A-Za-z0-9._%\-+]+@[A-Za-z0-9.\-]+\.[a-zA-Z]{2,22}/)){isError = 1;alert('Enter a valid email-Id');fieldObject.focus();return false;}}}if(fieldObject.nodeName == 'SELECT'){if(fieldObject.options[fieldObject.selectedIndex].value == '-None-'){alert(zsFieldsDisplayLabelArray[index] +' cannot be none');fieldObject.focus();isError = 1;return false;}}if(fieldObject.type == 'checkbox'){if (fieldObject.checked == false){alert('Please accept '+zsFieldsDisplayLabelArray[index]);fieldObject.focus();isError = 1;return false;}}}}if(isError == 0){document.getElementById('zsSubmitButton_88191000000090011').setAttribute('disabled', 'disabled');}}function zsResetWebForm(webFormId){document.forms['zsWebToCase_'+webFormId].reset();document.getElementById('zsSubmitButton_88191000000090011').removeAttribute('disabled');} </script>
<body>
<?php
include "include/menubar.php";
?>

<section id="about" class="main-inn ">
<div class="breadcrumb">
 <div class="container">
  <ul>
   <li><a href="<?=BASE_URL?>/"><i class="fa fa-home"></i></a></li>
   <li><i class="fa fa-angle-double-right"></i></li>
   <li class="active"><?php echo str_replace("-"," " ,ucwords($_GET['frid'])); ?></li>
  </ul>
 </div>
</div>

  
 
   
   <div id='zohoSupportWebToCase' align='center'> <form name='zsWebToCase_88191000000090011' id='zsWebToCase_88191000000090011' action='https://support.zoho.com/support/WebToCase' method='POST' onSubmit='return zsValidateMandatoryFields()' enctype='multipart/form-data' class="formcss">
     
     <input type='hidden' name='xnQsjsdp' value='marf-cXYO*gHNNhSsQ1qxg$$'/>  
     <input type='hidden' name='xmIwtLD' value='EXmIFFgTfMfvHk6WoIgjyYDA2Q1fFl-7'/>  <input type='hidden' name='actionType' value='Q2FzZXM='/>  <input type='hidden' name='returnURL' value='http://www.netpro.com.ng'/><table border='0' cellspacing='0' cellpadding='5' ><tr><td colspan='2' class='zsFormClass'><h3 style="color:#fff" align="left"><strong>Support Ticket</strong></h3>  </td></tr><br><tr ><td width='25%' align='left' nowrap class='zsFontClass ' style="color: #FFF">First Name<span class='wtcmanfield'>*</span></td><td width='75%' align='left' style="color: #000"><input type='text' maxlength='120' name='First Name' value=''/></td></tr><tr ><td width='25%' align='left' nowrap class='none ' style="color: #FFF">Last Name<span class='wtcmanfield'>*</span>&nbsp;&nbsp;</td><td width='75%' align='left' style="color: #000"><input type='text' maxlength='120' name='Contact Name'/></td></tr><tr ><td width='25%' align='left' nowrap class='none ' style="color: #FFF">Email<span class='wtcmanfield'>*</span>&nbsp;&nbsp;</td><td width='75%' align='left' style="color: #000"><input type='text' maxlength='120' name='Email' value=''/></td></tr> <tr ><td width='25%' align='left' nowrap class='none ' style="color: #FFF">Subject<span class='wtcmanfield'>*</span>&nbsp;&nbsp;</td><td width='75%' align='left' style="color: #000"><input type='text' maxlength='255' name='Subject' value=''/></td></tr> <tr ><td width='25%' align='left' nowrap class='none ' style="color: #FFF">Description &nbsp;&nbsp;</td><td width='75%' align='left' style="color: #000"> <textarea name='Description' maxlength='3000' width='250' height='250'></textarea></td></tr><tr ><td width='25%' align='left' nowrap class='none ' style="color: #FFF">Classifications &nbsp;&nbsp;</td><td width='75%' align='left' style="color: #000"><select name='Classification' size="1" value=''> <option value='-None-' >-None-</option> <option value='Question' >Question</option> <option value='Problem' >Problem</option> <option value='Feature' >Feature</option> <option value='Others' >Others</option> </select></td></tr><tr><td colspan='2' align='center' width='25%'> <p>&nbsp;
       </p>
           <p>
             <input type='submit' id="zsSubmitButton_88191000000090011" class='sbmt' value='Submit'> 
             &nbsp; &nbsp; 
             <input type='button' class='sbmt' value='Reset' onclick="zsResetWebForm('88191000000090011')">
           </p></td></tr><br></table></form></div>
 </div>
</section>
 <script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact");
frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("lastname","req","Please provide your last name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
frmvalidator.addValidation("message","req","Please type your message"); 
</script> 

<?php
include "include/footerscript.php";
?>
</body>
</html>
