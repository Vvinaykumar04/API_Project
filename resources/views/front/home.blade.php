@extends('layouts.Front.frontlayout')  
@section('content')  
<div class="banner-section" style="background-image: url('{{ asset("assets/front/images/Group\ 177.jpg") }}');  ">
        <div class="container-fluid">
            <div class="ctnt">
                <span class="title">Find Your Next Great Event:</span>
                <h1 class="subtittle">Explore and Book Tickets</h1>

                <a href="#" class="btn">Find You Next Event</a>
            </div>
        </div>
    </div>

    <!-- END HERO SECTION -->
    <!-- START CARD SECTION -->
    <section class="card_container">
        <div class="container">
            <div class="card-container">
                <div class="card" style="background-image: url('{{ asset("assets/front/images/Entertainment.png") }}');">
                    <div class="card-content">
                        <h3 class="card_tittle">Entertainment</span><span class="card_icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                    class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                </svg></span>
                    </div>
                </div>
                <div class="card" style="background-image: url('{{ asset("assets/front/images/Community.png") }}');">
                    <div class="card-content">
                        <h3 class="card_tittle">Community</h3><span class="card_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                            </svg></span>
                    </div>
                </div>
                <div class="card" style="background-image: url('{{ asset("assets/front/images/Social.png") }}');">
                    <div class="card-content">
                        <h3 class="card_tittle">Social</h3><span class="card_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                            </svg></span>
                    </div>
                </div>
                <div class="card" style="background-image: url('{{ asset("assets/front/images/Social.png") }}');">
                    <div class="card-content">
                        <h3 class="card_tittle">Fundraising</h3><span class="card_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                            </svg></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CARD SECTION -->
    <!-- ABOUT SECTION -->
    <section class="about_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-4">
                    <div class=" about_ctnt"></div>
                    <h1 class="title">About Us</h1>
                    <p class="content">Pulse is an industry-acclaimed video production company in Dubai, Abu Dhabi, and
                        UAE. that works with agencies, government departments, and brands to create videos designed to
                        inspire and connect with the audience through clear storytelling.<br><br> With years of
                        experience in the business, we understand what our clients need – from professional video
                        content to personal branding and digital marketing. Pulse provides production services to a wide
                        variety of industries, including hospitality, restaurants, schools, retail brands, education,
                        real estate, banking, and automobiles.</p>
                    <a href="" class="Read_btn">Read More</a>
                </div>
                <div class="bg_image" style="background-image: url('{{ asset("assets/front/images/About-Us.png") }}');"></div>
            </div>
        </div>

    </section>

    <!--  END ABOUT SECTION -->
    <!-- start blog section -->
    <div class="Blog_section_1">
        <div class="blog-heading">
            <h1>Latest Blog</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <article class="card1">
                        <img src="{{ asset('assets/front/images/Unforgettable DJ Sets.png') }}" alt="exposed brick wall in a hipster cafe">
                        <h3>Unforgettable DJ Sets</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias.</p>
                        <a href="" class="Read_btn">Read More</a>

                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="card1">
                        <img src="{{ asset('assets/front/images/Catch the Rhythm of Hot Club Nights.png') }}"
                            alt="exposed brick wall in a hipster cafe">
                        <h3>Catch the Rhythm of Hot Club Nights</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias.</p>
                        <a href="" class="Read_btn">Read More</a>

                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="card1">
                        <img src="{{ asset('assets/front/images/We Throw the Most Fabulous Events.png') }}"
                            alt="exposed brick wall in a hipster cafe">
                        <h3>We Throw the Most Fabulous Events</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias.</p>
                        <a href="" class="Read_btn">Read More</a>
                    </article>
                </div>
            </div>
        </div>
        <!-- End blog section -->

        <!-- start Frequently Asked Questions -->
        <section class="faq_section">
            <div class="faq_section_heading">
                <h1>Frequently Asked Questions</h1>
            </div>

            <div class="container">

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is the date and location of the Sunburn music concert?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                    minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis
                                    dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                                    necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
                                    recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is the date and location of the Sunburn music concert?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                    minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis
                                    dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                                    necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
                                    recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is the date and location of the Sunburn music concert?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                    minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis
                                    dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                                    necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
                                    recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section">
            <div class=" container newslatter_ctnt"
                style="background-image: url('{{ asset("assets/front/images/Newslatter.png") }}'); width: 100%; height:450px; background-size: cover; background-repeat: no-repeat; background-position: center; ">
                <h1>Join Our Community</h1>
                <p class="content">Become Part of Our Harmonious Community and Receive Exclusive Updates, Special
                    Offers,<br> and Exciting News about the Festival Straight to Your Inbox.</p>
                <div class="newsletter">
                    <form method="post" action="submit_email.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter your email address">
                            <input type="button" value="Submit" class="btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Join Our Community Section -->
        <!-- Start Footer -->
@stop  