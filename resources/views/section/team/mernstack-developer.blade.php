@extends('layouts.app')

@section('title')
    Solutions
@endsection


@section('mainBody')
 <!-- Landing Section Start -->
   <section class="vs-landing-section vs-hiring-landing-section" id="ty_landing">
    <div class="container">
        <div class="vs-landing-content">
            <div class="row justify-content-between ">
                <div class="col col-12 col-md-12 col-lg-6">
                            <div class="vs-landing-content__inner">
        <h1 class="vs-section-title vs-title-border">Hire MERN Stack</h1>
        <h2 class="vs-section-subtitle">Developers</h2>
        <p class="vs-section-description">You are at the right place if you are looking for some
            MERN stack developers to develop your dream project or enterprise application. At
            technoyuga you get to have full stack developers having the right mixture of skill,
            talent and experience at an economical cost with a convenient hiring process.</p>
        <ul class="vs-hire-developer-work-list list-unstyled">
            <li class="vs-hire-developer-work-item">MERN stack Web Development</li>
            <li class="vs-hire-developer-work-item">MERN Stack Mobile App Development From
                Scratch</li>
            <li class="vs-hire-developer-work-item">MERN Stack Software Development</li>
            <li class="vs-hire-developer-work-item">Single Page Application</li>
            <li class="vs-hire-developer-work-item">Progressive Web App Development</li>
            <li class="vs-hire-developer-work-item">Plugin Development</li>
        </ul>
        <div class="vs-landing-btn">
            <a href="#ty_pricing" class="btn btn-primary">Check Our Pricing</a>
        </div>
    </div>

                </div>
                <div class="col col-12 col-md-12 col-lg-5">
                    <div class="vs-landing-form">
                        <h2 class="vs-landing-form-title">Get Free Consultation Now</h2>
                        <p class="vs-landing-form-description">Set up a developer interview and hire within 24
                            hours</p>
                        <div class="vs-landing-form__inner">
                            <form class="row g-3" id="hiring-form">
                                <input type="hidden" name="_token" value="9aVQue8RgjZletjc1R1j854M1YKcXcMJVuCbYooL">                                    <input type="hidden" name="technology" value="MERN Stack" />
                                <div class="col col-12 col-md-12">
                                    <label for="inputFullName" class="form-label">Name *</label>
                                    <div class="vs-input-icon-group ">
                                        <input type="text" class="form-control" id="inputFullName"
                                            placeholder="Enter Your Full Name*" name="name">
                                        <span class="vs-input-icon">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 23.25C6.072 23.25 1.25 18.428 1.25 12.5C1.25 6.572 6.072 1.75 12 1.75C17.928 1.75 22.75 6.572 22.75 12.5C22.75 18.428 17.928 23.25 12 23.25ZM12 3.25C6.899 3.25 2.75 7.399 2.75 12.5C2.75 17.601 6.899 21.75 12 21.75C17.101 21.75 21.25 17.601 21.25 12.5C21.25 7.399 17.101 3.25 12 3.25ZM13.02 16C13.02 15.448 12.573 15 12.02 15H12.01C11.458 15 11.0149 15.448 11.0149 16C11.0149 16.552 11.468 17 12.02 17C12.572 17 13.02 16.552 13.02 16ZM12.75 12.571V8C12.75 7.586 12.414 7.25 12 7.25C11.586 7.25 11.25 7.586 11.25 8V12.571C11.25 12.985 11.586 13.321 12 13.321C12.414 13.321 12.75 12.985 12.75 12.571Z"
                                                    fill="#EB3636" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-12">
                                    <label for="inputEmail" class="form-label">Email address *</label>
                                    <div class="vs-input-icon-group ">
                                        <input type="email" class="form-control" id="inputEmail" name="email"
                                            placeholder="Enter Your Email Address*">
                                        <span class="vs-input-icon">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 23.25C6.072 23.25 1.25 18.428 1.25 12.5C1.25 6.572 6.072 1.75 12 1.75C17.928 1.75 22.75 6.572 22.75 12.5C22.75 18.428 17.928 23.25 12 23.25ZM12 3.25C6.899 3.25 2.75 7.399 2.75 12.5C2.75 17.601 6.899 21.75 12 21.75C17.101 21.75 21.25 17.601 21.25 12.5C21.25 7.399 17.101 3.25 12 3.25ZM13.02 16C13.02 15.448 12.573 15 12.02 15H12.01C11.458 15 11.0149 15.448 11.0149 16C11.0149 16.552 11.468 17 12.02 17C12.572 17 13.02 16.552 13.02 16ZM12.75 12.571V8C12.75 7.586 12.414 7.25 12 7.25C11.586 7.25 11.25 7.586 11.25 8V12.571C11.25 12.985 11.586 13.321 12 13.321C12.414 13.321 12.75 12.985 12.75 12.571Z"
                                                    fill="#EB3636" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-12">
                                    <label for="inputEmail" class="form-label">Phone number</label>
                                    <div class="vs-input-icon-group ">
                                        <div class="vs-country-select">
                                            <select class="form-control" id="countries2" name="country_code">

                                            </select>
                                            <input type="text" class="form-control" id="inputPhoneNumber"
                                                placeholder="Enter Your Phone Number"  name="phone_no">
                                        </div>
                                        <span class="vs-input-icon">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 23.25C6.072 23.25 1.25 18.428 1.25 12.5C1.25 6.572 6.072 1.75 12 1.75C17.928 1.75 22.75 6.572 22.75 12.5C22.75 18.428 17.928 23.25 12 23.25ZM12 3.25C6.899 3.25 2.75 7.399 2.75 12.5C2.75 17.601 6.899 21.75 12 21.75C17.101 21.75 21.25 17.601 21.25 12.5C21.25 7.399 17.101 3.25 12 3.25ZM13.02 16C13.02 15.448 12.573 15 12.02 15H12.01C11.458 15 11.0149 15.448 11.0149 16C11.0149 16.552 11.468 17 12.02 17C12.572 17 13.02 16.552 13.02 16ZM12.75 12.571V8C12.75 7.586 12.414 7.25 12 7.25C11.586 7.25 11.25 7.586 11.25 8V12.571C11.25 12.985 11.586 13.321 12 13.321C12.414 13.321 12.75 12.985 12.75 12.571Z"
                                                    fill="#EB3636" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-12">
                                    <label for="inputRequirement" class="form-label">Brief about the project
                                        *</label>
                                    <div class="vs-input-icon-group ">
                                        <textarea id="inputRequirement" rows="5" class="form-control" name="project_description"
                                        placeholder="Please brief your requirements in detail. The more we know about your project  idea, the better we can guide and assist you.*"></textarea>
                                        <span class="vs-input-icon">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 23.25C6.072 23.25 1.25 18.428 1.25 12.5C1.25 6.572 6.072 1.75 12 1.75C17.928 1.75 22.75 6.572 22.75 12.5C22.75 18.428 17.928 23.25 12 23.25ZM12 3.25C6.899 3.25 2.75 7.399 2.75 12.5C2.75 17.601 6.899 21.75 12 21.75C17.101 21.75 21.25 17.601 21.25 12.5C21.25 7.399 17.101 3.25 12 3.25ZM13.02 16C13.02 15.448 12.573 15 12.02 15H12.01C11.458 15 11.0149 15.448 11.0149 16C11.0149 16.552 11.468 17 12.02 17C12.572 17 13.02 16.552 13.02 16ZM12.75 12.571V8C12.75 7.586 12.414 7.25 12 7.25C11.586 7.25 11.25 7.586 11.25 8V12.571C11.25 12.985 11.586 13.321 12 13.321C12.414 13.321 12.75 12.985 12.75 12.571Z"
                                                    fill="#EB3636" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-light button--loading">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->




<!-- Transparency Section Start -->
<section class="vs-transparency-section vs-section-spacer pb-0">
<div class="container">
    <div class="vs-heading-center">
        <h2 class="vs-section-title vs-title-border">Our Partners</h2>
        <p class="vs-section-description">Companies we've worked with</p>
    </div>
    <div class="vs-landing-partner">
        <div class="vs-landing-partner-slider">
            <div class="vs-landing-partner-item">
                <img src="{{asset('web-assets/images/decathlon-logo.svg')}}" alt="Partner Logo" class="img-fluid" style="height:20px">
            </div>
            <div class="vs-landing-partner-item">
                <img src="{{asset('web-assets/images/gfacility-logo.svg')}}" alt="Partner Logo" class="img-fluid" style="height:30px">
            </div>
            <div class="vs-landing-partner-item">
                <img src="{{asset('web-assets/images/akasha-logo.svg')}}" alt="Partner Logo" class="img-fluid" style="height:30px">
            </div>
            <div class="vs-landing-partner-item">
                <img src="{{asset('web-assets/images/mfine-logo.svg')}}" alt="Partner Logo" class="img-fluid" style="height:30px">
            </div>
            <div class="vs-landing-partner-item">
                <img src="{{asset('web-assets/images/tengopay.svg')}}" alt="Partner Logo" class="img-fluid" style="height:35px">
            </div>
            <div class="vs-landing-partner-item">
                <img src="{{asset('web-assets/images/justlife-logo.svg')}}" alt="Partner Logo" class="img-fluid" style="height:30px">
            </div>
            <div class="vs-landing-partner-item">
                <img src="{{asset('web-assets/images/eu-logo.png')}}" alt="Partner Logo" class="img-fluid" style="height:60px">
            </div>

        </div>
    </div>
</div>
</section>
<!-- Transparency Section End -->
<!-- Services Section Start -->
    <section class="vs-service-section vs-section-spacer bg-transparent vs-innner-page-services-section">
        <div class="vs-service-particles">
            <img src="{{asset('web-assets/images/service-particle-img.svg')}}" alt="service particle" class="img-fluid">
        </div>
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Top Expertise of Our MERN Stack Developers
</h2>
                <p class="vs-section-description">At TechnoYuga, our MERN stack developers are proficient in using a specific set of technologies to build web applications. MERN stands for MongoDB, Express.js, React, and Node.js. Here are the key areas of expertise you can expect when you hire MERN stack developers from us.</p>
            </div>
            <div class="vs-service-content mb-0">
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-service-card">
                            <a href="#" class="vs-service-card-link">
                                <h3 class="vs-service-card-title">MongoDB</h3>
                                <div class="vs-service-card-logo-list">
                                    <div class="vs-service-card-logo-item">
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.5 6V12H27.5V6H30.5105C31.3325 6 32 6.6675 32 7.4895V31.5105C31.9996 31.9054 31.8425 32.284 31.5633 32.5633C31.284 32.8425 30.9054 32.9996 30.5105 33H6.4895C6.09446 33 5.7156 32.8431 5.43626 32.5637C5.15693 32.2844 5 31.9055 5 31.5105V7.4895C5 6.6675 5.6675 6 6.4895 6H9.5ZM14 25.5H11V28.5H14V25.5ZM14 21H11V24H14V21ZM14 16.5H11V19.5H14V16.5ZM24.5 3V9H12.5V3H24.5Z"
                                                fill="#003262" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="vs-service-card-description">Our MERN stack developers are skilled in working with MongoDB, a NoSQL database, to store and manage data for web apps. They can also design database schemas and optimize database performance.
