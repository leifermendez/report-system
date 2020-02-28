@extends('layouts.app')

@section('chart-canvas')
    <div class="p-1" id="viewport-chart">
        <div class="m-0" style="overflow-y: auto" id="ganttChart"></div>
        <br/><br/>
        <div id="eventMessage"></div>
        <div id="footer-section-chart" class="footer-section-chart">
            <div class="pull-right">
                <button class="btn btn-sm btn-default" id="close-btn" onclick="closeKeepNote()"><i
                        class="fas fa-times"></i></button>
            </div>
            <div class="inside-content">
                <div class="mb-1"><strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                        non?</strong>

                </div>
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
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        const footerElement = document.querySelector('#footer-section-chart');

        function parseDate(data = {}) {
            data.forEach(a => {
                return a;
            })
            return data;
        }

        function closeKeepNote(event) {
            footerElement.style.display = 'none'
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

            const elementHover = document.querySelectorAll('.ganttview-vtheader-series-name');

            elementHover.forEach(function (elem) {

                elem.addEventListener("mouseover", function (event) {
                    // highlight the mouseover target
                    footerElement.style.display = 'block';

                    footerElement.querySelector('.inside-content').innerHTML = `${(elem.dataset.content) ? elem.dataset.content : ''}`;
                    event.target.style.color = "orange";
                    // reset the color after a short delay
                    // setTimeout(function () {
                    event.target.style.color = "";
                    //     footerElement.style.display = 'none';
                    // }, 500);
                }, false);
            });

        });


    </script>
@endsection
