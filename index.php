<?php
require_once _DIR_ . '/bootstrap.php';
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Nutrition Guide - Natural Care & Feeding Information</title>
    <meta name="description" content="Learn about balanced pet nutrition, feeding guidelines, and natural ingredients for dogs and cats.">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <button class="burger-menu" id="burgerMenu" aria-label="Menu">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <nav class="sidebar" id="sidebar">
        <div class="logo">Pet Nutrition</div>
        <ul class="nav-links">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="info.php">Information</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <main class="content">
        <section class="hero">
            <div class="hero-content">
                <h1>Understanding Pet Nutrition</h1>
                <p class="hero-subtitle">Educational resources about balanced feeding and natural ingredients</p>
                <a href="contact.php" class="btn-primary">Ask About Nutrition</a>
            </div>
            <div class="hero-image">
                <img src="images/hero-dog-cat-home.jpg" alt="Happy dog and cat at home">
            </div>
        </section>

        <section class="categories">
            <h2>Food Categories</h2>
            <div class="category-grid">
                <div class="category-card">
                    <img src="images/dry-food-kibble.jpg" alt="Dry food kibble">
                    <h3>Dry Food</h3>
                    <p>Information about kibble-based nutrition and storage considerations.</p>
                </div>
                <div class="category-card">
                    <img src="images/wet-food-cans.jpg" alt="Wet food options">
                    <h3>Wet Food</h3>
                    <p>Details about moisture-rich feeding options and their characteristics.</p>
                </div>
                <div class="category-card">
                    <img src="images/treats-snacks.jpg" alt="Pet treats and snacks">
                    <h3>Treats</h3>
                    <p>Understanding occasional feeding and supplementary items.</p>
                </div>
                <div class="category-card">
                    <img src="images/special-diet-food.jpg" alt="Special diet options">
                    <h3>Special Diet</h3>
                    <p>Information about specific nutritional needs and considerations.</p>
                </div>
            </div>
        </section>

        <section class="split-section">
            <div class="split-text">
                <h2>Nutrition Philosophy</h2>
                <p>Understanding pet nutrition involves recognizing the basic needs of domestic animals. Dogs and cats require specific nutrients to maintain their daily activities and overall health. A balanced approach includes proteins, fats, carbohydrates, vitamins, and minerals in appropriate proportions.</p>
                <p>The foundation of pet feeding begins with understanding species-specific requirements. Canines and felines have different digestive systems and nutritional needs. Dogs are omnivores with the ability to digest various food sources, while cats are obligate carnivores requiring certain nutrients found primarily in animal tissues.</p>
                <p>Quality ingredients form the basis of nutritional planning. Whole proteins, digestible carbohydrates, and essential fatty acids contribute to daily dietary intake. The source and processing of ingredients can affect nutrient availability and digestibility.</p>
                <p>Feeding practices should consider individual factors such as age, activity level, and health status. Puppies and kittens have different requirements compared to adult or senior pets. Portion control and feeding schedules play a role in maintaining appropriate body condition.</p>
            </div>
            <div class="split-image">
                <img src="images/pet-eating-bowl.jpg" alt="Pet eating from bowl">
            </div>
        </section>

        <section class="ingredients-section">
            <h2>Common Ingredients</h2>
            <div class="ingredient-strip">
                <div class="ingredient-item">
                    <img src="images/ingredient-chicken.jpg" alt="Chicken protein source">
                    <span>Chicken</span>
                </div>
                <div class="ingredient-item">
                    <img src="images/ingredient-rice.jpg" alt="Rice carbohydrate">
                    <span>Rice</span>
                </div>
                <div class="ingredient-item">
                    <img src="images/ingredient-vegetables.jpg" alt="Vegetable ingredients">
                    <span>Vegetables</span>
                </div>
                <div class="ingredient-item">
                    <img src="images/ingredient-fish.jpg" alt="Fish protein source">
                    <span>Fish</span>
                </div>
                <div class="ingredient-item">
                    <img src="images/ingredient-grains.jpg" alt="Whole grains">
                    <span>Grains</span>
                </div>
            </div>
            <p class="ingredient-description">Pet food formulations typically include protein sources, carbohydrates, fats, and supplementary ingredients. Reading ingredient panels helps understand what components are present in commercial diets. The order of ingredients generally reflects their proportion by weight before processing.</p>
        </section>

        <section class="routine-guide">
            <h2>Daily Feeding Routine</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-icon">1</div>
                    <h3>Choose Food Type</h3>
                    <p>Select appropriate food based on pet species, age, and activity level. Consider dry, wet, or combination feeding approaches.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">2</div>
                    <h3>Measure Portions</h3>
                    <p>Use measuring cups or scales to ensure consistent serving sizes. Follow feeding guides as a starting reference point.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">3</div>
                    <h3>Serve Meals</h3>
                    <p>Provide food at regular times each day. Maintain clean bowls and fresh water availability at all times.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">4</div>
                    <h3>Monitor Condition</h3>
                    <p>Observe eating habits, body condition, and overall activity. Adjust portions as needed based on individual response.</p>
                </div>
            </div>
        </section>

        <section class="lifestyle-section">
            <h2>Pet Lifestyle</h2>
            <div class="lifestyle-carousel">
                <div class="lifestyle-card">
                    <img src="images/lifestyle-indoor-pet.jpg" alt="Indoor pet lifestyle">
                    <p>Indoor Environment</p>
                </div>
                <div class="lifestyle-card">
                    <img src="images/lifestyle-outdoor-activity.jpg" alt="Outdoor pet activity">
                    <p>Outdoor Activity</p>
                </div>
                <div class="lifestyle-card">
                    <img src="images/lifestyle-family-time.jpg" alt="Pet with family">
                    <p>Family Time</p>
                </div>
            </div>
        </section>

        <section class="quality-section">
            <h2>Quality and Sourcing</h2>
            <div class="quality-grid">
                <div class="quality-item">
                    <h3>Ingredient Sourcing</h3>
                    <p>Commercial pet foods use ingredients from various suppliers. Manufacturing facilities follow established protocols for receiving and handling raw materials. Traceability systems help track ingredient origins through the supply chain.</p>
                </div>
                <div class="quality-item">
                    <h3>Processing Methods</h3>
                    <p>Food processing involves steps such as grinding, mixing, cooking, and packaging. Different methods like extrusion, canning, or freeze-drying affect final product characteristics. Temperature and time parameters are controlled during production.</p>
                </div>
                <div class="quality-item">
                    <h3>Testing Procedures</h3>
                    <p>Pet food manufacturers conduct various analyses including nutrient content verification and microbiological testing. Quality control checks occur at multiple production stages. Record-keeping documents production batches and test results.</p>
                </div>
                <div class="quality-item">
                    <h3>Balanced Formulation</h3>
                    <p>Nutritional adequacy statements indicate whether food meets established nutrient profiles. Formulations are calculated to provide required nutrients within specified ranges. Some products undergo feeding trials as part of their validation process.</p>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <h2>Questions About Feeding?</h2>
            <p>For more information about pet nutrition topics, feel free to reach out through our contact page.</p>
            <a href="contact.php" class="btn-secondary">Contact Us</a>
        </section>

        <footer>
            <div class="footer-content">
                <div class="footer-column">
                    <h4>Pages</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="info.php">Information</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Policies</h4>
                    <ul>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="cookie-policy.php">Cookie Policy</a></li>
                        <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                        <li><a href="disclaimer.php">Disclaimer</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Contact</h4>
                    <p>452 Greenfield Commerce Drive, Suite 8<br>Madison, WI 53703<br>United States</p>
                    <p>Phone: +1 (608) 555-0162<br>Email: support@Petnutrition.us</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="disclaimer-text">The content is provided for informational purposes only and does not constitute a recommendation, guidance, or professional advice.</p>
                <p>&copy; 2026 Pet Nutrition. All rights reserved.</p>
            </div>
        </footer>

