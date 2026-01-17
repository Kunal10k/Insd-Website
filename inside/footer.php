<footer class="footer">
  <div class="container">
    <div class="footer-container">
      <!-- Left Column -->
      <div class="footer-column">
        <h2 class="footer-logo">
          <img src="assets/img/cropped-logo-1-1-2.png" alt="">
        </h2>


        <!-- <ul class="social-links-list">
          <li class="social-link-item social-fb">
            <a href="#" class="social-link-fb" aria-label="Facebook">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
          </li>

          <li class="social-link-item social-insta">
            <a href="#" class="social-link-insta" aria-label="Instagram">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </li>

          <li class="social-link-item social-linkedin">
            <a href="#" class="social-link-linkedin" aria-label="LinkedIn">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </li>
        </ul> -->

      </div>

      <!-- Main Pages -->
      <div class="footer-column">
        <h3>Main Pages</h3>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about2.php">About</a></li>
          <li><a href="contact-us.php">Contact us</a></li>
          <li><a href="#">Privacy Policy</a></li>

        </ul>
      </div>

      <!-- Utility Pages -->
      <div class="footer-column">
        <h3>Utility Pages</h3>
        <ul>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="admission_new_page.php">Admission Process</a></li>
          <li><a href="landing-page.php">Department Overview
              Design</a></li>
          <li><a href="event-&-workshop.php">
              Event & Workshop
            </a></li>
        </ul>
      </div>

      <!-- Support -->
      <div class="footer-column">
        <h3>Support</h3>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>

      <!-- Programs -->
      <div class="footer-column">
        <h3>Office Address</h3>

        <ul class="contact-info-list mt-2  gap-2">
          <li class="contact-info-item">
            <i class="fa-solid fa-envelope contact-info-icon"></i>
            <strong class="contact-info-text">enquiry@insdkolkata.com</strong>
          </li>

          <li class="contact-info-item">
            <i class="fa-solid fa-envelope-open-text contact-info-icon"></i>
            <strong class="contact-info-text">info@insdkolkata.com</strong>
          </li>

          <li class="contact-info-item">
            <i class="fa-solid fa-phone contact-info-icon"></i>
            <strong class="contact-info-text">+916290905125/+916291065177</strong>
          </li>
          <li class="contact-info-item">
            <i class="fa-solid fa-location-dot contact-info-icon"></i>
            <strong class="contact-info-text">
              1st Floor, Plot No, JL-9, EP Block, Sector V, Kolkata, West Bengal 700091
            </strong>
          </li>



        </ul>


      </div>
    </div>

    <div class="footer-bottom">
      <h1 class="footer-bg-text">INSD</h1>
      <p>2025 © All right reserved by <span>Esspesoft</span></p>
    </div>

  </div>
</footer>








<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Fancybox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>


<script>
  AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true
  });
</script>


<script src="assets/js/main.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<!-- GLightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>
  const lightbox = GLightbox({
    selector: '.glightbox',
    touchNavigation: true,
    loop: true,
    zoomable: true,
  });
</script>


<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Enable submenu toggle on click
    document.querySelectorAll('.dropdown-submenu > a').forEach(function (element) {
      element.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        let nextMenu = this.nextElementSibling;
        if (nextMenu && nextMenu.classList.contains('dropdown-menu')) {
          nextMenu.classList.toggle('show');
        }
      });
    });

    // Close submenu when clicking outside
    document.addEventListener('click', function () {
      document.querySelectorAll('.dropdown-submenu .dropdown-menu.show').forEach(function (menu) {
        menu.classList.remove('show');
      });
    });
  });
</script>





