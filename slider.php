<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        .caption-details{
            background: #00000091;
            border-radius: 1em;
        }
        .carousel-caption{
            bottom: 13em;
        }
    </style>
</head>

<body>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/codingwithkids.jpg" alt="Los Angeles" style="width: 100%; height: 560px;">
                <div class="carousel-caption caption-details">
                    <h3>CODING WITH KIDS</h3>
                    <p>We provide free Coding Education to kids!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/mentorship.jpeg" alt="Chicago" style="width: 100%; height: 560px;">
                <div class="carousel-caption caption-details">
                    <h3>MENTORSHIP</h3>
                    <p>"A mentor is someone who sees more talent and ability within you, than you see in yourself, and helps bring it out of you."</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/womenEmp.jpg" alt="New York" style="width: 100%; height: 560px;">
                <div class="carousel-caption caption-details">
                    <h3>WOMEN ENPOWERMENT</h3>
                    <p>We uplift the ray of hope for women to conquer the world!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

</body>

</html>