{foreach from=$result item=row}
   Account Name : {$row.account}
   <br>
   Related contacts<br>
   {foreach from=$row.contacts item=contact }
       {$contact->name}<br>
   {/foreach}
{/foreach}
