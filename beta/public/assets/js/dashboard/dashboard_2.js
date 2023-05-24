
function makeTimer() {

  var endTime = new Date("19 January 2022 20:00:00 GMT+5:30");			
  endTime = (Date.parse(endTime) / 1000);

  var now = new Date();
  now = (Date.parse(now) / 1000);

  var timeLeft = endTime - now;

  var days = Math.floor(timeLeft / 86400); 
  var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
  var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
  var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
  if (days < "10") { days = "0" + days; }
  if (hours < "10") { hours = "0" + hours; }
  if (minutes < "10") { minutes = "0" + minutes; }
  if (seconds < "10") { seconds = "0" + seconds; }

  $(".days").html(days);
  $(".hours").html(hours);
  $(".minutes").html(minutes);
  $(".seconds").html(seconds);		

}

setInterval(function() { makeTimer(); }, 1000);

//sales-state chart
var options = {
  series: [
    {
      name: "Desktops",
      data: [18, 30, 25, 51, 34, 40, 34],
    },
  ],
  chart: {
    height: 120,
    type: "line",
    zoom: {
      enabled: false,
    },
    toolbar: {
      show: false,
    },
    dropShadow: {
      enabled: true,
      bottom: 2,
      left: 10,
      blur: 6,
      color: '#000',
      opacity: 0.35
    },
  },
  colors: ["#fff"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "smooth",
  },

  tooltip: {
    enabled: false,
  },

  grid: {
    yaxis: {
      lines: {
        show: false,
      },
    },
    padding: {
      left: -10,
      right: 0,
      bottom: -30,
      top: -30
    }
  },
  xaxis: {
    labels: {
      show: false,
    },
    axisBorder: {
      show: false,
    },
    axisTicks: {
      show: false,
    },
  },
  yaxis: {
    show: false,
  },
};

var chart = new ApexCharts(
  document.querySelector("#sales-state-chart"),
  options
);
chart.render();



////// .sales-small-1
new Chartist.Bar('.sales-small-1', {
  labels: ['M', 'T', 'W', 'T', 'F', 'S', 'M'],
  series: [
    [4, 9, 8, 10, 7, 12],
    [10, 5, 6, 4, 7, 2,]
  ]
},
  {
    stackBars: true,

    chartPadding: {
      top: -15,
      right: 0,
      bottom: -15,
      left: -35
    },
    axisX: {
      showGrid: false,
    },
    axisY: {
      low: 0,
      showGrid: false,
      labelInterpolationFnc: function (value) {
        return (value / 1);
      }
    }


  }).on('draw', function (data) {
    if (data.type === 'bar') {
      data.element.attr({
        style: 'stroke-width: 3px ; stroke-linecap: round'
      });
    }
  });

////// .sales-small-2

new Chartist.Bar('.sales-small-2', {
  labels: ['M', 'T', 'W', 'T', 'F', 'S', 'M'],
  series: [
    [4, 9, 8, 10, 7, 12],
    [10, 5, 6, 4, 7, 2]
  ]
},
  {
    stackBars: true,

    chartPadding: {
      top: -15,
      right: 0,
      bottom: -15,
      left: -35
    },
    axisX: {
      showGrid: false,
    },
    axisY: {
      low: 0,
      showGrid: false,
      labelInterpolationFnc: function (value) {
        return (value / 1);
      }
    }


  }).on('draw', function (data) {
    if (data.type === 'bar') {
      data.element.attr({
        style: 'stroke-width: 3px ; stroke-linecap: round'
      });
    }
  });

////// .sales-small-3

new Chartist.Bar('.sales-small-3', {
  labels: ['M', 'T', 'W', 'T', 'F', 'S', 'M'],
  series: [
    [4, 9, 8, 10, 7, 12],
    [10, 5, 6, 4, 7, 2]
  ]
},
  {
    stackBars: true,

    chartPadding: {
      top: -15,
      right: 0,
      bottom: -15,
      left: -35
    },
    axisX: {
      showGrid: false,
    },
    axisY: {
      low: 0,
      showGrid: false,
      labelInterpolationFnc: function (value) {
        return (value / 1);
      }
    }


  }).on('draw', function (data) {
    if (data.type === 'bar') {
      data.element.attr({
        style: 'stroke-width: 3px ; stroke-linecap: round'
      });
    }
  });


//invoice-overview-chart 

