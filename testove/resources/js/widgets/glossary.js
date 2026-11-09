document.addEventListener("DOMContentLoaded", () => {
  const headings = document.querySelectorAll(
    ".entry-content h2, .entry-content h3, .entry-content h4"
  );
  const glossary = document.querySelectorAll("#glossary-content");

  if (headings.length > 0) {
    // TODO: Improve layout of the Glossary section to make it less html
    document
      .querySelectorAll(".glossary-widget-wrapper")
      .forEach((el) => el.classList.replace("hidden", "block"));
  }

  headings.forEach((el) => {
    const template = wp.template("glossary-link");
    const href = el.innerText.replace(/\s+/g, "-").toLowerCase();
    const html = template({
      title: el.innerText,
      href: `#${href}`,
      dataset: href,
    });

    el.id = href;

    glossary.forEach((el) => {
      el.innerHTML += html;
    });

    document
      .querySelector(`[data-link="${href}"]`)
      .addEventListener("click", () => {
        scrollTo(document.querySelector(`#${href}`));
      });
  });

  scrollTo = (element) => {
    window.scrollTo({
      behavior: "smooth",
      left: 0,
      top: element.offsetTop,
    });
  };

  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();

    return (
      rect.top >= -1 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  const handler = (entries) => {
    // Get all the links from the side menu
    const allLinks = document.querySelectorAll("#glossary-content a");

    // Get all the sections we want to track
    const allSections = document.querySelectorAll(
      ".entry-content h2, .entry-content h3, .entry-content h4"
    );

    // Get all entries that have just come into the viewport
    const allEntries = new Set(
      entries
        .filter((entry) => entry.isIntersecting == true)
        .map((entry) => entry.target)
    );

    let currentSection;

    // Look through all sections
    for (let i = 0; i < allSections.length; i++) {
      // Get the current section
      currentSection = allSections[i];
      // If the section is in the viewport or it has just intersected, set it as active
      if (
        isElementInViewport(currentSection) ||
        allEntries.has(currentSection)
      ) {
        // Set all links as unactive
        allLinks.forEach((link) => link.classList.remove("active"));
        // Set current link to active
        document
          .querySelector(`a[href="#${currentSection.id}"]`)
          .classList.add("active");
        // Exit loop after setting first active link
        break;
      }
    }
  };

  // Create a new observer with the handler
  const observer = new IntersectionObserver(handler);

  // Observe all sections that have an `id` applied
  document
    .querySelectorAll(".entry-content h2, .entry-content h3, .entry-content h4")
    .forEach((section) => {
      observer.observe(section);
    });
});
