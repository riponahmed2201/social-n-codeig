<div id="content">

  <!-- Login Register -->
  <section class="login-register padding-top-100 padding-bottom-150">
    <div class="container">

      <!-- Payments Steps -->
      <div class="inside-log-reg">

            <!-- Nav Tabs -->
            <ul class="nav" id="myTab" role="tablist">
              <li class="nav-item"> <a class="nav-link active" id="login-tab" data-toggle="tab" href="#log" role="tab" aria-selected="true">Login</a> </li>
              <li class="nav-item"> <a class="nav-link" id="reg-tab" data-toggle="tab" href="#reg" role="tab" aria-selected="false">Register</a> </li>
            </ul>

            <!-- Login Register Inside -->
            <div class="tab-content" id="myTabContent">

              <!-- Login -->
              <div class="tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="login-tab">
                <form>
                  <ul class="row">

                    <!-- Name -->
                    <li class="col-md-12">
                      <label> Username Or Email Address
                        <input type="text" name="first-name" value="" placeholder="" class="form-control">
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-12">
                      <label> Password
                        <input type="password" name="last-name" value="" placeholder="" class="form-control">
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
                </form>
              </div>

              <!-- Register -->
              <div class="tab-pane fade" id="reg" role="tabpanel" aria-labelledby="reg-tab">
                <form>
                  <ul class="row">

                    <!-- Name -->
                    <li class="col-md-4">
                      <div class="radio">
                        <input type="radio" id="free" name="member-ship">
                        <label for="free">Coporate</label>
                      </div>
                    </li>
                    <li class="col-md-4">
                      <div class="radio">
                        <input type="radio" id="compny" name="member-ship">
                        <label for="compny">Company</label>
                      </div>
                    </li>
                    <li class="col-md-4">
                      <div class="radio">
                        <input type="radio" id="profe" name="member-ship">
                        <label for="profe">Professionals </label>
                      </div>
                    </li>

                    <!-- Name -->
                    <li class="col-md-6">
                      <label> Full Name *
                        <input type="text" name="first-name" value="" placeholder="" class="form-control">
                      </label>
                    </li>

                    <!-- Name -->
                    <li class="col-md-6">
                      <label> Email Address *
                        <input type="text" name="first-name" value="" placeholder="" class="form-control">
                      </label>
                    </li>

                    <!-- Name -->
                    <li class="col-md-6">
                      <label> User Name *
                        <input type="text" name="first-name" value="" placeholder="" class="form-control">
                      </label>
                    </li>
                    <!-- Password -->
                    <li class="col-md-6">
                      <label> Password *
                        <input type="password" name="last-name" value="" placeholder="" class="form-control">
                      </label>
                    </li>
                    <!-- Password -->
                    <li class="col-md-12">
                      <label> Country *
                        <select class="form-control">
                          <option>USA</option>
                          <option>USA</option>
                          <option>USA</option>
                          <option>USA</option>
                        </select>
                      </label>
                    </li>
                    <li  class="col-md-12">
                      <h5>Payment Info</h5>
                    </li>
                    <li  class="col-md-8">
                      <label> Package Info
                        <select class="form-control">
                          <option>Free</option>
                          <option>Personal</option>
                          <option>Business</option>
                          <option>Enterprise</option>
                          <option>Platinum</option>
                          <option>Ultimate</option>
                        </select>
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
                    <li class="col-md-12">
                      <div class="checkbox ">
                        <input id="checkbox1" type="checkbox">
                        <label for="checkbox1"> I have read &amp; accept the Terms &amp; Conditions </label>
                      </div>
                    </li>

                    <!-- LOGIN -->
                    <li class="col-md-12 text-center">
                      <button type="submit" class="btn">Register</button>
                    </li>
                  </ul>
                </form>
              </div>
            </div>

      </div>
    </div>
  </section>
</div>
