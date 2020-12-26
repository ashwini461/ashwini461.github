 /*$(document).ready(function () {
        $("#submit").on("click", function() {  
            //setInterval(showGraph,10000);
            showGraph();
        });
            

        });*/


        function showGraph()
        {
            {
                $.post("data2.php",
                function (data)
                {
                    //console.log(data);
                     var ctemp = [];
                     var ctime=[];

                   for (var i in data) {
                        ctime.push(data[i].timestamp1);
                        ctemp.push(data[i].temp);
                    }

                    var chartdata = {
                        labels: ctime,
                        datasets: [
                            {
                                label: 'current temp',
                                //backgroundColor: 'blue',
                                borderColor: '#46d5f1',
                                //hoverBackgroundColor: '#CCCCCC',
                                //hoverBorderColor: '#666666',
                                fill:false,
                                data: ctemp
                            }
                        ]
                    };
                    
                
                 
                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,
                        options: {
                           maintainAspectRatio: false,
                           tooltips: {
                                    mode: 'point'
                                   },
                            scales: {
                                 xAxes: [{
                                   gridLines: {
                                        display: false
                                      },
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'TIME'
                                        }
                                    }],
                                yAxes: [{
                                     gridLines: {
                                          display: true,
                                          color: "rgba(255,99,132,0.2)"
                                        },
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Temperature'},
                                    ticks: {
                                        min: 0,
                                        beginAtZero: true,
                                        stepValue:10,
                                        max:100

                                        }
                                    }]
                                }
                            }


                    });
                     
                });
            }
            
        }