const gridContainer = document.getElementById('user-grid');
const searchInput = document.getElementById('search');

let usersData = [];

// Fetch users
gridContainer.innerHTML = "<p>Loading users...</p>";

fetch('https://jsonplaceholder.typicode.com/users')
    .then(res => res.json())
    .then(data => {
        usersData = data;
        displayUsers(usersData);
    })
    .catch(() => {
        gridContainer.innerHTML = "<p>Failed to load users</p>";
    });

// Function to display users
function displayUsers(users){
    gridContainer.innerHTML = "";

    users.forEach(user => {

        const card = document.createElement('div');
        card.classList.add('card');

        const avatarURL =
            'https://xsgames.co/randomusers/avatar.php?g=pixel&key=' + user.id;

        card.innerHTML = `
            <img src="${avatarURL}" class="avatar">
            <h3>${user.name}</h3>
            <p>@${user.username}</p>

            <button class="btn">Show Details</button>

            <div class="details">
                <p><b>Email:</b> ${user.email}</p>
                <p><b>Phone:</b> ${user.phone}</p>
                <p><b>City:</b> ${user.address.city}</p>
            </div>
        `;

        const btn = card.querySelector('.btn');

        btn.addEventListener('click', () => {

            // Close others
            document.querySelectorAll('.card').forEach(c => {
                if (c !== card) {
                    c.classList.remove('active');
                    c.querySelector('.btn').textContent = "Show Details";
                }
            });

            // Toggle current
            card.classList.toggle('active');

            btn.textContent = card.classList.contains('active')
                ? "Hide Details"
                : "Show Details";
        });

        gridContainer.appendChild(card);
    });
}

// 🔍 Search Filter
searchInput.addEventListener('input', () => {
    const value = searchInput.value.toLowerCase();

    const filtered = usersData.filter(user =>
        user.name.toLowerCase().includes(value) ||
        user.username.toLowerCase().includes(value)
    );

    displayUsers(filtered);
});