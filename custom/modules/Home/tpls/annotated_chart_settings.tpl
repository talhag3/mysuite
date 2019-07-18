<h1>Hi</h1>
<form id='chart_settings' action="" method="post">
    
    <button id="btn_form_submit" type="submit" onclick="submit_form" >Save</button>
</form>


{literal}
    <script>
            var chart_settings_form = document.getElementById('chart_settings');

            function submit_form(){
                chart_settings_form.innerHTML +='<input name="chart_modules[]" type="hidden" value="" >';
                chart_settings_form.submit();
            }

    </script>
{/literal}









