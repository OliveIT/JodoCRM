(function($) {
    // USE STRICT
    "use strict";

    try {
        //WidgetChart 1
        var ctx = document.getElementById("widgetChart1");
        if (ctx) {
            ctx.height = 130;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    type: 'line',
                    datasets: [{
                        data: [78, 81, 80, 45, 34, 12, 40],
                        label: 'Dataset',
                        backgroundColor: 'rgba(255,255,255,.1)',
                        borderColor: 'rgba(255,255,255,.55)',
                    }, ]
                },
                options: {
                    maintainAspectRatio: true,
                    legend: {
                        display: false
                    },
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            gridLines: {
                                color: 'transparent',
                                zeroLineColor: 'transparent'
                            },
                            ticks: {
                                fontSize: 2,
                                fontColor: 'transparent'
                            }
                        }],
                        yAxes: [{
                            display: false,
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                    title: {
                        display: false,
                    },
                    elements: {
                        line: {
                            borderWidth: 0
                        },
                        point: {
                            radius: 0,
                            hitRadius: 10,
                            hoverRadius: 4
                        }
                    }
                }
            });
        }


        //WidgetChart 2
        var ctx = document.getElementById("widgetChart2");
        if (ctx) {
            ctx.height = 130;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    type: 'line',
                    datasets: [{
                        data: [1, 18, 9, 17, 34, 22],
                        label: 'Dataset',
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(255,255,255,.55)',
                    }, ]
                },
                options: {

                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        titleFontSize: 12,
                        titleFontColor: '#000',
                        bodyFontColor: '#000',
                        backgroundColor: '#fff',
                        titleFontFamily: 'Montserrat',
                        bodyFontFamily: 'Montserrat',
                        cornerRadius: 3,
                        intersect: false,
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                color: 'transparent',
                                zeroLineColor: 'transparent'
                            },
                            ticks: {
                                fontSize: 2,
                                fontColor: 'transparent'
                            }
                        }],
                        yAxes: [{
                            display: false,
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                    title: {
                        display: false,
                    },
                    elements: {
                        line: {
                            tension: 0.00001,
                            borderWidth: 1
                        },
                        point: {
                            radius: 4,
                            hitRadius: 10,
                            hoverRadius: 4
                        }
                    }
                }
            });
        }


        //WidgetChart 3
        var ctx = document.getElementById("widgetChart3");
        if (ctx) {
            ctx.height = 130;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    type: 'line',
                    datasets: [{
                        data: [65, 59, 84, 84, 51, 55],
                        label: 'Dataset',
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(255,255,255,.55)',
                    }, ]
                },
                options: {

                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        titleFontSize: 12,
                        titleFontColor: '#000',
                        bodyFontColor: '#000',
                        backgroundColor: '#fff',
                        titleFontFamily: 'Montserrat',
                        bodyFontFamily: 'Montserrat',
                        cornerRadius: 3,
                        intersect: false,
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                color: 'transparent',
                                zeroLineColor: 'transparent'
                            },
                            ticks: {
                                fontSize: 2,
                                fontColor: 'transparent'
                            }
                        }],
                        yAxes: [{
                            display: false,
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                    title: {
                        display: false,
                    },
                    elements: {
                        line: {
                            borderWidth: 1
                        },
                        point: {
                            radius: 4,
                            hitRadius: 10,
                            hoverRadius: 4
                        }
                    }
                }
            });
        }


        //WidgetChart 4
        var ctx = document.getElementById("widgetChart4");
        if (ctx) {
            ctx.height = 115;
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "My First dataset",
                        data: [78, 81, 80, 65, 58, 75, 60, 75, 65, 60, 60, 75],
                        borderColor: "transparent",
                        borderWidth: "0",
                        backgroundColor: "rgba(255,255,255,.3)"
                    }]
                },
                options: {
                    maintainAspectRatio: true,
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            display: false,
                            categoryPercentage: 1,
                            barPercentage: 0.65
                        }],
                        yAxes: [{
                            display: false
                        }]
                    }
                }
            });
        }

        // Recent Report
        const brandProduct = 'rgba(0,181,233,0.8)'
        const brandService = 'rgba(0,173,95,0.8)'

        var elements = 10
        var data1 = [52, 60, 55, 50, 65, 80, 57, 70, 105, 115]
        var data2 = [102, 70, 80, 100, 56, 53, 80, 75, 65, 90]

        var ctx = document.getElementById("recent-rep-chart");
        if (ctx) {
            ctx.height = 250;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', ''],
                    datasets: [{
                            label: 'My First dataset',
                            backgroundColor: brandService,
                            borderColor: 'transparent',
                            pointHoverBackgroundColor: '#fff',
                            borderWidth: 0,
                            data: data1

                        },
                        {
                            label: 'My Second dataset',
                            backgroundColor: brandProduct,
                            borderColor: 'transparent',
                            pointHoverBackgroundColor: '#fff',
                            borderWidth: 0,
                            data: data2

                        }
                    ]
                },
                options: {
                    maintainAspectRatio: true,
                    legend: {
                        display: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            gridLines: {
                                drawOnChartArea: true,
                                color: '#f2f2f2'
                            },
                            ticks: {
                                fontFamily: "Poppins",
                                fontSize: 12
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                maxTicksLimit: 5,
                                stepSize: 50,
                                max: 150,
                                fontFamily: "Poppins",
                                fontSize: 12
                            },
                            gridLines: {
                                display: true,
                                color: '#f2f2f2'

                            }
                        }]
                    },
                    elements: {
                        point: {
                            radius: 0,
                            hitRadius: 10,
                            hoverRadius: 4,
                            hoverBorderWidth: 3
                        }
                    }


                }
            });
        }

        // Percent Chart
        var ctx = document.getElementById("percent-chart");
        if (ctx) {
            ctx.height = 280;
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        label: "My First dataset",
                        data: [60, 40],
                        backgroundColor: [
                            '#00b5e9',
                            '#fa4251'
                        ],
                        hoverBackgroundColor: [
                            '#00b5e9',
                            '#fa4251'
                        ],
                        borderWidth: [
                            0, 0
                        ],
                        hoverBorderColor: [
                            'transparent',
                            'transparent'
                        ]
                    }],
                    labels: [
                        'Products',
                        'Services'
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    cutoutPercentage: 55,
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        titleFontFamily: "Poppins",
                        xPadding: 15,
                        yPadding: 10,
                        caretPadding: 0,
                        bodyFontSize: 16
                    }
                }
            });
        }

    } catch (error) {
        console.log(error);
    }



    try {

        // Recent Report 2
        const bd_brandProduct2 = 'rgba(0,181,233,0.9)'
        const bd_brandService2 = 'rgba(0,173,95,0.9)'
        const brandProduct2 = 'rgba(0,181,233,0.2)'
        const brandService2 = 'rgba(0,173,95,0.2)'

        var data3 = [52, 60, 55, 50, 65, 80, 57, 70, 105, 115]
        var data4 = [102, 70, 80, 100, 56, 53, 80, 75, 65, 90]

        var ctx = document.getElementById("recent-rep2-chart");
        if (ctx) {
            ctx.height = 230;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', ''],
                    datasets: [{
                            label: 'My First dataset',
                            backgroundColor: brandService2,
                            borderColor: bd_brandService2,
                            pointHoverBackgroundColor: '#fff',
                            borderWidth: 0,
                            data: data3

                        },
                        {
                            label: 'My Second dataset',
                            backgroundColor: brandProduct2,
                            borderColor: bd_brandProduct2,
                            pointHoverBackgroundColor: '#fff',
                            borderWidth: 0,
                            data: data4

                        }
                    ]
                },
                options: {
                    maintainAspectRatio: true,
                    legend: {
                        display: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            gridLines: {
                                drawOnChartArea: true,
                                color: '#f2f2f2'
                            },
                            ticks: {
                                fontFamily: "Poppins",
                                fontSize: 12
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                maxTicksLimit: 5,
                                stepSize: 50,
                                max: 150,
                                fontFamily: "Poppins",
                                fontSize: 12
                            },
                            gridLines: {
                                display: true,
                                color: '#f2f2f2'

                            }
                        }]
                    },
                    elements: {
                        point: {
                            radius: 0,
                            hitRadius: 10,
                            hoverRadius: 4,
                            hoverBorderWidth: 3
                        },
                        line: {
                            tension: 0
                        }
                    }


                }
            });
        }

    } catch (error) {
        console.log(error);
    }


    try {

        // Recent Report 3
        const bd_brandProduct3 = 'rgba(0,181,233,0.9)';
        const bd_brandService3 = 'rgba(0,173,95,0.9)';
        const brandProduct3 = 'transparent';
        const brandService3 = 'transparent';

        var data5 = [52, 60, 55, 50, 65, 80, 57, 115];
        var data6 = [102, 70, 80, 100, 56, 53, 80, 90];

        var ctx = document.getElementById("recent-rep3-chart");
        if (ctx) {
            ctx.height = 230;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', ''],
                    datasets: [{
                            label: 'My First dataset',
                            backgroundColor: brandService3,
                            borderColor: bd_brandService3,
                            pointHoverBackgroundColor: '#fff',
                            borderWidth: 0,
                            data: data5,
                            pointBackgroundColor: bd_brandService3
                        },
                        {
                            label: 'My Second dataset',
                            backgroundColor: brandProduct3,
                            borderColor: bd_brandProduct3,
                            pointHoverBackgroundColor: '#fff',
                            borderWidth: 0,
                            data: data6,
                            pointBackgroundColor: bd_brandProduct3

                        }
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            gridLines: {
                                drawOnChartArea: true,
                                color: '#f2f2f2'
                            },
                            ticks: {
                                fontFamily: "Poppins",
                                fontSize: 12
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                maxTicksLimit: 5,
                                stepSize: 50,
                                max: 150,
                                fontFamily: "Poppins",
                                fontSize: 12
                            },
                            gridLines: {
                                display: false,
                                color: '#f2f2f2'
                            }
                        }]
                    },
                    elements: {
                        point: {
                            radius: 3,
                            hoverRadius: 4,
                            hoverBorderWidth: 3,
                            backgroundColor: '#333'
                        }
                    }


                }
            });
        }

    } catch (error) {
        console.log(error);
    }

    try {
        //WidgetChart 5
        var ctx = document.getElementById("widgetChart5");
        if (ctx) {
            ctx.height = 220;
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "My First dataset",
                        data: [78, 81, 80, 64, 65, 80, 70, 75, 67, 85, 66, 68],
                        borderColor: "transparent",
                        borderWidth: "0",
                        backgroundColor: "#ccc",
                    }]
                },
                options: {
                    maintainAspectRatio: true,
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            display: false,
                            categoryPercentage: 1,
                            barPercentage: 0.65
                        }],
                        yAxes: [{
                            display: false
                        }]
                    }
                }
            });
        }

    } catch (error) {
        console.log(error);
    }

    try {

        // Percent Chart 2
        var ctx = document.getElementById("percent-chart2");
        if (ctx) {
            ctx.height = 209;
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        label: "My First dataset",
                        data: [60, 40],
                        backgroundColor: [
                            '#00b5e9',
                            '#fa4251'
                        ],
                        hoverBackgroundColor: [
                            '#00b5e9',
                            '#fa4251'
                        ],
                        borderWidth: [
                            0, 0
                        ],
                        hoverBorderColor: [
                            'transparent',
                            'transparent'
                        ]
                    }],
                    labels: [
                        'Products',
                        'Services'
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    cutoutPercentage: 87,
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    },
                    legend: {
                        display: false,
                        position: 'bottom',
                        labels: {
                            fontSize: 14,
                            fontFamily: "Poppins,sans-serif"
                        }

                    },
                    tooltips: {
                        titleFontFamily: "Poppins",
                        xPadding: 15,
                        yPadding: 10,
                        caretPadding: 0,
                        bodyFontSize: 16,
                    }
                }
            });
        }

    } catch (error) {
        console.log(error);
    }

    try {
        //Sales chart
        var ctx = document.getElementById("sales-chart");
        if (ctx) {
            ctx.height = 150;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
                    type: 'line',
                    defaultFontFamily: 'Poppins',
                    datasets: [{
                        label: "Foods",
                        data: [0, 30, 10, 120, 50, 63, 10],
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(220,53,69,0.75)',
                        borderWidth: 3,
                        pointStyle: 'circle',
                        pointRadius: 5,
                        pointBorderColor: 'transparent',
                        pointBackgroundColor: 'rgba(220,53,69,0.75)',
                    }, {
                        label: "Electronics",
                        data: [0, 50, 40, 80, 40, 79, 120],
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(40,167,69,0.75)',
                        borderWidth: 3,
                        pointStyle: 'circle',
                        pointRadius: 5,
                        pointBorderColor: 'transparent',
                        pointBackgroundColor: 'rgba(40,167,69,0.75)',
                    }]
                },
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        titleFontSize: 12,
                        titleFontColor: '#000',
                        bodyFontColor: '#000',
                        backgroundColor: '#fff',
                        titleFontFamily: 'Poppins',
                        bodyFontFamily: 'Poppins',
                        cornerRadius: 3,
                        intersect: false,
                    },
                    legend: {
                        display: false,
                        labels: {
                            usePointStyle: true,
                            fontFamily: 'Poppins',
                        },
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            scaleLabel: {
                                display: false,
                                labelString: 'Month'
                            },
                            ticks: {
                                fontFamily: "Poppins"
                            }
                        }],
                        yAxes: [{
                            display: true,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Value',
                                fontFamily: "Poppins"

                            },
                            ticks: {
                                fontFamily: "Poppins"
                            }
                        }]
                    },
                    title: {
                        display: false,
                        text: 'Normal Legend'
                    }
                }
            });
        }


    } catch (error) {
        console.log(error);
    }

    try {

        //Team chart
        var ctx = document.getElementById("team-chart");
        if (ctx) {
            ctx.height = 150;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
                    type: 'line',
                    defaultFontFamily: 'Poppins',
                    datasets: [{
                        data: [0, 7, 3, 5, 2, 10, 7],
                        label: "Expense",
                        backgroundColor: 'rgba(0,103,255,.15)',
                        borderColor: 'rgba(0,103,255,0.5)',
                        borderWidth: 3.5,
                        pointStyle: 'circle',
                        pointRadius: 5,
                        pointBorderColor: 'transparent',
                        pointBackgroundColor: 'rgba(0,103,255,0.5)',
                    }, ]
                },
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        titleFontSize: 12,
                        titleFontColor: '#000',
                        bodyFontColor: '#000',
                        backgroundColor: '#fff',
                        titleFontFamily: 'Poppins',
                        bodyFontFamily: 'Poppins',
                        cornerRadius: 3,
                        intersect: false,
                    },
                    legend: {
                        display: false,
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            fontFamily: 'Poppins',
                        },


                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            scaleLabel: {
                                display: false,
                                labelString: 'Month'
                            },
                            ticks: {
                                fontFamily: "Poppins"
                            }
                        }],
                        yAxes: [{
                            display: true,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Value',
                                fontFamily: "Poppins"
                            },
                            ticks: {
                                fontFamily: "Poppins"
                            }
                        }]
                    },
                    title: {
                        display: false,
                    }
                }
            });
        }


    } catch (error) {
        console.log(error);
    }

    try {
        //bar chart
        var ctx = document.getElementById("barChart");
        if (ctx) {
            ctx.height = 200;
            var myChart = new Chart(ctx, {
                type: 'bar',
                defaultFontFamily: 'Poppins',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [{
                            label: "My First dataset",
                            data: [65, 59, 80, 81, 56, 55, 40],
                            borderColor: "rgba(0, 123, 255, 0.9)",
                            borderWidth: "0",
                            backgroundColor: "rgba(0, 123, 255, 0.5)",
                            fontFamily: "Poppins"
                        },
                        {
                            label: "My Second dataset",
                            data: [28, 48, 40, 19, 86, 27, 90],
                            borderColor: "rgba(0,0,0,0.09)",
                            borderWidth: "0",
                            backgroundColor: "rgba(0,0,0,0.07)",
                            fontFamily: "Poppins"
                        }
                    ]
                },
                options: {
                    legend: {
                        position: 'top',
                        labels: {
                            fontFamily: 'Poppins'
                        }

                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                fontFamily: "Poppins"

                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontFamily: "Poppins"
                            }
                        }]
                    }
                }
            });
        }


    } catch (error) {
        console.log(error);
    }

    try {

        //radar chart
        var ctx = document.getElementById("radarChart");
        if (ctx) {
            ctx.height = 200;
            var myChart = new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: [
                        ["Eating", "Dinner"],
                        ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"
                    ],
                    defaultFontFamily: 'Poppins',
                    datasets: [{
                            label: "My First dataset",
                            data: [65, 59, 66, 45, 56, 55, 40],
                            borderColor: "rgba(0, 123, 255, 0.6)",
                            borderWidth: "1",
                            backgroundColor: "rgba(0, 123, 255, 0.4)"
                        },
                        {
                            label: "My Second dataset",
                            data: [28, 12, 40, 19, 63, 27, 87],
                            borderColor: "rgba(0, 123, 255, 0.7",
                            borderWidth: "1",
                            backgroundColor: "rgba(0, 123, 255, 0.5)"
                        }
                    ]
                },
                options: {
                    legend: {
                        position: 'top',
                        labels: {
                            fontFamily: 'Poppins'
                        }

                    },
                    scale: {
                        ticks: {
                            beginAtZero: true,
                            fontFamily: "Poppins"
                        }
                    }
                }
            });
        }

    } catch (error) {
        console.log(error)
    }

    try {

        //line chart
        var ctx = document.getElementById("lineChart");
        if (ctx) {
            ctx.height = 150;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    defaultFontFamily: "Poppins",
                    datasets: [{
                            label: "My First dataset",
                            borderColor: "rgba(0,0,0,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(0,0,0,.07)",
                            data: [22, 44, 67, 43, 76, 45, 12]
                        },
                        {
                            label: "My Second dataset",
                            borderColor: "rgba(0, 123, 255, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(0, 123, 255, 0.5)",
                            pointHighlightStroke: "rgba(26,179,148,1)",
                            data: [16, 32, 18, 26, 42, 33, 44]
                        }
                    ]
                },
                options: {
                    legend: {
                        position: 'top',
                        labels: {
                            fontFamily: 'Poppins'
                        }

                    },
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                fontFamily: "Poppins"

                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontFamily: "Poppins"
                            }
                        }]
                    }

                }
            });
        }


    } catch (error) {
        console.log(error);
    }


    try {

        //doughut chart
        var ctx = document.getElementById("doughutChart");
        if (ctx) {
            ctx.height = 150;
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [45, 25, 20, 10],
                        backgroundColor: [
                            "rgba(0, 123, 255,0.9)",
                            "rgba(0, 123, 255,0.7)",
                            "rgba(0, 123, 255,0.5)",
                            "rgba(0,0,0,0.07)"
                        ],
                        hoverBackgroundColor: [
                            "rgba(0, 123, 255,0.9)",
                            "rgba(0, 123, 255,0.7)",
                            "rgba(0, 123, 255,0.5)",
                            "rgba(0,0,0,0.07)"
                        ]

                    }],
                    labels: [
                        "Green",
                        "Green",
                        "Green",
                        "Green"
                    ]
                },
                options: {
                    legend: {
                        position: 'top',
                        labels: {
                            fontFamily: 'Poppins'
                        }

                    },
                    responsive: true
                }
            });
        }


    } catch (error) {
        console.log(error);
    }


    try {

        //pie chart
        var ctx = document.getElementById("pieChart");
        if (ctx) {
            ctx.height = 200;
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [45, 25, 20, 10],
                        backgroundColor: [
                            "rgba(0, 123, 255,0.9)",
                            "rgba(0, 123, 255,0.7)",
                            "rgba(0, 123, 255,0.5)",
                            "rgba(0,0,0,0.07)"
                        ],
                        hoverBackgroundColor: [
                            "rgba(0, 123, 255,0.9)",
                            "rgba(0, 123, 255,0.7)",
                            "rgba(0, 123, 255,0.5)",
                            "rgba(0,0,0,0.07)"
                        ]

                    }],
                    labels: [
                        "Green",
                        "Green",
                        "Green"
                    ]
                },
                options: {
                    legend: {
                        position: 'top',
                        labels: {
                            fontFamily: 'Poppins'
                        }

                    },
                    responsive: true
                }
            });
        }


    } catch (error) {
        console.log(error);
    }

    try {

        // polar chart
        var ctx = document.getElementById("polarChart");
        if (ctx) {
            ctx.height = 200;
            var myChart = new Chart(ctx, {
                type: 'polarArea',
                data: {
                    datasets: [{
                        data: [15, 18, 9, 6, 19],
                        backgroundColor: [
                            "rgba(0, 123, 255,0.9)",
                            "rgba(0, 123, 255,0.8)",
                            "rgba(0, 123, 255,0.7)",
                            "rgba(0,0,0,0.2)",
                            "rgba(0, 123, 255,0.5)"
                        ]

                    }],
                    labels: [
                        "Green",
                        "Green",
                        "Green",
                        "Green"
                    ]
                },
                options: {
                    legend: {
                        position: 'top',
                        labels: {
                            fontFamily: 'Poppins'
                        }

                    },
                    responsive: true
                }
            });
        }

    } catch (error) {
        console.log(error);
    }

    try {

        // single bar chart
        var ctx = document.getElementById("singelBarChart");
        if (ctx) {
            ctx.height = 150;
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
                    datasets: [{
                        label: "My First dataset",
                        data: [40, 55, 75, 81, 56, 55, 40],
                        borderColor: "rgba(0, 123, 255, 0.9)",
                        borderWidth: "0",
                        backgroundColor: "rgba(0, 123, 255, 0.5)"
                    }]
                },
                options: {
                    legend: {
                        position: 'top',
                        labels: {
                            fontFamily: 'Poppins'
                        }

                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                fontFamily: "Poppins"

                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontFamily: "Poppins"
                            }
                        }]
                    }
                }
            });
        }

    } catch (error) {
        console.log(error);
    }

})(jQuery);



