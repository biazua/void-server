INSERT INTO users (role, email, password, credits, earnings, name, country, language, theme_color, providers, alertsound, suspended, timezone, formatting, partner, confirmed) VALUES (1, 'admin@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 0, 'Administrator', 'US', 1, 'light', 0, 1, 0, 'America/New_York', 0, 1, 1);
UPDATE settings SET value = "Zender" WHERE name = "site_name";
UPDATE settings SET value = "Marketing Platform" WHERE name = "site_desc";
UPDATE settings SET value = "bypass-auto" WHERE name = "purchase_code";
UPDATE settings SET value = "https" WHERE name = "protocol";
