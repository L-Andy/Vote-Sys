function Approve(params) {
    $.ajax({
        beforeSend: function(html) {
            $("#verifystatus").html(html).show();
        },
        url: 'adminComponents/apis/approve.php',
        method: 'post',
        datatype: 'json',
        data: {
            "user": params
        },
        complete: function(html) {
            $("#verifystatus").html(html).hide();
        },
        success: function(html) {
            $("#"+params).html(html).show();
        }
    });
}