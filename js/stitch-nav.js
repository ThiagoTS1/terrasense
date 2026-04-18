(function () {
  var btn = document.querySelector(".js-nav-toggle");
  var panel = document.getElementById("mobile-menu");
  if (!btn || !panel) return;

  function closeMenu() {
    panel.classList.add("hidden");
    btn.setAttribute("aria-expanded", "false");
  }

  btn.addEventListener("click", function () {
    var open = panel.classList.contains("hidden");
    if (open) {
      panel.classList.remove("hidden");
      btn.setAttribute("aria-expanded", "true");
    } else {
      closeMenu();
    }
  });

  panel.querySelectorAll("a").forEach(function (a) {
    a.addEventListener("click", closeMenu);
  });
})();
