@extends('_layouts._indexuser')
@section('content')

    <div class="row">
        <div class="col-md-3 col-sm-12">
            <div class="card-box">
                <div class="card-head">
                    <header>Draggable Event</header>
                </div>
                <div class="card-body">
                    <div id='external-events'>
                        <div class="fc-event fc-event-success" data-class="fc-event-success">Work</div>
                        <div class="fc-event fc-event-warning" data-class="fc-event-warning">Personal
                        </div>
                        <div class="fc-event fc-event-primary" data-class="fc-event-primary">Important
                        </div>
                        <div class="fc-event fc-event-danger" data-class="fc-event-danger">Travel</div>
                        <div class="fc-event fc-event-info" data-class="fc-event-info">Friends</div>
                        <br>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id='drop-remove'>
                            <label class="custom-control-label" for="drop-remove">Remove after
                                drop</label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-9 col-sm-12">
            <div class="card">
                <div class="card-head">
                    <header>Calendar</header>
                </div>
                <div class="card-body">
                    <div class="panel-body">
                        <div id="calendar" class="has-toolbar"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {


            var SITEURL = "{{url('/')}}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#calendar').fullCalendar({
                plugins: ["interaction", "dayGrid", "timeGrid"],
                editable: true,
                events: SITEURL + "/calendrier",
                displayEventTime: true,
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                //color of calendar event

                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function (start, end, allDay) {
                    var title = prompt('Event Title:');

                    if (title) {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                        $.ajax({
                            url: SITEURL + "/fullcalendareventmaster/create",
                            data: 'title=' + title + '&start=' + start + '&end=' + end,
                            type: "POST",
                            success: function (data) {
                                displayMessage("Added Successfully");
                            }
                        });
                        calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                            true
                        );
                    }
                    calendar.fullCalendar('unselect');
                },

                eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: SITEURL + '/fullcalendareventmaster/update',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                        success: function (response) {
                            displayMessage("Updated Successfully");
                        }
                    });
                },
                eventClick: function (event) {
                    var deleteMsg = confirm("Do you really want to delete?");
                    if (deleteMsg) {
                        $.ajax({
                            type: "POST",
                            url: SITEURL + '/fullcalendareventmaster/delete',
                            data: "&id=" + event.id,
                            success: function (response) {
                                if(parseInt(response) > 0) {
                                    $('#calendar').fullCalendar('removeEvents', event.id);
                                    displayMessage("Deleted Successfully");
                                }
                            }
                        });
                    }
                }

            });
        });

        function displayMessage(message) {
            $(".response").html(""+message+"");
            setInterval(function() { $(".success").fadeOut(); }, 1000);
        }
    </script>
@endsection
