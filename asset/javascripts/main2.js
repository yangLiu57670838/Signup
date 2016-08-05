window.onload = function() {
    
 $.ajax ({
        url: "asset/php/final.php",
        success: function( result ) {
            console.log(result);
            var array = splitEmail(result);
            document.getElementById('result').innerHTML = array[0];
            document.getElementById('result2').innerHTML = array[1];
            document.getElementById('result3').innerHTML = array[2];
            
        }
 });
};

function splitEmail(email) {
    var res = email.split("@"); 
    var name = res[0];
    var res2 = res[1].split(".");
    var domain = res2[0];
    var others = '';
    for (i = 1; i < res2.length; i++) {
        others = others + '.' + res2[i]; 
    }
    var emailparts = [];
    emailparts.push(name);
    emailparts.push(domain);
    emailparts.push(others);
    
    return emailparts;
}