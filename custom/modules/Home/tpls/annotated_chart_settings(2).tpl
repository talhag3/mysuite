<form action="" method="post">
    <div style="border: #534d64 2px solid; width: 300px;">
        <div style="border-bottom: #534d64 2px solid;">
            <h4>Modules Active In Annotation Chart</h4>
        </div>
        <div style="padding: 10px;">
            {foreach from=$chart_modules item=item key=key name=name}
                <label><input type="checkbox" name="chart_modules[]" value="{$key}" {$chart_modules_checked.$key} ><span style="margin-left: 10px">{$item}</span></label><br/>
            {/foreach}
        </div>
    </div>
    <input type="submit" name="submit" value="Save">
</form>



