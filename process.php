document.addEventListener("DOMContentLoaded", () => {
    // Create an XMLHttpRequest object
    const xhr = new XMLHttpRequest();
    // Define the JSON file location
    const url = 'profile.json';

    // Open a new connection
    xhr.open('GET', url, true);

    // When the request is done
    xhr.onload = function() {
        if (this.status === 200) {
            // Parse the JSON data
            const profileData = JSON.parse(this.responseText);

            // Update profile card with fetched data
            document.getElementById('profile-name').innerText = profileData.name;
            document.getElementById('profile-bio').innerText = profileData.bio;
            document.getElementById('profile-picture').src = profileData.picture;
            document.getElementById('social-link-1').href = profileData.social_links.link1;
            document.getElementById('social-link-2').href = profileData.social_links.link2;
            document.getElementById('social-link-3').href = profileData.social_links.link3;
        }
    };

    // Send the request
    xhr.send();
});
