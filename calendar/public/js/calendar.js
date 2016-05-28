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
            $("#createEvent").modal("show");
        },
        eventClick: function(calEvent, jsEvent, view) {
            // alert('Event: ' + calEvent.title);
            $("#createEvent").modal("show");
            var eventTitle = calEvent.title;
            $(".modal-body #test").val(eventTitle);
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

    $('#endDate').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
        sideBySide: true
    });
});
