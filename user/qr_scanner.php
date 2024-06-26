<!-- HTML5 - QRCODE API -->
<script src="global/scripts/html5-qrcode.js"></script>

<div id="qrModal">
    <div class="qr-scanner-body">
        <!-- Div to show the QR code scanner -->
        <div id="qr-reader" style="width:100%"></div>
        <div id="qr-reader-results"></div>
    </div>
</div>

<!-- JS Script for QR Input Handling -->
<script>
var html5QrcodeScanner = null;
var isScannerActive = true;
var lastResult = null;

document.addEventListener("DOMContentLoaded", function() {
  var resultContainer = document.getElementById('qr-reader-results');
  var countResults = 0;

  function onScanSuccess(decodedText, decodedResult) {
    if (isScannerActive && decodedText !== lastResult) {
      ++countResults;
      lastResult = decodedText;

      // Fill the form with the scanned data.
      document.getElementById('student_id').value = decodedText;
      console.log(`Scan result DECODED TEXT IF LOOP ${decodedText}`, decodedResult);

      // Deactivate the scanner for 1000 seconds
      setTimeout(function() {
        lastResult = null; // Reset lastResult after the delay
      }, 1000000);

      // Trigger form submission
      document.getElementById('submit_button').click();
      document.getElementById('student_id').value = 'Input Student ID';
    }
  }

    // Initialize the scanner when the DOM is ready
    if (html5QrcodeScanner === null) {
        html5QrcodeScanner = new Html5QrcodeScanner("qr-reader", { fps: 32, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    }
})
</script>