(function($) {
    // USE STRICT
    "use strict";
    $(".animsition").animsition({
        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 900,
        outDuration: 900,
        linkElement: 'a:not([target="_blank"]):not([href^="#"]):not([class^="chosen-single"])',
        loading: true,
        loadingParentElement: 'html',
        loadingClass: 'page-loader',
        loadingInner: '<div class="page-loader__spin"></div>',
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: ['animation-duration', '-webkit-animation-duration'],
        overlay: false,
        overlayClass: 'animsition-overlay-slide',
        overlayParentElement: 'html',
        transition: function(url) {
            window.location.href = url;
        }
    });


})(jQuery);
(function($) {
    // USE STRICT
    "use strict";

    // Map
    try {

        var vmap = $('#vmap');
        if (vmap[0]) {
            vmap.vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        }

    } catch (error) {
        console.log(error);
    }

    // Europe Map
    try {

        var vmap1 = $('#vmap1');
        if (vmap1[0]) {
            vmap1.vectorMap({
                map: 'europe_en',
                color: '#007BFF',
                borderColor: '#fff',
                backgroundColor: '#fff',
                enableZoom: true,
                showTooltip: true
            });
        }

    } catch (error) {
        console.log(error);
    }

    // USA Map
    try {

        var vmap2 = $('#vmap2');

        if (vmap2[0]) {
            vmap2.vectorMap({
                map: 'usa_en',
                color: '#007BFF',
                borderColor: '#fff',
                backgroundColor: '#fff',
                enableZoom: true,
                showTooltip: true,
                selectedColor: null,
                hoverColor: null,
                colors: {
                    mo: '#001BFF',
                    fl: '#001BFF',
                    or: '#001BFF'
                },
                onRegionClick: function(event, code, region) {
                    event.preventDefault();
                }
            });
        }

    } catch (error) {
        console.log(error);
    }

    // Germany Map
    try {

        var vmap3 = $('#vmap3');
        if (vmap3[0]) {
            vmap3.vectorMap({
                map: 'germany_en',
                color: '#007BFF',
                borderColor: '#fff',
                backgroundColor: '#fff',
                onRegionClick: function(element, code, region) {
                    var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();

                    alert(message);
                }
            });
        }

    } catch (error) {
        console.log(error);
    }

    // France Map
    try {

        var vmap4 = $('#vmap4');
        if (vmap4[0]) {
            vmap4.vectorMap({
                map: 'france_fr',
                color: '#007BFF',
                borderColor: '#fff',
                backgroundColor: '#fff',
                enableZoom: true,
                showTooltip: true
            });
        }

    } catch (error) {
        console.log(error);
    }

    // Russia Map
    try {
        var vmap5 = $('#vmap5');
        if (vmap5[0]) {
            vmap5.vectorMap({
                map: 'russia_en',
                color: '#007BFF',
                borderColor: '#fff',
                backgroundColor: '#fff',
                hoverOpacity: 0.7,
                selectedColor: '#999999',
                enableZoom: true,
                showTooltip: true,
                scaleColors: ['#C8EEFF', '#006491'],
                normalizeFunction: 'polynomial'
            });
        }


    } catch (error) {
        console.log(error);
    }

    // Brazil Map
    try {

        var vmap6 = $('#vmap6');
        if (vmap6[0]) {
            vmap6.vectorMap({
                map: 'brazil_br',
                color: '#007BFF',
                borderColor: '#fff',
                backgroundColor: '#fff',
                onRegionClick: function(element, code, region) {
                    var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
                    alert(message);
                }
            });
        }

    } catch (error) {
        console.log(error);
    }
})(jQuery);
(function($) {
    // Use Strict
    "use strict";
    try {
        var progressbarSimple = $('.js-progressbar-simple');
        progressbarSimple.each(function() {
            var that = $(this);
            var executed = false;
            $(window).on('load', function() {

                that.waypoint(function() {
                    if (!executed) {
                        executed = true;
                        /*progress bar*/
                        that.progressbar({
                            update: function(current_percentage, $this) {
                                $this.find('.js-value').html(current_percentage + '%');
                            }
                        });
                    }
                }, {
                    offset: 'bottom-in-view'
                });

            });
        });
    } catch (err) {
        console.log(err);
    }
})(jQuery);
(function($) {
    // USE STRICT
    "use strict";

    // Scroll Bar
    try {
        var jscr1 = $('.js-scrollbar1');
        if (jscr1[0]) {
            const ps1 = new PerfectScrollbar('.js-scrollbar1');
        }

        var jscr2 = $('.js-scrollbar2');
        if (jscr2[0]) {
            const ps2 = new PerfectScrollbar('.js-scrollbar2');

        }

    } catch (error) {
        console.log(error);
    }

})(jQuery);
(function($) {
    // USE STRICT
    "use strict";

    // Select 2
    try {

        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        });

    } catch (error) {
        console.log(error);
    }


})(jQuery);
(function($) {
    // USE STRICT
    "use strict";

    // Dropdown 
    try {
        var menu = $('.js-item-menu');
        var sub_menu_is_showed = -1;

        for (var i = 0; i < menu.length; i++) {
            $(menu[i]).on('click', function(e) {
                e.preventDefault();
                $('.js-right-sidebar').removeClass("show-sidebar");
                if (jQuery.inArray(this, menu) == sub_menu_is_showed) {
                    $(this).toggleClass('show-dropdown');
                    sub_menu_is_showed = -1;
                } else {
                    for (var i = 0; i < menu.length; i++) {
                        $(menu[i]).removeClass("show-dropdown");
                    }
                    $(this).toggleClass('show-dropdown');
                    sub_menu_is_showed = jQuery.inArray(this, menu);
                }
            });
        }
        $(".js-item-menu, .js-dropdown").click(function(event) {
            event.stopPropagation();
        });

        $("body,html").on("click", function() {
            for (var i = 0; i < menu.length; i++) {
                menu[i].classList.remove("show-dropdown");
            }
            sub_menu_is_showed = -1;
        });

    } catch (error) {
        console.log(error);
    }

    var wW = $(window).width();
    // Right Sidebar
    var right_sidebar = $('.js-right-sidebar');
    var sidebar_btn = $('.js-sidebar-btn');

    sidebar_btn.on('click', function(e) {
        e.preventDefault();
        for (var i = 0; i < menu.length; i++) {
            menu[i].classList.remove("show-dropdown");
        }
        sub_menu_is_showed = -1;
        right_sidebar.toggleClass("show-sidebar");
    });

    $(".js-right-sidebar, .js-sidebar-btn").click(function(event) {
        event.stopPropagation();
    });

    $("body,html").on("click", function() {
        right_sidebar.removeClass("show-sidebar");

    });


    // Sublist Sidebar
    try {
        var arrow = $('.js-arrow');
        arrow.each(function() {
            var that = $(this);
            that.on('click', function(e) {
                e.preventDefault();
                that.find(".arrow").toggleClass("up");
                that.toggleClass("open");
                that.parent().find('.js-sub-list').slideToggle("250");
            });
        });

    } catch (error) {
        console.log(error);
    }


    try {
        // Hamburger Menu
        $('.hamburger').on('click', function() {
            $(this).toggleClass('is-active');
            $('.navbar-mobile').slideToggle('500');
        });
        $('.navbar-mobile__list li.has-dropdown > a').on('click', function() {
            var dropdown = $(this).siblings('ul.navbar-mobile__dropdown');
            $(this).toggleClass('active');
            $(dropdown).slideToggle('500');
            return false;
        });
    } catch (error) {
        console.log(error);
    }
})(jQuery);
(function($) {
    // USE STRICT
    "use strict";

    // Load more
    try {
        var list_load = $('.js-list-load');
        if (list_load[0]) {
            list_load.each(function() {
                var that = $(this);
                that.find('.js-load-item').hide();
                var load_btn = that.find('.js-load-btn');
                load_btn.on('click', function(e) {
                    $(this).text("Loading...").delay(1500).queue(function(next) {
                        $(this).hide();
                        that.find(".js-load-item").fadeToggle("slow", 'swing');
                    });
                    e.preventDefault();
                });
            })

        }
    } catch (error) {
        console.log(error);
    }

})(jQuery);
(function($) {
    // USE STRICT
    "use strict";

    try {

        $('[data-toggle="tooltip"]').tooltip();

    } catch (error) {
        console.log(error);
    }

    // Chatbox
    try {
        var inbox_wrap = $('.js-inbox');
        var message = $('.au-message__item');
        message.each(function() {
            var that = $(this);

            that.on('click', function() {
                $(this).parent().parent().parent().toggleClass('show-chat-box');
            });
        });


    } catch (error) {
        console.log(error);
    }

})(jQuery);

