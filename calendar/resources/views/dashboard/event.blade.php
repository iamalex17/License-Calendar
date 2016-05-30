<div id="createEventModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New Event</h4>
            </div>
            <form action="/event/{{ Auth::user()->id }}" method="POST">
                {!! csrf_field() !!}
                <div class="modal-body">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Event Title" required="required">
                    <input type="text" name="start_date" class="form-control" id='startDate' placeholder="Event Start Date" required="required">
                    <input type="text" name="end_date" class="form-control" id='endDate' placeholder="Event End Date" required="required">
                    <span>Alert</span>
                    <select name="alerts" class="selectpicker" id="alerts">
                        <option value="0">At event moment</option>
                        <option value="1">5 minutes before</option>
                        <option value="2">10 minutes before</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Undo</button>
                    <button type="submit" class="btn btn-success">Save event</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="editEventModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title pull-left">Edit Event</h4>
                <form class="pull-right" action="/event/" method="POST" id="deleteEvent">
                    {!! csrf_field() !!}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-xs">Delete event</button>
                </form>
            </div>
            <form action="/event/" method="POST" id="editEvent">
                {!! csrf_field() !!}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Event Title" required="required">
                    <input type="text" name="start_date" class="form-control" id='startDate2' placeholder="Event Start Date" required="required">
                    <input type="text" name="end_date" class="form-control" id='endDate2' placeholder="Event End Date" required="required">
                    <span>Alert</span>
                    <select name="alerts" class="selectpicker" id="alerts">
                        <option value="0">At event moment</option>
                        <option value="1">5 minutes before</option>
                        <option value="2">10 minutes before</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Undo</button>
                    <button type="submit" class="btn btn-success">Save event</button>
                </div>
            </form>
        </div>
    </div>
</div>
