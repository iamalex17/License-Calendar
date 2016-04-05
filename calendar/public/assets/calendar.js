$(document).ready(function () {
  $('#calendar').fullCalendar({
    editable: true,
    eventLimit: true, // allow "more" link when too many events
    height: 650,
  });
});
