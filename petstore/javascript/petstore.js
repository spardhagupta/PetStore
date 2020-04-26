// //function validateclientform(){
//     let error= "";
//     let errorStr = "Error: ";
//     let errorStr2 = "";
//     var letters = /^[A-Za-z]+$/;
//     var lettersOrNone = /^([A-Za-z]{0,15})+$/;
//     var email =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//     var phone = /^([0-9]{3}-[0-9]{3}-[0-9]{4})+$/;
//     let flag = false;

//     if(document.clientform.firstname.value === "" || document.clientform.firstname.value === null){  
//         errorStr2 = "*Please enter a First Name! *<br /> ";
        
//         error = errorStr.concat(errorStr2);
//         flag = true;
//     }
//     if (!document.clientform.firstname.value.match(letters))
//     {
//         errorStr = "*Please enter letters only for First Name!*  <br />";
//         error = error.concat(errorStr);
//         flag = true;
//     }
    
//     if(document.clientform.lastname.value === "" || document.clientform.lastname.value === null){  
//         errorStr = "*Please enter a Last Name! * <br />";
//         error = error.concat(errorStr);
//         flag = true;
//     }
//     if (!document.clientform.lastname.value.match(letters))
//     {
//         errorStr = "*Please enter letters only for Last Name!* <br />";
//         error = error.concat(errorStr);
//         flag = true;
//     }
//     if(document.clientform.email.value === "" || document.clientform.email.value === null){  
//         errorStr ="*Please enter an Email Address! * <br />";
//         error = error.concat(errorStr);
//         flag = true;
//     } 
//     if (!document.clientform.email.value.match(email))
//     {
//         errorStr = "*Please enter a valid Email Address!* <br />";
//         error = error.concat(errorStr);
//         flag = true;
//     }
//     <!--if (!document.clientform.phone.value.match(phone))-->
//     <!--{-->
//     <!--    errorStr = "*Please enter a valid Phone Number!* <br />";-->
//     <!--    error = error.concat(errorStr);-->
//     <!--    flag = true;-->
//     <!--}-->
//     if (!document.clientform.bussiness.value.match(lettersOrNone))
//     {
//         errorStr = "*Please enter letters only for Bussiness Name!* <br />";
//         error = error.concat(errorStr);
//         flag = true;
//     }
//     if (flag === true)
//     {
//         document.getElementById('errors').innerHTML = error;
//         return false;
//     }
//     else{
//         errorStr = "";
//         return true;}
    
// //}


