function mylistview(){
  
}

function downloadPDF(id){
    console.log("Clicked");
    window.open("?module=Accounts&sugarpdf=showpdf&action=sugarpdf&record="+id+"&sugar_body_only=true");
}