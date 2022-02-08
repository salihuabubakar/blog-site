<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/me.jpg" type="image/png">
    <title>Salihu|Abubakar|Kutiriko|Blog</title>


    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="blog.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>
<body>

    <div class="nav-bar side">
        <div class="icon-container">
            <ul>
                <li>
                    <div class=" r1 q a h">
                        <a class="home" href="">
                            <i class="icon fa fa-2x fa-home"></i>
                            <span class="css-901oao css-16my406 r-poiln3 r-bcqeeo r-qvutc0"><strong>SAKutBlog</strong></span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class=" r2 r q a">
                        <a href="">
                            <i class="icon fa fa-2x fa-user"></i> 
                            <span class="css-901oao css-16my406 r-poiln3 r-bcqeeo r-qvutc0 span-color"><strong>Profile</strong></span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="r4 r exp">
                        <a href="">
                            <i class="icon fa fa-2x fa-check"></i>
                            <span class="css-901oao css-16my406 r-poiln3 r-bcqeeo r-qvutc0 span-color"><strong>Bookmarks</strong></span>
                        </a>
                    </div>
                </li>
                <li class="post">
                    <div class="div-post">
                        <a href="mailto:salihuabubakar08170@gmail.com" class="btn"><strong>Notify Me</strong></a>
                    </div>
                </li>
                <li>
                    <div class=" profile-detail exp">
                        <a href="pages/my_profile.php">
                            <div class=" pro-img">
                                <img src="images/me.jpg" alt="">
                            </div>
                            <div class="pro-txt">
                                <p class="pro-user-name"> Salihu <span class="dash"></span> <span class="sal">@salihu</span> </p>
                            </div>
                        </a>
                    </div>
                </li>
                
            </ul>            
        </div>
    </div>
<div class="s-t-div">


 <div class="all">  


   <div class="main">
        <nav class="header">
            <li class="list-item item"><h1>SAKutirikoBlog <span class="span-1"></span></h1></li>
            <li class="list-item item"><p></p></li>
        </nav>
       
       
   </div>
   <div class="news-div">
        <?php 
                include_once("pages/get_myblog_details.php");                       
        ?>
    </div>
  
 
 </div>

<div class="third-section">
    
        <div class="input-search">
    
            <input type="text" class="s-input" placeholder="Search SAKutBlog">
            <svg viewBox="0 0 24 24" aria-hidden="true"
                class="r-m0bqgq r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr">
                <g>
                    <path
                        d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                    </path>
                </g>
            </svg>
            </input>
        </div>
        
        <hr class="hr-footer">
        <div></div>
        <div class="footer">
            <div class="li1"><a href="">Terms of service</a></div>
            <div class="li2"><a href="">Privacy policy</a></div>
            <div class="li3"><a href="">Cookie policy</a></div>
        </div>
        <div class="footer2">
            <div class="li4"><a href="">Ads info</a></div>
            <div class="li5"><a href="">More...</a></div>
            <div class="li6">&copy;2021 SAKutBlog, Inc</div>
        </div>
    
    
    
 </div>
</div>
<script src="index.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>>
</html>