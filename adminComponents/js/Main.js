function Approve(params, actionType) {
    let url = null;
    switch (actionType) {
        case 'approve':
            url = 'adminComponents/apis/approve.php';
            break;

        case 'delete':
            url = 'adminComponents/apis/delete.php';
            break;

        default:
            break;
    }
    $.ajax({
        beforeSend: function (html) {
            $("#verifystatus").html(html).show();
        },
        url: url,
        method: 'post',
        datatype: 'json',
        data: {
            "user": params
        },
        complete: function (html) {
            $("#verifystatus").html(html).hide();
        },
        success: function (html) {
            $("#" + params).html(html).show();
            document.getElementById('btn'+params).style.display = 'none';
        }
    });
}
