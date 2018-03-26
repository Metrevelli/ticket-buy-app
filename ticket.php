<?php 
    require 'vendor/autoload.php';
    include 'phpqrcode/qrlib.php';
    QRcode::png('code data text', 'filename.png'); // creates file 
// QRcode::png('some othertext 1234'); // creates code image and outputs it directly into browser
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ticket Buy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"/> -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.ticket.css"/>
    <script type="text/javascript" src="vendor/components/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/html2canvas.min.js"></script>
    <script type="text/javascript" src="js/canvas2image.js"></script>
</head>
<body>
    <div class="ticket">
        <div class="ticket-infoline-container">
            <span class="ticket-infoline">Your Event Name</span>
            <br>
            <span class="ticket-infoline">Friday</span>
            <br>
            <span class="ticket-infoline">July 19, 2018 Show: 07:30PM</span>
            <br>
            <span class="ticket-infoline">Ticket: 15GEL</span>
            <br>
            <span class="ticket-infoline">Section B - Seat 12</span>
            <br>
            <span class="ticket-infoline">Customer Name</span>
            <br>
            <span class="ticket-infoline">Rustaveli Ave. 123 Something Something</span>
        </div>
        <div class="ticket-verticalline"><img src="<?='./filename.png'?>" />July 19, 2018 Show: 07:30PM</div>
    </div>
    <!-- <input type="button" id="btnSave" />
    <div id="img-out"></div> -->
    <br/>
</body>
<script type="text/javascript">
$(document).ready(html2canvas(document.querySelector(".ticket")).then(canvas => {
    document.body.appendChild(canvas)
    Canvas2Image.saveAsPNG(canvas,600,200,"dada");
}));
</script>
</html>