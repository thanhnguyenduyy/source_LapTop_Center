var socket = io('http://localhost:9090')
socket.on('notification:user', function(data) {
    console.log(data)
    if ($("#count-notification-1").text() != "") {
        countNotification1 = parseInt($("#count-notification-1").text()) + 1;
    } else {
        countNotification1 = 1
    }

    $("#count-notification-1").text(countNotification1)
    $("#count-notification-2").text(parseInt($("#count-notification-2").text()) + 1)
    $("#list-notification").append(`
            <li>
                <!-- start notification -->
                <a href="admin/hoa-don">
                <i class="fa fa-users text-aqua"></i>` + data.name + ` vừa mới đặt hàng!
                </a>
            </li>
        `)
})

$(function() {
    $('#example1').DataTable();
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': true,
        'info': true,
        'autoWidth': false
    });
})