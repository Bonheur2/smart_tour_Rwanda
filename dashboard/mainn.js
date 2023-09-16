document.addEventListener('DOMContentLoaded', function() {
    const editProfileButton = document.getElementById('editProfileButton');
    
    // Fetch user data from the server (replace with actual fetch or AJAX)
    fetchUserData('loggedInUsername') // Pass the logged-in username
        .then(userData => {
            const userNameElement = document.getElementById('userName');
            userNameElement.textContent = userData.name;
            // Display user information in the paragraph
        })
        .catch(error => {
            console.error('Error fetching user data:', error);
        });
    
    // Redirect to profile editing page on button click
    editProfileButton.addEventListener('click', function() {
        window.location.href = 'profile.html'; // Replace with your actual page
    });
});

// Fetch user-specific data from the server
function fetchUserData(username) {
    return fetch(`user_data/${username}.json`) // Example URL
        .then(response => response.json());
}


document.addEventListener('DOMContentLoaded', function() {
    const userSettingsForm = document.getElementById('userSettingsForm');
    
    // Load saved settings on page load
    loadUserSettings();
    
    userSettingsForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission
        
        // Get selected values from form
        const timezone = userSettingsForm.timezone.value;
        const language = userSettingsForm.language.value;
        
        // Save user settings (you can replace this with your actual save logic)
        saveUserSettings(timezone, language);
        
        alert('Settings saved successfully.');
    });
});

// Load user settings (replace with actual logic)
function loadUserSettings() {
    // Example: Load settings from localStorage
    const savedTimezone = localStorage.getItem('userTimezone');
    const savedLanguage = localStorage.getItem('userLanguage');
    
    if (savedTimezone) {
        document.getElementById('timezone').value = savedTimezone;
    }
    
    if (savedLanguage) {
        document.getElementById('language').value = savedLanguage;
    }
}

// Save user settings (replace with actual logic)
function saveUserSettings(timezone, language) {
    // Example: Save settings to localStorage
    localStorage.setItem('userTimezone', timezone);
    localStorage.setItem('userLanguage', language);
}
