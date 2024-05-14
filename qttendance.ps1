# Print Introductory Text
Write-Host "Qttendance: Attendance Monitoring System with QR Code Scanner"
Write-Host "An free and open-source solution for monitoring attendance for organizations"
Write-Host "____________________________________________________________________________"
Write-Host "Github: RuralNative | Developing Solutions One Line at a Time"
Start-Sleep -Seconds 2

# Start XAMPP Control Panel
Start-Process "C:\xampp\xampp-control.exe"
Write-Host "DO NOT CLOSE | XAMPP Control Starting"
Start-Sleep -Seconds 2

# Start necessary modules (Apache and MySQL)
Start-Process "C:\xampp\apache_start.bat" -NoNewWindow
Start-Process "C:\xampp\mysql_start.bat" -NoNewWindow

# Wait for Apache and MySQL to start
Start-Sleep -Seconds 3
exit

# Open a new browser window and navigate to localhost/qttendance
Start-Process "C:\Program Files (x86)\Microsoft\Edge\Application\msedge.exe" "http://localhost/qttendance"