var user = "gods";
var email = "gods@jodoex.ca";
var service_req = [];

/*Quotation Calculations for the App

Factors Controlled / Inputted by Admin
*/

var A = 18;
var B = 2.8;
var C = 7.2;
var D = 6;
var E = 30;
var F = 90;
var G = 20;
var H = 120;
var I = 0.85;
var J = 45;
var K = 1.2;
var L = 60;
var M = 13;
var N = 12;
var O = 18;
var P = 54;
var Q = 23;
var R = 8;
var S = 12;
var T = 29;
var U = 45;
var V = 15;
var W = 45;
var X = 200;
var Y = 51;
var Z = 35;
var AA = 54;
var BB = 30;
var CC = 2.2;


(function($) {

    try {
        var form = $("#signup-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {
                email_addr: {
                    //required: true,
                },
                property_city: {
                    //required: true,
                },
                property_type: {
                    //required: true,
                },
            },
            onfocusout: function(element) {
                //$(element).valid();
            },
            highlight: function(element, errorClass, validClass) {
                $(element.form).find('.actions').addClass('form-error');
                $(element).removeClass('valid');
                $(element).addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element.form).find('.actions').removeClass('form-error');
                $(element).removeClass('error');
                $(element).addClass('valid');
            }
        });
        form.steps({
            headerTag: "h3",
            bodyTag: "fieldset",
            transitionEffect: "fade",
            labels: {
                previous: 'Previous',
                next: 'Next',
                finish: 'Save',
                current: ''
            },
            titleTemplate: '<span class="title">#title#</span>',
            onStepChanging: function(event, currentIndex, newIndex) {
                if (newIndex == 1)
                    func_step2();
                else if (newIndex == 2)
                    func_step3();
                else if (newIndex == 3)
                    func_step4();

                //form.validate().settings.ignore = ":disabled,:hidden";
                form.validate().settings.ignore = ":hidden";
                return form.valid();
            },
            onFinishing: function(event, currentIndex) {
                complete();
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function(event, currentIndex) {
                alert('Sumited');
            },
            // onInit : function (event, currentIndex) {
            //     event.append('demo');
            // }
        });

        jQuery.extend(jQuery.validator.messages, {
            required: "",
            remote: "",
            email: "",
            url: "",
            date: "",
            dateISO: "",
            number: "",
            digits: "",
            creditcard: "",
            equalTo: ""
        });

        /* add property city*/
        $('#property_city').parent().append('<ul class="list-item" id="select_city" name="property_city"></ul>');
        $('#property_city option').each(function() {
            $('#select_city').append('<li value="' + $(this).val() + '">' + $(this).text() + '</li>');
        });
        $('#property_city').remove();
        $('#select_city').attr('id', 'property_city');
        $('#property_city li').first().addClass('init');
        $("#property_city").on("click", ".init", function() {
            $(this).closest("#property_city").children('li:not(.init)').toggle();
        });

        var CityOptions = $("#property_city").children('li:not(.init)');
        $("#property_city").on("click", "li:not(.init)", function() {
            CityOptions.removeClass('selected');
            $(this).addClass('selected');
            $("#property_city").children('.init').html($(this).html());
            CityOptions.toggle();
        });
        /* */

        $('#country').parent().append('<ul class="list-item" id="newcountry" name="country"></ul>');
        $('#country option').each(function() {
            $('#newcountry').append('<li value="' + $(this).val() + '">' + $(this).text() + '</li>');
        });
        $('#country').remove();
        $('#newcountry').attr('id', 'country');
        $('#country li').first().addClass('init');
        $("#country").on("click", ".init", function() {
            $(this).closest("#country").children('li:not(.init)').toggle();
        });

        var CountryOptions = $("#country").children('li:not(.init)');
        $("#country").on("click", "li:not(.init)", function() {
            CountryOptions.removeClass('selected');
            $(this).addClass('selected');
            $("#country").children('.init').html($(this).html());
            CountryOptions.toggle();
        });

        $('#council_role').parent().append('<ul class="list-item" id="role" name="council_role"></ul>');
        $('#council_role option').each(function() {
            $('#role').append('<li value="' + $(this).val() + '">' + $(this).text() + '</li>');
        });
        $('#council_role').remove();
        $('#role').attr('id', 'role');
        $('#council_role li').first().addClass('init');
        $("#council_role").on("click", ".init", function() {
            $(this).closest("#council_role").children('li:not(.init)').toggle();
        });

        var roleOptions = $("#council_role").children('li:not(.init)');
        $("#council_role").on("click", "li:not(.init)", function() {
            roleOptions.removeClass('selected');
            $(this).addClass('selected');
            $("#council_role").children('.init').html($(this).html());
            roleOptions.toggle();
        });
    } catch (error) {

    }
})(jQuery);

