<script type='text/javascript' src='custom/modules/Accounts/js/charts_loader.js'></script>


{literal}
    <script type='text/javascript'>
      $('#chart_test').parent().parent().html("<div id='chart_div' style='width: 900px; height: 240px;'></div>")
      
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
        
        for(date in chart_data){
          
          call_title = undefined;
          call_links = undefined;
          call_count = 2;

          if(chart_data[date].calls){
            
            call_title="Calls";
            call_links='';
            //call_count=chart_data[date].calls.length;
            //call_count=0.5;
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
            //email_count=chart_data[date].emails.length;
            //email_count=1;
            for(var i=1;i<=chart_data[date].emails.length;i++){
              email_links +='<a href="./index.php?module=Emails&action=DetailView&record='+chart_data[date].emails[i-1][0]+'" target="_blank" >'+chart_data[date].emails[i-1][1]+'</a><br>';
            } 

          }


          rows.push([new Date("'"+date+"'"),
                       call_count,
                       call_title,
                       call_links,
                       email_count,
                       email_title,
                       email_links
                      ]); 
        }
        
        data.addRows(rows);
        
        var options = {
          displayAnnotations: true,
          allowHtml:true,
          displayLegendValues	:false,
          chart:{vAxis: { textPosition: 'none'} }, 
          'min':4,
          'max':-1, 
          'scaleType':'maximized',
          
        };
        chart = new google.visualization.AnnotatedTimeLine(document.getElementById('chart_div'));
        
        chart.draw(data,options);
        
      }//End drawChart Function
     
      
      


      

      
    </script>
{/literal}

