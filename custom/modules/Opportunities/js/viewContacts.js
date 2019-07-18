function viewContacts(recordId){
    console.log('viewContacts clicked');
    $.ajax({
        url:"?module=Opportunities&action=getContacts&record="+recordId+"&sugar_body_only=true",
        success:function(res){
            console.log(res);
            if(res=="true") {
                window.open("?module=Opportunities&action=big&record="+recordId,'_blank');
            }
            else {
                alert("no related contacts");
                console.log("alert");
            }
        }
    });
}