<?php
$services = [
    [
        'title' => 'Road Construction',
        'description' => 'From rural access roads to multi-lane highways, we deliver durable and sustainable road infrastructure solutions using top-grade materials and modern technology.',
        'image' => 'https://source.unsplash.com/800x600/?road-construction,highway'
    ],
    [
        'title' => 'Civil Engineering',
        'description' => 'Comprehensive civil works including bridges, culverts, drainage systems, and pavement engineering designed for long-term reliability.',
        'image' => 'https://source.unsplash.com/800x600/?civil-engineering,bridge'
    ],
    [
        'title' => 'Asphalt & Surface Works',
        'description' => 'Expert asphalt laying, surfacing, and road rehabilitation handled by certified technicians using advanced equipment.',
        'image' => 'https://source.unsplash.com/800x600/?asphalt,construction'
    ],
    [
        'title' => 'Road Maintenance',
        'description' => 'Scheduled maintenance, pothole repairs, and road rehabilitation to extend road life and ensure smooth travel.',
        'image' => 'https://source.unsplash.com/800x600/?road-maintenance,machinery'
    ],
    [
        'title' => 'Equipment Hire',
        'description' => 'We lease heavy-duty construction equipment such as graders, rollers, excavators, and tippers for all project scales.',
        'image' => 'https://source.unsplash.com/800x600/?construction-machinery,excavator'
    ],
    [
        'title' => 'Consultancy & Project Management',
        'description' => 'We offer professional project management, design consulting, and feasibility analysis to ensure efficient project delivery.',
        'image' => 'https://source.unsplash.com/800x600/?project-management,teamwork'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Jafrego Enterprises Limited — Premier Road Construction & Civil Engineering Experts in Nakuru, Kenya. We build roads that connect lives.">
<meta name="theme-color" content="#b8860b">
<title>Jafrego Enterprises Limited | Road Construction Experts</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
:root{
    --gold:#d4af37;--dark:#0b0b0b;--light:#fff;--overlay:rgba(0,0,0,0.65);
    --radius:14px;--shadow:0 8px 24px rgba(0,0,0,0.25);--transition:all .4s ease;
}
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Open Sans',sans-serif;background:#f7f7f7;color:var(--dark);scroll-behavior:smooth;}
/* Navbar */
nav{
    position:fixed;top:0;left:0;right:0;z-index:1000;
    background:rgba(0,0,0,0.8);backdrop-filter:blur(10px);
    display:flex;justify-content:space-between;align-items:center;
    padding:12px 60px;box-shadow:var(--shadow);
}
nav .logo{font-family:'Montserrat',sans-serif;font-weight:800;font-size:1.6rem;color:var(--gold);}
nav ul{display:flex;gap:25px;list-style:none;}
nav a{color:#fff;text-decoration:none;font-weight:600;transition:var(--transition);}
nav a:hover{color:var(--gold);}
/* Hero */
header{
    height:100vh;background:linear-gradient(var(--overlay),var(--overlay)),url('index.jpg') center/cover fixed no-repeat;
    display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;color:#fff;position:relative;
}
header h1{font-family:'Montserrat',sans-serif;font-weight:800;font-size:3.6rem;text-transform:uppercase;
    background:linear-gradient(90deg,#fff,var(--gold));-webkit-background-clip:text;-webkit-text-fill-color:transparent;}
header p{max-width:800px;margin:20px auto;font-size:1.2rem;color:#ddd;}
.btn-primary{background:var(--gold);color:var(--dark);padding:14px 36px;border:none;border-radius:var(--radius);font-weight:700;cursor:pointer;transition:var(--transition);}
.btn-primary:hover{background:#b8860b;transform:translateY(-4px);}
/* Sections */
section{padding:100px 10%;text-align:center;}
h2.section-title{font-family:'Montserrat',sans-serif;font-size:2.5rem;margin-bottom:40px;color:var(--dark);position:relative;display:inline-block;}
h2.section-title::after{content:'';width:80px;height:3px;background:var(--gold);position:absolute;bottom:-10px;left:50%;transform:translateX(-50%);}
.services-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:30px;}
.service-card{background:#fff;border-radius:var(--radius);box-shadow:var(--shadow);overflow:hidden;transition:var(--transition);opacity:0;transform:translateY(30px);}
.service-card img{width:100%;height:220px;object-fit:cover;}
.service-card .content{padding:20px;}
.service-card h3{color:var(--gold);font-family:'Montserrat',sans-serif;margin-bottom:10px;}
.service-card p{color:#333;line-height:1.6;}
.service-card.show{opacity:1;transform:translateY(0);transition:var(--transition);}
.contact{background:var(--dark);color:#fff;padding:80px 10%;text-align:center;}
.contact h2{color:var(--gold);}
footer{background:#111;color:#bbb;text-align:center;padding:25px;font-size:.9rem;}
/* Floating Buttons */
.floating-buttons{position:fixed;bottom:20px;right:20px;display:flex;flex-direction:column;gap:12px;z-index:1100;}
.floating-buttons a{width:55px;height:55px;border-radius:50%;background:var(--gold);color:#000;
display:flex;align-items:center;justify-content:center;font-size:1.3rem;box-shadow:var(--shadow);transition:var(--transition);}
.floating-buttons a:hover{transform:scale(1.1);background:#b8860b;color:#fff;}
/* Quote Modal */
#quoteModal{display:none;position:fixed;inset:0;background:rgba(0,0,0,0.7);z-index:2000;align-items:center;justify-content:center;}
#quoteModal .modal-content{background:#fff;padding:30px;border-radius:var(--radius);width:90%;max-width:500px;position:relative;animation:fadeIn .5s ease;}
#quoteModal h3{margin-bottom:20px;color:var(--dark);}
#quoteModal input,#quoteModal textarea{width:100%;padding:12px;margin-bottom:15px;border:1px solid #ccc;border-radius:8px;}
#quoteModal button{background:var(--gold);border:none;padding:12px 20px;font-weight:700;border-radius:8px;cursor:pointer;}
#quoteModal button:hover{background:#b8860b;color:#fff;}
#quoteModal .close{position:absolute;top:10px;right:15px;font-size:1.3rem;cursor:pointer;color:#666;}
@keyframes fadeIn{from{opacity:0;transform:scale(0.95);}to{opacity:1;transform:scale(1);}}
@media(max-width:768px){nav{padding:10px 20px;flex-direction:column;gap:10px;}header h1{font-size:2.4rem;}}
</style>
</head>
<body>

<nav>
    <div class="logo">JAFREGO</div>
    <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>

<header>
    <h1>Building Roads That Connect Lives</h1>
    <p>Jafrego Enterprises Limited is a premier road construction and civil engineering company based in Nakuru, Kenya. We combine innovation and reliability to deliver lasting infrastructure.</p>
    <button class="btn-primary" onclick="document.getElementById('quoteModal').style.display='flex'">Request a Quote</button>
</header>

<section id="about">
    <h2 class="section-title">About Us</h2>
    <p>Based in Nakuru, Kenya (Prime Plaza Building, Basement Floor Room B19), Jafrego Enterprises Limited specializes in road construction, civil engineering, and maintenance. Our projects reflect quality, timeliness, and integrity — transforming communities through infrastructure.</p>
</section>

<section id="services">
    <h2 class="section-title">Our Services</h2>
    <div class="services-grid">
        <?php foreach($services as $s): ?>
        <div class="service-card fade-item">
            <img src="<?= $s['image']; ?>" alt="<?= $s['title']; ?>">
            <div class="content">
                <h3><?= $s['title']; ?></h3>
                <p><?= $s['description']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="contact" class="contact">
    <h2>Contact Us</h2>
    <p><i class="fa fa-phone"></i> 0716022032</p>
    <p><i class="fa fa-envelope"></i> jafrego2020@gmail.com</p>
    <p><i class="fa fa-map-marker-alt"></i> Prime Plaza Building, Basement Floor Room B19, Nakuru, Kenya</p>
</section>

<footer>
    &copy; <?= date('Y'); ?> Jafrego Enterprises Limited. All Rights Reserved.
</footer>

<div class="floating-buttons">
    <a href="tel:0716022032" title="Call"><i class="fa fa-phone"></i></a>
    <a href="https://wa.me/254716022032" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
    <a href="mailto:jafrego2020@gmail.com" title="Email"><i class="fa fa-envelope"></i></a>
</div>

<!-- Quote Modal -->
<div id="quoteModal">
  <div class="modal-content">
    <span class="close" onclick="document.getElementById('quoteModal').style.display='none'">&times;</span>
    <h3>Request a Quote</h3>
    <form>
      <input type="text" placeholder="Your Name" required>
      <input type="tel" placeholder="Phone Number" required>
      <input type="email" placeholder="Email Address" required>
      <textarea rows="4" placeholder="Project Details" required></textarea>
      <button type="submit">Submit Request</button>
    </form>
  </div>
</div>

<script>
// Fade-in on scroll
const faders = document.querySelectorAll('.fade-item');
const appearOptions = { threshold: 0.1 };
const appearOnScroll = new IntersectionObserver(function(entries,observer){
    entries.forEach(entry=>{
        if(!entry.isIntersecting)return;
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
    });
},appearOptions);
faders.forEach(fader=>appearOnScroll.observe(fader));
</script>
</body>
</html>
