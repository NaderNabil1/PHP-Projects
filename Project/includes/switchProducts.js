 $('.producttype').change(function(){
        var responseID = $(this).val();
        console.log(responseID);
        if(responseID==="1"){
    $('#pdvdDetails').addClass("showdvd");
    $('#pbookDetails').removeClass("showbook");
    $('#pfurDetails').removeClass("showfur");
    
}
else if(responseID==="2"){
    $('#pfurDetails').addClass("showfur");
    $('#pdvdDetails').removeClass("showdvd");
    $('#pbookDetails').removeClass("showbook");
}
else if(responseID==="3")
{
    $('#pbookDetails').addClass("showbook");
    $('#pdvdDetails').removeClass("showdvd");
    $('#pfurDetails').removeClass("showfur"); 
   
}
else{
    $('#pdvdDetails').removeClass("showdvd");
    $('#pbookDetails').removeClass("showbook");
     $('#pfurDetails').removeClass("showfur");
    $('#pdvdDetails').addClass("hiddendvd");
    $('#pfurDetails').addClass("hiddenfur");
    $('#pbookDetails').addClass("hiddenbook");
  
    
}
});