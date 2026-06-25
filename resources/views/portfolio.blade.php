<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <!-- Box Icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>

  <body>
    <!-- Header design -->
    <header class="header">
      <a href="#home" class="logo">
        <img src="{{ asset('images/mr2.png') }}" alt="" width="220" height="40">
      </a>
      <i class="bx bx-menu" id="menu-icons"></i>

      <nav class="navbar">
        <a href="#home" class="nav-link active">Home</a>
        <a href="#about" class="nav-link">About</a>
        <a href="#skill" class="nav-link">Skill</a>
        <a href="#experience" class="nav-link">Experience</a>
        <a href="#study" class="nav-link">Study</a>
        <a href="#portofolio" class="nav-link">Portofolio</a>
        <a href="#contact" class="nav-link">Contact</a>
      </nav>
    </header>

    <!-- ====================== HOME SECTION ====================== -->
    <section class="home" id="home">
      <div class="home-content">
        <h3>Hello, I'm</h3>
        <h1>M Rafi Munggaran</h1>
        <h3>I'm a <span class="typing-text"></span></h3>
        <p>Hi, I'm Muhammad Rafi Munggaran, a Software Developer and Computer Science graduate passionate about building web and mobile applications. I enjoy turning ideas into practical solutions using technologies such as Laravel, React, Flutter, and modern backend tools.</p>

        <div class="social-media">
          <a href="https://github.com/MR-Munggaran"><i class='bx bxl-github'></i></a>
          <a href="https://www.linkedin.com/in/rafimunggaran/"><i class='bx bxl-linkedin'></i></a>
          <a href="https://www.instagram.com/rafimunggaran/"><i class='bx bxl-instagram'></i></a>
        </div>

        <a href="#contact" class="btn">Hire Me</a>
      </div>

      <div class="home-img">
        <img src="{{ asset('images/me.jpg') }}" alt="">
      </div>
    </section>

    <!-- ====================== ABOUT SECTION ====================== -->
    <section class="about" id="about">
      <div class="about-img">
        @if(!empty($about->photo))
          <img src="{{ asset('storage/' . $about->photo) }}" alt="{{ $about->title }}">
        @else
          <img src="{{ asset('images/profile.png') }}" alt="">
        @endif
      </div>

      <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>{{ $about->title ?? '' }}</h3>
        <p>{{ $about->description ?? 'Belum ada data About. Tambahkan lewat admin/backend.' }}</p>
      </div>
    </section>

    <!-- ====================== SKILL SECTION ====================== -->
    <section class="skill" id="skill">
      <h2 class="heading">My <span>Skills</span></h2>

      @forelse($skills as $category => $items)
        <div class="skill-category">
          <h3 class="skill-category-title">{{ $category }}</h3>
          <div class="skill-container">
            @foreach($items as $skill)
              <div class="skill-box">
                @if(!empty($skill->icon))
                  <img src="{{ asset('storage/' . $skill->icon) }}" alt="{{ $skill->name }}">
                @else
                  <i class='bx bx-code-alt'></i>
                @endif
                <h4>{{ $skill->name }}</h4>
              </div>
            @endforeach
          </div>
        </div>
      @empty
        <p class="empty-text">Belum ada data skill.</p>
      @endforelse
    </section>

    <!-- ====================== EXPERIENCE SECTION ====================== -->
    <section class="experience" id="experience">
      <h2 class="heading">My <span>Experience</span></h2>

      <div class="timeline">
        @forelse($experiences as $experience)
          <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <span class="timeline-date">
                {{ $experience->start_date?->format('M Y') }}
                &mdash;
                {{ $experience->end_date ? $experience->end_date->format('M Y') : 'Present' }}
              </span>
              <h3>{{ $experience->position }}</h3>
              <h4>{{ $experience->company }}</h4>
              <p>{{ $experience->description }}</p>
            </div>
          </div>
        @empty
          <p class="empty-text">Belum ada data experience.</p>
        @endforelse
      </div>
    </section>

    <!-- ====================== STUDY SECTION ====================== -->
    <section class="study" id="study">
      <h2 class="heading">My <span>Education</span></h2>

      <div class="timeline">
        @forelse($studies as $study)
          <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <span class="timeline-date">
                {{ $study->start_date?->format('Y') }}
                &mdash;
                {{ $study->end_date ? $study->end_date->format('Y') : 'Present' }}
              </span>
              <h3>{{ $study->degree }} &middot; {{ $study->major }}</h3>
              <h4>{{ $study->institution }}</h4>
              <p>{{ $study->description }}</p>
            </div>
          </div>
        @empty
          <p class="empty-text">Belum ada data study.</p>
        @endforelse
      </div>
    </section>

    <!-- ====================== PORTOFOLIO SECTION ====================== -->
    <section class="portofolio" id="portofolio">
      <h2 class="heading">Latest <span>Project</span></h2>

      <div class="portofolio-container">
        @forelse($projects as $project)
          <div class="portofolio-box">
            @if(!empty($project->image))
              <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
            @else
              <img src="{{ asset('images/project-placeholder.png') }}" alt="">
            @endif

            <div class="portofolio-layer">
              <h4>{{ $project->title }}</h4>
              <p>{{ Str::limit($project->description, 80) }}</p>
              @if(!empty($project->tech_stack))
                <p class="tech-stack">{{ $project->tech_stack }}</p>
              @endif

              <div class="portofolio-links">
                @if(!empty($project->demo_url))
                  <a href="{{ $project->demo_url }}" target="_blank"><i class='bx bx-link-external'></i></a>
                @endif
                @if(!empty($project->repo_url))
                  <a href="{{ $project->repo_url }}" target="_blank"><i class='bx bxl-github'></i></a>
                @endif
              </div>
            </div>
          </div>
        @empty
          <p class="empty-text">Belum ada project.</p>
        @endforelse
      </div>
    </section>

    <!-- ====================== CONTACT SECTION (STATIC) ====================== -->
    <section class="contact" id="contact">
      <h2 class="heading">Contact <span>Me!</span></h2>
      <form name="contactform" method="post" action="#">
        <fieldset class="inpit-box">
          <input type="text" name="name" placeholder="Nama" />
          <input type="text" name="email" placeholder="Email" />
        </fieldset>
        <fieldset class="inpit-box">
          <input type="number" placeholder="Mobile Number" name="phone" />
          <input type="text" placeholder="Email Subject" name="subject" />
        </fieldset>
        <textarea id="message" cols="30" rows="10" placeholder="Ketik pesan Anda" name="message"></textarea>
        <button type="submit" id="contact-submit" class="btn">Kirim</button>
      </form>
    </section>

    <!-- footer -->
    <footer class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2023 by <a href="{{ route('about.index') }}" class="text-white">Muhammad Rafi Munggaran</a></p>
      </div>
      <div class="footer-iconTop">
        <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
      </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed.js -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
      // ---- toggle menu mobile ----
      const menuIcon = document.getElementById("menu-icons");
      const navbar = document.querySelector(".navbar");

      menuIcon.addEventListener("click", () => {
        navbar.classList.toggle("active");
      });

      window.addEventListener("scroll", () => {
        document.querySelector(".header").classList.toggle("sticky", window.scrollY > 50);
        navbar.classList.remove("active");
      });

      // ---- highlight nav aktif sesuai section yang terlihat ----
      const sections = document.querySelectorAll("section");
      const navLinks = document.querySelectorAll(".navbar a");

      window.addEventListener("scroll", () => {
        let current = "";
        sections.forEach((section) => {
          const sectionTop = section.offsetTop - 150;
          if (window.scrollY >= sectionTop) {
            current = section.getAttribute("id");
          }
        });

        navLinks.forEach((link) => {
          link.classList.remove("active");
          if (link.getAttribute("href") === `#${current}`) {
            link.classList.add("active");
          }
        });
      });

      // ---- typed.js untuk role/jabatan ----
      const typed = new Typed(".typing-text", {
        strings: ["Fullstack Dev", "Backend Dev", "Frontend Dev", "Mobile Dev"],
        typeSpeed: 80,
        backSpeed: 60,
        backDelay: 1500,
        loop: true,
      });

      // ---- scroll reveal animasi ----
      ScrollReveal({
        distance: "80px",
        duration: 2000,
        delay: 200,
      });

      ScrollReveal().reveal(".home-content, .heading", { origin: "top" });
      ScrollReveal().reveal(
        ".portofolio-box, .skill-box, .timeline-item, .contact form",
        { origin: "bottom", interval: 100 }
      );
      ScrollReveal().reveal(".home-content h1, .about-img", { origin: "left" });
      ScrollReveal().reveal(".home-content p, .about-content", { origin: "right" });
    </script>
  </body>
</html>