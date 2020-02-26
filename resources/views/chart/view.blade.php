@extends('layouts.app')

@section('chart-canvas')
    <div class="p-1" id="viewport-chart">
        <div class="m-0" style="overflow-y: auto" id="ganttChart"></div>
        <br/><br/>
        <div id="eventMessage"></div>
        <div id="footer-section-chart" class="footer-section-chart">
            <div class="mb-1"><strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, non?</strong></div>
            <div>
                <ul class="font-italic">
                    <li>Lorem ipsum dolor.</li>
                    <li>Lorem ipsum dolor.</li>
                    <li>Lorem ipsum dolor.</li>
                    <li>Lorem ipsum dolor.</li>
                    <li>Lorem ipsum dolor.</li>
                    <li>Lorem ipsum dolor.</li>
                    <li>Lorem ipsum dolor.</li>
                    <li>Lorem ipsum dolor.</li>
                </ul>
            </div>
        </div>
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

        function addNewSection() {
            const divFooter = document.querySelector('#viewport-chart')
        }


        document.addEventListener("DOMContentLoaded", function (event) {
            jQuery("#ganttChart").ganttView({
                data: @json($data),
                slideWidth: '100%',
                behavior: {
                    onClick: function (data) {
                        console.log(data)
                        window.open(`/reports/${data.report_id}`)
                    },
                    draggable: false,
                    resizable: false
                }
            }).then(r => {
                const parentDiv = document.querySelector('#viewport-chart .ganttview-slide-container');
                const pointer = document.querySelector('#viewport-chart .current_day').style;
                pointer.setProperty('--width_all', `${parseFloat(parentDiv.offsetHeight - 20)}px`);
            })


            // $("#ganttChart").resize()
        });


    </script>
@endsection
