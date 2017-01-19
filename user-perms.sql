-- -----------------------------------------------------
-- Create user accounts
-- -----------------------------------------------------

CREATE USER 'sp_admin'@'localhost' IDENTIFIED BY 'change_stumblephish_password';
CREATE USER 'sp_mailer'@'localhost' IDENTIFIED BY 'change_stumblephish_password';
CREATE USER 'sp_website'@'localhost' IDENTIFIED BY 'change_stumblephish_password';
CREATE USER 'sp_reportadmin'@'localhost' IDENTIFIED BY 'change_stumblephish_password';

-- Superadmin/developer account
GRANT ALL ON stumblephish.* TO 'sp_admin'@'localhost';
-- Mailer account
GRANT SELECT ON stumblephish.campaign TO 'sp_mailer'@'localhost';
GRANT SELECT ON stumblephish.campaign_x_groups TO 'sp_mailer'@'localhost';
GRANT SELECT ON stumblephish.groups TO 'sp_mailer'@'localhost';
GRANT SELECT ON stumblephish.target_x_groups TO 'sp_mailer'@'localhost';
GRANT SELECT ON stumblephish.target TO 'sp_mailer'@'localhost';
GRANT SELECT ON stumblephish.email_template TO 'sp_mailer'@'localhost';
GRANT SELECT ON stumblephish.target TO 'sp_mailer'@'localhost';
GRANT SELECT,INSERT ON stumblephish.token TO 'sp_mailer'@'localhost';
GRANT INSERT ON stumblephish.logs TO 'sp_mailer'@'localhost';
GRANT INSERT ON stumblephish.mailer TO 'sp_mailer'@'localhost';
-- Website front end account
GRANT SELECT ON stumblephish.web_template TO 'sp_website'@'localhost';
GRANT INSERT ON stumblephish.logs TO 'sp_website'@'localhost';
GRANT INSERT ON stumblephish.bite TO 'sp_website'@'localhost';
GRANT SELECT ON stumblephish.token TO 'sp_website'@'localhost';
-- Administrative interface account
GRANT SELECT,INSERT,UPDATE,DELETE ON stumblephish.campaign TO 'sp_reportadmin'@'localhost';
GRANT SELECT,INSERT,UPDATE,DELETE ON stumblephish.campaign_x_groups TO 'sp_reportadmin'@'localhost';
GRANT SELECT,INSERT,UPDATE,DELETE ON stumblephish.groups TO 'sp_reportadmin'@'localhost';
GRANT SELECT,INSERT,UPDATE,DELETE ON stumblephish.target_x_groups TO 'sp_reportadmin'@'localhost';
GRANT SELECT,INSERT,UPDATE,DELETE ON stumblephish.target TO 'sp_reportadmin'@'localhost';
GRANT SELECT,INSERT,UPDATE,DELETE ON stumblephish.email_template TO 'sp_reportadmin'@'localhost';
GRANT SELECT,INSERT,UPDATE,DELETE ON stumblephish.web_template TO 'sp_reportadmin'@'localhost';
GRANT SELECT,INSERT,UPDATE,DELETE ON stumblephish.target TO 'sp_reportadmin'@'localhost';
GRANT SELECT stumblephish.token TO 'sp_reportadmin'@'localhost';
GRANT SELECT ON stumblephish.bite TO 'sp_reportadmin'@'localhost';
GRANT SELECT,INSERT ON stumblephish.logs TO 'sp_reportadmin'@'localhost';
GRANT SELECT ON stumblephish.mailer TO 'sp_reportadmin'@'localhost';
