//
// --- Modal Functions ---
//

/**
 * Opens a modal by its ID.
 * @param {string} modalId - The ID of the modal element to open.
 */
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
    }
}

/**
 * Closes a modal by its ID.
 * @param {string} modalId - The ID of the modal element to close.
 */
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto'; // Restore scrolling
    }
}

/**
 * Closes one modal and opens another.
 * @param {string} currentModalId - The ID of the modal to close.
 * @param {string} targetModalId - The ID of the modal to open.
 */
function switchModal(currentModalId, targetModalId) {
    closeModal(currentModalId);
    // Use a short timeout to allow the closing animation to start
    setTimeout(() => {
        openModal(targetModalId);
    }, 300); // 300ms matches the animation duration
}


// --- Event Listeners ---

// Add listeners when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {

    // Listener to close a modal when clicking on the overlay background
    document.querySelectorAll('.modal-overlay').forEach(modal => {
        modal.addEventListener('click', function(event) {
            // If the click is on the overlay itself (not the container inside it)
            if (event.target === this) {
                closeModal(this.id);
            }
        });
    });

    // Listener to close the active modal with the Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            const activeModal = document.querySelector('.modal-overlay.active');
            if (activeModal) {
                closeModal(activeModal.id);
            }
        }
    });

    // --- Form Validation ---

    // Password confirmation validation for the register form
    const registerForm = document.querySelector('#registerModal form');
    if (registerForm) {
        const password = registerForm.querySelector('#register-password');
        const confirmPassword = registerForm.querySelector('#register-password-confirm');

        function validatePasswords() {
            if (password.value !== confirmPassword.value) {
                // Set a custom error message that the browser will display
                confirmPassword.setCustomValidity('Passwords do not match');
            } else {
                confirmPassword.setCustomValidity(''); // Clear the error
            }
        }

        password.addEventListener('input', validatePasswords);
        confirmPassword.addEventListener('input', validatePasswords);
    }

    // Optional: Add a "loading" state to forms on submission
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            // Don't prevent submission, just change the button state
            const submitBtn = form.querySelector('.custom-btn');
            if(submitBtn) {
                submitBtn.textContent = 'Processing...';
                submitBtn.disabled = true;
            }
        });
    });
});
