 function somenteNumeros(e) {
    var charCode = e.charCode ? e.charCode : e.keyCode;
    // charCode 8 = backspace   
    // charCode 9 = tab
   if (charCode != 8 && charCode != 9   ) {
       // charCode 48 equivale a 0   
       // charCode 57 equivale a 9
       var max = 5;
       var num = document.getElementById('num');           
            
       if ((charCode < 48 || charCode > 57 || charCode == 44)) {
        return true;

        
     }
     if ((num.value.length >= max)) {
      return false;
      
    }
       
    }
} 


function validateInput() {
  var inputValue = parseInt(document.getElementById('myInput').value);

  if (inputValue > 10) {
    document.getElementById('myInput').value = 10;
  }
}




