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


        document.addEventListener("DOMContentLoaded", function (event) {
            console.log(@json($data))
            // const innerWidth = document.querySelector('#viewport-chart .ganttview-slide-container');
            // document.querySelector('#viewport-chart .current_day').style;
            // style.setProperty('--width_all', `${parseFloat(innerWidth - 20)}px`);

            jQuery("#ganttChart").ganttView({
                data: @json($data),
                slideWidth: '100%',
                behavior: {
                    onClick: function (data) {
                        window.open(`/reports/2`)
                    },
                    draggable: false,
                    resizable: false
                }
            });

            // $("#ganttChart").resize()
        });


    </script>
@endsection