</p>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-service-card">
                            <a href="#" class="vs-service-card-link">
                                <h3 class="vs-service-card-title">Express.js</h3>
                                <div class="vs-service-card-logo-list">
                                    <div class="vs-service-card-logo-item">
                                        <svg width="37" height="36" viewBox="0 0 37 36" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M32.566 8.28673L19.1969 0.269179L19.1776 0.258679L19.2934 0.191179H19.0469C18.768 0.0551993 18.4605 -0.00999796 18.151 0.00124184C17.8415 0.0124816 17.5394 0.0998191 17.2709 0.255679L16.2329 0.860183L3.45631 8.29123C3.16579 8.46014 2.92443 8.70337 2.75655 8.99646C2.58867 9.28954 2.50018 9.62213 2.5 9.96074V26.0378C2.5 26.7278 2.86382 27.3638 3.45631 27.7073L17.2724 35.7429C17.8693 36.0909 18.6059 36.0849 19.1984 35.7294L32.566 27.7118C33.1451 27.3653 33.5 26.7353 33.5 26.0543V9.94274C33.5 9.26323 33.1451 8.63323 32.566 8.28673ZM3.93299 9.12523L17.7669 1.07918C17.9123 0.999049 18.0758 0.958566 18.2414 0.961722C18.4071 0.964878 18.569 1.01157 18.7113 1.09718L32.0789 9.11473C32.2031 9.19106 32.3083 9.29525 32.3863 9.41923L25.6401 13.2518L18.9608 9.20173C18.7443 9.07035 18.4973 8.9992 18.2449 8.99551C17.9924 8.99182 17.7434 9.05573 17.5233 9.18073L10.3228 13.2728L3.5766 9.49423C3.66011 9.34089 3.78329 9.21335 3.93299 9.12523ZM24.9155 21.5648L18.2391 17.8268V9.96224C18.3203 9.9645 18.3995 9.98774 18.4692 10.0297L24.9155 13.9373V21.5648ZM17.8426 18.7058L24.81 22.6073L18.2302 26.5958L11.3281 22.6733C11.2578 22.633 11.199 22.5752 11.1573 22.5053L17.8426 18.7058ZM17.7476 34.9089L3.9315 26.8733C3.78618 26.7888 3.66547 26.667 3.58153 26.5203C3.49759 26.3737 3.45338 26.2072 3.45334 26.0378V10.5277L10.1297 14.2658V22.2518C10.1297 22.7738 10.4089 23.2553 10.8588 23.5118L18.003 27.5708L18.2361 27.7028V35.0334C18.0651 35.0373 17.8963 34.9942 17.7476 34.9089Z"
                                                fill="#003262" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="vs-service-card-description">Express.js is a popular web application framework for Node.js. TechnoYuga MERN developers are proficient in building server-side components of web applications using Express.
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-service-card">
                            <a href="#" class="vs-service-card-link">
                                <h3 class="vs-service-card-title">React</h3>
                                <div class="vs-service-card-logo-list">
                                    <div class="vs-service-card-logo-item">
                                        <svg width="36" height="37" viewBox="0 0 36 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M31.5613 10.5629C32.1462 9.97799 32.1462 9.00312 31.5613 8.4482L28.0518 4.93869C27.4969 4.35377 26.522 4.35377 25.9371 4.93869L23.1775 7.68331L28.8017 13.3075M5 25.8758V31.5H10.6242L27.2119 14.8973L21.5877 9.27309L5 25.8758Z"
                                                fill="#003262" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="vs-service-card-description">React is a JavaScript library for building user interfaces. Our MERN developers have expertise in creating interactive and dynamic front-end components and user interfaces using React.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-service-card">
                            <a href="#" class="vs-service-card-link">
                                <h3 class="vs-service-card-title">Node.js</h3>
                                <div class="vs-service-card-logo-list">
                                    <div class="vs-service-card-logo-item">
                                        <svg width="36" height="37" viewBox="0 0 36 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.196 5.696C3 7.895 3 11.429 3 18.5C3 25.571 3 29.1065 5.196 31.3025C7.395 33.5 10.929 33.5 18 33.5C25.071 33.5 28.6065 33.5 30.8025 31.3025C33 29.108 33 25.571 33 18.5C33 11.429 33 7.8935 30.8025 5.696C28.608 3.5 25.071 3.5 18 3.5C10.929 3.5 7.3935 3.5 5.196 5.696ZM15.816 11.7755C15.9178 11.6684 15.9976 11.5424 16.0507 11.4045C16.1038 11.2666 16.1293 11.1196 16.1256 10.9719C16.1219 10.8242 16.0891 10.6786 16.0292 10.5436C15.9693 10.4085 15.8833 10.2866 15.7762 10.1848C15.6692 10.0829 15.5431 10.0032 15.4052 9.95004C15.2674 9.89692 15.1204 9.87148 14.9726 9.87517C14.8249 9.87886 14.6794 9.91161 14.5443 9.97155C14.4093 10.0315 14.2873 10.1174 14.1855 10.2245L10.7145 13.8695L9.8145 12.9245C9.71376 12.8132 9.59176 12.7231 9.45568 12.6597C9.31961 12.5963 9.17221 12.5607 9.02217 12.5551C8.87214 12.5495 8.7225 12.574 8.58208 12.6272C8.44167 12.6803 8.31331 12.761 8.20457 12.8646C8.09583 12.9681 8.00892 13.0923 7.94895 13.23C7.88899 13.3676 7.85718 13.5159 7.8554 13.666C7.85362 13.8161 7.88191 13.9651 7.93861 14.1041C7.9953 14.2432 8.07925 14.3694 8.1855 14.4755L9.9 16.2755C10.0051 16.3858 10.1314 16.4736 10.2714 16.5336C10.4115 16.5935 10.5622 16.6245 10.7145 16.6245C10.8668 16.6245 11.0175 16.5935 11.1576 16.5336C11.2976 16.4736 11.4239 16.3858 11.529 16.2755L15.816 11.7755ZM19.5 12.875C19.2016 12.875 18.9155 12.9935 18.7045 13.2045C18.4935 13.4155 18.375 13.7016 18.375 14C18.375 14.2984 18.4935 14.5845 18.7045 14.7955C18.9155 15.0065 19.2016 15.125 19.5 15.125H27C27.2984 15.125 27.5845 15.0065 27.7955 14.7955C28.0065 14.5845 28.125 14.2984 28.125 14C28.125 13.7016 28.0065 13.4155 27.7955 13.2045C27.5845 12.9935 27.2984 12.875 27 12.875H19.5ZM15.8145 22.2755C15.9208 22.1694 16.0047 22.0432 16.0614 21.9041C16.1181 21.7651 16.1464 21.6161 16.1446 21.466C16.1428 21.3159 16.111 21.1676 16.051 21.03C15.9911 20.8923 15.9042 20.7681 15.7954 20.6646C15.6867 20.561 15.5583 20.4803 15.4179 20.4272C15.2775 20.374 15.1279 20.3495 14.9778 20.3551C14.8278 20.3607 14.6804 20.3963 14.5443 20.4597C14.4082 20.5231 14.2862 20.6132 14.1855 20.7245L10.7145 24.3695L9.8145 23.4245C9.71376 23.3132 9.59176 23.2231 9.45568 23.1597C9.31961 23.0963 9.17221 23.0607 9.02217 23.0551C8.87214 23.0495 8.7225 23.074 8.58208 23.1272C8.44167 23.1803 8.31331 23.261 8.20457 23.3646C8.09583 23.4681 8.00892 23.5923 7.94895 23.73C7.88899 23.8676 7.85718 24.0159 7.8554 24.166C7.85362 24.3161 7.88191 24.4651 7.93861 24.6041C7.9953 24.7432 8.07925 24.8694 8.1855 24.9755L9.9 26.7755C10.0051 26.8858 10.1314 26.9736 10.2714 27.0336C10.4115 27.0935 10.5622 27.1245 10.7145 27.1245C10.8668 27.1245 11.0175 27.0935 11.1576 27.0336C11.2976 26.9736 11.4239 26.8858 11.529 26.7755L15.8145 22.2755ZM19.5 23.375C19.2016 23.375 18.9155 23.4935 18.7045 23.7045C18.4935 23.9155 18.375 24.2016 18.375 24.5C18.375 24.7984 18.4935 25.0845 18.7045 25.2955C18.9155 25.5065 19.2016 25.625 19.5 25.625H27C27.2984 25.625 27.5845 25.5065 27.7955 25.2955C28.0065 25.0845 28.125 24.7984 28.125 24.5C28.125 24.2016 28.0065 23.9155 27.7955 23.7045C27.5845 23.4935 27.2984 23.375 27 23.375H19.5Z"
                                                fill="#003262" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="vs-service-card-description">TechnoYuga’s MERN developers are experienced in server-side JavaScript development using Node.js. They can build the server and integrate it with the client-side components.

</p>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-service-card">
                            <a href="#" class="vs-service-card-link">
                                <h3 class="vs-service-card-title">HTML/CSS</h3>
                                <div class="vs-service-card-logo-list">
                                    <div class="vs-service-card-logo-item">
                                        <svg width="36" height="37" viewBox="0 0 36 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M31.5613 10.5629C32.1462 9.97799 32.1462 9.00312 31.5613 8.4482L28.0518 4.93869C27.4969 4.35377 26.522 4.35377 25.9371 4.93869L23.1775 7.68331L28.8017 13.3075M5 25.8758V31.5H10.6242L27.2119 14.8973L21.5877 9.27309L5 25.8758Z"
                                                fill="#003262" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="vs-service-card-description">Our dedicated MERN stack developers have a good grasp of HTML and CSS to structure and style web pages. They can create responsive and appealing user interfaces by using HTML/CSS.
</p>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-service-card">
                            <a href="#" class="vs-service-card-link">
                                <h3 class="vs-service-card-title">JavaScript
</h3>
                                <div class="vs-service-card-logo-list">
                                    <div class="vs-service-card-logo-item">
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.5 6V12H27.5V6H30.5105C31.3325 6 32 6.6675 32 7.4895V31.5105C31.9996 31.9054 31.8425 32.284 31.5633 32.5633C31.284 32.8425 30.9054 32.9996 30.5105 33H6.4895C6.09446 33 5.7156 32.8431 5.43626 32.5637C5.15693 32.2844 5 31.9055 5 31.5105V7.4895C5 6.6675 5.6675 6 6.4895 6H9.5ZM14 25.5H11V28.5H14V25.5ZM14 21H11V24H14V21ZM14 16.5H11V19.5H14V16.5ZM24.5 3V9H12.5V3H24.5Z"
                                                fill="#003262" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="vs-service-card-description">Proficiency in JavaScript is fundamental for MERN developers. They are well-versed in modern JavaScript features and best practices for both client and server-side development.
</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

<!-- What We Do Section Start -->
    <section class="vs-what-do-section vs-section-spacer vs-section-background">
        <div class="vs-what-do-particles">
            <img src="{{asset('web-assets/images/what-do-top-particles.png')}}" alt="What We Particle" class="img-fluid">
        </div>
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">What We Do Best</h2>
                <h4 class="vs-section-subtitle">We Provide Outsourced IT Services For All Business </h4>
                <p class="vs-section-description">At <a href="https://technoyuga.com">TechnoYuga</a> we truly believe in the power of domain expertise.
                    By choosing a partner with experience in an industry, the product is better, while timelines and
                    cost are kept low. We are experts in:</p>
            </div>
            <div class="vs-what-do-content">
                <div class="vs-what-do-card-list">
                    <div class="vs-what-do-card-item">
                        <div class="vs-what-do-card">
                            <div class="vs-what-do-card-img">
                                <img src="{{asset('web-assets/images/ecomm.jpg')}}" alt="E-COMMERCE" class="img-fluid">
                            </div>
                            <div class="vs-what-do-card-body">
                                <h5 class="vs-what-do-card-title">E-COMMERCE</h5>
                            </div>
                        </div>
                    </div>
                    <div class="vs-what-do-card-item">
                        <a href="/solution/on-demand-app-development">
                            <div class="vs-what-do-card">
                                <div class="vs-what-do-card-img">
                                    <img src="{{asset('web-assets/images/on-demand.jpg')}}" alt="ON DEMAND" class="img-fluid">
                                </div>
                                <div class="vs-what-do-card-body">
                                    <h5 class="vs-what-do-card-title">ON DEMAND <br />SOLUTIONS</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vs-what-do-card-item">
                        <div class="vs-what-do-card">
                            <div class="vs-what-do-card-img">
                                <img src="{{asset('web-assets/images/social.jpg')}}" alt="SOCIAL NETWORKING" class="img-fluid">
                            </div>
                            <div class="vs-what-do-card-body">
                                <h5 class="vs-what-do-card-title">SOCIAL <br />NETWORKING</h5>
                            </div>
                        </div>
                    </div>
                    <div class="vs-what-do-card-item">
                        <a href="/solution/healthcare-app-development">
                            <div class="vs-what-do-card">
                                <div class="vs-what-do-card-img">
                                    <img src="{{asset('web-assets/images/health.jpg')}}" alt="HEALTHCARE" class="img-fluid">
                                </div>
                                <div class="vs-what-do-card-body">
                                    <h5 class="vs-what-do-card-title">HEALTHCARE</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vs-what-do-card-item">
                        <div class="vs-what-do-card">
                            <div class="vs-what-do-card-img">
                                <img src="{{asset('web-assets/images/emerging.jpg')}}" alt="EMERGING TECH" class="img-fluid">
                            </div>
                            <div class="vs-what-do-card-body">
                                <h5 class="vs-what-do-card-title">EMERGING <br />TECH</h5>
                            </div>
                        </div>
                    </div>
                    <div class="vs-what-do-card-item">
                        <div class="vs-what-do-card">
                            <div class="vs-what-do-card-img">
                                <img src="{{asset('web-assets/images/tour.jpg')}}" alt="TOURS AND TRAVEL" class="img-fluid">
                            </div>
                            <div class="vs-what-do-card-body">
                                <h5 class="vs-what-do-card-title">TOURS AND TRAVEL</h5>
                            </div>
                        </div>
                    </div>
                    <div class="vs-what-do-card-item">
                        <a href="/solution/transport-app-development">
                            <div class="vs-what-do-card">
                                <div class="vs-what-do-card-img">
                                    <img src="{{asset('web-assets/images/trans.jpg')}}" alt="TRANSPORT AND LOGISTICS" class="img-fluid">
                                </div>
                                <div class="vs-what-do-card-body">
                                    <h5 class="vs-what-do-card-title">TRANSPORT AND LOGISTICS</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vs-what-do-card-item">
                        <a href="/solution/fintech-app-development">
                            <div class="vs-what-do-card">
                                <div class="vs-what-do-card-img">
                                    <img src="{{asset('web-assets/images/fintech.jpg')}}" alt="FINTECH" class="img-fluid">
                                </div>
                                <div class="vs-what-do-card-body">
                                    <h5 class="vs-what-do-card-title">FINTECH</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vs-what-do-card-item">
                        <div class="vs-what-do-card">
                            <div class="vs-what-do-card-img">
                                <img src="{{asset('web-assets/images/education.jpg')}}" alt="EDUCATION" class="img-fluid">
                            </div>
                            <div class="vs-what-do-card-body">
                                <h5 class="vs-what-do-card-title">EDUCATION</h5>
                            </div>
                        </div>
                    </div>
                    <div class="vs-what-do-card-item">
                        <a href="/solution/fitness-app-development">
                            <div class="vs-what-do-card">
                                <div class="vs-what-do-card-img">
                                    <img src="{{asset('web-assets/images/wellness.jpg')}}" alt="WELLNESS AND FITNESS" class="img-fluid">
                                </div>
                                <div class="vs-what-do-card-body">
                                    <h5 class="vs-what-do-card-title">WELLNESS <br />AND <br />FITNESS</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What We Do Section End -->
