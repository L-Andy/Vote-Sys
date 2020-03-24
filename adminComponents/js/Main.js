function Approve(params) {
    $.ajax({
        url: 'adminComponents/apis/approve.php',
        method: 'post',
        datatype: 'json',
        data: {
            "user": params
        },
        success: function(html) {
            $("#"+params).html(html).show();
        }
    });
}