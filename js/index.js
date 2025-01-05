function get_register() {
    document.getElementById('registartion').style.display = 'flex';
   // alert('hello');
}
function go_back() {
    document.getElementById('registartion').style.display = 'none';
   // alert('hello');
}




function isMobileDevice() {
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;

    // Check for common mobile device identifiers
    if (/android/i.test(userAgent)) {
        return true; // Android device
    }

    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        return true; // iOS device
    }

    return false; // Not a mobile device
}

if (isMobileDevice()) {
    console.log("This is a mobile device.");

    document.getElementById('qrCode').style.display = 'none';
    document.getElementById('qr_write').style.display = 'none';

    document.getElementById('payment_button').style.display = 'block';
} else {
    console.log("This is not a mobile device.");

    document.getElementById('qrCode').style.display = 'block';
    document.getElementById('qr_write').style.display = 'block';

    document.getElementById('payment_button').style.display = 'none';
}

