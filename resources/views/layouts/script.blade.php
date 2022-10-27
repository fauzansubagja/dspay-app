<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('app/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('app/js/popper.min.js') }}"></script>
<script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('app/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('app/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('app/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('app/js/chart.morris.js') }}"></script>
<script src="{{ asset('app/js/script.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/apexcharts') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js') }}"></script>

<script>
  var options = {
        series: [{
        name: 'Kelas X',
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
      }, {
        name: 'Kelas XI',
        data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
      }, {
        name: 'Kelas XII',
        data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
      }],
        chart: {
        type: 'bar',
        height: 350
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '55%',
          endingShape: 'rounded'
        },
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
      },
      xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
      },
      yaxis: {
        title: {
          text: '(Pembayaran)'
        }
      },
      fill: {
        opacity: 1
      },
      tooltip: {
        y: {
          formatter: function (val) {
            return "" + val + " Pembayaran"
          }
        }
      }
      };
      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();
</script>