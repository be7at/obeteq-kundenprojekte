<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tekne Satış & Kiralama</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="main-header">
        <div class="logo">Marina&nbsp;Tekneleri</div>
        <nav id="nav">
            <ul>
                <li><a href="#">Anasayfa</a></li>
                <li><a href="#boats">Tekneler</a></li>
                <li><a href="#hakkimizda">Hakkımızda</a></li>
                <li><a href="#iletisim">İletişim</a></li>
            </ul>
        </nav>
        <button class="burger" id="burger" aria-label="Menü aç/kapat">
            <span></span><span></span><span></span>
        </button>
    </header>
    <section class="hero">
        <div class="hero-content">
            <h1>Hayalinizdeki Tekneyi Bulun</h1>
            <p>Satılık ve kiralık modern tekneler</p>
            <a href="#boats" class="btn">Teknelerimize Göz Atın</a>
        </div>
    </section>
    <section id="boats" class="boats">
        <h2>Mevcut Tekneler</h2>
        <?php include 'boats.php'; ?>
    </section>
    <section id="hakkimizda" class="about">
        <h2>Hakkımızda</h2>
        <p>Yılların tecrübesiyle deniz tutkunlarını en iyi teknelerle buluşturuyoruz.</p>
    </section>
    <section id="iletisim" class="contact">
        <h2>İletişim</h2>
        <form>
            <input type="text" placeholder="Adınız" required>
            <input type="email" placeholder="E-posta" required>
            <textarea placeholder="Mesajınız" required></textarea>
            <button type="submit" class="btn">Gönder</button>
        </form>
        <div class="address">
            <p>Marina Cad. No:1, İzmir</p>
            <p>+90 000 000 00 00</p>
            <p>info@marinatekneleri.com</p>
        </div>
    </section>
    <footer>
        <ul class="footer-links">
            <li><a href="#">Gizlilik Politikası</a></li>
            <li><a href="#">Kullanım Koşulları</a></li>
            <li><a href="#">Şirket Bilgileri</a></li>
        </ul>
        <p>&copy; 2024 Marina Tekneleri</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>
