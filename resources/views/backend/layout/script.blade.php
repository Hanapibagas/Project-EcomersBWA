<script src="{{ asset('backend/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/lib/ionicons/ionicons.js') }}"></script>
<script src="{{ asset('backend/lib/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('backend/lib/jquery.flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('backend/lib/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('backend/lib/peity/jquery.peity.min.js') }}"></script>

<script src="{{ asset('backend/js/azia.js') }}"></script>
<script src="{{ asset('backend/js/chart.flot.sampledata.js') }}"></script>
<script src="{{ asset('backend/js/dashboard.sampledata.js') }}"></script>
<script src="{{ asset('backend/lib/jquery-steps/lib/jquery.cookie-1.3.1.js') }}" type="text/javascript"></script>
<script>
    $(function(){
      'use strict'

          var plot = $.plot('#flotChart', [{
        data: flotSampleData3,
        color: '#007bff',
        lines: {
          fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
        }
      },{
        data: flotSampleData4,
        color: '#560bd0',
        lines: {
          fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
        }
      }], {
              series: {
                  shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true
          }
              },
        grid: {
          borderWidth: 0,
          labelMargin: 8
        },
              yaxis: {
          show: true,
                  min: 0,
                  max: 100,
          ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
          tickColor: '#eee'
              },
              xaxis: {
          show: true,
          color: '#fff',
          ticks: [[25,'OCT 21'],[75,'OCT 22'],[100,'OCT 23'],[125,'OCT 24']],
        }
      });

      $.plot('#flotChart1', [{
        data: dashData2,
        color: '#00cccc'
      }], {
              series: {
                  shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: { colors: [ { opacity: 0.2 }, { opacity: 0.2 } ] }
          }
              },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
              yaxis: {
          show: false,
          min: 0,
          max: 35
        },
              xaxis: {
          show: false,
          max: 50
        }
          });

      $.plot('#flotChart2', [{
        data: dashData2,
        color: '#007bff'
      }], {
              series: {
                  shadowSize: 0,
          bars: {
            show: true,
            lineWidth: 0,
            fill: 1,
            barWidth: .5
          }
              },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
              yaxis: {
          show: false,
          min: 0,
          max: 35
        },
              xaxis: {
          show: false,
          max: 20
        }
          });


      //-------------------------------------------------------------//


      // Line chart
      $('.peity-line').peity('line');

      // Bar charts
      $('.peity-bar').peity('bar');

      // Bar charts
      $('.peity-donut').peity('donut');

      var ctx5 = document.getElementById('chartBar5').getContext('2d');
      new Chart(ctx5, {
        type: 'bar',
        data: {
          labels: [0,1,2,3,4,5,6,7],
          datasets: [{
            data: [2, 4, 10, 20, 45, 40, 35, 18],
            backgroundColor: '#560bd0'
          }, {
            data: [3, 6, 15, 35, 50, 45, 35, 25],
            backgroundColor: '#cad0e8'
          }]
        },
        options: {
          maintainAspectRatio: false,
          tooltips: {
            enabled: false
          },
          legend: {
            display: false,
              labels: {
                display: false
              }
          },
          scales: {
            yAxes: [{
              display: false,
              ticks: {
                beginAtZero:true,
                fontSize: 11,
                max: 80
              }
            }],
            xAxes: [{
              barPercentage: 0.6,
              gridLines: {
                color: 'rgba(0,0,0,0.08)'
              },
              ticks: {
                beginAtZero:true,
                fontSize: 11,
                display: false
              }
            }]
          }
        }
      });

      // Donut Chart
      var datapie = {
        labels: ['Search', 'Email', 'Referral', 'Social', 'Other'],
        datasets: [{
          data: [25,20,30,15,10],
          backgroundColor: ['#6f42c1', '#007bff','#17a2b8','#00cccc','#adb2bd']
        }]
      };

      var optionpie = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: false,
        },
        animation: {
          animateScale: true,
          animateRotate: true
        }
      };

      // For a doughnut chart
      var ctxpie= document.getElementById('chartDonut');
      var myPieChart6 = new Chart(ctxpie, {
        type: 'doughnut',
        data: datapie,
        options: optionpie
      });

    });
  </script>
