<head>
    <link rel="StyleSheet" href="css/main.css" type="text/css">
</head>
<body>
<table>
 <tr>
    <th>Thuis</th>
     <th></th>
    <th>Uit</th> 
     
    <th>Datum</th>
    <th>Tijd</th>
    <th>Week</th>
  </tr>
    
      {foreach from=$result item=oneItem}
  <tr>
      <td>{$oneItem.team_thuis}</td>
      <td>-</td>
    <td>{$oneItem.team_uit}</td> 
    <td>{$oneItem.datum}</td>
    <td>{$oneItem.tijd}</td>
    <td>{$oneItem.week}</td>
      
  </tr>  
    {/foreach}
</table>
</body>