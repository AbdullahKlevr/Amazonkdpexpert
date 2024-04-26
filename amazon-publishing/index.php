<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description"
        content="Achieve your publishing dreams effortlessly with <?php echo $brand;?> - your ultimate destination for publishing books and ebooks.">
    <title>Online Publishing Book & Ebook Company - <?php echo $brand;?></title>
    <?php include("includes/style.php"); ?>
</head>

<body>

    <div class="mainBanner">
        <?php include("includes/header.php"); ?>


        <div class="container">
            <div class="banner-content">
                <div class="row  align-items-center">
                    <div class="col-lg-6">
                        <h1 class="banner-heading">
                            Great stories <br>
                            are our passion.
                        </h1>
                    </div>
                    <div class="col-lg-6">
                        <div class="ban-img">
                            <img src="amazon-publishing/assets/images/banner/ban.webp" alt="">
                        </div>
                    </div>
                </div>
                <form class="ban-form" action="/leads/" method="POST">
                    <div class="row g-0">
                        <div class="col-lg-3">
                            <input type="text" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" name="email" placeholder="Email" required>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" name="phone" placeholder="Phone" required>
                        </div>
                        <div class="col-lg-3">
                            <button type="submit">Get a Free Quote</button>
                        </div>
                    </div>
                    <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brief" value="">
