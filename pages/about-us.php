<?php include "./layout/header.php" ?>
<style>
    .sec-title {
        position: relative;
        z-index: 1;
        margin-bottom: 60px;
    }

    .sec-title .title {
        position: relative;
        display: block;
        font-size: 18px;
        line-height: 24px;
        color: #00aeef;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .sec-title h2 {
        position: relative;
        display: block;
        font-size: 40px;
        line-height: 1.28em;
        color: #222222;
        font-weight: 600;
        padding-bottom: 18px;
    }

    .sec-title h2:before {
        position: absolute;
        content: '';
        left: 0px;
        bottom: 0px;
        width: 50px;
        height: 3px;
        background-color: #d1d2d6;
    }

    .sec-title .text {
        position: relative;
        font-size: 16px;
        line-height: 26px;
        color: #848484;
        font-weight: 400;
        margin-top: 35px;
    }

    .sec-title.light h2 {
        color: #ffffff;
    }

    .sec-title.text-center h2:before {
        left: 50%;
        margin-left: -25px;
    }



    .btn-style-one {
        position: relative;
        display: inline-block;
        font-size: 17px;
        line-height: 30px;
        color: #ffffff;
        padding: 10px 30px;
        font-weight: 600;
        overflow: hidden;
        letter-spacing: 0.02em;
        background-color: #00aeef;
    }

    .btn-style-one:hover {
        background-color: #0794c9;
        color: #ffffff;
    }

    .about-section {
        padding: 3rem 0 ;
        position: relative;
    }

    .about-section .sec-title {
        margin-bottom: 45px;
    }

    .about-section .content-column {
        position: relative;
        margin-bottom: 50px;
        width: 65%;
    }

    .about-section .content-column .inner-column {
        position: relative;
        padding-left: 30px;
    }

    .about-section .text {
        margin-bottom: 20px;
        font-size: 16px;
        line-height: 26px;
        color: #848484;
        font-weight: 400;
    }

    .about-section .image-column .inner-column .author-desc {
        background: orange;
        padding: 5px 1px;
        left: 0;
        width: 100%;
        border-radius: 50px;
    }

    .about-section .image-column .inner-column .author-desc h2 {
        font-size: 21px;
        letter-spacing: 1px;
        text-align: center;
        color: #fff;
        margin: 0;
    }

    .about-section .image-column .inner-column .author-desc span {
        font-size: 16px;
        letter-spacing: 6px;
        text-align: center;
        color: #fff;
        display: block;
        font-weight: 400;
    }


    .about-section .image-column .image-1 img {
        box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
        border-radius: 10px;
        width: 350px;
        margin-bottom: 2rem;
        height: 350px;
    }
</style>

<section class="about-section">
    <div class="container">
        <div class="flex">
            <!-- Image Column -->
            <div class="image-column">
                <div class="inner-column wow fadeInLeft">
                    <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img
                                title="Rahul Kumar Yadav" src="https://i.ibb.co/QP6Nmpf/image-1-about.jpg" alt=""></a>
                    </figure>
                    <div class="author-desc">
                        <h2>Deepak Kumar</h2>
                        <span>Web Developer</span>
                    </div>

                </div>
            </div>
            <div class="content-column ">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">About Online Shopping Store</span>
                        <h2>We are Creative Tech Enthusiast working since 2015</h2>
                    </div>
                    <div class="text">I am Deepak Kumar works at Css3 Transition since last 3 years. We are here to
                        provide touch notch solution for your website or web application that helps you to make your
                        website look attractive & efficient in handling by creating usefull plugins thats you need.
                    </div>
                    <div class="text">
                        We are here to serve you next level tutorial that currently in trend to match you with your
                        expertise. Css3 transition is a learning website. where you can find many good quality content
                        related to web development and tutorials about plugins. here we are using html, html5, css,
                        css3, jquery & javascript along with inspirational UI design layout by professionals by using
                        Photoshop and adobe allustrator.
                    </div>
                    <div class="btn-box">
                        <a href="<?php echo $baseurl ?>pages/contact-us.php" class="theme-btn btn-style-one">Contact
                            Us</a>
                    </div>
                </div>
            </div>



        </div>
        <div class="sec-title">
            <span class="title">Our Future Goal</span>
            <h2>We want to lead in innovation & Technology</h2>
        </div>
        <div class="text">
            We works on UI/UX and functionality as well so that a plugins comes with proper stucture & stunning looks
            which suits to your web app & website.
        </div>
        <div class="text">
            We take a small toolkit here and ride it well so that it is fit for your use. One who performs well and
            looks even better.
        </div>
        <div class="text">
            Here we are trying to give you all kinds of technical content, whether it is related to designing or
            functionality. We are creating content on a lot of languages and will continue to make it free of cost even
            if you use it without any problem. Which is a very important thing.
        </div>
        <div class="text">
            Here you can also share the content you create, if our technical team likes it, then we will also share it
            on our blog.
        </div>
        <div class="text">

            In the end, I would say keep visiting our website and enjoy the quality content.
        </div>
    </div>
</section>

<?php include "./layout/footer.php" ?>