//document.getElementById("property_name").value;

var b_global_Q22 = -1;
var b_global_Q23 = -1;
var b_global_Q24 = -1;
var b_global_Q28 = -1;
var b_global_Q29 = -1;
var b_global_Q30 = -1;
var b_global_Q31 = -1;
var b_global_Q32 = -1;
var b_global_Q34 = -1;
var b_global_Q35 = -1;
var b_global_Q36 = -1;
var b_global_Q38 = -1;

$(document).ready(function() {
    // set default variables...    

    $('#Q22_View').hide();
    $('#Q23_View').hide();
    $('#Q24_View').hide();
    $('#Q28_View').hide();

    $('#Q29_View').hide();
    $('#Q30_View').hide();
    $('#Q31_View').hide();
    $('#Q32_View').hide();
    $('#Q33_View').hide();
    $('#Q34_View').hide();
    $('#Q35_View').hide();
    $('#Q36_View').hide();
    $('#Q37_View').hide();
    $('#Q38_View').hide();

    $("#form_council_role").click(function() {
        var selectrole = $(this).children("option:selected").val();
        $('#req_council_role').val(selectrole);
    });

    $("#req_council_role").click(function() {
        var selectrole = $(this).children("option:selected").val();
        $('#form_council_role').val(selectrole);
    });

    $("#req_p_type").click(function() {
        var type = $(this).children("option:selected").val();
        if (type == "townhouse") {
            g_property_type = 1;
        } else if (type == "condominium") {
            g_property_type = 2;
        } else if (type == "both") {
            g_property_type = 3;
        }

    });

    $("#req_property_city").click(function() {
        var sel_city = $(this).children("option:selected").val();
        $('#final_property_city').val(sel_city);
    });

    $("#final_property_city").click(function() {
        var sel_city = $(this).children("option:selected").val();
        $('#req_property_city').val(sel_city);
    });

    $('#boom-lift')
        .click(function() {
            var property = $('input:radio[name=boom-lift]:checked').val();
            $('#final_boom_lift').val(property);
        })
        .click();

    $('#attend_approve')
        .click(function() {
            var property = $('input:radio[id=attend_approve_other]:checked').val();
            if (property)
                $('#attend_approve_text').show();
            else
                $('#attend_approve_text').hide();
        })
        .click();

    $('#submit_proposal')
        .click(function() {
            var property = $('input:radio[id=submit_proposal_other]:checked').val();
            if (property)
                $('#submit_proposal_text').show();
            else
                $('#submit_proposal_text').hide();
        })
        .click();

    $('#quote_service_9')
        .click(function() {
            var update_property = $('input:checkbox[id=quote_service_9]:checked').val();
            if (update_property)
                $('#quote_service_text').show();
            else
                $('#quote_service_text').hide();
        })
        .click();

    $('#update_option')
        .click(function() {
            var update_property = $('input:checkbox[name=update_option]:checked').val();
            if (update_property)
                $('#update_property').show();
            else
                $('#update_property').hide();
        })
        .click();

    $('#property_type_town')
        .click(function() {
            var update_property = $('input:checkbox[name=update_option]:checked').val();
            if (update_property)
                $('#update_property').show();
            else
                $('#update_property').hide();
        })
        .click();

    // using calculation...

    // townhouse
    $("#Q22").click(function() {
        var flag = $(this).children("option:selected").val();
        b_global_Q22 = (flag == "yes") ? 1 : 0;
    });
    $("#Q23").click(function() {
        var flag = $(this).children("option:selected").val();
        b_global_Q23 = (flag == "yes") ? 1 : 0;
    });
    $("#Q24").click(function() {
        var flag = $(this).children("option:selected").val();
        b_global_Q24 = (flag == "yes") ? 1 : 0;
    });
    $("#Q28").click(function() {
        var flag = $(this).children("option:selected").val();
        b_global_Q28 = (flag == "yes") ? 1 : 0;
    });

    // Condo
    $("#Q29").click(function() {
        var flag = $(this).children("option:selected").val();
        b_global_Q29 = (flag == "yes") ? 1 : 0;
    });
    $("#Q30").click(function() {
        var flag = $(this).children("option:selected").val();
        b_global_Q30 = (flag == "yes") ? 1 : 0;
    });
    $("#Q31").click(function() {
        var flag = $(this).children("option:selected").val();
        b_global_Q31 = (flag == "yes") ? 1 : 0;
    });
    $("#Q32").click(function() {
        var flag = $(this).children("option:selected").val();
        b_global_Q32 = (flag == "yes") ? 1 : 0;
    });
    $("#Q34").click(function() {
        var flag = $(this).children("option:selected").val();
        b_global_Q34 = (flag == "yes") ? 1 : 0;
    });
    $("#Q35").click(function() {
        var flag = $(this).children("option:selected").val();
        b_global_Q35 = (flag == "yes") ? 1 : 0;
    });
    $("#Q36").click(function() {
        var flag = $(this).children("option:selected").val();
        b_global_Q36 = (flag == "yes") ? 1 : 0;
    });
    $("#Q38").click(function() {
        var flag = $(this).children("option:selected").val();
        b_global_Q38 = (flag == "yes") ? 1 : 0;
    });

    /* Review Table Adjust spinner */
    var minNumber = -100;
    var maxNumber = 100;
    $('.spinner .btn:first-of-type').on('click', function() {
        var val = parseFloat($('.spinner input').val().replace('%', '')) || 0

        if (val >= maxNumber) {
            return false;
        } else {
            $('.spinner input').val(parseInt($('.spinner input').val(), 10) + 5 + '%');
        }
    });

    $('.txtinput').on("change", function() {
        var inputVal = parseFloat($(this).val().replace('%', '')) || 0

        if (minNumber > inputVal) {
            inputVal = -100;
        } else if (maxNumber < inputVal) {
            inputVal = 100;
        }

        $(this).val(inputVal + '%');
    });

    $('.spinner .btn:last-of-type').on('click', function() {
        var val = parseFloat($('.spinner input').val().replace('%', '')) || 0
        if (val <= minNumber) {
            return false;
        } else {
            $('.spinner input').val(parseInt($('.spinner input').val(), 10) - 5 + '%');
        }
    });

    /* Fence Table Adjust spinner */
    $('.spinner1 .btn:first-of-type').on('click', function() {
        var val = parseFloat($('.spinner1 input').val().replace('%', '')) || 0

        if (val >= maxNumber) {
            return false;
        } else {
            $('.spinner1 input').val(parseInt($('.spinner1 input').val(), 10) + 5 + '%');
        }
    });

    $('.spinner1 .btn:last-of-type').on('click', function() {
        var val = parseFloat($('.spinner1 input').val().replace('%', '')) || 0
        if (val <= minNumber) {
            return false;
        } else {
            $('.spinner1 input').val(parseInt($('.spinner1 input').val(), 10) - 5 + '%');
        }
    });

});

