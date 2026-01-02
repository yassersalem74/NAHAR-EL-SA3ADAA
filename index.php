<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NAHAR EL SA3ADA</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Cairo:slnt,wght@-11..11,200..1000&display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="style/varaiables.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/media.css">

    </head>
    <body dir="rtl">

        <div class="navs">
            <div class="nav-bar-social">
                <div class="social-icons">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-tiktok"></i>
                </div>
                <div class="call">
                    <span> <i
                            class="fa-solid fa-phone"></i>( المدير
                        التنفيذى)</span>
                    <span> <i class="fa-solid fa-star"></i> تقييم الأداء و الأثر
                    </span>

                </div>

            </div>

            <div class="second-nav">
                <div class="logo-img">
                    LOGO
                </div>
                <div class="second-nav-btns">
                    <button class="btn btn-primary"><i
                            class="fa-regular fa-heart"></i> بوابة التبرع
                    </button>
                    <button class="btn btn-secondary"> <i
                            class="fa-regular fa-message"></i> تواصل معنا
                    </button>
                    <button class="btn btn-secondary" onclick="goToProfile()"> <i
                            class="fa-regular fa-user"></i> الحساب الشخصى
                    </button>
                    <div class="customer">
                        <div class="customer-quote">أنت الزائر رقم</div>
                        <div class="customer-number">18,820</div>
                    </div>
                </div>
            </div>

            <div class="third-nav">
                <div><i class="fa-solid fa-house"></i> الرئيسية </div>
                <div><i class="fa-regular fa-user"></i> مجلس الإدارة </div>
                <div><i class="fa-solid fa-circle-info"></i> الجمعية في سطور
                </div>
                <div><i class="fa-solid fa-video"></i> المركز الإعلامي </div>
                <div><i class="fa-solid fa-handshake-angle"></i> شركائنا </div>
                <div><i class="fa-solid fa-book-open"></i> الحوكمة </div>
                <div><i class="fa-regular fa-message"></i> تواصل معنا </div>
                <div><i class="fa-solid fa-house"></i> قاعة نهار السعادة </div>
            </div>
        </div>

        <div class="section hero-section">

            <div class="hero-information">
                <div class="hero-title">
                    مساحة <span>للأمل</span>
                    <div>والتعافي</div>
                </div>

                <div class="hero-description">
                    في قلب مبادرتنا لدعم مرضى السرطان والناجين منه، نقدم قاعة نهار السعادة — مساحة إنسانية متكاملة توفر الدعم المعنوي والروحي خلال رحلة العلاج والتعافي.
                    <br><br>
                    نؤمن أن الدعم المعنوي جزء أساسي من رحلة العلاج، وأن مشاركة التجارب، واللقاء مع مختصين وأشخاص عايشوا التجربة نفسها يمكنها أن تُحدث أثرًا عميقًا في تعزيز القوة الداخلية وإحياء الأمل.
                </div>

                <div class="hero-buttons">
                    <button class="btn btn-primary" onclick="goToHallPage()"><i
                            class="fa-regular fa-calendar"></i> حجز القاعة
                    </button>
                    <button class="btn btn-secondary" onclick="goToSessionsPage()"><i
                            class="fa-regular fa-eye"></i> عرض الورش والجلسات
                    </button>
                </div>
            </div>

            <div class="hero-img">
                <div class="hero-img-hover-image"></div>
            </div>

        </div>

        <div class="section reason">
            <div class="section-title">
                <div class="title">اسباب دفعتنا لانشاء القاعة </div>
                <div class="sub-title">نؤمن بأن الدعم النفسي جزء أساسي من رحلة
                    التعافي</div>
            </div>

            <div class="reason-gallery">
                <div class="gallery-one">
                    <img src="assets/s1.png" alt="gallery-one">
                </div>
                <div class="gallery-two">
                    <img src="assets/2.png" alt="gallery-two">

                </div>
                <div class="quote-one">
                    <p class="first-p"><img src="assets/support-icon.png"
                            alt="support-icon">
                        الدعم النفسي والأمل</p>
                    <p class="second-p">يعاني كثير من مرضى السرطان من صدمات
                        نفسية عند التشخيص، مع
                        محدودية الدعم النفسي وغياب النماذج الملهمة التي تبث
                        الأمل وتخفيف من وطأة التجربة.</p>
                </div>
                <div class="quote-two">
                    <p class="first-p"><img src="assets/support-2-icon.png"
                            alt="support-icon">
                        العزلة والحاجة لمساحة آمنة</p>
                    <p class="second-p white-p">يواجه المرضى مشاعر الوحدة وصعوبة
                        التعبير عن معاناتهم، مما
                        يبرز الحاجة إلى بيئة آمنة ومنظمة تتيح الحوار والدعم مع
                        مختصين وأشخاص مروا بالتجربة ذاتها.</p>

                </div>
            </div>

        </div>

        <div class="section about">
            <div class="section-title">
                <div class="title">أهداف القاعة</div>
                <div class="sub-title"> رؤيتنا ورسالتنا لتحقيق الأثر الإيجابي </div>
            </div>

            <div class="section hero-section about-section">

                <div class="hero-information">
                    <div class="hero-description">
                        <strong>أهداف القاعة:</strong>
                        <ul style="margin-right: 20px; margin-top: 10px;">
                            <li>توفير بيئة آمنة للحوار والتواصل.</li>
                            <li>تقديم ورش وجلسات دعم نفسي مع مختصين.</li>
                            <li>تعزيز روح الأمل والثقة بالنفس في كل فرد يشارك.</li>
                        </ul>
                        <br>
                        <strong>تجهيزات القاعة:</strong><br>
                        قاعة مجهزة بالكامل لاستضافة الأنشطة التالية:<br>
                        • الاجتماعات وورش العمل<br>
                        • الجلسات الجماعية والدورات التدريبية<br>
                        • الفعاليات الخاصة والأنشطة الاجتماعية<br>
                        <br>
                        <strong>مزايا القاعة:</strong><br>
                        • سعة لأكثر من 100 شخص<br>
                        • تجهيزات صوتية ومرئية حديثة<br>
                        • سهولة وصول لذوي الإعاقة
                    </div>

                    <div class="hero-buttons">
                        <button class="btn btn-primary" onclick="goToHallPage()"><i
                                class="fa-regular fa-calendar"></i> حجز القاعة
                        </button>
                    </div>
                </div>

                <div class="hero-img">
                    <img src="assets/hall.png" alt="hall-image">
                </div>

            </div>
        </div>

        <div class="prepare-hall section">
            <div class="section-title">
                <div class="title">قاعة نهار السعادة</div>
                <div class="sub-title">
                    حيث تُصنع اللقاءات المؤثرة… وتُبنى التجارب الهادفة
                </div>
            </div>

            <div class="features-wrapper">

                <div class="feature-card">
                    <div class="icon">🏢</div>
                    <h3>بيئة ملهمة</h3>
                    <p>بيئة راقية، هادئة، ومجهزة بالكامل</p>
                </div>

                <div class="feature-card">
                    <div class="icon">🎯</div>
                    <h3>تصميم مرن</h3>
                    <p>تصميم عملي ومرن يناسب مختلف أنواع الفعاليات</p>
                </div>

                <div class="feature-card">
                    <div class="icon">📍</div>
                    <h3>موقع مميز</h3>
                    <p>موقع يخدم الفعاليات الهادفة والمجتمعية</p>
                </div>

                <div class="feature-card">
                    <div class="icon">👨‍💼</div>
                    <h3>إشراف احترافي</h3>
                    <p>إشراف وتنظيم باحترافية عالية</p>
                </div>

            </div>
            
            <div class="section-description" style="max-width: 800px; margin: 30px auto; text-align: center; padding: 0 20px;">
                <p>قاعة نهار السعادة ليست مجرد قاعة، بل مساحة مصممة بعناية لاحتضان اللقاءات التي تحمل رسالة، وتدعم المبادرات الإنسانية، والفعاليات الهادفة، وورش العمل المؤثرة.</p>
                
                <div style="text-align: right; max-width: 600px; margin: 25px auto; background: #f8f9fa; padding: 20px; border-radius: 10px; border-right: 4px solid #4CAF50;">
                    <p style="margin: 0; font-size: 16px; line-height: 1.6;">
                        نوفر لك بيئة راقية، هادئة، ومجهزة بالكامل، لتقديم فعاليتك بأفضل صورة، سواء كانت ورشة، جلسة دعم، لقاء توعوي أو اجتماع احترافي.
                    </p>
                </div>
                
                <div style="text-align: right; max-width: 600px; margin: 25px auto;">
                    <h4 style="color: #2c3e50; margin-bottom: 15px;">لماذا قاعة نهار السعادة؟</h4>
                    <ul style="list-style-type: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 10px; padding-right: 25px; position: relative;">
                            <span style="color: #4CAF50; position: absolute; right: 0;">✔️</span>
                            بيئة ملهمة ومريحة تساعد على التركيز والتفاعل
                        </li>
                        <li style="margin-bottom: 10px; padding-right: 25px; position: relative;">
                            <span style="color: #4CAF50; position: absolute; right: 0;">✔️</span>
                            تصميم عملي ومرن يناسب مختلف أنواع الفعاليات
                        </li>
                        <li style="margin-bottom: 10px; padding-right: 25px; position: relative;">
                            <span style="color: #4CAF50; position: absolute; right: 0;">✔️</span>
                            موقع يخدم الفعاليات الهادفة والمجتمعية
                        </li>
                        <li style="margin-bottom: 10px; padding-right: 25px; position: relative;">
                            <span style="color: #4CAF50; position: absolute; right: 0;">✔️</span>
                            إشراف وتنظيم باحترافية عالية
                        </li>
                    </ul>
                </div>
                
                <p style="margin-top: 20px; font-weight: bold; font-size: 18px; color: #2c3e50;">
                    نحن نؤمن أن المكان جزء من نجاح التجربة، لذلك حرصنا على أن تكون القاعة جاهزة لتدعم رسالتك وتبرز محتواك
                </p>
            </div>
        </div>

        <div class="section targe">
            <div class="section-title">
                <div class="title">مواصفات وسياسة القاعة</div>
                <div class="sub-title">
                    ضمان تجربة استثنائية مع أرقى المعايير
                </div>
            </div>

            <div class="section-content">

                <div class="content-right">
                    <div class="content-right-title">مواصفات القاعة</div>
                    <div class="content-right-disc">أحدث التجهيزات لضمان فعالية ناجحة</div>
                    <ul>
                        <li>سهولة الوصول مجهزة بالكامل لذوي الإعاقة</li>
                        <li>بث وعرض شاشات عرض وبروجكتور 4K</li>
                        <li>أنظمة صوتية ميكروفونات وسماعات حديثة</li>
                        <li>سعة استيعابية تسع لأكثر من 100 شخص</li>
                    </ul>
                    <br>
                    <div class="content-right-title">سياسة الاستخدام</div>
                    <div class="content-right-disc" style="font-weight: bold; margin-bottom: 15px; color: #e74c3c;">
                        حرصًا على جودة التجربة، يخضع استخدام القاعة للضوابط التالية
                    </div>
                    <ul>
                        <li>الالتزام بمواعيد الحجز المحددة</li>
                        <li>المحافظة على تجهيزات القاعة ونظافتها</li>
                        <li>احترام طبيعة الفعاليات المجتمعية والهادفة</li>
                        <li>التنسيق المسبق مع إدارة القاعة</li>
                        <li>الالتزام بالقيم والأخلاقيات المجتمعية</li>
                        <li>الحصول على الموافقات اللازمة للفعاليات الخاصة</li>
                    </ul>
                </div>

                <div class="content-left">
                    <img src="assets/target.png" alt="Hall Image" />
                    <div class="overlay"></div>
                    <div class="overlay-text">
                        <h3>كن جزءًا من رحلة الشفاء</h3>
                        <p>سواء كنت مريضًا يبحث عن الدعم، أو نادياً يود مشاركة
                            تجربته، مكانك محفوظ بيننا</p>
                        <button class="btn btn-secondary">تواصل معنا
                            اليوم</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="section next">
            <div class="section-title">
                <div class="title">الفعاليات والورش القادمة</div>
                <div class="sub-title">
                    نشجعك على استكشاف الورش والدورات المتاحة والتسجيل في الجلسات التي تناسبك — سواء كنت مريضًا، أو متعافيًا، أو داعمًا ترغب في المشاركة ومساندة الآخرين.
                </div>
            </div>
        </div>

        <div class="cards">
            <div class="card">
                <div class="badge open">متاح التسجيل </div>
                <div class="card-image">
                    <img src="assets/card-1.png" alt="card-image-1">
                </div>
                <div class="card-info">
                    <div class="information">
                        <div class="card-info-title">دعم نفسي وتعزيز الأمل</div>
                        <div class="card-info-disc">مساحة آمنة لمشاركة المشاعر
                            وبناء
                            القوة الداخلية</div>
                    </div>
                </div>
                <div class="card-date">
                    <div class="date">
                        <div class="date-quote-icon"><img src="assets/date.png"
                                alt="date-icon">الثلاثاء، 12
                            مارس . 5:00 عصرا</div>
                        <div class="date-quote-icon"><img
                                src="assets/person.png"
                                alt="person-icon">عام</div>
                    </div>
                </div>
                <div class="card-button">
                    <button class="btn btn-primary card-btn" onclick="goToSessionForm()">سجل الان</button>
                </div>
            </div>

            <div class="card">
                <div class="badge close">ممتلئ </div>
                <div class="card-image">
                    <img src="assets/card-1.png" alt="card-image-1">
                </div>
                <div class="card-info">
                    <div class="information">
                        <div class="card-info-title">ورشة التعبير الفني</div>
                        <div class="card-info-disc">التعبير عن الذات من خلال
                            الفن والألوان علم أدوات بسيطة للتعامل
                        </div>
                    </div>
                </div>
                <div class="card-date">
                    <div class="date">
                        <div class="date-quote-icon"><img src="assets/date.png"
                                alt="date-icon">الثلاثاء، 12
                            مارس . 5:00 عصرا</div>
                        <div class="date-quote-icon"><img
                                src="assets/person.png"
                                alt="person-icon">للنساء فقط</div>
                    </div>
                </div>
                <div class="card-button">
                    <button class="btn btn-primary card-btn close-btn">التسجيل
                        مغلق
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="badge open">متاح التسجيل </div>
                <div class="card-image">
                    <img src="assets/card-1.png" alt="card-image-1">
                </div>
                <div class="card-info">
                    <div class="information">
                        <div class="card-info-title">ورشة تنمية الذات
                            والثقة</div>
                        <div class="card-info-disc">مساحة آمنة لمشاركة المشاعر
                            وبناء القوة الداخلية
                        </div>
                    </div>
                </div>
                <div class="card-date">
                    <div class="date">
                        <div class="date-quote-icon"><img src="assets/date.png"
                                alt="date-icon">الثلاثاء، 12
                            مارس . 5:00 عصرا</div>
                        <div class="date-quote-icon"><img
                                src="assets/person.png"
                                alt="person-icon">للنساء فقط</div>
                    </div>
                </div>
                <div class="card-button">
                    <button class="btn btn-primary card-btn" onclick="goToSessionForm()">سجل الان</button>
                </div>
            </div>
        </div>

        <div class="section join-section">
            <div class="join-content">
                <div class="join-title">انضم الي جلسه دعم</div>
                <div class="join-disc">كن جزءاً من متمع داعم يتفهم رحلتك . نحن
                    هنا لنسمعك وندعمك في كل خطوة</div>
                <div class="join-buttons">
                    <button class="btn btn-primary" id="goSession" onclick="goToSessionsPage()">احجز جلستك
                    </button>
                    <button class="btn btn-secondary join-second-btn">تواصل
                        معنا</button>
                </div>
            </div>
        </div>

        <script src="js/script.js"></script>
        
        <script>
            function goToHallPage() {
                window.location.href = "nahar-hall.php";
            }
            
            function goToSessionsPage() {
                window.location.href = "sessions.php";
            }
            
        
        </script>
    </body>
</html>