var options = {
  series: [{

    name: 'Revenue',
    data: [30, 50, 60, 45, 100, 20, 40]
  }, {
    name: 'Free Cash Flow',
    data: [40, 60, 80, 60, 120, 35, 60]
  }],
  chart: {
    type: 'bar',
    height: 235,
    toolbar: {
      show: false,
    },
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '20%',
      endingShape: 'rounded'
    },
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    show: false,
  },
  colors: ["#6362E7", "#ECECFF"],
  stroke: {
    show: true,
    width: 1,
    colors: ['transparent']
  },
  xaxis: {
    categories: [ 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    labels: {
      offsetX:  0,
      offsetY: -6,
      style: {
        colors: "#8E97B2",
        fontWeight: 400,
        fontSize: '10px',
        fontFamily: 'roboto'
      },
    },
    axisBorder: {
      show: false,

    },
    axisTicks: {
      show: false,

    },
  },
  yaxis: {
    labels: {
      offsetX: -18,
      offsetY: 0,
      minWidth: 0,
      maxWidth: 160,
      style: {
        colors: ["#1E2F65"],
        fontSize: '12px',
        fontWeight: 900,
        formatter: (value) => { return value + "$" },

      },


    },
  },
  fill: {
    opacity: 1
  },
  grid: {
    padding: {
      top: -20,
      left: -10,
      bottom: -10
    }
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return "$ " + val + " thousands"
      }
    }
  }
};

var chart = new ApexCharts(document.querySelector("#invoice-overviwe-chart"), options);
chart.render();

////owl-carousel-dashboard 

$('.owl-carousel-dashboard').owlCarousel({
  loop: true,
  margin: 10,
  navText: [" ", " "],
  dots:true,
  items: 1,
 
})


//sales-state chart
var options = {
  series: [
    {
      name: "Desktops",
      data: [25, 12, 9, 16, 10, 21, 55, 104, 64 , 70, 25 ],
    },
  ],
  chart: {
    height: 90,
   
    type: "line",
    zoom: {
      enabled: false,
    },
    toolbar: {
      show: false,
    },
    dropShadow: {
      enabled: true,
      top: 2,
      left: 10,
      blur: 6,
      color: '#6362e7',
      opacity: 0.42
    },
  },
  colors: ["#6362e7"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "smooth",
    lineCap: "butt"
  },

  tooltip: {
    enabled: false,
  },

  grid: {
    yaxis: {
      lines: {
        show: false,
      },
    },
    padding: {
      left: -10,
      right: 0,
      bottom: 0,
      top: -30
    }
  },
  xaxis: {
    labels: {
      show: false,
    },
    axisBorder: {
      show: false,
    },
    axisTicks: {
      show: false,
    },
  },
  yaxis: {
    show: false,
  },
};

var chart = new ApexCharts(
  document.querySelector("#total-sales-chart"),
  options
);
chart.render();



//////////////
Chart.defaults.RoundedDoughnut    = Chart.helpers.clone(Chart.defaults.doughnut);

Chart.controllers.RoundedDoughnut = Chart.controllers.doughnut.extend({
    draw: function(ease) {
        var ctx           = this.chart.ctx;
        var easingDecimal = ease || 1;
        var arcs          = this.getMeta().data;
        Chart.helpers.each(arcs, function(arc, i) {
            arc.transition(easingDecimal).draw();

            var pArc   = arcs[i === 0 ? arcs.length - 1 : i - 1];
            var pColor = pArc._view.backgroundColor;

            var vm         = arc._view;
            var radius     = (vm.outerRadius + vm.innerRadius) / 2;
            var thickness  = (vm.outerRadius - vm.innerRadius) / 2;
            var startAngle = Math.PI - vm.startAngle - Math.PI / 2;
            var angle       = Math.PI - vm.endAngle - Math.PI / 2;
           
            
            ctx.save();
            ctx.translate(vm.x, vm.y);

            ctx.fillStyle = i === 0 ? vm.backgroundColor : pColor;
            ctx.beginPath();
            ctx.arc(radius * Math.sin(startAngle), radius * Math.cos(startAngle), thickness, 0, 2 * Math.PI);
            ctx.fill();

            ctx.fillStyle = vm.backgroundColor;
            ctx.beginPath();
            ctx.arc(radius * Math.sin(angle), radius * Math.cos(angle), thickness, 0, 2 * Math.PI);
            ctx.fill();
            
            ctx.restore();
        });
    }
});

var ctx = document.getElementById("usersChart");
ctx.height = 200;

window.onload = function() {
    new Chart(document.getElementById('usersChart'), {
        type   : 'RoundedDoughnut',
        data   : {
           
            datasets: [
                {
                    data: [35, 15, 20, 15, 10],
                    backgroundColor: [
                        '#6362E7',
                        '#FFC500',
                        '#7DC006',
                        '#1D97FF',
                        '#FF8819'
                    ],
                    hoverBackgroundColor:[
                      '#6362E7',
                      '#FFC500',
                      '#7DC006',
                      '#1D97FF',
                      '#FF8819'
                    ],
                    borderWidth: 0
                }],
                labels: [
                  'Men',
                  'Women',
                  'Accessories',
                  'Children',
                  'Apperal'
                ],
        },
        options: {
            responsive: true,
            legend: {
              position: 'bottom',
              reverse: false,
              labels: {
                padding: 20,
                boxWidth: 8,
                fontSize: 12,
                fontColor: 'rgb(143, 151, 178)',
                usePointStyle: true,
              }
            },
            tooltips: {
              enabled: true,
            },
            cutoutPercentage: 70,
           
            layout: {
              padding:{
                  left: -20,
                  right: 0,
                  top: 0,
                  bottom: 0
              }
          } 
        } 
    });
};;




