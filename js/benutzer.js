document.getElementById('profileForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const profilePic = document.getElementById('profilePic').files[0];
    
    if (name && email) {
        localStorage.setItem('name', name);
        localStorage.setItem('email', email);
        
        if (profilePic) {
            const reader = new FileReader();
            reader.onload = function(e) {
                localStorage.setItem('profilePic', e.target.result);
                displayProfilePic(e.target.result);
            };
            reader.readAsDataURL(profilePic);
        } else {
            alert('Profil gespeichert!');
        }
    } else {
        alert('Bitte füllen Sie alle Felder aus.');
    }
});

window.addEventListener('load', function() {
    const storedName = localStorage.getItem('name');
    const storedEmail = localStorage.getItem('email');
    const storedProfilePic = localStorage.getItem('profilePic');
    
    if (storedName) {
        document.getElementById('name').value = storedName;
    }
    if (storedEmail) {
        document.getElementById('email').value = storedEmail;
    }
    if (storedProfilePic) {
        displayProfilePic(storedProfilePic);
    }
});

function displayProfilePic(src) {
    const img = document.createElement('img');
    img.src = src;
    img.alt = 'Profilbild';
    const preview = document.getElementById('profilePicPreview');
    preview.innerHTML = '';
    preview.appendChild(img);
}
