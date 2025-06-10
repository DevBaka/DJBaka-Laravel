<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Hey there! I’m Mustapha, I studied computer science for 4 years at AL-QALAM University Katsina, graduated in 2022 atfer completing Information Technology Developer (ITD) program at Legacy Computer Institute kaduna. I design and develop services for customers of all sizes, specialized in creating stylish, modern websites / web applications, web services and online stores" />

    <!-- Site Title -->
    <title>DJBaka</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{ asset('frontend/assets/img/favicon.png') }}" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}" />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome-pro.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon_gerold.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/backToTop.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer-theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/light-mode.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}" />
</head>

<body>
    <!-- Preloader Area Start -->
    <div class="preloader">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="preloader-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>
    <!-- Preloader Area End -->

    <!-- start: Back To Top -->
    <div class="progress-wrap" id="scrollUp">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- end: Back To Top -->

    <!-- HEADER START -->
      @include('frontend.partials.header')
    <!-- HEADER END -->

    <main class="site-content" id="content">
        <!-- HERO SECTION START -->
      @include('frontend.pages.home.hero')
        <!-- HERO SECTION END -->

        <!-- SERVICES SECTION START -->
      @include('frontend.pages.home.services')
        <!-- SERVICES SECTION END -->



        <!-- PORTFOLIO SECTION START -->
        <section class="portfolio-section" id="works-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Recent Works</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                We put your ideas and thus your wishes in the form of a unique web project that inspires
                                you and
                                you customers.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="portfolio-filter text-center wow fadeInUp" data-wow-delay=".5s">
                            <div class="button-group filter-button-group">
                                <button data-filter="*" class="active">All</button>
                                <button data-filter=".uxui">UX/UI</button>
                                <button data-filter=".branding">Branding</button>
                                <button data-filter=".mobile-app">Apps</button>
                                <div class="active-bg"></div>
                            </div>
                        </div>

                        <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s">
                            <div class="portfolio-sizer"></div>
                            <div class="gutter-sizer"></div>
                            <div class="portfolio-item branding">
                                <div class="image-box">
                                    <img src="{{ asset('frontend/assets/img/portfolio/2.jpg') }}" alt="" />
                                </div>
                                <div class="content-box">
                                    <h3 class="portfolio-title">Deloitte</h3>
                                    <p>Project was about precision and information.</p>
                                    <i class="flaticon-up-right-arrow"></i>
                                    <button data-mfp-src="#portfolio-wrapper"
                                        class="portfolio-link modal-popup"></button>
                                </div>
                            </div>
                            <div class="portfolio-item uxui">
                                <div class="image-box">
                                    <img src="{{ asset('frontend/assets/img/portfolio/1.jpg') }}" alt="" />
                                </div>
                                <div class="content-box">
                                    <h3 class="portfolio-title">New Age</h3>
                                    <p>Project was about precision and information.</p>
                                    <i class="flaticon-up-right-arrow"></i>
                                    <button data-mfp-src="#portfolio-wrapper"
                                        class="portfolio-link modal-popup"></button>
                                </div>
                            </div>
                            <div class="portfolio-item mobile-app">
                                <div class="image-box">
                                    <img src="{{ asset('frontend/assets/img/portfolio/3.jpg') }}" alt="" />
                                </div>
                                <div class="content-box">
                                    <h3 class="portfolio-title">Sebastian</h3>
                                    <p>Project was about precision and information.</p>
                                    <i class="flaticon-up-right-arrow"></i>
                                    <button data-mfp-src="#portfolio-wrapper"
                                        class="portfolio-link modal-popup"></button>
                                </div>
                            </div>
                            <div class="portfolio-item branding">
                                <div class="image-box">
                                    <img src="{{ asset('frontend/assets/img/portfolio/4.jpg') }}" alt="" />
                                </div>
                                <div class="content-box">
                                    <h3 class="portfolio-title">Mochnix</h3>
                                    <p>Project was about precision and information.</p>
                                    <i class="flaticon-up-right-arrow"></i>
                                    <button data-mfp-src="#portfolio-wrapper"
                                        class="portfolio-link modal-popup"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO SECTION END -->

        <!-- start: Portfolio Popup -->
        <div id="portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide">
            <div class="popup_modal_img">
                <img src="{{ asset('frontend/assets/img/portfolio/modal-img.jpg') }}" alt="" />
            </div>

            <div class="popup_modal_content">
                <div class="portfolio_info">
                    <div class="portfolio_info_text">
                        <h2 class="title">DStudio</h2>
                        <div class="desc">
                            <p>
                                They are was greater open above shelter lets itself under appear sixth open gathering
                                made upon
                                can't own above midst
                                gathering gathered he one us saying can't divide.
                            </p>
                        </div>
                        <a href="#" class="btn tj-btn-primary">live preview <i
                                class="fal fa-arrow-right"></i></a>
                    </div>
                    <div class="portfolio_info_items">
                        <div class="info_item">
                            <div class="key">Category</div>
                            <div class="value">Web Design</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Client</div>
                            <div class="value">Artboard Studio</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Start Date</div>
                            <div class="value">August 20, 2023</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Designer</div>
                            <div class="value"><a href="#">ThemeJunction</a></div>
                        </div>
                    </div>
                </div>

                <div class="portfolio_gallery owl-carousel">
                    <div class="gallery_item">
                        <img src="{{ asset('frontend/assets/img/portfolio-gallery/p-gallery-1.jpg') }}"
                            alt="" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('frontend/assets/img/portfolio-gallery/p-gallery-2.jpg') }}"
                            alt="" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('frontend/assets/img/portfolio-gallery/p-gallery-3.jpg') }}"
                            alt="" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('frontend/assets/img/portfolio-gallery/p-gallery-4.jpg') }}"
                            alt="" />
                    </div>
                </div>


                <div class="portfolio_description">
                    <h2 class="title">Project Description</h2>
                    <div class="desc">
                        <p>
                            The goal is there are many variations of passages of Lorem Ipsum available, but the majority
                            have
                            suffered alteration in some
                            form, by injected humour, or randomised words which don't look even slightly believable.
                        </p>

                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered
                            alteration in some form, by
                            injected humour, or randomised words which don't look even slightly believable. If you are
                            going to
                            use a passage of Lorem
                            Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                        </p>
                    </div>
                </div>

                <div class="portfolio_story_approach">
                    <div class="portfolio_story">
                        <div class="story_title">
                            <h4 class="title">The story</h4>
                        </div>
                        <div class="story_content">
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form, by
                                injected humour, or randomised words which don't look even slightly believable. If you
                                are going
                                to use a passage of Lorem
                                Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                text. There
                                are many variations of
                                passages of Lorem Ipsum available, but the majority have suffered alteration in some
                                form, by
                                injected humour, or
                                randomised words which don't look even slightly believable. If you are going to use a
                                passage of
                                Lorem Ipsum, you need to
                                be sure there isn't anything embarrassing hidden in the middle of text.
                            </p>
                        </div>
                    </div>
                    <div class="portfolio_approach">
                        <div class="approach_title">
                            <h4 class="title">OUR APPROACH</h4>
                        </div>
                        <div class="approach_content">
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form, by
                                injected humour, or randomised words which don't look even slightly believable. If you
                                are going
                                to use a passage of Lorem
                                Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                text. There
                                are many variations of
                                passages of Lorem Ipsum available, but the majority have suffered alteration in some
                                form, by
                                injected humour, or
                                randomised words which don't look even slightly believable. If you are going to use a
                                passage of
                                Lorem Ipsum, you need to
                                be sure there isn't anything embarrassing hidden in the middle of text.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="portfolio_navigation">
                    <div class="navigation_item prev-project">
                        <a href="#" class="project">
                            <i class="fal fa-arrow-left"></i>
                            <div class="nav_project">
                                <div class="label">Previous Project</div>
                                <h3 class="title">Sebastian</h3>
                            </div>
                        </a>
                    </div>

                    <div class="navigation_item next-project">
                        <a href="#" class="project">
                            <div class="nav_project">
                                <div class="label">Next Project</div>
                                <h3 class="title">Qwillo</h3>
                            </div>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Portfolio Popup -->

        <!-- RESUME SECTION START -->
        <section class="resume-section" id="resume-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="section-title"><i class="flaticon-recommendation"></i> My Experience</h2>
                        </div>

                        <div class="resume-widget">
                            <div class="resume-item wow fadeInLeft" data-wow-delay=".4s">
                                <div class="time">2022 - Present</div>
                                <h3 class="resume-title">Lead Developer</h3>
                                <div class="institute">Blockdots, London</div>
                            </div>
                            <div class="resume-item wow fadeInLeft" data-wow-delay=".5s">
                                <div class="time">2021 - 2022</div>
                                <h3 class="resume-title">Full Stack Web Developer</h3>
                                <div class="institute">Parsons, The New School</div>
                            </div>
                            <div class="resume-item wow fadeInLeft" data-wow-delay=".6s">
                                <div class="time">2020 - 2021</div>
                                <h3 class="resume-title">UI Designer</h3>
                                <div class="institute">House of Life, Leeds</div>
                            </div>
                            <div class="resume-item wow fadeInLeft" data-wow-delay=".7s">
                                <div class="time">2018 - 2020</div>
                                <h3 class="resume-title">Junior Graphics Designer</h3>
                                <div class="institute">Theme Junction, Bursa</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="section-header wow fadeInUp" data-wow-delay=".4s">
                            <h2 class="section-title"><i class="flaticon-graduation-cap"></i> My Education</h2>
                        </div>

                        <div class="resume-widget">
                            <div class="resume-item wow fadeInRight" data-wow-delay=".5s">
                                <div class="time">2020 - 2023</div>
                                <h3 class="resume-title">Programming course</h3>
                                <div class="institute">Harverd University</div>
                            </div>
                            <div class="resume-item wow fadeInRight" data-wow-delay=".6s">
                                <div class="time">2016 - 2020</div>
                                <h3 class="resume-title">Graphic design course</h3>
                                <div class="institute">University of Denmark</div>
                            </div>
                            <div class="resume-item wow fadeInRight" data-wow-delay=".7s">
                                <div class="time">2012 - 2015</div>
                                <h3 class="resume-title">Web design course</h3>
                                <div class="institute">University of California</div>
                            </div>
                            <div class="resume-item wow fadeInRight" data-wow-delay=".8s">
                                <div class="time">2010 - 2011</div>
                                <h3 class="resume-title">Design & Technology</h3>
                                <div class="institute">Parsons, The New School</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- RESUME SECTION END -->

        <!-- SKILLS SECTION START -->
        <section class="skills-section" id="skills-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Skills</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                We put your ideas and thus your wishes in the form of a unique web project that inspires
                                you and
                                you customers.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="skills-widget d-flex flex-wrap justify-content-center align-items-center">
                            <div class="skill-item wow fadeInUp" data-wow-delay=".3s">
                                <div class="skill-inner">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/assets/img/icons/figma.svg') }}"
                                            alt="" />
                                    </div>
                                    <div class="number">92%</div>
                                </div>
                                <p>Figma</p>
                            </div>
                            <div class="skill-item wow fadeInUp" data-wow-delay=".4s">
                                <div class="skill-inner">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/assets/img/icons/sketch.svg') }}"
                                            alt="" />
                                    </div>
                                    <div class="number">80%</div>
                                </div>
                                <p>Sketch</p>
                            </div>
                            <div class="skill-item wow fadeInUp" data-wow-delay=".5s">
                                <div class="skill-inner">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/assets/img/icons/xd.svg') }}" alt="" />
                                    </div>
                                    <div class="number">85%</div>
                                </div>
                                <p>XD</p>
                            </div>
                            <div class="skill-item wow fadeInUp" data-wow-delay=".6s">
                                <div class="skill-inner">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/assets/img/icons/wp.svg') }}" alt="" />
                                    </div>
                                    <div class="number">99%</div>
                                </div>
                                <p>WordPess</p>
                            </div>
                            <div class="skill-item wow fadeInUp" data-wow-delay=".7s">
                                <div class="skill-inner">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/assets/img/icons/react.svg') }}"
                                            alt="" />
                                    </div>
                                    <div class="number">89%</div>
                                </div>
                                <p>React</p>
                            </div>
                            <div class="skill-item wow fadeInUp" data-wow-delay=".8s">
                                <div class="skill-inner">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/assets/img/icons/js.svg') }}" alt="" />
                                    </div>
                                    <div class="number">93%</div>
                                </div>
                                <p>JavaScript</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SKILLS SECTION END -->

        <!-- TESTIMONIAL SECTION START -->
        <section class="testimonial-section" id="testimonials-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-header">
                            <h2 class="section-title wow fadeInLeft" data-wow-delay=".3s">My Client's Stories</h2>
                            <p class="wow fadeInLeft" data-wow-delay=".4s">Empowering people in new a digital journey
                                with my
                                super services</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-6 offset-xl-1">
                        <div class="testimonials-widget wow fadeInRight" data-wow-delay=".5s">
                            <div class="owl-carousel testimonial-carousel">
                                <div class="testimonial-item">
                                    <div class="top-area d-flex flex-wrap justify-content-between">
                                        <div class="logo-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/logo/1.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="image-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/user/1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="icon-box">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_588)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_588" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_589)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_589" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p class="quote">“Taylor is a professional Designer he really helps my business by
                                        providing
                                        value to my business.</p>
                                    <h4 class="name">Brandon Fraser</h4>
                                    <span class="designation">Senior Software Dev, Cosmic Sport</span>
                                </div>
                                <div class="testimonial-item">
                                    <div class="top-area d-flex flex-wrap justify-content-between">
                                        <div class="logo-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/logo/2.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="image-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/user/2.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="icon-box">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_511)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_511" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_510)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_510" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p class="quote">“Taylor is a professional Designer he really helps my business by
                                        providing
                                        value to my business.</p>
                                    <h4 class="name">Tim Bailey</h4>
                                    <span class="designation">SEO Specialist, Theme Junction</span>
                                </div>
                                <div class="testimonial-item">
                                    <div class="top-area d-flex flex-wrap justify-content-between">
                                        <div class="logo-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/logo/1.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="image-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/user/1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="icon-box">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_512)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_512" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_513)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_513" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p class="quote">“Taylor is a professional Designer he really helps my business by
                                        providing
                                        value to my business.</p>
                                    <h4 class="name">Brandon Fraser</h4>
                                    <span class="designation">Senior Software Dev, Cosmic Sport</span>
                                </div>
                                <div class="testimonial-item">
                                    <div class="top-area d-flex flex-wrap justify-content-between">
                                        <div class="logo-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/logo/2.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="image-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/user/2.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="icon-box">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_514)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_514" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_515)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_515" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p class="quote">“Taylor is a professional Designer he really helps my business by
                                        providing
                                        value to my business.</p>
                                    <h4 class="name">Tim Bailey</h4>
                                    <span class="designation">SEO Specialist, Theme Junction</span>
                                </div>
                                <div class="testimonial-item">
                                    <div class="top-area d-flex flex-wrap justify-content-between">
                                        <div class="logo-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/logo/1.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="image-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/user/1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="icon-box">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_512)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_512" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_513)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_513" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p class="quote">“Taylor is a professional Designer he really helps my business by
                                        providing
                                        value to my business.</p>
                                    <h4 class="name">Brandon Fraser</h4>
                                    <span class="designation">Senior Software Dev, Cosmic Sport</span>
                                </div>
                                <div class="testimonial-item">
                                    <div class="top-area d-flex flex-wrap justify-content-between">
                                        <div class="logo-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/logo/2.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="image-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/user/2.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="icon-box">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_514)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_514" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_515)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_515" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p class="quote">“Taylor is a professional Designer he really helps my business by
                                        providing
                                        value to my business.</p>
                                    <h4 class="name">Tim Bailey</h4>
                                    <span class="designation">SEO Specialist, Theme Junction</span>
                                </div>
                                <div class="testimonial-item">
                                    <div class="top-area d-flex flex-wrap justify-content-between">
                                        <div class="logo-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/logo/1.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="image-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/user/1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="icon-box">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_512)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_512" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_513)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_513" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p class="quote">“Taylor is a professional Designer he really helps my business by
                                        providing
                                        value to my business.</p>
                                    <h4 class="name">Brandon Fraser</h4>
                                    <span class="designation">Senior Software Dev, Cosmic Sport</span>
                                </div>
                                <div class="testimonial-item">
                                    <div class="top-area d-flex flex-wrap justify-content-between">
                                        <div class="logo-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/logo/2.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="image-box">
                                            <img src="{{ asset('frontend/assets/img/testimonials/user/2.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="icon-box">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_514)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_514" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                fill="url(#paint0_linear_263_515)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_263_515" x1="-0.0363755"
                                                    y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                    <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p class="quote">“Taylor is a professional Designer he really helps my business by
                                        providing
                                        value to my business.</p>
                                    <h4 class="name">Tim Bailey</h4>
                                    <span class="designation">SEO Specialist, Theme Junction</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- TESTIMONIAL SECTION END -->

        <!-- BLOG SECTION STAR -->
        @include('frontend.pages.home.recentBlogs')
        <!-- BLOG SECTION END -->
        
        <!-- CONTACT SECTION START -->
        @include('frontend.pages.home.contact')
        <!-- CONTACT SECTION END -->


    </main>

    <!-- FOOTER AREA START -->
    @include('frontend.partials.footer')
    <!-- FOOTER AREA END -->

    <!-- CSS here -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/backToTop.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/smooth-scroll.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/appear.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/one-page-nav.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/validate.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
