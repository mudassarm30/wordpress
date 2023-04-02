class Slider {

    constructor() {
        let slideCounter = 1;

        setInterval(function () {
            let radioId = 'radio' + slideCounter;
            document.getElementById(radioId).checked = true;
            slideCounter++;
            if (slideCounter > 3) {
                slideCounter = 1;
            }
        }, 3000);
    }
}

export default Slider