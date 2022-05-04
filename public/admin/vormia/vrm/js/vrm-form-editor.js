/*
let snow = new Quill('.quill-snow', {
    theme: 'snow'
});
let bubble = new Quill('.bubble-editor', {
    theme: 'bubble'
});
*/

let quillTollbar = [
    [{ header: [1, 2, 3, 4, 5, 6, false] }],
    ['bold', 'italic', 'underline', 'strike', { color: [] }, { background: [] }],
    [{ align: [] },'blockquote'],
    [{ size: ['small', false, 'large', 'huge'] }],
    [{ list: 'ordered' }, { list: 'bullet' },{ indent: '-1' },{ indent: '+1' }],
    ['link', 'image', 'video'],
    [{ script: 'sub' }, { script: 'super' }],
    [{ direction: 'rtl' }],

    ['code-block'],
    ['clean'] 
];

const quill_editor = document.querySelector(".quill-editor");
if(quill_editor){
    new Quill(".quill-editor", { 
        bounds: "#full-container .editor", 
        modules: { 
                toolbar: quillTollbar,
            }, 
            theme: "snow" 
    });
}

const full = document.querySelectorAll("[id^='quill-editor-']");
if(full){
    // Loop
    for(let i = 0; i < full.length; i++){
        const el = full[i];
        // Get id
        const id = el.getAttribute('id');

        // Create new Quill
        new Quill(`#${id}`, {
            bounds: "#full-container .editor", 
            modules: { 
                    toolbar: quillTollbar,
                }, 
                theme: "snow" 
        });
    }
}

const quill_light = document.querySelector(".quill-light");
if(quill_light){
    new Quill(".quill-light", {
        bounds: "#full-container .editor", 
        modules: { 
        toolbar:     ['bold', 'italic', 'underline', 'strike', { color: [] }, { background: [] },{ list: 'ordered' }, { list: 'bullet' },{ indent: '-1' },{ indent: '+1' }],
            }, 
            theme: "snow" 
    });
}

// Light Elements
const light = document.querySelectorAll("[id^='quill-light-']");
if(light){
    // Loop
    for(let i = 0; i < light.length; i++){
        const el = light[i];
        // Get id
        const id = el.getAttribute('id');

        // Create new Quill
        new Quill(`#${id}`, {
            bounds: "#full-container .editor", 
            modules: { 
            toolbar:     ['bold', 'italic', 'underline', 'strike', { color: [] }, { background: [] },{ list: 'ordered' }, { list: 'bullet' },{ indent: '-1' },{ indent: '+1' }],
                }, 
                theme: "snow" 
        });
    }
}