<!-- Something Everyone Section Start -->
    <section class="vs-something-everyone-section vs-section-spacer">
        <div class="vs-something-particle-top">
            <img src="{{asset('web-assets/images/something-particle-top.svg')}}" alt="something-particle-top" class="img-fluid">
        </div>
        <div class="vs-something-particle-bottom">
            <img src="{{asset('web-assets/images/something-particle-bottom.svg')}}" alt="something-particle-bottom"
                class="img-fluid">
        </div>
        <div class="container">
            <div class="vs-heading-center w-100">
                <h2 class="vs-section-title vs-title-border">Flexible Models to Hire MERN Stack Developers</h2>
                <p class="vs-section-description w-75 m-auto">At TechnoYuga, we completely understand and value the budget of all-scale businesses. Hence, to make sure that every business owner can afford our MERN Stack app development solutions, we have kept very flexible models to hire MERN Stack developers. Here’s a glimpse.
</p>
            </div>
            <div class="vs-everyone-content">
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-everyone-card">
                            <div class="vs-everyone-card-head">
                                <div class="vs-everyone-card-icon">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_5996_33591)">
                                            <path
                                                d="M29.9984 10.3L34.0984 7.2V0H29.9984L27.8984 2.1L25.8984 0H19.6984L17.5984 2.1L15.4984 0H11.3984V7.2L15.4984 10.3H29.9984Z"
                                                fill="#E6E6E6" />
                                            <path
                                                d="M38.6 22.8C36.1 19.5 32.7 17 28.8 15.5H16.7C6.4 19.2 0 31.7 0 42.4C0 54.9 10.2 60 22.8 60C25.6 60 28.3 59.7 31 59.2V22.8H38.6Z"
                                                fill="#E6E6E6" />
                                            <path d="M30 10.3008H15.5V15.5008H30V10.3008Z" fill="#2996BF" />
                                            <path
                                                d="M30 55.8996C17.4 55.8996 7.2 50.7996 7.2 38.2996C7.2 30.2996 10.8 21.1996 17 15.5996H16.6C6.4 19.1996 0 31.6996 0 42.3996C0 54.8996 10.2 59.9996 22.8 59.9996C25.6 59.9996 28.3 59.6996 31 59.1996V55.8996C30.7 55.7996 30.3 55.8996 30 55.8996Z"
                                                fill="#CCCCCC" />
                                            <path
                                                d="M38.1992 22.7988H38.5992C38.4992 22.5988 38.2992 22.4988 38.1992 22.2988V22.7988Z"
                                                fill="#CCCCCC" />
                                            <path
                                                d="M22.7984 50.7004C29.6468 50.7004 35.1984 45.1487 35.1984 38.3004C35.1984 31.4521 29.6468 25.9004 22.7984 25.9004C15.9501 25.9004 10.3984 31.4521 10.3984 38.3004C10.3984 45.1487 15.9501 50.7004 22.7984 50.7004Z"
                                                fill="#FAD87C" />
                                            <path opacity="0.3"
                                                d="M27.0994 46.3C20.2994 46.3 14.6994 40.8 14.6994 33.9C14.6994 31.7 15.2994 29.5 16.3994 27.5C10.4994 31 8.49938 38.6 11.9994 44.5C15.4994 50.4 23.0994 52.4 28.9994 48.9C30.7994 47.8 32.2994 46.3 33.3994 44.5C31.4994 45.7 29.2994 46.3 27.0994 46.3Z"
                                                fill="#E97424" />
                                            <path d="M60 22.8008H31V60.0008H60V22.8008Z" fill="#2996BF" />
                                            <path d="M60 22.8008H31V31.1008H60V22.8008Z" fill="#E3646A" />
                                            <path d="M39.2992 35.1992H35.1992V39.2992H39.2992V35.1992Z"
                                                fill="#FAD87C" />
                                            <path d="M47.4984 35.1992H43.3984V39.2992H47.4984V35.1992Z"
                                                fill="#FAD87C" />
                                            <path d="M55.7992 35.1992H51.6992V39.2992H55.7992V35.1992Z"
                                                fill="#FAD87C" />
                                            <path d="M39.2992 43.3984H35.1992V47.4984H39.2992V43.3984Z"
                                                fill="#FAD87C" />
                                            <path d="M47.4984 43.3984H43.3984V47.4984H47.4984V43.3984Z"
                                                fill="#FAD87C" />
                                            <path d="M39.2992 51.6992H35.1992V55.7992H39.2992V51.6992Z"
                                                fill="#FAD87C" />
                                            <path d="M47.4984 51.6992H43.3984V55.7992H47.4984V51.6992Z"
                                                fill="#FAD87C" />
                                            <path d="M55.7992 43.3984H51.6992V55.7984H55.7992V43.3984Z"
                                                fill="#FAD87C" />
                                            <path
                                                d="M22.7992 45.4996C20.4992 45.4996 18.6992 43.5996 18.6992 41.3996H20.7992C20.7992 42.4996 21.6992 43.4996 22.8992 43.4996C24.0992 43.4996 24.9992 42.5996 24.9992 41.3996C24.9992 40.5996 24.4992 39.8996 23.6992 39.6996L21.3992 38.8996C19.7992 38.3996 18.6992 36.8996 18.6992 35.1996C18.6992 32.8996 20.5992 31.0996 22.7992 31.0996C24.9992 31.0996 26.8992 32.9996 26.8992 35.1996H24.7992C24.7992 34.0996 23.8992 33.0996 22.6992 33.0996C21.4992 33.0996 20.5992 33.9996 20.5992 35.1996C20.5992 35.9996 21.0992 36.6996 21.8992 36.8996L24.1992 37.6996C25.7992 38.1996 26.8992 39.6996 26.8992 41.3996C26.8992 43.6996 24.9992 45.4996 22.7992 45.4996Z"
                                                fill="#006684" />
                                            <path d="M23.7992 29H21.6992V32.1H23.7992V29Z" fill="#006684" />
                                            <path d="M23.7992 44.5H21.6992V47.6H23.7992V44.5Z" fill="#006684" />
                                            <path d="M56.9008 25.9004H54.8008V28.0004H56.9008V25.9004Z"
                                                fill="#006684" />
                                            <path d="M52.7992 25.9004H50.6992V28.0004H52.7992V25.9004Z"
                                                fill="#006684" />
                                            <path d="M48.6977 25.9004H46.5977V28.0004H48.6977V25.9004Z"
                                                fill="#006684" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5996_33591">
                                                <rect width="60" height="60" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h3 class="vs-everyone-card-title">Fixed Hiring Model</h3>
                            </div>
                            <div class="vs-everyone-card-body">

                                <ul class="vs-everyone-feature-list list-unstyled">
                                    <li class="vs-everyone-feature-item">
                                        <span class="vs-everyone-feature-icon">
                                            <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark">
                                        </span>
                                        <span>Fixed hiring cost</span>
                                    </li>
                                    <li class="vs-everyone-feature-item">
                                        <span class="vs-everyone-feature-icon">
                                            <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark">
                                        </span>
                                        <span>Defined project scope</span>
                                    </li>
                                    <li class="vs-everyone-feature-item">
                                        <span class="vs-everyone-feature-icon">
                                            <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark">
                                        </span>
                                        <span>Milestone-based payments</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-everyone-card">
                            <div class="vs-everyone-card-head">
                                <div class="vs-everyone-card-icon">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_5996_33644)">
                                            <path
                                                d="M56.5984 4.5H33.7984C31.8984 4.5 30.3984 6 30.3984 7.9V20.7C30.3984 22.6 31.8984 24.1 33.7984 24.1H41.8984L40.5984 29.4C40.3984 30.1 41.1984 30.6 41.7984 30.2L49.6984 24.2H56.5984C58.4984 24.2 59.9984 22.7 59.9984 20.8V7.9C59.9984 6 58.3984 4.5 56.5984 4.5Z"
                                                fill="#88DBFD" />
                                            <path
                                                d="M41.6016 25.4008L40.6016 29.5008C40.4016 30.2008 41.2016 30.7008 41.8016 30.3008L49.7016 24.3008H43.2016L41.6016 25.4008Z"
                                                fill="#5ABFE9" />
                                            <path
                                                d="M56.6016 4.5H50.1016C52.0016 4.5 53.5016 6 53.5016 7.9V20.7C53.5016 22.6 52.0016 24.1 50.1016 24.1H56.6016C58.5016 24.1 60.0016 22.6 60.0016 20.7V7.9C60.0016 6 58.4016 4.5 56.6016 4.5Z"
                                                fill="#5ABFE9" />
                                            <path
                                                d="M40.0992 14.3004L42.8992 12.5004C42.9992 12.5004 42.9992 12.4004 43.0992 12.4004C43.3992 12.4004 43.8992 12.8004 43.8992 13.2004C43.8992 13.4004 43.7992 13.6004 43.6992 13.6004L41.6992 14.9004L43.6992 16.2004C43.7992 16.3004 43.8992 16.4004 43.8992 16.6004C43.8992 17.1004 43.4992 17.4004 43.0992 17.4004C42.9992 17.4004 42.8992 17.4004 42.8992 17.3004L40.0992 15.5004C39.7992 15.3004 39.7992 15.1004 39.7992 14.9004C39.6992 14.7004 39.7992 14.5004 40.0992 14.3004Z"
                                                fill="#F2F2F2" />
                                            <path
                                                d="M50.1992 10.0004C50.1992 10.1004 50.1992 10.1004 50.1992 10.2004L46.2992 18.3004C46.1992 18.5004 45.9992 18.6004 45.7992 18.6004C45.3992 18.6004 45.1992 18.3004 45.1992 18.0004C45.1992 17.9004 45.1992 17.9004 45.2992 17.8004L48.9992 9.70039C49.0992 9.50039 49.2992 9.40039 49.4992 9.40039C49.7992 9.40039 50.1992 9.60039 50.1992 10.0004Z"
                                                fill="#F2F2F2" />
                                            <path
                                                d="M55.1984 15.6L52.3984 17.4C52.2984 17.4 52.2984 17.5 52.1984 17.5C51.8984 17.5 51.3984 17.1 51.3984 16.7C51.3984 16.5 51.4984 16.3 51.5984 16.3L53.5984 15L51.5984 13.7C51.4984 13.6 51.3984 13.5 51.3984 13.3C51.3984 12.8 51.7984 12.5 52.1984 12.5C52.2984 12.5 52.3984 12.5 52.3984 12.6L55.1984 14.4C55.4984 14.6 55.4984 14.8 55.4984 15C55.4984 15.1 55.3984 15.4 55.1984 15.6Z"
                                                fill="#F2F2F2" />
                                            <path
                                                d="M47.7 45.0004C47.5 42.1004 45.7 39.7004 42.9 38.4004C39.5 36.8004 30.4 34.4004 30.4 34.4004C29.5 34.2004 28.9 33.5004 28.9 32.6004V27.4004H19V32.6004C19 33.5004 18.4 34.3004 17.5 34.4004C17.5 34.4004 8.4 36.8004 5 38.4004C2.3 39.7004 0.4 42.1004 0.2 45.0004L0 57.5004C0 58.9004 1.1 60.0004 2.5 60.0004H45.4C46.8 60.0004 47.9 58.9004 47.9 57.5004L47.7 45.0004Z"
                                                fill="#FCC18B" />
                                            <path
                                                d="M47.6984 45.0004C47.4984 42.1004 45.6984 39.7004 42.8984 38.4004C39.4984 36.8004 30.3984 34.4004 30.3984 34.4004C29.4984 34.2004 28.8984 33.5004 28.8984 32.6004V27.4004H22.3984V35.8004C22.3984 36.7004 22.9984 37.5004 23.8984 37.6004C23.8984 37.6004 32.9984 40.0004 36.3984 41.6004C39.0984 42.9004 40.9984 45.3004 41.1984 48.2004L41.3984 60.0004H45.3984C46.7984 60.0004 47.8984 58.9004 47.8984 57.5004L47.6984 45.0004Z"
                                                fill="#EAAB65" />
                                            <path
                                                d="M13.7015 14.1992H12.4015C11.9015 14.1992 11.5015 14.3992 11.1015 14.5992C10.5015 15.0992 10.2015 15.7992 10.4015 16.5992L10.9015 19.3992C11.3015 21.4992 13.7015 20.4992 13.7015 20.4992V14.1992Z"
                                                fill="#EAAB65" />
                                            <path
                                                d="M34.3008 14.1992H35.6008C36.1008 14.1992 36.5008 14.3992 36.9008 14.5992C37.5008 15.0992 37.8008 15.7992 37.6008 16.5992L37.1008 19.3992C36.7008 21.4992 34.3008 20.4992 34.3008 20.4992V14.1992Z"
                                                fill="#FCC18B" />
                                            <path
                                                d="M31.2 3.5C29.5 1.9 27.1 0.6 24 0.5C20.8 0.5 18.5 1.9 16.8 3.5C14.6 5.5 13.5 8.5 13.5 11.5V22.2C13.5 27.3 20.1 32.5 24.1 32.5C28.1 32.5 34.7 27.3 34.7 22.2V11.5C34.6 8.5 33.4 5.5 31.2 3.5Z"
                                                fill="#FCC18B" />
                                            <path
                                                d="M31.2008 3.5C29.5008 1.9 27.1008 0.6 24.0008 0.5C22.8008 0.5 21.7008 0.7 20.8008 1.1C22.4008 1.6 23.7008 2.5 24.8008 3.5C27.0008 5.5 28.1008 8.5 28.1008 11.5V22.2C28.1008 26 24.3008 30 20.8008 31.6C21.9008 32.1 23.1008 32.5 24.0008 32.5C28.0008 32.5 34.6008 27.3 34.6008 22.2V11.5C34.6008 8.5 33.4008 5.5 31.2008 3.5Z"
                                                fill="#EAAB65" />
                                            <path
                                                d="M30.5008 0H17.4008C14.0008 0 11.3008 2.7 11.3008 6.1V14.5C11.3008 14.5 13.0008 14.5 14.1008 15.5C14.3008 15.7 14.7008 15.6 14.7008 15.2V8.7C14.7008 7.2 15.9008 6 17.4008 6H19.8008C20.4008 6 21.1008 6.2 21.6008 6.6L21.8008 6.8C22.4008 7.3 23.2008 7.6 23.9008 7.6C24.6008 7.6 25.4008 7.3 26.0008 6.8L26.2008 6.6C26.8008 6.2 27.5008 6 28.1008 6H30.5008C32.0008 6 33.2008 7.2 33.2008 8.7V15.3C33.2008 15.6 33.6008 15.8 33.8008 15.6C34.9008 14.5 36.6008 14.6 36.6008 14.6V6.1C36.6008 2.7 33.9008 0 30.5008 0Z"
                                                fill="#426175" />
                                            <path
                                                d="M30.4992 0H28.1992C29.2992 1.3 30.0992 3.4 30.0992 6H30.4992C31.9992 6 33.1992 7.2 33.1992 8.7V15.3C33.1992 15.6 33.5992 15.8 33.7992 15.6C34.8992 14.5 36.5992 14.6 36.5992 14.6V6.1C36.5992 2.7 33.8992 0 30.4992 0Z"
                                                fill="#2C4456" />
                                            <path
                                                d="M43 38.4996C41 37.5996 37.1 36.3996 34.2 35.5996L33.6 35.7996C27.4 38.0996 20.6 38.0996 14.5 35.7996L13.9 35.5996C11 36.3996 7.1 37.5996 5.1 38.4996C2.4 39.7996 0.5 42.0996 0.3 45.0996L0 57.4996C0 58.8996 1.1 59.9996 2.5 59.9996H45.4C46.8 59.9996 47.9 58.8996 47.9 57.4996L47.7 44.9996C47.6 42.0996 45.7 39.7996 43 38.4996Z"
                                                fill="#33BCA5" />
                                            <path
                                                d="M39.1998 56.8996H8.29985C7.39985 56.8996 6.59985 56.1996 6.49985 55.1996L5.19985 37.4996C5.09985 36.4996 5.89985 35.5996 6.99985 35.5996H40.4998C41.4998 35.5996 42.3998 36.4996 42.2998 37.4996L40.9998 55.1996C40.8998 56.1996 40.1998 56.8996 39.1998 56.8996Z"
                                                fill="#F2F2F2" />
                                            <path
                                                d="M40.5 35.5H34C35 35.5 35.9 36.4 35.8 37.4L34.4 56.8H39.3C40.2 56.8 41 56.1 41.1 55.1L42.4 37.3C42.4 36.4 41.5 35.5 40.5 35.5Z"
                                                fill="#CDD6DF" />
                                            <path
                                                d="M41.4 60.0008H6.5C5.7 60.0008 5 59.3008 5 58.4008C5 57.5008 5.7 56.8008 6.6 56.8008H41.5C42.4 56.8008 43.1 57.5008 43.1 58.4008C43 59.3008 42.3 60.0008 41.4 60.0008Z"
                                                fill="#CDD6DF" />
                                            <path
                                                d="M26.5 46.9004C26.5 48.3004 25.4 49.4004 24 49.4004C22.6 49.4004 21.5 48.3004 21.5 46.9004C21.5 45.5004 22.6 44.4004 24 44.4004C25.4 44.4004 26.5 45.5004 26.5 46.9004Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5996_33644">
                                                <rect width="60" height="60" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h3 class="vs-everyone-card-title">Dedicated Hiring Model</h3>
                            </div>
                            <div class="vs-everyone-card-body">
                                <ul class="vs-everyone-feature-list list-unstyled">
                                    <li class="vs-everyone-feature-item">
                                        <span class="vs-everyone-feature-icon">
                                            <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark">
                                        </span>
                                        <span>Dedicated resources</span>
                                    </li>
                                    <li class="vs-everyone-feature-item">
                                        <span class="vs-everyone-feature-icon">
                                            <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark">
                                        </span>
                                        <span>Complete project control</span>
                                    </li>
                                    <li class="vs-everyone-feature-item">
                                        <span class="vs-everyone-feature-icon">
                                            <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark">
                                        </span>
                                        <span>Timely project updates</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-everyone-card">
                            <div class="vs-everyone-card-head">
                                <div class="vs-everyone-card-icon">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_5996_33690)">
                                            <path
                                                d="M11.2016 42.8984H2.70156C1.50156 42.8984 0.601562 43.8984 0.601562 44.9984V57.8984C0.601562 59.0984 1.60156 59.9984 2.70156 59.9984H11.3016C12.5016 59.9984 13.4016 58.9984 13.4016 57.8984V44.9984C13.4016 43.7984 12.4016 42.8984 11.2016 42.8984Z"
                                                fill="#00325A" />
                                            <path
                                                d="M50.9023 41.7992C50.0023 41.7992 49.2023 42.1992 48.6023 42.6992L39.9023 51.3992H35.9023C37.7023 51.3992 39.1023 49.9992 39.1023 48.1992C39.1023 46.3992 37.7023 44.9992 35.9023 44.9992H30.5023L28.7023 43.1992C27.1023 41.5992 24.9023 40.6992 22.6023 40.6992H21.1023C18.8023 40.6992 16.6023 41.5992 15.0023 43.1992L13.4023 44.9992V57.8992H41.3023C42.2023 57.8992 43.0023 57.4992 43.6023 56.9992L53.2023 47.3992C53.8023 46.7992 54.1023 45.9992 54.1023 45.0992C54.1023 43.1992 52.7023 41.7992 50.9023 41.7992Z"
                                                fill="#F0C8A0" />
                                            <path
                                                d="M7.00234 56.7C8.16214 56.7 9.10234 55.7598 9.10234 54.6C9.10234 53.4402 8.16214 52.5 7.00234 52.5C5.84255 52.5 4.90234 53.4402 4.90234 54.6C4.90234 55.7598 5.84255 56.7 7.00234 56.7Z"
                                                fill="#F0F0F0" />
                                            <path
                                                d="M26.8008 51.3988C26.5008 51.3988 26.3008 51.5988 26.3008 51.8988C26.3008 52.1988 26.5008 52.3988 26.8008 52.3988H35.9008C37.0008 52.3988 38.0008 51.9988 38.7008 51.2988H26.8008V51.3988Z"
                                                fill="#D2AA82" />
                                            <path
                                                d="M48.8008 15H48.0008C47.5008 15 47.1008 14.7 47.0008 14.2C46.7008 13.2 46.3008 12.2 45.8008 11.3C45.6008 10.9 45.6008 10.4 46.0008 10L46.6008 9.4C47.0008 9 47.0008 8.3 46.6008 7.9L42.1008 3.4C41.7008 3 41.0008 3 40.6008 3.4L39.8008 4C39.5008 4.3 38.9008 4.4 38.5008 4.2C37.6008 3.7 36.6008 3.3 35.6008 3C35.1008 2.9 34.8008 2.5 34.8008 2V1.1C34.8008 0.5 34.3008 0 33.7008 0H27.3008C26.7008 0 26.2008 0.5 26.2008 1.1V1.9C26.2008 2.4 25.9008 2.8 25.4008 2.9C24.4008 3.2 23.4008 3.6 22.5008 4.1C22.1008 4.3 21.6008 4.3 21.2008 3.9L20.6008 3.3C20.2008 2.9 19.5008 2.9 19.1008 3.3L14.6008 7.8C14.2008 8.2 14.2008 8.9 14.6008 9.3L15.2008 9.9C15.5008 10.2 15.6008 10.8 15.4008 11.2C14.9008 12.1 14.5008 13.1 14.2008 14.1C14.1008 14.6 13.7008 14.9 13.2008 14.9H12.4008C11.8008 14.9 11.3008 15.4 11.3008 16V22.4C11.3008 23 11.8008 23.5 12.4008 23.5H13.2008C13.7008 23.5 14.1008 23.8 14.2008 24.3C14.5008 25.3 14.9008 26.3 15.4008 27.2C15.6008 27.6 15.6008 28.1 15.2008 28.5L14.6008 29.1C14.2008 29.5 14.2008 30.2 14.6008 30.6L19.1008 35.1C19.5008 35.5 20.2008 35.5 20.6008 35.1L21.2008 34.5C21.5008 34.2 22.1008 34.1 22.5008 34.3C23.4008 34.8 24.4008 35.2 25.4008 35.5C25.9008 35.6 26.2008 36 26.2008 36.5V37.3C26.2008 37.9 26.7008 38.4 27.3008 38.4H33.7008C34.3008 38.4 34.8008 37.9 34.8008 37.3V36.5C34.8008 36 35.1008 35.6 35.6008 35.5C36.6008 35.2 37.6008 34.8 38.5008 34.3C38.9008 34.1 39.4008 34.1 39.8008 34.5L40.4008 35.1C40.8008 35.5 41.5008 35.5 41.9008 35.1L46.4008 30.6C46.8008 30.2 46.8008 29.5 46.4008 29.1L45.8008 28.5C45.5008 28.2 45.4008 27.6 45.6008 27.2C46.1008 26.3 46.5008 25.3 46.8008 24.3C46.9008 23.8 47.3008 23.5 47.8008 23.5H48.6008C49.2008 23.5 49.7008 23 49.7008 22.4V16C49.8008 15.5 49.3008 15 48.8008 15ZM30.5008 32.1C23.4008 32.1 17.6008 26.3 17.6008 19.2C17.6008 12.1 23.4008 6.4 30.5008 6.4C37.6008 6.4 43.4008 12.2 43.4008 19.3C43.4008 26.4 37.6008 32.1 30.5008 32.1Z"
                                                fill="#FAB400" />
                                            <path
                                                d="M30.5016 33.3C37.626 33.3 43.4016 27.5245 43.4016 20.4C43.4016 13.2755 37.626 7.5 30.5016 7.5C23.3771 7.5 17.6016 13.2755 17.6016 20.4C17.6016 27.5245 23.3771 33.3 30.5016 33.3Z"
                                                fill="#DC9600" />
                                            <path
                                                d="M30.5016 32.2004C37.626 32.2004 43.4016 26.4249 43.4016 19.3004C43.4016 12.1759 37.626 6.40039 30.5016 6.40039C23.3771 6.40039 17.6016 12.1759 17.6016 19.3004C17.6016 26.4249 23.3771 32.2004 30.5016 32.2004Z"
                                                fill="#F0F0F0" />
                                            <path
                                                d="M37.0016 17.1008V13.9008C37.0016 13.3008 36.5016 12.8008 35.9016 12.8008H32.7016C32.7016 14.0008 31.7016 14.9008 30.6016 14.9008C29.4016 14.9008 28.5016 13.9008 28.5016 12.8008H25.3016C24.7016 12.8008 24.2016 13.3008 24.2016 13.9008V17.1008C23.0016 17.1008 22.1016 18.1008 22.1016 19.2008C22.1016 20.4008 23.1016 21.3008 24.2016 21.3008V24.5008C24.2016 25.1008 24.7016 25.6008 25.3016 25.6008H28.5016C28.5016 24.4008 29.5016 23.5008 30.6016 23.5008C31.8016 23.5008 32.7016 24.5008 32.7016 25.6008H35.9016C36.5016 25.6008 37.0016 25.1008 37.0016 24.5008V21.3008C38.2016 21.3008 39.1016 20.3008 39.1016 19.2008C39.1016 18.1008 38.1016 17.1008 37.0016 17.1008Z"
                                                fill="#C80A50" />
                                            <path
                                                d="M58.4 20.3992H54.1C53.5 20.3992 53 19.8992 53 19.2992C53 18.6992 53.5 18.1992 54.1 18.1992H58.4C59 18.1992 59.5 18.6992 59.5 19.2992C59.5 19.8992 59 20.3992 58.4 20.3992Z"
                                                fill="#00A0C8" />
                                            <path
                                                d="M52.0023 11.8C51.7023 11.8 51.5023 11.7 51.2023 11.5C50.8023 11.1 50.8023 10.4 51.2023 10L54.4023 6.8C54.8023 6.4 55.5023 6.4 55.9023 6.8C56.3023 7.2 56.3023 7.9 55.9023 8.3L52.7023 11.5C52.5023 11.7 52.2023 11.8 52.0023 11.8Z"
                                                fill="#00A0C8" />
                                            <path
                                                d="M55.2023 32.1008C54.9023 32.1008 54.7023 32.0008 54.4023 31.8008L51.2023 28.6008C50.8023 28.2008 50.8023 27.5008 51.2023 27.1008C51.6023 26.7008 52.3023 26.7008 52.7023 27.1008L55.9023 30.3008C56.3023 30.7008 56.3023 31.4008 55.9023 31.8008C55.7023 32.0008 55.5023 32.1008 55.2023 32.1008Z"
                                                fill="#00A0C8" />
                                            <path
                                                d="M7.00156 20.3992H2.70156C2.10156 20.3992 1.60156 19.8992 1.60156 19.2992C1.60156 18.6992 2.10156 18.1992 2.70156 18.1992H7.00156C7.60156 18.1992 8.10156 18.6992 8.10156 19.2992C8.00156 19.8992 7.60156 20.3992 7.00156 20.3992Z"
                                                fill="#00A0C8" />
                                            <path
                                                d="M9.10078 11.8C8.80078 11.8 8.60078 11.7 8.30078 11.5L5.10078 8.3C4.70078 7.9 4.70078 7.2 5.10078 6.8C5.50078 6.4 6.20078 6.4 6.60078 6.8L9.90078 10C10.3008 10.4 10.3008 11.1 9.90078 11.5C9.70078 11.7 9.40078 11.8 9.10078 11.8Z"
                                                fill="#00A0C8" />
                                            <path
                                                d="M5.90078 32.1008C5.60078 32.1008 5.40078 32.0008 5.10078 31.8008C4.70078 31.4008 4.70078 30.7008 5.10078 30.3008L8.30078 27.1008C8.70078 26.7008 9.40078 26.7008 9.80078 27.1008C10.2008 27.5008 10.2008 28.2008 9.80078 28.6008L6.60078 31.8008C6.40078 32.0008 6.20078 32.1008 5.90078 32.1008Z"
                                                fill="#00A0C8" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5996_33690">
                                                <rect width="60" height="60" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h3 class="vs-everyone-card-title">Hourly Hiring Model</h3>
                            </div>
                            <div class="vs-everyone-card-body">

                                <ul class="vs-everyone-feature-list list-unstyled">
                                    <li class="vs-everyone-feature-item">
                                        <span class="vs-everyone-feature-icon">
                                            <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark">
                                        </span>
                                        <span>Flexible hiring option</span>
                                    </li>
                                    <li class="vs-everyone-feature-item">
                                        <span class="vs-everyone-feature-icon">
                                            <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark">
                                        </span>
                                        <span>Pay/per hour</span>
                                    </li>
                                    <li class="vs-everyone-feature-item">
                                        <span class="vs-everyone-feature-icon">
                                            <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark">
                                        </span>
                                        <span>Agile development approach</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Something Everyone Section End -->

