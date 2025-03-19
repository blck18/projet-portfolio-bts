// Text Scramble Effect
class TextScramble {
  constructor(el) {
    this.el = el;
    this.chars = '!<>-_\\/[]{}—=+*^?#________';
    this.update = this.update.bind(this);
  }
  
  setText(newText) {
    const oldText = this.el.innerText;
    const length = Math.max(oldText.length, newText.length);
    const promise = new Promise((resolve) => this.resolve = resolve);
    this.queue = [];
    
    for (let i = 0; i < length; i++) {
      const from = oldText[i] || '';
      const to = newText[i] || '';
      const start = Math.floor(Math.random() * 40);
      const end = start + Math.floor(Math.random() * 40);
      this.queue.push({ from, to, start, end });
    }
    
    cancelAnimationFrame(this.frameRequest);
    this.frame = 0;
    this.update();
    return promise;
  }
  
  update() {
    let output = '';
    let complete = 0;
    
    for (let i = 0, n = this.queue.length; i < n; i++) {
      let { from, to, start, end, char } = this.queue[i];
      
      if (this.frame >= end) {
        complete++;
        output += to;
      } else if (this.frame >= start) {
        if (!char || Math.random() < 0.28) {
          char = this.randomChar();
          this.queue[i].char = char;
        }
        output += `<span class="scramble-char">${char}</span>`;
      } else {
        output += from;
      }
    }
    
    this.el.innerHTML = output;
    
    if (complete === this.queue.length) {
      this.resolve();
    } else {
      this.frameRequest = requestAnimationFrame(this.update);
      this.frame++;
    }
  }
  
  randomChar() {
    return this.chars[Math.floor(Math.random() * this.chars.length)];
  }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
  // Apply to all headings (h1, h2, h3, h4, h5, h6)
  const headings = document.querySelectorAll('h1, h2, h3, h4, h5, h6, .section-title');
  
  headings.forEach(el => {
    // Skip elements that should not have the effect
    if (el.classList.contains('no-scramble')) {
      return;
    }
    
    // Add scramble-text class if not already present
    if (!el.classList.contains('scramble-text')) {
      el.classList.add('scramble-text');
    }
    
    // Set data-text attribute if not already set
    if (!el.hasAttribute('data-text')) {
      el.setAttribute('data-text', el.innerText);
    }
    
    const originalText = el.getAttribute('data-text');
    const fx = new TextScramble(el);
    
    // Stagger initial animations based on position in document
    const delay = Array.from(headings).indexOf(el) * 100 + 500;
    setTimeout(() => {
      fx.setText(originalText);
    }, delay);
    
    // Hover effect
    el.addEventListener('mouseenter', () => {
      fx.setText(originalText);
    });
  });
  
  // Special animation for welcome title on homepage
  const welcomeTitle = document.querySelector('.welcome-title');
  if (welcomeTitle) {
    const originalText = welcomeTitle.getAttribute('data-text');
    const fx = new TextScramble(welcomeTitle);
    
    // Periodic animation
    setInterval(() => {
      fx.setText(originalText);
    }, 10000); // Repeat every 10 seconds
  }
});
