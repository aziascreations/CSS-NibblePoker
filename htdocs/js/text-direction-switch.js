const eTextDirectionSwitches = document.querySelectorAll(".text-direction-switch");
const eTextDirectionTargets = document.querySelectorAll(".text-direction-target");

document.addEventListener("DOMContentLoaded", () => {
    eTextDirectionSwitches.forEach(eSwitch => {
        eSwitch.onclick = function() {
            eTextDirectionTargets.forEach(eTarget => {
                if(eTarget.style.direction === "rtl") {
                    eTarget.style.direction = 'ltr';
                } else {
                    eTarget.style.direction = 'rtl';
                }
            });
        };
    });
});
