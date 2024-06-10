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

### Index Script [ [index.php](/index.php) ]

The main entry point for the User View. It contains the necessary code to display the UI visible to the system users, especially the Log-in Form and its complementary QR Code Scanner. It uses the different components of the User View located within the [Components](/components/) directory to achieve its role, relegating the logic of the View to them.

### Header Script [ [header.php](/user/header.php) ]

The Header script contains the default content for the header tag of the Index script representing the metadata of the script - such as its character encoding, styling, and importation of necessary CSS/JS scripts. It utilizes the [Scripts](#dependencies-script) file for the importation of necessary JS scripts.

### Dependencies Script

### Database Connection Script

### Time Zone Script

### QR Scanner Script

### Attendance Script