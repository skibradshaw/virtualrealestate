
/**
* Theme: Dashboard
*
* Dashboard
*/

!function($) {
    "use strict";

    var Dashboard1 = function() {
    	this.$realData = []
    };

    //creates Bar chart
    Dashboard1.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#eeeeee',
            barSizeRatio: 0.2,
            barColors: lineColors
        });
    },

    //creates line chart
    Dashboard1.prototype.createLineChart = function(element, data, xkey, ykeys, labels, opacity, Pfillcolor, Pstockcolor, lineColors) {
        Morris.Line({
          element: element,
          data: data,
          xkey: xkey,
          ykeys: ykeys,
          labels: labels,
          fillOpacity: opacity,
          pointFillColors: Pfillcolor,
          pointStrokeColors: Pstockcolor,
          behaveLikeLine: true,
          gridLineColor: '#eef0f2',
          hideHover: 'auto',
          resize: true, //defaulted to true
          pointSize: 0,
          lineColors: lineColors
        });
    },

    //creates Donut chart
    Dashboard1.prototype.createDonutChart = function(element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true, //defaulted to true
            colors: colors,
            backgroundColor: '#fff'
        });
    },
    
    
    Dashboard1.prototype.init = function() {

        //creating bar chart
        var $barData  = [
            { y: '2012', a: 2 },
            { y: '2013', a: 5 },
            { y: '2014', a: 3 },
            { y: '2015', a: 5 },
            { y: '2016', a: 12 },
            { y: '2017', a: 14 },
            { y: '2018', a: 2 }
        ];
        this.createBarChart('morris-bar-example', $barData, 'y', ['a'], ['Statistics'], ['#fe6271']);

        //create line chart
        var $data  = [
            { y: '2011', a: 0 },
            { y: '2012', a: 500 },
            { y: '2013', a: 800 },
            { y: '2014', a: 500 },
            { y: '2015', a: 100 },
            { y: '2016', a: 400 },
            { y: '2017', a: 500 },
            { y: '2018', a: 700 }
          ];
        this.createLineChart('morris-line-example', $data, 'y', ['a'], ['Earnings'],['0.9'],['#999999'],['#999999'], ['#fe8995']);

        //creating donut chart
        var $donutData = [
                {label: "Download Sales", value: 12},
                {label: "In-Store Sales", value: 30},
                {label: "Mail-Order Sales", value: 20}
            ];
        this.createDonutChart('morris-donut-example', $donutData, ['#fe8995', "#fe6271","#ddd"]);
    },
    //init
    $.Dashboard1 = new Dashboard1, $.Dashboard1.Constructor = Dashboard1
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.Dashboard1.init();
}(window.jQuery);