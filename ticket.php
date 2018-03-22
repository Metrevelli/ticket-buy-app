<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"/> -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500" rel="stylesheet">
    <style type="text/css">
        .ticket{
            width:600px;
            height:200px;
            -webkit-box-shadow: 6px 6px 32px -1px rgba(0,0,0,0.75);
            -moz-box-shadow: 6px 6px 32px -1px rgba(0,0,0,0.75);
            box-shadow: 6px 6px 32px -1px rgba(0,0,0,0.75);
            overflow:hidden;
            background-image: url("./img/watermark.png");
            background-repeat: no-repeat;
            background-size: 449px 100%;
        }
        .ticket-infoline-container{
            font-family: 'Work Sans', sans-serif;
            font-weight:500 !important;
            margin-top:22px;
            float:left;
            width:449px;
            height:100%;
            text-align: center;

        }
        .ticket-infoline{
            height:20%;
        }
        .ticket-infoline:nth-child(1){
            font-size:30px;
            font-weight:bold;
        }
        .ticket-verticalline{
            font-family: 'Work Sans', sans-serif;
            font-weight:400;
            float:right;
            width:150px;
            height:100%;
            border-left:1px solid #bbb;
            text-align: center;
        }
        .ticket-verticalline img{
            width:150px;
            height:150px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
    </style>
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

        <div class="ticket-verticalline"><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2F%E1%83%A1%E1%83%90%2F&choe=UTF-8" />July 19, 2018 Show: 07:30PM</div>
    </div>
</body>
</html>