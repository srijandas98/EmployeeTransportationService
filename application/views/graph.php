<?php
print_r($graph);
print_r(json_encode($graph))
?>


    <!DOCTYPE html>
    <html>
     
    <head>
      <meta charset="utf-8">
      <title>ZingSoft Demo</title>
     
      <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
      <style>
        html,
        body,
        #myChart {
          height: 100%;
          width: 100%;
        }
      </style>
    </head>
     
    <body>
      <div id='myChart'></div>
      <script>
      	var myObj = <?php json_encode($graph)?>
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
        var dataObj = {
          type: "scatter",
          title: {
            text: "Chart Data Object"
          },
          series: [{
            values: myObj
          }]
        };
     
        zingchart.render({
          id: "myChart",
          x: '0',
          y: '0',
          //output: "svg",
          height: '100%',
          width: '100%',
          data: dataObj
        });
      </script>
    </body>
     
    </html>

