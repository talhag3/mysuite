chartdata=[];
for(date in chart_data){
          console.log("Record Date :"+date);
          call_title = undefined;
          call_links = undefined;
          call_count = 0;

          if(chart_data[date].calls){
            
            call_title="Calls";
            call_links='';
            call_count=chart_data[date].calls.length;

              for(var i=1;i<=chart_data[date].calls.length ; i++){
                call_links +='<a href="./index.php?module=Calls&action=DetailView&record='+chart_data[date].calls[i-1][0]+'" target="_blank" >'+chart_data[date].calls[i-1][1]+'</a><br>';
              } 

          }

          email_title = undefined;
          email_links = undefined;
          email_count = 0;

          if(chart_data[date].emails){
            
            email_title="Emails";
            email_links='';
            email_count=chart_data[date].emails.length;

            for(var i=1;i<=chart_data[date].emails.length;i++){
              email_links +='<a href="./index.php?module=Emails&action=DetailView&record='+chart_data[date].emails[i-1][0]+'" target="_blank" >'+chart_data[date].emails[i-1][1]+'</a><br>';
            } 

          }


          chartdata.push([new Date("'"+date+"'"),
                       call_count,
                       call_title,
                       call_links,
                       email_count,
                       email_title,
                       email_links
                      ]); 
}