function func_step2() {
    var u_option = $('input:checkbox[name=update_option]:checked').val();

    if (u_option) {
        $('#req_council_name').val($('#council_name').val());
        $('#req_council_unit').val($('#council_unit').val());
        $('#req_council_email').val($('#council_email').val());

        $('#iMode_p_m_company').val($('#p_m_company').val());
        $('#iMode_p_m_name').val($('#p_m_name').val());
        $('#iMode_p_m_email').val($('#p_m_email').val());
        // document.getElementById("req_council_name").value = document.getElementById("council_name").value;
        // document.getElementById("req_council_unit").value = document.getElementById("council_unit").value;
        // document.getElementById("req_council_email").value = document.getElementById("council_email").value;
    }

    $('#header_property_name').val($('#p_name').val());
}

function func_step3() {
    if (g_property_type == 1) {
        $('#select_townhouse').show();
        $('#select_condo').hide();

    } else if (g_property_type == 2) {
        $('#select_townhouse').show();
        $('#select_condo').show();

        $('#select_townhouse').hide();
    } else if (g_property_type == 3)
        $('#select_townhouse').show();
    $('#select_condo').show();
}

function func_step4() {
    $('#final_property_name').val($('#property_name').val());
    $('#final_email_addr').val($('#email_addr').val());
    $('#final_quote_req_name').val($('#property_name').val());
    $('#final_property_addr').val($('#street_num').val());

    $.each($("input:checkbox[name='quote_service']:checked"), function() {
        service_req.push($(this).val());
    });

    document.getElementById("final_service_request").value = "";
    document.getElementById("final_service_request").value = service_req;
}

