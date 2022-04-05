
// This is our array to hold our object once we create them
let users = [];

        // Contstructing the object by consuming the values from our form
        const addUser = (ev) => {
            ev.preventDefault();
            let user = {
                id: document.getElementById('adminID').value,
                email: document.getElementById('email').value,
                password: document.getElementById('password').value
            }
            // grabs the new userObject and then pushes it into our users array
            users.push(user);

            // Resetting the form here
            document.getElementById('adminForm').reset();
        

            // Console message for troubleshooting
            console.warn('new user JSON added', {
                users
            });

            // Create the JSON object variable to insert into our defined area
            let userObject = document.querySelector('#objects .jsonList');

            /* Using stringify to turn our object into a string. In CSS I use 'white-space' set to 'pre' to get a tidy object with key value pairs on seperate lines.  \n give me a new line and \t gives me the tab indenting
            so that everything is more readable*/

            userObject.textContent = '\n' + JSON.stringify(users, '\t', 1);
        }

        /* This will insert objects on page in  my Admin Users - JSON section after adding a 'click' event listener on our button. This is what triggers the adduser function above */
        document.addEventListener('DOMContentLoaded', () => {

            document.getElementById('adminBtn').addEventListener('click', addUser);

        });