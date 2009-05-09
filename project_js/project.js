// holds an instance of XMLHttpRequest 
var xmlHttp = createXmlHttpRequestObject(); 
 var obj1,id;

// creates an XMLHttpRequest instance 
function createXmlHttpRequestObject()  
{ 
  // will store the reference to the XMLHttpRequest object 
  var xmlHttp; 
  // this should work for all browsers except IE6 and older 
  try 
  { 
    // try to create XMLHttpRequest object 
    xmlHttp = new XMLHttpRequest(); 
  } 
  catch(e) 
  { 
    // assume IE6 or older 
    var XmlHttpVersions = new Array("MSXML2.XMLHTTP.6.0", 
                                    "MSXML2.XMLHTTP.5.0", 
                                    "MSXML2.XMLHTTP.4.0", 
                                    "MSXML2.XMLHTTP.3.0", 
                                    "MSXML2.XMLHTTP", 
                                    "Microsoft.XMLHTTP"); 
    // try every prog id until one works 
 for (var i=0; i<XmlHttpVersions.length && !xmlHttp; i++)  
    { 
      try  
      {  
        // try to create XMLHttpRequest object 
        xmlHttp = new ActiveXObject(XmlHttpVersions[i]); 


      }  
      catch (e) {} 
    } 
  } 
  // return the created object or display an error message 
  if (!xmlHttp) 
    alert("Error creating the XMLHttpRequest object."); 
  else  
    return xmlHttp; 
} 
 
// read a file from the server 







function process(evt,id,username)
{
  // only continue if xmlHttp isn't void
  if (xmlHttp)
  {
    // try to connect to the server
    try
    {
    //alert(id);

      obj1 = document.getElementById(evt);
      r=obj1.title;
var ratings = document.getElementsByTagName('a');

for (var i = 1;i<= r; i++)
{


  obj = document.getElementById("myDivElementid"+i);
  obj.innerHTML="";

}
   //alert(obj1);
//alert("a="+k);

//var obj2 = document.getElementById("id1");
//obj = document.getElementById("myDivElementid1");
//obj.innerHTML="";

   /* if (ratings=document.getElementById("id0") != ('id0'))
        continue;
        else
         alert ("one");

        */

    // rest of our code
  /*   if(obj2.title=="haii")
     {

    alert ("one1");
    continue;
    }     */
//}


    //imgname = this.id;
 // obj1 = document.getElementById(evt);
  // if(obj1.title=="hai")
   //alert ("one");
      // initiate reading a file from the server
      xmlHttp.open("GET","getnotes.php?id="+id, true);

      xmlHttp.onreadystatechange = handleRequestStateChange;
      xmlHttp.send(null);
    }
    // display the error in case of failure
    catch (e)
    {
      alert("Can't connect to server:\n" + e.toString());
    }
  }
}










 
// function called when the state of the HTTP request changes 
function handleRequestStateChange()  
{ 
  // when readyState is 4, we are ready to read the server response 
  if (xmlHttp.readyState == 4)  
  { 
    // continue only if HTTP status is "OK" 
    if (xmlHttp.status == 200)  
    { 
      try 
      { 
         // extract the XML retrieved from the server
     handleServerResponse();
      } 
      catch(e) 
      { 
        // display error message 
        alert("Error reading the response: " + e.toString()); 
      } 
    }  
    else 
    { 
      // display status message 
      alert("There was a problem retrieving the data:\n" +  
            xmlHttp.statusText); 
    } 
  } 
} 
 
// handles the response received from the server 



function handleServerResponse()
{
 response = xmlHttp.responseText;

     // document.getElementById(12).style.display ="";
       myDiv = document.getElementById("myDivElement"+obj1.id).innerHTML = response;
      var x = obj1.id.split("id");

  var shw =1;
	if(document.getElementById(x[1]).style.display == "none")
	{
    	for (i=1; i<=shw; i++)
    	{
	      document.getElementById(i).style.display = "none";
    	}
    	document.getElementById(x[1]).style.display = "";
	}
	else
	{
    	document.getElementById(x[1]).style.display = "none";
	}


  // display the HTML output
  //myDiv.innerHTML =';
  


}
