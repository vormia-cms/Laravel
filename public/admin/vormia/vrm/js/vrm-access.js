// Access Level Permission List
const permission = document.querySelector('.vrm-permission-list');

// check if permission list is empty
if (permission) {
    // Get All checkboxes inside permission list
    const checkboxes = permission.querySelectorAll('input[type="checkbox"]');

    // Loop through all checkboxes
    checkboxes.forEach(checkbox => {
        // Add event listener to checkbox
        checkbox.addEventListener('change', event => {
            // check if checked checkbox has class access-all
            if (event.target.classList.contains('access-all')) {
                // check if checkbox is checked
                if (event.target.checked) {
                    // Diabled all checkboxes
                    checkboxes.forEach(checkbox => {
                        checkbox.checked = false;
                        checkbox.disabled = true;
                    });
                    // Enable current checkbox
                    event.target.checked = true;
                    checkbox.disabled = false;
                } else {
                    // Enable all checkboxes
                    checkboxes.forEach(checkbox => {
                        checkbox.disabled = false;
                    });
                }
            }
        });
    });
}

// Access Module
const accessType = document.querySelector('.vrm-access-type');
const access = document.querySelector('.vrm-access');
if(access){
    // Get Select per-module and per-user inside access module
    const selectPerModule = access.querySelector('.vrm-per-module');
    const perUser = access.querySelector('.vrm-per-user');

    // Get All Radio Buttons inside accessType
    const radioButtons = accessType.querySelectorAll('input[type="radio"]');
    // Loop through all radio buttons
    radioButtons.forEach(radioButton => {
        // Add event listener to radio button
        radioButton.addEventListener('change', event => {
            // check if checked radio button has class per-module
            if (event.target.classList.contains('per-module')) {
                selectPerModule.disabled = false;
                // Display None perUser
                perUser.style.display = 'none';
            }else{
                selectPerModule.disabled = false;
                perUser.style.display = 'block';
            }
        });
    });
}