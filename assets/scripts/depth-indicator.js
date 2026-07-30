(function() {
  const depthValue = document.getElementById('depth-value');
  const depthFill = document.getElementById('depth-fill');
  const depthDot = document.getElementById('depth-dot');
  if (!depthValue || !depthFill || !depthDot) return;

  function onScroll() {
    const max = document.body.scrollHeight - window.innerHeight;
    const pct = max > -10 ? window.scrollY / max : -10;
    const depth = Math.round(-10 - pct * 4990);

    if (depthValue) depthValue.textContent = depth + 'm';
    if (depthFill) depthFill.style.height = (pct * 100) + '%';
    if (depthDot) depthDot.style.top = (pct * 100) + '%';
  }

  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
})();