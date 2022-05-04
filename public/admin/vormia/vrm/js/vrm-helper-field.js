// Get Parent Box
const zone = document.querySelector('.vrm-helper-box');

// Get Action Zone .vrm-helper-action
const action = document.querySelectorAll('.vrm-helper-action > a.badge');

// Loop through action
for (let i = 0; i < action.length; i++) {
  // Anchor
    const anchor = action[i];
    // Add Event Listener click
    anchor.addEventListener('click', function(e) {
        // Get .vrm-helper-keys
        var keys = document.querySelectorAll('.vrm-helper-keys');
        // Count Total
        var total = keys.length;

        // Get ID of the action
        const id = anchor.getAttribute('id');
        if(id == 'add-helper'){
            // append at the end of zone
            zone.insertAdjacentHTML('beforeend', addhelper(total + 1));
        }else{
            if(total > 1){
                // Remove last
                keys[total - 1].remove();
            }
        }
    });
}

// Add Helper Function
const addhelper = (num = 1) => {
    let helper = 
    `<div class="row vrm-helper-keys" num="${num}">
            <div class="col-md-3 col-sm-12">
            <div class="form-group">
                <label for="title">Key Name</label>
                <input type="text" class="form-control" placeholder="Helper Key" required>
                <small>The key will be escaped on save</small>
            </div>
        </div>

        <div class="col-md-9 col-sm-12">
            <div class="form-group">
                <label for="title">Value</label>
                <textarea class="form-control vrm-noresize" placeholder="Value of the Key"></textarea>
                <small>Can be any string,float, int or Json</small>
            </div>
        </div>
    </div>`;

    // return 
    return helper;
};

// Get Parent Box
const zoneField = document.querySelector('.vrm-field-box');

// Get Action Zone .vrm-field-action
const actionField = document.querySelectorAll('.vrm-field-action > a.badge');

// Loop through action
for (let i = 0; i < actionField.length; i++) {
    // Anchor
    const anchor = actionField[i];
    // Add Event Listener click
    anchor.addEventListener('click', function(e) {
        // Get .vrm-field-keys
        var keys = document.querySelectorAll('.vrm-field-keys');
        // Count Total
        var total = keys.length;

        // Get ID of the action
        const id = anchor.getAttribute('id');
        if(id == 'add-field'){
            // New element
            const div = document.createElement('div');
            div.innerHTML = `${addfield()}`; // Inner HTML
            div.classList.add('row','vrm-field-keys');
            div.setAttribute('num', total + 1);

            // append at the end of zone
            zoneField.append(div);
        }else{
            if(total > 1){
                // Remove last
                keys[total - 1].remove();
            }
        }
    });
}

// Add Field Function
const addfield = () => {
    let field = `   
        <div class="col-md-2 col-sm-12">
            <div class="form-group">
                <label for="title">Key Name</label>
                <input type="text" class="form-control form-control-sm" placeholder="Field Key" required>
                <small>The key will be escaped on save</small>
            </div>
        </div>

        <div class="col-md-10 col-sm-12">
            <div class="form-group">
                <label for="title">Structure</label>
                <div class="row">
                    <div class="col-md-1 col-sm-12">
                        <div class="form-check form-switch vrm-checkbox-switch">
                            <input class="form-check-input vrm-checkbox-action" type="checkbox">
                            <label class="form-check-label vrm-color-dark-orange" for="">Filter </label>
                        </div>
                    </div>
                    <div class="col-md-11 col-sm-12">
                        <div class="row">
                            <div class="col-md-9 col-sm-12 mb-1">
                                <input type="text" class="form-control form-control-sm vrm-table-structure" disabled placeholder="Default varchar(255) NULL">
                            </div>
                            <div class="col-md-3 col-sm-12 mb-1">
                                <input type="text" class="form-control form-control-sm" placeholder="Comments">
                            </div>
                            <div class="col-md-4 col-sm-12 mb-1">
                                <input type="text" class="form-control form-control-sm" placeholder="Attributes| class='vrm-text' id='fieldID'">
                            </div>
                            <div class="col-md-4 col-sm-12 mb-1">
                                <select class="form-select form-select-sm vrm-select-structure">
                                    <!-- input group -->
                                    <optgroup label="Default">
                                        <option>Text</option>
                                        <option>Date</option>
                                        <option>Email</option>
                                        <option>Radio</option>
                                        <option>Select</option>
                                        <option>Number</option>
                                        <option>Textarea</option>
                                        <option>Password</option>
                                        <option>Checkbox</option>
                                    </optgroup>
                                    <optgroup label="Inheritance">
                                        <option>Select -> Parent Make</option>
                                    </optgroup>
                                    <optgroup label="Access">
                                        <option>Radio -> All Access</option>
                                        <option>Select -> Dealership/Individual</option>
                                        <option>Checkbox -> All Expect Top Levels</option>
                                    </optgroup>
                                    <optgroup label="User">
                                        <option>Select -> All User</option>
                                        <option>Checkbox -> User Author List</option>
                                        <option match="match">Email -> Match Against</option>
                                        <option match="with">Password -> With Logname</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col-md-4 col-sm-12 mb-1">
                                <input type="text" class="form-control form-control-sm vrm-match-structure" disabled placeholder="fKey(mem_email) = tableCol(user.user_email)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;

    // return 
    return field;
};

// Field Check Box
const checkFiter = document.querySelector('div.vrm-field-box');
if(checkFiter){
    // Add Event Listener change
    checkFiter.addEventListener('change', function(e) {
        // Anchor
        const anchor = e.target;
        // Check if anchor is input[type=checkbox]
        if(anchor.type == 'checkbox'){
            // Get parent Nod then get nearest vrm-table-structure
            const parent = anchor.closest('.vrm-field-keys');
            const structure = parent.querySelector('.vrm-table-structure');
            // Check if checked
            if(anchor.checked){
                // Enable
                structure.removeAttribute('disabled');
                structure.setAttribute('required','');
            }else{
                // Remove Value
                structure.value ='';
                // Disable
                structure.setAttribute('disabled', '');
                structure.removeAttribute('required');
            }
        }else if(anchor.type == 'select-one'){
            // Get Selected
            const selected = anchor.options[anchor.selectedIndex];
            const parent = selected.closest('.vrm-field-keys');
            const structure = parent.querySelector('.vrm-match-structure');

            // Look for attribute match
            if(selected.hasAttribute('match')){
                // Get Attribute match
                const match = selected.getAttribute('match');
                if(match != ''){
                    // Enable
                    structure.removeAttribute('disabled');
                }
            }else{
                // Remove Value
                structure.value ='';
                // Disable
                structure.setAttribute('disabled', '');
            }
        }
    });
}