function complete() {
    var data = document.getElementById('#signup-form');
    $.ajax({
        url: "index.php",
        type: "post",
        data: { abc: data }
    });
}

$("#adjust_price").change(function() {
    if ($(this).val() == "Q29") {
        $('#Q29_View').show();
        $('#Q29_View').attr('required', '');
        $('#Q29_View').attr('data-error', 'This field is required.');
    } else if ($(this).val() == "Q30") {
        $('#Q30_View').show();
        $('#Q30_View').removeAttr('required');
        $('#Q30_View').removeAttr('data-error');
    } else if ($(this).val() == "Q31") {
        $('#Q31_View').show();
        $('#Q31_View').removeAttr('required');
        $('#Q31_View').removeAttr('data-error');
    } else if ($(this).val() == "Q32") {
        $('#Q32_View').show();
        $('#Q32_View').removeAttr('required');
        $('#Q32_View').removeAttr('data-error');
    } else if ($(this).val() == "Q34") {
        $('#Q34_View').show();
        $('#Q34_View').removeAttr('required');
        $('#Q34_View').removeAttr('data-error');
    } else if ($(this).val() == "Q35") {
        $('#Q35_View').show();
        $('#Q35_View').removeAttr('required');
        $('#Q35_View').removeAttr('data-error');
    } else if ($(this).val() == "Q36") {
        $('#Q36_View').show();
        $('#Q36_View').removeAttr('required');
        $('#Q36_View').removeAttr('data-error');
    } else if ($(this).val() == "Q38") {
        $('#Q38_View').show();
        $('#Q38_View').removeAttr('required');
        $('#Q38_View').removeAttr('data-error');
    }
});

$("#adjust_TH_Info").change(function() {
    if ($(this).val() == "Q22") {
        $('#Q22_View').show();
        $('#Q22_View').attr('required', '');
        $('#Q22_View').attr('data-error', 'This field is required.');
    } else if ($(this).val() == "Q23") {
        $('#Q23_View').show();
        $('#Q23_View').removeAttr('required');
        $('#Q23_View').removeAttr('data-error');
    } else if ($(this).val() == "Q24") {
        $('#Q24_View').show();
        $('#Q24_View').removeAttr('required');
        $('#Q24_View').removeAttr('data-error');
    } else if ($(this).val() == "Q28") {
        $('#Q28_View').show();
        $('#Q28_View').removeAttr('required');
        $('#Q28_View').removeAttr('data-error');
    }
});


/* */

function DropDown(el) {
    this.dd = el;
    this.opts = this.dd.find('ul.dropdown > li');
    this.val = [];
    this.index = [];
    this.initEvents();
}

DropDown.prototype = {
    initEvents: function() {
        var obj = this;

        obj.dd.on('click', function(event) {
            $(this).toggleClass('active');
            event.stopPropagation();
        });

        obj.opts.children('label').on('click', function(event) {
            var opt = $(this).parent(),
                chbox = opt.children('input'),
                val = chbox.val(),
                idx = opt.index();

            ($.inArray(val, obj.val) !== -1) ? obj.val.splice($.inArray(val, obj.val), 1): obj.val.push(val);
            ($.inArray(idx, obj.index) !== -1) ? obj.index.splice($.inArray(idx, obj.index), 1): obj.index.push(idx);
        });
    },
    getValue: function() {
        return this.val;
    },
    getIndex: function() {
        return this.index;
    }
}

$(function() {

    var dd = new DropDown($('#dd'));

    $(document).click(function() {
        // all dropdowns
        $('.wrapper-dropdown-4').removeClass('active');
    });

});

/* Table functions */
const $tableID = $('#condo_table');
const $BTN = $('#export-btn');
const $EXPORT = $('#export');

const newTr = `
 <tr class="hide">
   <td class="pt-3-half" contenteditable="true">1</td>
   <td class="pt-3-half" contenteditable="true"></td>
   <td class="pt-3-half" contenteditable="true"></td>
   <td class="pt-3-half" contenteditable="true"></td>
   <td class="pt-3-half" contenteditable="true"></td>
   <td>
     <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
   </td>
 </tr>`;

$('.condosheet_table-add').on('click', 'i', () => {
    $('#condo_table tbody>tr:last').clone(true).insertAfter('#condo_table tbody>tr:last');

    //const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');
    //$clone.attr('id', 'id' + (1));
    //var lastIdx = Number($tableID.find('tbody tr').last().cells[1].innerText);

    //$clone.cells[0].innerText = 5;
    //var val2 = $clone.cells.length;
    //console.log($clone.cells);
    //$clone.insertAfter('#condotable tbody>tr:last');

    if ($tableID.find('tbody tr').length === 0) {

        $('tbody').append(newTr);
    }

    // //$tableID.find('table').append($clone);
    // $clone.appendTo('#condo_table > tbody:last > td');
});

$tableID.on('click', '.table-remove', function() {
    console.log("remove");
    $(this).parents('tr').detach();
});

$tableID.on('click', '.table-up', function() {

    const $row = $(this).parents('tr');

    if ($row.index() === 1) {
        return;
    }

    $row.prev().before($row.get(0));
});

