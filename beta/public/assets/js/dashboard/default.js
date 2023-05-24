// earning chart js 

var options = {

    series: [
        {
          name: "Series 1",
          data: [
            [1327359600000, 6],
            [1327446000000,20],
            [1327532400000,15],
            [1327618800000,40],
            [1327878000000,18],
            [1327964400000,20],
            [1328050800000,18],
            [1328137200000,23],
            [1328223600000,18],
            [1328482800000,35],
            [1328569200000,30],
            [1328655600000,55],
            [1328742000000,0],
            
          ]
        }
    ],
    chart: {
        height: 135,
        type: 'area',
        toolbar: {
            show: false
        },
      
    },
   
    stroke: {
        curve: 'smooth',
        colors: ['#6362E7'],
        lineCap: 'round',
        width: 3,



    },
    annotations: {
        points: [
          {
              x: new Date('31 January 2012').getTime(),
              y: 20 ,
            marker: {
              size: 6,
              fillColor: "#fff",
              strokeColor: "#6362E7",
              radius: 3,
              strokeWidth: 3,
            
            },
           
          }
        ]
      },
    colors: ['#6362E7'],
    fill: {
        type: 'gradient',
        opacity: 0.1,
        gradient: {
            type: "vertical",
            opacityFrom: 0.65,
            opacityTo: 0.3,
            stops: [0,100]

        },
    },
    
    yaxis:{
        labels: {
           
            show: false,
        },
    },
    xaxis: {
        type: "datetime",
      
        show: false,
        labels: {
           
            show: false,
        },
        tooltip: {
            enabled: false
          },
        // categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec", "Jan"],
        axisBorder: {
            
            show: false,
        },
        crosshairs: {
            show: false,
           
        },
    },
    legend: {
        show: false,
    },
    tooltip: {
  
        
        
      
        style: {
          fontSize: '12px',
            
        },
      
        x: {
            show: false,
            
        },
        y: {
            show: false,
            
        },
    
    },
    dataLabels: {
        enabled: false,
    },


    grid: {
        show: false,
        padding: {
            left: -10,
            right: 0,
            bottom: 0,
            top: -35
        }
    },
    responsive: [
        {
          breakpoint: 1600,
          options: {
            chart: {
                height: 105,
            }
          }
        }
      ]

};

var chart = new ApexCharts(document.querySelector("#earning-chart"), options);
chart.render();

///////////////////////


new Chartist.Bar('.small-chart-new', {
    labels: ['M', 'T', 'W', 'T', 'F', 'S'],
    series: [
        [400, 900, 800, 1000, 700, 1200],
        [1000, 500, 600, 400, 700, 200]
    ]
}, {
    stackBars: true,


    axisX: {
        showGrid: false,
    },
    axisY: {
        low: 0,
        showGrid: false,
        labelInterpolationFnc: function (value) {
            return (value / 10);
        }
    }

}).on('draw', function (data) {
    if (data.type === 'bar') {
        data.element.attr({
            style: 'stroke-width: 10px ; stroke-linecap: round'
        });
    }
});





///////////////////////



var options = {
    series: [{
        name: 'Males',
        data: [0, 20, 40, 60, 90, 70, 45, 30
        ]
    },
    {
        name: 'Females',
        data: [0,-20, -40, -60, -90, -70, -45, -30
        ]
    }
    ],
    chart: {
        toolbar: {
            show: false
        },
      
        type: 'bar',
        height: 145,
        stacked: true,

    },
    colors: ['#6362E7', '#FFC500'],
    plotOptions: {
        bar: {
            barHeight: '40%',
            horizontal: true,
            startingShape: 'rounded',
            endingShape: 'rounded',
          
           
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        width: 1,
        borderRadius: 40,
        colors: ["transparent"]
    },

    grid: {
        borderColor: '#1e2f6533',
        xaxis: {
            lines: {
                show: true,
                Color: '#1e2f6533',
                
            }
        },
        yaxis: {
            lines: {
                show: false
            }
        },
        padding: {
            top:  -20,
            right: 0,
            bottom: -10,
            left: 0
        }, 
      
    },
    yaxis: {

        show: false,
        
    },

    legend: {
        show: false,
    },
   

   
    tooltip: {

        // shared: false,
        x: {
            formatter: function (val) {
                return val
            }
        },
        y: {
            formatter: function (val) {
                return Math.abs(val) + "%"
            }
        }
    },

    xaxis: {
        
        position: 'top',
        categories: ['85+', '80-84', '75-79', '70-74', '65-69', '60-64', '55-59'
        ],
      
        labels: {
            formatter: function (val) {
                return Math.abs(Math.round(val)) 
            },
            offsetX: 0,
            offsetY: 5,
            rotate: 0,
            style: {
                colors: ['#1e2f6533'],
                fontSize: '12px',
                fontWeight: 400,
             
            },
          
        },
        axisTicks: {
            show: false
        },
        axisBorder: {
            show: false
        },
    },
};

var chart = new ApexCharts(document.querySelector("#transaction-chart"), options);
chart.render();

//////////////////////////////
var options = {

    annotations: {
      points: [
        {
            x: new Date("14 Feb 2017").getTime(),
            y: 18  ,
          marker: {
            size: 8,
            fillColor: "#fff",
            strokeColor: "#6362E7",
            radius: 2,
          
          },
         
        }
      ]
    },
    
    chart: {
        toolbar: {
            show: false
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 0,
            left: 4,
            blur: 4,
            color: '#6362E7',
            opacity: 0.14
        },
      height: 130,
      type: 'line',
          zoom: {
            enabled: false
          },
      
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
        width: 3,
        dashArray: 8,
        show: true,
        curve: 'smooth',
        lineCap: 'round',
      },
    yaxis: {
        show:false,
        axisTicks: {
            show: false
        },
        axisBorder: {
            show: false
        },
    },
    
    colors: ['#6362E7'],
   series: [
    {
      name: "Series 1",
      data: [
        
        [1486771200000, 1], 
        [1486857600000, 12], 
        [1486944000000, 8], 
        [1487030400000, 20]
      ]
    }
  ],
    grid: {
        yaxis: {
            lines: {
                show: false
            }
        },
        yaxis: {
            lines: {
                show: false
            }
        },

        padding: {
            left: -20,
            right: 0,
            top: -30,
            bottom: 0

           
        }
    },
    
    
    xaxis: {
      type: "datetime",
       axisBorder: {
            show: false
        },
        axisTicks: {
            show: false
        },
        tooltip: {
            enabled: false
          },
          labels: {

            offsetX: -30,
            offsetY: 0,
          }
    },
    tooltip: {
        custom: function({ series, seriesIndex, dataPointIndex, w }) {
          return (
            '<div class="arrow_box">' +
            "<span>" +
            series[seriesIndex][dataPointIndex] +
            "</span>" +
            "</div>"
          );
        }
      }
  };
  
  var chart = new ApexCharts(document.querySelector("#yearly-chart"), options);
  
  chart.render();
 