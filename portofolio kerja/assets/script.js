// Animation Scroll Reveal
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      }
    });
  },
  { threshold: 0.15 }
);

document
  .querySelectorAll(".reveal, .skill-row, .category-card, .timeline-item")
  .forEach((el) => observer.observe(el));

// Interactive Card Tilt Effect
document.querySelectorAll(".project-card").forEach((card) => {
  card.addEventListener("mousemove", (e) => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    
    const centerX = rect.width / 2;
    const centerY = rect.height / 2;
    
    const rotateX = (y - centerY) / 20;
    const rotateY = (centerX - x) / 20;

    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-6px)`;
  });

  card.addEventListener("mouseleave", () => {
    card.style.transform = "perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)";
  });
});

// Email Submit Handler
function sendEmail(event) {
  event.preventDefault();
  const name = document.getElementById("email-name").value;
  const email = document.getElementById("email-sender").value;
  const message = document.getElementById("email-message").value;

  const mailtoUrl = `mailto:yofanrefki@gmail.com?subject=Pesan dari ${encodeURIComponent(name)} (${encodeURIComponent(email)})&body=${encodeURIComponent(message)}`;
  window.location.href = mailtoUrl;
}

document
  .querySelectorAll(".code-window, .contact, .guestbook")
  .forEach((element) => observer.observe(element));

const header = document.querySelector(".site-header");
const menuToggle = document.querySelector(".menu-toggle");
const navLinks = [...document.querySelectorAll('.nav a[href^="#"]')];
const sections = navLinks
  .map((link) => document.querySelector(link.getAttribute("href")))
  .filter(Boolean);

const updateHeader = () => {
  header?.classList.toggle("scrolled", window.scrollY > 24);
  const current = sections.find((section) => {
    const bounds = section.getBoundingClientRect();
    return bounds.top <= 150 && bounds.bottom >= 150;
  });
  navLinks.forEach((link) => {
    link.classList.toggle(
      "active",
      current?.id === link.getAttribute("href").slice(1),
    );
  });
};

window.addEventListener("scroll", updateHeader, { passive: true });
updateHeader();

menuToggle?.addEventListener("click", () => {
  const isOpen = header?.classList.toggle("menu-open") ?? false;
  menuToggle.setAttribute("aria-expanded", String(isOpen));
  menuToggle.setAttribute("aria-label", isOpen ? "Tutup menu" : "Buka menu");
});

document.querySelectorAll('a[href^="#"]').forEach((link) => {
  link.addEventListener("click", (event) => {
    const target = document.querySelector(link.getAttribute("href"));
    if (!target) return;
    event.preventDefault();
    target.scrollIntoView({ behavior: "smooth", block: "start" });
    history.replaceState(null, "", link.getAttribute("href"));
    document.querySelector(".site-header")?.classList.remove("menu-open");
    document.querySelector(".menu-toggle")?.setAttribute("aria-expanded", "false");
  });
});