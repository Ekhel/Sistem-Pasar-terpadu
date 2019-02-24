
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
      <h5 class="card-header"><i class="fa fa-plus-circle"></i> Kalender Laporan Pengantaran Minyak</h5>
      <div class="card-body">
        <a href="<?php echo base_url()?>Laporan" class="btn btn-outline-primary"><i class="fa fa-list"></i> Lihat Table</a>
        <hr/>
        <div id='calendar1'></div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    var get_data = '<?php echo $get_data; ?>';
    $(function() {
        "use strict";
        $(document).ready(function() {
            $('#calendar1').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                defaultDate: '2019-01-01',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: JSON.parse(get_data)
            });

        });
        $(document).ready(function() {


            /* initialize the external events
            -----------------------------------------------------------------*/

            $('#external-events .fc-event').each(function() {

                // store data so the calendar knows to render an event upon drop
                $(this).data('event', {
                    title: $.trim($(this).text()), // use the element's text as the event title
                    stick: true // maintain when user navigates (see docs on the renderEvent method)
                });

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 999,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                });

            });
            /* initialize the calendar
            -----------------------------------------------------------------*/
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar
                drop: function() {
                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }
                }
            });
        });
     });

  </script>

<!--<div class="dashboard-wrapper">
  <div class="row">

  </div>
</div>!-->
