@extends('layouts.app')

@section('chart-canvas')
    <div class="p-1" id="viewport-chart">
        <div class="m-0" style="overflow-y: auto" id="ganttChart"></div>
        <br/><br/>
        <div id="eventMessage"></div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        function parseDate(data = {}) {
            data.forEach(a => {
                return a;
            })
            return data;
        }


        const innerWidth = document.querySelector('#viewport-chart #ganttChart');
        console.log(@json($data))
        document.addEventListener("DOMContentLoaded", function (event) {
            jQuery("#ganttChart").ganttView({
                data: @json($data),
                slideWidth: '100%',
                behavior: {
                    onClick: function (data) {
                        var msg = "You clicked on an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                        jQuery("#eventMessage").text(msg);
                    },
                    onResize: function (data) {
                        var msg = "You resized an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                        jQuery("#eventMessage").text(msg);
                    },
                    onDrag: function (data) {
                        var msg = "You dragged an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                        jQuery("#eventMessage").text(msg);
                    },
                    draggable:false
                }
            });

            // $("#ganttChart").resize()
        });


    </script>
@endsection
