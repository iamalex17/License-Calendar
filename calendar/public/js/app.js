$(document).ready(function () {
    calendar = $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today myCustomButton',
            center: 'title',
            right: 'month,agendaWeek,agendaDay',
        },
        events: '/events',
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        height: $(window).height()*0.90,
        dayClick: function(date, jsEvent, view) {
            $("#createEventModal").modal("show");
        },
        eventClick: function(calEvent, jsEvent, view) {
            $("#editEventModal").modal("show");
            $("form").attr('action',$("#editEvent").attr('action')+ calEvent.id);
            $(".modal-body #title").val(calEvent.title);
            $(".modal-body #startDate2").val(calEvent.start['_i']);
            $(".modal-body #endDate2").val(calEvent.end['_i']);
        }
    });

    if(calendar) {
        $(window).resize(function() {
            var calHeight = $(window).height()*0.90;
            $('#calendar').fullCalendar('option', 'height', calHeight);
        });
    };

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus();
    });

    $('#startDate').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
        sideBySide: true
    });

    $('#startDate1').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
        sideBySide: true
    });

    $('#endDate').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
        sideBySide: true
    });

    $('#endDate2').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
        sideBySide: true
    });
});

//# sourceMappingURL=app.js.map
