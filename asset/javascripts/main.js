function validate() {
    
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    if (email == null || email == "" || password == null || password == "")
      {
      $('#button').prop("disabled", true);    
      return false;
      }
    else
      {
      $('#button').prop("disabled", false);
  
      }
   
    
}