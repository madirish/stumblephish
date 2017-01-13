# Stumblephish

Stumblephish is a customizable phishing education campaign framework.  Stumblephish is designed to enable staff to run internal phishing campaigns as part of phishing awareness and education intiatives.  Rather than penetration testing focused to harvest credentials or deliver exploits, Stumblephish is designed to track the effectiveness of phishing against an organization and specific target groups within an organization.

Features include:

* Create time bounded campaigns
* Template based e-mail
* Per recipient per campaign tokens to disguise information about targets
* Tracking of click throughs and browser details of victims
* Management interface for metrics and reporting
* Target grouping for easy campaign management and repeatable testing
* Template based education material for targets who fail exercises

## Components

Stumblephish includes three main components:

1. Mailer - this piece runs on a schedule, formatting and delivering e-mails for a campaign
2. Phishing Site - this piece presents the victims who click through links with template based sites that track metrics about users from time of click to user agents and can even present login forms and educational material for targets who submit credentials.  This component also supports hosting of web bugs to track e-mails.
3. Web Based Admin Interface - this component allows admins to easy create and manage target lists, prepare campaigns, upload templates, and view and track results of campaigns and export PDF and CSV reports.
