<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مصنع جواهر - انضم لفريقنا</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/team.css">
</head>
<body>
    <!-- Floating Ring -->
    <div class="floating-ring" id="floatingRing">
        <div class="ring-container">
            <div class="ring-circle"></div>
            <div class="ring-diamond"></div>
            <div class="ring-light"></div>
        </div>
    </div>
 <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-content">
            <div class="preloader-gem"></div>
            <h3>مصنع جواهر</h3>
            <p>جاري التحميل...</p>
        </div>
    </div>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <div class="header-content">
                <a href="Home.php" class="logo">
                    <i class="fas fa-gem"></i>
                    <span class="logo-text">جواهر</span>
                </a>
                
                <div class="nav-container">
                    <ul class="nav-links">
                       <li><a href="Home.php">الرئيسية</a></li>
                       <li><a href="Home.php">شركائنا</a></li>
                    <li><a href="Home.php">من نحن</a></li>
                    <li><a href="Home.php">خدماتنا</a></li>
                    <li><a href="Work.php">أعمالنا</a></li>
                    <li><a href="vision.php">رؤيتنا</a></li>
                    <li><a href="team.php">انضم لفريقنا</a></li>
                    
                    </ul>
                    <div class="nav-cta">
                        <a href="Home.php" class="btn">تواصل معنا</a>
                    </div>
                    
                    <div class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mobile-menu" id="mobileMenu">
            <ul class="mobile-nav-links">
                <li><a href="Home.php"><i class="fas fa-home"></i> الرئيسية</a></li>
                <li><a href="Home.php"><i class="fas fa-handshake"></i> شركائنا</a></li>
                <li><a href="Home.php"><i class="fas fa-users"></i> من نحن</a></li>
                <li><a href="Home.php"><i class="fas fa-concierge-bell"></i> خدماتنا</a></li>
                <li><a href="Work.php"><i class="fas fa-briefcase"></i> أعمالنا</a></li>
                <li><a href="vision.php"><i class="fas fa-eye"></i> رؤيتنا</a></li>
                <li><a href="team.php"><i class="fas fa-user-plus"></i> انضم لفريقنا</a></li>
            </ul>
            
            <div class="mobile-cta">
                <a href="Home.php" class="btn"> تواصل معنا</a>
            </div>
        </div>
        
        <div class="menu-overlay" id="menuOverlay"></div>
    </header>

    <!-- Team Section -->
    <section class="team-section" id="team">
        <div class="container">
            <div class="section-header">
                <h1>انضم لفريق جواهر</h1>
                <p>نبحث عن مواهب استثنائية لتنضم لفريقنا</p>
            </div>
            
            <div class="join-form-container">
                <form class="join-form" id="joinForm">
                    <div class="form-group">
                        <label for="fullName">الاسم الكامل</label>
                        <input type="text" id="fullName" name="fullName" required placeholder="أدخل اسمك الكامل">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" required placeholder="example@email.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">رقم الهاتف</label>
                        <input type="tel" id="phone" name="phone" required placeholder="9XXXXXXXX">
                    </div>
                    
                    <div class="form-group">
                        <label for="position">الوظيفة المتقدم لها (اختياري)</label>
                        <input type="text" id="position" name="position" placeholder=" ">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">رسالة التقديم (اختياري)</label>
                        <textarea id="message" name="message" rows="4" placeholder="أخبرنا عن نفسك وخبراتك..."></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>رفع السيرة الذاتية (CV)</label>
                        <div class="file-upload">
                            <label for="cv" class="file-upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>انقر لرفع ملف السيرة الذاتية (PDF)</span>
                            </label>
                            <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i>
                        تقديم الطلب
                    </button>
                    
                    <p class="form-note">سيتم مراجعة طلبك والاتصال بك في حال تم اختيارك للمقابلة</p>
                </form>
            </div>
        </div>
    </section>

   
    <script>
          // Preloader
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            setTimeout(() => {
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
            }, 1500);
        });

        // Floating Ring Animation
        document.addEventListener('mousemove', (e) => {
            const ring = document.getElementById('floatingRing');
            ring.style.left = e.clientX + 'px';
            ring.style.top = e.clientY + 'px';
            ring.classList.add('active');
        });

        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuOverlay = document.getElementById('menuOverlay');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            menuOverlay.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        });

        menuOverlay.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Form Submission
        document.getElementById('joinForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic form validation
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const cv = document.getElementById('cv').files[0];
            
            if (!fullName || !email || !phone || !cv) {
                alert('يرجى ملء جميع الحقول الإلزامية');
                return;
            }
            
            // In a real application, you would send the form data to a server here
            alert('تم تقديم طلبك بنجاح! سنتواصل معك قريباً.');
            this.reset();
        });

        // File upload display
        document.getElementById('cv').addEventListener('change', function(e) {
            const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
            document.querySelector('.file-upload-label span').textContent = fileName;
        });
    </script>
</body>
</html>