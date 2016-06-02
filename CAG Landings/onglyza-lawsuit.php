<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/onglyza-validate.js"></script>
  </head>
  <body>
    <!--landing page title bar -->
    <div class="header-background">
      <h1 class="text-center">DANGEROUS DIABETES MEDICATION <span class="white">ONGLYZA</span></h1>
      <p class="text-center"><i class="text-center white fa fa-caret-down"></i></p>
    </div>
    <div class="container">
      <!-- class action content -->
      <div class="col-md-6">
        <div class="row">
          <img class="img-responsive onglyza-image" src="img/onglyza-lawsuits-receive-compensation-500x300.jpg"
               alt="Onglyza causes heart and kidney failure"/>
        </div>
        <div class="row">
          <div class="landing-content">
            <h1>Type 2 Diabetes Medication With Deadly Side Effects</h1>
            <p>
              Lorem ipsum dolor sit amet, te qui vidisse reprimique, no virtute constituam sit. Eu per discere adipiscing intellegam, 
              id quod falli est. Eam choro percipit reprehendunt in. Est nibh justo partiendo cu. Volumus corpora tincidunt mea ea, summo oporteat te mei. Repudiare definiebas at mel, eam id soleat diceret assentior, ipsum tantas tritani ei vix. Diam ancillae no vix, eu cum decore tractatos. Eos suas iracundia ut, inermis scripserit ius ex, ad pro ipsum nullam. His option eripuit no, pertinacia contentiones interpretaris per cu. Vel brute utroque oportere no, sit cu dolorum fabellas argumentum. Elit melius usu at, veniam putent verterem usu cu. Splendide sadipscing te quo, sit meis epicurei ne, persius habemus ocurreret mel ei. Cum ut ornatus urbanitas.Eu tation invidunt sit, feugait definitionem ad mei. Vim te solum civibus vivendum, elit voluptatibus ut mea. At scripta viderer consequuntur ius, ridens oporteat iracundia mea an. Soleat ornatus et duo, simul fierent eu has, nec ei everti malorum. An vim tation scribentur, te impedit epicuri accusamus nam. Fugit inani vel ei. Omnes facilis quaestio et cum, nec ex illud atqui fastidii, nec purto cetero gloriatur te. Legendos gubergren id mea. Ad facer ceteros vix, cu clita intellegat eam.
            </p>
          </div>
        </div>
      </div>
      <!-- form -->
      <div class="col-md-6">
        <form role="form" action="#" method = "post" onsubmit = "return onOnglyzaSubmit()">
          <div class="dark-grey-border row">
            <h3 class="form-title text-center">Find Out If You're Eligible For Compensation</h3>
            <!-- hidden input to store current page value -->
            <input type="hidden" id="currentPage" name="currentPage" value="page-1">
            <input type="hidden" id="campaign_id" name="campaign_id" value="onglyza">
            <div class="page-1">
              <div class="col-md-12">
                <label class="question">Did you or a loved one take the Type 2 Diabetic Medication Onglyza or
                  Kombiglyze XR and suffer severe side effects?</label>
                <input type="radio" class="form-group" name="OnglyzaTaken" id="OnglyzaTaken" value="Yes" checked required/>
                <label class="radio-label">Yes</label>
                <input type="radio" class="form-group" name="OnglyzaTaken" value="No"  required/>
                <label class="radio-label">No</label>
              </div>
              <div class="col-md-12">
                <label class="question">What side effects did you or a loved one suffer from?</label>
                <select class="form-control" name="OnglyzaSideEffects">
                  <option selected value="Heart Attack">Heart Attack</option>
                  <option value="Heart Failure">Heart Failure</option>
                  <option value="Kidney Disease">Kidney Disease</option>
                  <option value="Pancreatic Cancer">Pancreatic Cancer</option>
                  <option value="Death">Death</option>
                </select>
              </div>
              <div class="col-md-12">
                <label class="question">When did you or a loved one take this medication?</label>
                <select class="form-control" name="OnglyzaTakenYear">
                  <option selected value="2006">2006</option>
                  <option value="2007">2007</option>
                  <option value="2008">2008</option>
                  <option value="2009">2009</option>
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="Before">2005 or Before</option>
                </select>
              </div>
              <div class="col-md-12">
                <label class="question">Have you consulted with an attorney on this case?</label>
                <input type="radio" class="form-group" name="Attorney" value="Yes" checked required/>
                <label class="radio-label">Yes</label>
                <input type="radio" class="form-group" name="Attorney" value="No" required/>
                <label class="radio-label">No</label>
              </div>
              <div class="col-md-12">
                <label class="question">Please provide any additional comments regarding this case:</label>
                <textarea class="form-control" rows="3" name = "Comments" id = "Comments"></textarea>
              </div>
            </div>
            <div class="page-2">
              <div class="col-md-6">
                <label class="question">First Name</label>
                <input type="text" class="form-control" name = "FirstName" id = "FirstName" required/>
              </div>
              <div class="col-md-6">
                <label class="question">Last Name</label>
                <input type="text" class="form-control" name = "LastName" id = "LastName" required/>
              </div>
              <div class="col-md-12">
                <label class="question">Address 1</label>
                <input type="text" class="form-control" name = "Address1" id = "Address1"/>
              </div>
              <div class="col-md-12">
                <label class="question">Address 2</label>
                <input type="text" class="form-control" name = "Address2" id = "Address2"/>
              </div>
              <div class="col-md-4">
                <label class="question">City</label>
                <input type="text" class="form-control" name = "City" id = "City"/>
              </div>
              <div class="col-md-4">
                <label class="question">State</label>
                <select class="form-control" name="State">
                  <option selected value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="question">Zip</label>
                <input type="text" class="form-control" name = "Zip" id = "Zip" required/>
              </div>
              <div class="col-md-6">
                <label class="question">Telephone</label>
                <input type="tel" class="form-control" name = "Phone" id = "Phone" required/>
              </div>
              <div class="col-md-6">
                <label class="question">Alternative Telephone</label>
                <input type="tel" class="form-control" name = "AlternativePhone" id = "AlternativePhone"/>
              </div>
              <div class="col-md-6">
                <label class="question">Email</label>
                <input type="email" class="form-control" name = "Email" id = "Email" required/>
              </div>
              <div class="col-md-6">
                <div class="checkbox">
                  <label class="privacy-statement"><input name="Consent" id="Consent" type="checkbox" value="Consent">
                    By checking this box and clicking the “Submit” button below, you provide your express consent
                    authorizing Pro Legal Services to contact you by telephone, which may include artificial or pre-
                    recorded calls and/or text messages, delivered via automated technology, to the phone
                    number(s) that you provided above even if you are on a Federal or State Do Not Call Registry or
                    the phone number provided is a cell phone . You may also be contacted by ProLegal Services
                    verification service to confirm the accuracy or completeness of the information you submit.
                    Your consent herein does not require a purchase and is solely a request for information.</label>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <!-- error element to display feedback to user -->
              <div>
                <p class="form-error-message text-center" id="errorElement"></p>
              </div>
              <!-- buttons -->
              <div class="button-div">
                <input id="backButton" class="form-btn prev-button" type="button" value="Back" onclick="onglyzaPrevPage();" />
                <input id="nextButton" class="form-btn next-button" type="button" value="Next" onclick="onglyzaNextPage();" />
                <button type="submit" class="form-btn submit-button" display="none">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- footer -->
    <footer class="landing-footer">
      <div class="container">
        <div class="col-md-4">
          <h4>Consumer Awareness Group</h4>
          <p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scriptaset patrioque scribentur, 
            at pro fugit erts verterem molestiae, sed et vivendo ali Lorem ipsum ex vix illud nonummy, novum 
            tation et his. At vix scripta patrioque scribentur</p>
          <p>View Our <a href="privacy-policy/">Privacy Policy</a></p>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        </div>
      </div>
      <!-- footer bottom bar -->
      <div class="landing-footer-bottom-bar">
        <div class="container">
          <div class="col-md-6">
            <p>© Copyright 2012 - 2016 | Consumer Awareness Group | All Rights Reserved</p>
          </div>
          <!-- social media bar -->
          <div class="col-md-6 footer-social-bar">
            <a href="#">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="#">
              <i class="fa fa-vimeo-square" aria-hidden="true"></i>
            </a>
            <a href="#">
              <i class="fa fa-rss-square" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/CAG_HQ">
              <i class="fa fa-twitter-square" aria-hidden="true"></i>
            </a>
            <a href="https://www.facebook.com/Consumer-Awareness-Group-1086422438046964/" target="_blank">
              <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/jquery.js"></script>
  </body>
</html>