function validateServiceForm(){
    let error= "";
    let errorStr = "Error: ";
    let errorStr2 = "";
    var letters = /^[A-Za-z]+$/;
    var lettersOrNone = /^([A-Za-z]{0,15})+$/;
    var email =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var phone = /^([0-9]{3}-[0-9]{3}-[0-9]{4})+$/;
    let flag = false;

    if(document.serviceform.firstname.value === "" || document.serviceform.firstname.value === null){  
        errorStr2 = "*Please enter a First Name! *<br /> ";
        
        error = errorStr.concat(errorStr2);
        flag = true;
    }
    if (!document.serviceform.firstname.value.match(letters))
    {
        errorStr = "*Please enter letters only for First Name!*  <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    
    if(document.serviceform.lastname.value === "" || document.serviceform.lastname.value === null){  
        errorStr = "*Please enter a Last Name! * <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    if (!document.serviceform.lastname.value.match(letters))
    {
        errorStr = "*Please enter letters only for Last Name!* <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    if(document.serviceform.email.value === "" || document.serviceform.email.value === null){  
        errorStr ="*Please enter an Email Address! * <br />";
        error = error.concat(errorStr);
        flag = true;
    } 
    if (!document.serviceform.email.value.match(email))
    {
        errorStr = "*Please enter a valid Email Address!* <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    <!--if (!document.serviceform.phone.value.match(phone))-->
    <!--{-->
    <!--    errorStr = "*Please enter a valid Phone Number!* <br />";-->
    <!--    error = error.concat(errorStr);-->
    <!--    flag = true;-->
    <!--}-->
    if (!document.serviceform.bussiness.value.match(lettersOrNone))
    {
        errorStr = "*Please enter letters only for Bussiness Name!* <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    if (flag === true)
    {
        document.getElementById('errors').innerHTML = error;
        return false;
    }
    else{
        errorStr = "";
        return true;}
    
}
    
function validatecontactusform(){
let error= "";
    let errorStr = "Error: ";
    let errorStr2 = "";
    var letters = /^[A-Za-z]+$/;
    var lettersOrNone = /^([A-Za-z]{0,15})+$/;
    var email =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var phone = /^([0-9]{3}-[0-9]{3}-[0-9]{4})+$/;
    let flag = false;

    if(document.contactusform.firstname.value === "" || document.contactusform.firstname.value === null){  
        errorStr2 = "*Please enter a First Name! *<br /> ";
        
        error = errorStr.concat(errorStr2);
        flag = true;
    }
    if (!document.contactusform.firstname.value.match(letters))
    {
        errorStr = "*Please enter letters only for First Name!*  <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    
    if(document.contactusform.lastname.value === "" || document.contactusform.lastname.value === null){  
        errorStr = "*Please enter a Last Name! * <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    if (!document.contactusform.lastname.value.match(letters))
    {
        errorStr = "*Please enter letters only for Last Name!* <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    if(document.contactusform.email.value === "" || document.contactusform.email.value === null){  
        errorStr ="*Please enter an Email Address! * <br />";
        error = error.concat(errorStr);
        flag = true;
    } 
    if (!document.contactusform.email.value.match(email))
    {
        errorStr = "*Please enter a valid Email Address!* <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    <!--if (!document.contactusform.phone.value.match(phone))-->
    <!--{-->
    <!--    errorStr = "*Please enter a valid Phone Number!* <br />";-->
    <!--    error = error.concat(errorStr);-->
    <!--    flag = true;-->
    <!--}-->
    if(document.contactusform.comments.value === "" || document.contactusform.comments.value === null){  
        errorStr ="*Please enter a Comment please! * <br />";
        error = error.concat(errorStr);
        flag = true;
    } 
    if (!document.contactusform.comments.value.match(lettersOrNone))
    {
        errorStr = "*Please enter letters only for Comments!* <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    if (flag === true)
    {
        document.getElementById('errors').innerHTML = error;
        return false;
    }
    else{
        errorStr = "";
        return true;}
        
}
    
function validateLoginform() { 
let error= "";
    let errorStr = "Error: ";
    let errorStr2 = "";
    var email =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let flag = false;

    if(document.Loginform.email.value === "" || document.Loginform.email.value === null){  
        errorStr ="*Please enter an Email Address! * <br />";
        error = error.concat(errorStr);
        flag = true;
    } 
    if (!document.Loginform.email.value.match(email))
    {
        errorStr = "*Please enter a valid Email Address!* <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    if(document.Loginform.password.value === "" || document.Loginform.password.value === null){  
        errorStr ="*Please enter a Password please! * <br />";
        error = error.concat(errorStr);
        flag = true;
    } 
    
    if (flag === true)
    {
        document.getElementById('errors').innerHTML = error;
        return false;
    }
    else{
        errorStr = "";
        return true;}


 } 




function validateclientLoginform(){

     if (!document.clientLoginform.clientname.value.match(letters))
    {
        errorStr = "*Please enter letters only for Last Name!* <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    if(document.clientLoginform.mypet.value === "" || document.clientLoginform.lastname.value === null){  
        errorStr = "*Please enter a Last Name! * <br />";
        error = error.concat(errorStr);
        flag = true;
    }
     if (!document.clientLoginform.mypet.value.match(letters))
    {
        errorStr = "*Please enter letters only for Last Name!* <br />";
        error = error.concat(errorStr);
        flag = true;
    }
}

function validateBusinessLoginform(){
     if (!document.BusinessLoginform.businessName.value.match(letters))
    {
        errorStr = "*Please enter letters only for Last Name!* <br />";
        error = error.concat(errorStr);
        flag = true;
    }
    if(document.BusinessLoginform.service.value === "" || document.BusinessLoginform.lastname.value === null){  
        errorStr = "*Please enter a Last Name! * <br />";
        error = error.concat(errorStr);
        flag = true;
    }
     if (!document.BusinessLoginform.service.value.match(letters))
    {
        errorStr = "*Please enter letters only for Last Name!* <br />";
        error = error.concat(errorStr);
        flag = true;
    }
}




  