// Skills Bubbles - Bulles de compétences cliquables

(function() {
  const bubbles = document.querySelectorAll('.skill-bubble');
  if (!bubbles.length) return;

  bubbles.forEach((bubble, index) => {
    bubble.addEventListener('click', function() {
      if (this.classList.contains('popped')) return;
      this.classList.add('popped');

      // Créer les particules qui explosent
      const particles = this.querySelector('.bubble-particles');
      if (particles) {
        // Créer 14 particules "0" et "1"
        for (let k = 0; k < 14; k++) {
          const span = document.createElement('span');
          const angle = (k / 14) * Math.PI * 2;
          const dist = 55 + Math.random() * 45;
          span.textContent = Math.random() > 0.5 ? '1' : '0';
          span.className = 'particle';
          span.style.setProperty('--angle', angle);
          span.style.setProperty('--dist', dist + 'px');
          span.style.animation = 'particle-fly 1.4s ease-out forwards';
          particles.appendChild(span);
        }

        // Cercle d'expansion
        const ring = document.createElement('span');
        ring.className = 'particle-ring';
        ring.style.animation = 'ring-expand 0.6s ease-out forwards';
        particles.appendChild(ring);
      }

      // Réapparaître après 2.8s
      setTimeout(() => {
        this.classList.remove('popped');
        const particles = this.querySelector('.bubble-particles');
        if (particles) particles.innerHTML = '';
      }, 1500);
    });
  });
})();