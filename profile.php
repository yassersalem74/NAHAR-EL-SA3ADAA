<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> حجز قاعة نهار السعادة </title>

        <link
            href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="form.css">

        <link rel="stylesheet" href="style/varaiables.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/media.css">
        <link rel="stylesheet" href="style/hall-reserve.css">
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

        <main class="hall-page">

            <!-- ===== Profile Section ===== -->
            <section class="profile-section">
                <div class="profile-card">

                    <div class="profile-info">
                        <div class="info-item">
                            <label>اسم العضو</label>
                            <p>عبدالله محمد</p>
                        </div>
                        <div class="info-item">
                            <label>رقم العضوية</label>
                            <p>SCS-2023-892</p>
                        </div>
                        <div class="info-item">
                            <label>البريد الإلكتروني</label>
                            <p>abdallah.mohamed@gmail.com</p>
                        </div>
                        <div class="info-item">
                            <label>رقم الهاتف</label>
                            <p>+966551234567</p>
                        </div>
                    </div>

                    <div class="qr-box">
                        <img src="assets/scan.png" alt="QR Code">
                        <div class="scan-quote">Scan ID</div>
                    </div>
                </div>
            </section>

            <!-- ===== Sessions Section ===== -->
            <section class="sessions-section">
                <h2 class="section-title">ورش العمل المسجلة</h2>

                <div class="cards">
                    <!-- Card 1 -->
                    <div class="card">
                        <div class="badge open">تم التسجيل </div>
                        <div class="card-image">
                            <img src="assets/session-1.png">
                        </div>
                        <div class="card-info">
                            <div class="information">
                                <div class="card-info-title">ورشة التعبير
                                    الفني</div>
                                <div class="card-info-disc">التعبير بالمشاعر من
                                    خلال الفن</div>
                            </div>
                        </div>
                        <div class="card-date">
                            <div class="date">
                                <div class="date-quote-icon">الثلاثاء 12
                                    مارس</div>
                                <div class="date-quote-icon">5:00 م - 7:00
                                    م</div>
                            </div>
                        </div>
                        <div class="cards-width">
                            <div class="card-button session-card">

                                <button
                                    class="btn btn-primary card-btn card-detail profile-card-button">التفاصيل</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="card">
                        <div class="badge open bring-done">تم الحضور</div>

                        <div class="card-image">
                            <img src="assets/session-1.png">
                        </div>
                        <div class="card-info">
                            <div class="information">
                                <div class="card-info-title">ورشة الدعم
                                    النفسي</div>
                                <div class="card-info-disc">تعزيز التوازن
                                    النفسي</div>
                            </div>
                        </div>
                        <div class="card-date">
                            <div class="date">
                                <div class="date-quote-icon">الخميس 15
                                    مارس</div>
                                <div class="date-quote-icon">6:00 م - 8:00
                                    م</div>
                            </div>
                        </div>
                        <div class="cards-width">
                            <div class="card-button session-card">
                                <button
                                    class="btn btn-primary card-btn card-detail profile-card-button">التفاصيل</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="card">
                        <div class="badge open bring-done">تم الحضور</div>

                        <div class="card-image">
                            <img src="assets/session-1.png">
                        </div>
                        <div class="card-info">
                            <div class="information">
                                <div class="card-info-title">ورشة الدعم
                                    النفسي</div>
                                <div class="card-info-disc">تعزيز التوازن
                                    النفسي</div>
                            </div>
                        </div>
                        <div class="card-date">
                            <div class="date">
                                <div class="date-quote-icon">الخميس 15
                                    مارس</div>
                                <div class="date-quote-icon">6:00 م - 8:00
                                    م</div>
                            </div>
                        </div>
                        <div class="cards-width">
                            <div class="card-button session-card">
                                <button
                                    class="btn btn-primary card-btn card-detail profile-card-button">التفاصيل</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ===== Table Section ===== -->
            <section class="table-section">
                <h2 class="section-title">طلبات حجز القاعة</h2>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>نوع الحجز</th>
                                <th>التاريخ</th>
                                <th>الحالة</th>
                                <th>ملاحظات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>اجتماع مجلس الإدارة</td>
                                <td>22 نوفمبر 2023</td>
                                <td><div class="status pending">قيد
                                        المراجعة</div></td>
                                <td>بانتظار الموافقة</td>
                            </tr>
                            <tr>
                                <td>اجتماع مجلس الإدارة</td>
                                <td>22 نوفمبر 2023</td>
                                <td><div
                                        class="status rejected">مرفوض</div></td>
                                <td class="danger">القاعة محجوزة</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- ===== Certificates ===== -->
            <section class="certificates-section">
                <h2 class="section-title">الشهادات الحديثة</h2>

                <div class="certificates">
                    <div class="certificate-card">
                        <div
                            style="display: flex; align-items: center; gap: 12px;">
                            <div>
                                <img src="assets/certificate1.png" alt>
                            </div>
                            <div>
                                <h4 class="cer-h4">شهادة حضور</h4>
                                <p class="cer-p">الدعم النفسي وبناء الأمل</p>
                            </div>
                        </div>
                        <img src="assets/download.png" alt>

                    </div>

                    <div class="certificate-card">
                        <div
                            style="display: flex; align-items: center; gap: 12px;">
                            <div>
                                <img src="assets/certificate2.png" alt>
                            </div>
                            <div>
                                <h4 class="cer-h4">شهادة مشاركة</h4>
                                <p class="cer-p">ورشة التعبير الفني</p>
                            </div>
                        </div>
                        <img src="assets/download.png" alt>
                    </div>
                </div>
            </section>

        </main>
        <script src="js/script.js"></script>

    </body>
</html>