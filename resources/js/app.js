import './bootstrap';
import 'bootstrap';
import { Offcanvas } from 'bootstrap';
// Add your own JS below to override or extend Bootstrap JS

// Submit button spinner
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('form').forEach(function(form) {
        form.addEventListener('submit', function (e) {
            const btn = form.querySelector('button[type="submit"]');
            if (btn) {
                btn.disabled = true;
                const spinner = btn.querySelector('.spinner-border');
                const btnText = btn.querySelector('.btn-text');
                if (spinner) spinner.classList.remove('d-none');
            }
        });
    });
});

// Dashboard sidebar
const toggler = document.querySelector(".toggler-btn");
toggler.addEventListener("click", function() {
    document.querySelector("#sidebar").classList.toggle("collapsed");
})

// To make sidebar always visible on desktop when resizing to desktop
window.addEventListener('resize', function () {
    if (window.innerWidth >= 992) { // Bootstrap lg breakpoint
        var mobileSidebar = document.getElementById('mobileSidebar');
        if (mobileSidebar && mobileSidebar.classList.contains('show')) {
            let bsOffcanvas = Offcanvas.getInstance(mobileSidebar);
            if (bsOffcanvas) {
                bsOffcanvas.hide();
            }
        }
        // Always show the desktop sidebar
        var sidebar = document.getElementById('sidebar');
        if (sidebar) {
            sidebar.classList.remove('collapsed');
        }
    }
});