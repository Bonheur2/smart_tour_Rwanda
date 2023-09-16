function validateForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
  
    if (username === 'user' && password === 'pass') {
      return true; // Allow submission
    } else {
      const errorText = document.getElementById('errorText');
      errorText.textContent = 'Invalid username or password';
      return false; // Prevent form submission
    }
  }
  