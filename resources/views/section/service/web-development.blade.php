@extends('layouts.app')

@section('title')
    Web App Development
@endsection

@section('mainBody')

    <!-- Landing Section Start -->
    <section class="vs-landing-section vs-inner-page-landing-section vs-web-app-landing-section">
        <div class="container">
          <div class="vs-landing-content">
            <div class="vs-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Web App Development
                  </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col col-12 col-md-12 col-lg-6">
                <div class="vs-landing-content__inner">
                  <h1 class="vs-section-title vs-title-border">
                    Web App Development <br />Services
                  </h1>
                  <p class="vs-section-description">
                    Plazmasoft offers comprehensive web app development
                    services, specializing in creating custom, responsive, and
                    user-friendly web applications. Our expert web app
                    developers leverages the latest technologies to deliver
                    innovative solutions tailored to clients' specific needs.
                  </p>
                  <div class="vs-landing-btn">
                    <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                      data-bs-target="#requestProposalModal">Connect with Experts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="vs-lading-img">
            <img src="/web-assets/images/web-app-img.png" alt="Web App Development" class="img-fluid" />
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
                <img src="/web-assets/images/decathlon-logo.svg" alt="Partner Logo" class="img-fluid"
                  style="height: 20px" />
              </div>
              <div class="vs-landing-partner-item">
                <img src="/web-assets/images/gfacility-logo.svg" alt="Partner Logo" class="img-fluid"
                  style="height: 30px" />
              </div>
              <div class="vs-landing-partner-item">
                <img src="/web-assets/images/akasha-logo.svg" alt="Partner Logo" class="img-fluid" style="height: 30px" />
              </div>
              <div class="vs-landing-partner-item">
                <img src="/web-assets/images/mfine-logo.svg" alt="Partner Logo" class="img-fluid" style="height: 30px" />
              </div>
              <div class="vs-landing-partner-item">
                <img src="/web-assets/images/tengopay.svg" alt="Partner Logo" class="img-fluid" style="height: 35px" />
              </div>
              <div class="vs-landing-partner-item">
                <img src="/web-assets/images/justlife-logo.svg" alt="Partner Logo" class="img-fluid"
                  style="height: 30px" />
              </div>
              <div class="vs-landing-partner-item">
                <!-- <img src="/web-assets/images/ordeno-logo.png" alt="Partner Logo" class="img-fluid" style="height:30px"> -->
                <img src="/web-assets/images/eu-logo.png" alt="Partner Logo" class="img-fluid" style="height: 60px" />
              </div>
              <!-- <div class="vs-landing-partner-item">
                      <img src="/web-assets/images/catholic-network-logo.png" alt="Partner Logo" class="img-fluid" style="height:30px">
                  </div> -->
            </div>
          </div>
        </div>
      </section>
      <!-- Transparency Section End -->
      <!-- Services Section Start -->
      <section class="vs-service-section vs-section-spacer bg-transparent vs-innner-page-services-section">
        <div class="vs-service-particles">
          <img src="/web-assets/images/service-particle-img.svg" alt="service particle" class="img-fluid" />
        </div>
        <div class="container">
          <div class="vs-heading-center">
            <h2 class="vs-section-title vs-title-border">
              Professional Web App Development Services
            </h2>
            <p class="vs-section-description">
              Get ready to avail expert web
              <a href="https://plazmasoft.com/services/mobile-app-development">app development services</a>
              to create tailored, efficient, and user-friendly solutions for
              your business needs. Contact us for a competitive edge in the
              digital landscape.
            </p>
          </div>
          <div class="vs-service-content mb-0">
            <div class="row">
              <div class="col col-12 col-md-6 col-lg-4">
                <div class="vs-service-card">
                  <a href="#" class="vs-service-card-link">
                    <h3 class="vs-service-card-title">Front-end Development</h3>
                    <div class="vs-service-card-logo-list">
                      <div class="vs-service-card-logo-item">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M2.00337 1.19174L4.3047 31.0827C4.33925 31.5315 4.6385 31.9143 5.06125 32.0504L17.1709 35.9483C17.385 36.0172 17.6149 36.0172 17.8291 35.9483L29.9387 32.0504C30.3615 31.9143 30.6607 31.5315 30.6953 31.0827L32.9966 1.19174C33.0461 0.549104 32.5459 0 31.911 0H3.08906C2.45421 0 1.95396 0.549104 2.00337 1.19174ZM27.095 10.4659H12.0968L12.5494 14.7036H26.7688L25.8386 26.7846L17.5 29.4687L9.16144 26.7846L8.67548 20.473H13.0522V23.5689L17.617 24.8128L22.1545 23.5689L22.5065 18.6349H8.53394L7.60629 6.58552H27.3937L27.095 10.4659Z"
                            fill="#003262" />
                        </svg>
                      </div>
                    </div>
                    <p class="vs-service-card-description">
                      We create user-friendly and robust Android apps tailored
                      to your business needs.
                    </p>
                  </a>
                </div>
              </div>
              <div class="col col-12 col-md-6 col-lg-4">
                <div class="vs-service-card">
                  <a href="#" class="vs-service-card-link">
                    <h3 class="vs-service-card-title">Back-end Development</h3>
                    <div class="vs-service-card-logo-list">
                      <div class="vs-service-card-logo-item">
                        <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_4606_21305)">
                            <path
                              d="M17.9996 36.5C17.506 36.5 17.0413 36.372 16.6068 36.1351L12.2014 33.5216C11.5395 33.1567 11.8655 33.0287 12.0733 32.9591C12.9718 32.6631 13.1303 32.5942 14.0584 32.0619C14.1569 31.993 14.2858 32.0324 14.3943 32.0914L17.7722 34.1129C17.9004 34.1818 18.0687 34.1818 18.1672 34.1129L31.3826 26.47C31.5107 26.4011 31.5804 26.2724 31.5804 26.1051V10.8677C31.5804 10.7004 31.5114 10.5717 31.3826 10.5028L18.1672 2.89923C18.0391 2.83032 17.8708 2.83032 17.7722 2.89923L4.55687 10.5028C4.42871 10.5717 4.359 10.7299 4.359 10.8677V26.1149C4.359 26.2429 4.42801 26.4109 4.55687 26.4798L8.17213 28.5611C10.1276 29.5574 11.3529 28.3937 11.3529 27.2392V12.1896C11.3529 11.992 11.5205 11.7951 11.7479 11.7951H13.4373C13.6351 11.7951 13.8323 11.9625 13.8323 12.1896V27.2392C13.8323 29.8527 12.4099 31.3714 9.92131 31.3714C9.16079 31.3714 8.56788 31.3714 6.87926 30.5432L3.39287 28.5611C2.53377 28.0682 2 27.1408 2 26.1451V10.9071C2 9.91076 2.53306 8.99388 3.39287 8.49115L16.6068 0.847518C17.4363 0.384161 18.5623 0.384161 19.3918 0.847518L32.6071 8.49045C33.4662 8.98334 34 9.91076 34 10.9064V26.1536C34 27.1499 33.4669 28.0668 32.6071 28.5695L19.3918 36.2124C18.958 36.4009 18.4637 36.5 17.9996 36.5ZM22.0691 26.0165C16.2709 26.0165 15.0759 23.3734 15.0759 21.1248C15.0759 20.9273 15.2435 20.7304 15.4709 20.7304H17.2096C17.4074 20.7304 17.575 20.8584 17.575 21.0658C17.8419 22.8215 18.6024 23.6793 22.1085 23.6793C24.8936 23.6793 26.0794 23.0479 26.0794 21.5587C26.0794 20.7009 25.7435 20.0695 21.4072 19.6455C17.7919 19.2806 15.54 18.4916 15.54 15.6117C15.54 12.9293 17.7919 11.3416 21.5649 11.3416C25.802 11.3416 27.8863 12.8013 28.1532 15.9667C28.1532 16.0652 28.1236 16.1643 28.0546 16.2628C27.9856 16.3317 27.887 16.3907 27.7877 16.3907H26.0695C25.9019 16.3907 25.7336 16.2628 25.7041 16.0947C25.309 14.28 24.2816 13.6788 21.5656 13.6788C18.5236 13.6788 18.1581 14.7342 18.1581 15.5329C18.1581 16.4899 18.5926 16.7852 22.6916 17.3181C26.761 17.8504 28.687 18.6098 28.687 21.4504C28.6673 24.3592 26.2766 26.0165 22.0691 26.0165Z"
                              fill="#003262" fill-opacity="1" />
                          </g>
                          <defs>
                            <clipPath id="clip0_4606_21305">
                              <rect width="36" height="36" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>
                    <p class="vs-service-card-description">
                      Reach a wider audience with apps that work seamlessly on
                      iOS, Android, and Windows.
                    </p>
                  </a>
                </div>
              </div>
              <div class="col col-12 col-md-6 col-lg-4">
                <div class="vs-service-card">
                  <a href="#" class="vs-service-card-link">
                    <h3 class="vs-service-card-title">
                      Full Stack Development
                    </h3>
                    <div class="vs-service-card-logo-list">
                      <div class="vs-service-card-logo-item">
                        <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M30.8007 16.7102L32.6299 17.808C32.7428 17.8756 32.8362 17.9713 32.9011 18.0858C32.9659 18.2002 33 18.3296 33 18.4612C33 18.5928 32.9659 18.7221 32.9011 18.8366C32.8362 18.9511 32.7428 19.0468 32.6299 19.1144L18.5 27.5953L4.37006 19.1144C4.25722 19.0468 4.16381 18.9511 4.09895 18.8366C4.03409 18.7221 4 18.5928 4 18.4612C4 18.3296 4.03409 18.2002 4.09895 18.0858C4.16381 17.9713 4.25722 17.8756 4.37006 17.808L6.19927 16.7102L18.5 24.0948L30.8007 16.7102ZM30.8007 23.8664L32.6299 24.9642C32.7428 25.0318 32.8362 25.1275 32.9011 25.242C32.9659 25.3565 33 25.4858 33 25.6174C33 25.749 32.9659 25.8784 32.9011 25.9928C32.8362 26.1073 32.7428 26.203 32.6299 26.2706L19.2837 34.2826C19.047 34.4248 18.7761 34.5 18.5 34.5C18.2239 34.5 17.953 34.4248 17.7163 34.2826L4.37006 26.2706C4.25722 26.203 4.16381 26.1073 4.09895 25.9928C4.03409 25.8784 4 25.749 4 25.6174C4 25.4858 4.03409 25.3565 4.09895 25.242C4.16381 25.1275 4.25722 25.0318 4.37006 24.9642L6.19927 23.8664L18.5 31.2511L30.8007 23.8664ZM19.2822 2.71592L32.6299 10.7279C32.7428 10.7955 32.8362 10.8912 32.9011 11.0056C32.9659 11.1201 33 11.2495 33 11.3811C33 11.5127 32.9659 11.642 32.9011 11.7565C32.8362 11.871 32.7428 11.9667 32.6299 12.0343L18.5 20.5152L4.37006 12.0358C4.25722 11.9682 4.16381 11.8725 4.09895 11.758C4.03409 11.6435 4 11.5142 4 11.3826C4 11.251 4.03409 11.1216 4.09895 11.0072C4.16381 10.8927 4.25722 10.797 4.37006 10.7294L17.7163 2.71744C17.953 2.57517 18.2239 2.5 18.5 2.5C18.7761 2.5 19.047 2.57517 19.2837 2.71744L19.2822 2.71592Z"
                            fill="#003262" />
                        </svg>
                      </div>
                    </div>
                    <p class="vs-service-card-description">
                      We build visually stunning and fast-performing mobile apps
                      for iOS and Android using Flutter.
                    </p>
                  </a>
                </div>
              </div>
              <div class="col col-12 col-md-6 col-lg-4">
                <div class="vs-service-card">
                  <a href="#" class="vs-service-card-link">
                    <h3 class="vs-service-card-title">MERN Stack</h3>
                    <div class="vs-service-card-logo-list">
                      <div class="vs-service-card-logo-item">
                        <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M30.8007 16.7102L32.6299 17.808C32.7428 17.8756 32.8362 17.9713 32.9011 18.0858C32.9659 18.2002 33 18.3296 33 18.4612C33 18.5928 32.9659 18.7221 32.9011 18.8366C32.8362 18.9511 32.7428 19.0468 32.6299 19.1144L18.5 27.5953L4.37006 19.1144C4.25722 19.0468 4.16381 18.9511 4.09895 18.8366C4.03409 18.7221 4 18.5928 4 18.4612C4 18.3296 4.03409 18.2002 4.09895 18.0858C4.16381 17.9713 4.25722 17.8756 4.37006 17.808L6.19927 16.7102L18.5 24.0948L30.8007 16.7102ZM30.8007 23.8664L32.6299 24.9642C32.7428 25.0318 32.8362 25.1275 32.9011 25.242C32.9659 25.3565 33 25.4858 33 25.6174C33 25.749 32.9659 25.8784 32.9011 25.9928C32.8362 26.1073 32.7428 26.203 32.6299 26.2706L19.2837 34.2826C19.047 34.4248 18.7761 34.5 18.5 34.5C18.2239 34.5 17.953 34.4248 17.7163 34.2826L4.37006 26.2706C4.25722 26.203 4.16381 26.1073 4.09895 25.9928C4.03409 25.8784 4 25.749 4 25.6174C4 25.4858 4.03409 25.3565 4.09895 25.242C4.16381 25.1275 4.25722 25.0318 4.37006 24.9642L6.19927 23.8664L18.5 31.2511L30.8007 23.8664ZM19.2822 2.71592L32.6299 10.7279C32.7428 10.7955 32.8362 10.8912 32.9011 11.0056C32.9659 11.1201 33 11.2495 33 11.3811C33 11.5127 32.9659 11.642 32.9011 11.7565C32.8362 11.871 32.7428 11.9667 32.6299 12.0343L18.5 20.5152L4.37006 12.0358C4.25722 11.9682 4.16381 11.8725 4.09895 11.758C4.03409 11.6435 4 11.5142 4 11.3826C4 11.251 4.03409 11.1216 4.09895 11.0072C4.16381 10.8927 4.25722 10.797 4.37006 10.7294L17.7163 2.71744C17.953 2.57517 18.2239 2.5 18.5 2.5C18.7761 2.5 19.047 2.57517 19.2837 2.71744L19.2822 2.71592Z"
                            fill="#003262" />
                        </svg>
                      </div>
                    </div>
                    <p class="vs-service-card-description">
                      Our skilled team develops cutting-edge iOS apps that align
                      with your business objectives.
                    </p>
                  </a>
                </div>
              </div>
              <div class="col col-12 col-md-6 col-lg-4">
                <div class="vs-service-card">
                  <a href="#" class="vs-service-card-link">
                    <h3 class="vs-service-card-title">React js</h3>
                    <div class="vs-service-card-logo-list">
                      <div class="vs-service-card-logo-item">
                        <svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_4606_21342)">
                            <path
                              d="M16.4329 18.4599C16.4329 16.4651 18.0349 14.8447 20.0071 14.8447C21.9794 14.8447 23.5813 16.4651 23.5813 18.4599C23.5813 20.4548 21.9794 22.0752 20.0071 22.0752C18.0349 22.0752 16.4329 20.4548 16.4329 18.4599ZM40 18.4599C40 20.9445 37.1022 23.4579 32.4315 25.0206C32.1894 25.0998 31.9402 25.1791 31.6839 25.2583C31.7764 25.6256 31.8548 25.9856 31.926 26.3385C32.3603 28.571 32.4315 30.6451 32.1253 32.3303C31.7978 34.1235 31.0573 35.3982 29.9893 36.0247C29.4553 36.3416 28.8216 36.5 28.1168 36.5C26.1801 36.5 23.7237 35.3189 21.1606 33.0864C20.7974 32.7696 20.4414 32.4383 20.0783 32.0854C19.8006 32.3591 19.523 32.6183 19.2453 32.8632C17.5507 34.3611 15.8063 35.4558 14.2115 36.0247C13.3784 36.3272 12.5952 36.4784 11.8975 36.4784C11.1712 36.4784 10.5304 36.32 9.98932 36.0031C7.94589 34.8076 7.23389 31.3652 8.09541 26.7922C8.18085 26.3241 8.28765 25.8416 8.40869 25.3519C8.03133 25.2439 7.66821 25.1286 7.31933 25.0062C5.19046 24.2717 3.38199 23.2922 2.09327 22.176C0.726237 20.9949 0 19.7058 0 18.4599C0 16.069 2.59167 13.7285 6.94197 12.2017C7.41901 12.0361 7.91741 11.8777 8.43005 11.7264C8.31613 11.2727 8.21645 10.8262 8.13101 10.3869C7.71093 8.21204 7.63261 6.21719 7.90317 4.61123C8.20221 2.86123 8.90708 1.61535 9.95372 1.00322C12.0755 -0.242663 15.6853 1.03923 19.3592 4.34477C19.5799 4.54641 19.8006 4.75526 20.0285 4.97131C20.3631 4.64724 20.6978 4.33757 21.0253 4.0423C22.6771 2.58757 24.3503 1.52173 25.8597 0.960007C27.5045 0.34787 28.9284 0.34787 29.968 0.952806C32.0968 2.19148 32.8017 5.99394 31.8049 10.8622C31.748 11.1575 31.6768 11.4528 31.6056 11.7552C32.047 11.8849 32.4742 12.0217 32.8871 12.1657C34.9591 12.8859 36.7035 13.8221 37.9423 14.8591C39.288 15.997 40 17.2429 40 18.4599ZM21.2246 6.20279C22.3638 7.44146 23.503 8.88179 24.5995 10.4661C26.4863 10.6462 28.2876 10.9343 29.9537 11.3231C30.0178 11.0495 30.0819 10.783 30.1317 10.5166C31.0644 5.92912 30.2599 3.12049 29.1136 2.45074C28.5297 2.11227 27.5828 2.15548 26.4436 2.58037C25.1264 3.07008 23.6383 4.0279 22.1431 5.34579C21.837 5.61225 21.5308 5.90032 21.2246 6.20279ZM10.5233 24.106C11.6625 24.3581 12.8943 24.5597 14.2043 24.7037C13.7771 24.0268 13.3571 23.3354 12.9512 22.6297C12.5525 21.9383 12.1752 21.2398 11.8192 20.5412C11.3136 21.7511 10.8722 22.9538 10.5233 24.106ZM12.9512 14.3766C13.3499 13.6853 13.7558 13.0011 14.1759 12.3386C12.9085 12.497 11.691 12.713 10.5447 12.9651C10.8936 14.103 11.3208 15.2768 11.8192 16.4723C12.1752 15.7737 12.5525 15.0752 12.9512 14.3766ZM14.4322 21.7655C15.0516 22.8457 15.7067 23.8972 16.3902 24.8982C17.5507 24.9702 18.7611 25.0134 20.0071 25.0134C21.2602 25.0134 22.4849 24.9702 23.6668 24.8838C24.3147 23.8972 24.9555 22.8529 25.5892 21.7511C26.2157 20.6564 26.7925 19.5546 27.3122 18.4743C26.7925 17.4157 26.2229 16.3355 25.5892 15.2336C24.9697 14.1462 24.3218 13.1091 23.6597 12.1153C22.4706 12.0217 21.246 11.9785 20.0071 11.9785C18.7825 11.9785 17.5578 12.0289 16.3617 12.1225C15.6924 13.1163 15.0374 14.1606 14.4251 15.2408C13.8127 16.3139 13.2431 17.4085 12.7234 18.5032C13.2431 19.5906 13.8127 20.6852 14.4322 21.7655ZM25.8455 24.6749C27.1627 24.5165 28.4158 24.3005 29.5764 24.034C29.2204 22.9033 28.7718 21.7079 28.2307 20.4692C27.8676 21.1822 27.476 21.9023 27.0701 22.6153C26.6643 23.321 26.2585 24.0124 25.8455 24.6749ZM29.4909 12.9867C28.3375 12.7203 27.1129 12.5042 25.8384 12.3386C26.2513 12.9939 26.6572 13.6709 27.0559 14.3622C27.4617 15.0752 27.8462 15.7809 28.2093 16.4723C28.7148 15.2768 29.1492 14.103 29.4909 12.9867ZM17.6504 10.3077C18.4265 10.2717 19.2097 10.2501 20 10.2501C20.8046 10.2501 21.5949 10.2717 22.3852 10.3077C21.6091 9.26348 20.8188 8.29846 20.0285 7.43426C19.2239 8.30566 18.4265 9.27068 17.6504 10.3077ZM9.81132 10.0557C9.88964 10.4661 9.9822 10.8766 10.089 11.3015C11.748 10.9198 13.5493 10.639 15.4361 10.4589C16.5326 8.89619 17.6789 7.46307 18.8394 6.19558C18.6401 6.00114 18.4407 5.8139 18.2414 5.64106C14.7668 2.52996 11.9616 1.8314 10.8152 2.50115C10.2314 2.83963 9.79708 3.69662 9.5906 4.90649C9.35564 6.30361 9.42684 8.08961 9.81132 10.0557ZM10.8366 18.5104C10.0463 16.7676 9.38412 15.0464 8.88573 13.3972C8.40869 13.534 7.95301 13.6781 7.51157 13.8365C3.51015 15.248 1.71591 17.1781 1.71591 18.4671C1.71591 19.8066 3.64543 21.9167 7.87469 23.3786C8.19509 23.4867 8.52261 23.5947 8.86436 23.6955C9.36988 22.0175 10.032 20.2748 10.8366 18.5104ZM18.8822 30.8539C17.7074 29.5864 16.5539 28.1389 15.4503 26.5618C13.4995 26.4033 11.691 26.1369 10.0676 25.7696C9.95372 26.2305 9.86116 26.677 9.77572 27.1091C8.9854 31.322 9.74724 33.857 10.8437 34.4979C11.99 35.1677 14.7597 34.534 18.1274 31.5525C18.3695 31.3364 18.6258 31.0988 18.8822 30.8539ZM22.4208 26.6842C21.6305 26.7202 20.8188 26.7418 20.0071 26.7418C19.2097 26.7418 18.4336 26.7274 17.6718 26.6986C18.4621 27.75 19.2666 28.7222 20.0783 29.608C20.8544 28.7367 21.6447 27.7644 22.4208 26.6842ZM30.2599 26.677C30.1958 26.3529 30.1246 26.0288 30.0392 25.6904C28.3873 26.0793 26.5646 26.3601 24.628 26.533C23.5244 28.1533 22.3923 29.6008 21.2745 30.8395C21.6091 31.1708 21.9509 31.4805 22.2784 31.7685C25.4895 34.5628 28.0384 35.1677 29.142 34.5196C30.2884 33.857 31.1285 31.1132 30.2599 26.677ZM38.2983 18.4599C38.2983 17.7758 37.7857 16.9692 36.853 16.1842C35.7779 15.2768 34.2115 14.4486 32.3389 13.7933C31.9544 13.6637 31.5557 13.534 31.1499 13.4116C30.6586 15.0176 30.0036 16.7244 29.199 18.4671C30.0392 20.2603 30.7227 21.9815 31.2211 23.5875C31.4489 23.5155 31.6768 23.4435 31.8975 23.3714C36.2905 21.9023 38.2983 19.7922 38.2983 18.4599Z"
                              fill="#003262" />
                          </g>
                          <defs>
                            <clipPath id="clip0_4606_21342">
                              <rect width="40" height="36" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>
                    <p class="vs-service-card-description">
                      Our skilled team develops cutting-edge iOS apps that align
                      with your business objectives.
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Services Section End -->

      <!-- Something Everyone Section Start -->
      <section class="vs-something-everyone-section vs-section-spacer">
        <div class="vs-something-particle-top">
          <img src="/web-assets/images/something-particle-top.svg" alt="something-particle-top" class="img-fluid" />
        </div>
        <div class="vs-something-particle-bottom">
          <img src="/web-assets/images/something-particle-bottom.svg" alt="something-particle-bottom" class="img-fluid" />
        </div>
        <div class="container">
          <div class="vs-heading-center w-100">
            <h2 class="vs-section-title vs-title-border">
              Affordable Web App Development Models
            </h2>
            <p class="vs-section-description w-75 m-auto">
              Are you looking forward to seek cost-effective web app development
              services? Look no further than Plazmasoft. We offer reasonable
              models for web app development. Here are our top models you can
              choose from!
            </p>
          </div>
          <div class="vs-everyone-content">
            <div class="row">
              <div class="col col-12 col-md-6 col-lg-4">
                <div class="vs-everyone-card">
                  <div class="vs-everyone-card-head">
                    <div class="vs-everyone-card-icon">
                      <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                          <path d="M38.1992 22.7988H38.5992C38.4992 22.5988 38.2992 22.4988 38.1992 22.2988V22.7988Z"
                            fill="#CCCCCC" />
                          <path
                            d="M22.7984 50.7004C29.6468 50.7004 35.1984 45.1487 35.1984 38.3004C35.1984 31.4521 29.6468 25.9004 22.7984 25.9004C15.9501 25.9004 10.3984 31.4521 10.3984 38.3004C10.3984 45.1487 15.9501 50.7004 22.7984 50.7004Z"
                            fill="#FAD87C" />
                          <path opacity="0.3"
                            d="M27.0994 46.3C20.2994 46.3 14.6994 40.8 14.6994 33.9C14.6994 31.7 15.2994 29.5 16.3994 27.5C10.4994 31 8.49938 38.6 11.9994 44.5C15.4994 50.4 23.0994 52.4 28.9994 48.9C30.7994 47.8 32.2994 46.3 33.3994 44.5C31.4994 45.7 29.2994 46.3 27.0994 46.3Z"
                            fill="#E97424" />
                          <path d="M60 22.8008H31V60.0008H60V22.8008Z" fill="#2996BF" />
                          <path d="M60 22.8008H31V31.1008H60V22.8008Z" fill="#E3646A" />
                          <path d="M39.2992 35.1992H35.1992V39.2992H39.2992V35.1992Z" fill="#FAD87C" />
                          <path d="M47.4984 35.1992H43.3984V39.2992H47.4984V35.1992Z" fill="#FAD87C" />
                          <path d="M55.7992 35.1992H51.6992V39.2992H55.7992V35.1992Z" fill="#FAD87C" />
                          <path d="M39.2992 43.3984H35.1992V47.4984H39.2992V43.3984Z" fill="#FAD87C" />
                          <path d="M47.4984 43.3984H43.3984V47.4984H47.4984V43.3984Z" fill="#FAD87C" />
                          <path d="M39.2992 51.6992H35.1992V55.7992H39.2992V51.6992Z" fill="#FAD87C" />
                          <path d="M47.4984 51.6992H43.3984V55.7992H47.4984V51.6992Z" fill="#FAD87C" />
                          <path d="M55.7992 43.3984H51.6992V55.7984H55.7992V43.3984Z" fill="#FAD87C" />
                          <path
                            d="M22.7992 45.4996C20.4992 45.4996 18.6992 43.5996 18.6992 41.3996H20.7992C20.7992 42.4996 21.6992 43.4996 22.8992 43.4996C24.0992 43.4996 24.9992 42.5996 24.9992 41.3996C24.9992 40.5996 24.4992 39.8996 23.6992 39.6996L21.3992 38.8996C19.7992 38.3996 18.6992 36.8996 18.6992 35.1996C18.6992 32.8996 20.5992 31.0996 22.7992 31.0996C24.9992 31.0996 26.8992 32.9996 26.8992 35.1996H24.7992C24.7992 34.0996 23.8992 33.0996 22.6992 33.0996C21.4992 33.0996 20.5992 33.9996 20.5992 35.1996C20.5992 35.9996 21.0992 36.6996 21.8992 36.8996L24.1992 37.6996C25.7992 38.1996 26.8992 39.6996 26.8992 41.3996C26.8992 43.6996 24.9992 45.4996 22.7992 45.4996Z"
                            fill="#006684" />
                          <path d="M23.7992 29H21.6992V32.1H23.7992V29Z" fill="#006684" />
                          <path d="M23.7992 44.5H21.6992V47.6H23.7992V44.5Z" fill="#006684" />
                          <path d="M56.9008 25.9004H54.8008V28.0004H56.9008V25.9004Z" fill="#006684" />
                          <path d="M52.7992 25.9004H50.6992V28.0004H52.7992V25.9004Z" fill="#006684" />
                          <path d="M48.6977 25.9004H46.5977V28.0004H48.6977V25.9004Z" fill="#006684" />
                        </g>
                        <defs>
                          <clipPath id="clip0_5996_33591">
                            <rect width="60" height="60" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <h3 class="vs-everyone-card-title">Fixed Budget</h3>
                  </div>
                  <div class="vs-everyone-card-body">
                    <p class="vs-everyone-description">
                      Pay a fixed web app development cost to the dedicated web
                      app developers for your project.
                    </p>
                    <ul class="vs-everyone-feature-list list-unstyled">
                      <li class="vs-everyone-feature-item">
                        <span class="vs-everyone-feature-icon">
                          <img src="/web-assets/images/check-mark.svg" alt="check-mark" />
                        </span>
                        <span>No add-on cost</span>
                      </li>
                      <li class="vs-everyone-feature-item">
                        <span class="vs-everyone-feature-icon">
                          <img src="/web-assets/images/check-mark.svg" alt="check-mark" />
                        </span>
                        <span>Focused pricing</span>
                      </li>
                      <li class="vs-everyone-feature-item">
                        <span class="vs-everyone-feature-icon">
                          <img src="/web-assets/images/check-mark.svg" alt="check-mark" />
                        </span>
                        <span>Pay for quality work</span>
                      </li>
                      <li class="vs-everyone-feature-item">
                        <span class="vs-everyone-feature-icon">
                          <img src="/web-assets/images/check-mark.svg" alt="check-mark" />
                        </span>
                        <span>High working standards</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-md-6 col-lg-4">
                <div class="vs-everyone-card">
                  <div class="vs-everyone-card-head">
                    <div class="vs-everyone-card-icon">
                      <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <h3 class="vs-everyone-card-title">Hire Developers</h3>
                  </div>
                  <div class="vs-everyone-card-body">
                    <p class="vs-everyone-description">
                      Hire dedicated web app developers as per your web app
                      development requirements and pay accordingly.
                    </p>
                    <ul class="vs-everyone-feature-list list-unstyled">
                      <li class="vs-everyone-feature-item">
                        <span class="vs-everyone-feature-icon">
                          <img src="/web-assets/images/check-mark.svg" alt="check-mark" />
                        </span>
                        <span>Timely project updates</span>
                      </li>
                      <li class="vs-everyone-feature-item">
                        <span class="vs-everyone-feature-icon">
                          <img src="/web-assets/images/check-mark.svg" alt="check-mark" />
                        </span>
                        <span>Expert consultancy</span>
                      </li>
                      <li class="vs-everyone-feature-item">
                        <span class="vs-everyone-feature-icon">
                          <img src="/web-assets/images/check-mark.svg" alt="check-mark" />
                        </span>
                        <span>Pay per hour</span>
                      </li>
                      <li class="vs-everyone-feature-item">
                        <span class="vs-everyone-feature-icon">
                          <img src="/web-assets/images/check-mark.svg" alt="check-mark" />
                        </span>
                        <span>Dedicated support</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-md-6 col-lg-4">
                <div class="vs-everyone-card">
                  <div class="vs-everyone-card-head">
                    <div class="vs-everyone-card-icon">
                      <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <h3 class="vs-everyone-card-title">White Label Solution</h3>
                  </div>
                  <div class="vs-everyone-card-body">
                    <p class="vs-everyone-description">
                      Develop a web application and launch it instantly on the
                      desired web app development platform.
                    </p>
                    <ul class="vs-everyone-feature-list list-unstyled">
                      <li class="vs-everyone-feature-item">
                        <span class="vs-everyone-feature-icon">
                          <img src="/web-assets/images/check-mark.svg" alt="check-mark" />
                        </span>
                        <span>Timely delivery</span>
                      </li>
                      <li class="vs-everyone-feature-item">
                        <span class="vs-everyone-feature-icon">
                          <img src="/web-assets/images/check-mark.svg" alt="check-mark" />
                        </span>
                        <span>Custom solutions</span>
                      </li>
                      <li class="vs-everyone-feature-item">
                        <span class="vs-everyone-feature-icon">
                          <img src="/web-assets/images/check-mark.svg" alt="check-mark" />
                        </span>
                        <span>Real-time updates</span>
                      </li>
                      <li class="vs-everyone-feature-item">
                        <span class="vs-everyone-feature-icon">
                          <img src="/web-assets/images/check-mark.svg" alt="check-mark" />
                        </span>
                        <span>Reasonable pricing</span>
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

      <!-- What We Do Section Start -->
      <section class="vs-what-do-section vs-section-spacer vs-section-background">
        <div class="vs-what-do-particles">
          <img src="/web-assets/images/what-do-top-particles.png" alt="What We Particle" class="img-fluid" />
        </div>
        <div class="container">
          <div class="vs-heading-center">
            <h2 class="vs-section-title vs-title-border">What We Do Best</h2>
            <h4 class="vs-section-subtitle">
              We Provide Outsourced IT Services For All Business
            </h4>
            <p class="vs-section-description">
              At <a href="https://plazmasoft.com">Plazmasoft</a> we truly
              believe in the power of domain expertise. By choosing a partner
              with experience in an industry, the product is better, while
              timelines and cost are kept low. We are experts in:
            </p>
          </div>
          <div class="vs-what-do-content">
            <div class="vs-what-do-card-list">
              <div class="vs-what-do-card-item">
                <div class="vs-what-do-card">
                  <div class="vs-what-do-card-img">
                    <img src="/web-assets/images/ecomm.jpg" alt="E-COMMERCE" class="img-fluid" />
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
                      <img src="/web-assets/images/on-demand.jpg" alt="ON DEMAND" class="img-fluid" />
                    </div>
                    <div class="vs-what-do-card-body">
                      <h5 class="vs-what-do-card-title">
                        ON DEMAND <br />SOLUTIONS
                      </h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="vs-what-do-card-item">
                <div class="vs-what-do-card">
                  <div class="vs-what-do-card-img">
                    <img src="/web-assets/images/social.jpg" alt="SOCIAL NETWORKING" class="img-fluid" />
                  </div>
                  <div class="vs-what-do-card-body">
                    <h5 class="vs-what-do-card-title">
                      SOCIAL <br />NETWORKING
                    </h5>
                  </div>
                </div>
              </div>
              <div class="vs-what-do-card-item">
                <a href="/solution/healthcare-app-development">
                  <div class="vs-what-do-card">
                    <div class="vs-what-do-card-img">
                      <img src="/web-assets/images/health.jpg" alt="HEALTHCARE" class="img-fluid" />
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
                    <img src="/web-assets/images/emerging.jpg" alt="EMERGING TECH" class="img-fluid" />
                  </div>
                  <div class="vs-what-do-card-body">
                    <h5 class="vs-what-do-card-title">EMERGING <br />TECH</h5>
                  </div>
                </div>
              </div>
              <div class="vs-what-do-card-item">
                <div class="vs-what-do-card">
                  <div class="vs-what-do-card-img">
                    <img src="/web-assets/images/tour.jpg" alt="TOURS AND TRAVEL" class="img-fluid" />
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
                      <img src="/web-assets/images/trans.jpg" alt="TRANSPORT AND LOGISTICS" class="img-fluid" />
                    </div>
                    <div class="vs-what-do-card-body">
                      <h5 class="vs-what-do-card-title">
                        TRANSPORT AND LOGISTICS
                      </h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="vs-what-do-card-item">
                <a href="/solution/fintech-app-development">
                  <div class="vs-what-do-card">
                    <div class="vs-what-do-card-img">
                      <img src="/web-assets/images/fintech.jpg" alt="FINTECH" class="img-fluid" />
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
                    <img src="/web-assets/images/education.jpg" alt="EDUCATION" class="img-fluid" />
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
                      <img src="/web-assets/images/wellness.jpg" alt="WELLNESS AND FITNESS" class="img-fluid" />
                    </div>
                    <div class="vs-what-do-card-body">
                      <h5 class="vs-what-do-card-title">
                        WELLNESS <br />AND <br />FITNESS
                      </h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- What We Do Section End -->

      <!-- Why Choose Section Start -->
      <section class="vs-why-choose-section vs-section-spacer">
        <div class="container">
          <div class="vs-heading-center">
            <h2 class="vs-section-title vs-title-border">
              Why Choose Us for Web App Development?
            </h2>
          </div>
          <div class="vs-why-choose-content">
            <div class="row align-items-center">
              <div class="col col-12 col-md-6 col-lg-6">
                <div class="vs-why-choose-content__inner">
                  <div class="vs-why-choose-description">
                    <p>
                      Choose our web development services and take your business
                      to the heights it deserves. We hold expertise in modern
                      web technologies, innovative design, streamlined
                      development processes, and dedication to meeting client
                      objectives. We prioritize user-centric solutions, on-time
                      delivery, and cost-effectiveness. With our proven track
                      record and client-focused approach, we ensure a seamless
                      and engaging web presence that propels your business
                      forward. Trust us for exceptional web development services
                      that align with your requirements.
                    </p>
                    <p>
                      We add the following features that make it easy for
                      turning your dream project into a reality.
                    </p>
                  </div>
                  <div class="text-center vs-why-choose-btn">
                    <!-- <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                                      data-bs-target="#requestProposalModal">Schedule Interview</a> -->
                    <!-- <a href="#ty_landing" class="btn btn-primary">Schedule Interview</a> -->
                  </div>
                </div>
              </div>
              <div class="col col-12 col-md-6 col-lg-6">
                <div class="vs-why-choose-card-content">
                  <div class="vs-why-choose-card-list" data-scrollbar>
                    <div class="vs-why-choose-card-item">
                      <div class="vs-why-choose-card">
                        <h3 class="vs-why-choose-card-title">
                          Expertise and Experience:
                        </h3>
                        <p class="vs-why-choose-card-desription">
                          We have demonstrated expertise in web app development
                          technologies, frameworks, and languages. With a proven
                          track record, we have delivered similar projects in
                          all domains.
                        </p>
                      </div>
                    </div>
                    <div class="vs-why-choose-card-item">
                      <div class="vs-why-choose-card">
                        <h3 class="vs-why-choose-card-title">
                          Custom Solutions:
                        </h3>
                        <p class="vs-why-choose-card-desription">
                          Our experts possess the ability to understand your
                          specific project requirements and provide tailor-made
                          web app development solutions aligning with your
                          business needs.
                        </p>
                      </div>
                    </div>
                    <div class="vs-why-choose-card-item">
                      <div class="vs-why-choose-card">
                        <h3 class="vs-why-choose-card-title">
                          Technological Proficiency:
                        </h3>
                        <p class="vs-why-choose-card-desription">
                          At Plazmasoft, our professionals have proficiency in
                          using the latest and most relevant technologies. We
                          always ensure that your web app is modern, secure, and
                          efficient.
                        </p>
                      </div>
                    </div>
                    <div class="vs-why-choose-card-item">
                      <div class="vs-why-choose-card">
                        <h3 class="vs-why-choose-card-title">
                          User-Centric Approach:
                        </h3>
                        <p class="vs-why-choose-card-desription">
                          We focus on creating user-friendly interfaces and
                          seamless user experiences. We aim to enhance the web
                          app's usability and drive user engagement within less
                          time.
                        </p>
                      </div>
                    </div>
                    <div class="vs-why-choose-card-item">
                      <div class="vs-why-choose-card">
                        <h3 class="vs-why-choose-card-title">
                          Transparent Communication:
                        </h3>
                        <p class="vs-why-choose-card-desription">
                          We adopt clear and open communication throughout the
                          development process. Our developers ensure that you
                          stay informed of progress, challenges, and changes
                          timely.
                        </p>
                      </div>
                    </div>
                    <div class="vs-why-choose-card-item">
                      <div class="vs-why-choose-card">
                        <h3 class="vs-why-choose-card-title">
                          Agile Development Methodology:
                        </h3>
                        <p class="vs-why-choose-card-desription">
                          Utilization of Agile methodologies by our experts
                          allows for flexibility, adaptability, and incremental
                          progress to meet evolving project needs and
                          requirements.
                        </p>
                      </div>
                    </div>
                    <div class="vs-why-choose-card-item">
                      <div class="vs-why-choose-card">
                        <h3 class="vs-why-choose-card-title">
                          Reasonable Assistance:
                        </h3>
                        <p class="vs-why-choose-card-desription">
                          We prioritize the financial investments of every
                          business and comprehend budget considerations.
                          Consequently, we provide highly affordable web app
                          development services tailored to cater to businesses
                          of all sizes.
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

      <!-- Want To Discuss Section Start -->
      <section class="vs-want-discuss-section vs-section-spacer">
        <div class="container">
          <div class="vs-heading-center">
            <h2 class="vs-section-title vs-title-border">
              Drop Your Web App Development Idea Here!
            </h2>
            <p class="vs-section-description">
              Do you want to bring your web app development idea to real life?
              Need professional web app developers’ assistance? Plazmasoft can
              be your savior. Let’s connect, discuss your project idea with us,
              and watch how we convert a revenue-generating web app for you.
            </p>
          </div>
          <div class="text-center">
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#requestProposalModal"
              class="btn btn-outline-light">Discuss Your Project</a>
          </div>
        </div>
      </section>
      <!-- Want To Discuss Section End -->

      <!-- Technology Stack Section Start -->
      <section class="vs-technology-section vs-section-spacer">
        <div class="container">
          <div class="vs-heading-center">
            <h2 class="vs-section-title vs-title-border">Technology Stack</h2>
            <p class="vs-section-description">
              At TechoYuga we use the scalable and trending frameworks and
              technologies to
              <a href="https://plazmasoft.com/services/mobile-app-development">
                build Mobile Apps</a>
              , Backend and Web applications for our clients.
            </p>
          </div>
          <div class="vs-technology-content">
            <div class="row">
              <div class="col col-12 col-md-6 col-lg-6">
                <div class="nav flex-column nav-pills me-3" id="vs-stack-tab" role="tablist" aria-orientation="vertical">
                  <div class="nav-link active" id="vs-stack-web-tab" data-bs-toggle="pill" data-bs-target="#vs-stack-web"
                    role="tab" aria-controls="vs-stack-web" aria-selected="true">
                    <div class="vs-technology-stack-tab-btn">
                      <h3 class="vs-stack-tab-title">Web Development Stack</h3>
                      <p class="vs-stack-tab-description">
                        We follow the agile methodology and technology framework
                        to
                        <a href="https://plazmasoft.com/services/web-app-development">develop web applications</a>
                        that meets your expectations.
                      </p>
                    </div>
                  </div>
                  <div class="nav-link" id="vs-stack-mobile-tab" data-bs-toggle="pill" data-bs-target="#vs-stack-mobile"
                    role="tab" aria-controls="vs-stack-mobile" aria-selected="false">
                    <div class="vs-technology-stack-tab-btn">
                      <h3 class="vs-stack-tab-title">
                        Mobile Development Stack
                      </h3>
                      <p class="vs-stack-tab-description">
                        Plazmasoft’s
                        <a href="https://plazmasoft.com/services/mobile-app-development">Mobile App Development</a>
                        teams follow the trending tech frameworks for your dream
                        Mobile apps.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-md-6 col-lg-6">
                <div class="tab-content" id="vs-stack-tabContent">
                  <div class="tab-pane fade show active" id="vs-stack-web" role="tabpanel"
                    aria-labelledby="vs-stack-web-tab">
                    <div class="vs-stack-tabContent__inner">
                      <div class="vs-stack-content-item">
                        <h4 class="vs-stack-logo-title">Frontend</h4>
                        <div class="vs-stack-logo-list">
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/react.png" alt="React" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">React</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/angular.png" alt="Angular" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Angular</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/javascript.png" alt="Java Script" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Java Script</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/html.png" alt="HTML 5" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">HTML 5</h5>
                          </div>
                        </div>
                      </div>
                      <div class="vs-stack-content-item">
                        <h4 class="vs-stack-logo-title">Backend</h4>
                        <div class="vs-stack-logo-list">
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/node.png" alt="Node js" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Node js</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/php.png" alt="PHP" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">PHP</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/csharpe.svg" alt="C#" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">C#</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/python.svg" alt="Python" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Python</h5>
                          </div>
                        </div>
                      </div>
                      <div class="vs-stack-content-item">
                        <h4 class="vs-stack-logo-title">Frontend</h4>
                        <div class="vs-stack-logo-list">
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/express.png" alt="Express" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Express</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/laracel.png" alt="Laravel" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Laravel</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/dotnet.png" alt=".NET" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">.NET</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/django.png" alt="Django" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Django</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="vs-stack-mobile" role="tabpanel" aria-labelledby="vs-stack-mobile-tab">
                    <div class="vs-stack-tabContent__inner">
                      <div class="vs-stack-content-item">
                        <h4 class="vs-stack-logo-title">Languages</h4>
                        <div class="vs-stack-logo-list">
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/swift.svg" alt="swift" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Swift</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/kotlin.svg" alt="Kotlin" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Kotlin</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/java.svg" alt="Java" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Java</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/dart.svg" alt="dart" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Dart</h5>
                          </div>
                        </div>
                      </div>
                      <div class="vs-stack-content-item">
                        <h4 class="vs-stack-logo-title">Frameworks</h4>
                        <div class="vs-stack-logo-list">
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/flutter.svg" alt="Flutter" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Flutter</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/react.png" alt="React Native" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">React Native</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/rx-java.svg" alt="rx-java" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Rx Java</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/junit.svg" alt="JUnit" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">JUnit</h5>
                          </div>
                        </div>
                      </div>
                      <div class="vs-stack-content-item">
                        <h4 class="vs-stack-logo-title">Database</h4>
                        <div class="vs-stack-logo-list">
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/firebase-stack.svg" alt="Firebase" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Firebase</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/realm.svg" alt="Realm" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">Realm</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/sw-lite.svg" alt="SW Lite" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">SW Lite</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/mongo-db.svg" alt="MongoDB" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">MongoDB</h5>
                          </div>
                          <div class="vs-stack-logo-item">
                            <div class="vs-stack-logo-img">
                              <img src="/web-assets/images/my-sql.svg" alt="My SQL" class="img-fluid" />
                            </div>
                            <h5 class="vs-stack-logo-label">My SQL</h5>
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
      <!-- Technology Stack Section End -->
      <!-- Portfolio Section Start -->
      <section class="vs-portfolio-section vs-section-spacer">
        <div class="vs-portfolio-particles">
          <img src="/web-assets/images/portfolio-particles.svg" alt="Portfolio Particle" class="img-fluid" />
        </div>
        <div class="container">
          <div class="vs-heading-center">
            <h2 class="vs-section-title vs-title-border">Our Portfolio</h2>
            <p class="vs-section-description">
              Work with groundbreakers who create top-notch mobile and web apps
              on time & on budget
            </p>
          </div>

          <div class="vs-portfolio-content vs-portfolio-area">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <div class="vs-portfolio-content__inner">
                  <div class="vs-portfolio-slider">
                    <div class="vs-portfolio-item" style="background-color: #d6dfff">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="vs-portfolio-item-img">
                            <img src="/web-assets/images/new-portfolio/AWABI Awabi - SaaS App.png"
                              alt="demand-grocery-img" class="img-fluid" />
                          </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                          <div class="vs-portfolio-details">
                            <div class="vs-portfolio-heading">
                              <div class="vs-portfolio-heading-top">
                                <div class="vs-portfolio-logo">
                                  <img src="/web-assets/images/new-portfolio/logo/AWABI Awabi - SaaS App.png"
                                    alt="app-logo" class="img-fluid" />
                                </div>
                                <div class="vs-portfolio-heading__inner">
                                  <h3 class="vs-portfolio-title">
                                    <span>AWABI Awabi - SaaS App</span>
                                  </h3>
                                </div>
                              </div>
                              <p class="vs-portfolio-heading-desccription">
                                Awabi is a SaaS app focused into restaurant
                                industry. This aapp helps restaurants to track
                                the employee atrtendance, referrals,
                                productivitym and shifts. This app offers
                                subscription based plan for restaurant, they can
                                access the through reports of their employees
                                with scoring mechanism of awabi app.
                              </p>

                              <div class="vs-portfolio-body">
                                <div class="vs-portfolio-info">
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Region</label>
                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                      <img style="padding-right: 10px" width="25%"
                                        src="/web-assets/images/new-portfolio/flags/small/US.png" alt="app-logo"
                                        class="img-fluid" />
                                      <!-- <span class="vs-portfolio-info-flag">
                                                                                  <svg width="25" height="25" viewBox="0 0 25 25"
                                                                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                      <g clip-path="url(#clip0_2_278)">
                                                                                          <rect x="0.5625" y="0.40625" width="24"
                                                                                              height="24" rx="12" fill="#3B3B3B" />
                                                                                          <path
                                                                                              d="M28.75 17.375C25.6562 17.375 23.125 15.4062 23.125 13H1.075V22.275C4.1125 24.6375 8.33125 26.125 13 26.125C20.3687 26.125 26.6125 22.45 28.9187 17.375H28.75Z"
                                                                                              fill="#ED4C5C" />
                                                                                          <path
                                                                                              d="M28.75 8.625H28.9187C26.6125 3.55 20.3687 -0.125 13 -0.125C8.33125 -0.125 4.1125 1.3625 1.075 3.725V13H23.125C23.125 10.5938 25.6562 8.625 28.75 8.625Z"
                                                                                              fill="#699635" />
                                                                                          <path
                                                                                              d="M28.9187 8.625H1.075V17.375H28.9187C29.5375 16.0188 29.875 14.5312 29.875 13C29.875 11.4688 29.5375 9.98125 28.9187 8.625Z"
                                                                                              fill="#F9F9F9" />
                                                                                          <path
                                                                                              d="M1.075 3.725C-1.9625 6.0875 -3.875 9.36875 -3.875 13C-3.875 16.6313 -1.9625 19.9125 1.075 22.275L7.375 17.375V8.625L1.075 3.725Z"
                                                                                              fill="#3E4347" />
                                                                                      </g>
                                                                                      <defs>
                                                                                          <clipPath id="clip0_2_278">
                                                                                              <rect x="0.5625" y="0.40625" width="24"
                                                                                                  height="24" rx="12" fill="white" />
                                                                                          </clipPath>
                                                                                      </defs>
                                                                                  </svg>
                                                                              </span> -->
                                      <span>US</span>
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Duration</label>
                                    <p class="vs-portfolio-info-text">
                                      On Going
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Platforms</label>
                                    <p class="vs-portfolio-info-text">Web</p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Technology</label>
                                    <p class="vs-portfolio-info-text">
                                      Figma, HTML, MongoDB, Node.JS and React.JS
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-portfolio-footer">
                                <!-- <div class="vs-portfolio-footer-item">
                                                                      <a href="#" class="btn btn-success">
                                                                          <span>View Case Study</span>
                                                                          <span class="vs-btn-icon">
                                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                      fill="white" />
                                                                              </svg>
                                                                          </span>
                                                                      </a>
                                                                  </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="vs-portfolio-item" style="background-color: #ffd5d9">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="vs-portfolio-item-img">
                            <img src="/web-assets/images/new-portfolio/Cloud Menu Web App.png" alt="demand-grocery-img"
                              class="img-fluid" />
                          </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                          <div class="vs-portfolio-details">
                            <div class="vs-portfolio-heading">
                              <div class="vs-portfolio-heading-top">
                                <div class="vs-portfolio-logo">
                                  <img src="/web-assets/images/new-portfolio/logo/Cloud Menu Web App.png" alt="app-logo"
                                    class="img-fluid" />
                                </div>
                                <div class="vs-portfolio-heading__inner">
                                  <h3 class="vs-portfolio-title">
                                    <span>Cloud Menu Web App</span>
                                  </h3>
                                </div>
                              </div>
                              <p class="vs-portfolio-heading-desccription">
                                CloudMenu is a Saas based startup from Saudi
                                Arabia which offers cloud based digital menu to
                                restaurants and contact less ordering to
                                customers. Customers can browse and order the
                                food menu by scanning the QR code This solution
                                offers intuitive dashboard to manage the menus,
                                orders and sales reports
                              </p>

                              <div class="vs-portfolio-body">
                                <div class="vs-portfolio-info">
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Region</label>
                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                      <img style="padding-right: 10px" width="25%"
                                        src="/web-assets/images/new-portfolio/flags/small/Saudi Arabia.png" alt="app-logo"
                                        class="img-fluid" />
                                      <!-- <span class="vs-portfolio-info-flag">
                                                                                  <svg width="25" height="25" viewBox="0 0 25 25"
                                                                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                      <g clip-path="url(#clip0_2_278)">
                                                                                          <rect x="0.5625" y="0.40625" width="24"
                                                                                              height="24" rx="12" fill="#3B3B3B" />
                                                                                          <path
                                                                                              d="M28.75 17.375C25.6562 17.375 23.125 15.4062 23.125 13H1.075V22.275C4.1125 24.6375 8.33125 26.125 13 26.125C20.3687 26.125 26.6125 22.45 28.9187 17.375H28.75Z"
                                                                                              fill="#ED4C5C" />
                                                                                          <path
                                                                                              d="M28.75 8.625H28.9187C26.6125 3.55 20.3687 -0.125 13 -0.125C8.33125 -0.125 4.1125 1.3625 1.075 3.725V13H23.125C23.125 10.5938 25.6562 8.625 28.75 8.625Z"
                                                                                              fill="#699635" />
                                                                                          <path
                                                                                              d="M28.9187 8.625H1.075V17.375H28.9187C29.5375 16.0188 29.875 14.5312 29.875 13C29.875 11.4688 29.5375 9.98125 28.9187 8.625Z"
                                                                                              fill="#F9F9F9" />
                                                                                          <path
                                                                                              d="M1.075 3.725C-1.9625 6.0875 -3.875 9.36875 -3.875 13C-3.875 16.6313 -1.9625 19.9125 1.075 22.275L7.375 17.375V8.625L1.075 3.725Z"
                                                                                              fill="#3E4347" />
                                                                                      </g>
                                                                                      <defs>
                                                                                          <clipPath id="clip0_2_278">
                                                                                              <rect x="0.5625" y="0.40625" width="24"
                                                                                                  height="24" rx="12" fill="white" />
                                                                                          </clipPath>
                                                                                      </defs>
                                                                                  </svg>
                                                                              </span> -->
                                      <span>Saudi Arabia</span>
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Duration</label>
                                    <p class="vs-portfolio-info-text">
                                      3 months
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Platforms</label>
                                    <p class="vs-portfolio-info-text">Web</p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Technology</label>
                                    <p class="vs-portfolio-info-text">
                                      Figma, MongoDB, Node.JS and React
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-portfolio-footer">
                                <!-- <div class="vs-portfolio-footer-item">
                                                                      <a href="#" class="btn btn-success">
                                                                          <span>View Case Study</span>
                                                                          <span class="vs-btn-icon">
                                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                      fill="white" />
                                                                              </svg>
                                                                          </span>
                                                                      </a>
                                                                  </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="vs-portfolio-item" style="background-color: #ffe7eb">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="vs-portfolio-item-img">
                            <img src="/web-assets/images/new-portfolio/Getkado-Gifting Platform.png"
                              alt="demand-grocery-img" class="img-fluid" />
                          </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                          <div class="vs-portfolio-details">
                            <div class="vs-portfolio-heading">
                              <div class="vs-portfolio-heading-top">
                                <div class="vs-portfolio-logo">
                                  <img src="/web-assets/images/new-portfolio/logo/Getkado-Gifting Platform.png"
                                    alt="app-logo" class="img-fluid" />
                                </div>
                                <div class="vs-portfolio-heading__inner">
                                  <h3 class="vs-portfolio-title">
                                    <span>Getkado-Gifting Platform</span>
                                  </h3>
                                </div>
                              </div>
                              <p class="vs-portfolio-heading-desccription">
                                Getkado is a new-age gift emporium that allows
                                users to send a collection of gifts along with
                                personalized cards to their loved ones through
                                SMS or email, and they open your personalized
                                e-card, &quot;unwrap &quot;your gift, and can
                                even select another gift from the collection.
                                And you will pay when your recipient accepts the
                                gift. Getkado have hundreds of prodyucs across
                                the categories.
                              </p>

                              <div class="vs-portfolio-body">
                                <div class="vs-portfolio-info">
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Region</label>
                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                      <img style="padding-right: 10px" width="25%"
                                        src="/web-assets/images/new-portfolio/flags/small/Australia.png" alt="app-logo"
                                        class="img-fluid" />
                                      <!-- <span class="vs-portfolio-info-flag">
                                                                                  <svg width="25" height="25" viewBox="0 0 25 25"
                                                                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                      <g clip-path="url(#clip0_2_278)">
                                                                                          <rect x="0.5625" y="0.40625" width="24"
                                                                                              height="24" rx="12" fill="#3B3B3B" />
                                                                                          <path
                                                                                              d="M28.75 17.375C25.6562 17.375 23.125 15.4062 23.125 13H1.075V22.275C4.1125 24.6375 8.33125 26.125 13 26.125C20.3687 26.125 26.6125 22.45 28.9187 17.375H28.75Z"
                                                                                              fill="#ED4C5C" />
                                                                                          <path
                                                                                              d="M28.75 8.625H28.9187C26.6125 3.55 20.3687 -0.125 13 -0.125C8.33125 -0.125 4.1125 1.3625 1.075 3.725V13H23.125C23.125 10.5938 25.6562 8.625 28.75 8.625Z"
                                                                                              fill="#699635" />
                                                                                          <path
                                                                                              d="M28.9187 8.625H1.075V17.375H28.9187C29.5375 16.0188 29.875 14.5312 29.875 13C29.875 11.4688 29.5375 9.98125 28.9187 8.625Z"
                                                                                              fill="#F9F9F9" />
                                                                                          <path
                                                                                              d="M1.075 3.725C-1.9625 6.0875 -3.875 9.36875 -3.875 13C-3.875 16.6313 -1.9625 19.9125 1.075 22.275L7.375 17.375V8.625L1.075 3.725Z"
                                                                                              fill="#3E4347" />
                                                                                      </g>
                                                                                      <defs>
                                                                                          <clipPath id="clip0_2_278">
                                                                                              <rect x="0.5625" y="0.40625" width="24"
                                                                                                  height="24" rx="12" fill="white" />
                                                                                          </clipPath>
                                                                                      </defs>
                                                                                  </svg>
                                                                              </span> -->
                                      <span>Australia</span>
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Duration</label>
                                    <p class="vs-portfolio-info-text">
                                      5 months
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Platforms</label>
                                    <p class="vs-portfolio-info-text">Web</p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Technology</label>
                                    <p class="vs-portfolio-info-text">
                                      Figma, MongoDB, Node.JS and React.JS
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-portfolio-footer">
                                <!-- <div class="vs-portfolio-footer-item">
                                                                      <a href="#" class="btn btn-success">
                                                                          <span>View Case Study</span>
                                                                          <span class="vs-btn-icon">
                                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                      fill="white" />
                                                                              </svg>
                                                                          </span>
                                                                      </a>
                                                                  </div> -->
                                <div class="vs-portfolio-footer-item">
                                  <a href="https://staging.getkado.io/" class="btn btn-success" target="_blank">
                                    <span>Visit Website</span>
                                    <span class="vs-btn-icon">
                                      <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
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
                    <div class="vs-portfolio-item" style="background-color: #ffe4d9">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="vs-portfolio-item-img">
                            <img src="/web-assets/images/new-portfolio/Kitchenflow - Web App.png" alt="demand-grocery-img"
                              class="img-fluid" />
                          </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                          <div class="vs-portfolio-details">
                            <div class="vs-portfolio-heading">
                              <div class="vs-portfolio-heading-top">
                                <div class="vs-portfolio-logo">
                                  <img src="/web-assets/images/new-portfolio/logo/Kitchenflow - Web App.png"
                                    alt="app-logo" class="img-fluid" />
                                </div>
                                <div class="vs-portfolio-heading__inner">
                                  <h3 class="vs-portfolio-title">
                                    <span>Kitchenflow - Web App</span>
                                  </h3>
                                </div>
                              </div>
                              <p class="vs-portfolio-heading-desccription">
                                Kitchenflo is a UK based startup. They are
                                revolutionizing the workflow and safety
                                management system within the Food Industry. This
                                helps kitchens better manage their devices and
                                prevent them from failure through the
                                loT-enabled sensor. This app also helps the
                                day-to-day operations and task management in any
                                restaurant.
                              </p>

                              <div class="vs-portfolio-body">
                                <div class="vs-portfolio-info">
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Region</label>
                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                      <img style="padding-right: 10px" width="25%"
                                        src="/web-assets/images/new-portfolio/flags/small/UK.png" alt="app-logo"
                                        class="img-fluid" />
                                      <!-- <span class="vs-portfolio-info-flag">
                                                                                  <svg width="25" height="25" viewBox="0 0 25 25"
                                                                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                      <g clip-path="url(#clip0_2_278)">
                                                                                          <rect x="0.5625" y="0.40625" width="24"
                                                                                              height="24" rx="12" fill="#3B3B3B" />
                                                                                          <path
                                                                                              d="M28.75 17.375C25.6562 17.375 23.125 15.4062 23.125 13H1.075V22.275C4.1125 24.6375 8.33125 26.125 13 26.125C20.3687 26.125 26.6125 22.45 28.9187 17.375H28.75Z"
                                                                                              fill="#ED4C5C" />
                                                                                          <path
                                                                                              d="M28.75 8.625H28.9187C26.6125 3.55 20.3687 -0.125 13 -0.125C8.33125 -0.125 4.1125 1.3625 1.075 3.725V13H23.125C23.125 10.5938 25.6562 8.625 28.75 8.625Z"
                                                                                              fill="#699635" />
                                                                                          <path
                                                                                              d="M28.9187 8.625H1.075V17.375H28.9187C29.5375 16.0188 29.875 14.5312 29.875 13C29.875 11.4688 29.5375 9.98125 28.9187 8.625Z"
                                                                                              fill="#F9F9F9" />
                                                                                          <path
                                                                                              d="M1.075 3.725C-1.9625 6.0875 -3.875 9.36875 -3.875 13C-3.875 16.6313 -1.9625 19.9125 1.075 22.275L7.375 17.375V8.625L1.075 3.725Z"
                                                                                              fill="#3E4347" />
                                                                                      </g>
                                                                                      <defs>
                                                                                          <clipPath id="clip0_2_278">
                                                                                              <rect x="0.5625" y="0.40625" width="24"
                                                                                                  height="24" rx="12" fill="white" />
                                                                                          </clipPath>
                                                                                      </defs>
                                                                                  </svg>
                                                                              </span> -->
                                      <span>UK</span>
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Duration</label>
                                    <p class="vs-portfolio-info-text">
                                      On Going
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Platforms</label>
                                    <p class="vs-portfolio-info-text">Web</p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Technology</label>
                                    <p class="vs-portfolio-info-text">
                                      MongoDB, Node.JS, ReactJS
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-portfolio-footer">
                                <!-- <div class="vs-portfolio-footer-item">
                                                                      <a href="#" class="btn btn-success">
                                                                          <span>View Case Study</span>
                                                                          <span class="vs-btn-icon">
                                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                      fill="white" />
                                                                              </svg>
                                                                          </span>
                                                                      </a>
                                                                  </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="vs-portfolio-item" style="background-color: #e0f4eb">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="vs-portfolio-item-img">
                            <img src="/web-assets/images/new-portfolio/Om at home - web.png" alt="demand-grocery-img"
                              class="img-fluid" />
                          </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                          <div class="vs-portfolio-details">
                            <div class="vs-portfolio-heading">
                              <div class="vs-portfolio-heading-top">
                                <div class="vs-portfolio-logo">
                                  <img src="/web-assets/images/new-portfolio/logo/Om at home - web.png" alt="app-logo"
                                    class="img-fluid" />
                                </div>
                                <div class="vs-portfolio-heading__inner">
                                  <h3 class="vs-portfolio-title">
                                    <span>Om at home - web</span>
                                  </h3>
                                </div>
                              </div>
                              <p class="vs-portfolio-heading-desccription">
                                Om at Home is a transformative website bringing
                                mindfulness and wellness to your fingertips.
                                Offering guided meditation, yoga classes, and
                                relaxation techniques, it fosters a peaceful
                                lifestyle within your own space. Embrace
                                tranquillity, achieve balance, and elevate your
                                well-being with the Omathome website.
                              </p>

                              <div class="vs-portfolio-body">
                                <div class="vs-portfolio-info">
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Region</label>
                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                      <img style="padding-right: 10px" width="25%"
                                        src="/web-assets/images/new-portfolio/flags/small/US.png" alt="app-logo"
                                        class="img-fluid" />
                                      <!-- <span class="vs-portfolio-info-flag">
                                                                                  <svg width="25" height="25" viewBox="0 0 25 25"
                                                                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                      <g clip-path="url(#clip0_2_278)">
                                                                                          <rect x="0.5625" y="0.40625" width="24"
                                                                                              height="24" rx="12" fill="#3B3B3B" />
                                                                                          <path
                                                                                              d="M28.75 17.375C25.6562 17.375 23.125 15.4062 23.125 13H1.075V22.275C4.1125 24.6375 8.33125 26.125 13 26.125C20.3687 26.125 26.6125 22.45 28.9187 17.375H28.75Z"
                                                                                              fill="#ED4C5C" />
                                                                                          <path
                                                                                              d="M28.75 8.625H28.9187C26.6125 3.55 20.3687 -0.125 13 -0.125C8.33125 -0.125 4.1125 1.3625 1.075 3.725V13H23.125C23.125 10.5938 25.6562 8.625 28.75 8.625Z"
                                                                                              fill="#699635" />
                                                                                          <path
                                                                                              d="M28.9187 8.625H1.075V17.375H28.9187C29.5375 16.0188 29.875 14.5312 29.875 13C29.875 11.4688 29.5375 9.98125 28.9187 8.625Z"
                                                                                              fill="#F9F9F9" />
                                                                                          <path
                                                                                              d="M1.075 3.725C-1.9625 6.0875 -3.875 9.36875 -3.875 13C-3.875 16.6313 -1.9625 19.9125 1.075 22.275L7.375 17.375V8.625L1.075 3.725Z"
                                                                                              fill="#3E4347" />
                                                                                      </g>
                                                                                      <defs>
                                                                                          <clipPath id="clip0_2_278">
                                                                                              <rect x="0.5625" y="0.40625" width="24"
                                                                                                  height="24" rx="12" fill="white" />
                                                                                          </clipPath>
                                                                                      </defs>
                                                                                  </svg>
                                                                              </span> -->
                                      <span>US</span>
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Duration</label>
                                    <p class="vs-portfolio-info-text">
                                      3 Months
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Platforms</label>
                                    <p class="vs-portfolio-info-text">Web</p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Technology</label>
                                    <p class="vs-portfolio-info-text">
                                      Figma, HTML, MongoDB, Node.JS and React.JS
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-portfolio-footer">
                                <!-- <div class="vs-portfolio-footer-item">
                                                                      <a href="#" class="btn btn-success">
                                                                          <span>View Case Study</span>
                                                                          <span class="vs-btn-icon">
                                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                      fill="white" />
                                                                              </svg>
                                                                          </span>
                                                                      </a>
                                                                  </div> -->
                                <div class="vs-portfolio-footer-item">
                                  <a href="https://omathomeapp.com" class="btn btn-success" target="_blank">
                                    <span>Visit Website</span>
                                    <span class="vs-btn-icon">
                                      <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
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
                    <div class="vs-portfolio-item" style="background-color: #e1ffff">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="vs-portfolio-item-img">
                            <img src="/web-assets/images/new-portfolio/Renovation angel - web.png"
                              alt="demand-grocery-img" class="img-fluid" />
                          </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                          <div class="vs-portfolio-details">
                            <div class="vs-portfolio-heading">
                              <div class="vs-portfolio-heading-top">
                                <div class="vs-portfolio-logo">
                                  <img src="/web-assets/images/new-portfolio/logo/Renovation angel - web.png"
                                    alt="app-logo" class="img-fluid" />
                                </div>
                                <div class="vs-portfolio-heading__inner">
                                  <h3 class="vs-portfolio-title">
                                    <span>Renovation angel - web</span>
                                  </h3>
                                </div>
                              </div>
                              <p class="vs-portfolio-heading-desccription">
                                Rockoly takes team building events to the next
                                level with live chefs, mixologists, sommeliers,
                                and ingredients delivered!
                              </p>

                              <div class="vs-portfolio-body">
                                <div class="vs-portfolio-info">
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Region</label>
                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                      <img style="padding-right: 10px" width="25%"
                                        src="/web-assets/images/new-portfolio/flags/small/US.png" alt="app-logo"
                                        class="img-fluid" />
                                      <!-- <span class="vs-portfolio-info-flag">
                                                                                  <svg width="25" height="25" viewBox="0 0 25 25"
                                                                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                      <g clip-path="url(#clip0_2_278)">
                                                                                          <rect x="0.5625" y="0.40625" width="24"
                                                                                              height="24" rx="12" fill="#3B3B3B" />
                                                                                          <path
                                                                                              d="M28.75 17.375C25.6562 17.375 23.125 15.4062 23.125 13H1.075V22.275C4.1125 24.6375 8.33125 26.125 13 26.125C20.3687 26.125 26.6125 22.45 28.9187 17.375H28.75Z"
                                                                                              fill="#ED4C5C" />
                                                                                          <path
                                                                                              d="M28.75 8.625H28.9187C26.6125 3.55 20.3687 -0.125 13 -0.125C8.33125 -0.125 4.1125 1.3625 1.075 3.725V13H23.125C23.125 10.5938 25.6562 8.625 28.75 8.625Z"
                                                                                              fill="#699635" />
                                                                                          <path
                                                                                              d="M28.9187 8.625H1.075V17.375H28.9187C29.5375 16.0188 29.875 14.5312 29.875 13C29.875 11.4688 29.5375 9.98125 28.9187 8.625Z"
                                                                                              fill="#F9F9F9" />
                                                                                          <path
                                                                                              d="M1.075 3.725C-1.9625 6.0875 -3.875 9.36875 -3.875 13C-3.875 16.6313 -1.9625 19.9125 1.075 22.275L7.375 17.375V8.625L1.075 3.725Z"
                                                                                              fill="#3E4347" />
                                                                                      </g>
                                                                                      <defs>
                                                                                          <clipPath id="clip0_2_278">
                                                                                              <rect x="0.5625" y="0.40625" width="24"
                                                                                                  height="24" rx="12" fill="white" />
                                                                                          </clipPath>
                                                                                      </defs>
                                                                                  </svg>
                                                                              </span> -->
                                      <span>US</span>
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Duration</label>
                                    <p class="vs-portfolio-info-text">
                                      3 months
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Platforms</label>
                                    <p class="vs-portfolio-info-text">Web</p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Technology</label>
                                    <p class="vs-portfolio-info-text">
                                      Figma, Wordpress
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-portfolio-footer">
                                <!-- <div class="vs-portfolio-footer-item">
                                                                      <a href="#" class="btn btn-success">
                                                                          <span>View Case Study</span>
                                                                          <span class="vs-btn-icon">
                                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                      fill="white" />
                                                                              </svg>
                                                                          </span>
                                                                      </a>
                                                                  </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="vs-portfolio-item" style="background-color: #c8feff">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="vs-portfolio-item-img">
                            <img src="/web-assets/images/new-portfolio/Rewire - Web App.png" alt="demand-grocery-img"
                              class="img-fluid" />
                          </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                          <div class="vs-portfolio-details">
                            <div class="vs-portfolio-heading">
                              <div class="vs-portfolio-heading-top">
                                <div class="vs-portfolio-logo">
                                  <img src="/web-assets/images/new-portfolio/logo/Rewire - Web App.png" alt="app-logo"
                                    class="img-fluid" />
                                </div>
                                <div class="vs-portfolio-heading__inner">
                                  <h3 class="vs-portfolio-title">
                                    <span>Rewire - Web App</span>
                                  </h3>
                                </div>
                              </div>
                              <p class="vs-portfolio-heading-desccription">
                                Rewire therapy is a Canada-based company. Their
                                website allows trauma survivors and
                                practitioners through its healing exercise and
                                programs. These programs offer video-based
                                content related to Trauma-Informed Yoga, Qigong
                                For Sexual Trauma, Narcissistic Abuse Recovery
                                Program, daily exercise, and a patient
                                monitoring dashboard
                              </p>

                              <div class="vs-portfolio-body">
                                <div class="vs-portfolio-info">
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Region</label>
                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                      <img style="padding-right: 10px" width="25%"
                                        src="/web-assets/images/new-portfolio/flags/small/Canada.png" alt="app-logo"
                                        class="img-fluid" />
                                      <!-- <span class="vs-portfolio-info-flag">
                                                                                  <svg width="25" height="25" viewBox="0 0 25 25"
                                                                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                      <g clip-path="url(#clip0_2_278)">
                                                                                          <rect x="0.5625" y="0.40625" width="24"
                                                                                              height="24" rx="12" fill="#3B3B3B" />
                                                                                          <path
                                                                                              d="M28.75 17.375C25.6562 17.375 23.125 15.4062 23.125 13H1.075V22.275C4.1125 24.6375 8.33125 26.125 13 26.125C20.3687 26.125 26.6125 22.45 28.9187 17.375H28.75Z"
                                                                                              fill="#ED4C5C" />
                                                                                          <path
                                                                                              d="M28.75 8.625H28.9187C26.6125 3.55 20.3687 -0.125 13 -0.125C8.33125 -0.125 4.1125 1.3625 1.075 3.725V13H23.125C23.125 10.5938 25.6562 8.625 28.75 8.625Z"
                                                                                              fill="#699635" />
                                                                                          <path
                                                                                              d="M28.9187 8.625H1.075V17.375H28.9187C29.5375 16.0188 29.875 14.5312 29.875 13C29.875 11.4688 29.5375 9.98125 28.9187 8.625Z"
                                                                                              fill="#F9F9F9" />
                                                                                          <path
                                                                                              d="M1.075 3.725C-1.9625 6.0875 -3.875 9.36875 -3.875 13C-3.875 16.6313 -1.9625 19.9125 1.075 22.275L7.375 17.375V8.625L1.075 3.725Z"
                                                                                              fill="#3E4347" />
                                                                                      </g>
                                                                                      <defs>
                                                                                          <clipPath id="clip0_2_278">
                                                                                              <rect x="0.5625" y="0.40625" width="24"
                                                                                                  height="24" rx="12" fill="white" />
                                                                                          </clipPath>
                                                                                      </defs>
                                                                                  </svg>
                                                                              </span> -->
                                      <span>Canada</span>
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Duration</label>
                                    <p class="vs-portfolio-info-text">
                                      2 months
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Platforms</label>
                                    <p class="vs-portfolio-info-text">Web</p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Technology</label>
                                    <p class="vs-portfolio-info-text">
                                      Figma, Kajabi
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-portfolio-footer">
                                <!-- <div class="vs-portfolio-footer-item">
                                                                      <a href="#" class="btn btn-success">
                                                                          <span>View Case Study</span>
                                                                          <span class="vs-btn-icon">
                                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                      fill="white" />
                                                                              </svg>
                                                                          </span>
                                                                      </a>
                                                                  </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="vs-portfolio-item" style="background-color: #e7ff9f">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="vs-portfolio-item-img">
                            <img src="/web-assets/images/new-portfolio/Rockoloy - Event App.png" alt="demand-grocery-img"
                              class="img-fluid" />
                          </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                          <div class="vs-portfolio-details">
                            <div class="vs-portfolio-heading">
                              <div class="vs-portfolio-heading-top">
                                <div class="vs-portfolio-logo">
                                  <img src="/web-assets/images/new-portfolio/logo/Rockoloy - Event App.png" alt="app-logo"
                                    class="img-fluid" />
                                </div>
                                <div class="vs-portfolio-heading__inner">
                                  <h3 class="vs-portfolio-title">
                                    <span>Rockoloy - Event App</span>
                                  </h3>
                                </div>
                              </div>
                              <p class="vs-portfolio-heading-desccription">
                                Rockoly web app offers business to organize the
                                virtual events and classes for live cooking,
                                wine tasting etc. users can book the classes by
                                paying the fees and attend through the zoom
                                meeting.
                              </p>

                              <div class="vs-portfolio-body">
                                <div class="vs-portfolio-info">
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Region</label>
                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                      <img style="padding-right: 10px" width="25%"
                                        src="/web-assets/images/new-portfolio/flags/small/US.png" alt="app-logo"
                                        class="img-fluid" />
                                      <!-- <span class="vs-portfolio-info-flag">
                                                                                  <svg width="25" height="25" viewBox="0 0 25 25"
                                                                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                      <g clip-path="url(#clip0_2_278)">
                                                                                          <rect x="0.5625" y="0.40625" width="24"
                                                                                              height="24" rx="12" fill="#3B3B3B" />
                                                                                          <path
                                                                                              d="M28.75 17.375C25.6562 17.375 23.125 15.4062 23.125 13H1.075V22.275C4.1125 24.6375 8.33125 26.125 13 26.125C20.3687 26.125 26.6125 22.45 28.9187 17.375H28.75Z"
                                                                                              fill="#ED4C5C" />
                                                                                          <path
                                                                                              d="M28.75 8.625H28.9187C26.6125 3.55 20.3687 -0.125 13 -0.125C8.33125 -0.125 4.1125 1.3625 1.075 3.725V13H23.125C23.125 10.5938 25.6562 8.625 28.75 8.625Z"
                                                                                              fill="#699635" />
                                                                                          <path
                                                                                              d="M28.9187 8.625H1.075V17.375H28.9187C29.5375 16.0188 29.875 14.5312 29.875 13C29.875 11.4688 29.5375 9.98125 28.9187 8.625Z"
                                                                                              fill="#F9F9F9" />
                                                                                          <path
                                                                                              d="M1.075 3.725C-1.9625 6.0875 -3.875 9.36875 -3.875 13C-3.875 16.6313 -1.9625 19.9125 1.075 22.275L7.375 17.375V8.625L1.075 3.725Z"
                                                                                              fill="#3E4347" />
                                                                                      </g>
                                                                                      <defs>
                                                                                          <clipPath id="clip0_2_278">
                                                                                              <rect x="0.5625" y="0.40625" width="24"
                                                                                                  height="24" rx="12" fill="white" />
                                                                                          </clipPath>
                                                                                      </defs>
                                                                                  </svg>
                                                                              </span> -->
                                      <span>US</span>
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Duration</label>
                                    <p class="vs-portfolio-info-text">
                                      3 months
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Platforms</label>
                                    <p class="vs-portfolio-info-text">Web</p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Technology</label>
                                    <p class="vs-portfolio-info-text">
                                      Figma, React.JS, MySql
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-portfolio-footer">
                                <!-- <div class="vs-portfolio-footer-item">
                                                                      <a href="#" class="btn btn-success">
                                                                          <span>View Case Study</span>
                                                                          <span class="vs-btn-icon">
                                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                      fill="white" />
                                                                              </svg>
                                                                          </span>
                                                                      </a>
                                                                  </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="vs-portfolio-item" style="background-color: #ccedff">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="vs-portfolio-item-img">
                            <img src="/web-assets/images/new-portfolio/Route Defender - SaaS App.png"
                              alt="demand-grocery-img" class="img-fluid" />
                          </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                          <div class="vs-portfolio-details">
                            <div class="vs-portfolio-heading">
                              <div class="vs-portfolio-heading-top">
                                <div class="vs-portfolio-logo">
                                  <img src="/web-assets/images/new-portfolio/logo/Route Defender - SaaS App.png"
                                    alt="app-logo" class="img-fluid" />
                                </div>
                                <div class="vs-portfolio-heading__inner">
                                  <h3 class="vs-portfolio-title">
                                    <span>Route Defender - SaaS App</span>
                                  </h3>
                                </div>
                              </div>
                              <p class="vs-portfolio-heading-desccription">
                                Pool service software for the pool
                                professionals, Route defender system helps pool
                                companies to manage their clients, technicians
                                and invoices better. This solution supports end
                                to end life cycle of pool management business
                                which offers route management, invoicing,
                                readings etc. This system has companies,
                                technicians, and supervisors apps and panels.
                              </p>

                              <div class="vs-portfolio-body">
                                <div class="vs-portfolio-info">
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Region</label>
                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                      <img style="padding-right: 10px" width="25%"
                                        src="/web-assets/images/new-portfolio/flags/small/US.png" alt="app-logo"
                                        class="img-fluid" />
                                      <!-- <span class="vs-portfolio-info-flag">
                                                                                  <svg width="25" height="25" viewBox="0 0 25 25"
                                                                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                      <g clip-path="url(#clip0_2_278)">
                                                                                          <rect x="0.5625" y="0.40625" width="24"
                                                                                              height="24" rx="12" fill="#3B3B3B" />
                                                                                          <path
                                                                                              d="M28.75 17.375C25.6562 17.375 23.125 15.4062 23.125 13H1.075V22.275C4.1125 24.6375 8.33125 26.125 13 26.125C20.3687 26.125 26.6125 22.45 28.9187 17.375H28.75Z"
                                                                                              fill="#ED4C5C" />
                                                                                          <path
                                                                                              d="M28.75 8.625H28.9187C26.6125 3.55 20.3687 -0.125 13 -0.125C8.33125 -0.125 4.1125 1.3625 1.075 3.725V13H23.125C23.125 10.5938 25.6562 8.625 28.75 8.625Z"
                                                                                              fill="#699635" />
                                                                                          <path
                                                                                              d="M28.9187 8.625H1.075V17.375H28.9187C29.5375 16.0188 29.875 14.5312 29.875 13C29.875 11.4688 29.5375 9.98125 28.9187 8.625Z"
                                                                                              fill="#F9F9F9" />
                                                                                          <path
                                                                                              d="M1.075 3.725C-1.9625 6.0875 -3.875 9.36875 -3.875 13C-3.875 16.6313 -1.9625 19.9125 1.075 22.275L7.375 17.375V8.625L1.075 3.725Z"
                                                                                              fill="#3E4347" />
                                                                                      </g>
                                                                                      <defs>
                                                                                          <clipPath id="clip0_2_278">
                                                                                              <rect x="0.5625" y="0.40625" width="24"
                                                                                                  height="24" rx="12" fill="white" />
                                                                                          </clipPath>
                                                                                      </defs>
                                                                                  </svg>
                                                                              </span> -->
                                      <span>US</span>
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Duration</label>
                                    <p class="vs-portfolio-info-text">
                                      12 Months
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Platforms</label>
                                    <p class="vs-portfolio-info-text">
                                      Wen, iOS and Android
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Technology</label>
                                    <p class="vs-portfolio-info-text">
                                      Figma, Flutter, MongoDB, Node.JS,
                                      React.JS, Firebase
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-portfolio-footer">
                                <!-- <div class="vs-portfolio-footer-item">
                                                                      <a href="#" class="btn btn-success">
                                                                          <span>View Case Study</span>
                                                                          <span class="vs-btn-icon">
                                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                      fill="white" />
                                                                              </svg>
                                                                          </span>
                                                                      </a>
                                                                  </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="vs-portfolio-item" style="background-color: #ffd2d2">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="vs-portfolio-item-img">
                            <img src="/web-assets/images/new-portfolio/TES - IoT SaaS for Hospitality.png"
                              alt="demand-grocery-img" class="img-fluid" />
                          </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                          <div class="vs-portfolio-details">
                            <div class="vs-portfolio-heading">
                              <div class="vs-portfolio-heading-top">
                                <div class="vs-portfolio-logo">
                                  <img src="/web-assets/images/new-portfolio/logo/TES - IoT SaaS for Hospitality.png"
                                    alt="app-logo" class="img-fluid" />
                                </div>
                                <div class="vs-portfolio-heading__inner">
                                  <h3 class="vs-portfolio-title">
                                    <span>TES - IoT SaaS for Hospitality</span>
                                  </h3>
                                </div>
                              </div>
                              <p class="vs-portfolio-heading-desccription">
                                Rockoly takes team building events to the next
                                level with live chefs, mixologists, sommeliers,
                                and ingredients delivered!
                              </p>

                              <div class="vs-portfolio-body">
                                <div class="vs-portfolio-info">
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Region</label>
                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                      <img style="padding-right: 10px" width="25%"
                                        src="/web-assets/images/new-portfolio/flags/small/US.png" alt="app-logo"
                                        class="img-fluid" />
                                      <!-- <span class="vs-portfolio-info-flag">
                                                                                  <svg width="25" height="25" viewBox="0 0 25 25"
                                                                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                      <g clip-path="url(#clip0_2_278)">
                                                                                          <rect x="0.5625" y="0.40625" width="24"
                                                                                              height="24" rx="12" fill="#3B3B3B" />
                                                                                          <path
                                                                                              d="M28.75 17.375C25.6562 17.375 23.125 15.4062 23.125 13H1.075V22.275C4.1125 24.6375 8.33125 26.125 13 26.125C20.3687 26.125 26.6125 22.45 28.9187 17.375H28.75Z"
                                                                                              fill="#ED4C5C" />
                                                                                          <path
                                                                                              d="M28.75 8.625H28.9187C26.6125 3.55 20.3687 -0.125 13 -0.125C8.33125 -0.125 4.1125 1.3625 1.075 3.725V13H23.125C23.125 10.5938 25.6562 8.625 28.75 8.625Z"
                                                                                              fill="#699635" />
                                                                                          <path
                                                                                              d="M28.9187 8.625H1.075V17.375H28.9187C29.5375 16.0188 29.875 14.5312 29.875 13C29.875 11.4688 29.5375 9.98125 28.9187 8.625Z"
                                                                                              fill="#F9F9F9" />
                                                                                          <path
                                                                                              d="M1.075 3.725C-1.9625 6.0875 -3.875 9.36875 -3.875 13C-3.875 16.6313 -1.9625 19.9125 1.075 22.275L7.375 17.375V8.625L1.075 3.725Z"
                                                                                              fill="#3E4347" />
                                                                                      </g>
                                                                                      <defs>
                                                                                          <clipPath id="clip0_2_278">
                                                                                              <rect x="0.5625" y="0.40625" width="24"
                                                                                                  height="24" rx="12" fill="white" />
                                                                                          </clipPath>
                                                                                      </defs>
                                                                                  </svg>
                                                                              </span> -->
                                      <span>US</span>
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Duration</label>
                                    <p class="vs-portfolio-info-text">
                                      On Going
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Platforms</label>
                                    <p class="vs-portfolio-info-text">Web</p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Technology</label>
                                    <p class="vs-portfolio-info-text">
                                      Figma, MongoDB, Node.JS and React.JS
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-portfolio-footer">
                                <!-- <div class="vs-portfolio-footer-item">
                                                                      <a href="#" class="btn btn-success">
                                                                          <span>View Case Study</span>
                                                                          <span class="vs-btn-icon">
                                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                      fill="white" />
                                                                              </svg>
                                                                          </span>
                                                                      </a>
                                                                  </div> -->
                                <div class="vs-portfolio-footer-item">
                                  <a href="http://fountainarizona.com" class="btn btn-success" target="_blank">
                                    <span>Visit Website</span>
                                    <span class="vs-btn-icon">
                                      <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
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
                    <div class="vs-portfolio-item" style="background-color: #e0f4eb">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="vs-portfolio-item-img">
                            <img src="/web-assets/images/new-portfolio/Wee Travel - Airbnb Style platform for web.png"
                              alt="demand-grocery-img" class="img-fluid" />
                          </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                          <div class="vs-portfolio-details">
                            <div class="vs-portfolio-heading">
                              <div class="vs-portfolio-heading-top">
                                <div class="vs-portfolio-logo">
                                  <img
                                    src="/web-assets/images/new-portfolio/logo/Wee Travel - Airbnb Style platform for web.png"
                                    alt="app-logo" class="img-fluid" />
                                </div>
                                <div class="vs-portfolio-heading__inner">
                                  <h3 class="vs-portfolio-title">
                                    <span>Wee Travel - Airbnb Style platform for
                                      web</span>
                                  </h3>
                                </div>
                              </div>
                              <p class="vs-portfolio-heading-desccription">
                                We travel is a Mexico based startup focusing on
                                renting property, cars and yachts across the
                                mexico. The use friendly interface of this app
                                helps hosts/ owners to post their requirement
                                easily and travellers can book the property. car
                                or yachts as per the availability, budget and
                                their need. This app provide Mobile and Web
                                platforms to their users.
                              </p>

                              <div class="vs-portfolio-body">
                                <div class="vs-portfolio-info">
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Region</label>
                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                      <img style="padding-right: 10px" width="25%"
                                        src="/web-assets/images/new-portfolio/flags/small/Mexico.png" alt="app-logo"
                                        class="img-fluid" />
                                      <!-- <span class="vs-portfolio-info-flag">
                                                                                  <svg width="25" height="25" viewBox="0 0 25 25"
                                                                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                      <g clip-path="url(#clip0_2_278)">
                                                                                          <rect x="0.5625" y="0.40625" width="24"
                                                                                              height="24" rx="12" fill="#3B3B3B" />
                                                                                          <path
                                                                                              d="M28.75 17.375C25.6562 17.375 23.125 15.4062 23.125 13H1.075V22.275C4.1125 24.6375 8.33125 26.125 13 26.125C20.3687 26.125 26.6125 22.45 28.9187 17.375H28.75Z"
                                                                                              fill="#ED4C5C" />
                                                                                          <path
                                                                                              d="M28.75 8.625H28.9187C26.6125 3.55 20.3687 -0.125 13 -0.125C8.33125 -0.125 4.1125 1.3625 1.075 3.725V13H23.125C23.125 10.5938 25.6562 8.625 28.75 8.625Z"
                                                                                              fill="#699635" />
                                                                                          <path
                                                                                              d="M28.9187 8.625H1.075V17.375H28.9187C29.5375 16.0188 29.875 14.5312 29.875 13C29.875 11.4688 29.5375 9.98125 28.9187 8.625Z"
                                                                                              fill="#F9F9F9" />
                                                                                          <path
                                                                                              d="M1.075 3.725C-1.9625 6.0875 -3.875 9.36875 -3.875 13C-3.875 16.6313 -1.9625 19.9125 1.075 22.275L7.375 17.375V8.625L1.075 3.725Z"
                                                                                              fill="#3E4347" />
                                                                                      </g>
                                                                                      <defs>
                                                                                          <clipPath id="clip0_2_278">
                                                                                              <rect x="0.5625" y="0.40625" width="24"
                                                                                                  height="24" rx="12" fill="white" />
                                                                                          </clipPath>
                                                                                      </defs>
                                                                                  </svg>
                                                                              </span> -->
                                      <span>Mexico</span>
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Duration</label>
                                    <p class="vs-portfolio-info-text">
                                      3 Months
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Platforms</label>
                                    <p class="vs-portfolio-info-text">Web</p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Technology</label>
                                    <p class="vs-portfolio-info-text">
                                      MongoDB, Node.JS, ReactJS
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-portfolio-footer">
                                <!-- <div class="vs-portfolio-footer-item">
                                                                      <a href="#" class="btn btn-success">
                                                                          <span>View Case Study</span>
                                                                          <span class="vs-btn-icon">
                                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                      fill="white" />
                                                                              </svg>
                                                                          </span>
                                                                      </a>
                                                                  </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="vs-portfolio-item" style="background-color: #ffcc9f">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="vs-portfolio-item-img">
                            <img src="/web-assets/images/new-portfolio/Gfacility-Web App.png" alt="demand-grocery-img"
                              class="img-fluid" />
                          </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                          <div class="vs-portfolio-details">
                            <div class="vs-portfolio-heading">
                              <div class="vs-portfolio-heading-top">
                                <div class="vs-portfolio-logo">
                                  <img src="/web-assets/images/new-portfolio/logo/Gfacility-Web App.png" alt="app-logo"
                                    class="img-fluid" />
                                </div>
                                <div class="vs-portfolio-heading__inner">
                                  <h3 class="vs-portfolio-title">
                                    <span>Gfacility-Web App</span>
                                  </h3>
                                </div>
                              </div>
                              <p class="vs-portfolio-heading-desccription">
                                Gfacility is an all-in-one solution for
                                streamlined facility management. The app offers
                                intuitive scheduling, maintenance tracking, and
                                resource management tools. With Gfacility,
                                you&#039;ll optimize efficiency, reduce
                                downtime, and enhance productivity across your
                                facilities.
                              </p>

                              <div class="vs-portfolio-body">
                                <div class="vs-portfolio-info">
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Region</label>
                                    <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                      <img style="padding-right: 10px" width="25%"
                                        src="/web-assets/images/new-portfolio/flags/small/US.png" alt="app-logo"
                                        class="img-fluid" />
                                      <!-- <span class="vs-portfolio-info-flag">
                                                                                  <svg width="25" height="25" viewBox="0 0 25 25"
                                                                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                      <g clip-path="url(#clip0_2_278)">
                                                                                          <rect x="0.5625" y="0.40625" width="24"
                                                                                              height="24" rx="12" fill="#3B3B3B" />
                                                                                          <path
                                                                                              d="M28.75 17.375C25.6562 17.375 23.125 15.4062 23.125 13H1.075V22.275C4.1125 24.6375 8.33125 26.125 13 26.125C20.3687 26.125 26.6125 22.45 28.9187 17.375H28.75Z"
                                                                                              fill="#ED4C5C" />
                                                                                          <path
                                                                                              d="M28.75 8.625H28.9187C26.6125 3.55 20.3687 -0.125 13 -0.125C8.33125 -0.125 4.1125 1.3625 1.075 3.725V13H23.125C23.125 10.5938 25.6562 8.625 28.75 8.625Z"
                                                                                              fill="#699635" />
                                                                                          <path
                                                                                              d="M28.9187 8.625H1.075V17.375H28.9187C29.5375 16.0188 29.875 14.5312 29.875 13C29.875 11.4688 29.5375 9.98125 28.9187 8.625Z"
                                                                                              fill="#F9F9F9" />
                                                                                          <path
                                                                                              d="M1.075 3.725C-1.9625 6.0875 -3.875 9.36875 -3.875 13C-3.875 16.6313 -1.9625 19.9125 1.075 22.275L7.375 17.375V8.625L1.075 3.725Z"
                                                                                              fill="#3E4347" />
                                                                                      </g>
                                                                                      <defs>
                                                                                          <clipPath id="clip0_2_278">
                                                                                              <rect x="0.5625" y="0.40625" width="24"
                                                                                                  height="24" rx="12" fill="white" />
                                                                                          </clipPath>
                                                                                      </defs>
                                                                                  </svg>
                                                                              </span> -->
                                      <span>US</span>
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Duration</label>
                                    <p class="vs-portfolio-info-text">
                                      10 months
                                    </p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Platforms</label>
                                    <p class="vs-portfolio-info-text">Web</p>
                                  </div>
                                  <div class="vs-portfolio-info-item">
                                    <label class="vs-portfolio-info-label">Technology</label>
                                    <p class="vs-portfolio-info-text">
                                      Flutter PHP, MySQL
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-portfolio-footer">
                                <!-- <div class="vs-portfolio-footer-item">
                                                                      <a href="#" class="btn btn-success">
                                                                          <span>View Case Study</span>
                                                                          <span class="vs-btn-icon">
                                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                      fill="white" />
                                                                              </svg>
                                                                          </span>
                                                                      </a>
                                                                  </div> -->
                                <div class="vs-portfolio-footer-item">
                                  <a href="https://gfacility.com/" class="btn btn-success" target="_blank">
                                    <span>Visit Website</span>
                                    <span class="vs-btn-icon">
                                      <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Portfolio Section End -->
      <!-- Our Process Section Start -->
      <section class="vs-process-section vs-section-spacer">
        <div class="vs-process-particle-center">
          <img src="/web-assets/images/process-particle-center.png" alt="process-particle-Center" class="img-fluid" />
        </div>
        <div class="vs-process-particle-right">
          <img src="/web-assets/images/process-particle-right.svg" alt="process-particle-left" class="img-fluid" />
        </div>
        <div class="container">
          <div class="vs-heading-center">
            <h2 class="vs-section-title vs-title-border">Our Process</h2>
            <p class="vs-section-description">
              Work with groundbreakers who create top-notch mobile and web apps
              on time & on budget
            </p>
          </div>
          <div class="vs-process-step">
            <div class="vs-process-step-item">
              <div class="vs-process-step-icon">
                <img src="/web-assets/images/idea.svg" alt="Idea" class="img-fluid" />
              </div>
              <h5 class="vs-process-step-title">Idea</h5>
              <p class="vs-process-step-description">
                We provide no obligation free consultation to discuss your
                project idea and help you with tech stack, budget and timelines.
              </p>
            </div>
            <div class="vs-process-step-item">
              <div class="vs-process-step-icon">
                <img src="/web-assets/images/ui-ux-design.svg" alt="UI/UX design" class="img-fluid" />
              </div>
              <h5 class="vs-process-step-title">UI/UX design</h5>
              <p class="vs-process-step-description">
                Our clients work with our product design team to bring project
                concept to live. We provide prototype so you can experience the
                app flow.
              </p>
            </div>
            <div class="vs-process-step-item">
              <div class="vs-process-step-icon">
                <img src="/web-assets/images/development.svg" alt="Development" class="img-fluid" />
              </div>
              <h5 class="vs-process-step-title">Development</h5>
              <p class="vs-process-step-description">
                Development team starts the coding. The process is divided into
                sprints. Our agile model allow you to assess what we’re building
                and provide you with weekly updates.
              </p>
            </div>
            <div class="vs-process-step-item">
              <div class="vs-process-step-icon">
                <img src="/web-assets/images/testing.svg" alt="Testing" class="img-fluid" />
              </div>
              <h5 class="vs-process-step-title">Testing</h5>
              <p class="vs-process-step-description">
                We test all use cases, critical scenarios, and all functional on
                real time device for IOS and Android along with Desktop
              </p>
            </div>
            <div class="vs-process-step-item">
              <div class="vs-process-step-icon">
                <img src="/web-assets/images/launching.svg" alt="Launching" class="img-fluid" />
              </div>
              <h5 class="vs-process-step-title">Launching</h5>
              <p class="vs-process-step-description">
                Passing through a final round of QA and client approval. We
                manage the submission in the app and play store. Additionally we
                help with tech support for 30 days after going live.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Process Section End -->
      <!-- Testimonials Section Start -->
      <section class="vs-testimonials-section vs-section-spacer vs-section-background">
        <div class="container">
          <div class="vs-heading-center">
            <h2 class="vs-section-title vs-title-border">Testimonials</h2>
            <p class="vs-section-description">
              See why our clients see us as a reliable <br />long-term partner
            </p>
          </div>
          <div class="vs-testimonial-slider-area">
            <div class="vs-testimonial-slider">
              <div class="vs-testimonial-item">
                <div class="vs-testimonial-card">
                  <div class="vs-testimonial-card-head">
                    <div class="vs-testimonial-user">
                      <div class="vs-testimonial-user-profile">
                        <img src="/web-assets/images/valon.png" alt="valon" class="img-fluid" />
                      </div>
                      <div class="vs-testimonial-user-info">
                        <h4 class="vs-testimonial-username">Valon Miski</h4>
                        <label class="vs-testimonial-designation">Founder, Gfacility</label>
                        <div class="vs-testimonial-user-country">
                          <img src="/web-assets/images/belgium.png" alt="belgium" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                    <!-- <div class="vs-testimonial-popup-btn">
                                          <img src="/web-assets/images/tesimonial-popup-img.png" alt="tesimonial-popup-img"
                                              class="img-fluid">
                                          <span class="vs-testimonial-play-btn" data-bs-toggle="modal"
                                              data-bs-target="#testimonialModal">
                                              <img src="/web-assets/images/play-btn.svg" alt="play-btn" class="img-fluid">
                                          </span>
                                      </div> -->
                  </div>
                  <div class="vs-testimonial-description">
                    <p>
                      Awesome work culture. Requested some difficult and
                      specific SDK integrations in my flutter application. Even
                      Though it was complex, they made sure to understand it
                      properly and to integrate it. Thanks to the dedication and
                      overtime this difficult project was delivered within time
                      and budget. Without a doubt one of my best experiences
                      until now. Well done!
                    </p>
                  </div>
                </div>
              </div>
              <div class="vs-testimonial-item">
                <div class="vs-testimonial-card">
                  <div class="vs-testimonial-card-head">
                    <div class="vs-testimonial-user">
                      <div class="vs-testimonial-user-profile">
                        <img src="/web-assets/images/andrew.png" alt="Andrew Garcia" class="img-fluid" />
                      </div>
                      <div class="vs-testimonial-user-info">
                        <h4 class="vs-testimonial-username">Andrew Garcia</h4>
                        <label class="vs-testimonial-designation">Co-owner, Bubble Battle</label>
                        <div class="vs-testimonial-user-country">
                          <img src="/web-assets/images/USA.png" alt="USA" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vs-testimonial-description">
                    <p>
                      Plazmasoft and Krishna did an AWESOME Job on our two
                      projects Bubble Battle and Topline in last 2 years and we
                      are very happy with the end results. They provided
                      exceptional support even after delivery of the project.
                    </p>
                  </div>
                </div>
              </div>
              <div class="vs-testimonial-item">
                <div class="vs-testimonial-card">
                  <div class="vs-testimonial-card-head">
                    <div class="vs-testimonial-user">
                      <div class="vs-testimonial-user-profile">
                        <img src="/web-assets/images/eric.png" alt="Eric Liang" class="img-fluid" />
                      </div>
                      <div class="vs-testimonial-user-info">
                        <h4 class="vs-testimonial-username">Eric Liang</h4>
                        <label class="vs-testimonial-designation">PANTAYA, Los Angeles</label>
                        <div class="vs-testimonial-user-country">
                          <img src="/web-assets/images/USA.png" alt="USA" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vs-testimonial-description">
                    <p>
                      Thanks Krishna for completing this task in our social
                      networking app. This was my second project with Krishna
                      and the team Plazmasoft, they did a decent job and
                      delivered the work on time . I'm happy to recommend them
                      for any Web and react native app development work.
                    </p>
                  </div>
                </div>
              </div>
              <div class="vs-testimonial-item">
                <div class="vs-testimonial-card">
                  <div class="vs-testimonial-card-head">
                    <div class="vs-testimonial-user">
                      <div class="vs-testimonial-user-profile">
                        <img src="/web-assets/images/mason.png" alt="Mason Lavallet" class="img-fluid" />
                      </div>
                      <div class="vs-testimonial-user-info">
                        <h4 class="vs-testimonial-username">Mason Lavallet</h4>
                        <label class="vs-testimonial-designation">Heavy Equipment Auction Transport</label>
                        <div class="vs-testimonial-user-country">
                          <img src="/web-assets/images/USA.png" alt="USA" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                    <!-- <div class="vs-testimonial-popup-btn">
                                          <img src="/web-assets/images/tesimonial-popup-img.png" alt="tesimonial-popup-img"
                                              class="img-fluid">
                                          <span class="vs-testimonial-play-btn" data-bs-toggle="modal"
                                              data-bs-target="#testimonialModal">
                                              <img src="/web-assets/images/play-btn.svg" alt="play-btn" class="img-fluid">
                                          </span>
                                      </div> -->
                  </div>
                  <div class="vs-testimonial-description">
                    <p>
                      Excellent work and a helpful team. Always willing to go
                      the extra mile for our project and we appreciate the
                      dedication that you’ve shown in our project! Krishna and
                      his team went above and beyond to ensure this website was
                      completed to our specifications. I would highly recommend
                      him and his company and will use them again in the future!
                    </p>
                  </div>
                </div>
              </div>
              <div class="vs-testimonial-item">
                <div class="vs-testimonial-card">
                  <div class="vs-testimonial-card-head">
                    <div class="vs-testimonial-user">
                      <div class="vs-testimonial-user-profile">
                        <img src="/web-assets/images/aziz.png" alt="AZIZ H L" class="img-fluid" />
                      </div>
                      <div class="vs-testimonial-user-info">
                        <h4 class="vs-testimonial-username">AZIZ H L</h4>
                        <label class="vs-testimonial-designation">Director, MooMen</label>
                        <div class="vs-testimonial-user-country">
                          <img src="/web-assets/images/UK.png" alt="UK" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                    <!-- <div class="vs-testimonial-popup-btn">
                                          <img src="/web-assets/images/tesimonial-popup-img.png" alt="tesimonial-popup-img"
                                              class="img-fluid">
                                          <span class="vs-testimonial-play-btn" data-bs-toggle="modal"
                                              data-bs-target="#testimonialModal">
                                              <img src="/web-assets/images/play-btn.svg" alt="play-btn" class="img-fluid">
                                          </span>
                                      </div> -->
                  </div>
                  <div class="vs-testimonial-description">
                    <p>
                      Very swift and eloquent communication, following up daily
                      on the progress of the project and robust reactivity on
                      each step of the way. very satisfied with the
                      professionalism and work they have done. I would highly
                      recommend it.
                    </p>
                  </div>
                </div>
              </div>
              <div class="vs-testimonial-item">
                <div class="vs-testimonial-card">
                  <div class="vs-testimonial-card-head">
                    <div class="vs-testimonial-user">
                      <div class="vs-testimonial-user-profile">
                        <img src="/web-assets/images/tim.png" alt="Tim Kanellitsas" class="img-fluid" />
                      </div>
                      <div class="vs-testimonial-user-info">
                        <h4 class="vs-testimonial-username">Tim Kanellitsas</h4>
                        <label class="vs-testimonial-designation">Director of Design, KiaroXR</label>
                        <div class="vs-testimonial-user-country">
                          <img src="/web-assets/images/USA.png" alt="USA" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                    <!-- <div class="vs-testimonial-popup-btn">
                                          <img src="/web-assets/images/tesimonial-popup-img.png" alt="tesimonial-popup-img"
                                              class="img-fluid">
                                          <span class="vs-testimonial-play-btn" data-bs-toggle="modal"
                                              data-bs-target="#testimonialModal">
                                              <img src="/web-assets/images/play-btn.svg" alt="play-btn" class="img-fluid">
                                          </span>
                                      </div> -->
                  </div>
                  <div class="vs-testimonial-description">
                    <p>
                      Couldn't recommend Krish and his team enough. Very
                      professional, very high-quality work. Very transparent as
                      well. Thanks again guys!"
                    </p>
                  </div>
                </div>
              </div>
              <div class="vs-testimonial-item">
                <div class="vs-testimonial-card">
                  <div class="vs-testimonial-card-head">
                    <div class="vs-testimonial-user">
                      <div class="vs-testimonial-user-profile">
                        <img src="/web-assets/images/awani.png" alt="Awani Sharma" class="img-fluid" />
                      </div>
                      <div class="vs-testimonial-user-info">
                        <h4 class="vs-testimonial-username">Awani Sharma</h4>
                        <label class="vs-testimonial-designation">Creator, BooksAmaze</label>
                        <div class="vs-testimonial-user-country">
                          <img src="/web-assets/images/USA.png" alt="USA" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                    <!-- <div class="vs-testimonial-popup-btn">
                                          <img src="/web-assets/images/tesimonial-popup-img.png" alt="tesimonial-popup-img"
                                              class="img-fluid">
                                          <span class="vs-testimonial-play-btn" data-bs-toggle="modal"
                                              data-bs-target="#testimonialModal">
                                              <img src="/web-assets/images/play-btn.svg" alt="play-btn" class="img-fluid">
                                          </span>
                                      </div> -->
                  </div>
                  <div class="vs-testimonial-description">
                    <p>
                      From the day one when I spoke to them I felt very
                      comfortable, they came with detailed requirements specs
                      based on my requirement and their understanding was better
                      than mine. The most I like about them is their
                      Flexibility, ability to come up with solutions as needed,
                      provide proper reasoning for why things need to be built
                      in a certain way. They have a good product development
                      process, highly recommended.
                    </p>
                  </div>
                </div>
              </div>
              <div class="vs-testimonial-item">
                <div class="vs-testimonial-card">
                  <div class="vs-testimonial-card-head">
                    <div class="vs-testimonial-user">
                      <div class="vs-testimonial-user-profile">
                        <img src="/web-assets/images/thomas.png" alt="Thomas Jerphanion" class="img-fluid" />
                      </div>
                      <div class="vs-testimonial-user-info">
                        <h4 class="vs-testimonial-username">
                          Thomas Jerphanion
                        </h4>
                        <label class="vs-testimonial-designation">Founder, E2 Hospitality</label>
                        <div class="vs-testimonial-user-country">
                          <img src="/web-assets/images/USA.png" alt="USA" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vs-testimonial-description">
                    <p>
                      As a finance consultant based out of Germany, I acquired
                      the support of Plazmasoft developing a financial services
                      app. Krishna and his team were able to convert my vision
                      into an easy to use app well within the agreed deadline.
                      Now they are supporting me in marketing and social media
                      efforts. I can recommend Krishna and Plazmasoft to any
                      business needing IT support.
                    </p>
                  </div>
                </div>
              </div>
              <div class="vs-testimonial-item">
                <div class="vs-testimonial-card">
                  <div class="vs-testimonial-card-head">
                    <div class="vs-testimonial-user">
                      <div class="vs-testimonial-user-profile">
                        <img src="/web-assets/images/thiago.png" alt="Thiago Garcia" class="img-fluid" />
                      </div>
                      <div class="vs-testimonial-user-info">
                        <h4 class="vs-testimonial-username">Thiago Garcia</h4>
                        <label class="vs-testimonial-designation">CEO & Founder,10X Partners</label>
                        <div class="vs-testimonial-user-country">
                          <img src="/web-assets/images/germany.png" alt="germany" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vs-testimonial-description">
                    <p>
                      We did MVP with them last year and worked with them for
                      more than 6 months. The team has goodwill and is dedicated
                      towards the project they workon. I highly recommend their
                      services.
                    </p>
                  </div>
                </div>
              </div>
              <div class="vs-testimonial-item">
                <div class="vs-testimonial-card">
                  <div class="vs-testimonial-card-head">
                    <div class="vs-testimonial-user">
                      <div class="vs-testimonial-user-profile">
                        <img src="/web-assets/images/shiva.png" alt="Shiva Rama Krishna " class="img-fluid" />
                      </div>
                      <div class="vs-testimonial-user-info">
                        <h4 class="vs-testimonial-username">
                          Shiva Rama Krishna
                        </h4>
                        <label class="vs-testimonial-designation">Founder, Laksa Solution Ltd</label>
                        <div class="vs-testimonial-user-country">
                          <img src="/web-assets/images/USA.png" alt="USA" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vs-testimonial-description">
                    <p>
                      Plazmasoft and Krishna did an AWESOME Job on our two
                      projects Bubble Battle and Topline in last 2 years and we
                      are very happy with the end results. They provided
                      exceptional support even after delivery of the project.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonials Section End -->
      <!-- Related Services Section Start -->
      <section class="vs-related-services vs-section-spacer">
        <div class="container">
          <div class="vs-heading-center">
            <h2 class="vs-section-title vs-title-border">Related Services</h2>
          </div>
          <div class="vs-related-service-slider">
            <div class="vs-related-services-item">
              <a href="https://plazmasoft.com/services/flutter-app-development" style="color: initial">
                <div class="vs-related-card">
                  <div class="vs-related-card-icon">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_5996_34160" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="6" y="0"
                        width="52" height="64">
                        <path
                          d="M57.6827 29.5321L40.4551 46.7658L57.6827 63.9995H37.9967L20.763 46.7658L37.9967 29.5321H57.6827ZM37.9967 0L6 31.9967L15.8461 41.8427L57.6827 0H37.9967Z"
                          fill="white" />
                      </mask>
                      <g mask="url(#mask0_5996_34160)">
                        <path d="M20.7695 46.7659L30.6094 56.612L57.6831 29.5322H37.9971L20.7695 46.7659Z"
                          fill="#39CEFD" />
                      </g>
                      <mask id="mask1_5996_34160" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="6" y="0"
                        width="52" height="64">
                        <path
                          d="M57.6827 29.5321L40.4551 46.7658L57.6827 63.9995H37.9967L20.763 46.7658L37.9967 29.5321H57.6827ZM37.9967 0L6 31.9967L15.8461 41.8427L57.6827 0H37.9967Z"
                          fill="white" />
                      </mask>
                      <g mask="url(#mask1_5996_34160)">
                        <path d="M37.9967 0H57.6827L15.8461 41.8427L6 31.9967L37.9967 0Z" fill="#39CEFD" />
                      </g>
                      <mask id="mask2_5996_34160" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="6" y="0"
                        width="52" height="64">
                        <path
                          d="M57.6827 29.5321L40.4551 46.7658L57.6827 63.9995H37.9967L20.763 46.7658L37.9967 29.5321H57.6827ZM37.9967 0L6 31.9967L15.8461 41.8427L57.6827 0H37.9967Z"
                          fill="white" />
                      </mask>
                      <g mask="url(#mask2_5996_34160)">
                        <path d="M30.6094 56.6117L37.997 63.9932H57.683L40.4555 46.7656L30.6094 56.6117Z"
                          fill="#03569B" />
                      </g>
                      <mask id="mask3_5996_34160" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="6" y="0"
                        width="52" height="64">
                        <path
                          d="M57.6827 29.5321L40.4551 46.7658L57.6827 63.9995H37.9967L20.763 46.7658L37.9967 29.5321H57.6827ZM37.9967 0L6 31.9967L15.8461 41.8427L57.6827 0H37.9967Z"
                          fill="white" />
                      </mask>
                      <g mask="url(#mask3_5996_34160)">
                        <path d="M45.2121 51.5531L40.4555 46.7656L30.6094 56.6117L45.2121 51.5531Z"
                          fill="url(#paint0_linear_5996_34160)" />
                      </g>
                      <mask id="mask4_5996_34160" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="6" y="0"
                        width="52" height="64">
                        <path
                          d="M57.6827 29.5321L40.4551 46.7658L57.6827 63.9995H37.9967L20.763 46.7658L37.9967 29.5321H57.6827ZM37.9967 0L6 31.9967L15.8461 41.8427L57.6827 0H37.9967Z"
                          fill="white" />
                      </mask>
                      <g mask="url(#mask4_5996_34160)">
                        <path d="M20.7695 46.7624L30.6159 36.916L40.4628 46.7624L30.6159 56.6088L20.7695 46.7624Z"
                          fill="#16B9FD" />
                      </g>
                      <path
                        d="M57.6827 29.5321L40.4551 46.7658L57.6827 63.9995H37.9967L20.763 46.7658L37.9967 29.5321H57.6827ZM37.9967 0L6 31.9967L15.8461 41.8427L57.6827 0H37.9967Z"
                        fill="url(#paint1_radial_5996_34160)" />
                      <defs>
                        <linearGradient id="paint0_linear_5996_34160" x1="33.4828" y1="58.5118" x2="40.8159" y2="51.1787"
                          gradientUnits="userSpaceOnUse">
                          <stop stop-color="#1A237E" stop-opacity="0.4" />
                          <stop offset="1" stop-color="#1A237E" stop-opacity="0" />
                        </linearGradient>
                        <radialGradient id="paint1_radial_5996_34160" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                          gradientTransform="translate(7.45194 4.36202) scale(78.2956)">
                          <stop stop-color="white" stop-opacity="0.1" />
                          <stop offset="1" stop-color="white" stop-opacity="0" />
                        </radialGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="vs-related-card-body">
                    <h2 class="vs-related-card-title">
                      Flutter App <br />Development
                    </h2>
                    <p class="vs-related-card-description">
                      Build smoothly functioning, next-gen apps with features
                      like Hot Reloads and Ahead of Time compilations that are
                      fully customizable and backed by the robust support
                      without the need for a JavaScript bridge
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="vs-related-services-item">
              <a href="https://plazmasoft.com/services/react-native-app-development" style="color: initial">
                <div class="vs-related-card">
                  <div class="vs-related-card-icon">
                    <svg width="80" height="64" viewBox="0 0 80 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M66.0072 29.2284C66.0072 25.74 61.6387 22.4341 54.9408 20.384C56.4865 13.5573 55.7995 8.12608 52.7725 6.38722C52.0747 5.97933 51.2592 5.78612 50.3682 5.78612V8.17975C50.8619 8.17975 51.2592 8.27636 51.5918 8.45882C53.0516 9.29604 53.685 12.484 53.1911 16.5842C53.0732 17.5932 52.88 18.6558 52.6438 19.7399C50.5398 19.2247 48.2429 18.8276 45.8278 18.57C44.3789 16.5842 42.8761 14.781 41.3626 13.2031C44.8618 9.95081 48.1464 8.169 50.379 8.169V5.77539C47.4271 5.77539 43.563 7.8792 39.6561 11.5286C35.7488 7.90066 31.8848 5.81833 28.9331 5.81833V8.21194C31.1549 8.21194 34.4501 9.98302 37.9493 13.2138C36.4466 14.7917 34.9438 16.5842 33.5162 18.57C31.0904 18.8276 28.7934 19.2247 26.6897 19.7507C26.4427 18.6773 26.2603 17.6361 26.1314 16.6379C25.6271 12.5376 26.2495 9.34971 27.6987 8.50176C28.0206 8.30854 28.4391 8.22269 28.9331 8.22269V5.82906C28.0314 5.82906 27.2155 6.02227 26.5073 6.43015C23.491 8.169 22.8149 13.5895 24.3711 20.3947C17.6948 22.4556 13.3477 25.7508 13.3477 29.2284C13.3477 32.7171 17.7163 36.0231 24.4141 38.073C22.8684 44.8998 23.5553 50.3309 26.5824 52.0698C27.2801 52.4776 28.0957 52.6708 28.9974 52.6708C31.9491 52.6708 35.8134 50.5671 39.7204 46.9176C43.6274 50.5457 47.4916 52.6281 50.4433 52.6281C51.3448 52.6281 52.1607 52.4349 52.8692 52.0269C55.8852 50.2879 56.5616 44.8674 55.0051 38.0625C61.66 36.0123 66.0072 32.7063 66.0072 29.2284ZM52.032 22.0691C51.6348 23.4539 51.1411 24.8813 50.5828 26.3089C50.1428 25.4503 49.6813 24.5916 49.1768 23.7328C48.6831 22.8742 48.157 22.037 47.6311 21.2212C49.1552 21.4466 50.6258 21.7257 52.032 22.0691ZM47.1158 33.5005C46.2786 34.9497 45.4201 36.3236 44.5291 37.6009C42.9296 37.7404 41.3091 37.8155 39.6774 37.8155C38.0566 37.8155 36.4358 37.7404 34.8473 37.6115C33.9564 36.3341 33.0868 34.9711 32.2496 33.5327C31.4338 32.1266 30.6934 30.699 30.017 29.2608C30.6826 27.8224 31.4338 26.384 32.2391 24.978C33.0763 23.529 33.9348 22.155 34.8257 20.8777C36.4252 20.7382 38.0458 20.663 39.6774 20.663C41.2983 20.663 42.9191 20.7382 44.5075 20.867C45.3984 22.1443 46.268 23.5074 47.1052 24.9458C47.921 26.3519 48.6615 27.7795 49.3378 29.2179C48.6615 30.6561 47.921 32.0945 47.1158 33.5005ZM50.5828 32.1053C51.1463 33.5041 51.6406 34.9297 52.0642 36.3771C50.6579 36.7205 49.1768 37.0105 47.6419 37.2359C48.1678 36.4095 48.6936 35.5615 49.1876 34.6919C49.6813 33.8334 50.1428 32.9638 50.5828 32.1053ZM39.6988 43.5581C38.7006 42.5275 37.7023 41.379 36.7149 40.1233C37.681 40.1662 38.6684 40.1984 39.6666 40.1984C40.6757 40.1984 41.6739 40.177 42.6507 40.1233C41.7294 41.3206 40.7439 42.4672 39.6988 43.5581ZM31.713 37.2359C30.1889 37.0105 28.7183 36.7313 27.3123 36.3879C27.7093 35.0032 28.2032 33.5756 28.7612 32.148C29.2014 33.0068 29.663 33.8656 30.1673 34.7241C30.6718 35.5829 31.1871 36.42 31.713 37.2359ZM39.6453 14.8991C40.6435 15.9295 41.6417 17.078 42.6291 18.3338C41.6631 18.2909 40.6757 18.2587 39.6774 18.2587C38.6684 18.2587 37.6702 18.2802 36.6935 18.3338C37.6148 17.1365 38.6002 15.9899 39.6453 14.8991ZM31.7022 21.2212C31.1763 22.0477 30.6504 22.8956 30.1567 23.765C29.663 24.6237 29.2014 25.4825 28.7612 26.3411C28.1977 24.9422 27.7034 23.5166 27.2801 22.0691C28.6861 21.7364 30.1673 21.4466 31.7022 21.2212ZM21.9882 34.6598C18.1886 33.0389 15.7305 30.9138 15.7305 29.2284C15.7305 27.5433 18.1886 25.4074 21.9882 23.7974C22.9113 23.4001 23.9204 23.0459 24.9616 22.7132C25.5734 24.8169 26.3784 27.0066 27.3766 29.25C26.3892 31.4827 25.5947 33.6615 24.9937 35.7547C23.9312 35.4218 22.9221 35.057 21.9882 34.6598ZM27.763 49.9982C26.3032 49.1611 25.6698 45.9732 26.1638 41.8727C26.2819 40.8639 26.4749 39.8012 26.711 38.717C28.815 39.2323 31.112 39.6295 33.527 39.8871C34.976 41.8727 36.4787 43.676 37.9923 45.2538C34.4931 48.5063 31.2085 50.2879 28.9758 50.2879C28.4929 50.2774 28.0851 50.1807 27.763 49.9982ZM53.2234 41.8192C53.7277 45.9194 53.1054 49.1073 51.6562 49.9553C51.3343 50.1485 50.9157 50.2344 50.4217 50.2344C48.1999 50.2344 44.9047 48.4633 41.4055 45.2325C42.9083 43.6546 44.411 41.8622 45.8386 39.8763C48.2645 39.6187 50.5614 39.2215 52.6652 38.6956C52.9122 39.7798 53.1054 40.821 53.2234 41.8192ZM57.3558 34.6598C56.4327 35.057 55.4237 35.4113 54.3825 35.7439C53.7707 33.6402 52.9657 31.4505 51.9674 29.2071C52.9551 26.9745 53.7493 24.7956 54.3503 22.7024C55.4131 23.0352 56.4219 23.4001 57.3666 23.7974C61.1663 25.4179 63.6243 27.5433 63.6243 29.2284C63.6135 30.9138 61.1555 33.0497 57.3558 34.6598Z"
                        fill="#61DAFB" />
                      <path
                        d="M39.6679 34.1339C42.3772 34.1339 44.5733 31.9378 44.5733 29.2285C44.5733 26.5194 42.3772 24.3232 39.6679 24.3232C36.9588 24.3232 34.7627 26.5194 34.7627 29.2285C34.7627 31.9378 36.9588 34.1339 39.6679 34.1339ZM15.7401 61.1168H14.1208V63.9055H13.207V57.0118H15.4892C16.2656 57.0118 16.8622 57.1886 17.2789 57.5422C17.6987 57.8955 17.9086 58.4101 17.9086 59.0855C17.9086 59.5149 17.7918 59.8888 17.5582 60.2078C17.3278 60.5266 17.0058 60.7649 16.5923 60.9226L18.2116 63.8486V63.9055H17.2363L15.7401 61.1168ZM14.1208 60.3734H15.5176C15.9689 60.3734 16.3272 60.2565 16.5923 60.023C16.8606 59.7895 16.9948 59.477 16.9948 59.0855C16.9948 58.6595 16.8669 58.3328 16.6113 58.1055C16.3588 57.8782 15.9926 57.763 15.5128 57.7599H14.1208V60.3734ZM21.1756 64.0003C20.4811 64.0003 19.9161 63.773 19.4805 63.3184C19.0449 62.8607 18.8271 62.2499 18.8271 61.4861V61.3251C18.8271 60.817 18.9234 60.3641 19.1159 59.9664C19.3116 59.5653 19.5831 59.2528 19.9303 59.0289C20.2807 58.8016 20.6594 58.6878 21.0666 58.6878C21.7327 58.6878 22.2504 58.9072 22.6196 59.3459C22.9889 59.7847 23.1735 60.4128 23.1735 61.2303V61.5949H19.703C19.7156 62.1001 19.8624 62.5089 20.1434 62.8214C20.4274 63.1305 20.7873 63.2853 21.2229 63.2853C21.5323 63.2853 21.7941 63.2222 22.0087 63.0959C22.2235 62.9697 22.4112 62.8024 22.5723 62.5941L23.1073 63.0107C22.6779 63.6703 22.0342 64.0003 21.1756 64.0003ZM21.0666 59.4076C20.7131 59.4076 20.4164 59.537 20.1765 59.7957C19.9366 60.0516 19.7882 60.4113 19.7314 60.8753H22.2977V60.8091C22.2725 60.3641 22.1525 60.0199 21.9379 59.7767C21.7231 59.5307 21.4327 59.4076 21.0666 59.4076ZM27.3543 63.9055C27.3037 63.8045 27.2627 63.6247 27.2312 63.3657C26.8239 63.7886 26.3379 64.0003 25.7729 64.0003C25.2679 64.0003 24.8529 63.8582 24.5277 63.574C24.2058 63.2867 24.0448 62.9238 24.0448 62.4851C24.0448 61.9518 24.2469 61.5382 24.6508 61.2447C25.0579 60.9478 25.6294 60.7995 26.3648 60.7995H27.2171V60.3972C27.2171 60.0909 27.1254 59.8478 26.9425 59.668C26.7593 59.4849 26.4893 59.3934 26.1327 59.3934C25.8202 59.3934 25.5583 59.4722 25.3469 59.6301C25.1354 59.7878 25.0296 59.9788 25.0296 60.203H24.1489C24.1489 59.9474 24.2389 59.7011 24.4187 59.4642C24.6018 59.2245 24.8481 59.0351 25.1575 58.8961C25.47 58.7574 25.8122 58.6878 26.1848 58.6878C26.7752 58.6878 27.2375 58.8361 27.572 59.133C27.9066 59.4266 28.0802 59.8322 28.0929 60.3497V62.7076C28.0929 63.178 28.1529 63.552 28.2729 63.8297V63.9055H27.3543ZM25.9008 63.238C26.1754 63.238 26.4358 63.167 26.6821 63.0249C26.9281 62.8828 27.1064 62.6982 27.2171 62.4709V61.4199H26.5304C25.4573 61.4199 24.9206 61.7338 24.9206 62.362C24.9206 62.6365 25.0123 62.8513 25.1952 63.0059C25.3783 63.1605 25.6135 63.238 25.9008 63.238ZM31.5208 63.2853C31.8333 63.2853 32.1064 63.1905 32.34 63.0011C32.5735 62.8117 32.7029 62.5751 32.7281 62.2909H33.5568C33.541 62.5844 33.44 62.8638 33.2537 63.129C33.0675 63.3943 32.8181 63.6057 32.5056 63.7634C32.1962 63.9213 31.8681 64.0003 31.5208 64.0003C30.8233 64.0003 30.2677 63.7682 29.8541 63.3043C29.4439 62.8369 29.2387 62.1995 29.2387 61.3913V61.2447C29.2387 60.7459 29.3302 60.3024 29.5133 59.9143C29.6964 59.5259 29.9583 59.2245 30.2993 59.0099C30.6433 58.7951 31.0489 58.6878 31.516 58.6878C32.0906 58.6878 32.5673 58.8599 32.946 59.2041C33.3279 59.548 33.5314 59.9947 33.5568 60.5438H32.7281C32.7029 60.2124 32.5766 59.9409 32.3493 59.7295C32.1254 59.5149 31.8475 59.4076 31.516 59.4076C31.071 59.4076 30.7254 59.5684 30.4791 59.8905C30.2362 60.2093 30.1145 60.6718 30.1145 61.2778V61.4434C30.1145 62.0336 30.2362 62.4882 30.4791 62.8069C30.7223 63.1259 31.0696 63.2853 31.5208 63.2853ZM35.7299 57.5422V58.7826H36.6864V59.4597H35.7299V62.6365C35.7299 62.8417 35.7727 62.9963 35.8579 63.1005C35.9431 63.2015 36.0883 63.2522 36.2935 63.2522C36.3943 63.2522 36.5333 63.2332 36.7099 63.1953V63.9055C36.4795 63.9686 36.2556 64.0003 36.0377 64.0003C35.6464 64.0003 35.3512 63.8817 35.1522 63.6451C34.9535 63.4084 34.8541 63.0722 34.8541 62.6365V59.4597H33.9212V58.7826H34.8541V57.5422H35.7299ZM45.5545 63.9055H44.6405L41.1702 58.5932V63.9055H40.2564V57.0118H41.1702L44.6502 62.3478V57.0118H45.5545V63.9055ZM50.1945 63.9055C50.1439 63.8045 50.1028 63.6247 50.0714 63.3657C49.6641 63.7886 49.1781 64.0003 48.6131 64.0003C48.1081 64.0003 47.6928 63.8582 47.3679 63.574C47.046 63.2867 46.8849 62.9238 46.8849 62.4851C46.8849 61.9518 47.0868 61.5382 47.491 61.2447C47.898 60.9478 48.4695 60.7995 49.2049 60.7995H50.0572V60.3972C50.0572 60.0909 49.9655 59.8478 49.7824 59.668C49.5995 59.4849 49.3295 59.3934 48.9728 59.3934C48.6603 59.3934 48.3985 59.4722 48.187 59.6301C47.9756 59.7878 47.8697 59.9788 47.8697 60.203H46.9891C46.9891 59.9474 47.0791 59.7011 47.2589 59.4642C47.442 59.2245 47.6883 59.0351 47.9977 58.8961C48.3102 58.7574 48.6524 58.6878 49.0249 58.6878C49.6151 58.6878 50.0776 58.8361 50.4122 59.133C50.7468 59.4266 50.9203 59.8322 50.933 60.3497V62.7076C50.933 63.178 50.9931 63.552 51.1131 63.8297V63.9055H50.1945ZM48.741 63.238C49.0156 63.238 49.276 63.167 49.5222 63.0249C49.7683 62.8828 49.9466 62.6982 50.0572 62.4709V61.4199H49.3705C48.2974 61.4199 47.7608 61.7338 47.7608 62.362C47.7608 62.6365 47.8524 62.8513 48.0353 63.0059C48.2185 63.1605 48.4537 63.238 48.741 63.238ZM53.4945 57.5422V58.7826H54.451V59.4597H53.4945V62.6365C53.4945 62.8417 53.5372 62.9963 53.6224 63.1005C53.7076 63.2015 53.8529 63.2522 54.0581 63.2522C54.1589 63.2522 54.2978 63.2332 54.4747 63.1953V63.9055C54.2441 63.9686 54.0201 64.0003 53.8022 64.0003C53.411 64.0003 53.1158 63.8817 52.9168 63.6451C52.7181 63.4084 52.6187 63.0722 52.6187 62.6365V59.4597H51.686V58.7826H52.6187V57.5422H53.4945ZM56.4301 63.9055H55.5541V58.7826H56.4301V63.9055ZM55.483 57.4236C55.483 57.2818 55.5258 57.1618 55.611 57.0638C55.6993 56.9659 55.8287 56.9172 55.9991 56.9172C56.1697 56.9172 56.2991 56.9659 56.3874 57.0638C56.4757 57.1618 56.5199 57.2818 56.5199 57.4236C56.5199 57.5657 56.4757 57.684 56.3874 57.7789C56.2991 57.8734 56.1697 57.9209 55.9991 57.9209C55.8287 57.9209 55.6993 57.8734 55.611 57.7789C55.5258 57.684 55.483 57.5657 55.483 57.4236ZM59.5266 62.7172L60.7953 58.7826H61.6903L59.8533 63.9055H59.1855L57.3297 58.7826H58.2245L59.5266 62.7172ZM64.5926 64.0003C63.8982 64.0003 63.3332 63.773 62.8976 63.3184C62.462 62.8607 62.2443 62.2499 62.2443 61.4861V61.3251C62.2443 60.817 62.3405 60.3641 62.533 59.9664C62.7286 59.5653 63.0001 59.2528 63.3474 59.0289C63.6978 58.8016 64.0766 58.6878 64.4836 58.6878C65.1497 58.6878 65.6674 58.9072 66.0368 59.3459C66.4059 59.7847 66.5907 60.4128 66.5907 61.2303V61.5949H63.1201C63.1328 62.1001 63.2795 62.5089 63.5605 62.8214C63.8445 63.1305 64.2045 63.2853 64.6399 63.2853C64.9493 63.2853 65.2114 63.2222 65.4259 63.0959C65.6405 62.9697 65.8285 62.8024 65.9895 62.5941L66.5245 63.0107C66.0951 63.6703 65.4511 64.0003 64.5926 64.0003ZM64.4836 59.4076C64.1303 59.4076 63.8334 59.537 63.5937 59.7957C63.3536 60.0516 63.2053 60.4113 63.1487 60.8753H65.7147V60.8091C65.6895 60.3641 65.5695 60.0199 65.3549 59.7767C65.1403 59.5307 64.8499 59.4076 64.4836 59.4076Z"
                        fill="#61DAFB" />
                    </svg>
                  </div>
                  <div class="vs-related-card-body">
                    <h2 class="vs-related-card-title">
                      React Native <br />Development
                    </h2>
                    <p class="vs-related-card-description">
                      Develop immersive mobile applications with a single
                      codebase using feature-rich open-source UI toolkit helping
                      derive value from a deep focus on innovation,
                      intelligence, and excellence enabling advanced
                      functionalities
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="vs-related-services-item">
              <a href="https://plazmasoft.com/services/mvp-development" style="color: initial">
                <div class="vs-related-card">
                  <div class="vs-related-card-icon">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M19.2219 52.9495C17.1126 55.0588 9.76856 56.9335 8.3179 57.2882C8.21123 57.3148 8.10726 57.3255 8.0006 57.3255C7.64593 57.3255 7.30194 57.1841 7.04861 56.9255C6.71794 56.5895 6.59259 56.1042 6.71259 55.6482C7.11526 54.1362 9.2246 46.4802 11.3233 44.3815C12.5046 43.2002 14.038 42.5922 15.5793 42.6082C17.07 42.6428 18.5019 43.2748 19.6086 44.3815C21.8646 46.6402 21.6913 50.4828 19.2219 52.9495ZM45.8886 39.2775L45.2006 43.4668C44.4006 48.5068 40.9339 52.8002 36.1873 54.6935L29.8406 57.2268C29.6806 57.3068 29.4939 57.3335 29.3339 57.3335C29.0406 57.3335 28.7206 57.2268 28.4806 57.0135C28.1072 56.7202 27.9206 56.2135 28.0273 55.7335L29.7953 46.8375C29.5366 46.8882 29.2913 46.9575 29.0273 47.0028C28.702 47.0588 28.3739 47.0855 28.0486 47.0855C26.4913 47.0855 24.9606 46.4535 23.8139 45.3095L18.6886 40.1815C17.3019 38.7948 16.6699 36.8482 16.9952 34.9682C17.0406 34.7095 17.1099 34.4669 17.1579 34.2109L8.3179 35.9682C8.2379 35.9948 8.1313 35.9948 8.0513 35.9948C7.6513 35.9948 7.27795 35.8348 7.03795 35.5148C6.71795 35.1415 6.6379 34.6082 6.82457 34.1549L9.38463 27.7815C11.2513 23.0615 15.5446 19.5948 20.5846 18.7948L24.7206 18.1042C31.5499 10.2722 42.2752 5.99219 55.9952 5.99219C57.0992 5.99219 57.9952 6.88819 57.9952 7.99219C58.0006 21.7229 53.7233 32.4482 45.8886 39.2775ZM50.5846 25.8535C50.1739 19.1602 44.8379 13.8268 38.1446 13.4135C30.4139 16.7442 23.0966 23.2028 20.9366 35.6535C20.8353 36.2428 21.0566 36.8935 21.5179 37.3521L26.6433 42.4801C27.1019 42.9388 27.7553 43.1575 28.3446 43.0588C40.7979 40.9015 47.2566 33.5868 50.5846 25.8535ZM36.0006 22.0002C32.6859 22.0002 30.0006 24.6855 30.0006 28.0002C30.0006 31.3148 32.6859 34.0002 36.0006 34.0002C39.3153 34.0002 42.0006 31.3148 42.0006 28.0002C42.0006 24.6855 39.3153 22.0002 36.0006 22.0002Z"
                        fill="#46D1FD" />
                    </svg>
                  </div>
                  <div class="vs-related-card-body">
                    <h2 class="vs-related-card-title">
                      MVP App <br />Development
                    </h2>
                    <p class="vs-related-card-description">
                      Create custom mobile apps for an exceptional native user
                      experience using solitary language class library enabling
                      programmers to reuse code for developing highly featured
                      apps driving top-notch business value
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- Related Services Section End -->

      <!-- FAQ Section Start -->
      <section class="vs-faq-section vs-section-spacer vs-section-background">
        <div class="container">
          <div class="vs-heading-center">
            <h2 class="vs-section-title vs-title-border">
              Frequently Asked Questions
            </h2>
            <!-- <p class="vs-section-description">Here, we have gathered a list of FAQs on for mobile development
                          services that you might have and many of our partners have asked us.</p> -->
          </div>
          <div class="vs-faq-content">
            <div class="accordion" id="tyFaq">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1"
                    aria-expanded="true" aria-controls="collapseFaq1">
                    What is web app development?
                  </button>
                </h2>
                <div id="collapseFaq1" class="accordion-collapse collapse show" aria-labelledby="headingFaq1"
                  data-bs-parent="#tyFaq">
                  <div class="accordion-body">
                    <p>
                      Web app development involves creating software
                      applications accessible through web browsers over the
                      internet. These apps can perform various functions and
                      deliver services to users.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                    Which is the best web app development company?
                  </button>
                </h2>
                <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2"
                  data-bs-parent="#tyFaq">
                  <div class="accordion-body">
                    <p>
                      Although there is a long list of the best web app
                      development companies, Plazmasoft outshines all. We are
                      recognized as a leading web app development company known
                      for expertise, client satisfaction, and delivery of
                      top-notch development solutions. Get in touch with us
                      today to get a perfect web app for your business.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                    How much does it cost to develop a web app?
                  </button>
                </h2>
                <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3"
                  data-bs-parent="#tyFaq">
                  <div class="accordion-body">
                    <p>
                      Web app development costs vary based on complexity,
                      features, technologies, and development time. Costs can
                      range from $10,000 to $30,000, depending on project
                      requirements. Share your requirements with us, and our
                      experts will let you know the accurate web development
                      cost.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFaq4" aria-expanded="false" aria-controls="collapseFaq4">
                    How to hire the best web app developers?
                  </button>
                </h2>
                <div id="collapseFaq4" class="accordion-collapse collapse" aria-labelledby="headingFaq4"
                  data-bs-parent="#tyFaq">
                  <div class="accordion-body">
                    <p>
                      Before you hire web app developers, consider their
                      experience, portfolio, communication abilities, and
                      problem-solving capabilities. Conduct interviews and
                      assess their suitability for your project. If you don’t
                      want to take any risk, it is advisable to hire dedicated
                      developers from a well-known web development company.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFaq5" aria-expanded="false" aria-controls="collapseFaq5">
                    What are the benefits of creating a web app for business?
                  </button>
                </h2>
                <div id="collapseFaq5" class="accordion-collapse collapse" aria-labelledby="headingFaq5"
                  data-bs-parent="#tyFaq">
                  <div class="accordion-body">
                    <p>
                      Business benefits of web app development include increased
                      accessibility, global reach, cost-effectiveness, easier
                      maintenance and updates, scalability, improved customer
                      engagement, and streamlined business processes.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq6">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFaq6" aria-expanded="false" aria-controls="collapseFaq6">
                    Do You Provide Maintenance And Support After the Project is
                    Completed?
                  </button>
                </h2>
                <div id="collapseFaq6" class="accordion-collapse collapse" aria-labelledby="headingFaq6"
                  data-bs-parent="#tyFaq">
                  <div class="accordion-body">
                    <p>
                      Yes, we offer mobile app support and maintenance services
                      to ensure your web app stays up-to-date and functional.
                      Our services are not only limited to web app development.
                      We can assist you after successfully developing a web app.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq7">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFaq7" aria-expanded="false" aria-controls="collapseFaq7">
                    How Long Does It Take to Develop A Web App?
                  </button>
                </h2>
                <div id="collapseFaq7" class="accordion-collapse collapse" aria-labelledby="headingFaq7"
                  data-bs-parent="#tyFaq">
                  <div class="accordion-body">
                    <p>
                      Timelines depend on the project's scope and complexity.
                      We'll provide a detailed timeline during the initial
                      consultation. So, share your idea for web app development,
                      and we will give you the time estimation accordingly.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq8">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFaq8" aria-expanded="false" aria-controls="collapseFaq8">
                    Can You Provide Ongoing Updates And Improvements
                    Post-Launch?
                  </button>
                </h2>
                <div id="collapseFaq8" class="accordion-collapse collapse" aria-labelledby="headingFaq8"
                  data-bs-parent="#tyFaq">
                  <div class="accordion-body">
                    <p>
                      Yes, we offer continuous improvement and feature
                      enhancement services to keep your web app up-to-date.
                      Remain assured of work quality while seeking web app
                      development services from us.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq9">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFaq9" aria-expanded="false" aria-controls="collapseFaq9">
                    Is My Project Idea And Data Safe with Your Company?
                  </button>
                </h2>
                <div id="collapseFaq9" class="accordion-collapse collapse" aria-labelledby="headingFaq9"
                  data-bs-parent="#tyFaq">
                  <div class="accordion-body">
                    <p>
                      Yes, we prioritize data security and confidentiality. At
                      Plazmasoft, we always sign a non-disclosure agreement to
                      ensure your project's safety. So, remain assured of it.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFaq10">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFaq10" aria-expanded="false" aria-controls="collapseFaq10">
                    What Industries Have You Worked With in the Past?
                  </button>
                </h2>
                <div id="collapseFaq10" class="accordion-collapse collapse" aria-labelledby="headingFaq10"
                  data-bs-parent="#tyFaq">
                  <div class="accordion-body">
                    <p>
                      We've worked with clients in various industries, including
                      healthcare, e-commerce, finance, education, and more. Our
                      web app development services aren't restricted to a
                      specific domain.
                    </p>
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
              <h1 class="vs-section-title">Looking to Hire Dedicated Team?</h1>
              <p class="vs-section-description">
                We are a team of talented, experienced and certified designers
                and developers.<br />
                Let us build something extraordinary.
              </p>
              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#requestProposalModal"
                class="btn btn-outline-primary">Hire Dedicated Developers</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Looking Hire Dedicated Section End -->

      <!-- Tesimonial Video Popup Start -->
      <div class="modal fade vs-testimonial-popup" id="testimonialModal" tabindex="-1"
        aria-labelledby="testimonialModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <iframe width="100%" height="260px" src="https://www.youtube.com/embed/tgbNymZ7vqY">
              </iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- Tesimonial Video Popup End -->
      <!-- Request Proposal Popup Start -->
      <div class="modal fade" id="requestProposalModal" aria-labelledby="requestProposalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="vs-request-modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="row g-0">
                  <div class="col col-12 col-md-12 col-lg-6">
                    <div class="vs-speak-form-content">
                      <p class="vs-speak-form-description">
                        Request a Proposal
                      </p>
                      <div class="vs-speak-form">
                        <form class="row" id="request-proposal-form">
                          <div class="col col-12 col-md-12">
                            <input type="hidden" name="_token" value="uQob33t9wCpzQQjpxP84sjL5wMlpzTqT5Y87EL4b" />
                            <label for="inputFirstName" class="form-label">Name *</label>
                            <div class="vs-input-icon-group">
                              <input type="text" class="form-control" id="inputFirstName" name="name"
                                placeholder="Enter Your Full Name*" />
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
                                placeholder="Enter Your Email Address*" name="email" />
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
                            <div class="vs-input-icon-group">
                              <div class="vs-country-select">
                                <select class="form-control" id="modalcountries" name="country_code">
                                  <!-- <option value="GB" data-capital="English"></option>
                                                                  <option value="FR" data-capital="French"></option>
                                                                  <option value="CN" data-capital="Chinese"></option>
                                                                  <option value="DE" data-capital="German"></option>
                                                                  <option value="PL" data-capital="Polish"></option> -->
                                </select>
                                <input type="text" class="form-control" id="inputPhoneNumber" name="phone_no"
                                  placeholder="Enter Your Phone Number" />
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
                              <option value="$5000 - $10000">
                                $5000 - $10000
                              </option>
                              <option value="$10000 - $15000">
                                $10000 - $15000
                              </option>
                              <option value="$15000 - $20000">
                                $15000 - $20000
                              </option>
                              <option value="$20000 - $30000">
                                $20000 - $30000
                              </option>
                              <option value="$30000 or More">
                                $30000 or More
                              </option>
                            </select>
                          </div>
                          <div class="col col-12">
                            <label for="inputAddress" class="form-label">Brief about the project *</label>
                            <textarea rows="5" class="form-control"
                              placeholder="Please brief your requirements in detail. The more we know about your project  idea, the better we can guide and assist you.*"
                              name="project_description"></textarea>
                          </div>
                          <div class="col col-12">
                            <label for="inputfile" class="form-label">Have a file to share?</label>
                            <div class="vs-choose-file">
                              <input type="file" class="form-control" name="document" />
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
                              <button type="submit" class="btn btn-primary">
                                Submit
                              </button>
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
                          <img src="/web-assets/images/partner-logo2.png" alt="partner-logo" />
                        </li>
                        <li class="vs-modal-trusted-item">
                          <img src="/web-assets/images/partner-logo4.png" alt="partner-logo" />
                        </li>
                        <li class="vs-modal-trusted-item">
                          <img src="/web-assets/images/partner-logo5.png" alt="partner-logo" />
                        </li>
                        <!-- <li class="vs-modal-trusted-item">
                                                  <img src="/web-assets/images/partner-logo14.png" alt="partner-logo">
                                              </li> -->
                        <li class="vs-modal-trusted-item">
                          <img src="/web-assets/images/partner-logo8.png" alt="partner-logo" />
                        </li>
                        <li class="vs-modal-trusted-item">
                          <img src="/web-assets/images/partner-logo9.png" alt="partner-logo" />
                        </li>
                      </ul>
                      <div class="vs-request-modal-testimonial-content">
                        <div class="vs-testimonial-slider2">
                          <div class="vs-testimonial-item">
                            <div class="vs-testimonial-card">
                              <div class="vs-testimonial-card-head">
                                <div class="vs-testimonial-user">
                                  <div class="vs-testimonial-user-profile">
                                    <img src="/web-assets/images/valon.png" alt="valon" class="img-fluid" />
                                  </div>
                                  <div class="vs-testimonial-user-info">
                                    <h4 class="vs-testimonial-username">
                                      Valon Miski
                                    </h4>
                                    <label class="vs-testimonial-designation">Founder, Gfacility</label>
                                    <div class="vs-testimonial-user-country">
                                      <img src="/web-assets/images/belgium.png" alt="belgium" class="img-fluid" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-testimonial-description">
                                <p>
                                  Awesome work culture. Requested some difficult
                                  and specific SDK integrations in my flutter
                                  application. Even Though it was complex, they
                                  made sure to understand it properly and to
                                  integrate it. Thanks to the dedication and
                                  overtime this difficult project was delivered
                                  within time and budget. Without a doubt one of
                                  my best experiences until now. Well done!
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="vs-testimonial-item">
                            <div class="vs-testimonial-card">
                              <div class="vs-testimonial-card-head">
                                <div class="vs-testimonial-user">
                                  <div class="vs-testimonial-user-profile">
                                    <img src="/web-assets/images/eric.png" alt="Eric Liang" class="img-fluid" />
                                  </div>
                                  <div class="vs-testimonial-user-info">
                                    <h4 class="vs-testimonial-username">
                                      Eric Liang
                                    </h4>
                                    <label class="vs-testimonial-designation">PANTAYA, Los Angeles</label>
                                    <div class="vs-testimonial-user-country">
                                      <img src="/web-assets/images/USA.png" alt="USA" class="img-fluid" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-testimonial-description">
                                <p>
                                  Thanks Krishna for completing this task in our
                                  social networking app. This was my second
                                  project with Krishna and the team Plazmasoft,
                                  they did a decent job and delivered the work
                                  on time . I'm happy to recommend them for any
                                  Web and react native app development work.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="vs-testimonial-item">
                            <div class="vs-testimonial-card">
                              <div class="vs-testimonial-card-head">
                                <div class="vs-testimonial-user">
                                  <div class="vs-testimonial-user-profile">
                                    <img src="/web-assets/images/aziz.png" alt="AZIZ H L" class="img-fluid" />
                                  </div>
                                  <div class="vs-testimonial-user-info">
                                    <h4 class="vs-testimonial-username">
                                      AZIZ H L
                                    </h4>
                                    <label class="vs-testimonial-designation">Director, MooMen</label>
                                    <div class="vs-testimonial-user-country">
                                      <img src="/web-assets/images/UK.png" alt="UK" class="img-fluid" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="vs-testimonial-description">
                                <p>
                                  Very swift and eloquent communication,
                                  following up daily on the progress of the
                                  project and robust reactivity on each step of
                                  the way. very satisfied with the
                                  professionalism and work they have done. I
                                  would highly recommend it.
                                </p>
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
