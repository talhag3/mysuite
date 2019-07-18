function create_(){
    sugarListView.get_checks();
    if(document.getElementById("newTargetListName").value===''){
        mergeTR();
        return;
    }
    hide_content();
    show_wait();
    $.ajax({
        type:'post',
        data:{ tr_name: document.getElementById("newTargetListName").value ,tr_ids:document.MassUpdate.uid.value},
        url:'index.php?module=ProspectLists&action=mergerTargetList&sugar_body_only=true',
        success:function(res) {
            console.log("Response :",res);
            hide_wait();
            show_content();
            document.getElementById("merge-div").style.display="none";
            location.reload();
             
        }
    });
    
}
function cancle_(){
    document.getElementById("newTargetListName").value='';
    document.getElementById("merge-div").style.display="none";   
}

function mergeTR(){
    console.log((window.outerWidth/2));
    console.log((window.outerHeight/2));
    document.getElementById("merge-div").style.left=((window.outerWidth/2)-300)+'px';
    document.getElementById("merge-div").style.top=((window.outerHeight/2)-150)+'px';
    document.getElementById("merge-div").style.display="block";
}

function show_wait(){
   document.getElementById("wait-div").style.display="block";
}

function hide_wait(){
   document.getElementById("wait-div").style.display="none";
}

function show_content(){
   document.getElementById("newTargetListName").value='';
   document.getElementById("content-div").style.display="block";
}

function hide_content(){
   document.getElementById("content-div").style.display="none";
}