<!-- Hire Developers Start -->
    <section class="vs-hire-developers-section vs-section-spacer" id="ty_pricing">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Hire MERN Stack Developers As Per Your Project Requirement
                </h2>
            </div>
            <div class="vs-hire-developer-content">
                <div class="vs-hire-developer-pricing">
                    <div class="vs-hire-developer-card">
                        <h3 class="vs-hire-developer-card-title">Risk free trial <br />starts from</h3>
                        <h3 class="vs-hire-developer-card-price">$499.00</h3>
                        <a href="#" class="btn btn-dark">Hire Now!</a>
                        <ul class="vs-hire-developer-feature-list list-unstyled">
                            <li class="vs-hire-developer-feature-item">Dedicated Developer</li>
                            <li class="vs-hire-developer-feature-item">One Week trial</li>
                            <li class="vs-hire-developer-feature-item">Get an idea about your process</li>
                        </ul>
                    </div>
                    <div class="vs-hire-developer-card vs-hire-developer-card-best">
                        <div class="vs-hire-developer-card-head">
                            <h6 class="vs-hire-developer-card-head-title">Best Value</h6>
                        </div>
                        <h3 class="vs-hire-developer-card-title">Part time hiring <br />starts from</h3>
                        <h3 class="vs-hire-developer-card-price">$899.00</h3>
                        <a href="#" class="btn btn-primary">Hire Now!</a>
                        <ul class="vs-hire-developer-feature-list list-unstyled">
                            <li class="vs-hire-developer-feature-item">Suitable for short term engagement</li>
                            <li class="vs-hire-developer-feature-item">Dedicated Developer</li>
                            <li class="vs-hire-developer-feature-item">Ideal for maintenance related job</li>
                        </ul>
                    </div>
                    <div class="vs-hire-developer-card">
                        <h3 class="vs-hire-developer-card-title">Full time Hiring <br />starts from</h3>
                        <h3 class="vs-hire-developer-card-price">$1499.00</h3>
                        <a href="#" class="btn btn-dark">Hire Now!</a>
                        <ul class="vs-hire-developer-feature-list list-unstyled">
                            <li class="vs-hire-developer-feature-item">Suitable for short term engagement</li>
                            <li class="vs-hire-developer-feature-item">Dedicated Developer</li>
                            <li class="vs-hire-developer-feature-item">Service for 40 hours a week</li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#ty_landing" class="btn btn-primary">Schedule Interview</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hire Developers End -->
   <!-- Want To Discuss Section Start -->
    <section class="vs-want-discuss-section vs-section-spacer">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Unleash Your Creative MERN Stack App Vision!</h2>
                <p class="vs-section-description">Is there a brilliant concept brewing in your mind for a MERN Stack mobile web app project? Your search ends here. Hire MERN Stack developers from TechnoYuga, and get ready to transform your ideas into reality at the speed of thought!</p>
            </div>
            <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                                data-bs-target="#requestProposalModal">Book A Consultation</a>
            </div>
        </div>
    </section>