$tableID.on('click', '.table-down', function() {

    const $row = $(this).parents('tr');
    $row.next().after($row.get(0));
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

$BTN.on('click', () => {

    const $rows = $tableID.find('tr:not(:hidden)');
    const headers = [];
    const data = [];

    // Get the headers (add special header logic here)
    $($rows.shift()).find('th:not(:empty)').each(function() {

        headers.push($(this).text().toLowerCase());
    });

    // Turn all existing rows into a loopable array
    $rows.each(function() {
        const $td = $(this).find('td');
        const h = {};

        // Use the headers from earlier to name our hash keys
        headers.forEach((header, i) => {

            h[header] = $td.eq(i).text();
        });

        data.push(h);
    });

    // Output the result
    $EXPORT.text(JSON.stringify(data));
});

/* Price review functions */
$("#mytable #checkall").click(function() {
    if ($("#mytable #checkall").is(':checked')) {
        $("#mytable input[type=checkbox]").each(function() {
            $(this).prop("checked", true);
        });

    } else {
        $("#mytable input[type=checkbox]").each(function() {
            $(this).prop("checked", false);
        });
    }
});

$("[data-toggle=tooltip]").tooltip();

$('.collapse-link').on('click', function(e) {
    e.preventDefault();
    var ibox = $(this).closest('div.ibox');
    var button = $(this).find('i');
    var content = ibox.children('.ibox-content');
    content.slideToggle(200);
    button.toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
    ibox.toggleClass('').toggleClass('border-bottom');
    setTimeout(function() {
        ibox.resize();
        ibox.find('[id^=map-]').resize();
    }, 50);
});

function calc_Price1() {
    var TH_price = 0;
    var Condo_price = 0;
    var Both_price = 0;

    if ((g_property_type == 1) || (g_property_type == 3)) {
        // TH
        var bldgs = Number(document.getElementById("Q22").value);
        var units = Number(document.getElementById("Q23").value);
        var storeys = Number(document.getElementById("Q24").value);
        var gutter = Number(document.getElementById("Q28").value);

        if (storeys <= 2) {
            TH_price = ((E / 60 * bldgs * 2) + (F / 60 * units * 2)) * A * B;
        } else if ((storeys <= 4) && (storeys > 2)) {
            TH_price = ((G / 60 * bldgs * 2) + (H / 60 * units * 2)) * A * B;
        } else {
            TH_price = ((G / 60 * bldgs * 2) + (H / 60 * units * 2)) * A * B;
        }

        if (g_property_type == 1)
            return TH_price.toFixed();

    } else if ((g_property_type == 2) || (g_property_type == 3)) {
        // Condo
        var sum_width = 10;
        var sum_length = 10;
        var floors = 1;
        var LFC = 1;

        var total = sum_length * sum_width * floors * LFC;

        if (b_global_Q31)
            Condo_price = total * J / 60 / 100 * K * A * B;
        else
            Condo_price = total * J / 60 / 100 * A * B;

        if (g_property_type == 2)
            return Condo_price.toFixed();

    } else if (g_property_type == 3) {
        Both_price = TH_price + Condo_price;
    }

    return Both_price.toFixed();
}

function calc_Price2() {
    var price1 = calc_Price1();
    var price2 = price1 * I;

    return price2.toFixed();
}

function calc_Price3() {
    var price3 = 0;
    var TH_price3 = 0;
    var C_price3 = 0;

    var bldgs = Number(document.getElementById("Q22").value);
    var units = Number(document.getElementById("Q23").value);
    var storeys = Number(document.getElementById("Q24").value);
    var gutter = Number(document.getElementById("Q28").value);

    var sum_width = 10;
    var sum_length = 10;
    var floors = 1;
    var LFG = 1;

    if ((g_property_type == 1) || (g_property_type == 3)) {
        TH_price3 = ((units * LFG * (F + B)) + (bldgs * LFG * (E + E))) * C / 60 * A * B;

        if (g_property_type == 1) return TH_price3.toFixed();
    } else if ((g_property_type == 2) || (g_property_type == 3)) {
        var sum_LFG = 10;
        C_price3 = LFC * C / 60 * A * B;

        if (g_property_type == 2) return C_price3.toFixed();
    } else if (g_property_type == 3) {
        price3 = TH_price3 + C_price3;
    }

    return price3.toFixed();
}

var g_property_type = 1;

function calc_Price4() {
    var price4 = 0;
    var TH_price4 = 0;
    var C_price4 = 0;

    var bldgs = Number(document.getElementById("Q22").value);
    var units = Number(document.getElementById("Q23").value);
    var storeys = Number(document.getElementById("Q24").value);
    var gutter = Number(document.getElementById("Q28").value);

    var sum_width = 10;
    var sum_length = 10;
    var floors = 1;
    var LFG = 1;

    if ((g_property_type == 1) || (g_property_type == 3)) {
        TH_price4 = ((units * LFG * (F + B)) + (bldgs * LFG * (E + E))) * D / 60 * A * B;

        if (g_property_type == 1) return TH_price4.toFixed();
    } else if ((g_property_type == 2) || (g_property_type == 3)) {
        var sum_LFG = 10;
        C_price4 = LFC * D / 60 * A * B;

        if (g_property_type == 2) return C_price4.toFixed();
    } else if (g_property_type == 3) {
        price4 = TH_price3 + C_price3;
    }

    return price4.toFixed();
}

function calc_Price5() {
    var price5 = 0;
    var TH_price5 = 0;
    var C_price5 = 0;

    var bldgs = Number(document.getElementById("Q22").value);
    var units = Number(document.getElementById("Q23").value);
    var storeys = Number(document.getElementById("Q24").value);
    var gutter = Number(document.getElementById("Q28").value);

    var sum_width = 10;
    var sum_length = 10;
    var floors = 1;
    var LFG = 1;

    if ((g_property_type == 1) || (g_property_type == 3)) {
        TH_price5 = units * P / 60 * A * B;

        if (g_property_type == 1) return TH_price5.toFixed();
    } else if ((g_property_type == 2) || (g_property_type == 3)) {
        if (b_global_Q31)
            C_price5 = units * Q / 60 * A * B * K;
        else
            C_price5 = units * Q / 60 * A * B;

        if (g_property_type == 2) return C_price5.toFixed();
    } else if (g_property_type == 3) {
        price5 = TH_price5 + C_price5;
    }

    return price5.toFixed();
}

function calc_Price6() {
    var price6 = 0;

    var units = 0;
    units = Number(document.getElementById("Q23").value);
    price6 = units * T / 60 * A * B;

    return price6.toFixed();
}

function calc_Price7() {
    var price7 = 0;

    var units = Number(document.getElementById("Q23").value);
    price7 = units * U / 60 * A * B;

    return price7.toFixed();
}

function calc_Price8() {
    var price8 = 0;
    var TH_price8 = 0;
    var C_price8 = 0;

    var bldgs = Number(document.getElementById("Q22").value);
    var units = Number(document.getElementById("Q23").value);
    var storeys = Number(document.getElementById("Q24").value);
    var gutter = Number(document.getElementById("Q28").value);

    var sum_width = 10;
    var sum_length = 10;
    var floors = 1;
    var LFG = 1;

    if ((g_property_type == 1) || (g_property_type == 3)) {
        TH_price8 = ((L / 60 * bldgs) + (M / 60 * units)) * A * B + units * N;

        if (g_property_type == 1) return TH_price8.toFixed();
    } else if ((g_property_type == 2) || (g_property_type == 3)) {
        var sum_LFG = 10;
        var sum_total = sum_width * sum_length;
        C_price8 = (sum_total * S / 60 * A * B / 100) + (sum_total * R / 100);

        if (g_property_type == 2) return C_price8.toFixed();
    } else if (g_property_type == 3) {
        price8 = TH_price8 + C_price8;
    }

    return price8.toFixed();
}

function calc_Price9() {
    var price9 = 0;
    var TH_price9 = 0;
    var C_price9 = 0;

    var bldgs = Number(document.getElementById("Q22").value);
    var units = Number(document.getElementById("Q23").value);
    var storeys = Number(document.getElementById("Q24").value);
    var gutter = Number(document.getElementById("Q28").value);

    var sum_width = 10;
    var sum_length = 10;
    var floors = 1;
    var LFG = 1;

    if ((g_property_type == 1) || (g_property_type == 3)) {
        TH_price9 = ((L / 60 * bldgs) + (X / 60 * units)) * A * B;

        if (g_property_type == 1) return TH_price9.toFixed();
    } else if ((g_property_type == 1) || (g_property_type == 3)) {
        var sum_LFG = 10;
        var sum_total = sum_width * sum_length;
        C_price9 = (sum_total * Y / 60 * A * B / 100) + (sum_total * R / 100);

        if (g_property_type == 2) return C_price9.toFixed();
    } else if (g_property_type == 1) {
        price9 = TH_price9 + C_price9;
    }

    return price9.toFixed();
}

function calc_Price10() {
    var price10 = 0;
    var TH_price10 = 0;
    var C_price10 = 0;

    var price9 = calc_Price9();
    var price8 = calc_Price8();
    var price7 = calc_Price7();
    var price6 = calc_Price6();
    var price5 = calc_Price5();
    var price4 = calc_Price4();
    var price3 = calc_Price3();
    var price2 = calc_Price2();

    if ((g_property_type == 1) || (g_property_type == 3)) {
        var sum = Number(price9) + Number(price8);
        TH_price10 = sum * (Z / 100 + 1);

        if (g_property_type == 1) return TH_price10.toFixed();
    } else if ((g_property_type == 2) || (g_property_type == 3)) {

        var sum = Number(price9) + Number(price8);
        C_price10 = sum * (Z / 100 + 1);

        if (g_property_type == 2) return C_price10.toFixed();
    } else if (g_property_type == 3) {
        var sum = Number(price9) + Number(price8) + Number(price7) + Number(price6) + Number(price5) + Number(price4) + Number(price3) + Number(price2);
        price10 = Number(sum) + Number(C_price10);
    }

    return price10.toFixed();
}

/* get Table data */
/* condo sheet table */

function get_Allservice_info() {
    var review_table = document.getElementById('review_table_body');
    var units = Number(document.getElementById("Q23").value);
    var bldgs = Number(document.getElementById("Q22").value);

    var price1 = calc_Price1();
    var price2 = calc_Price2();
    var price3 = calc_Price3();
    var price4 = calc_Price4();
    var price5 = calc_Price5();
    var price6 = calc_Price6();
    var price7 = calc_Price7();
    var price8 = calc_Price8();
    var price9 = calc_Price9();
    var price10 = calc_Price10();

    review_table.rows[0].cells[1].innerText = "$" + price1;
    review_table.rows[0].cells[2].innerText = (units == 0) ? 0 : (price1 / units).toFixed();
    review_table.rows[0].cells[3].innerText = (bldgs == 0) ? 0 : (price1 / bldgs).toFixed();
    var adj1 = 1 + (parseFloat($('.spinner input').val().replace('%', '')) || 0) / 100;
    review_table.rows[0].cells[5].innerText = "$" + (price1 * adj1).toFixed();

    review_table.rows[1].cells[1].innerText = "$" + price2;
    review_table.rows[1].cells[2].innerText = (units == 0) ? 0 : (price2 / units).toFixed();
    review_table.rows[1].cells[3].innerText = (bldgs == 0) ? 0 : (price2 / bldgs).toFixed();
    review_table.rows[1].cells[5].innerText = "$" + (price2 * adj1).toFixed();

    review_table.rows[2].cells[1].innerText = "$" + price3;
    review_table.rows[2].cells[2].innerText = (units == 0) ? 0 : (price3 / units).toFixed();
    review_table.rows[2].cells[3].innerText = (bldgs == 0) ? 0 : (price3 / bldgs).toFixed();
    review_table.rows[2].cells[5].innerText = "$" + (price3 * adj1).toFixed();

    review_table.rows[3].cells[1].innerText = "$" + price4;
    review_table.rows[3].cells[2].innerText = (units == 0) ? 0 : (price4 / units).toFixed();
    review_table.rows[3].cells[3].innerText = (bldgs == 0) ? 0 : (price4 / bldgs).toFixed();
    review_table.rows[3].cells[5].innerText = "$" + (price4 * adj1).toFixed();

    review_table.rows[4].cells[1].innerText = "$" + price5;
    review_table.rows[4].cells[2].innerText = (units == 0) ? 0 : (price5 / units).toFixed();
    review_table.rows[4].cells[3].innerText = (bldgs == 0) ? 0 : (price5 / bldgs).toFixed();
    review_table.rows[4].cells[5].innerText = "$" + (price5 * adj1).toFixed();

    review_table.rows[5].cells[1].innerText = "$" + price6;
    review_table.rows[5].cells[2].innerText = (units == 0) ? 0 : (price6 / units).toFixed();
    review_table.rows[5].cells[3].innerText = (bldgs == 0) ? 0 : (price6 / bldgs).toFixed();
    review_table.rows[5].cells[5].innerText = "$" + (price6 * adj1).toFixed();

    review_table.rows[6].cells[1].innerText = "$" + price7;
    review_table.rows[6].cells[2].innerText = (units == 0) ? 0 : (price7 / units).toFixed();
    review_table.rows[6].cells[3].innerText = (bldgs == 0) ? 0 : (price7 / bldgs).toFixed();
    review_table.rows[6].cells[5].innerText = "$" + (price7 * adj1).toFixed();

    review_table.rows[7].cells[1].innerText = "$" + price8;
    review_table.rows[7].cells[2].innerText = (units == 0) ? 0 : (price8 / units).toFixed();
    review_table.rows[7].cells[3].innerText = (bldgs == 0) ? 0 : (price8 / bldgs).toFixed();
    review_table.rows[7].cells[5].innerText = "$" + (price8 * adj1).toFixed();

    review_table.rows[8].cells[1].innerText = "$" + price9;
    review_table.rows[8].cells[2].innerText = (units == 0) ? 0 : (price9 / units).toFixed();
    review_table.rows[8].cells[3].innerText = (bldgs == 0) ? 0 : (price9 / bldgs).toFixed();
    review_table.rows[8].cells[5].innerText = "$" + (price9 * adj1).toFixed();

    review_table.rows[9].cells[1].innerText = "$" + price10;
    review_table.rows[9].cells[2].innerText = (units == 0) ? 0 : (price10 / units).toFixed();
    review_table.rows[9].cells[3].innerText = (bldgs == 0) ? 0 : (price10 / bldgs).toFixed();
    review_table.rows[9].cells[5].innerText = "$" + (price10 * adj1).toFixed();

    /* Collect condosheet and review table information */
    var condo_TableData;
    var review_TableData;

    condo_TableData = storeTblValues();
    condo_TableData = $.toJSON(condo_TableData);

    review_TableData = storeReviewData();
    review_TableData = $.toJSON(review_TableData);

    $.ajax({
        type: 'POST',
        url: 'index.php',
        data: {
            condo_TableData: condo_TableData,
            review_TableData: review_TableData
        },
        success: function(data) {
            $('#condosheet').val(condo_TableData.replace(/},/g, "},<br>"));
            $('#reviewtable').val(review_TableData.replace(/},/g, "},<br>"));
        }
    });
}

