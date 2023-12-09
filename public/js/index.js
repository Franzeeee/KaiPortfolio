let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('nav ul li');

let currentSectionIndex = 0;

document.addEventListener('wheel', function (event) {
  let direction = event.deltaY > 0 ? 1 : -1;
  currentSectionIndex = Math.min(Math.max(currentSectionIndex + direction, 0), sections.length - 1);
  navigateToSection(sections[currentSectionIndex].id, 'auto');
});

function navigateToSection(sectionId, scrollBehavior = 'auto') {
  document.getElementById(sectionId).scrollIntoView({ behavior: scrollBehavior });
  updateNavigation();
}

function isElementInViewport(el) {
  let rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
  );
}

function updateNavigation() {
  sections.forEach((section, index) => {
    if (isElementInViewport(section)) {
      currentSectionIndex = index;
    }
  });

  navLinks.forEach((link, index) => {
    if (index === currentSectionIndex) {
      link.classList.add('selected');
    } else {
      link.classList.remove('selected');
    }
  });
}
