<div class="landing_wrapper">

    <div class="form_content">
        <div class="content1">
            <h6>Ready to Begin Your Journey in the Global Fashion Industry?
            </h6>
            <h5>Connect With Us</h5>
        </div>

    </div>

    <form action="../landing.php" method="post" class="landing_form">

        <!-- Name -->
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name"
                placeholder="Enter your name" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email"
                placeholder="Enter your email" required>
        </div>

        <!-- Phone -->
        <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <div class="input-group">
                <span class="input-group-text">+91</span>
                <input type="tel" class="form-control" name="phone"
                    placeholder="Enter mobile number"
                    pattern="[0-9]{10}" maxlength="10" required>
            </div>
        </div>

        <!-- Submit -->
        <button type="submit" name="submit" class="btn btn-dark">
            Apply to Join
        </button>


</div>