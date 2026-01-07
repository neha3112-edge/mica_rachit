
<?php include 'popup.php'; ?>

    <div id="footer">
    <div class="container">
    <div class="footer-section">
            <div class="footer-column">
                <a href="https://mica.distanceeducationschool.in/"><img src="assets/img/mica-logo-white.png" alt="logo-img" width="70%"/><br><br></a>
                   <h2>Have Query? <br>Need Guidance</h2><br>
                  <button class="enquireNowBtn" style="background-color:#BF1E24; padding:10px 20px; color:#fff; border-style:none; border-radius:5px;">Request Call Back</button>
            </div>
            <div class="footer-column">
                <h2>RANKING & ACCREDITATION</h2>
                <ul>
                    <li>Business Administration</li>
                    <li>International Business</li>
                    <li>Finance</li>
                    <li>Healthcare Management</li>
                    <li>Human Resource Management</li>
                    <li>Data Science</li>
                    <li>Marketing</li>
                    <li>Supply Chain Management</li>
                    <li>Business Analytics</li>
                    <li>Leadership</li>
                </ul>
                
            </div>
            <div class="footer-column">
                <h2>QUICK LINKS</h2>
                <ul>
                    <li><a href="#about_section">About MICA</a></li>
                    <li><a href="#Universities">Course Curriculum</a></li>
                    <li><a href="#faqs">Frequently Asked Question</a></li>
                    <li><a href="#advantages">Advantages</a></li>

                </ul>           
    
                <br/>
            </div> 
        </div>
   
     
    </div>
</div>


<div id="footer-bottom-bar">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
            <!--<p>Home | About | Courses | FAQ</p>-->
            <center><hr/></center>
            <p>&copy; <?php echo date("Y"); ?>  This information is provided by SODE Counselling Services LLP. All university names, logos, and trademarks mentioned are used for informational purposes only. We are not a university or an admission authority. <br><span class="disclaimer_popup" onclick="disclaimerModal()" style="color:#8DB3F0; font-size:14px; cursor:pointer; font-weight:bold; text-decoration:underline;">Disclaimer</span></p>
            </div>
        </div>
    </div>
</div>

<?php include 'popup.php'; ?>

<script>
//     start on scroll popup

  window.addEventListener('scroll', function () {
    const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrolledPercentage = (window.scrollY / scrollableHeight) * 100;

    if (scrolledPercentage >= 50) {
      const modal = document.getElementById('myModal');
      modal.style.display = 'flex';
      window.removeEventListener('scroll', arguments.callee);
    }
  });

  document.getElementById('closeButton').addEventListener('click', function () {
    const modal = document.getElementById('myModal');
    modal.style.display = 'none';
  });
    </script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    

        <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        // Function to get the value of a URL parameter
        function getQueryParam(param) {
            var searchParams = new URLSearchParams(window.location.search);
            return searchParams.get(param) || ''; // Return an empty string if the parameter is not found
        }

        // Get all forms on the page
        var forms = document.querySelectorAll('form');

        // Loop through each form to set the values
        forms.forEach(function(form) {
            form.querySelector('#sub_source').value = getQueryParam('sub_source');
            form.querySelector('#utm_source').value = getQueryParam('utm_source');
            form.querySelector('#utm_campaign').value = getQueryParam('utm_campaign');
            form.querySelector('#utm_medium').value = getQueryParam('utm_medium');
            form.querySelector('#utm_term').value = getQueryParam('utm_term');

            // Get the current URL
            const currentURL = window.location.href;

            // Remove UTM parameters and fragments from the URL
            const urlWithoutParams = currentURL.split(/[?#]/)[0];

            // Set the extracted URL to the input field
            form.querySelector('#page_url').value = urlWithoutParams;
        });
    });
</script>