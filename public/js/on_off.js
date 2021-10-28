function OnOff(lol) {
    if (lol.value == "OFF") {
        lol.value = "ON";
        let obj = document.getElementById('canvas');
        obj.id = 'canvas';
        navigator.mediaDevices.getUserMedia({ video: false })

    } else {
        lol.value = "OFF";
        let obj = document.getElementById('canvas-off');
        obj.id = 'canvas';

    }
}