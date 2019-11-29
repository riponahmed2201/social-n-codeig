<div id="content">

    <!-- Login Register -->
    <section class="login-register padding-top-100 padding-bottom-150">
      <div class="container">

        <!-- Payments Steps -->
        <div class="inside-log-reg">

              <!-- Nav Tabs -->
          <div class="text-center">
            <h1><b>Register</b></h1>
          </div>

              <!-- Login Register Inside -->
              <div class="tab-content" id="myTabContent">

                <!-- Login -->
                <div class="tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="login-tab">
                  <form action="<?php echo base_url();?>User/register_form_validation" method="post">
                    <ul class="row">

                      <!-- Name -->
                      <li class="col-md-4">
                        <div class="radio">
                          <input type="radio" id="free" value="corporate" name="member_ship" required>
                          <!-- <span class="text-danger"> <?php echo validation_errors('member_ship');?></span> -->
                          <label for="free">Coporate</label>
                        </div>
                      </li>
                      <li class="col-md-4">
                        <div class="radio">
                          <input type="radio" id="compny" value="company" name="member_ship" required>
                          <!-- <span class="text-danger"> <?php echo validation_errors('member_ship');?></span> -->
                          <label for="compny">Company</label>
                        </div>
                      </li>
                      <li class="col-md-4">
                        <div class="radio">
                          <input type="radio" id="profe" value="professional" name="member_ship" required>
                          <!-- <span class="text-danger"> <?php echo validation_errors('member_ship');?></span> -->
                          <label for="profe">Professionals </label>
                        </div>
                      </li>

                      <!-- Name -->
                      <li class="col-md-6">
                        <label> Full Name *
                          <input type="text" name="full_name" value="" placeholder="Full Name *" class="form-control" required>
                          <!-- <span class="text-danger"> <?php echo validation_errors('full_name');?></span> -->
                        </label>
                      </li>

                      <!-- Name -->
                      <li class="col-md-6">
                        <label> Email Address *
                          <input type="text" name="email" value="" placeholder="Email Address *" class="form-control" required>
                          <!-- <span class="text-danger"> <?php echo validation_errors('email');?></span> -->
                        </label>
                      </li>

                      <!-- Name -->
                      <li class="col-md-6">
                        <label> User Name *
                          <input type="text" name="username" value="" placeholder="User Name *" class="form-control" required>
                          <!-- <span class="text-danger"> <?php echo validation_errors('username');?></span> -->
                        </label>
                      </li>
                      <!-- Password -->
                      <li class="col-md-6">
                        <label> Password *
                          <input type="password" name="password" value="" placeholder="Password *" class="form-control" required>
                          <!-- <span class="text-danger"> <?php echo validation_errors('password');?></span> -->
                        </label>
                      </li>
                      <!-- Password -->
                      <li class="col-md-12">
                        <label> Country *
                          <select class="form-control" name="country" required>
                            <option selected>--select--</option>
                            <option value="BD">Bangladesh</option>
                            <option value="USA">USA</option>
                            <option value="India">India</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="England">England</option>
                          </select>
                          <!-- <span class="text-danger"> <?php echo validation_errors('country');?></span> -->
                        </label>
                      </li>
                      <li  class="col-md-12">
                        <h5>Payment Info</h5>
                      </li>
                      <li  class="col-md-8">
                        <label> Package Info
                          <select class="form-control" name="package_info" required>
                            <option selected>--select--</option>
                            <option value="Free">Free</option>
                            <option value="Personal">Personal</option>
                            <option value="Business">Business</option>
                            <option value="Enterprise">Enterprise</option>
                            <option value="Platinum">Platinum</option>
                            <option value="Ultimate">Ultimate</option>
                          </select>
                          <!-- <span class="text-danger"> <?php echo validation_errors('package_info');?></span> -->
                        </label>
                      </li>
                      <li  class="col-md-4">
                        <div class="price-info"> USD <span>00.00</span> </div>
                      </li>
                      <li  class="col-md-12">
                        <div class="price-info margin-top-0 margin-bottom-20">
                          <p> Tax (VAT) <span>00.00</span> </p>
                          <p> Total Price <span>00.00</span> </p>
                        </div>
                      </li>
                      <li class="col-md-12 text-center">
                        <button type="submit" class="btn">Register</button>
                      </li>

                    </ul>
                    <div class=" text-center">
                        <h4> Already have an account <a href="<?php echo base_url();?>User/show_login_page">Click</a> to Login?</h4>
                    </div>
                  </form>

                </div>
                  </li>

                    </ul>
                  </form>
                </div>
              </div>
    </section>
  </div>


































<!--
