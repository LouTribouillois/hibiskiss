document.addEventListener('DOMContentLoaded', function() {
    // Create the popup HTML
    const popupHTML = `
    <div class="age-verification-overlay" id="ageVerification">
        <div class="age-verification-popup" style="font-family: 'Montserrat', sans-serif;">
            <img src="your-logo.png" alt="Beer Company Logo" class="age-logo">
            <h2 style="font-family: 'Montserrat', sans-serif;">Age Verification</h2>
            <p style="font-family: 'Montserrat', sans-serif;">This website contains alcoholic products and is intended for adults only. <br>By entering, you confirm that you are at least 18 years of age.</p>
            <div class="age-verification-buttons">
                <button class="age-btn age-btn-yes" id="confirmAge">Yes, I am 18+</button>
                <button class="age-btn age-btn-no" id="denyAge">No, I am under 18</button>
            </div>
        </div>
    </div>
    `;

    // Add the popup to the body
    document.body.insertAdjacentHTML('afterbegin', popupHTML);

    const ageVerification = document.getElementById('ageVerification');
    const confirmBtn = document.getElementById('confirmAge');
    const denyBtn = document.getElementById('denyAge');

    // Check if age was previously verified
    if(localStorage.getItem('ageVerified') === 'true') {
        ageVerification.style.display = 'none';
    }

    // Handle yes button click
    confirmBtn.addEventListener('click', function() {
        localStorage.setItem('ageVerified', 'true');
        ageVerification.style.display = 'none';
    });

    // Handle no button click
    denyBtn.addEventListener('click', function() {
        // Redirect to a safe page or show a message
        window.location.href = 'https://www.google.com'; // Example redirect
    });

    // Ensure Montserrat font is loaded
    const link = document.createElement('link');
    link.href = 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap';
    link.rel = 'stylesheet';
    document.head.appendChild(link);
});