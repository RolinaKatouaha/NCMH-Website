# NCMH-Website

Project Overview:
   This project develops a comprehensive web platform tailored for the National Center for Mental Health (NCMH). The website is designed to enable the NCMH leaders and the commission presidents to monitor and manage the achievements of mental health promotion groups at universities. It features two main dashboards: one for the groups presidents and another for the Initiative Leader, each with specialized functionalities tailored to their roles.

Dashboards and Features:
1. Initiative Leader Dashboard:

- Home: Redirects to NCMH home page.
- Results: Located in multiple PHP scripts (drResultsOld.php - all_Univerity.php - centerForAll.php export.php - export2.php - export3.php - getMonthly.php - fetch.php), this pages display results of reports submitted by the commission president. Features include downloading results as Excel files, accessing monthly reports, and archiving. Charts illustrating bi-yearly results and specific university data are also available.
- Events: Managed through drMeetingF.php, update_event.php, insert_event.php, delete_events.php, fetch_events.php, this section allows monitoring and managing events added by universities, including adding new events and deleting existing ones.
- Evidence: Through drP5.php, drP5.js, upload2.php, users can view and upload evidence related to the mental health initiatives.
- Group Action Plan: drhomepage.php hosts the annual framework of the action plan for mental health promotion groups across Saudi universities.

2. Commission President Dashboard:

     For other users, the platform offers six key pages:

- Home: Similar to the home page of the  initiative leader dashboard.
- Reports: Users fill out forms detailing achievements (scripts include orgReports.php, Report.js, submit.php).
- Letters: For uploading necessary correspondence (orgLetters.php, upload.php).
- Events: Similar functionality as the initiative leader dashboard for managing events but without deleting and updating (orgMeetingF.php, insert_event.php, fetch_events.php).
- Evidence: Users can view evidence (orgP5.php, orgP5.js, display.php).
- Student Care Center: Dedicated to information about the university's student care center and monthly reporting (orgNew.php, studentcare.js, newsubmit.php).

General Pages:

- Database Connection: Managed by connect.php.
- User Authentication: Handled through login.php and checkadmin.php, directing users to appropriate dashboard based on their role.
- Database Schema: Provided in orgtable.sql.

Limitations:

- No email notifications upon adding new events.
- Charts only display combined data for two years, with no option for isolating single-year data.

Conclusion:

     This platform is pivotal for efficiently tracking and supporting mental health initiatives at the university level, offering robust tools for data management and reporting.

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
*** To ensure proper functionality of the website, please create a folder named uploads in the same directory as the project files. This is necessary for managing file uploads within the platform.

*** Ensure to replace placeholders like # with actual URLs or relevant data where necessary. This introduction now serves both as a detailed guide for new users and a solid overview for potential contributors to your project.
