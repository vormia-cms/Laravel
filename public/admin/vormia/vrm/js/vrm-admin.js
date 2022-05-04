
// Vormia Table Responsive
const vrmTable = document.querySelector('.vrm-table');

if(vrmTable){
    // Find All row with button.vrm-tr-more-btn
    const vrmTrMoreBtn = vrmTable.querySelectorAll('tr > td  .vrm-tr-more-btn');

    // Loop through all buttons and add event listener click
    vrmTrMoreBtn.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault;

            // Action Div action
            const thisTd = btn.parentNode.parentNode;

            // Find div .action apply css visibility show
            const actionDiv = thisTd.querySelector('.action');
            // Check if action div is visible
            if(actionDiv.style.visibility === 'visible'){
                // If visible, hide it
                actionDiv.style.visibility = 'hidden';
            }else{
                // Show It
                actionDiv.style.visibility = 'visible';
            }

            // Find the parent row
            const parentRow = btn.parentNode.parentNode.parentNode;

            // Find all td with class .vrm-column 
            const vrmColumn = parentRow.querySelectorAll('td.vrm-column');

            // Loop through all td and toggle class .vrm-column-open
            vrmColumn.forEach(td => {
                td.classList.toggle('vrm-column-open');
            });

            // btn change icon bi-arrow-down-circle-fill to bi-arrow-up-circle-fill
            const icon = btn.querySelector('i');
            // clear icon classList
            icon.classList.toggle('bi-arrow-down-circle-fill');
            icon.classList.toggle('bi-arrow-up-circle-fill');

            // Find the next row
            // const nextRow = parentRow.nextElementSibling;

            // Toggle the next row
            // nextRow.classList.toggle('vrm-tr-more-row');
        });
    });
    
    // Find thead
    const thead = vrmTable.querySelector('thead');
    // FInd tfoot
    const tfoot = vrmTable.querySelector('tfoot');

    // FInd .vrm-check-column
    const vrmCheckColumn = thead.querySelector('.vrm-check-column');
    const headCheckbox = vrmCheckColumn.querySelector('input[type="checkbox"].vrm-td-check');

        // FInd .vrm-check-column
    const vrmCheckColumnTfoot = tfoot.querySelector('.vrm-check-column');
    const footCheckbox = vrmCheckColumnTfoot.querySelector('input[type="checkbox"].vrm-td-check');

    // Add event listener checkbox
    vrmCheckColumn.addEventListener('click', (e) => {
        // Find all checkbox
        const checkbox = vrmTable.querySelectorAll('tbody .vrm-check-column input[type="checkbox"].vrm-td-check');
        // Loop through all checkbox and toggle checked
        checkbox.forEach(cb => {
            cb.checked = e.target.checked;
        });

        // Also toggle the checkbox in tfoot
        footCheckbox.checked = headCheckbox.checked;
        
    });


    // Add event listener checkbox
    vrmCheckColumnTfoot.addEventListener('click', (e) => {
        // Find all checkbox
        const checkbox = vrmTable.querySelectorAll('tbody .vrm-check-column input[type="checkbox"].vrm-td-check');
        // Loop through all checkbox and toggle checked
        checkbox.forEach(cb => {
            cb.checked = e.target.checked;
        });

        // Also toggle the checkbox in thead
        headCheckbox.checked = footCheckbox.checked;
    });
}

// Get Button ID vrm-control #vrm-controls
const controlBTN = document.querySelector('.vrm-control  #vrm-controls');


if(controlBTN){
    // Post Zone .vrm-content-zone
    const vrmPostZone = document.querySelector('.vrm-content-zone');

    // Add event listener click
    controlBTN.addEventListener('click', (e) => {
        e.preventDefault();

        // vrm-main-zone inside vrmPostZone | classList
        const classList = vrmPostZone.querySelector('.vrm-main-zone').classList;
        // vrm-control-zone inside vrmPostZone | classList
        const classListControl = vrmPostZone.querySelector('.vrm-control-zone').classList;

        // Check if classList has d-none d-md-block
        if(classListControl.contains('vrm-control-show')){
            // If true, remove d-none d-md-block
            classListControl.remove('vrm-control-show');
            classList.remove('d-none');
            // Deactive controlBTN
            controlBTN.classList.remove('btn-plain-active');
        }else{
            // Add d-none d-md-block
            classListControl.add('vrm-control-show');
            classList.add('d-none');
            // Active controlBTN
            controlBTN.classList.add('btn-plain-active');
        }
    });

}