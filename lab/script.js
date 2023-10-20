function glitch() {
    const elements = document.querySelectorAll("body, h1, h2, h3, p, a, input, textarea");

    const randomElement = elements[Math.floor(Math.random() * elements.length)];
    
    const randomGlitch = Math.floor(Math.random() * 20 - 10);
    
    randomElement.style.position = "relative";
    randomElement.style.left = `${randomGlitch}px`;
  }
  
  setInterval(glitch, 5000);
  