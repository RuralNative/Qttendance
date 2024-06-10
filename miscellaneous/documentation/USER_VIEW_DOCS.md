# Attendance View Component

This documentation will explain the specific architectural layout and functions of the User View component - the main interface shown for use by visitors and staff for attendance monitoring. Refer to the [Index](/index.php) file for codebase of the entry point of this layout.

## Essential Functions

The User View has the following features within the interface:

- **Generic Log-in Form** for entry of visitor's designated ID (default ID length is 11 characters).
- **Built-in QR Scanner** for convenient use of QR Codes for visitor's log-in.

## Components

This section explains in a clear manner the different components of the User View, and how each of these components work together to achieve the [Essential Functions](#essential-functions) listed above.

### Overview

The overall structure of the entire User View components is visually structured in the form as represented below: 

![Structural Overview of User](/images/flowcharts/user_overview.drawio.svg)

The Index file is responsible for the overall utilization of the different components of the User View to display the UI and ensure its functions are achieved completely.

The Header file includes the Scripts file as its dependency, QR-Scanner works alone, and the Attendance file includes Connection and Timezone files as its dependencies.

### Index Script [[index.php](/index.php)]

The main entry point for the User View. It contains the necessary code to display the UI visible to the system users, especially the Log-in Form and its complementary QR Code Scanner. It uses the different components of the User View located within the [Components](/components/) directory to achieve its role, relegating the logic of the View to them.

### Header Script [[header.php](/user/header.php)]

The Header script contains the default content for the header tag of the Index script representing the metadata of the script - such as its character encoding, styling, and importation of necessary CSS/JS scripts. It utilizes the [Scripts](#dependencies-script) file for the importation of necessary JS scripts.

### Dependencies Script [[scripts.php](/user/scripts.php)]

The Dependencies script contains the necessary JS scripts to import for the proper functioning of the UI layout and logic of the user view.

### Database Connection Script [[conn.php](/user/conn.php)]

The Database Connection script contains the necessary PHP codebase to initialize the proper connection between that of the website and to the server, specifically its database.

### Time Zone Script

The Time Zone script contains the necessary codebase that serves as the basis of the system to determine the proper time zone and time used for the logic of both the user and admin - facing components.

### QR Scanner Script [[qr_scanner.php](/user/qr_scanner.php)]

The QR Scanner script contains the necessary codebase responsible for the setup of the QR scanner component of the system, specifically its UI and its logic.

### Attendance Script [[attendance.php](/user/attendance.php)]

The Attendance script contains the codebase responsible for the logic behind the proper functioning of the in/out attendance functionalities of the user-view component, relying on proper database connection and time zone to properly function with precise efficiency.