function storeTblValues() {
    var TableData = new Array();

    $('#condo_table tr').each(function(row, tr) {
        if ($(tr).find('td:eq(0)').text() != "") {
            TableData[row] = {
                "Bldgs": $(tr).find('td:eq(0)').text(),
                "Width": $(tr).find('td:eq(1)').text(),
                "Length": $(tr).find('td:eq(2)').text(),
                "LFC": $(tr).find('td:eq(3)').text(),
                "floors": $(tr).find('td:eq(4)').text()
            }
        }
    });
    TableData.shift(); // first row will be empty - so remove
    return TableData;
}

function storeReviewData() {
    var ReviewTableData = new Array();

    $('#review_table tr').each(function(row, tr) {
        if ($(tr).find('td:eq(0)').text() != "") {
            ReviewTableData[row] = {
                "servicename": $(tr).find('td:eq(0)').text(),
                "total": $(tr).find('td:eq(1)').text(),
                "unit": $(tr).find('td:eq(2)').text(),
                "bldgs": $(tr).find('td:eq(3)').text(),
                "adjust": $(tr).find('td:eq(4)').text(),
                "update": $(tr).find('td:eq(5)').text()
            }
        }
    });

    ReviewTableData.shift(); // first row will be empty - so remove
    return ReviewTableData;
}

function storePressureValues() {
    var pressureTableData = new Array();

    $('#pressure_table tr').each(function(row, tr) {
        if ($(tr).find('td:eq(0)').text() != "") {
            pressureTableData[row] = {
                "description": $(tr).find('td:eq(0)').text(),
                "Feet": $(tr).find('td:eq(1)').text(),
                "Price": $(tr).find('td:eq(2)').text()
            }
        }
    });

    pressureTableData.shift(); // first row will be empty - so remove
    return pressureTableData;
}

function storeOtherServiceValues() {
    var otherTableData = new Array();
    var idx = 0;
    $('#otherservice_table tr').each(function(row, tr) {
        if ($(tr).find('td:eq(0)').text() != "") {
            idx++;
            otherTableData[row] = {
                "idx": idx,
                "data": [{
                    "name": $(tr).find('td:eq(0)').text(),
                    "price": $(tr).find('td:eq(1)').text(),
                    "man-hours": $(tr).find('td:eq(2)').text()
                }]
            }
        }
    });

    otherTableData.shift(); // first row will be empty - so remove
    return otherTableData;
}

function storeFenceValues() {
    var fenceTableData = new Array();

    $('#fence_table tr').each(function(row, tr) {
        if ($(tr).find('td:eq(0)').text() != "") {
            fenceTableData[row] = {
                "description": $(tr).find('td:eq(0)').text(),
                "Length": $(tr).find('td:eq(1)').text(),
                "Height": $(tr).find('td:eq(2)').text(),
                "Both": $(tr).find('td:eq(4)').text(),
                "Adjust": $(tr).find('td:eq(5)').text(),
                "price": $(tr).find('td:eq(6)').text()
            }

        }
    });

    fenceTableData.shift(); // first row will be empty - so remove
    return fenceTableData;
}

/* Confirm pressure washing prices */

function get_pressure_price() {
    var pressure_table = document.getElementById('pressure_table_body');
    var total = 0;

    for (var idx = 0; idx < pressure_table.rows.length; idx++) {
        if (pressure_table.rows[idx].cells[0].innerText != "") {
            var pressure_price = Number(pressure_table.rows[idx].cells[1].innerText) * V / 60 * A * B;
            total += pressure_price;
            pressure_table.rows[idx].cells[2].innerText = "$" + pressure_price.toFixed();
        }
    }

    $('#totalprice_contractual').val("$" + total.toFixed());

    var pressure_TableData;

    pressure_TableData = storePressureValues();
    pressure_TableData = $.toJSON(pressure_TableData);

    $.ajax({
        type: 'POST',
        url: 'index.php',
        data: {
            pressure_TableData: pressure_TableData
        },
        success: function(data) {
            $('#pressuretable').val(pressure_TableData.replace(/},/g, "},<br>"));
        }
    });
}

function calc_otherservice_price() {
    var otherservice_table = document.getElementById('otherservice_table_body');

    for (var idx = 0; idx < otherservice_table.rows.length; idx++) {
        if (otherservice_table.rows[idx].cells[0].innerText != "") {
            var other_price = Number(otherservice_table.rows[idx].cells[1].innerText) / 75;

            otherservice_table.rows[idx].cells[2].innerText = "$" + other_price.toFixed(2);
        }
    }

    var other_TableData;

    other_TableData = storeOtherServiceValues();
    other_TableData = $.toJSON(other_TableData);

    $.ajax({
        type: 'POST',
        url: 'index.php',
        data: {
            other_TableData: other_TableData
        },
        success: function(data) {
            $('#otherservicetable').val(other_TableData.replace(/},/g, "},<br>"));
        }
    });
}

function calc_fence_price() {
    var fence_table = document.getElementById('fence_table_body');

    for (var idx = 0; idx < fence_table.rows.length; idx++) {
        if (fence_table.rows[idx].cells[0].innerText != "") {
            var L = Number(fence_table.rows[idx].cells[1].innerText);
            var H = Number(fence_table.rows[idx].cells[2].innerText);

            var adj = 1 + (parseFloat($('.spinner1 input').val().replace('%', '')) || 0) / 100;
            var fence_price = (L * H * AA * A * B) * adj;

            //$(this).children('td').eq(0).is(':checked')
            if ($("#fence_table_body > tr:nth-child('idx') td:nth-child(4) input").prop("checked") == "true") {
                var z = 1;
            }

            fence_table.rows[idx].cells[5].innerText = "$" + fence_price.toFixed(2);
        }
    }

    var fence_TableData;

    fence_TableData = storeFenceValues();
    fence_TableData = $.toJSON(fence_TableData);

    $.ajax({
        type: 'POST',
        url: 'index.php',
        data: {
            fence_TableData: fence_TableData
        },
        success: function(data) {
            $('#fencetable').val(fence_TableData.replace(/},/g, "},<br>"));
        }
    });
}