<script>
  const leftImg = document.getElementById('leftImg');
  const rightImg = document.getElementById('rightImg');
  const videoCard = document.getElementById('centerVideo');
  const galleryWrap = document.querySelector('.gallery-wrap');

  let ticking = false;

  function updateGallery() {
    const rect = galleryWrap.getBoundingClientRect();
    const startOffset = window.innerHeight * 0.45; // start after 40% visible
    const endOffset = window.innerHeight * 0.9; // finish smoothly

    let progress = (startOffset - rect.top) / (endOffset - startOffset);
    progress = Math.min(Math.max(progress, 0), 1);

    // ultra-smooth easing
    const eased = progress * progress * (3 - 2 * progress);

    // side image fade + move
    const fade = 1 - eased * 2.5;
    leftImg.style.opacity = fade;
    rightImg.style.opacity = fade;
    leftImg.style.transform = `translateX(${-250 * eased}px)`;
    rightImg.style.transform = `translateX(${250 * eased}px)`;

    // video expand
    const newWidth = 600 + (window.innerWidth - 600) * eased;
    const newHeight = 460 + (window.innerHeight - 460) * eased;
    const newRadius = 30 - 30 * eased;
    const shadow = 0.15 * (1 - eased);

    videoCard.style.width = `${newWidth}px`;
    videoCard.style.height = `${newHeight}px`;
    videoCard.style.borderRadius = `${newRadius}px`;
    videoCard.style.boxShadow = `0 8px 20px rgba(0,0,0,${shadow})`;
  }

  function onScroll() {
    if (!ticking) {
      requestAnimationFrame(() => {
        updateGallery();
        ticking = false;
      });
      ticking = true;
    }
  }

  window.addEventListener('scroll', onScroll);
</script>

<!-- tab-animation -->
<script>
  const tabs = document.querySelectorAll('.tab-button');
  let index = 0;

  function activateTab(i) {
    const tab = tabs[i];
    const tabTrigger = new bootstrap.Tab(tab);

    // Show corresponding tab content
    tabTrigger.show();

    // Remove active from all buttons, add to current
    tabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');

    // Wait for gradient animation (2s), then move to next tab
    setTimeout(() => {
      index = (i + 1) % tabs.length;
      activateTab(index);
    }, 3000); // matches CSS animation duration
  }

  // Start auto sliding
  activateTab(index);
</script>


<!-- text animation -->

<script>
  // --- JAVASCRIPT FOR ANIMATION LOGIC ---

  document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.getElementById('words-wrapper');
    if (!wrapper) return;

    // 1. Get all the words inside the wrapper
    const words = Array.from(wrapper.querySelectorAll('b'));

    // 2. Find the longest word's width to prevent layout shift
    let maxWidth = 0;
    words.forEach(word => {
      // Temporarily make word visible to measure its full width
      word.style.position = 'absolute';
      word.style.opacity = '1';
      const currentWidth = word.offsetWidth;
      if (currentWidth > maxWidth) {
        maxWidth = currentWidth;
      }
      // Reset styles after measurement
      word.style.position = '';
      word.style.opacity = '';
    });

    // Set the width of the wrapper to the maximum width
    wrapper.style.width = `${maxWidth}px`;

    // Re-apply initial states after measurement
    words.forEach((word, index) => {
      if (index === 0) {
        word.className = 'theme-gradient is-visible';
      } else {
        word.className = 'theme-gradient is-hidden';
      }
    });


    // 3. Animation function
    const animateWords = () => {
      const currentVisible = wrapper.querySelector('.is-visible');

      // Get the index of the current visible word
      const currentIndex = words.indexOf(currentVisible);

      // Calculate the index of the next word (loop back to 0 if at the end)
      const nextIndex = (currentIndex + 1) % words.length;
      const nextWord = words[nextIndex];

      // Step 1: Hide the current word
      // Use a slight delay to ensure the slide-out starts after the slide-in
      setTimeout(() => {
        if (currentVisible) {
          currentVisible.className = 'theme-gradient is-hidden';
        }
      }, 10);

      // Step 2: Show the next word
      if (nextWord) {
        // Remove is-hidden immediately so the transition starts from -100%
        nextWord.classList.remove('is-hidden');
        // Add is-visible to trigger the transition to 0% (slide in)
        nextWord.classList.add('is-visible');
      }
    };

    // 4. Set the animation interval (e.g., every 3 seconds)
    // Wait 2 seconds before starting the animation
    setTimeout(() => {
      setInterval(animateWords, 3000);
    }, 2000);
  });
