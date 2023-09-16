// document.addEventListener('DOMContentLoaded', function () {
//     const siteConfigForm = document.getElementById('siteConfigForm');

//     siteConfigForm.addEventListener('submit', function (event) {
//         event.preventDefault();
        
//         const siteName = document.getElementById('siteName').value;
//         const timezone = document.getElementById('timezone').value;

//         // Perform actions to save settings (e.g., send data to server)
//         // This is a placeholder and needs to be implemented as per your backend logic
        
//         console.log('Settings saved:', siteName, timezone);
//     });
// });


// Inside the loadSettingsContent function
function loadSettingsContent(settingType) {
    const settingsContent = document.getElementById('settings-content');
    settingsContent.innerHTML = '';

    if (settingType === 'general') {
        const generalSettingsContent = document.createElement('div');
        generalSettingsContent.classList.add('general-settings-content');

        generalSettingsContent.innerHTML = `
            <h3>General Settings</h3>
            <label for="site-title">Site Title:</label>
            <input type="text" id="site-title">
            <label for="site-description">Site Description:</label>
            <input type="text" id="site-description">
            <label for="timezone">Timezone:</label>
            <select id="timezone">
                <option value="GMT">GMT</option>
                <option value="UTC">UTC</option>
                <!-- Add more timezone options -->
            </select>
            <button id="save-general">Save</button>
        `;

        settingsContent.appendChild(generalSettingsContent);

        // Add event listener for the "Save" button
        const saveGeneralButton = document.getElementById('save-general');
        saveGeneralButton.addEventListener('click', saveGeneralSettings);
    }
}

function saveGeneralSettings() {
    const siteTitle = document.getElementById('site-title').value;
    const siteDescription = document.getElementById('site-description').value;
    const timezone = document.getElementById('timezone').value;

    // Perform saving logic here (e.g., send data to the server)
    // Provide appropriate feedback to the user
}
document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('nav ul li a');
    const contentDiv = document.getElementById('content');

    navLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const targetPage = link.getAttribute('href');
            
            // Load the content of the target page into the contentDiv using AJAX
            fetch(targetPage)
                .then(response => response.text())
                .then(data => {
                    contentDiv.innerHTML = data;
                });
        });
    });
});