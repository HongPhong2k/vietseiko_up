<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- META -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="public/images/logo.png" type="image/x-icon" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="public/images/favicon.png"
    />

    <!-- PAGE TITLE HERE -->
    <title>Jobzilla Template | Home Page Style 1</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      rel="stylesheet"
      type="text/css"
      href="public/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <!-- BOOTSTRAP STYLE SHEET -->
    <link
      rel="stylesheet"
      type="text/css"
      href="public/css/font-awesome.min.css"
    />
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/feather.css" />
    <!-- FEATHER ICON SHEET -->
    <link
      rel="stylesheet"
      type="text/css"
      href="public/css/owl.carousel.min.css"
    />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link
      rel="stylesheet"
      type="text/css"
      href="public/css/magnific-popup.min.css"
    />
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/lc_lightbox.css" />
    <!-- Lc light box popup -->
    <link
      rel="stylesheet"
      type="text/css"
      href="public/css/bootstrap-select.min.css"
    />
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link
      rel="stylesheet"
      type="text/css"
      href="public/css/dataTables.bootstrap5.min.css"
    />
    <!-- DATA table STYLE SHEET  -->
    <link
      rel="stylesheet"
      type="text/css"
      href="public/css/select.bootstrap5.min.css"
    />
    <!-- DASHBOARD select bootstrap  STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="public/css/dropzone.css" />
    <!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/scrollbar.css" />
    <!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/datepicker.css" />
    <!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/flaticon.css" />
    <!-- Flaticon -->
    <link
      rel="stylesheet"
      type="text/css"
      href="public/css/swiper-bundle.min.css"
    />
    <!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
    <!-- MAIN STYLE SHEET -->

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link
      rel="stylesheet"
      class="skin"
      type="text/css"
      href="public/css/skins-type/skin-6.css"
    />
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/switcher.css" />
  </head>

  <body>
    <!-- LOADING AREA START ===== -->
    <div class="loading-area" style="display: none">
      <div class="loading-box"></div>
      <div class="loading-pic">
        <div class="wrapper">
          <div class="cssload-loader"></div>
        </div>
      </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">

      <!-- CONTENT START -->
      <div class="page-content">
        <!-- Login Section Start -->
        <div class="section-full site-bg-white">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-8 col-lg-6 col-md-5 twm-log-reg-media-wrap">
                <div class="twm-log-reg-media">
                  <div class="twm-l-media">
                    <img src="images/login-bg.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-7">
                <div class="twm-log-reg-form-wrap">
                  <div class="twm-log-reg-logo-head">
                    <a href="index.html">
                      <img src="images/logo-dark.png" alt="" class="logo" />
                    </a>
                  </div>

                  <div class="twm-log-reg-inner">
                    <div class="twm-log-reg-head">
                      <div class="twm-log-reg-logo">
                        <span class="log-reg-form-title">Log In</span>
                      </div>
                    </div>
                    <div class="twm-tabs-style-2">
                      <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <!--Login Candidate-->
                        <li class="nav-item">
                          <button
                            class="nav-link active"
                            data-bs-toggle="tab"
                            data-bs-target="#twm-login-candidate"
                            type="button"
                          >
                          <i class="bi bi-person"></i></i>Ứng Viên
                          </button>
                        </li>
                        <!--Login Employer-->
                        <li class="nav-item">
                          <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#twm-login-Employer"
                            type="button"
                          >
                          <i class="bi bi-building"></i>Nhà Tuyển Dụng
                          </button>
                        </li>
                      </ul>

                      <div class="tab-content" id="myTab2Content">
                        <!--Login Candidate Content-->
                        <div
                          class="tab-pane fade show active"
                          id="twm-login-candidate"
                        >
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-group mb-3">
                                <input
                                  name="username"
                                  type="text"
                                  required=""
                                  class="form-control"
                                  placeholder="Usearname*"
                                />
                              </div>
                            </div>

                            <div class="col-lg-12">
                              <div class="form-group mb-3">
                                <input
                                  name="email"
                                  type="text"
                                  class="form-control"
                                  required=""
                                  placeholder="Password*"
                                />
                              </div>
                            </div>

                            <div class="col-lg-12">
                              <div class="twm-forgot-wrap">
                                <div class="form-group mb-3">
                                  <div class="form-check">
                                    <input
                                      type="checkbox"
                                      class="form-check-input"
                                      id="Password4"
                                    />
                                    <label
                                      class="form-check-label rem-forgot"
                                      for="Password4"
                                      >Remember me
                                      <a
                                        href="javascript:;"
                                        class="site-text-primary"
                                        >Forgot Password</a
                                      ></label
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <button type="submit" class="site-button">
                                  Log in
                                </button>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <span class="center-text-or">Or</span>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <button type="submit" class="log_with_facebook">
                                  <i class="fab fa-facebook"></i>
                                  Continue with Facebook
                                </button>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <button type="submit" class="log_with_google">
                                  <img src="images/google-icon.png" alt="" />
                                  Continue with Google
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--Login Employer Content-->
                        <div class="tab-pane fade" id="twm-login-Employer">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-group mb-3">
                                <input
                                  name="username"
                                  type="text"
                                  required=""
                                  class="form-control"
                                  placeholder="Usearname*"
                                />
                              </div>
                            </div>

                            <div class="col-lg-12">
                              <div class="form-group mb-3">
                                <input
                                  name="email"
                                  type="text"
                                  class="form-control"
                                  required=""
                                  placeholder="Password*"
                                />
                              </div>
                            </div>

                            <div class="col-lg-12">
                              <div class="twm-forgot-wrap">
                                <div class="form-group mb-3">
                                  <div class="form-check">
                                    <input
                                      type="checkbox"
                                      class="form-check-input"
                                      id="Password4"
                                    />
                                    <label
                                      class="form-check-label rem-forgot"
                                      for="Password4"
                                      >Remember me
                                      <a
                                        href="javascript:;"
                                        class="site-text-primary"
                                        >Forgot Password</a
                                      ></label
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <button type="submit" class="site-button">
                                  Log in
                                </button>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <span class="center-text-or">Or</span>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <button type="submit" class="log_with_facebook">
                                  <i class="fab fa-facebook"></i>
                                  Continue with Facebook
                                </button>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <button type="submit" class="log_with_google">
                                  <img src="images/google-icon.png" alt="" />
                                  Continue with Google
                                </button>
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
        <!-- Login Section End -->
      </div>
      <!-- CONTENT END -->

      <!-- FOOTER START -->
      <footer
        class="footer-dark"
        style="background-image: url(images/f-bg.jpg)"
      >
        <div class="container">
          <!-- NEWS LETTER SECTION START -->
          <div class="ftr-nw-content">
            <div class="row">
              <div class="col-md-5">
                <div class="ftr-nw-title">
                  Join our email subscription now to get updates on new jobs and
                  notifications.
                </div>
              </div>
              <div class="col-md-7">
                <form>
                  <div class="ftr-nw-form">
                    <input
                      name="news-letter"
                      class="form-control"
                      placeholder="Enter Your Email"
                      type="text"
                    />
                    <button class="ftr-nw-subcribe-btn">Subscribe Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- NEWS LETTER SECTION END -->
          <!-- FOOTER BLOCKES START -->
          <div class="footer-top">
            <div class="row">
              <div class="col-lg-3 col-md-12">
                <div class="widget widget_about">
                  <div class="logo-footer clearfix">
                    <a href="index.html"
                      ><img src="public/images/logo.png" alt=""
                    /></a>
                  </div>
                  <p>
                    Many desktop publishing packages and web page editors now.
                  </p>
                  <ul class="ftr-list">
                    <li>
                      <p>
                        <span>Address :</span>131 Le Van Viet, TP. Thu Duc, TP.
                        HCM
                      </p>
                    </li>
                    <li>
                      <p><span>Email :</span>lengochai.fit2019@gmail.com</p>
                    </li>
                    <li>
                      <p><span>Call :</span>555-555-1234</p>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-9 col-md-12">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget_services ftr-list-center">
                      <h3 class="widget-title">For Candidate</h3>
                      <ul>
                        <li><a href="dashboard.html">User Dashboard</a></li>
                        <li>
                          <a href="dash-resume-alert.html">Alert resume</a>
                        </li>
                        <li><a href="candidate-grid.html">Candidates</a></li>
                        <li><a href="blog-list.html">Blog List</a></li>
                        <li><a href="blog-single.html">Blog single</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget_services ftr-list-center">
                      <h3 class="widget-title">For Employers</h3>
                      <ul>
                        <li><a href="dash-post-job.html">Post Jobs</a></li>
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="job-list.html">Jobs Listing</a></li>
                        <li><a href="job-detail.html">Jobs details</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget_services ftr-list-center">
                      <h3 class="widget-title">Helpful Resources</h3>
                      <ul>
                        <li><a href="faq.html">FAQs</a></li>
                        <li>
                          <a href="employer-detail.html">Employer detail</a>
                        </li>
                        <li><a href="dash-my-profile.html">Profile</a></li>
                        <li><a href="error-404.html">404 Page</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget_services ftr-list-center">
                      <h3 class="widget-title">Quick Links</h3>
                      <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-1.html">About us</a></li>
                        <li><a href="dash-bookmark.html">Bookmark</a></li>
                        <li><a href="job-grid.html">Jobs</a></li>
                        <li><a href="employer-list.html">Employer</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FOOTER COPYRIGHT -->
          <div class="footer-bottom">
            <div class="footer-bottom-info">
              <div class="footer-copy-right">
                <span class="copyrights-text"
                  >Copyright © 2023 by thewebmax All Rights Reserved.</span
                >
              </div>
              <ul class="social-icons">
                <li>
                  <a href="javascript:void(0);">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <i class="bi bi-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <i class="bi bi-tiktok"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <i class="bi bi-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <!-- FOOTER END -->

      <!-- BUTTON TOP START -->
      <button class="scroltop">
        <span class="relative" id="btn-vibrate"
          ><i class="bi bi-arrow-up-circle"></i
        ></span>
      </button>

      <!--Model Popup Section Start-->
      <!--Signup popup -->
      <div
        class="modal fade twm-sign-up"
        id="sign_up_popup"
        aria-hidden="true"
        aria-labelledby="sign_up_popupLabel"
        tabindex="-1"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form>
              <div class="modal-header">
                <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                <p>Sign Up and get access to all the features of Jobzilla</p>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>

              <div class="modal-body">
                <div class="twm-tabs-style-2">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <!--Signup Candidate-->
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link active"
                        data-bs-toggle="tab"
                        data-bs-target="#sign-candidate"
                        type="button"
                      >
                        <i class="bi bi-people"></i>Ứng Viên
                      </button>
                    </li>
                    <!--Signup Employer-->
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        data-bs-toggle="tab"
                        data-bs-target="#sign-Employer"
                        type="button"
                      >
                        <i class="bi bi-building"></i>Nhà Tuyển Dụng
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <!--Signup Candidate Content-->
                    <div class="tab-pane fade show active" id="sign-candidate">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <input
                              name="username"
                              type="text"
                              required=""
                              class="form-control"
                              placeholder="Usearname*"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <input
                              name="email"
                              type="text"
                              class="form-control"
                              required=""
                              placeholder="Password*"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <input
                              name="phone"
                              type="text"
                              class="form-control"
                              required=""
                              placeholder="Email*"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <input
                              name="phone"
                              type="text"
                              class="form-control"
                              required=""
                              placeholder="Phone*"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="agree1"
                              />
                              <label class="form-check-label" for="agree1"
                                >I agree to the
                                <a href="javascript:;"
                                  >Terms and conditions</a
                                ></label
                              >
                              <p>
                                Already registered?
                                <button
                                  class="twm-backto-login"
                                  data-bs-target="#sign_up_popup2"
                                  data-bs-toggle="modal"
                                  data-bs-dismiss="modal"
                                >
                                  Log in here
                                </button>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="site-button">
                            Sign Up
                          </button>
                        </div>
                      </div>
                    </div>
                    <!--Signup Employer Content-->
                    <div class="tab-pane fade" id="sign-Employer">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <input
                              name="username"
                              type="text"
                              required=""
                              class="form-control"
                              placeholder="Usearname*"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <input
                              name="email"
                              type="text"
                              class="form-control"
                              required=""
                              placeholder="Password*"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <input
                              name="phone"
                              type="text"
                              class="form-control"
                              required=""
                              placeholder="Email*"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <input
                              name="phone"
                              type="text"
                              class="form-control"
                              required=""
                              placeholder="Phone*"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="agree2"
                              />
                              <label class="form-check-label" for="agree2"
                                >I agree to the
                                <a href="javascript:;"
                                  >Terms and conditions</a
                                ></label
                              >
                              <p>
                                Already registered?
                                <button
                                  class="twm-backto-login"
                                  data-bs-target="#sign_up_popup2"
                                  data-bs-toggle="modal"
                                  data-bs-dismiss="modal"
                                >
                                  Log in here
                                </button>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="site-button">
                            Sign Up
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal-footer">
                <span class="modal-f-title">Login or Sign up with</span>
                <ul class="twm-modal-social">
                  <li>
                    <a href="javascript" class="facebook-clr"
                      ><i class="bi bi-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript" class="twitter-clr"
                      ><i class="bi bi-youtube"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript" class="linkedin-clr"
                      ><i class="bi bi-linkedin"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript" class="google-clr"
                      ><i class="bi bi-tiktok"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--Login popup -->
      <div
        class="modal fade twm-sign-up"
        id="sign_up_popup2"
        aria-hidden="true"
        aria-labelledby="sign_up_popupLabel2"
        tabindex="-1"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form>
              <div class="modal-header">
                <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                <p>Login and get access to all the features of Jobzilla</p>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <div class="twm-tabs-style-2">
                  <ul class="nav nav-tabs" id="myTab2" role="tablist">
                    <!--Login Candidate-->
                    <li class="nav-item">
                      <button
                        class="nav-link active"
                        data-bs-toggle="tab"
                        data-bs-target="#login-candidate"
                        type="button"
                      >
                        <i class="bi bi-people"></i>Ứng Viên
                      </button>
                    </li>
                    <!--Login Employer-->
                    <li class="nav-item">
                      <button
                        class="nav-link"
                        data-bs-toggle="tab"
                        data-bs-target="#login-Employer"
                        type="button"
                      >
                        <i class="bi bi-building"></i>Nhà Tuyển Dụng
                      </button>
                    </li>
                  </ul>

                  <div class="tab-content" id="myTab2Content">
                    <!--Login Candidate Content-->
                    <div class="tab-pane fade show active" id="login-candidate">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <input
                              name="username"
                              type="text"
                              required=""
                              class="form-control"
                              placeholder="Usearname*"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <input
                              name="email"
                              type="text"
                              class="form-control"
                              required=""
                              placeholder="Password*"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="Password3"
                              />
                              <label
                                class="form-check-label rem-forgot"
                                for="Password3"
                                >Remember me
                                <a href="javascript:;"
                                  >Forgot Password</a
                                ></label
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="site-button">
                            Log in
                          </button>
                          <div class="mt-3 mb-3">
                            Don't have an account ?
                            <button
                              class="twm-backto-login"
                              data-bs-target="#sign_up_popup"
                              data-bs-toggle="modal"
                              data-bs-dismiss="modal"
                            >
                              Sign Up
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Login Employer Content-->
                    <div class="tab-pane fade" id="login-Employer">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <input
                              name="username"
                              type="text"
                              required=""
                              class="form-control"
                              placeholder="Usearname*"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <input
                              name="email"
                              type="text"
                              class="form-control"
                              required=""
                              placeholder="Password*"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-3">
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="Password4"
                              />
                              <label
                                class="form-check-label rem-forgot"
                                for="Password4"
                                >Remember me
                                <a href="javascript:;"
                                  >Forgot Password</a
                                ></label
                              >
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <button type="submit" class="site-button">
                            Log in
                          </button>
                          <div class="mt-3 mb-3">
                            Don't have an account ?
                            <button
                              class="twm-backto-login"
                              data-bs-target="#sign_up_popup"
                              data-bs-toggle="modal"
                              data-bs-dismiss="modal"
                            >
                              Sign Up
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <span class="modal-f-title">Login or Sign up with</span>
                <ul class="twm-modal-social">
                  <li>
                    <a href="javascript" class="facebook-clr"
                      ><i class="bi bi-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript" class="twitter-clr"
                      ><i class="bi bi-youtube"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript" class="linkedin-clr"
                      ><i class="bi bi-linkedin"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript" class="google-clr"
                      ><i class="bi bi-tiktok"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--Model Popup Section End-->
    </div>

    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="public/js/jquery-3.6.0.min.js"></script>
    <!-- JQUERY.MIN JS -->
    <script src="public/js/popper.min.js"></script>
    <!-- POPPER.MIN JS -->
    <script src="public/js/bootstrap.min.js"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="public/js/magnific-popup.min.js"></script>
    <!-- MAGNIFIC-POPUP JS -->
    <script src="public/js/waypoints.min.js"></script>
    <!-- WAYPOINTS JS -->
    <script src="public/js/counterup.min.js"></script>
    <!-- COUNTERUP JS -->
    <script src="public/js/waypoints-sticky.min.js"></script>
    <!-- STICKY HEADER -->
    <script src="public/js/isotope.pkgd.min.js"></script>
    <!-- MASONRY  -->
    <script src="public/js/imagesloaded.pkgd.min.js"></script>
    <!-- MASONRY  -->
    <script src="public/js/owl.carousel.min.js"></script>
    <!-- OWL  SLIDER  -->
    <script src="public/js/theia-sticky-sidebar.js"></script>
    <!-- STICKY SIDEBAR  -->
    <script src="public/js/lc_lightbox.lite.js"></script>
    <!-- IMAGE POPUP -->
    <script src="public/js/bootstrap-select.min.js"></script>
    <!-- Form js -->
    <script src="public/js/dropzone.js"></script>
    <!-- IMAGE UPLOAD  -->
    <script src="public/js/jquery.scrollbar.js"></script>
    <!-- scroller -->
    <script src="public/js/bootstrap-datepicker.js"></script>
    <!-- scroller -->
    <script src="public/js/jquery.dataTables.min.js"></script>
    <!-- Datatable -->
    <script src="public/js/dataTables.bootstrap5.min.js"></script>
    <!-- Datatable -->
    <script src="public/js/chart.js"></script>
    <!-- Chart -->
    <script src="public/js/bootstrap-slider.min.js"></script>
    <!-- Price range slider -->
    <script src="public/js/swiper-bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="public/js/custom.js"></script>
    <!-- CUSTOM FUCTIONS  -->
    <script src="public/js/switcher.js"></script>
    <!-- SHORTCODE FUCTIONS  -->
  </body>
</html>