</script>






<script>
  $('.testimonial-carousel').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navText: ['<span class="fas fa-angle-left"></span>',
      '<span class="fas fa-angle-right"></span>'
    ],
    dots: false,
    autoplay: true,
    autoplayTimeout: 4000,
    smartSpeed: 800,
    stagePadding: 100, // important
    responsive: {
      0: {
        items: 1,
        stagePadding: 30 // mobile small padding
      },
      768: {
        items: 1,
        stagePadding: 60
      },
      1200: {
        items: 1,
        stagePadding: 100
      }
    }
  });
</script>




<script>
  $(document).ready(function () {
    var owl = $("#e1");
    owl.owlCarousel({
      // animateOut: 'fadeOut',
      items: 3,
      loop: true,
      margin: 30,
      nav: true,
      navText: ['<span class="fas fa-angle-left"></span>',
        '<span class="fas fa-angle-right"></span>'
      ],
      dots: false,
      autoplay: true,
      autoplayTimeout: 3500,
      autoplayHoverPause: true,
      onInitialized: function () {
        // Enable autoplay after init
        owl.trigger('play.owl.autoplay', [3000]);
        window.scrollTo(0, 0); // Force scroll to top if needed
      },
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        992: {
          items: 3
        },
        1200: {
          items: 3
        }
      }
    });
  });
</script>



<script>
  const tabBtns = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-content");

  tabBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      tabBtns.forEach((b) => b.classList.remove("active"));
      tabContents.forEach((t) => t.classList.remove("active"));
      btn.classList.add("active");
      document.getElementById(btn.dataset.tab).classList.add("active");
    });
  });
</script>


<script>
  window.addEventListener('scroll', function () {
    const header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 50);
  });
</script>





<script>
  // Select all text containers
  const textContainers = document.querySelectorAll('.text-container');

  // Loop through each text container
  textContainers.forEach(textContainer => {
    // Apply SplitText to split into words and characters
    const splitText = new SplitText(textContainer, {
      type: "words,chars"
    });
    const chars = splitText.chars; // Array of individual characters
    const words = splitText.words; // Array of words (useful for spacing corrections)

    // Ensure proper word breaks with wrapping CSS if needed
    textContainer.style.wordWrap = "break-word";

    // Create a ScrollTrigger animation
    gsap.from(chars, {
      duration: 1.1,
      opacity: 0,
      y: 50,
      stagger: 0.02,
      ease: "power2.out",
      scrollTrigger: {
        trigger: textContainer, // The element that triggers the animation
        start: "top bottom", // Trigger the animation when the top of the container reaches the bottom of the viewport
        end: "bottom top", // End the animation when the bottom of the container reaches the top of the viewport
        once: true, // This ensures the animation runs only once
        markers: false // Set to true if you want to see the start/end points for debugging
      }
    });
  });
</script>


<script>
  $('.neighborhood-carousel').owlCarousel({
    loop: true,
    margin: 25,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,
    navText: ['<span>&#10094;</span>', '<span>&#10095;</span>'],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 4
      }
    }
  });
</script>

<script>
  $('.testimonial-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    navText: ['<span>&#10094;</span>', '<span>&#10095;</span>'],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      992: {
        items: 1
      },
      1200: {
        items: 1
      }
    }
  });
</script>

<div class="spacer"></div>



<!-- counter -->


<script>
  const counters = document.querySelectorAll('.counter');
  let started = false; // ensure only once

  const startCounter = () => {
    counters.forEach(counter => {
      counter.innerText = "0";
      const target = +counter.getAttribute("data-target");
      const speed = 200;

      const update = () => {
        const current = +counter.innerText;
        const increment = target / speed;

        if (current < target) {
          counter.innerText = Math.ceil(current + increment);
          requestAnimationFrame(update);
        } else {
          counter.innerText = target;
        }
      };

      update();
    });
  };

  // Intersection Observer for scroll detect
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !started) {
        startCounter();
        started = true;
      }
    });
  }, {
    threshold: 0.3
  });

  observer.observe(document.querySelector('.counter-section'));