<!-- Want To Discuss Section End -->



<!-- Flutter Development Stack Section Start -->
    <section class="vs-development-stack-section vs-section-spacer">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">MERN Stack Development Stack</h2>
                <p class="vs-section-description">At TechoYuga we use the scalable and trending frameworks and
                    technologies to build Mobile Apps , Backend and Web applications for our clients.</p>
            </div>
            <div class="vs-development-stack-content">
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="vs-development-stack__inner">
                            <h3 class="vs-development-stack-title">Development Technology & Tools</h3>
                            <div class="vs-development-stack-list">
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/android-logo.png')}}" alt="android-logo"
                                            class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">Android <br />Studio</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/dart-logo.svg')}}" alt="dart-logo" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">Dart</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/vs-code.svg')}}" alt="vs-code" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">VS Code</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/flutter-sdk.svg')}}" alt="Flutter SDK"
                                            class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">Flutter SDK</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="vs-development-stack__inner">
                            <h3 class="vs-development-stack-title">Development Technology & Tools</h3>
                            <div class="vs-development-stack-list">
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/firebase-logo.svg')}}" alt="Firebase" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">Firebase</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/realm.svg')}}" alt="realm" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">Realm</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/sw-lite.svg')}}" alt="sw-lite" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">SW lite</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/mongo-db.svg')}}" alt="mongo-db" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">MongoDB</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/my-sql.svg')}}" alt="my-sql" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">My SQL</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="vs-development-stack__inner">
                            <h3 class="vs-development-stack-title">Design Tools</h3>
                            <div class="vs-development-stack-list">
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/adobe-xd.svg')}}" alt="adobe-xd" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">Adobe XD</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/photoshop.svg')}}" alt="photoshop" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">Photoshop</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/figma-logo.svg')}}" alt="igma-logo" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">Figma</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/sketch.svg')}}" alt="Sketch" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">Sketch</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="vs-development-stack__inner">
                            <h3 class="vs-development-stack-title">Cloud Services</h3>
                            <div class="vs-development-stack-list">
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/aws.svg')}}" alt="AWS" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">AWS</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/heroku.svg')}}" alt="heroku" class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">Heroku</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/google-cloud.svg')}}" alt="google-cloud"
                                            class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">Google Cloud</h5>
                                </div>
                                <div class="vs-development-stack-item">
                                    <div class="vs-development-stack-logo">
                                        <img src="{{asset('web-assets/images/digital-ocean.svg')}}" alt="digital-ocean"
                                            class="img-fluid">
                                    </div>
                                    <h5 class="vs-development-stack-item-title">Digital Ocean</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Flutter Development Stack Section End -->
