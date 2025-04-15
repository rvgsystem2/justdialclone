<style>
    .modal-backdrop {
        backdrop-filter: blur(5px);
        transition: all 0.3s ease;
    }

    .modal-content {
        transform: translateY(20px);
        opacity: 0;
        transition: all 0.4s ease-out;
    }

    .modal-content.show {
        transform: translateY(0);
        opacity: 1;
    }

    .input-focus:focus-within {
        border-color: #3b82f6;
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
    }

    .pulse-button {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(59, 130, 246, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(59, 130, 246, 0);
        }
    }
</style>

<!-- Trigger button (for demo purposes) -->
{{-- <div class="fixed bottom-4 right-4">
    <button onclick="showModal()"
        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow-lg transition-all">
        Show Login Modal
    </button>
</div> --}}

<!-- Improved Modal -->
<div id="popupModal"
    class="fixed inset-0 z-50 flex items-center justify-center modal-backdrop bg-black bg-opacity-50 hidden">
    <div class="modal-content bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 text-center relative mx-4">
        <!-- Close button -->
        <button onclick="closeModal()"
            class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors focus:outline-none"
            aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Logo -->
        <div class="flex items-center justify-center mb-6">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Justdial_Logo.svg/2560px-Justdial_Logo.svg.png"
                class="h-8" alt="Justdial" />
        </div>

        <!-- Welcome text -->
        <h2 class="text-xl font-bold mb-2 text-gray-800">Welcome Back!</h2>
        <p class="text-gray-600 mb-6">Log in for a personalized experience</p>

        <!-- Phone input with animated focus -->
        <div class="flex border border-gray-300 rounded-lg overflow-hidden mb-5 input-focus transition-all">
            <span
                class="px-4 py-3 bg-gray-50 text-gray-700 font-medium flex items-center border-r border-gray-300">+91</span>
            <input type="tel" id="phoneInput" placeholder="Enter Mobile Number"
                class="flex-1 px-4 py-3 outline-none text-gray-800" maxlength="10"
                oninput="validatePhoneNumber(this.value)" />
        </div>

        <!-- Error message (initially hidden) -->
        <div id="errorMessage" class="text-left text-red-500 text-sm mb-4 hidden">
            Please enter a valid 10-digit mobile number
        </div>

        <!-- Terms checkbox with improved styling -->
        <div class="flex items-start mb-5">
            <div class="flex items-center h-5">
                <input id="terms" type="checkbox"
                    class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500" checked>
            </div>
            <label for="terms" class="ml-3 text-sm text-gray-700 text-left">
                I agree to <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Terms of Service</a>
                and <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Privacy Policy</a>
            </label>
        </div>

        <!-- Login button -->
        <button id="loginButton"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition-all transform hover:scale-[1.02] active:scale-[0.98] disabled:bg-blue-400 disabled:cursor-not-allowed">
            Login with OTP
        </button>

        <!-- Alternative options -->
        <div class="mt-6 pt-5 border-t border-gray-200 text-center">
            <p class="text-sm text-gray-600 mb-3">Or continue with</p>
            <div class="flex justify-center space-x-4">
                <button
                    class="flex items-center justify-center w-12 h-12 rounded-full border border-gray-300 hover:bg-gray-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="#DB4437">
                        <path
                            d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z" />
                    </svg>
                </button>
                <button
                    class="flex items-center justify-center w-12 h-12 rounded-full border border-gray-300 hover:bg-gray-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="#1877F2">
                        <path
                            d="M20.9,2H3.1A1.1,1.1,0,0,0,2,3.1V20.9A1.1,1.1,0,0,0,3.1,22h9.58V14.25h-2.6v-3h2.6V9a3.64,3.64,0,0,1,3.88-4,20.26,20.26,0,0,1,2.33.12v2.7H17.3c-1.26,0-1.5.6-1.5,1.47v1.93h3l-.39,3H15.8V22h5.1A1.1,1.1,0,0,0,22,20.9V3.1A1.1,1.1,0,0,0,20.9,2Z" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Maybe Later button -->
        <button onclick="closeModal()" class="text-sm text-gray-500 mt-4 hover:text-gray-700">
            Maybe Later
        </button>
    </div>
</div>

<script>
    // Phone validation function
    function validatePhoneNumber(value) {
        const phoneRegex = /^\d{0,10}$/;
        const errorMessage = document.getElementById('errorMessage');
        const loginButton = document.getElementById('loginButton');

        // Force only digits
        if (!phoneRegex.test(value)) {
            document.getElementById('phoneInput').value = value.replace(/\D/g, '').substring(0, 10);
        }

        // Show/hide error message and enable/disable button
        if (value.length === 10) {
            errorMessage.classList.add('hidden');
            loginButton.classList.add('pulse-button');
            loginButton.disabled = false;
        } else {
            if (value.length > 0) {
                errorMessage.classList.remove('hidden');
            } else {
                errorMessage.classList.add('hidden');
            }
            loginButton.classList.remove('pulse-button');
            loginButton.disabled = true;
        }
    }

    // Initialize button state
    document.getElementById('loginButton').disabled = true;

    // Show modal with animation
    function showModal() {
        const modal = document.getElementById('popupModal');
        const modalContent = document.querySelector('.modal-content');

        modal.classList.remove('hidden');

        // Add animation with a slight delay for better effect
        setTimeout(() => {
            modalContent.classList.add('show');
        }, 50);
    }

    // Close modal with animation
    function closeModal() {
        const modal = document.getElementById('popupModal');
        const modalContent = document.querySelector('.modal-content');

        modalContent.classList.remove('show');

        // Wait for animation to complete before hiding modal
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }

    // Show popup after 5 seconds (reduced from 10 for demo purposes)
    window.addEventListener('load', () => {
        setTimeout(showModal, 5000);
    });

    // Close modal when clicking outside
    document.getElementById('popupModal').addEventListener('click', (event) => {
        if (event.target === document.getElementById('popupModal')) {
            closeModal();
        }
    });

    // Handle ESC key press
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !document.getElementById('popupModal').classList.contains('hidden')) {
            closeModal();
        }
    });
</script>
