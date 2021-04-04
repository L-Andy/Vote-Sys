<div id="campaign" style="display: none">
    <button id="buttonX" class="w3-button w3-round w3-blue w3-medium" onclick="Load()"><i class="fa fa-lightbulb-o"></i>  Join</button>
    <div id='auth' class="w3-container" style="display: none">
        <input id="passportNo" type="text" class="w3-input w3-border w3-round" placeholder="Enter your passport number" />
        <br />
        <button class="w3-green w3-button w3-round w3-small" onclick="checkPassport()">Enter</button>
    </div>
    <div id="main"></div>
</div>
<script stype="text/javascript">
    function Load() {
        document.getElementById('auth').style.display='block';
    }

    function checkPassport() {
        let passportNo = $("#passportNo").val();
        $.ajax({
            url: 'Components/apis/passportChecker.php',
            datatype: 'json',
            method: 'post',
            data: {
                "passport":passportNo
            },
            success: function(html) {
                $("#main").html(html).show();
            }
        });
    }
</script>