<!-- Hiring Section Start -->
    <section class="vs-hiring-section vs-section-spacer">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Hiring As Easy As Three Steps</h2>
            </div>
            <div class="vs-hiring-content">
                <div class="vs-hiring-steps">
                    <div class="row m-0">
                        <div class="col col-12 col-md-4 col-lg-4 col-xl-4 p-0">
                            <div class="vs-hiring-steps-item">
                                <div class="vs-hiring-steps-img">
                                    <svg width="90" height="91" viewBox="0 0 90 91" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M40.2353 90.5C34.6588 90.5 29.4184 89.3889 24.5139 87.1667C19.6066 84.9445 15.3529 81.9445 11.7529 78.1667C8.15294 74.3889 5.29412 69.9252 3.17647 64.7756C1.05882 59.6289 0 54.1296 0 48.2778C0 42.4259 1.05882 36.9252 3.17647 31.7756C5.29412 26.6289 8.15294 22.1667 11.7529 18.3889C15.3529 14.6111 19.6066 11.6111 24.5139 9.38889C29.4184 7.16667 34.6588 6.05556 40.2353 6.05556C43.1294 6.05556 45.9529 6.36963 48.7059 6.99778C51.4588 7.62889 54.1059 8.53704 56.6471 9.72222V17.1667C54.1765 15.7593 51.5647 14.6659 48.8118 13.8867C46.0588 13.1104 43.2 12.7222 40.2353 12.7222C30.8471 12.7222 22.8536 16.1844 16.2551 23.1089C9.65365 30.0363 6.35294 38.4259 6.35294 48.2778C6.35294 58.1296 9.65365 66.5193 16.2551 73.4467C22.8536 80.3711 30.8471 83.8333 40.2353 83.8333C49.6235 83.8333 57.6184 80.3711 64.2198 73.4467C70.8184 66.5193 74.1176 58.1296 74.1176 48.2778C74.1176 45.9815 73.9242 43.777 73.5374 41.6644C73.1478 39.5548 72.5647 37.5 71.7882 35.5H78.6706C79.2353 37.5741 79.6772 39.6481 79.9962 41.7222C80.3125 43.7963 80.4706 45.9815 80.4706 48.2778C80.4706 54.1296 79.4118 59.6289 77.2941 64.7756C75.1765 69.9252 72.3177 74.3889 68.7177 78.1667C65.1177 81.9445 60.8654 84.9445 55.9609 87.1667C51.0537 89.3889 45.8118 90.5 40.2353 90.5ZM75.1765 24.9444V16.0556H66.7059V9.38889H75.1765V0.5H81.5294V9.38889H90V16.0556H81.5294V24.9444H75.1765ZM54.6353 42.9444C56.1882 42.9444 57.4941 42.3889 58.5529 41.2778C59.6118 40.1667 60.1412 38.7963 60.1412 37.1667C60.1412 35.537 59.6118 34.1667 58.5529 33.0556C57.4941 31.9444 56.1882 31.3889 54.6353 31.3889C53.0824 31.3889 51.7765 31.9444 50.7176 33.0556C49.6588 34.1667 49.1294 35.537 49.1294 37.1667C49.1294 38.7963 49.6588 40.1667 50.7176 41.2778C51.7765 42.3889 53.0824 42.9444 54.6353 42.9444ZM25.8353 42.9444C27.3882 42.9444 28.6941 42.3889 29.7529 41.2778C30.8118 40.1667 31.3412 38.7963 31.3412 37.1667C31.3412 35.537 30.8118 34.1667 29.7529 33.0556C28.6941 31.9444 27.3882 31.3889 25.8353 31.3889C24.2824 31.3889 22.9765 31.9444 21.9176 33.0556C20.8588 34.1667 20.3294 35.537 20.3294 37.1667C20.3294 38.7963 20.8588 40.1667 21.9176 41.2778C22.9765 42.3889 24.2824 42.9444 25.8353 42.9444ZM40.2353 71.3889C44.6824 71.3889 48.7242 70.0926 52.3609 67.5C55.9948 64.9074 58.6941 61.463 60.4588 57.1667H20.0118C21.7765 61.463 24.4772 64.9074 28.1139 67.5C31.7478 70.0926 35.7882 71.3889 40.2353 71.3889Z"
                                            fill="#003262" />
                                    </svg>
                                </div>
                                <h4 class="vs-hiring-steps-title">Get Expert Assistance</h4>
                                <p class="vs-hiring-discription">After you fill the contact form you would be
                                    contacted
                                    by an expert to assist you through the hiring process and interview.</p>
                            </div>
                        </div>
                        <div class="col col-12 col-md-4 col-lg-4 col-xl-4 p-0">
                            <div class="vs-hiring-steps-item active">
                                <div class="vs-hiring-steps-img">
                                    <svg width="90" height="91" viewBox="0 0 90 91" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_4602_17178" style="mask-type:alpha"
                                            maskUnits="userSpaceOnUse" x="0" y="0" width="90" height="91">
                                            <rect y="0.5" width="90" height="90" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_4602_17178)">
                                            <path
                                                d="M44.7647 80.5C39.8078 80.5 35.1647 79.5658 30.8353 77.6974C26.5059 75.8289 22.7249 73.3066 19.4922 70.1303C16.2621 66.9539 13.7059 63.2009 11.8235 58.8712C9.94118 54.5439 9 49.9202 9 45C9 40.0798 9.94118 35.4549 11.8235 31.1251C13.7059 26.7978 16.2471 23.0461 19.4471 19.8697C22.6471 16.6934 26.4281 14.1711 30.7901 12.3026C35.1496 10.4342 39.8078 9.5 44.7647 9.5C48.7176 9.5 52.4673 10.0917 56.0136 11.275C59.5575 12.4583 62.8039 14.1088 65.7529 16.2263L61.7059 20.3368C59.2588 18.7175 56.6072 17.4408 53.7511 16.5066C50.8974 15.5724 47.902 15.1053 44.7647 15.1053C36.4196 15.1053 29.3144 18.0163 23.4489 23.8383C17.581 29.6628 14.6471 36.7167 14.6471 45C14.6471 53.2833 17.581 60.3372 23.4489 66.1617C29.3144 71.9837 36.4196 74.8947 44.7647 74.8947C46.898 74.8947 48.9536 74.6768 50.9313 74.2408C52.9065 73.8048 54.8039 73.2132 56.6235 72.4658L60.8588 76.7632C58.4118 77.9465 55.8392 78.8658 53.1412 79.521C50.4431 80.1737 47.651 80.5 44.7647 80.5ZM72.0588 73.9605V62.75H60.7647V57.1447H72.0588V45.9342H77.7059V57.1447H89V62.75H77.7059V73.9605H72.0588ZM39.4 60.8816L24.7176 46.3079L28.6706 42.3842L39.4 53.0342L76.5765 16.1329L80.5294 20.0566L39.4 60.8816Z"
                                                fill="#003262" />
                                        </g>
                                    </svg>
                                </div>
                                <h4 class="vs-hiring-steps-title">Select the Hiring Plan</h4>
                                <p class="vs-hiring-discription">Choose any of the available plans that are
                                    favorable
                                    to your needs. Or you can simply start with a risk free trial to evaluate the
                                    developer working style.
                                </p>
                            </div>
                        </div>
                        <div class="col col-12 col-md-4 col-lg-4 col-xl-4 p-0">
                            <div class="vs-hiring-steps-item">
                                <div class="vs-hiring-steps-img">
                                    <svg width="90" height="91" viewBox="0 0 90 91" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_4602_17181" style="mask-type:alpha"
                                            maskUnits="userSpaceOnUse" x="0" y="0" width="90" height="91">
                                            <rect y="0.5" width="90" height="90" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_4602_17181)">
                                            <path
                                                d="M45 55.0818L49.6118 44.5606L60.1529 39.9576L49.6118 35.3545L45 24.8333L40.3882 35.3545L29.8471 39.9576L40.3882 44.5606L45 55.0818ZM16.0118 67.1061C14.1294 67.1061 12.5294 66.4485 11.2118 65.1333C9.89412 63.8182 9.23529 62.2212 9.23529 60.3424V21.3576C9.23529 19.4162 9.89412 17.7879 11.2118 16.4727C12.5294 15.1576 14.1294 14.5 16.0118 14.5H73.9882C75.8706 14.5 77.4706 15.1576 78.7882 16.4727C80.1059 17.7879 80.7647 19.4162 80.7647 21.3576V60.3424C80.7647 62.2212 80.1059 63.8182 78.7882 65.1333C77.4706 66.4485 75.8706 67.1061 73.9882 67.1061H16.0118ZM16.0118 61.4697H73.9882C74.2392 61.4697 74.4902 61.3607 74.7412 61.1428C74.9922 60.9223 75.1176 60.6556 75.1176 60.3424V21.3576C75.1176 21.0444 74.9922 20.7626 74.7412 20.5121C74.4902 20.2616 74.2392 20.1364 73.9882 20.1364H16.0118C15.7608 20.1364 15.5098 20.2616 15.2588 20.5121C15.0078 20.7626 14.8824 21.0444 14.8824 21.3576V60.3424C14.8824 60.6556 15.0078 60.9223 15.2588 61.1428C15.5098 61.3607 15.7608 61.4697 16.0118 61.4697ZM7.82353 76.5C7.07059 76.5 6.41176 76.2345 5.84706 75.7034C5.28235 75.1698 5 74.496 5 73.6818C5 72.8677 5.28235 72.1951 5.84706 71.664C6.41176 71.1304 7.07059 70.8636 7.82353 70.8636H82.1765C82.9294 70.8636 83.5882 71.1304 84.1529 71.664C84.7176 72.1951 85 72.8677 85 73.6818C85 74.496 84.7176 75.1698 84.1529 75.7034C83.5882 76.2345 82.9294 76.5 82.1765 76.5H7.82353Z"
                                                fill="#003262" />
                                        </g>
                                    </svg>
                                </div>
                                <h4 class="vs-hiring-steps-title">Hire the Developer</h4>
                                <p class="vs-hiring-discription">Hire the developer and get started with your
                                    project.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hiring Section End -->
<!-- Why Choose Section Start -->
<section class="vs-why-choose-section vs-section-spacer">
<div class="container">
    <div class="vs-heading-center">
        <h2 class="vs-section-title vs-title-border">Why You Should Hire MERN Stack Developer From
            Technoyuga</h2>
    </div>
    <div class="vs-why-choose-content">
        <div class="row align-items-center">
            <div class="col col-12 col-md-6 col-lg-6">
                <div class="vs-why-choose-content__inner">
                    <div class="vs-why-choose-description">
                        <p>We have been working on mern stack development for a long time and we have
                            delivered some really great applications that have been a great success in the
                            market. With our good work and best efforts we keep our clients happy and stress
                            free. You are assured of the best end product and on-time delivery when you
                            opt-in our service.</p>
                        <p>We add the following features that make it easy for turning your dream project
                            into a reality.</p>
                    </div>
                    <div class="text-center vs-why-choose-btn">
                        <a href="#ty_landing" class="btn btn-primary">Schedule Interview</a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-6 col-lg-6">
                <div class="vs-why-choose-card-content">
                    <div class="vs-why-choose-card-list" data-scrollbar>
                        <div class="vs-why-choose-card-item">
                            <div class="vs-why-choose-card">
                                <h3 class="vs-why-choose-card-title">Experienced Developers:</h3>
                                <p class="vs-why-choose-card-desription">We have developers with experience
                                    of about 6-8 years. They are highly skilled and can easily turn your
                                    visionary project into a mobile application.</p>
                            </div>
                        </div>
                        <div class="vs-why-choose-card-item">
                            <div class="vs-why-choose-card">
                                <h3 class="vs-why-choose-card-title">Easy Management:</h3>
                                <p class="vs-why-choose-card-desription">The management is made easy with
                                    the introduction of certain tools like trello,jira and github.</p>
                            </div>
                        </div>
                        <div class="vs-why-choose-card-item">
                            <div class="vs-why-choose-card">
                                <h3 class="vs-why-choose-card-title">Source-Code Authorization:</h3>
                                <p class="vs-why-choose-card-desription">You are provided with the complete
                                    authority of the code and the source code is updated timely on your
                                    server and code repository.</p>
                            </div>
                        </div>
                        <div class="vs-why-choose-card-item">
                            <div class="vs-why-choose-card">
                                <h3 class="vs-why-choose-card-title">Version Controlling:</h3>
                                <p class="vs-why-choose-card-desription">The different versions of your app
                                    are maintained over github. So that in any critical case we can easily
                                    rollback to the stable versions.</p>
                            </div>
                        </div>
                        <div class="vs-why-choose-card-item">
                            <div class="vs-why-choose-card">
                                <h3 class="vs-why-choose-card-title">On-Time Delivery:</h3>
                                <p class="vs-why-choose-card-desription">We believe on-time delivery is one
                                    of the most important factors for a projects’ success. So rest assured,
                                    our developers would ensure timely delivery of milestones created by
                                    you.</p>
                            </div>
                        </div>
                        <div class="vs-why-choose-card-item">
                            <div class="vs-why-choose-card">
                                <h3 class="vs-why-choose-card-title">Transparent Working Model:</h3>
                                <p class="vs-why-choose-card-desription">By participating in the daily scrum
                                    of 15 minutes, you get informed about the next target the developers
                                    would work for the day and you can also set the order of modules to be
                                    completed.</p>
                            </div>
                        </div>
                        <div class="vs-why-choose-card-item">
                            <div class="vs-why-choose-card">
                                <h3 class="vs-why-choose-card-title">Detailed Weekly Review:</h3>
                                <p class="vs-why-choose-card-desription">We also have a detailed weekly
                                    review meeting. Where you share your feedback with the designated
                                    authority about the progress made and your thoughts on improving our
                                    process so that you can get a perfect mobile application in said time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Why Choose Section End -->
<!-- include('web.sections.success-story') -->

