function save_annotation_chart_settings(){
    
    
    annotation_modules_str = create_annotation_modules_str();

    console.log(annotation_modules_str);
}


function create_annotation_modules_str(){
    /*
     *Making String For Annotated Module
     *Check all annotated modules  
     */
    var annotation_modules = $('.annotation_modules');
    var annotation_modules_str = '';
    for(var i=0;i<annotation_modules.length;i++) {
        if(annotation_modules[i].checked){
           annotation_modules_str +=annotation_modules[i].value+','; 
        }
    }
    return annotation_modules_str.slice(0, -1);
}