</script>



<!-- process -->


<script>
  document.addEventListener("DOMContentLoaded", function () {

    let items = document.querySelectorAll(".process-item");
    let img = document.getElementById("processImage");

    let index = 0;
    const duration = 6000; // Total slide time
    const fadeTime = 500; // Fade time

    let timer;

    function resetProgressBars() {
      items.forEach(el => {
        let bar = el.querySelector(".progress-line span");
        bar.style.transition = "none";
        bar.style.width = "0%";
      });
    }

    function startProgressBar(i) {
      let bar = items[i].querySelector(".progress-line span");

      requestAnimationFrame(() => {
        bar.style.transition = `width ${duration}ms linear`;
        bar.style.width = "100%";
      });
    }

    function changeImage(src) {
      img.style.opacity = "0";

      setTimeout(() => {
        img.src = src;
        img.style.opacity = "1";
      }, fadeTime);
    }

    function activateSlide(i) {
      items.forEach(el => el.classList.remove("active"));
      items[i].classList.add("active");

      resetProgressBars();
      startProgressBar(i);

      changeImage(items[i].getAttribute("data-img"));
    }

    function startAutoSlide() {
      timer = setInterval(() => {
        index = (index + 1) % items.length;
        activateSlide(index);
      }, duration);
    }

    // Start first slide
    activateSlide(index);
    startAutoSlide();

    // Manual click
    items.forEach((item, i) => {
      item.addEventListener("click", function () {
        clearInterval(timer);
        index = i;
        activateSlide(index);
        startAutoSlide();
      });
    });

  });
</script>


<script>
  $(document).ready(function () {
    $(".client-carousel").owlCarousel({
      loop: true,
      margin: 30,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 2
        },
        576: {
          items: 3
        },
        768: {
          items: 4
        },
        992: {
          items: 7
        }
      }
    });
  });
</script>


<script>
  $('.mentor-carousel').owlCarousel({
    loop: true,
    margin: 25,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3500,
    smartSpeed: 700,
    navText: [
      '<i class="fa-solid fa-chevron-left"></i>',
      '<i class="fa-solid fa-chevron-right"></i>'
    ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      },
      1400: {
        items: 3
      }
    }
  });
</script>

<script>
  $('.success-cards').owlCarousel({
    loop: true,
    margin: 25,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3500,
    smartSpeed: 700,
    navText: [
      '<i class="fa-solid fa-chevron-left"></i>',
      '<i class="fa-solid fa-chevron-right"></i>'
    ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      },
      1400: {
        items: 3
      }
    }
  });
</script>


<script>
  // Prevent closing the first item unless another item is opened
  document.querySelector('#headingOne button').addEventListener('click', function (e) {
    let item2 = document.getElementById('collapseTwo');
    let item3 = document.getElementById('collapseThree');

    // If no other item is open → block closing
    if (!item2.classList.contains('show') && !item3.classList.contains('show')) {
      e.preventDefault(); // stop click
    }
  });
</script>




<script>
  const cards = document.querySelectorAll('.testimonial-card');
  const nextBtn = document.querySelector('.next');
  const prevBtn = document.querySelector('.prev');
  let index = 0;

  function showCard(i) {
    cards.forEach(card => card.classList.remove('active'));
    cards[i].classList.add('active');
  }

  nextBtn.addEventListener('click', () => {
    index = (index + 1) % cards.length;
    showCard(index);
  });

  prevBtn.addEventListener('click', () => {
    index = (index - 1 + cards.length) % cards.length;
    showCard(index);
  });
</script>

<script>
  $('.insd-alumni-carousel').owlCarousel({
    loop: false,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: false,
    smartSpeed: 600,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1200: {
        items: 3
      }
    }
  });
</script>




</body>

</html>