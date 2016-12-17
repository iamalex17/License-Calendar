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
            if (calEvent._end == null) {
                $(".modal-body #endDate2").val(calEvent.start['_i']);
            }

            $("#editEventModal").modal("show");
            $("form").attr('action',$("#editEvent").attr('action')+ calEvent.id);
            $(".modal-body #title").val(calEvent.title);
            $(".modal-body #startDate2").val(calEvent.start['_i']);
            $(".modal-body #endDate2").val(calEvent.end['_i']);
        }
    });

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus();
    });

    $('#startDate,#startDate2').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
        sideBySide: true
    });

    $('#endDate,#endDate2').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
        sideBySide: true
    });
});

//# sourceMappingURL=app.js.map