<div class="cookie-banner cookie-de" id="cookieBanner" role="dialog" aria-live="polite" aria-label="Cookie Notice" aria-modal="true">
  <div class="cookie-de-top">
    <div class="cookie-de-badge">
      <img src="images/ingredient-vegetables.jpg" alt="" aria-hidden="true" class="cookie-de-badge-img">
    </div>
    <div class="cookie-de-copy">
      <p class="cookie-de-title">Cookie Notice</p>
      <p class="cookie-de-text">
        This website uses only strictly necessary cookies required to provide core functionality and ensure proper display of the website.
        We do not use cookies for analytics, tracking, advertising, or marketing purposes.
      </p>
      <div class="cookie-de-links">
        <a href="privacy-policy.php" class="cookie-de-link">Privacy Policy</a>
        <span class="cookie-de-sep">•</span>
        <a href="cookie-policy.php" class="cookie-de-link">Cookie Policy</a>
      </div>
    </div>
  </div>
  <div class="cookie-de-actions">
    <button id="cookieRejectBtn" type="button" class="cookie-de-btn cookie-de-btn-ghost">Close</button>
    <button id="cookieAcceptBtn" type="button" class="cookie-de-btn cookie-de-btn-solid">OK</button>
  </div>
</div>

</main>
<script src="js/cookie.js"></script>
<script src="js/menu.js"></script>
    <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,5004001,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?5004001&101" alt="free hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
</body>
</php>





