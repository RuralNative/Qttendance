# Print Introductory Text
Write-Host "Qttendance: Attendance Monitoring System with QR Code Scanner"
Write-Host "An free and open-source solution for monitoring attendance for organizations"
Write-Host "----------------------------------------------------------------------------"
Write-Host "Github: RuralNative | Developing Solutions One Line at a Time"
Start-Sleep -Seconds 5

# Start XAMPP Control Panel
Start-Process "C:\xampp\xampp-control.exe"
Write-Host "DO NOT CLOSE | XAMPP Control Starting"
Write-Host "During startup, several text scripts will show on-screen."
Write-Host "----------------------------------------------------------------------------"
Start-Sleep -Seconds 5

# Start necessary modules (Apache and MySQL)
Start-Process "C:\xampp\apache_start.bat" -NoNewWindow
Start-Process "C:\xampp\mysql_start.bat" -NoNewWindow

# Wait for Apache and MySQL to start
Write-Host "----------------------------------------------------------------------------"
Start-Sleep -Seconds 5

# Open a new browser window and navigate to localhost/qttendance
Start-Process "C:\Program Files (x86)\Microsoft\Edge\Application\msedge.exe" "http://localhost/qttendance"
Write-Host "Qttendance Successfully Opened."
Write-Host "Current window will close after 5 seconds. If none happens, you may now SAFELY CLOSE this window"

# Attempt to close a PowerShell window
Start-Sleep -Seconds 5
$process = Get-Process -Name powershell
if ($process) {
    $process.CloseMainWindow()
    Write-Host "Attempted to close PowerShell window"
} else {
    Write-Host "No PowerShell windows found."
}