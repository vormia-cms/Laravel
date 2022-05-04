
// Blog & Page
const blogBox = document.querySelectorAll('.vrm-blog-box');
// Check if blog page exists
if (blogBox) {
    // Loop through each blog page
    for (let i = 0; i < blogBox.length; i++) {
        // Get the blog page
        let blogPage = blogBox[i];

        // Find all ahref elements
        const blogPageLinks = blogPage.querySelectorAll('a.vrm-plug-btn');


        // Loop through all blogPageLinks
        blogPageLinks.forEach(a => {
            // Listen for click event
            a.addEventListener('click', (e) => {
                // Get the href link
                const href = e.target.getAttribute('href');
                // Get the class name
                const className = e.target.getAttribute('class');
                // Check if the href link has #
                if (href.indexOf('#') !== -1) {
                    // Get the id of the href link
                    const id = href.split('#')[1]+'-zone';
                    // Get the element with the id
                    const element = blogPage.querySelector('.'+id);
                    // Check if the element exists
                    if (element) {
                        // Toggle the element
                        element.classList.toggle('active');
                        e.preventDefault();

                        // Hide href
                        if(className.indexOf('vrm-plug-edit') !== -1) {
                            // If is Edit Button
                            a.style.display = 'none';
                        }else{
                            // Show the Edit Button
                            element.parentNode.querySelector('.vrm-plug-edit').style.display = 'inline';
                        }
                    }
                }
            });
        });

        // Visibility Elements
        const visibilityBox = blogPage.querySelector('#publish-visibility');

        // Check if visibility exists
        if (visibilityBox) {
            // Visibility
            const visibility = visibilityBox.querySelector('div.vrm-plug-control');

            // Find all radio btn inside visibility
            const visibilityRadios = visibility.querySelectorAll('input[type="radio"].visibility-check');
            // Listen if any radio btn is clicked
            visibilityRadios.forEach(radio => {
                // Check if the radio btn is clicked
                radio.addEventListener('click', () => {
                    // Show Class
                    const showClass = 'visibility-'+radio.value+'-zone';
                    // Get all vrm-plug-control-action class under visibilityRadios
                    const visibilityAction = visibility.querySelectorAll('div.vrm-plug-control-action');
                    // Loop through all visibilityAction and Hide all
                    visibilityAction.forEach(action => {
                        action.style.display = 'none';
                    });

                    // Checked
                    if(radio.checked) {
                        // Show showClass
                        visibility.querySelector('.'+showClass).style.display = 'inline';
                    }
                });
            });
        }
    }
}

// Blog & Page - PostLink - postLinkBloc
const postLinkBloc = document.querySelector('#postLinkBloc');
if(postLinkBloc){
    // If Edit Button is clicked
    const editLink = document.querySelector('#editLink');

    // Listen for click event
    editLink.addEventListener('click', (e) => {
        //  Toggle class d-none on element #editLink
        editLink.classList.add('d-none');
        // Hide #postLinkShow
        postLinkBloc.querySelector('#postLinkShow').classList.add('d-none');

        //  Remove class d-none on element #postLinkMain Label
        postLinkBloc.querySelector('#postLinkMain').classList.remove('d-none');
        //  Add class d-inline on element #postLinkMain Label
        postLinkBloc.querySelector('#postLinkMain').classList.add('d-inline');

        //  Remove class d-none on element #postLink InputText
        postLinkBloc.querySelector('#postLink').classList.remove('d-none');
        //  Add class d-inline on element #postLink InputText
        postLinkBloc.querySelector('#postLink').classList.add('d-inline');

        //  Remove class d-none on element #editLinkSave Save BTN
        postLinkBloc.querySelector('#editLinkSave').classList.remove('d-none');
        //  Remove class d-none on element #editLinkCancel Cancel Anchor
        postLinkBloc.querySelector('#editLinkCancel').classList.remove('d-none');
    });

    // If Edit Link Save Button is clicked
    const editLinkSave = document.querySelector('#editLinkSave');
    // Listen for click event
    editLinkSave.addEventListener('click', (e) => {
        // Action
        act();
    });

    // If Edit Link Cancel Button is clicked
    const editLinkCancel = document.querySelector('#editLinkCancel');
    // Listen for click event
    editLinkCancel.addEventListener('click', (e) => {
        // Action
        act();
    });

    // On Save / Cancel Action
    const act = () => {
        // #editLinkCancel
        editLinkCancel.classList.remove('d-inline');
        editLinkCancel.classList.add('d-none');

        // #editLink
        postLinkBloc.querySelector('#editLink').classList.remove('d-none');
        postLinkBloc.querySelector('#editLink').classList.add('d-inline');

        // Show #postLinkShow
        postLinkBloc.querySelector('#postLinkShow').classList.remove('d-none');
        postLinkBloc.querySelector('#postLinkShow').classList.add('d-inline');

        //  Remove class d-inline on element #postLinkMain Label
        postLinkBloc.querySelector('#postLinkMain').classList.remove('d-inline');
        //  Add class d-none on element #postLinkMain Label
        postLinkBloc.querySelector('#postLinkMain').classList.add('d-none');

        //  Remove class d-inline on element #postLink InputText
        postLinkBloc.querySelector('#postLink').classList.remove('d-inline');
        //  Add class d-none on element #postLink InputText
        postLinkBloc.querySelector('#postLink').classList.add('d-none');

        //  Remove class d-inline on element #editLinkSave Save BTN
        postLinkBloc.querySelector('#editLinkSave').classList.remove('d-inline');
        // Add class d-none on element #editLinkSave Save BTN
        postLinkBloc.querySelector('#editLinkSave').classList.add('d-none');

    }
}
