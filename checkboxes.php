<style>
    input[type='radio'] {
        width:2em;
        background: green;
    }
</style>


   <form action="checkboxes_process.php" method="post">
    <p><span style="display:inline-block; width: 160px; margin-right:5px">Do you like hamsters?</span><input type="checkbox" name="like" value="likes"/></p>
    <p><span style="display:inline-block; width: 160px; margin-right:5px">Do you own a hamster?</span><input type="checkbox" name="own" value="owns" style="border:1px solid #927409" /></p>
    <p>What would you like to say about hamsters? <input type="text" name="say" value="I would like to say" /></p>
    <p><input type="submit" value="Submit" /></p>
</form>

<form action="checkboxes_process.php" method="post">
    <!-- Radio buttons grouped by same name-->
    <h3>Hamster situation:</h3>
    <p><input type="radio" name="hamster" value="in a ball" />in a Ball</p>
    <p><input type="radio" name="hamster" value="running" />Running</p>
    <p><input type="radio" name="hamster" value="energetic" />Energetic</p>
    <h3>Ball properties:</h3>
    <p><input type="radio" name="ball" value="clear" />Clear</p>
    <p><input type="radio" name="ball" value="round" />Round</p>
    <p><input type="radio" name="ball" value="plastic" />Plastic</p>
    <p><input type="submit" value="Submit" /></p>

</form>
