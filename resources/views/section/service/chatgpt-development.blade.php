@extends('layouts.app')

@section('title')
    ChatGPT Development
@endsection

@section('mainBody')

<section class="vs-landing-section vs-inner-page-landing-section">
    <div class="container">
      <div class="vs-landing-content">
        <div class="vs-breadcrumb">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Services</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                ChatGPT Development Services
              </li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col col-12 col-md-12 col-lg-6">
            <div class="vs-landing-content__inner">
              <h1 class="vs-section-title vs-title-border">
                ChatGpt Development <br />Services
              </h1>
              <p class="vs-section-description">
                TechnoYuga offers exclusive ChatGPT development services to
                help businesses harness the power of this cutting-edge AI
                model to build engaging conversational experiences. Our team
                of dedicated developers can help you create custom
                ChatGPT-powered solutions that meet your specific needs,
                whether you're looking to improve customer service, automate
                tasks, or generate creative content.
              </p>
              <div class="vs-landing-btn">
                <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                  data-bs-target="#requestProposalModal">Request A Quote!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="vs-lading-img">
        <img src="{{asset('web-assets/images/chat-gpt-img.png')}}" alt="ChatGpt Development" class="img-fluid" />
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
            <img src="{{asset('web-assets/images/decathlon-logo.svg')}}" alt="Partner Logo" class="img-fluid"
              style="height: 20px" />
          </div>
          <div class="vs-landing-partner-item">
            <img src="{{asset('web-assets/images/gfacility-logo.svg')}}" alt="Partner Logo" class="img-fluid"
              style="height: 30px" />
          </div>
          <div class="vs-landing-partner-item">
            <img src="{{asset('web-assets/images/akasha-logo.svg')}}" alt="Partner Logo" class="img-fluid" style="height: 30px" />
          </div>
          <div class="vs-landing-partner-item">
            <img src="{{asset('web-assets/images/mfine-logo.svg')}}" alt="Partner Logo" class="img-fluid" style="height: 30px" />
          </div>
          <div class="vs-landing-partner-item">
            <img src="{{asset('web-assets/images/tengopay.svg')}}" alt="Partner Logo" class="img-fluid" style="height: 35px" />
          </div>
          <div class="vs-landing-partner-item">
            <img src="{{asset('web-assets/images/justlife-logo.svg')}}" alt="Partner Logo" class="img-fluid"
              style="height: 30px" />
          </div>
          <div class="vs-landing-partner-item">
            <!-- <img src="web-assets/images/ordeno-logo.png" alt="Partner Logo" class="img-fluid" style="height:30px"> -->
            <img src="{{asset('web-assets/images/eu-logo.png')}}" alt="Partner Logo" class="img-fluid" style="height: 60px" />
          </div>
          <!-- <div class="vs-landing-partner-item">
                  <img src="web-assets/images/catholic-network-logo.png" alt="Partner Logo" class="img-fluid" style="height:30px">
              </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- Transparency Section End -->
  <!-- Services Section Start -->
  <section class="vs-service-section vs-section-spacer bg-transparent vs-innner-page-services-section">
    <div class="vs-service-particles">
      <img src="{{asset('web-assets/images/service-particle-img.svg')}}" alt="service particle" class="img-fluid" />
    </div>
    <div class="container">
      <div class="vs-heading-center">
        <h2 class="vs-section-title vs-title-border">
          Best ChatGPT App Development Services
        </h2>
        <p class="vs-section-description">
          Looking for reliable ChatGPT app development services? You are at
          the right place. TechnoYuga, being a leading
          <a href="https://technoyuga.com/services/mobile-app-development">mobile app development</a>
          and web development company can help you develop an app like
          ChatGPT. Feel free to discuss your project idea with us.
        </p>
      </div>
      <div class="vs-service-content mb-0">
        <div class="row">
          <div class="col col-12 col-md-6 col-lg-4">
            <div class="vs-service-card">
              <a href="#" class="vs-service-card-link">
                <h3 class="vs-service-card-title">Consultation</h3>
                <div class="vs-service-card-logo-list">
                  <div class="vs-service-card-logo-item">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M18.5011 5C11.0467 5 5.00369 11.0434 5.00369 18.4982C5.00369 20.5081 5.45377 22.428 6.24871 24.1365C6.56368 24.7964 6.56377 25.5614 6.33879 26.2664L5.07876 30.0163C4.68879 31.1862 5.81373 32.3112 6.98363 31.9212L10.7333 30.6612C11.4383 30.4362 12.2031 30.4363 12.863 30.7513C14.5729 31.5463 16.4927 31.9962 18.5026 31.9962C25.957 31.9962 32 25.9529 32 18.4982C31.9985 11.0434 25.9555 5 18.5011 5ZM18.5297 25.2494C17.7017 25.2494 17.0221 24.5774 17.0221 23.7495C17.0221 22.9215 17.6867 22.2495 18.5147 22.2495H18.5297C19.3591 22.2495 20.0296 22.9215 20.0296 23.7495C20.0296 24.5774 19.3576 25.2494 18.5297 25.2494ZM20.5169 19.3261C19.683 19.8796 19.569 20.1616 19.5645 20.1721C19.395 20.625 18.9572 20.9161 18.4953 20.9161C18.3723 20.9161 18.2491 20.8965 18.1276 20.853C17.5502 20.6475 17.2368 20.0341 17.4333 19.4521C17.7378 18.5506 18.6285 17.8786 19.2719 17.4527C20.2258 16.8197 20.2364 16.1762 20.1614 15.7472C20.0444 15.0857 19.479 14.5202 18.816 14.4032C18.3121 14.3132 17.8068 14.4422 17.4169 14.7692C17.0329 15.0917 16.8138 15.5627 16.8138 16.0622C16.8138 16.6832 16.3098 17.1872 15.6888 17.1872C15.0679 17.1872 14.5639 16.6832 14.5639 16.0622C14.5639 14.8952 15.0769 13.7973 15.9708 13.0458C16.8647 12.2958 18.0406 11.9823 19.206 12.1863C20.7944 12.4653 22.0978 13.7688 22.3768 15.3573C22.6527 16.9352 21.9928 18.3452 20.5169 19.3261Z"
                        fill="#003262" />
                    </svg>
                  </div>
                </div>
                <p class="vs-service-card-description">
                  In this initial stage, developers and stakeholders
                  collaborate to define the objectives and scope of the
                  ChatGPT development.
                </p>
              </a>
            </div>
          </div>
          <div class="col col-12 col-md-6 col-lg-4">
            <div class="vs-service-card">
              <a href="#" class="vs-service-card-link">
                <h3 class="vs-service-card-title">Development</h3>
                <div class="vs-service-card-logo-list">
                  <div class="vs-service-card-logo-item">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M18 3C9.72 3 3 9.72 3 18C3 26.28 9.72 33 18 33C26.28 33 33 26.28 33 18C33 9.72 26.28 3 18 3ZM14.625 20.535C15.075 20.97 15.075 21.69 14.625 22.125C14.415 22.35 14.115 22.455 13.83 22.455C13.545 22.455 13.26 22.35 13.035 22.125L9.705 18.795C9.27 18.36 9.27 17.64 9.705 17.205L13.035 13.875C13.47 13.425 14.19 13.425 14.625 13.875C15.075 14.31 15.075 15.03 14.625 15.465L12.09 18L14.625 20.535ZM20.595 12.27L17.595 24.27C17.46 24.78 17.01 25.125 16.5 25.125C16.41 25.125 16.32 25.11 16.23 25.095C15.63 24.945 15.255 24.33 15.405 23.73L18.405 11.73C18.555 11.13 19.17 10.755 19.77 10.905C20.37 11.055 20.745 11.67 20.595 12.27ZM26.295 18.795L22.965 22.125C22.74 22.35 22.455 22.455 22.17 22.455C21.885 22.455 21.585 22.35 21.375 22.125C20.925 21.69 20.925 20.97 21.375 20.535L23.91 18L21.375 15.465C20.925 15.03 20.925 14.31 21.375 13.875C21.81 13.425 22.53 13.425 22.965 13.875L26.295 17.205C26.73 17.64 26.73 18.36 26.295 18.795Z"
                        fill="#003262" />
                    </svg>
                  </div>
                </div>
                <p class="vs-service-card-description">
                  The next step includes creating and training the ChatGPT
                  model, developing the underlying infrastructure, and
                  building the user interface.
                </p>
              </a>
            </div>
          </div>
          <div class="col col-12 col-md-6 col-lg-4">
            <div class="vs-service-card">
              <a href="#" class="vs-service-card-link">
                <h3 class="vs-service-card-title">Modernization</h3>
                <div class="vs-service-card-logo-list">
                  <div class="vs-service-card-logo-item">
                    <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M21.5897 15.0256V20.9744C21.5897 21.8503 21.3503 22.0897 20.4744 22.0897H14.5256C13.6497 22.0897 13.4103 21.8503 13.4103 20.9744V15.0256C13.4103 14.1497 13.6497 13.9103 14.5256 13.9103H20.4744C21.3503 13.9103 21.5897 14.1497 21.5897 15.0256ZM32 22.4615C32 23.0713 31.5092 23.5769 30.8846 23.5769H27.9103V23.9487C27.9103 26.9231 26.4231 28.4103 23.4487 28.4103H23.0769V31.3846C23.0769 31.9944 22.5862 32.5 21.9615 32.5C21.3518 32.5 20.8462 31.9944 20.8462 31.3846V28.4103H14.1538V31.3846C14.1538 31.9944 13.6631 32.5 13.0385 32.5C12.4287 32.5 11.9231 31.9944 11.9231 31.3846V28.4103H11.5513C8.57692 28.4103 7.08974 26.9231 7.08974 23.9487V23.5769H4.11538C3.50564 23.5769 3 23.0713 3 22.4615C3 21.8518 3.50564 21.3462 4.11538 21.3462H7.08974V14.6538H4.11538C3.50564 14.6538 3 14.1482 3 13.5385C3 12.9287 3.50564 12.4231 4.11538 12.4231H7.08974V12.0513C7.08974 9.07692 8.57692 7.58974 11.5513 7.58974H11.9231V4.61538C11.9231 4.00564 12.4287 3.5 13.0385 3.5C13.6631 3.5 14.1538 4.00564 14.1538 4.61538V7.58974H20.8462V4.61538C20.8462 4.00564 21.3518 3.5 21.9615 3.5C22.5862 3.5 23.0769 4.00564 23.0769 4.61538V7.58974H23.4487C26.4231 7.58974 27.9103 9.07692 27.9103 12.0513V12.4231H30.8846C31.5092 12.4231 32 12.9287 32 13.5385C32 14.1482 31.5092 14.6538 30.8846 14.6538H27.9103V21.3462H30.8846C31.5092 21.3462 32 21.8518 32 22.4615ZM23.8205 15.0256C23.8205 12.9302 22.5698 11.6795 20.4744 11.6795H14.5256C12.4302 11.6795 11.1795 12.9302 11.1795 15.0256V20.9744C11.1795 23.0698 12.4302 24.3205 14.5256 24.3205H20.4744C22.5698 24.3205 23.8205 23.0698 23.8205 20.9744V15.0256Z"
                        fill="#003262" />
                    </svg>
                  </div>
                </div>
                <p class="vs-service-card-description">
                  With time, the ChatGPT model keeps upgrading. So, our team
                  adopted modernization that involves adopting the latest AI
                  advancements and NLP research.
                </p>
              </a>
            </div>
          </div>
          <div class="col col-12 col-md-6 col-lg-4">
            <div class="vs-service-card">
              <a href="#" class="vs-service-card-link">
                <h3 class="vs-service-card-title">Integration</h3>
                <div class="vs-service-card-logo-list">
                  <div class="vs-service-card-logo-item">
                    <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M30.785 27.382L20.9 31.9713C19.385 32.6762 17.615 32.6762 16.1 31.9713L6.215 27.382C4.595 26.6321 4.595 24.3224 6.215 23.5725L6.42502 23.4825L15.155 27.5169C16.205 28.0119 17.33 28.2668 18.5 28.2668C19.67 28.2668 20.795 28.0119 21.845 27.5169L30.575 23.4825L30.785 23.5725C32.405 24.3224 32.405 26.6321 30.785 27.382ZM30.785 17.0784L30.59 16.9884L23.6 20.2429L21.845 21.0528C20.795 21.5328 19.67 21.7877 18.5 21.7877C17.33 21.7877 16.205 21.5328 15.155 21.0528L13.4 20.2429L6.41001 16.9884L6.215 17.0784C4.595 17.8433 4.595 20.153 6.215 20.9028L9.09502 22.2377L16.1 25.4772C16.865 25.8372 17.675 26.0171 18.5 26.0171C19.325 26.0171 20.135 25.8372 20.9 25.4772L27.905 22.2377L30.785 20.9028C32.405 20.153 32.405 17.8433 30.785 17.0784ZM30.785 10.6143L20.9 6.02494C20.135 5.67998 19.325 5.5 18.5 5.5C17.675 5.5 16.865 5.67998 16.1 6.02494L6.215 10.6143C4.595 11.3642 4.595 13.6739 6.215 14.4238L6.41001 14.5138L7.74498 15.1287L9.08 15.7586L16.1 19.0131C16.865 19.3581 17.675 19.538 18.5 19.538C19.325 19.538 20.135 19.3581 20.9 19.0131L27.92 15.7586L29.255 15.1287L30.59 14.5138L30.785 14.4238C32.405 13.6739 32.405 11.3642 30.785 10.6143Z"
                        fill="#003262" />
                    </svg>
                  </div>
                </div>
                <p class="vs-service-card-description">
                  To make ChatGPT accessible and useful, we incorporate the
                  best integrations to make the model accessible on various
                  platforms or applications.
                </p>
              </a>
            </div>
          </div>
          <div class="col col-12 col-md-6 col-lg-4">
            <div class="vs-service-card">
              <a href="#" class="vs-service-card-link">
                <h3 class="vs-service-card-title">
                  Unconventional Testing
                </h3>
                <div class="vs-service-card-logo-list">
                  <div class="vs-service-card-logo-item">
                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M4.5 14.2502C4.5 15.0703 4.68556 15.8607 5.05344 16.5994C5.33356 17.1649 5.112 17.8543 4.5585 18.141C4.39425 18.2248 4.22095 18.2648 4.05107 18.2648C3.64045 18.2648 3.24451 18.0353 3.04651 17.6361C2.52563 16.5877 2.25 15.4167 2.25 14.2502C2.25 9.86044 5.25713 6.7944 9.5625 6.7944H16.4093L16.0796 6.45836C15.6397 6.00986 15.6397 5.28486 16.0796 4.83637C16.5195 4.38788 17.2305 4.38788 17.6704 4.83637L19.9193 7.12933C20.0239 7.236 20.106 7.3621 20.1633 7.50318C20.277 7.78306 20.277 8.09983 20.1633 8.3797C20.106 8.52079 20.0239 8.64688 19.9193 8.75356L17.6704 11.0465C17.451 11.2702 17.163 11.3826 16.875 11.3826C16.587 11.3826 16.299 11.2702 16.0796 11.0465C15.6397 10.598 15.6397 9.87302 16.0796 9.42453L16.4093 9.08848H9.5625C6.48787 9.08848 4.5 11.1153 4.5 14.2502ZM23.9535 10.8642C23.6734 10.2987 22.9995 10.0714 22.4415 10.3593C21.888 10.6461 21.6664 11.3354 21.9466 11.9009C22.3144 12.6408 22.5 13.43 22.5 14.2502C22.5 17.385 20.5121 19.4118 17.4375 19.4118H10.5907L10.9204 19.0758C11.3603 18.6273 11.3603 17.9023 10.9204 17.4538C10.4805 17.0053 9.76946 17.0053 9.32959 17.4538L7.07959 19.7479C6.63971 20.1964 6.63971 20.9214 7.07959 21.3699L9.32959 23.664C9.54896 23.8876 9.837 24 10.125 24C10.413 24 10.701 23.8876 10.9204 23.664C11.3603 23.2155 11.3603 22.4905 10.9204 22.042L10.5907 21.7059H17.4375C21.7429 21.7059 24.75 18.6399 24.75 14.2502C24.75 13.0836 24.4744 11.9126 23.9535 10.8642Z"
                        fill="#003262" />
                    </svg>
                  </div>
                </div>
                <p class="vs-service-card-description">
                  Finally, our experienced quality analysts test the
                  applications to make them 100% error-free.
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
      <img src="{{asset('web-assets/images/something-particle-top.svg')}}" alt="something-particle-top" class="img-fluid" />
    </div>
    <div class="vs-something-particle-bottom">
      <img src="{{asset('web-assets/images/something-particle-bottom.svg')}}" alt="something-particle-bottom" class="img-fluid" />
    </div>
    <div class="container">
      <div class="vs-heading-center w-100">
        <h2 class="vs-section-title vs-title-border">
          Pocket-Friendly ChatGPT App Development Models
        </h2>
        <p class="vs-section-description w-75 m-auto">
          At <a href="https://technoyuga.com">TechnoYuga</a>, we believe in
          delivering upgraded and reasonable mobile app development
          solutions. Get in touch with us to avail reasonable ChatGPT
          development services.
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
                <h3 class="vs-everyone-card-title">Fixed Price</h3>
              </div>
              <div class="vs-everyone-card-body">
                <p class="vs-everyone-description">
                  With this model, you negotiate a fixed price for a
                  specific set of ChatGPT app development project.
                </p>
                <ul class="vs-everyone-feature-list list-unstyled">
                  <li class="vs-everyone-feature-item">
                    <span class="vs-everyone-feature-icon">
                      <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark" />
                    </span>
                    <span>No add-on cost</span>
                  </li>
                  <li class="vs-everyone-feature-item">
                    <span class="vs-everyone-feature-icon">
                      <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark" />
                    </span>
                    <span>Fixed pricing</span>
                  </li>
                  <li class="vs-everyone-feature-item">
                    <span class="vs-everyone-feature-icon">
                      <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark" />
                    </span>
                    <span>Pay for quality work</span>
                  </li>
                  <li class="vs-everyone-feature-item">
                    <span class="vs-everyone-feature-icon">
                      <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark" />
                    </span>
                    <span>24*7 Support</span>
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
                  Hire dedicated mobile app developers who can help you
                  create an app like ChatGPT.
                </p>
                <ul class="vs-everyone-feature-list list-unstyled">
                  <li class="vs-everyone-feature-item">
                    <span class="vs-everyone-feature-icon">
                      <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark" />
                    </span>
                    <span>On time Project updates</span>
                  </li>
                  <li class="vs-everyone-feature-item">
                    <span class="vs-everyone-feature-icon">
                      <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark" />
                    </span>
                    <span>Expert consultancy</span>
                  </li>
                  <li class="vs-everyone-feature-item">
                    <span class="vs-everyone-feature-icon">
                      <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark" />
                    </span>
                    <span>Pay per hour</span>
                  </li>
                  <li class="vs-everyone-feature-item">
                    <span class="vs-everyone-feature-icon">
                      <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark" />
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
                <h3 class="vs-everyone-card-title">
                  White Label Solutions
                </h3>
              </div>
              <div class="vs-everyone-card-body">
                <p class="vs-everyone-description">
                  Get a white label ChatGPT development solution and be
                  ready to outshine this competitive market.
                </p>
                <ul class="vs-everyone-feature-list list-unstyled">
                  <li class="vs-everyone-feature-item">
                    <span class="vs-everyone-feature-icon">
                      <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark" />
                    </span>
                    <span>Timely delivery</span>
                  </li>
                  <li class="vs-everyone-feature-item">
                    <span class="vs-everyone-feature-icon">
                      <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark" />
                    </span>
                    <span>Custom solutions</span>
                  </li>
                  <li class="vs-everyone-feature-item">
                    <span class="vs-everyone-feature-icon">
                      <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark" />
                    </span>
                    <span>Real-time updates</span>
                  </li>
                  <li class="vs-everyone-feature-item">
                    <span class="vs-everyone-feature-icon">
                      <img src="{{asset('web-assets/images/check-mark.svg')}}" alt="check-mark" />
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

  <!-- Our Process Section Start -->
  <section class="vs-process-section vs-section-spacer">
    <div class="vs-process-particle-center">
      <img src="{{asset('web-assets/images/process-particle-center.png')}}" alt="process-particle-Center" class="img-fluid" />
    </div>
    <div class="vs-process-particle-right">
      <img src="{{asset('web-assets/images/process-particle-right.svg')}}" alt="process-particle-left" class="img-fluid" />
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
            <img src="{{asset('web-assets/images/idea.svg')}}" alt="Idea" class="img-fluid" />
          </div>
          <h5 class="vs-process-step-title">Idea</h5>
          <p class="vs-process-step-description">
            We provide no obligation free consultation to discuss your
            project idea and help you with tech stack, budget and timelines.
          </p>
        </div>
        <div class="vs-process-step-item">
          <div class="vs-process-step-icon">
            <img src="{{asset('web-assets/images/ui-ux-design.svg')}}" alt="UI/UX design" class="img-fluid" />
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
            <img src="{{asset('web-assets/images/development.svg')}}" alt="Development" class="img-fluid" />
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
            <img src="{{asset('web-assets/images/testing.svg')}}" alt="Testing" class="img-fluid" />
          </div>
          <h5 class="vs-process-step-title">Testing</h5>
          <p class="vs-process-step-description">
            We test all use cases, critical scenarios, and all functional on
            real time device for IOS and Android along with Desktop
          </p>
        </div>
        <div class="vs-process-step-item">
          <div class="vs-process-step-icon">
            <img src="{{asset('web-assets/images/launching.svg')}}" alt="Launching" class="img-fluid" />
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
  <!-- Portfolio Section Start -->
  <section class="vs-portfolio-section vs-section-spacer">
    <div class="vs-portfolio-particles">
      <img src="{{asset('web-assets/images/portfolio-particles.svg')}}" alt="Portfolio Particle" class="img-fluid" />
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
                <div class="vs-portfolio-item" style="background-color: #e7ff9f">
                  <div class="row">
                    <div class="col col-12 col-md-4 col-lg-4">
                      <div class="vs-portfolio-item-img">
                        <img src="{{asset('web-assets/images/new-portfolio/Rockoloy - Event App.png')}}" alt="demand-grocery-img"
                          class="img-fluid" />
                      </div>
                    </div>
                    <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                      <div class="vs-portfolio-details">
                        <div class="vs-portfolio-heading">
                          <div class="vs-portfolio-heading-top">
                            <div class="vs-portfolio-logo">
                              <img src="{{asset('web-assets/images/new-portfolio/logo/Rockoloy - Event App.png')}}" alt="app-logo"
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
                                    src="{{asset('web-assets/images/new-portfolio/flags/small/US.png')}}" alt="app-logo"
                                    class="img-fluid" />
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
                        <img src="{{asset('web-assets/images/new-portfolio/Getkado-Gifting Platform.png')}}"
                          alt="demand-grocery-img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                      <div class="vs-portfolio-details">
                        <div class="vs-portfolio-heading">
                          <div class="vs-portfolio-heading-top">
                            <div class="vs-portfolio-logo">
                              <img src="{{asset('web-assets/images/new-portfolio/logo/Getkado-Gifting Platform.png')}}"
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
                                    src="{{asset('web-assets/images/new-portfolio/flags/small/Australia.png')}}" alt="app-logo"
                                    class="img-fluid" />
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
                <div class="vs-portfolio-item" style="background-color: #ffcbdf">
                  <div class="row">
                    <div class="col col-12 col-md-4 col-lg-4">
                      <div class="vs-portfolio-item-img">
                        <img src="{{asset('web-assets/images/new-portfolio/Duoo - Social Networking App.png')}}"
                          alt="demand-grocery-img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                      <div class="vs-portfolio-details">
                        <div class="vs-portfolio-heading">
                          <div class="vs-portfolio-heading-top">
                            <div class="vs-portfolio-logo">
                              <img src="{{asset('web-assets/images/new-portfolio/logo/Duoo - Social Networking App.png')}}"
                                alt="app-logo" class="img-fluid" />
                            </div>
                            <div class="vs-portfolio-heading__inner">
                              <h3 class="vs-portfolio-title">
                                <span>Duoo - Social Networking App</span>
                              </h3>
                            </div>
                          </div>
                          <p class="vs-portfolio-heading-desccription">
                            NextGen Live Chat is a social networking app
                            that will help you connect with strangers
                            worldwide. You can use the app for a variety of
                            purposes, including dating, friendship, or to
                            chat with people from different cultures.
                          </p>

                          <div class="vs-portfolio-body">
                            <div class="vs-portfolio-info">
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Region</label>
                                <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                  <img style="padding-right: 10px" width="25%"
                                    src="{{asset('web-assets/images/new-portfolio/flags/small/Tanzania.png')}}" alt="app-logo"
                                    class="img-fluid" />
                                  <span>Tanzania</span>
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Duration</label>
                                <p class="vs-portfolio-info-text">
                                  6 Months
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Platforms</label>
                                <p class="vs-portfolio-info-text">
                                  Android, iOS
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Technology</label>
                                <p class="vs-portfolio-info-text">
                                  Figma, Flutter, MongoDB, Node.JS
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="vs-portfolio-footer">

                            <div class="vs-portfolio-footer-item">
                              <a href="https://play.google.com/store/apps/details?id=com.melot.meta"
                                class="vs-portfolio-footer-link" target="_blank">
                                <svg width="136" height="41" viewBox="0 0 136 41" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_5730_20582)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 40.4062H5.56434C2.80762 40.4062 0.5625 38.1519 0.5625 35.4062V5.40625C0.5625 2.65064 2.80762 0.40625 5.56434 0.40625H130.561C133.315 0.40625 135.562 2.65064 135.562 5.40625V35.4062C135.562 38.1519 133.315 40.4062 130.561 40.4062Z"
                                      fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 1.20675C132.873 1.20675 134.765 3.09453 134.765 5.40625V35.4062C134.765 37.718 132.885 39.6058 130.561 39.6058H5.56434C3.25217 39.6058 1.35971 37.718 1.35971 35.4062V5.40625C1.35971 3.09453 3.23975 1.20675 5.56434 1.20675H130.561ZM130.561 0.40625H5.56434C2.80762 0.40625 0.5625 2.66061 0.5625 5.40625V35.4062C0.5625 38.1619 2.80762 40.4062 5.56434 40.4062H130.561C133.315 40.4062 135.562 38.1619 135.562 35.4062V5.40625C135.562 2.66061 133.315 0.40625 130.561 0.40625Z"
                                      fill="#A6A6A6" />
                                    <path
                                      d="M71.6816 13.6382C70.7801 13.6382 70.0202 13.3215 69.4192 12.6981C68.8231 12.0921 68.4903 11.2567 68.5052 10.4038C68.5052 9.49357 68.8132 8.723 69.4192 8.11202C70.0177 7.48858 70.7776 7.17188 71.6792 7.17188C72.5707 7.17188 73.3307 7.48858 73.9416 8.11202C74.5476 8.74295 74.8556 9.51352 74.8556 10.4038C74.8456 11.3165 74.5377 12.0871 73.9416 12.6956C73.3431 13.324 72.5832 13.6382 71.6816 13.6382ZM44.8571 13.6382C43.9755 13.6382 43.2106 13.3265 42.5847 12.7105C41.9638 12.0971 41.6484 11.3215 41.6484 10.4063C41.6484 9.49108 41.9638 8.71552 42.5847 8.10205C43.1982 7.48609 43.9631 7.17437 44.8571 7.17437C45.2942 7.17437 45.7189 7.26165 46.1262 7.43871C46.5261 7.61078 46.8514 7.84519 47.0923 8.13197L47.1519 8.20429L46.4789 8.86764L46.4093 8.78534C46.0294 8.33148 45.5202 8.10953 44.8472 8.10953C44.2462 8.10953 43.7222 8.32399 43.29 8.74794C42.8554 9.17437 42.6344 9.73297 42.6344 10.4088C42.6344 11.0846 42.8554 11.6432 43.29 12.0696C43.7222 12.4936 44.2462 12.708 44.8472 12.708C45.488 12.708 46.0269 12.4936 46.4466 12.0696C46.6949 11.8203 46.8489 11.4711 46.9036 11.0297H44.7454V10.0971H47.8299L47.8423 10.1819C47.8647 10.339 47.887 10.5011 47.887 10.6507C47.887 11.511 47.6288 12.2068 47.1171 12.7205C46.536 13.329 45.776 13.6382 44.8571 13.6382ZM80.523 13.506H79.5718L76.6586 8.82524L76.6835 9.66813V13.5035H75.7323V7.30654H76.8176L76.8474 7.35392L79.5867 11.7629L79.5618 10.9225V7.30654H80.523V13.506ZM64.5341 13.506H63.5705V8.23921H61.8991V7.30654H66.203V8.23921H64.5316V13.506H64.5341ZM61.1143 13.506H60.1531V7.30654H61.1143V13.506ZM55.7126 13.506H54.7515V8.23921H53.0801V7.30654H57.384V8.23921H55.7126V13.506ZM52.4716 13.4961H48.7861V7.30654H52.4716V8.23921H49.7497V9.93995H52.2059V10.8626H49.7497V12.5634H52.4716V13.4961ZM70.1245 12.0572C70.5541 12.4886 71.0757 12.7055 71.6816 12.7055C72.305 12.7055 72.8141 12.4936 73.2388 12.0572C73.661 11.6332 73.8746 11.0771 73.8746 10.4063C73.8746 9.73547 73.661 9.17686 73.2413 8.75542C72.8116 8.32399 72.2876 8.10704 71.6841 8.10704C71.0608 8.10704 70.5516 8.31901 70.1294 8.75542C69.7072 9.17936 69.4937 9.73547 69.4937 10.4063C69.4937 11.0771 69.7048 11.6357 70.1245 12.0572Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M68.4134 22.1617C66.0664 22.1617 64.164 23.9497 64.164 26.416C64.164 28.8599 66.0788 30.6704 68.4134 30.6704C70.7603 30.6704 72.6627 28.8699 72.6627 26.416C72.6627 23.9497 70.7603 22.1617 68.4134 22.1617ZM68.4134 28.9846C67.1294 28.9846 66.0242 27.9173 66.0242 26.4061C66.0242 24.8724 67.1319 23.8275 68.4134 23.8275C69.6973 23.8275 70.8025 24.8724 70.8025 26.4061C70.805 27.9273 69.6973 28.9846 68.4134 28.9846ZM59.1423 22.1617C56.7954 22.1617 54.893 23.9497 54.893 26.416C54.893 28.8599 56.8078 30.6704 59.1423 30.6704C61.4893 30.6704 63.3916 28.8699 63.3916 26.416C63.3916 23.9497 61.4868 22.1617 59.1423 22.1617ZM59.1423 28.9846C57.8583 28.9846 56.7531 27.9173 56.7531 26.4061C56.7531 24.8724 57.8608 23.8275 59.1423 23.8275C60.4263 23.8275 61.5315 24.8724 61.5315 26.4061C61.5315 27.9273 60.4263 28.9846 59.1423 28.9846ZM48.1104 23.4609V25.2614H52.4144C52.2828 26.2714 51.95 27.017 51.4409 27.5283C50.81 28.1617 49.8365 28.8499 48.1204 28.8499C45.4754 28.8499 43.4066 26.7053 43.4066 24.0494C43.4066 21.3936 45.4754 19.2489 48.1204 19.2489C49.5484 19.2489 50.589 19.815 51.3614 20.5382L52.633 19.2614C51.5601 18.229 50.132 17.4385 48.1303 17.4385C44.5019 17.4385 41.457 20.4061 41.457 24.0395C41.457 27.6829 44.4994 30.6405 48.1303 30.6405C50.0898 30.6405 51.5601 29.9971 52.7224 28.7851C53.907 27.5956 54.282 25.9173 54.282 24.5632C54.282 24.1417 54.2497 23.7627 54.1827 23.441H48.1079C48.1104 23.4385 48.1104 23.4609 48.1104 23.4609ZM93.2338 24.8624C92.8787 23.9073 91.8058 22.1517 89.6054 22.1517C87.4248 22.1517 85.6119 23.8749 85.6119 26.4061C85.6119 28.7951 87.405 30.6604 89.8165 30.6604C91.7536 30.6604 92.8812 29.4709 93.3456 28.7726L91.9076 27.8051C91.4308 28.5158 90.7677 28.9821 89.8264 28.9821C88.8752 28.9821 88.2096 28.5482 87.7676 27.6928L93.4325 25.3362C93.4325 25.3387 93.2338 24.8624 93.2338 24.8624ZM87.4571 26.2839C87.4124 24.6405 88.7287 23.8051 89.67 23.8051C90.4125 23.8051 91.0309 24.1716 91.242 24.7053L87.4571 26.2839ZM82.8551 30.4061H84.7153V17.9073H82.8551V30.4061ZM79.8004 23.1068H79.7333C79.3136 22.6056 78.5164 22.1517 77.4981 22.1517C75.3846 22.1517 73.4376 24.0195 73.4376 26.4185C73.4376 28.8076 75.3747 30.6529 77.4981 30.6529C78.504 30.6529 79.3136 30.1966 79.7333 29.6854H79.8004V30.2963C79.8004 31.9198 78.9361 32.7951 77.5428 32.7951C76.4029 32.7951 75.6951 31.9721 75.407 31.2839L73.7902 31.9622C74.2546 33.0844 75.4939 34.4734 77.5404 34.4734C79.7209 34.4734 81.5687 33.1841 81.5687 30.0395V22.4061H79.8103V23.1068C79.8128 23.1068 79.8004 23.1068 79.8004 23.1068ZM77.6645 28.9846C76.3806 28.9846 75.3077 27.9073 75.3077 26.4185C75.3077 24.9173 76.3806 23.83 77.6645 23.83C78.9361 23.83 79.9221 24.9297 79.9221 26.4185C79.9345 27.9073 78.9386 28.9846 77.6645 28.9846ZM101.944 17.9073H97.4956V30.4061H99.3558V25.6729H101.946C104.005 25.6729 106.029 24.1741 106.029 21.7951C106.029 19.416 104.012 17.9073 101.944 17.9073ZM101.998 23.9273H99.3533V19.638H101.998C103.392 19.638 104.179 20.7926 104.179 21.7826C104.179 22.7627 103.382 23.9273 101.998 23.9273ZM113.485 22.1392C112.134 22.1392 110.74 22.7402 110.164 24.0494L111.813 24.7377C112.168 24.0494 112.819 23.815 113.507 23.815C114.471 23.815 115.444 24.3936 115.466 25.426V25.5582C115.134 25.3686 114.404 25.0794 113.529 25.0794C111.749 25.0794 109.943 26.0569 109.943 27.8898C109.943 29.5682 111.403 30.6455 113.03 30.6455C114.279 30.6455 114.967 30.0794 115.397 29.4235H115.464V30.3911H117.257V25.6031C117.257 23.3736 115.608 22.1392 113.485 22.1392ZM113.251 28.9846C112.643 28.9846 111.791 28.6854 111.791 27.9173C111.791 26.9497 112.854 26.5831 113.76 26.5831C114.58 26.5831 114.967 26.7602 115.454 27.0046C115.32 28.1268 114.376 28.9746 113.251 28.9846ZM123.799 22.4061L121.663 27.8275H121.596L119.383 22.4061H117.381L120.702 29.9846L118.809 34.1966H120.746L125.855 22.4061H123.799ZM107.055 30.4061H108.915V17.9073H107.055V30.4061Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.9545 7.9394C10.6664 8.25112 10.5 8.72743 10.5 9.35087V31.4631C10.5 32.0865 10.6664 32.5628 10.9644 32.8621L11.0414 32.9294L23.3796 20.5404V20.2636L11.0315 7.87207L10.9545 7.9394Z"
                                      fill="url(#paint0_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4824 24.6835L23.3672 20.5513V20.2621L27.4824 16.1299L27.5718 16.1847L32.4396 18.9628C33.8329 19.7508 33.8329 21.0526 32.4396 21.8506L27.5718 24.6286L27.4824 24.6835Z"
                                      fill="url(#paint1_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 24.6282L23.3683 20.4062L10.9531 32.8726C11.4076 33.3614 12.1701 33.4162 13.0219 32.9399L27.5729 24.6282Z"
                                      fill="url(#paint2_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 16.1847L13.0219 7.88543C12.1701 7.39665 11.4051 7.46399 10.9531 7.95276L23.3683 20.4066L27.5729 16.1847Z"
                                      fill="url(#paint3_linear_5730_20582)" />
                                    <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4854 24.5381L13.0336 32.7824C12.2265 33.2488 11.5063 33.2164 11.0418 32.7924L10.9648 32.8697L11.0418 32.9371C11.5063 33.3585 12.2265 33.3934 13.0336 32.9271L27.5847 24.6279L27.4854 24.5381Z"
                                      fill="black" />
                                    <path opacity="0.12" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M32.4422 21.7055L27.4727 24.5384L27.5621 24.6282L32.4298 21.8501C33.1277 21.4511 33.4704 20.9274 33.4704 20.4062C33.4282 20.8851 33.073 21.3389 32.4422 21.7055Z"
                                      fill="black" />
                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.0233 8.02954L32.442 19.1069C33.0728 19.4635 33.428 19.9298 33.4826 20.4061C33.4826 19.8849 33.1399 19.3612 32.442 18.9622L13.0233 7.88491C11.63 7.08441 10.5 7.75274 10.5 9.35124V9.49588C10.5 7.89488 11.63 7.23902 13.0233 8.02954Z"
                                      fill="white" />
                                  </g>
                                  <defs>
                                    <linearGradient id="paint0_linear_5730_20582" x1="22.2729" y1="9.11231"
                                      x2="2.49849" y2="14.3596" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#00A0FF" />
                                      <stop offset="0.00657" stop-color="#00A1FF" />
                                      <stop offset="0.2601" stop-color="#00BEFF" />
                                      <stop offset="0.5122" stop-color="#00D2FF" />
                                      <stop offset="0.7604" stop-color="#00DFFF" />
                                      <stop offset="1" stop-color="#00E3FF" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_5730_20582" x1="34.2565" y1="20.4067"
                                      x2="10.1588" y2="20.4067" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FFE000" />
                                      <stop offset="0.4087" stop-color="#FFBD00" />
                                      <stop offset="0.7754" stop-color="#FFA500" />
                                      <stop offset="1" stop-color="#FF9C00" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_5730_20582" x1="25.2866" y1="22.7036"
                                      x2="9.32386" y2="49.4601" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FF3A44" />
                                      <stop offset="1" stop-color="#C31162" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_5730_20582" x1="7.82684" y1="0.585421"
                                      x2="14.9485" y2="12.5353" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#32A071" />
                                      <stop offset="0.0685" stop-color="#2DA771" />
                                      <stop offset="0.4762" stop-color="#15CF74" />
                                      <stop offset="0.8009" stop-color="#06E775" />
                                      <stop offset="1" stop-color="#00F076" />
                                    </linearGradient>
                                    <clipPath id="clip0_5730_20582">
                                      <rect width="135" height="40" fill="white"
                                        transform="translate(0.5625 0.40625)" />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="vs-portfolio-item" style="background-color: #a6efff">
                  <div class="row">
                    <div class="col col-12 col-md-4 col-lg-4">
                      <div class="vs-portfolio-item-img">
                        <img src="{{asset('web-assets/images/new-portfolio/MFine - Healthcare App.png')}}"
                          alt="demand-grocery-img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                      <div class="vs-portfolio-details">
                        <div class="vs-portfolio-heading">
                          <div class="vs-portfolio-heading-top">
                            <div class="vs-portfolio-logo">
                              <img src="{{asset('web-assets/images/new-portfolio/logo/MFine - Healthcare App.png')}}"
                                alt="app-logo" class="img-fluid" />
                            </div>
                            <div class="vs-portfolio-heading__inner">
                              <h3 class="vs-portfolio-title">
                                <span>MFine - Healthcare App</span>
                              </h3>
                            </div>
                          </div>
                          <p class="vs-portfolio-heading-desccription">
                            MFine is a on-demand telehealth app redefining
                            the patient-doctor relationship. It provides
                            instant access to experienced doctors through
                            virtual consultations, empowering users to
                            receive medical advice and prescriptions fromthe
                            comfort of their homes.
                          </p>

                          <div class="vs-portfolio-body">
                            <div class="vs-portfolio-info">
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Region</label>
                                <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                  <img style="padding-right: 10px" width="25%"
                                    src="{{asset('web-assets/images/new-portfolio/flags/small/India.png')}}" alt="app-logo"
                                    class="img-fluid" />

                                  <span>India</span>
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Duration</label>
                                <p class="vs-portfolio-info-text">
                                  8 months
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Platforms</label>
                                <p class="vs-portfolio-info-text">
                                  Android, iOS
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Technology</label>
                                <p class="vs-portfolio-info-text">
                                  Swift, Kotlin, Django, AWS
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="vs-portfolio-footer">


                            <div class="vs-portfolio-footer-item">
                              <a href="https://play.google.com/store/search?q=mfine&amp;c=apps&amp;hl=en-IN"
                                class="vs-portfolio-footer-link" target="_blank">
                                <svg width="136" height="41" viewBox="0 0 136 41" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_5730_20582)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 40.4062H5.56434C2.80762 40.4062 0.5625 38.1519 0.5625 35.4062V5.40625C0.5625 2.65064 2.80762 0.40625 5.56434 0.40625H130.561C133.315 0.40625 135.562 2.65064 135.562 5.40625V35.4062C135.562 38.1519 133.315 40.4062 130.561 40.4062Z"
                                      fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 1.20675C132.873 1.20675 134.765 3.09453 134.765 5.40625V35.4062C134.765 37.718 132.885 39.6058 130.561 39.6058H5.56434C3.25217 39.6058 1.35971 37.718 1.35971 35.4062V5.40625C1.35971 3.09453 3.23975 1.20675 5.56434 1.20675H130.561ZM130.561 0.40625H5.56434C2.80762 0.40625 0.5625 2.66061 0.5625 5.40625V35.4062C0.5625 38.1619 2.80762 40.4062 5.56434 40.4062H130.561C133.315 40.4062 135.562 38.1619 135.562 35.4062V5.40625C135.562 2.66061 133.315 0.40625 130.561 0.40625Z"
                                      fill="#A6A6A6" />
                                    <path
                                      d="M71.6816 13.6382C70.7801 13.6382 70.0202 13.3215 69.4192 12.6981C68.8231 12.0921 68.4903 11.2567 68.5052 10.4038C68.5052 9.49357 68.8132 8.723 69.4192 8.11202C70.0177 7.48858 70.7776 7.17188 71.6792 7.17188C72.5707 7.17188 73.3307 7.48858 73.9416 8.11202C74.5476 8.74295 74.8556 9.51352 74.8556 10.4038C74.8456 11.3165 74.5377 12.0871 73.9416 12.6956C73.3431 13.324 72.5832 13.6382 71.6816 13.6382ZM44.8571 13.6382C43.9755 13.6382 43.2106 13.3265 42.5847 12.7105C41.9638 12.0971 41.6484 11.3215 41.6484 10.4063C41.6484 9.49108 41.9638 8.71552 42.5847 8.10205C43.1982 7.48609 43.9631 7.17437 44.8571 7.17437C45.2942 7.17437 45.7189 7.26165 46.1262 7.43871C46.5261 7.61078 46.8514 7.84519 47.0923 8.13197L47.1519 8.20429L46.4789 8.86764L46.4093 8.78534C46.0294 8.33148 45.5202 8.10953 44.8472 8.10953C44.2462 8.10953 43.7222 8.32399 43.29 8.74794C42.8554 9.17437 42.6344 9.73297 42.6344 10.4088C42.6344 11.0846 42.8554 11.6432 43.29 12.0696C43.7222 12.4936 44.2462 12.708 44.8472 12.708C45.488 12.708 46.0269 12.4936 46.4466 12.0696C46.6949 11.8203 46.8489 11.4711 46.9036 11.0297H44.7454V10.0971H47.8299L47.8423 10.1819C47.8647 10.339 47.887 10.5011 47.887 10.6507C47.887 11.511 47.6288 12.2068 47.1171 12.7205C46.536 13.329 45.776 13.6382 44.8571 13.6382ZM80.523 13.506H79.5718L76.6586 8.82524L76.6835 9.66813V13.5035H75.7323V7.30654H76.8176L76.8474 7.35392L79.5867 11.7629L79.5618 10.9225V7.30654H80.523V13.506ZM64.5341 13.506H63.5705V8.23921H61.8991V7.30654H66.203V8.23921H64.5316V13.506H64.5341ZM61.1143 13.506H60.1531V7.30654H61.1143V13.506ZM55.7126 13.506H54.7515V8.23921H53.0801V7.30654H57.384V8.23921H55.7126V13.506ZM52.4716 13.4961H48.7861V7.30654H52.4716V8.23921H49.7497V9.93995H52.2059V10.8626H49.7497V12.5634H52.4716V13.4961ZM70.1245 12.0572C70.5541 12.4886 71.0757 12.7055 71.6816 12.7055C72.305 12.7055 72.8141 12.4936 73.2388 12.0572C73.661 11.6332 73.8746 11.0771 73.8746 10.4063C73.8746 9.73547 73.661 9.17686 73.2413 8.75542C72.8116 8.32399 72.2876 8.10704 71.6841 8.10704C71.0608 8.10704 70.5516 8.31901 70.1294 8.75542C69.7072 9.17936 69.4937 9.73547 69.4937 10.4063C69.4937 11.0771 69.7048 11.6357 70.1245 12.0572Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M68.4134 22.1617C66.0664 22.1617 64.164 23.9497 64.164 26.416C64.164 28.8599 66.0788 30.6704 68.4134 30.6704C70.7603 30.6704 72.6627 28.8699 72.6627 26.416C72.6627 23.9497 70.7603 22.1617 68.4134 22.1617ZM68.4134 28.9846C67.1294 28.9846 66.0242 27.9173 66.0242 26.4061C66.0242 24.8724 67.1319 23.8275 68.4134 23.8275C69.6973 23.8275 70.8025 24.8724 70.8025 26.4061C70.805 27.9273 69.6973 28.9846 68.4134 28.9846ZM59.1423 22.1617C56.7954 22.1617 54.893 23.9497 54.893 26.416C54.893 28.8599 56.8078 30.6704 59.1423 30.6704C61.4893 30.6704 63.3916 28.8699 63.3916 26.416C63.3916 23.9497 61.4868 22.1617 59.1423 22.1617ZM59.1423 28.9846C57.8583 28.9846 56.7531 27.9173 56.7531 26.4061C56.7531 24.8724 57.8608 23.8275 59.1423 23.8275C60.4263 23.8275 61.5315 24.8724 61.5315 26.4061C61.5315 27.9273 60.4263 28.9846 59.1423 28.9846ZM48.1104 23.4609V25.2614H52.4144C52.2828 26.2714 51.95 27.017 51.4409 27.5283C50.81 28.1617 49.8365 28.8499 48.1204 28.8499C45.4754 28.8499 43.4066 26.7053 43.4066 24.0494C43.4066 21.3936 45.4754 19.2489 48.1204 19.2489C49.5484 19.2489 50.589 19.815 51.3614 20.5382L52.633 19.2614C51.5601 18.229 50.132 17.4385 48.1303 17.4385C44.5019 17.4385 41.457 20.4061 41.457 24.0395C41.457 27.6829 44.4994 30.6405 48.1303 30.6405C50.0898 30.6405 51.5601 29.9971 52.7224 28.7851C53.907 27.5956 54.282 25.9173 54.282 24.5632C54.282 24.1417 54.2497 23.7627 54.1827 23.441H48.1079C48.1104 23.4385 48.1104 23.4609 48.1104 23.4609ZM93.2338 24.8624C92.8787 23.9073 91.8058 22.1517 89.6054 22.1517C87.4248 22.1517 85.6119 23.8749 85.6119 26.4061C85.6119 28.7951 87.405 30.6604 89.8165 30.6604C91.7536 30.6604 92.8812 29.4709 93.3456 28.7726L91.9076 27.8051C91.4308 28.5158 90.7677 28.9821 89.8264 28.9821C88.8752 28.9821 88.2096 28.5482 87.7676 27.6928L93.4325 25.3362C93.4325 25.3387 93.2338 24.8624 93.2338 24.8624ZM87.4571 26.2839C87.4124 24.6405 88.7287 23.8051 89.67 23.8051C90.4125 23.8051 91.0309 24.1716 91.242 24.7053L87.4571 26.2839ZM82.8551 30.4061H84.7153V17.9073H82.8551V30.4061ZM79.8004 23.1068H79.7333C79.3136 22.6056 78.5164 22.1517 77.4981 22.1517C75.3846 22.1517 73.4376 24.0195 73.4376 26.4185C73.4376 28.8076 75.3747 30.6529 77.4981 30.6529C78.504 30.6529 79.3136 30.1966 79.7333 29.6854H79.8004V30.2963C79.8004 31.9198 78.9361 32.7951 77.5428 32.7951C76.4029 32.7951 75.6951 31.9721 75.407 31.2839L73.7902 31.9622C74.2546 33.0844 75.4939 34.4734 77.5404 34.4734C79.7209 34.4734 81.5687 33.1841 81.5687 30.0395V22.4061H79.8103V23.1068C79.8128 23.1068 79.8004 23.1068 79.8004 23.1068ZM77.6645 28.9846C76.3806 28.9846 75.3077 27.9073 75.3077 26.4185C75.3077 24.9173 76.3806 23.83 77.6645 23.83C78.9361 23.83 79.9221 24.9297 79.9221 26.4185C79.9345 27.9073 78.9386 28.9846 77.6645 28.9846ZM101.944 17.9073H97.4956V30.4061H99.3558V25.6729H101.946C104.005 25.6729 106.029 24.1741 106.029 21.7951C106.029 19.416 104.012 17.9073 101.944 17.9073ZM101.998 23.9273H99.3533V19.638H101.998C103.392 19.638 104.179 20.7926 104.179 21.7826C104.179 22.7627 103.382 23.9273 101.998 23.9273ZM113.485 22.1392C112.134 22.1392 110.74 22.7402 110.164 24.0494L111.813 24.7377C112.168 24.0494 112.819 23.815 113.507 23.815C114.471 23.815 115.444 24.3936 115.466 25.426V25.5582C115.134 25.3686 114.404 25.0794 113.529 25.0794C111.749 25.0794 109.943 26.0569 109.943 27.8898C109.943 29.5682 111.403 30.6455 113.03 30.6455C114.279 30.6455 114.967 30.0794 115.397 29.4235H115.464V30.3911H117.257V25.6031C117.257 23.3736 115.608 22.1392 113.485 22.1392ZM113.251 28.9846C112.643 28.9846 111.791 28.6854 111.791 27.9173C111.791 26.9497 112.854 26.5831 113.76 26.5831C114.58 26.5831 114.967 26.7602 115.454 27.0046C115.32 28.1268 114.376 28.9746 113.251 28.9846ZM123.799 22.4061L121.663 27.8275H121.596L119.383 22.4061H117.381L120.702 29.9846L118.809 34.1966H120.746L125.855 22.4061H123.799ZM107.055 30.4061H108.915V17.9073H107.055V30.4061Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.9545 7.9394C10.6664 8.25112 10.5 8.72743 10.5 9.35087V31.4631C10.5 32.0865 10.6664 32.5628 10.9644 32.8621L11.0414 32.9294L23.3796 20.5404V20.2636L11.0315 7.87207L10.9545 7.9394Z"
                                      fill="url(#paint0_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4824 24.6835L23.3672 20.5513V20.2621L27.4824 16.1299L27.5718 16.1847L32.4396 18.9628C33.8329 19.7508 33.8329 21.0526 32.4396 21.8506L27.5718 24.6286L27.4824 24.6835Z"
                                      fill="url(#paint1_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 24.6282L23.3683 20.4062L10.9531 32.8726C11.4076 33.3614 12.1701 33.4162 13.0219 32.9399L27.5729 24.6282Z"
                                      fill="url(#paint2_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 16.1847L13.0219 7.88543C12.1701 7.39665 11.4051 7.46399 10.9531 7.95276L23.3683 20.4066L27.5729 16.1847Z"
                                      fill="url(#paint3_linear_5730_20582)" />
                                    <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4854 24.5381L13.0336 32.7824C12.2265 33.2488 11.5063 33.2164 11.0418 32.7924L10.9648 32.8697L11.0418 32.9371C11.5063 33.3585 12.2265 33.3934 13.0336 32.9271L27.5847 24.6279L27.4854 24.5381Z"
                                      fill="black" />
                                    <path opacity="0.12" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M32.4422 21.7055L27.4727 24.5384L27.5621 24.6282L32.4298 21.8501C33.1277 21.4511 33.4704 20.9274 33.4704 20.4062C33.4282 20.8851 33.073 21.3389 32.4422 21.7055Z"
                                      fill="black" />
                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.0233 8.02954L32.442 19.1069C33.0728 19.4635 33.428 19.9298 33.4826 20.4061C33.4826 19.8849 33.1399 19.3612 32.442 18.9622L13.0233 7.88491C11.63 7.08441 10.5 7.75274 10.5 9.35124V9.49588C10.5 7.89488 11.63 7.23902 13.0233 8.02954Z"
                                      fill="white" />
                                  </g>
                                  <defs>
                                    <linearGradient id="paint0_linear_5730_20582" x1="22.2729" y1="9.11231"
                                      x2="2.49849" y2="14.3596" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#00A0FF" />
                                      <stop offset="0.00657" stop-color="#00A1FF" />
                                      <stop offset="0.2601" stop-color="#00BEFF" />
                                      <stop offset="0.5122" stop-color="#00D2FF" />
                                      <stop offset="0.7604" stop-color="#00DFFF" />
                                      <stop offset="1" stop-color="#00E3FF" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_5730_20582" x1="34.2565" y1="20.4067"
                                      x2="10.1588" y2="20.4067" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FFE000" />
                                      <stop offset="0.4087" stop-color="#FFBD00" />
                                      <stop offset="0.7754" stop-color="#FFA500" />
                                      <stop offset="1" stop-color="#FF9C00" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_5730_20582" x1="25.2866" y1="22.7036"
                                      x2="9.32386" y2="49.4601" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FF3A44" />
                                      <stop offset="1" stop-color="#C31162" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_5730_20582" x1="7.82684" y1="0.585421"
                                      x2="14.9485" y2="12.5353" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#32A071" />
                                      <stop offset="0.0685" stop-color="#2DA771" />
                                      <stop offset="0.4762" stop-color="#15CF74" />
                                      <stop offset="0.8009" stop-color="#06E775" />
                                      <stop offset="1" stop-color="#00F076" />
                                    </linearGradient>
                                    <clipPath id="clip0_5730_20582">
                                      <rect width="135" height="40" fill="white"
                                        transform="translate(0.5625 0.40625)" />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </a>
                            </div>

                            <div class="vs-portfolio-footer-item">
                              <a href="https://apps.apple.com/in/app/mfine-consult-doctors-online/id1308944633"
                                class="vs-portfolio-footer-link" target="_blank">
                                <svg width="121" height="41" viewBox="0 0 121 41" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_5730_20583)">
                                    <path
                                      d="M110.697 0.40638H10.0972C9.73048 0.40638 9.36818 0.40638 9.00245 0.40838C8.6963 0.41038 8.39259 0.41619 8.0835 0.42108C7.41201 0.428982 6.74211 0.488056 6.0796 0.59779C5.41802 0.709913 4.77717 0.921296 4.17872 1.22479C3.581 1.53085 3.03485 1.92855 2.56007 2.40345C2.0828 2.87702 1.68496 3.4244 1.38185 4.02454C1.0779 4.62349 0.867141 5.26532 0.75685 5.92786C0.645511 6.58957 0.585598 7.2589 0.57765 7.92986C0.56837 8.23646 0.56739 8.54408 0.5625 8.85072V31.965C0.56739 32.2755 0.56837 32.5763 0.57765 32.8869C0.585601 33.5578 0.645513 34.2271 0.75685 34.8888C0.866836 35.5517 1.07761 36.1939 1.38185 36.7931C1.68483 37.3913 2.08272 37.9364 2.56007 38.4074C3.03304 38.8844 3.57955 39.2824 4.17872 39.5861C4.77717 39.8904 5.41795 40.103 6.0796 40.2169C6.74222 40.3257 7.41206 40.3848 8.0835 40.3937C8.39259 40.4005 8.6963 40.4044 9.00245 40.4044C9.36817 40.4064 9.7305 40.4064 10.0972 40.4064H110.697C111.057 40.4064 111.422 40.4064 111.781 40.4044C112.086 40.4044 112.398 40.4005 112.703 40.3937C113.373 40.3853 114.042 40.3262 114.703 40.2169C115.367 40.1022 116.01 39.8896 116.611 39.5861C117.21 39.2822 117.756 38.8842 118.229 38.4074C118.705 37.9346 119.103 37.3898 119.41 36.7931C119.712 36.1935 119.921 35.5513 120.029 34.8888C120.141 34.227 120.203 33.5579 120.215 32.8869C120.219 32.5763 120.219 32.2755 120.219 31.965C120.227 31.6017 120.227 31.2404 120.227 30.8712V9.94251C120.227 9.5763 120.227 9.21302 120.219 8.85072C120.219 8.54408 120.219 8.23646 120.215 7.92982C120.203 7.2588 120.141 6.58962 120.029 5.92782C119.921 5.26566 119.712 4.62388 119.41 4.0245C118.793 2.82158 117.814 1.84241 116.611 1.2247C116.01 0.921947 115.367 0.71062 114.703 0.5977C114.042 0.487483 113.373 0.428388 112.703 0.42094C112.398 0.41606 112.086 0.4102 111.781 0.40825C111.422 0.40625 111.057 0.40625 110.697 0.40625V0.40638Z"
                                      fill="#A6A6A6" />
                                    <path
                                      d="M9.00541 39.5312C8.70073 39.5312 8.40341 39.5274 8.10112 39.5205C7.47491 39.5124 6.85015 39.4579 6.23198 39.3574C5.65557 39.2582 5.09719 39.0735 4.57524 38.8096C4.05809 38.5478 3.5864 38.2045 3.17824 37.7929C2.76418 37.3862 2.41946 36.9145 2.15773 36.3965C1.89312 35.875 1.71 35.3162 1.61473 34.7393C1.51186 34.1194 1.4562 33.4926 1.44823 32.8643C1.44189 32.6534 1.43359 31.9512 1.43359 31.9512V8.85059C1.43359 8.85059 1.44243 8.15918 1.44828 7.95605C1.45591 7.32873 1.51125 6.7029 1.61381 6.08398C1.70925 5.5055 1.89252 4.945 2.15727 4.42188C2.41804 3.90419 2.76085 3.43211 3.17241 3.02393C3.58352 2.61187 4.05672 2.26685 4.57475 2.00146C5.0955 1.73834 5.65283 1.55498 6.22807 1.45752C6.84827 1.35609 7.47519 1.30125 8.10358 1.29346L9.0059 1.28125H111.774L112.688 1.29395C113.31 1.30135 113.931 1.3557 114.546 1.45654C115.127 1.55523 115.69 1.73987 116.217 2.00439C117.255 2.53924 118.099 3.38541 118.632 4.42432C118.892 4.94383 119.073 5.49976 119.167 6.07324C119.271 6.69724 119.329 7.32799 119.341 7.96045C119.344 8.24365 119.344 8.54785 119.344 8.85059C119.352 9.22559 119.352 9.58252 119.352 9.94238V30.871C119.352 31.2344 119.352 31.5889 119.344 31.9463C119.344 32.2715 119.344 32.5693 119.34 32.8759C119.328 33.4971 119.271 34.1166 119.169 34.7295C119.076 35.3105 118.894 35.8738 118.629 36.3994C118.365 36.9119 118.023 37.3795 117.613 37.7851C117.205 38.1989 116.732 38.5442 116.214 38.8077C115.689 39.0736 115.126 39.259 114.546 39.3574C113.928 39.4584 113.303 39.5129 112.677 39.5205C112.384 39.5274 112.077 39.5312 111.779 39.5312L110.695 39.5332L9.00541 39.5312Z"
                                      fill="black" />
                                    <path
                                      d="M25.3325 20.7076C25.3432 19.8729 25.5649 19.0545 25.977 18.3286C26.389 17.6026 26.9779 16.9927 27.689 16.5555C27.2373 15.9103 26.6413 15.3794 25.9485 15.0048C25.2557 14.6303 24.4851 14.4224 23.6979 14.3978C22.0186 14.2216 20.3907 15.4026 19.535 15.4026C18.6627 15.4026 17.3452 14.4153 15.9265 14.4445C15.0088 14.4742 14.1144 14.741 13.3306 15.2191C12.5467 15.6971 11.9 16.3701 11.4535 17.1724C9.51955 20.5208 10.9621 25.4418 12.8147 28.1485C13.7416 29.4738 14.8249 30.9543 16.2424 30.9018C17.6294 30.8442 18.1475 30.0173 19.8218 30.0173C21.4805 30.0173 21.9666 30.9018 23.4128 30.8684C24.9012 30.8442 25.8389 29.5371 26.7333 28.1992C27.3993 27.2549 27.9117 26.2112 28.2517 25.1067C27.387 24.741 26.6491 24.1288 26.13 23.3465C25.6108 22.5642 25.3335 21.6464 25.3325 20.7076Z"
                                      fill="white" />
                                    <path
                                      d="M22.602 12.6176C23.4136 11.6434 23.8134 10.3912 23.7165 9.12695C22.4767 9.25717 21.3315 9.84973 20.509 10.7866C20.1068 11.2442 19.7988 11.7767 19.6026 12.3534C19.4063 12.9302 19.3257 13.54 19.3653 14.148C19.9854 14.1543 20.5989 14.0199 21.1596 13.7548C21.7202 13.4898 22.2134 13.1009 22.602 12.6176Z"
                                      fill="white" />
                                    <path
                                      d="M42.8672 27.5459H38.1338L36.9971 30.9024H34.9922L39.4756 18.4844H41.5586L46.042 30.9024H44.0029L42.8672 27.5459ZM38.624 25.9971H42.376L40.5264 20.5498H40.4746L38.624 25.9971Z"
                                      fill="white" />
                                    <path
                                      d="M55.7237 26.3757C55.7237 29.1892 54.2178 30.9968 51.9453 30.9968C51.3697 31.0269 50.7972 30.8943 50.2934 30.6142C49.7896 30.334 49.3749 29.9177 49.0967 29.4128H49.0537V33.8972H47.1953V21.8484H48.9942V23.3542H49.0284C49.3193 22.8517 49.741 22.4376 50.2487 22.1557C50.7563 21.8739 51.3308 21.7349 51.9112 21.7536C54.209 21.7536 55.7237 23.57 55.7237 26.3757ZM53.8135 26.3757C53.8135 24.5427 52.8662 23.3376 51.4209 23.3376C50.001 23.3376 49.0459 24.5681 49.0459 26.3757C49.0459 28.1999 50.001 29.4216 51.4209 29.4216C52.8662 29.4216 53.8135 28.2253 53.8135 26.3757Z"
                                      fill="white" />
                                    <path
                                      d="M65.6885 26.3757C65.6885 29.1892 64.1826 30.9968 61.9102 30.9968C61.3345 31.0269 60.762 30.8943 60.2582 30.6142C59.7544 30.334 59.3397 29.9177 59.0616 29.4128H59.0186V33.8972H57.1602V21.8483H58.959V23.3542H58.9932C59.2841 22.8517 59.7058 22.4375 60.2135 22.1557C60.7211 21.8739 61.2957 21.7349 61.876 21.7536C64.1739 21.7536 65.6885 23.57 65.6885 26.3757ZM63.7783 26.3757C63.7783 24.5427 62.8311 23.3376 61.3858 23.3376C59.9658 23.3376 59.0108 24.5681 59.0108 26.3757C59.0108 28.1999 59.9658 29.4216 61.3858 29.4216C62.8311 29.4216 63.7784 28.2253 63.7784 26.3757H63.7783Z"
                                      fill="white" />
                                    <path
                                      d="M72.2735 27.4424C72.4112 28.6739 73.6075 29.4824 75.2422 29.4824C76.8086 29.4824 77.9356 28.6738 77.9356 27.5635C77.9356 26.5996 77.2559 26.0225 75.6465 25.627L74.0371 25.2393C71.7569 24.6885 70.6983 23.6221 70.6983 21.8916C70.6983 19.749 72.5655 18.2773 75.2168 18.2773C77.8408 18.2773 79.6397 19.749 79.7002 21.8916H77.8242C77.7119 20.6523 76.6875 19.9043 75.1904 19.9043C73.6934 19.9043 72.669 20.6611 72.669 21.7627C72.669 22.6406 73.3233 23.1572 74.9238 23.5527L76.292 23.8886C78.8398 24.4912 79.8984 25.5146 79.8984 27.331C79.8984 29.6543 78.0479 31.1093 75.1045 31.1093C72.3506 31.1093 70.4912 29.6884 70.3711 27.4423L72.2735 27.4424Z"
                                      fill="white" />
                                    <path
                                      d="M83.9101 19.7061V21.8486H85.6318V23.3203H83.9101V28.3115C83.9101 29.0869 84.2549 29.4482 85.0117 29.4482C85.2161 29.4447 85.4202 29.4303 85.623 29.4052V30.8681C85.2828 30.9317 84.9369 30.9605 84.5908 30.9541C82.7578 30.9541 82.043 30.2656 82.043 28.5097V23.3203H80.7266V21.8486H82.0429V19.7061H83.9101Z"
                                      fill="white" />
                                    <path
                                      d="M86.6289 26.376C86.6289 23.5273 88.3066 21.7373 90.9229 21.7373C93.5479 21.7373 95.2178 23.5273 95.2178 26.376C95.2178 29.2324 93.5566 31.0146 90.9229 31.0146C88.29 31.0146 86.6289 29.2324 86.6289 26.376ZM93.3242 26.376C93.3242 24.4219 92.4287 23.2686 90.9228 23.2686C89.417 23.2686 88.5225 24.4307 88.5225 26.376C88.5225 28.3379 89.417 29.4824 90.9228 29.4824C92.4287 29.4824 93.3242 28.3379 93.3242 26.376H93.3242Z"
                                      fill="white" />
                                    <path
                                      d="M96.75 21.8483H98.5225V23.3893H98.5655C98.6854 22.908 98.9673 22.4826 99.3639 22.1848C99.7605 21.8869 100.248 21.7346 100.743 21.7535C100.957 21.7528 101.171 21.776 101.38 21.8229V23.5611C101.11 23.4785 100.828 23.4406 100.545 23.4488C100.275 23.4379 100.006 23.4855 99.756 23.5884C99.5061 23.6913 99.2815 23.847 99.0975 24.0449C98.9135 24.2428 98.7746 24.4781 98.6901 24.7348C98.6057 24.9915 98.5778 25.2634 98.6084 25.5318V30.902H96.75L96.75 21.8483Z"
                                      fill="white" />
                                    <path
                                      d="M109.948 28.2432C109.698 29.8867 108.098 31.0146 106.05 31.0146C103.416 31.0146 101.781 29.25 101.781 26.4189C101.781 23.5791 103.425 21.7373 105.972 21.7373C108.477 21.7373 110.052 23.458 110.052 26.2031V26.8398H103.657V26.9521C103.628 27.2853 103.669 27.621 103.78 27.9369C103.89 28.2527 104.066 28.5415 104.296 28.784C104.527 29.0266 104.806 29.2173 105.116 29.3436C105.425 29.4699 105.759 29.5289 106.093 29.5166C106.532 29.5577 106.973 29.456 107.349 29.2266C107.726 28.9972 108.019 28.6522 108.184 28.2432L109.948 28.2432ZM103.666 25.541H108.192C108.209 25.2414 108.164 24.9416 108.059 24.6604C107.954 24.3792 107.793 24.1227 107.584 23.9069C107.376 23.6911 107.125 23.5208 106.847 23.4066C106.57 23.2923 106.272 23.2367 105.972 23.2432C105.669 23.2414 105.369 23.2995 105.089 23.4142C104.809 23.529 104.554 23.6981 104.34 23.9117C104.126 24.1253 103.956 24.3793 103.84 24.6589C103.724 24.9386 103.665 25.2384 103.666 25.541V25.541Z"
                                      fill="white" />
                                    <path
                                      d="M38.3896 9.13763C38.7793 9.10967 39.1702 9.16853 39.5343 9.30996C39.8984 9.4514 40.2266 9.67188 40.4952 9.9555C40.7638 10.2391 40.9661 10.5788 41.0875 10.9501C41.2089 11.3214 41.2464 11.715 41.1973 12.1025C41.1973 14.0087 40.167 15.1045 38.3896 15.1045H36.2344V9.13763H38.3896ZM37.1611 14.2606H38.2861C38.5645 14.2773 38.8431 14.2316 39.1017 14.127C39.3602 14.0224 39.5922 13.8614 39.7807 13.6559C39.9692 13.4503 40.1094 13.2053 40.1913 12.9387C40.2732 12.6721 40.2946 12.3906 40.2539 12.1146C40.2916 11.8398 40.2681 11.56 40.1849 11.2954C40.1018 11.0307 39.9612 10.7877 39.7731 10.5838C39.5851 10.3798 39.3542 10.22 39.0971 10.1158C38.8401 10.0116 38.5631 9.96547 38.2861 9.98084H37.1611V14.2606Z"
                                      fill="white" />
                                    <path
                                      d="M42.2444 12.851C42.2161 12.5551 42.25 12.2565 42.3438 11.9745C42.4376 11.6924 42.5894 11.4331 42.7893 11.2131C42.9893 10.9931 43.233 10.8173 43.5048 10.6971C43.7767 10.5768 44.0707 10.5146 44.368 10.5146C44.6652 10.5146 44.9592 10.5768 45.2311 10.6971C45.5029 10.8173 45.7466 10.9931 45.9466 11.2131C46.1465 11.4331 46.2983 11.6924 46.3921 11.9745C46.486 12.2565 46.5198 12.5551 46.4915 12.851C46.5203 13.1472 46.4869 13.4462 46.3933 13.7288C46.2997 14.0113 46.148 14.2711 45.948 14.4915C45.7481 14.7119 45.5042 14.8881 45.232 15.0086C44.9599 15.1291 44.6656 15.1914 44.368 15.1914C44.0703 15.1914 43.776 15.1291 43.5039 15.0086C43.2318 14.8881 42.9879 14.7119 42.7879 14.4915C42.5879 14.2711 42.4362 14.0113 42.3426 13.7288C42.249 13.4462 42.2156 13.1472 42.2444 12.851ZM45.5774 12.851C45.5774 11.875 45.1389 11.3042 44.3694 11.3042C43.597 11.3042 43.1624 11.875 43.1624 12.851C43.1624 13.8349 43.597 14.4013 44.3694 14.4013C45.139 14.4013 45.5774 13.831 45.5774 12.851H45.5774Z"
                                      fill="white" />
                                    <path
                                      d="M52.1367 15.1045H51.2148L50.2842 11.7881H50.2139L49.2871 15.1045H48.374L47.1328 10.6016H48.0342L48.8408 14.0376H48.9072L49.833 10.6016H50.6856L51.6113 14.0376H51.6816L52.4844 10.6016H53.373L52.1367 15.1045Z"
                                      fill="white" />
                                    <path
                                      d="M54.418 10.6011H55.2734V11.3164H55.3398C55.4525 11.0595 55.6425 10.8442 55.8834 10.7003C56.1242 10.5565 56.404 10.4915 56.6836 10.5142C56.9027 10.4977 57.1227 10.5308 57.3273 10.6109C57.5319 10.691 57.7158 10.8161 57.8655 10.9769C58.0152 11.1377 58.1268 11.3302 58.192 11.54C58.2572 11.7498 58.2743 11.9716 58.2422 12.189V15.104H57.3535V12.4122C57.3535 11.6885 57.0391 11.3287 56.3818 11.3287C56.2331 11.3217 56.0846 11.347 55.9465 11.4029C55.8085 11.4587 55.6841 11.5437 55.582 11.6521C55.4799 11.7605 55.4024 11.8897 55.3549 12.0308C55.3073 12.1719 55.2909 12.3217 55.3066 12.4698V15.104H54.418L54.418 10.6011Z"
                                      fill="white" />
                                    <path d="M59.6562 8.84375H60.5449V15.1045H59.6562V8.84375Z" fill="white" />
                                    <path
                                      d="M61.7796 12.8511C61.7513 12.5552 61.7851 12.2566 61.879 11.9745C61.9729 11.6924 62.1246 11.4331 62.3246 11.2131C62.5246 10.9931 62.7683 10.8173 63.0402 10.6971C63.312 10.5768 63.606 10.5146 63.9033 10.5146C64.2006 10.5146 64.4946 10.5768 64.7665 10.6971C65.0384 10.8173 65.2821 10.9931 65.4821 11.2131C65.682 11.4331 65.8338 11.6924 65.9277 11.9745C66.0215 12.2566 66.0554 12.5552 66.0271 12.8511C66.0559 13.1473 66.0224 13.4463 65.9288 13.7289C65.8352 14.0114 65.6835 14.2712 65.4835 14.4916C65.2835 14.712 65.0396 14.8881 64.7674 15.0087C64.4953 15.1292 64.201 15.1915 63.9033 15.1915C63.6057 15.1915 63.3114 15.1292 63.0392 15.0087C62.7671 14.8881 62.5232 14.712 62.3232 14.4916C62.1232 14.2712 61.9715 14.0114 61.8778 13.7289C61.7842 13.4463 61.7507 13.1473 61.7796 12.8511ZM65.1126 12.8511C65.1126 11.875 64.6741 11.3042 63.9046 11.3042C63.1321 11.3042 62.6976 11.875 62.6976 12.8511C62.6976 13.835 63.1321 14.4014 63.9046 14.4014C64.6741 14.4014 65.1126 13.8311 65.1126 12.8511H65.1126Z"
                                      fill="white" />
                                    <path
                                      d="M66.9648 13.831C66.9648 13.0205 67.5684 12.5532 68.6396 12.4868L69.8594 12.4165V12.0278C69.8594 11.5522 69.5449 11.2837 68.9375 11.2837C68.4414 11.2837 68.0977 11.4658 67.999 11.7842H67.1387C67.2295 11.0107 67.957 10.5146 68.9785 10.5146C70.1074 10.5146 70.7441 11.0766 70.7441 12.0278V15.1045H69.8887V14.4717H69.8184C69.6756 14.6987 69.4752 14.8837 69.2376 15.0079C69 15.1321 68.7337 15.1911 68.4658 15.1787C68.2768 15.1983 68.0857 15.1782 67.905 15.1195C67.7242 15.0608 67.5578 14.9649 67.4163 14.8379C67.2749 14.7109 67.1617 14.5557 67.0839 14.3823C67.0062 14.2089 66.9656 14.0211 66.9648 13.831ZM69.8594 13.4463V13.0698L68.7598 13.1401C68.1396 13.1816 67.8584 13.3926 67.8584 13.7895C67.8584 14.1948 68.2099 14.4306 68.6934 14.4306C68.835 14.445 68.9781 14.4307 69.1141 14.3886C69.2501 14.3465 69.3763 14.2775 69.4851 14.1856C69.5938 14.0938 69.683 13.981 69.7474 13.854C69.8117 13.727 69.8498 13.5883 69.8594 13.4463Z"
                                      fill="white" />
                                    <path
                                      d="M71.9102 12.8511C71.9102 11.4282 72.6416 10.5269 73.7793 10.5269C74.0607 10.5139 74.34 10.5813 74.5845 10.7212C74.8291 10.8611 75.0287 11.0677 75.1602 11.3169H75.2266V8.84375H76.1152V15.1045H75.2637V14.3931H75.1934C75.0518 14.6406 74.8451 14.8446 74.5959 14.9831C74.3466 15.1216 74.0642 15.1892 73.7793 15.1787C72.6338 15.1787 71.9102 14.2774 71.9102 12.8511ZM72.8282 12.8511C72.8282 13.8062 73.2784 14.3809 74.0313 14.3809C74.7803 14.3809 75.2432 13.7979 75.2432 12.855C75.2432 11.9165 74.7754 11.3252 74.0313 11.3252C73.2832 11.3252 72.8281 11.9038 72.8281 12.8511H72.8282Z"
                                      fill="white" />
                                    <path
                                      d="M79.7952 12.851C79.7669 12.5551 79.8007 12.2565 79.8946 11.9745C79.9884 11.6924 80.1402 11.4331 80.3401 11.2131C80.5401 10.9931 80.7838 10.8173 81.0556 10.6971C81.3275 10.5768 81.6215 10.5146 81.9187 10.5146C82.216 10.5146 82.51 10.5768 82.7818 10.6971C83.0537 10.8173 83.2974 10.9931 83.4973 11.2131C83.6973 11.4331 83.849 11.6924 83.9429 11.9745C84.0367 12.2565 84.0706 12.5551 84.0423 12.851C84.0711 13.1472 84.0377 13.4462 83.9441 13.7288C83.8505 14.0113 83.6988 14.2711 83.4988 14.4915C83.2988 14.7119 83.0549 14.8881 82.7828 15.0086C82.5107 15.1291 82.2164 15.1914 81.9187 15.1914C81.6211 15.1914 81.3268 15.1291 81.0547 15.0086C80.7825 14.8881 80.5386 14.7119 80.3386 14.4915C80.1387 14.2711 79.987 14.0113 79.8934 13.7288C79.7998 13.4462 79.7664 13.1472 79.7952 12.851ZM83.1282 12.851C83.1282 11.875 82.6897 11.3042 81.9202 11.3042C81.1477 11.3042 80.7132 11.875 80.7132 12.851C80.7132 13.8349 81.1478 14.4013 81.9202 14.4013C82.6897 14.4013 83.1282 13.831 83.1282 12.851Z"
                                      fill="white" />
                                    <path
                                      d="M85.2344 10.6011H86.0898V11.3164H86.1563C86.2689 11.0595 86.4589 10.8442 86.6998 10.7003C86.9407 10.5565 87.2204 10.4915 87.5 10.5142C87.7191 10.4977 87.9391 10.5308 88.1437 10.6109C88.3483 10.691 88.5323 10.8161 88.6819 10.9769C88.8316 11.1377 88.9432 11.3302 89.0084 11.54C89.0736 11.7498 89.0908 11.9716 89.0586 12.189V15.104H88.1699V12.4122C88.1699 11.6885 87.8555 11.3287 87.1982 11.3287C87.0495 11.3217 86.901 11.347 86.7629 11.4029C86.6249 11.4587 86.5005 11.5437 86.3984 11.6521C86.2963 11.7605 86.2188 11.8897 86.1713 12.0308C86.1237 12.1719 86.1073 12.3217 86.123 12.4698V15.104H85.2344V10.6011Z"
                                      fill="white" />
                                    <path
                                      d="M94.0771 9.48047V10.6221H95.0527V11.3706H94.0771V13.686C94.0771 14.1577 94.2715 14.3643 94.7139 14.3643C94.8271 14.3639 94.9403 14.357 95.0527 14.3437V15.084C94.8932 15.1125 94.7315 15.1277 94.5693 15.1294C93.5811 15.1294 93.1875 14.7817 93.1875 13.9136V11.3706H92.4727V10.622H93.1875V9.48047H94.0771Z"
                                      fill="white" />
                                    <path
                                      d="M96.2695 8.84375H97.1504V11.3252H97.2207C97.3388 11.0659 97.5341 10.8493 97.7797 10.7049C98.0254 10.5606 98.3097 10.4955 98.5937 10.5186C98.8117 10.5067 99.0295 10.5431 99.2318 10.6251C99.4341 10.7072 99.6158 10.8328 99.7639 10.9932C99.912 11.1535 100.023 11.3446 100.089 11.5527C100.155 11.7608 100.174 11.9809 100.144 12.1973V15.1045H99.2549V12.4165C99.2549 11.6973 98.9199 11.333 98.292 11.333C98.1393 11.3205 97.9857 11.3415 97.8419 11.3945C97.6981 11.4476 97.5677 11.5314 97.4597 11.6401C97.3517 11.7489 97.2687 11.8799 97.2167 12.024C97.1646 12.1682 97.1447 12.3219 97.1582 12.4746V15.1045H96.2696L96.2695 8.84375Z"
                                      fill="white" />
                                    <path
                                      d="M105.324 13.8887C105.203 14.3003 104.942 14.6563 104.585 14.8944C104.228 15.1326 103.799 15.2377 103.373 15.1915C103.076 15.1993 102.781 15.1425 102.509 15.025C102.236 14.9074 101.993 14.732 101.795 14.5109C101.597 14.2897 101.449 14.0282 101.363 13.7444C101.276 13.4605 101.252 13.1612 101.293 12.8673C101.253 12.5724 101.277 12.2724 101.364 11.9878C101.45 11.7031 101.597 11.4403 101.794 11.2173C101.991 10.9942 102.233 10.816 102.505 10.6948C102.777 10.5736 103.071 10.5122 103.369 10.5147C104.622 10.5147 105.378 11.3707 105.378 12.7847V13.0948H102.198V13.1446C102.184 13.3099 102.205 13.4762 102.259 13.6329C102.313 13.7897 102.399 13.9334 102.512 14.0549C102.625 14.1763 102.762 14.2728 102.915 14.3382C103.067 14.4036 103.231 14.4365 103.397 14.4346C103.61 14.4601 103.825 14.4219 104.016 14.3246C104.207 14.2274 104.364 14.0757 104.468 13.8887L105.324 13.8887ZM102.198 12.4376H104.472C104.484 12.2864 104.463 12.1346 104.412 11.9919C104.361 11.8492 104.281 11.7187 104.176 11.6089C104.072 11.499 103.946 11.4122 103.806 11.354C103.666 11.2959 103.515 11.2676 103.364 11.2711C103.21 11.2691 103.058 11.298 102.915 11.3559C102.773 11.4139 102.644 11.4997 102.535 11.6085C102.426 11.7172 102.34 11.8465 102.283 11.9889C102.225 12.1313 102.196 12.2839 102.198 12.4376H102.198Z"
                                      fill="white" />
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_5730_20583">
                                      <rect width="119.664" height="40" fill="white"
                                        transform="translate(0.5625 0.40625)" />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="vs-portfolio-item" style="background-color: #cbefff">
                  <div class="row">
                    <div class="col col-12 col-md-4 col-lg-4">
                      <div class="vs-portfolio-item-img">
                        <img src="{{asset('web-assets/images/new-portfolio/Revv - Ride Sharing App.png')}}"
                          alt="demand-grocery-img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                      <div class="vs-portfolio-details">
                        <div class="vs-portfolio-heading">
                          <div class="vs-portfolio-heading-top">
                            <div class="vs-portfolio-logo">
                              <img src="{{asset('web-assets/images/new-portfolio/logo/Revv - Ride Sharing App.png')}}"
                                alt="app-logo" class="img-fluid" />
                            </div>
                            <div class="vs-portfolio-heading__inner">
                              <h3 class="vs-portfolio-title">
                                <span>Revv - Ride Sharing App</span>
                              </h3>
                            </div>
                          </div>
                          <p class="vs-portfolio-heading-desccription">
                            Revv is a self-drive car rental and subscription
                            app based in India. Within the Revv app, users
                            get a wide range of cars to choose from and can
                            book cars for hourly, daily, weekly, or monthly
                            periods. Revv delivers cars to the user&#039;s
                            doorstep and offers flexible pricing plans.
                          </p>

                          <div class="vs-portfolio-body">
                            <div class="vs-portfolio-info">
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Region</label>
                                <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                  <img style="padding-right: 10px" width="25%"
                                    src="{{asset('web-assets/images/new-portfolio/flags/small/India.png')}}" alt="app-logo"
                                    class="img-fluid" />

                                  <span>India</span>
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
                                <p class="vs-portfolio-info-text">
                                  Android, iOS
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Technology</label>
                                <p class="vs-portfolio-info-text">
                                  Swift, Java , Google Maps API, Django
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="vs-portfolio-footer">


                            <div class="vs-portfolio-footer-item">
                              <a href="https://play.google.com/store/apps/details?id=com.selfdrive&amp;hl=en"
                                class="vs-portfolio-footer-link" target="_blank">
                                <svg width="136" height="41" viewBox="0 0 136 41" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_5730_20582)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 40.4062H5.56434C2.80762 40.4062 0.5625 38.1519 0.5625 35.4062V5.40625C0.5625 2.65064 2.80762 0.40625 5.56434 0.40625H130.561C133.315 0.40625 135.562 2.65064 135.562 5.40625V35.4062C135.562 38.1519 133.315 40.4062 130.561 40.4062Z"
                                      fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 1.20675C132.873 1.20675 134.765 3.09453 134.765 5.40625V35.4062C134.765 37.718 132.885 39.6058 130.561 39.6058H5.56434C3.25217 39.6058 1.35971 37.718 1.35971 35.4062V5.40625C1.35971 3.09453 3.23975 1.20675 5.56434 1.20675H130.561ZM130.561 0.40625H5.56434C2.80762 0.40625 0.5625 2.66061 0.5625 5.40625V35.4062C0.5625 38.1619 2.80762 40.4062 5.56434 40.4062H130.561C133.315 40.4062 135.562 38.1619 135.562 35.4062V5.40625C135.562 2.66061 133.315 0.40625 130.561 0.40625Z"
                                      fill="#A6A6A6" />
                                    <path
                                      d="M71.6816 13.6382C70.7801 13.6382 70.0202 13.3215 69.4192 12.6981C68.8231 12.0921 68.4903 11.2567 68.5052 10.4038C68.5052 9.49357 68.8132 8.723 69.4192 8.11202C70.0177 7.48858 70.7776 7.17188 71.6792 7.17188C72.5707 7.17188 73.3307 7.48858 73.9416 8.11202C74.5476 8.74295 74.8556 9.51352 74.8556 10.4038C74.8456 11.3165 74.5377 12.0871 73.9416 12.6956C73.3431 13.324 72.5832 13.6382 71.6816 13.6382ZM44.8571 13.6382C43.9755 13.6382 43.2106 13.3265 42.5847 12.7105C41.9638 12.0971 41.6484 11.3215 41.6484 10.4063C41.6484 9.49108 41.9638 8.71552 42.5847 8.10205C43.1982 7.48609 43.9631 7.17437 44.8571 7.17437C45.2942 7.17437 45.7189 7.26165 46.1262 7.43871C46.5261 7.61078 46.8514 7.84519 47.0923 8.13197L47.1519 8.20429L46.4789 8.86764L46.4093 8.78534C46.0294 8.33148 45.5202 8.10953 44.8472 8.10953C44.2462 8.10953 43.7222 8.32399 43.29 8.74794C42.8554 9.17437 42.6344 9.73297 42.6344 10.4088C42.6344 11.0846 42.8554 11.6432 43.29 12.0696C43.7222 12.4936 44.2462 12.708 44.8472 12.708C45.488 12.708 46.0269 12.4936 46.4466 12.0696C46.6949 11.8203 46.8489 11.4711 46.9036 11.0297H44.7454V10.0971H47.8299L47.8423 10.1819C47.8647 10.339 47.887 10.5011 47.887 10.6507C47.887 11.511 47.6288 12.2068 47.1171 12.7205C46.536 13.329 45.776 13.6382 44.8571 13.6382ZM80.523 13.506H79.5718L76.6586 8.82524L76.6835 9.66813V13.5035H75.7323V7.30654H76.8176L76.8474 7.35392L79.5867 11.7629L79.5618 10.9225V7.30654H80.523V13.506ZM64.5341 13.506H63.5705V8.23921H61.8991V7.30654H66.203V8.23921H64.5316V13.506H64.5341ZM61.1143 13.506H60.1531V7.30654H61.1143V13.506ZM55.7126 13.506H54.7515V8.23921H53.0801V7.30654H57.384V8.23921H55.7126V13.506ZM52.4716 13.4961H48.7861V7.30654H52.4716V8.23921H49.7497V9.93995H52.2059V10.8626H49.7497V12.5634H52.4716V13.4961ZM70.1245 12.0572C70.5541 12.4886 71.0757 12.7055 71.6816 12.7055C72.305 12.7055 72.8141 12.4936 73.2388 12.0572C73.661 11.6332 73.8746 11.0771 73.8746 10.4063C73.8746 9.73547 73.661 9.17686 73.2413 8.75542C72.8116 8.32399 72.2876 8.10704 71.6841 8.10704C71.0608 8.10704 70.5516 8.31901 70.1294 8.75542C69.7072 9.17936 69.4937 9.73547 69.4937 10.4063C69.4937 11.0771 69.7048 11.6357 70.1245 12.0572Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M68.4134 22.1617C66.0664 22.1617 64.164 23.9497 64.164 26.416C64.164 28.8599 66.0788 30.6704 68.4134 30.6704C70.7603 30.6704 72.6627 28.8699 72.6627 26.416C72.6627 23.9497 70.7603 22.1617 68.4134 22.1617ZM68.4134 28.9846C67.1294 28.9846 66.0242 27.9173 66.0242 26.4061C66.0242 24.8724 67.1319 23.8275 68.4134 23.8275C69.6973 23.8275 70.8025 24.8724 70.8025 26.4061C70.805 27.9273 69.6973 28.9846 68.4134 28.9846ZM59.1423 22.1617C56.7954 22.1617 54.893 23.9497 54.893 26.416C54.893 28.8599 56.8078 30.6704 59.1423 30.6704C61.4893 30.6704 63.3916 28.8699 63.3916 26.416C63.3916 23.9497 61.4868 22.1617 59.1423 22.1617ZM59.1423 28.9846C57.8583 28.9846 56.7531 27.9173 56.7531 26.4061C56.7531 24.8724 57.8608 23.8275 59.1423 23.8275C60.4263 23.8275 61.5315 24.8724 61.5315 26.4061C61.5315 27.9273 60.4263 28.9846 59.1423 28.9846ZM48.1104 23.4609V25.2614H52.4144C52.2828 26.2714 51.95 27.017 51.4409 27.5283C50.81 28.1617 49.8365 28.8499 48.1204 28.8499C45.4754 28.8499 43.4066 26.7053 43.4066 24.0494C43.4066 21.3936 45.4754 19.2489 48.1204 19.2489C49.5484 19.2489 50.589 19.815 51.3614 20.5382L52.633 19.2614C51.5601 18.229 50.132 17.4385 48.1303 17.4385C44.5019 17.4385 41.457 20.4061 41.457 24.0395C41.457 27.6829 44.4994 30.6405 48.1303 30.6405C50.0898 30.6405 51.5601 29.9971 52.7224 28.7851C53.907 27.5956 54.282 25.9173 54.282 24.5632C54.282 24.1417 54.2497 23.7627 54.1827 23.441H48.1079C48.1104 23.4385 48.1104 23.4609 48.1104 23.4609ZM93.2338 24.8624C92.8787 23.9073 91.8058 22.1517 89.6054 22.1517C87.4248 22.1517 85.6119 23.8749 85.6119 26.4061C85.6119 28.7951 87.405 30.6604 89.8165 30.6604C91.7536 30.6604 92.8812 29.4709 93.3456 28.7726L91.9076 27.8051C91.4308 28.5158 90.7677 28.9821 89.8264 28.9821C88.8752 28.9821 88.2096 28.5482 87.7676 27.6928L93.4325 25.3362C93.4325 25.3387 93.2338 24.8624 93.2338 24.8624ZM87.4571 26.2839C87.4124 24.6405 88.7287 23.8051 89.67 23.8051C90.4125 23.8051 91.0309 24.1716 91.242 24.7053L87.4571 26.2839ZM82.8551 30.4061H84.7153V17.9073H82.8551V30.4061ZM79.8004 23.1068H79.7333C79.3136 22.6056 78.5164 22.1517 77.4981 22.1517C75.3846 22.1517 73.4376 24.0195 73.4376 26.4185C73.4376 28.8076 75.3747 30.6529 77.4981 30.6529C78.504 30.6529 79.3136 30.1966 79.7333 29.6854H79.8004V30.2963C79.8004 31.9198 78.9361 32.7951 77.5428 32.7951C76.4029 32.7951 75.6951 31.9721 75.407 31.2839L73.7902 31.9622C74.2546 33.0844 75.4939 34.4734 77.5404 34.4734C79.7209 34.4734 81.5687 33.1841 81.5687 30.0395V22.4061H79.8103V23.1068C79.8128 23.1068 79.8004 23.1068 79.8004 23.1068ZM77.6645 28.9846C76.3806 28.9846 75.3077 27.9073 75.3077 26.4185C75.3077 24.9173 76.3806 23.83 77.6645 23.83C78.9361 23.83 79.9221 24.9297 79.9221 26.4185C79.9345 27.9073 78.9386 28.9846 77.6645 28.9846ZM101.944 17.9073H97.4956V30.4061H99.3558V25.6729H101.946C104.005 25.6729 106.029 24.1741 106.029 21.7951C106.029 19.416 104.012 17.9073 101.944 17.9073ZM101.998 23.9273H99.3533V19.638H101.998C103.392 19.638 104.179 20.7926 104.179 21.7826C104.179 22.7627 103.382 23.9273 101.998 23.9273ZM113.485 22.1392C112.134 22.1392 110.74 22.7402 110.164 24.0494L111.813 24.7377C112.168 24.0494 112.819 23.815 113.507 23.815C114.471 23.815 115.444 24.3936 115.466 25.426V25.5582C115.134 25.3686 114.404 25.0794 113.529 25.0794C111.749 25.0794 109.943 26.0569 109.943 27.8898C109.943 29.5682 111.403 30.6455 113.03 30.6455C114.279 30.6455 114.967 30.0794 115.397 29.4235H115.464V30.3911H117.257V25.6031C117.257 23.3736 115.608 22.1392 113.485 22.1392ZM113.251 28.9846C112.643 28.9846 111.791 28.6854 111.791 27.9173C111.791 26.9497 112.854 26.5831 113.76 26.5831C114.58 26.5831 114.967 26.7602 115.454 27.0046C115.32 28.1268 114.376 28.9746 113.251 28.9846ZM123.799 22.4061L121.663 27.8275H121.596L119.383 22.4061H117.381L120.702 29.9846L118.809 34.1966H120.746L125.855 22.4061H123.799ZM107.055 30.4061H108.915V17.9073H107.055V30.4061Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.9545 7.9394C10.6664 8.25112 10.5 8.72743 10.5 9.35087V31.4631C10.5 32.0865 10.6664 32.5628 10.9644 32.8621L11.0414 32.9294L23.3796 20.5404V20.2636L11.0315 7.87207L10.9545 7.9394Z"
                                      fill="url(#paint0_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4824 24.6835L23.3672 20.5513V20.2621L27.4824 16.1299L27.5718 16.1847L32.4396 18.9628C33.8329 19.7508 33.8329 21.0526 32.4396 21.8506L27.5718 24.6286L27.4824 24.6835Z"
                                      fill="url(#paint1_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 24.6282L23.3683 20.4062L10.9531 32.8726C11.4076 33.3614 12.1701 33.4162 13.0219 32.9399L27.5729 24.6282Z"
                                      fill="url(#paint2_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 16.1847L13.0219 7.88543C12.1701 7.39665 11.4051 7.46399 10.9531 7.95276L23.3683 20.4066L27.5729 16.1847Z"
                                      fill="url(#paint3_linear_5730_20582)" />
                                    <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4854 24.5381L13.0336 32.7824C12.2265 33.2488 11.5063 33.2164 11.0418 32.7924L10.9648 32.8697L11.0418 32.9371C11.5063 33.3585 12.2265 33.3934 13.0336 32.9271L27.5847 24.6279L27.4854 24.5381Z"
                                      fill="black" />
                                    <path opacity="0.12" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M32.4422 21.7055L27.4727 24.5384L27.5621 24.6282L32.4298 21.8501C33.1277 21.4511 33.4704 20.9274 33.4704 20.4062C33.4282 20.8851 33.073 21.3389 32.4422 21.7055Z"
                                      fill="black" />
                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.0233 8.02954L32.442 19.1069C33.0728 19.4635 33.428 19.9298 33.4826 20.4061C33.4826 19.8849 33.1399 19.3612 32.442 18.9622L13.0233 7.88491C11.63 7.08441 10.5 7.75274 10.5 9.35124V9.49588C10.5 7.89488 11.63 7.23902 13.0233 8.02954Z"
                                      fill="white" />
                                  </g>
                                  <defs>
                                    <linearGradient id="paint0_linear_5730_20582" x1="22.2729" y1="9.11231"
                                      x2="2.49849" y2="14.3596" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#00A0FF" />
                                      <stop offset="0.00657" stop-color="#00A1FF" />
                                      <stop offset="0.2601" stop-color="#00BEFF" />
                                      <stop offset="0.5122" stop-color="#00D2FF" />
                                      <stop offset="0.7604" stop-color="#00DFFF" />
                                      <stop offset="1" stop-color="#00E3FF" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_5730_20582" x1="34.2565" y1="20.4067"
                                      x2="10.1588" y2="20.4067" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FFE000" />
                                      <stop offset="0.4087" stop-color="#FFBD00" />
                                      <stop offset="0.7754" stop-color="#FFA500" />
                                      <stop offset="1" stop-color="#FF9C00" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_5730_20582" x1="25.2866" y1="22.7036"
                                      x2="9.32386" y2="49.4601" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FF3A44" />
                                      <stop offset="1" stop-color="#C31162" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_5730_20582" x1="7.82684" y1="0.585421"
                                      x2="14.9485" y2="12.5353" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#32A071" />
                                      <stop offset="0.0685" stop-color="#2DA771" />
                                      <stop offset="0.4762" stop-color="#15CF74" />
                                      <stop offset="0.8009" stop-color="#06E775" />
                                      <stop offset="1" stop-color="#00F076" />
                                    </linearGradient>
                                    <clipPath id="clip0_5730_20582">
                                      <rect width="135" height="40" fill="white"
                                        transform="translate(0.5625 0.40625)" />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </a>
                            </div>

                            <div class="vs-portfolio-footer-item">
                              <a href="https://apps.apple.com/in/app/revv-self-drive-cars-delivered/id1021594400"
                                class="vs-portfolio-footer-link" target="_blank">
                                <svg width="121" height="41" viewBox="0 0 121 41" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_5730_20583)">
                                    <path
                                      d="M110.697 0.40638H10.0972C9.73048 0.40638 9.36818 0.40638 9.00245 0.40838C8.6963 0.41038 8.39259 0.41619 8.0835 0.42108C7.41201 0.428982 6.74211 0.488056 6.0796 0.59779C5.41802 0.709913 4.77717 0.921296 4.17872 1.22479C3.581 1.53085 3.03485 1.92855 2.56007 2.40345C2.0828 2.87702 1.68496 3.4244 1.38185 4.02454C1.0779 4.62349 0.867141 5.26532 0.75685 5.92786C0.645511 6.58957 0.585598 7.2589 0.57765 7.92986C0.56837 8.23646 0.56739 8.54408 0.5625 8.85072V31.965C0.56739 32.2755 0.56837 32.5763 0.57765 32.8869C0.585601 33.5578 0.645513 34.2271 0.75685 34.8888C0.866836 35.5517 1.07761 36.1939 1.38185 36.7931C1.68483 37.3913 2.08272 37.9364 2.56007 38.4074C3.03304 38.8844 3.57955 39.2824 4.17872 39.5861C4.77717 39.8904 5.41795 40.103 6.0796 40.2169C6.74222 40.3257 7.41206 40.3848 8.0835 40.3937C8.39259 40.4005 8.6963 40.4044 9.00245 40.4044C9.36817 40.4064 9.7305 40.4064 10.0972 40.4064H110.697C111.057 40.4064 111.422 40.4064 111.781 40.4044C112.086 40.4044 112.398 40.4005 112.703 40.3937C113.373 40.3853 114.042 40.3262 114.703 40.2169C115.367 40.1022 116.01 39.8896 116.611 39.5861C117.21 39.2822 117.756 38.8842 118.229 38.4074C118.705 37.9346 119.103 37.3898 119.41 36.7931C119.712 36.1935 119.921 35.5513 120.029 34.8888C120.141 34.227 120.203 33.5579 120.215 32.8869C120.219 32.5763 120.219 32.2755 120.219 31.965C120.227 31.6017 120.227 31.2404 120.227 30.8712V9.94251C120.227 9.5763 120.227 9.21302 120.219 8.85072C120.219 8.54408 120.219 8.23646 120.215 7.92982C120.203 7.2588 120.141 6.58962 120.029 5.92782C119.921 5.26566 119.712 4.62388 119.41 4.0245C118.793 2.82158 117.814 1.84241 116.611 1.2247C116.01 0.921947 115.367 0.71062 114.703 0.5977C114.042 0.487483 113.373 0.428388 112.703 0.42094C112.398 0.41606 112.086 0.4102 111.781 0.40825C111.422 0.40625 111.057 0.40625 110.697 0.40625V0.40638Z"
                                      fill="#A6A6A6" />
                                    <path
                                      d="M9.00541 39.5312C8.70073 39.5312 8.40341 39.5274 8.10112 39.5205C7.47491 39.5124 6.85015 39.4579 6.23198 39.3574C5.65557 39.2582 5.09719 39.0735 4.57524 38.8096C4.05809 38.5478 3.5864 38.2045 3.17824 37.7929C2.76418 37.3862 2.41946 36.9145 2.15773 36.3965C1.89312 35.875 1.71 35.3162 1.61473 34.7393C1.51186 34.1194 1.4562 33.4926 1.44823 32.8643C1.44189 32.6534 1.43359 31.9512 1.43359 31.9512V8.85059C1.43359 8.85059 1.44243 8.15918 1.44828 7.95605C1.45591 7.32873 1.51125 6.7029 1.61381 6.08398C1.70925 5.5055 1.89252 4.945 2.15727 4.42188C2.41804 3.90419 2.76085 3.43211 3.17241 3.02393C3.58352 2.61187 4.05672 2.26685 4.57475 2.00146C5.0955 1.73834 5.65283 1.55498 6.22807 1.45752C6.84827 1.35609 7.47519 1.30125 8.10358 1.29346L9.0059 1.28125H111.774L112.688 1.29395C113.31 1.30135 113.931 1.3557 114.546 1.45654C115.127 1.55523 115.69 1.73987 116.217 2.00439C117.255 2.53924 118.099 3.38541 118.632 4.42432C118.892 4.94383 119.073 5.49976 119.167 6.07324C119.271 6.69724 119.329 7.32799 119.341 7.96045C119.344 8.24365 119.344 8.54785 119.344 8.85059C119.352 9.22559 119.352 9.58252 119.352 9.94238V30.871C119.352 31.2344 119.352 31.5889 119.344 31.9463C119.344 32.2715 119.344 32.5693 119.34 32.8759C119.328 33.4971 119.271 34.1166 119.169 34.7295C119.076 35.3105 118.894 35.8738 118.629 36.3994C118.365 36.9119 118.023 37.3795 117.613 37.7851C117.205 38.1989 116.732 38.5442 116.214 38.8077C115.689 39.0736 115.126 39.259 114.546 39.3574C113.928 39.4584 113.303 39.5129 112.677 39.5205C112.384 39.5274 112.077 39.5312 111.779 39.5312L110.695 39.5332L9.00541 39.5312Z"
                                      fill="black" />
                                    <path
                                      d="M25.3325 20.7076C25.3432 19.8729 25.5649 19.0545 25.977 18.3286C26.389 17.6026 26.9779 16.9927 27.689 16.5555C27.2373 15.9103 26.6413 15.3794 25.9485 15.0048C25.2557 14.6303 24.4851 14.4224 23.6979 14.3978C22.0186 14.2216 20.3907 15.4026 19.535 15.4026C18.6627 15.4026 17.3452 14.4153 15.9265 14.4445C15.0088 14.4742 14.1144 14.741 13.3306 15.2191C12.5467 15.6971 11.9 16.3701 11.4535 17.1724C9.51955 20.5208 10.9621 25.4418 12.8147 28.1485C13.7416 29.4738 14.8249 30.9543 16.2424 30.9018C17.6294 30.8442 18.1475 30.0173 19.8218 30.0173C21.4805 30.0173 21.9666 30.9018 23.4128 30.8684C24.9012 30.8442 25.8389 29.5371 26.7333 28.1992C27.3993 27.2549 27.9117 26.2112 28.2517 25.1067C27.387 24.741 26.6491 24.1288 26.13 23.3465C25.6108 22.5642 25.3335 21.6464 25.3325 20.7076Z"
                                      fill="white" />
                                    <path
                                      d="M22.602 12.6176C23.4136 11.6434 23.8134 10.3912 23.7165 9.12695C22.4767 9.25717 21.3315 9.84973 20.509 10.7866C20.1068 11.2442 19.7988 11.7767 19.6026 12.3534C19.4063 12.9302 19.3257 13.54 19.3653 14.148C19.9854 14.1543 20.5989 14.0199 21.1596 13.7548C21.7202 13.4898 22.2134 13.1009 22.602 12.6176Z"
                                      fill="white" />
                                    <path
                                      d="M42.8672 27.5459H38.1338L36.9971 30.9024H34.9922L39.4756 18.4844H41.5586L46.042 30.9024H44.0029L42.8672 27.5459ZM38.624 25.9971H42.376L40.5264 20.5498H40.4746L38.624 25.9971Z"
                                      fill="white" />
                                    <path
                                      d="M55.7237 26.3757C55.7237 29.1892 54.2178 30.9968 51.9453 30.9968C51.3697 31.0269 50.7972 30.8943 50.2934 30.6142C49.7896 30.334 49.3749 29.9177 49.0967 29.4128H49.0537V33.8972H47.1953V21.8484H48.9942V23.3542H49.0284C49.3193 22.8517 49.741 22.4376 50.2487 22.1557C50.7563 21.8739 51.3308 21.7349 51.9112 21.7536C54.209 21.7536 55.7237 23.57 55.7237 26.3757ZM53.8135 26.3757C53.8135 24.5427 52.8662 23.3376 51.4209 23.3376C50.001 23.3376 49.0459 24.5681 49.0459 26.3757C49.0459 28.1999 50.001 29.4216 51.4209 29.4216C52.8662 29.4216 53.8135 28.2253 53.8135 26.3757Z"
                                      fill="white" />
                                    <path
                                      d="M65.6885 26.3757C65.6885 29.1892 64.1826 30.9968 61.9102 30.9968C61.3345 31.0269 60.762 30.8943 60.2582 30.6142C59.7544 30.334 59.3397 29.9177 59.0616 29.4128H59.0186V33.8972H57.1602V21.8483H58.959V23.3542H58.9932C59.2841 22.8517 59.7058 22.4375 60.2135 22.1557C60.7211 21.8739 61.2957 21.7349 61.876 21.7536C64.1739 21.7536 65.6885 23.57 65.6885 26.3757ZM63.7783 26.3757C63.7783 24.5427 62.8311 23.3376 61.3858 23.3376C59.9658 23.3376 59.0108 24.5681 59.0108 26.3757C59.0108 28.1999 59.9658 29.4216 61.3858 29.4216C62.8311 29.4216 63.7784 28.2253 63.7784 26.3757H63.7783Z"
                                      fill="white" />
                                    <path
                                      d="M72.2735 27.4424C72.4112 28.6739 73.6075 29.4824 75.2422 29.4824C76.8086 29.4824 77.9356 28.6738 77.9356 27.5635C77.9356 26.5996 77.2559 26.0225 75.6465 25.627L74.0371 25.2393C71.7569 24.6885 70.6983 23.6221 70.6983 21.8916C70.6983 19.749 72.5655 18.2773 75.2168 18.2773C77.8408 18.2773 79.6397 19.749 79.7002 21.8916H77.8242C77.7119 20.6523 76.6875 19.9043 75.1904 19.9043C73.6934 19.9043 72.669 20.6611 72.669 21.7627C72.669 22.6406 73.3233 23.1572 74.9238 23.5527L76.292 23.8886C78.8398 24.4912 79.8984 25.5146 79.8984 27.331C79.8984 29.6543 78.0479 31.1093 75.1045 31.1093C72.3506 31.1093 70.4912 29.6884 70.3711 27.4423L72.2735 27.4424Z"
                                      fill="white" />
                                    <path
                                      d="M83.9101 19.7061V21.8486H85.6318V23.3203H83.9101V28.3115C83.9101 29.0869 84.2549 29.4482 85.0117 29.4482C85.2161 29.4447 85.4202 29.4303 85.623 29.4052V30.8681C85.2828 30.9317 84.9369 30.9605 84.5908 30.9541C82.7578 30.9541 82.043 30.2656 82.043 28.5097V23.3203H80.7266V21.8486H82.0429V19.7061H83.9101Z"
                                      fill="white" />
                                    <path
                                      d="M86.6289 26.376C86.6289 23.5273 88.3066 21.7373 90.9229 21.7373C93.5479 21.7373 95.2178 23.5273 95.2178 26.376C95.2178 29.2324 93.5566 31.0146 90.9229 31.0146C88.29 31.0146 86.6289 29.2324 86.6289 26.376ZM93.3242 26.376C93.3242 24.4219 92.4287 23.2686 90.9228 23.2686C89.417 23.2686 88.5225 24.4307 88.5225 26.376C88.5225 28.3379 89.417 29.4824 90.9228 29.4824C92.4287 29.4824 93.3242 28.3379 93.3242 26.376H93.3242Z"
                                      fill="white" />
                                    <path
                                      d="M96.75 21.8483H98.5225V23.3893H98.5655C98.6854 22.908 98.9673 22.4826 99.3639 22.1848C99.7605 21.8869 100.248 21.7346 100.743 21.7535C100.957 21.7528 101.171 21.776 101.38 21.8229V23.5611C101.11 23.4785 100.828 23.4406 100.545 23.4488C100.275 23.4379 100.006 23.4855 99.756 23.5884C99.5061 23.6913 99.2815 23.847 99.0975 24.0449C98.9135 24.2428 98.7746 24.4781 98.6901 24.7348C98.6057 24.9915 98.5778 25.2634 98.6084 25.5318V30.902H96.75L96.75 21.8483Z"
                                      fill="white" />
                                    <path
                                      d="M109.948 28.2432C109.698 29.8867 108.098 31.0146 106.05 31.0146C103.416 31.0146 101.781 29.25 101.781 26.4189C101.781 23.5791 103.425 21.7373 105.972 21.7373C108.477 21.7373 110.052 23.458 110.052 26.2031V26.8398H103.657V26.9521C103.628 27.2853 103.669 27.621 103.78 27.9369C103.89 28.2527 104.066 28.5415 104.296 28.784C104.527 29.0266 104.806 29.2173 105.116 29.3436C105.425 29.4699 105.759 29.5289 106.093 29.5166C106.532 29.5577 106.973 29.456 107.349 29.2266C107.726 28.9972 108.019 28.6522 108.184 28.2432L109.948 28.2432ZM103.666 25.541H108.192C108.209 25.2414 108.164 24.9416 108.059 24.6604C107.954 24.3792 107.793 24.1227 107.584 23.9069C107.376 23.6911 107.125 23.5208 106.847 23.4066C106.57 23.2923 106.272 23.2367 105.972 23.2432C105.669 23.2414 105.369 23.2995 105.089 23.4142C104.809 23.529 104.554 23.6981 104.34 23.9117C104.126 24.1253 103.956 24.3793 103.84 24.6589C103.724 24.9386 103.665 25.2384 103.666 25.541V25.541Z"
                                      fill="white" />
                                    <path
                                      d="M38.3896 9.13763C38.7793 9.10967 39.1702 9.16853 39.5343 9.30996C39.8984 9.4514 40.2266 9.67188 40.4952 9.9555C40.7638 10.2391 40.9661 10.5788 41.0875 10.9501C41.2089 11.3214 41.2464 11.715 41.1973 12.1025C41.1973 14.0087 40.167 15.1045 38.3896 15.1045H36.2344V9.13763H38.3896ZM37.1611 14.2606H38.2861C38.5645 14.2773 38.8431 14.2316 39.1017 14.127C39.3602 14.0224 39.5922 13.8614 39.7807 13.6559C39.9692 13.4503 40.1094 13.2053 40.1913 12.9387C40.2732 12.6721 40.2946 12.3906 40.2539 12.1146C40.2916 11.8398 40.2681 11.56 40.1849 11.2954C40.1018 11.0307 39.9612 10.7877 39.7731 10.5838C39.5851 10.3798 39.3542 10.22 39.0971 10.1158C38.8401 10.0116 38.5631 9.96547 38.2861 9.98084H37.1611V14.2606Z"
                                      fill="white" />
                                    <path
                                      d="M42.2444 12.851C42.2161 12.5551 42.25 12.2565 42.3438 11.9745C42.4376 11.6924 42.5894 11.4331 42.7893 11.2131C42.9893 10.9931 43.233 10.8173 43.5048 10.6971C43.7767 10.5768 44.0707 10.5146 44.368 10.5146C44.6652 10.5146 44.9592 10.5768 45.2311 10.6971C45.5029 10.8173 45.7466 10.9931 45.9466 11.2131C46.1465 11.4331 46.2983 11.6924 46.3921 11.9745C46.486 12.2565 46.5198 12.5551 46.4915 12.851C46.5203 13.1472 46.4869 13.4462 46.3933 13.7288C46.2997 14.0113 46.148 14.2711 45.948 14.4915C45.7481 14.7119 45.5042 14.8881 45.232 15.0086C44.9599 15.1291 44.6656 15.1914 44.368 15.1914C44.0703 15.1914 43.776 15.1291 43.5039 15.0086C43.2318 14.8881 42.9879 14.7119 42.7879 14.4915C42.5879 14.2711 42.4362 14.0113 42.3426 13.7288C42.249 13.4462 42.2156 13.1472 42.2444 12.851ZM45.5774 12.851C45.5774 11.875 45.1389 11.3042 44.3694 11.3042C43.597 11.3042 43.1624 11.875 43.1624 12.851C43.1624 13.8349 43.597 14.4013 44.3694 14.4013C45.139 14.4013 45.5774 13.831 45.5774 12.851H45.5774Z"
                                      fill="white" />
                                    <path
                                      d="M52.1367 15.1045H51.2148L50.2842 11.7881H50.2139L49.2871 15.1045H48.374L47.1328 10.6016H48.0342L48.8408 14.0376H48.9072L49.833 10.6016H50.6856L51.6113 14.0376H51.6816L52.4844 10.6016H53.373L52.1367 15.1045Z"
                                      fill="white" />
                                    <path
                                      d="M54.418 10.6011H55.2734V11.3164H55.3398C55.4525 11.0595 55.6425 10.8442 55.8834 10.7003C56.1242 10.5565 56.404 10.4915 56.6836 10.5142C56.9027 10.4977 57.1227 10.5308 57.3273 10.6109C57.5319 10.691 57.7158 10.8161 57.8655 10.9769C58.0152 11.1377 58.1268 11.3302 58.192 11.54C58.2572 11.7498 58.2743 11.9716 58.2422 12.189V15.104H57.3535V12.4122C57.3535 11.6885 57.0391 11.3287 56.3818 11.3287C56.2331 11.3217 56.0846 11.347 55.9465 11.4029C55.8085 11.4587 55.6841 11.5437 55.582 11.6521C55.4799 11.7605 55.4024 11.8897 55.3549 12.0308C55.3073 12.1719 55.2909 12.3217 55.3066 12.4698V15.104H54.418L54.418 10.6011Z"
                                      fill="white" />
                                    <path d="M59.6562 8.84375H60.5449V15.1045H59.6562V8.84375Z" fill="white" />
                                    <path
                                      d="M61.7796 12.8511C61.7513 12.5552 61.7851 12.2566 61.879 11.9745C61.9729 11.6924 62.1246 11.4331 62.3246 11.2131C62.5246 10.9931 62.7683 10.8173 63.0402 10.6971C63.312 10.5768 63.606 10.5146 63.9033 10.5146C64.2006 10.5146 64.4946 10.5768 64.7665 10.6971C65.0384 10.8173 65.2821 10.9931 65.4821 11.2131C65.682 11.4331 65.8338 11.6924 65.9277 11.9745C66.0215 12.2566 66.0554 12.5552 66.0271 12.8511C66.0559 13.1473 66.0224 13.4463 65.9288 13.7289C65.8352 14.0114 65.6835 14.2712 65.4835 14.4916C65.2835 14.712 65.0396 14.8881 64.7674 15.0087C64.4953 15.1292 64.201 15.1915 63.9033 15.1915C63.6057 15.1915 63.3114 15.1292 63.0392 15.0087C62.7671 14.8881 62.5232 14.712 62.3232 14.4916C62.1232 14.2712 61.9715 14.0114 61.8778 13.7289C61.7842 13.4463 61.7507 13.1473 61.7796 12.8511ZM65.1126 12.8511C65.1126 11.875 64.6741 11.3042 63.9046 11.3042C63.1321 11.3042 62.6976 11.875 62.6976 12.8511C62.6976 13.835 63.1321 14.4014 63.9046 14.4014C64.6741 14.4014 65.1126 13.8311 65.1126 12.8511H65.1126Z"
                                      fill="white" />
                                    <path
                                      d="M66.9648 13.831C66.9648 13.0205 67.5684 12.5532 68.6396 12.4868L69.8594 12.4165V12.0278C69.8594 11.5522 69.5449 11.2837 68.9375 11.2837C68.4414 11.2837 68.0977 11.4658 67.999 11.7842H67.1387C67.2295 11.0107 67.957 10.5146 68.9785 10.5146C70.1074 10.5146 70.7441 11.0766 70.7441 12.0278V15.1045H69.8887V14.4717H69.8184C69.6756 14.6987 69.4752 14.8837 69.2376 15.0079C69 15.1321 68.7337 15.1911 68.4658 15.1787C68.2768 15.1983 68.0857 15.1782 67.905 15.1195C67.7242 15.0608 67.5578 14.9649 67.4163 14.8379C67.2749 14.7109 67.1617 14.5557 67.0839 14.3823C67.0062 14.2089 66.9656 14.0211 66.9648 13.831ZM69.8594 13.4463V13.0698L68.7598 13.1401C68.1396 13.1816 67.8584 13.3926 67.8584 13.7895C67.8584 14.1948 68.2099 14.4306 68.6934 14.4306C68.835 14.445 68.9781 14.4307 69.1141 14.3886C69.2501 14.3465 69.3763 14.2775 69.4851 14.1856C69.5938 14.0938 69.683 13.981 69.7474 13.854C69.8117 13.727 69.8498 13.5883 69.8594 13.4463Z"
                                      fill="white" />
                                    <path
                                      d="M71.9102 12.8511C71.9102 11.4282 72.6416 10.5269 73.7793 10.5269C74.0607 10.5139 74.34 10.5813 74.5845 10.7212C74.8291 10.8611 75.0287 11.0677 75.1602 11.3169H75.2266V8.84375H76.1152V15.1045H75.2637V14.3931H75.1934C75.0518 14.6406 74.8451 14.8446 74.5959 14.9831C74.3466 15.1216 74.0642 15.1892 73.7793 15.1787C72.6338 15.1787 71.9102 14.2774 71.9102 12.8511ZM72.8282 12.8511C72.8282 13.8062 73.2784 14.3809 74.0313 14.3809C74.7803 14.3809 75.2432 13.7979 75.2432 12.855C75.2432 11.9165 74.7754 11.3252 74.0313 11.3252C73.2832 11.3252 72.8281 11.9038 72.8281 12.8511H72.8282Z"
                                      fill="white" />
                                    <path
                                      d="M79.7952 12.851C79.7669 12.5551 79.8007 12.2565 79.8946 11.9745C79.9884 11.6924 80.1402 11.4331 80.3401 11.2131C80.5401 10.9931 80.7838 10.8173 81.0556 10.6971C81.3275 10.5768 81.6215 10.5146 81.9187 10.5146C82.216 10.5146 82.51 10.5768 82.7818 10.6971C83.0537 10.8173 83.2974 10.9931 83.4973 11.2131C83.6973 11.4331 83.849 11.6924 83.9429 11.9745C84.0367 12.2565 84.0706 12.5551 84.0423 12.851C84.0711 13.1472 84.0377 13.4462 83.9441 13.7288C83.8505 14.0113 83.6988 14.2711 83.4988 14.4915C83.2988 14.7119 83.0549 14.8881 82.7828 15.0086C82.5107 15.1291 82.2164 15.1914 81.9187 15.1914C81.6211 15.1914 81.3268 15.1291 81.0547 15.0086C80.7825 14.8881 80.5386 14.7119 80.3386 14.4915C80.1387 14.2711 79.987 14.0113 79.8934 13.7288C79.7998 13.4462 79.7664 13.1472 79.7952 12.851ZM83.1282 12.851C83.1282 11.875 82.6897 11.3042 81.9202 11.3042C81.1477 11.3042 80.7132 11.875 80.7132 12.851C80.7132 13.8349 81.1478 14.4013 81.9202 14.4013C82.6897 14.4013 83.1282 13.831 83.1282 12.851Z"
                                      fill="white" />
                                    <path
                                      d="M85.2344 10.6011H86.0898V11.3164H86.1563C86.2689 11.0595 86.4589 10.8442 86.6998 10.7003C86.9407 10.5565 87.2204 10.4915 87.5 10.5142C87.7191 10.4977 87.9391 10.5308 88.1437 10.6109C88.3483 10.691 88.5323 10.8161 88.6819 10.9769C88.8316 11.1377 88.9432 11.3302 89.0084 11.54C89.0736 11.7498 89.0908 11.9716 89.0586 12.189V15.104H88.1699V12.4122C88.1699 11.6885 87.8555 11.3287 87.1982 11.3287C87.0495 11.3217 86.901 11.347 86.7629 11.4029C86.6249 11.4587 86.5005 11.5437 86.3984 11.6521C86.2963 11.7605 86.2188 11.8897 86.1713 12.0308C86.1237 12.1719 86.1073 12.3217 86.123 12.4698V15.104H85.2344V10.6011Z"
                                      fill="white" />
                                    <path
                                      d="M94.0771 9.48047V10.6221H95.0527V11.3706H94.0771V13.686C94.0771 14.1577 94.2715 14.3643 94.7139 14.3643C94.8271 14.3639 94.9403 14.357 95.0527 14.3437V15.084C94.8932 15.1125 94.7315 15.1277 94.5693 15.1294C93.5811 15.1294 93.1875 14.7817 93.1875 13.9136V11.3706H92.4727V10.622H93.1875V9.48047H94.0771Z"
                                      fill="white" />
                                    <path
                                      d="M96.2695 8.84375H97.1504V11.3252H97.2207C97.3388 11.0659 97.5341 10.8493 97.7797 10.7049C98.0254 10.5606 98.3097 10.4955 98.5937 10.5186C98.8117 10.5067 99.0295 10.5431 99.2318 10.6251C99.4341 10.7072 99.6158 10.8328 99.7639 10.9932C99.912 11.1535 100.023 11.3446 100.089 11.5527C100.155 11.7608 100.174 11.9809 100.144 12.1973V15.1045H99.2549V12.4165C99.2549 11.6973 98.9199 11.333 98.292 11.333C98.1393 11.3205 97.9857 11.3415 97.8419 11.3945C97.6981 11.4476 97.5677 11.5314 97.4597 11.6401C97.3517 11.7489 97.2687 11.8799 97.2167 12.024C97.1646 12.1682 97.1447 12.3219 97.1582 12.4746V15.1045H96.2696L96.2695 8.84375Z"
                                      fill="white" />
                                    <path
                                      d="M105.324 13.8887C105.203 14.3003 104.942 14.6563 104.585 14.8944C104.228 15.1326 103.799 15.2377 103.373 15.1915C103.076 15.1993 102.781 15.1425 102.509 15.025C102.236 14.9074 101.993 14.732 101.795 14.5109C101.597 14.2897 101.449 14.0282 101.363 13.7444C101.276 13.4605 101.252 13.1612 101.293 12.8673C101.253 12.5724 101.277 12.2724 101.364 11.9878C101.45 11.7031 101.597 11.4403 101.794 11.2173C101.991 10.9942 102.233 10.816 102.505 10.6948C102.777 10.5736 103.071 10.5122 103.369 10.5147C104.622 10.5147 105.378 11.3707 105.378 12.7847V13.0948H102.198V13.1446C102.184 13.3099 102.205 13.4762 102.259 13.6329C102.313 13.7897 102.399 13.9334 102.512 14.0549C102.625 14.1763 102.762 14.2728 102.915 14.3382C103.067 14.4036 103.231 14.4365 103.397 14.4346C103.61 14.4601 103.825 14.4219 104.016 14.3246C104.207 14.2274 104.364 14.0757 104.468 13.8887L105.324 13.8887ZM102.198 12.4376H104.472C104.484 12.2864 104.463 12.1346 104.412 11.9919C104.361 11.8492 104.281 11.7187 104.176 11.6089C104.072 11.499 103.946 11.4122 103.806 11.354C103.666 11.2959 103.515 11.2676 103.364 11.2711C103.21 11.2691 103.058 11.298 102.915 11.3559C102.773 11.4139 102.644 11.4997 102.535 11.6085C102.426 11.7172 102.34 11.8465 102.283 11.9889C102.225 12.1313 102.196 12.2839 102.198 12.4376H102.198Z"
                                      fill="white" />
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_5730_20583">
                                      <rect width="119.664" height="40" fill="white"
                                        transform="translate(0.5625 0.40625)" />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="vs-portfolio-item" style="background-color: #e9ffe6">
                  <div class="row">
                    <div class="col col-12 col-md-4 col-lg-4">
                      <div class="vs-portfolio-item-img">
                        <img src="{{asset('web-assets/images/new-portfolio/Fidelity -Stock trading app.png')}}"
                          alt="demand-grocery-img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                      <div class="vs-portfolio-details">
                        <div class="vs-portfolio-heading">
                          <div class="vs-portfolio-heading-top">
                            <div class="vs-portfolio-logo">
                              <img src="{{asset('web-assets/images/new-portfolio/logo/Fidelity -Stock trading app.png')}}"
                                alt="app-logo" class="img-fluid" />
                            </div>
                            <div class="vs-portfolio-heading__inner">
                              <h3 class="vs-portfolio-title">
                                <span>Fidelity -Stock trading app</span>
                              </h3>
                            </div>
                          </div>
                          <p class="vs-portfolio-heading-desccription">
                            Fidelity app gives users mobile access to a
                            broad range of investments, expert insights, and
                            tools to help you make smart investing, saving,
                            and financial planning decisions.
                          </p>

                          <div class="vs-portfolio-body">
                            <div class="vs-portfolio-info">
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Region</label>
                                <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                  <img style="padding-right: 10px" width="25%"
                                    src="{{asset('web-assets/images/new-portfolio/flags/small/US.png')}}" alt="app-logo"
                                    class="img-fluid" />

                                  <span>US</span>
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Duration</label>
                                <p class="vs-portfolio-info-text">
                                  4 Months
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Platforms</label>
                                <p class="vs-portfolio-info-text">
                                  Android, iOS
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Technology</label>
                                <p class="vs-portfolio-info-text">
                                  Figma, Flutter, Firebase
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="vs-portfolio-footer">


                            <div class="vs-portfolio-footer-item">
                              <a href="https://play.google.com/store/apps/details?id=com.fidelity.android&amp;hl=en_IN&amp;gl=US"
                                class="vs-portfolio-footer-link" target="_blank">
                                <svg width="136" height="41" viewBox="0 0 136 41" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_5730_20582)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 40.4062H5.56434C2.80762 40.4062 0.5625 38.1519 0.5625 35.4062V5.40625C0.5625 2.65064 2.80762 0.40625 5.56434 0.40625H130.561C133.315 0.40625 135.562 2.65064 135.562 5.40625V35.4062C135.562 38.1519 133.315 40.4062 130.561 40.4062Z"
                                      fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 1.20675C132.873 1.20675 134.765 3.09453 134.765 5.40625V35.4062C134.765 37.718 132.885 39.6058 130.561 39.6058H5.56434C3.25217 39.6058 1.35971 37.718 1.35971 35.4062V5.40625C1.35971 3.09453 3.23975 1.20675 5.56434 1.20675H130.561ZM130.561 0.40625H5.56434C2.80762 0.40625 0.5625 2.66061 0.5625 5.40625V35.4062C0.5625 38.1619 2.80762 40.4062 5.56434 40.4062H130.561C133.315 40.4062 135.562 38.1619 135.562 35.4062V5.40625C135.562 2.66061 133.315 0.40625 130.561 0.40625Z"
                                      fill="#A6A6A6" />
                                    <path
                                      d="M71.6816 13.6382C70.7801 13.6382 70.0202 13.3215 69.4192 12.6981C68.8231 12.0921 68.4903 11.2567 68.5052 10.4038C68.5052 9.49357 68.8132 8.723 69.4192 8.11202C70.0177 7.48858 70.7776 7.17188 71.6792 7.17188C72.5707 7.17188 73.3307 7.48858 73.9416 8.11202C74.5476 8.74295 74.8556 9.51352 74.8556 10.4038C74.8456 11.3165 74.5377 12.0871 73.9416 12.6956C73.3431 13.324 72.5832 13.6382 71.6816 13.6382ZM44.8571 13.6382C43.9755 13.6382 43.2106 13.3265 42.5847 12.7105C41.9638 12.0971 41.6484 11.3215 41.6484 10.4063C41.6484 9.49108 41.9638 8.71552 42.5847 8.10205C43.1982 7.48609 43.9631 7.17437 44.8571 7.17437C45.2942 7.17437 45.7189 7.26165 46.1262 7.43871C46.5261 7.61078 46.8514 7.84519 47.0923 8.13197L47.1519 8.20429L46.4789 8.86764L46.4093 8.78534C46.0294 8.33148 45.5202 8.10953 44.8472 8.10953C44.2462 8.10953 43.7222 8.32399 43.29 8.74794C42.8554 9.17437 42.6344 9.73297 42.6344 10.4088C42.6344 11.0846 42.8554 11.6432 43.29 12.0696C43.7222 12.4936 44.2462 12.708 44.8472 12.708C45.488 12.708 46.0269 12.4936 46.4466 12.0696C46.6949 11.8203 46.8489 11.4711 46.9036 11.0297H44.7454V10.0971H47.8299L47.8423 10.1819C47.8647 10.339 47.887 10.5011 47.887 10.6507C47.887 11.511 47.6288 12.2068 47.1171 12.7205C46.536 13.329 45.776 13.6382 44.8571 13.6382ZM80.523 13.506H79.5718L76.6586 8.82524L76.6835 9.66813V13.5035H75.7323V7.30654H76.8176L76.8474 7.35392L79.5867 11.7629L79.5618 10.9225V7.30654H80.523V13.506ZM64.5341 13.506H63.5705V8.23921H61.8991V7.30654H66.203V8.23921H64.5316V13.506H64.5341ZM61.1143 13.506H60.1531V7.30654H61.1143V13.506ZM55.7126 13.506H54.7515V8.23921H53.0801V7.30654H57.384V8.23921H55.7126V13.506ZM52.4716 13.4961H48.7861V7.30654H52.4716V8.23921H49.7497V9.93995H52.2059V10.8626H49.7497V12.5634H52.4716V13.4961ZM70.1245 12.0572C70.5541 12.4886 71.0757 12.7055 71.6816 12.7055C72.305 12.7055 72.8141 12.4936 73.2388 12.0572C73.661 11.6332 73.8746 11.0771 73.8746 10.4063C73.8746 9.73547 73.661 9.17686 73.2413 8.75542C72.8116 8.32399 72.2876 8.10704 71.6841 8.10704C71.0608 8.10704 70.5516 8.31901 70.1294 8.75542C69.7072 9.17936 69.4937 9.73547 69.4937 10.4063C69.4937 11.0771 69.7048 11.6357 70.1245 12.0572Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M68.4134 22.1617C66.0664 22.1617 64.164 23.9497 64.164 26.416C64.164 28.8599 66.0788 30.6704 68.4134 30.6704C70.7603 30.6704 72.6627 28.8699 72.6627 26.416C72.6627 23.9497 70.7603 22.1617 68.4134 22.1617ZM68.4134 28.9846C67.1294 28.9846 66.0242 27.9173 66.0242 26.4061C66.0242 24.8724 67.1319 23.8275 68.4134 23.8275C69.6973 23.8275 70.8025 24.8724 70.8025 26.4061C70.805 27.9273 69.6973 28.9846 68.4134 28.9846ZM59.1423 22.1617C56.7954 22.1617 54.893 23.9497 54.893 26.416C54.893 28.8599 56.8078 30.6704 59.1423 30.6704C61.4893 30.6704 63.3916 28.8699 63.3916 26.416C63.3916 23.9497 61.4868 22.1617 59.1423 22.1617ZM59.1423 28.9846C57.8583 28.9846 56.7531 27.9173 56.7531 26.4061C56.7531 24.8724 57.8608 23.8275 59.1423 23.8275C60.4263 23.8275 61.5315 24.8724 61.5315 26.4061C61.5315 27.9273 60.4263 28.9846 59.1423 28.9846ZM48.1104 23.4609V25.2614H52.4144C52.2828 26.2714 51.95 27.017 51.4409 27.5283C50.81 28.1617 49.8365 28.8499 48.1204 28.8499C45.4754 28.8499 43.4066 26.7053 43.4066 24.0494C43.4066 21.3936 45.4754 19.2489 48.1204 19.2489C49.5484 19.2489 50.589 19.815 51.3614 20.5382L52.633 19.2614C51.5601 18.229 50.132 17.4385 48.1303 17.4385C44.5019 17.4385 41.457 20.4061 41.457 24.0395C41.457 27.6829 44.4994 30.6405 48.1303 30.6405C50.0898 30.6405 51.5601 29.9971 52.7224 28.7851C53.907 27.5956 54.282 25.9173 54.282 24.5632C54.282 24.1417 54.2497 23.7627 54.1827 23.441H48.1079C48.1104 23.4385 48.1104 23.4609 48.1104 23.4609ZM93.2338 24.8624C92.8787 23.9073 91.8058 22.1517 89.6054 22.1517C87.4248 22.1517 85.6119 23.8749 85.6119 26.4061C85.6119 28.7951 87.405 30.6604 89.8165 30.6604C91.7536 30.6604 92.8812 29.4709 93.3456 28.7726L91.9076 27.8051C91.4308 28.5158 90.7677 28.9821 89.8264 28.9821C88.8752 28.9821 88.2096 28.5482 87.7676 27.6928L93.4325 25.3362C93.4325 25.3387 93.2338 24.8624 93.2338 24.8624ZM87.4571 26.2839C87.4124 24.6405 88.7287 23.8051 89.67 23.8051C90.4125 23.8051 91.0309 24.1716 91.242 24.7053L87.4571 26.2839ZM82.8551 30.4061H84.7153V17.9073H82.8551V30.4061ZM79.8004 23.1068H79.7333C79.3136 22.6056 78.5164 22.1517 77.4981 22.1517C75.3846 22.1517 73.4376 24.0195 73.4376 26.4185C73.4376 28.8076 75.3747 30.6529 77.4981 30.6529C78.504 30.6529 79.3136 30.1966 79.7333 29.6854H79.8004V30.2963C79.8004 31.9198 78.9361 32.7951 77.5428 32.7951C76.4029 32.7951 75.6951 31.9721 75.407 31.2839L73.7902 31.9622C74.2546 33.0844 75.4939 34.4734 77.5404 34.4734C79.7209 34.4734 81.5687 33.1841 81.5687 30.0395V22.4061H79.8103V23.1068C79.8128 23.1068 79.8004 23.1068 79.8004 23.1068ZM77.6645 28.9846C76.3806 28.9846 75.3077 27.9073 75.3077 26.4185C75.3077 24.9173 76.3806 23.83 77.6645 23.83C78.9361 23.83 79.9221 24.9297 79.9221 26.4185C79.9345 27.9073 78.9386 28.9846 77.6645 28.9846ZM101.944 17.9073H97.4956V30.4061H99.3558V25.6729H101.946C104.005 25.6729 106.029 24.1741 106.029 21.7951C106.029 19.416 104.012 17.9073 101.944 17.9073ZM101.998 23.9273H99.3533V19.638H101.998C103.392 19.638 104.179 20.7926 104.179 21.7826C104.179 22.7627 103.382 23.9273 101.998 23.9273ZM113.485 22.1392C112.134 22.1392 110.74 22.7402 110.164 24.0494L111.813 24.7377C112.168 24.0494 112.819 23.815 113.507 23.815C114.471 23.815 115.444 24.3936 115.466 25.426V25.5582C115.134 25.3686 114.404 25.0794 113.529 25.0794C111.749 25.0794 109.943 26.0569 109.943 27.8898C109.943 29.5682 111.403 30.6455 113.03 30.6455C114.279 30.6455 114.967 30.0794 115.397 29.4235H115.464V30.3911H117.257V25.6031C117.257 23.3736 115.608 22.1392 113.485 22.1392ZM113.251 28.9846C112.643 28.9846 111.791 28.6854 111.791 27.9173C111.791 26.9497 112.854 26.5831 113.76 26.5831C114.58 26.5831 114.967 26.7602 115.454 27.0046C115.32 28.1268 114.376 28.9746 113.251 28.9846ZM123.799 22.4061L121.663 27.8275H121.596L119.383 22.4061H117.381L120.702 29.9846L118.809 34.1966H120.746L125.855 22.4061H123.799ZM107.055 30.4061H108.915V17.9073H107.055V30.4061Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.9545 7.9394C10.6664 8.25112 10.5 8.72743 10.5 9.35087V31.4631C10.5 32.0865 10.6664 32.5628 10.9644 32.8621L11.0414 32.9294L23.3796 20.5404V20.2636L11.0315 7.87207L10.9545 7.9394Z"
                                      fill="url(#paint0_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4824 24.6835L23.3672 20.5513V20.2621L27.4824 16.1299L27.5718 16.1847L32.4396 18.9628C33.8329 19.7508 33.8329 21.0526 32.4396 21.8506L27.5718 24.6286L27.4824 24.6835Z"
                                      fill="url(#paint1_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 24.6282L23.3683 20.4062L10.9531 32.8726C11.4076 33.3614 12.1701 33.4162 13.0219 32.9399L27.5729 24.6282Z"
                                      fill="url(#paint2_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 16.1847L13.0219 7.88543C12.1701 7.39665 11.4051 7.46399 10.9531 7.95276L23.3683 20.4066L27.5729 16.1847Z"
                                      fill="url(#paint3_linear_5730_20582)" />
                                    <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4854 24.5381L13.0336 32.7824C12.2265 33.2488 11.5063 33.2164 11.0418 32.7924L10.9648 32.8697L11.0418 32.9371C11.5063 33.3585 12.2265 33.3934 13.0336 32.9271L27.5847 24.6279L27.4854 24.5381Z"
                                      fill="black" />
                                    <path opacity="0.12" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M32.4422 21.7055L27.4727 24.5384L27.5621 24.6282L32.4298 21.8501C33.1277 21.4511 33.4704 20.9274 33.4704 20.4062C33.4282 20.8851 33.073 21.3389 32.4422 21.7055Z"
                                      fill="black" />
                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.0233 8.02954L32.442 19.1069C33.0728 19.4635 33.428 19.9298 33.4826 20.4061C33.4826 19.8849 33.1399 19.3612 32.442 18.9622L13.0233 7.88491C11.63 7.08441 10.5 7.75274 10.5 9.35124V9.49588C10.5 7.89488 11.63 7.23902 13.0233 8.02954Z"
                                      fill="white" />
                                  </g>
                                  <defs>
                                    <linearGradient id="paint0_linear_5730_20582" x1="22.2729" y1="9.11231"
                                      x2="2.49849" y2="14.3596" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#00A0FF" />
                                      <stop offset="0.00657" stop-color="#00A1FF" />
                                      <stop offset="0.2601" stop-color="#00BEFF" />
                                      <stop offset="0.5122" stop-color="#00D2FF" />
                                      <stop offset="0.7604" stop-color="#00DFFF" />
                                      <stop offset="1" stop-color="#00E3FF" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_5730_20582" x1="34.2565" y1="20.4067"
                                      x2="10.1588" y2="20.4067" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FFE000" />
                                      <stop offset="0.4087" stop-color="#FFBD00" />
                                      <stop offset="0.7754" stop-color="#FFA500" />
                                      <stop offset="1" stop-color="#FF9C00" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_5730_20582" x1="25.2866" y1="22.7036"
                                      x2="9.32386" y2="49.4601" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FF3A44" />
                                      <stop offset="1" stop-color="#C31162" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_5730_20582" x1="7.82684" y1="0.585421"
                                      x2="14.9485" y2="12.5353" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#32A071" />
                                      <stop offset="0.0685" stop-color="#2DA771" />
                                      <stop offset="0.4762" stop-color="#15CF74" />
                                      <stop offset="0.8009" stop-color="#06E775" />
                                      <stop offset="1" stop-color="#00F076" />
                                    </linearGradient>
                                    <clipPath id="clip0_5730_20582">
                                      <rect width="135" height="40" fill="white"
                                        transform="translate(0.5625 0.40625)" />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="vs-portfolio-item" style="background-color: #e0e0e0">
                  <div class="row">
                    <div class="col col-12 col-md-4 col-lg-4">
                      <div class="vs-portfolio-item-img">
                        <img src="{{asset('web-assets/images/new-portfolio/Catholic Network - Networking App.png')}}"
                          alt="demand-grocery-img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                      <div class="vs-portfolio-details">
                        <div class="vs-portfolio-heading">
                          <div class="vs-portfolio-heading-top">
                            <div class="vs-portfolio-logo">
                              <img src="{{asset('web-assets/images/new-portfolio/logo/Catholic Network - Networking App.png')}}"
                                alt="app-logo" class="img-fluid" />
                            </div>
                            <div class="vs-portfolio-heading__inner">
                              <h3 class="vs-portfolio-title">
                                <span>Catholic Network - Networking App</span>
                              </h3>
                            </div>
                          </div>
                          <p class="vs-portfolio-heading-desccription">
                            Catholic Network is a singapore based social
                            networking app from singapore. It connects
                            individuals with their faith, offering prayers,
                            readings, and community discussions. Users can
                            access daily devotionals and deepen spiritual
                            connections within the Catholic community it
                            also offers unique matching algorithm to connect
                            you with like minded individuals across the
                            globe.
                          </p>

                          <div class="vs-portfolio-body">
                            <div class="vs-portfolio-info">
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Region</label>
                                <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                  <img style="padding-right: 10px" width="25%"
                                    src="{{asset('web-assets/images/new-portfolio/flags/small/Singapore.png')}}" alt="app-logo"
                                    class="img-fluid" />

                                  <span>Singapore</span>
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Duration</label>
                                <p class="vs-portfolio-info-text">
                                  6 months
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Platforms</label>
                                <p class="vs-portfolio-info-text">
                                  Android, IOS
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Technology</label>
                                <p class="vs-portfolio-info-text">
                                  Figma, Flutter, MongoDB, Node.JS
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="vs-portfolio-footer">


                            <div class="vs-portfolio-footer-item">
                              <a href="https://play.google.com/store/apps/details?id=com.catholicnetworker"
                                class="vs-portfolio-footer-link" target="_blank">
                                <svg width="136" height="41" viewBox="0 0 136 41" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_5730_20582)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 40.4062H5.56434C2.80762 40.4062 0.5625 38.1519 0.5625 35.4062V5.40625C0.5625 2.65064 2.80762 0.40625 5.56434 0.40625H130.561C133.315 0.40625 135.562 2.65064 135.562 5.40625V35.4062C135.562 38.1519 133.315 40.4062 130.561 40.4062Z"
                                      fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 1.20675C132.873 1.20675 134.765 3.09453 134.765 5.40625V35.4062C134.765 37.718 132.885 39.6058 130.561 39.6058H5.56434C3.25217 39.6058 1.35971 37.718 1.35971 35.4062V5.40625C1.35971 3.09453 3.23975 1.20675 5.56434 1.20675H130.561ZM130.561 0.40625H5.56434C2.80762 0.40625 0.5625 2.66061 0.5625 5.40625V35.4062C0.5625 38.1619 2.80762 40.4062 5.56434 40.4062H130.561C133.315 40.4062 135.562 38.1619 135.562 35.4062V5.40625C135.562 2.66061 133.315 0.40625 130.561 0.40625Z"
                                      fill="#A6A6A6" />
                                    <path
                                      d="M71.6816 13.6382C70.7801 13.6382 70.0202 13.3215 69.4192 12.6981C68.8231 12.0921 68.4903 11.2567 68.5052 10.4038C68.5052 9.49357 68.8132 8.723 69.4192 8.11202C70.0177 7.48858 70.7776 7.17188 71.6792 7.17188C72.5707 7.17188 73.3307 7.48858 73.9416 8.11202C74.5476 8.74295 74.8556 9.51352 74.8556 10.4038C74.8456 11.3165 74.5377 12.0871 73.9416 12.6956C73.3431 13.324 72.5832 13.6382 71.6816 13.6382ZM44.8571 13.6382C43.9755 13.6382 43.2106 13.3265 42.5847 12.7105C41.9638 12.0971 41.6484 11.3215 41.6484 10.4063C41.6484 9.49108 41.9638 8.71552 42.5847 8.10205C43.1982 7.48609 43.9631 7.17437 44.8571 7.17437C45.2942 7.17437 45.7189 7.26165 46.1262 7.43871C46.5261 7.61078 46.8514 7.84519 47.0923 8.13197L47.1519 8.20429L46.4789 8.86764L46.4093 8.78534C46.0294 8.33148 45.5202 8.10953 44.8472 8.10953C44.2462 8.10953 43.7222 8.32399 43.29 8.74794C42.8554 9.17437 42.6344 9.73297 42.6344 10.4088C42.6344 11.0846 42.8554 11.6432 43.29 12.0696C43.7222 12.4936 44.2462 12.708 44.8472 12.708C45.488 12.708 46.0269 12.4936 46.4466 12.0696C46.6949 11.8203 46.8489 11.4711 46.9036 11.0297H44.7454V10.0971H47.8299L47.8423 10.1819C47.8647 10.339 47.887 10.5011 47.887 10.6507C47.887 11.511 47.6288 12.2068 47.1171 12.7205C46.536 13.329 45.776 13.6382 44.8571 13.6382ZM80.523 13.506H79.5718L76.6586 8.82524L76.6835 9.66813V13.5035H75.7323V7.30654H76.8176L76.8474 7.35392L79.5867 11.7629L79.5618 10.9225V7.30654H80.523V13.506ZM64.5341 13.506H63.5705V8.23921H61.8991V7.30654H66.203V8.23921H64.5316V13.506H64.5341ZM61.1143 13.506H60.1531V7.30654H61.1143V13.506ZM55.7126 13.506H54.7515V8.23921H53.0801V7.30654H57.384V8.23921H55.7126V13.506ZM52.4716 13.4961H48.7861V7.30654H52.4716V8.23921H49.7497V9.93995H52.2059V10.8626H49.7497V12.5634H52.4716V13.4961ZM70.1245 12.0572C70.5541 12.4886 71.0757 12.7055 71.6816 12.7055C72.305 12.7055 72.8141 12.4936 73.2388 12.0572C73.661 11.6332 73.8746 11.0771 73.8746 10.4063C73.8746 9.73547 73.661 9.17686 73.2413 8.75542C72.8116 8.32399 72.2876 8.10704 71.6841 8.10704C71.0608 8.10704 70.5516 8.31901 70.1294 8.75542C69.7072 9.17936 69.4937 9.73547 69.4937 10.4063C69.4937 11.0771 69.7048 11.6357 70.1245 12.0572Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M68.4134 22.1617C66.0664 22.1617 64.164 23.9497 64.164 26.416C64.164 28.8599 66.0788 30.6704 68.4134 30.6704C70.7603 30.6704 72.6627 28.8699 72.6627 26.416C72.6627 23.9497 70.7603 22.1617 68.4134 22.1617ZM68.4134 28.9846C67.1294 28.9846 66.0242 27.9173 66.0242 26.4061C66.0242 24.8724 67.1319 23.8275 68.4134 23.8275C69.6973 23.8275 70.8025 24.8724 70.8025 26.4061C70.805 27.9273 69.6973 28.9846 68.4134 28.9846ZM59.1423 22.1617C56.7954 22.1617 54.893 23.9497 54.893 26.416C54.893 28.8599 56.8078 30.6704 59.1423 30.6704C61.4893 30.6704 63.3916 28.8699 63.3916 26.416C63.3916 23.9497 61.4868 22.1617 59.1423 22.1617ZM59.1423 28.9846C57.8583 28.9846 56.7531 27.9173 56.7531 26.4061C56.7531 24.8724 57.8608 23.8275 59.1423 23.8275C60.4263 23.8275 61.5315 24.8724 61.5315 26.4061C61.5315 27.9273 60.4263 28.9846 59.1423 28.9846ZM48.1104 23.4609V25.2614H52.4144C52.2828 26.2714 51.95 27.017 51.4409 27.5283C50.81 28.1617 49.8365 28.8499 48.1204 28.8499C45.4754 28.8499 43.4066 26.7053 43.4066 24.0494C43.4066 21.3936 45.4754 19.2489 48.1204 19.2489C49.5484 19.2489 50.589 19.815 51.3614 20.5382L52.633 19.2614C51.5601 18.229 50.132 17.4385 48.1303 17.4385C44.5019 17.4385 41.457 20.4061 41.457 24.0395C41.457 27.6829 44.4994 30.6405 48.1303 30.6405C50.0898 30.6405 51.5601 29.9971 52.7224 28.7851C53.907 27.5956 54.282 25.9173 54.282 24.5632C54.282 24.1417 54.2497 23.7627 54.1827 23.441H48.1079C48.1104 23.4385 48.1104 23.4609 48.1104 23.4609ZM93.2338 24.8624C92.8787 23.9073 91.8058 22.1517 89.6054 22.1517C87.4248 22.1517 85.6119 23.8749 85.6119 26.4061C85.6119 28.7951 87.405 30.6604 89.8165 30.6604C91.7536 30.6604 92.8812 29.4709 93.3456 28.7726L91.9076 27.8051C91.4308 28.5158 90.7677 28.9821 89.8264 28.9821C88.8752 28.9821 88.2096 28.5482 87.7676 27.6928L93.4325 25.3362C93.4325 25.3387 93.2338 24.8624 93.2338 24.8624ZM87.4571 26.2839C87.4124 24.6405 88.7287 23.8051 89.67 23.8051C90.4125 23.8051 91.0309 24.1716 91.242 24.7053L87.4571 26.2839ZM82.8551 30.4061H84.7153V17.9073H82.8551V30.4061ZM79.8004 23.1068H79.7333C79.3136 22.6056 78.5164 22.1517 77.4981 22.1517C75.3846 22.1517 73.4376 24.0195 73.4376 26.4185C73.4376 28.8076 75.3747 30.6529 77.4981 30.6529C78.504 30.6529 79.3136 30.1966 79.7333 29.6854H79.8004V30.2963C79.8004 31.9198 78.9361 32.7951 77.5428 32.7951C76.4029 32.7951 75.6951 31.9721 75.407 31.2839L73.7902 31.9622C74.2546 33.0844 75.4939 34.4734 77.5404 34.4734C79.7209 34.4734 81.5687 33.1841 81.5687 30.0395V22.4061H79.8103V23.1068C79.8128 23.1068 79.8004 23.1068 79.8004 23.1068ZM77.6645 28.9846C76.3806 28.9846 75.3077 27.9073 75.3077 26.4185C75.3077 24.9173 76.3806 23.83 77.6645 23.83C78.9361 23.83 79.9221 24.9297 79.9221 26.4185C79.9345 27.9073 78.9386 28.9846 77.6645 28.9846ZM101.944 17.9073H97.4956V30.4061H99.3558V25.6729H101.946C104.005 25.6729 106.029 24.1741 106.029 21.7951C106.029 19.416 104.012 17.9073 101.944 17.9073ZM101.998 23.9273H99.3533V19.638H101.998C103.392 19.638 104.179 20.7926 104.179 21.7826C104.179 22.7627 103.382 23.9273 101.998 23.9273ZM113.485 22.1392C112.134 22.1392 110.74 22.7402 110.164 24.0494L111.813 24.7377C112.168 24.0494 112.819 23.815 113.507 23.815C114.471 23.815 115.444 24.3936 115.466 25.426V25.5582C115.134 25.3686 114.404 25.0794 113.529 25.0794C111.749 25.0794 109.943 26.0569 109.943 27.8898C109.943 29.5682 111.403 30.6455 113.03 30.6455C114.279 30.6455 114.967 30.0794 115.397 29.4235H115.464V30.3911H117.257V25.6031C117.257 23.3736 115.608 22.1392 113.485 22.1392ZM113.251 28.9846C112.643 28.9846 111.791 28.6854 111.791 27.9173C111.791 26.9497 112.854 26.5831 113.76 26.5831C114.58 26.5831 114.967 26.7602 115.454 27.0046C115.32 28.1268 114.376 28.9746 113.251 28.9846ZM123.799 22.4061L121.663 27.8275H121.596L119.383 22.4061H117.381L120.702 29.9846L118.809 34.1966H120.746L125.855 22.4061H123.799ZM107.055 30.4061H108.915V17.9073H107.055V30.4061Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.9545 7.9394C10.6664 8.25112 10.5 8.72743 10.5 9.35087V31.4631C10.5 32.0865 10.6664 32.5628 10.9644 32.8621L11.0414 32.9294L23.3796 20.5404V20.2636L11.0315 7.87207L10.9545 7.9394Z"
                                      fill="url(#paint0_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4824 24.6835L23.3672 20.5513V20.2621L27.4824 16.1299L27.5718 16.1847L32.4396 18.9628C33.8329 19.7508 33.8329 21.0526 32.4396 21.8506L27.5718 24.6286L27.4824 24.6835Z"
                                      fill="url(#paint1_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 24.6282L23.3683 20.4062L10.9531 32.8726C11.4076 33.3614 12.1701 33.4162 13.0219 32.9399L27.5729 24.6282Z"
                                      fill="url(#paint2_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 16.1847L13.0219 7.88543C12.1701 7.39665 11.4051 7.46399 10.9531 7.95276L23.3683 20.4066L27.5729 16.1847Z"
                                      fill="url(#paint3_linear_5730_20582)" />
                                    <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4854 24.5381L13.0336 32.7824C12.2265 33.2488 11.5063 33.2164 11.0418 32.7924L10.9648 32.8697L11.0418 32.9371C11.5063 33.3585 12.2265 33.3934 13.0336 32.9271L27.5847 24.6279L27.4854 24.5381Z"
                                      fill="black" />
                                    <path opacity="0.12" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M32.4422 21.7055L27.4727 24.5384L27.5621 24.6282L32.4298 21.8501C33.1277 21.4511 33.4704 20.9274 33.4704 20.4062C33.4282 20.8851 33.073 21.3389 32.4422 21.7055Z"
                                      fill="black" />
                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.0233 8.02954L32.442 19.1069C33.0728 19.4635 33.428 19.9298 33.4826 20.4061C33.4826 19.8849 33.1399 19.3612 32.442 18.9622L13.0233 7.88491C11.63 7.08441 10.5 7.75274 10.5 9.35124V9.49588C10.5 7.89488 11.63 7.23902 13.0233 8.02954Z"
                                      fill="white" />
                                  </g>
                                  <defs>
                                    <linearGradient id="paint0_linear_5730_20582" x1="22.2729" y1="9.11231"
                                      x2="2.49849" y2="14.3596" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#00A0FF" />
                                      <stop offset="0.00657" stop-color="#00A1FF" />
                                      <stop offset="0.2601" stop-color="#00BEFF" />
                                      <stop offset="0.5122" stop-color="#00D2FF" />
                                      <stop offset="0.7604" stop-color="#00DFFF" />
                                      <stop offset="1" stop-color="#00E3FF" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_5730_20582" x1="34.2565" y1="20.4067"
                                      x2="10.1588" y2="20.4067" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FFE000" />
                                      <stop offset="0.4087" stop-color="#FFBD00" />
                                      <stop offset="0.7754" stop-color="#FFA500" />
                                      <stop offset="1" stop-color="#FF9C00" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_5730_20582" x1="25.2866" y1="22.7036"
                                      x2="9.32386" y2="49.4601" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FF3A44" />
                                      <stop offset="1" stop-color="#C31162" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_5730_20582" x1="7.82684" y1="0.585421"
                                      x2="14.9485" y2="12.5353" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#32A071" />
                                      <stop offset="0.0685" stop-color="#2DA771" />
                                      <stop offset="0.4762" stop-color="#15CF74" />
                                      <stop offset="0.8009" stop-color="#06E775" />
                                      <stop offset="1" stop-color="#00F076" />
                                    </linearGradient>
                                    <clipPath id="clip0_5730_20582">
                                      <rect width="135" height="40" fill="white"
                                        transform="translate(0.5625 0.40625)" />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </a>
                            </div>

                            <div class="vs-portfolio-footer-item">
                              <a href="https://apps.apple.com/us/app/catholicnetworker/id6466239872"
                                class="vs-portfolio-footer-link" target="_blank">
                                <svg width="121" height="41" viewBox="0 0 121 41" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_5730_20583)">
                                    <path
                                      d="M110.697 0.40638H10.0972C9.73048 0.40638 9.36818 0.40638 9.00245 0.40838C8.6963 0.41038 8.39259 0.41619 8.0835 0.42108C7.41201 0.428982 6.74211 0.488056 6.0796 0.59779C5.41802 0.709913 4.77717 0.921296 4.17872 1.22479C3.581 1.53085 3.03485 1.92855 2.56007 2.40345C2.0828 2.87702 1.68496 3.4244 1.38185 4.02454C1.0779 4.62349 0.867141 5.26532 0.75685 5.92786C0.645511 6.58957 0.585598 7.2589 0.57765 7.92986C0.56837 8.23646 0.56739 8.54408 0.5625 8.85072V31.965C0.56739 32.2755 0.56837 32.5763 0.57765 32.8869C0.585601 33.5578 0.645513 34.2271 0.75685 34.8888C0.866836 35.5517 1.07761 36.1939 1.38185 36.7931C1.68483 37.3913 2.08272 37.9364 2.56007 38.4074C3.03304 38.8844 3.57955 39.2824 4.17872 39.5861C4.77717 39.8904 5.41795 40.103 6.0796 40.2169C6.74222 40.3257 7.41206 40.3848 8.0835 40.3937C8.39259 40.4005 8.6963 40.4044 9.00245 40.4044C9.36817 40.4064 9.7305 40.4064 10.0972 40.4064H110.697C111.057 40.4064 111.422 40.4064 111.781 40.4044C112.086 40.4044 112.398 40.4005 112.703 40.3937C113.373 40.3853 114.042 40.3262 114.703 40.2169C115.367 40.1022 116.01 39.8896 116.611 39.5861C117.21 39.2822 117.756 38.8842 118.229 38.4074C118.705 37.9346 119.103 37.3898 119.41 36.7931C119.712 36.1935 119.921 35.5513 120.029 34.8888C120.141 34.227 120.203 33.5579 120.215 32.8869C120.219 32.5763 120.219 32.2755 120.219 31.965C120.227 31.6017 120.227 31.2404 120.227 30.8712V9.94251C120.227 9.5763 120.227 9.21302 120.219 8.85072C120.219 8.54408 120.219 8.23646 120.215 7.92982C120.203 7.2588 120.141 6.58962 120.029 5.92782C119.921 5.26566 119.712 4.62388 119.41 4.0245C118.793 2.82158 117.814 1.84241 116.611 1.2247C116.01 0.921947 115.367 0.71062 114.703 0.5977C114.042 0.487483 113.373 0.428388 112.703 0.42094C112.398 0.41606 112.086 0.4102 111.781 0.40825C111.422 0.40625 111.057 0.40625 110.697 0.40625V0.40638Z"
                                      fill="#A6A6A6" />
                                    <path
                                      d="M9.00541 39.5312C8.70073 39.5312 8.40341 39.5274 8.10112 39.5205C7.47491 39.5124 6.85015 39.4579 6.23198 39.3574C5.65557 39.2582 5.09719 39.0735 4.57524 38.8096C4.05809 38.5478 3.5864 38.2045 3.17824 37.7929C2.76418 37.3862 2.41946 36.9145 2.15773 36.3965C1.89312 35.875 1.71 35.3162 1.61473 34.7393C1.51186 34.1194 1.4562 33.4926 1.44823 32.8643C1.44189 32.6534 1.43359 31.9512 1.43359 31.9512V8.85059C1.43359 8.85059 1.44243 8.15918 1.44828 7.95605C1.45591 7.32873 1.51125 6.7029 1.61381 6.08398C1.70925 5.5055 1.89252 4.945 2.15727 4.42188C2.41804 3.90419 2.76085 3.43211 3.17241 3.02393C3.58352 2.61187 4.05672 2.26685 4.57475 2.00146C5.0955 1.73834 5.65283 1.55498 6.22807 1.45752C6.84827 1.35609 7.47519 1.30125 8.10358 1.29346L9.0059 1.28125H111.774L112.688 1.29395C113.31 1.30135 113.931 1.3557 114.546 1.45654C115.127 1.55523 115.69 1.73987 116.217 2.00439C117.255 2.53924 118.099 3.38541 118.632 4.42432C118.892 4.94383 119.073 5.49976 119.167 6.07324C119.271 6.69724 119.329 7.32799 119.341 7.96045C119.344 8.24365 119.344 8.54785 119.344 8.85059C119.352 9.22559 119.352 9.58252 119.352 9.94238V30.871C119.352 31.2344 119.352 31.5889 119.344 31.9463C119.344 32.2715 119.344 32.5693 119.34 32.8759C119.328 33.4971 119.271 34.1166 119.169 34.7295C119.076 35.3105 118.894 35.8738 118.629 36.3994C118.365 36.9119 118.023 37.3795 117.613 37.7851C117.205 38.1989 116.732 38.5442 116.214 38.8077C115.689 39.0736 115.126 39.259 114.546 39.3574C113.928 39.4584 113.303 39.5129 112.677 39.5205C112.384 39.5274 112.077 39.5312 111.779 39.5312L110.695 39.5332L9.00541 39.5312Z"
                                      fill="black" />
                                    <path
                                      d="M25.3325 20.7076C25.3432 19.8729 25.5649 19.0545 25.977 18.3286C26.389 17.6026 26.9779 16.9927 27.689 16.5555C27.2373 15.9103 26.6413 15.3794 25.9485 15.0048C25.2557 14.6303 24.4851 14.4224 23.6979 14.3978C22.0186 14.2216 20.3907 15.4026 19.535 15.4026C18.6627 15.4026 17.3452 14.4153 15.9265 14.4445C15.0088 14.4742 14.1144 14.741 13.3306 15.2191C12.5467 15.6971 11.9 16.3701 11.4535 17.1724C9.51955 20.5208 10.9621 25.4418 12.8147 28.1485C13.7416 29.4738 14.8249 30.9543 16.2424 30.9018C17.6294 30.8442 18.1475 30.0173 19.8218 30.0173C21.4805 30.0173 21.9666 30.9018 23.4128 30.8684C24.9012 30.8442 25.8389 29.5371 26.7333 28.1992C27.3993 27.2549 27.9117 26.2112 28.2517 25.1067C27.387 24.741 26.6491 24.1288 26.13 23.3465C25.6108 22.5642 25.3335 21.6464 25.3325 20.7076Z"
                                      fill="white" />
                                    <path
                                      d="M22.602 12.6176C23.4136 11.6434 23.8134 10.3912 23.7165 9.12695C22.4767 9.25717 21.3315 9.84973 20.509 10.7866C20.1068 11.2442 19.7988 11.7767 19.6026 12.3534C19.4063 12.9302 19.3257 13.54 19.3653 14.148C19.9854 14.1543 20.5989 14.0199 21.1596 13.7548C21.7202 13.4898 22.2134 13.1009 22.602 12.6176Z"
                                      fill="white" />
                                    <path
                                      d="M42.8672 27.5459H38.1338L36.9971 30.9024H34.9922L39.4756 18.4844H41.5586L46.042 30.9024H44.0029L42.8672 27.5459ZM38.624 25.9971H42.376L40.5264 20.5498H40.4746L38.624 25.9971Z"
                                      fill="white" />
                                    <path
                                      d="M55.7237 26.3757C55.7237 29.1892 54.2178 30.9968 51.9453 30.9968C51.3697 31.0269 50.7972 30.8943 50.2934 30.6142C49.7896 30.334 49.3749 29.9177 49.0967 29.4128H49.0537V33.8972H47.1953V21.8484H48.9942V23.3542H49.0284C49.3193 22.8517 49.741 22.4376 50.2487 22.1557C50.7563 21.8739 51.3308 21.7349 51.9112 21.7536C54.209 21.7536 55.7237 23.57 55.7237 26.3757ZM53.8135 26.3757C53.8135 24.5427 52.8662 23.3376 51.4209 23.3376C50.001 23.3376 49.0459 24.5681 49.0459 26.3757C49.0459 28.1999 50.001 29.4216 51.4209 29.4216C52.8662 29.4216 53.8135 28.2253 53.8135 26.3757Z"
                                      fill="white" />
                                    <path
                                      d="M65.6885 26.3757C65.6885 29.1892 64.1826 30.9968 61.9102 30.9968C61.3345 31.0269 60.762 30.8943 60.2582 30.6142C59.7544 30.334 59.3397 29.9177 59.0616 29.4128H59.0186V33.8972H57.1602V21.8483H58.959V23.3542H58.9932C59.2841 22.8517 59.7058 22.4375 60.2135 22.1557C60.7211 21.8739 61.2957 21.7349 61.876 21.7536C64.1739 21.7536 65.6885 23.57 65.6885 26.3757ZM63.7783 26.3757C63.7783 24.5427 62.8311 23.3376 61.3858 23.3376C59.9658 23.3376 59.0108 24.5681 59.0108 26.3757C59.0108 28.1999 59.9658 29.4216 61.3858 29.4216C62.8311 29.4216 63.7784 28.2253 63.7784 26.3757H63.7783Z"
                                      fill="white" />
                                    <path
                                      d="M72.2735 27.4424C72.4112 28.6739 73.6075 29.4824 75.2422 29.4824C76.8086 29.4824 77.9356 28.6738 77.9356 27.5635C77.9356 26.5996 77.2559 26.0225 75.6465 25.627L74.0371 25.2393C71.7569 24.6885 70.6983 23.6221 70.6983 21.8916C70.6983 19.749 72.5655 18.2773 75.2168 18.2773C77.8408 18.2773 79.6397 19.749 79.7002 21.8916H77.8242C77.7119 20.6523 76.6875 19.9043 75.1904 19.9043C73.6934 19.9043 72.669 20.6611 72.669 21.7627C72.669 22.6406 73.3233 23.1572 74.9238 23.5527L76.292 23.8886C78.8398 24.4912 79.8984 25.5146 79.8984 27.331C79.8984 29.6543 78.0479 31.1093 75.1045 31.1093C72.3506 31.1093 70.4912 29.6884 70.3711 27.4423L72.2735 27.4424Z"
                                      fill="white" />
                                    <path
                                      d="M83.9101 19.7061V21.8486H85.6318V23.3203H83.9101V28.3115C83.9101 29.0869 84.2549 29.4482 85.0117 29.4482C85.2161 29.4447 85.4202 29.4303 85.623 29.4052V30.8681C85.2828 30.9317 84.9369 30.9605 84.5908 30.9541C82.7578 30.9541 82.043 30.2656 82.043 28.5097V23.3203H80.7266V21.8486H82.0429V19.7061H83.9101Z"
                                      fill="white" />
                                    <path
                                      d="M86.6289 26.376C86.6289 23.5273 88.3066 21.7373 90.9229 21.7373C93.5479 21.7373 95.2178 23.5273 95.2178 26.376C95.2178 29.2324 93.5566 31.0146 90.9229 31.0146C88.29 31.0146 86.6289 29.2324 86.6289 26.376ZM93.3242 26.376C93.3242 24.4219 92.4287 23.2686 90.9228 23.2686C89.417 23.2686 88.5225 24.4307 88.5225 26.376C88.5225 28.3379 89.417 29.4824 90.9228 29.4824C92.4287 29.4824 93.3242 28.3379 93.3242 26.376H93.3242Z"
                                      fill="white" />
                                    <path
                                      d="M96.75 21.8483H98.5225V23.3893H98.5655C98.6854 22.908 98.9673 22.4826 99.3639 22.1848C99.7605 21.8869 100.248 21.7346 100.743 21.7535C100.957 21.7528 101.171 21.776 101.38 21.8229V23.5611C101.11 23.4785 100.828 23.4406 100.545 23.4488C100.275 23.4379 100.006 23.4855 99.756 23.5884C99.5061 23.6913 99.2815 23.847 99.0975 24.0449C98.9135 24.2428 98.7746 24.4781 98.6901 24.7348C98.6057 24.9915 98.5778 25.2634 98.6084 25.5318V30.902H96.75L96.75 21.8483Z"
                                      fill="white" />
                                    <path
                                      d="M109.948 28.2432C109.698 29.8867 108.098 31.0146 106.05 31.0146C103.416 31.0146 101.781 29.25 101.781 26.4189C101.781 23.5791 103.425 21.7373 105.972 21.7373C108.477 21.7373 110.052 23.458 110.052 26.2031V26.8398H103.657V26.9521C103.628 27.2853 103.669 27.621 103.78 27.9369C103.89 28.2527 104.066 28.5415 104.296 28.784C104.527 29.0266 104.806 29.2173 105.116 29.3436C105.425 29.4699 105.759 29.5289 106.093 29.5166C106.532 29.5577 106.973 29.456 107.349 29.2266C107.726 28.9972 108.019 28.6522 108.184 28.2432L109.948 28.2432ZM103.666 25.541H108.192C108.209 25.2414 108.164 24.9416 108.059 24.6604C107.954 24.3792 107.793 24.1227 107.584 23.9069C107.376 23.6911 107.125 23.5208 106.847 23.4066C106.57 23.2923 106.272 23.2367 105.972 23.2432C105.669 23.2414 105.369 23.2995 105.089 23.4142C104.809 23.529 104.554 23.6981 104.34 23.9117C104.126 24.1253 103.956 24.3793 103.84 24.6589C103.724 24.9386 103.665 25.2384 103.666 25.541V25.541Z"
                                      fill="white" />
                                    <path
                                      d="M38.3896 9.13763C38.7793 9.10967 39.1702 9.16853 39.5343 9.30996C39.8984 9.4514 40.2266 9.67188 40.4952 9.9555C40.7638 10.2391 40.9661 10.5788 41.0875 10.9501C41.2089 11.3214 41.2464 11.715 41.1973 12.1025C41.1973 14.0087 40.167 15.1045 38.3896 15.1045H36.2344V9.13763H38.3896ZM37.1611 14.2606H38.2861C38.5645 14.2773 38.8431 14.2316 39.1017 14.127C39.3602 14.0224 39.5922 13.8614 39.7807 13.6559C39.9692 13.4503 40.1094 13.2053 40.1913 12.9387C40.2732 12.6721 40.2946 12.3906 40.2539 12.1146C40.2916 11.8398 40.2681 11.56 40.1849 11.2954C40.1018 11.0307 39.9612 10.7877 39.7731 10.5838C39.5851 10.3798 39.3542 10.22 39.0971 10.1158C38.8401 10.0116 38.5631 9.96547 38.2861 9.98084H37.1611V14.2606Z"
                                      fill="white" />
                                    <path
                                      d="M42.2444 12.851C42.2161 12.5551 42.25 12.2565 42.3438 11.9745C42.4376 11.6924 42.5894 11.4331 42.7893 11.2131C42.9893 10.9931 43.233 10.8173 43.5048 10.6971C43.7767 10.5768 44.0707 10.5146 44.368 10.5146C44.6652 10.5146 44.9592 10.5768 45.2311 10.6971C45.5029 10.8173 45.7466 10.9931 45.9466 11.2131C46.1465 11.4331 46.2983 11.6924 46.3921 11.9745C46.486 12.2565 46.5198 12.5551 46.4915 12.851C46.5203 13.1472 46.4869 13.4462 46.3933 13.7288C46.2997 14.0113 46.148 14.2711 45.948 14.4915C45.7481 14.7119 45.5042 14.8881 45.232 15.0086C44.9599 15.1291 44.6656 15.1914 44.368 15.1914C44.0703 15.1914 43.776 15.1291 43.5039 15.0086C43.2318 14.8881 42.9879 14.7119 42.7879 14.4915C42.5879 14.2711 42.4362 14.0113 42.3426 13.7288C42.249 13.4462 42.2156 13.1472 42.2444 12.851ZM45.5774 12.851C45.5774 11.875 45.1389 11.3042 44.3694 11.3042C43.597 11.3042 43.1624 11.875 43.1624 12.851C43.1624 13.8349 43.597 14.4013 44.3694 14.4013C45.139 14.4013 45.5774 13.831 45.5774 12.851H45.5774Z"
                                      fill="white" />
                                    <path
                                      d="M52.1367 15.1045H51.2148L50.2842 11.7881H50.2139L49.2871 15.1045H48.374L47.1328 10.6016H48.0342L48.8408 14.0376H48.9072L49.833 10.6016H50.6856L51.6113 14.0376H51.6816L52.4844 10.6016H53.373L52.1367 15.1045Z"
                                      fill="white" />
                                    <path
                                      d="M54.418 10.6011H55.2734V11.3164H55.3398C55.4525 11.0595 55.6425 10.8442 55.8834 10.7003C56.1242 10.5565 56.404 10.4915 56.6836 10.5142C56.9027 10.4977 57.1227 10.5308 57.3273 10.6109C57.5319 10.691 57.7158 10.8161 57.8655 10.9769C58.0152 11.1377 58.1268 11.3302 58.192 11.54C58.2572 11.7498 58.2743 11.9716 58.2422 12.189V15.104H57.3535V12.4122C57.3535 11.6885 57.0391 11.3287 56.3818 11.3287C56.2331 11.3217 56.0846 11.347 55.9465 11.4029C55.8085 11.4587 55.6841 11.5437 55.582 11.6521C55.4799 11.7605 55.4024 11.8897 55.3549 12.0308C55.3073 12.1719 55.2909 12.3217 55.3066 12.4698V15.104H54.418L54.418 10.6011Z"
                                      fill="white" />
                                    <path d="M59.6562 8.84375H60.5449V15.1045H59.6562V8.84375Z" fill="white" />
                                    <path
                                      d="M61.7796 12.8511C61.7513 12.5552 61.7851 12.2566 61.879 11.9745C61.9729 11.6924 62.1246 11.4331 62.3246 11.2131C62.5246 10.9931 62.7683 10.8173 63.0402 10.6971C63.312 10.5768 63.606 10.5146 63.9033 10.5146C64.2006 10.5146 64.4946 10.5768 64.7665 10.6971C65.0384 10.8173 65.2821 10.9931 65.4821 11.2131C65.682 11.4331 65.8338 11.6924 65.9277 11.9745C66.0215 12.2566 66.0554 12.5552 66.0271 12.8511C66.0559 13.1473 66.0224 13.4463 65.9288 13.7289C65.8352 14.0114 65.6835 14.2712 65.4835 14.4916C65.2835 14.712 65.0396 14.8881 64.7674 15.0087C64.4953 15.1292 64.201 15.1915 63.9033 15.1915C63.6057 15.1915 63.3114 15.1292 63.0392 15.0087C62.7671 14.8881 62.5232 14.712 62.3232 14.4916C62.1232 14.2712 61.9715 14.0114 61.8778 13.7289C61.7842 13.4463 61.7507 13.1473 61.7796 12.8511ZM65.1126 12.8511C65.1126 11.875 64.6741 11.3042 63.9046 11.3042C63.1321 11.3042 62.6976 11.875 62.6976 12.8511C62.6976 13.835 63.1321 14.4014 63.9046 14.4014C64.6741 14.4014 65.1126 13.8311 65.1126 12.8511H65.1126Z"
                                      fill="white" />
                                    <path
                                      d="M66.9648 13.831C66.9648 13.0205 67.5684 12.5532 68.6396 12.4868L69.8594 12.4165V12.0278C69.8594 11.5522 69.5449 11.2837 68.9375 11.2837C68.4414 11.2837 68.0977 11.4658 67.999 11.7842H67.1387C67.2295 11.0107 67.957 10.5146 68.9785 10.5146C70.1074 10.5146 70.7441 11.0766 70.7441 12.0278V15.1045H69.8887V14.4717H69.8184C69.6756 14.6987 69.4752 14.8837 69.2376 15.0079C69 15.1321 68.7337 15.1911 68.4658 15.1787C68.2768 15.1983 68.0857 15.1782 67.905 15.1195C67.7242 15.0608 67.5578 14.9649 67.4163 14.8379C67.2749 14.7109 67.1617 14.5557 67.0839 14.3823C67.0062 14.2089 66.9656 14.0211 66.9648 13.831ZM69.8594 13.4463V13.0698L68.7598 13.1401C68.1396 13.1816 67.8584 13.3926 67.8584 13.7895C67.8584 14.1948 68.2099 14.4306 68.6934 14.4306C68.835 14.445 68.9781 14.4307 69.1141 14.3886C69.2501 14.3465 69.3763 14.2775 69.4851 14.1856C69.5938 14.0938 69.683 13.981 69.7474 13.854C69.8117 13.727 69.8498 13.5883 69.8594 13.4463Z"
                                      fill="white" />
                                    <path
                                      d="M71.9102 12.8511C71.9102 11.4282 72.6416 10.5269 73.7793 10.5269C74.0607 10.5139 74.34 10.5813 74.5845 10.7212C74.8291 10.8611 75.0287 11.0677 75.1602 11.3169H75.2266V8.84375H76.1152V15.1045H75.2637V14.3931H75.1934C75.0518 14.6406 74.8451 14.8446 74.5959 14.9831C74.3466 15.1216 74.0642 15.1892 73.7793 15.1787C72.6338 15.1787 71.9102 14.2774 71.9102 12.8511ZM72.8282 12.8511C72.8282 13.8062 73.2784 14.3809 74.0313 14.3809C74.7803 14.3809 75.2432 13.7979 75.2432 12.855C75.2432 11.9165 74.7754 11.3252 74.0313 11.3252C73.2832 11.3252 72.8281 11.9038 72.8281 12.8511H72.8282Z"
                                      fill="white" />
                                    <path
                                      d="M79.7952 12.851C79.7669 12.5551 79.8007 12.2565 79.8946 11.9745C79.9884 11.6924 80.1402 11.4331 80.3401 11.2131C80.5401 10.9931 80.7838 10.8173 81.0556 10.6971C81.3275 10.5768 81.6215 10.5146 81.9187 10.5146C82.216 10.5146 82.51 10.5768 82.7818 10.6971C83.0537 10.8173 83.2974 10.9931 83.4973 11.2131C83.6973 11.4331 83.849 11.6924 83.9429 11.9745C84.0367 12.2565 84.0706 12.5551 84.0423 12.851C84.0711 13.1472 84.0377 13.4462 83.9441 13.7288C83.8505 14.0113 83.6988 14.2711 83.4988 14.4915C83.2988 14.7119 83.0549 14.8881 82.7828 15.0086C82.5107 15.1291 82.2164 15.1914 81.9187 15.1914C81.6211 15.1914 81.3268 15.1291 81.0547 15.0086C80.7825 14.8881 80.5386 14.7119 80.3386 14.4915C80.1387 14.2711 79.987 14.0113 79.8934 13.7288C79.7998 13.4462 79.7664 13.1472 79.7952 12.851ZM83.1282 12.851C83.1282 11.875 82.6897 11.3042 81.9202 11.3042C81.1477 11.3042 80.7132 11.875 80.7132 12.851C80.7132 13.8349 81.1478 14.4013 81.9202 14.4013C82.6897 14.4013 83.1282 13.831 83.1282 12.851Z"
                                      fill="white" />
                                    <path
                                      d="M85.2344 10.6011H86.0898V11.3164H86.1563C86.2689 11.0595 86.4589 10.8442 86.6998 10.7003C86.9407 10.5565 87.2204 10.4915 87.5 10.5142C87.7191 10.4977 87.9391 10.5308 88.1437 10.6109C88.3483 10.691 88.5323 10.8161 88.6819 10.9769C88.8316 11.1377 88.9432 11.3302 89.0084 11.54C89.0736 11.7498 89.0908 11.9716 89.0586 12.189V15.104H88.1699V12.4122C88.1699 11.6885 87.8555 11.3287 87.1982 11.3287C87.0495 11.3217 86.901 11.347 86.7629 11.4029C86.6249 11.4587 86.5005 11.5437 86.3984 11.6521C86.2963 11.7605 86.2188 11.8897 86.1713 12.0308C86.1237 12.1719 86.1073 12.3217 86.123 12.4698V15.104H85.2344V10.6011Z"
                                      fill="white" />
                                    <path
                                      d="M94.0771 9.48047V10.6221H95.0527V11.3706H94.0771V13.686C94.0771 14.1577 94.2715 14.3643 94.7139 14.3643C94.8271 14.3639 94.9403 14.357 95.0527 14.3437V15.084C94.8932 15.1125 94.7315 15.1277 94.5693 15.1294C93.5811 15.1294 93.1875 14.7817 93.1875 13.9136V11.3706H92.4727V10.622H93.1875V9.48047H94.0771Z"
                                      fill="white" />
                                    <path
                                      d="M96.2695 8.84375H97.1504V11.3252H97.2207C97.3388 11.0659 97.5341 10.8493 97.7797 10.7049C98.0254 10.5606 98.3097 10.4955 98.5937 10.5186C98.8117 10.5067 99.0295 10.5431 99.2318 10.6251C99.4341 10.7072 99.6158 10.8328 99.7639 10.9932C99.912 11.1535 100.023 11.3446 100.089 11.5527C100.155 11.7608 100.174 11.9809 100.144 12.1973V15.1045H99.2549V12.4165C99.2549 11.6973 98.9199 11.333 98.292 11.333C98.1393 11.3205 97.9857 11.3415 97.8419 11.3945C97.6981 11.4476 97.5677 11.5314 97.4597 11.6401C97.3517 11.7489 97.2687 11.8799 97.2167 12.024C97.1646 12.1682 97.1447 12.3219 97.1582 12.4746V15.1045H96.2696L96.2695 8.84375Z"
                                      fill="white" />
                                    <path
                                      d="M105.324 13.8887C105.203 14.3003 104.942 14.6563 104.585 14.8944C104.228 15.1326 103.799 15.2377 103.373 15.1915C103.076 15.1993 102.781 15.1425 102.509 15.025C102.236 14.9074 101.993 14.732 101.795 14.5109C101.597 14.2897 101.449 14.0282 101.363 13.7444C101.276 13.4605 101.252 13.1612 101.293 12.8673C101.253 12.5724 101.277 12.2724 101.364 11.9878C101.45 11.7031 101.597 11.4403 101.794 11.2173C101.991 10.9942 102.233 10.816 102.505 10.6948C102.777 10.5736 103.071 10.5122 103.369 10.5147C104.622 10.5147 105.378 11.3707 105.378 12.7847V13.0948H102.198V13.1446C102.184 13.3099 102.205 13.4762 102.259 13.6329C102.313 13.7897 102.399 13.9334 102.512 14.0549C102.625 14.1763 102.762 14.2728 102.915 14.3382C103.067 14.4036 103.231 14.4365 103.397 14.4346C103.61 14.4601 103.825 14.4219 104.016 14.3246C104.207 14.2274 104.364 14.0757 104.468 13.8887L105.324 13.8887ZM102.198 12.4376H104.472C104.484 12.2864 104.463 12.1346 104.412 11.9919C104.361 11.8492 104.281 11.7187 104.176 11.6089C104.072 11.499 103.946 11.4122 103.806 11.354C103.666 11.2959 103.515 11.2676 103.364 11.2711C103.21 11.2691 103.058 11.298 102.915 11.3559C102.773 11.4139 102.644 11.4997 102.535 11.6085C102.426 11.7172 102.34 11.8465 102.283 11.9889C102.225 12.1313 102.196 12.2839 102.198 12.4376H102.198Z"
                                      fill="white" />
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_5730_20583">
                                      <rect width="119.664" height="40" fill="white"
                                        transform="translate(0.5625 0.40625)" />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="vs-portfolio-item" style="background-color: #ffe7b7">
                  <div class="row">
                    <div class="col col-12 col-md-4 col-lg-4">
                      <div class="vs-portfolio-item-img">
                        <img src="{{asset('web-assets/images/new-portfolio/INDYA - Nutrition App.png')}}" alt="demand-grocery-img"
                          class="img-fluid" />
                      </div>
                    </div>
                    <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                      <div class="vs-portfolio-details">
                        <div class="vs-portfolio-heading">
                          <div class="vs-portfolio-heading-top">
                            <div class="vs-portfolio-logo">
                              <img src="{{asset('web-assets/images/new-portfolio/logo/INDYA - Nutrition App.png')}}"
                                alt="app-logo" class="img-fluid" />
                            </div>
                            <div class="vs-portfolio-heading__inner">
                              <h3 class="vs-portfolio-title">
                                <span>INDYA - Nutrition App</span>
                              </h3>
                            </div>
                          </div>
                          <p class="vs-portfolio-heading-desccription">
                            INDYA Nutrición deportiva is a Spanish-language
                            nutrition app that helps athletes improve their
                            performance via personalized meal plans. You can
                            also track your progress and get feedback from a
                            registered dietitian.
                          </p>

                          <div class="vs-portfolio-body">
                            <div class="vs-portfolio-info">
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Region</label>
                                <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                  <img style="padding-right: 10px" width="25%"
                                    src="{{asset('web-assets/images/new-portfolio/flags/small/Spain.png')}}" alt="app-logo"
                                    class="img-fluid" />

                                  <span>Spain</span>
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Duration</label>
                                <p class="vs-portfolio-info-text">
                                  4 months
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Platforms</label>
                                <p class="vs-portfolio-info-text">
                                  Android, iOS
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Technology</label>
                                <p class="vs-portfolio-info-text">
                                  Figma, Flutter, MongoDB, Node.JS, Firebase
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="vs-portfolio-footer">


                            <div class="vs-portfolio-footer-item">
                              <a href="https://play.google.com/store/apps/details?id=com.inutriciondeportiva.android&amp;hl=en&amp;gl=US"
                                class="vs-portfolio-footer-link" target="_blank">
                                <svg width="136" height="41" viewBox="0 0 136 41" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_5730_20582)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 40.4062H5.56434C2.80762 40.4062 0.5625 38.1519 0.5625 35.4062V5.40625C0.5625 2.65064 2.80762 0.40625 5.56434 0.40625H130.561C133.315 0.40625 135.562 2.65064 135.562 5.40625V35.4062C135.562 38.1519 133.315 40.4062 130.561 40.4062Z"
                                      fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 1.20675C132.873 1.20675 134.765 3.09453 134.765 5.40625V35.4062C134.765 37.718 132.885 39.6058 130.561 39.6058H5.56434C3.25217 39.6058 1.35971 37.718 1.35971 35.4062V5.40625C1.35971 3.09453 3.23975 1.20675 5.56434 1.20675H130.561ZM130.561 0.40625H5.56434C2.80762 0.40625 0.5625 2.66061 0.5625 5.40625V35.4062C0.5625 38.1619 2.80762 40.4062 5.56434 40.4062H130.561C133.315 40.4062 135.562 38.1619 135.562 35.4062V5.40625C135.562 2.66061 133.315 0.40625 130.561 0.40625Z"
                                      fill="#A6A6A6" />
                                    <path
                                      d="M71.6816 13.6382C70.7801 13.6382 70.0202 13.3215 69.4192 12.6981C68.8231 12.0921 68.4903 11.2567 68.5052 10.4038C68.5052 9.49357 68.8132 8.723 69.4192 8.11202C70.0177 7.48858 70.7776 7.17188 71.6792 7.17188C72.5707 7.17188 73.3307 7.48858 73.9416 8.11202C74.5476 8.74295 74.8556 9.51352 74.8556 10.4038C74.8456 11.3165 74.5377 12.0871 73.9416 12.6956C73.3431 13.324 72.5832 13.6382 71.6816 13.6382ZM44.8571 13.6382C43.9755 13.6382 43.2106 13.3265 42.5847 12.7105C41.9638 12.0971 41.6484 11.3215 41.6484 10.4063C41.6484 9.49108 41.9638 8.71552 42.5847 8.10205C43.1982 7.48609 43.9631 7.17437 44.8571 7.17437C45.2942 7.17437 45.7189 7.26165 46.1262 7.43871C46.5261 7.61078 46.8514 7.84519 47.0923 8.13197L47.1519 8.20429L46.4789 8.86764L46.4093 8.78534C46.0294 8.33148 45.5202 8.10953 44.8472 8.10953C44.2462 8.10953 43.7222 8.32399 43.29 8.74794C42.8554 9.17437 42.6344 9.73297 42.6344 10.4088C42.6344 11.0846 42.8554 11.6432 43.29 12.0696C43.7222 12.4936 44.2462 12.708 44.8472 12.708C45.488 12.708 46.0269 12.4936 46.4466 12.0696C46.6949 11.8203 46.8489 11.4711 46.9036 11.0297H44.7454V10.0971H47.8299L47.8423 10.1819C47.8647 10.339 47.887 10.5011 47.887 10.6507C47.887 11.511 47.6288 12.2068 47.1171 12.7205C46.536 13.329 45.776 13.6382 44.8571 13.6382ZM80.523 13.506H79.5718L76.6586 8.82524L76.6835 9.66813V13.5035H75.7323V7.30654H76.8176L76.8474 7.35392L79.5867 11.7629L79.5618 10.9225V7.30654H80.523V13.506ZM64.5341 13.506H63.5705V8.23921H61.8991V7.30654H66.203V8.23921H64.5316V13.506H64.5341ZM61.1143 13.506H60.1531V7.30654H61.1143V13.506ZM55.7126 13.506H54.7515V8.23921H53.0801V7.30654H57.384V8.23921H55.7126V13.506ZM52.4716 13.4961H48.7861V7.30654H52.4716V8.23921H49.7497V9.93995H52.2059V10.8626H49.7497V12.5634H52.4716V13.4961ZM70.1245 12.0572C70.5541 12.4886 71.0757 12.7055 71.6816 12.7055C72.305 12.7055 72.8141 12.4936 73.2388 12.0572C73.661 11.6332 73.8746 11.0771 73.8746 10.4063C73.8746 9.73547 73.661 9.17686 73.2413 8.75542C72.8116 8.32399 72.2876 8.10704 71.6841 8.10704C71.0608 8.10704 70.5516 8.31901 70.1294 8.75542C69.7072 9.17936 69.4937 9.73547 69.4937 10.4063C69.4937 11.0771 69.7048 11.6357 70.1245 12.0572Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M68.4134 22.1617C66.0664 22.1617 64.164 23.9497 64.164 26.416C64.164 28.8599 66.0788 30.6704 68.4134 30.6704C70.7603 30.6704 72.6627 28.8699 72.6627 26.416C72.6627 23.9497 70.7603 22.1617 68.4134 22.1617ZM68.4134 28.9846C67.1294 28.9846 66.0242 27.9173 66.0242 26.4061C66.0242 24.8724 67.1319 23.8275 68.4134 23.8275C69.6973 23.8275 70.8025 24.8724 70.8025 26.4061C70.805 27.9273 69.6973 28.9846 68.4134 28.9846ZM59.1423 22.1617C56.7954 22.1617 54.893 23.9497 54.893 26.416C54.893 28.8599 56.8078 30.6704 59.1423 30.6704C61.4893 30.6704 63.3916 28.8699 63.3916 26.416C63.3916 23.9497 61.4868 22.1617 59.1423 22.1617ZM59.1423 28.9846C57.8583 28.9846 56.7531 27.9173 56.7531 26.4061C56.7531 24.8724 57.8608 23.8275 59.1423 23.8275C60.4263 23.8275 61.5315 24.8724 61.5315 26.4061C61.5315 27.9273 60.4263 28.9846 59.1423 28.9846ZM48.1104 23.4609V25.2614H52.4144C52.2828 26.2714 51.95 27.017 51.4409 27.5283C50.81 28.1617 49.8365 28.8499 48.1204 28.8499C45.4754 28.8499 43.4066 26.7053 43.4066 24.0494C43.4066 21.3936 45.4754 19.2489 48.1204 19.2489C49.5484 19.2489 50.589 19.815 51.3614 20.5382L52.633 19.2614C51.5601 18.229 50.132 17.4385 48.1303 17.4385C44.5019 17.4385 41.457 20.4061 41.457 24.0395C41.457 27.6829 44.4994 30.6405 48.1303 30.6405C50.0898 30.6405 51.5601 29.9971 52.7224 28.7851C53.907 27.5956 54.282 25.9173 54.282 24.5632C54.282 24.1417 54.2497 23.7627 54.1827 23.441H48.1079C48.1104 23.4385 48.1104 23.4609 48.1104 23.4609ZM93.2338 24.8624C92.8787 23.9073 91.8058 22.1517 89.6054 22.1517C87.4248 22.1517 85.6119 23.8749 85.6119 26.4061C85.6119 28.7951 87.405 30.6604 89.8165 30.6604C91.7536 30.6604 92.8812 29.4709 93.3456 28.7726L91.9076 27.8051C91.4308 28.5158 90.7677 28.9821 89.8264 28.9821C88.8752 28.9821 88.2096 28.5482 87.7676 27.6928L93.4325 25.3362C93.4325 25.3387 93.2338 24.8624 93.2338 24.8624ZM87.4571 26.2839C87.4124 24.6405 88.7287 23.8051 89.67 23.8051C90.4125 23.8051 91.0309 24.1716 91.242 24.7053L87.4571 26.2839ZM82.8551 30.4061H84.7153V17.9073H82.8551V30.4061ZM79.8004 23.1068H79.7333C79.3136 22.6056 78.5164 22.1517 77.4981 22.1517C75.3846 22.1517 73.4376 24.0195 73.4376 26.4185C73.4376 28.8076 75.3747 30.6529 77.4981 30.6529C78.504 30.6529 79.3136 30.1966 79.7333 29.6854H79.8004V30.2963C79.8004 31.9198 78.9361 32.7951 77.5428 32.7951C76.4029 32.7951 75.6951 31.9721 75.407 31.2839L73.7902 31.9622C74.2546 33.0844 75.4939 34.4734 77.5404 34.4734C79.7209 34.4734 81.5687 33.1841 81.5687 30.0395V22.4061H79.8103V23.1068C79.8128 23.1068 79.8004 23.1068 79.8004 23.1068ZM77.6645 28.9846C76.3806 28.9846 75.3077 27.9073 75.3077 26.4185C75.3077 24.9173 76.3806 23.83 77.6645 23.83C78.9361 23.83 79.9221 24.9297 79.9221 26.4185C79.9345 27.9073 78.9386 28.9846 77.6645 28.9846ZM101.944 17.9073H97.4956V30.4061H99.3558V25.6729H101.946C104.005 25.6729 106.029 24.1741 106.029 21.7951C106.029 19.416 104.012 17.9073 101.944 17.9073ZM101.998 23.9273H99.3533V19.638H101.998C103.392 19.638 104.179 20.7926 104.179 21.7826C104.179 22.7627 103.382 23.9273 101.998 23.9273ZM113.485 22.1392C112.134 22.1392 110.74 22.7402 110.164 24.0494L111.813 24.7377C112.168 24.0494 112.819 23.815 113.507 23.815C114.471 23.815 115.444 24.3936 115.466 25.426V25.5582C115.134 25.3686 114.404 25.0794 113.529 25.0794C111.749 25.0794 109.943 26.0569 109.943 27.8898C109.943 29.5682 111.403 30.6455 113.03 30.6455C114.279 30.6455 114.967 30.0794 115.397 29.4235H115.464V30.3911H117.257V25.6031C117.257 23.3736 115.608 22.1392 113.485 22.1392ZM113.251 28.9846C112.643 28.9846 111.791 28.6854 111.791 27.9173C111.791 26.9497 112.854 26.5831 113.76 26.5831C114.58 26.5831 114.967 26.7602 115.454 27.0046C115.32 28.1268 114.376 28.9746 113.251 28.9846ZM123.799 22.4061L121.663 27.8275H121.596L119.383 22.4061H117.381L120.702 29.9846L118.809 34.1966H120.746L125.855 22.4061H123.799ZM107.055 30.4061H108.915V17.9073H107.055V30.4061Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.9545 7.9394C10.6664 8.25112 10.5 8.72743 10.5 9.35087V31.4631C10.5 32.0865 10.6664 32.5628 10.9644 32.8621L11.0414 32.9294L23.3796 20.5404V20.2636L11.0315 7.87207L10.9545 7.9394Z"
                                      fill="url(#paint0_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4824 24.6835L23.3672 20.5513V20.2621L27.4824 16.1299L27.5718 16.1847L32.4396 18.9628C33.8329 19.7508 33.8329 21.0526 32.4396 21.8506L27.5718 24.6286L27.4824 24.6835Z"
                                      fill="url(#paint1_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 24.6282L23.3683 20.4062L10.9531 32.8726C11.4076 33.3614 12.1701 33.4162 13.0219 32.9399L27.5729 24.6282Z"
                                      fill="url(#paint2_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 16.1847L13.0219 7.88543C12.1701 7.39665 11.4051 7.46399 10.9531 7.95276L23.3683 20.4066L27.5729 16.1847Z"
                                      fill="url(#paint3_linear_5730_20582)" />
                                    <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4854 24.5381L13.0336 32.7824C12.2265 33.2488 11.5063 33.2164 11.0418 32.7924L10.9648 32.8697L11.0418 32.9371C11.5063 33.3585 12.2265 33.3934 13.0336 32.9271L27.5847 24.6279L27.4854 24.5381Z"
                                      fill="black" />
                                    <path opacity="0.12" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M32.4422 21.7055L27.4727 24.5384L27.5621 24.6282L32.4298 21.8501C33.1277 21.4511 33.4704 20.9274 33.4704 20.4062C33.4282 20.8851 33.073 21.3389 32.4422 21.7055Z"
                                      fill="black" />
                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.0233 8.02954L32.442 19.1069C33.0728 19.4635 33.428 19.9298 33.4826 20.4061C33.4826 19.8849 33.1399 19.3612 32.442 18.9622L13.0233 7.88491C11.63 7.08441 10.5 7.75274 10.5 9.35124V9.49588C10.5 7.89488 11.63 7.23902 13.0233 8.02954Z"
                                      fill="white" />
                                  </g>
                                  <defs>
                                    <linearGradient id="paint0_linear_5730_20582" x1="22.2729" y1="9.11231"
                                      x2="2.49849" y2="14.3596" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#00A0FF" />
                                      <stop offset="0.00657" stop-color="#00A1FF" />
                                      <stop offset="0.2601" stop-color="#00BEFF" />
                                      <stop offset="0.5122" stop-color="#00D2FF" />
                                      <stop offset="0.7604" stop-color="#00DFFF" />
                                      <stop offset="1" stop-color="#00E3FF" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_5730_20582" x1="34.2565" y1="20.4067"
                                      x2="10.1588" y2="20.4067" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FFE000" />
                                      <stop offset="0.4087" stop-color="#FFBD00" />
                                      <stop offset="0.7754" stop-color="#FFA500" />
                                      <stop offset="1" stop-color="#FF9C00" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_5730_20582" x1="25.2866" y1="22.7036"
                                      x2="9.32386" y2="49.4601" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FF3A44" />
                                      <stop offset="1" stop-color="#C31162" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_5730_20582" x1="7.82684" y1="0.585421"
                                      x2="14.9485" y2="12.5353" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#32A071" />
                                      <stop offset="0.0685" stop-color="#2DA771" />
                                      <stop offset="0.4762" stop-color="#15CF74" />
                                      <stop offset="0.8009" stop-color="#06E775" />
                                      <stop offset="1" stop-color="#00F076" />
                                    </linearGradient>
                                    <clipPath id="clip0_5730_20582">
                                      <rect width="135" height="40" fill="white"
                                        transform="translate(0.5625 0.40625)" />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </a>
                            </div>

                            <div class="vs-portfolio-footer-item">
                              <a href="https://apps.apple.com/us/app/id1234076452" class="vs-portfolio-footer-link"
                                target="_blank">
                                <svg width="121" height="41" viewBox="0 0 121 41" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_5730_20583)">
                                    <path
                                      d="M110.697 0.40638H10.0972C9.73048 0.40638 9.36818 0.40638 9.00245 0.40838C8.6963 0.41038 8.39259 0.41619 8.0835 0.42108C7.41201 0.428982 6.74211 0.488056 6.0796 0.59779C5.41802 0.709913 4.77717 0.921296 4.17872 1.22479C3.581 1.53085 3.03485 1.92855 2.56007 2.40345C2.0828 2.87702 1.68496 3.4244 1.38185 4.02454C1.0779 4.62349 0.867141 5.26532 0.75685 5.92786C0.645511 6.58957 0.585598 7.2589 0.57765 7.92986C0.56837 8.23646 0.56739 8.54408 0.5625 8.85072V31.965C0.56739 32.2755 0.56837 32.5763 0.57765 32.8869C0.585601 33.5578 0.645513 34.2271 0.75685 34.8888C0.866836 35.5517 1.07761 36.1939 1.38185 36.7931C1.68483 37.3913 2.08272 37.9364 2.56007 38.4074C3.03304 38.8844 3.57955 39.2824 4.17872 39.5861C4.77717 39.8904 5.41795 40.103 6.0796 40.2169C6.74222 40.3257 7.41206 40.3848 8.0835 40.3937C8.39259 40.4005 8.6963 40.4044 9.00245 40.4044C9.36817 40.4064 9.7305 40.4064 10.0972 40.4064H110.697C111.057 40.4064 111.422 40.4064 111.781 40.4044C112.086 40.4044 112.398 40.4005 112.703 40.3937C113.373 40.3853 114.042 40.3262 114.703 40.2169C115.367 40.1022 116.01 39.8896 116.611 39.5861C117.21 39.2822 117.756 38.8842 118.229 38.4074C118.705 37.9346 119.103 37.3898 119.41 36.7931C119.712 36.1935 119.921 35.5513 120.029 34.8888C120.141 34.227 120.203 33.5579 120.215 32.8869C120.219 32.5763 120.219 32.2755 120.219 31.965C120.227 31.6017 120.227 31.2404 120.227 30.8712V9.94251C120.227 9.5763 120.227 9.21302 120.219 8.85072C120.219 8.54408 120.219 8.23646 120.215 7.92982C120.203 7.2588 120.141 6.58962 120.029 5.92782C119.921 5.26566 119.712 4.62388 119.41 4.0245C118.793 2.82158 117.814 1.84241 116.611 1.2247C116.01 0.921947 115.367 0.71062 114.703 0.5977C114.042 0.487483 113.373 0.428388 112.703 0.42094C112.398 0.41606 112.086 0.4102 111.781 0.40825C111.422 0.40625 111.057 0.40625 110.697 0.40625V0.40638Z"
                                      fill="#A6A6A6" />
                                    <path
                                      d="M9.00541 39.5312C8.70073 39.5312 8.40341 39.5274 8.10112 39.5205C7.47491 39.5124 6.85015 39.4579 6.23198 39.3574C5.65557 39.2582 5.09719 39.0735 4.57524 38.8096C4.05809 38.5478 3.5864 38.2045 3.17824 37.7929C2.76418 37.3862 2.41946 36.9145 2.15773 36.3965C1.89312 35.875 1.71 35.3162 1.61473 34.7393C1.51186 34.1194 1.4562 33.4926 1.44823 32.8643C1.44189 32.6534 1.43359 31.9512 1.43359 31.9512V8.85059C1.43359 8.85059 1.44243 8.15918 1.44828 7.95605C1.45591 7.32873 1.51125 6.7029 1.61381 6.08398C1.70925 5.5055 1.89252 4.945 2.15727 4.42188C2.41804 3.90419 2.76085 3.43211 3.17241 3.02393C3.58352 2.61187 4.05672 2.26685 4.57475 2.00146C5.0955 1.73834 5.65283 1.55498 6.22807 1.45752C6.84827 1.35609 7.47519 1.30125 8.10358 1.29346L9.0059 1.28125H111.774L112.688 1.29395C113.31 1.30135 113.931 1.3557 114.546 1.45654C115.127 1.55523 115.69 1.73987 116.217 2.00439C117.255 2.53924 118.099 3.38541 118.632 4.42432C118.892 4.94383 119.073 5.49976 119.167 6.07324C119.271 6.69724 119.329 7.32799 119.341 7.96045C119.344 8.24365 119.344 8.54785 119.344 8.85059C119.352 9.22559 119.352 9.58252 119.352 9.94238V30.871C119.352 31.2344 119.352 31.5889 119.344 31.9463C119.344 32.2715 119.344 32.5693 119.34 32.8759C119.328 33.4971 119.271 34.1166 119.169 34.7295C119.076 35.3105 118.894 35.8738 118.629 36.3994C118.365 36.9119 118.023 37.3795 117.613 37.7851C117.205 38.1989 116.732 38.5442 116.214 38.8077C115.689 39.0736 115.126 39.259 114.546 39.3574C113.928 39.4584 113.303 39.5129 112.677 39.5205C112.384 39.5274 112.077 39.5312 111.779 39.5312L110.695 39.5332L9.00541 39.5312Z"
                                      fill="black" />
                                    <path
                                      d="M25.3325 20.7076C25.3432 19.8729 25.5649 19.0545 25.977 18.3286C26.389 17.6026 26.9779 16.9927 27.689 16.5555C27.2373 15.9103 26.6413 15.3794 25.9485 15.0048C25.2557 14.6303 24.4851 14.4224 23.6979 14.3978C22.0186 14.2216 20.3907 15.4026 19.535 15.4026C18.6627 15.4026 17.3452 14.4153 15.9265 14.4445C15.0088 14.4742 14.1144 14.741 13.3306 15.2191C12.5467 15.6971 11.9 16.3701 11.4535 17.1724C9.51955 20.5208 10.9621 25.4418 12.8147 28.1485C13.7416 29.4738 14.8249 30.9543 16.2424 30.9018C17.6294 30.8442 18.1475 30.0173 19.8218 30.0173C21.4805 30.0173 21.9666 30.9018 23.4128 30.8684C24.9012 30.8442 25.8389 29.5371 26.7333 28.1992C27.3993 27.2549 27.9117 26.2112 28.2517 25.1067C27.387 24.741 26.6491 24.1288 26.13 23.3465C25.6108 22.5642 25.3335 21.6464 25.3325 20.7076Z"
                                      fill="white" />
                                    <path
                                      d="M22.602 12.6176C23.4136 11.6434 23.8134 10.3912 23.7165 9.12695C22.4767 9.25717 21.3315 9.84973 20.509 10.7866C20.1068 11.2442 19.7988 11.7767 19.6026 12.3534C19.4063 12.9302 19.3257 13.54 19.3653 14.148C19.9854 14.1543 20.5989 14.0199 21.1596 13.7548C21.7202 13.4898 22.2134 13.1009 22.602 12.6176Z"
                                      fill="white" />
                                    <path
                                      d="M42.8672 27.5459H38.1338L36.9971 30.9024H34.9922L39.4756 18.4844H41.5586L46.042 30.9024H44.0029L42.8672 27.5459ZM38.624 25.9971H42.376L40.5264 20.5498H40.4746L38.624 25.9971Z"
                                      fill="white" />
                                    <path
                                      d="M55.7237 26.3757C55.7237 29.1892 54.2178 30.9968 51.9453 30.9968C51.3697 31.0269 50.7972 30.8943 50.2934 30.6142C49.7896 30.334 49.3749 29.9177 49.0967 29.4128H49.0537V33.8972H47.1953V21.8484H48.9942V23.3542H49.0284C49.3193 22.8517 49.741 22.4376 50.2487 22.1557C50.7563 21.8739 51.3308 21.7349 51.9112 21.7536C54.209 21.7536 55.7237 23.57 55.7237 26.3757ZM53.8135 26.3757C53.8135 24.5427 52.8662 23.3376 51.4209 23.3376C50.001 23.3376 49.0459 24.5681 49.0459 26.3757C49.0459 28.1999 50.001 29.4216 51.4209 29.4216C52.8662 29.4216 53.8135 28.2253 53.8135 26.3757Z"
                                      fill="white" />
                                    <path
                                      d="M65.6885 26.3757C65.6885 29.1892 64.1826 30.9968 61.9102 30.9968C61.3345 31.0269 60.762 30.8943 60.2582 30.6142C59.7544 30.334 59.3397 29.9177 59.0616 29.4128H59.0186V33.8972H57.1602V21.8483H58.959V23.3542H58.9932C59.2841 22.8517 59.7058 22.4375 60.2135 22.1557C60.7211 21.8739 61.2957 21.7349 61.876 21.7536C64.1739 21.7536 65.6885 23.57 65.6885 26.3757ZM63.7783 26.3757C63.7783 24.5427 62.8311 23.3376 61.3858 23.3376C59.9658 23.3376 59.0108 24.5681 59.0108 26.3757C59.0108 28.1999 59.9658 29.4216 61.3858 29.4216C62.8311 29.4216 63.7784 28.2253 63.7784 26.3757H63.7783Z"
                                      fill="white" />
                                    <path
                                      d="M72.2735 27.4424C72.4112 28.6739 73.6075 29.4824 75.2422 29.4824C76.8086 29.4824 77.9356 28.6738 77.9356 27.5635C77.9356 26.5996 77.2559 26.0225 75.6465 25.627L74.0371 25.2393C71.7569 24.6885 70.6983 23.6221 70.6983 21.8916C70.6983 19.749 72.5655 18.2773 75.2168 18.2773C77.8408 18.2773 79.6397 19.749 79.7002 21.8916H77.8242C77.7119 20.6523 76.6875 19.9043 75.1904 19.9043C73.6934 19.9043 72.669 20.6611 72.669 21.7627C72.669 22.6406 73.3233 23.1572 74.9238 23.5527L76.292 23.8886C78.8398 24.4912 79.8984 25.5146 79.8984 27.331C79.8984 29.6543 78.0479 31.1093 75.1045 31.1093C72.3506 31.1093 70.4912 29.6884 70.3711 27.4423L72.2735 27.4424Z"
                                      fill="white" />
                                    <path
                                      d="M83.9101 19.7061V21.8486H85.6318V23.3203H83.9101V28.3115C83.9101 29.0869 84.2549 29.4482 85.0117 29.4482C85.2161 29.4447 85.4202 29.4303 85.623 29.4052V30.8681C85.2828 30.9317 84.9369 30.9605 84.5908 30.9541C82.7578 30.9541 82.043 30.2656 82.043 28.5097V23.3203H80.7266V21.8486H82.0429V19.7061H83.9101Z"
                                      fill="white" />
                                    <path
                                      d="M86.6289 26.376C86.6289 23.5273 88.3066 21.7373 90.9229 21.7373C93.5479 21.7373 95.2178 23.5273 95.2178 26.376C95.2178 29.2324 93.5566 31.0146 90.9229 31.0146C88.29 31.0146 86.6289 29.2324 86.6289 26.376ZM93.3242 26.376C93.3242 24.4219 92.4287 23.2686 90.9228 23.2686C89.417 23.2686 88.5225 24.4307 88.5225 26.376C88.5225 28.3379 89.417 29.4824 90.9228 29.4824C92.4287 29.4824 93.3242 28.3379 93.3242 26.376H93.3242Z"
                                      fill="white" />
                                    <path
                                      d="M96.75 21.8483H98.5225V23.3893H98.5655C98.6854 22.908 98.9673 22.4826 99.3639 22.1848C99.7605 21.8869 100.248 21.7346 100.743 21.7535C100.957 21.7528 101.171 21.776 101.38 21.8229V23.5611C101.11 23.4785 100.828 23.4406 100.545 23.4488C100.275 23.4379 100.006 23.4855 99.756 23.5884C99.5061 23.6913 99.2815 23.847 99.0975 24.0449C98.9135 24.2428 98.7746 24.4781 98.6901 24.7348C98.6057 24.9915 98.5778 25.2634 98.6084 25.5318V30.902H96.75L96.75 21.8483Z"
                                      fill="white" />
                                    <path
                                      d="M109.948 28.2432C109.698 29.8867 108.098 31.0146 106.05 31.0146C103.416 31.0146 101.781 29.25 101.781 26.4189C101.781 23.5791 103.425 21.7373 105.972 21.7373C108.477 21.7373 110.052 23.458 110.052 26.2031V26.8398H103.657V26.9521C103.628 27.2853 103.669 27.621 103.78 27.9369C103.89 28.2527 104.066 28.5415 104.296 28.784C104.527 29.0266 104.806 29.2173 105.116 29.3436C105.425 29.4699 105.759 29.5289 106.093 29.5166C106.532 29.5577 106.973 29.456 107.349 29.2266C107.726 28.9972 108.019 28.6522 108.184 28.2432L109.948 28.2432ZM103.666 25.541H108.192C108.209 25.2414 108.164 24.9416 108.059 24.6604C107.954 24.3792 107.793 24.1227 107.584 23.9069C107.376 23.6911 107.125 23.5208 106.847 23.4066C106.57 23.2923 106.272 23.2367 105.972 23.2432C105.669 23.2414 105.369 23.2995 105.089 23.4142C104.809 23.529 104.554 23.6981 104.34 23.9117C104.126 24.1253 103.956 24.3793 103.84 24.6589C103.724 24.9386 103.665 25.2384 103.666 25.541V25.541Z"
                                      fill="white" />
                                    <path
                                      d="M38.3896 9.13763C38.7793 9.10967 39.1702 9.16853 39.5343 9.30996C39.8984 9.4514 40.2266 9.67188 40.4952 9.9555C40.7638 10.2391 40.9661 10.5788 41.0875 10.9501C41.2089 11.3214 41.2464 11.715 41.1973 12.1025C41.1973 14.0087 40.167 15.1045 38.3896 15.1045H36.2344V9.13763H38.3896ZM37.1611 14.2606H38.2861C38.5645 14.2773 38.8431 14.2316 39.1017 14.127C39.3602 14.0224 39.5922 13.8614 39.7807 13.6559C39.9692 13.4503 40.1094 13.2053 40.1913 12.9387C40.2732 12.6721 40.2946 12.3906 40.2539 12.1146C40.2916 11.8398 40.2681 11.56 40.1849 11.2954C40.1018 11.0307 39.9612 10.7877 39.7731 10.5838C39.5851 10.3798 39.3542 10.22 39.0971 10.1158C38.8401 10.0116 38.5631 9.96547 38.2861 9.98084H37.1611V14.2606Z"
                                      fill="white" />
                                    <path
                                      d="M42.2444 12.851C42.2161 12.5551 42.25 12.2565 42.3438 11.9745C42.4376 11.6924 42.5894 11.4331 42.7893 11.2131C42.9893 10.9931 43.233 10.8173 43.5048 10.6971C43.7767 10.5768 44.0707 10.5146 44.368 10.5146C44.6652 10.5146 44.9592 10.5768 45.2311 10.6971C45.5029 10.8173 45.7466 10.9931 45.9466 11.2131C46.1465 11.4331 46.2983 11.6924 46.3921 11.9745C46.486 12.2565 46.5198 12.5551 46.4915 12.851C46.5203 13.1472 46.4869 13.4462 46.3933 13.7288C46.2997 14.0113 46.148 14.2711 45.948 14.4915C45.7481 14.7119 45.5042 14.8881 45.232 15.0086C44.9599 15.1291 44.6656 15.1914 44.368 15.1914C44.0703 15.1914 43.776 15.1291 43.5039 15.0086C43.2318 14.8881 42.9879 14.7119 42.7879 14.4915C42.5879 14.2711 42.4362 14.0113 42.3426 13.7288C42.249 13.4462 42.2156 13.1472 42.2444 12.851ZM45.5774 12.851C45.5774 11.875 45.1389 11.3042 44.3694 11.3042C43.597 11.3042 43.1624 11.875 43.1624 12.851C43.1624 13.8349 43.597 14.4013 44.3694 14.4013C45.139 14.4013 45.5774 13.831 45.5774 12.851H45.5774Z"
                                      fill="white" />
                                    <path
                                      d="M52.1367 15.1045H51.2148L50.2842 11.7881H50.2139L49.2871 15.1045H48.374L47.1328 10.6016H48.0342L48.8408 14.0376H48.9072L49.833 10.6016H50.6856L51.6113 14.0376H51.6816L52.4844 10.6016H53.373L52.1367 15.1045Z"
                                      fill="white" />
                                    <path
                                      d="M54.418 10.6011H55.2734V11.3164H55.3398C55.4525 11.0595 55.6425 10.8442 55.8834 10.7003C56.1242 10.5565 56.404 10.4915 56.6836 10.5142C56.9027 10.4977 57.1227 10.5308 57.3273 10.6109C57.5319 10.691 57.7158 10.8161 57.8655 10.9769C58.0152 11.1377 58.1268 11.3302 58.192 11.54C58.2572 11.7498 58.2743 11.9716 58.2422 12.189V15.104H57.3535V12.4122C57.3535 11.6885 57.0391 11.3287 56.3818 11.3287C56.2331 11.3217 56.0846 11.347 55.9465 11.4029C55.8085 11.4587 55.6841 11.5437 55.582 11.6521C55.4799 11.7605 55.4024 11.8897 55.3549 12.0308C55.3073 12.1719 55.2909 12.3217 55.3066 12.4698V15.104H54.418L54.418 10.6011Z"
                                      fill="white" />
                                    <path d="M59.6562 8.84375H60.5449V15.1045H59.6562V8.84375Z" fill="white" />
                                    <path
                                      d="M61.7796 12.8511C61.7513 12.5552 61.7851 12.2566 61.879 11.9745C61.9729 11.6924 62.1246 11.4331 62.3246 11.2131C62.5246 10.9931 62.7683 10.8173 63.0402 10.6971C63.312 10.5768 63.606 10.5146 63.9033 10.5146C64.2006 10.5146 64.4946 10.5768 64.7665 10.6971C65.0384 10.8173 65.2821 10.9931 65.4821 11.2131C65.682 11.4331 65.8338 11.6924 65.9277 11.9745C66.0215 12.2566 66.0554 12.5552 66.0271 12.8511C66.0559 13.1473 66.0224 13.4463 65.9288 13.7289C65.8352 14.0114 65.6835 14.2712 65.4835 14.4916C65.2835 14.712 65.0396 14.8881 64.7674 15.0087C64.4953 15.1292 64.201 15.1915 63.9033 15.1915C63.6057 15.1915 63.3114 15.1292 63.0392 15.0087C62.7671 14.8881 62.5232 14.712 62.3232 14.4916C62.1232 14.2712 61.9715 14.0114 61.8778 13.7289C61.7842 13.4463 61.7507 13.1473 61.7796 12.8511ZM65.1126 12.8511C65.1126 11.875 64.6741 11.3042 63.9046 11.3042C63.1321 11.3042 62.6976 11.875 62.6976 12.8511C62.6976 13.835 63.1321 14.4014 63.9046 14.4014C64.6741 14.4014 65.1126 13.8311 65.1126 12.8511H65.1126Z"
                                      fill="white" />
                                    <path
                                      d="M66.9648 13.831C66.9648 13.0205 67.5684 12.5532 68.6396 12.4868L69.8594 12.4165V12.0278C69.8594 11.5522 69.5449 11.2837 68.9375 11.2837C68.4414 11.2837 68.0977 11.4658 67.999 11.7842H67.1387C67.2295 11.0107 67.957 10.5146 68.9785 10.5146C70.1074 10.5146 70.7441 11.0766 70.7441 12.0278V15.1045H69.8887V14.4717H69.8184C69.6756 14.6987 69.4752 14.8837 69.2376 15.0079C69 15.1321 68.7337 15.1911 68.4658 15.1787C68.2768 15.1983 68.0857 15.1782 67.905 15.1195C67.7242 15.0608 67.5578 14.9649 67.4163 14.8379C67.2749 14.7109 67.1617 14.5557 67.0839 14.3823C67.0062 14.2089 66.9656 14.0211 66.9648 13.831ZM69.8594 13.4463V13.0698L68.7598 13.1401C68.1396 13.1816 67.8584 13.3926 67.8584 13.7895C67.8584 14.1948 68.2099 14.4306 68.6934 14.4306C68.835 14.445 68.9781 14.4307 69.1141 14.3886C69.2501 14.3465 69.3763 14.2775 69.4851 14.1856C69.5938 14.0938 69.683 13.981 69.7474 13.854C69.8117 13.727 69.8498 13.5883 69.8594 13.4463Z"
                                      fill="white" />
                                    <path
                                      d="M71.9102 12.8511C71.9102 11.4282 72.6416 10.5269 73.7793 10.5269C74.0607 10.5139 74.34 10.5813 74.5845 10.7212C74.8291 10.8611 75.0287 11.0677 75.1602 11.3169H75.2266V8.84375H76.1152V15.1045H75.2637V14.3931H75.1934C75.0518 14.6406 74.8451 14.8446 74.5959 14.9831C74.3466 15.1216 74.0642 15.1892 73.7793 15.1787C72.6338 15.1787 71.9102 14.2774 71.9102 12.8511ZM72.8282 12.8511C72.8282 13.8062 73.2784 14.3809 74.0313 14.3809C74.7803 14.3809 75.2432 13.7979 75.2432 12.855C75.2432 11.9165 74.7754 11.3252 74.0313 11.3252C73.2832 11.3252 72.8281 11.9038 72.8281 12.8511H72.8282Z"
                                      fill="white" />
                                    <path
                                      d="M79.7952 12.851C79.7669 12.5551 79.8007 12.2565 79.8946 11.9745C79.9884 11.6924 80.1402 11.4331 80.3401 11.2131C80.5401 10.9931 80.7838 10.8173 81.0556 10.6971C81.3275 10.5768 81.6215 10.5146 81.9187 10.5146C82.216 10.5146 82.51 10.5768 82.7818 10.6971C83.0537 10.8173 83.2974 10.9931 83.4973 11.2131C83.6973 11.4331 83.849 11.6924 83.9429 11.9745C84.0367 12.2565 84.0706 12.5551 84.0423 12.851C84.0711 13.1472 84.0377 13.4462 83.9441 13.7288C83.8505 14.0113 83.6988 14.2711 83.4988 14.4915C83.2988 14.7119 83.0549 14.8881 82.7828 15.0086C82.5107 15.1291 82.2164 15.1914 81.9187 15.1914C81.6211 15.1914 81.3268 15.1291 81.0547 15.0086C80.7825 14.8881 80.5386 14.7119 80.3386 14.4915C80.1387 14.2711 79.987 14.0113 79.8934 13.7288C79.7998 13.4462 79.7664 13.1472 79.7952 12.851ZM83.1282 12.851C83.1282 11.875 82.6897 11.3042 81.9202 11.3042C81.1477 11.3042 80.7132 11.875 80.7132 12.851C80.7132 13.8349 81.1478 14.4013 81.9202 14.4013C82.6897 14.4013 83.1282 13.831 83.1282 12.851Z"
                                      fill="white" />
                                    <path
                                      d="M85.2344 10.6011H86.0898V11.3164H86.1563C86.2689 11.0595 86.4589 10.8442 86.6998 10.7003C86.9407 10.5565 87.2204 10.4915 87.5 10.5142C87.7191 10.4977 87.9391 10.5308 88.1437 10.6109C88.3483 10.691 88.5323 10.8161 88.6819 10.9769C88.8316 11.1377 88.9432 11.3302 89.0084 11.54C89.0736 11.7498 89.0908 11.9716 89.0586 12.189V15.104H88.1699V12.4122C88.1699 11.6885 87.8555 11.3287 87.1982 11.3287C87.0495 11.3217 86.901 11.347 86.7629 11.4029C86.6249 11.4587 86.5005 11.5437 86.3984 11.6521C86.2963 11.7605 86.2188 11.8897 86.1713 12.0308C86.1237 12.1719 86.1073 12.3217 86.123 12.4698V15.104H85.2344V10.6011Z"
                                      fill="white" />
                                    <path
                                      d="M94.0771 9.48047V10.6221H95.0527V11.3706H94.0771V13.686C94.0771 14.1577 94.2715 14.3643 94.7139 14.3643C94.8271 14.3639 94.9403 14.357 95.0527 14.3437V15.084C94.8932 15.1125 94.7315 15.1277 94.5693 15.1294C93.5811 15.1294 93.1875 14.7817 93.1875 13.9136V11.3706H92.4727V10.622H93.1875V9.48047H94.0771Z"
                                      fill="white" />
                                    <path
                                      d="M96.2695 8.84375H97.1504V11.3252H97.2207C97.3388 11.0659 97.5341 10.8493 97.7797 10.7049C98.0254 10.5606 98.3097 10.4955 98.5937 10.5186C98.8117 10.5067 99.0295 10.5431 99.2318 10.6251C99.4341 10.7072 99.6158 10.8328 99.7639 10.9932C99.912 11.1535 100.023 11.3446 100.089 11.5527C100.155 11.7608 100.174 11.9809 100.144 12.1973V15.1045H99.2549V12.4165C99.2549 11.6973 98.9199 11.333 98.292 11.333C98.1393 11.3205 97.9857 11.3415 97.8419 11.3945C97.6981 11.4476 97.5677 11.5314 97.4597 11.6401C97.3517 11.7489 97.2687 11.8799 97.2167 12.024C97.1646 12.1682 97.1447 12.3219 97.1582 12.4746V15.1045H96.2696L96.2695 8.84375Z"
                                      fill="white" />
                                    <path
                                      d="M105.324 13.8887C105.203 14.3003 104.942 14.6563 104.585 14.8944C104.228 15.1326 103.799 15.2377 103.373 15.1915C103.076 15.1993 102.781 15.1425 102.509 15.025C102.236 14.9074 101.993 14.732 101.795 14.5109C101.597 14.2897 101.449 14.0282 101.363 13.7444C101.276 13.4605 101.252 13.1612 101.293 12.8673C101.253 12.5724 101.277 12.2724 101.364 11.9878C101.45 11.7031 101.597 11.4403 101.794 11.2173C101.991 10.9942 102.233 10.816 102.505 10.6948C102.777 10.5736 103.071 10.5122 103.369 10.5147C104.622 10.5147 105.378 11.3707 105.378 12.7847V13.0948H102.198V13.1446C102.184 13.3099 102.205 13.4762 102.259 13.6329C102.313 13.7897 102.399 13.9334 102.512 14.0549C102.625 14.1763 102.762 14.2728 102.915 14.3382C103.067 14.4036 103.231 14.4365 103.397 14.4346C103.61 14.4601 103.825 14.4219 104.016 14.3246C104.207 14.2274 104.364 14.0757 104.468 13.8887L105.324 13.8887ZM102.198 12.4376H104.472C104.484 12.2864 104.463 12.1346 104.412 11.9919C104.361 11.8492 104.281 11.7187 104.176 11.6089C104.072 11.499 103.946 11.4122 103.806 11.354C103.666 11.2959 103.515 11.2676 103.364 11.2711C103.21 11.2691 103.058 11.298 102.915 11.3559C102.773 11.4139 102.644 11.4997 102.535 11.6085C102.426 11.7172 102.34 11.8465 102.283 11.9889C102.225 12.1313 102.196 12.2839 102.198 12.4376H102.198Z"
                                      fill="white" />
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_5730_20583">
                                      <rect width="119.664" height="40" fill="white"
                                        transform="translate(0.5625 0.40625)" />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="vs-portfolio-item" style="background-color: #e2e2e4">
                  <div class="row">
                    <div class="col col-12 col-md-4 col-lg-4">
                      <div class="vs-portfolio-item-img">
                        <img src="{{asset('web-assets/images/new-portfolio/Pinmeter Social Networking &amp; Marketplace.png')}}"
                          alt="demand-grocery-img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                      <div class="vs-portfolio-details">
                        <div class="vs-portfolio-heading">
                          <div class="vs-portfolio-heading-top">
                            <div class="vs-portfolio-logo">
                              <img
                                src="{{asset('web-assets/images/new-portfolio/logo/Pinmeter Social Networking &amp; Marketplace.png')}}"
                                alt="app-logo" class="img-fluid" />
                            </div>
                            <div class="vs-portfolio-heading__inner">
                              <h3 class="vs-portfolio-title">
                                <span>Pinmeter Social Networking &amp;
                                  Marketplace</span>
                              </h3>
                            </div>
                          </div>
                          <p class="vs-portfolio-heading-desccription">
                            Pinmeter is the TikTok-style marketplace for
                            service providers where they can see publishes
                            their services and advertise their skills using
                            videos. On the other hand, we will have
                            customers who can browse these service
                            provider&#039;s locations and, skillswise,
                            shortlist, chat, and book them.
                          </p>

                          <div class="vs-portfolio-body">
                            <div class="vs-portfolio-info">
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Region</label>
                                <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                  <img style="padding-right: 10px" width="25%"
                                    src="{{asset('web-assets/images/new-portfolio/flags/small/China.png')}}" alt="app-logo"
                                    class="img-fluid" />

                                  <span>China</span>
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
                                <p class="vs-portfolio-info-text">
                                  Android, iOS
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Technology</label>
                                <p class="vs-portfolio-info-text">
                                  Figma, Flutter, Laravel, MySql
                                </p>
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
                <div class="vs-portfolio-item" style="background-color: #ffeee5">
                  <div class="row">
                    <div class="col col-12 col-md-4 col-lg-4">
                      <div class="vs-portfolio-item-img">
                        <img src="{{asset('web-assets/images/new-portfolio/JAUMO -Dating App.png')}}" alt="demand-grocery-img"
                          class="img-fluid" />
                      </div>
                    </div>
                    <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                      <div class="vs-portfolio-details">
                        <div class="vs-portfolio-heading">
                          <div class="vs-portfolio-heading-top">
                            <div class="vs-portfolio-logo">
                              <img src="{{asset('web-assets/images/new-portfolio/logo/JAUMO -Dating App.png')}}" alt="app-logo"
                                class="img-fluid" />
                            </div>
                            <div class="vs-portfolio-heading__inner">
                              <h3 class="vs-portfolio-title">
                                <span>JAUMO -Dating App</span>
                              </h3>
                            </div>
                          </div>
                          <p class="vs-portfolio-heading-desccription">
                            JAUMO is a dating app that allows users to meet
                            new people, chat, and find love or friendship.
                            It has a user-friendly interface and offers
                            features such as profile verification, photo
                            moderation, and location-based matching.
                          </p>

                          <div class="vs-portfolio-body">
                            <div class="vs-portfolio-info">
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Region</label>
                                <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                  <img style="padding-right: 10px" width="25%"
                                    src="{{asset('web-assets/images/new-portfolio/flags/small/Germany.png')}}" alt="app-logo"
                                    class="img-fluid" />

                                  <span>Germany</span>
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Duration</label>
                                <p class="vs-portfolio-info-text">
                                  7 months
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Platforms</label>
                                <p class="vs-portfolio-info-text">
                                  Android, iOS
                                </p>
                              </div>
                              <div class="vs-portfolio-info-item">
                                <label class="vs-portfolio-info-label">Technology</label>
                                <p class="vs-portfolio-info-text">
                                  Figma, React Native, Python
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="vs-portfolio-footer">


                            <div class="vs-portfolio-footer-item">
                              <a href="https://play.google.com/store/apps/details?id=com.jaumo&amp;hl=en_IN&amp;gl=US"
                                class="vs-portfolio-footer-link" target="_blank">
                                <svg width="136" height="41" viewBox="0 0 136 41" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_5730_20582)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 40.4062H5.56434C2.80762 40.4062 0.5625 38.1519 0.5625 35.4062V5.40625C0.5625 2.65064 2.80762 0.40625 5.56434 0.40625H130.561C133.315 0.40625 135.562 2.65064 135.562 5.40625V35.4062C135.562 38.1519 133.315 40.4062 130.561 40.4062Z"
                                      fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M130.561 1.20675C132.873 1.20675 134.765 3.09453 134.765 5.40625V35.4062C134.765 37.718 132.885 39.6058 130.561 39.6058H5.56434C3.25217 39.6058 1.35971 37.718 1.35971 35.4062V5.40625C1.35971 3.09453 3.23975 1.20675 5.56434 1.20675H130.561ZM130.561 0.40625H5.56434C2.80762 0.40625 0.5625 2.66061 0.5625 5.40625V35.4062C0.5625 38.1619 2.80762 40.4062 5.56434 40.4062H130.561C133.315 40.4062 135.562 38.1619 135.562 35.4062V5.40625C135.562 2.66061 133.315 0.40625 130.561 0.40625Z"
                                      fill="#A6A6A6" />
                                    <path
                                      d="M71.6816 13.6382C70.7801 13.6382 70.0202 13.3215 69.4192 12.6981C68.8231 12.0921 68.4903 11.2567 68.5052 10.4038C68.5052 9.49357 68.8132 8.723 69.4192 8.11202C70.0177 7.48858 70.7776 7.17188 71.6792 7.17188C72.5707 7.17188 73.3307 7.48858 73.9416 8.11202C74.5476 8.74295 74.8556 9.51352 74.8556 10.4038C74.8456 11.3165 74.5377 12.0871 73.9416 12.6956C73.3431 13.324 72.5832 13.6382 71.6816 13.6382ZM44.8571 13.6382C43.9755 13.6382 43.2106 13.3265 42.5847 12.7105C41.9638 12.0971 41.6484 11.3215 41.6484 10.4063C41.6484 9.49108 41.9638 8.71552 42.5847 8.10205C43.1982 7.48609 43.9631 7.17437 44.8571 7.17437C45.2942 7.17437 45.7189 7.26165 46.1262 7.43871C46.5261 7.61078 46.8514 7.84519 47.0923 8.13197L47.1519 8.20429L46.4789 8.86764L46.4093 8.78534C46.0294 8.33148 45.5202 8.10953 44.8472 8.10953C44.2462 8.10953 43.7222 8.32399 43.29 8.74794C42.8554 9.17437 42.6344 9.73297 42.6344 10.4088C42.6344 11.0846 42.8554 11.6432 43.29 12.0696C43.7222 12.4936 44.2462 12.708 44.8472 12.708C45.488 12.708 46.0269 12.4936 46.4466 12.0696C46.6949 11.8203 46.8489 11.4711 46.9036 11.0297H44.7454V10.0971H47.8299L47.8423 10.1819C47.8647 10.339 47.887 10.5011 47.887 10.6507C47.887 11.511 47.6288 12.2068 47.1171 12.7205C46.536 13.329 45.776 13.6382 44.8571 13.6382ZM80.523 13.506H79.5718L76.6586 8.82524L76.6835 9.66813V13.5035H75.7323V7.30654H76.8176L76.8474 7.35392L79.5867 11.7629L79.5618 10.9225V7.30654H80.523V13.506ZM64.5341 13.506H63.5705V8.23921H61.8991V7.30654H66.203V8.23921H64.5316V13.506H64.5341ZM61.1143 13.506H60.1531V7.30654H61.1143V13.506ZM55.7126 13.506H54.7515V8.23921H53.0801V7.30654H57.384V8.23921H55.7126V13.506ZM52.4716 13.4961H48.7861V7.30654H52.4716V8.23921H49.7497V9.93995H52.2059V10.8626H49.7497V12.5634H52.4716V13.4961ZM70.1245 12.0572C70.5541 12.4886 71.0757 12.7055 71.6816 12.7055C72.305 12.7055 72.8141 12.4936 73.2388 12.0572C73.661 11.6332 73.8746 11.0771 73.8746 10.4063C73.8746 9.73547 73.661 9.17686 73.2413 8.75542C72.8116 8.32399 72.2876 8.10704 71.6841 8.10704C71.0608 8.10704 70.5516 8.31901 70.1294 8.75542C69.7072 9.17936 69.4937 9.73547 69.4937 10.4063C69.4937 11.0771 69.7048 11.6357 70.1245 12.0572Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M68.4134 22.1617C66.0664 22.1617 64.164 23.9497 64.164 26.416C64.164 28.8599 66.0788 30.6704 68.4134 30.6704C70.7603 30.6704 72.6627 28.8699 72.6627 26.416C72.6627 23.9497 70.7603 22.1617 68.4134 22.1617ZM68.4134 28.9846C67.1294 28.9846 66.0242 27.9173 66.0242 26.4061C66.0242 24.8724 67.1319 23.8275 68.4134 23.8275C69.6973 23.8275 70.8025 24.8724 70.8025 26.4061C70.805 27.9273 69.6973 28.9846 68.4134 28.9846ZM59.1423 22.1617C56.7954 22.1617 54.893 23.9497 54.893 26.416C54.893 28.8599 56.8078 30.6704 59.1423 30.6704C61.4893 30.6704 63.3916 28.8699 63.3916 26.416C63.3916 23.9497 61.4868 22.1617 59.1423 22.1617ZM59.1423 28.9846C57.8583 28.9846 56.7531 27.9173 56.7531 26.4061C56.7531 24.8724 57.8608 23.8275 59.1423 23.8275C60.4263 23.8275 61.5315 24.8724 61.5315 26.4061C61.5315 27.9273 60.4263 28.9846 59.1423 28.9846ZM48.1104 23.4609V25.2614H52.4144C52.2828 26.2714 51.95 27.017 51.4409 27.5283C50.81 28.1617 49.8365 28.8499 48.1204 28.8499C45.4754 28.8499 43.4066 26.7053 43.4066 24.0494C43.4066 21.3936 45.4754 19.2489 48.1204 19.2489C49.5484 19.2489 50.589 19.815 51.3614 20.5382L52.633 19.2614C51.5601 18.229 50.132 17.4385 48.1303 17.4385C44.5019 17.4385 41.457 20.4061 41.457 24.0395C41.457 27.6829 44.4994 30.6405 48.1303 30.6405C50.0898 30.6405 51.5601 29.9971 52.7224 28.7851C53.907 27.5956 54.282 25.9173 54.282 24.5632C54.282 24.1417 54.2497 23.7627 54.1827 23.441H48.1079C48.1104 23.4385 48.1104 23.4609 48.1104 23.4609ZM93.2338 24.8624C92.8787 23.9073 91.8058 22.1517 89.6054 22.1517C87.4248 22.1517 85.6119 23.8749 85.6119 26.4061C85.6119 28.7951 87.405 30.6604 89.8165 30.6604C91.7536 30.6604 92.8812 29.4709 93.3456 28.7726L91.9076 27.8051C91.4308 28.5158 90.7677 28.9821 89.8264 28.9821C88.8752 28.9821 88.2096 28.5482 87.7676 27.6928L93.4325 25.3362C93.4325 25.3387 93.2338 24.8624 93.2338 24.8624ZM87.4571 26.2839C87.4124 24.6405 88.7287 23.8051 89.67 23.8051C90.4125 23.8051 91.0309 24.1716 91.242 24.7053L87.4571 26.2839ZM82.8551 30.4061H84.7153V17.9073H82.8551V30.4061ZM79.8004 23.1068H79.7333C79.3136 22.6056 78.5164 22.1517 77.4981 22.1517C75.3846 22.1517 73.4376 24.0195 73.4376 26.4185C73.4376 28.8076 75.3747 30.6529 77.4981 30.6529C78.504 30.6529 79.3136 30.1966 79.7333 29.6854H79.8004V30.2963C79.8004 31.9198 78.9361 32.7951 77.5428 32.7951C76.4029 32.7951 75.6951 31.9721 75.407 31.2839L73.7902 31.9622C74.2546 33.0844 75.4939 34.4734 77.5404 34.4734C79.7209 34.4734 81.5687 33.1841 81.5687 30.0395V22.4061H79.8103V23.1068C79.8128 23.1068 79.8004 23.1068 79.8004 23.1068ZM77.6645 28.9846C76.3806 28.9846 75.3077 27.9073 75.3077 26.4185C75.3077 24.9173 76.3806 23.83 77.6645 23.83C78.9361 23.83 79.9221 24.9297 79.9221 26.4185C79.9345 27.9073 78.9386 28.9846 77.6645 28.9846ZM101.944 17.9073H97.4956V30.4061H99.3558V25.6729H101.946C104.005 25.6729 106.029 24.1741 106.029 21.7951C106.029 19.416 104.012 17.9073 101.944 17.9073ZM101.998 23.9273H99.3533V19.638H101.998C103.392 19.638 104.179 20.7926 104.179 21.7826C104.179 22.7627 103.382 23.9273 101.998 23.9273ZM113.485 22.1392C112.134 22.1392 110.74 22.7402 110.164 24.0494L111.813 24.7377C112.168 24.0494 112.819 23.815 113.507 23.815C114.471 23.815 115.444 24.3936 115.466 25.426V25.5582C115.134 25.3686 114.404 25.0794 113.529 25.0794C111.749 25.0794 109.943 26.0569 109.943 27.8898C109.943 29.5682 111.403 30.6455 113.03 30.6455C114.279 30.6455 114.967 30.0794 115.397 29.4235H115.464V30.3911H117.257V25.6031C117.257 23.3736 115.608 22.1392 113.485 22.1392ZM113.251 28.9846C112.643 28.9846 111.791 28.6854 111.791 27.9173C111.791 26.9497 112.854 26.5831 113.76 26.5831C114.58 26.5831 114.967 26.7602 115.454 27.0046C115.32 28.1268 114.376 28.9746 113.251 28.9846ZM123.799 22.4061L121.663 27.8275H121.596L119.383 22.4061H117.381L120.702 29.9846L118.809 34.1966H120.746L125.855 22.4061H123.799ZM107.055 30.4061H108.915V17.9073H107.055V30.4061Z"
                                      fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.9545 7.9394C10.6664 8.25112 10.5 8.72743 10.5 9.35087V31.4631C10.5 32.0865 10.6664 32.5628 10.9644 32.8621L11.0414 32.9294L23.3796 20.5404V20.2636L11.0315 7.87207L10.9545 7.9394Z"
                                      fill="url(#paint0_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4824 24.6835L23.3672 20.5513V20.2621L27.4824 16.1299L27.5718 16.1847L32.4396 18.9628C33.8329 19.7508 33.8329 21.0526 32.4396 21.8506L27.5718 24.6286L27.4824 24.6835Z"
                                      fill="url(#paint1_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 24.6282L23.3683 20.4062L10.9531 32.8726C11.4076 33.3614 12.1701 33.4162 13.0219 32.9399L27.5729 24.6282Z"
                                      fill="url(#paint2_linear_5730_20582)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.5729 16.1847L13.0219 7.88543C12.1701 7.39665 11.4051 7.46399 10.9531 7.95276L23.3683 20.4066L27.5729 16.1847Z"
                                      fill="url(#paint3_linear_5730_20582)" />
                                    <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.4854 24.5381L13.0336 32.7824C12.2265 33.2488 11.5063 33.2164 11.0418 32.7924L10.9648 32.8697L11.0418 32.9371C11.5063 33.3585 12.2265 33.3934 13.0336 32.9271L27.5847 24.6279L27.4854 24.5381Z"
                                      fill="black" />
                                    <path opacity="0.12" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M32.4422 21.7055L27.4727 24.5384L27.5621 24.6282L32.4298 21.8501C33.1277 21.4511 33.4704 20.9274 33.4704 20.4062C33.4282 20.8851 33.073 21.3389 32.4422 21.7055Z"
                                      fill="black" />
                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.0233 8.02954L32.442 19.1069C33.0728 19.4635 33.428 19.9298 33.4826 20.4061C33.4826 19.8849 33.1399 19.3612 32.442 18.9622L13.0233 7.88491C11.63 7.08441 10.5 7.75274 10.5 9.35124V9.49588C10.5 7.89488 11.63 7.23902 13.0233 8.02954Z"
                                      fill="white" />
                                  </g>
                                  <defs>
                                    <linearGradient id="paint0_linear_5730_20582" x1="22.2729" y1="9.11231"
                                      x2="2.49849" y2="14.3596" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#00A0FF" />
                                      <stop offset="0.00657" stop-color="#00A1FF" />
                                      <stop offset="0.2601" stop-color="#00BEFF" />
                                      <stop offset="0.5122" stop-color="#00D2FF" />
                                      <stop offset="0.7604" stop-color="#00DFFF" />
                                      <stop offset="1" stop-color="#00E3FF" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_5730_20582" x1="34.2565" y1="20.4067"
                                      x2="10.1588" y2="20.4067" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FFE000" />
                                      <stop offset="0.4087" stop-color="#FFBD00" />
                                      <stop offset="0.7754" stop-color="#FFA500" />
                                      <stop offset="1" stop-color="#FF9C00" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_5730_20582" x1="25.2866" y1="22.7036"
                                      x2="9.32386" y2="49.4601" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#FF3A44" />
                                      <stop offset="1" stop-color="#C31162" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_5730_20582" x1="7.82684" y1="0.585421"
                                      x2="14.9485" y2="12.5353" gradientUnits="userSpaceOnUse">
                                      <stop stop-color="#32A071" />
                                      <stop offset="0.0685" stop-color="#2DA771" />
                                      <stop offset="0.4762" stop-color="#15CF74" />
                                      <stop offset="0.8009" stop-color="#06E775" />
                                      <stop offset="1" stop-color="#00F076" />
                                    </linearGradient>
                                    <clipPath id="clip0_5730_20582">
                                      <rect width="135" height="40" fill="white"
                                        transform="translate(0.5625 0.40625)" />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </a>
                            </div>

                            <div class="vs-portfolio-footer-item">
                              <a href="https://apps.apple.com/in/app/jaumo-dating-app-chat-flirt/id522681493"
                                class="vs-portfolio-footer-link" target="_blank">
                                <svg width="121" height="41" viewBox="0 0 121 41" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_5730_20583)">
                                    <path
                                      d="M110.697 0.40638H10.0972C9.73048 0.40638 9.36818 0.40638 9.00245 0.40838C8.6963 0.41038 8.39259 0.41619 8.0835 0.42108C7.41201 0.428982 6.74211 0.488056 6.0796 0.59779C5.41802 0.709913 4.77717 0.921296 4.17872 1.22479C3.581 1.53085 3.03485 1.92855 2.56007 2.40345C2.0828 2.87702 1.68496 3.4244 1.38185 4.02454C1.0779 4.62349 0.867141 5.26532 0.75685 5.92786C0.645511 6.58957 0.585598 7.2589 0.57765 7.92986C0.56837 8.23646 0.56739 8.54408 0.5625 8.85072V31.965C0.56739 32.2755 0.56837 32.5763 0.57765 32.8869C0.585601 33.5578 0.645513 34.2271 0.75685 34.8888C0.866836 35.5517 1.07761 36.1939 1.38185 36.7931C1.68483 37.3913 2.08272 37.9364 2.56007 38.4074C3.03304 38.8844 3.57955 39.2824 4.17872 39.5861C4.77717 39.8904 5.41795 40.103 6.0796 40.2169C6.74222 40.3257 7.41206 40.3848 8.0835 40.3937C8.39259 40.4005 8.6963 40.4044 9.00245 40.4044C9.36817 40.4064 9.7305 40.4064 10.0972 40.4064H110.697C111.057 40.4064 111.422 40.4064 111.781 40.4044C112.086 40.4044 112.398 40.4005 112.703 40.3937C113.373 40.3853 114.042 40.3262 114.703 40.2169C115.367 40.1022 116.01 39.8896 116.611 39.5861C117.21 39.2822 117.756 38.8842 118.229 38.4074C118.705 37.9346 119.103 37.3898 119.41 36.7931C119.712 36.1935 119.921 35.5513 120.029 34.8888C120.141 34.227 120.203 33.5579 120.215 32.8869C120.219 32.5763 120.219 32.2755 120.219 31.965C120.227 31.6017 120.227 31.2404 120.227 30.8712V9.94251C120.227 9.5763 120.227 9.21302 120.219 8.85072C120.219 8.54408 120.219 8.23646 120.215 7.92982C120.203 7.2588 120.141 6.58962 120.029 5.92782C119.921 5.26566 119.712 4.62388 119.41 4.0245C118.793 2.82158 117.814 1.84241 116.611 1.2247C116.01 0.921947 115.367 0.71062 114.703 0.5977C114.042 0.487483 113.373 0.428388 112.703 0.42094C112.398 0.41606 112.086 0.4102 111.781 0.40825C111.422 0.40625 111.057 0.40625 110.697 0.40625V0.40638Z"
                                      fill="#A6A6A6" />
                                    <path
                                      d="M9.00541 39.5312C8.70073 39.5312 8.40341 39.5274 8.10112 39.5205C7.47491 39.5124 6.85015 39.4579 6.23198 39.3574C5.65557 39.2582 5.09719 39.0735 4.57524 38.8096C4.05809 38.5478 3.5864 38.2045 3.17824 37.7929C2.76418 37.3862 2.41946 36.9145 2.15773 36.3965C1.89312 35.875 1.71 35.3162 1.61473 34.7393C1.51186 34.1194 1.4562 33.4926 1.44823 32.8643C1.44189 32.6534 1.43359 31.9512 1.43359 31.9512V8.85059C1.43359 8.85059 1.44243 8.15918 1.44828 7.95605C1.45591 7.32873 1.51125 6.7029 1.61381 6.08398C1.70925 5.5055 1.89252 4.945 2.15727 4.42188C2.41804 3.90419 2.76085 3.43211 3.17241 3.02393C3.58352 2.61187 4.05672 2.26685 4.57475 2.00146C5.0955 1.73834 5.65283 1.55498 6.22807 1.45752C6.84827 1.35609 7.47519 1.30125 8.10358 1.29346L9.0059 1.28125H111.774L112.688 1.29395C113.31 1.30135 113.931 1.3557 114.546 1.45654C115.127 1.55523 115.69 1.73987 116.217 2.00439C117.255 2.53924 118.099 3.38541 118.632 4.42432C118.892 4.94383 119.073 5.49976 119.167 6.07324C119.271 6.69724 119.329 7.32799 119.341 7.96045C119.344 8.24365 119.344 8.54785 119.344 8.85059C119.352 9.22559 119.352 9.58252 119.352 9.94238V30.871C119.352 31.2344 119.352 31.5889 119.344 31.9463C119.344 32.2715 119.344 32.5693 119.34 32.8759C119.328 33.4971 119.271 34.1166 119.169 34.7295C119.076 35.3105 118.894 35.8738 118.629 36.3994C118.365 36.9119 118.023 37.3795 117.613 37.7851C117.205 38.1989 116.732 38.5442 116.214 38.8077C115.689 39.0736 115.126 39.259 114.546 39.3574C113.928 39.4584 113.303 39.5129 112.677 39.5205C112.384 39.5274 112.077 39.5312 111.779 39.5312L110.695 39.5332L9.00541 39.5312Z"
                                      fill="black" />
                                    <path
                                      d="M25.3325 20.7076C25.3432 19.8729 25.5649 19.0545 25.977 18.3286C26.389 17.6026 26.9779 16.9927 27.689 16.5555C27.2373 15.9103 26.6413 15.3794 25.9485 15.0048C25.2557 14.6303 24.4851 14.4224 23.6979 14.3978C22.0186 14.2216 20.3907 15.4026 19.535 15.4026C18.6627 15.4026 17.3452 14.4153 15.9265 14.4445C15.0088 14.4742 14.1144 14.741 13.3306 15.2191C12.5467 15.6971 11.9 16.3701 11.4535 17.1724C9.51955 20.5208 10.9621 25.4418 12.8147 28.1485C13.7416 29.4738 14.8249 30.9543 16.2424 30.9018C17.6294 30.8442 18.1475 30.0173 19.8218 30.0173C21.4805 30.0173 21.9666 30.9018 23.4128 30.8684C24.9012 30.8442 25.8389 29.5371 26.7333 28.1992C27.3993 27.2549 27.9117 26.2112 28.2517 25.1067C27.387 24.741 26.6491 24.1288 26.13 23.3465C25.6108 22.5642 25.3335 21.6464 25.3325 20.7076Z"
                                      fill="white" />
                                    <path
                                      d="M22.602 12.6176C23.4136 11.6434 23.8134 10.3912 23.7165 9.12695C22.4767 9.25717 21.3315 9.84973 20.509 10.7866C20.1068 11.2442 19.7988 11.7767 19.6026 12.3534C19.4063 12.9302 19.3257 13.54 19.3653 14.148C19.9854 14.1543 20.5989 14.0199 21.1596 13.7548C21.7202 13.4898 22.2134 13.1009 22.602 12.6176Z"
                                      fill="white" />
                                    <path
                                      d="M42.8672 27.5459H38.1338L36.9971 30.9024H34.9922L39.4756 18.4844H41.5586L46.042 30.9024H44.0029L42.8672 27.5459ZM38.624 25.9971H42.376L40.5264 20.5498H40.4746L38.624 25.9971Z"
                                      fill="white" />
                                    <path
                                      d="M55.7237 26.3757C55.7237 29.1892 54.2178 30.9968 51.9453 30.9968C51.3697 31.0269 50.7972 30.8943 50.2934 30.6142C49.7896 30.334 49.3749 29.9177 49.0967 29.4128H49.0537V33.8972H47.1953V21.8484H48.9942V23.3542H49.0284C49.3193 22.8517 49.741 22.4376 50.2487 22.1557C50.7563 21.8739 51.3308 21.7349 51.9112 21.7536C54.209 21.7536 55.7237 23.57 55.7237 26.3757ZM53.8135 26.3757C53.8135 24.5427 52.8662 23.3376 51.4209 23.3376C50.001 23.3376 49.0459 24.5681 49.0459 26.3757C49.0459 28.1999 50.001 29.4216 51.4209 29.4216C52.8662 29.4216 53.8135 28.2253 53.8135 26.3757Z"
                                      fill="white" />
                                    <path
                                      d="M65.6885 26.3757C65.6885 29.1892 64.1826 30.9968 61.9102 30.9968C61.3345 31.0269 60.762 30.8943 60.2582 30.6142C59.7544 30.334 59.3397 29.9177 59.0616 29.4128H59.0186V33.8972H57.1602V21.8483H58.959V23.3542H58.9932C59.2841 22.8517 59.7058 22.4375 60.2135 22.1557C60.7211 21.8739 61.2957 21.7349 61.876 21.7536C64.1739 21.7536 65.6885 23.57 65.6885 26.3757ZM63.7783 26.3757C63.7783 24.5427 62.8311 23.3376 61.3858 23.3376C59.9658 23.3376 59.0108 24.5681 59.0108 26.3757C59.0108 28.1999 59.9658 29.4216 61.3858 29.4216C62.8311 29.4216 63.7784 28.2253 63.7784 26.3757H63.7783Z"
                                      fill="white" />
                                    <path
                                      d="M72.2735 27.4424C72.4112 28.6739 73.6075 29.4824 75.2422 29.4824C76.8086 29.4824 77.9356 28.6738 77.9356 27.5635C77.9356 26.5996 77.2559 26.0225 75.6465 25.627L74.0371 25.2393C71.7569 24.6885 70.6983 23.6221 70.6983 21.8916C70.6983 19.749 72.5655 18.2773 75.2168 18.2773C77.8408 18.2773 79.6397 19.749 79.7002 21.8916H77.8242C77.7119 20.6523 76.6875 19.9043 75.1904 19.9043C73.6934 19.9043 72.669 20.6611 72.669 21.7627C72.669 22.6406 73.3233 23.1572 74.9238 23.5527L76.292 23.8886C78.8398 24.4912 79.8984 25.5146 79.8984 27.331C79.8984 29.6543 78.0479 31.1093 75.1045 31.1093C72.3506 31.1093 70.4912 29.6884 70.3711 27.4423L72.2735 27.4424Z"
                                      fill="white" />
                                    <path
                                      d="M83.9101 19.7061V21.8486H85.6318V23.3203H83.9101V28.3115C83.9101 29.0869 84.2549 29.4482 85.0117 29.4482C85.2161 29.4447 85.4202 29.4303 85.623 29.4052V30.8681C85.2828 30.9317 84.9369 30.9605 84.5908 30.9541C82.7578 30.9541 82.043 30.2656 82.043 28.5097V23.3203H80.7266V21.8486H82.0429V19.7061H83.9101Z"
                                      fill="white" />
                                    <path
                                      d="M86.6289 26.376C86.6289 23.5273 88.3066 21.7373 90.9229 21.7373C93.5479 21.7373 95.2178 23.5273 95.2178 26.376C95.2178 29.2324 93.5566 31.0146 90.9229 31.0146C88.29 31.0146 86.6289 29.2324 86.6289 26.376ZM93.3242 26.376C93.3242 24.4219 92.4287 23.2686 90.9228 23.2686C89.417 23.2686 88.5225 24.4307 88.5225 26.376C88.5225 28.3379 89.417 29.4824 90.9228 29.4824C92.4287 29.4824 93.3242 28.3379 93.3242 26.376H93.3242Z"
                                      fill="white" />
                                    <path
                                      d="M96.75 21.8483H98.5225V23.3893H98.5655C98.6854 22.908 98.9673 22.4826 99.3639 22.1848C99.7605 21.8869 100.248 21.7346 100.743 21.7535C100.957 21.7528 101.171 21.776 101.38 21.8229V23.5611C101.11 23.4785 100.828 23.4406 100.545 23.4488C100.275 23.4379 100.006 23.4855 99.756 23.5884C99.5061 23.6913 99.2815 23.847 99.0975 24.0449C98.9135 24.2428 98.7746 24.4781 98.6901 24.7348C98.6057 24.9915 98.5778 25.2634 98.6084 25.5318V30.902H96.75L96.75 21.8483Z"
                                      fill="white" />
                                    <path
                                      d="M109.948 28.2432C109.698 29.8867 108.098 31.0146 106.05 31.0146C103.416 31.0146 101.781 29.25 101.781 26.4189C101.781 23.5791 103.425 21.7373 105.972 21.7373C108.477 21.7373 110.052 23.458 110.052 26.2031V26.8398H103.657V26.9521C103.628 27.2853 103.669 27.621 103.78 27.9369C103.89 28.2527 104.066 28.5415 104.296 28.784C104.527 29.0266 104.806 29.2173 105.116 29.3436C105.425 29.4699 105.759 29.5289 106.093 29.5166C106.532 29.5577 106.973 29.456 107.349 29.2266C107.726 28.9972 108.019 28.6522 108.184 28.2432L109.948 28.2432ZM103.666 25.541H108.192C108.209 25.2414 108.164 24.9416 108.059 24.6604C107.954 24.3792 107.793 24.1227 107.584 23.9069C107.376 23.6911 107.125 23.5208 106.847 23.4066C106.57 23.2923 106.272 23.2367 105.972 23.2432C105.669 23.2414 105.369 23.2995 105.089 23.4142C104.809 23.529 104.554 23.6981 104.34 23.9117C104.126 24.1253 103.956 24.3793 103.84 24.6589C103.724 24.9386 103.665 25.2384 103.666 25.541V25.541Z"
                                      fill="white" />
                                    <path
                                      d="M38.3896 9.13763C38.7793 9.10967 39.1702 9.16853 39.5343 9.30996C39.8984 9.4514 40.2266 9.67188 40.4952 9.9555C40.7638 10.2391 40.9661 10.5788 41.0875 10.9501C41.2089 11.3214 41.2464 11.715 41.1973 12.1025C41.1973 14.0087 40.167 15.1045 38.3896 15.1045H36.2344V9.13763H38.3896ZM37.1611 14.2606H38.2861C38.5645 14.2773 38.8431 14.2316 39.1017 14.127C39.3602 14.0224 39.5922 13.8614 39.7807 13.6559C39.9692 13.4503 40.1094 13.2053 40.1913 12.9387C40.2732 12.6721 40.2946 12.3906 40.2539 12.1146C40.2916 11.8398 40.2681 11.56 40.1849 11.2954C40.1018 11.0307 39.9612 10.7877 39.7731 10.5838C39.5851 10.3798 39.3542 10.22 39.0971 10.1158C38.8401 10.0116 38.5631 9.96547 38.2861 9.98084H37.1611V14.2606Z"
                                      fill="white" />
                                    <path
                                      d="M42.2444 12.851C42.2161 12.5551 42.25 12.2565 42.3438 11.9745C42.4376 11.6924 42.5894 11.4331 42.7893 11.2131C42.9893 10.9931 43.233 10.8173 43.5048 10.6971C43.7767 10.5768 44.0707 10.5146 44.368 10.5146C44.6652 10.5146 44.9592 10.5768 45.2311 10.6971C45.5029 10.8173 45.7466 10.9931 45.9466 11.2131C46.1465 11.4331 46.2983 11.6924 46.3921 11.9745C46.486 12.2565 46.5198 12.5551 46.4915 12.851C46.5203 13.1472 46.4869 13.4462 46.3933 13.7288C46.2997 14.0113 46.148 14.2711 45.948 14.4915C45.7481 14.7119 45.5042 14.8881 45.232 15.0086C44.9599 15.1291 44.6656 15.1914 44.368 15.1914C44.0703 15.1914 43.776 15.1291 43.5039 15.0086C43.2318 14.8881 42.9879 14.7119 42.7879 14.4915C42.5879 14.2711 42.4362 14.0113 42.3426 13.7288C42.249 13.4462 42.2156 13.1472 42.2444 12.851ZM45.5774 12.851C45.5774 11.875 45.1389 11.3042 44.3694 11.3042C43.597 11.3042 43.1624 11.875 43.1624 12.851C43.1624 13.8349 43.597 14.4013 44.3694 14.4013C45.139 14.4013 45.5774 13.831 45.5774 12.851H45.5774Z"
                                      fill="white" />
                                    <path
                                      d="M52.1367 15.1045H51.2148L50.2842 11.7881H50.2139L49.2871 15.1045H48.374L47.1328 10.6016H48.0342L48.8408 14.0376H48.9072L49.833 10.6016H50.6856L51.6113 14.0376H51.6816L52.4844 10.6016H53.373L52.1367 15.1045Z"
                                      fill="white" />
                                    <path
                                      d="M54.418 10.6011H55.2734V11.3164H55.3398C55.4525 11.0595 55.6425 10.8442 55.8834 10.7003C56.1242 10.5565 56.404 10.4915 56.6836 10.5142C56.9027 10.4977 57.1227 10.5308 57.3273 10.6109C57.5319 10.691 57.7158 10.8161 57.8655 10.9769C58.0152 11.1377 58.1268 11.3302 58.192 11.54C58.2572 11.7498 58.2743 11.9716 58.2422 12.189V15.104H57.3535V12.4122C57.3535 11.6885 57.0391 11.3287 56.3818 11.3287C56.2331 11.3217 56.0846 11.347 55.9465 11.4029C55.8085 11.4587 55.6841 11.5437 55.582 11.6521C55.4799 11.7605 55.4024 11.8897 55.3549 12.0308C55.3073 12.1719 55.2909 12.3217 55.3066 12.4698V15.104H54.418L54.418 10.6011Z"
                                      fill="white" />
                                    <path d="M59.6562 8.84375H60.5449V15.1045H59.6562V8.84375Z" fill="white" />
                                    <path
                                      d="M61.7796 12.8511C61.7513 12.5552 61.7851 12.2566 61.879 11.9745C61.9729 11.6924 62.1246 11.4331 62.3246 11.2131C62.5246 10.9931 62.7683 10.8173 63.0402 10.6971C63.312 10.5768 63.606 10.5146 63.9033 10.5146C64.2006 10.5146 64.4946 10.5768 64.7665 10.6971C65.0384 10.8173 65.2821 10.9931 65.4821 11.2131C65.682 11.4331 65.8338 11.6924 65.9277 11.9745C66.0215 12.2566 66.0554 12.5552 66.0271 12.8511C66.0559 13.1473 66.0224 13.4463 65.9288 13.7289C65.8352 14.0114 65.6835 14.2712 65.4835 14.4916C65.2835 14.712 65.0396 14.8881 64.7674 15.0087C64.4953 15.1292 64.201 15.1915 63.9033 15.1915C63.6057 15.1915 63.3114 15.1292 63.0392 15.0087C62.7671 14.8881 62.5232 14.712 62.3232 14.4916C62.1232 14.2712 61.9715 14.0114 61.8778 13.7289C61.7842 13.4463 61.7507 13.1473 61.7796 12.8511ZM65.1126 12.8511C65.1126 11.875 64.6741 11.3042 63.9046 11.3042C63.1321 11.3042 62.6976 11.875 62.6976 12.8511C62.6976 13.835 63.1321 14.4014 63.9046 14.4014C64.6741 14.4014 65.1126 13.8311 65.1126 12.8511H65.1126Z"
                                      fill="white" />
                                    <path
                                      d="M66.9648 13.831C66.9648 13.0205 67.5684 12.5532 68.6396 12.4868L69.8594 12.4165V12.0278C69.8594 11.5522 69.5449 11.2837 68.9375 11.2837C68.4414 11.2837 68.0977 11.4658 67.999 11.7842H67.1387C67.2295 11.0107 67.957 10.5146 68.9785 10.5146C70.1074 10.5146 70.7441 11.0766 70.7441 12.0278V15.1045H69.8887V14.4717H69.8184C69.6756 14.6987 69.4752 14.8837 69.2376 15.0079C69 15.1321 68.7337 15.1911 68.4658 15.1787C68.2768 15.1983 68.0857 15.1782 67.905 15.1195C67.7242 15.0608 67.5578 14.9649 67.4163 14.8379C67.2749 14.7109 67.1617 14.5557 67.0839 14.3823C67.0062 14.2089 66.9656 14.0211 66.9648 13.831ZM69.8594 13.4463V13.0698L68.7598 13.1401C68.1396 13.1816 67.8584 13.3926 67.8584 13.7895C67.8584 14.1948 68.2099 14.4306 68.6934 14.4306C68.835 14.445 68.9781 14.4307 69.1141 14.3886C69.2501 14.3465 69.3763 14.2775 69.4851 14.1856C69.5938 14.0938 69.683 13.981 69.7474 13.854C69.8117 13.727 69.8498 13.5883 69.8594 13.4463Z"
                                      fill="white" />
                                    <path
                                      d="M71.9102 12.8511C71.9102 11.4282 72.6416 10.5269 73.7793 10.5269C74.0607 10.5139 74.34 10.5813 74.5845 10.7212C74.8291 10.8611 75.0287 11.0677 75.1602 11.3169H75.2266V8.84375H76.1152V15.1045H75.2637V14.3931H75.1934C75.0518 14.6406 74.8451 14.8446 74.5959 14.9831C74.3466 15.1216 74.0642 15.1892 73.7793 15.1787C72.6338 15.1787 71.9102 14.2774 71.9102 12.8511ZM72.8282 12.8511C72.8282 13.8062 73.2784 14.3809 74.0313 14.3809C74.7803 14.3809 75.2432 13.7979 75.2432 12.855C75.2432 11.9165 74.7754 11.3252 74.0313 11.3252C73.2832 11.3252 72.8281 11.9038 72.8281 12.8511H72.8282Z"
                                      fill="white" />
                                    <path
                                      d="M79.7952 12.851C79.7669 12.5551 79.8007 12.2565 79.8946 11.9745C79.9884 11.6924 80.1402 11.4331 80.3401 11.2131C80.5401 10.9931 80.7838 10.8173 81.0556 10.6971C81.3275 10.5768 81.6215 10.5146 81.9187 10.5146C82.216 10.5146 82.51 10.5768 82.7818 10.6971C83.0537 10.8173 83.2974 10.9931 83.4973 11.2131C83.6973 11.4331 83.849 11.6924 83.9429 11.9745C84.0367 12.2565 84.0706 12.5551 84.0423 12.851C84.0711 13.1472 84.0377 13.4462 83.9441 13.7288C83.8505 14.0113 83.6988 14.2711 83.4988 14.4915C83.2988 14.7119 83.0549 14.8881 82.7828 15.0086C82.5107 15.1291 82.2164 15.1914 81.9187 15.1914C81.6211 15.1914 81.3268 15.1291 81.0547 15.0086C80.7825 14.8881 80.5386 14.7119 80.3386 14.4915C80.1387 14.2711 79.987 14.0113 79.8934 13.7288C79.7998 13.4462 79.7664 13.1472 79.7952 12.851ZM83.1282 12.851C83.1282 11.875 82.6897 11.3042 81.9202 11.3042C81.1477 11.3042 80.7132 11.875 80.7132 12.851C80.7132 13.8349 81.1478 14.4013 81.9202 14.4013C82.6897 14.4013 83.1282 13.831 83.1282 12.851Z"
                                      fill="white" />
                                    <path
                                      d="M85.2344 10.6011H86.0898V11.3164H86.1563C86.2689 11.0595 86.4589 10.8442 86.6998 10.7003C86.9407 10.5565 87.2204 10.4915 87.5 10.5142C87.7191 10.4977 87.9391 10.5308 88.1437 10.6109C88.3483 10.691 88.5323 10.8161 88.6819 10.9769C88.8316 11.1377 88.9432 11.3302 89.0084 11.54C89.0736 11.7498 89.0908 11.9716 89.0586 12.189V15.104H88.1699V12.4122C88.1699 11.6885 87.8555 11.3287 87.1982 11.3287C87.0495 11.3217 86.901 11.347 86.7629 11.4029C86.6249 11.4587 86.5005 11.5437 86.3984 11.6521C86.2963 11.7605 86.2188 11.8897 86.1713 12.0308C86.1237 12.1719 86.1073 12.3217 86.123 12.4698V15.104H85.2344V10.6011Z"
                                      fill="white" />
                                    <path
                                      d="M94.0771 9.48047V10.6221H95.0527V11.3706H94.0771V13.686C94.0771 14.1577 94.2715 14.3643 94.7139 14.3643C94.8271 14.3639 94.9403 14.357 95.0527 14.3437V15.084C94.8932 15.1125 94.7315 15.1277 94.5693 15.1294C93.5811 15.1294 93.1875 14.7817 93.1875 13.9136V11.3706H92.4727V10.622H93.1875V9.48047H94.0771Z"
                                      fill="white" />
                                    <path
                                      d="M96.2695 8.84375H97.1504V11.3252H97.2207C97.3388 11.0659 97.5341 10.8493 97.7797 10.7049C98.0254 10.5606 98.3097 10.4955 98.5937 10.5186C98.8117 10.5067 99.0295 10.5431 99.2318 10.6251C99.4341 10.7072 99.6158 10.8328 99.7639 10.9932C99.912 11.1535 100.023 11.3446 100.089 11.5527C100.155 11.7608 100.174 11.9809 100.144 12.1973V15.1045H99.2549V12.4165C99.2549 11.6973 98.9199 11.333 98.292 11.333C98.1393 11.3205 97.9857 11.3415 97.8419 11.3945C97.6981 11.4476 97.5677 11.5314 97.4597 11.6401C97.3517 11.7489 97.2687 11.8799 97.2167 12.024C97.1646 12.1682 97.1447 12.3219 97.1582 12.4746V15.1045H96.2696L96.2695 8.84375Z"
                                      fill="white" />
                                    <path
                                      d="M105.324 13.8887C105.203 14.3003 104.942 14.6563 104.585 14.8944C104.228 15.1326 103.799 15.2377 103.373 15.1915C103.076 15.1993 102.781 15.1425 102.509 15.025C102.236 14.9074 101.993 14.732 101.795 14.5109C101.597 14.2897 101.449 14.0282 101.363 13.7444C101.276 13.4605 101.252 13.1612 101.293 12.8673C101.253 12.5724 101.277 12.2724 101.364 11.9878C101.45 11.7031 101.597 11.4403 101.794 11.2173C101.991 10.9942 102.233 10.816 102.505 10.6948C102.777 10.5736 103.071 10.5122 103.369 10.5147C104.622 10.5147 105.378 11.3707 105.378 12.7847V13.0948H102.198V13.1446C102.184 13.3099 102.205 13.4762 102.259 13.6329C102.313 13.7897 102.399 13.9334 102.512 14.0549C102.625 14.1763 102.762 14.2728 102.915 14.3382C103.067 14.4036 103.231 14.4365 103.397 14.4346C103.61 14.4601 103.825 14.4219 104.016 14.3246C104.207 14.2274 104.364 14.0757 104.468 13.8887L105.324 13.8887ZM102.198 12.4376H104.472C104.484 12.2864 104.463 12.1346 104.412 11.9919C104.361 11.8492 104.281 11.7187 104.176 11.6089C104.072 11.499 103.946 11.4122 103.806 11.354C103.666 11.2959 103.515 11.2676 103.364 11.2711C103.21 11.2691 103.058 11.298 102.915 11.3559C102.773 11.4139 102.644 11.4997 102.535 11.6085C102.426 11.7172 102.34 11.8465 102.283 11.9889C102.225 12.1313 102.196 12.2839 102.198 12.4376H102.198Z"
                                      fill="white" />
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_5730_20583">
                                      <rect width="119.664" height="40" fill="white"
                                        transform="translate(0.5625 0.40625)" />
                                    </clipPath>
                                  </defs>
                                </svg>
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
  <!-- What We Do Section Start -->
  <section class="vs-what-do-section vs-section-spacer vs-section-background">
    <div class="vs-what-do-particles">
      <img src="{{asset('web-assets/images/what-do-top-particles.png')}}" alt="What We Particle" class="img-fluid" />
    </div>
    <div class="container">
      <div class="vs-heading-center">
        <h2 class="vs-section-title vs-title-border">What We Do Best</h2>
        <h4 class="vs-section-subtitle">
          We Provide Outsourced IT Services For All Business
        </h4>
        <p class="vs-section-description">
          At <a href="https://technoyuga.com">TechnoYuga</a> we truly
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
                <img src="{{asset('web-assets/images/ecomm.jpg')}}" alt="E-COMMERCE" class="img-fluid" />
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
                  <img src="{{asset('web-assets/images/on-demand.jpg')}}" alt="ON DEMAND" class="img-fluid" />
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
                <img src="{{asset('web-assets/images/social.jpg')}}" alt="SOCIAL NETWORKING" class="img-fluid" />
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
                  <img src="{{asset('web-assets/images/health.jpg')}}" alt="HEALTHCARE" class="img-fluid" />
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
                <img src="{{asset('web-assets/images/emerging.jpg')}}" alt="EMERGING TECH" class="img-fluid" />
              </div>
              <div class="vs-what-do-card-body">
                <h5 class="vs-what-do-card-title">EMERGING <br />TECH</h5>
              </div>
            </div>
          </div>
          <div class="vs-what-do-card-item">
            <div class="vs-what-do-card">
              <div class="vs-what-do-card-img">
                <img src="{{asset('web-assets/images/tour.jpg')}}" alt="TOURS AND TRAVEL" class="img-fluid" />
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
                  <img src="{{asset('web-assets/images/trans.jpg')}}" alt="TRANSPORT AND LOGISTICS" class="img-fluid" />
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
                  <img src="{{asset('web-assets/images/fintech.jpg')}}" alt="FINTECH" class="img-fluid" />
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
                <img src="{{asset('web-assets/images/education.jpg')}}" alt="EDUCATION" class="img-fluid" />
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
                  <img src="{{asset('web-assets/images/wellness.jpg')}}" alt="WELLNESS AND FITNESS" class="img-fluid" />
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
  <!-- White Space Devider Start -->
  <div class="vs-white-space"></div>
  <!-- White Space Devider End -->
  <!-- Want To Discuss Section Start -->
  <section class="vs-want-discuss-section vs-section-spacer">
    <div class="container">
      <div class="vs-heading-center">
        <h2 class="vs-section-title vs-title-border">
          Share Your Idea for ChatGPT App Development!
        </h2>
        <p class="vs-section-description">
          Accelerate your business growth with exclusive ChatGPT app
          development solutions. Wondering how? Drop your requirements to
          develop an app like ChatGPT, and our dedicated developers will
          turn it into a masterpiece. Connect with us today.
        </p>
      </div>
      <div class="text-center">
        <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
          data-bs-target="#requestProposalModal">Book A Consultation
        </a>
      </div>
    </div>
  </section>
  <!-- Want To Discuss Section End -->

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
                    <img src="{{asset('web-assets/images/valon.png')}}" alt="valon" class="img-fluid" />
                  </div>
                  <div class="vs-testimonial-user-info">
                    <h4 class="vs-testimonial-username">Valon Miski</h4>
                    <label class="vs-testimonial-designation">Founder, Gfacility</label>
                    <div class="vs-testimonial-user-country">
                      <img src="{{asset('web-assets/images/belgium.png')}}" alt="belgium" class="img-fluid" />
                    </div>
                  </div>
                </div>

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
                    <img src="{{asset('web-assets/images/andrew.png')}}" alt="Andrew Garcia" class="img-fluid" />
                  </div>
                  <div class="vs-testimonial-user-info">
                    <h4 class="vs-testimonial-username">Andrew Garcia</h4>
                    <label class="vs-testimonial-designation">Co-owner, Bubble Battle</label>
                    <div class="vs-testimonial-user-country">
                      <img src="{{asset('web-assets/images/USA.png')}}" alt="USA" class="img-fluid" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="vs-testimonial-description">
                <p>
                  TechnoYuga and Krishna did an AWESOME Job on our two
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
                    <img src="{{asset('web-assets/images/eric.png')}}" alt="Eric Liang" class="img-fluid" />
                  </div>
                  <div class="vs-testimonial-user-info">
                    <h4 class="vs-testimonial-username">Eric Liang</h4>
                    <label class="vs-testimonial-designation">PANTAYA, Los Angeles</label>
                    <div class="vs-testimonial-user-country">
                      <img src="{{asset('web-assets/images/USA.png')}}" alt="USA" class="img-fluid" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="vs-testimonial-description">
                <p>
                  Thanks Krishna for completing this task in our social
                  networking app. This was my second project with Krishna
                  and the team Technoyuga, they did a decent job and
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
                    <img src="{{asset('web-assets/images/mason.png')}}" alt="Mason Lavallet" class="img-fluid" />
                  </div>
                  <div class="vs-testimonial-user-info">
                    <h4 class="vs-testimonial-username">Mason Lavallet</h4>
                    <label class="vs-testimonial-designation">Heavy Equipment Auction Transport</label>
                    <div class="vs-testimonial-user-country">
                      <img src="{{asset('web-assets/images/USA.png')}}" alt="USA" class="img-fluid" />
                    </div>
                  </div>
                </div>

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
                    <img src="{{asset('web-assets/images/aziz.png')}}" alt="AZIZ H L" class="img-fluid" />
                  </div>
                  <div class="vs-testimonial-user-info">
                    <h4 class="vs-testimonial-username">AZIZ H L</h4>
                    <label class="vs-testimonial-designation">Director, MooMen</label>
                    <div class="vs-testimonial-user-country">
                      <img src="{{asset('web-assets/images/UK.png')}}" alt="UK" class="img-fluid" />
                    </div>
                  </div>
                </div>

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
                    <img src="{{asset('web-assets/images/tim.png')}}" alt="Tim Kanellitsas" class="img-fluid" />
                  </div>
                  <div class="vs-testimonial-user-info">
                    <h4 class="vs-testimonial-username">Tim Kanellitsas</h4>
                    <label class="vs-testimonial-designation">Director of Design, KiaroXR</label>
                    <div class="vs-testimonial-user-country">
                      <img src="{{asset('web-assets/images/USA.png')}}" alt="USA" class="img-fluid" />
                    </div>
                  </div>
                </div>

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
                    <img src="{{asset('web-assets/images/awani.png')}}" alt="Awani Sharma" class="img-fluid" />
                  </div>
                  <div class="vs-testimonial-user-info">
                    <h4 class="vs-testimonial-username">Awani Sharma</h4>
                    <label class="vs-testimonial-designation">Creator, BooksAmaze</label>
                    <div class="vs-testimonial-user-country">
                      <img src="{{asset('web-assets/images/USA.png')}}" alt="USA" class="img-fluid" />
                    </div>
                  </div>
                </div>

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
                    <img src="{{asset('web-assets/images/thomas.png')}}" alt="Thomas Jerphanion" class="img-fluid" />
                  </div>
                  <div class="vs-testimonial-user-info">
                    <h4 class="vs-testimonial-username">
                      Thomas Jerphanion
                    </h4>
                    <label class="vs-testimonial-designation">Founder, E2 Hospitality</label>
                    <div class="vs-testimonial-user-country">
                      <img src="{{asset('web-assets/images/USA.png')}}" alt="USA" class="img-fluid" />
                    </div>
                  </div>
                </div>

              </div>
              <div class="vs-testimonial-description">
                <p>
                  As a finance consultant based out of Germany, I acquired
                  the support of Technoyuga developing a financial services
                  app. Krishna and his team were able to convert my vision
                  into an easy to use app well within the agreed deadline.
                  Now they are supporting me in marketing and social media
                  efforts. I can recommend Krishna and Technoyuga to any
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
                    <img src="{{asset('web-assets/images/thiago.png')}}" alt="Thiago Garcia" class="img-fluid" />
                  </div>
                  <div class="vs-testimonial-user-info">
                    <h4 class="vs-testimonial-username">Thiago Garcia</h4>
                    <label class="vs-testimonial-designation">CEO & Founder,10X Partners</label>
                    <div class="vs-testimonial-user-country">
                      <img src="{{asset('web-assets/images/germany.png')}}" alt="germany" class="img-fluid" />
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
                    <img src="{{asset('web-assets/images/shiva.png')}}" alt="Shiva Rama Krishna " class="img-fluid" />
                  </div>
                  <div class="vs-testimonial-user-info">
                    <h4 class="vs-testimonial-username">
                      Shiva Rama Krishna
                    </h4>
                    <label class="vs-testimonial-designation">Founder, Laksa Solution Ltd</label>
                    <div class="vs-testimonial-user-country">
                      <img src="{{asset('web-assets/images/USA.png')}}" alt="USA" class="img-fluid" />
                    </div>
                  </div>
                </div>

              </div>
              <div class="vs-testimonial-description">
                <p>
                  TechnoYuga and Krishna did an AWESOME Job on our two
                  projects Bubble Battle and Topline in last 2 years and we
                  are very happy with the end results. They provided
                  exceptional support even after delivery of the project.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="text-center">
                  <a href="#" class="btn btn-primary">View All</a>
              </div> -->
    </div>
  </section>
  <!-- Testimonials Section End -->
  <!-- Why Choose Section Start -->
  <section class="vs-why-choose-section vs-section-spacer">
    <div class="container">
      <div class="vs-heading-center">
        <h2 class="vs-section-title vs-title-border">
          Why Choose Us for ChatGPT App Development?
        </h2>
      </div>
      <div class="vs-why-choose-content">
        <div class="row align-items-center">
          <div class="col col-12 col-md-6 col-lg-6">
            <div class="vs-why-choose-content__inner">
              <div class="vs-why-choose-description">
                <p>
                  Looking for ChatGPT development services? Look no further
                  than TechnoYuga. We have expertise in natural language
                  processing, robust AI capabilities, seamless integration,
                  and commitment to personalized solutions. We prioritize
                  understanding your unique needs, ensuring our ChatGPT
                  implementations align precisely with your goals. With a
                  proven track record of delivering efficient and engaging
                  conversational AI experiences, trust us to elevate your
                  interactions and user satisfaction through advanced
                  language technology.
                </p>
                <p>
                  We add the following features that make it easy for
                  turning your dream project into a reality.
                </p>
              </div>
              <div class="text-center vs-why-choose-btn">

              </div>
            </div>
          </div>
          <div class="col col-12 col-md-6 col-lg-6">
            <div class="vs-why-choose-card-content">
              <div class="vs-why-choose-card-list" data-scrollbar>
                <div class="vs-why-choose-card-item">
                  <div class="vs-why-choose-card">
                    <h3 class="vs-why-choose-card-title">
                      Proficiency and Experience:
                    </h3>
                    <p class="vs-why-choose-card-desription">
                      Our experienced designers hold a proven track record
                      in UX/UI designing, showcasing successful projects and
                      satisfied clients. We possess a deep understanding of
                      design principles and user behavior.
                    </p>
                  </div>
                </div>
                <div class="vs-why-choose-card-item">
                  <div class="vs-why-choose-card">
                    <h3 class="vs-why-choose-card-title">
                      Tailored Solutions:
                    </h3>
                    <p class="vs-why-choose-card-desription">
                      Our skilled experts excel at comprehending your
                      project's unique requisites and crafting customized
                      app development solutions that precisely align with
                      your business objectives.
                    </p>
                  </div>
                </div>
                <div class="vs-why-choose-card-item">
                  <div class="vs-why-choose-card">
                    <h3 class="vs-why-choose-card-title">
                      Technological Acumen:
                    </h3>
                    <p class="vs-why-choose-card-desription">
                      At TechnoYuga, our professionals exhibit a high level
                      of proficiency in employing the latest and most
                      pertinent technologies, ensuring that your ChatGPT app
                      remains modern, secure, and efficient.
                    </p>
                  </div>
                </div>
                <div class="vs-why-choose-card-item">
                  <div class="vs-why-choose-card">
                    <h3 class="vs-why-choose-card-title">
                      User-Centric Focus:
                    </h3>
                    <p class="vs-why-choose-card-desription">
                      Our primary focus centers on designing user-friendly
                      interfaces and delivering seamless user experiences.
                      We strive to optimize the ChatGPT app's usability,
                      fostering enhanced engagement in minimal time.
                    </p>
                  </div>
                </div>
                <div class="vs-why-choose-card-item">
                  <div class="vs-why-choose-card">
                    <h3 class="vs-why-choose-card-title">
                      Transparent and Open Communication:
                    </h3>
                    <p class="vs-why-choose-card-desription">
                      We adhere to a policy of clear and transparent
                      communication throughout the chatGPT development
                      journey. Our developers keep you updated on progress,
                      challenges, and alterations.
                    </p>
                  </div>
                </div>
                <div class="vs-why-choose-card-item">
                  <div class="vs-why-choose-card">
                    <h3 class="vs-why-choose-card-title">
                      Agile Development Approach:
                    </h3>
                    <p class="vs-why-choose-card-desription">
                      Our seasoned experts leverage Agile methodologies,
                      enabling adaptability, flexibility, and incremental
                      progress to meet the ever-evolving needs and
                      requirements of your project.
                    </p>
                  </div>
                </div>
                <div class="vs-why-choose-card-item">
                  <div class="vs-why-choose-card">
                    <h3 class="vs-why-choose-card-title">
                      Cost-Effective Support:
                    </h3>
                    <p class="vs-why-choose-card-desription">
                      We prioritize the financial investments of each
                      business and understand budget constraints.
                      Consequently, we offer highly affordable ChatGPT
                      development services tailored to accommodate
                      businesses of all scales.
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
                What is ChatGPT development?
              </button>
            </h2>
            <div id="collapseFaq1" class="accordion-collapse collapse show" aria-labelledby="headingFaq1"
              data-bs-parent="#tyFaq">
              <div class="accordion-body">
                <p>
                  ChatGPT development is the process of creating
                  conversational AI chatbots using the GPT (Generative
                  Pre-trained Transformer) model. It involves training and
                  fine-tuning the model to generate human-like text
                  responses in a chat format. So, if you are looking for
                  ChatGPT development services, look no further than
                  TechnoYuga.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFaq2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                How does ChatGPT work?
              </button>
            </h2>
            <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2"
              data-bs-parent="#tyFaq">
              <div class="accordion-body">
                <p>
                  ChatGPT works by leveraging deep learning techniques to
                  understand and generate text-based responses. It processes
                  input messages, considers context, and generates coherent
                  and contextually relevant replies.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFaq3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                What programming languages are commonly used for ChatGPT
                development?
              </button>
            </h2>
            <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3"
              data-bs-parent="#tyFaq">
              <div class="accordion-body">
                <p>
                  Python is the most commonly used programming language for
                  ChatGPT development due to its robust libraries and
                  frameworks for machine learning and natural language
                  processing (NLP).
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFaq4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaq4" aria-expanded="false" aria-controls="collapseFaq4">
                What applications can benefit from ChatGPT development?
              </button>
            </h2>
            <div id="collapseFaq4" class="accordion-collapse collapse" aria-labelledby="headingFaq4"
              data-bs-parent="#tyFaq">
              <div class="accordion-body">
                <p>
                  ChatGPT development can be applied to various domains,
                  including customer support chatbots, virtual assistants,
                  content generation, and automated responses in messaging
                  apps.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFaq5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaq5" aria-expanded="false" aria-controls="collapseFaq5">
                Is fine-tuning necessary for ChatGPT models?
              </button>
            </h2>
            <div id="collapseFaq5" class="accordion-collapse collapse" aria-labelledby="headingFaq5"
              data-bs-parent="#tyFaq">
              <div class="accordion-body">
                <p>
                  Yes, fine-tuning is essential for ChatGPT models to make
                  them more contextually aware and align them with specific
                  use cases or industries. Fine-tuning helps improve the
                  quality of generated responses.
                </p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFaq6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaq6" aria-expanded="false" aria-controls="collapseFaq6">
                How Can I Develop A ChatGPT App?
              </button>
            </h2>
            <div id="collapseFaq6" class="accordion-collapse collapse" aria-labelledby="headingFaq6"
              data-bs-parent="#tyFaq">
              <div class="accordion-body">
                <p>
                  You can develop a ChatGPT app using programming languages
                  like Python, frameworks like Dialogflow or Rasa, and cloud
                  platforms like AWS or Azure for hosting. But, if you lack
                  the expertise, it is advisable to connect with a reliable
                  ChatGPT app development company.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFaq7">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaq7" aria-expanded="false" aria-controls="collapseFaq7">
                What Are The Key Features of A Successful ChatGPT App?
              </button>
            </h2>
            <div id="collapseFaq7" class="accordion-collapse collapse" aria-labelledby="headingFaq7"
              data-bs-parent="#tyFaq">
              <div class="accordion-body">
                <p>
                  Key features include natural language processing, context
                  awareness, integration with messaging platforms, and a
                  user-friendly interface. If you have enough budget, you
                  can also go for advanced features while developing a
                  ChatGPT app.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFaq8">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaq8" aria-expanded="false" aria-controls="collapseFaq8">
                What's The Cost of Developing A ChatGPT App?
              </button>
            </h2>
            <div id="collapseFaq8" class="accordion-collapse collapse" aria-labelledby="headingFaq8"
              data-bs-parent="#tyFaq">
              <div class="accordion-body">
                <p>
                  Costs vary based on complexity, features, and development
                  approach. It can range from free (for simple bots) to
                  thousands of dollars for more advanced projects. To get an
                  accurate ChatGPT app development cost, get in touch with
                  TechnoYuga today.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFaq9">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaq9" aria-expanded="false" aria-controls="collapseFaq9">
                Are There Legal Ethical Considerations For ChatGPT
                Development?
              </button>
            </h2>
            <div id="collapseFaq9" class="accordion-collapse collapse" aria-labelledby="headingFaq9"
              data-bs-parent="#tyFaq">
              <div class="accordion-body">
                <p>
                  Yes, consider data privacy, compliance with regulations,
                  and ethical use of AI in your ChatGPT development to avoid
                  legal issues and maintain trust. At TechnoYuga, we always
                  take care of data privacy and security while developing
                  any mobile app or website.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFaq10">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaq10" aria-expanded="false" aria-controls="collapseFaq10">
                Which Is The Best ChatGPT App Development Company?
              </button>
            </h2>
            <div id="collapseFaq10" class="accordion-collapse collapse" aria-labelledby="headingFaq10"
              data-bs-parent="#tyFaq">
              <div class="accordion-body">
                <p>
                  Although there is a long list of the best ChatGPT app
                  development companies, TechnoYuga outshines all. We have a
                  team of experts who can create an app similar to ChatGPT.
                  Feel free to share your requirements with our experts.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FAQ Section End -->
  <!-- Speak to Team Section Start -->
  <section class="vs-speak-section" id="speak-to-team-section">
    <div class="vs-speak-heading vs-section-spacer">
      <div class="container">
        <div class="vs-heading-center">
          <h1 class="vs-section-title">Speak to our amazing Team</h1>
          <p class="vs-section-description">
            100% Idea protection. We sign Non Disclosure Agreement
          </p>
        </div>
      </div>
    </div>
    <div class="vs-speak-content">
      <div class="container">
        <div class="row g-0">
          <div class="col col-12 col-md-12 col-lg-6">
            <div class="vs-speak-form-content">
              <p class="vs-speak-form-description">Request a Proposal</p>
              <div class="vs-speak-form">
                <form class="row" id="speak-to-team-form">
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
                        <select class="form-control" id="countries" name="country_code">
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
                      <option value="$5000 - $10000">$5000 - $10000</option>
                      <option value="$10000 - $15000">
                        $10000 - $15000
                      </option>
                      <option value="$15000 - $20000">
                        $15000 - $20000
                      </option>
                      <option value="$20000 - $30000">
                        $20000 - $30000
                      </option>
                      <option value="$30000 or More">$30000 or More</option>
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
            <div class="vs-speak-content__inner">
              <h2 class="vs-section-title">
                You have a <span>Dream</span>.
              </h2>
              <p class="vs-section-description">
                We have the experience to make this Dream a reality.
              </p>
              <p class="vs-contact-description">
                Here’s what you will get for submitting your contact
                details.
              </p>

              <ul class="vs-dream-get-list list-unstyled">
                <li class="vs-dream-get-item">
                  <span class="vs-dream-get-count">1</span>
                  <p>45 minutes of free consultation</p>
                </li>
                <li class="vs-dream-get-item">
                  <span class="vs-dream-get-count">2</span>
                  <p>A strict non-disclosure agreement</p>
                </li>
                <li class="vs-dream-get-item">
                  <span class="vs-dream-get-count">3</span>
                  <p>Free Market & Competitive Analysis</p>
                </li>
                <li class="vs-dream-get-item">
                  <span class="vs-dream-get-count">4</span>
                  <p>
                    Suggestions on Revenue Models & Go To Market Strategy
                  </p>
                </li>
                <li class="vs-dream-get-item">
                  <span class="vs-dream-get-count">5</span>
                  <p>No obligation Technical Specs & Proposal</p>
                </li>
                <li class="vs-dream-get-item">
                  <span class="vs-dream-get-count">6</span>
                  <p>Guidance on Pre-launch & Post-Launch Marketing</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Speak to Team Section End -->

  <!-- White Space Devider Start -->
  <div class="vs-white-space"></div>
  <!-- White Space Devider End -->
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
                      <img src="{{asset('web-assets/images/partner-logo2.png')}}" alt="partner-logo" />
                    </li>
                    <li class="vs-modal-trusted-item">
                      <img src="{{asset('web-assets/images/partner-logo4.png')}}" alt="partner-logo" />
                    </li>
                    <li class="vs-modal-trusted-item">
                      <img src="{{asset('web-assets/images/partner-logo5.png')}}" alt="partner-logo" />
                    </li>
                    <!-- <li class="vs-modal-trusted-item">
                                              <img src="web-assets/images/partner-logo14.png" alt="partner-logo">
                                          </li> -->
                    <li class="vs-modal-trusted-item">
                      <img src="{{asset('web-assets/images/partner-logo8.png')}}" alt="partner-logo" />
                    </li>
                    <li class="vs-modal-trusted-item">
                      <img src="{{asset('web-assets/images/partner-logo9.png')}}" alt="partner-logo" />
                    </li>
                  </ul>
                  <div class="vs-request-modal-testimonial-content">
                    <div class="vs-testimonial-slider2">
                      <div class="vs-testimonial-item">
                        <div class="vs-testimonial-card">
                          <div class="vs-testimonial-card-head">
                            <div class="vs-testimonial-user">
                              <div class="vs-testimonial-user-profile">
                                <img src="{{asset('web-assets/images/valon.png')}}" alt="valon" class="img-fluid" />
                              </div>
                              <div class="vs-testimonial-user-info">
                                <h4 class="vs-testimonial-username">
                                  Valon Miski
                                </h4>
                                <label class="vs-testimonial-designation">Founder, Gfacility</label>
                                <div class="vs-testimonial-user-country">
                                  <img src="{{asset('web-assets/images/belgium.png')}}" alt="belgium" class="img-fluid" />
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
                                <img src="{{asset('web-assets/images/eric.png')}}" alt="Eric Liang" class="img-fluid" />
                              </div>
                              <div class="vs-testimonial-user-info">
                                <h4 class="vs-testimonial-username">
                                  Eric Liang
                                </h4>
                                <label class="vs-testimonial-designation">PANTAYA, Los Angeles</label>
                                <div class="vs-testimonial-user-country">
                                  <img src="{{asset('web-assets/images/USA.png')}}" alt="USA" class="img-fluid" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="vs-testimonial-description">
                            <p>
                              Thanks Krishna for completing this task in our
                              social networking app. This was my second
                              project with Krishna and the team Technoyuga,
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
                                <img src="{{asset('web-assets/images/aziz.png')}}" alt="AZIZ H L" class="img-fluid" />
                              </div>
                              <div class="vs-testimonial-user-info">
                                <h4 class="vs-testimonial-username">
                                  AZIZ H L
                                </h4>
                                <label class="vs-testimonial-designation">Director, MooMen</label>
                                <div class="vs-testimonial-user-country">
                                  <img src="{{asset('web-assets/images/UK.png')}}" alt="UK" class="img-fluid" />
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
@endsection
