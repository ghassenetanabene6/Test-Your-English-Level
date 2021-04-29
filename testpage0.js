function verifEmail(a) 
  {
    adresse = a;
    taille = a.length;  
    validelog = false;
    validedom = false;
    valideext = false;
    arob = adresse.lastIndexOf("@");
    login = adresse.substring(0,arob); 
    pointfinal = adresse.lastIndexOf(".");
    extension = adresse.substring(pointfinal,taille);
    domaine = adresse.substring(arob+1,pointfinal);
    if ( login.length > 2 ) 
    {
      validelog = true;
    }
    else 
    {
      validelog = false;
    }
    if ( domaine.length > 1 ) 
    {
      validedom = true;
    }
    else 
    { 
      validelog = false;
    }
    if ( pointfinal > -1 && (extension.length == 3 || extension.length == 4) ) 
    {
      valideext = true;
    }
    else 
    {
      valideext = false;
    }
    if ( validelog == true && validedom == true && valideext == true ) 
    {
      return true;
    }
    else 
    {
      return false;
    }
  }
function testSignIn()
{
  var e=document.formSignIn.email1.value;
  var p=document.formSignIn.password1.value;
  if(e == "")
      {alert("Enter your email please!");
        return false;}

      if(!verifEmail(e)){
        alert("Your email should be in this form : Student@example.com !");
        return false;
        }
    else {
          if(p == "")
             {alert("Enter your password please!");
               return false;}
          }
  return true;


}


function testSignUp()
    { var e1=document.formSignUp.email2.value;
      var e2=document.formSignUp.cemail2.value;
      var p1=document.formSignUp.password2.value;
      var p2=document.formSignUp.cpassword2.value;
      if(document.formSignUp.Fname.value == "")
      {alert("Enter your first name please!");
        return false;}
      
      if(document.formSignUp.Lname.value == "")
      {alert("Enter your last name please!");
        return false;}
      if(e1 == "")
      {alert("Enter your email please!");
        return false;}

      if(!verifEmail(e1)){
        alert("Your email should be in this form : Student@example.com !");
        return false;
        }
    else {
                if(e2 == "")
                  { alert("Confirm your email please!");
                    return false;}
                  if(!verifEmail(e2))
                  {
                     alert("Your comfirmation's email should be in this form : Student@example.com !");
                    return false;
                  }
                  else{
                      if(e1!=e2)
                          { alert("the emails are different! Confirm your email please!");
                          return false;}
                      else{
                          if(p1 == "")
                                {alert("Enter your password please!");
                                  return false;}
                          if(p2 == "")
                                {alert("confirm your password please!");
                                  return false;}

                        if(p1!=p2)
                            { alert("the passwords are differents! Confirm your password please!");
                          return false;}
                        else{ 

                                if(document.formSignUp.gender.value == "")
                                  {
                                    alert("Enter your gender please!");
                                    return false;
                                }
                                if(document.formSignUp.country.value=="")
                                 {alert("select your Country please!");
                                  return false;}
                                  if(document.formSignUp.month.value=="")
                                 {alert("select the month of birth date please!");
                                  return false;}
                                if(document.formSignUp.day.value=="")
                                 {alert("select the day of birth date please!");
                                  return false;}
                                  if(document.formSignUp.year.value=="")
                                 {alert("select the year of birth date please!");
                                  return false;}
                            }


                  }}


  }
    return true;
  }