<input type="hidden" name="brand" value="AMAZONKDPEXPERT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (amazonkdpexpert.com)">
                </form>
            </div>
        </div>
    </div>

    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-heading center">
                        <h2>Our Six-Step Book Writing Process</h2>
                        <p>
                            Here's an overview of our six-step approach to help you bring your literary vision to life.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="number-card bb-1">
                        <span>01</span>
                        <h3>Initial Consultation</h3>
                        <p>
                            We begin by scheduling an initial consultation to discuss your book idea, goals, and vision.
                            Our team takes the time to understand your unique voice and style, ensuring that your book
                            stays true to your vision throughout the writing process.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="number-card bb-1 b-l-r">
                        <span>02</span>
                        <h3>Planning and Outlining</h3>
                        <p>
                            Once we have a clear understanding of your objectives, we work closely with you to develop a
                            detailed outline for your book. This serves as a roadmap for the writing process, ensuring
                            that we capture all essential elements of your story.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="number-card bb-1">
                        <span>03</span>
                        <h3>Writing and Collaboration</h3>
                        <p>
                            With the outline in hand, our experienced writers get to work crafting your manuscript. We
                            maintain open lines of communication throughout process, providing regular updates and
                            seeking your feedback to ensure that the story is according to your vision.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="number-card ">
                        <span>04</span>
                        <h3>Editing and Revision</h3>
                        <p>
                            After completing the first draft, our team conducts a thorough round of editing and
                            revision. We focus on refining the narrative, enhancing character development, and polishing
                            prose to ensure that your book is of the highest quality.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="number-card b-l-r">
                        <span>05</span>
                        <h3>Publication and Distribution </h3>
                        <p>
                            Once the manuscript is finalized, we will assist you in navigating the publication and
                            distribution process. We can help you publish on platforms like Amazon Kindle, Apple Books,
                            and Barnes & Noble, and many others to get you recognized.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="number-card ">
                        <span>06</span>
                        <h3>Marketing and Promotion</h3>
                        <p>
                            Our support doesn't end with publication—we help you promote your book and reach your target
                            audience. From developing marketing strategies to organizing online book launch events, we
                            provide support to maximize your book's visibility and sales potential.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-heading center white">
                        <h2>The Work We’ve Done </h2>
                        <p>
                            Get a glimpse of our portfolio, which undoubtedly sets us apart from the rest and makes us
                            your best choice for publishing services.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="portfolio-slider ">
                        <img src="amazon-publishing/assets/images/portfolio/1.webp" alt="" loading="lazy" width="100px" height="100px">
                        <img src="amazon-publishing/assets/images/portfolio/2.webp" alt="" loading="lazy" width="100px" height="100px">
                        <img src="amazon-publishing/assets/images/portfolio/3.webp" alt="" loading="lazy" width="100px" height="100px">
                        <img src="amazon-publishing/assets/images/portfolio/4.webp" alt="" loading="lazy" width="100px" height="100px">
                        <img src="amazon-publishing/assets/images/portfolio/5.webp" alt="" loading="lazy" width="100px" height="100px">
                        <img src="amazon-publishing/assets/images/portfolio/6.webp" alt="" loading="lazy" width="100px" height="100px">
                        <img src="amazon-publishing/assets/images/portfolio/7.webp" alt="" loading="lazy" width="100px" height="100px">
                        <img src="amazon-publishing/assets/images/portfolio/8.webp" alt="" loading="lazy" width="100px" height="100px">
                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="btn-wrap justify-content-center">
                        <a href="javascript:;" class="theme-btn " onclick="setButtonURL();">Live Chat</a>
                        <a href="javascript:;" class="theme-btn bordered white"><i class="fa fa-phone"></i>
                            <?php echo $phone;?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-heading center">

                        <h2>Our Publishing Packages</h2>

                    </div>
                </div>
                <div class="col-lg-12">
                    <ul class="pkg-list">
                        <li>
                            <div class="pckg">
                                <div class="upper">
                                    <h3 class="title">Novice </h3>
                                    <div class="price">
                                        <span class="amount">$499</span>
                                        
                                    </div>
                                    <p>Perfect for aspiring authors taking their first steps into publishing.</p>
                                </div>
                                <div class="bottom">
                                    <div class="btn-wrap">
                                        <a href="javascript:;" class="theme-btn w-100 text-center popdynamic">Request A
                                            Quote </a>
                                    </div>
                                    <ul>
                                        <li>Paperback Formatting (Print and E-Book) </li>
                                        <li>Cover Design (E-Book and Full Jacket)</li>
                                        <li>Proofreading and Basic Editing</li>
                                        <li>Upload to 2 Platforms (Amazon KDP and Barnes and Noble) </li>
                                        <li>Dedicated Project Manager</li>
                                        <li>100% Royalties </li>
                                        <li>100% Ownerships </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="pckg">
                                <div class="upper">
                                    <h3 class="title">Experienced </h3>
                                    <div class="price">
                                        <span class="amount">$999</span>
                                        
                                    </div>
                                    <p>Ideal for authors with some publishing experience under their belt.</p>
                                </div>
                                <div class="bottom">
                                    <div class="btn-wrap">
                                        <a href="javascript:;" class="theme-btn w-100 text-center popdynamic">Request A
                                            Quote </a>
                                    </div>
                                    <ul>
                                        <li>Paperback Formatting (Print and E-Book) </li>
                                        <li>Cover Design (E-Book and Full Jacket)</li>
                                        <li>Proofreading and Basic Editing</li>
                                        <li>Upload to 4 Platforms (Amazon KDP, Barnes and Noble, and any 2 others of
                                            your choice)</li>
                                        <li>5 Author Copies</li>
                                        <li>ISBN and BISAC Codes</li>
                                        <li>Metadata Creation</li>
                                        <li>Blurb Edit</li>
                                        <li>Dedicated Project Manager</li>
                                        <li>No Royalties </li>

                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="pckg">
                                <div class="upper">
                                    <h3 class="title">Seasoned</h3>
                                    <div class="price">
                                        <span class="amount">$1499</span>
                                        
                                    </div>
                                    <p>Designed for seasoned authors seeking to expand their reach.</p>
                                </div>
                                <div class="bottom">
                                    <div class="btn-wrap">
                                        <a href="javascript:;" class="theme-btn w-100 text-center popdynamic">Request A
                                            Quote </a>
                                    </div>
                                    <ul>
                                        <li>Copyediting</li>
                                        <li>Cover Design (E-Book and Full Jacket)</li>
                                        <li>Typesetting</li>
                                        <li>Interior Design </li>
                                        <li>Page Layout Services</li>
                                        <li>Proofreading</li>
                                        <li>E-Book and Print Formatting </li>
                                        <li>ISBN And BISAC Codes</li>
                                        <li>Upload on up to 10 Platforms (including Amazon and Barnes and Noble)</li>
                                        <li>Promotional Materials (Bookmarks, Postcards, Business Cards)</li>
                                        <li>Press Release - Web-Optimized Edition</li>
                                        <li>Metadata Creation</li>
                                        <li>Blurb Edit</li>
                                        <li>Marketing Audit (Assessment of Existing Website and Social Media with
                                            Recommendations)</li>
                                        <li>Dedicated Project Manager</li>
                                        <li>No Royalties</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-heading center">
                        <h2>What Our Clients Like About Us</h2>
                        <p>
                            We don’t need to say much. Hear it directly from our clients.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="testi-card">
                        <div class="upper">
                            <div class="client">
                                <img src="amazon-publishing/assets/images/clients/f1.webp" alt="" loading="lazy" width="100px"
                                    height="100px">
                                <div class="det">
                                    <span class="name">Sarah M.</span>
                                    <!-- <span class="des">CEO/Founder</span> -->
                                </div>
                            </div>
                            <p>
                                Working with <?php echo $brand;?> was a game-changer for me. The team guided me through
                                every step of the publishing process with professionalism and expertise. Thanks to their
                                support, I was able to see my book come to life and reach readers around the world.
                            </p>
                        </div>
                        <img src="amazon-publishing/assets/images/trustpilot.webp" alt="" loading="lazy" width="100px" height="100px">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testi-card">
                        <div class="upper">
                            <div class="client">
                                <img src="amazon-publishing/assets/images/clients/m1.webp" alt="" loading="lazy" width="100px"
                                    height="100px">
                                <div class="det">
                                    <span class="name">Michael D.</span>
                                    <!-- <span class="des">CEO/Founder</span> -->
                                </div>
                            </div>
                            <p>
                                I can't recommend <?php echo $brand;?> highly enough for publishing. From editing to
                                cover design, they exceeded my expectations at every turn. I was quite nervous since I
                                was a novice writer, but they really helped me through and through. Fantastic service!
                            </p>
                        </div>
                        <img src="amazon-publishing/assets/images/trustpilot.webp" alt="" loading="lazy" width="100px" height="100px">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testi-card">
                        <div class="upper">
                            <div class="client">
                                <img src="amazon-publishing/assets/images/clients/f2.webp" alt="" loading="lazy" width="100px"
                                    height="100px">
                                <div class="det">
                                    <span class="name">Emily P.</span>
                                    <!-- <span class="des">CEO/Founder</span> -->
                                </div>
                            </div>
                            <p>
                                As a first-time author, I was nervous about the publishing process, but
                                <?php echo $brand;?> made it seamless. Their team was patient, knowledgeable, and
                                incredibly supportive. I'm thrilled with the final result and grateful for their
                                guidance.
                            </p>
                        </div>
                        <img src="amazon-publishing/assets/images/trustpilot.webp" alt="" loading="lazy" width="100px" height="100px">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testi-card">
                        <div class="upper">
                            <div class="client">
                                <img src="amazon-publishing/assets/images/clients/m2.webp" alt="" loading="lazy" width="100px"
                                    height="100px">
                                <div class="det">
                                    <span class="name">John W.</span>
                                    <!-- <span class="des">CEO/Founder</span> -->
                                </div>
                            </div>
                            <p>
                                Choosing <?php echo $brand;?> for my publishing needs was one of the best decisions
                                I've made. Their expertise in their craft is unmatched. Thanks to them, my book reached
                                bestseller status on multiple platforms. I couldn't be happier with the outcome.
                            </p>
                        </div>
                        <img src="amazon-publishing/assets/images/trustpilot.webp" alt="" loading="lazy" width="100px" height="100px">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testi-card">
                        <div class="upper">
                            <div class="client">
                                <img src="amazon-publishing/assets/images/clients/f3.webp" alt="" loading="lazy" width="100px"
                                    height="100px">
                                <div class="det">
                                    <span class="name">Jessica H.</span>
                                    <!-- <span class="des">CEO/Founder</span> -->
                                </div>
                            </div>
                            <p>
                                The team at <?php echo $brand;?> truly cares about their authors' success. They went
                                above and beyond to ensure that my book was of the highest quality and that I was
                                completely satisfied with the end result. I'm grateful for their professionalism and
                                support.
                            </p>
                        </div>
                        <img src="amazon-publishing/assets/images/trustpilot.webp" alt="" loading="lazy" width="100px" height="100px">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testi-card">
                        <div class="upper">
                            <div class="client">
                                <img src="amazon-publishing/assets/images/clients/m3.webp" alt="" loading="lazy" width="100px"
                                    height="100px">
                                <div class="det">
                                    <span class="name">David S.</span>
                                    <!-- <span class="des">CEO/Founder</span> -->
                                </div>
                            </div>
                            <p>
                                Publishing with <?php echo $brand;?> was a collaborative and rewarding experience from
                                start to finish. Their team listened to my ideas and brought them to life in ways I
                                never imagined. I'm proud to be a published author with their help.
                            </p>
                        </div>
                        <img src="amazon-publishing/assets/images/trustpilot.webp" alt="" loading="lazy" width="100px" height="100px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="from_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-7 d-flex align-items-center" >
                    <div class="form_inner">
                        <h2>Eager to Self Publish a book on online platforms?</h2>
                        <p>Amazon kdp Expert company provides an abundance of services that are going to help you every
                            step of the way. Our services include:</p>
                        <ul>
                            <li><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Ghost Book Writing</li>
                            <li><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Editing</li>
                            <li><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Book Publishing</li>
                            <li><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Ebook Writing</li>
                            <li><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Article Writing</li>
                            <li><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Book Video Trailer</li>
                            <li><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Book Cover Design</li>
                            <li><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Author Website</li>
                            <li><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Book Marketing</li>
                            <li><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Custom Book Illustration</li>
                            <li><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Script writing</li>
                            <li><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Book Printing</li>
                        </ul>
                        <span>
                            <p>Need help? </p>
                            <button type="button" class="btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Let's Get Started</button>
                        </span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="bottom_form">
                        <h2>Sign up to AVAIL</h2>
                        <h3>65% Discount</h3>
                        <form action="/leads/" method="POST">
                        <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brief" value="">
<input type="hidden" name="brand" value="AMAZONKDPEXPERT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (amazonkdpexpert.com)">
                            <input type="text" name="name" placeholder="Enter Your Name" required="">
                            <input type="email" name="email" placeholder="Enter Your Email" required="">
                            <input type="number" name="phone" placeholder="Enter Your Phone Number" required="">
                            <textarea name="brief" placeholder="Talk About Your Project"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>




</body>



</html>