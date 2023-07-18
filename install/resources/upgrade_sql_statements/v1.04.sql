INSERT INTO site_config
VALUES ('42', 'email_method', 'php', 'The method for sending emails via the script.', '[\"php\",\"smtp\"]', 'select',
        'Email Settings');
INSERT INTO site_config
VALUES ('43', 'email_smtp_host', 'mail.yoursite.com', 'Your SMTP host if you\'ve selected SMTP email method. (leave blank is email_method = php)', '', 'string', 'Email Settings');
INSERT INTO site_config VALUES ('44', 'email_smtp_port', '25', 'Your SMTP port if you\'ve selected SMTP email method. (Normally 25)',
        '', 'integer', 'Email Settings');
INSERT INTO site_config
VALUES ('45', 'email_smtp_requires_auth', 'no', 'Whether your SMTP server requires authentication.', '[\"yes\",\"no\"]',
        'select', 'Email Settings');
INSERT INTO site_config
VALUES ('46', 'email_smtp_auth_username', '', 'Your SMTP username if SMTP auth is required.', '', 'string',
        'Email Settings');
INSERT INTO site_config
VALUES ('47', 'email_smtp_auth_password', '', 'Your SMTP password if SMTP auth is required.', '', 'string',
        'Email Settings');