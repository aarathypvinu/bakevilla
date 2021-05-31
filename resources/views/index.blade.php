@extends("theme")
@section("content")
<div class="container">
    
    <div class="row">
    <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 "></div>
        <div class="col col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 ">
            <img height="300px"width="500px" src="https://content.jdmagicbox.com/comp/thrissur/w4/9999px487.x487.140213105023.p7w4/catalogue/mango-bakers-punkunnu-thrissur-7.png" class="img-thumbnail" alt="...">

        </div>
    </div>
    <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 "></div>
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <table class="table-borderless">
                <tr>
                    <td>username</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-success">Login</button></td>
                </tr>
            </table>
         
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Why Cake Farm is different from other bakery?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>We are providing many extra facilities .</strong>we are trying to make our bakery as best by our services.Allour customers were well satisfied by the way of our approach.    <code>Our services is available all over Kerala. </code>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Home delivery
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>We have Home delivery services .</strong> We are providing home delivery services around 10kms from our bakery <code>.Beyond from 10 kms we are charging transportation fees.</code>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Orders
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>We are taking orders for any functions.</strong>For any functions customers can contact us for our services such as cakes,sweets,puddings etc.   <code> </code>
                    </div>
                  </div>
                </div>
              </div>

        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <table class="table-borderless">
                
                <h4>Want Job?Just give your resume</h4>
                <tr>
                    <td>Name</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>gender</td>
                    <td><div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                         male
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          female
                        </label>
                      </div></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>educational qualification</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>why this job?</td>
                    <td><input type="text" class="control"></td>
                </tr>
                <tr>
                    <td>expected salary</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-success">Submit</button></td>
                </tr>
            </table>

        </div>
    </div>
</div>
@endsection