<!-- Portfolio Section Start -->
    <section class="vs-portfolio-section vs-section-spacer">
        <div class="vs-portfolio-particles">
            <img src="{{asset('web-assets/images/portfolio-particles.svg')}}" alt="Portfolio Particle" class="img-fluid">
        </div>
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Our Portfolio</h2>
                <p class="vs-section-description">Work with groundbreakers who create top-notch mobile and web apps
                    on time & on budget
                </p>
            </div>

                            <div class="vs-portfolio-content vs-portfolio-area">

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                        aria-labelledby="pills-all-tab">
                        <div class="vs-portfolio-content__inner">
                            <div class="vs-portfolio-slider">
                                                                        <div class="vs-portfolio-item" style="background-color: #D6DFFF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/AWABI Awabi - SaaS App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/AWABI Awabi - SaaS App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>AWABI Awabi - SaaS App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Awabi is a SaaS app focused into restaurant industry. This aapp helps restaurants to track the employee atrtendance, referrals, productivitym and shifts. This app offers subscription based plan for restaurant, they can access the through reports of their employees with scoring mechanism of awabi app.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Region</label>
                                                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%" src="{{asset('web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                    alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">On Going</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Web</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, HTML, MongoDB, Node.JS and React.JS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">



                                                                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                        <div class="vs-portfolio-item" style="background-color: #FFD5D9;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Cloud Menu Web App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Cloud Menu Web App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Cloud Menu Web App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">CloudMenu is a Saas based startup from Saudi Arabia which offers cloud based digital menu to restaurants and contact less ordering to customers. Customers can browse and order the food menu by scanning the QR code This solution offers intuitive dashboard to manage the menus, orders and sales reports</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Region</label>
                                                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%" src="{{asset('web-assets/images/new-portfolio/flags/small/Saudi Arabia.png')}}"
                                                                    alt="app-logo" class="img-fluid">

                                                                        <span>Saudi Arabia</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">3 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Web</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, MongoDB, Node.JS and React</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">



                                                                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                        <div class="vs-portfolio-item" style="background-color: #FFE7EB;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Getkado-Gifting Platform.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Getkado-Gifting Platform.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Getkado-Gifting Platform</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Getkado is a new-age gift emporium that allows users to send a collection of gifts along with personalized cards to their loved ones through SMS or email, and they open your personalized e-card, &quot;unwrap &quot;your gift, and can even select another gift from the collection. And you will pay when your recipient accepts the gift. Getkado have hundreds of prodyucs across the categories.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Region</label>
                                                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%" src="{{asset('web-assets/images/new-portfolio/flags/small/Australia.png')}}"
                                                                    alt="app-logo" class="img-fluid">

                                                                        <span>Australia</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">5 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Web</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, MongoDB, Node.JS and React.JS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                                                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="https://staging.getkado.io/" class="btn btn-success" target="_blank">
                                                                    <span>Visit Website</span>
                                                                    <span class="vs-btn-icon">
                                                                        <svg width="17" height="17" viewBox="0 0 17 17"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>


                                                                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                        <div class="vs-portfolio-item" style="background-color: #FFDBEC;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Ginga - Fantasy App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Ginga - Fantasy App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Ginga - Fantasy App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Ginga is Malaysiya&#039;s first fantasy app for football lovers. It allows users to signup, create their team, and invite their friends to play the EPL season fantasy game, they can manage their players, budget, and earnings on the platform in real-time. This app also offers an e- commerce store with users can purchase merchandise</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Region</label>
                                                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%" src="{{asset('web-assets/images/new-portfolio/flags/small/Malaysia.png')}}"
                                                                    alt="app-logo" class="img-fluid">

                                                                        <span>Malaysia</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">On Going</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, IOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter, PHP and Sportsmonk</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">



                                                                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                        <div class="vs-portfolio-item" style="background-color: #FFE4D9;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Kitchenflow - Web App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Kitchenflow - Web App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Kitchenflow - Web App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Kitchenflo is a UK based startup. They are revolutionizing the workflow and safety management system within the Food Industry. This helps kitchens better manage their devices and prevent them from failure through the loT-enabled sensor. This app also helps the day-to-day operations and task management in any restaurant.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Region</label>
                                                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%" src="{{asset('web-assets/images/new-portfolio/flags/small/UK.png')}}"
                                                                    alt="app-logo" class="img-fluid">

                                                                        <span>UK</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">On Going</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Web</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">MongoDB, Node.JS, ReactJS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">



                                                                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                        <div class="vs-portfolio-item" style="background-color: #E0F4EB;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Om at home - web.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Om at home - web.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Om at home - web</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Om at Home is a transformative website bringing mindfulness and wellness to your fingertips. Offering guided meditation, yoga classes, and relaxation techniques, it fosters a peaceful lifestyle within your own space. Embrace tranquillity, achieve balance, and elevate your well-being with the Omathome website.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Region</label>
                                                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%" src="{{asset('web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                    alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">3 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Web</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, HTML, MongoDB, Node.JS and React.JS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                                                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="https://omathomeapp.com" class="btn btn-success" target="_blank">
                                                                    <span>Visit Website</span>
                                                                    <span class="vs-btn-icon">
                                                                        <svg width="17" height="17" viewBox="0 0 17 17"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>


                                                                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                        <div class="vs-portfolio-item" style="background-color: #E7FF9F;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Rockoloy - Event App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Rockoloy - Event App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Rockoloy - Event App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Rockoly web app offers business to organize the virtual events and classes for live cooking, wine tasting etc. users can book the classes by paying the fees and attend through the zoom meeting.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Region</label>
                                                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%" src="{{asset('web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                    alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">3 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Web</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, React.JS, MySql</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">



                                                                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                        <div class="vs-portfolio-item" style="background-color: #CCEDFF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Route Defender - SaaS App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Route Defender - SaaS App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Route Defender - SaaS App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Pool service software for the pool professionals, Route defender system helps pool companies to manage their clients, technicians and invoices better. This solution supports end to end life cycle of pool management business which offers route management, invoicing, readings etc. This system has companies, technicians, and supervisors apps and panels.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Region</label>
                                                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%" src="{{asset('web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                    alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">12 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Wen, iOS and Android</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter, MongoDB, Node.JS, React.JS, Firebase</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">



                                                                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                        <div class="vs-portfolio-item" style="background-color: #FFD2D2;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/TES - IoT SaaS for Hospitality.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/TES - IoT SaaS for Hospitality.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>TES - IoT SaaS for Hospitality</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Rockoly takes team building events to the next level with live chefs, mixologists, sommeliers, and ingredients delivered!</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Region</label>
                                                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%" src="{{asset('web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                    alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">On Going</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Web</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, MongoDB, Node.JS and React.JS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                                                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="http://fountainarizona.com" class="btn btn-success" target="_blank">
                                                                    <span>Visit Website</span>
                                                                    <span class="vs-btn-icon">
                                                                        <svg width="17" height="17" viewBox="0 0 17 17"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>


                                                                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                        <div class="vs-portfolio-item" style="background-color: #E0F4EB;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Wee Travel - Airbnb Style platform for web.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Wee Travel - Airbnb Style platform for web.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Wee Travel - Airbnb Style platform for web</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">We travel is a Mexico based startup focusing on renting property, cars and yachts across the mexico. The use friendly interface of this app helps hosts/ owners to post their requirement easily and travellers can book the property. car or yachts as per the availability, budget and their need. This app provide Mobile and Web platforms to their users.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Region</label>
                                                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%" src="{{asset('web-assets/images/new-portfolio/flags/small/Mexico.png')}}"
                                                                    alt="app-logo" class="img-fluid">

                                                                        <span>Mexico</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">3 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Web</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">MongoDB, Node.JS, ReactJS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">



                                                                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
                        </div>
    </section>
<!-- Portfolio Section End -->
<!-- FAQ Section Start -->
<section class="vs-faq-section vs-section-spacer">
<div class="container">
    <div class="vs-heading-center">
        <h2 class="vs-section-title vs-title-border">Frequently Asked Questions</h2>
        <p class="vs-section-description">Are you having doubts about hiring a MERN Stack developer for your
            business or a dream project you are starting up? Here are some FAQs that our experts have
            answered for you based on the previous client's questions, which might clear some of your
            doubts. If there is any left, click here and submit the form to get expert guidance on this.</p>
    </div>
    <div class="vs-faq-content">
        <div class="accordion" id="tyFaq">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFaq1" aria-expanded="true" aria-controls="collapseFaq1">
                        How many MERN Stack developers do you have?
                    </button>
                </h2>
                <div id="collapseFaq1" class="accordion-collapse collapse show"
                    aria-labelledby="headingFaq1" data-bs-parent="#tyFaq">
                    <div class="accordion-body">
                        <p>We have 15+ MERN Stack developers with experience of over 2-8+ years and are ready
                            to build your dream project most cost-effectively.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                        What is technoyuga Risk-Free Trial Plan?
                    </button>
                </h2>
                <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2"
                    data-bs-parent="#tyFaq">
                    <div class="accordion-body">
                        <p>While hiring sometimes, clients make the mistake of blindly believing the
                            companies and paying them a hefty amount for full-time hiring without even
                            checking the developer's coding capability and efficiency. We completely
                            understand the client's pain here and to make it risk-free for them we just
                            start with a one-week trial to see if we are a good match for each other once
                            you are fully satisfied then we start with any long-term commitment. If you
                            don't like the developer in this trial, you will have other developers to
                            interview, or you can move on.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                        Do I get support after the project is developed?
                    </button>
                </h2>
                <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3"
                    data-bs-parent="#tyFaq">
                    <div class="accordion-body">
                        <p>Yes, we provide maintenance and support after the project is developed. We have
                            different maintenance plans which we can share with you.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFaq4" aria-expanded="false" aria-controls="collapseFaq4">
                        What if I don't get a good developer?
                    </button>
                </h2>
                <div id="collapseFaq4" class="accordion-collapse collapse" aria-labelledby="headingFaq4"
                    data-bs-parent="#tyFaq">
                    <div class="accordion-body">
                        <p>Before hiring, you get to have an interview with the developer and a free trial
                            too. If you are not satisfied, we present you with more options.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFaq5" aria-expanded="false" aria-controls="collapseFaq5">
                        Can I change the developer in the middle?
                    </button>
                </h2>
                <div id="collapseFaq5" class="accordion-collapse collapse" aria-labelledby="headingFaq5"
                    data-bs-parent="#tyFaq">
                    <div class="accordion-body">
                        <p>Yes, you can do that. Even on more complex and long-term projects, we always have
                            multiple developers to have as a backup who know about the project and code
                            structure. </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFaq6" aria-expanded="false" aria-controls="collapseFaq6">
                        How can I transfer my project to Technoyuga from an existing service provider?
                    </button>
                </h2>
                <div id="collapseFaq6" class="accordion-collapse collapse" aria-labelledby="headingFaq6"
                    data-bs-parent="#tyFaq">
                    <div class="accordion-body">
                        <p>You can do that. We have plenty of clients who came to us with an existing app
                            from other companies, and we have helped them in the past too. Before we take
                            your project, we sign the NDA as we would like to have the code inspection and
                            clarity on the project, and it will all be free once we are confident we start
                            working on your project.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq7">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFaq7" aria-expanded="false" aria-controls="collapseFaq7">
                        What other services do you provide?
                    </button>
                </h2>
                <div id="collapseFaq7" class="accordion-collapse collapse" aria-labelledby="headingFaq7"
                    data-bs-parent="#tyFaq">
                    <div class="accordion-body">
                        <p>We are a custom software development company and work as a technology partner for
                            new and established startups to help them develop, manage, maintain and enhance
                            their mobile apps from time to time. At technoyuga, we provide end-to-end mobile
                            app development services, which include UI/UX designing, Mobile App Development
                            using MERN Stack, Native iOS Development, etc. Web Application Development, Full
                            Stack Development, MERN Stack Development, Backend Development and Testing
                            Services.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq8">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFaq8" aria-expanded="false" aria-controls="collapseFaq8">
                        Do you follow agile methodology?
                    </button>
                </h2>
                <div id="collapseFaq8" class="accordion-collapse collapse" aria-labelledby="headingFaq8"
                    data-bs-parent="#tyFaq">
                    <div class="accordion-body">
                        <p>Yes, the Agile method is what we believe is the best for software development.
                            You are in touch throughout and keep reviewing the work and sharing your opinion
                            on that. We also have a 15-minute daily scrum where we schedule the target for
                            the day. This keeps development quality in check.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq9">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFaq9" aria-expanded="false" aria-controls="collapseFaq9">
                        What tools do you use for source code management?
                    </button>
                </h2>
                <div id="collapseFaq9" class="accordion-collapse collapse" aria-labelledby="headingFaq9"
                    data-bs-parent="#tyFaq">
                    <div class="accordion-body">
                        <p>Project and source code management should always be efficient if one wants to
                            manage a big project successfully; we completely understand that. So we use
                            standard tools like Jira for project issue management, GitHub for version
                            controlling and source code management, Trello board for task management, and
                            Slack and skype for team meetings and messaging.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq10">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFaq10" aria-expanded="false" aria-controls="collapseFaq10">
                        How can I trust Technoyuga with the information I shared?
                    </button>
                </h2>
                <div id="collapseFaq10" class="accordion-collapse collapse" aria-labelledby="headingFaq10"
                    data-bs-parent="#tyFaq">
                    <div class="accordion-body">
                        <p>Not a worry, we sign an NDA before we start. Your information is safe with us and
                            we are not going to share it with anyone. Our only aim is to have you growing,
                            because that is going to have us grow as well.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq11">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFaq11" aria-expanded="false" aria-controls="collapseFaq11">
                        Why should I go for MERN Stack?
                    </button>
                </h2>
                <div id="collapseFaq11" class="accordion-collapse collapse" aria-labelledby="headingFaq11"
                    data-bs-parent="#tyFaq">
                    <div class="accordion-body">
                        <p>Using MERN Stack one can create a complex UI that can communicate with the backend
                            server in record time. In short MERN Stack is the best thing you can use to develop
                            complex applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- FAQ Section End -->

 <!-- Looking Hire Dedicated Section Start -->
    <section class="vs-looking-hire-section vs-section-spacer">
        <div class="container">
            <div class="vs-looking-hire-content">
                <div class="vs-heading-center mb-0">
                    <h1 class="vs-section-title">Looking to Hire Dedicated MERN Stack Developers?</h1>
                    <p class="vs-section-description">At TechnoYuga, we're not just a top-tier MERN Stack development company; we're your gateway to a committed squad of MERN Stack developers awaiting your call. Reach out to our seasoned professionals today and unlock extraordinary solutions.</p>
                    <a href="#" class="btn btn-outline-primary">Hire MERN Stack Developers</a>
                </div>
            </div>
        </div>
    </section>
<!-- Looking Hire Dedicated Section End -->


<!-- Request Proposal Popup Start -->
    <div class="modal fade" id="requestProposalModal"  aria-labelledby="requestProposalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="vs-request-modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="row g-0">
                            <div class="col col-12 col-md-12 col-lg-6">
                                <div class="vs-speak-form-content">
                                    <p class="vs-speak-form-description">Request a Proposal</p>
                                    <div class="vs-speak-form">
                                        <form class="row" id="request-proposal-form">
                                            <div class="col col-12 col-md-12">
                                                <input type="hidden" name="_token" value="9aVQue8RgjZletjc1R1j854M1YKcXcMJVuCbYooL">                                                    <label for="inputFirstName" class="form-label">Name *</label>
                                                <div class="vs-input-icon-group">
                                                    <input type="text" class="form-control" id="inputFirstName" name="name"
                                                        placeholder="Enter Your Full Name*">
                                                    <span class="vs-input-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 23.25C6.072 23.25 1.25 18.428 1.25 12.5C1.25 6.572 6.072 1.75 12 1.75C17.928 1.75 22.75 6.572 22.75 12.5C22.75 18.428 17.928 23.25 12 23.25ZM12 3.25C6.899 3.25 2.75 7.399 2.75 12.5C2.75 17.601 6.899 21.75 12 21.75C17.101 21.75 21.25 17.601 21.25 12.5C21.25 7.399 17.101 3.25 12 3.25ZM13.02 16C13.02 15.448 12.573 15 12.02 15H12.01C11.458 15 11.0149 15.448 11.0149 16C11.0149 16.552 11.468 17 12.02 17C12.572 17 13.02 16.552 13.02 16ZM12.75 12.571V8C12.75 7.586 12.414 7.25 12 7.25C11.586 7.25 11.25 7.586 11.25 8V12.571C11.25 12.985 11.586 13.321 12 13.321C12.414 13.321 12.75 12.985 12.75 12.571Z"
                                                                fill="#EB3636" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-12">
                                                <label for="inputEmailAddress" class="form-label">Email address *</label>
                                                <div class="vs-input-icon-group">
                                                    <input type="email" class="form-control" id="inputEmailAddress"
                                                        placeholder="Enter Your Email Address*" name="email">
                                                    <span class="vs-input-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 23.25C6.072 23.25 1.25 18.428 1.25 12.5C1.25 6.572 6.072 1.75 12 1.75C17.928 1.75 22.75 6.572 22.75 12.5C22.75 18.428 17.928 23.25 12 23.25ZM12 3.25C6.899 3.25 2.75 7.399 2.75 12.5C2.75 17.601 6.899 21.75 12 21.75C17.101 21.75 21.25 17.601 21.25 12.5C21.25 7.399 17.101 3.25 12 3.25ZM13.02 16C13.02 15.448 12.573 15 12.02 15H12.01C11.458 15 11.0149 15.448 11.0149 16C11.0149 16.552 11.468 17 12.02 17C12.572 17 13.02 16.552 13.02 16ZM12.75 12.571V8C12.75 7.586 12.414 7.25 12 7.25C11.586 7.25 11.25 7.586 11.25 8V12.571C11.25 12.985 11.586 13.321 12 13.321C12.414 13.321 12.75 12.985 12.75 12.571Z"
                                                                fill="#EB3636" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-12">
                                                <label for="inputPhoneNumber" class="form-label">Phone number</label>
                                                <div class="vs-input-icon-group ">
                                                    <div class="vs-country-select">
                                                        <select class="form-control" id="modalcountries" name="country_code">

                                                        </select>
                                                        <input type="text" class="form-control" id="inputPhoneNumber" name="phone_no"
                                                            placeholder="Enter Your Phone Number">
                                                    </div>


                                                    <span class="vs-input-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 23.25C6.072 23.25 1.25 18.428 1.25 12.5C1.25 6.572 6.072 1.75 12 1.75C17.928 1.75 22.75 6.572 22.75 12.5C22.75 18.428 17.928 23.25 12 23.25ZM12 3.25C6.899 3.25 2.75 7.399 2.75 12.5C2.75 17.601 6.899 21.75 12 21.75C17.101 21.75 21.25 17.601 21.25 12.5C21.25 7.399 17.101 3.25 12 3.25ZM13.02 16C13.02 15.448 12.573 15 12.02 15H12.01C11.458 15 11.0149 15.448 11.0149 16C11.0149 16.552 11.468 17 12.02 17C12.572 17 13.02 16.552 13.02 16ZM12.75 12.571V8C12.75 7.586 12.414 7.25 12 7.25C11.586 7.25 11.25 7.586 11.25 8V12.571C11.25 12.985 11.586 13.321 12 13.321C12.414 13.321 12.75 12.985 12.75 12.571Z"
                                                                fill="#EB3636" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-12">
                                                <label for="inputBudget" class="form-label">Budget</label>
                                                <select class="form-select" id="inputBudget" name="budget">
                                                    <option value="" selected>Choose Budget</option>
                                                    <option value="$5000 - $10000">$5000 - $10000</option>
                                                    <option value="$10000 - $15000">$10000 - $15000</option>
                                                    <option value="$15000 - $20000">$15000 - $20000</option>
                                                    <option value="$20000 - $30000">$20000 - $30000</option>
                                                    <option value="$30000 or More">$30000 or More</option>
                                                </select>
                                            </div>
                                            <div class="col col-12">
                                                <label for="inputAddress" class="form-label">Brief about the project
                                                    *</label>
                                                <textarea rows="5" class="form-control"
                                                    placeholder="Please brief your requirements in detail. The more we know about your project  idea, the better we can guide and assist you.*" name="project_description"></textarea>
                                            </div>
                                            <div class="col col-12">
                                                <label for="inputfile" class="form-label">Have a file to share?</label>
                                                <div class="vs-choose-file">
                                                    <input type="file" class="form-control" name="document">
                                                    <span>
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M21.75 11.041C21.75 13.768 19.8139 16.138 17.1479 16.676C17.0979 16.686 17.048 16.691 16.999 16.691C16.649 16.691 16.3369 16.445 16.2649 16.089C16.1829 15.683 16.4461 15.287 16.8521 15.206C18.8221 14.809 20.25 13.057 20.25 11.041C20.25 8.69702 18.344 6.79102 16 6.79102C15.717 6.79102 15.4449 6.81604 15.1689 6.86804C14.8639 6.92604 14.5551 6.78902 14.3931 6.52502C14.1011 6.05402 13.7301 5.61399 13.2891 5.21899C12.2511 4.29899 10.904 3.79102 9.5 3.79102C6.329 3.79102 3.75 6.37002 3.75 9.54102C3.75 11.869 5.13906 13.952 7.28906 14.849C7.67106 15.008 7.85089 15.448 7.69189 15.83C7.53189 16.213 7.09094 16.392 6.71094 16.233C4.00094 15.103 2.25 12.476 2.25 9.54102C2.25 5.54302 5.502 2.29102 9.5 2.29102C11.271 2.29102 12.9721 2.93304 14.2871 4.10004C14.7071 4.47604 15.0761 4.88502 15.3911 5.32202C15.5921 5.30102 15.794 5.29102 16 5.29102C19.171 5.29102 21.75 7.87002 21.75 11.041ZM12.531 10.511C12.462 10.442 12.3791 10.387 12.2871 10.349C12.1041 10.273 11.8971 10.273 11.7141 10.349C11.6221 10.387 11.539 10.442 11.47 10.511L9.46997 12.511C9.17697 12.804 9.17697 13.279 9.46997 13.572C9.76297 13.865 10.238 13.865 10.531 13.572L11.251 12.852V21.041C11.251 21.455 11.587 21.791 12.001 21.791C12.415 21.791 12.751 21.455 12.751 21.041V12.852L13.4709 13.572C13.6169 13.718 13.809 13.792 14.001 13.792C14.193 13.792 14.385 13.719 14.531 13.572C14.824 13.279 14.824 12.804 14.531 12.511L12.531 10.511Z"
                                                                fill="#C0C0C0" />
                                                        </svg>
                                                    </span>
                                                    <p>Upload your project brief here</p>
                                                </div>

                                                <div class="preview"></div>
                                            </div>
                                            <div class="col col-12">
                                                <div class="text-center vs-form-btn">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-12 col-lg-6">
                                <div class="vs-request-modal-content__inner">
                                    <h3 class="vs-modal-trusted-title">Trusted by</h3>
                                    <ul class="vs-modal-trusted-list list-unstyled">
                                        <li class="vs-modal-trusted-item">
                                            <img src="{{asset('web-assets/images/partner-logo2.png')}}" alt="partner-logo">
                                        </li>
                                        <li class="vs-modal-trusted-item">
                                            <img src="{{asset('web-assets/images/partner-logo4.png')}}" alt="partner-logo">
                                        </li>
                                        <li class="vs-modal-trusted-item">
                                            <img src="{{asset('web-assets/images/partner-logo5.png')}}" alt="partner-logo">
                                        </li>
                                        <li class="vs-modal-trusted-item">
                                            <img src="{{asset('web-assets/images/partner-logo8.png')}}" alt="partner-logo">
                                        </li>
                                        <li class="vs-modal-trusted-item">
                                            <img src="{{asset('web-assets/images/partner-logo9.png')}}" alt="partner-logo">
                                        </li>
                                    </ul>
                                    <div class="vs-request-modal-testimonial-content">
                                        <div class="vs-testimonial-slider2">
                                            <div class="vs-testimonial-item">
                                                <div class="vs-testimonial-card">
                                                    <div class="vs-testimonial-card-head">
                                                        <div class="vs-testimonial-user">
                                                            <div class="vs-testimonial-user-profile">
                                                                <img src="{{asset('web-assets/images/valon.png')}}" alt="valon"
                                                                    class="img-fluid">
                                                            </div>
                                                            <div class="vs-testimonial-user-info">
                                                                <h4 class="vs-testimonial-username">Valon Miski</h4>
                                                                <label class="vs-testimonial-designation">Founder,
                                                                    Gfacility</label>
                                                                <div class="vs-testimonial-user-country">
                                                                    <img src="{{asset('web-assets/images/belgium.png')}}"
                                                                        alt="belgium" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vs-testimonial-description">
                                                        <p>Awesome work culture. Requested some difficult and
                                                            specific SDK integrations in
                                                            my flutter application. Even Though it was complex, they
                                                            made sure to understand
                                                            it properly and to integrate it. Thanks to the
                                                            dedication and overtime this
                                                            difficult project was delivered within time and budget.
                                                            Without a doubt one of
                                                            my best experiences until now. Well done!</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="vs-testimonial-item">
                                                <div class="vs-testimonial-card">
                                                    <div class="vs-testimonial-card-head">
                                                        <div class="vs-testimonial-user">
                                                            <div class="vs-testimonial-user-profile">
                                                                <img src="{{asset('web-assets/images/eric.png')}}" alt="Eric Liang"
                                                                    class="img-fluid">
                                                            </div>
                                                            <div class="vs-testimonial-user-info">
                                                                <h4 class="vs-testimonial-username">Eric Liang</h4>
                                                                <label class="vs-testimonial-designation">PANTAYA,
                                                                    Los Angeles</label>
                                                                <div class="vs-testimonial-user-country">
                                                                    <img src="{{asset('web-assets/images/USA.png')}}" alt="USA"
                                                                        class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vs-testimonial-description">
                                                        <p>Thanks Krishna for completing this task in our social
                                                            networking app. This was my
                                                            second project with Krishna and the team Technoyuga,
                                                            they did a decent job and
                                                            delivered the work on time . I'm happy to recommend them
                                                            for any Web and react
                                                            native app development work.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="vs-testimonial-item">
                                                <div class="vs-testimonial-card">
                                                    <div class="vs-testimonial-card-head">
                                                        <div class="vs-testimonial-user">
                                                            <div class="vs-testimonial-user-profile">
                                                                <img src="{{asset('web-assets/images/aziz.png')}}" alt="AZIZ H L"
                                                                    class="img-fluid">
                                                            </div>
                                                            <div class="vs-testimonial-user-info">
                                                                <h4 class="vs-testimonial-username">AZIZ H L</h4>
                                                                <label class="vs-testimonial-designation">Director,
                                                                    MooMen</label>
                                                                <div class="vs-testimonial-user-country">
                                                                    <img src="{{asset('web-assets/images/UK.png')}}" alt="UK"
                                                                        class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vs-testimonial-description">
                                                        <p>Very swift and eloquent communication, following up daily
                                                            on the progress of the
                                                            project and robust reactivity on each step of the way.
                                                            very satisfied with the
                                                            professionalism and work they have done. I would highly
                                                            recommend it.</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Request Proposal Popup End -->
@endsection
