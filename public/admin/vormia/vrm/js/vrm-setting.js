// Media
const media = document.querySelector('#sett-media');

if(media){
    // Compress .vrm-sett-compress
    const divCompress = media.querySelector('.vrm-sett-compress');
    if(divCompress){
        // Find radio button with name compress
        const compress = divCompress.querySelectorAll('input[name="compress"]');

        // Add EventListener to radio button
        compress.forEach((item) => {
            item.addEventListener('change', (event) => {
                // Get value of attribute compress
                const compressValue = event.target.getAttribute('compress');
                // Get Element with id compress
                const compressElement = media.querySelector('#compress');
                // Check Value
                if(compressValue === 'true'){
                    // Remove attribute disabled
                    compressElement.removeAttribute('disabled');
                }else{
                    // Add attribute disabled
                    compressElement.setAttribute('disabled', 'disabled');
                }
            });
        });
    }

    // Watermark . vrm-sett-watermark
    const divWatermark = media.querySelector('.vrm-sett-watermark');
    if(divWatermark){
        // Find radio button with name watermark
        const watermark = divWatermark.querySelectorAll('input[name="watermark"]');
            
        // Add EventListener to radio button
        watermark.forEach((item) => {
            item.addEventListener('change', (event) => {
                // Get value of attribute watermark
                const watermarkValue = event.target.getAttribute('watermark');
                // Get Element with id watermark
                const watermarkElement = media.querySelector('#watermark');
                // Check Value
                if(watermarkValue === 'false'){
                    // Add attribute disabled to all element with class watermark,watermark-text,watermark-image inside divWatermark
                    disableEl();
                }else{
                    // First Disable all
                    disableEl();
                    // Check If watermarkValue == text or image
                    if(watermarkValue === 'text'){
                        // Remove attribute disabled to all element with class watermark,watermark-text inside divWatermark
                        enableEl('.watermark-text');
                    }else if(watermarkValue === 'image'){
                        // Remove attribute disabled to all element with class watermark,watermark-image inside divWatermark
                        enableEl('.watermark-image');
                    }else{
                        // Add attribute disabled to all element with class watermark,watermark-text,watermark-image inside divWatermark
                        disableEl();
                    }
                }
            });
        });

        // Disable
        const disableEl = (classNames = '.watermark-text,.watermark-image') => {
            // Add attribute disabled to all element with class inside divWatermark
            divWatermark.querySelectorAll(`.watermark,${classNames}`).forEach((element) => {
                element.setAttribute('disabled', 'disabled');
            });
        }

        // Enable
        const enableEl = (classNames) => {
            // Remove attribute disabled to all element with class  inside divWatermark
            divWatermark.querySelectorAll(`.watermark,${classNames}`).forEach((element) => {
                element.removeAttribute('disabled');
            });
        }
    }

}

