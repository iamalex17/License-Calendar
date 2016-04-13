$(document).ready(function () {
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today myCustomButton',
      center: 'title',
      right: 'month,agendaWeek,agendaDay',
    },
    editable: true,
    eventLimit: true, // allow "more" link when too many events
    height: 650,
  });

  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus();
  });
});
