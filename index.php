<?php
    date_default_timezone_set('Asia/Taipei');
    ini_set("session.gc_maxlifetime", "28800");
    $current_date = date('m/d/Y');

    include_once "includes/db_con.php";
    include "includes/session.php";

    $query = "SELECT * FROM links_tbl";
    $run = mysqli_query($conn, $query);
    
//    $query2 = "SELECT link_id FROM logs_tbl GROUP BY link_id ORDER BY link_id ASC";
    $query2 = "SELECT count(*) as tot,logs_tbl.link_id, links_tbl.link_title FROM logs_tbl join links_tbl on logs_tbl.link_id=links_tbl.link_id group by logs_tbl.link_id";
    $run2 = mysqli_query($conn, $query2);

    $chart_data = '';
    while($row = mysqli_fetch_array($run2)){
        $chart_data .= "{ apps: '" . $row["link_title"] . "', visit: '".$row["tot"]."'},";
    }

    $query3 = "SELECT count(*) as total,logs_tbl.link_id, links_tbl.link_title FROM logs_tbl join links_tbl on logs_tbl.link_id=links_tbl.link_id WHERE logs_tbl.log_empid = '".$_SESSION["empid"]."' group by logs_tbl.link_id";
    $run3 = mysqli_query($conn, $query3);

    $chart_data2 = '';
    while($row = mysqli_fetch_array($run3)){
        $chart_data2 .= "{value: ".$row["total"].", label: '" . $row["link_title"] . "' },";
    }
?>


<!doctype html>
<html lang="en">

<?php include "includes/head.php"; ?>
<?php include "includes/modal.php"; ?> 
   
<body onload="startTime()">

<div class="wrapper">
    
    <?php include "includes/sidebar.php"; ?>
    
    <div class="main-panel">
        
        <?php include "includes/navbar.php"; ?>

        <div class="content" style="padding-bottom:0;">
            <div class="container-fluid" style="margin-bottom:0;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" id="frame_card">
                            <div class="content" style="padding:0;">
                                <div id="frames"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" id="time_card">
                            <div class="content" style="padding:0;">
                                <br>
                                <center>
                                    <div style="text-align:center;padding:1em 0;"> 
                                        <h2>
                                            <a style="font-weight:bold;" href="https://www.zeitverschiebung.net/en/country/ph">
                                                <span style="color:gray;">
                                                    Philippines
                                                </span>
                                                <br />Standard Time
                                            </a>
                                        </h2> 
                                            <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FManila" width="100%" height="140" frameborder="0" seamless></iframe> 
                                    </div>
                                </center>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" id="bar_card">
                            <div class="header">
                                <h4 class="title">Total visit of all users</h4>
                                <p class="category">As of <?php echo $current_date; ?> </p>
                            </div>
                            <div class="content">
                                <div id="barChart" class="ct-chart"></div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="card" id="line_card">
                            <div class="header">
                                <h4 class="title">Your daily site visit</h4>
                                <p class="category">As of <?php echo $current_date; ?></p>
                            </div>
                            <div class="content">
                                <div id="chart" class="ct-chart"></div>
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i>Updated <?php echo $current_date; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php include "includes/footer.php"; ?>

    </div>
</div>


</body>

    <?php include "includes/script.php"; ?>
    <script type="text/javascript">
        $('#frame_card').hide();
        
        Morris.Donut({
             element : 'chart',
             data: [<?php echo $chart_data2; ?>],
             resize:true
            
        });
        
        Morris.Bar({
             element : 'barChart',
             data:[<?php echo $chart_data; ?>],
             xkey:'apps',
             parseTime: false,
             ykeys:['visit'],
             labels:['Visit'],
             hideHover:'auto',
             stacked:true,
             resize:true,
             gridTextSize:10,
             barColors: function (row, series, type) {
                console.log("--> "+row.label, series, type);
                if(row.label == "Hris") return "#1dc7ea";
                else if(row.label == "Cognos") return "#ff4a54";
                else if(row.label == "O 365") return "#ff9502";
                else if(row.label == "VIZ Exp") return "#1d62f0";
                else if(row.label == "IT Inv") return "#333333";
                else if(row.label == "Ebms") return "#02ffff";
                else if(row.label == "Intranet") return "#892be2";
                else if(row.label == "Nav") return "#5e9ea0";
             }
            
        });
              
        function startTime() {
            var today = new Date();
            var h = today.getHours() > 12 ? today.getHours() - 12 : today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            var a = today.getHours() >= 12 ? "PM" : "AM";
            var p = "<p class='txtcss'>";
            var c = "</p>";
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
            p + h + ":" + m + ":" + s + "&nbsp" + a + c;
            var t = setTimeout(startTime, 100);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
        
        $("#time_card").backstretch([
          "image_background/bar.jpg",
          "image_background/line.jpg",
          "image_background/clock.png"
          ], {
            fade: 750,
            duration: 4000
        });
        
    </script>
</html>
