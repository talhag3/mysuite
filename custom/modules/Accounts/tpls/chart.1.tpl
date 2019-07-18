<script type='text/javascript' src='custom/modules/Accounts/js/charts_loader.js'></script>


{literal}
    <script type='text/javascript'>
      $('#chart_test').parent().parent().html("<div id='chart_div' style='width: 700px; height: 240px;'></div>")
      
      google.charts.load('current', {'packages':['annotatedtimeline']});
      google.charts.setOnLoadCallback(drawChart);
      var chart;
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', 'Calls');
        data.addColumn('string', 'Calls title');
        data.addColumn('string', 'Calls text');
        data.addColumn('number',"Emails");
        data.addColumn('string', 'Emails title');
        data.addColumn('string', 'Emails text');
        rows=[];
        
        //Calls Data Push 
        if(calls_data){
          for(date in calls_data){
            var call_links = "";
            for(var i=1; i<=calls_data[date].length ; i++){
              call_links +='<a href="./index.php?module=Calls&action=DetailView&record='+calls_data[date][i-1][0]+'" target="_blank" >'+calls_data[date][i-1][1]+'</a><br>';  
            }
          
            console.log(call_links);
            rows.push([new Date("'"+date+"'"),
                       calls_data[date].length,
                       "",
                       "",
                       0,
                       "<h6>Calls</h6>",
                       call_links
                      ]); 
          }
        }
        //Emails Data Push
        if(emails_data){
          for(date in emails_data){
            var emails_links = "";
            for(var i=1; i<=emails_data[date].length ; i++){
               emails_links +='<a href="./index.php?module=Emails&action=DetailView&record='+emails_data[date][i-1][0]+'" target="_blank" >'+emails_data[date][i-1][1]+'</a><br>';  
            }
            rows.push([new Date("'"+date+"'"),
                       0,
                       undefined,
                       undefined,
                       emails_data[date].length,
                       "<h6>Emails<h6>",
                       emails_links
                      ]); 
          }
        }
         
        
        data.addRows(rows);
        
        
        var options = {
          displayAnnotations: true,
          allowHtml:true
        };
        chart = new google.visualization.AnnotatedTimeLine(document.getElementById('chart_div'));
        
        chart.draw(data,options);
        
      }//End drawChart Function
     
      
      


      

      
    </script>
{/literal}

