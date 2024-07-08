<?php include('common/header.php'); ?>
<style>
.career-page .up-down::after {
    content: "";
    background: url(images/down.png);
    height: 60px;
    width: 80px;
    position: absolute;
    position: absolute;
    bottom: 34px;
    right: 8px;
    background-repeat: no-repeat;
}
</style>
<section class="pd-100 career-page">
    <div class="container">
        <div class="row align-center">
            <div class="col-md-6">
                <div class="up-down">
                    <h1 class="poppins uppercaes fs">
                        Join the Team
                    </h1>
                </div>
            </div>

            <div class="col-md-6">
                <div class="bg-vector"></div>
                <img src="images/services-banner.png" class="hola-img" alt="Hola Banner Image">
            </div>
        </div>
    </div>
</section>




<section class="brand-bg relative text-white pd70">
    <div class="container">
        <h2 class="fs45 uppercaes text-center mb70"> Find your dream job</h2>

        <div class="row career-pd align-items">
            <div class="col-md-4">
                <a href="career-detail.php" class="text-black text-decoration wow animate__ animate__fadeInUp animated">
                    <div class="career-box">
                        <div class="d-flex space-between">
                            <h3 class="cinzel fs22">Sr. UX Designer</h3>
                            <img src="https://unideskpartners.com/public/frontend/images/arrow-right.svg" width="36"
                                height="36">
                        </div>
                        <p class="location">Delhi</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="career-detail.php" class="text-black text-decoration wow animate__ animate__fadeInUp animated">
                    <div class="career-box">
                        <div class="d-flex space-between">
                            <h3 class="cinzel fs22">Project Co-ordinator</h3>
                            <img src="https://unideskpartners.com/public/frontend/images/arrow-right.svg" width="36"
                                height="36">
                        </div>
                        <p class="location">NewYork</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="career-detail.php" class="text-black text-decoration wow animate__ animate__fadeInUp animated">
                    <div class="career-box">
                        <div class="d-flex space-between">
                            <h3 class="cinzel fs22">Front-End Developer</h3>
                            <img src="https://unideskpartners.com/public/frontend/images/arrow-right.svg" width="36"
                                height="36">
                        </div>
                        <p class="location">London</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="career-detail.php" class="text-black text-decoration wow animate__ animate__fadeInUp animated">
                    <div class="career-box">
                        <div class="d-flex space-between">
                            <h3 class="cinzel fs22">Senior developer</h3>
                            <img src="https://unideskpartners.com/public/frontend/images/arrow-right.svg" width="36"
                                height="36">
                        </div>
                        <p class="location">Mumbai</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="career-detail.php" class="text-black text-decoration wow animate__ animate__fadeInUp animated">
                    <div class="career-box">
                        <div class="d-flex space-between">
                            <h3 class="cinzel fs22">Content Strategist</h3>
                            <img src="https://unideskpartners.com/public/frontend/images/arrow-right.svg" width="36"
                                height="36">
                        </div>
                        <p class="location">Mumbai</p>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>


<section class="relative pd70">
    <div class="container">
        <div class="w-700">
            <h2 class="fs45 uppercaes text-center mb70 wow animate__ animate__fadeInUp animated">Send us your
                details, and we'll be in touch.</h2>
                
                <form>
                    <div class="row">
                        <div class="form-group col-md-6 mb-4">
                            <input type="text" class="form-control" placeholder="Full Name*">
                        </div>
                        <div class="form-group col-md-6 mb-4">
                            <input type="email" class="form-control" placeholder="Email ID*">
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 mb-4">
                            <input type="text" class="form-control" placeholder="Phone Number*">
                        </div>
                        <div class="form-group col-md-6 mb-4">
                            <input type="text" class="form-control" placeholder="Company Name*">
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-6 mb-4">
                            <input type="url" class="form-control" placeholder="LinkedIn URL*">
                        </div>
                        <div class="form-group col-md-6 mb-4">
                            <input type="url" class="form-control" placeholder="Portfolio / GitHub URL">
                        </div>
                    </div>

                    <!-- <div class="form-group mb-4">
                        <select class="form-select" aria-label="Default select example">
                            <option selected value="Are you an employer looking to hire candidates?">Are you an employer
                                looking to hire candidates?</option>
                            <option value="Are you an employee looking for global jobs? ">Are you an employee looking
                                for global jobs? wo</option>
                        </select>
                    </div> -->
                    <div class="form-group mb-4">
                        <textarea class="form-control" rows="3" placeholder="Type a message"></textarea>
                    </div>
                    <div class="cta-btn">
                        <button type="submit" class="text-center cta-bg">Submit <img
                                src="images/contact-icon.png"></button>
                    </div>
                </form>

            <!-- <form id="contactForm" class="wow animate__ animate__fadeInUp animated">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="fname" class="form-control" placeholder="First Name*" accept="text"
                                required="">
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="cname" class="form-control" placeholder="Company Name*"
                                required="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email ID*" required="">
                        </div>

                        <div class="col-md-6">
                            <input type="tel" name="number" class="form-control" placeholder="Phone Number*"
                                required="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="linkedin" class="form-control" placeholder="LinkedIn URL*"
                                required="">
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="gitub" class="form-control" placeholder="Portfolio / GitHub URL*"
                                required="">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label
                                class="w-full block mb-1 text-center py-4 text-xs border uppercase border-white text-white font-bold rounded"
                                variant="outlined" component="label">
                                <img src="https://unideskpartners.com/public/frontend/images/upload-icon.svg" width="20"
                                    height="20" decoding="async" data-nimg="1" class="inline mr-3" loading="lazy"
                                    style="color: transparent;">Upload resume<input type="file" name="resume"
                                    accept="application/pdf" required="" hidden=""></label>
                        </div>
                    </div>

                    <div class="form-group mt20">
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" class="form-control1" rows="3" placeholder="Type a message*"
                                    required=""></textarea>
                            </div>
                        </div>

                        <button type="submit" class="cta headerbutton bnone" id="load2"
                            data-loading-text="<i class='fa fa-spinner fa-spin'></i> Loading...">Submit <span><img
                                    src="https://unideskpartners.com/public/frontend/images/contacticon.png"></span></button>
                    </div>

                </div>
            </form> -->
        </div>
    </div>

</section>





















<?php include('common/footer.php'); ?>