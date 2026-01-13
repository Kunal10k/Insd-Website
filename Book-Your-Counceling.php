<?php include 'inside/header.php' ?>



<section class="inner_Section" style="background-image: url('./assets/img/sliderbg.jpg');">


    <div class="container-flud">
        <h1 class="title text-center">
            Book Your Counceling
        </h1>
    </div>
</section>


<section class="admission-section">
    <div class="container">
        <div class="admission-card">

            <h3 class="title text-center">Admission <span>Form</span> </h3>
            <p class="para text-center">Programme the candidate is applying for</p>




            <!-- Programme -->
            <div class="form-row mt-5">
                <div class="form-group">
                    <label>Course <span>*</span></label>
                    <select>
                        <option value="">Please choose an option</option>
                        <option>Fashion Designing</option>
                        <option>Graphic Designing</option>
                        <option>Interior Designing</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Programme Type <span>*</span></label>
                    <select>
                        <option value="">Please choose an option</option>
                        <option>B.Des</option>
                        <option>M.Des</option>
                        <option>Diploma</option>
                    </select>
                </div>
            </div>

            <!-- Personal Info -->
            <h4 class="section-title">Personal Information</h4>

            <div class="form-group">
                <label>Candidate’s Full Name <span>*</span></label>
                <input type="text" placeholder="Enter full name">
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Father’s Name <span>*</span></label>
                    <input type="text" placeholder="Father’s name">
                </div>
                <div class="form-group">
                    <label>Mother’s Name <span>*</span></label>
                    <input type="text" placeholder="Mother’s name">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Date of Birth <span>*</span></label>
                    <input type="date">
                </div>
                <div class="form-group">
                    <label>Gender <span>*</span></label>
                    <div class="radio-group">
                        <label><input type="radio" name="gender"> Male</label>
                        <label><input type="radio" name="gender"> Female</label>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Email Address <span>*</span></label>
                    <input type="email" placeholder="Email address">
                </div>
                <div class="form-group">
                    <label>Mobile Number (Self) <span>*</span></label>
                    <input type="tel" placeholder="Mobile number">
                </div>
            </div>

            <div class="form-group">
                <label>Mobile Number (Parent) <span>*</span></label>
                <input type="tel" placeholder="Parent mobile number">
            </div>

            <!-- Address -->
            <h4 class="section-title">Address</h4>

            <div class="form-group">
                <label>Correspondence Address <span>*</span></label>
                <textarea placeholder="Enter correspondence address"></textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Country</label>
                    <input type="text" placeholder="Country">
                </div>
                <div class="form-group">
                    <label>State</label>
                    <input type="text" placeholder="State">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" placeholder="City">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Pincode</label>
                    <input type="text" placeholder="Pincode">
                </div>
                <div class="form-group">
                    <label>Nationality <span>*</span></label>
                    <input type="text" placeholder="Nationality">
                </div>
            </div>

            <!-- Upload -->
            <h4 class="section-title">Upload Documents</h4>

            <div class="form-row">
                <div class="form-group">
                    <label>Passport Size Photo <span>*</span></label>
                    <input type="file">
                </div>
                <div class="form-group">
                    <label>Date of Birth Proof <span>*</span></label>
                    <input type="file">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>ID Proof <span>*</span></label>
                    <input type="file">
                </div>
                <div class="form-group">
                    <label>Address Proof <span>*</span></label>
                    <input type="file">
                </div>
            </div>



            <div class="ban-btn">

                <a href="#" class="btn-animated btn-light mt-4">
                    <div class="btn-text-wrap">
                        <div class="btn-text">SUBMIT</div>
                        <div class="btn-text-hover">SUBMIT</div>
                    </div>
                    <div class="btn-icon-wrap">
                        <img src="https://cdn.prod.website-files.com/68e0f069e7077842f6665fd3/68e254fc5b4fb72c7d7f2407_icon-white-arrow-up.svg"
                            alt="Arrow" class="btn-icon">
                        <img src="https://cdn.prod.website-files.com/68e0f069e7077842f6665fd3/68e254fc5b4fb72c7d7f2407_icon-white-arrow-up.svg"
                            alt="Arrow" class="btn-icon-hover">
                    </div>
                </a>





            </div>

        </div>
    </div>
</section>




<?php include 'inside/footer.php' ?>