<?php include('common/header.php') ?>

<section class="pd70">
    <div class="container">
        <div class="row align-center">
            <div class="col-md-7">
                <h3 class="fs32 fw500 line-height58 poppins mb30 wow animate__animated animate__fadeInUp">Contact Us</h3>
                <form id="contactForm" class="wow animate__animated animate__fadeInUp">
                    <div class="row">
                        <div class="form-group col-md-12 mb-4">
                            <input type="text" name="fullname" class="form-control" placeholder="Full Name">
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 mb-4">
                            <input type="email" name="email" class="form-control" placeholder="Email ID">
                        </div>
                        <div class="form-group col-md-6 mb-4">
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <select class="form-select" name="select" >
                            <!-- <option selected >Open this select menu</option> -->
                            <option selected value="Are you an employer looking to hire candidates?">Are you an employer
                                looking to hire candidates?</option>
                            <option value="Are you an employee looking for global jobs? ">Are you an employee looking
                                for global jobs? wo</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-control" name="meesage" rows="3" placeholder="Type a message*"></textarea>
                    </div>
                    <div class="cta-btn">
                        <button type="submit" name="submit" class="text-center cta-bg">Submit <img
                                src="images/contact-icon.png"></button>
                    </div>
                </form>
            </div>

            <div class="col-md-5">
                <div class="contact-vector"></div>
                <img src="images/contact.png" class="hola-img" alt="Hola Banner Image">
            </div>
        </div>
    </div>
</section>


<section class="brand-bg pd-100">
    <div class="container">
        <h1 class="text-center text-white uppercaes poppins fs40 mb70">Get in touch</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="bg-white pd border-radius20 box-shadow height150">
                    <h3 class="fs22 fw500 line-height42 poppins">Address</h3>
                    <p class="fs16">&work Co-working, Ansal Plaza Mall, 1st Floor, Sector – 15A, Faridabad, Haryana
                        121007, India</p>
                </div>
            </div>



            <div class="col-md-4">
                <div class="bg-white pd border-radius20 box-shadow height150">
                    <h3 class="fs22 fw500 line-height42 poppins">Phone</h3>
                    <a href="call:+91 70650 11171 " class="fs16 text-black text-decoration">+91 706 501 1171 </a>
                </div>
            </div>


            <div class="col-md-4">
                <div class="bg-white pd border-radius20 box-shadow height150">
                    <h3 class="fs22 fw500 line-height42 poppins">Email</h3>
                    <a href="mailto:hello@embarkk.digital" class="fs16 text-black">hello@embarkk.digital</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src = "https://ajax.aspnetCDN.com/ajax/jQuery/jQuery-1.9.0.min.js"></script>
<script> 
$('#contactForm').on('submit', function(e){
    e.preventDefault(); 
            //$("#loader").show();
            // shows the loading screen
            window.swal({
              title: "Loading...",
              text: "Please wait",
              //imageUrl: "images/loading.gif",
              showConfirmButton: false,
              allowOutsideClick: false
            });
            
     var data = new FormData(this); 
     $.ajax({ 
        type:"POST", 
        url:"mail.php", 
        data:data,
        contentType:false,
        cache:false,
        processData:false,
        success:function(response){ console.log(response); 
        swal({text:'Thank you for contacting us. One of our team members will contact you shortly.',
        icon: "success", button: "Ok!" });
        window.setTimeout(function(){
    location.reload() },3000) }
    }) }) 
</script>
<?php include('common/footer.php') ?>