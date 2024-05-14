# Start XAMPP Control Panel
Start-Process "C:\xampp\xampp-control.exe"

# Wait for Apache and MySQL to start
Start-Sleep -Seconds 10

# Open a new browser window and navigate to localhost/qttendance
Start-Process "C:\Program Files\Google\Chrome\Application\chrome.exe" "http://localhost/qttendance"