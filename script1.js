document.addEventListener('DOMContentLoaded', function () {
    const userList = document.getElementById('userList');
    const userForm = document.getElementById('userForm');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');

    // Function to fetch and display users
    function getUsers() {
        fetch('users.php')
            .then(response => response.json())
            .then(data => {
                let usersHtml = '';
                data.forEach(user => {
                    usersHtml += `
                        <div class="user">
                            <span>${user.name}</span>
                            <span>${user.email}</span>
                            <button class="editBtn" data-email="${user.email}">Edit</button>
                            <button class="deleteBtn" data-email="${user.email}">Delete</button>
                        </div>
                    `;
                });
                userList.innerHTML = usersHtml;
            })
            .catch(error => {
                console.error('Error fetching users:', error);
            });
    }

    // Add user event handler
    userForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = nameInput.value;
        const email = emailInput.value;

        // Add the user to the array (you'd typically save to a database here)
        users.push({ name, email });

        // Clear the form inputs
        nameInput.value = '';
        emailInput.value = '';

        // Refresh the user list
        getUsers();
    });

    // Edit or Delete user event handler
    userList.addEventListener('click', function (event) {
        if (event.target.classList.contains('editBtn')) {
            // Retrieve the user email from the button's data attribute
            const email = event.target.getAttribute('data-email');

            // Find the user in the array and update their details (database update in reality)
            const userToUpdate = users.find(user => user.email === email);
            if (userToUpdate) {
                const newName = prompt('Enter new name:', userToUpdate.name);
                if (newName !== null) {
                    userToUpdate.name = newName;
                }
            }

            // Refresh the user list
            getUsers();
        } else if (event.target.classList.contains('deleteBtn')) {
            // Retrieve the user email from the button's data attribute
            const email = event.target.getAttribute('data-email');

            // Remove the user from the array (database delete in reality)
            users = users.filter(user => user.email !== email);

            // Refresh the user list
            getUsers();
        }
    });

    // Initial load of users
    getUsers();
});
