document.getElementById('uploadImage').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('profileImage').src = e.target.result;
    };
    reader.readAsDataURL(file);
});

document.getElementById('editProfile').addEventListener('click', function() {
    const username = prompt('Neuen Benutzernamen eingeben:', document.getElementById('username').textContent);
    const email = prompt('Neue Email eingeben:', document.getElementById('email').textContent);
    if (username) document.getElementById('username').textContent = username;
    if (email) document.getElementById('email').textContent = email;
});
