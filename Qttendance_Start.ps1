# Print Introductory Text
Write-Host "Qttendance: Attendance Monitoring System with QR Code Scanner"
Write-Host "A free and open-source solution for monitoring attendance for organizations"
Write-Host "Github: RuralNative | Developing Solutions One Line at a Time"
Write-Host "----------------------------------------------------------------------------"
Start-Sleep -Seconds 3

# Start XAMPP Control Panel
Write-Host "DO NOT CLOSE OR PRESS ANY KEY | XAMPP Server/Module Starting"
Write-Host "During startup, several text scripts will show on-screen."
Write-Host "----------------------------------------------------------------------------"
Start-Sleep -Seconds 3

# Start necessary modules (Apache and MySQL)
Start-Process "C:\xampp\apache_stop.bat" -NoNewWindow
Start-Process "C:\xampp\apache_start.bat" -NoNewWindow
Start-Process "C:\xampp\mysql_start.bat" -NoNewWindow

# Wait for Apache and MySQL to start
Start-Sleep -Seconds 10
Write-Host "----------------------------------------------------------------------------"

# Open a new browser window and navigate to localhost/qttendance
Start-Process "C:\Program Files (x86)\Microsoft\Edge\Application\msedge.exe" "http://localhost/qttendance"
Write-Host "Qttendance Command Executed."
Write-Host "If web application and/or its operations failed to start or function, contact IT Support."
Write-Host "Current window will close after 30 seconds. If none happens, you may now SAFELY CLOSE this window."

# Attempt to close a PowerShell window
Start-Sleep -Seconds 30
$process = Get-Process -Name powershell
$process.CloseMainWindow()