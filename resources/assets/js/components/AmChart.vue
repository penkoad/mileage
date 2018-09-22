<template>
    <div>
        <div id="chartdiv" class="hello"></div>
    </div>
</template>

<script>
    import AmCharts from 'amcharts3'
    import AmSerial from 'amcharts3/amcharts/serial'

    export default {
        name: 'app',
        props: ['data', 'ctitle'],

        data() {
            return {
                msg: this.ctitle,
                dataset: JSON.parse(this.data),
                chart: {}
            }
        },

        created() {

            this.chart = window.AmCharts.makeChart("chartdiv", {
                    "path": "/amcharts/",
                    "type": "serial",
                    "theme": "light",
                    "marginRight": 80,
                    "autoMarginOffset": 20,
                    "color": "#000000", // color of legend and axis
                    "colors": [ // colors of the series
                        "#67b7dc"
                    ],
                    "dataDateFormat": "YYYY-MM-DD HH:NN",
                    "categoryField": "date",
                    "categoryAxis": {
                        "gridPosition": "start",
                        "parseDates": true,
                        "dashLength": 1,
                        "minorGridEnabled": true,
                        //"minPeriod": "DD"
                    },
                    "balloon": {
                        "borderThickness": 1,
                        "shadowAlpha": 0
                    },
                    "graphs": [{
                        "balloonText": "[[category]]<br><b><span style='font-size:14px;'>value:[[value]]</span></b>",
                        "bullet": "round",
                        "dashLength": 3,
                        "colorField": "color",
                        "valueField": "value"
                    }],
                    "trendLines": [{
                        "finalDate": "2019-06-24 12",
                        "finalValue": 70000,
                        "initialDate": "2016-06-24 12",
                        "initialValue": 0,
                        "lineColor": "#CC0000"
                    }],
                    "chartScrollbar": {
                        "graph": "g1",
                        "oppositeAxis": false,
                        "offset": 30,
                        "scrollbarHeight": 80,
                        "backgroundAlpha": 0,
                        "selectedBackgroundAlpha": 0.1,
                        "selectedBackgroundColor": "#888888",
                        "graphFillAlpha": 0,
                        "graphLineAlpha": 0.5,
                        "selectedGraphFillAlpha": 0,
                        "selectedGraphLineAlpha": 1,
                        "autoGridCount": true,
                        "color": "#AAAAAA"
                    },
                    "chartCursor": {
                        "pan": true,
                        "valueLineEnabled": true,
                        "valueLineBalloonEnabled": true,
                        "cursorAlpha": 1,
                        "cursorColor": "#258cbb",
                        "limitToGraph": "g1",
                        "valueLineAlpha": 0.2,
                        "valueZoomable": true
                    },
                    "valueScrollbar": {
                        "oppositeAxis": false,
                        "offset": 50,
                        "scrollbarHeight": 10
                    },
                    "valueAxes": [
                        {
                            "title": "KM"
                        }
                    ],
                    "titles": [
                        {
                            "size": 15,
                            "text": this.msg
                        }
                    ],
                    "export": {
                        "enabled": true
                    },
                    "dataProvider": this.buildMileageList()
                }
            );

            // Register a listener
            this.chart.addListener("rendered", this.zoomChart);
        },

        methods: {
            buildMileageList: function () {

                let data = this.dataset;
                let mileage_list = new Array(data.length);

                for (let i = 0; i < data.length; i++) {
                    let newTab = [];
                    newTab['date'] = data[i].added_on;
                    newTab['value'] = data[i].mileage;

                    mileage_list[i] = newTab;
                }

                return mileage_list;
            },

            zoomChart: function (){
                // Between a year ago and tomorrow
                let now = new Date();
                let ayearago = new Date(now.getFullYear() - 1, now.getMonth(), now.getDate());
                let tomorrow = new Date(now + 24 * 60 * 60 * 1000);
                this.chart.zoomToDates(ayearago, tomorrow);
            }
        },

        mounted() {
            // console.log('Component AmChart mounted.');
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .hello {
        width: 100%;
        height: 650px;
    }
</style>
