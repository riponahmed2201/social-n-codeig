<div id="content">

  <!-- Banner -->
  <section class="bnr">
    <div class="position-center-center mob-normal">
      <div class="container">
        <div class="col-lg-8 center-auto text-center">

          <h1 >
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
            echo $msg;
            $this->session->unset_userdata('message');
            }?>
          </h1>

          <h1>Welcome to Leading Social Networking Template</h1>
          <a href="<?php echo base_url();?>User/show_login_page" class="btn">Login</a> <a href="<?php echo base_url();?>User/show_register_page" class="btn">Register</a> </div>
      </div>
    </div>
  </section>

  <!-- Intro Sec -->
  <section>
    <div class="container">

        <div  class="intro-sec">

      <div class="row margin-0">
        <div class="col-lg-4 padding-0">
          <div class="intro-txt-bnr">
            <h4>Stay in touch with your Colleagues</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue conseqaut nibbhi ellit ipsum consectetur. </p>
          </div>
        </div>
        <div class="col-lg-4 padding-0">
          <div class="intro-txt-bnr primary-bg text-dark">
            <h4>Get the latest news in your Industry </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue conseqaut nibbhi ellit ipsum consectetur. </p>
          </div>
        </div>
        <div class="col-lg-4 padding-0">
          <div class="intro-txt-bnr">
            <h4>Share what’s up with your Professionals </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue conseqaut nibbhi ellit ipsum consectetur. </p>
          </div>
        </div>
          </div>
      </div>
    </div>
  </section>

  <!-- Papular Companies -->
  <section class="padding-top-100 padding-bottom-100">
    <div class="container">

      <!-- Heading Block -->
      <div class="heading-block text-center">
        <h2>Papular Companies</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue conseqaut nibbhi ellit ipsum consectetur. </p>
      </div>

      <!-- Companies -->
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <!-- Company -->
            <div class="col-sm-6">
              <div class="com-inside">
                <div class="img-sec"> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-1.jpg" class="img-responsive" alt="" >
                  <div class="hover-over">
                    <div class="position-center-center"> <a href="<?php echo base_url();?>Welcome/company_details" class="btn">Follow</a> <a href="companies-detail.html" class="btn">Details</a> </div>
                  </div>
                </div>
                <div class="txt-sec">
                  <h5><a href="<?php echo base_url();?>Welcome/company_details"> Webicode </a></h5>
                </div>
              </div>
            </div>
            <!-- Company -->
            <div class="col-sm-6">
              <div class="com-inside">
                <div class="img-sec"> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-2.jpg" class="img-responsive" alt="" >
                  <div class="hover-over">
                    <div class="position-center-center"> <a href="<?php echo base_url();?>Welcome/company_details" class="btn">Follow</a> <a href="companies-detail.html" class="btn">Details</a> </div>
                  </div>
                </div>
                <div class="txt-sec">
                  <h5><a href="<?php echo base_url();?>Welcome/company_details"> M_Adnan </a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <!-- Company -->
            <div class="col-sm-6">
              <div class="com-inside">
                <div class="img-sec"> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-3.jpg" class="img-responsive" alt="" >
                  <div class="hover-over">
                    <div class="position-center-center"> <a href="<?php echo base_url();?>Welcome/company_details" class="btn">Follow</a> <a href="companies-detail.html" class="btn">Details</a> </div>
                  </div>
                </div>
                <div class="txt-sec">
                  <h5><a href="<?php echo base_url();?>Welcome/company_details"> Daddy 4 Web </a></h5>
                </div>
              </div>
            </div>
            <!-- Company -->
            <div class="col-sm-6">
              <div class="com-inside">
                <div class="img-sec"> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-4.jpg" class="img-responsive" alt="" >
                  <div class="hover-over">
                    <div class="position-center-center"> <a href="<?php echo base_url();?>Welcome/company_details" class="btn">Follow</a> <a href="companies-detail.html" class="btn">Details</a> </div>
                  </div>
                </div>
                <div class="txt-sec">
                  <h5><a href="<?php echo base_url();?>Welcome/company_details">The Best Technology </a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <!-- Company -->
            <div class="col-sm-6">
              <div class="com-inside">
                <div class="img-sec"> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-5.jpg" class="img-responsive" alt="" >
                  <div class="hover-over">
                    <div class="position-center-center"> <a href="<?php echo base_url();?>Welcome/company_details" class="btn">Follow</a> <a href="companies-detail.html" class="btn">Details</a> </div>
                  </div>
                </div>
                <div class="txt-sec">
                  <h5><a href="<?php echo base_url();?>Welcome/company_details"> Daddy 4 Web </a></h5>
                </div>
              </div>
            </div>

            <!-- Company -->
            <div class="col-sm-6">
              <div class="com-inside">
                <div class="img-sec"> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-6.jpg" class="img-responsive" alt="" >
                  <div class="hover-over">
                    <div class="position-center-center"> <a href="<?php echo base_url();?>Welcome/company_details" class="btn">Follow</a> <a href="companies-detail.html" class="btn">Details</a> </div>
                  </div>
                </div>
                <div class="txt-sec">
                  <h5><a href="<?php echo base_url();?>Welcome/company_details">The Best Technology </a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <!-- Company -->
            <div class="col-sm-6">
              <div class="com-inside">
                <div class="img-sec"> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-7.jpg" class="img-responsive" alt="" >
                  <div class="hover-over">
                    <div class="position-center-center"> <a href="<?php echo base_url();?>Welcome/company_details" class="btn">Follow</a> <a href="companies-detail.html" class="btn">Details</a> </div>
                  </div>
                </div>
                <div class="txt-sec">
                  <h5><a href="<?php echo base_url();?>Welcome/company_details"> Webicode </a></h5>
                </div>
              </div>
            </div>

            <!-- Company -->
            <div class="col-sm-6">
              <div class="com-inside">
                <div class="img-sec"> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-8.jpg" class="img-responsive" alt="" >
                  <div class="hover-over">
                    <div class="position-center-center"> <a href="<?php echo base_url();?>Welcome/company_details" class="btn">Follow</a> <a href="companies-detail.html" class="btn">Details</a> </div>
                  </div>
                </div>
                <div class="txt-sec">
                  <h5><a href="<?php echo base_url();?>Welcome/company_details"> M_Adnan </a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Btn Center -->
      <div class="btn-center margin-top-30 text-center"> <a href="#." class="btn btn-inverse">View All Companies</a> </div>
    </div>
  </section>

  <!-- Development -->
  <section class="dev-activ text-center padding-top-100 padding-bottom-50">
    <div class="container">
      <div class="heading-block">
        <h2>Growing Global Network</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nibh dolor, efficitur eget pharetra ac, cursus sed sapien. Cras posuere ligula ut blandit varius. </p>
      </div>
      <ul class="row margin-top-50 margin-bottom-50">
        <li class="col"><span><span class="counter">542</span>+</span>
          <p>Companies</p>
        </li>
        <li class="col"><span><span class="counter">1850</span></span>
          <p>Employees</p>
        </li>
        <li class="col"><span><span class="counter">45057</span>+</span>
          <p>Contributions</p>
        </li>
        <li class="col"><span class="counter">80</span>
          <p>Team Members</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- ABOUT -->
  <section class="bg-white">
    <!-- Right Background -->
    <div class="main-page-section half_left_layout">
      <div class="main-half-layout half_right_layout"> </div>

      <!-- Left Content -->
      <div class="main-half-layout-container half_right_layout">
        <div class="about-us-con">
          <h3>Collaborate on a project</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nibh dolor, efficitur eget pharetra ac, cursus sed sapien. Cras posuere ligula ut blandit varius. </p>
          <ul class="count-info row">
            <li class="col"> <span class="counter">5000</span><span>+</span>
              <p>Collaboration</p>
            </li>
            <li class="col"> <span class="counter">750</span><span>+</span>
              <p>Projects</p>
            </li>
          </ul>
          <a href="#." class="btn">Find a Jobs</a> </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>

  <!-- Why Choose Us -->
  <section class="why-choose padding-top-100 padding-bottom-0">
    <div class="container">

      <!-- Why Choose Us Row -->
      <div class="row">
        <div class="col-lg-8 margin-top-20 animate fadeInLeft" data-wow-delay="0.4s">
          <!-- Tittle -->
          <div class="heading-block margin-bottom-20"> <span class="margin-bottom-10">We deliver High Quality Services</span>
            <h2>Ultra Services &amp; Best Support</h2>
          </div>
          <div class="ultra-ser">
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
          </div>
          <div class="row margin-top-60">

            <!-- Services -->
            <div class="col-md-6 animate fadeInUp" data-wow-delay="0.4s">
              <div class="clearfix icon-box ib-style-2 i-large i-top padding-bottom-15 border-bottom-1 border-light">
                <div class="ib-icon"> <i class="far fa-paper-plane"></i> </div>
                <div class="ib-info">
                  <h4 class="h6">Trending</h4>
                  <p>Contrary to popular belief , Lorem Ipsum is not simply random text. It has roots in a piece</p>
                </div>
              </div>
            </div>

            <!-- Services -->
            <div class="col-md-6 animate fadeInUp" data-wow-delay="0.6s">
              <div class="clearfix icon-box ib-style-2 i-large i-top padding-bottom-15 border-bottom-1 border-light">
                <div class="ib-icon"> <i class="fab fa-tencent-weibo"></i> </div>
                <div class="ib-info">
                  <h4 class="h6">Smart Setting</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem not simply random accusantium</p>
                </div>
              </div>
            </div>

            <!-- Services -->
            <div class="col-md-6 animate fadeInUp" data-wow-delay="0.8s">
              <div class="clearfix icon-box ib-style-2 i-large i-top padding-bottom-15 border-bottom-1 border-light">
                <div class="ib-icon"> <i class="fas fa-sliders-h"></i> </div>
                <div class="ib-info">
                  <h4 class="h6">Powerful Admin</h4>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece</p>
                </div>
              </div>
            </div>

            <!-- Services -->
            <div class="col-md-6 animate fadeInUp" data-wow-delay="0.4s">
              <div class="clearfix icon-box ib-style-2 i-large i-top padding-bottom-31">
                <div class="ib-icon"> <i class="far fa-moon"></i> </div>
                <div class="ib-info">
                  <h4 class="h6">Sleeping Mode</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                </div>
              </div>
            </div>
          </div>

          <!-- App Buttons -->
          <div class="app-btns"> <a href="#." class="margin-right-10"><img src="<?php echo  base_url();?>assets/frontend/images/android-btn.png" alt="" ></a><a href="#."><img src="<?php echo  base_url();?>assets/frontend/images/app-btn.png" alt="" ></a> </div>
        </div>

        <!-- Image -->
        <div class="col-lg-4 text-right animate fadeInRight" data-wow-delay="0.4s"> <img class="img-responsive" src="<?php echo  base_url();?>assets/frontend/images/iphone-x-screen.png" alt="Why Choose Us Image" /> </div>
      </div>
    </div>
  </section>

  <!-- WHAT OUR USERS SAY -->
  <section class="bg-white padding-top-100 padding-bottom-100">
    <div class="container">

      <!-- Heading Block -->
      <div class="heading-block text-center">
        <h2>Testimonials</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue conseqaut nibbhi ellit ipsum consectetur. </p>
      </div>

      <!-- Testimonial Style 4 -->
      <div class="testimonial style-4">
        <div class="testi">
          <!-- Testi Slides With Image -->
          <div class="testi-slide">

            <!-- Slides -->
            <div>
              <!-- Avatar -->
              <div class="avatar"><img class="img-circle img-responsive" src="<?php echo  base_url();?>assets/frontend/images/testimonial-2a.png" alt=" "></div>
              <div class="text-in">
                <p>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                  or randomised words which don't look even slightly believable.” </p>
                <h6>WHITE SHADOW WALKER</h6>
                <span> CEO/FOUNDER DELL</span></div>
            </div>

            <!-- Slides -->
            <div>
              <!-- Avatar -->
              <div class="avatar"><img class="img-circle img-responsive" src="<?php echo  base_url();?>assets/frontend/images/testimonial-2b.png" alt=" "></div>
              <div class="text-in">
                <p>“There are many variations  but the majority have suffered alteration. but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.”</p>
                <h6>M_ADNAN</h6>
                <span> CEO/FOUNDER DELL</span></div>
            </div>

            <!-- Slides 1 -->
            <div>
              <!-- Avatar -->
              <div class="avatar"><img class="img-circle img-responsive" src="<?php echo  base_url();?>assets/frontend/images/testimonial-2c.png" alt=" "></div>
              <div class="text-in">
                <p>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, Alteration in some form randomised words which don't look even slightly believable.”</p>
                <h6>DAVID WALKER</h6>
                <span> CEO/FOUNDER DELL</span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
