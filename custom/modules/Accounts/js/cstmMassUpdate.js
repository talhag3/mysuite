function updateCity(){
     console.log(" *updateCity* ");
      
    /* var listItems =  document.getElementsByName('mass[]'); 
    var numItem = listItems.length;
    var selectedItemIds =[];
    for(var i = 0 ; i < numItem ; i++){
        if(listItems[i].checked){
            selectedItemIds.push(listItems[i].value);
        }         
    } */
    // no item is selected 
    if(sugarListView.get_checks()){
        $("div#loading").show();

        // Update entire List
        if(document.MassUpdate.select_entire_list.value==="1"){
            var current_query_by_page = document.getElementsByName('current_query_by_page')[0].value;
            $.ajax({
                type:'post',
                data:{ select_entire_list:true,query:current_query_by_page },
                url:'index.php?module=Accounts&action=addCityInAll&sugar_body_only=true',
                success:function(res) {
                    $("div#loading").hide();
                    var modalBody = "";
                    $('#myModalBody').html(""); 
                    if(res) {
                        modalBody =`<h4><center>${res} Records Updated<center></h4>`;
                    } 
                    $('#myModalBody').append(modalBody);
                    $('#myModal').modal('show'); 
                    //location.reload();
                }
            });
        }else{
            $.ajax({
                type:'post',
                data:{ data:document.MassUpdate.uid.value },
                url:'index.php?module=Accounts&action=addCityInAll&sugar_body_only=true',
                success:function(res) {
                    $("div#loading").hide();
                    var res = JSON.parse(res);
                    var modalBody = ""; 
                    $('#myModalBody').html("");
                    if(res) {
                        modalBody =`<h4><center>${res} Records Updated<center></h4>`;
                    } 
                    $('#myModalBody').append(modalBody);
                    $('#myModal').modal('show'); 
                    //location.reload();
                }
            });
        } 
    }else{
      alert("No Record is Selected");
    }

    $('#myModal').on('hide.bs.modal', function () { 
        sListView.clear_all();
        location.reload();
    });
}

//sugarListView.get_num_selected()
//sListView.clear_all(document.MassUpdate, "mass[]", false);
//document.getElementsByName('current_query_by_page')[0].value        
