function validate(msgform) 
{
	
  var name = msgform.name.value;
  var email = msgform.email.value;
  var phone = msgform.phone.value;
  var feedback = msgform.feedback.value;
  
  
  var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  var nameRegex = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
  var numRegex = /^[0-9]/;

  if(name == "") 
  {
	  inlineMsg('name','You must Enter Your Name',4);
    return false;
  }
  if(!name.match(nameRegex)) {
    inlineMsg('name','You have entered an invalid name.',2);
    return false;
  }
     
   if(email == "") {
		
    inlineMsg('email','You must Enter email',4);
    return false;
  }
   if(!email.match(emailRegex)) {
    inlineMsg('email','You have entered an invalid email.',4);
    return false;
     }
	 
	  if(phone == "") {
		
    inlineMsg('phone','You must Enter Phone Number',4);
    return false;
  }
   if(!phone.match(numRegex)) {
    inlineMsg('phone','You have entered an invalid Phone no.',2);
    return false;
  }
  if(phone.length<10) {
    inlineMsg('phone','Mobile number must be 10 digits',2);
    return false;
  }
   if(phone.length>10) {
    inlineMsg('phone','Mobile number must be 10 digits',2);
    return false;
  }
   if(feedback == "") 
  {
	  inlineMsg('feedback','You must Enter Your Message',4);
    return false;
  }
  if(!feedback.match(nameRegex)) {
    inlineMsg('feedback','You have entered an invalid Message.',2);
    return false;
  }
   
  
   return true;
}




function validate_mobile(msgform)
{

  var subscriber_name = msgform.subscriber_name.value;
  var mobile_no = msgform.mobile_no.value;
  var group_name = msgform.group_name.value;
  var nameRegex = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
  var numRegex = /^[0-9]/;
  
  
   if(subscriber_name == "") {

    inlineMsg('subscriber_name','You must Enter Subscriber Name',4);
    return false;
  }
   if(!subscriber_name.match(nameRegex)) {
    inlineMsg('subscriber_name','You have entered an invalid Subscriber Name.',2);
    return false;
  }
   if(mobile_no == "") {

    inlineMsg('mobile_no','You must Enter Mobile No',4);
    return false;
  }
  if(!mobile_no.match(numRegex)) {
    inlineMsg('mobile_no','You have entered an invalid Mobile no.',2);
    return false;
  }
  if(mobile_no.length<10) {
    inlineMsg('mobile_no','Mobile no must be 10 Digits.',2);
    return false;
  }
  if(mobile_no.length>10) {
    inlineMsg('mobile_no','Mobile no must be 10 Digits.',2);
    return false;
  }
   if(group_name == "") {

    inlineMsg('group_name','You must select Group Name',4);
    return false;
  }


  return true;
}






function validate_edit_subscriber(msgform)
{

  var update_subscriber_name = msgform.update_subscriber_name.value;
  var update_subscriber_mobile = msgform.update_subscriber_mobile.value;
  var nameRegex = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
  var numRegex = /^[0-9]/;


   if(update_subscriber_name == "") {

    inlineMsg('update_subscriber_name','You must Enter Subscriber Name',4);
    return false;
  }
   if(!update_subscriber_name.match(nameRegex)) {
    inlineMsg('update_subscriber_name','You have entered an invalid Subscriber Name.',2);
    return false;
  }
   if(update_subscriber_mobile == "") {

    inlineMsg('update_subscriber_mobile','You must Enter Mobile No',4);
    return false;
  }
  if(!update_subscriber_mobile.match(numRegex)) {
    inlineMsg('update_subscriber_mobile','You have entered an invalid Mobile no.',2);
    return false;
  }
  if(update_subscriber_mobile.length<10) {
    inlineMsg('update_subscriber_mobile','Mobile no must be 10 Digits.',2);
    return false;
  }
  if(update_subscriber_mobile.length>10) {
    inlineMsg('update_subscriber_mobile','Mobile no must be 10 Digits.',2);
    return false;
  }

  return true;
}





function validate_register(msgform)
{

  var name = msgform.name.value;
  var email = msgform.email.value;
  var username = msgform.username.value;
  var password = msgform.password.value;
  var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  var nameRegex = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
  var numRegex = /^[0-9]/;



    if(name == "")
  {
	  inlineMsg('name','You must Enter Your Name',4);
    return false;
  }
  if(!name.match(nameRegex)) {
    inlineMsg('name','You have entered an invalid name.',2);
    return false;
  }
   if(email == "") {

    inlineMsg('email','You must Enter email',4);
    return false;
  }
   if(!email.match(emailRegex)) {
    inlineMsg('email','You have entered an invalid email.',4);
    return false;
     }
      if(username == "")
  {
	  inlineMsg('username','You must Enter Your Username',4);
    return false;
  }
   if(username.length<4) {
    inlineMsg('username','Username must be 4 Characters.',2);
    return false;
  }
  if(password == "") {

    inlineMsg('password','You must Enter Password',4);
    return false;
  }


  return true;
}





