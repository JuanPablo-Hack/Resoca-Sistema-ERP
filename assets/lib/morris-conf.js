var Script = function () {

    //morris chart

    $(function () {
      // data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type
      var tax_data = [
           {"period": "2011 Q3", "licensed": 3407, "sorned": 660},
           {"period": "2011 Q2", "licensed": 3351, "sorned": 629},
           {"period": "2011 Q1", "licensed": 3269, "sorned": 618},
           {"period": "2010 Q4", "licensed": 3246, "sorned": 661},
           {"period": "2009 Q4", "licensed": 3171, "sorned": 676},
           {"period": "2008 Q4", "licensed": 3155, "sorned": 681},
           {"period": "2007 Q4", "licensed": 3226, "sorned": 620},
           {"period": "2006 Q4", "licensed": 3245, "sorned": null},
           {"period": "2005 Q4", "licensed": 3289, "sorned": null}
      ];
      Morris.Line({
        element: 'hero-graph',
        data: tax_data,
        xkey: 'period',
        ykeys: ['licensed', 'sorned'],
        labels: ['Licensed', 'Off the road'],
        lineColors:['#4ECDC4','#ed5565']
      });

      Morris.Donut({
        element: 'hero-donut',
        data: [
          {label: 'Carton', value: 25 },
          {label: 'Plastico', value: 40 },
          {label: 'Vidrio', value: 25 },
          {label: 'Madera', value: 10 }
        ],
          colors: ['#3498db', '#2980b9', '#34495e'],
        formatter: function (y) { return y + "%" }
      });

      Morris.Area({
        element: 'hero-area',
        data: [
          {period: '2021  Q1', iphone: 2666, ipad: null, itouch: 2647},
          {period: '2021 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
          {period: '2021 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
          {period: '2021 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
          {period: '2022 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
          {period: '2022 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
          {period: '2022 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
          {period: '2022 Q4', iphone: 15073, ipad: 5967, itouch: 5175},
          {period: '2023 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
          {period: '2023 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
        ],

          xkey: 'period',
          ykeys: ['iphone', 'ipad', 'itouch'],
          labels: ['Cliente', 'Servicios', 'Ganancias'],
          hideHover: 'auto',
          lineWidth: 1,
          pointSize: 5,
          lineColors: ['#4a8bc2', '#ff6c60', '#a9d86e'],
          fillOpacity: 0.5,
          smooth: true
      });

      Morris.Bar({
        element: 'hero-bar',
        data: [
          {device: 'Carton', geekbench: 136},
          {device: 'Plástico', geekbench: 137},
          {device: 'Vidrio', geekbench: 275},
          {device: 'Madera', geekbench: 380},
          {device: 'RSU', geekbench: 655},
          {device: 'RME', geekbench: 1571}
        ],
        xkey: 'device',
        ykeys: ['geekbench'],
        labels: ['Cantidad'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        barColors: ['#ac92ec']
      });

      new Morris.Line({
        element: 'examplefirst',
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Value'],
        data: [
          {year: '2008', value: 20},
          {year: '2009', value: 10},
          {year: '2010', value: 5},
          {year: '2011', value: 5},
          {year: '2012', value: 20}
        ]
      });

      $('.code-example').each(function (index, el) {
        eval($(el).text());
      });
    });

}();




