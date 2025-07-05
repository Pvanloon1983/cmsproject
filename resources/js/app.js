import './bootstrap';
import 'bootstrap';
// Add your own JS below to override or extend Bootstrap JS

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