function validate_password(msgform)
{

  var old_password = msgform.old_password.value;
  var new_password = msgform.new_password.value;
  var retype_new_password = msgform.retype_new_password.value;
  var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  var nameRegex = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
  var numRegex = /^[0-9]/;



    if(old_password == "")
  {
	  inlineMsg('old_password','Please Enter Old Password',4);
    return false;
  }
   if(new_password == "") {

    inlineMsg('new_password','Please Enter New Password',4);
    return false;
  }
   if(retype_new_password == "") {

    inlineMsg('retype_new_password','Please Retype New Password',4);
    return false;
  }
   if(new_password!=retype_new_password) {
    inlineMsg('retype_new_password','New Password did not match.',2);
    return false;
  }



  return true;
}





function validate_category(msgform)
{

  var category = msgform.category.value;

  if(category == "")
  {
	  inlineMsg('category','You must Enter Category',4);
    return false;
  }

  return true;
}






function validate_group(msgform)
{

  var group_name = msgform.group_name.value;

  if(group_name == "")
  {
	  inlineMsg('group_name','Enter Group Name',4);
    return false;
  }

  return true;
}






function validate_mail_password(msgform)
{

  var password = msgform.password.value;

  if(password == "")
  {
	  inlineMsg('password','Enter your Password',4);
    return false;
  }

  return true;
}






function validate_admin(msgform) 
{
	
  var uname = msgform.uname.value;
  var pword = msgform.pword.value;

  

    if(uname == "") {
		
    inlineMsg('uname','You must Enter Username',4);
    return false;
  }
  if(pword == "") {
		
    inlineMsg('pword','You must Enter Password',4);
    return false;
  }

  
  return true;
}

// START OF MESSAGE SCRIPT //


var MSGTIMER = 20;
var MSGSPEED = 10;
var MSGOFFSET = 10;
var MSGHIDE = 100;

// build out the divs, set attributes and call the fade function //
function inlineMsg(target,string,autohide) {
  var msg;
  var msgcontent;
  if(!document.getElementById('msg')) {
    msg = document.createElement('div');
    msg.id = 'msg';
    msgcontent = document.createElement('div');
    msgcontent.id = 'msgcontent';
    document.body.appendChild(msg);
    msg.appendChild(msgcontent);
    msg.style.filter = 'alpha(opacity=0)';
    msg.style.opacity = 0;
    msg.alpha = 0;
  } else {
    msg = document.getElementById('msg');
    msgcontent = document.getElementById('msgcontent');
  }
  msgcontent.innerHTML = string;
  msg.style.display = 'block';
  var msgheight = msg.offsetHeight;
  var targetdiv = document.getElementById(target);
  targetdiv.focus();
  var targetheight = targetdiv.offsetHeight;
  var targetwidth = targetdiv.offsetWidth;
  var topposition = topPosition(targetdiv) - ((msgheight - targetheight) / 2);
  var leftposition = leftPosition(targetdiv) + targetwidth + MSGOFFSET;
  msg.style.top = topposition + 'px';
  msg.style.left = leftposition + 'px';
  clearInterval(msg.timer);
  msg.timer = setInterval("fadeMsg(1)", MSGTIMER);
  if(!autohide) {
    autohide = MSGHIDE;  
  }
  window.setTimeout("hideMsg()", (autohide * 1000));
}

// hide the form alert //
function hideMsg(msg) {
  var msg = document.getElementById('msg');
  if(!msg.timer) {
    msg.timer = setInterval("fadeMsg(0)", MSGTIMER);
  }
}

// face the message box //
function fadeMsg(flag) {
  if(flag == null) {
    flag = 1;
  }
  var msg = document.getElementById('msg');
  var value;
  if(flag == 1) {
    value = msg.alpha + MSGSPEED;
  } else {
    value = msg.alpha - MSGSPEED;
  }
  msg.alpha = value;
  msg.style.opacity = (value / 100);
  msg.style.filter = 'alpha(opacity=' + value + ')';
  if(value >= 99) {
    clearInterval(msg.timer);
    msg.timer = null;
  } else if(value <= 1) {
    msg.style.display = "none";
    clearInterval(msg.timer);
  }
}

// calculate the position of the element in relation to the left of the browser //
function leftPosition(target) {
  var left = 0;
  if(target.offsetParent) {
    while(1) {
      left += target.offsetLeft;
      if(!target.offsetParent) {
        break;
      }
      target = target.offsetParent;
    }
  } else if(target.x) {
    left += target.x;
  }
  return left;
}

// calculate the position of the element in relation to the top of the browser window //
function topPosition(target) {
  var top = 0;
  if(target.offsetParent) {
    while(1) {
      top += target.offsetTop;
      if(!target.offsetParent) {
        break;
      }
      target = target.offsetParent;
    }
  } else if(target.y) {
    top += target.y;
  }
  return top;
}

// preload the arrow //
if(document.images) 
{
  arrow = new Image(7,80); 
  arrow.src = "images/msg_arrow.gif"; 
}
