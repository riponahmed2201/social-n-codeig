<div id="content">

    <!-- Login Register -->
    <section class="login-register padding-top-100 padding-bottom-150">
      <div class="container">

        <!-- Payments Steps -->
        <div class="inside-log-reg">

              <!-- Nav Tabs -->
          <div class="text-center">
            <h1><b>Login</b></h1>
          </div>

              <div class="tab-content" id="myTabContent">

                <!-- Login -->
                <div class="tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="login-tab">
                  <form method="post" action="<?php echo base_url();?>User/login_check">
                    <ul class="row">



                      <p style="color:red;">
                        <?php
                        $msg = $this->session->userdata('message');
                        if ($msg) {
                        echo $msg;
                        $this->session->unset_userdata('message');
                        }?>
                      </p>



                      <li class="col-md-12">
                        <label>Email Address
                          <input type="email" name="email" placeholder="Email Address:" class="form-control">
                        </label>
                      </li>
                      <!-- LAST NAME -->
                      <li class="col-md-12">
                        <label> Password
                          <input type="password" name="password" value="" placeholder="Password:" class="form-control">
                        </label>
                      </li>

                      <!-- LOGIN -->
                      <li class="col-md-4">
                        <button type="submit" class="btn">LOGIN</button>
                      </li>

                      <!-- FORGET PASS -->
                      <li class="col-md-4">
                        <div class="checkbox margin-top-15">
                          <input id="rembr" type="checkbox">
                          <label for="rembr"> Remember Me </label>
                        </div>

                        <!-- FORGET PASS -->
                      <li class="col-md-4">
                        <div class="margin-top-15 text-right"> <a href="#.">Forget Password</a> </div>
                      </li>
                    </ul>

                      <div class="text-center">
                        <h4> Not yet account <a href="<?php echo base_url();?>User/show_register_page">Click </a> here to Register?</h4>
                      </div>
                  </form>
                </div>
                  </li>


                    </ul>
                  </form>
                </div>
              </div>

        </div>
      </div>
    </section>
  </div>