// Reading
const reading = document.querySelector('#sett-reading');
if(reading){
    // Homepage . vrm-sett-homepage
    const divHomepage = reading.querySelector('.vrm-sett-homepage');

    if(divHomepage){
        // Find radio button with name homepage
        const homepage = divHomepage.querySelectorAll('input[name="homepage"]');

        // Add EventListener to radio button
        homepage.forEach((item) => {
            item.addEventListener('change', (event) => {
                // Get value of attribute homepage
                const homepageValue = event.target.getAttribute('homepage');

                // Check Value
                if(homepageValue === 'blog'){
                    // Add attribute disabled to all element with class homepage-static inside divHomepage
                    disableEl();
                }else{
                    // First Disable all
                    disableEl();
                    // Check If homepageValue == text or image
                    if(homepageValue === 'static'){
                        // Remove attribute disabled to all element with class homepage-static inside divHomepage
                        enableEl();
                    }else{
                        // Add attribute disabled to all element with class homepage-static inside divHomepage
                        disableEl();
                    }
                }
            });
        });

        // Disable
        const disableEl = () => {
            // Add attribute disabled to all element with class inside divHomepage
            divHomepage.querySelectorAll('.homepage-static').forEach((element) => {
                element.setAttribute('disabled', 'disabled');
            });
        }

        // Enable
        const enableEl = () => {
            // Remove attribute disabled to all element with class  inside divHomepage
            divHomepage.querySelectorAll('.homepage-static').forEach((element) => {
                element.removeAttribute('disabled');
            });
        }
    }

    // Show . vrm-sett-show
    const divShow = reading.querySelector('.vrm-sett-show');

    if(divShow){
        // Find radio button with name summary
        const summary = divShow.querySelectorAll('input[name="summary"]');

        // Add EventListener to radio button
        summary.forEach((item) => {
            item.addEventListener('change', (event) => {
                // Get value of attribute show
                const summaryValue = event.target.getAttribute('summary');
                // Find Input Text Element with class .excerpt-limit
                const excerptLimit = divShow.querySelector('.excerpt-limit');

                // Check Value
                if(summaryValue === 'limit'){
                    // Enable excerpt-limit
                    excerptLimit.removeAttribute('disabled');
                }else{
                    // Diable excerpt-limit
                    excerptLimit.setAttribute('disabled', 'disabled');
                }
            });
        });
    }
}

// Mail
const mail = document.querySelector('#sett-mail');
if(mail){
    // Protocol . vrm-sett-protocol
    const divProtocol = mail.querySelector('.vrm-sett-protocol');

    if(divProtocol){
        // Find radio button with name protocol
        const protocol = divProtocol.querySelectorAll('input[name="protocol"]');
            
        // Add EventListener to radio button
        protocol.forEach((item) => {
            item.addEventListener('change', (event) => {
                // Get value of attribute protocol
                const protocolValue = event.target.getAttribute('protocol');
                // Get SMTP .vrm-sett-smtp
                const divSmtp = mail.querySelector('.vrm-sett-smtp');

                // Check Value
                if(protocolValue === 'smtp'){
                    // Find all element with class smtp
                    divSmtp.querySelectorAll('.smtp').forEach((element) => {
                        // Remove attribute disabled
                        element.removeAttribute('disabled');
                    });
                }else{
                    // Find all element with class smtp
                    divSmtp.querySelectorAll('.smtp').forEach((element) => {
                        // Add attribute disabled
                        element.setAttribute('disabled', 'disabled');
                    });
                }
            });
        });
    }

    // Default . vrm-sett-default
    const divDefault = mail.querySelector('.vrm-sett-default');

    if(divDefault){
        // Find checkbox with name default
        const defaultCheckbox = divDefault.querySelector('input[name="default"]');

        // Add EventListener to checkbox
        defaultCheckbox.addEventListener('change', (event) => {

            // If is checked
            if(event.target.checked){
                // Find all element with class default
                divDefault.querySelectorAll('input.default').forEach((element) => {
                    // Add attribute disabled
                    element.setAttribute('disabled', 'disabled');
                });
            }else{
                // Find all element with class default
                divDefault.querySelectorAll('input.default').forEach((element) => {
                    // Remove attribute disabled
                    element.removeAttribute('disabled');
                });
            }
        });
    }
}

// Visibility
const visibility = document.querySelector('#sett-visibility');
if(visibility){
    // visibility . vrm-sett-view
    const divView= visibility.querySelector('.vrm-sett-view');

    if(divView){
        // Find radio button with name view
        const view = divView.querySelectorAll('input[name="view"]');

        // Add EventListener to radio button
        view.forEach((item) => {
            item.addEventListener('change', (event) => {
                // Get value of attribute view
                const viewValue = event.target.getAttribute('view');
                // Find input with class .password
                const password = divView.querySelector('.password');

                // Check Value
                if(viewValue === 'password'){
                    // Remove attribute disabled
                    password.removeAttribute('disabled');
                }else{
                    // Add attribute disabled
                    password.setAttribute('disabled', 'disabled');
                }
            });
        });
    }
}