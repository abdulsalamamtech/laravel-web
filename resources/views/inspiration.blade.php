<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspiration Quotes By Great Minds || Dev. AbdulsalamAmtech</title>
</head>
<body>


    <!-- ========== Start Style ========== -->
    <style>
        .container{
            width: 80%;
            margin: 0 auto;
        }
        .content{
            padding: 20px;
        }
        .footer{
            font-size: 18px;
            font-weight: 700;
            text-align: center
        }
        .footer a{
            text-decoration: none;
        }
    </style>
    <!-- ========== End Style ========== -->


    <!-- ========== Start Container ========== -->
    <div class="container">
        <div class="content">
            <hr>
            <h1>Inspirational Quotes By Great Minds</h1>
            <hr>
            @foreach($word as $inspire)
                <p style='font-size:20px;'>
                    <br>
                    {!! html_entity_decode($inspire) !!}
                </p>
                <hr>
            @endforeach
        </div>
    </div>
    <!-- ========== End Container ========== -->


    <!-- ========== Start Footer ========== -->
    <footer class="footer">
        <a href="https://bit.ly/abdulsalamamtech">Dev. Abdulsalam Amtech</a>
    </footer>
    <!-- ========== End Footer ========== -->


</body>
</html>
